<?php

class WPBakeryShortCode_Testimonialgroup extends WPBakeryShortCodesContainer {


}
/****************************************************/

class WPBakeryShortCode_Testimonial extends WPBakeryShortCode {

}
vc_map( array(
    "name" => __("Thingerbits Testimonial", "Thingerbits"),
    "base" => "testimonialgroup",
    "as_parent" => array('only' => 'testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
   	'show_settings_on_create' 	=> true,
	'category'=> 'Content',
    "icon" => "icon-wpb-my_testimonial",
    'admin_enqueue_css' => array(get_template_directory_uri().'/vc_templates/shortcodes.css'),
	"content_element" => true,
	'is_container'=> true,
    "params" => array(
        array(
         "type" => "dropdown",
         "class" => "",
         "heading" => __("Animation", "Thingerbits"),
         "param_name" => "anim",
         "value" => array( "None"=>"", "bounce"=>"bounce", "flash"=>"flash", "pulse"=>"pulse", "shake"=>"shake", "swing"=>"swing", "tada"=>"tada", "wobble"=>"wobble", "bounceIn"=>"bounceIn", "bounceInDown"=>"bounceInDown", "bounceInLeft"=>"bounceInLeft", "bounceInRight"=>"bounceInRight", "bounceInUp"=>"bounceInUp", "bounceOut"=>"bounceOut", "bounceOutDown"=>"bounceOutDown", "bounceOutLeft"=>"bounceOutLeft", "bounceOutRight"=>"bounceOutRight", "bounceOutUp"=>"bounceOutUp", "fadeIn"=>"fadeIn", "fadeInDown"=>"fadeInDown", "fadeInDownBig"=>"fadeInDownBig", "fadeInLeft"=>"fadeInLeft", "fadeInLeftBig"=>"fadeInLeftBig", "fadeInRight"=>"fadeInRight", "fadeInRightBig"=>"fadeInRightBig", "fadeInUp"=>"fadeInUp", "fadeInUpBig"=>"fadeInUpBig", "fadeOut"=>"fadeOut", "fadeOutDown"=>"fadeOutDown", "fadeOutDownBig"=>"fadeOutDownBig", "fadeOutLeft"=>"fadeOutLeft", "fadeOutLeftBig"=>"fadeOutLeftBig", "fadeOutRight"=>"fadeOutRight", "fadeOutRightBig"=>"fadeOutRightBig", "fadeOutUp"=>"fadeOutUp", "fadeOutUpBig"=>"fadeOutUpBig", "flip"=>"flip", "flipInX"=>"flipInX", "flipInY"=>"flipInY", "flipOutX"=>"flipOutX", "flipOutY"=>"flipOutY", "lightSpeedIn"=>"lightSpeedIn", "lightSpeedOut"=>"lightSpeedOut", "rotateIn"=>"rotateIn", "rotateInDownLeft"=>"rotateInDownLeft", "rotateInDownRight"=>"rotateInDownRight", "rotateInUpLeft"=>"rotateInUpLeft", "rotateInUpRight"=>"rotateInUpRight", "rotateOut"=>"rotateOut", "rotateOutDownLeft"=>"rotateOutDownLeft", "rotateOutDownRight"=>"rotateOutDownRight", "rotateOutUpLeft"=>"rotateOutUpLeft", "rotateOutUpRight"=>"rotateOutUpRight",  "hinge"=>"hinge", "rollIn"=>"rollIn", "rollOut"=>"rollOut", "zoomIn"=>"zoomIn","zoomInDown"=>"zoomInDown", "zoomInLeft"=>"zoomInLeft","zoomInRight"=>"zoomInRight","zoomInUp"=>"zoomInUp","zoomOut"=>"zoomOut", "zoomOutLeft"=>"zoomOutLeft", "zoomOutRight"=>"zoomOutRight","zoomOutUp"=>"zoomOutUp"),
         "description" => __(" Animation.", "Thingerbits")
      ),
		
		array(
         "type" => "dropdown",
         "class" => "",
         "heading" => __("Pagination", "Thingerbits"),
         "param_name" => "pag",
         "value" => array("Yes"=>"true", "No"=>"false")
      ),
	  
		array(
         "type" => "dropdown",
         "class" => "",
         "heading" => __("Autoplay", "Thingerbits"),
         "param_name" => "auto",
         "value" => array("Yes"=>"true", "No"=>"false")
      ),
		array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Autoplay Interval", "Thingerbits"),
         "param_name" => "interval"
      ),
        array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Extra class", "Thingerbits"),
         "param_name" => "class",
         "description" => __(' Extra class name', "Thingerbits")
      ),
    ),
    "js_view" => 'VcColumnView'
) );

/************************************************/
vc_map( array(
	"name" => __("Thingerbits Testimonial Item", "Thingerbits"),
	"base" => "testimonial",
	"class" => "",
	"content_element" => true,
	"icon" => "icon-wpb-ui-accordion",
	"category" => __('Content', "Thingerbits"),
	"as_child" => array('only' => 'testimonialgroup'),
	"params" => array(
      array(
         "type" => "textfield",
		 'holder'=>'div',
         "class" => "",
         "heading" => __("Name", "Thingerbits"),
         "param_name" => "title"
      ),
      array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Position", "Thingerbits"),
         "param_name" => "position"
      ),
		array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Company", "Thingerbits"),
         "param_name" => "company"
      ),
       
       array(
         "type" => "attach_image",
         "class" => "",
         "heading" => __("Photo ", "Thingerbits"),
         "param_name" => "photo"
      ),
       array(
         "type" => "textarea",        
         "class" => "",
         "heading" => __("Testimonial text", "Thingerbits"),
         "param_name" => "content"
      ),
	 // 'js_view'=> 'VcColumnView'
   )
) );
/*********************************************/
?>