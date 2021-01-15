<?php

namespace Inc\Base;

use \Inc\Controller\BaseController;

class ShortCode extends BaseController
{
    public function register()
    {
        add_shortcode("test_$this->plugin_name_short_code", array($this, 'setShortCode'));
    }

    public function setShortCode($atts)
    {
        ob_start();
        // Things that you want to do. 
        // return "<h1>H </h1>";
        $a = shortcode_atts(array(
            'class' => '',
            'id' => '',
        ), $atts);
        // return $a['class'];
?>
        <button type="button" class="<?php echo $a['class']; ?>">Left</button>
<?php
        return ob_get_clean();
    }
}
