<?php
//load settings
require("app/settings.php");

//Take the initial PATH.
$url = $_SERVER['REQUEST_URI'];
$url = str_replace($PATH,"",$url);

#? QUICK fix
$new_url = explode("?", $url);
$url = $new_url[0];

//Load our base API
//APC cache
require("core/api.php");

//loads our controller
$application = new Application($url);
$application->search_controller();
