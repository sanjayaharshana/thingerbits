<?php
class WPBakeryShortCode_Av_Pricing extends WPBakeryShortCodesContainer{

}
/*******************************************/
class WPBakeryShortCode_Av_Column extends WPBakeryShortCode {
   
}
/**********************************************************/
vc_map( array(
	"name" => __("Thingerbits Pricing Table", "Thingerbits"),
	"show_settings_on_create" => true,
	'is_container' => true,
	"content_element" => true,
	"as_parent" => array('only' => 'av_column'),
	"base" => "av_pricing",
	"class" => "",
	"icon" => "icon-wpb-my_pricing",
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
		 "type" => "textfield",
		  "class" => "",
		  "heading" => __("Title", "Thingerbits"),
		  "param_name" => "title"
		 ),
		array(
		 "type" => "textfield",
		  "class" => "",
		  "heading" => __("Currency", "Thingerbits"),
		  "param_name" => "currency"
		 ),
		array(
		 "type" => "textfield",
		  "class" => "",
		  "heading" => __("Price", "Thingerbits"),
		  "param_name" => "price"
		 ),
		
		array(
         "type" => "textfield",
         "class" => "",
         "heading" => __("Button Text", "Thingerbits"),
         "param_name" => "fbutton",
         "description" => __(" Write button text.", "Thingerbits")
      ),
		array(
         "type" => "textfield",    
         "class" => "",
         "heading" => __("Button Link", "Thingerbits"),
         "param_name" => "fbutlink",
         "description" => __(" Link to.", "Thingerbits")
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
	'name' => __( 'Pricing Column', 'Thingerbits' ),
	'base' => 'av_column',
	"icon" => "icon-wpb-ui-accordion",
	"as_child" => array('only' => 'av_pricing'),
	'content_element' => true,
	'params' => array(
		array(
		 "type" => "textarea_html",
		 "holder"=>"div",
		  "heading" => __("Column Content", "Thingerbits"),
		  "param_name" => "content"
		 ),		
		)
	))
?>