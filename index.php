<?php

include_once "App/controller.php";
$arr_url = explode('?', $_SERVER['REQUEST_URI'])[0];
$url_segments = explode('/', $arr_url);
$controller = $url_segments[1] ?: "index";
$action = isset($url_segments[2])? $url_segments[2]: "index";
$arr_params = array_slice($url_segments, 3);
include_once sprintf("Controllers/%s.php", $controller);
$controller = new $controller();
$controller->$action(...$arr_params);
