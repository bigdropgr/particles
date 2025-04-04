<?php
		
if(function_exists('vc_add_param')){
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"admin_label" => true,
			"heading" => esc_html__("Background Style", "tba-particles"),
			"param_name" => "pb_type",
			"value" => array(
				esc_html__("Default","tba-particles") => "",
				esc_html__("ParticleGround Matrix Effect","tba-particles") => "matrix",
				esc_html__("Particle Js","tba-particles") => "pjs",
				esc_html__("Rainy Day Effect","rc_pb") => "rain",
				esc_html__("Three Js Birds","tba-particles") => "birds",
				esc_html__("Particle Swarm Effect","tba-particles") => "swarm",
				esc_html__("ALIEN - Deviation of microcosm","tba-particles") => "alian",
				esc_html__("Three Js Particles Wave","tba-particles") => "waves",
				esc_html__("Ambient Background","tba-particles") => "ambient",
				esc_html__("Snow Particles Effect","tba-particles") => "snow",
			),
			"description" => esc_html__("Select the kind of background would you like to set for this row.","tba-particles"),
			"group" => esc_html__("Particles"),
		)
	);
	/* Particle Js Effect */
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Particle Shape", "tba-particles"),
			"param_name" => "pjs_shape",
			"value" => array(
				esc_html__("Circle","tba-particles") => "circle",
				esc_html__("Edge","tba-particles") => "edge",
				esc_html__("Triangle","tba-particles") => "triangle",
				esc_html__("Polygon","tba-particles") => "polygon",
				esc_html__("Star","tba-particles") => "star",
				esc_html__("Image","tba-particles") => "image",
				),
			"std" => 'circle',
			'save_always' => true,
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "attach_image",
			"class" => "",
			"heading" => esc_html__("Particle Image", "tba-particles"),
			"param_name" => "pjs_img",
			"dependency" => array("element" => "pjs_shape", "value" => array("image")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Particle color", "tba-particles"),
			"param_name" => "pjs_color",
			"dependency" => array("element" => "pjs_shape","value" => array("circle", "edge", "triangle", "polygon", "star")),
			"value" => "#ffffff",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particle Stroke", "tba-particles"),
			"param_name" => "pjs_stroke",
			"dependency" => array("element" => "pjs_shape","value" => array("circle", "edge", "triangle", "polygon", "star")),
			"value" => 0,
			"std" => 0,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("stroke color", "tba-particles"),
			"param_name" => "pjs_scolor",
			"dependency" => array("element" => "pjs_shape","value" => array("circle", "edge", "triangle", "polygon", "star")),
			"value" => "#ffffff",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particle Polygon Sides", "tba-particles"),
			"param_name" => "pjs_sides",
			"dependency" => array("element" => "pjs_shape", "value" => array("circle", "edge", "triangle", "polygon", "star")),
			"value" => 3,
			"std" => 3,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("No of Particles", "tba-particles"),
			"param_name" => "pjs_count",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => 80,
			"std" => 80,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particle Size", "tba-particles"),
			"param_name" => "pjs_size",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => 5,
			"std" => 5,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Random Particle Size", "tba-particles"),
			"param_name" => "pjs_srandom",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"std" => 'yes',
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Animate Particle Size", "tba-particles"),
			"param_name" => "pjs_sanimate",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Size Animation Speed", "tba-particles"),
			"param_name" => "pjs_sanispeed",
			"dependency" => array("element" => "pjs_sanimate", "value" => array("yes")),
			"value" => 40,
			"std" => 40,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Min. Size", "tba-particles"),
			"param_name" => "pjs_smin",
			"dependency" => array("element" => "pjs_sanimate", "value" => array("yes")),
			"value" => 0.1,
			"std" => 0.1,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Opacity", "tba-particles"),
			"param_name" => "pjs_opacity",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => "0.5",
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Random Opacity", "tba-particles"),
			"param_name" => "pjs_orandom",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Animate Particle Opacity", "tba-particles"),
			"param_name" => "pjs_oanimate",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Opacity Animation Speed", "tba-particles"),
			"param_name" => "pjs_oanispeed",
			"dependency" => array("element" => "pjs_oanimate", "value" => array("yes")),
			"value" => 1,
			"std" => 1,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Min. Opacity", "tba-particles"),
			"param_name" => "pjs_omin",
			"dependency" => array("element" => "pjs_oanimate", "value" => array("yes")),
			"value" => 0.1,
			"std" => 0.1,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Want Particle Linked ?", "tba-particles"),
			"param_name" => "pjs_link",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Distance for link", "tba-particles"),
			"param_name" => "pjs_ldistance",
			"dependency" => array("element" => "pjs_link", "value" => array("yes")),
			"value" => 150,
			"std" => 150,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Line Color", "tba-particles"),
			"param_name" => "pjs_lcolor",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => "#ffffff",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Line Opacity", "tba-particles"),
			"param_name" => "pjs_lopacity",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => 0.4,
			"std" => 0.4,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Line Width", "tba-particles"),
			"param_name" => "pjs_lwidth",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => 1,
			"std" => 1,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Want Particle Move?", "tba-particles"),
			"param_name" => "pjs_move",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"std" => 'yes',
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Particle Movement Direction", "tba-particles"),
			"param_name" => "pjs_direction",
			"value" => array(
				esc_html__("None","tba-particles") => "none",
				esc_html__("Top","tba-particles") => "top",
				esc_html__("Top Right","tba-particles") => "top-right",
				esc_html__("Right","tba-particles") => "right",
				esc_html__("Bottom Right","tba-particles") => "bottom-right",
				esc_html__("Bottom","tba-particles") => "bottom",
				esc_html__("Bottom Left","tba-particles") => "bottom-left",
				esc_html__("Left","tba-particles") => "left",
				esc_html__("Top Left","tba-particles") => "top-left",
				),
			"std" => 'none',
			'save_always' => true,
			"dependency" => array("element" => "pjs_move", "value" => array("yes")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Random Movement?", "tba-particles"),
			"param_name" => "pjs_mrandom",
			"dependency" => array("element" => "pjs_move", "value" => array("yes")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Move Straight?", "tba-particles"),
			"param_name" => "pjs_mstraight",
			"dependency" => array("element" => "pjs_move", "value" => array("yes")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particle Movement Speed", "tba-particles"),
			"param_name" => "pjs_mspeed",
			"dependency" => array("element" => "pjs_move", "value" => array("yes")),
			"value" => 6,
			"std" => 6,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Particle Out Mode", "tba-particles"),
			"param_name" => "pjs_omode",
			"value" => array(
				esc_html__("Out","tba-particles") => "out",
				esc_html__("Bounce","tba-particles") => "bounce",
				),
			"std" => 'out',
			'save_always' => true,
			"dependency" => array("element" => "pjs_move", "value" => array("yes")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Active Hover Effect on Particles?", "tba-particles"),
			"param_name" => "pjs_hover",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"std" => 'yes',
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Hover Effect", "tba-particles"),
			"param_name" => "pjs_onhover",
			"value" => array(
				esc_html__("Grab","tba-particles") => "grab",
				esc_html__("Bubble","tba-particles") => "bubble",
				esc_html__("Repulse","tba-particles") => "repulse",
				),
			"std" => 'grab',
			'save_always' => true,
			"dependency" => array("element" => "pjs_hover", "value" => array("yes")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Active Click Effect on Particles?", "tba-particles"),
			"param_name" => "pjs_click",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Click Effect", "tba-particles"),
			"param_name" => "pjs_onclick",
			"value" => array(
				esc_html__("Push","tba-particles") => "push",
				esc_html__("Remove","tba-particles") => "remove",
				esc_html__("Bubble","tba-particles") => "bubble",
				esc_html__("Repulse","tba-particles") => "repulse",
				),
			"std" => 'push',
			'save_always' => true,
			"dependency" => array("element" => "pjs_click", "value" => array("yes")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particles Z-Index", "tba-particles"),
			"param_name" => "pjs_zindex",
			"dependency" => array("element" => "pb_type", "value" => array("pjs")),
			"value" => 0,
			"std" => 0,
			"group" => esc_html__("Particles"),
		)
	);
	/* Matrix Effect */
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Min Speedx", "rc_pb"),
			"param_name" => "pb_min_speedx",
			"value" => 1,
			"std" => 1,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Max Speedx", "rc_pb"),
			"param_name" => "pb_max_speedx",
			"value" => 1,
			"std" => 1,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Min Speedy", "rc_pb"),
			"param_name" => "pb_min_speedy",
			"value" => 1,
			"std" => 1,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Max Speedy", "rc_pb"),
			"param_name" => "pb_max_speedy",
			"value" => 1,
			"std" => 1,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Direction X", "rc_pb"),
			"param_name" => "pb_directionx",
			"value" => array(
				__("Default / Center","rc_pb") => "center",
				__("Left","rc_pb") => "left",
				__("Right","rc_pb") => "right",
				),
			"std" => 'center',
			'save_always' => true,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Direction Y", "rc_pb"),
			"param_name" => "pb_directiony",
			"value" => array(
				__("Default / Center","rc_pb") => "center",
				__("Up","rc_pb") => "up",
				__("down","rc_pb") => "down",
				),
			"std" => 'center',
			'save_always' => true,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Density", "rc_pb"),
			"param_name" => "pb_particle_density",
			"value" => 10000,
			"std" => 10000,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Dot Color", "rc_pb"),
			"param_name" => "pb_dot_color",
			"value" => "#000000",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => __("Line Color", "rc_pb"),
			"param_name" => "pb_line_color",
			"value" => "#000000",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Particle Radius", "rc_pb"),
			"param_name" => "pb_particle_radius",
			"value" => 7,
			"std" => 7,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Line Width", "rc_pb"),
			"param_name" => "pb_line_width",
			"value" => 1,
			"std" => 1,
			"dependency" => array("element" => "pb_type", "value" => array("matrix")),
			"group" => esc_html__("Particles"),
		)
	);
	/* Rain Effect */
	vc_add_param('vc_row',array(
			"type" => "attach_image",
			"class" => "",
			"heading" => __("Background Image", "rc_pb"),
			"param_name" => "pb_rain_bg",
			"dependency" => array("element" => "pb_type", "value" => array("rain")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Presets", "rc_pb"),
			"param_name" => "pb_rain_preset",
			"value" => array(
				__("Preset1","rc_pb") => "1",
				__("Preset2","rc_pb") => "2",
				__("Preset3","rc_pb") => "3",
				__("Preset4","rc_pb") => "4",
				__("Preset5","rc_pb") => "5",
				),
			"std" => '1',
			'save_always' => true,
			"dependency" => array("element" => "pb_type", "value" => array("rain")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Image Blurness", "rc_pb"),
			"param_name" => "pb_rain_img_blur",
			"dependency" => array("element" => "pb_type","value" => array("rain")),
			"value" => 10,
			"std" => 10,
			"group" => esc_html__("Particles"),
		)
	);
	/* Three Js Birds Effect */
	vc_add_param('vc_row',array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Bird Type", "tba-particles"),
			"param_name" => "bird_type",
			"value" => array(
				esc_html__("Black / White","tba-particles") => "bw",
				esc_html__("colourful","tba-particles") => "color",
				),
			"std" => 'bw',
			'save_always' => true,
			"dependency" => array("element" => "pb_type", "value" => array("birds")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Bird Count", "tba-particles"),
			"param_name" => "bird_count",
			"value" => 200,
			"std" => 200,
			"dependency" => array("element" => "pb_type", "value" => array("birds")),
			"group" => esc_html__("Particles"),
		)
	);
	/* Particle Swarm Effect */
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particle Count", "tba-particles"),
			"param_name" => "swarm_count",
			"value" => 5000,
			"std" => 5000,
			"dependency" => array("element" => "pb_type", "value" => array("swarm")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__("Rotate Color?", "tba-particles"),
			"param_name" => "swarm_rcolor",
			"dependency" => array("element" => "pb_type", "value" => array("swarm")),
			"value" => array(
				esc_html__("Yes","tba-particles") => "yes",
			),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Particle Color", "tba-particles"),
			"param_name" => "swarm_pcolor",
			"dependency" => array("element" => "pb_type", "value" => array("swarm")),
			"value" => "#FF8800",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	/* Alian Effect */
	vc_add_param('vc_row',array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Particle Count", "tba-particles"),
			"param_name" => "alian_count",
			"value" => 1000,
			"std" => 1000,
			"dependency" => array("element" => "pb_type", "value" => array("alian")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Color 1", "tba-particles"),
			"param_name" => "aliancolor1",
			"dependency" => array("element" => "pb_type", "value" => array("alian")),
			"value" => "#FF8800",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Color 2", "tba-particles"),
			"param_name" => "aliancolor2",
			"dependency" => array("element" => "pb_type", "value" => array("alian")),
			"value" => "#b5ff00",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Background Color 1", "tba-particles"),
			"param_name" => "bgaliancolor1",
			"dependency" => array("element" => "pb_type", "value" => array("alian")),
			"value" => "#000155",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Background Color 2", "tba-particles"),
			"param_name" => "bgaliancolor2",
			"dependency" => array("element" => "pb_type", "value" => array("alian")),
			"value" => "#000021",
			'save_always' => true,
			"group" => esc_html__("Particles"),
		)
	);
	//Wave Effect
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Particle Color", "tba-particles"),
			"param_name" => "wavescolor",
			"value" => "#ffffff",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("waves")),
			"group" => esc_html__("Particles"),
		)
	);
	//Ambient Effect
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Small Particle Color", "tba-particles"),
			"param_name" => "spcolor",
			"value" => "#0cdbf3",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("ambient")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Medium Particle Color", "tba-particles"),
			"param_name" => "mpcolor",
			"value" => "#6fd2f3",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("ambient")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Large Particle Color", "tba-particles"),
			"param_name" => "lpcolor",
			"value" => "#93e9f3",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("ambient")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Light Color1", "tba-particles"),
			"param_name" => "lcolor1",
			"value" => "#6ac6e8",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("ambient")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Light Color2", "tba-particles"),
			"param_name" => "lcolor2",
			"value" => "#54d5e8",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("ambient")),
			"group" => esc_html__("Particles"),
		)
	);
	vc_add_param('vc_row',array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Light Color3", "tba-particles"),
			"param_name" => "lcolor3",
			"value" => "#2ae8d8",
			'save_always' => true,
			"dependency" => array("element" => "pb_type","value" => array("ambient")),
			"group" => esc_html__("Particles"),
		)
	);
}