<?php

/****************************Modal BOX****************/

vc_map( array(
   "name" => __("Thingerbits Modal box", "Thingerbits"),
   "base" => "reveal",
   "class" => "",
   "icon" => "icon-wpb-my_reveal",
   'admin_enqueue_css' => array(get_template_directory_uri().'/vc_templates/shortcodes.css'),
   "category" => __('Content', "Thingerbits"),
   "params" => array(
       array(
         "type" => "dropdown",
         
         "class" => "",
         "heading" => __("Type", "Thingerbits"),
         "param_name" => "type",
         "value" => array("Button"=>"button solid-button","Link Style"=>""),
         "description" => __("Choose button type", "Thingerbits")
      ),
       array(
         "type" => "dropdown",
         
         "class" => "",
         "heading" => __("Color", "Thingerbits"),
         "param_name" => "color",
         "value" => array("Purple"=>"purple", "White"=>"white",  "Dark"=>"dark", "Primary"=>"btn-primary", "Info"=>"btn-info", "Success"=>"btn-success","Warning"=>"btn-warning", "Danger"=>"btn-danger"),
         "description" => __("Choose button color.", "Thingerbits")
      ),
      array(
         "type" => "dropdown",
         
         "class" => "",
         "heading" => __("Size", "Thingerbits"),
         "param_name" => "size",
         "value" => array("Large"=>"btn-lg", "Default"=>"", "Small"=>"btn-sm","Very Small"=>"btn-xs"),
         "description" => __("Choose button size.", "Thingerbits")
      ),
      
      array(
         "type" => "textfield",
         "holder" =>'div',
         "class" => "",
         "heading" => __("Button Text", "Thingerbits"),
         "param_name" => "button"
      ),
      array(
         "type" => "textfield",
         
         "class" => "",
         "heading" => __("Box Title", "Thingerbits"),
         "param_name" => "revtitle"
      ),
	   
       array(
         "type" => "textarea_html",
         
         "class" => "",
         "heading" => __("Content", "Thingerbits"),
         "param_name" => "content",
         "description" => __(" Box content.", "Thingerbits")
      ),
       array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Extra class", "Thingerbits"),
         "param_name" => "class",
         "description" => __(' Extra class name', "Thingerbits")
      )
   )
) );

/************************************************/
?>