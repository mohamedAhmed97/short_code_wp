<?php

namespace Inc\Controller;

class BaseController
{
    protected $plugin_path;
    protected $plugin_assets_path;
    protected $plugin_name;
    protected $plugin_name_short_code;
    public function __construct()
    {
        $this->plugin_name = plugin_basename(dirname(__FILE__, 3)."/object_plugin.php");
        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_name_short_code=plugin_basename(dirname(__FILE__,3));
        $this->plugin_assets_path=plugins_url()."/objects_plugin";
    }
}
