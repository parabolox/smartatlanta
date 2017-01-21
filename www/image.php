<?php

require '../ini.php';
require '../lib/api.php';

$id = isset($_GET['id'])?$_GET['id']:false;

$item = Api::get($id);

$blob = isset($item['blob'])&&$item['blob']?$item['blob']:'';

header("Content-Type: image/jpeg");

echo $item['blob'];
