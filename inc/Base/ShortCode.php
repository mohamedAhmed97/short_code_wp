<?php

namespace Inc\Base;

use \Inc\Controller\BaseController;

class ShortCode extends BaseController
{
    public function register()
    {
        add_shortcode("inputs_$this->plugin_name_short_code", array($this, 'setInputShortCode'));
        add_shortcode("buttons_$this->plugin_name_short_code", array($this, 'setButtonShortCode'));
        add_shortcode("start_form_$this->plugin_name_short_code", array($this, 'setStartFormShortCode'));
        add_shortcode("end_form_$this->plugin_name_short_code", array($this, 'setEndFormShortCode'));
    }

    public function setInputShortCode($atts)
    {
        ob_start();
        // Things that you want to do. 
        $a = shortcode_atts(array(
            'type' => 'text',
            'placeholder' => '',
            'class' => '',
            'id' => '',
        ), $atts);
        require($this->plugin_path . "/templates/inputs.php");
        return ob_get_clean();
    }

    public function setButtonShortCode($atts)
    {
        ob_start();
        // Things that you want to do. 
        $a = shortcode_atts(array(
            'type' => 'submit',
            'value' => 'submit',
            'class' => '',
            'id' => '',
        ), $atts);
        require($this->plugin_path . "/templates/buttons.php");
        return ob_get_clean();
    }

    public function setStartFormShortCode($atts)
    {
        ob_start();
        // Things that you want to do. 
        $a = shortcode_atts(array(
            'method' => 'GET',
        ), $atts);
?>
        <form method="<?php echo $a['method']; ?>">
        <?php
        return ob_get_clean();
    }

    public function setEndFormShortCode()
    {
        ob_start();
        ?>
        </form>
<?php
        return ob_get_clean();
    }
}
