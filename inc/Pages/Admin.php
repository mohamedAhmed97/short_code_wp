<?php

namespace Inc\Pages;

use \Inc\Controller\BaseController;
use \Inc\API\SettingsApi;
use \Inc\Controller\TemplateController;
class Admin extends BaseController
{
    public $settings;
    public $template;
    public $page = array();
    public $sub_menu = array();
    public function __construct()
    {
        parent::__construct();
        $this->settings = new SettingsApi();
        $this->template=new TemplateController();
        $this->pages = array(
            [
                'page_title' => "objects_form",
                'menu_title' => "objects_form",
                'capability' => "manage_options",
                'menu_slug' => "object_form",
                'callable' => array($this, "pageTemplate"),
                'icon_url' => "dashicons-admin-home"
            ]
        );
        $this->sub_menu = array(
            [
                'parent_slug' => "object_form",
                'page_title' => "Custom post type",
                'menu_title' => "Shortcodes",
                'capability' => "manage_options",
                'menu_slug' => "object_form",
                'callback' =>  array($this->template, "objectsTemplate"),
            ],
           
        );
    }
    public function register()
    {
        $this->settings->addPages($this->pages)
            ->withSubpage('Dashboard')
            ->addSubPages($this->sub_menu)
            ->register();
    }

    public function pageTemplate()
    {
        require_once $this->plugin_path . "/templates/shortcode_table.php";
    }
    
}
