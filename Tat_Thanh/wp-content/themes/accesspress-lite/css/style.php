<?php
    function accesspress_lite_dynamic_styles() {
        global $accesspresslite_options;
        $old_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
		$settings = wp_parse_args($old_settings, $accesspresslite_options);
        $tpl_color = $settings['template_color'];
        
        $tpl_layout = $settings['accesspresslite_home_template'];
        $custom_css = "";
        if( $tpl_color ) {
            
            /** Color Variations **/
            $darker_tpl_color = accesspress_lite_colour_brightness( $tpl_color, -0.8 );
            $lighter_tpl_color = accesspress_lite_colour_brightness( $tpl_color, 0.8 );
            $tpl_color_arr = accesspress_lite_hex2rgb($tpl_color);
            
            /** Color **/
            $custom_css .= "
                .socials a,
                .searchform .searchsubmit,
                .header-text,
                .main-navigation ul ul li:hover > a,
                .main-navigation ul ul li.current-menu-item > a,
                #latest-events a, .testimonial-sidebar a,
                .search-results .posted-on a, .cat-links a:hover, a,
                .body_template_two .right-header .socials a:hover,
                .body_template_two #top-section .welcome-detail a.bttn,
                .body_template_two #top-section h1 a,
                .body_template_two .site-footer #top-footer .footer2.footer .aptf-tweet-content a.aptf-tweet-name,
                .body_template_two #event_section #latest-events_template_two h1 a,
                .body_template_two a.all-testimonial,
                .body_template_two a.all-events,
                .body_template_two .event-detail h4 a:hover,
                .body_template_two .author.vcard a,
                .body_template_two a .entry-date.published,
                .body_template_two .entry-footer a:hover,
                .body_template_two.left-sidebar .searchform .searchsubmit,
                .body_template_two.both-sidebar .searchform .searchsubmit,
                .body_template_two.left-sidebar a:hover,
                .body_template_two.left-sidebar .sidebar .widget_recent_comments .url:hover,
                .body_template_two .business-hours ul li a,
                .body_template_two .featured-post.big-icon h2.has-icon .fa{
                    color: {$tpl_color}
                }";
                
            /** Background **/
            $custom_css .= "
                .socials a:hover,
                .main-navigation,
                #call-to-action,
                .event-thumbnail .event-date,
                .bttn:after,
                .featured-post .featured-overlay,
                #bottom-section,
                .portofolio-layout .entry-title,
                .event-date-archive,
                #slider-banner .bx-wrapper .bx-pager.bx-default-pager a:after,
                .body_template_two #site-navigation.main-navigation ul li:before,
                .body_template_two .slider-caption .caption-title,
                .body_template_two #slider-banner .bx-wrapper .bx-pager.bx-default-pager a:after,
                .body_template_two #top-section .welcome-detail a.bttn:after,
                .body_template_two #call-to-action .action-btn,
                .body_template_two #mid-section .featured-post .featured-overlay,
                .body_template_two .event-thumbnail .event-date,
                .body_template_two .event-date-archive,
                .body_template_two a.cat-event-more.bttn:after,
                .body_template_two .portofolio-layout .entry-title,
                .body_template_two .entry-content .bttn:after,
                .body_template_two #bottom-section .testimonial-slider-wrap .bx-wrapper .bx-pager.bx-default-pager a:hover, .body_template_two #bottom-section .testimonial-slider-wrap .bx-wrapper .bx-pager.bx-default-pager a.active,
                .navigation .nav-links a:hover, .bttn:hover, button:hover,
                input[type=\"button\"]:hover, input[type=\"reset\"]:hover, input[type=\"submit\"]:hover{
                    background: {$tpl_color} 
                }";
                
            /** 0.6 Opacity Background **/
            $custom_css .= "
                .cat-portfolio-list:hover .portofolio-layout{
                     background: rgba({$tpl_color_arr[0]}, {$tpl_color_arr[1]}, {$tpl_color_arr[2]}, 0.6)
                }";
                
            /** 0.8 Opacity Background **/
            $custom_css .= "
                .body_template_two #event_section #latest-events_template_two .event-list_two .event-date_two{
                    background: rgba({$tpl_color_arr[0]}, {$tpl_color_arr[1]}, {$tpl_color_arr[2]}, 0.8)
                }";
                
            /** 0.4 Opacity Background **/
            $custom_css .= "
                .body_template_two .cat-portfolio-list:hover .portofolio-layout{
                     background: rgba({$tpl_color_arr[0]}, {$tpl_color_arr[1]}, {$tpl_color_arr[2]}, 0.4)
                }";
                
            /** Darker Background **/
            $custom_css .= "
                .main-navigation .current-menu-parent > a,
                .main-navigation .current-menu-item > a,
                .main-navigation .current_page_item > a,
                .main-navigation .current_page_parent > a,
                .bx-wrapper .bx-pager.bx-default-pager a,
                .main-navigation li:hover > a{
                    background: {$darker_tpl_color};
                }";
                
            /** Lighter Background Color **/
            $custom_css .= "
                .testimonial-wrap{
                    background: {$lighter_tpl_color} 
                }";
                
            /** Border Color **/
            $custom_css .= "
                .socials a,
                .searchform,
                .sidebar h3.widget-title,
                .body_template_two .main-navigation .current-menu-parent > a,
                .main-navigation .current_page_parent > a,
                .body_template_two .main-navigation .current-menu-item > a,
                .body_template_two .main-navigation .current_page_item > a,
                .body_template_two #site-navigation.main-navigation ul ul,
                .body_template_two #call-to-action .action-btn,
                .navigation .nav-links a, .bttn, button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"],
                .body_template_two .sidebar h3.widget-title,
                .body_template_two.left-sidebar .searchform,
                .body_template_two.both-sidebar .searchform,
                .body_template_two .featured-post.big-icon h2.has-icon .fa{
                    border-color: {$tpl_color}
                }";
                
            /** Darker Border **/
            $custom_css .= "
                .main-navigation,
                .main-navigation ul ul{
                     border-color: {$darker_tpl_color};
                }";
                
            /** Lighter Border Color **/
            $custom_css .= "
                .testimonial-wrap:after{
                    border-color: {$lighter_tpl_color} transparent transparent; 
                }";
                
            /** Box Shadow Color **/
            $custom_css .= "
                #slider-banner .bx-wrapper .bx-pager.bx-default-pager a{
                    box-shadow: 0 0 0 2px {$tpl_color} inset; 
                }";

            /** Media Query **/
            $custom_css .= "
                @media screen and (max-width: 940px) {
                    .main-navigation .menu li{
                        background: {$tpl_color};
                    }

                    .main-navigation .menu li{
                        border-bottom-color: {$darker_tpl_color} !important;
                    }
                }";
            
        }

        if( $tpl_layout == 'template_one' ) {
            wp_add_inline_style( 'accesspresslite-style', $custom_css );
        } else {
            wp_add_inline_style( 'accesspresslite-templatetwo-style', $custom_css );            
        }
    }
    
    add_action( 'wp_enqueue_scripts', 'accesspress_lite_dynamic_styles' );

    function accesspress_lite_colour_brightness($hex, $percent) {
        // Work out if hash given
        $hash = '';
        if (stristr($hex, '#')) {
            $hex = str_replace('#', '', $hex);
            $hash = '#';
        }
        /// HEX TO RGB
        $rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
        //// CALCULATE 
        for ($i = 0; $i < 3; $i++) {
            // See if brighter or darker
            if ($percent > 0) {
                // Lighter
                $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
            } else {
                // Darker
                $positivePercent = $percent - ($percent * 2);
                $rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1 - $positivePercent));
            }
            // In case rounding up causes us to go to 256
            if ($rgb[$i] > 255) {
                $rgb[$i] = 255;
            }
        }
        //// RBG to Hex
        $hex = '';
        for ($i = 0; $i < 3; $i++) {
            // Convert the decimal digit to hex
            $hexDigit = dechex($rgb[$i]);
            // Add a leading zero if necessary
            if (strlen($hexDigit) == 1) {
                $hexDigit = "0" . $hexDigit;
            }
            // Append to the hex string
            $hex .= $hexDigit;
        }
        return $hash . $hex;
    }

    function accesspress_lite_hex2rgb($hex) {
        $hex = str_replace("#", "", $hex);

        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = array($r, $g, $b);
        //return implode(",", $rgb); // returns the rgb values separated by commas
        return $rgb; // returns an array with the rgb values
    }