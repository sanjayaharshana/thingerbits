<?php
/*********************Divider************************/


/*************************************************/
vc_map( array(
   "name" => __("Thingerbits Divider", "Thingerbits"),
   "base" => "divider",
   "class" => "",
   "icon" => "icon-wpb-my_divider",
   'admin_enqueue_css' => array(get_template_directory_uri().'/vc_templates/shortcodes.css'),
   "category" => __('Content', "Thingerbits"),
   "params" => array(
        
       array(
         "type" => "dropdown",
         "class" => "",
         "heading" => __("Type", "Thingerbits"),
         "param_name" => "type",
         "value" => array("Blank Spacer"=>"blank-spacer", "Line"=>"line" ),
      ),
       array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Custom Size for Blank Spacer", "Thingerbits"),
         "param_name" => "customsize",
         "description" => __('In pixels', "Thingerbits")
      ),
       
       array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Extra class", "Thingerbits"),
         "param_name" => "class",
         "description" => __(' Extra class name', "Thingerbits")
      ),
   )
) );
/*********************************************/
?>