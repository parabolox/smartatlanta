<?php

require '../ini.php';
require '../lib/api.php';

$data = Api::get();

require('../templates/index.php');
