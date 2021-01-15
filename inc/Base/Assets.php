<?php

namespace Inc\Base;
use \Inc\Controller\BaseController;

class Assets extends BaseController
{
    public function register()
    {
        add_action("wp_enqueue_scripts",array($this,'addAsset'));
    }

    public function addAsset($links)
    {
        wp_register_style("bootstrap", $this->plugin_path . "/assets/css/bootstrap.min.css");
        wp_enqueue_style("bootstrap");
        
        wp_enqueue_script("bootstrap", $this->plugin_path . "/assets/js/bootstrap.min.js");
    }
}
