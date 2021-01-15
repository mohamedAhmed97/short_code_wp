<?php

/**
 * author:mohamed ahmed
 * version:1.0.0
 * plugin Name:objects_inputs
 * description:add bootstrap inputs
 */


if (!defined('ABSPATH')) {
    die;
}
#check for vender/autoload
if (file_exists(dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once dirname(__FILE__) . "/vendor/autoload.php";
}
