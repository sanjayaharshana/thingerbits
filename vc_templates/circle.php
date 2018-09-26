<?php
/********************* Circle Progress Bar **********************/


/**************************************************/
vc_map( array(
   "name" => __("Thingerbits Pie Chart", "Thingerbits"),
   "base" => "circle",
   "class" => "",
   "icon" => "icon-wpb-my_circle
       ",
   'admin_enqueue_css' => array(get_template_directory_uri().'/vc_templates/shortcodes.css'),
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
		"holder"=>"div",
         "class" => "",
         "heading" => __("Title", "Thingerbits"),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title.", "Thingerbits")
      ),
      
	   array(
         "type" => "dropdown",
         "class" => "",
         "heading" => __("Meter", "Thingerbits"),
         "param_name" => "meter",
         "value" => array("1%"=>"1","2%"=>"2","3%"=>"3","4%"=>"4","5%"=>"5","6%"=>"6","7%"=>"7","8%"=>"8","9%"=>"9","10%"=>"10","11%"=>"11","12%"=>"12","13%"=>"13",
			"14%"=>"14","15%"=>"15","16%"=>"16","17%"=>"17","18%"=>"18","19%"=>"19","20%"=>"20","21%"=>"21","22%"=>"22","23%"=>"23","24%"=>"24","25%"=>"25",
			"26%"=>"26","27%"=>"27","28%"=>"28","29%"=>"29","30%"=>"30","31%"=>"31","32%"=>"32","33%"=>"33","34%"=>"34","35%"=>"35","36%"=>"36","37%"=>"37",
			"38%"=>"38","39%"=>"39","40%"=>"40","41%"=>"41","42%"=>"42","43%"=>"43","44%"=>"44","45%"=>"45","46%"=>"46","47%"=>"47","48%"=>"48","49%"=>"49",
			"50%"=>"50","51%"=>"51","52%"=>"52","53%"=>"53","54%"=>"54","55%"=>"55","56%"=>"56","57%"=>"57","58%"=>"58","59%"=>"59","60%"=>"60","61%"=>"61",
			"62%"=>"62","63%"=>"63","64%"=>"64","65%"=>"65","66%"=>"66","67%"=>"67","68%"=>"68","69%"=>"69","70%"=>"70","71%"=>"71","72%"=>"72","73%"=>"73",
			"74%"=>"74","75%"=>"75","76%"=>"76","77%"=>"77","78%"=>"78","79%"=>"79","80%"=>"80","81%"=>"81","82%"=>"82","83%"=>"83","84%"=>"84","85%"=>"85",
			"86%"=>"86","87%"=>"87","88%"=>"88","89%"=>"89","90%"=>"90","91%"=>"91","92%"=>"92","93%"=>"93","94%"=>"94","95%"=>"95","96%"=>"96","97%"=>"97",
			"98%"=>"98","99%"=>"99","100%"=>"100"),
      ),
	   array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __("Pie bar color", "Thingerbits"),
            "param_name" => "piebarcolor",
            "value" => '#7c4dff'
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
?>