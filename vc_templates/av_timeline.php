<?php
class WPBakeryShortCode_Timeline extends WPBakeryShortCodesContainer{

}
/*******************************************/
class WPBakeryShortCode_Timeitem extends WPBakeryShortCode {

}
/**********************************************************/
vc_map( array(
	"name" => __("Thingerbits Timeline", "Thingerbits"),
	"show_settings_on_create" => true,
	'is_container' => true,
	"content_element" => true,
	"as_parent" => array('only' => 'timeitem'),
	"base" => "timeline",
	"class" => "",
	"icon" => "icon-wpb-my_timeline",
	'admin_enqueue_css' => array(get_template_directory_uri() . '/vc_templates/shortcodes.css'),
	"category" => __('Content', "Thingerbits"),
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
         "heading" => __("Type", "Thingerbits"),
         "param_name" => "type",
         "value"=>array("Horizontal"=>"horizontal", "Vertical"=>"vertical")
      ),
        array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Extra class", "Thingerbits"),
         "param_name" => "class"
      ),
   ),
	"js_view" => 'VcColumnView'
) );
/**********************************************************/
vc_map( array(
	'name' => __( 'List Item', 'Thingerbits' ),
	'base' => 'timeitem',
	"icon" => "icon-wpb-ui-accordion",
	"as_child" => array('only' => 'timeline'),
	'content_element' => true,
	'params' => array(
		
		array(
		 "type" => "textfield",
		  "holder"=>'div',
		  "heading" => __("Title", "Thingerbits"),
		  "param_name" => "title"
		 ),
		
		
		array(
		 "type" => "textfield",
		  "class" => "",
		  "heading" => __("Date", "Thingerbits"),
		  "param_name" => "date"
		),
		 array(
         "type" => "dropdown",
         "class" => "",
         "heading" => __("Icon Family", "Thingerbits"),
         "param_name" => "family",
         "value"=>array("Font Awesome"=>"fa", "Ion icons"=>"ion", "Material Design"=>"md"),
		"description" => __('Only for <b>Vertical</b> type', "Thingerbits")
      ),
      array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Block icon", "Thingerbits"),
         "param_name" => "icon",
		  "description" => __('Only for <b>Vertical</b> type', "Thingerbits")
	 ),
		 array(
         "type" => "textarea_html",
         "class" => "",
         "heading" => __("Item Content", "Thingerbits"),
         "param_name" => "content"
      ),
		)
	))
?>