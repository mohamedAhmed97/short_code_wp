<?php

namespace Inc\Controller;
use Inc\Controller\BaseController;
class TemplateController extends BaseController
{

    public function objectsTemplate()
    {
        require_once $this->plugin_path . "/templates/shortcode_table.php";
    }

}
