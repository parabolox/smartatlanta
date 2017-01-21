<?php

require '../ini.php';
require '../lib/api.php';

$data = isset($_POST)&&$_POST?$_POST:false;

if (!$data)
{
    $categories = Api::categories();
    require('../templates/submit.php');
    die;
}

$data['id'] = time().'-'.uniqid();

$tmpFile = $_FILES['picture']['tmp_name'];

if ($tmpFile)
{
    $exif = exif_read_data($tmpFile);

    $lng = ''.getGps($exif["GPSLongitude"], $exif['GPSLongitudeRef']);
    $lat = ''.getGps($exif["GPSLatitude"], $exif['GPSLatitudeRef']);

    file_put_contents('images/'.$data['id'].'.jpeg',file_get_contents($tmpFile));

    $data['image'] = '/images/'.$data['id'].'.jpeg';

    if (!isset($data['lat']) || !$data['lat']) $data['lat'] = $lat;
    if (!isset($data['lng']) || !$data['lng'])$data['lng'] = $lng;
}

Api::add($data);

header('Location: /');

die();

function getGps($exifCoord, $hemi) {

    $degrees = count($exifCoord) > 0 ? gps2Num($exifCoord[0]) : 0;
    $minutes = count($exifCoord) > 1 ? gps2Num($exifCoord[1]) : 0;
    $seconds = count($exifCoord) > 2 ? gps2Num($exifCoord[2]) : 0;

    $flip = ($hemi == 'W' or $hemi == 'S') ? -1 : 1;

    return $flip * ($degrees + $minutes / 60 + $seconds / 3600);

}

function gps2Num($coordPart) {

    $parts = explode('/', $coordPart);

    if (count($parts) <= 0)
        return 0;

    if (count($parts) == 1)
        return $parts[0];

    return floatval($parts[0]) / floatval($parts[1]);
}
