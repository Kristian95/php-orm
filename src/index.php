<?php

require('Abstract/Entity.php');
require('Abstract/Model.php');

if (!function_exists('dd')) {
    function dd() {
        echo '<pre>';
        array_map(function($x) {var_dump($x);}, func_get_args());
        die;
    }
}

$model = new Model();

$model->create(['name' => 'Kris', 'profession' => 'teacher']);