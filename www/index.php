<?php

require '../ini.php';
require '../lib/api.php';

$list = Api::get();

///echo json_encode($list);

$categories = Api::dictionaries();
xo($categories);

$dummyRecord = array(
    'dateTimePosted' => time(),
    'severity'  => rand(1,10),
    'email' => time().'@gmail.com',
    'name'  => 'Josh',
    'phone' => time(),
    'lat' => '33.'.rand(100000,999999),
    'lng' => '-84.'.rand(100000,999999),
    'address' => '715 Peachtree Street Northeast, Atlanta, GA',
    'description' => 'Dead tree',
    'category' => 'Trees / Dead, Dying, Hazardous Trees',
    'image' => 'http://3.bp.blogspot.com/-bMf_r22jThI/UAb6XroA8OI/AAAAAAAAAP8/7UgGXR0_M9A/s1600/10-sheep-tree.jpg'
);

xo(Api::add($dummyRecord));
