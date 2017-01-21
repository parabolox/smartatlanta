<?php

require '../ini.php';
require '../lib/api.php';

$data = isset($_POST)&&$_POST?$_POST:false;

if (!$data)
{
    $categories = Api::categories();
    require('../temaplates/submit.html');
    die;
}

$data['id'] = time().'-'.uniqid();

if (isset($data['file']))
{
    $data['blob'] = base64_encode($data['file']);
    unset($data['file']);
    $data['image'] = '/image.php?id='.$data['id'];
}

Api::add($data);

header('Location: /');

die();
