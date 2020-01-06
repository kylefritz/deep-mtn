<?php

$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} else {
    $root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
    if ( file_exists( $root.'/wp-load.php' ) ) {
        require_once( $root.'/wp-load.php' );
    }
}

header("Content-type: text/css; charset=utf-8");

?>

<?php if (!empty($cabin_qode_options['selection_color'])) { ?>
    /* Webkit */
    ::selection {
    background: <?php echo esc_attr($cabin_qode_options['selection_color']);  ?>;
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['selection_color'])) { ?>
    /* Gecko/Mozilla */
    ::-moz-selection {
    background: <?php echo esc_attr($cabin_qode_options['selection_color']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['first_color'])) { ?>

    h6, h6 a,h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,a,p a,
    header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a,
    nav.main_menu>ul>li.active > a,
    .drop_down .second .inner > ul > li > a:hover,
    .drop_down .second .inner ul li.sub ul li a:hover,
    nav.mobile_menu ul li a:hover,
    nav.mobile_menu ul li.active > a,
    .side_menu_button > a:hover,
    .mobile_menu_button span:hover,
    .vertical_menu ul li a:hover,
    .vertical_menu_toggle .second .inner ul li a:hover,
    nav.popup_menu ul li a:hover,
    nav.popup_menu ul li ul li a,
    .comment_holder .comment .text .comment_date,
    .comment_holder .comment .text .replay,
    .comment_holder .comment .text .comment-reply-link,
    .comment_holder .comment .text .comment-edit-link,
    div.comment_form form p.logged-in-as a,
    .pagination_prev_and_next_only ul li a:hover,
    .latest_post_holder .latest_post_title a:hover,
    .latest_post_holder.minimal .latest_post_title a,
    .latest_post_holder .post_info_section:before,
    .latest_post_holder .post_info_section span,
    .latest_post_holder .post_info_section a,
    .latest_post_holder .post_author a.post_author_link:hover,
    .projects_holder article .portfolio_title a:hover,
    .projects_masonry_holder article .portfolio_title a:hover,
    .filter_holder ul li.current span,
    .filter_holder ul li:not(.filter_title):hover span,
    .q_accordion_holder.accordion .ui-accordion-header .accordion_mark_icon,
    .q_accordion_holder.accordion:not(.boxed) .ui-accordion-header.ui-state-active span.tab-title,
    blockquote.with_quote_icon .icon_quotations_holder,
    blockquote h3,
    .q_dropcap,
    .price_in_table .value,
    .price_in_table .price,
    .price_in_table .mark,
    .q_font_elegant_holder.q_icon_shortcode:hover,
    .q_icon_shade.q_icon_shortcode:hover,
    .q_font_awsome_icon_holder.q_icon_shortcode:hover,
    .box_holder_icon_inner .qode_icon_stack,
    .box_holder_icon_inner .q_font_elegant_holder,
    .q_icon_with_title .icon_holder .qode_icon_stack,
    .q_icon_with_title .q_font_elegant_holder,
    .q_progress_bars_icons_inner.square .bar.active i,
    .q_progress_bars_icons_inner.circle .bar.active i,
    .q_progress_bars_icons_inner.normal .bar.active i,
    .q_progress_bars_icons_inner .bar.active i.fa-circle,
    .q_progress_bars_icons_inner.square .bar.active .q_font_elegant_icon,
    .q_progress_bars_icons_inner.circle .bar.active .q_font_elegant_icon,
    .q_progress_bars_icons_inner.normal .bar.active .q_font_elegant_icon,
    .q_social_icon_holder.normal_social .simple_social,
    .q_social_icon_holder.normal_social.with_link .simple_social,
    .q_list.number ul>li:before,
    .social_share_list_holder ul li i:hover,
    .woocommerce.single-product.single .social_share_list_holder ul li i:hover,
    .q_progress_bar .progress_number_wrapper.static .progress_number,
    .qbutton:hover,
    .load_more a:hover,
    #submit_comment:hover,
    .post-password-form input[type='submit']:hover,
    .drop_down .wide .second ul li .qbutton:hover,
    .drop_down .wide .second ul li ul li .qbutton:hover,
    nav.content_menu ul li.active:hover i,
    nav.content_menu ul li:hover i,
    nav.content_menu ul li.active:hover a,
    nav.content_menu ul li:hover a,
    aside.sidebar .widget:not(.woocommerce) li,
    .header-widget.widget_nav_menu ul.menu li a:hover,
    input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover,
    .latest_post_holder .post_info_section .latest_post_categories a,
    .latest_post_holder .post_info_section .post_author_link,
    .latest_post_holder.boxes .date,
    .latest_post_holder.image_in_box .date,
    .qbutton.white,
    .qbutton.solid_color:hover,
    .qbutton.top_and_bottom_border,
    .blog_load_more_button a:hover,
    .q_progress_bars_vertical .progress_number,
    .q_counter_holder span.counter,
    .q_icon_shortcode span,
    .q_icon_shortcode i,
    .q_separator_with_icon .q_icon_holder .q_icon_shade i,
    .q_separator_with_icon .q_icon_holder .q_icon_shade span,
    .qode_pricing_list .qode_pricing_item_price span,
    .service_table_inner li.service_icon .service_table_icon,
    .qode_search_form_3 .qode_search_close a:hover,
    .qode_search_form_2 input[type="submit"]:hover,
    .read_more_button_holder a:hover .read_more_button_icon,
    .read_more_button_holder a.white .read_more_button_icon,
    .projects_holder article .item_holder.slide_from_left_hover .portfolio_title a,
    .projects_masonry_holder article .item_holder.slide_from_left_hover .portfolio_title a,
    .portfolio_slider li.item .item_holder.slide_from_left_hover .portfolio_title a,
    .projects_holder article .item_holder.image_text_zoom_hover .portfolio_title a,
    .projects_masonry_holder article .item_holder.image_text_zoom_hover .portfolio_title a,
    .portfolio_slider li.item .item_holder.image_text_zoom_hover .portfolio_title a,
    .projects_holder article .item_holder.opposite_corners_hover .portfolio_title a:hover,
    .projects_masonry_holder article .item_holder.opposite_corners_hover .portfolio_title a:hover,
    .portfolio_slider li.item .item_holder.opposite_corners_hover .portfolio_title a:hover,
    .projects_holder article .item_holder.upward_hover .icons_holder a:hover,
    .projects_masonry_holder article .item_holder.upward_hover .icons_holder a:hover,
    .portfolio_slider li.item .item_holder.upward_hover .icons_holder a:hover,
    .projects_holder article .item_holder.image_subtle_rotate_zoom_hover .icons_holder a:hover,
    .projects_masonry_holder article .item_holder.image_subtle_rotate_zoom_hover .icons_holder a:hover,
    .portfolio_slider li.item .item_holder.image_subtle_rotate_zoom_hover .icons_holder a:hover,
    .shopping_cart_dropdown ul li .item_info_holder .item_left a:hover,
    .shopping_cart_header .header_cart i,
    .shopping_cart_header .header_cart:hover i,
    .q_tabs .tabs-nav li a,
    .q_tabs.border_arround_element .tabs-nav li a,
    .q_tabs.border_arround_active_tab .tabs-nav li a,
    .q_tabs.border_arround_active_tab .tabs-nav li a:hover,
    .blog_holder article .post_text h2 .date,
    .blog_holder article .post_info a,
    .blog_holder article .post_info a:hover,
    .blog_holder article.format-link .post_text .link_image .post_text_inner .post_title a,
    .blog_holder article.format-quote .post_text .quote_image .post_text_inner .post_title a,
    .blog_holder article.format-quote h3 .date,
    .blog_holder article.format-link h3 .date,
    .blog_holder article.sticky h2 a,
    .blog_holder article h2 a:hover,
    .blog_holder.blog_single article h2:hover,
    ul.qode_pricing_list_holder .new_item i,
    .comment-list .post_author_comment .post-author-comment-icon,
    .q_team.below_image .q_team_info .q_team_position,
    .social_share_dropdown ul li:hover a span.social_network_icon,
    .social_share_dropdown ul li:hover,
    .social_share_dropdown ul li a:hover span.social_network_icon,
    .qbutton.masonry_read_more_button:hover,
    .q_team.below_image .q_team_social_holder_between .social_share_icon_shape .social_share_icon,
    .q_team_social_holder_between .q_social_icon_holder .qode_icon_stack{
    color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
    }

    .title,
    .popup_menu:hover .line,
    .popup_menu:hover .line:after,
    .popup_menu:hover .line:before,
    .mejs-controls .mejs-time-rail .mejs-time-current,
    .mejs-controls .mejs-time-rail .mejs-time-handle,
    .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-hover,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-hover .accordion_mark,
    .q_dropcap.circle,
    .q_dropcap.square,
    .gallery_holder ul li .gallery_hover i.fa-search,
    .highlight,
    .testimonials_holder.light .flex-direction-nav a:hover,
    .q_tabs.with_borders .tabs-nav li.active a,
    .q_tabs.with_borders .tabs-nav li.active a:hover,
    .q_tabs.border_arround_element .tabs-nav li a:hover,
    .q_tabs.with_lines .tabs-nav li.active a,
    .q_tabs.with_lines .tabs-nav li a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li a:hover:after,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:after,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:hover:after,
    .q_message,
    .price_table_inner .price_button a,
    .q_price_table.active .active_text,
    .q_social_icon_holder .qode_icon_stack,
    .footer_top .q_social_icon_holder:hover .qode_icon_stack,
    .q_list.circle ul>li:before,
    .q_list.number.circle_number ul>li:before,
    .q_pie_graf_legend ul li .color_holder,
    .q_line_graf_legend ul li .color_holder,
    .q_progress_bar .progress_content,
    .q_progress_bars_vertical .progress_content_outer .progress_content,
    .q_progress_bar .floating.floating_outside .progress_number,
    .qbutton,
    .load_more a,
    .blog_load_more_button a,
    #submit_comment,
    .post-password-form input[type='submit'],
    #wp-calendar td#today,
    .qode_image_gallery_no_space.light .controls a.prev-slide:hover,
    .qode_image_gallery_no_space.light .controls a.next-slide:hover,
    input.wpcf7-form-control.wpcf7-submit,
    div.wpcf7-response-output.wpcf7-mail-sent-ok,
    .qbutton.white:hover,
    .qbutton.solid_color,
    .qbutton.top_and_bottom_border:hover,
    .pagination ul li a:hover,
    .single_links_pages span:hover,
    .comment_pager .page-numbers:hover,
    .comment_pager a:hover,
    .comment_pager .current:hover,
    .pagination ul li.active span,
    .single_links_pages > span,
    .comment_pager .current,
    .comment_pager .page-numbers.dots:hover,
    .read_more_button_holder a,
    .read_more_button_holder a.white:hover,
    .projects_holder article .item_holder.upward_hover .text_holder,
    .projects_masonry_holder article .item_holder.upward_hover .text_holder,
    .portfolio_slider li.item .item_holder.upward_hover .text_holder,
    .projects_holder article .item_holder.slide_from_left_hover .icons_holder,
    .projects_masonry_holder article .item_holder.slide_from_left_hover .icons_holder,
    .portfolio_slider li.item .item_holder.slide_from_left_hover .icons_holder,
    .projects_holder article .item_holder.opposite_corners_hover .text_holder .separator,
    .projects_masonry_holder article .item_holder.opposite_corners_hover .text_holder .separator,
    .portfolio_slider li.item .item_holder.opposite_corners_hover .text_holder .separator,
    .projects_holder article .item_holder.opposite_corners_hover .text_holder .separator.animate,
    .projects_masonry_holder article .item_holder.opposite_corners_hover .text_holder .separator.animate,
    .portfolio_slider li.item .item_holder.opposite_corners_hover .text_holder .separator.animate,
    .projects_holder article .item_holder.slide_from_left_hover .text_holder .separator,
    .projects_masonry_holder article .item_holder.slide_from_left_hover .text_holder .separator,
    .portfolio_slider li.item .item_holder.slide_from_left_hover .text_holder .separator,
    .projects_holder article .item_holder.slide_from_left_hover .text_holder .separator.animate,
    .projects_masonry_holder article .item_holder.slide_from_left_hover .text_holder .separator.animate,
    .portfolio_slider li.item .item_holder.slide_from_left_hover .text_holder .separator.animate,
    .projects_holder article .item_holder.subtle_vertical_hover .text_holder .separator,
    .projects_masonry_holder article .item_holder.subtle_vertical_hover .text_holder .separator,
    .portfolio_slider li.item .item_holder.subtle_vertical_hover .text_holder .separator,
    .projects_holder article .item_holder.subtle_vertical_hover .text_holder .separator.animate,
    .projects_masonry_holder article .item_holder.subtle_vertical_hover .text_holder .separator.animate,
    .portfolio_slider li.item .item_holder.subtle_vertical_hover .text_holder .separator.animate,
    .projects_holder article .item_holder.image_text_zoom_hover .text_holder .separator,
    .projects_masonry_holder article .item_holder.image_text_zoom_hover .text_holder .separator,
    .portfolio_slider li.item .item_holder.image_text_zoom_hover .text_holder .separator,
    .projects_holder article .item_holder.image_text_zoom_hover .text_holder .separator.animate,
    .projects_masonry_holder article .item_holder.image_text_zoom_hover .text_holder .separator.animate,
    .portfolio_slider li.item .item_holder.image_text_zoom_hover .text_holder .separator.animate,
    .projects_holder article .item_holder.opposite_corners_hover .icons_holder a,
    .projects_masonry_holder article .item_holder.opposite_corners_hover .icons_holder a,
    .portfolio_slider li.item .item_holder.opposite_corners_hover .icons_holder a,
    .projects_holder article .item_holder.subtle_vertical_hover .icons_holder a,
    .projects_masonry_holder article .item_holder.subtle_vertical_hover .icons_holder a,
    .portfolio_slider li.item .item_holder.subtle_vertical_hover .icons_holder a,
    .projects_holder article .item_holder.image_text_zoom_hover .icons_holder a,
    .projects_masonry_holder article .item_holder.image_text_zoom_hover .icons_holder a,
    .portfolio_slider li.item .item_holder.image_text_zoom_hover .icons_holder a,
    .projects_holder article .item_holder.gradient_hover .icons_holder a:hover,
    .projects_masonry_holder article .item_holder.gradient_hover .icons_holder a:hover,
    .portfolio_slider li.item .item_holder.gradient_hover .icons_holder a:hover,
    .vertical_menu_hidden_button_line,
    .vertical_menu_hidden_button_line:after,.vertical_menu_hidden_button_line:before,
    .popup_menu.opened:hover .line:after,
    .popup_menu.opened:hover .line:before,
    .shopping_cart_header .header_cart_span,
    .shopping_cart_dropdown .cart_bottom .checkout,
    .shopping_cart_dropdown .cart_bottom .view-cart:hover,
    .shopping_cart_dropdown ul li .item_info_holder .item_right .remove:hover,
    .popup_menu.opened:hover .line:before,
    .single_tags  a:hover,
    aside.sidebar .widget .tagcloud a:hover,
    .widget .tagcloud a:hover,
    .blog_holder.blog_post_info_vertical_content article .post_social .social_share_holder > a > i,
    .blog_holder article.format-link .post_text .post_text_inner:hover,
    .blog_holder article.format-quote .post_text .post_text_inner:hover,
    .blog_holder article .post_social .post_comments i,
    .blog_holder article .post_social .blog_like i,
    .blog_holder article.format-link .post_text .post_text_inner:hover,
    .blog_holder article.format-quote .post_text .post_text_inner:hover,
    .wpb_gallery .flexslider_slide .flex-control-paging li a.flex-active,
    .wpb_gallery .flexslider_fade .flex-control-paging li a.flex-active,
    ul.qode_pricing_list_holder .highlighted_item span.highlighted_text,
    .q_team.below_image:hover .social_share_icon_shape,
    .content_slider .flex-control-paging li a.flex-active{
    background-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
    }

    <?php $bg_color = cabin_qode_hex2rgb($cabin_qode_options['first_color']); ?>

    .portfolio_main_holder .item_holder.image_subtle_rotate_zoom_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.prominent_plain_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.slide_up_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.cursor_change_hover .portfolio_shader,
    .latest_post_holder .boxes_image a .latest_post_overlay{
    background-color: rgba(<?php echo esc_attr($bg_color[0]); ?>,<?php echo esc_attr($bg_color[1]); ?>,<?php echo esc_attr($bg_color[2]); ?>,0.7);
    }

    .qbutton.mid_transparent:hover{
    border-color: rgba(<?php echo esc_attr($bg_color[0]); ?>,<?php echo esc_attr($bg_color[1]); ?>,<?php echo esc_attr($bg_color[2]); ?>,0.25);
    background-color: rgba(<?php echo esc_attr($bg_color[0]); ?>,<?php echo esc_attr($bg_color[1]); ?>,<?php echo esc_attr($bg_color[2]); ?>,0.5);
    }
    .q_circles_holder .q_circle_inner:hover .q_circle_inner2,
    .q_team_social_holder .q_social_icon_holder:hover .qode_icon_stack,
    .q_icon_shade.circle:hover,
    .q_icon_shade.square:hover,
    #social_icons_widget .q_icon_shade.circle:hover,
    #social_icons_widget .q_icon_shade.square:hover,
    .q_team_social_holder .q_social_icon_holder:hover .qode_icon_stack,
    .q_circles_holder .q_circle_inner:hover .q_circle_inner2{
    background-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?> !important;
    }

    #respond textarea:focus,
    #respond input[type='text']:focus,
    .post-password-form input[type='password']:focus,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-hover,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-hover .accordion_mark,
    .testimonials_holder.light .flex-direction-nav a:hover,
    .q_progress_bars_icons_inner.circle .bar .bar_noactive,
    .q_progress_bars_icons_inner.square .bar .bar_noactive,
    .animated_icon_inner span.animated_icon_back .animated_icon,
    .qbutton,
    .load_more a,
    .blog_load_more_button a,
    #submit_comment,
    .post-password-form input[type='submit'],
    .qbutton:hover,
    .load_more a:hover,
    .blog_load_more_button a:hover,
    #submit_comment:hover,
    .drop_down .wide .second ul li .qbutton:hover,
    .drop_down .wide .second ul li ul li .qbutton:hover,
    .post-password-form input[type='submit']:hover,
    .call_to_action .to_action_column2.button_wrapper .qbutton:hover,
    .header-widget.widget_nav_menu ul ul,
    input.wpcf7-form-control.wpcf7-text:focus,
    input.wpcf7-form-control.wpcf7-number:focus,
    input.wpcf7-form-control.wpcf7-date:focus,
    textarea.wpcf7-form-control.wpcf7-textarea:focus,
    select.wpcf7-form-control.wpcf7-select:focus,
    input.wpcf7-form-control.wpcf7-quiz:focus,
    input.wpcf7-form-control.wpcf7-submit,
    input.wpcf7-form-control.wpcf7-submit[disabled],
    input.wpcf7-form-control.wpcf7-submit:not([disabled]),
    input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover,
    .qbutton.white,
    .qbutton.white:hover,
    .qbutton.solid_color,
    .qbutton.solid_color:hover,
    .qbutton.top_and_bottom_border,
    .qbutton.top_and_bottom_border:hover,
    .q_counter_holder .separator.medium,
    .q_icon_shade.circle,
    .q_icon_shade.square,
    .qode_pricing_border,
    .price_table_inner .price_button a,
    .single_tags  a:hover,
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:hover,
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li.active,
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active,
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active) a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:last-child a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active):last-child a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active:last-child a,
    .single_tags  a:hover,
    aside.sidebar .widget .tagcloud a:hover,
    .widget .tagcloud a:hover,
    .box_holder_icon_inner:not(.normal_icon) .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .icon_holder .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .q_font_elegant_holder,
    .q_team.below_image:hover .social_share_icon_shape,
    .box_holder_icon_inner:not(.normal_icon) .q_font_elegant_holder,
    ul.qode_pricing_list_holder .highlighted_item ul,
    .pagination ul li a:hover,
    .single_links_pages span:hover,
    .comment_pager a:hover,
    .comment_pager .current:hover,
    .pagination ul li.active span,
    .single_links_pages > span,
    .comment_pager .current,
    .comment_pager .page-numbers.dots:hover{
    border-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
    }

    .drop_down .second,
    .q_progress_bar .progress_number_wrapper.floating .down_arrow{
    border-top-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
    }

    .q_circles_holder .q_circle_inner:hover .q_circle_inner2,
    .q_circles_holder .q_circle_inner:hover,
    .q_team_social_holder .q_social_icon_holder:hover .qode_icon_stack{
    border-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?> !important;
    }

    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce .myaccount_user a,
        .woocommerce ul.products li.product .added_to_cart,
        .woocommerce .select2-container .select2-choice .select2-arrow .select2-arrow:after ,
        .woocommerce-page .select2-container .select2-choice .select2-arrow:after,
        .woocommerce-checkout .form-row #billing_country_chzn.chzn-container-single .chzn-single div b:before,
        .woocommerce-checkout .form-row #shipping_country_chzn.chzn-container-single .chzn-single div b:before,
        .woocommerce-checkout .form-row .chosen-container-single .chosen-single div b:before,
        .woocommerce-account .form-row .chosen-container-single .chosen-single div b:before,
        .woocommerce-checkout .chosen-container .chosen-results li.active-result.highlighted,
        .woocommerce-account .chosen-container .chosen-results li.active-result.highlighted,
        .woocommerce ul.products li.product span.product-title:hover,
        .woocommerce .quantity input[type="text"].qty,
        .woocommerce #content .quantity input[type="text"].qty,
        .woocommerce-page .quantity input[type="text"].qty,
        .woocommerce-page #content .quantity input[type="text"].qty,
        .woocommerce .star-rating,
        .woocommerce-page .star-rating,
        .woocommerce div.cart-collaterals div.cart_totals table tr.order-total strong span.amount,
        .woocommerce-page div.cart-collaterals div.cart_totals table tr.order-total strong span.amount,
        .woocommerce div.cart-collaterals div.cart_totals table tr.order-total strong,
        .woocommerce form.checkout table.shop_table tfoot tr.order-total th,
        .woocommerce form.checkout table.shop_table tfoot tr.order-total td span.amount,
        .woocommerce aside ul.product_list_widget li > a:hover,
        aside ul.product-categories li > a:hover,
        .woocommerce aside ul.product_list_widget li span.amount,
        aside ul.product_list_widget li span.amount,
        .woocommerce aside .widget ul.product-categories a:hover,
        aside .widget ul.product-categories a:hover,
        .woocommerce-page aside .widget ul.product-categories a:hover,
        .woocommerce aside.sidebar .woocommerce.widget ul.product-categories ul.children li a:hover,
        aside ul.product-categories ul.children li a:hover,
        .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories ul.children li a:hover,
        .woocommerce aside.sidebar .woocommerce.widget ul.product-categories  a:hover,
        aside ul.product-categories a:hover,
        .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories li a:hover,
        .woocommerce .widget_shopping_cart_content .total .amount,
        .woocommerce-page .widget_shopping_cart_content .total .amount,
        .woocommerce .select2-results li.select2-highlighted,
        .woocommerce-page .select2-results li.select2-highlighted,
        .select2-results ul li.select2-results__option--highlighted,
        .woocommerce .product .woocommerce-product-rating .woocommerce-review-link:hover,
        .shopping_cart_header .header_cart:hover i,
        .shopping_cart_dropdown ul li a:hover,
        .shopping_cart_dropdown span.total span,
        .woocommerce .product .woocommerce-product-rating .woocommerce-review-link:hover,
        .woocommerce .checkout-opener-text a,
        .woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,
        .woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover{
        color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
        }

        .woocommerce .button:hover,
        .woocommerce-page .button:hover,
        .woocommerce button.button:hover,
        .woocommerce-page button.button:hover,
        .woocommerce #submit:hover,
        .woocommerce ul.products li.product a.qbutton:hover,
        .woocommerce-page ul.products li.product a.qbutton:hover,
        .woocommerce ul.products li.product .added_to_cart:hover,
        .woocommerce .product .onsale.out-of-stock-button,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle
        .woocommerce .quantity .minus:hover,
        .woocommerce #content .quantity .minus:hover,
        .woocommerce-page .quantity .minus:hover,
        .woocommerce-page #content .quantity .minus:hover,
        .woocommerce .quantity .plus:hover,
        .woocommerce #content .quantity .plus:hover,
        .woocommerce-page .quantity .plus:hover,
        .woocommerce-page #content .quantity .plus:hover,
        .woocommerce.single-product button.single_add_to_cart_button:hover,
        .woocommerce .product .onsale,
        .woocommerce .product .single-onsale,
        .woocommerce ul.products li.product .add-to-cart-button-inner2 a.button.add_to_cart_button:hover,
        .woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.button.add_to_cart_button:hover,
        .woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.added_to_cart:hover,
        .woocommerce ul.products li.product .add-to-cart-button-inner2 a.added_to_cart:hover,
        .woocommerce-pagination ul.page-numbers li a:hover,
        .woocommerce-pagination ul.page-numbers li span:hover,
        .woocommerce-pagination ul.page-numbers li span.current:hover,
        .woocommerce .widget_shopping_cart_content p.buttons a.button,
        .woocommerce .widget_shopping_cart_content p.buttons a.button:hover,
        .woocommerce .widget_price_filter .button,
        .woocommerce-page .widget_price_filter .button,
        .woocommerce #order_review #payment .button:hover,
        .woocommerce-page #order_review #payment .button:hover,
        .woocommerce .checkout_coupon .coupon .button:hover,
        .woocommerce-page .checkout_coupon .coupon .button:hover,
        .woocommerce .shop_table .coupon .button:hover,
        .woocommerce-page .shop_table .coupon .button:hover,
        .woocommerce .shop_table .button:hover,
        .woocommerce-page .shop_table .button:hover.woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.added_to_cart:hover ,
        .woocommerce .cart-collaterals .button:hover,
        .woocommerce-page .cart-collaterals .button:hover,
        .woocommerce-pagination ul.page-numbers li>span.dots:hover{
        background-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
        }

        .woocommerce .button,
        .woocommerce-page .button,
        .woocommerce button.button,
        .woocommerce-page button.button,
        .woocommerce-page input[type="submit"]:not(.qode_search_submit),
        .woocommerce  input[type="submit"]:not(.qode_search_submit),
        .woocommerce ul.products li.product .added_to_cart,
        .woocommerce.single-product button.single_add_to_cart_button:hover,
        .woocommerce.single-product .q_tabs form.comment-form textarea#comment,
        .woocommerce .quantity .minus:hover,
        .woocommerce #content .quantity .minus:hover,
        .woocommerce-page .quantity .minus:hover,
        .woocommerce-page #content .quantity .minus:hover,
        .woocommerce .quantity .plus:hover,
        .woocommerce #content .quantity .plus:hover,
        .woocommerce-page .quantity .plus:hover,
        .woocommerce-page #content .quantity .plus:hover,
        .woocommerce .product_info_box .separator.medium,
        .woocommerce :not(.page_header input){
        border-color: <?php echo esc_attr($cabin_qode_options['first_color']); ?>;
        }
    <?php } ?>
<?php } ?>

<?php if (!empty($cabin_qode_options['spinner_color'])) { ?>
    .ajax_loader .pulse,
    .ajax_loader .double_pulse .double-bounce1, .ajax_loader .double_pulse .double-bounce2,
    .ajax_loader .cube,
    .ajax_loader .rotating_cubes .cube1, .ajax_loader .rotating_cubes .cube2,
    .ajax_loader .stripes > div,
    .ajax_loader .wave > div,
    .ajax_loader .two_rotating_circles .dot1, .ajax_loader .two_rotating_circles .dot2,
    .ajax_loader .five_rotating_circles .container1 > div, .ajax_loader .five_rotating_circles .container2 > div, .ajax_loader .five_rotating_circles .container3 > div,
    .ajax_loader .atom .ball-1:before,.ajax_loader .atom .ball-2:before, .ajax_loader .atom .ball-3:before, .ajax_loader .atom .ball-4:before,
    .ajax_loader .clock .ball:before,
    .ajax_loader .mitosis .ball,
    .ajax_loader .lines .line1, .ajax_loader .lines .line2, .ajax_loader .lines .line3, .ajax_loader .lines .line4,
    .ajax_loader .fussion .ball, .ajax_loader .fussion .ball-1, .ajax_loader .fussion .ball-2, .ajax_loader .fussion .ball-3, .ajax_loader .fussion .ball-4,
    .ajax_loader .wave_circles .ball,
    .ajax_loader .pulse_circles .ball{
    background-color: <?php echo esc_attr($cabin_qode_options['spinner_color']); ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['spinner_color'])) { ?>
    .ajax_loader .pulse_circles .ball{
    border-color: <?php echo esc_attr($cabin_qode_options['spinner_color']); ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['background_color']) || !empty($cabin_qode_options['text_color']) || !empty($cabin_qode_options['text_fontsize']) || !empty($cabin_qode_options['text_fontweight']) || $cabin_qode_options['google_fonts'] != "-1") { ?>
    body{
    <?php if($cabin_qode_options['google_fonts'] != "-1"){ ?>
        <?php $font = str_replace('+', ' ', $cabin_qode_options['google_fonts']); ?>
        font-family: '<?php echo esc_attr($font); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['text_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['text_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['text_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['text_fontsize']); ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['text_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['text_fontweight']);  ?>;<?php } ?>
    }
    <?php if (!empty($cabin_qode_options['background_color'])) { ?>
        body,
        .wrapper,
        .content,
        .full_width,
        .content .container,
        .overlapping_content .content > .container,
        .more_facts_holder,
        ul.qode_pricing_list_holder.with_leaders .qode_pricing_item_text,
        ul.qode_pricing_list_holder.with_leaders .qode_pricing_item_price{
        background-color:<?php echo esc_attr($cabin_qode_options['background_color']);  ?>;
        }
        .oblique-section polygon{
        fill: <?php echo esc_attr($cabin_qode_options['background_color']);?>;
        }
    <?php } ?>
<?php } ?>


<?php if (isset($cabin_qode_options['enable_title_oblique']) && ($cabin_qode_options['enable_title_oblique']=='yes') && isset($cabin_qode_options['title_oblique_section_color']) && !empty($cabin_qode_options['title_oblique_section_color'])) { ?>
    .oblique-section.svg-title-bottom polygon{
    fill: <?php echo esc_attr($cabin_qode_options['title_oblique_section_color']);?>;
    }
<?php } ?>


<?php if($cabin_qode_options['google_fonts'] != "-1"){ ?>
    h3, h6,
    .pagination ul li.active span,
    .single_links_pages span,
    .comment_pager .page-numbers,
    .pagination ul li > a.inactive,
    .subtitle,
    .blog_holder article .post_info,
    .comment_holder .comment .text .comment_date,
    .latest_post_holder .post_info_section,
    .projects_holder article .project_category,
    .portfolio_slides .project_category,
    .projects_masonry_holder .project_category,
    .testimonials .testimonial_text_inner p:not(.testimonial_author),
    .price_in_table .mark,
    body div.pp_default .pp_description,
    .side_menu .widget li,
    aside.sidebar .widget:not(.woocommerce) li,
    aside .widget #lang_sel ul li a,
    aside .widget #lang_sel_click ul li a,
    section.side_menu #lang_sel ul li a,
    section.side_menu #lang_sel_click ul li a,
    footer #lang_sel ul li a,
    footer #lang_sel_click ul li a,
    .header_top #lang_sel ul li a,
    .header_top #lang_sel_click ul li a,
    .header_bottom #lang_sel ul li a,
    .header_bottom #lang_sel_click > ul > li a {
    <?php $font = str_replace('+', ' ', $cabin_qode_options['google_fonts']); ?>
    font-family: '<?php echo esc_attr($font); ?>', sans-serif;
    }
    <?php if(function_exists('is_woocommerce')) { ?>
        .woocommerce ul.products li.product span.product-categories a,.woocommerce div.product div.product_meta > span, .woocommerce-page ul.products li.product span.product-categories a, .woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price, .woocommerce aside ul.product_list_widget li span.amount, aside ul.product_list_widget li span.amount, .woocommerce .product .onsale.out-of-stock-button, .woocommerce-pagination ul.page-numbers li span.current, .woocommerce-pagination ul.page-numbers li a, .woocommerce div.product .summary p.price span.amount, .woocommerce .quantity input[type="text"].qty, .woocommerce #content .quantity input[type="text"].qty, .woocommerce-page .quantity input[type="text"].qty, .woocommerce-page #content .quantity input[type="text"].qty, .woocommerce div.product div.product_meta > span span, .woocommerce div.product div.product_meta > span a, .woocommerce aside.sidebar .woocommerce.widget ul.product-categories ul.children li a, aside ul.product-categories ul.children li a, .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories ul.children li a, .shopping_cart_header .header_cart span{
        <?php $font = str_replace('+', ' ', $cabin_qode_options['google_fonts']); ?>
        font-family: '<?php echo esc_attr($font); ?>', sans-serif;
        }
    <?php } ?>
<?php } ?>
<?php if (!empty($cabin_qode_options['background_color_box'])) { ?>
    .wrapper{
    <?php if (!empty($cabin_qode_options['background_color_box'])) { ?> background-color:<?php echo esc_attr($cabin_qode_options['background_color_box']);  ?>; <?php } ?>
    }
<?php } ?>
<?php
$boxed = "no";
if (isset($cabin_qode_options['boxed']) && isset($cabin_qode_options['transparent_content']) && $cabin_qode_options['transparent_content'] == 'no')
    $boxed = $cabin_qode_options['boxed'];
?>
<?php if($boxed == "yes"){ ?>
    body.boxed .wrapper{
    <?php if (!empty($cabin_qode_options['background_color_box'])) { ?> background-color:<?php echo esc_attr($cabin_qode_options['background_color_box']);  ?>; <?php } ?>

    <?php if($cabin_qode_options['pattern_background_image'] != ""){  ?>
        background-image: url('<?php echo esc_url($cabin_qode_options['pattern_background_image']) ?>');
        background-position: 0px 0px;
        background-repeat: repeat;
    <?php } ?>

    <?php if($cabin_qode_options['background_image'] != ""){  ?>
        background-image: url('<?php echo esc_url($cabin_qode_options['background_image']) ?>');
        background-position: center 0px;
        background-repeat: no-repeat;
    <?php } ?>

    <?php if($cabin_qode_options['background_image_attachment'] == "scroll") { ?>
        background-attachment: scroll;
    <?php }
    else { ?>
        background-attachment: fixed;
    <?php } ?>
    }
    body.boxed .content{
    <?php if (!empty($cabin_qode_options['background_color'])) { ?> background-color:<?php echo esc_attr($cabin_qode_options['background_color']);  ?>; <?php } ?>
    }

    <?php if (isset($cabin_qode_options['boxed_padding_general']) && !empty($cabin_qode_options['boxed_padding_general'])) {?>
        @media only screen and (min-width:600px){
        body.boxed:not(.page-template-default) .full_width_inner > .vc_row > .full_section_inner,
        body.boxed:not(.page-template-default) .parallax_full_section_inner,
        body.boxed .container_inner.default_template_holder,
        body.boxed .full_width .parallax_content,
        body.boxed .full_width .full_width_inner > .vc_row.grid_section > .section_inner{
        padding-left: <?php echo esc_attr($cabin_qode_options['boxed_padding_general'])."%";?> !important;
        padding-right: <?php echo esc_attr($cabin_qode_options['boxed_padding_general'])."%";?> !important;
        box-sizing: border-box;
        }

        .boxed .section .section_inner,
        .grid_section .section_inner,
        .parallax_grid_section .parallax_section_inner,
        .content_inner > .container > .container_inner{
        width:auto !important;
        }

        }

        @media only screen and (max-width:600px){
        body.boxed:not(.page-template-default) .full_width_inner > .vc_row > .full_section_inner,
        body.boxed:not(.page-template-default) .parallax_full_section_inner,
        body.boxed .container_inner.default_template_holder,
        body.boxed .full_width .parallax_content,
        body.boxed .full_width .full_width_inner > .vc_row.grid_section > .section_inner,
        body.boxed .container_inner > .vc_row.grid_section > .section_inner{
        margin: auto;
        }

        body.boxed .full_width .parallax_content{
        box-sizing:border-box;
        }

        }

    <?php } ?>



<?php } ?>

<?php if(isset($cabin_qode_options['transparent_content']) && $cabin_qode_options['transparent_content'] == 'yes'){ ?>
    .transparent_content,
    .transparent_content.overlapping_content .content .content_inner > .container,
    .transparent_content.overlapping_content .content .content_inner > .full_width > .full_width_inner{
    <?php if(isset($cabin_qode_options['transparent_content_background_color']) && $cabin_qode_options['transparent_content_background_color'] !== ''){ ?>
        background-color: <?php echo esc_attr($cabin_qode_options['transparent_content_background_color']); ?>;
    <?php } ?>

    <?php if(isset($cabin_qode_options['transparent_content_background_image']) && $cabin_qode_options['transparent_content_background_image'] !== ''){ ?>
        background-image: url('<?php echo esc_url($cabin_qode_options['transparent_content_background_image']) ?>');
        background-attachment: fixed;
        background-position: center 0px;
        background-repeat: no-repeat;
    <?php } ?>

    <?php if(isset($cabin_qode_options['transparent_content_pattern_background_image']) && $cabin_qode_options['transparent_content_pattern_background_image'] !== ''){ ?>
        background-image: url('<?php echo esc_url($cabin_qode_options['transparent_content_pattern_background_image']) ?>');
        background-position: 0px 0px;
        background-repeat: repeat;
    <?php } ?>

    }

    .wrapper,
    .content,
    .full_width,
    .content .container,
    .more_facts_holder,
    ul.qode_pricing_list_holder.with_leaders .qode_pricing_item_text,
    ul.qode_pricing_list_holder.with_leaders .qode_pricing_item_price,
    .container_inner.default_template_holder,
    .paspartu_outer,
    .paspartu_left,
    .paspartu_right,
    .paspartu_bottom,
    .paspartu_outer .q_slider,
    .paspartu_outer .content:not(.has_slider) .content_inner{
    background-color: transparent !important;
    }

<?php } ?>

<?php if (!empty($cabin_qode_options['highlight_color'])) { ?>
    span.highlight {
    background-color: <?php echo esc_attr($cabin_qode_options['highlight_color']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['header_background_color']) || $cabin_qode_options['header_background_transparency_initial'] != "") {
    if(!empty($cabin_qode_options['header_background_color'])){
        $bg_color = cabin_qode_hex2rgb($cabin_qode_options['header_background_color']);
    }else{
        $bg_color = cabin_qode_hex2rgb('#ffffff');
    }
    if ($cabin_qode_options['header_background_transparency_initial'] != "") {
        $bg_color_transparency = $cabin_qode_options['header_background_transparency_initial'];
    }else{
        $bg_color_transparency = 1;
    }
    ?>
    .header_bottom{
    background-color: rgba(<?php echo esc_attr($bg_color[0]); ?>,<?php echo esc_attr($bg_color[1]); ?>,<?php echo esc_attr($bg_color[2]); ?>,<?php echo esc_attr($bg_color_transparency); ?>);
    }

    <?php if(isset($bg_color_transparency) && $bg_color_transparency == 0) { ?>

        .header_bottom,
        .header_top{
        border-bottom: 0;
        }

        .header_bottom {
        box-shadow: none;
        }

        .header_top .right .inner > div:first-child,
        .header_top .right .inner > div,
        .header_top .left .inner > div:last-child,
        .header_top .left .inner > div {
        border: none;
        }

    <?php } ?>

<?php } ?>

<?php if (!empty($cabin_qode_options['header_grid_background_color']) || $cabin_qode_options['header_grid_background_transparency_initial'] !== "") {

    if(!empty($cabin_qode_options['header_grid_background_color'])){
        $bg_color = cabin_qode_hex2rgb($cabin_qode_options['header_grid_background_color']);
    }else{
        $bg_color = cabin_qode_hex2rgb('#ffffff');
    }
    if ($cabin_qode_options['header_grid_background_transparency_initial'] != "") {
        $bg_color_transparency = $cabin_qode_options['header_grid_background_transparency_initial'];
    }else{
        $bg_color_transparency = 1;
    }
    ?>
    .header_bottom .container_inner,
    .bottom_header .container_inner	{
    background-color: rgba(<?php echo esc_attr($bg_color[0]); ?>,<?php echo esc_attr($bg_color[1]); ?>,<?php echo esc_attr($bg_color[2]); ?>,<?php echo esc_attr($bg_color_transparency); ?>);
    }

<?php } ?>

<?php if (isset($cabin_qode_options['header_in_grid_padding_left']) && $cabin_qode_options['header_in_grid_padding_left'] !== '') {

    $padding_left = $cabin_qode_options['header_in_grid_padding_left'].'px';

    ?>

    .header_bottom .container_inner{
    padding-left: <?php echo esc_attr($padding_left); ?>;
    }

    .page_header.regular .header_bottom .q_logo,
    .page_header.fixed .header_bottom .q_logo,
    .page_header.stick .header_bottom .q_logo {
    left: <?php echo esc_attr($padding_left); ?>;
    }

<?php } ?>

<?php if (isset($cabin_qode_options['header_in_grid_padding_right']) && $cabin_qode_options['header_in_grid_padding_right'] !== '') {

    $padding_right = $cabin_qode_options['header_in_grid_padding_right'].'px';

    ?>

    .header_bottom .container_inner{
    padding-right: <?php echo esc_attr($padding_right); ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['content_grid_position']) && ($cabin_qode_options['content_grid_position'])=="left") { ?>
    @media only screen and (min-width: 1000px){
    .container_inner{
    margin-left:0px;
    }
    }
<?php } ?>

<?php if(isset($cabin_qode_options['content_grid_position']) && ($cabin_qode_options['content_grid_position'])=="right") { ?>
    @media only screen and (min-width: 1000px){
    .container_inner{
    margin-right:0px;
    }
    }
<?php } ?>

<?php if (isset($cabin_qode_options['background_color_grid']) && !empty($cabin_qode_options['background_color_grid'])) {
    if($cabin_qode_options['overlapping_content'] == 'no') {
        ?>
        .container_inner.default_template_holder{
        background-color:<?php echo esc_attr($cabin_qode_options['background_color_grid']);  ?>;
        }
    <?php } else { ?>
        .overlapping_content{
        background-color:<?php echo esc_attr($cabin_qode_options['background_color_grid']);  ?>;
        }
        <?php
    }
}
?>

<?php if (!empty($cabin_qode_options['header_separator_color'])) { ?>
    .drop_down .wide .second ul li{
    border-color:<?php echo esc_attr($cabin_qode_options['header_separator_color']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['content_top_padding']) && $cabin_qode_options['content_top_padding'] !== '') { ?>
    .content .content_inner > .container > .container_inner,
    .content .content_inner > .full_width > .full_width_inner{
    padding-top: <?php echo esc_attr($cabin_qode_options['content_top_padding']); ?>px;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['content_top_padding_default_template']) && $cabin_qode_options['content_top_padding_default_template'] !== '') { ?>
    .content .content_inner > .container > .container_inner.default_template_holder{
    padding-top: <?php echo esc_attr($cabin_qode_options['content_top_padding_default_template']); ?>px;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['content_top_padding_mobile']) && $cabin_qode_options['content_top_padding_mobile'] !== '') { ?>
    @media only screen and (max-width: 1000px){
    .content .content_inner > .container > .container_inner,
    .content .content_inner > .full_width > .full_width_inner,
    .content .content_inner > .container > .container_inner.default_template_holder{
    padding-top: <?php echo esc_attr($cabin_qode_options['content_top_padding_mobile']); ?>px !important;
    }
    }
<?php } ?>


<?php if ((isset($cabin_qode_options['border_bottom_title_area']) && $cabin_qode_options['border_bottom_title_area'] == "yes") && (!empty($cabin_qode_options['border_bottom_title_area_color']) || !empty($cabin_qode_options['border_bottom_title_area_width'])) ) { ?>
    .title{
    border-bottom-style:solid;
    border-bottom-color:<?php echo esc_attr($cabin_qode_options['border_bottom_title_area_color']); ?>;
    border-bottom-width:<?php echo esc_attr($cabin_qode_options['border_bottom_title_area_width']); ?>px;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['header_in_grid']) && ($cabin_qode_options['header_in_grid'])=="no" && isset($cabin_qode_options['header_left_padding']) && $cabin_qode_options['header_left_padding'] !== ""){?>
    @media only screen and (min-width: 1000px){
    .header_bottom{
    padding-left: <?php echo esc_attr($cabin_qode_options['header_left_padding']); ?>px;
    }
    header .header_inner_left{
    left: <?php echo esc_attr($cabin_qode_options['header_left_padding']); ?>px;
    }
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_in_grid']) && ($cabin_qode_options['header_in_grid'])=="no" && isset($cabin_qode_options['header_right_padding']) && $cabin_qode_options['header_right_padding'] !== ""){?>
    @media only screen and (min-width: 1000px){
    .header_bottom{
    padding-right: <?php echo esc_attr($cabin_qode_options['header_right_padding']); ?>px;
    }
    }
<?php } ?>

<?php if( isset($cabin_qode_options['header_bottom_appearance']) && $cabin_qode_options['header_bottom_appearance']=="fixed_hiding" && isset($cabin_qode_options['menu_background_color']) && !empty($cabin_qode_options['menu_background_color'])){?>
    @media only screen and (min-width: 1000px){
    header:not(.sticky):not(.scrolled) .holeder_for_hidden_menu{
    background-color: <?php echo esc_attr($cabin_qode_options['menu_background_color']); ?>;
    }
    }
<?php } ?>

<?php if( isset($cabin_qode_options['header_bottom_appearance']) && $cabin_qode_options['header_bottom_appearance']=="fixed_hiding" && isset($cabin_qode_options['enable_menu_top_bottom_border']) && $cabin_qode_options['enable_menu_top_bottom_border']=='yes' && isset($cabin_qode_options['color_menu_top_bottom_border']) && !empty($cabin_qode_options['color_menu_top_bottom_border'])){?>
    @media only screen and (min-width: 1000px){
    header:not(.sticky):not(.scrolled) .holeder_for_hidden_menu{
    border-bottom-width: 1px;
    border-top-width: 1px;
    border-style: solid;
    border-color: <?php echo esc_attr($cabin_qode_options['color_menu_top_bottom_border']); ?>;
    }
    }
<?php } ?>

<?php if( isset($cabin_qode_options['header_bottom_appearance']) && $cabin_qode_options['header_bottom_appearance']=="stick menu_bottom" && isset($cabin_qode_options['menu_background_color']) && !empty($cabin_qode_options['menu_background_color'])){?>
    @media only screen and (min-width: 1000px){
    header:not(.sticky):not(.scrolled) .header_menu_bottom {
    background-color: <?php echo esc_attr($cabin_qode_options['menu_background_color']); ?>;
    }
    }
<?php } ?>

<?php if( isset($cabin_qode_options['header_bottom_appearance']) && $cabin_qode_options['header_bottom_appearance']=="stick menu_bottom" && isset($cabin_qode_options['enable_menu_top_bottom_border']) && $cabin_qode_options['enable_menu_top_bottom_border']=='yes' && isset($cabin_qode_options['color_menu_top_bottom_border']) && !empty($cabin_qode_options['color_menu_top_bottom_border'])){?>
    @media only screen and (min-width: 1000px){
    header:not(.sticky):not(.scrolled) .header_menu_bottom {
    border-bottom-width: 1px;
    border-top-width: 1px;
    border-style: solid;
    border-color: <?php echo esc_attr($cabin_qode_options['color_menu_top_bottom_border']); ?>;

    }
    }
<?php } ?>

<?php
if (!empty($cabin_qode_options['header_background_color_scroll']) || $cabin_qode_options['header_background_transparency_scroll'] != "") {

    if(!empty($cabin_qode_options['header_background_color_scroll'])){
        $bg_color_scroll = cabin_qode_hex2rgb($cabin_qode_options['header_background_color_scroll']);
    }else{
        $bg_color_scroll = cabin_qode_hex2rgb('#ffffff');
    }

    if ($cabin_qode_options['header_background_transparency_scroll'] != "") {
        $bg_color_scroll_transparency = $cabin_qode_options['header_background_transparency_scroll'];
    }else{
        $bg_color_scroll_transparency = 1;
    }
    ?>
    header.fixed.scrolled .header_bottom,
    header.fixed.scrolled .header_top,
    header.fixed_hiding.scrolled .header_bottom,
    header.fixed_hiding.scrolled .header_top{
    background-color: rgba(<?php echo esc_attr($bg_color_scroll[0]); ?>,<?php echo esc_attr($bg_color_scroll[1]); ?>,<?php echo esc_attr($bg_color_scroll[2]); ?>,<?php echo esc_attr($bg_color_scroll_transparency); ?>) !important;
    }
<?php } ?>

<?php if($cabin_qode_options['header_background_transparency_scroll'] != "" && $cabin_qode_options['header_background_transparency_scroll'] == 0) { ?>

    header.scrolled .header_bottom,
    header.scrolled .header_top {
    border-bottom: 0;
    }

    header.scrolled .header_bottom {
    box-shadow: none;
    }

    header.scrolled .header_top .right .inner > div:first-child,
    header.scrolled .header_top .right .inner > div,
    header.scrolled .header_top .left .inner > div:last-child,
    header.scrolled .header_top .left .inner > div {
    border: none;
    }
<?php } ?>

<?php
if (!empty($cabin_qode_options['header_grid_background_color_scroll']) || $cabin_qode_options['header_grid_background_transparency_scroll'] != "") {

    if(!empty($cabin_qode_options['header_grid_background_color_scroll'])){
        $bg_color_scroll = cabin_qode_hex2rgb($cabin_qode_options['header_grid_background_color_scroll']);
    }else{
        $bg_color_scroll = cabin_qode_hex2rgb('#ffffff');
    }

    if ($cabin_qode_options['header_grid_background_transparency_scroll'] != "") {
        $bg_color_scroll_transparency = $cabin_qode_options['header_grid_background_transparency_scroll'];
    }else{
        $bg_color_scroll_transparency = 1;
    }
    ?>
    header.fixed.scrolled .header_bottom .container_inner,
    header.fixed_hiding.scrolled .header_bottom .container_inner {
    background-color: rgba(<?php echo esc_attr($bg_color_scroll[0]); ?>,<?php echo esc_attr($bg_color_scroll[1]); ?>,<?php echo esc_attr($bg_color_scroll[2]); ?>,<?php echo esc_attr($bg_color_scroll_transparency); ?>) !important;
    }
<?php } ?>

<?php
if (!empty($cabin_qode_options['header_grid_background_color_sticky']) || $cabin_qode_options['header_grid_background_transparency_sticky'] != "") {

    if(!empty($cabin_qode_options['header_grid_background_color_sticky'])){
        $bg_color_sticky = cabin_qode_hex2rgb($cabin_qode_options['header_grid_background_color_sticky']);
    }else{
        $bg_color_sticky = cabin_qode_hex2rgb('#ffffff');
    }

    if ($cabin_qode_options['header_grid_background_transparency_sticky'] != "") {
        $bg_color_sticky_transparency = $cabin_qode_options['header_grid_background_transparency_sticky'];
    }else{
        $bg_color_sticky_transparency = 1;
    }
    ?>
    header.sticky .header_bottom{
    background-color: rgba(<?php echo esc_attr($bg_color_sticky[0]); ?>,<?php echo esc_attr($bg_color_sticky[1]); ?>,<?php echo esc_attr($bg_color_sticky[2]); ?>,<?php echo esc_attr($bg_color_sticky_transparency); ?>) !important;
    }
<?php } ?>


<?php
if (!empty($cabin_qode_options['header_background_color_sticky']) || $cabin_qode_options['header_background_transparency_sticky'] != "") {

    if(!empty($cabin_qode_options['header_background_color_sticky'])){
        $bg_color_sticky = cabin_qode_hex2rgb($cabin_qode_options['header_background_color_sticky']);
    }else{
        $bg_color_sticky = cabin_qode_hex2rgb('#ffffff');
    }

    if ($cabin_qode_options['header_background_transparency_sticky'] != "") {
        $bg_color_sticky_transparency = $cabin_qode_options['header_background_transparency_sticky'];
    }else{
        $bg_color_sticky_transparency = 1;
    }
    ?>
    header.sticky .header_bottom{
    background-color: rgba(<?php echo esc_attr($bg_color_sticky[0]); ?>,<?php echo esc_attr($bg_color_sticky[1]); ?>,<?php echo esc_attr($bg_color_sticky[2]); ?>,<?php echo esc_attr($bg_color_sticky_transparency); ?>) !important;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['header_top_background_color']) || $cabin_qode_options['header_top_transparency'] != "") {
    if(!empty($cabin_qode_options['header_top_background_color'])) {
        $bg_color_top = cabin_qode_hex2rgb($cabin_qode_options['header_top_background_color']);
    } else {
        $bg_color_top = cabin_qode_hex2rgb('#fff');
    }

    if ($cabin_qode_options['header_top_transparency'] != "") {
        $bg_color_transparency = $cabin_qode_options['header_top_transparency'];
    } else{
        $bg_color_transparency = 1;
    }
    ?>

    .header_top{
    background-color: rgba(<?php echo esc_attr($bg_color_top[0]); ?>,<?php echo esc_attr($bg_color_top[1]); ?>,<?php echo esc_attr($bg_color_top[2]); ?>,<?php echo esc_attr($bg_color_transparency); ?>)!important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['header_bottom_border_width']) && $cabin_qode_options['header_bottom_border_width'] !== "" && ($cabin_qode_options['enable_header_bottom_border']=='yes')) {?>

    <?php
    if (isset($cabin_qode_options['header_botom_border_transparency']) && $cabin_qode_options['header_botom_border_transparency'] !== "") {
        $header_border_transparency = cabin_qode_hex2rgb($cabin_qode_options['header_bottom_border_color']);

        if(isset($cabin_qode_options['header_botom_border_in_grid']) && $cabin_qode_options['header_botom_border_in_grid'] == "yes"){ ?>
            header:not(.sticky):not(.scrolled) .header_bottom .container_inner{
            border-color: rgba(<?php echo esc_attr($header_border_transparency[0]); ?>,<?php echo esc_attr($header_border_transparency[1]); ?>,<?php echo esc_attr($header_border_transparency[2]); ?>,<?php echo esc_attr($cabin_qode_options['header_botom_border_transparency']); ?>);
            border-style:solid;
            border-bottom-width: <?php echo esc_attr($cabin_qode_options['header_bottom_border_width']); ?>px;
            }
        <?php } else { ?>
            header:not(.sticky):not(.scrolled) .header_bottom{
            border-color: rgba(<?php echo esc_attr($header_border_transparency[0]); ?>,<?php echo esc_attr($header_border_transparency[1]); ?>,<?php echo esc_attr($header_border_transparency[2]); ?>,<?php echo esc_attr($cabin_qode_options['header_botom_border_transparency']); ?>);
            border-style:solid;
            border-bottom-width: <?php echo esc_attr($cabin_qode_options['header_bottom_border_width']); ?>px;
            }
        <?php }
    } else {
        if(isset($cabin_qode_options['header_botom_border_in_grid']) && $cabin_qode_options['header_botom_border_in_grid'] == "yes"){ ?>
            header:not(.sticky):not(.scrolled) .header_bottom .container_inner{
            border-color:<?php echo esc_attr($cabin_qode_options['header_bottom_border_color']); ?>;
            border-style:solid;
            border-bottom-width: <?php echo esc_attr($cabin_qode_options['header_bottom_border_width']); ?>px;
            }
        <?php } else { ?>
            header:not(.sticky):not(.scrolled) .header_bottom{
            border-color: <?php echo esc_attr($cabin_qode_options['header_bottom_border_color']); ?>;
            border-style:solid;
            border-bottom-width: <?php echo esc_attr($cabin_qode_options['header_bottom_border_width']); ?>px;
            }
        <?php }
    }
}?>

<?php if (isset($cabin_qode_options['enable_header_top_border']) && ($cabin_qode_options['enable_header_top_border']=='yes') && isset($cabin_qode_options['header_top_border_width']) && ($cabin_qode_options['header_top_border_width']!=='')) { ?>
    header:not(.sticky):not(.scrolled) .header_top_bottom_holder{
    border-top-style:solid;
    border-top-width: <?php echo esc_attr($cabin_qode_options['header_top_border_width']); ?>px;
    <?php if (isset($cabin_qode_options['header_top_border_transparency']) && ($cabin_qode_options['header_top_border_transparency']!=='')) {
        $header_border_transparency = cabin_qode_hex2rgb($cabin_qode_options['header_top_border_color']);?>
        border-top-color: rgba(<?php echo esc_attr($header_border_transparency[0]); ?>,<?php echo esc_attr($header_border_transparency[1]); ?>,<?php echo esc_attr($header_border_transparency[2]); ?>,<?php echo esc_attr($cabin_qode_options['header_top_border_transparency']); ?>);
    <?php } else { ?>
        border-top-color:  <?php echo esc_attr($cabin_qode_options['header_top_border_color']); ?>;
    <?php } ?>
    }
<?php }?>

<?php
if (!empty($cabin_qode_options['header_top_background_color']) || $cabin_qode_options['header_background_transparency_scroll'] != "") {

    if(!empty($cabin_qode_options['header_top_background_color'])){
        $bg_color_scroll_top = cabin_qode_hex2rgb($cabin_qode_options['header_top_background_color']);
    }else{
        $bg_color_scroll_top = cabin_qode_hex2rgb('#000000');
    }

    if ($cabin_qode_options['header_background_transparency_scroll'] != "") {
        $bg_color_scroll_transparency = $cabin_qode_options['header_background_transparency_scroll'];
    }else{
        $bg_color_scroll_transparency = 0.7;
    }
    ?>
    header.sticky .header_top{
    background-color: rgba(<?php echo esc_attr($bg_color_scroll_top[0]); ?>,<?php echo esc_attr($bg_color_scroll_top[1]); ?>,<?php echo esc_attr($bg_color_scroll_top[2]); ?>,<?php echo esc_attr($bg_color_scroll_transparency); ?>);
    }
<?php } ?>

<?php
$header_bottom_appearance = "fixed";
if (isset($cabin_qode_options['header_bottom_appearance'])) {
    $header_bottom_appearance = $cabin_qode_options['header_bottom_appearance'];
}
?>

<?php

$header_top_border=0;
$header_bottom_border=0;
if(isset($cabin_qode_options['enable_header_top_border']) && $cabin_qode_options['enable_header_top_border']=='yes' && isset($cabin_qode_options['header_top_border_width']) && $cabin_qode_options['header_top_border_width']!==''){
    $header_top_border = $cabin_qode_options['header_top_border_width'];
}
if(isset($cabin_qode_options['enable_header_bottom_border']) && $cabin_qode_options['enable_header_bottom_border']=='yes' && isset($cabin_qode_options['header_bottom_border_width']) && $cabin_qode_options['header_bottom_border_width']!==''){
    $header_bottom_border = $cabin_qode_options['header_bottom_border_width'];
}

$large_menu_item_border=0;
if(isset($cabin_qode_options['enable_manu_item_border']) && $cabin_qode_options['enable_manu_item_border']=='yes' && isset($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item'){
    if(isset($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='all_borders'){
        $large_menu_item_border = $cabin_qode_options['menu_item_border_width']*2;
    }
    if(isset($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='top_bottom_borders'){
        $large_menu_item_border = $cabin_qode_options['menu_item_border_width']*2;
    }
    if(isset($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border'){
        $large_menu_item_border = $cabin_qode_options['menu_item_border_width'];
    }

}

$header_centered_logo_border = 0;
if(isset($cabin_qode_options['center_logo_image']) && $cabin_qode_options['center_logo_image'] == "yes" && isset($cabin_qode_options['enable_border_top_bottom_menu']) && $cabin_qode_options['enable_border_top_bottom_menu'] == "yes"){
    $header_centered_logo_border = 2;
}


$display_header_top = "yes";
if(isset($cabin_qode_options['header_top_area'])){
    $display_header_top = $cabin_qode_options['header_top_area'];
}
if (!empty($_SESSION['qode_cabin_header_top'])){
    $display_header_top = $_SESSION['qode_cabin_header_top'];
}

if($display_header_top == "no"){
    $margin_top_add = 0;
}else{
    $margin_top_add = 36;
}

$logo_width = $cabin_qode_options['logo_width'];
$logo_height = $cabin_qode_options['logo_height'];


if (!empty($cabin_qode_options['header_height']) && $header_bottom_appearance != "fixed_hiding") {
    $header_height = $cabin_qode_options['header_height'];
} elseif($header_bottom_appearance == "fixed_hiding"){
    $header_height = 90 + $logo_height/2 + 20; // 20 is top and bottom margin of logo
} elseif(isset($cabin_qode_options['center_logo_image']) && $cabin_qode_options['center_logo_image'] == "yes" && $header_bottom_appearance == "fixed") {
    if($header_bottom_appearance == "fixed" && $logo_height > 90){
        $header_height = 90 + 90 + 20; //20 is top and bottom margin of logo, 90 is default header height, other 90 is logo height
    }
    if($header_bottom_appearance == "fixed" && $logo_height < 90){
        $header_height = 90 + $logo_height + 20; //20 is top and bottom margin of logo, 90 is default header height
    }
} else {
    $header_height = 90;
}
if($header_bottom_appearance == "stick menu_bottom") {
    $menu_bottom = 60; // border 1px
    if ($cabin_qode_options['center_logo_image'] == "yes") {
        if(is_active_sidebar('header_fixed_right')){
            $menu_bottom = $menu_bottom + 26; // 26 is for right widget in header bottom (line height of text)
        }
    }
} else {
    $menu_bottom = 0;
}
$header_height = $header_height + $menu_bottom + $header_top_border + $header_bottom_border + $header_centered_logo_border + $large_menu_item_border;

?>


<?php if ($header_bottom_appearance != "fixed" && $header_bottom_appearance != "fixed_hiding" && $header_bottom_appearance != "regular") {?>
    <?php if ($cabin_qode_options['center_logo_image'] != "yes") { ?>
        .content{
        margin-top: <?php echo esc_attr('-'.($margin_top_add + $header_height)); ?>px;
        }
        .content_wrapper{
        margin-top: <?php echo esc_attr($margin_top_add) + esc_attr($header_height); ?>px;
        }
    <?php } else {
        ?>
        <?php if($header_bottom_appearance == "stick menu_bottom") { ?>
            .content{
            margin-top: <?php echo esc_attr('-'.(20 + $logo_height/2 + $menu_bottom + $margin_top_add + $header_top_border + $header_bottom_border + $header_centered_logo_border  + $large_menu_item_border)); // 20 is top margin of centered logo ?>px;
            }
            .content_wrapper{
            margin-top: <?php echo esc_attr(20 + $logo_height/2 + $menu_bottom + $margin_top_add + $header_top_border + $header_bottom_border + $header_centered_logo_border + $large_menu_item_border); // 20 is top margin of centered logo ?>px;
            }
        <?php } elseif($header_bottom_appearance == "stick_with_left_right_menu"){ ?>
            .content{
            margin-top: <?php echo esc_attr('-'.($header_height + $margin_top_add)); ?>px;
            }
            .content_wrapper{
            margin-top: <?php echo esc_attr($header_height) + esc_attr($margin_top_add); ?>px;
            }
        <?php }  else { ?>
            .content{
            margin-top: <?php echo esc_attr('-'.(20 + $logo_height/2 + $header_height + $margin_top_add)); // 20 is top margin of centered logo ?>px;
            }
            .content_wrapper{
            margin-top: <?php echo esc_attr(20 + $logo_height/2 + $header_height + $margin_top_add); // 20 is top margin of centered logo ?>px;
            }
        <?php } ?>
    <?php } ?>
<?php } else { ?>

    <?php if ($header_bottom_appearance == "regular") {
        //only if regular header type and there is slider on the page
        ?>
        <?php if ($cabin_qode_options['center_logo_image'] != "yes") { ?>
            .content.has_slider{
            margin-top: <?php echo esc_attr('-'.($margin_top_add + $header_height)); ?>px;
            }
            .content_wrapper{
            margin-top: <?php echo (intval( $margin_top_add ) + intval( $header_height )); ?>px;
            }
        <?php } else{ ?>
            <?php if($header_height - $logo_height < 0){
                $logo_height = $header_height;
            } ?>

            .content.has_slider{
            margin-top: <?php echo esc_attr('-'.(20 + $logo_height + $margin_top_add + $header_height)); // 20 is top margin of centered logo ?>px;
            }
            .content_wrapper{
            margin-top: <?php echo (20 + $logo_height + $margin_top_add + $header_height); // 20 is top margin of centered logo ?>px;
            }
        <?php } ?>
    <?php } ?>
    .content{
    margin-top: 0;
    }
<?php } ?>

    @media only screen and (max-width: 1000px){
    .content_wrapper{
    margin-top: <?php echo esc_attr($margin_top_add) + esc_attr($cabin_qode_options['header_height_mobile']); ?>px;
    }
    }

<?php // Calculating logo width and setting it to logo wrapper.
//These are initial values, there is a script also calculating these values on certain header behaviour (scroll, resize...) ?>


    header .header_bottom.left_menu_position .logo_wrapper{
    width: <?php echo esc_attr($logo_width)/2; ?>px;
    }

<?php
$search_text_styles = array();

if(isset($cabin_qode_options['search_text_google_fonts']) && $cabin_qode_options['search_text_google_fonts'] !== '-1') {
    $search_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['search_text_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['search_text_fontsize']) && $cabin_qode_options['search_text_fontsize'] !== '') {
    $search_text_styles[] = 'font-size: '.$cabin_qode_options['search_text_fontsize'].'px !important';
}

if(isset($cabin_qode_options['search_text_letterspacing']) && $cabin_qode_options['search_text_letterspacing'] !== '') {
    $search_text_styles[] = 'letter-spacing: '.$cabin_qode_options['search_text_letterspacing'].'px';
}

if(isset($cabin_qode_options['search_text_fontweight']) && $cabin_qode_options['search_text_fontweight'] !== '') {
    $search_text_styles[] = 'font-weight: '.$cabin_qode_options['search_text_fontweight'];
}

if(isset($cabin_qode_options['search_text_fontstyle']) && $cabin_qode_options['search_text_fontstyle'] !== '') {
    $search_text_styles[] = 'font-style: '.$cabin_qode_options['search_text_fontstyle'];
}

if(isset($cabin_qode_options['search_text_texttransform']) && $cabin_qode_options['search_text_texttransform'] !== '') {
    $search_text_styles[] = 'text-transform: '.$cabin_qode_options['search_text_texttransform'];
}

if(isset($cabin_qode_options['search_text_color']) && $cabin_qode_options['search_text_color'] !== '') {
    $search_text_styles[] = 'color: '.$cabin_qode_options['search_text_color'];
}
?>
<?php if(is_array($search_text_styles) && count($search_text_styles)) { ?>
    .qode_search_form_2 input[type="text"],
    .qode_search_form_2 input[type="text"]:focus,
    .qode_search_form_3 input[type="text"],
    .qode_search_form_3 input[type="text"]:focus{
    <?php echo esc_attr(implode(';', $search_text_styles)); ?>
    }
<?php }  ?>

<?php if(isset($cabin_qode_options['search_text_disabled_color']) && !empty($cabin_qode_options['search_text_disabled_color'])){ ?>
    .qode_search_form_2 input[type="text"]::-webkit-input-placeholder,
    .qode_search_form_3 input[type="text"]::-webkit-input-placeholder{
    color: <?php echo esc_attr($cabin_qode_options['search_text_disabled_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_text_disabled_color']) && !empty($cabin_qode_options['search_text_disabled_color'])){ ?>
    .qode_search_form_2 input[type="text"]:-moz-placeholder,
    .qode_search_form_3 input[type="text"]:-moz-placeholder{
    color: <?php echo esc_attr($cabin_qode_options['search_text_disabled_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_text_disabled_color']) && !empty($cabin_qode_options['search_text_disabled_color'])){ ?>
    .qode_search_form_2 input[type="text"]::-moz-placeholder,
    .qode_search_form_3 input[type="text"]::-moz-placeholder{
    color: <?php echo esc_attr($cabin_qode_options['search_text_disabled_color']); ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['search_background_color']) && !empty($cabin_qode_options['search_background_color'])){ ?>
    .qode_search_form_2,
    .qode_search_form_2 input[type="text"],
    .qode_search_form_3,
    .qode_search_form_3 input[type="text"]{
    <?php if(!empty($cabin_qode_options['search_background_color'])){ ?>background-color: <?php echo esc_attr($cabin_qode_options['search_background_color']); ?>; <?php } ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_icon_color']) && !empty($cabin_qode_options['search_icon_color'])){ ?>
    .qode_search_form_2 input[type="submit"],
    .qode_search_form_3 .qode_search_close a{
    color: <?php echo esc_attr($cabin_qode_options['search_icon_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_icon_hover_color']) && !empty($cabin_qode_options['search_icon_hover_color'])){ ?>
    .qode_search_form_2 input[type="submit"]:hover,
    .qode_search_form_3 .qode_search_close a:hover{
    color: <?php echo esc_attr($cabin_qode_options['search_icon_hover_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_icon_disabled_color']) && !empty($cabin_qode_options['search_icon_disabled_color'])){ ?>
    .qode_search_form_2.disabled input[type="submit"],
    .qode_search_form_2.disabled input[type="submit"]:hover{
    color: <?php echo esc_attr($cabin_qode_options['search_icon_disabled_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_icon_size']) && ($cabin_qode_options['search_icon_size'])!==''){ ?>
    <?php $margin_top= -$cabin_qode_options['search_icon_size']/2 ?>
    .qode_search_form_2 input[type="submit"],
    .qode_search_form_3 .qode_search_close{
    font-size: <?php echo esc_attr($cabin_qode_options['search_icon_size']); ?>px;
    margin-top: <?php echo esc_attr($margin_top);?>px;
    }
    .search_covers_header *,
    .search_slides_from_header_bottom .icon_search{
    font-size: <?php echo esc_attr($cabin_qode_options['search_icon_size']); ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['search_height']) && ($cabin_qode_options['search_height'])!==''){ ?>
    .qode_search_form_2 .form_holder_outer,
    .qode_search_form_2.animated .form_holder_outer,
    .qode_search_form_2{
    height: <?php echo esc_attr($cabin_qode_options['search_height']); ?>px;
    }
<?php } ?>


<?php if (!(isset($cabin_qode_options['header_height'])) || ($cabin_qode_options['header_height'])=='') { ?>
    .logo_wrapper,
    .side_menu_button,
    .header_bottom_right_widget_holder,
    .shopping_cart_inner,
    .side_menu .close_side_menu_holder{
    height: <?php echo esc_attr(90 + $large_menu_item_border); ?>px;
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['header_bottom_appearance'])) && ($cabin_qode_options['header_bottom_appearance'])=='stick menu_bottom') { ?>
    .menu_bottom .side_menu_button,
    .menu_bottom .header_bottom_right_widget_holder,
    .menu_bottom .shopping_cart_inner{
    height: <?php echo esc_attr(60 + $large_menu_item_border); ?>px!important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['header_height']) && ($cabin_qode_options['header_height'])!=='') { ?>

    .logo_wrapper,
    .side_menu_button,
    .header_bottom_right_widget_holder,
    .shopping_cart_inner,
    .side_menu .close_side_menu_holder{
    height: <?php echo esc_attr($cabin_qode_options['header_height']) + esc_attr($large_menu_item_border);  ?>px;
    }

    <?php if($header_bottom_appearance == "fixed_hiding") { ?>
        .content.content_top_margin{
        margin-top: <?php echo esc_attr($cabin_qode_options['header_height']) + esc_attr($margin_top_add) + esc_attr($logo_height)/2 + 20 + esc_attr($header_top_border) + esc_attr($header_bottom_border) + esc_attr($header_centered_logo_border) + esc_attr($large_menu_item_border); // 20 is top and bottom margin of logo ?>px !important;
        }
    <?php } elseif($header_bottom_appearance == "fixed" && $cabin_qode_options['center_logo_image'] == "yes"){
        ?>

        .content.content_top_margin{
        <?php if ($cabin_qode_options['header_height'] > $logo_height) {?>
            margin-top: <?php echo cabin_qode_get_module_part( ($cabin_qode_options['header_height']) + $margin_top_add + $logo_height + 20 + $header_top_border + $header_bottom_border + $header_centered_logo_border + $large_menu_item_border ); // 20 is top margin of logo ?>px !important;
        <?php } else { ?>
            margin-top: <?php echo cabin_qode_get_module_part( ($cabin_qode_options['header_height'])*2 + $margin_top_add + 20 + $header_top_border + $header_bottom_border + $header_centered_logo_border + $large_menu_item_border ); // 20 is top margin of logo ?>px !important;
        <?php } ?>
        }
    <?php } else { ?>
        .content.content_top_margin{
        margin-top: <?php echo esc_attr($cabin_qode_options['header_height']) + esc_attr($margin_top_add) + esc_attr($header_top_border) + esc_attr($header_bottom_border) + esc_attr($header_centered_logo_border) + esc_attr($large_menu_item_border);  ?>px !important;
        }
    <?php } ?>

    header:not(.centered_logo) .header_fixed_right_area {
    line-height: <?php echo esc_attr($cabin_qode_options['header_height']);  ?>px;
    }

    .vertical_menu_enabled .content.content_top_margin {
    margin-top: 0px !important;
    }

<?php } else { ?>
    .content.content_top_margin{
    margin-top: <?php echo esc_attr($header_height) + esc_attr($margin_top_add); ?>px !important;
    }

    .vertical_menu_enabled .content.content_top_margin{
    margin-top: 0px !important;
    }
<?php } ?>



<?php if (!empty($cabin_qode_options['header_height_scroll'])) { ?>
    header.scrolled .logo_wrapper,
    header.scrolled .header_bottom_right_widget_holder,
    header.scrolled .side_menu_button{
    height: <?php echo esc_attr($cabin_qode_options['header_height_scroll']);  ?>px;
    }

    header.scrolled nav.main_menu ul li a {
    line-height: <?php echo esc_attr($cabin_qode_options['header_height_scroll']);  ?>px;
    }

    header.scrolled .drop_down .second{
    top: <?php echo esc_attr($cabin_qode_options['header_height_scroll']);  ?>px;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['header_height_sticky'])) { ?>
    header.sticky .logo_wrapper,
    header.sticky.centered_logo .logo_wrapper,
    header.sticky .side_menu_button,
    header.sticky .header_bottom_right_widget_holder,
    header.sticky .shopping_cart_inner,
    .side_menu.sticky .close_side_menu_holder
    {
    height: <?php echo esc_attr($cabin_qode_options['header_height_sticky']) + esc_attr($large_menu_item_border);  ?>px !important;
    }

    header.sticky nav.main_menu > ul > li > a,
    .light.sticky nav.main_menu > ul > li > a,
    .light.sticky nav.main_menu > ul > li > a:hover,
    .light.sticky nav.main_menu > ul > li.active > a,
    .dark.sticky nav.main_menu > ul > li > a,
    .dark.sticky nav.main_menu > ul > li > a:hover,
    .dark.sticky nav.main_menu > ul > li.active > a {
    line-height: <?php echo esc_attr($cabin_qode_options['header_height_sticky']);  ?>px;
    }

    header.sticky .drop_down .second{
    top: <?php echo esc_attr($cabin_qode_options['header_height_sticky']) + esc_attr($large_menu_item_border);?>px;
    }
<?php } ?>

<?php if (!(isset($cabin_qode_options['header_height_sticky'])) || ($cabin_qode_options['header_height_sticky'])=='') { ?>
    header.sticky .logo_wrapper,
    header.sticky .side_menu_button,
    header.sticky .header_bottom_right_widget_holder,
    header.sticky .shopping_cart_inner,
    .side_menu.sticky .close_side_menu_holder{
    height: <?php echo esc_attr(60 + $large_menu_item_border);  ?>px !important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['disable_text_shadow_for_sticky']) && $cabin_qode_options['disable_text_shadow_for_sticky'] == "yes") { ?>
    header.sticky .header_bottom,
    header.fixed.scrolled .header_bottom,
    header.fixed_hiding.scrolled .header_bottom{
    box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_height_scroll_hidden']) && $cabin_qode_options['header_height_scroll_hidden'] !== "") { ?>
    @media only screen and (min-width: 1000px){
    header.fixed_hiding.centered_logo.fixed_hiding .header_inner_left,
    header.fixed_hiding .q_logo_hidden a{
    height: <?php echo esc_attr($cabin_qode_options['header_height_scroll_hidden']);  ?>px;
    }
    }

    header.scrolled nav.main_menu ul li a {
    line-height: <?php echo esc_attr($cabin_qode_options['header_height_scroll_hidden']);  ?>px;
    }

    header.scrolled .drop_down .second{
    top: <?php echo esc_attr($cabin_qode_options['header_height_scroll_hidden']) + esc_attr($large_menu_item_border);  ?>px;
    }

    header.fixed_hiding.scrolled:hover .holeder_for_hidden_menu{
    max-height: <?php echo esc_attr($cabin_qode_options['header_height_scroll_hidden']) + esc_attr($large_menu_item_border); ?>px;
    }
    header.fixed_hiding.scrolled:hover .holeder_for_hidden_menu .side_menu_button,
    header.fixed_hiding.scrolled:hover .holeder_for_hidden_menu .header_bottom_right_widget_holder,
    header.fixed_hiding.scrolled:hover .holeder_for_hidden_menu .shopping_cart_inner{
    height: <?php echo esc_attr($cabin_qode_options['header_height_scroll_hidden']) + esc_attr($large_menu_item_border);  ?>px !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['dropdown_top_position']) && $cabin_qode_options['dropdown_top_position'] !== '') { ?>
    header:not(.sticky):not(.scrolled) .drop_down .second {
    top: <?php echo esc_attr($cabin_qode_options['dropdown_top_position']).'%;'; ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_height_mobile']) && $cabin_qode_options['header_height_mobile'] !== "") { ?>
    @media only screen and (max-width: 1000px){
    .mobile_menu_button, .logo_wrapper, .side_menu_button, .shopping_cart_inner, .header_bottom_right_widget_holder,
    .side_menu .close_side_menu_holder{
    height: <?php echo esc_attr($cabin_qode_options['header_height_mobile']); ?>px !important;
    }
    }
<?php } ?>

<?php if(isset($cabin_qode_options['logo_image'])){
    ?>
    @media only screen and (min-width: 1000px){
    header.fixed_hiding .q_logo a,
    header.fixed_hiding .q_logo{
    max-height: <?php echo esc_attr(intval($logo_height)/2); ?>px;
    }
    }
    <?php
} ?>

<?php if(isset($cabin_qode_options['header_height']) && $cabin_qode_options['header_height'] != ''){
    ?>
    @media only screen and (min-width: 1000px){
    header.fixed_hiding .holeder_for_hidden_menu{
    max-height: <?php echo esc_attr($cabin_qode_options['header_height']) + esc_attr($large_menu_item_border); ?>px;
    }
    }
    <?php
} ?>

<?php if((isset($cabin_qode_options['color_border_top_bottom_menu']) && $cabin_qode_options['color_border_top_bottom_menu'] != "")){ ?>
    header.centered_logo .main_menu_and_widget_holder{
    border-color: <?php echo esc_attr($cabin_qode_options['color_border_top_bottom_menu']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['logo_mobile_header_height']) && !empty($cabin_qode_options['logo_mobile_header_height'])){ ?>
    @media only screen and (max-width: 1000px){
    .q_logo a{
    height: <?php echo esc_attr($cabin_qode_options['logo_mobile_header_height']); ?>px !important;
    }
    }
<?php } ?>

<?php if(isset($cabin_qode_options['logo_mobile_height']) && !empty($cabin_qode_options['logo_mobile_height'])){?>
    @media only screen and (max-width: 480px){
    .q_logo a{
    height: <?php echo esc_attr($cabin_qode_options['logo_mobile_height']);?>px !important;
    }
    }
<?php } ?>

<?php
$parallax_onoff = "on";
if (isset($cabin_qode_options['parallax_onoff']))
    $parallax_onoff = $cabin_qode_options['parallax_onoff'];
if ($parallax_onoff == "off"){
    ?>
    .touch section.parallax_section_holder{
    height: auto !important;
    min-height: 300px;
    background-position: center top !important;
    background-attachment: scroll;
    background-size: cover;
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['header_height'])) { ?>
    nav.main_menu > ul > li > a{
    line-height: <?php echo esc_attr($cabin_qode_options['header_height']);  ?>px;
    }
<?php } ?>

<?php
if((isset($cabin_qode_options['dropdown_background_color']) && $cabin_qode_options['dropdown_background_color'] != "") ||
    (isset($cabin_qode_options['dropdown_background_transparency'])) && $cabin_qode_options['dropdown_background_transparency'] != "") {

    //dropdown background and transparency styles
    $dropdown_bg_styles                 = '';
    $dropdown_bg_color                  = '';
    $dropdown_bg_color_initial          = '#ffffff';
    $dropdown_bg_transparency           = '';
    $dropdown_bg_transparency_initial   = 1;

    $dropdown_bg_color        = $cabin_qode_options['dropdown_background_color'] != "" ? $cabin_qode_options['dropdown_background_color'] : $dropdown_bg_color_initial;
    $dropdown_bg_transparency = $cabin_qode_options['dropdown_background_transparency'] != "" ? $cabin_qode_options['dropdown_background_transparency'] : $dropdown_bg_transparency_initial;

    $dropdown_bg_color_rgb    = cabin_qode_hex2rgb($dropdown_bg_color);

    ?>

    .drop_down .second .inner ul,
    .drop_down .second .inner ul li ul,
    .shopping_cart_dropdown,
    li.narrow .second .inner ul,
    .header_top #lang_sel ul ul,
    .header_top #lang_sel_click ul ul,
    .header_bottom #lang_sel ul ul,
    .header_bottom #lang_sel_click  ul ul,
    .header-widget.widget_nav_menu ul ul	{
    background-color: <?php echo esc_attr($dropdown_bg_color);  ?>;
    background-color: rgba(<?php echo esc_attr($dropdown_bg_color_rgb[0]); ?>,<?php echo esc_attr($dropdown_bg_color_rgb[1]); ?>,<?php echo esc_attr($dropdown_bg_color_rgb[2]); ?>,<?php echo esc_attr($dropdown_bg_transparency); ?>);
    }

<?php  } //end dropdown background and transparency styles ?>

<?php if(isset($cabin_qode_options['dropdown_top_separator_color']) && !empty($cabin_qode_options['dropdown_top_separator_color'])){?>
    .drop_down .second{
    border-top-color: <?php echo esc_attr($cabin_qode_options['dropdown_top_separator_color']); ?>;
    }
<?php } ?>



<?php
if((isset($cabin_qode_options['dropdown_top_padding']) && $cabin_qode_options['dropdown_top_padding']!=='') || (isset($cabin_qode_options['dropdown_border_around']) && $cabin_qode_options['dropdown_border_around'] == "no")){

    $menu_inner_ul_top = 15; //default value without border
    if(isset($cabin_qode_options['dropdown_top_padding']) && ($cabin_qode_options['dropdown_top_padding'])!==''){?>
        li.narrow .second .inner ul,
        .drop_down .wide .second .inner > ul{
        padding-top: <?php echo esc_attr($cabin_qode_options['dropdown_top_padding']); ?>px;
        }
        <?php
        $menu_inner_ul_top = $cabin_qode_options['dropdown_top_padding']; //overwrite default value
    } ?>
    <?php if(isset($cabin_qode_options['dropdown_border_around']) && $cabin_qode_options['dropdown_border_around'] == "yes"){
        $menu_inner_ul_top += 1; //top border is 1px
    }
    ?>
    .drop_down .narrow .second .inner ul li ul,
    .drop_down.slide_from_bottom .narrow .second .inner ul li:hover ul{
    top:-<?php echo esc_attr($menu_inner_ul_top); ?>px;
    }

<?php } ?>



<?php if(isset($cabin_qode_options['dropdown_bottom_padding']) && ($cabin_qode_options['dropdown_bottom_padding'])!==''){?>
    li.narrow .second .inner ul,
    .drop_down .wide .second .inner > ul{
    padding-bottom: <?php echo esc_attr($cabin_qode_options['dropdown_bottom_padding']); ?>px;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['enable_dropdown_top_separator']) && $cabin_qode_options['enable_dropdown_top_separator'] == "no"){?>
    .drop_down .second{
    border-top: 0 !important;
    }
<?php } ?>

<?php
$dropdown_separator_full_width = 'no';
if(!empty($cabin_qode_options['enable_dropdown_separator_full_width']) && $cabin_qode_options['enable_dropdown_separator_full_width'] == "yes"){
    $dropdown_separator_full_width = $cabin_qode_options['enable_dropdown_separator_full_width'];
}
if(!empty($cabin_qode_options['dropdown_separator_color']) && $dropdown_separator_full_width != 'yes'){?>
    .drop_down .second .inner ul li a,
    .header-widget.widget_nav_menu ul.menu li ul li a {
    border-color: <?php echo esc_attr($cabin_qode_options['dropdown_separator_color']); ?>;
    }
<?php } ?>
<?php
if(!empty($cabin_qode_options['dropdown_separator_color']) && $dropdown_separator_full_width == 'yes'){?>
    .drop_down .second .inner ul li,
    .header-widget.widget_nav_menu ul.menu li ul li{
    border-bottom: 1px solid <?php echo esc_attr($cabin_qode_options['dropdown_separator_color']); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['dropdown_vertical_separator_color'])){?>
    .drop_down .wide .second ul li{
    border-left-color: <?php echo esc_attr($cabin_qode_options['dropdown_vertical_separator_color']); ?>;
    }
<?php } ?>

<?php if ((!empty($cabin_qode_options['menu_lineheight'])) && $cabin_qode_options['menu_lineheight'] != "") { ?>
    nav.main_menu > ul > li > a > span.item_inner{
    <?php if (!empty($cabin_qode_options['menu_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['menu_lineheight']);  ?>px; <?php } ?>
    }
<?php }?>

<?php if (!empty($cabin_qode_options['menu_color']) || !empty($cabin_qode_options['menu_fontsize']) || !empty($cabin_qode_options['menu_fontstyle']) || !empty($cabin_qode_options['menu_fontweight']) || !empty($cabin_qode_options['menu_texttransform']) || (isset($cabin_qode_options['menu_letter_spacing']) && $cabin_qode_options['menu_letter_spacing'] !== '') || $cabin_qode_options['menu_google_fonts'] != "-1") { ?>
    nav.main_menu > ul > li > a{
    <?php if (!empty($cabin_qode_options['menu_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['menu_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['menu_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['menu_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['menu_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['menu_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['menu_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['menu_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['menu_letterspacing']);  ?>px; <?php } ?>
    }
<?php }?>

<?php if (!empty($cabin_qode_options['menu_color']) || !empty($cabin_qode_options['menu_fontsize']) || !empty($cabin_qode_options['menu_fontstyle']) || !empty($cabin_qode_options['menu_fontweight']) || !empty($cabin_qode_options['menu_texttransform']) || (isset($cabin_qode_options['menu_letter_spacing']) && $cabin_qode_options['menu_letter_spacing'] !== '') || $cabin_qode_options['menu_google_fonts'] != "-1") { ?>
    .header_bottom #lang_sel > ul > li > a,
    .header_bottom #lang_sel_click > ul > li > a,
    .header_bottom #lang_sel ul > li:hover > a{
    <?php if (!empty($cabin_qode_options['menu_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['menu_color']);  ?> !important; <?php } ?>
    <?php if($cabin_qode_options['menu_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['menu_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['menu_fontsize']);  ?>px !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['menu_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['menu_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['menu_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['menu_letterspacing']);  ?>px; <?php } ?>
    }
<?php }?>

<?php if($cabin_qode_options['menu_google_fonts'] != "-1"){ ?>
    .header_bottom #lang_sel_list{
    font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['menu_google_fonts'])); ?>', sans-serif !important;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && (!empty($cabin_qode_options['menu_text_background_color']) || (!empty($cabin_qode_options['enable_manu_item_border']) && $cabin_qode_options['enable_manu_item_border']=='yes'))){ ?>
    nav.main_menu > ul > li > a > span.item_inner{
    <?php if (!empty($cabin_qode_options['menu_text_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_text_background_color']);  ?>; <?php } ?>

    <?php if($cabin_qode_options['enable_manu_item_border']=='yes' ){?>

        <?php if(isset($cabin_qode_options['menu_item_border_radius']) && ($cabin_qode_options['menu_item_border_radius'])!==''){?>border-radius: <?php echo esc_attr($cabin_qode_options['menu_item_border_radius']); ?>px;<?php } ?>

        <?php if(isset($cabin_qode_options['menu_item_border_style_style']) && ($cabin_qode_options['menu_item_border_style_style'])!==''){?>
            border-style: <?php echo esc_attr($cabin_qode_options['menu_item_border_style_style']); ?>;
        <?php } ?>


        <?php if (isset($cabin_qode_options['menu_item_border_width']) && $cabin_qode_options['menu_item_border_width'] !== '') { ?> border-width: <?php echo esc_attr($cabin_qode_options['menu_item_border_width']);  ?>px; <?php } ?>
        <?php if (!empty($cabin_qode_options['menu_item_border_color']) ) { ?> border-color: <?php echo esc_attr($cabin_qode_options['menu_item_border_color']);  ?>; <?php } ?>

        <?php if(!empty($cabin_qode_options['menu_item_border_style'])){ ?>

            <?php if (($cabin_qode_options['menu_item_border_style']=='top_bottom_borders')){?>
                border-left: none;
                border-right: none;
            <?php } ?>

            <?php if (($cabin_qode_options['menu_item_border_style']=='right_border')) { ?>
                border-left: none;
                border-top: none;
                border-bottom: none;
            <?php } ?>

            <?php if (($cabin_qode_options['menu_item_border_style']=='bottom_border')) { ?>
                border-left: none;
                border-top: none;
                border-right: none;
            <?php } ?>

        <?php } ?>
    <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['menu_item_border_style']) && ($cabin_qode_options['menu_item_border_style']=='right_border')) { ?>
    nav.main_menu > ul > li:last-child > a > span.item_inner{
    border-right: none;
    }
    nav.main_menu > ul > li:last-child > a{
    border-right: none;
    }

<?php } ?>



<?php if(!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_color'])){ ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li > a > span.item_inner{
    border-color: #fff;
    }
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li > a > span.item_inner{
    border-color: #000;
    }
<?php } ?>



<?php if(!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_hover_border_color'])){ ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li:hover > a > span.item_inner{
    border-color: #fff;
    }
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li:hover > a > span.item_inner{
    border-color: #000;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_active_border_color'])){ ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active > a > span.item_inner{
    border-color: #fff;
    }
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active > a > span.item_inner{
    border-color: #000;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['enable_menu_item_text_decoration']) && ($cabin_qode_options['enable_menu_item_text_decoration']=='yes')) { ?>

    <?php if (isset($cabin_qode_options['menu_item_text_decoration_style']) &&  $cabin_qode_options['menu_item_text_decoration_style']=='none'){ ?>
        nav.main_menu > ul > li:hover > a > span.item_inner,
        nav.main_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: none;
        }
    <?php }  ?>
    <?php if(isset($cabin_qode_options['menu_item_text_decoration_style']) &&  $cabin_qode_options['menu_item_text_decoration_style']=='underline'){ ?>
        nav.main_menu > ul > li:hover > a > span.item_inner,
        nav.main_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: underline;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['menu_item_text_decoration_style']) &&  $cabin_qode_options['menu_item_text_decoration_style']=='line-through'){ ?>
        nav.main_menu > ul > li:hover > a > span.item_inner,
        nav.main_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: line-through;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['menu_item_text_decoration_style']) &&  $cabin_qode_options['menu_item_text_decoration_style']=='overline'){ ?>
        nav.main_menu > ul > li:hover > a > span.item_inner,
        nav.main_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: overline;
        }
    <?php } ?>


    <?php if (isset($cabin_qode_options['menu_item_active_text_decoration_style']) &&  $cabin_qode_options['menu_item_active_text_decoration_style']=='none'){ ?>
        nav.main_menu > ul > li.active > a > span.item_inner{
        text-decoration: none;
        }
    <?php }  ?>
    <?php if(isset($cabin_qode_options['menu_item_active_text_decoration_style']) &&  $cabin_qode_options['menu_item_active_text_decoration_style']=='underline'){ ?>
        nav.main_menu > ul > li.active > a > span.item_inner{
        text-decoration: underline;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['menu_item_active_text_decoration_style']) &&  $cabin_qode_options['menu_item_active_text_decoration_style']=='line-through'){ ?>
        nav.main_menu > ul > li.active > a > span.item_inner{
        text-decoration: line-through;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['menu_item_active_text_decoration_style']) &&  $cabin_qode_options['menu_item_active_text_decoration_style']=='overline'){ ?>
        nav.main_menu > ul > li.active > a > span.item_inner{
        text-decoration: overline;
        }
    <?php } ?>

<?php } ?>


<?php if(isset($cabin_qode_options['enable_vertical_menu_item_text_decoration']) && ($cabin_qode_options['enable_vertical_menu_item_text_decoration']=='yes')) { ?>

    <?php if (isset($cabin_qode_options['vertical_menu_item_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_text_decoration_style']=='none'){ ?>
        nav.vertical_menu > ul > li:hover > a > span.item_inner,
        nav.vertical_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: none;
        }
    <?php }  ?>
    <?php if(isset($cabin_qode_options['vertical_menu_item_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_text_decoration_style']=='underline'){ ?>
        nav.vertical_menu > ul > li:hover > a > span.item_inner,
        nav.vertical_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: underline;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['vertical_menu_item_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_text_decoration_style']=='line-through'){ ?>
        nav.vertical_menu > ul > li:hover > a > span.item_inner,
        nav.vertical_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: line-through;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['vertical_menu_item_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_text_decoration_style']=='overline'){ ?>
        nav.vertical_menu > ul > li:hover > a > span.item_inner,
        nav.vertical_menu > ul > li.active:hover > a > span.item_inner{
        text-decoration: overline;
        }
    <?php } ?>


    <?php if (isset($cabin_qode_options['vertical_menu_item_active_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_active_text_decoration_style']=='none'){ ?>
        nav.vertical_menu > ul > li.active > a > span.item_inner{
        text-decoration: none;
        }
    <?php }  ?>
    <?php if(isset($cabin_qode_options['vertical_menu_item_active_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_active_text_decoration_style']=='underline'){ ?>
        nav.vertical_menu > ul > li.active > a > span.item_inner{
        text-decoration: underline;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['vertical_menu_item_active_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_active_text_decoration_style']=='line-through'){ ?>
        nav.vertical_menu > ul > li.active > a > span.item_inner{
        text-decoration: line-through;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['vertical_menu_item_active_text_decoration_style']) &&  $cabin_qode_options['vertical_menu_item_active_text_decoration_style']=='overline'){ ?>
        nav.vertical_menu > ul > li.active > a > span.item_inner{
        text-decoration: overline;
        }
    <?php } ?>

<?php } ?>


<?php if (isset($cabin_qode_options['vertical_menu_dropdown_plus_color']) &&  $cabin_qode_options['vertical_menu_dropdown_plus_color']=='none'){ ?>
    nav.vertical_menu > ul > li.active > a > span.item_inner{
    text-decoration: none;
    }
<?php }  ?>


<?php if(isset($cabin_qode_options['header_style']) && $cabin_qode_options['header_style']=='light' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_color'])){ ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li > a{
    border-color: #fff;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_style']) && $cabin_qode_options['header_style']=='dark' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_color'])){ ?>
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li > a{
    border-color: #000;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_style']) && $cabin_qode_options['header_style']=='light' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_hover_border_color'])){ ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li:hover > a{
    border-color: #fff;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['header_style']) && $cabin_qode_options['header_style']=='dark' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_hover_border_color'])){ ?>
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li:hover > a{
    border-color: #000;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_style']) && $cabin_qode_options['header_style']=='light' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_active_border_color'])){ ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active > a{
    border-color: #fff;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['header_style']) && $cabin_qode_options['header_style']=='dark' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_active_border_color'])){ ?>
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active > a{
    border-color: #000;
    }
<?php } ?>



<?php if(isset($cabin_qode_options['vertical_menu_dropdown_plus_color']) && $cabin_qode_options['vertical_menu_dropdown_plus_color'] !==''){ ?>
    nav.vertical_menu_toggle ul > li.menu-item-has-children > a > .plus{
    color: <?php echo esc_attr($cabin_qode_options['vertical_menu_dropdown_plus_color']);?>
    }
<?php } ?>





<?php if(!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item'){ ?>
    nav.main_menu > ul > li > a{
    <?php if (!empty($cabin_qode_options['menu_text_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_text_background_color']);  ?>; <?php } ?>

    <?php if($cabin_qode_options['enable_manu_item_border']=='yes' ){?>
        <?php if (isset($cabin_qode_options['menu_item_border_width']) && $cabin_qode_options['menu_item_border_width'] !== '') { ?> border-width: <?php echo esc_attr($cabin_qode_options['menu_item_border_width']);  ?>px; <?php } ?>
        <?php if (!empty($cabin_qode_options['menu_item_border_color']) ) { ?> border-color: <?php echo esc_attr($cabin_qode_options['menu_item_border_color']);  ?>; <?php } ?>
        <?php if(isset($cabin_qode_options['menu_item_border_radius']) && ($cabin_qode_options['menu_item_border_radius'])!==''){?>border-radius: <?php echo esc_attr($cabin_qode_options['menu_item_border_radius']); ?>px;<?php } ?>

        <?php if(isset($cabin_qode_options['menu_item_border_style_style']) && ($cabin_qode_options['menu_item_border_style_style'])!==''){?>
            border-style: <?php echo esc_attr($cabin_qode_options['menu_item_border_style_style']); ?>;
        <?php } ?>

        <?php if(!empty($cabin_qode_options['menu_item_border_style'])){ ?>

            <?php if (($cabin_qode_options['menu_item_border_style']=='top_bottom_borders')){?>
                border-left: none;
                border-right: none;
            <?php } ?>

            <?php if (($cabin_qode_options['menu_item_border_style']=='right_border')) { ?>
                border-left: none;
                border-top: none;
                border-bottom: none;
            <?php } ?>
            <?php if (($cabin_qode_options['menu_item_border_style']=='bottom_border')) { ?>
                border-left: none;
                border-top: none;
                border-right: none;
            <?php } ?>

        <?php } ?>
    <?php } ?>
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border_double' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_style']) && !empty($cabin_qode_options['menu_item_border_color'])){ ?>
    nav.main_menu >ul > li > a > span.item_inner:before,
    nav.main_menu >ul > li > a > span.item_inner:after{
    <?php if (!empty($cabin_qode_options['menu_item_border_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_item_border_color']);  ?>; <?php } ?>
    display:block;
    }
    nav.main_menu >ul > li > a > span.item_inner,
    nav.main_menu >ul > li > a > span.item_inner{
    border:none;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border_double' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_style']) && !empty($cabin_qode_options['menu_item_border_color'])){ ?>
    nav.main_menu >ul > li > a:before,
    nav.main_menu >ul > li > a:after{
    <?php if (!empty($cabin_qode_options['menu_item_border_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_item_border_color']);  ?>; <?php } ?>
    display:block;
    }
    nav.main_menu >ul > li > a,
    nav.main_menu >ul > li > a{
    border:none;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border_double' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_style']) && !empty($cabin_qode_options['menu_item_active_border_color'])){ ?>
    nav.main_menu >ul > li.active > a > span.item_inner:before,
    nav.main_menu >ul > li.active > a > span.item_inner:after{
    <?php if (!empty($cabin_qode_options['menu_item_active_border_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_item_active_border_color']);  ?>; <?php } ?>
    }
    nav.main_menu >ul > li.active > a > span.item_inner,
    nav.main_menu >ul > li.active > a > span.item_inner{
    border:none;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border_double' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_style']) && !empty($cabin_qode_options['menu_item_active_border_color'])){ ?>
    nav.main_menu >ul > li.active > a:before,
    nav.main_menu >ul > li.active > a:after{
    <?php if (!empty($cabin_qode_options['menu_item_active_border_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_item_active_border_color']);  ?>; <?php } ?>
    }
    nav.main_menu >ul > li.active > a,
    nav.main_menu >ul > li.active > a{
    border:none;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border_double' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_style']) && !empty($cabin_qode_options['menu_item_hover_border_color'])){ ?>
    nav.main_menu >ul > li:hover > a > span.item_inner:before,
    nav.main_menu >ul > li:hover > a > span.item_inner:after{
    <?php if (!empty($cabin_qode_options['menu_item_hover_border_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_item_hover_border_color']);  ?>; <?php } ?>
    }
    nav.main_menu >ul > li:hover > a > span.item_inner,
    nav.main_menu >ul > li:hover > a > span.item_inner{
    border:none;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['menu_item_border_style']) && $cabin_qode_options['menu_item_border_style']=='bottom_border_double' && !empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item' && $cabin_qode_options['enable_manu_item_border']=='yes' && !empty($cabin_qode_options['menu_item_border_style']) && !empty($cabin_qode_options['menu_item_hover_border_color'])){ ?>
    nav.main_menu >ul > li:hover > a:before,
    nav.main_menu >ul > li:hover > a:after{
    <?php if (!empty($cabin_qode_options['menu_item_hover_border_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['menu_item_hover_border_color']);  ?>; <?php } ?>
    }
    nav.main_menu >ul > li > a,
    nav.main_menu >ul > li > a{
    border:none;
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['menu_item_style']) && ($cabin_qode_options['menu_item_style']=='large_item')&& (!empty($cabin_qode_options['menu_item_border_style']) && ($cabin_qode_options['menu_item_border_style']=='right_border') && ($cabin_qode_options['enable_manu_item_border']=='yes' ))){ ?>
    nav.main_menu > ul > li:last-child > a > span.item_inner{
    border-right:none;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['menu_item_style']) && ($cabin_qode_options['menu_item_style']=='small_item')&& (!empty($cabin_qode_options['menu_item_border_style']) && ($cabin_qode_options['menu_item_border_style']=='right_border') && ($cabin_qode_options['enable_manu_item_border']=='yes' ))){ ?>
    nav.main_menu > ul > li:last-child > a {
    border-right:none;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item'){ ?>
    <?php if (!empty($cabin_qode_options['menu_item_hover_border_color']) && ($cabin_qode_options['enable_manu_item_border']=='yes' )) { ?>
        nav.main_menu > ul > li:hover > a > span.item_inner,
        nav.main_menu > ul > li.active:hover > a > span.item_inner,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a span.item_inner{
        border-color: <?php echo esc_attr($cabin_qode_options['menu_item_hover_border_color']);  ?>;
        }
    <?php } ?>
<?php } elseif(!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item'){ ?>
    <?php if (!empty($cabin_qode_options['menu_item_hover_border_color']) && ($cabin_qode_options['enable_manu_item_border']=='yes' )) { ?>
        nav.main_menu > ul > li:hover > a,
        nav.main_menu > ul > li.active:hover > a,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a{
        border-color: <?php echo esc_attr($cabin_qode_options['menu_item_hover_border_color']);  ?>;
        }
    <?php } ?>
<?php } ?>

<?php if (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item'){ ?>
    <?php if (!empty($cabin_qode_options['menu_item_active_border_color']) && ($cabin_qode_options['enable_manu_item_border']=='yes' )) { ?>
        nav.main_menu > ul > li.active > a > span.item_inner,
        nav.main_menu > ul > li.active > a > span.item_inner,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li.active > a > span.item_inner{
        border-color: <?php echo esc_attr($cabin_qode_options['menu_item_active_border_color']);  ?>;
        }
    <?php } ?>
<?php } elseif (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item'){ ?>
    <?php if (!empty($cabin_qode_options['menu_item_active_border_color']) && ($cabin_qode_options['enable_manu_item_border']=='yes' )) { ?>
        nav.main_menu > ul > li.active,
        nav.main_menu > ul > li.active a,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li.active > a{
        border-color: <?php echo esc_attr($cabin_qode_options['menu_item_active_border_color']);  ?>;
        }
    <?php } ?>
<?php } ?>


<?php if((!empty($cabin_qode_options['enable_menu_item_separators'])) && ($cabin_qode_options['enable_menu_item_separators']=="yes") && (!empty($cabin_qode_options['menu_item_separators_color']))){ ?>
    nav.main_menu >ul > li > a > span.plus{
    display: block;
    background-color: <?php echo esc_attr($cabin_qode_options['menu_item_separators_color']);  ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['menu_activecolor']) && $cabin_qode_options['menu_activecolor'] !== '') { ?>
    nav.main_menu > ul > li.active > a,
    header:not(.with_hover_bg_color) nav.main_menu > ul > li.active > a{
    color: <?php echo esc_attr($cabin_qode_options['menu_activecolor']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_light_activecolor']) && $cabin_qode_options['menu_light_activecolor'] !== '') { ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active > a{
    color: <?php echo esc_attr($cabin_qode_options['menu_light_activecolor']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_dark_activecolor']) && $cabin_qode_options['menu_dark_activecolor'] !== '') { ?>
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active > a{
    color: <?php echo esc_attr($cabin_qode_options['menu_dark_activecolor']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['menu_hovercolor']) && $cabin_qode_options['menu_hovercolor'] !== '') { ?>
    nav.main_menu > ul > li:hover > a,
    nav.main_menu > ul > li.active:hover > a,
    header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a,
    header:not(.with_hover_bg_color) nav.main_menu > ul > li.active:hover > a,
    .header_bottom #lang_sel ul li a:hover,
    .header_bottom #lang_sel_click > ul > li a:hover{
    color: <?php echo esc_attr($cabin_qode_options['menu_hovercolor']); ?> !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_light_hovercolor']) && $cabin_qode_options['menu_light_hovercolor'] !== '') { ?>
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li:hover > a,
    .light:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active:hover > a{
    color: <?php echo esc_attr($cabin_qode_options['menu_light_hovercolor']); ?> !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_dark_hovercolor']) && $cabin_qode_options['menu_dark_hovercolor'] !== '') { ?>
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li:hover > a,
    .dark:not(.sticky):not(.scrolled) nav.main_menu > ul > li.active:hover > a{
    color: <?php echo esc_attr($cabin_qode_options['menu_dark_hovercolor']); ?> !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_padding_left_right']) && $cabin_qode_options['menu_padding_left_right'] !== ''){ ?>
    nav.main_menu > ul > li > a span.item_inner{
    padding: 0  <?php echo esc_attr($cabin_qode_options['menu_padding_left_right']); ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_margin_left_right']) && $cabin_qode_options['menu_margin_left_right'] !== ''){ ?>
    nav.main_menu > ul > li{
    margin: 0  <?php echo esc_attr($cabin_qode_options['menu_margin_left_right']); ?>px;
    }
    header.stick_with_left_right_menu.sticky nav.main_menu.left_side > ul > li:last-child,
    header.stick_with_left_right_menu.sticky nav.main_menu.right_side > ul > li:first-child{
    margin-left:  <?php echo esc_attr($cabin_qode_options['menu_margin_left_right']); ?>px !important;
    margin-right:  <?php echo esc_attr($cabin_qode_options['menu_margin_left_right']); ?>px !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['menu_hover_background_color']) && $cabin_qode_options['menu_hover_background_color'] !== '') {
    $menu_hover_background_color = $cabin_qode_options['menu_hover_background_color'];

    if(isset($cabin_qode_options['menu_hover_background_color_transparency']) && $cabin_qode_options['menu_hover_background_color_transparency'] !== '') {
        $menu_hover_background_color_rgb = cabin_qode_hex2rgb($menu_hover_background_color);
        $menu_hover_background_color = 'rgba('.$menu_hover_background_color_rgb[0].', '.$menu_hover_background_color_rgb[1].', '.$menu_hover_background_color_rgb[2].', '.$cabin_qode_options['menu_hover_background_color_transparency'].')';
    }?>

    <?php if (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item'){ ?>
        nav.main_menu > ul > li:hover > a > span.item_inner,
        header.sticky nav.main_menu > ul > li:hover > a > span.item_inner,
        nav.main_menu > ul > li.active:hover > a > span.item_inner,
        header.sticky nav.main_menu > ul > li.active:hover > a > span.item_inner		{
        background-color: <?php echo esc_attr($menu_hover_background_color); ?>;
        }
    <?php } elseif (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item'){ ?>
        nav.main_menu > ul > li:hover > a,
        header.sticky nav.main_menu > ul > li:hover > a,
        nav.main_menu > ul > li.active:hover > a,
        header.sticky nav.main_menu > ul > li.active:hover > a{
        background-color: <?php echo esc_attr($menu_hover_background_color); ?>;
        }
    <?php } ?>

    <?php

    if(isset($cabin_qode_options['menu_hovercolor']) && $cabin_qode_options['menu_hovercolor'] !== '') {
        ?>
        nav.main_menu > ul > li:hover > a,
        nav.main_menu > ul > li.active:hover > a,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li.active:hover > a{
        color: <?php echo esc_attr($cabin_qode_options['menu_hovercolor']); ?> !important;
        }
    <?php } ?>
<?php } ?>

<?php if(isset($cabin_qode_options['menu_active_background_color']) && $cabin_qode_options['menu_active_background_color'] !== '') {
    $menu_active_background_color = $cabin_qode_options['menu_active_background_color'];

    if(isset($cabin_qode_options['menu_active_background_color_transparency']) && $cabin_qode_options['menu_active_background_color_transparency'] !== '') {
        $menu_active_background_color_rgb = cabin_qode_hex2rgb($menu_active_background_color);
        $menu_active_background_color = 'rgba('.$menu_active_background_color_rgb[0].', '.$menu_active_background_color_rgb[1].', '.$menu_active_background_color_rgb[2].', '.$cabin_qode_options['menu_active_background_color_transparency'].')';
    }
    ?>
    <?php if (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='small_item'){ ?>
        nav.main_menu > ul > li.active > a > span.item_inner,
        header.sticky nav.main_menu > ul > li.active > a > span.item_inner {
        <?php if($cabin_qode_options['menu_active_background_color'] !== '') { ?>
            background-color: <?php echo esc_attr($menu_active_background_color); ?>;
        <?php } ?>
        }
    <?php } elseif (!empty($cabin_qode_options['menu_item_style']) && $cabin_qode_options['menu_item_style']=='large_item'){ ?>
        nav.main_menu > ul > li.active > a,
        header.sticky nav.main_menu > ul > li.active > a {
        <?php if($cabin_qode_options['menu_active_background_color'] !== '') { ?>
            background-color: <?php echo esc_attr($menu_active_background_color); ?>;
            }
        <?php } ?>
    <?php } ?>

    <?php

    if(isset($cabin_qode_options['menu_activecolor']) && $cabin_qode_options['menu_activecolor'] !== '') {
        ?>
        nav.main_menu > ul > li.active > a,
        header:not(.with_hover_bg_color) nav.main_menu > ul > li.active > a{
        color: <?php echo esc_attr($cabin_qode_options['menu_activecolor']); ?>;
        }
    <?php } ?>
<?php } ?>

<?php if(isset($cabin_qode_options['menu_item_icon_position']) && ($cabin_qode_options['menu_item_icon_position']=="top") && isset($cabin_qode_options['menu_item_icon_size']) && ($cabin_qode_options['menu_item_icon_size']!=="") ){?>
    .header_bottom.with_large_icons nav.main_menu >ul > li > a > span.item_inner i{
    font-size: <?php echo esc_attr($cabin_qode_options['menu_item_icon_size']); ?>px !important;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['dropdown_color']) || !empty($cabin_qode_options['dropdown_fontsize']) || !empty($cabin_qode_options['dropdown_lineheight']) || !empty($cabin_qode_options['dropdown_fontstyle']) || !empty($cabin_qode_options['dropdown_fontweight']) || $cabin_qode_options['dropdown_google_fonts'] != "-1" || !empty($cabin_qode_options['dropdown_texttransform'])  || $cabin_qode_options['dropdown_letterspacing'] !== ''){ ?>
    .drop_down .second .inner > ul > li > a,
    .drop_down .second .inner > ul > li > h4,
    .drop_down .wide .second .inner > ul > li > h4,
    .drop_down .wide .second .inner > ul > li > a,
    .drop_down .wide .second ul li ul li.menu-item-has-children > a,
    .drop_down .wide .second .inner ul li.sub ul li.menu-item-has-children > a,
    .drop_down .wide .second .inner > ul li.sub .flexslider ul li  h4 a,
    .drop_down .wide .second .inner > ul li .flexslider ul li  h4 a,
    .drop_down .wide .second .inner > ul li.sub .flexslider ul li  h4,
    .drop_down .wide .second .inner > ul li .flexslider ul li  h4{
    <?php if (!empty($cabin_qode_options['dropdown_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['dropdown_color']); ?>; <?php } ?>
    <?php if($cabin_qode_options['dropdown_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['dropdown_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['dropdown_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['dropdown_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['dropdown_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['dropdown_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['dropdown_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['dropdown_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['dropdown_letterspacing']);  ?>px;  <?php } ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['dropdown_color']) && !empty($cabin_qode_options['dropdown_color'])) { ?>
    .shopping_cart_dropdown ul li
    .item_info_holder .item_left a,
    .shopping_cart_dropdown ul li .item_info_holder .item_right .amount,
    .shopping_cart_dropdown .cart_bottom .subtotal_holder .total,
    .shopping_cart_dropdown .cart_bottom .subtotal_holder .total_amount{
    color: <?php echo esc_attr($cabin_qode_options['dropdown_color']); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['dropdown_color']) || !empty($cabin_qode_options['dropdown_fontsize']) || !empty($cabin_qode_options['dropdown_lineheight']) || !empty($cabin_qode_options['dropdown_fontstyle']) || !empty($cabin_qode_options['dropdown_fontweight']) || $cabin_qode_options['dropdown_google_fonts'] != "-1" || !empty($cabin_qode_options['dropdown_texttransform'])  || $cabin_qode_options['dropdown_letterspacing'] !== ''){ ?>
    .header_bottom #lang_sel ul li li a,
    .header_bottom #lang_sel_click  ul li  ul li a,
    .header_top #lang_sel ul ul a,
    .header_top #lang_sel_click ul ul a{
    <?php if (!empty($cabin_qode_options['dropdown_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['dropdown_color']); ?>!important; <?php } ?>
    <?php if($cabin_qode_options['dropdown_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['dropdown_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['dropdown_fontsize']);  ?>px !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['dropdown_lineheight']);  ?>px !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['dropdown_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['dropdown_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['dropdown_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['dropdown_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['dropdown_letterspacing']);  ?>px;  <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['dropdown_hovercolor'])) { ?>
    .drop_down .second .inner > ul > li > a:hover,
    .drop_down .wide .second ul li ul li.menu-item-has-children > a:hover,
    .drop_down .wide .second .inner ul li.sub ul li.menu-item-has-children > a:hover,
    .header_bottom #lang_sel ul li li a:hover,
    .header_bottom #lang_sel_click  ul li  ul li a:hover,
    .header_top #lang_sel ul ul a:hover,
    .header_top #lang_sel_click ul ul a:hover{
    color: <?php echo esc_attr($cabin_qode_options['dropdown_hovercolor']);  ?> !important;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['dropdown_padding_top_bottom'])){ ?>
    .drop_down .wide .second>.inner>ul>li.sub>ul>li>a,
    .drop_down .second .inner ul li a,
    .drop_down .wide .second ul li a,
    .drop_down .second .inner ul.right li a{
    <?php if (!empty($cabin_qode_options['dropdown_padding_top_bottom'])) { ?> padding-top: <?php echo esc_attr($cabin_qode_options['dropdown_padding_top_bottom']); ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_padding_top_bottom'])) { ?> padding-bottom: <?php echo esc_attr($cabin_qode_options['dropdown_padding_top_bottom']); ?>px; <?php } ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['dropdown_border_around']) && $cabin_qode_options['dropdown_border_around'] == "yes" && !empty($cabin_qode_options['dropdown_border_around_color'])){ ?>
    .drop_down .second .inner>ul,
    li.narrow .second .inner ul,
    .drop_down .narrow .second .inner ul li ul,
    .shopping_cart_dropdown,
    .shopping_cart_dropdown ul li{
    border-color:  <?php echo esc_attr($cabin_qode_options['dropdown_border_around_color']);  ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['dropdown_border_around']) && $cabin_qode_options['dropdown_border_around'] == "no"){ ?>
    .drop_down .second .inner>ul,
    li.narrow .second .inner ul,
    .drop_down .narrow .second .inner ul li ul{
    border: none;
    }

    .drop_down .second .inner ul.right li ul{
    margin-left: 0;
    }

<?php } ?>



<?php if(!empty($cabin_qode_options['dropdown_wide_color']) || !empty($cabin_qode_options['dropdown_wide_fontsize']) || !empty($cabin_qode_options['dropdown_wide_lineheight']) || !empty($cabin_qode_options['dropdown_wide_fontstyle']) || !empty($cabin_qode_options['dropdown_wide_fontweight']) || $cabin_qode_options['dropdown_wide_google_fonts'] != "-1" || !empty($cabin_qode_options['dropdown_wide_texttransform'])  || $cabin_qode_options['dropdown_wide_letterspacing'] !== ''){ ?>
    .drop_down .wide .second .inner>ul>li>a{
    <?php if (!empty($cabin_qode_options['dropdown_wide_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['dropdown_wide_color']); ?>; <?php } ?>
    <?php if($cabin_qode_options['dropdown_wide_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['dropdown_wide_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_wide_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['dropdown_wide_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_wide_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['dropdown_wide_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_wide_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['dropdown_wide_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_wide_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['dropdown_wide_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_wide_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['dropdown_wide_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['dropdown_wide_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['dropdown_wide_letterspacing']);  ?>px;  <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['dropdown_wide_hovercolor'])) { ?>
    .drop_down .wide .second .inner>ul>li>a:hover{
    color: <?php echo esc_attr($cabin_qode_options['dropdown_wide_hovercolor']);  ?> !important;
    }
<?php } ?>
<?php if(!empty($cabin_qode_options['dropdown_color_thirdlvl']) || !empty($cabin_qode_options['dropdown_fontsize_thirdlvl']) || !empty($cabin_qode_options['dropdown_lineheight_thirdlvl']) || !empty($cabin_qode_options['dropdown_fontstyle_thirdlvl']) || !empty($cabin_qode_options['dropdown_fontweight_thirdlvl']) || $cabin_qode_options['dropdown_google_fonts_thirdlvl'] != "-1" || !empty($cabin_qode_options['dropdown_texttransform_thirdlvl']) || $cabin_qode_options['dropdown_letterspacing_thirdlvl'] !== ''){ ?>
    .drop_down .wide .second .inner ul li.sub ul li a,
    .drop_down .wide .second ul li ul li a,
    .drop_down .second .inner ul li.sub ul li a{
    <?php if (!empty($cabin_qode_options['dropdown_color_thirdlvl'])) { ?> color: <?php echo esc_attr($cabin_qode_options['dropdown_color_thirdlvl']);  ?>;  <?php } ?>
    <?php if($cabin_qode_options['dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['dropdown_google_fonts_thirdlvl'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['dropdown_fontsize_thirdlvl']);  ?>px;  <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['dropdown_lineheight_thirdlvl']);  ?>px;  <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['dropdown_fontstyle_thirdlvl']);  ?>;   <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['dropdown_fontweight_thirdlvl']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['dropdown_texttransform_thirdlvl'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['dropdown_texttransform_thirdlvl']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['dropdown_letterspacing_thirdlvl'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['dropdown_letterspacing_thirdlvl']);  ?>px;  <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['dropdown_hovercolor_thirdlvl'])) { ?>
    .drop_down .second .inner ul li.sub ul li a:hover,
    .drop_down .second .inner ul li ul li a:hover{
    color: <?php echo esc_attr($cabin_qode_options['dropdown_hovercolor_thirdlvl']);  ?> !important;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['fixed_color']) || !empty($cabin_qode_options['fixed_fontsize']) || !empty($cabin_qode_options['fixed_lineheight']) || !empty($cabin_qode_options['fixed_fontstyle']) || !empty($cabin_qode_options['fixed_fontweight']) || !empty($cabin_qode_options['fixed_texttransform']) || (isset($cabin_qode_options['fixed_letterspacing']) && $cabin_qode_options['fixed_letterspacing'] !== '') || $cabin_qode_options['fixed_google_fonts'] != "-1"){ ?>
    header.scrolled nav.main_menu > ul > li > a > span.item_inner,
    header.light.scrolled nav.main_menu > ul > li > a > span.item_inner,
    header.dark.scrolled nav.main_menu > ul > li > a > span.item_inner{
    <?php if (!empty($cabin_qode_options['fixed_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['fixed_color']); ?>; <?php } ?>
    <?php if($cabin_qode_options['fixed_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['fixed_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['fixed_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['fixed_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['fixed_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['fixed_lineheight']);  ?>px !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['fixed_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['fixed_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['fixed_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['fixed_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['fixed_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['fixed_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['fixed_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['fixed_letterspacing']);  ?>px;  <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['fixed_color'])) { ?>
    header.scrolled .side_menu_button a {
    <?php if (!empty($cabin_qode_options['fixed_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['fixed_color']); ?> !important; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['fixed_hovercolor'])) { ?>
    header.scrolled nav.main_menu > ul > li > a:hover > span,
    header.scrolled nav.main_menu > ul > li:hover > a > span,
    header.scrolled nav.main_menu > ul > li.active > a > span,
    header.scrolled nav.main_menu > ul > li > a:hover > i,
    header.scrolled nav.main_menu > ul > li:hover > a > i,
    header.scrolled nav.main_menu > ul > li.active > a > i,
    header.scrolled .side_menu_button a:hover,
    .light.scrolled nav.main_menu > ul > li > a:hover,
    .light.scrolled nav.main_menu > ul > li.active > a,
    .light.scrolled .side_menu_button a:hover,
    .dark.scrolled nav.main_menu > ul > li > a:hover,
    .dark.scrolled nav.main_menu > ul > li.active > a,
    .dark.scrolled .side_menu_button a:hover {
    color: <?php echo esc_attr($cabin_qode_options['fixed_hovercolor']);  ?> !important;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['sticky_color']) || !empty($cabin_qode_options['sticky_fontsize']) || !empty($cabin_qode_options['sticky_lineheight']) || !empty($cabin_qode_options['sticky_fontstyle']) || !empty($cabin_qode_options['sticky_fontweight']) || !empty($cabin_qode_options['sticky_texttransform']) || (isset($cabin_qode_options['sticky_letterspacing']) && $cabin_qode_options['sticky_letterspacing'] !== '') || $cabin_qode_options['sticky_google_fonts'] != "-1"){ ?>
    header.sticky nav.main_menu > ul > li > a > span.item_inner,
    header.light.sticky nav.main_menu > ul > li > a > span.item_inner,
    header.dark.sticky nav.main_menu > ul > li > a > span.item_inner{
    <?php if (!empty($cabin_qode_options['sticky_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['sticky_color']); ?>; <?php } ?>
    <?php if($cabin_qode_options['sticky_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['sticky_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['sticky_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['sticky_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['sticky_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['sticky_lineheight']);  ?>px !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['sticky_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['sticky_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['sticky_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['sticky_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['sticky_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['sticky_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['sticky_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['sticky_letterspacing']);  ?>px;  <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['sticky_color'])) { ?>
    header.sticky .side_menu_button a,
    header.sticky .side_menu_button a:hover{
    <?php if (!empty($cabin_qode_options['sticky_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['sticky_color']); ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['sticky_hovercolor'])) { ?>
    header.sticky nav.main_menu > ul > li > a:hover span,
    header.sticky nav.main_menu > ul > li.active > a span,
    header.sticky nav.main_menu > ul > li:hover > a > span,
    header.sticky nav.main_menu > ul > li > a:hover > i,
    header.sticky nav.main_menu > ul > li:hover > a > i,
    header.sticky nav.main_menu > ul > li.active > a > i,
    .light.sticky nav.main_menu > ul > li > a:hover,
    .light.sticky nav.main_menu > ul > li.active > a,
    .dark.sticky nav.main_menu > ul > li > a:hover,
    .dark.sticky nav.main_menu > ul > li.active > a{
    color: <?php echo esc_attr($cabin_qode_options['sticky_hovercolor']);  ?> !important;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['mobile_color']) || !empty($cabin_qode_options['mobile_fontsize']) || !empty($cabin_qode_options['mobile_lineheight']) || !empty($cabin_qode_options['mobile_fontstyle']) || !empty($cabin_qode_options['mobile_fontweight']) || !empty($cabin_qode_options['mobile_texttransform']) || $cabin_qode_options['mobile_letter_spacing'] !== '' || $cabin_qode_options['mobile_google_fonts'] != "-1") { ?>
    nav.mobile_menu ul li a,
    nav.mobile_menu ul li h4{
    <?php if (!empty($cabin_qode_options['mobile_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['mobile_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['mobile_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['mobile_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['mobile_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['mobile_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['mobile_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['mobile_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['mobile_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['mobile_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['mobile_fontweight'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['mobile_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['mobile_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['mobile_texttransform']);  ?>;  <?php } ?>
    <?php if ($cabin_qode_options['mobile_letter_spacing'] !== ''){ ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['mobile_letter_spacing']);  ?>px;<?php } ?>
    }
    <?php if (!empty($cabin_qode_options['mobile_color'])) { ?>
        nav.mobile_menu ul > li.has_sub > span.mobile_arrow{
        color: <?php echo esc_attr($cabin_qode_options['mobile_color']);  ?>;
        }
    <?php } ?>

<?php } ?>

<?php if (!empty($cabin_qode_options['mobile_hovercolor'])) { ?>
    nav.mobile_menu ul li a:hover,
    nav.mobile_menu ul li.active > a,
    nav.mobile_menu ul li.current-menu-item > a{
    color: <?php echo esc_attr($cabin_qode_options['mobile_hovercolor']);  ?>;
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['mobile_separator_color'])) { ?>
    nav.mobile_menu ul li,
    nav.mobile_menu ul li.open_sub > ul{
    border-color: <?php echo esc_attr($cabin_qode_options['mobile_separator_color']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['mobile_background_color'])) { ?>
    @media only screen and (max-width: 1000px){
    .header_bottom,
    nav.mobile_menu{
    background-color: <?php echo esc_attr($cabin_qode_options['mobile_background_color']);  ?> !important;
    }
    }
<?php } ?>

<?php if (isset($cabin_qode_options['interactive_banners_background_color']) && !empty($cabin_qode_options['interactive_banners_background_color'])) { ?>
    <?php $shader_bg_color = cabin_qode_hex2rgb($cabin_qode_options['interactive_banners_background_color']); ?>

    <?php if(isset($cabin_qode_options['interactive_banners_background_transparency']) && !empty($cabin_qode_options['interactive_banners_background_transparency'])){
        $interactive_banners_shader_transparency = $cabin_qode_options['interactive_banners_background_transparency'];
    } else {
        $interactive_banners_shader_transparency = 0.9;
    }
    ?>

    .q_image_with_text_over .shader{
    background-color: rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,<?php echo esc_attr($interactive_banners_shader_transparency); ?>);
    }
<?php } ?>

<?php if (isset($cabin_qode_options['interactive_banners_hover_background_color']) && !empty($cabin_qode_options['interactive_banners_hover_background_color'])) { ?>
    <?php $shader_hover_bg_color = cabin_qode_hex2rgb($cabin_qode_options['interactive_banners_hover_background_color']); ?>

    <?php if(isset($cabin_qode_options['interactive_banners_hover_background_transparency']) && !empty($cabin_qode_options['interactive_banners_hover_background_transparency'])){
        $interactive_banners_shader_transparency = $cabin_qode_options['interactive_banners_hover_background_transparency'];
    } else {
        $interactive_banners_shader_transparency = 0.9;
    }
    ?>

    .q_image_with_text_over:hover .shader{
    background-color: rgba(<?php echo esc_attr($shader_hover_bg_color[0]); ?>,<?php echo esc_attr($shader_hover_bg_color[1]); ?>,<?php echo esc_attr($shader_hover_bg_color[2]); ?>,<?php echo esc_attr($interactive_banners_shader_transparency) ?>);
    }
<?php } ?>



<?php
$list_styles = array();

if(isset($cabin_qode_options['list_google_fonts']) && $cabin_qode_options['list_google_fonts'] !== '-1') {
    $list_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['list_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['list_fontsize']) && $cabin_qode_options['list_fontsize'] !== '') {
    $list_styles[] = 'font-size: '.$cabin_qode_options['list_fontsize'].'px !important';
}

if(isset($cabin_qode_options['list_lineheight']) && $cabin_qode_options['list_lineheight'] !== '') {
    $list_styles[] = 'line-height: '.$cabin_qode_options['list_lineheight'].'px';
}

if(isset($cabin_qode_options['list_letterspacing']) && $cabin_qode_options['list_letterspacing'] !== '') {
    $list_styles[] = 'letter-spacing: '.$cabin_qode_options['list_letterspacing'].'px';
}

if(isset($cabin_qode_options['list_fontweight']) && $cabin_qode_options['list_fontweight'] !== '') {
    $list_styles[] = 'font-weight: '.$cabin_qode_options['list_fontweight'];
}

if(isset($cabin_qode_options['list_fontstyle']) && $cabin_qode_options['list_fontstyle'] !== '') {
    $list_styles[] = 'font-style: '.$cabin_qode_options['list_fontstyle'];
}

if(isset($cabin_qode_options['list_texttransform']) && $cabin_qode_options['list_texttransform'] !== '') {
    $list_styles[] = 'text-transform: '.$cabin_qode_options['list_texttransform'];
}

if(isset($cabin_qode_options['list_color']) && $cabin_qode_options['list_color'] !== '') {
    $list_styles[] = 'color: '.$cabin_qode_options['list_color'];
}

if(isset($cabin_qode_options['list_bottom_margin']) && $cabin_qode_options['list_bottom_margin'] !== '') {
    $list_styles[] = 'margin-bottom: '.$cabin_qode_options['list_bottom_margin'].'px';
}
?>
<?php if(is_array($list_styles) && count($list_styles)) { ?>
    .q_list.circle ul>li,
    .q_list.line ul>li{
    <?php echo esc_attr(implode(';', $list_styles)); ?>
    }
<?php }  ?>

<?php if (isset($cabin_qode_options['list_item_color']) && !empty($cabin_qode_options['list_item_color'])) { ?>
    .q_list.circle ul>li:before{
    background-color: <?php echo esc_attr($cabin_qode_options['list_item_color']);?>;
    }

    .q_list.line ul>li:before{
    color: <?php echo esc_attr($cabin_qode_options['list_item_color']);?>;
    }
<?php } ?>



<?php
$list_ordered_styles = array();

if(isset($cabin_qode_options['list_ordered_fontfamily']) && $cabin_qode_options['list_ordered_fontfamily'] !== '-1') {
    $list_ordered_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['list_ordered_fontfamily']).', sans-serif';
}

if(isset($cabin_qode_options['list_ordered_fontsize']) && $cabin_qode_options['list_ordered_fontsize'] !== '') {
    $list_ordered_styles[] = 'font-size: '.$cabin_qode_options['list_ordered_fontsize'].'px !important';
}

if(isset($cabin_qode_options['list_ordered_lineheight']) && $cabin_qode_options['list_ordered_lineheight'] !== '') {
    $list_ordered_styles[] = 'line-height: '.$cabin_qode_options['list_ordered_lineheight'].'px';
}

if(isset($cabin_qode_options['list_ordered_letterspacing']) && $cabin_qode_options['list_ordered_letterspacing'] !== '') {
    $list_ordered_styles[] = 'letter-spacing: '.$cabin_qode_options['list_ordered_letterspacing'].'px';
}

if(isset($cabin_qode_options['list_ordered_fontweight']) && $cabin_qode_options['list_ordered_fontweight'] !== '') {
    $list_ordered_styles[] = 'font-weight: '.$cabin_qode_options['list_ordered_fontweight'];
}

if(isset($cabin_qode_options['list_ordered_fontstyle']) && $cabin_qode_options['list_ordered_fontstyle'] !== '') {
    $list_ordered_styles[] = 'font-style: '.$cabin_qode_options['list_ordered_fontstyle'];
}

if(isset($cabin_qode_options['list_ordered_texttransform']) && $cabin_qode_options['list_ordered_texttransform'] !== '') {
    $list_ordered_styles[] = 'text-transform: '.$cabin_qode_options['list_ordered_texttransform'];
}

if(isset($cabin_qode_options['list_ordered_color']) && $cabin_qode_options['list_ordered_color'] !== '') {
    $list_ordered_styles[] = 'color: '.$cabin_qode_options['list_ordered_color'];
}

if(isset($cabin_qode_options['list_ordered_margin_bottom']) && $cabin_qode_options['list_ordered_margin_bottom'] !== '') {
    $list_ordered_styles[] = 'margin-bottom: '.$cabin_qode_options['list_ordered_margin_bottom'].'px';
}

?>
<?php if(is_array($list_ordered_styles) && count($list_ordered_styles)) { ?>
    .ordered ol li,
    .q_list.number ul>li{
    <?php echo esc_attr(implode(';', $list_ordered_styles)); ?>
    }
<?php }  ?>

<?php if (isset($cabin_qode_options['list_ordered_item_color']) && !empty($cabin_qode_options['list_ordered_item_color'])) { ?>
    .ordered ol>li:before,
    .q_list.number ul>li:before{
    color: <?php echo esc_attr($cabin_qode_options['list_ordered_item_color']);?>;
    }
<?php } ?>



<?php if (!empty($cabin_qode_options['input_background_color']) || !empty($cabin_qode_options['input_border_color']) || !empty($cabin_qode_options['input_text_color'])) { ?>
    #respond textarea,
    #respond input[type='text'],
    .comment_holder #respond textarea,
    .comment_holder #respond input[type='text'],
    input.wpcf7-form-control.wpcf7-text,
    input.wpcf7-form-control.wpcf7-number,
    input.wpcf7-form-control.wpcf7-date,
    textarea.wpcf7-form-control.wpcf7-textarea,
    select.wpcf7-form-control.wpcf7-select,
    input.wpcf7-form-control.wpcf7-quiz{
    <?php if (!empty($cabin_qode_options['input_background_color'])) { ?>background-color: <?php echo esc_attr($cabin_qode_options['input_background_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['input_border_color'])) { ?>border: 1px solid <?php echo esc_attr($cabin_qode_options['input_border_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['input_text_color'])) { ?>color:<?php echo esc_attr($cabin_qode_options['input_text_color']);  ?>; <?php } ?>
    }

    <?php if (!empty($cabin_qode_options['input_text_color'])){ ?>
        ::-webkit-input-placeholder
        {
        color:<?php echo esc_attr($cabin_qode_options['input_text_color']);  ?>;
        }
        :-moz-placeholder{
        color:<?php echo esc_attr($cabin_qode_options['input_text_color']);  ?>;
        }
        ::-moz-placeholder{
        color:<?php echo esc_attr($cabin_qode_options['input_text_color']);  ?>;
        }
        :-ms-input-placeholder{
        color:<?php echo esc_attr($cabin_qode_options['input_text_color']);  ?>;
        }
    <?php } ?>
<?php } ?>

<?php

if(!empty($cabin_qode_options['input_focus_text_color']) || !empty($cabin_qode_options['input_focus_background_color']) || !empty($cabin_qode_options['input_focus_border_color'])) { ?>
    #respond textarea:focus,
    #respond input[type='text']:focus,
    .comment_holder #respond textarea:focus,
    .comment_holder #respond input[type='text']:focus,
    input.wpcf7-form-control.wpcf7-text:focus,
    input.wpcf7-form-control.wpcf7-number:focus,
    input.wpcf7-form-control.wpcf7-date:focus,
    textarea.wpcf7-form-control.wpcf7-textarea:focus,
    select.wpcf7-form-control.wpcf7-select:focus,
    input.wpcf7-form-control.wpcf7-quiz:focus{
    <?php if (!empty($cabin_qode_options['input_focus_text_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['input_focus_text_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['input_focus_background_color'])) { ?>background-color: <?php echo esc_attr($cabin_qode_options['input_focus_background_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['input_focus_border_color'])) { ?>border-color: <?php echo esc_attr($cabin_qode_options['input_focus_border_color']);  ?>; <?php } ?>
    }
<?php }

if(!empty($cabin_qode_options['input_focus_text_color'])) { ?>
    #respond textarea:focus::-webkit-input-placeholder,
    #respond input[type='text']:focus::-webkit-input-placeholder,
    input.wpcf7-form-control.wpcf7-text:focus::-webkit-input-placeholder,
    textarea.wpcf7-form-control.wpcf7-textarea:focus::-webkit-input-placeholder{
    color: <?php echo esc_attr($cabin_qode_options['input_focus_text_color']);  ?>;
    }

    #respond textarea:focus:-moz-placeholder,
    #respond input[type='text']:focus:-moz-placeholder,
    input.wpcf7-form-control.wpcf7-text:focus:-moz-placeholder,
    textarea.wpcf7-form-control.wpcf7-textarea:focus:-moz-placeholder{
    color: <?php echo esc_attr($cabin_qode_options['input_focus_text_color']);  ?>;
    }

    #respond textarea:focus::-moz-placeholder,
    #respond input[type='text']:focus::-moz-placeholder,
    input.wpcf7-form-control.wpcf7-text:focus::-moz-placeholder,
    textarea.wpcf7-form-control.wpcf7-textarea:focus::-moz-placeholder{
    color: <?php echo esc_attr($cabin_qode_options['input_focus_text_color']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['h1_color']) || !empty($cabin_qode_options['h1_fontsize']) || !empty($cabin_qode_options['h1_lineheight']) || !empty($cabin_qode_options['h1_fontstyle']) || !empty($cabin_qode_options['h1_fontweight']) || $cabin_qode_options['h1_letterspacing'] !== '' || $cabin_qode_options['h1_google_fonts'] != "-1" || !empty($cabin_qode_options['h1_texttransform'])) { ?>
    h1{
    <?php if (!empty($cabin_qode_options['h1_color'])) { ?>   color: <?php echo esc_attr($cabin_qode_options['h1_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['h1_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['h1_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['h1_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['h1_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h1_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['h1_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h1_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['h1_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['h1_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['h1_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['h1_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['h1_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h1_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['h1_texttransform']);  ?>; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['h2_color']) || !empty($cabin_qode_options['h2_fontsize']) || !empty($cabin_qode_options['h2_lineheight']) || !empty($cabin_qode_options['h2_fontstyle']) || !empty($cabin_qode_options['h2_fontweight']) || $cabin_qode_options['h2_letterspacing'] !== '' || $cabin_qode_options['h2_google_fonts'] != "-1" || !empty($cabin_qode_options['h2_texttransform'])) { ?>
    h2{
    <?php if($cabin_qode_options['h2_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['h2_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['h2_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['h2_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h2_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['h2_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h2_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['h2_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['h2_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['h2_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['h2_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['h2_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h2_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['h2_texttransform']);  ?>; <?php } ?>
    }
    h2, h2 a{
    <?php if (!empty($cabin_qode_options['h2_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['h2_color']);  ?>; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['h3_color']) || !empty($cabin_qode_options['h3_fontsize']) || !empty($cabin_qode_options['h3_lineheight']) || !empty($cabin_qode_options['h3_fontstyle']) || !empty($cabin_qode_options['h3_fontweight']) || $cabin_qode_options['h3_letterspacing'] !== '' || $cabin_qode_options['h3_google_fonts'] != "-1" || !empty($cabin_qode_options['h3_texttransform'])) { ?>
    h3{
    <?php if($cabin_qode_options['h3_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['h3_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['h3_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['h3_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h3_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['h3_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h3_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['h3_fontstyle']);?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['h3_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['h3_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['h3_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['h3_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h3_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['h3_texttransform']);  ?>; <?php } ?>
    }
    h3, h3 a{
    <?php if (!empty($cabin_qode_options['h3_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['h3_color']);  ?>; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['h4_color']) || !empty($cabin_qode_options['h4_fontsize']) || !empty($cabin_qode_options['h4_lineheight']) || !empty($cabin_qode_options['h4_fontstyle']) || !empty($cabin_qode_options['h4_fontweight']) || $cabin_qode_options['h4_letterspacing'] !== '' || $cabin_qode_options['h4_google_fonts'] != "-1" || !empty($cabin_qode_options['h4_texttransform'])) { ?>
    h4{
    <?php if($cabin_qode_options['h4_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['h4_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['h4_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['h4_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h4_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['h4_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h4_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['h4_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['h4_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['h4_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['h4_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['h4_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h4_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['h4_texttransform']);  ?>; <?php } ?>
    }
    h4, h4 a{
    <?php if (!empty($cabin_qode_options['h4_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['h4_color']);  ?>; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['h5_color']) || !empty($cabin_qode_options['h5_fontsize']) || !empty($cabin_qode_options['h5_lineheight']) || !empty($cabin_qode_options['h5_fontstyle']) || !empty($cabin_qode_options['h5_fontweight']) || $cabin_qode_options['h5_letterspacing'] !== '' || $cabin_qode_options['h5_google_fonts'] != "-1" || !empty($cabin_qode_options['h5_texttransform'])) { ?>
    h5{
    <?php if($cabin_qode_options['h5_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['h5_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['h5_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['h5_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h5_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['h5_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h5_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['h5_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['h5_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['h5_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['h5_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['h5_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h5_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['h5_texttransform']);  ?>; <?php } ?>
    }
    h5, h5 a{
    <?php if (!empty($cabin_qode_options['h5_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['h5_color']);  ?>; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['h6_color']) || !empty($cabin_qode_options['h6_fontsize']) || !empty($cabin_qode_options['h6_lineheight']) || !empty($cabin_qode_options['h6_fontstyle']) || !empty($cabin_qode_options['h6_fontweight']) || $cabin_qode_options['h6_letterspacing'] !== '' || $cabin_qode_options['h6_google_fonts'] != "-1" || !empty($cabin_qode_options['h6_texttransform'])) { ?>
    h6{
    <?php if($cabin_qode_options['h6_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['h6_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['h6_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['h6_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h6_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['h6_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h6_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['h6_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['h6_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['h6_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['h6_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['h6_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['h6_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['h6_texttransform']);  ?>; <?php } ?>
    }
    h6, h6 a{
    <?php if (!empty($cabin_qode_options['h6_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['h6_color']);  ?>; <?php } ?>
    }
<?php } ?>


<?php
$text_style = array();

if(isset($cabin_qode_options['text_google_fonts']) && $cabin_qode_options['text_google_fonts'] !== '-1') {
    $text_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['text_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['text_fontsize']) && $cabin_qode_options['text_fontsize'] !== '') {
    $text_style[] = 'font-size: '.$cabin_qode_options['text_fontsize'].'px';
}

if(isset($cabin_qode_options['text_lineheight']) && $cabin_qode_options['text_lineheight'] !== '') {
    $text_style[] = 'line-height: '.$cabin_qode_options['text_lineheight'].'px';
}

if(isset($cabin_qode_options['text_letter_spacing']) && $cabin_qode_options['text_letter_spacing'] !== '') {
    $text_style[] = 'letter-spacing: '.$cabin_qode_options['text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['text_fontweight']) && $cabin_qode_options['text_fontweight'] !== '') {
    $text_style[] = 'font-weight: '.$cabin_qode_options['text_fontweight'];
}

if(isset($cabin_qode_options['text_fontstyle']) && $cabin_qode_options['text_fontstyle'] !== '') {
    $text_style[] = 'font-style: '.$cabin_qode_options['text_fontstyle'];
}

if(isset($cabin_qode_options['text_text_transform']) && $cabin_qode_options['text_text_transform'] !== '') {
    $text_style[] = 'text-transform: '.$cabin_qode_options['text_text_transform'];
}

if(isset($cabin_qode_options['text_color']) && $cabin_qode_options['text_color'] !== '') {
    $text_style[] = 'color: '.$cabin_qode_options['text_color'];
}

if(isset($cabin_qode_options['text_margin']) && $cabin_qode_options['text_margin'] !== '') {
    $text_style[] = 'margin-top: '.$cabin_qode_options['text_margin'].'px';
    $text_style[] = 'margin-bottom: '.$cabin_qode_options['text_margin'].'px';
}

if(is_array($text_style) && count($text_style)) { ?>
    p{
    <?php echo esc_attr(implode(';', $text_style)); ?>
    }
<?php }  ?>

<?php if(function_exists('is_woocommerce') && isset($cabin_qode_options['text_color']) && $cabin_qode_options['text_color'] !== ''){ ?>
    .woocommerce .select2-container.orderby .select2-choice,
    .woocommerce-page .select2-container.orderby .select2-choice,
    .woocommerce .select2-dropdown-open.select2-drop-above.orderby .select2-choice,
    .woocommerce .select2-dropdown-open.select2-drop-above.orderby .select2-choices,
    .woocommerce-page .select2-dropdown-open.select2-drop-above.orderby .select2-choice,
    .woocommerce-page .select2-dropdown-open.select2-drop-above.orderby .select2-choices,
    .woocommerce div.cart-collaterals .select2-container .select2-choice,
    .woocommerce-page div.cart-collaterals .select2-container .select2-choice,
    .woocommerce .chosen-container.chosen-container-single .chosen-single,
    .woocommerce-page .chosen-container.chosen-container-single .chosen-single,
    .woocommerce-checkout .chosen-container.chosen-container-single .chosen-single,
    .woocommerce select#pa_color,.woocommerce .product .woocommerce-product-rating .woocommerce-review-link,
    .woocommerce-cart table.cart tbody tr td a,.woocommerce-checkout .checkout table tbody tr td a,
    .woocommerce table.cart tbody tr span.amount,.woocommerce-page table.cart tbody span.amount,
    .woocommerce input[type="text"]:not(.qode_search_field),
    .woocommerce-page input[type="text"]:not(.qode_search_field),
    .woocommerce  textarea,
    .woocommerce-page textarea,
    .woocommerce  input[type="password"],
    .woocommerce-page  input[type="password"],
    .woocommerce form.checkout table.shop_table span.amount,
    .woocommerce-checkout table.shop_table td span.amount,
    .woocommerce-account table.shop_table td span.amount,
    .woocommerce .widget #searchform input[type='text'],
    aside.sidebar .widget_product_search form#searchform input#s,
    .woocommerce .widget #searchsubmit, aside.sidebar .widget_product_search form#searchform input#searchsubmit,
    .select2-drop,.select2-container-multi .select2-choices .select2-search-choice{
    color: <?php echo esc_attr($cabin_qode_options['text_color']); ?>;
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['link_color']) || !empty($cabin_qode_options['link_fontstyle']) || !empty($cabin_qode_options['link_fontweight']) || !empty($cabin_qode_options['link_fontdecoration'])) { ?>
    a, p a{
    <?php if (!empty($cabin_qode_options['link_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['link_color']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['link_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['link_fontstyle']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['link_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['link_fontweight']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['link_fontdecoration'])) { ?>text-decoration: <?php echo esc_attr($cabin_qode_options['link_fontdecoration']);  ?>;<?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['link_hovercolor']) || !empty($cabin_qode_options['link_hover_fontdecoration'])) { ?>
    a:hover,
    p a:hover{
    <?php if (!empty($cabin_qode_options['link_hovercolor'])) { ?>color: <?php echo esc_attr($cabin_qode_options['link_hovercolor']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['link_hover_fontdecoration'])) { ?>text-decoration: <?php echo esc_attr($cabin_qode_options['link_hover_fontdecoration']);  ?>;<?php } ?>
    }
<?php } ?>

<?php
$blockquote_title_style = array();

if(isset($cabin_qode_options['blockquote_font_family']) && $cabin_qode_options['blockquote_font_family'] !== '-1') {
    $blockquote_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blockquote_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blockquote_font_size']) && $cabin_qode_options['blockquote_font_size'] !== '') {
    $blockquote_title_style[] = 'font-size: '.$cabin_qode_options['blockquote_font_size'].'px';
}

if(isset($cabin_qode_options['blockquote_line_height']) && $cabin_qode_options['blockquote_line_height'] !== '') {
    $blockquote_title_style[] = 'line-height: '.$cabin_qode_options['blockquote_line_height'].'px';
}

if(isset($cabin_qode_options['blockquote_letter_spacing']) && $cabin_qode_options['blockquote_letter_spacing'] !== '') {
    $blockquote_title_style[] = 'letter-spacing: '.$cabin_qode_options['blockquote_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blockquote_font_weight']) && $cabin_qode_options['blockquote_font_weight'] !== '') {
    $blockquote_title_style[] = 'font-weight: '.$cabin_qode_options['blockquote_font_weight'];
}

if(isset($cabin_qode_options['blockquote_font_style']) && $cabin_qode_options['blockquote_font_style'] !== '') {
    $blockquote_title_style[] = 'font-style: '.$cabin_qode_options['blockquote_font_style'];
}

if(isset($cabin_qode_options['blockquote_text_transform']) && $cabin_qode_options['blockquote_text_transform'] !== '') {
    $blockquote_title_style[] = 'text-transform: '.$cabin_qode_options['blockquote_text_transform'];
}

if(isset($cabin_qode_options['blockquote_color']) && $cabin_qode_options['blockquote_color'] !== '') {
    $blockquote_title_style[] = 'color: '.$cabin_qode_options['blockquote_color'];
}

if(is_array($blockquote_title_style) && count($blockquote_title_style)) { ?>
    blockquote h4, blockquote > p{
    <?php echo esc_attr(implode(';', $blockquote_title_style)); ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['blockquote_background_color']) || !empty($cabin_qode_options['blockquote_border_color'])) { ?>
    blockquote{
    <?php if (!empty($cabin_qode_options['blockquote_border_color'])) {?> border-color: <?php echo esc_attr($cabin_qode_options['blockquote_border_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['blockquote_background_color'])) {?> background-color: <?php echo esc_attr($cabin_qode_options['blockquote_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['blockquote_quote_icon_color'])) { ?>
    blockquote.with_quote_icon span.icon_quotations_holder{
    color: <?php echo esc_attr($cabin_qode_options['blockquote_quote_icon_color']); ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['page_title_color']) || !empty($cabin_qode_options['page_title_fontsize']) || !empty($cabin_qode_options['page_title_lineheight']) || !empty($cabin_qode_options['page_title_fontstyle']) || !empty($cabin_qode_options['page_title_fontweight']) || !empty($cabin_qode_options['page_title_texttransform']) || $cabin_qode_options['page_title_google_fonts'] != "-1" || isset($cabin_qode_options['page_title_letter_spacing']) && $cabin_qode_options['page_title_letter_spacing'] !== '') { ?>
    .title h1, .title h1.title_like_separator .vc_text_separator.full .separator_content{
    <?php if (!empty($cabin_qode_options['page_title_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['page_title_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['page_title_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['page_title_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['page_title_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['page_title_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_title_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['page_title_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_title_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['page_title_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_title_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['page_title_fontweight']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['page_title_letter_spacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($cabin_qode_options['page_title_letter_spacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_title_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['page_title_texttransform']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['page_subtitle_color']) || !empty($cabin_qode_options['page_subtitle_fontsize']) || $cabin_qode_options['page_subtitle_google_fonts'] != "-1" || !empty($cabin_qode_options['page_subtitle_lineheight']) || !empty($cabin_qode_options['page_subtitle_fontstyle']) || !empty($cabin_qode_options['page_subtitle_fontweight']) || !empty($cabin_qode_options['page_subtitle_texttransform']) || $cabin_qode_options['page_subtitle_letter_spacing'] !== '') { ?>
    .subtitle, .title_holder .title_subtitle_holder .subtitle.subtitle_like_separator .separator_content{
    <?php if (!empty($cabin_qode_options['page_subtitle_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['page_subtitle_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['page_subtitle_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['page_subtitle_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['page_subtitle_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['page_subtitle_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_subtitle_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['page_subtitle_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_subtitle_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['page_subtitle_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_subtitle_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['page_subtitle_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_subtitle_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['page_subtitle_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['page_subtitle_letter_spacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['page_subtitle_letter_spacing']); ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['page_breadcrumb_color']) || !empty($cabin_qode_options['page_breadcrumb_fontsize']) || $cabin_qode_options['page_breadcrumb_google_fonts'] != "-1" || !empty($cabin_qode_options['page_breadcrumb_lineheight']) || !empty($cabin_qode_options['page_breadcrumb_fontstyle']) || !empty($cabin_qode_options['page_breadcrumb_fontweight']) || !empty($cabin_qode_options['page_breadcrumb_texttransform']) || $cabin_qode_options['page_breadcrumb_letter_spacing'] !== '') { ?>
    .breadcrumb a, .breadcrumb span{
    <?php if (!empty($cabin_qode_options['page_breadcrumb_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['page_breadcrumb_google_fonts'] !== "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['page_breadcrumb_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['page_breadcrumb_fontsize'])) { ?>font-size: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_breadcrumb_lineheight'])) { ?>line-height: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_breadcrumb_fontstyle'])) { ?>font-style: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_breadcrumb_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['page_breadcrumb_texttransform'])) { ?>text-transform: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['page_breadcrumb_letter_spacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_letter_spacing']); ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['page_breadcrumb_color'])){ ?>
    .breadcrumb a:hover, .breadcrumb span.current{
    color: <?php echo esc_attr($cabin_qode_options['page_breadcrumb_hovercolor']);  ?>;
    }
<?php } ?>
<?php
/******** BLOG SINGLE: Spacing  ********/

if(isset($cabin_qode_options['blog_single_tags_holder_margin_top']) && $cabin_qode_options['blog_single_tags_holder_margin_top'] !== '') { ?>
    .blog_holder.blog_single .single_tags{
    margin-top: <?php echo esc_attr($cabin_qode_options['blog_single_tags_holder_margin_top'].'px'); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_navigation_margin']) && $cabin_qode_options['blog_single_navigation_margin'] !== '')  { ?>
    .blog_holder.blog_single .blog_navigation{
    padding-top: <?php echo esc_attr($cabin_qode_options['blog_single_navigation_margin'].'px'); ?>;
    padding-bottom: <?php echo esc_attr($cabin_qode_options['blog_single_navigation_margin'].'px'); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_comments_holder_margin']) && $cabin_qode_options['blog_single_comments_holder_margin'] !== '') {?>
    .single-post .comment_holder{
    padding-top: <?php echo esc_attr($cabin_qode_options['blog_single_comments_holder_margin'].'px'); ?>;
    padding-bottom: <?php echo esc_attr($cabin_qode_options['blog_single_comments_holder_margin'].'px'); ?>;
    }
<?php } ?>

<?php
/******** BLOG SINGLE: POST INFO AUTHOR STYLES  ********/

$blog_single_post_info_author_box_style = array();

if(isset($cabin_qode_options['blog_single_post_author_info_margin_top']) && $cabin_qode_options['blog_single_post_author_info_margin_top'] !== '') {
    $blog_single_post_info_author_box_style[] = 'margin-top: '.$cabin_qode_options['blog_single_post_author_info_margin_top'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_background_color']) && $cabin_qode_options['blog_single_post_author_info_background_color'] !== '') {
    $blog_single_post_info_author_box_style[] = 'background-color: '.$cabin_qode_options['blog_single_post_author_info_background_color'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_border_width']) && $cabin_qode_options['blog_single_post_author_info_border_width'] !== '') {
    $blog_single_post_info_author_box_style[] = 'border-width: '.$cabin_qode_options['blog_single_post_author_info_border_width'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_border_color']) && $cabin_qode_options['blog_single_post_author_info_border_color'] !== '') {
    $blog_single_post_info_author_box_style[] = 'border-color: '.$cabin_qode_options['blog_single_post_author_info_border_color'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_padding_top']) && $cabin_qode_options['blog_single_post_author_info_padding_top'] !== '') {
    $blog_single_post_info_author_box_style[] = 'padding-top: '.$cabin_qode_options['blog_single_post_author_info_padding_top'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_padding_bottom']) && $cabin_qode_options['blog_single_post_author_info_padding_bottom'] !== '') {
    $blog_single_post_info_author_box_style[] = 'padding-bottom: '.$cabin_qode_options['blog_single_post_author_info_padding_bottom'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_padding_left']) && $cabin_qode_options['blog_single_post_author_info_padding_left'] !== '') {
    $blog_single_post_info_author_box_style[] = 'padding-left: '.$cabin_qode_options['blog_single_post_author_info_padding_left'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_padding_right']) && $cabin_qode_options['blog_single_post_author_info_padding_right'] !== '') {
    $blog_single_post_info_author_box_style[] = 'padding-right: '.$cabin_qode_options['blog_single_post_author_info_padding_right'].'px';
}

if(is_array($blog_single_post_info_author_box_style) && count($blog_single_post_info_author_box_style)) { ?>
    .blog_holder.blog_single .author_description{
    <?php echo esc_attr(implode(';', $blog_single_post_info_author_box_style)); ?>
    }
<?php } ?>

<?php
/**************** BLOG SINGLE: POST INFO AUTHOR STYLES: Title Style ****************/
$blog_single_post_info_author_title_style = array();

if(isset($cabin_qode_options['blog_single_post_author_info_title_font_family']) && $cabin_qode_options['blog_single_post_author_info_title_font_family'] !== '-1') {
    $blog_single_post_info_author_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_single_post_author_info_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_fontsize']) && $cabin_qode_options['blog_single_post_author_info_title_fontsize'] !== '') {
    $blog_single_post_info_author_title_style[] = 'font-size: '.$cabin_qode_options['blog_single_post_author_info_title_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_lineheight']) && $cabin_qode_options['blog_single_post_author_info_title_lineheight'] !== '') {
    $blog_single_post_info_author_title_style[] = 'line-height: '.$cabin_qode_options['blog_single_post_author_info_title_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_letterspacing']) && $cabin_qode_options['blog_single_post_author_info_title_letterspacing'] !== '') {
    $blog_single_post_info_author_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_single_post_author_info_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_fontweight']) && $cabin_qode_options['blog_single_post_author_info_title_fontweight'] !== '') {
    $blog_single_post_info_author_title_style[] = 'font-weight: '.$cabin_qode_options['blog_single_post_author_info_title_fontweight'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_fontstyle']) && $cabin_qode_options['blog_single_post_author_info_title_fontstyle'] !== '') {
    $blog_single_post_info_author_title_style[] = 'font-style: '.$cabin_qode_options['blog_single_post_author_info_title_fontstyle'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_texttransform']) && $cabin_qode_options['blog_single_post_author_info_title_texttransform'] !== '') {
    $blog_single_post_info_author_title_style[] = 'text-transform: '.$cabin_qode_options['blog_single_post_author_info_title_texttransform'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_color']) && $cabin_qode_options['blog_single_post_author_info_title_color'] !== ''){
    $blog_single_post_info_author_title_style[] = 'color: '.$cabin_qode_options['blog_single_post_author_info_title_color'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_title_margin_bottom']) && $cabin_qode_options['blog_single_post_author_info_title_margin_bottom'] !== '') {
    $blog_single_post_info_author_title_style[] = 'margin-bottom: '.$cabin_qode_options['blog_single_post_author_info_title_margin_bottom'].'px';
}

if(is_array($blog_single_post_info_author_title_style) && count($blog_single_post_info_author_title_style)) { ?>
    .blog_holder.blog_single .author_description .author_text_holder .author_name{
    <?php echo esc_attr(implode(';', $blog_single_post_info_author_title_style)); ?>
    }
<?php } ?>

<?php
/**************** BLOG SINGLE: POST INFO AUTHOR STYLES: Text Style ****************/
$blog_single_post_info_author_text_style = array();

if(isset($cabin_qode_options['blog_single_post_author_info_text_font_family']) && $cabin_qode_options['blog_single_post_author_info_text_font_family'] !== '-1') {
    $blog_single_post_info_author_text_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_single_post_author_info_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_fontsize']) && $cabin_qode_options['blog_single_post_author_info_text_fontsize'] !== '') {
    $blog_single_post_info_author_text_style[] = 'font-size: '.$cabin_qode_options['blog_single_post_author_info_text_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_lineheight']) && $cabin_qode_options['blog_single_post_author_info_text_lineheight'] !== '') {
    $blog_single_post_info_author_text_style[] = 'line-height: '.$cabin_qode_options['blog_single_post_author_info_text_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_letterspacing']) && $cabin_qode_options['blog_single_post_author_info_text_letterspacing'] !== '') {
    $blog_single_post_info_author_text_style[] = 'letter-spacing: '.$cabin_qode_options['blog_single_post_author_info_text_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_fontweight']) && $cabin_qode_options['blog_single_post_author_info_text_fontweight'] !== '') {
    $blog_single_post_info_author_text_style[] = 'font-weight: '.$cabin_qode_options['blog_single_post_author_info_text_fontweight'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_fontstyle']) && $cabin_qode_options['blog_single_post_author_info_text_fontstyle'] !== '') {
    $blog_single_post_info_author_text_style[] = 'font-style: '.$cabin_qode_options['blog_single_post_author_info_text_fontstyle'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_texttransform']) && $cabin_qode_options['blog_single_post_author_info_text_texttransform'] !== '') {
    $blog_single_post_info_author_text_style[] = 'text-transform: '.$cabin_qode_options['blog_single_post_author_info_text_texttransform'];
}

if(isset($cabin_qode_options['blog_single_post_author_info_text_color']) && $cabin_qode_options['blog_single_post_author_info_text_color'] !== ''){
    $blog_single_post_info_author_text_style[] = 'color: '.$cabin_qode_options['blog_single_post_author_info_text_color'];
}

if(is_array($blog_single_post_info_author_text_style) && count($blog_single_post_info_author_text_style)) { ?>
    .blog_holder.blog_single .author_description .author_text_holder .author_email,
    .blog_holder.blog_single .author_description .author_text_holder .author_text{
    <?php echo esc_attr(implode(';', $blog_single_post_info_author_text_style)); ?>
    }
<?php } ?>

<?php
/******** BLOG SINGLE: POST INFO COMMENTS STYLES  ********/

$blog_single_post_comments_box_style = array();

if(isset($cabin_qode_options['blog_single_post_comments_margin_top']) && $cabin_qode_options['blog_single_post_comments_margin_top'] !== '') {
    $blog_single_post_info_author_box_style[] = 'margin-top: '.$cabin_qode_options['blog_single_post_comments_margin_top'].'px';
}

if(isset($cabin_qode_options['blog_single_post_comments_background_color']) && $cabin_qode_options['blog_single_post_comments_background_color'] !== '') {
    $blog_single_post_comments_box_style[] = 'background-color: '.$cabin_qode_options['blog_single_post_comments_background_color'];
}

if(isset($cabin_qode_options['blog_single_post_comments_border_width']) && $cabin_qode_options['blog_single_post_comments_border_width'] !== '') {
    $blog_single_post_comments_box_style[] = 'border-width: '.$cabin_qode_options['blog_single_post_comments_border_width'].'px';
}

if(isset($cabin_qode_options['blog_single_post_comments_border_color']) && $cabin_qode_options['blog_single_post_comments_border_color'] !== '') {
    $blog_single_post_comments_box_style[] = 'border-color: '.$cabin_qode_options['blog_single_post_comments_border_color'];
}

if(isset($cabin_qode_options['blog_single_post_comments_margin_bottom']) && $cabin_qode_options['blog_single_post_comments_margin_bottom'] !== '') {
    $blog_single_post_comments_box_style[] = 'margin-bottom: '.$cabin_qode_options['blog_single_post_comments_margin_bottom'].'px';
}

if(isset($cabin_qode_options['blog_single_post_comments_padding_top']) && $cabin_qode_options['blog_single_post_comments_padding_top'] !== '') {
    $blog_single_post_comments_box_style[] = 'padding-top: '.$cabin_qode_options['blog_single_post_comments_padding_top'].'px';
}

if(isset($cabin_qode_options['blog_single_post_comments_padding_bottom']) && $cabin_qode_options['blog_single_post_comments_padding_bottom'] !== '') {
    $blog_single_post_comments_box_style[] = 'padding-bottom: '.$cabin_qode_options['blog_single_post_comments_padding_bottom'].'px';
}

if(isset($cabin_qode_options['blog_single_post_comments_padding_left']) && $cabin_qode_options['blog_single_post_comments_padding_left'] !== '') {
    $blog_single_post_comments_box_style[] = 'padding-left: '.$cabin_qode_options['blog_single_post_comments_padding_left'].'px';
}

if(isset($cabin_qode_options['blog_single_post_comments_padding_right']) && $cabin_qode_options['blog_single_post_comments_padding_right'] !== '') {
    $blog_single_post_comments_box_style[] = 'padding-right: '.$cabin_qode_options['blog_single_post_comments_padding_right'].'px';
}

if(is_array($blog_single_post_comments_box_style) && count($blog_single_post_comments_box_style)) { ?>
    .single-post .comment_holder .comments .comment{
    <?php echo esc_attr(implode(';', $blog_single_post_comments_box_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_post_comments_title_color']) && $cabin_qode_options['blog_single_post_comments_title_color'] !== '') { ?>
    .single-post .comment_holder .comments .comment .text .name,
    .single-post .comment_holder .comments .comment .text .name a{
    color: <?php echo esc_attr($cabin_qode_options['blog_single_post_comments_title_color']) ; ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_post_comments_text_color']) && $cabin_qode_options['blog_single_post_comments_text_color'] !== '') { ?>
    .single-post .comment_holder .comments .comment .text .text_holder,
    .single-post .comment_holder .comments .comment .text .text_holder p{
    color: <?php echo esc_attr($cabin_qode_options['blog_single_post_comments_text_color']) ; ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_post_comments_link_color']) && $cabin_qode_options['blog_single_post_comments_link_color'] !== '') { ?>
    .single-post .comment_holder .comments .comment .text .comment-reply-link,
    .single-post .comment_holder .comments .comment .text .replay,
    .single-post .comment_holder .comments .comment .text .comment-edit-link{
    color: <?php echo esc_attr($cabin_qode_options['blog_single_post_comments_link_color']) ; ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_post_comments_date_color']) && $cabin_qode_options['blog_single_post_comments_date_color'] !== '') { ?>
    .single-post .comment_holder .comment .text .comment_date{
    color: <?php echo esc_attr($cabin_qode_options['blog_single_post_comments_date_color']) ; ?>
    }
<?php } ?>

<?php
/******** BLOG: STANDARD Share options ********/
if(isset($cabin_qode_options['blog_standard_type_show_share']) && $cabin_qode_options['blog_standard_type_show_share'] == 'yes') {

    if(isset($cabin_qode_options['blog_standard_type_share_icon_color']) && $cabin_qode_options['blog_standard_type_share_icon_color'] !== '') {?>
        .blog_holder.blog_standard_type .social_share_dropdown ul li a,
        .blog_holder.blog_standard_type .social_share_dropdown ul li .social_network_icon,
        .blog_holder.blog_standard_type article .social_share_list_holder ul li i{
        color:  <?php echo esc_attr($cabin_qode_options['blog_standard_type_share_icon_color']); ?> ;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['blog_standard_type_share_background_color']) && $cabin_qode_options['blog_standard_type_share_background_color'] !== '') {?>
        .blog_holder.blog_standard_type .social_share_dropdown ul li a{
        background-color:  <?php echo esc_attr($cabin_qode_options['blog_standard_type_share_background_color']); ?> ;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['blog_standard_type_share_icon_hover_color']) && $cabin_qode_options['blog_standard_type_share_icon_hover_color'] !== '') {?>
        .blog_holder.blog_standard_type .social_share_dropdown ul li:hover,
        .blog_holder.blog_standard_type .social_share_dropdown ul li:hover a span.social_network_icon,
        .blog_holder.blog_standard_type article .social_share_list_holder ul li i:hover{
        color:  <?php echo esc_attr($cabin_qode_options['blog_standard_type_share_icon_hover_color']); ?> !important;
        }
    <?php } ?>
<?php } ?>

<?php
/******** BLOG: STANDARD Text Box ********/
if(isset($cabin_qode_options['blog_standard_type_enable_text_box']) && $cabin_qode_options['blog_standard_type_enable_text_box'] == 'yes') {
    $blog_box_style = array();
    ?>
    <?php
    if(isset($cabin_qode_options['blog_standard_type_box_background_color']) && $cabin_qode_options['blog_standard_type_box_background_color'] !== '') {
        $blog_box_style[] = 'background-color: '.$cabin_qode_options['blog_standard_type_box_background_color'];
    }

    if(isset($cabin_qode_options['blog_standard_type_box_border_color']) && $cabin_qode_options['blog_standard_type_box_border_color'] !== '') {
        $blog_box_style[] = 'border: 1px solid';
        $blog_box_style[] = 'border-color: '.$cabin_qode_options['blog_standard_type_box_border_color'];
    }

    if(isset($cabin_qode_options['blog_standard_type_box_padding']) && $cabin_qode_options['blog_standard_type_box_padding'] !== '') {
        $blog_box_style[] = 'padding: '.$cabin_qode_options['blog_standard_type_box_padding'];
    }

    if(is_array($blog_box_style) && count($blog_box_style)) { ?>
        .blog_holder.blog_standard_type article:not(.format-link):not(.format-quote) .post_text .post_text_inner,
        .blog_holder.blog_standard_type.blog_single article.format-link .post_content,
        .blog_holder.blog_standard_type.blog_single article.format-quote .post_content{
        <?php echo esc_attr(implode(';', $blog_box_style)); ?>
        }
    <?php }}
?>

<?php
if(isset($cabin_qode_options['blog_standard_type_paragraph_color']) && $cabin_qode_options['blog_standard_type_paragraph_color'] !== '') { ?>
    .blog_holder.blog_standard_type article .post_excerpt{
    color : <?php echo esc_attr($cabin_qode_options['blog_standard_type_paragraph_color']) ;?>
    }
<?php } ?>


<?php
/******** BLOG: STANDARD Quote/Link Text Box ********/
if(isset($cabin_qode_options['blog_standard_type_ql_background_color']) &&($cabin_qode_options['blog_standard_type_ql_background_color'])!==""){ ?>
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner,
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner{
    background-color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_background_color']);  ?>;
    }
    <?php  $blog_standard_type_ql_background_color = cabin_qode_hex2rgb($cabin_qode_options['blog_standard_type_ql_background_color']); ?>

    .blog_holder.blog_standard_type article.format-link .post_text.link_image .post_text_inner,
    .blog_holder.blog_standard_type article.format-quote .post_text.quote_image .post_text_inner{
    <?php if (!empty($cabin_qode_options['blog_standard_type_ql_background_color'])) { ?>  background-color: rgba(<?php echo esc_attr($blog_standard_type_ql_background_color[0]); ?>,<?php echo esc_attr($blog_standard_type_ql_background_color[1]); ?>,<?php echo esc_attr($blog_standard_type_ql_background_color[2]); ?>,0.85); <?php } ?>
    }
<?php } ?>


<?php if(isset($cabin_qode_options['blog_standard_type_ql_hover_background_color']) && !empty($cabin_qode_options['blog_standard_type_ql_hover_background_color'])){ ?>
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner:hover,
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover{
    background-color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_hover_background_color']);  ?>;
    }
    <?php  $blog_standard_type_ql_hover_background_color = cabin_qode_hex2rgb($cabin_qode_options['blog_standard_type_ql_hover_background_color']); ?>

    .blog_holder.blog_standard_type article.format-link .post_text.link_image .post_text_inner:hover,
    .blog_holder.blog_standard_type article.format-quote .post_text.quote_image .post_text_inner:hover{
    <?php if (!empty($cabin_qode_options['blog_standard_type_ql_hover_background_color'])) { ?>  background-color: rgba(<?php echo esc_attr($blog_standard_type_ql_hover_background_color[0]); ?>,<?php echo esc_attr($blog_standard_type_ql_hover_background_color[1]); ?>,<?php echo esc_attr($blog_standard_type_ql_hover_background_color[2]); ?>,0.6); <?php } ?>
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_image_margin_bottom']) && $cabin_qode_options['blog_standard_type_image_margin_bottom'] !== '') { ?>
    .blog_holder.blog_standard_type article .audio_image,
    .blog_holder.blog_standard_type article:not(.format-audio) .post_image{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_standard_type_image_margin_bottom'].'px !important');?>
    }
    .blog_holder.blog_standard_type.blog_single article.format-link .post_content,
    .blog_holder.blog_standard_type.blog_single article.format-quote .post_content{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_standard_type_image_margin_bottom'].'px !important');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_title_margin_bottom']) && $cabin_qode_options['blog_standard_type_title_margin_bottom'] !== '') { ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) h2{
    padding-bottom : <?php echo esc_attr($cabin_qode_options['blog_standard_type_title_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_post_info_margin_bottom']) && $cabin_qode_options['blog_standard_type_post_info_margin_bottom'] !== '') { ?>
    .blog_holder.blog_standard_type article:not(.format-link):not(.format-quote) .post_info{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_standard_type_post_info_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_read_more_margin_top']) && $cabin_qode_options['blog_standard_type_read_more_margin_top'] !== '') { ?>
    .blog_holder.blog_standard_type article .post_text_inner a.read_more_button{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_standard_type_read_more_margin_top'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_article_margin_bottom']) && $cabin_qode_options['blog_standard_type_article_margin_bottom'] !== '') { ?>
    .blog_holder.blog_standard_type:not(.blog_single) article{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_standard_type_article_margin_bottom'].'px');?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_single_article_social_share_list_margin_top']) && $cabin_qode_options['blog_standard_type_single_article_social_share_list_margin_top'] !== '') { ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) .social_share_list_holder{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_standard_type_single_article_social_share_list_margin_top'].'px');?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_ql_title_margin_bottom']) && $cabin_qode_options['blog_standard_type_ql_title_margin_bottom'] !== '') { ?>
    .blog_holder.blog_standard_type article.format-quote .post_title h3,
    .blog_holder.blog_standard_type article.format-link .post_title h3{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_title_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_ql_social_share_list_margin_top']) && $cabin_qode_options['blog_standard_type_ql_social_share_list_margin_top'] !== '') { ?>
    .blog_holder.blog_standard_type article.format-link .social_share_list_holder,
    .blog_holder.blog_standard_type article.format-quote .social_share_list_holder{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_social_share_list_margin_top'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_standard_type_ql_quote_author_margin_bottom']) && $cabin_qode_options['blog_standard_type_ql_quote_author_margin_bottom'] !== '') { ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .quote_author{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_quote_author_margin_bottom'].'px');?>;
    }
<?php } ?>

<?php
/**************** BLOG STANDARD: Title Style ****************/
$blog_standard_type_title_style = array();

if(isset($cabin_qode_options['blog_standard_type_title_google_fonts']) && $cabin_qode_options['blog_standard_type_title_google_fonts'] !== '-1') {
    $blog_standard_type_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_standard_type_title_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_standard_type_title_fontsize']) && $cabin_qode_options['blog_standard_type_title_fontsize'] !== '') {
    $blog_standard_type_title_style[] = 'font-size: '.$cabin_qode_options['blog_standard_type_title_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_title_lineheight']) && $cabin_qode_options['blog_standard_type_title_lineheight'] !== '') {
    $blog_standard_type_title_style[] = 'line-height: '.$cabin_qode_options['blog_standard_type_title_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_title_letterspacing']) && $cabin_qode_options['blog_standard_type_title_letterspacing'] !== '') {
    $blog_standard_type_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_standard_type_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_title_fontweight']) && $cabin_qode_options['blog_standard_type_title_fontweight'] !== '') {
    $blog_standard_type_title_style[] = 'font-weight: '.$cabin_qode_options['blog_standard_type_title_fontweight'];
}

if(isset($cabin_qode_options['blog_standard_type_title_fontstyle']) && $cabin_qode_options['blog_standard_type_title_fontstyle'] !== '') {
    $blog_standard_type_title_style[] = 'font-style: '.$cabin_qode_options['blog_standard_type_title_fontstyle'];
}

if(isset($cabin_qode_options['blog_standard_type_title_texttransform']) && $cabin_qode_options['blog_standard_type_title_texttransform'] !== '') {
    $blog_standard_type_title_style[] = 'text-transform: '.$cabin_qode_options['blog_standard_type_title_texttransform'];
}

if(is_array($blog_standard_type_title_style) && count($blog_standard_type_title_style)) { ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) h2{
    <?php echo esc_attr(implode(';', $blog_standard_type_title_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_title_color']) && !empty($cabin_qode_options['blog_standard_type_title_color'])){ ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) h2 a,
    .blog_holder.blog_single.blog_standard_type article:not(.format-quote):not(.format-link) h2{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_title_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_title_hover_color']) && !empty($cabin_qode_options['blog_standard_type_title_hover_color'])){ ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) h2 a:hover,
    .blog_holder.blog_single.blog_standard_type article:not(.format-quote):not(.format-link) h2:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_title_hover_color']);  ?>;
    }
<?php } ?>

<?php
/**************** BLOG STANDARD: Qoute/Link Title Style ****************/
$blog_standard_type_ql_title_style = array();

if(isset($cabin_qode_options['blog_standard_type_ql_title_google_fonts']) && $cabin_qode_options['blog_standard_type_ql_title_google_fonts'] !== '-1') {
    $blog_standard_type_ql_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_standard_type_ql_title_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_standard_type_ql_title_fontsize']) && $cabin_qode_options['blog_standard_type_ql_title_fontsize'] !== '') {
    $blog_standard_type_ql_title_style[] = 'font-size: '.$cabin_qode_options['blog_standard_type_ql_title_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_title_lineheight']) && $cabin_qode_options['blog_standard_type_ql_title_lineheight'] !== '') {
    $blog_standard_type_ql_title_style[] = 'line-height: '.$cabin_qode_options['blog_standard_type_ql_title_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_title_letterspacing']) && $cabin_qode_options['blog_standard_type_ql_title_letterspacing'] !== '') {
    $blog_standard_type_ql_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_standard_type_ql_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_title_fontweight']) && $cabin_qode_options['blog_standard_type_ql_title_fontweight'] !== '') {
    $blog_standard_type_ql_title_style[] = 'font-weight: '.$cabin_qode_options['blog_standard_type_ql_title_fontweight'];
}

if(isset($cabin_qode_options['blog_standard_type_ql_title_fontstyle']) && $cabin_qode_options['blog_standard_type_ql_title_fontstyle'] !== '') {
    $blog_standard_type_ql_title_style[] = 'font-style: '.$cabin_qode_options['blog_standard_type_ql_title_fontstyle'];
}

if(isset($cabin_qode_options['blog_standard_type_ql_title_texttransform']) && $cabin_qode_options['blog_standard_type_ql_title_texttransform'] !== '') {
    $blog_standard_type_ql_title_style[] = 'text-transform: '.$cabin_qode_options['blog_standard_type_ql_title_texttransform'];
}

if(is_array($blog_standard_type_ql_title_style) && count($blog_standard_type_ql_title_style)) { ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_title h3,
    .blog_holder.blog_standard_type article.format-link .post_text .post_title h3{
    <?php echo esc_attr(implode(';', $blog_standard_type_ql_title_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_title_color']) && !empty($cabin_qode_options['blog_standard_type_ql_title_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_title h3 a,
    .blog_holder.blog_standard_type article.format-link .post_text .post_title h3 a,
    .blog_holder.blog_standard_type article.format-quote .post_text .post_title h3,
    .blog_holder.blog_standard_type article.format-link .post_text .post_title h3
    {
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_title_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_title_hover_color']) && !empty($cabin_qode_options['blog_standard_type_ql_title_hover_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover .post_title h3 a,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner:hover .post_title h3 a,
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover .post_title h3,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner:hover .post_title h3
    {
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_title_hover_color']);  ?>;
    }
<?php } ?>
<?php
/**************** BLOG STANDARD: Qoute Author Style ****************/
$blog_standard_type_ql_author_style = array();

if(isset($cabin_qode_options['blog_standard_type_ql_author_google_fonts']) && $cabin_qode_options['blog_standard_type_ql_author_google_fonts'] !== '-1') {
    $blog_standard_type_ql_author_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_standard_type_ql_author_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_standard_type_ql_author_fontsize']) && $cabin_qode_options['blog_standard_type_ql_author_fontsize'] !== '') {
    $blog_standard_type_ql_author_style[] = 'font-size: '.$cabin_qode_options['blog_standard_type_ql_author_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_author_lineheight']) && $cabin_qode_options['blog_standard_type_ql_author_lineheight'] !== '') {
    $blog_standard_type_ql_author_style[] = 'line-height: '.$cabin_qode_options['blog_standard_type_ql_author_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_author_letterspacing']) && $cabin_qode_options['blog_standard_type_ql_author_letterspacing'] !== '') {
    $blog_standard_type_ql_author_style[] = 'letter-spacing: '.$cabin_qode_options['blog_standard_type_ql_author_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_author_fontweight']) && $cabin_qode_options['blog_standard_type_ql_author_fontweight'] !== '') {
    $blog_standard_type_ql_author_style[] = 'font-weight: '.$cabin_qode_options['blog_standard_type_ql_author_fontweight'];
}

if(isset($cabin_qode_options['blog_standard_type_ql_author_fontstyle']) && $cabin_qode_options['blog_standard_type_ql_author_fontstyle'] !== '') {
    $blog_standard_type_ql_author_style[] = 'font-style: '.$cabin_qode_options['blog_standard_type_ql_author_fontstyle'];
}

if(isset($cabin_qode_options['blog_standard_type_ql_author_texttransform']) && $cabin_qode_options['blog_standard_type_ql_author_texttransform'] !== '') {
    $blog_standard_type_ql_author_style[] = 'text-transform: '.$cabin_qode_options['blog_standard_type_ql_author_texttransform'];
}

if(is_array($blog_standard_type_ql_author_style) && count($blog_standard_type_ql_author_style)) { ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .quote_author{
    <?php echo esc_attr(implode(';', $blog_standard_type_ql_author_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_author_color']) && !empty($cabin_qode_options['blog_standard_type_ql_author_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .quote_author{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_author_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_author_hover_color']) && !empty($cabin_qode_options['blog_standard_type_ql_author_hover_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover .quote_author{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_author_hover_color']);  ?>;
    }
<?php } ?>
<?php
/**************** BLOG STANDARD: Info Style ****************/
$blog_standard_type_info_style = array();

if(isset($cabin_qode_options['blog_standard_type_info_google_fonts']) && $cabin_qode_options['blog_standard_type_info_google_fonts'] !== '-1') {
    $blog_standard_type_info_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_standard_type_info_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_standard_type_info_fontsize']) && $cabin_qode_options['blog_standard_type_info_fontsize'] !== '') {
    $blog_standard_type_info_style[] = 'font-size: '.$cabin_qode_options['blog_standard_type_info_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_info_lineheight']) && $cabin_qode_options['blog_standard_type_info_lineheight'] !== '') {
    $blog_standard_type_info_style[] = 'line-height: '.$cabin_qode_options['blog_standard_type_info_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_info_letterspacing']) && $cabin_qode_options['blog_standard_type_info_letterspacing'] !== '') {
    $blog_standard_type_info_style[] = 'letter-spacing: '.$cabin_qode_options['blog_standard_type_info_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_info_fontweight']) && $cabin_qode_options['blog_standard_type_info_fontweight'] !== '') {
    $blog_standard_type_info_style[] = 'font-weight: '.$cabin_qode_options['blog_standard_type_info_fontweight'];
}

if(isset($cabin_qode_options['blog_standard_type_info_fontstyle']) && $cabin_qode_options['blog_standard_type_info_fontstyle'] !== '') {
    $blog_standard_type_info_style[] = 'font-style: '.$cabin_qode_options['blog_standard_type_info_fontstyle'];
}

if(isset($cabin_qode_options['blog_standard_type_info_texttransform']) && $cabin_qode_options['blog_standard_type_info_texttransform'] !== '') {
    $blog_standard_type_info_style[] = 'text-transform: '.$cabin_qode_options['blog_standard_type_info_texttransform'];
}
if(is_array($blog_standard_type_info_style) && count($blog_standard_type_info_style)) { ?>

    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div{
    <?php echo esc_attr(implode(';', $blog_standard_type_info_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_info_color']) && !empty($cabin_qode_options['blog_standard_type_info_color'])){ ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div
    {
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_info_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_info_link_color']) && !empty($cabin_qode_options['blog_standard_type_info_link_color'])){ ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div a
    {
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_info_link_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_info_hover_color']) && !empty($cabin_qode_options['blog_standard_type_info_hover_color'])){ ?>
    .blog_holder.blog_standard_type article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_info_hover_color']);  ?>;
    }
<?php } ?>


<?php
/****************  BLOG STANDARD: Quote/Link TExt Style *********************/
$blog_standard_type_ql_info_style = array();

if(isset($cabin_qode_options['blog_standard_type_ql_info_google_fonts']) && $cabin_qode_options['blog_standard_type_ql_info_google_fonts'] !== '-1') {
    $blog_standard_type_ql_info_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_standard_type_ql_info_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_standard_type_ql_info_fontsize']) && $cabin_qode_options['blog_standard_type_ql_info_fontsize'] !== '') {
    $blog_standard_type_ql_info_style[] = 'font-size: '.$cabin_qode_options['blog_standard_type_ql_info_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_info_lineheight']) && $cabin_qode_options['blog_standard_type_ql_info_lineheight'] !== '') {
    $blog_standard_type_ql_info_style[] = 'line-height: '.$cabin_qode_options['blog_standard_type_ql_info_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_info_letterspacing']) && $cabin_qode_options['blog_standard_type_ql_info_letterspacing'] !== '') {
    $blog_standard_type_ql_info_style[] = 'letter-spacing: '.$cabin_qode_options['blog_standard_type_ql_info_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_standard_type_ql_info_fontweight']) && $cabin_qode_options['blog_standard_type_ql_info_fontweight'] !== '') {
    $blog_standard_type_ql_info_style[] = 'font-weight: '.$cabin_qode_options['blog_standard_type_ql_info_fontweight'];
}

if(isset($cabin_qode_options['blog_standard_type_ql_info_fontstyle']) && $cabin_qode_options['blog_standard_type_ql_info_fontstyle'] !== '') {
    $blog_standard_type_ql_info_style[] = 'font-style: '.$cabin_qode_options['blog_standard_type_ql_info_fontstyle'];
}

if(isset($cabin_qode_options['blog_standard_type_ql_info_texttransform']) && $cabin_qode_options['blog_standard_type_ql_info_texttransform'] !== '') {
    $blog_standard_type_ql_info_style[] = 'text-transform: '.$cabin_qode_options['blog_standard_type_ql_info_texttransform'];
}
if(is_array($blog_standard_type_ql_info_style) && count($blog_standard_type_ql_info_style)) { ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner .post_info,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner .post_info{
    <?php echo esc_attr(implode(';', $blog_standard_type_ql_info_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_info_color']) && !empty($cabin_qode_options['blog_standard_type_ql_info_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner .post_info,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner .post_info{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_info_color']);  ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['blog_standard_type_ql_info_link_color']) && !empty($cabin_qode_options['blog_standard_type_ql_info_link_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner .post_info a,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner .post_info a{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_info_link_color']);  ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['blog_standard_type_ql_info_hover_color']) && !empty($cabin_qode_options['blog_standard_type_ql_info_hover_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover .post_info,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner:hover .post_info,
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover .post_info div a,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner:hover .post_info div a{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_info_hover_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_mark_color']) && !empty($cabin_qode_options['blog_standard_type_ql_mark_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner .post_info_quote_mark .quote_mark,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner .post_info_link_mark .link_mark{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_mark_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_standard_type_ql_mark_hover_color']) && !empty($cabin_qode_options['blog_standard_type_ql_mark_hover_color'])){ ?>
    .blog_holder.blog_standard_type article.format-quote .post_text .post_text_inner:hover  .post_info_quote_mark .quote_mark,
    .blog_holder.blog_standard_type article.format-link .post_text .post_text_inner:hover .post_info_link_mark .link_mark{
    color: <?php echo esc_attr($cabin_qode_options['blog_standard_type_ql_mark_hover_color']);  ?>;
    }
<?php } ?>

<?php
/******** BLOG: MASONRY********/


/******** BLOG: MASONRY Share options ********/
if(isset($cabin_qode_options['blog_masonry_show_share']) && $cabin_qode_options['blog_masonry_show_share'] == 'yes') {

    if(isset($cabin_qode_options['blog_masonry_share_icon_color']) && $cabin_qode_options['blog_masonry_share_icon_color'] !== '') {?>
        .blog_holder.masonry article .blog_share .social_share_dropdown ul li a span.social_network_icon,
        .blog_holder.masonry_full_width article  .blog_share .social_share_dropdown ul li a span.social_network_icon,
        .blog_holder.masonry article.format-link .post_text.link_image .post_text_inner:hover .post_info .social_share_dropdown ul li a span.social_network_icon,
        .blog_holder.masonry article .social_share_list_holder ul li i,
        .blog_holder.masonry_full_width .social_share_list_holder ul li i
        {
        color:  <?php echo esc_attr($cabin_qode_options['blog_masonry_share_icon_color']); ?> ;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['blog_masonry_share_background_color']) && $cabin_qode_options['blog_masonry_share_background_color'] !== '') {?>
        .blog_holder.masonry article .post_text .post_text_inner .post_info .blog_share .social_share_dropdown ul li a,
        .blog_holder.masonry article  .blog_share .social_share_dropdown ul li a,
        .blog_holder.masonry_full_width article  .blog_share .social_share_dropdown ul li a{
        background-color:  <?php echo esc_attr($cabin_qode_options['blog_masonry_share_background_color']); ?> ;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['blog_masonry_share_icon_hover_color']) && $cabin_qode_options['blog_masonry_share_icon_hover_color'] !== '') {?>
        .blog_holder.masonry article .blog_share .social_share_dropdown ul li:hover a span.social_network_icon,
        .blog_holder.masonry_full_width article  .blog_share .social_share_dropdown ul li:hover a span.social_network_icon,
        .blog_holder.masonry .social_share_dropdown ul li:hover,
        .blog_holder.masonry .social_share_dropdown ul li:hover a span.social_network_icon,
        .blog_holder.masonry article .social_share_list_holder ul li i:hover,
        .blog_holder.masonry_full_width .social_share_list_holder ul li i:hover{
        color:  <?php echo esc_attr($cabin_qode_options['blog_masonry_share_icon_hover_color']); ?> !important;
        }
    <?php } ?>
<?php } ?>


<?php
/******** BLOG: MASONRY Alignment ********/
if(isset($cabin_qode_options['blog_masonry_post_alignment']) && $cabin_qode_options['blog_masonry_post_alignment'] !== '') {?>
    .blog_holder.masonry .post_text .post_text_inner,
    .blog_holder.masonry_full_width .post_text .post_text_inner,
    .blog_holder.masonry article.format-link .post_text .post_info,
    .blog_holder.masonry_full_width article.format-link .post_text .post_info,
    .blog_holder.masonry article.format-quote .post_text .post_info,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_info{
    text-align: <?php echo esc_attr($cabin_qode_options['blog_masonry_post_alignment']); ?>
    }
<?php } ?>

<?php
/******** BLOG: MASONRY Text Box ********/
if(isset($cabin_qode_options['blog_masonry_enable_text_box']) && $cabin_qode_options['blog_masonry_enable_text_box'] == 'yes') {
    $blog_box_style = array();
    ?>
    .blog_holder.masonry article .audio_image,
    .blog_holder.masonry article:not(.format-audio) .post_image,
    .blog_holder.masonry_full_width article .audio_image,
    .blog_holder.masonry_full_width article:not(.format-audio) .post_image{
    margin-bottom: 0;
    }
    <?php
    if(isset($cabin_qode_options['blog_masonry_box_background_color']) && $cabin_qode_options['blog_masonry_box_background_color'] !== '') {
        $blog_box_style[] = 'background-color: '.$cabin_qode_options['blog_masonry_box_background_color'];
    }

    if(isset($cabin_qode_options['blog_masonry_box_border_color']) && $cabin_qode_options['blog_masonry_box_border_color'] !== '') {
        $blog_box_style[] = 'border: 1px solid';
        $blog_box_style[] = 'border-color: '.$cabin_qode_options['blog_masonry_box_border_color'];
    }

    if(isset($cabin_qode_options['blog_masonry_box_padding']) && $cabin_qode_options['blog_masonry_box_padding'] !== '') {
        $blog_box_style[] = 'padding: '.$cabin_qode_options['blog_masonry_box_padding'];
    }

    if(is_array($blog_box_style) && count($blog_box_style)) { ?>
        .blog_holder.masonry article:not(.format-link):not(.format-quote) .post_text .post_text_inner,
        .blog_holder.masonry_full_width article:not(.format-link):not(.format-quote) .post_text .post_text_inner{
        <?php echo esc_attr(implode(';', $blog_box_style)); ?>
        }
    <?php }} ?>

<?php
if(isset($cabin_qode_options['blog_masonry_paragraph_color']) && $cabin_qode_options['blog_masonry_paragraph_color'] !== '') { ?>
    .blog_holder.masonry article .post_excerpt,
    .blog_holder.masonry_full_width article .post_excerpt{
    color : <?php echo esc_attr($cabin_qode_options['blog_masonry_paragraph_color']) ;?>
    }
<?php } ?>


<?php
/******** BLOG: MASONRY Quote/Link Text Box ********/
if(isset($cabin_qode_options['blog_masonry_ql_background_color']) &&($cabin_qode_options['blog_masonry_ql_background_color'])!==""){ ?>
    .blog_holder.masonry article.format-link .post_text .post_text_inner,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner,
    .blog_holder.masonry article.format-quote .post_text .post_text_inner,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner{
    background-color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_background_color']);  ?>;
    }
    <?php  $blog_masonry_ql_background_color = cabin_qode_hex2rgb($cabin_qode_options['blog_masonry_ql_background_color']); ?>

    .blog_holder.masonry article.format-link .post_text.link_image .post_text_inner,
    .blog_holder.masonry_full_width article.format-link .post_text.link_image .post_text_inner,
    .blog_holder.masonry article.format-quote .post_text.quote_image .post_text_inner,
    .blog_holder.masonry_full_width article.format-quote .post_text.quote_image .post_text_inner{
    <?php if (!empty($cabin_qode_options['blog_masonry_ql_background_color'])) { ?>  background-color: rgba(<?php echo esc_attr($blog_masonry_ql_background_color[0]); ?>,<?php echo esc_attr($blog_masonry_ql_background_color[1]); ?>,<?php echo esc_attr($blog_masonry_ql_background_color[2]); ?>,0.85); <?php } ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_hover_background_color']) && !empty($cabin_qode_options['blog_masonry_ql_hover_background_color'])){ ?>
    .blog_holder.masonry article.format-link .post_text .post_text_inner:hover,
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner:hover,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover{
    background-color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_hover_background_color']);  ?>;
    }
    <?php  $blog_masonry_ql_hover_background_color = cabin_qode_hex2rgb($cabin_qode_options['blog_masonry_ql_hover_background_color']); ?>

    .blog_holder.masonry article.format-link .post_text.link_image .post_text_inner:hover,
    .blog_holder.masonry article.format-quote .post_text.quote_image .post_text_inner:hover,
    .blog_holder.masonry_full_width article.format-link .post_text.link_image .post_text_inner:hover,
    .blog_holder.masonry_full_width article.format-quote .post_text.quote_image .post_text_inner:hover{
    <?php if (!empty($cabin_qode_options['blog_masonry_ql_hover_background_color'])) { ?>  background-color: rgba(<?php echo esc_attr($blog_masonry_ql_hover_background_color[0]); ?>,<?php echo esc_attr($blog_masonry_ql_hover_background_color[1]); ?>,<?php echo esc_attr($blog_masonry_ql_hover_background_color[2]); ?>,0.6); <?php } ?>
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_image_margin_bottom']) && $cabin_qode_options['blog_masonry_image_margin_bottom'] !== '') { ?>
    .blog_holder.masonry article:not(.format-audio) .post_image,
    .blog_holder.masonry_full_width article:not(.format-audio) .post_image,
    .blog_holder.masonry article .audio_image,
    .blog_holder.masonry_full_width article .audio_image{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_masonry_image_margin_bottom'].'px !important');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_title_margin_bottom']) && $cabin_qode_options['blog_masonry_title_margin_bottom'] !== '') { ?>
    .blog_holder.masonry article .post_text h4,
    .blog_holder.masonry_full_width article .post_text h4{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_masonry_title_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_post_info_margin_bottom']) && $cabin_qode_options['blog_masonry_post_info_margin_bottom'] !== '') { ?>
    .blog_holder.masonry article:not(.format-link):not(.format-quote) .post_info,
    .blog_holder.masonry_full_width article:not(.format-link):not(.format-quote) .post_info{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_masonry_post_info_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_read_more_margin_top']) && $cabin_qode_options['blog_masonry_read_more_margin_top'] !== '') { ?>
    .blog_holder.masonry article .post_text_inner a.read_more_button,
    .blog_holder.masonry_full_width article .post_text_inner a.read_more_button{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_masonry_read_more_margin_top'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_social_share_list_margin_top']) && $cabin_qode_options['blog_masonry_social_share_list_margin_top'] !== '') { ?>
    .blog_holder.masonry article:not(.format-link):not(.format-quote) .post_text_inner .social_share_list_holder,
    .blog_holder.masonry_full_width article:not(.format-link):not(.format-quote) .post_text_inner .social_share_list_holder{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_masonry_social_share_list_margin_top'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_article_margin_bottom']) && $cabin_qode_options['blog_masonry_article_margin_bottom'] !== '') { ?>
    .blog_holder.masonry article,
    .blog_holder.masonry_full_width article{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['blog_masonry_article_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_post_info_bottom_margin_top']) && $cabin_qode_options['blog_masonry_post_info_bottom_margin_top'] !== '') { ?>
    .blog_holder.masonry article:not(.format-link):not(.format-quote) .post_info.post_info_bottom,
    .blog_holder.masonry_full_width article:not(.format-link):not(.format-quote) .post_info.post_info_bottom{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_masonry_post_info_bottom_margin_top'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_ql_title_margin_bottom']) && $cabin_qode_options['blog_masonry_ql_title_margin_bottom'] !== '') { ?>
    .blog_holder.masonry article.format-quote .post_text_inner h3,
    .blog_holder.masonry article.format-link .post_text .post_text_inner h3,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner h3,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner h3{
    padding-bottom : <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_title_margin_bottom'].'px');?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_ql_quote_author_margin_bottom']) && $cabin_qode_options['blog_masonry_ql_quote_author_margin_bottom'] !== '') { ?>
    .blog_holder.masonry article.format-quote .post_text_inner .quote_author,
    .blog_holder.masonry_full_width article.format-quote .post_text_inner .quote_author{
    padding-bottom : <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_quote_author_margin_bottom'].'px');?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['blog_masonry_ql_social_share_list_margin_top']) && $cabin_qode_options['blog_masonry_ql_social_share_list_margin_top'] !== '') { ?>
    .blog_holder.masonry article.format-quote .post_text_inner .social_share_list_holder,
    .blog_holder.masonry article.format-link .post_text .post_text_inner .social_share_list_holder,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner .social_share_list_holder,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner .social_share_list_holder{
    margin-top : <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_social_share_list_margin_top'].'px');?>
    }
<?php } ?>

<?php
$blog_masonry_article_border_style = array();

if(isset($cabin_qode_options['blog_masonry_article_border_width']) && $cabin_qode_options['blog_masonry_article_border_width'] !== '') {
    $blog_masonry_article_border_style[] = 'border-width: '.$cabin_qode_options['blog_masonry_article_border_width'].'px';
} ?>

<?php if(isset($cabin_qode_options['blog_masonry_article_border_color']) && !empty($cabin_qode_options['blog_masonry_article_border_color'])){
    $blog_masonry_article_border_style[] = 'border-color: '.$cabin_qode_options['blog_masonry_article_border_color'];
}

if(is_array($blog_masonry_article_border_style) && count($blog_masonry_article_border_style)) { ?>
    .blog_holder.masonry article,
    .blog_holder.masonry_full_width article{
    <?php echo esc_attr(implode(';', $blog_masonry_article_border_style)); ?>
    }
<?php } ?>


<?php
/**************** BLOG MASONRY: Title Style ****************/
$blog_masonry_title_style = array();

if(isset($cabin_qode_options['blog_masonry_title_google_fonts']) && $cabin_qode_options['blog_masonry_title_google_fonts'] !== '-1') {
    $blog_masonry_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_title_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_title_fontsize']) && $cabin_qode_options['blog_masonry_title_fontsize'] !== '') {
    $blog_masonry_title_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_title_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_masonry_title_lineheight']) && $cabin_qode_options['blog_masonry_title_lineheight'] !== '') {
    $blog_masonry_title_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_title_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_masonry_title_letterspacing']) && $cabin_qode_options['blog_masonry_title_letterspacing'] !== '') {
    $blog_masonry_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_title_fontweight']) && $cabin_qode_options['blog_masonry_title_fontweight'] !== '') {
    $blog_masonry_title_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_title_fontweight'];
}

if(isset($cabin_qode_options['blog_masonry_title_fontstyle']) && $cabin_qode_options['blog_masonry_title_fontstyle'] !== '') {
    $blog_masonry_title_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_title_fontstyle'];
}

if(isset($cabin_qode_options['blog_masonry_title_texttransform']) && $cabin_qode_options['blog_masonry_title_texttransform'] !== '') {
    $blog_masonry_title_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_title_texttransform'];
}

if(is_array($blog_masonry_title_style) && count($blog_masonry_title_style)) { ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) h4,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) h4{
    <?php echo esc_attr(implode(';', $blog_masonry_title_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_title_color']) && !empty($cabin_qode_options['blog_masonry_title_color'])){ ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) h4 a,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) h4 a{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_title_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_title_hover_color']) && !empty($cabin_qode_options['blog_masonry_title_hover_color'])){ ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) h4 a:hover,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) h4 a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_title_hover_color']);  ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['blog_masonry_title_date_color']) && !empty($cabin_qode_options['blog_masonry_title_date_color'])){ ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) h4 .date,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) h4 .date{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_title_date_color']);  ?>;
    }
<?php } ?>
<?php
/**************** BLOG MASONRY: Qoute/Link Title Style ****************/
$blog_masonry_ql_title_style = array();

if(isset($cabin_qode_options['blog_masonry_ql_title_google_fonts']) && $cabin_qode_options['blog_masonry_ql_title_google_fonts'] !== '-1') {
    $blog_masonry_ql_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_ql_title_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_ql_title_fontsize']) && $cabin_qode_options['blog_masonry_ql_title_fontsize'] !== '') {
    $blog_masonry_ql_title_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_ql_title_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_title_lineheight']) && $cabin_qode_options['blog_masonry_ql_title_lineheight'] !== '') {
    $blog_masonry_ql_title_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_ql_title_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_title_letterspacing']) && $cabin_qode_options['blog_masonry_ql_title_letterspacing'] !== '') {
    $blog_masonry_ql_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_ql_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_title_fontweight']) && $cabin_qode_options['blog_masonry_ql_title_fontweight'] !== '') {
    $blog_masonry_ql_title_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_ql_title_fontweight'];
}

if(isset($cabin_qode_options['blog_masonry_ql_title_fontstyle']) && $cabin_qode_options['blog_masonry_ql_title_fontstyle'] !== '') {
    $blog_masonry_ql_title_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_ql_title_fontstyle'];
}

if(isset($cabin_qode_options['blog_masonry_ql_title_texttransform']) && $cabin_qode_options['blog_masonry_ql_title_texttransform'] !== '') {
    $blog_masonry_ql_title_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_ql_title_texttransform'];
}

if(is_array($blog_masonry_ql_title_style) && count($blog_masonry_ql_title_style)) { ?>
    .blog_holder.masonry article.format-quote .post_text .post_title h3,
    .blog_holder.masonry article.format-link .post_text .post_title h3,
    .blog_holder.masonry article.format-quote .post_text .quote_author,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_title h3,
    .blog_holder.masonry_full_width article.format-link .post_text .post_title h3,
    .blog_holder.masonry_full_width article.format-quote .post_text .quote_author{
    <?php echo esc_attr(implode(';', $blog_masonry_ql_title_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_title_color']) && !empty($cabin_qode_options['blog_masonry_ql_title_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_title h3 a,
    .blog_holder.masonry article.format-quote .post_text .post_title h3,
    .blog_holder.masonry article.format-link .post_text .post_title h3 a,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_title h3 a,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_title h3,
    .blog_holder.masonry_full_width article.format-link .post_text .post_title h3 a{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_title_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_title_hover_color']) && !empty($cabin_qode_options['blog_masonry_ql_title_hover_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover .post_title h3 a,
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover .post_title h3,
    .blog_holder.masonry article.format-link .post_text .post_text_inner:hover .post_title h3 a,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover .post_title h3 a,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover .post_title h3,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner:hover .post_title h3 a{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_title_hover_color']);  ?>;
    }
<?php } ?>
<?php
/**************** BLOG MASONRY: Qoute/Link Author Style ****************/
$blog_masonry_ql_author_style = array();

if(isset($cabin_qode_options['blog_masonry_ql_author_google_fonts']) && $cabin_qode_options['blog_masonry_ql_author_google_fonts'] !== '-1') {
    $blog_masonry_ql_author_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_ql_author_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_ql_author_fontsize']) && $cabin_qode_options['blog_masonry_ql_author_fontsize'] !== '') {
    $blog_masonry_ql_author_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_ql_author_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_author_lineheight']) && $cabin_qode_options['blog_masonry_ql_author_lineheight'] !== '') {
    $blog_masonry_ql_author_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_ql_author_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_author_letterspacing']) && $cabin_qode_options['blog_masonry_ql_author_letterspacing'] !== '') {
    $blog_masonry_ql_author_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_ql_author_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_author_fontweight']) && $cabin_qode_options['blog_masonry_ql_author_fontweight'] !== '') {
    $blog_masonry_ql_author_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_ql_author_fontweight'];
}

if(isset($cabin_qode_options['blog_masonry_ql_author_fontstyle']) && $cabin_qode_options['blog_masonry_ql_author_fontstyle'] !== '') {
    $blog_masonry_ql_author_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_ql_author_fontstyle'];
}

if(isset($cabin_qode_options['blog_masonry_ql_author_texttransform']) && $cabin_qode_options['blog_masonry_ql_author_texttransform'] !== '') {
    $blog_masonry_ql_author_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_ql_author_texttransform'];
}

if(is_array($blog_masonry_ql_author_style) && count($blog_masonry_ql_author_style)) { ?>
    .blog_holder.masonry article.format-quote .post_text .quote_author,
    .blog_holder.masonry_full_width article.format-quote .post_text .quote_author{
    <?php echo esc_attr(implode(';', $blog_masonry_ql_author_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_author_color']) && !empty($cabin_qode_options['blog_masonry_ql_author_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .quote_author,
    .blog_holder.masonry_full_width article.format-quote .post_text .quote_author{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_author_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_author_hover_color']) && !empty($cabin_qode_options['blog_masonry_ql_author_hover_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover .quote_author,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover .quote_author{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_author_hover_color']);  ?>;
    }
<?php } ?>

<?php
/**************** BLOG MASONRY: Info Style ****************/
$blog_masonry_info_style = array();

if(isset($cabin_qode_options['blog_masonry_info_google_fonts']) && $cabin_qode_options['blog_masonry_info_google_fonts'] !== '-1') {
    $blog_masonry_info_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_info_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_info_fontsize']) && $cabin_qode_options['blog_masonry_info_fontsize'] !== '') {
    $blog_masonry_info_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_info_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_masonry_info_lineheight']) && $cabin_qode_options['blog_masonry_info_lineheight'] !== '') {
    $blog_masonry_info_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_info_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_masonry_info_letterspacing']) && $cabin_qode_options['blog_masonry_info_letterspacing'] !== '') {
    $blog_masonry_info_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_info_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_info_fontweight']) && $cabin_qode_options['blog_masonry_info_fontweight'] !== '') {
    $blog_masonry_info_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_info_fontweight'];
}

if(isset($cabin_qode_options['blog_masonry_info_fontstyle']) && $cabin_qode_options['blog_masonry_info_fontstyle'] !== '') {
    $blog_masonry_info_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_info_fontstyle'];
}

if(isset($cabin_qode_options['blog_masonry_info_texttransform']) && $cabin_qode_options['blog_masonry_info_texttransform'] !== '') {
    $blog_masonry_info_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_info_texttransform'];
}

if(is_array($blog_masonry_info_style) && count($blog_masonry_info_style)) { ?>

    .blog_holder.masonry article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div{
    <?php echo esc_attr(implode(';', $blog_masonry_info_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_info_color']) && !empty($cabin_qode_options['blog_masonry_info_color'])){ ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_info_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_info_link_color']) && !empty($cabin_qode_options['blog_masonry_info_link_color'])){ ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div a,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div a
    {
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_info_link_color']);  ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['blog_masonry_info_hover_color']) && !empty($cabin_qode_options['blog_masonry_info_hover_color'])){ ?>
    .blog_holder.masonry article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div a:hover,
    .blog_holder.masonry_full_width article:not(.format-quote):not(.format-link) .post_text .post_text_inner .post_info div a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_info_hover_color']);  ?>;
    }

<?php } ?>


<?php
/****************  BLOG MASONRY: Quote/Link Post Info Style *********************/
$blog_masonry_ql_info_style = array();

if(isset($cabin_qode_options['blog_masonry_ql_info_google_fonts']) && $cabin_qode_options['blog_masonry_ql_info_google_fonts'] !== '-1') {
    $blog_masonry_ql_info_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_ql_info_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_ql_info_fontsize']) && $cabin_qode_options['blog_masonry_ql_info_fontsize'] !== '') {
    $blog_masonry_ql_info_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_ql_info_fontsize'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_info_lineheight']) && $cabin_qode_options['blog_masonry_ql_info_lineheight'] !== '') {
    $blog_masonry_ql_info_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_ql_info_lineheight'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_info_letterspacing']) && $cabin_qode_options['blog_masonry_ql_info_letterspacing'] !== '') {
    $blog_masonry_ql_info_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_ql_info_letterspacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_ql_info_fontweight']) && $cabin_qode_options['blog_masonry_ql_info_fontweight'] !== '') {
    $blog_masonry_ql_info_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_ql_info_fontweight'];
}

if(isset($cabin_qode_options['blog_masonry_ql_info_fontstyle']) && $cabin_qode_options['blog_masonry_ql_info_fontstyle'] !== '') {
    $blog_masonry_ql_info_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_ql_info_fontstyle'];
}

if(isset($cabin_qode_options['blog_masonry_ql_info_texttransform']) && $cabin_qode_options['blog_masonry_ql_info_texttransform'] !== '') {
    $blog_masonry_ql_info_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_ql_info_texttransform'];
}
if(is_array($blog_masonry_ql_info_style) && count($blog_masonry_ql_info_style)) { ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner .post_info ,
    .blog_holder.masonry article.format-link .post_text .post_text_inner .post_info ,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner .post_info ,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner .post_info {
    <?php echo esc_attr(implode(';', $blog_masonry_ql_info_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_info_color']) && !empty($cabin_qode_options['blog_masonry_ql_info_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner .post_info,
    .blog_holder.masonry article.format-link .post_text .post_text_inner .post_info,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner .post_info,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner .post_info{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_info_color']);  ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['blog_masonry_ql_info_link_color']) && !empty($cabin_qode_options['blog_masonry_ql_info_link_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner .post_info a,
    .blog_holder.masonry article.format-link .post_text .post_text_inner .post_info a,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner .post_info a,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner .post_info a{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_info_link_color']);  ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['blog_masonry_ql_info_hover_color']) && !empty($cabin_qode_options['blog_masonry_ql_info_hover_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover .post_info,
    .blog_holder.masonry article.format-link .post_text .post_text_inner:hover .post_info,
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover .post_info div a,
    .blog_holder.masonry article.format-link .post_text .post_text_inner:hover .post_info div a,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover .post_info,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner:hover .post_info,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover .post_info div a,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner:hover .post_info div a
    {
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_info_hover_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_ql_mark_color']) && !empty($cabin_qode_options['blog_masonry_ql_mark_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner .quote_mark,
    .blog_holder.masonry article.format-link .post_text .post_text_inner .link_mark,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner .quote_mark,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner .link_mark{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_mark_color']);  ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['blog_masonry_ql_mark_hover_color']) && !empty($cabin_qode_options['blog_masonry_ql_mark_hover_color'])){ ?>
    .blog_holder.masonry article.format-quote .post_text .post_text_inner:hover .quote_mark,
    .blog_holder.masonry article.format-link .post_text .post_text_inner:hover .link_mark,
    .blog_holder.masonry_full_width article.format-quote .post_text .post_text_inner:hover .quote_mark,
    .blog_holder.masonry_full_width article.format-link .post_text .post_text_inner:hover .link_mark{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_ql_mark_hover_color']);  ?>;
    }
<?php } ?>
<?php

$blog_masonry_author_style = array();

if(isset($cabin_qode_options['blog_masonry_author_font_family']) && $cabin_qode_options['blog_masonry_author_font_family'] !== '-1') {
    $blog_masonry_author_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_author_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_author_font_size']) && $cabin_qode_options['blog_masonry_author_font_size'] !== '') {
    $blog_masonry_author_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_author_font_size'].'px';
}

if(isset($cabin_qode_options['blog_masonry_author_line_height']) && $cabin_qode_options['blog_masonry_author_line_height'] !== '') {
    $blog_masonry_author_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_author_line_height'].'px';
}

if(isset($cabin_qode_options['blog_masonry_author_letter_spacing']) && $cabin_qode_options['blog_masonry_author_letter_spacing'] !== '') {
    $blog_masonry_author_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_author_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_author_font_weight']) && $cabin_qode_options['blog_masonry_author_font_weight'] !== '') {
    $blog_masonry_author_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_author_font_weight'];
}

if(isset($cabin_qode_options['blog_masonry_author_font_style']) && $cabin_qode_options['blog_masonry_author_font_style'] !== '') {
    $blog_masonry_author_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_author_font_style'];
}

if(isset($cabin_qode_options['blog_masonry_author_text_transform']) && $cabin_qode_options['blog_masonry_author_text_transform'] !== '') {
    $blog_masonry_author_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_author_text_transform'];
}

if(isset($cabin_qode_options['blog_masonry_author_color']) && $cabin_qode_options['blog_masonry_author_color'] !== '') {
    $blog_masonry_author_style[] = 'color: '.$cabin_qode_options['blog_masonry_author_color'];
}

if(is_array($blog_masonry_author_style) && count($blog_masonry_author_style)) { ?>
    .blog_holder.masonry .post_author,
    .blog_holder.masonry .post_author a,
    .blog_holder.masonry_full_width .post_author,
    .blog_holder.masonry_full_width .post_author a,
    .latest_post_holder .post_author, .latest_post_holder a.post_author_link{
    <?php echo esc_attr(implode(';', $blog_masonry_author_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_author_hover_color']) && !empty($cabin_qode_options['blog_masonry_author_hover_color'])){ ?>
    .blog_holder.masonry .post_author:hover,
    .blog_holder.masonry .post_author a:hover,
    .blog_holder.masonry_full_width .post_author:hover,
    .blog_holder.masonry_full_width .post_author a:hover,
    .latest_post_holder .post_author a.post_author_link:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_author_hover_color']);  ?>;
    }
<?php } ?>

<?php
$blog_single_title_style = array();

if(isset($cabin_qode_options['blog_single_title_font_family']) && $cabin_qode_options['blog_single_title_font_family'] !== '-1') {
    $blog_single_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_single_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_single_title_font_size']) && $cabin_qode_options['blog_single_title_font_size'] !== '') {
    $blog_single_title_style[] = 'font-size: '.$cabin_qode_options['blog_single_title_font_size'].'px';
}

if(isset($cabin_qode_options['blog_single_title_line_height']) && $cabin_qode_options['blog_single_title_line_height'] !== '') {
    $blog_single_title_style[] = 'line-height: '.$cabin_qode_options['blog_single_title_line_height'].'px';
}

if(isset($cabin_qode_options['blog_single_title_letter_spacing']) && $cabin_qode_options['blog_single_title_letter_spacing'] !== '') {
    $blog_single_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_single_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_single_title_font_weight']) && $cabin_qode_options['blog_single_title_font_weight'] !== '') {
    $blog_single_title_style[] = 'font-weight: '.$cabin_qode_options['blog_single_title_font_weight'];
}

if(isset($cabin_qode_options['blog_single_title_font_style']) && $cabin_qode_options['blog_single_title_font_style'] !== '') {
    $blog_single_title_style[] = 'font-style: '.$cabin_qode_options['blog_single_title_font_style'];
}

if(isset($cabin_qode_options['blog_single_title_text_transform']) && $cabin_qode_options['blog_single_title_text_transform'] !== '') {
    $blog_single_title_style[] = 'text-transform: '.$cabin_qode_options['blog_single_title_text_transform'];
}

if(isset($cabin_qode_options['blog_single_title_color']) && $cabin_qode_options['blog_single_title_color'] !== '') {
    $blog_single_title_style[] = 'color: '.$cabin_qode_options['blog_single_title_color'];
}

if(is_array($blog_single_title_style) && count($blog_single_title_style)) { ?>
    .blog_holder.blog_single article .post_content > h2{
    <?php echo esc_attr(implode(';', $blog_single_title_style)); ?>
    }
<?php } ?>

<?php
$blog_single_ql_title_style = array();

if(isset($cabin_qode_options['blog_single_ql_title_font_family']) && $cabin_qode_options['blog_single_ql_title_font_family'] !== '-1') {
    $blog_single_ql_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_single_ql_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_single_ql_title_font_size']) && $cabin_qode_options['blog_single_ql_title_font_size'] !== '') {
    $blog_single_ql_title_style[] = 'font-size: '.$cabin_qode_options['blog_single_ql_title_font_size'].'px';
}

if(isset($cabin_qode_options['blog_single_ql_title_line_height']) && $cabin_qode_options['blog_single_ql_title_line_height'] !== '') {
    $blog_single_ql_title_style[] = 'line-height: '.$cabin_qode_options['blog_single_ql_title_line_height'].'px';
}

if(isset($cabin_qode_options['blog_single_ql_title_letter_spacing']) && $cabin_qode_options['blog_single_ql_title_letter_spacing'] !== '') {
    $blog_single_ql_title_style[] = 'letter-spacing: '.$cabin_qode_options['blog_single_ql_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_single_ql_title_font_weight']) && $cabin_qode_options['blog_single_ql_title_font_weight'] !== '') {
    $blog_single_ql_title_style[] = 'font-weight: '.$cabin_qode_options['blog_single_ql_title_font_weight'];
}

if(isset($cabin_qode_options['blog_single_ql_title_font_style']) && $cabin_qode_options['blog_single_ql_title_font_style'] !== '') {
    $blog_single_ql_title_style[] = 'font-style: '.$cabin_qode_options['blog_single_ql_title_font_style'];
}

if(isset($cabin_qode_options['blog_single_ql_title_text_transform']) && $cabin_qode_options['blog_single_ql_title_text_transform'] !== '') {
    $blog_single_ql_title_style[] = 'text-transform: '.$cabin_qode_options['blog_single_ql_title_text_transform'];
}

if(isset($cabin_qode_options['blog_single_ql_title_color']) && $cabin_qode_options['blog_single_ql_title_color'] !== '') {
    $blog_single_ql_title_style[] = 'color: '.$cabin_qode_options['blog_single_ql_title_color'];
}

if(is_array($blog_single_ql_title_style) && count($blog_single_ql_title_style)) { ?>
    .blog_holder.blog_single article.format-quote .post_text .post_title h3,
    .blog_holder.blog_single article.format-link .post_text .post_title h3,
    .blog_holder.blog_single article.format-quote .post_text .quote_author{
    <?php echo esc_attr(implode(';', $blog_single_ql_title_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_single_ql_title_hover_color']) && !empty($cabin_qode_options['blog_single_ql_title_hover_color'])){ ?>
    .blog_holder.blog_single article.format-quote .post_text .post_text_inner:hover .post_title h3,
    .blog_holder.blog_single article.format-link .post_text .post_text_inner:hover .post_title h3,
    .blog_holder.blog_single article.format-quote .post_text .post_text_inner:hover .quote_author{
    color: <?php echo esc_attr($cabin_qode_options['blog_single_ql_title_hover_color']);  ?>;
    }
<?php } ?>

<?php
$blog_list_info_style = array();

if(isset($cabin_qode_options['blog_list_info_font_family']) && $cabin_qode_options['blog_list_info_font_family'] !== '-1') {
    $blog_list_info_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_list_info_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_list_info_font_size']) && $cabin_qode_options['blog_list_info_font_size'] !== '') {
    $blog_list_info_style[] = 'font-size: '.$cabin_qode_options['blog_list_info_font_size'].'px';
}

if(isset($cabin_qode_options['blog_list_info_line_height']) && $cabin_qode_options['blog_list_info_line_height'] !== '') {
    $blog_list_info_style[] = 'line-height: '.$cabin_qode_options['blog_list_info_line_height'].'px';
}

if(isset($cabin_qode_options['blog_list_info_letter_spacing']) && $cabin_qode_options['blog_list_info_letter_spacing'] !== '') {
    $blog_list_info_style[] = 'letter-spacing: '.$cabin_qode_options['blog_list_info_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_list_info_font_weight']) && $cabin_qode_options['blog_list_info_font_weight'] !== '') {
    $blog_list_info_style[] = 'font-weight: '.$cabin_qode_options['blog_list_info_font_weight'];
}

if(isset($cabin_qode_options['blog_list_info_font_style']) && $cabin_qode_options['blog_list_info_font_style'] !== '') {
    $blog_list_info_style[] = 'font-style: '.$cabin_qode_options['blog_list_info_font_style'];
}

if(isset($cabin_qode_options['blog_list_info_text_transform']) && $cabin_qode_options['blog_list_info_text_transform'] !== '') {
    $blog_list_info_style[] = 'text-transform: '.$cabin_qode_options['blog_list_info_text_transform'];
}

if(isset($cabin_qode_options['blog_list_info_color']) && $cabin_qode_options['blog_list_info_color'] !== '') {
    $blog_list_info_style[] = 'color: '.$cabin_qode_options['blog_list_info_color'];
}

if(is_array($blog_list_info_style) && count($blog_list_info_style)) { ?>
    .blog_holder article .post_info,
    .latest_post_holder .post_info_section span, .latest_post_holder .post_info_section a, .latest_post_holder .post_info_section:before{
    <?php echo esc_attr(implode(';', $blog_list_info_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_list_info_color']) && !empty($cabin_qode_options['blog_list_info_color'])){ ?>
    .blog_holder article .post_info a,
    .latest_post_holder .post_info_section span, .latest_post_holder .post_info_section a{
    color: <?php echo esc_attr($cabin_qode_options['blog_list_info_color']);  ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_list_info_hover_color']) && !empty($cabin_qode_options['blog_list_info_hover_color'])){ ?>
    .blog_holder article .post_info a:hover,
    .latest_post_holder .post_info_section a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_list_info_hover_color']);  ?>;
    }
<?php } ?>

<?php

$blog_masonry_author_style = array();

if(isset($cabin_qode_options['blog_masonry_author_font_family']) && $cabin_qode_options['blog_masonry_author_font_family'] !== '-1') {
    $blog_masonry_author_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_author_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_masonry_author_font_size']) && $cabin_qode_options['blog_masonry_author_font_size'] !== '') {
    $blog_masonry_author_style[] = 'font-size: '.$cabin_qode_options['blog_masonry_author_font_size'].'px';
}

if(isset($cabin_qode_options['blog_masonry_author_line_height']) && $cabin_qode_options['blog_masonry_author_line_height'] !== '') {
    $blog_masonry_author_style[] = 'line-height: '.$cabin_qode_options['blog_masonry_author_line_height'].'px';
}

if(isset($cabin_qode_options['blog_masonry_author_letter_spacing']) && $cabin_qode_options['blog_masonry_author_letter_spacing'] !== '') {
    $blog_masonry_author_style[] = 'letter-spacing: '.$cabin_qode_options['blog_masonry_author_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_masonry_author_font_weight']) && $cabin_qode_options['blog_masonry_author_font_weight'] !== '') {
    $blog_masonry_author_style[] = 'font-weight: '.$cabin_qode_options['blog_masonry_author_font_weight'];
}

if(isset($cabin_qode_options['blog_masonry_author_font_style']) && $cabin_qode_options['blog_masonry_author_font_style'] !== '') {
    $blog_masonry_author_style[] = 'font-style: '.$cabin_qode_options['blog_masonry_author_font_style'];
}

if(isset($cabin_qode_options['blog_masonry_author_text_transform']) && $cabin_qode_options['blog_masonry_author_text_transform'] !== '') {
    $blog_masonry_author_style[] = 'text-transform: '.$cabin_qode_options['blog_masonry_author_text_transform'];
}

if(isset($cabin_qode_options['blog_masonry_author_color']) && $cabin_qode_options['blog_masonry_author_color'] !== '') {
    $blog_masonry_author_style[] = 'color: '.$cabin_qode_options['blog_masonry_author_color'];
}

if(is_array($blog_masonry_author_style) && count($blog_masonry_author_style)) { ?>
    .blog_holder.masonry .post_author,
    .blog_holder.masonry .post_author a,
    .blog_holder.masonry_full_width .post_author,
    .blog_holder.masonry_full_width .post_author a,
    .latest_post_holder .post_author, .latest_post_holder a.post_author_link{
    <?php echo esc_attr(implode(';', $blog_masonry_author_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_masonry_author_hover_color']) && !empty($cabin_qode_options['blog_masonry_author_hover_color'])){ ?>
    .blog_holder.masonry .post_author:hover,
    .blog_holder.masonry .post_author a:hover,
    .blog_holder.masonry_full_width .post_author:hover,
    .blog_holder.masonry_full_width .post_author a:hover,
    .latest_post_holder .post_author a.post_author_link:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_masonry_author_hover_color']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['service_table_background_color'])) { ?>
    .service_table_inner,
    .service_table_holder.title_on_top .service_table_inner{
    <?php if (!empty($cabin_qode_options['service_table_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['service_table_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['service_table_separator_color']) || (isset($cabin_qode_options['service_table_separator_thickness']) && $cabin_qode_options['service_table_separator_thickness'] !== '')) { ?>
    .service_table_inner li,
    .service_table_holder.title_on_top .service_table_inner .service_table_content li{
    <?php if (!empty($cabin_qode_options['service_table_separator_color'])) { ?>  border-color: <?php echo esc_attr($cabin_qode_options['service_table_separator_color']);  ?>; <?php } ?>
    <?php if(isset($cabin_qode_options['service_table_separator_thickness']) && $cabin_qode_options['service_table_separator_thickness'] !== ''){?> border-width: <?php echo esc_attr($cabin_qode_options['service_table_separator_thickness']); ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['service_table_title_background_color']) || !empty($cabin_qode_options['service_table_title_separator_color']) || (isset($cabin_qode_options['service_table_title_separator_thickness']) && $cabin_qode_options['service_table_title_separator_thickness'] !== '')) { ?>
    .service_table_inner li.service_table_title_holder{
    <?php if (!empty($cabin_qode_options['service_table_title_separator_color'])) { ?>  border-color: <?php echo esc_attr($cabin_qode_options['service_table_title_separator_color']);  ?>; <?php } ?>
    <?php if (isset($cabin_qode_options['service_table_title_separator_thickness']) && $cabin_qode_options['service_table_title_separator_thickness'] !== ''){ ?> border-width: <?php echo esc_attr($cabin_qode_options['service_table_title_separator_thickness']); ?>px; <?php }?>
    <?php if (!empty($cabin_qode_options['service_table_title_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['service_table_title_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['service_table_title_separator_color']) ||  (isset($cabin_qode_options['service_table_title_separator_thickness']) && $cabin_qode_options['service_table_title_separator_thickness'] !== '')) { ?>
    .service_table_inner li.service_table_title_holder .title_separator{
    <?php if (!empty($cabin_qode_options['service_table_title_separator_color'])) { ?>  background-color: <?php echo esc_attr($cabin_qode_options['service_table_title_separator_color']);  ?>; <?php } ?>
    <?php if(isset($cabin_qode_options['service_table_title_separator_thickness']) && $cabin_qode_options['service_table_title_separator_thickness'] !== ''){?> height: <?php echo esc_attr($cabin_qode_options['service_table_title_separator_thickness']); ?>px; <?php }?>
    }

    .service_table_holder.title_on_top .service_table_inner li.service_table_title_holder .service_table_title_inner{
    <?php if (!empty($cabin_qode_options['service_table_title_separator_color'])) { ?>  border-bottom-color: <?php echo esc_attr($cabin_qode_options['service_table_title_separator_color']);  ?>; <?php } ?>
    <?php if(isset($cabin_qode_options['service_table_title_separator_thickness']) && $cabin_qode_options['service_table_title_separator_thickness'] !== ''){?> border-bottom-width: <?php echo esc_attr($cabin_qode_options['service_table_title_separator_thickness']); ?>px; <?php }?>
    }

<?php } ?>

<?php if ((isset($cabin_qode_options['service_table_title_padding_top']) && $cabin_qode_options['service_table_title_padding_top'] !== '')) { ?>
    .service_table_inner li.service_table_title_holder,
    .service_table_holder.title_on_top .service_table_inner li.service_table_title_holder .service_table_title_inner{
    <?php if(isset($cabin_qode_options['service_table_title_padding_top']) && $cabin_qode_options['service_table_title_padding_top'] !== ''){?> padding-top: <?php echo esc_attr($cabin_qode_options['service_table_title_padding_top']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['service_table_title_padding_bottom']) && $cabin_qode_options['service_table_title_padding_bottom'] !== '')) { ?>
    .service_table_inner li.service_table_title_holder,
    .service_table_holder.title_on_top .service_table_inner li.service_table_title_holder .service_table_title_inner{
    <?php if(isset($cabin_qode_options['service_table_title_padding_bottom']) && $cabin_qode_options['service_table_title_padding_bottom'] !== ''){?> padding-bottom: <?php echo esc_attr($cabin_qode_options['service_table_title_padding_bottom']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['service_table_content_padding_top']) && $cabin_qode_options['service_table_content_padding_top'] !== '')) { ?>
    .service_table_inner li li,
    .service_table_holder.title_on_top .service_table_inner .service_table_content li{
    <?php if(isset($cabin_qode_options['service_table_content_padding_top']) && $cabin_qode_options['service_table_content_padding_top'] !== ''){?> padding-top: <?php echo esc_attr($cabin_qode_options['service_table_content_padding_top']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['service_table_content_padding_bottom']) && $cabin_qode_options['service_table_content_padding_bottom'] !== '')) { ?>
    .service_table_inner li li,
    .service_table_holder.title_on_top .service_table_inner .service_table_content li{
    <?php if(isset($cabin_qode_options['service_table_content_padding_bottom']) && $cabin_qode_options['service_table_content_padding_bottom'] !== ''){?> padding-bottom: <?php echo esc_attr($cabin_qode_options['service_table_content_padding_bottom']); ?>px; <?php }?>
    }
<?php } ?>


<?php
$service_tables_active_text_styles = array();

if(isset($cabin_qode_options['service_tables_active_text_font_family']) && $cabin_qode_options['service_tables_active_text_font_family'] !== '-1') {
    $service_tables_active_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['service_tables_active_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['service_tables_active_text_font_size']) && $cabin_qode_options['service_tables_active_text_font_size'] !== '') {
    $service_tables_active_text_styles[] = 'font-size: '.$cabin_qode_options['service_tables_active_text_font_size'].'px';
}

if(isset($cabin_qode_options['service_tables_active_text_line_height']) && $cabin_qode_options['service_tables_active_text_line_height'] !== '') {
    $service_tables_active_text_styles[] = 'line-height: '.$cabin_qode_options['service_tables_active_text_line_height'].'px';
}

if(isset($cabin_qode_options['service_tables_active_text_letter_spacing']) && $cabin_qode_options['service_tables_active_text_letter_spacing'] !== '') {
    $service_tables_active_text_styles[] = 'letter-spacing: '.$cabin_qode_options['service_tables_active_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['service_tables_active_text_font_weight']) && $cabin_qode_options['service_tables_active_text_font_weight'] !== '') {
    $service_tables_active_text_styles[] = 'font-weight: '.$cabin_qode_options['service_tables_active_text_font_weight'];
}

if(isset($cabin_qode_options['service_tables_active_text_font_style']) && $cabin_qode_options['service_tables_active_text_font_style'] !== '') {
    $service_tables_active_text_styles[] = 'font-style: '.$cabin_qode_options['service_tables_active_text_font_style'];
}

if(isset($cabin_qode_options['service_tables_active_text_text_transform']) && $cabin_qode_options['service_tables_active_text_text_transform'] !== '') {
    $service_tables_active_text_styles[] = 'text-transform: '.$cabin_qode_options['service_tables_active_text_text_transform'];
}

if(isset($cabin_qode_options['service_tables_active_text_color']) && $cabin_qode_options['service_tables_active_text_color'] !== '') {
    $service_tables_active_text_styles[] = 'color: '.$cabin_qode_options['service_tables_active_text_color'];
}

if(is_array($service_tables_active_text_styles) && count($service_tables_active_text_styles)) { ?>
    .service_table_holder.active .active_text{
    <?php echo esc_attr(implode(';', $service_tables_active_text_styles)); ?>
    }
<?php } ?>




<?php
$service_tables_title_styles = array();

if(isset($cabin_qode_options['service_tables_title_font_family']) && $cabin_qode_options['service_tables_title_font_family'] !== '-1') {
    $service_tables_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['service_tables_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['service_tables_title_font_size']) && $cabin_qode_options['service_tables_title_font_size'] !== '') {
    $service_tables_title_styles[] = 'font-size: '.$cabin_qode_options['service_tables_title_font_size'].'px';
}

if(isset($cabin_qode_options['service_tables_title_line_height']) && $cabin_qode_options['service_tables_title_line_height'] !== '') {
    $service_tables_title_styles[] = 'line-height: '.$cabin_qode_options['service_tables_title_line_height'].'px';
}

if(isset($cabin_qode_options['service_tables_title_letter_spacing']) && $cabin_qode_options['service_tables_title_letter_spacing'] !== '') {
    $service_tables_title_styles[] = 'letter-spacing: '.$cabin_qode_options['service_tables_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['service_tables_title_font_weight']) && $cabin_qode_options['service_tables_title_font_weight'] !== '') {
    $service_tables_title_styles[] = 'font-weight: '.$cabin_qode_options['service_tables_title_font_weight'];
}

if(isset($cabin_qode_options['service_tables_title_font_style']) && $cabin_qode_options['service_tables_title_font_style'] !== '') {
    $service_tables_title_styles[] = 'font-style: '.$cabin_qode_options['service_tables_title_font_style'];
}

if(isset($cabin_qode_options['service_tables_title_text_transform']) && $cabin_qode_options['service_tables_title_text_transform'] !== '') {
    $service_tables_title_styles[] = 'text-transform: '.$cabin_qode_options['service_tables_title_text_transform'];
}

if(isset($cabin_qode_options['service_tables_title_color']) && $cabin_qode_options['service_tables_title_color'] !== '') {
    $service_tables_title_styles[] = 'color: '.$cabin_qode_options['service_tables_title_color'];
}

if(is_array($service_tables_title_styles) && count($service_tables_title_styles)) { ?>
    .service_table_title_holder .service_title{
    <?php echo esc_attr(implode(';', $service_tables_title_styles)); ?>
    }
<?php } ?>



<?php
$service_tables_content_styles = array();

if(isset($cabin_qode_options['service_tables_content_font_family']) && $cabin_qode_options['service_tables_content_font_family'] !== '-1') {
    $service_tables_content_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['service_tables_content_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['service_tables_content_font_size']) && $cabin_qode_options['service_tables_content_font_size'] !== '') {
    $service_tables_content_styles[] = 'font-size: '.$cabin_qode_options['service_tables_content_font_size'].'px';
}

if(isset($cabin_qode_options['service_tables_content_line_height']) && $cabin_qode_options['service_tables_content_line_height'] !== '') {
    $service_tables_content_styles[] = 'line-height: '.$cabin_qode_options['service_tables_content_line_height'].'px';
}

if(isset($cabin_qode_options['service_tables_content_letter_spacing']) && $cabin_qode_options['service_tables_content_letter_spacing'] !== '') {
    $service_tables_content_styles[] = 'letter-spacing: '.$cabin_qode_options['service_tables_content_letter_spacing'].'px';
}

if(isset($cabin_qode_options['service_tables_content_font_weight']) && $cabin_qode_options['service_tables_content_font_weight'] !== '') {
    $service_tables_content_styles[] = 'font-weight: '.$cabin_qode_options['service_tables_content_font_weight'];
}

if(isset($cabin_qode_options['service_tables_content_font_style']) && $cabin_qode_options['service_tables_content_font_style'] !== '') {
    $service_tables_content_styles[] = 'font-style: '.$cabin_qode_options['service_tables_content_font_style'];
}

if(isset($cabin_qode_options['service_tables_content_text_transform']) && $cabin_qode_options['service_tables_content_text_transform'] !== '') {
    $service_tables_content_styles[] = 'text-transform: '.$cabin_qode_options['service_tables_content_text_transform'];
}

if(isset($cabin_qode_options['service_tables_content_color']) && $cabin_qode_options['service_tables_content_color'] !== '') {
    $service_tables_content_styles[] = 'color: '.$cabin_qode_options['service_tables_content_color'];
}

if(is_array($service_tables_content_styles) && count($service_tables_content_styles)) { ?>
    .service_table_holder .service_table_content{
    <?php echo esc_attr(implode(';', $service_tables_content_styles)); ?>
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['pricing_table_background_color'])) { ?>
    .price_table_inner ul li.pricing_table_content{
    <?php if (!empty($cabin_qode_options['pricing_table_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['pricing_table_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['pricing_table_separator_color']) || (isset($cabin_qode_options['pricing_table_separator_thickness']) && $cabin_qode_options['pricing_table_separator_thickness'] !== '')) { ?>
    .price_table_inner ul li.pricing_table_content ul li,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.pricing_table_content ul li,
    .qode_pricing_tables .title_on_top .price_table_inner .price_button .title_on_top_button_wrapper{
    <?php if (!empty($cabin_qode_options['pricing_table_separator_color'])) { ?>  border-color: <?php echo esc_attr($cabin_qode_options['pricing_table_separator_color']);  ?>; <?php } ?>
    <?php if(isset($cabin_qode_options['pricing_table_separator_thickness']) && $cabin_qode_options['pricing_table_separator_thickness'] !== ''){?> border-width: <?php echo esc_attr($cabin_qode_options['pricing_table_separator_thickness']); ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['pricing_table_title_background_color']) || !empty($cabin_qode_options['pricing_table_title_separator_color']) || (isset($cabin_qode_options['pricing_table_title_separator_thickness']) && $cabin_qode_options['pricing_table_title_separator_thickness'] !== '')) { ?>
    .price_table_inner ul li.table_title{
    <?php if (!empty($cabin_qode_options['pricing_table_title_separator_color'])) { ?>  border-color: <?php echo esc_attr($cabin_qode_options['pricing_table_title_separator_color']);  ?>; <?php } ?>
    <?php if (isset($cabin_qode_options['pricing_table_title_separator_thickness']) && $cabin_qode_options['pricing_table_title_separator_thickness'] !== ''){ ?> border-width: <?php echo esc_attr($cabin_qode_options['pricing_table_title_separator_thickness']); ?>px; <?php }?>
    <?php if (!empty($cabin_qode_options['pricing_table_title_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['pricing_table_title_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['pricing_table_title_separator_color']) ||  (isset($cabin_qode_options['pricing_table_title_separator_thickness']) && $cabin_qode_options['pricing_table_title_separator_thickness'] !== '')) { ?>
    .price_table_inner ul li.table_title .title_separator{
    <?php if (!empty($cabin_qode_options['pricing_table_title_separator_color'])) { ?>  background-color: <?php echo esc_attr($cabin_qode_options['pricing_table_title_separator_color']);  ?>; <?php } ?>
    <?php if(isset($cabin_qode_options['pricing_table_title_separator_thickness']) && $cabin_qode_options['pricing_table_title_separator_thickness'] !== ''){?> height: <?php echo esc_attr($cabin_qode_options['pricing_table_title_separator_thickness']); ?>px; <?php }?>
    }
    .qode_pricing_tables .title_on_top .price_table_inner ul li.table_title span{
    <?php if (!empty($cabin_qode_options['pricing_table_title_separator_color'])) { ?>  border-bottom-color: <?php echo esc_attr($cabin_qode_options['pricing_table_title_separator_color']);  ?>; <?php } ?>
    <?php if(isset($cabin_qode_options['pricing_table_title_separator_thickness']) && $cabin_qode_options['pricing_table_title_separator_thickness'] !== ''){?> border-bottom-width: <?php echo esc_attr($cabin_qode_options['pricing_table_title_separator_thickness']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['pricing_table_title_top_padding']) && $cabin_qode_options['pricing_table_title_top_padding'] !== '')) { ?>
    .price_table_inner ul li.table_title,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.table_title span,
    .qode_pricing_tables .title_on_top.title_top_padding_and_border .price_table_inner ul li.table_title span{
    <?php if(isset($cabin_qode_options['pricing_table_title_top_padding']) && $cabin_qode_options['pricing_table_title_top_padding'] !== ''){?> padding-top: <?php echo esc_attr($cabin_qode_options['pricing_table_title_top_padding']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['pricing_table_title_bottom_padding']) && $cabin_qode_options['pricing_table_title_bottom_padding'] !== '')) { ?>
    .price_table_inner ul li.table_title,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.table_title span,
    .qode_pricing_tables .title_on_top.title_top_padding_and_border .price_table_inner ul li.table_title span{
    <?php if(isset($cabin_qode_options['pricing_table_title_bottom_padding']) && $cabin_qode_options['pricing_table_title_bottom_padding'] !== ''){?> padding-bottom: <?php echo esc_attr($cabin_qode_options['pricing_table_title_bottom_padding']); ?>px; <?php }?>
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['pricing_table_price_background_color']) || !empty($cabin_qode_options['pricing_table_price_separator_color']) || (isset($cabin_qode_options['pricing_table_price_separator_thickness']) && $cabin_qode_options['pricing_table_price_separator_thickness'] !== '')) { ?>
    .price_table_inner ul li.prices{
    <?php if (!empty($cabin_qode_options['pricing_table_price_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['pricing_table_price_background_color']);  ?>; <?php } ?>
    <?php if(!empty($cabin_qode_options['pricing_table_price_separator_color'])){?> border-color: <?php echo esc_attr($cabin_qode_options['pricing_table_price_separator_color']);  ?>;<?php }?>
    <?php if(isset($cabin_qode_options['pricing_table_price_separator_thickness']) && $cabin_qode_options['pricing_table_price_separator_thickness'] !== ''){?>  border-width: <?php echo esc_attr($cabin_qode_options['pricing_table_price_separator_thickness']); ?>px; <?php }?>
    }

    .qode_pricing_tables .title_on_top .price_table_inner ul li.prices .price_in_table{
    <?php if(!empty($cabin_qode_options['pricing_table_price_separator_color'])){?> border-color: <?php echo esc_attr($cabin_qode_options['pricing_table_price_separator_color']);  ?>;<?php }?>
    <?php if(isset($cabin_qode_options['pricing_table_price_separator_thickness']) && $cabin_qode_options['pricing_table_price_separator_thickness'] !== ''){?>  border-width: <?php echo esc_attr($cabin_qode_options['pricing_table_price_separator_thickness']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['pricing_table_price_top_padding']) && $cabin_qode_options['pricing_table_price_top_padding'] !== '')) { ?>
    .price_table_inner ul li.prices,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.prices .price_in_table{
    <?php if(isset($cabin_qode_options['pricing_table_price_top_padding']) && $cabin_qode_options['pricing_table_price_top_padding'] !== ''){?> padding-top: <?php echo esc_attr($cabin_qode_options['pricing_table_price_top_padding']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['pricing_table_price_bottom_padding']) && $cabin_qode_options['pricing_table_price_bottom_padding'] !== '')) { ?>
    .price_table_inner ul li.prices,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.prices .price_in_table{
    <?php if(isset($cabin_qode_options['pricing_table_price_bottom_padding']) && $cabin_qode_options['pricing_table_price_bottom_padding'] !== ''){?> padding-bottom: <?php echo esc_attr($cabin_qode_options['pricing_table_price_bottom_padding']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['pricing_table_content_top_padding']) && $cabin_qode_options['pricing_table_content_top_padding'] !== '')) { ?>
    .price_table_inner ul li,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.pricing_table_content ul li{
    <?php if(isset($cabin_qode_options['pricing_table_content_top_padding']) && $cabin_qode_options['pricing_table_content_top_padding'] !== ''){?> padding-top: <?php echo esc_attr($cabin_qode_options['pricing_table_content_top_padding']); ?>px; <?php }?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['pricing_table_content_bottom_padding']) && $cabin_qode_options['pricing_table_content_bottom_padding'] !== '')) { ?>
    .price_table_inner ul li,
    .qode_pricing_tables .title_on_top .price_table_inner ul li.pricing_table_content ul li{
    <?php if(isset($cabin_qode_options['pricing_table_content_bottom_padding']) && $cabin_qode_options['pricing_table_content_bottom_padding'] !== ''){?> padding-bottom: <?php echo esc_attr($cabin_qode_options['pricing_table_content_bottom_padding']); ?>px; <?php }?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['pricing_table_button_top_padding']) && $cabin_qode_options['pricing_table_button_top_padding'] !== '') { ?>
    .qode_pricing_tables .title_on_top .price_table_inner .price_button .title_on_top_button_wrapper,
    .price_table_inner .price_button{
    padding-top: <?php echo esc_attr($cabin_qode_options['pricing_table_button_top_padding'].'px'); ?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['pricing_table_button_bottom_padding']) && $cabin_qode_options['pricing_table_button_bottom_padding'] !== '') { ?>
    .qode_pricing_tables .title_on_top .price_table_inner .price_button .title_on_top_button_wrapper,
    .price_table_inner .price_button{
    padding-bottom: <?php echo esc_attr($cabin_qode_options['pricing_table_button_bottom_padding'].'px'); ?>;
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['pricing_table_button_holder_background_color']) ) { ?>
    .price_table_inner .price_button{
    <?php if (!empty($cabin_qode_options['pricing_table_button_holder_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['pricing_table_button_holder_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php
$pricing_tables_active_text_styles = array();

if(isset($cabin_qode_options['pricing_tables_active_text_font_family']) && $cabin_qode_options['pricing_tables_active_text_font_family'] !== '-1') {
    $pricing_tables_active_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_active_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_active_text_font_size']) && $cabin_qode_options['pricing_tables_active_text_font_size'] !== '') {
    $pricing_tables_active_text_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_active_text_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_active_text_line_height']) && $cabin_qode_options['pricing_tables_active_text_line_height'] !== '') {
    $pricing_tables_active_text_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_active_text_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_active_text_letter_spacing']) && $cabin_qode_options['pricing_tables_active_text_letter_spacing'] !== '') {
    $pricing_tables_active_text_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_active_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_active_text_font_weight']) && $cabin_qode_options['pricing_tables_active_text_font_weight'] !== '') {
    $pricing_tables_active_text_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_active_text_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_active_text_font_style']) && $cabin_qode_options['pricing_tables_active_text_font_style'] !== '') {
    $pricing_tables_active_text_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_active_text_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_active_text_text_transform']) && $cabin_qode_options['pricing_tables_active_text_text_transform'] !== '') {
    $pricing_tables_active_text_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_active_text_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_active_text_color']) && $cabin_qode_options['pricing_tables_active_text_color'] !== '') {
    $pricing_tables_active_text_styles[] = 'color: '.$cabin_qode_options['pricing_tables_active_text_color'];
}

if(is_array($pricing_tables_active_text_styles) && count($pricing_tables_active_text_styles)) { ?>
    .q_price_table.active .active_text span span{
    <?php echo esc_attr(implode(';', $pricing_tables_active_text_styles)); ?>
    }
<?php } ?>

<?php
$pricing_tables_title_styles = array();

if(isset($cabin_qode_options['pricing_tables_title_font_family']) && $cabin_qode_options['pricing_tables_title_font_family'] !== '-1') {
    $pricing_tables_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_title_font_size']) && $cabin_qode_options['pricing_tables_title_font_size'] !== '') {
    $pricing_tables_title_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_title_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_title_line_height']) && $cabin_qode_options['pricing_tables_title_line_height'] !== '') {
    $pricing_tables_title_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_title_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_title_letter_spacing']) && $cabin_qode_options['pricing_tables_title_letter_spacing'] !== '') {
    $pricing_tables_title_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_title_font_weight']) && $cabin_qode_options['pricing_tables_title_font_weight'] !== '') {
    $pricing_tables_title_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_title_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_title_font_style']) && $cabin_qode_options['pricing_tables_title_font_style'] !== '') {
    $pricing_tables_title_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_title_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_title_text_transform']) && $cabin_qode_options['pricing_tables_title_text_transform'] !== '') {
    $pricing_tables_title_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_title_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_title_color']) && $cabin_qode_options['pricing_tables_title_color'] !== '') {
    $pricing_tables_title_styles[] = 'color: '.$cabin_qode_options['pricing_tables_title_color'];
}

if(is_array($pricing_tables_title_styles) && count($pricing_tables_title_styles)) { ?>
    .price_table_inner ul li.table_title .title_content{
    <?php echo esc_attr(implode(';', $pricing_tables_title_styles)); ?>
    }
<?php } ?>

<?php
$pricing_tables_period_styles = array();

if(isset($cabin_qode_options['pricing_tables_period_font_family']) && $cabin_qode_options['pricing_tables_period_font_family'] !== '-1') {
    $pricing_tables_period_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_period_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_period_font_size']) && $cabin_qode_options['pricing_tables_period_font_size'] !== '') {
    $pricing_tables_period_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_period_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_period_line_height']) && $cabin_qode_options['pricing_tables_period_line_height'] !== '') {
    $pricing_tables_period_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_period_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_period_letter_spacing']) && $cabin_qode_options['pricing_tables_period_letter_spacing'] !== '') {
    $pricing_tables_period_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_period_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_period_font_weight']) && $cabin_qode_options['pricing_tables_period_font_weight'] !== '') {
    $pricing_tables_period_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_period_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_period_font_style']) && $cabin_qode_options['pricing_tables_period_font_style'] !== '') {
    $pricing_tables_period_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_period_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_period_text_transform']) && $cabin_qode_options['pricing_tables_period_text_transform'] !== '') {
    $pricing_tables_period_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_period_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_period_color']) && $cabin_qode_options['pricing_tables_period_color'] !== '') {
    $pricing_tables_period_styles[] = 'color: '.$cabin_qode_options['pricing_tables_period_color'];
}

if(is_array($pricing_tables_period_styles) && count($pricing_tables_period_styles)) { ?>
    .price_in_table .mark{
    <?php echo esc_attr(implode(';', $pricing_tables_period_styles)); ?>
    }
<?php } ?>

<?php
$pricing_tables_price_styles = array();

if(isset($cabin_qode_options['pricing_tables_price_font_family']) && $cabin_qode_options['pricing_tables_price_font_family'] !== '-1') {
    $pricing_tables_price_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_price_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_price_font_size']) && $cabin_qode_options['pricing_tables_price_font_size'] !== '') {
    $pricing_tables_price_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_price_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_price_line_height']) && $cabin_qode_options['pricing_tables_price_line_height'] !== '') {
    $pricing_tables_price_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_price_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_price_letter_spacing']) && $cabin_qode_options['pricing_tables_price_letter_spacing'] !== '') {
    $pricing_tables_price_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_price_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_price_font_weight']) && $cabin_qode_options['pricing_tables_price_font_weight'] !== '') {
    $pricing_tables_price_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_price_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_price_font_style']) && $cabin_qode_options['pricing_tables_price_font_style'] !== '') {
    $pricing_tables_price_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_price_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_price_text_transform']) && $cabin_qode_options['pricing_tables_price_text_transform'] !== '') {
    $pricing_tables_price_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_price_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_price_color']) && $cabin_qode_options['pricing_tables_price_color'] !== '') {
    $pricing_tables_price_styles[] = 'color: '.$cabin_qode_options['pricing_tables_price_color'];
}

if(is_array($pricing_tables_price_styles) && count($pricing_tables_price_styles)) { ?>
    .price_in_table .price{
    <?php echo esc_attr(implode(';', $pricing_tables_price_styles)); ?>
    }
<?php } ?>

<?php
$pricing_tables_currency_styles = array();

if(isset($cabin_qode_options['pricing_tables_currency_font_family']) && $cabin_qode_options['pricing_tables_currency_font_family'] !== '-1') {
    $pricing_tables_currency_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_currency_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_currency_font_size']) && $cabin_qode_options['pricing_tables_currency_font_size'] !== '') {
    $pricing_tables_currency_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_currency_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_currency_line_height']) && $cabin_qode_options['pricing_tables_currency_line_height'] !== '') {
    $pricing_tables_currency_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_currency_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_currency_letter_spacing']) && $cabin_qode_options['pricing_tables_currency_letter_spacing'] !== '') {
    $pricing_tables_currency_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_currency_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_currency_font_weight']) && $cabin_qode_options['pricing_tables_currency_font_weight'] !== '') {
    $pricing_tables_currency_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_currency_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_currency_font_style']) && $cabin_qode_options['pricing_tables_currency_font_style'] !== '') {
    $pricing_tables_currency_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_currency_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_currency_text_transform']) && $cabin_qode_options['pricing_tables_currency_text_transform'] !== '') {
    $pricing_tables_currency_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_currency_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_currency_color']) && $cabin_qode_options['pricing_tables_currency_color'] !== '') {
    $pricing_tables_currency_styles[] = 'color: '.$cabin_qode_options['pricing_tables_currency_color'];
}

if(is_array($pricing_tables_currency_styles) && count($pricing_tables_currency_styles)) { ?>
    .price_in_table .value{
    <?php echo esc_attr(implode(';', $pricing_tables_currency_styles)); ?>
    }
<?php } ?>

<?php
$pricing_tables_button_styles = array();

if(isset($cabin_qode_options['pricing_tables_button_font_family']) && $cabin_qode_options['pricing_tables_button_font_family'] !== '-1') {
    $pricing_tables_button_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_button_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_button_font_size']) && $cabin_qode_options['pricing_tables_button_font_size'] !== '') {
    $pricing_tables_button_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_button_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_button_line_height']) && $cabin_qode_options['pricing_tables_button_line_height'] !== '') {
    $pricing_tables_button_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_button_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_button_letter_spacing']) && $cabin_qode_options['pricing_tables_button_letter_spacing'] !== '') {
    $pricing_tables_button_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_button_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_button_font_weight']) && $cabin_qode_options['pricing_tables_button_font_weight'] !== '') {
    $pricing_tables_button_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_button_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_button_font_style']) && $cabin_qode_options['pricing_tables_button_font_style'] !== '') {
    $pricing_tables_button_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_button_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_button_text_transform']) && $cabin_qode_options['pricing_tables_button_text_transform'] !== '') {
    $pricing_tables_button_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_button_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_button_color']) && $cabin_qode_options['pricing_tables_button_color'] !== '') {
    $pricing_tables_button_styles[] = 'color: '.$cabin_qode_options['pricing_tables_button_color'];
}
if(isset($cabin_qode_options['pricing_tables_button_backgroundcolor']) && $cabin_qode_options['pricing_tables_button_backgroundcolor'] !== '') {
    $pricing_tables_button_styles[] = 'background-color: '.$cabin_qode_options['pricing_tables_button_backgroundcolor'];
}
if(isset($cabin_qode_options['pricing_tables_button_border_color']) && $cabin_qode_options['pricing_tables_button_border_color'] !== '') {
    $pricing_tables_button_styles[] = 'border-color: '.$cabin_qode_options['pricing_tables_button_border_color'];
    $pricing_tables_button_styles[] = 'border-style: solid';
    if(!isset($cabin_qode_options['pricing_tables_button_border_width']) || $cabin_qode_options['pricing_tables_button_border_width'] == ''){
        $pricing_tables_button_styles[] = 'border-width: 1px';
    }
}

if(isset($cabin_qode_options['pricing_tables_button_border_width']) && $cabin_qode_options['pricing_tables_button_border_width'] !== '') {
    $pricing_tables_button_styles[] = 'border-width: '.$cabin_qode_options['pricing_tables_button_border_width'].'px';
}

if(isset($cabin_qode_options['pricing_tables_button_border_radius']) && $cabin_qode_options['pricing_tables_button_border_radius'] !== '') {
    $pricing_tables_button_styles[] = 'border-radius: '.$cabin_qode_options['pricing_tables_button_border_radius'].'px';
}

if(is_array($pricing_tables_button_styles) && count($pricing_tables_button_styles)) { ?>
    .price_table_inner .price_button a{
    <?php echo esc_attr(implode(';', $pricing_tables_button_styles)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['pricing_table_button_left_padding']) && $cabin_qode_options['pricing_table_button_left_padding'] !== '') { ?>
    .price_table_inner .price_button a{
    padding-left: <?php echo esc_attr($cabin_qode_options['pricing_table_button_left_padding'].'px'); ?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['pricing_table_button_right_padding']) && $cabin_qode_options['pricing_table_button_right_padding'] !== '') { ?>
    .price_table_inner .price_button a{
    padding-right: <?php echo esc_attr($cabin_qode_options['pricing_table_button_right_padding'].'px'); ?>;
    }
<?php } ?>

<?php
$pricing_tables_button_hover_styles = array();


if(isset($cabin_qode_options['pricing_tables_button_hovercolor']) && $cabin_qode_options['pricing_tables_button_hovercolor'] !== '') {
    $pricing_tables_button_hover_styles[] = 'color: '.$cabin_qode_options['pricing_tables_button_hovercolor'];
}

if(isset($cabin_qode_options['pricing_tables_button_backgroundcolor_hover']) && $cabin_qode_options['pricing_tables_button_backgroundcolor_hover'] !== '') {
    $pricing_tables_button_hover_styles[] = 'background-color: '.$cabin_qode_options['pricing_tables_button_backgroundcolor_hover'];
}

if(isset($cabin_qode_options['pricing_tables_button_border_hover_color']) && $cabin_qode_options['pricing_tables_button_border_hover_color'] !== '') {
    $pricing_tables_button_hover_styles[] = 'border-color: '.$cabin_qode_options['pricing_tables_button_border_hover_color'];
}

if(is_array($pricing_tables_button_hover_styles) && count($pricing_tables_button_hover_styles)) { ?>
    .price_table_inner .price_button a:hover{
    <?php echo esc_attr(implode(';', $pricing_tables_button_hover_styles)); ?>
    }
<?php } ?>

<?php
$pricing_tables_content_styles = array();

if(isset($cabin_qode_options['pricing_tables_content_font_family']) && $cabin_qode_options['pricing_tables_content_font_family'] !== '-1') {
    $pricing_tables_content_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_tables_content_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_tables_content_font_size']) && $cabin_qode_options['pricing_tables_content_font_size'] !== '') {
    $pricing_tables_content_styles[] = 'font-size: '.$cabin_qode_options['pricing_tables_content_font_size'].'px';
}

if(isset($cabin_qode_options['pricing_tables_content_line_height']) && $cabin_qode_options['pricing_tables_content_line_height'] !== '') {
    $pricing_tables_content_styles[] = 'line-height: '.$cabin_qode_options['pricing_tables_content_line_height'].'px';
}

if(isset($cabin_qode_options['pricing_tables_content_letter_spacing']) && $cabin_qode_options['pricing_tables_content_letter_spacing'] !== '') {
    $pricing_tables_content_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_tables_content_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_tables_content_font_weight']) && $cabin_qode_options['pricing_tables_content_font_weight'] !== '') {
    $pricing_tables_content_styles[] = 'font-weight: '.$cabin_qode_options['pricing_tables_content_font_weight'];
}

if(isset($cabin_qode_options['pricing_tables_content_font_style']) && $cabin_qode_options['pricing_tables_content_font_style'] !== '') {
    $pricing_tables_content_styles[] = 'font-style: '.$cabin_qode_options['pricing_tables_content_font_style'];
}

if(isset($cabin_qode_options['pricing_tables_content_text_transform']) && $cabin_qode_options['pricing_tables_content_text_transform'] !== '') {
    $pricing_tables_content_styles[] = 'text-transform: '.$cabin_qode_options['pricing_tables_content_text_transform'];
}

if(isset($cabin_qode_options['pricing_tables_content_color']) && $cabin_qode_options['pricing_tables_content_color'] !== '') {
    $pricing_tables_content_styles[] = 'color: '.$cabin_qode_options['pricing_tables_content_color'];
}

if(is_array($pricing_tables_content_styles) && count($pricing_tables_content_styles)) { ?>
    .price_table_inner ul li.pricing_table_content{
    <?php echo esc_attr(implode(';', $pricing_tables_content_styles)); ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['separator_thickness']) || !empty($cabin_qode_options['separator_topmargin']) || !empty($cabin_qode_options['separator_bottommargin']) || !empty($cabin_qode_options['separator_color']) || !empty($cabin_qode_options['separator_type'])) { ?>
    .separator.normal, .separator.with_icon{
    <?php if (!empty($cabin_qode_options['separator_thickness'])) { ?>    border-bottom-width: <?php echo esc_attr($cabin_qode_options['separator_thickness']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_topmargin'])) { ?>    margin-top: <?php echo esc_attr($cabin_qode_options['separator_topmargin']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_bottommargin'])) { ?> margin-bottom: <?php echo esc_attr($cabin_qode_options['separator_bottommargin']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_color'])) { ?>    border-color: <?php echo esc_attr($cabin_qode_options['separator_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_type'])) { ?> border-style: <?php echo esc_attr($cabin_qode_options['separator_type']);  ?>; <?php } ?>
    }

<?php } ?>
<?php if (!empty($cabin_qode_options['separator_small_thickness']) || !empty($cabin_qode_options['separator_small_topmargin']) || !empty($cabin_qode_options['separator_small_bottommargin']) || !empty($cabin_qode_options['separator_small_color'])  || !empty($cabin_qode_options['separator_small_width'])  || !empty($cabin_qode_options['separator_small_type'])) { ?>
    .separator.small,
    .wpb_column>.wpb_wrapper .separator.small
    {
    <?php if (!empty($cabin_qode_options['separator_small_thickness'])) { ?>  border-bottom-width: <?php echo esc_attr($cabin_qode_options['separator_small_thickness']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_small_topmargin'])) { ?>  margin-top: <?php echo esc_attr($cabin_qode_options['separator_small_topmargin']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_small_bottommargin'])) { ?>   margin-bottom: <?php echo esc_attr($cabin_qode_options['separator_small_bottommargin']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_small_color'])) { ?>  border-color: <?php echo esc_attr($cabin_qode_options['separator_small_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_small_width'])) { ?>  width: <?php echo esc_attr($cabin_qode_options['separator_small_width']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['separator_small_type'])) { ?>   border-style: <?php echo esc_attr($cabin_qode_options['separator_small_type']);  ?>; <?php } ?>
    }
<?php } ?>

<?php
$separators_with_text_text_styles = array();

if(isset($cabin_qode_options['separators_with_text_text_google_fonts']) && $cabin_qode_options['separators_with_text_text_google_fonts'] !== '-1') {
    $separators_with_text_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['separators_with_text_text_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['separators_with_text_text_fontsize']) && $cabin_qode_options['separators_with_text_text_fontsize'] !== '') {
    $separators_with_text_text_styles[] = 'font-size: '.$cabin_qode_options['separators_with_text_text_fontsize'].'px';
}

if(isset($cabin_qode_options['separators_with_text_text_lineheight']) && $cabin_qode_options['separators_with_text_text_lineheight'] !== '') {
    $separators_with_text_text_styles[] = 'line-height: '.$cabin_qode_options['separators_with_text_text_lineheight'].'px';
}

if(isset($cabin_qode_options['separators_with_text_text_letterspacing']) && $cabin_qode_options['separators_with_text_text_letterspacing'] !== '') {
    $separators_with_text_text_styles[] = 'letter-spacing: '.$cabin_qode_options['separators_with_text_text_letterspacing'].'px';
}

if(isset($cabin_qode_options['separators_with_text_text_fontweight']) && $cabin_qode_options['separators_with_text_text_fontweight'] !== '') {
    $separators_with_text_text_styles[] = 'font-weight: '.$cabin_qode_options['separators_with_text_text_fontweight'];
}

if(isset($cabin_qode_options['separators_with_text_text_fontstyle']) && $cabin_qode_options['separators_with_text_text_fontstyle'] !== '') {
    $separators_with_text_text_styles[] = 'font-style: '.$cabin_qode_options['separators_with_text_text_fontstyle'];
}

if(isset($cabin_qode_options['separators_with_text_text_texttransform']) && $cabin_qode_options['separators_with_text_text_texttransform'] !== '') {
    $separators_with_text_text_styles[] = 'text-transform: '.$cabin_qode_options['separators_with_text_text_texttransform'];
}

if(isset($cabin_qode_options['separators_with_text_text_color']) && $cabin_qode_options['separators_with_text_text_color'] !== '') {
    $separators_with_text_text_styles[] = 'color: '.$cabin_qode_options['separators_with_text_text_color'];
}

if(is_array($separators_with_text_text_styles) && count($separators_with_text_text_styles)) { ?>
    *:not(.title_like_separator):not(.span_subtitle_separator) > .vc_text_separator.full .separator_content
    {
    <?php echo esc_attr(implode(';', $separators_with_text_text_styles)); ?>
    }
<?php } ?>
<?php
if(isset($cabin_qode_options['separators_with_text_text_hover_color']) && $cabin_qode_options['separators_with_text_text_hover_color'] !== '') { ?>
    *:not(.title_like_separator):not(.span_subtitle_separator) > .vc_text_separator.full .separator_content span:hover{
    color: <?php echo esc_attr($cabin_qode_options['separators_with_text_text_hover_color']); ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['message_backgroundcolor'])) { ?>
    .q_message{
    <?php if (!empty($cabin_qode_options['message_backgroundcolor'])) { ?>background-color: <?php echo esc_attr($cabin_qode_options['message_backgroundcolor']);  ?><?php } ?>;
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['message_title_color']) || !empty($cabin_qode_options['message_title_fontsize']) || !empty($cabin_qode_options['message_title_lineheight']) || !empty($cabin_qode_options['message_title_fontstyle']) || !empty($cabin_qode_options['message_title_fontweight']) || $cabin_qode_options['message_title_google_fonts'] != "-1") { ?>
    .q_message .message_text .message_text_inner{
    <?php if (!empty($cabin_qode_options['message_title_color'])) { ?>    color: <?php echo esc_attr($cabin_qode_options['message_title_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['message_title_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['message_title_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['message_title_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['message_title_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['message_title_lineheight'])) { ?>   line-height: <?php echo esc_attr($cabin_qode_options['message_title_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['message_title_fontstyle'])) { ?>    font-style: <?php echo esc_attr($cabin_qode_options['message_title_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['message_title_fontweight'])) { ?>   font-weight: <?php echo esc_attr($cabin_qode_options['message_title_fontweight']);  ?>; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['message_icon_fontsize']) && !empty($cabin_qode_options['message_icon_color'])) { ?>
    .q_message.with_icon .q_message_icon_inner > i,
    .q_message.with_icon .q_message_icon_inner > .q_font_elegant_icon {
    <?php if (!empty($cabin_qode_options['message_icon_color'])) { ?> color:  <?php echo esc_attr($cabin_qode_options['message_icon_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['message_icon_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['message_icon_fontsize']);  ?>px; <?php } ?>
    }
<?php } ?>


<?php
if (isset($cabin_qode_options['blog_pagination_type']) && $cabin_qode_options['blog_pagination_type'] == 'standard') {
    if ( isset($cabin_qode_options['pagination_type']) && $cabin_qode_options['pagination_type'] == 'arrows_on_sides' ) {

        $button_width = 46;
        $space_between = 4;
        $border_width = 1;
        $distance = 50;
        if (( isset($cabin_qode_options['pagination_button_width']) && $cabin_qode_options['pagination_button_width'] !== '' ) || ( isset($cabin_qode_options['pagination_space_between_buttons']) && $cabin_qode_options['pagination_space_between_buttons'] !== '' )  || ( isset($cabin_qode_options['pagination_button_border_width']) && $cabin_qode_options['pagination_button_border_width'] !== '' )) {
            if( isset($cabin_qode_options['pagination_button_width']) && $cabin_qode_options['pagination_button_width'] !== '' ) {
                $button_width = $cabin_qode_options['pagination_button_width'];
            }
            if ( isset($cabin_qode_options['pagination_space_between_buttons']) && $cabin_qode_options['pagination_space_between_buttons'] !== '' ) {
                $space_between = $cabin_qode_options['pagination_space_between_buttons'];
            }
            if ( isset($cabin_qode_options['pagination_button_border_width']) && $cabin_qode_options['pagination_button_border_width'] !== '' ) {
                $border_width = $cabin_qode_options['pagination_button_border_width'];
            }
            $distance = $button_width + $space_between + $border_width*2;
        } ?>
        .pagination ul li.prev.prev_first a {
        left: <?php echo esc_attr($distance); ?>px;
        }
        .pagination ul li.next.next_last a {
        right: <?php echo esc_attr($distance); ?>px;
        }
    <?php  }
}?>


<?php
$pagination_button_size_styles = array();
$pagination_button_inner_size_styles = array ();
$pagination_button_with_text_size_styles = array();
$border_outer_width = '1';
$border_outer_height = '';

if(isset($cabin_qode_options['pagination_button_width']) && $cabin_qode_options['pagination_button_width'] !== '') {
    $pagination_button_inner_size_styles[] = 'width: '.esc_attr($cabin_qode_options['pagination_button_width']).'px';
    if (isset($cabin_qode_options['pagination_button_border_width']) && $cabin_qode_options['pagination_button_border_width'] !== '') {
        $border_outer_width = esc_attr($cabin_qode_options['pagination_button_border_width']);
    }
    $button_outer_width = esc_attr($cabin_qode_options['pagination_button_width'])+ $border_outer_width*2;
    $pagination_button_outer_size_styles[] = 'width: '.$button_outer_width.'px';
}

if(isset($cabin_qode_options['pagination_button_height']) && $cabin_qode_options['pagination_button_height'] !== '') {
    $pagination_button_inner_size_styles[] = 'height: '.esc_attr($cabin_qode_options['pagination_button_height']).'px';
    $pagination_button_inner_size_styles[] = 'line-height: '.esc_attr($cabin_qode_options['pagination_button_height']).'px';
    $pagination_button_with_text_size_styles[] = 'height: '.esc_attr($cabin_qode_options['pagination_button_height']).'px';
    $pagination_button_with_text_size_styles[] = 'line-height: '.esc_attr($cabin_qode_options['pagination_button_height']).'px';

}

if(is_array($pagination_button_inner_size_styles) && count($pagination_button_inner_size_styles)) { ?>
    .pagination ul li > span,
    .pagination ul li > a,
    .woocommerce-pagination ul.page-numbers li>a,
    .woocommerce-pagination ul.page-numbers li>span,
    .pagination ul li a .pagination_arrow,
    .woocommerce-pagination ul li a .pagination_arrow,
    .single_links_pages span,
    .comment_pager .page-numbers:not(.prev):not(.next) {
    <?php echo esc_attr(implode(';', $pagination_button_inner_size_styles)); ?>
    }
<?php }

if(is_array($pagination_button_with_text_size_styles) && count($pagination_button_with_text_size_styles)) { ?>
    .comment_pager .page-numbers.prev,
    .comment_pager .page-numbers.next {
    <?php echo esc_attr(implode(';', $pagination_button_with_text_size_styles)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['pagination_space_between_buttons']) && $cabin_qode_options['pagination_space_between_buttons'] !== '') {
    $pagination_button_margin = esc_attr($cabin_qode_options['pagination_space_between_buttons']).'px';
    $pagination_button_margin_half = esc_attr($cabin_qode_options['pagination_space_between_buttons']/2).'px';
    ?>
    .pagination ul li,
    .woocommerce-pagination ul.page-numbers li,
    .single_links_pages	span,
    .single_links_pages	a span,
    .comment_pager .page-numbers {
    margin: 0 <?php echo esc_attr($pagination_button_margin_half).' '. esc_attr($pagination_button_margin) .' '. esc_attr($pagination_button_margin_half) ?>;
    }
    @media only screen and (max-width: 600px){
    .pagination.arrows_on_sides ul li.prev,
    .pagination.arrows_on_sides ul li.first,
    .pagination.arrows_on_sides ul li.prev.prev_first,
    .pagination.arrows_on_sides ul li.last,
    .pagination.arrows_on_sides ul li.next,
    .pagination.arrows_on_sides ul li.next.next_last,
    .pagination.standard_left ul li:first-child,
    .comment_pager .prev.page-numbers,
    .comment_pager .next.page-numbers,
    .comment_pager.arrows_on_sides a:first-child,
    .single_links_pages .single_links_pages_inner > span:first-child,
    .single_links_pages .single_links_pages_inner a:last-child a,
    .single_links_pages .single_links_pages_inner a:first-child span,
    .woocommerce-pagination.standard_left ul.page-numbers li:first-child{
    margin: 0 <?php echo esc_attr($pagination_button_margin_half) .' '. esc_attr($pagination_button_margin) .' '. esc_attr($pagination_button_margin_half) ?> !important;
    }
    }
<?php } ?>


<?php
$pagination_button_styles = array();
$pagination_button_hover_styles = array();
$pagination_button_border_inner_size_styles = array();
$pagination_button_active_styles = array();

$pagination_button_outer_width = 46;
$pagination_button_outer_height = 46;

if(isset($cabin_qode_options['pagination_button_background_color']) && $cabin_qode_options['pagination_button_background_color'] !== '') {
    $pagination_button_styles[] = 'background-color: '.esc_attr($cabin_qode_options['pagination_button_background_color']);
}

if(isset($cabin_qode_options['pagination_button_border_color']) && $cabin_qode_options['pagination_button_border_color'] !== '') {
    $pagination_button_styles[] = 'border-color: '.esc_attr($cabin_qode_options['pagination_button_border_color']);
}
elseif (isset($cabin_qode_options['pagination_button_background_color']) && $cabin_qode_options['pagination_button_background_color'] !== '') {
    $pagination_button_styles[] = 'border-color: '.esc_attr($cabin_qode_options['pagination_button_background_color']);
}

if(isset($cabin_qode_options['pagination_button_border_radius']) && $cabin_qode_options['pagination_button_border_radius'] !== '') {
    $pagination_button_styles[] = 'border-radius: '.esc_attr($cabin_qode_options['pagination_button_border_radius']).'px';
    $pagination_button_hover_styles[] = 'border-radius: '.esc_attr($cabin_qode_options['pagination_button_border_radius']).'px';
    $pagination_button_active_styles[] = 'border-radius: '.esc_attr($cabin_qode_options['pagination_button_border_radius']).'px';
}
if(isset($cabin_qode_options['pagination_button_border_width']) && $cabin_qode_options['pagination_button_border_width'] !== '') {
    $pagination_button_styles[] = 'border-width: '.esc_attr($cabin_qode_options['pagination_button_border_width']).'px';
    $pagination_button_hover_styles[] = 'border-width: '.esc_attr($cabin_qode_options['pagination_button_border_width']).'px';
    $pagination_button_active_styles[] = 'border-width: '.esc_attr($cabin_qode_options['pagination_button_border_width']).'px';
    if (isset($cabin_qode_options['pagination_button_width']) && $cabin_qode_options['pagination_button_width'] !== '') {
        $pagination_button_outer_width = esc_attr($cabin_qode_options['pagination_button_width']);
    }
    $pagination_button_outer_width_new = $pagination_button_outer_width + $cabin_qode_options['pagination_button_border_width']*2;
    if (isset($cabin_qode_options['pagination_button_height']) && $cabin_qode_options['pagination_button_height'] !== '') {
        $pagination_button_outer_height = esc_attr($cabin_qode_options['pagination_button_height']);
    }

    $pagination_button_border_inner_size_styles[] = 'width: '.$pagination_button_outer_width.'px';
    $pagination_button_border_inner_size_styles[] = 'height: '.$pagination_button_outer_height.'px';
    $pagination_button_border_inner_size_styles[] = 'line-height: '.$pagination_button_outer_height.'px';
    ?>
    .pagination ul li a,
    .woocommerce-pagination ul.page-numbers li a,
    .woocommerce-pagination ul.page-numbers li span{
    <?php echo esc_attr(implode(';', $pagination_button_border_inner_size_styles)); ?>
    }
    <?php
}

if(is_array($pagination_button_styles) && count($pagination_button_styles)) { ?>
    .pagination ul li > a,
    .pagination ul li span,
    .woocommerce-pagination ul.page-numbers li > a,
    .woocommerce-pagination ul.page-numbers li > span,
    .single_links_pages	a span,
    .comment_pager .page-numbers {
    <?php echo esc_attr(implode(';', $pagination_button_styles)); ?>
    }
<?php }

if(isset($cabin_qode_options['pagination_button_background_hover_color']) && $cabin_qode_options['pagination_button_background_hover_color'] !== '') {
    $pagination_button_hover_styles[] = 'background-color: '.esc_attr($cabin_qode_options['pagination_button_background_hover_color']);
}

if(isset($cabin_qode_options['pagination_button_border_hover_color']) && $cabin_qode_options['pagination_button_border_hover_color'] !== '') {
    $pagination_button_hover_styles[] = 'border-color: '.esc_attr($cabin_qode_options['pagination_button_border_hover_color']);
}
elseif (isset($cabin_qode_options['pagination_button_background_hover_color']) && $cabin_qode_options['pagination_button_background_hover_color'] !== '') {
    $pagination_button_hover_styles[] = 'border-color: '.esc_attr($cabin_qode_options['pagination_button_background_hover_color']);
}

if(is_array($pagination_button_hover_styles) && count($pagination_button_hover_styles)) { ?>
    .pagination ul li a:hover ,
    .pagination ul li.active span:hover,
    .woocommerce-pagination ul.page-numbers li a:hover ,
    .woocommerce-pagination ul.page-numbers li>span.dots:hover,
    .woocommerce-pagination ul.page-numbers li > span.current:hover,
    .single_links_pages span:hover,
    .woocommerce-pagination ul.page-numbers li span:hover,
    .comment_pager .current,
    .comment_pager .page-numbers:hover,
    .comment_pager .page-numbers.dots:hover	{
    <?php echo esc_attr(implode(';', $pagination_button_hover_styles)); ?>
    }
<?php }


if(isset($cabin_qode_options['pagination_button_background_active_color']) && $cabin_qode_options['pagination_button_background_active_color'] !== '') {
    $pagination_button_active_styles[] = 'background-color: '.esc_attr($cabin_qode_options['pagination_button_background_active_color']);
}

if(isset($cabin_qode_options['pagination_button_border_active_color']) && $cabin_qode_options['pagination_button_border_active_color'] !== '') {
    $pagination_button_active_styles[] = 'border-color: '.esc_attr($cabin_qode_options['pagination_button_border_active_color']);
}
elseif (isset($cabin_qode_options['pagination_button_background_active_color']) && $cabin_qode_options['pagination_button_background_active_color'] !== '') {
    $pagination_button_active_styles[] = 'border-color: '.esc_attr($cabin_qode_options['pagination_button_background_active_color']);
}

if(is_array($pagination_button_active_styles) && count($pagination_button_active_styles)) { ?>
    .pagination ul li.active > span,
    .woocommerce-pagination ul.page-numbers li > span.current,
    .comment_pager .current,
    .single_links_pages span {
    <?php echo esc_attr(implode(';', $pagination_button_active_styles)); ?>
    }
<?php }

?>

<?php
$pagination_styles = array();

if(isset($cabin_qode_options['pagination_font_family']) && $cabin_qode_options['pagination_font_family'] !== '-1') {
    $pagination_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pagination_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['pagination_font_size']) && $cabin_qode_options['pagination_font_size'] !== '') {
    $pagination_styles[] = 'font-size: '.$cabin_qode_options['pagination_font_size'].'px';
}

if(isset($cabin_qode_options['pagination_letter_spacing']) && $cabin_qode_options['pagination_letter_spacing'] !== '') {
    $pagination_styles[] = 'letter-spacing: '.$cabin_qode_options['pagination_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pagination_font_weight']) && $cabin_qode_options['pagination_font_weight'] !== '') {
    $pagination_styles[] = 'font-weight: '.$cabin_qode_options['pagination_font_weight'];
}

if(isset($cabin_qode_options['pagination_font_style']) && $cabin_qode_options['pagination_font_style'] !== '') {
    $pagination_styles[] = 'font-style: '.$cabin_qode_options['pagination_font_style'];
}

if(isset($cabin_qode_options['pagination_color']) && $cabin_qode_options['pagination_color'] !== '') {
    $pagination_styles[] = 'color: '.$cabin_qode_options['pagination_color'];
}

if(is_array($pagination_styles) && count($pagination_styles)) { ?>
    .pagination ul li > span,
    .pagination ul li > a,
    .pagination_prev_and_next_only ul li > a,
    .pagination ul li.active span,
    .pagination ul li > a.inactive,
    .single_links_pages a span,
    .single_links_pages .single_links_pages_inner > span,
    .comment_pager .page-numbers,
    .woocommerce-pagination ul.page-numbers li>a,
    .woocommerce-pagination ul.page-numbers li>span,
    .woocommerce-pagination ul.page-numbers li span.current,
    .woocommerce-pagination ul.page-numbers li a {
    <?php echo esc_attr(implode(';', $pagination_styles)); ?>
    }
<?php }
?>


<?php if(!empty($cabin_qode_options['pagination_hover_color'])) { ?>
    .pagination ul li a:hover,
    .pagination_prev_and_next_only ul li a:hover,
    .pagination ul li.active span:hover,
    .woocommerce-pagination ul.page-numbers li a:hover,
    .woocommerce-pagination ul.page-numbers li i:hover,
    .woocommerce-pagination ul.page-numbers li > span.current:hover,
    .single_links_pages a span:hover,
    .single_links_pages .single_links_pages_inner > span:hover,
    .comment_pager a:hover,
    .comment_pager .current:hover,
    .comment_pager .page-numbers.dots:hover,
    .woocommerce-pagination ul.page-numbers li a:hover,
    .woocommerce-pagination ul.page-numbers li span:hover{
    color: <?php echo esc_attr($cabin_qode_options['pagination_hover_color']); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['pagination_active_color'])) { ?>
    .pagination ul li.active span,
    .woocommerce-pagination ul.page-numbers li span.current,
    .single_links_pages .single_links_pages_inner > span,
    .comment_pager .current{
    color: <?php echo esc_attr($cabin_qode_options['pagination_active_color']); ?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['pagination_arrow_size']) && $cabin_qode_options['pagination_arrow_size'] !== '') {
    ?>
    .pagination ul li a .pagination_arrow,
    .pagination_prev_and_next_only ul li a .pagination_arrow,
    .woocommerce-pagination ul li a .pagination_arrow{
    font-size: <?php echo esc_attr($cabin_qode_options['pagination_arrow_size']).'px'; ?>;
    }
<?php } ?>

<?php
$Portfolio_pagination_styles = array();

if(isset($cabin_qode_options['portfolio_pagination_font_size']) && $cabin_qode_options['portfolio_pagination_font_size'] !== '') {
    $Portfolio_pagination_styles[] = 'font-size: '.$cabin_qode_options['portfolio_pagination_font_size'].'px';
}

if(isset($cabin_qode_options['portfolio_pagination_color']) && $cabin_qode_options['portfolio_pagination_color'] !== '') {
    $Portfolio_pagination_styles[] = 'color: '.$cabin_qode_options['portfolio_pagination_color'];
}

if(is_array($Portfolio_pagination_styles) && count($Portfolio_pagination_styles)) { ?>
    .portfolio_navigation a{
    <?php echo esc_attr(implode(';', $Portfolio_pagination_styles)); ?>
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['portfolio_pagination_hover_color'])) { ?>
    .portfolio_navigation a:hover{
    color: <?php echo esc_attr($cabin_qode_options['portfolio_pagination_hover_color']); ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['icon_color']) || !empty($cabin_qode_options['icon_background_color']) || !empty($cabin_qode_options['icon_border_color']) || (isset($cabin_qode_options['icon_border_width']) && ($cabin_qode_options['icon_border_width']) != "")) { ?>
    .q_icon_shortcode.circle i, .q_icon_shortcode.square i, .q_icon_shortcode.circle span,.q_icon_shortcode.square span{
    <?php if (!empty($cabin_qode_options['icon_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['icon_color']); ?>; <?php } ?>
    }

    <?php

    if(isset($cabin_qode_options['icon_border_width']) && ($cabin_qode_options['icon_border_width']) != "") {
        $icon_border_width = $cabin_qode_options['icon_border_width']."px";
    }
    else{
        $icon_border_width = "1px";
    }
    ?>

    .q_icon_shortcode.q_icon_shade.circle,.q_icon_shortcode.q_icon_shade.square{
    <?php if (!empty($cabin_qode_options['icon_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['icon_background_color']); ?>; <?php } ?>
    <?php if ((!empty($cabin_qode_options['icon_border_color'])) || (!empty($cabin_qode_options['icon_border_width']))) { ?> border-style: solid; <?php } ?>
    <?php if (!empty($cabin_qode_options['icon_border_color'])) { ?> border-color: <?php echo esc_attr($cabin_qode_options['icon_border_color']); ?>; <?php } ?>
    border-width: <?php echo esc_attr($icon_border_width); ?>!important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['icon_box_shadows']) && $cabin_qode_options['icon_box_shadows'] == 'yes' ) {
    $box_shadow = '';
    if(isset($cabin_qode_options['icon_box_shadow_horizontal_shadow']) && $cabin_qode_options['icon_box_shadow_horizontal_shadow'] !== '') {
        $box_shadow = $cabin_qode_options['icon_box_shadow_horizontal_shadow'].'px ';
    }
    else {
        $box_shadow = '1px ';
    }
    if(isset($cabin_qode_options['icon_box_shadow_vertical_shadow']) && $cabin_qode_options['icon_box_shadow_vertical_shadow'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_box_shadow_horizontal_shadow'].'px ';
    }
    else {
        $box_shadow .= '1px ';
    }
    if(isset($cabin_qode_options['icon_box_shadow_blur_distance']) && $cabin_qode_options['icon_box_shadow_blur_distance'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_box_shadow_blur_distance'].'px ';
    }
    if(isset($cabin_qode_options['icon_box_shadow_shadow_size']) && $cabin_qode_options['icon_box_shadow_shadow_size'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_box_shadow_shadow_size'].'px ';
    }
    if(isset($cabin_qode_options['icon_box_shadow_shadow_color']) && $cabin_qode_options['icon_box_shadow_shadow_color'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_box_shadow_shadow_color'];
    }
    ?>
    .q_icon_shortcode.circle, .q_icon_shortcode.square {
    box-shadow: <?php echo esc_attr($box_shadow); ?>;
    }

<?php } ?>

<?php if (!empty($cabin_qode_options['icon_hover_color']) || !empty($cabin_qode_options['icon_hover_background_color']) || !empty($cabin_qode_options['icon_hover_border_color'])) { ?>
    .q_icon_shortcode.circle:hover i, .q_icon_shortcode.square:hover i, .q_icon_shortcode.circle:hover span, .q_icon_shortcode.square:hover span{
    <?php if (!empty($cabin_qode_options['icon_hover_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['icon_hover_color']); ?> !important; <?php } ?>

    }

    <?php
    if(isset($cabin_qode_options['icon_border_width']) && ($cabin_qode_options['icon_border_width']) != "") {
        $icon_border_width = $cabin_qode_options['icon_border_width']."px";
    }
    else{
        $icon_border_width = "1px";
    }
    ?>

    .q_icon_shortcode.circle:hover, .q_icon_shortcode.square:hover{
    <?php if (!empty($cabin_qode_options['icon_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['icon_hover_background_color']); ?>!important; <?php } ?>
    <?php if ((!empty($cabin_qode_options['icon_hover_border_color'])) || (!empty($cabin_qode_options['icon_border_width']))) { ?> border-style: solid; <?php } ?>
    <?php if (!empty($cabin_qode_options['icon_hover_border_color'])) { ?> border-color: <?php echo esc_attr($cabin_qode_options['icon_hover_border_color']); ?>!important; <?php } ?>
    border-width: <?php echo esc_attr($icon_border_width); ?>!important;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['icon_color_normal'])) { ?>
    .q_icon_shortcode.normal i, .q_icon_shortcode.normal span{
    color: <?php echo esc_attr($cabin_qode_options['icon_color_normal']); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['icon_hover_color_normal'])) { ?>
    .q_icon_shortcode.normal:hover i, .q_icon_shortcode.normal:hover span{
    color: <?php echo esc_attr($cabin_qode_options['icon_hover_color_normal']); ?>!important;
    }
<?php } ?>

<?php // icon with text start ?>


<?php if (!empty($cabin_qode_options['icon_with_text_icon_color']) || !empty($cabin_qode_options['icon_background_color']) || !empty($cabin_qode_options['icon_with_text_icon_border_color']) || !empty($cabin_qode_options['icon_with_text_icon_border_width'])) { ?>

    .box_holder_icon_inner:not(.normal_icon) .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .icon_holder .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .q_font_elegant_holder,
    .box_holder_icon_inner:not(.normal_icon) .q_font_elegant_holder {
    <?php if (!empty($cabin_qode_options['icon_with_text_icon_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_color']); ?>; <?php } ?>
    }

    <?php
    if(isset($cabin_qode_options['icon_with_text_icon_border_width']) && ($cabin_qode_options['icon_with_text_icon_border_width']) != "") {
        $icon_with_text_icon_border_width = $cabin_qode_options['icon_with_text_icon_border_width']."px";
    }
    else{
        $icon_with_text_icon_border_width = "1px";
    }
    ?>

    .box_holder_icon_inner:not(.normal_icon) .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .icon_holder .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .q_font_elegant_holder,
    .box_holder_icon_inner:not(.normal_icon) .q_font_elegant_holder {
    <?php if (!empty($cabin_qode_options['icon_with_text_icon_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_background_color']); ?>; <?php } ?>
    <?php if ((!empty($cabin_qode_options['icon_with_text_icon_border_color'])) || (!empty($cabin_qode_options['icon_with_text_icon_border_width']))) { ?> border-style: solid; <?php } ?>
    <?php if (!empty($cabin_qode_options['icon_with_text_icon_border_color'])) { ?> border-color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_border_color']); ?>; <?php } ?>
    border-width: <?php echo esc_attr($icon_with_text_icon_border_width); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['icon_with_text_box_shadows']) && $cabin_qode_options['icon_with_text_box_shadows'] == 'yes') {

    $box_shadow = '';
    if (isset($cabin_qode_options['icon_with_text_box_shadow_horizontal_shadow']) && $cabin_qode_options['icon_with_text_box_shadow_horizontal_shadow'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_with_text_box_shadow_horizontal_shadow'].'px ';
    }
    else {
        $box_shadow .= '1px ';
    }
    if (isset($cabin_qode_options['icon_with_text_box_shadow_vertical_shadow']) && $cabin_qode_options['icon_with_text_box_shadow_vertical_shadow'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_with_text_box_shadow_vertical_shadow'].'px ';
    }
    else {
        $box_shadow .= '1px ';
    }
    if (isset($cabin_qode_options['icon_with_text_box_shadow_blur_distance']) && $cabin_qode_options['icon_with_text_box_shadow_blur_distance'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_with_text_box_shadow_blur_distance'].'px ';
    }
    if (isset($cabin_qode_options['icon_with_text_box_shadow_shadow_size']) && $cabin_qode_options['icon_with_text_box_shadow_shadow_size'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_with_text_box_shadow_shadow_size'].'px ';
    }
    if (isset($cabin_qode_options['icon_with_text_box_shadow_shadow_color']) && $cabin_qode_options['icon_with_text_box_shadow_shadow_color'] !== '') {
        $box_shadow .= $cabin_qode_options['icon_with_text_box_shadow_shadow_color'];
    }
    ?>
    .box_holder_icon_inner:not(.normal_icon) .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .icon_holder .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .q_font_elegant_holder,
    .box_holder_icon_inner:not(.normal_icon) .q_font_elegant_holder {
    box-shadow: <?php echo esc_attr($box_shadow); ?>;
    }

<?php } ?>

<?php if (!empty($cabin_qode_options['icon_with_text_icon_hover_color']) || !empty($cabin_qode_options['icon_with_text_icon_hover_background_color']) || !empty($cabin_qode_options['icon_with_text_icon_hover_border_color'])) { ?>
    .box_holder_icon_inner:not(.normal_icon) .icon_holder_inner:hover .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .icon_holder:hover .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .q_font_elegant_holder:hover,
    .box_holder_icon_inner:not(.normal_icon) .q_font_elegant_holder:hover{
    <?php if (!empty($cabin_qode_options['icon_with_text_icon_hover_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_hover_color']); ?> !important; <?php } ?>

    }

    <?php
    if(isset($cabin_qode_options['icon_with_text_icon_border_width']) && ($cabin_qode_options['icon_with_text_icon_border_width']) != "") {
        $icon_with_text_icon_border_width = $cabin_qode_options['icon_with_text_icon_border_width']."px";
    }
    else{
        $icon_with_text_icon_border_width = "1px";
    }
    ?>

    .box_holder_icon_inner:not(.normal_icon) .icon_holder_inner:hover .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .icon_holder:hover .qode_icon_stack,
    .q_icon_with_title:not(.normal_icon) .q_font_elegant_holder:hover,
    .box_holder_icon_inner:not(.normal_icon) .q_font_elegant_holder:hover{
    <?php if (!empty($cabin_qode_options['icon_with_text_icon_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_hover_background_color']); ?>!important; <?php } ?>
    <?php if ((!empty($cabin_qode_options['icon_with_text_icon_hover_border_color'])) || (!empty($cabin_qode_options['icon_with_text_icon_border_width']))) { ?> border-style: solid; <?php } ?>
    <?php if (!empty($cabin_qode_options['icon_with_text_icon_hover_border_color'])) { ?> border-color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_hover_border_color']); ?>!important; <?php } ?>
    border-width: <?php echo esc_attr($icon_with_text_icon_border_width); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['icon_with_text_icon_color_normal'])) { ?>
    .box_holder_icon_inner.normal_icon .icon_holder_inner .qode_icon_stack,
    .q_icon_with_title.normal_icon .icon_holder .qode_icon_stack,
    .q_icon_with_title.normal_icon .q_font_elegant_holder,
    .box_holder_icon_inner.normal_icon .q_font_elegant_holder{
    color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_color_normal']); ?>;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['icon_with_text_icon_hover_color_normal'])) { ?>
    .box_holder_icon_inner.normal_icon .icon_holder_inner:hover .qode_icon_stack,
    .q_icon_with_title.normal_icon .icon_holder:hover .qode_icon_stack,
    .q_icon_with_title.normal_icon .q_font_elegant_holder:hover,
    .box_holder_icon_inner.normal_icon .q_font_elegant_holder:hover{
    color: <?php echo esc_attr($cabin_qode_options['icon_with_text_icon_hover_color_normal']); ?> !important;
    }
<?php } ?>



<?php // icon with text end ?>


<?php if (!empty($cabin_qode_options['social_icon_color']) || !empty($cabin_qode_options['social_icon_background_color']) || !empty($cabin_qode_options['social_icon_border_color'])) { ?>
    .q_social_icon_holder .qode_icon_stack{
    <?php if (!empty($cabin_qode_options['social_icon_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['social_icon_color']); ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['social_icon_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['social_icon_background_color']); ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['social_icon_border_color'])) { ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['social_icon_border_color']); ?>; <?php } ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['social_icon_box_shadows']) && $cabin_qode_options['social_icon_box_shadows'] == 'yes') {

    $box_shadow = '';
    if (isset($cabin_qode_options['social_icon_box_shadow_horizontal_shadow']) && $cabin_qode_options['social_icon_box_shadow_horizontal_shadow'] !== '') {
        $box_shadow .= $cabin_qode_options['social_icon_box_shadow_horizontal_shadow'].'px ';
    }
    else {
        $box_shadow .= '1px ';
    }
    if (isset($cabin_qode_options['social_icon_box_shadow_vertical_shadow']) && $cabin_qode_options['social_icon_box_shadow_vertical_shadow'] !== '') {
        $box_shadow .= $cabin_qode_options['social_icon_box_shadow_vertical_shadow'].'px ';
    }
    else {
        $box_shadow .= '1px ';
    }
    if (isset($cabin_qode_options['social_icon_box_shadow_blur_distance']) && $cabin_qode_options['social_icon_box_shadow_blur_distance'] !== '') {
        $box_shadow .= $cabin_qode_options['social_icon_box_shadow_blur_distance'].'px ';
    }
    if (isset($cabin_qode_options['social_icon_box_shadow_shadow_size']) && $cabin_qode_options['social_icon_box_shadow_shadow_size'] !== '') {
        $box_shadow .= $cabin_qode_options['social_icon_box_shadow_shadow_size'].'px ';
    }
    if (isset($cabin_qode_options['social_icon_box_shadow_shadow_color']) && $cabin_qode_options['social_icon_box_shadow_shadow_color'] !== '') {
        $box_shadow .= $cabin_qode_options['social_icon_box_shadow_shadow_color'];
    }
    ?>
    .social_icons_widget_inner .q_social_icon_holder .q_icon_shortcode:not(.normal) {
    box-shadow: <?php echo esc_attr($box_shadow); ?>;
    }

<?php } ?>


<?php if (!empty($cabin_qode_options['social_icon_hover_color']) || !empty($cabin_qode_options['social_icon_hover_background_color']) || !empty($cabin_qode_options['social_icon_hover_border_color'])) { ?>
    .q_social_icon_holder:hover .qode_icon_stack{
    <?php if (!empty($cabin_qode_options['social_icon_hover_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['social_icon_hover_color']); ?> !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['social_icon_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['social_icon_hover_background_color']); ?> !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['social_icon_hover_border_color'])) { ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['social_icon_hover_border_color']); ?> !important; <?php } ?>
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['social_color'])) { ?>
    .q_social_icon_holder.normal_social .simple_social,
    .q_social_icon_holder.normal_social.with_link .simple_social{
    color: <?php echo esc_attr($cabin_qode_options['social_color']); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['social_hover_color'])) { ?>
    .q_social_icon_holder.normal_social:hover .simple_social{
    color: <?php echo esc_attr($cabin_qode_options['social_hover_color']); ?> !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['social_share_list_icon_size']) && $cabin_qode_options['social_share_list_icon_size'] !== '') { ?>
    .social_share_list_holder ul li i,
    .woocommerce.single-product.single .social_share_list_holder ul li i{
    font-size : <?php echo esc_attr($cabin_qode_options['social_share_list_icon_size']).'px';?> ;
    line-height :  <?php echo esc_attr($cabin_qode_options['social_share_list_icon_size']).'px';?> ;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['social_share_list_icon_margin_right']) && $cabin_qode_options['social_share_list_icon_margin_right'] !== '') { ?>
    .social_share_list_holder ul li,
    .blog_holder article .social_share_list_holder ul li,
    .woocommerce.single-product.single .social_share_list_holder ul li{
    margin-right : <?php echo esc_attr($cabin_qode_options['social_share_list_icon_margin_right']).'px';?> ;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['social_share_list_icon_color']) && $cabin_qode_options['social_share_list_icon_color'] !== '') { ?>
    .social_share_list_holder ul li i,
    .woocommerce.single-product.single .social_share_list_holder ul li i{
    color : <?php echo esc_attr($cabin_qode_options['social_share_list_icon_color']) ;?> ;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['social_share_list_icon_hover_color']) && $cabin_qode_options['social_share_list_icon_hover_color'] !== '') { ?>
    .social_share_list_holder ul li i:hover,
    .woocommerce.single-product.single .social_share_list_holder ul li i:hover{
    color : <?php echo esc_attr($cabin_qode_options['social_share_list_icon_hover_color']) ;?> ;
    }
<?php } ?>

<?php

/* ==========================================================================
   Buttons custom styles
   ========================================================================== */
//generate button styles
$default_btn_styles         = '';
$default_btn_hover_styles   = '';

$small_btn_styles           = '';

$large_btn_styles           = '';

$extra_large_btn_styles     = '';

$white_btn_styles           = '';
$white_btn_hover_styles     = '';

$solid_btn_styles           = '';
$solid_btn_hover_styles     = '';

$mid_transparent_btn_styles           = '';
$mid_transparent_btn_hover_styles     = '';

$top_bottom_border_btn_styles          = '';
$top_bottom_border_btn_hover_styles     = '';


//generate default button styles
if(isset($cabin_qode_options['button_title_color']) && $cabin_qode_options['button_title_color'] !== '') {
    $default_btn_styles .= 'color: '.$cabin_qode_options['button_title_color'].';';
}

if(isset($cabin_qode_options['button_title_fontsize']) && $cabin_qode_options['button_title_fontsize'] !== '') {
    $default_btn_styles .= 'font-size: '.$cabin_qode_options['button_title_fontsize'].'px;';
}

if(isset($cabin_qode_options['button_title_lineheight']) && $cabin_qode_options['button_title_lineheight'] !== '') {
    $default_btn_styles .= 'line-height: '.$cabin_qode_options['button_title_lineheight'].'px;';
    $default_btn_styles .= 'height: '.$cabin_qode_options['button_title_lineheight'].'px;';?>
    .qbutton .button_icon,
    .qbutton.medium .button_icon {
    width: <?php echo esc_attr($cabin_qode_options['button_title_lineheight']).'px;';?>;
    }
<?php }

if(isset($cabin_qode_options['button_title_fontstyle']) && $cabin_qode_options['button_title_fontstyle'] !== '') {
    $default_btn_styles .= 'font-style: '.esc_attr($cabin_qode_options['button_title_fontstyle']).';';
}

if(isset($cabin_qode_options['button_title_fontweight']) && $cabin_qode_options['button_title_fontweight'] !== '') {
    $default_btn_styles .= 'font-weight: '.esc_attr($cabin_qode_options['button_title_fontweight']).';';
}

if(isset($cabin_qode_options['button_title_google_fonts']) && $cabin_qode_options['button_title_google_fonts'] !== '-1') {
    $default_btn_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['button_title_google_fonts']).';';
}

if(isset($cabin_qode_options['button_title_letter_spacing']) && $cabin_qode_options['button_title_letter_spacing'] !== '') {
    $default_btn_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['button_title_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['button_title_texttransform']) && $cabin_qode_options['button_title_texttransform'] !== '') {
    $default_btn_styles .= 'text-transform: '.esc_attr($cabin_qode_options['button_title_texttransform']).';';
}

if(isset($cabin_qode_options['button_border_color']) && $cabin_qode_options['button_border_color'] !== '') {
    $default_btn_styles .= 'border-color: '.esc_attr($cabin_qode_options['button_border_color']).';';
}

if(isset($cabin_qode_options['button_border_width']) && $cabin_qode_options['button_border_width'] !== '') {
    $default_btn_styles .= 'border-width: '.esc_attr($cabin_qode_options['button_border_width']).'px;';
}

if(isset($cabin_qode_options['button_border_radius']) && $cabin_qode_options['button_border_radius'] !== '') {
    $default_btn_styles .= 'border-radius: '.esc_attr($cabin_qode_options['button_border_radius']).'px;';
    $default_btn_styles .= '-moz-border-radius: '.esc_attr($cabin_qode_options['button_border_radius']).'px;';
    $default_btn_styles .= '-webkit-border-radius: '.esc_attr($cabin_qode_options['button_border_radius']).'px;';
}

if(isset($cabin_qode_options['button_backgroundcolor']) && $cabin_qode_options['button_backgroundcolor'] !== '') {
    $default_btn_styles .= 'background-color: '.$cabin_qode_options['button_backgroundcolor'].';';
}

if(isset($cabin_qode_options['button_padding']) && $cabin_qode_options['button_padding'] !== '') {
    $default_btn_styles .= 'padding-left: '.esc_attr($cabin_qode_options['button_padding']).'px;';
    $default_btn_styles .= 'padding-right: '.esc_attr($cabin_qode_options['button_padding']).'px;';
}

if (isset($cabin_qode_options['button_box_shadows']) && $cabin_qode_options['button_box_shadows'] == 'yes' ) {
    $box_shadow = '';
    if(isset($cabin_qode_options['button_box_shadow_horizontal_shadow']) && $cabin_qode_options['button_box_shadow_horizontal_shadow'] !== '') {
        $box_shadow = $cabin_qode_options['button_box_shadow_horizontal_shadow'].'px ';
    }
    else {
        $box_shadow = '2px ';
    }
    if(isset($cabin_qode_options['button_box_shadow_vertical_shadow']) && $cabin_qode_options['button_box_shadow_vertical_shadow'] !== '') {
        $box_shadow .= $cabin_qode_options['button_box_shadow_vertical_shadow'].'px ';
    }
    else {
        $box_shadow .= '2px ';
    }
    if(isset($cabin_qode_options['button_box_shadow_blur_distance']) && $cabin_qode_options['button_box_shadow_blur_distance'] !== '') {
        $box_shadow .= $cabin_qode_options['button_box_shadow_blur_distance'].'px ';
    }
    else {
        $box_shadow .= '2px ';
    }
    if(isset($cabin_qode_options['button_box_shadow_shadow_size']) && $cabin_qode_options['button_box_shadow_shadow_size'] !== '') {
        $box_shadow .= $cabin_qode_options['button_box_shadow_shadow_size'].'px ';
    }
    if(isset($cabin_qode_options['button_box_shadow_shadow_color']) && $cabin_qode_options['button_box_shadow_shadow_color'] !== '') {
        $box_shadow .= $cabin_qode_options['button_box_shadow_shadow_color'];
    }
    else {
        $box_shadow .= '#000000';
    }
    $default_btn_styles .= 'box-shadow: ' . esc_attr($box_shadow) . ';';
}

//print default button styles
if($default_btn_styles !== '') {
    ?>
    .qbutton,
    .qbutton.medium,
    #submit_comment,
    .load_more a,
    .blog_load_more_button a,
    .post-password-form input[type='submit'] {
    <?php echo esc_attr($default_btn_styles); ?>
    }
    <?php
}

//generate default button hover styles
if(isset($cabin_qode_options['button_title_hovercolor']) && $cabin_qode_options['button_title_hovercolor'] !== '') {
    $default_btn_hover_styles .= 'color: '.esc_attr($cabin_qode_options['button_title_hovercolor']).';';
}

if(isset($cabin_qode_options['button_backgroundcolor_hover']) && $cabin_qode_options['button_backgroundcolor_hover'] !== '') {
    $default_btn_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['button_backgroundcolor_hover']).';';
}

if(isset($cabin_qode_options['button_border_hover_color']) && $cabin_qode_options['button_border_hover_color'] !== '') {
    $default_btn_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['button_border_hover_color']).';';
}

//print default button hover styles
if($default_btn_hover_styles !== '') {
    ?>
    .qbutton:hover,
    .qbutton:not(.white):hover,
    .qbutton.medium:hover,
    #submit_comment:hover,
    .load_more a:hover,
    .blog_load_more_button a:hover,
    .post-password-form input[type='submit']:hover {
    <?php echo esc_attr($default_btn_hover_styles); ?>
    }
    <?php
}

//generate small button styles
if(isset($cabin_qode_options['small_button_fontsize']) && $cabin_qode_options['small_button_fontsize'] !== '') {
    $small_btn_styles .= 'font-size: '.esc_attr($cabin_qode_options['small_button_fontsize']).'px;';
}

if(isset($cabin_qode_options['small_button_lineheight']) && $cabin_qode_options['small_button_lineheight'] !== '') {
    $small_btn_styles .= 'line-height: '.esc_attr($cabin_qode_options['small_button_lineheight']).'px;';
    $small_btn_styles .= 'height: '.esc_attr($cabin_qode_options['small_button_lineheight']).'px;';?>
    .qbutton.small .button_icon {
    width: <?php echo esc_attr($cabin_qode_options['small_button_lineheight']).'px;';?>;
    }
<?php }

if(isset($cabin_qode_options['small_button_fontweight']) && $cabin_qode_options['small_button_fontweight'] !== '') {
    $small_btn_styles .= 'font-weight: '.esc_attr($cabin_qode_options['small_button_fontweight']).';';
}

if(isset($cabin_qode_options['small_button_padding']) && $cabin_qode_options['small_button_padding'] !== '') {
    $small_btn_styles .= 'padding-left: '.esc_attr($cabin_qode_options['small_button_padding']).'px;';
    $small_btn_styles .= 'padding-right: '.esc_attr($cabin_qode_options['small_button_padding']).'px;';
}

if(isset($cabin_qode_options['small_button_border_radius']) && $cabin_qode_options['small_button_border_radius'] !== '') {
    $small_btn_styles .= '-webkit-border-radius: '.esc_attr($cabin_qode_options['small_button_border_radius']).'px;';
    $small_btn_styles .= '-moz-border-radius: '.esc_attr($cabin_qode_options['small_button_border_radius']).'px;';
    $small_btn_styles .= 'border-radius: '.esc_attr($cabin_qode_options['small_button_border_radius']).'px;';
}

//print small button styles
if($small_btn_styles !== '') {
    ?>
    .qbutton.small{
    <?php echo esc_attr($small_btn_styles); ?>
    }
    <?php
}

//generate large button styles
if(isset($cabin_qode_options['large_button_fontsize']) && $cabin_qode_options['large_button_fontsize'] !== '') {
    $large_btn_styles .= 'font-size: '.esc_attr($cabin_qode_options['large_button_fontsize']).'px;';
}

if(isset($cabin_qode_options['large_button_lineheight']) && $cabin_qode_options['large_button_lineheight'] !== '') {
    $large_btn_styles .= 'line-height: '.esc_attr($cabin_qode_options['large_button_lineheight']).'px;';
    $large_btn_styles .= 'height: '.esc_attr($cabin_qode_options['large_button_lineheight']).'px;';?>
    .qbutton.large .button_icon {
    width: <?php echo esc_attr($cabin_qode_options['large_button_lineheight']).'px;';?>;
    }
    <?php
}

if(isset($cabin_qode_options['large_button_fontweight']) && $cabin_qode_options['large_button_fontweight'] !== '') {
    $large_btn_styles .= 'font-weight: '.esc_attr($cabin_qode_options['large_button_fontweight']).';';
}

if(isset($cabin_qode_options['large_button_padding']) && $cabin_qode_options['large_button_padding'] !== '') {
    $large_btn_styles .= 'padding-left: '.esc_attr($cabin_qode_options['large_button_padding']).'px;';
    $large_btn_styles .= 'padding-right: '.esc_attr($cabin_qode_options['large_button_padding']).'px;';
}

if(isset($cabin_qode_options['large_button_border_radius']) && $cabin_qode_options['large_button_border_radius'] !== '') {
    $large_btn_styles .= '-webkit-border-radius: '.esc_attr($cabin_qode_options['large_button_border_radius']).'px;';
    $large_btn_styles .= '-moz-border-radius: '.esc_attr($cabin_qode_options['large_button_border_radius']).'px;';
    $large_btn_styles .= 'border-radius: '.esc_attr($cabin_qode_options['large_button_border_radius']).'px;';
}

//print large button styles
if($large_btn_styles !== '') {
    ?>
    .qbutton.large {
    <?php echo esc_attr($large_btn_styles); ?>
    }
    <?php
}

//generate extra large button styles
if(isset($cabin_qode_options['big_large_button_fontsize']) && $cabin_qode_options['big_large_button_fontsize'] !== '') {
    $extra_large_btn_styles .= 'font-size: '.esc_attr($cabin_qode_options['big_large_button_fontsize']).'px;';
}

if(isset($cabin_qode_options['big_large_button_lineheight']) && $cabin_qode_options['big_large_button_lineheight'] !== '') {
    $extra_large_btn_styles .= 'line-height: '.esc_attr($cabin_qode_options['big_large_button_lineheight']).'px;';
    $extra_large_btn_styles .= 'height: '.esc_attr($cabin_qode_options['big_large_button_lineheight']).'px;';?>
    .qbutton.big_large .button_icon {
    width: <?php echo esc_attr($cabin_qode_options['big_large_button_lineheight']).'px;';?>;
    }
    <?php
}

if(isset($cabin_qode_options['big_large_button_fontweight']) && $cabin_qode_options['big_large_button_fontweight'] !== '') {
    $extra_large_btn_styles .= 'font-weight: '.esc_attr($cabin_qode_options['big_large_button_fontweight']).';';
}

if(isset($cabin_qode_options['big_large_button_padding']) && $cabin_qode_options['big_large_button_padding'] !== '') {
    $extra_large_btn_styles .= 'padding-left: '.esc_attr($cabin_qode_options['big_large_button_padding']).'px;';
    $extra_large_btn_styles .= 'padding-right: '.esc_attr($cabin_qode_options['big_large_button_padding']).'px;';
}

if(isset($cabin_qode_options['big_large_button_border_radius']) && $cabin_qode_options['big_large_button_border_radius'] !== '') {
    $extra_large_btn_styles .= '-webkit-border-radius: '.esc_attr($cabin_qode_options['big_large_button_border_radius']).'px;';
    $extra_large_btn_styles .= '-moz-border-radius: '.esc_attr($cabin_qode_options['big_large_button_border_radius']).'px;';
    $extra_large_btn_styles .= 'border-radius: '.esc_attr($cabin_qode_options['big_large_button_border_radius']).'px;';
}

//print extra large button styles
if($extra_large_btn_styles !== '') {
    ?>
    .qbutton.big_large,
    .qbutton.big_large_full_width,
    .wpb_row .qbutton.big_large_full_width {
    <?php echo esc_attr($extra_large_btn_styles); ?>
    }
    <?php
}

//generate white button styles
if(isset($cabin_qode_options['button_white_border_color']) && $cabin_qode_options['button_white_border_color'] !== '') {
    $white_btn_styles .= 'border-color: '.esc_attr($cabin_qode_options['button_white_border_color']).';';
}

if(isset($cabin_qode_options['button_white_text_color']) && $cabin_qode_options['button_white_text_color'] !== '') {
    $white_btn_styles .= 'color: '.esc_attr($cabin_qode_options['button_white_text_color']).';';
}

if(isset($cabin_qode_options['button_white_background_color']) && $cabin_qode_options['button_white_background_color'] !== '') {
    $white_btn_styles .= 'background-color: '.esc_attr($cabin_qode_options['button_white_background_color']).';';
}

//print white button styles
if($white_btn_styles !== '') {
    ?>
    .qbutton.white {
    <?php echo esc_attr($white_btn_styles); ?>
    }
    <?php
}

//generate white button hover styles
if(isset($cabin_qode_options['button_white_border_color_hover']) && $cabin_qode_options['button_white_border_color_hover'] !== '') {
    $white_btn_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['button_white_border_color_hover']).';';
}

if(isset($cabin_qode_options['button_white_text_color_hover']) && $cabin_qode_options['button_white_text_color_hover'] !== '') {
    $white_btn_hover_styles .= 'color: '.esc_attr($cabin_qode_options['button_white_text_color_hover']).';';
}

if(isset($cabin_qode_options['button_white_background_color_hover']) && $cabin_qode_options['button_white_background_color_hover'] !== '') {
    $white_btn_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['button_white_background_color_hover']).';';
}

if($white_btn_hover_styles !== '') {
    ?>
    .qbutton.white:hover {
    <?php echo esc_attr($white_btn_hover_styles); ?>
    }
    <?php
}
//generate solid button styles
if(isset($cabin_qode_options['button_solid_border_color']) && $cabin_qode_options['button_solid_border_color'] !== '') {
    $solid_btn_styles .= 'border-color: '.esc_attr($cabin_qode_options['button_solid_border_color']).';';
}

if(isset($cabin_qode_options['button_solid_text_color']) && $cabin_qode_options['button_solid_text_color'] !== '') {
    $solid_btn_styles .= 'color: '.esc_attr($cabin_qode_options['button_solid_text_color']).';';
}

if(isset($cabin_qode_options['button_solid_background_color']) && $cabin_qode_options['button_solid_background_color'] !== '') {
    $solid_btn_styles .= 'background-color: '.esc_attr($cabin_qode_options['button_solid_background_color']).';';
}
//print solid button styles
if($solid_btn_styles !== '') {
    ?>
    .qbutton.solid_color {
    <?php echo esc_attr($solid_btn_styles); ?>
    }
    <?php
}

//generate solid button hover styles
if(isset($cabin_qode_options['button_solid_border_color_hover']) && $cabin_qode_options['button_solid_border_color_hover'] !== '') {
    $solid_btn_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['button_solid_border_color_hover']).';';
}

if(isset($cabin_qode_options['button_solid_text_color_hover']) && $cabin_qode_options['button_solid_text_color_hover'] !== '') {
    $solid_btn_hover_styles .= 'color: '.esc_attr($cabin_qode_options['button_solid_text_color_hover']).';';
}

if(isset($cabin_qode_options['button_solid_background_color_hover']) && $cabin_qode_options['button_solid_background_color_hover'] !== '') {
    $solid_btn_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['button_solid_background_color_hover']).';';
}

if($solid_btn_hover_styles !== '') {
    ?>
    .qbutton.solid_color:hover {
    <?php echo esc_attr($solid_btn_hover_styles); ?>
    }
    <?php
}
/* ==========================================================================
   End of button custom styles
   ========================================================================== */
/* ==========================================================================
   Back to top styles
   ========================================================================== */

?>
<?php

$q_back_to_top_button_styles = '';
// default values
$default_btp_height = 46;
$default_btp_border = 1;

$q_back_to_top_styles = '';

if(isset($cabin_qode_options['back_to_top_arrow_size']) && ($cabin_qode_options['back_to_top_arrow_size'] !== '')) {
    $q_back_to_top_styles .= 'font-size: '.$cabin_qode_options['back_to_top_arrow_size'].'px;';
}

if(isset($cabin_qode_options['back_to_top_arrow_color']) && !empty($cabin_qode_options['back_to_top_arrow_color'])) {
    $q_back_to_top_styles .= 'color: '.$cabin_qode_options['back_to_top_arrow_color'].';';
}

if(isset($cabin_qode_options['back_to_top_height']) && ($cabin_qode_options['back_to_top_height'] !== '')) {
    $q_back_to_top_styles .= 'height: '.$cabin_qode_options['back_to_top_height'].'px;';
    $default_btp_height = $cabin_qode_options['back_to_top_height'];
}

if(isset($cabin_qode_options['back_to_top_width']) && ($cabin_qode_options['back_to_top_width'] !== '')) {
    $q_back_to_top_styles .= 'width: '.$cabin_qode_options['back_to_top_width'].'px;';
}

if(isset($cabin_qode_options['back_to_top_border_radius']) && ($cabin_qode_options['back_to_top_border_radius'] !== '')) {
    $q_back_to_top_styles .= 'border-radius: '.$cabin_qode_options['back_to_top_border_radius'].'px;';
}

if(isset($cabin_qode_options['back_to_top_background_color']) && !empty($cabin_qode_options['back_to_top_background_color'])) {
    if(isset($cabin_qode_options['back_to_top_background_transparency']) && ($cabin_qode_options['back_to_top_background_transparency'] !== '')) {
        $back_to_top_background_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['back_to_top_background_color']);
        $q_back_to_top_styles .= 'background-color: rgba('.$back_to_top_background_color_rgb[0].','.$back_to_top_background_color_rgb[1].','.$back_to_top_background_color_rgb[2].','.$cabin_qode_options['back_to_top_background_transparency'].');';

    }
    else{
        $q_back_to_top_styles .= 'background-color: '.$cabin_qode_options['back_to_top_background_color'].';';
    }

}
if(isset($cabin_qode_options['back_to_top_border_width']) && ($cabin_qode_options['back_to_top_border_width'] !== '')) {
    $q_back_to_top_styles .= 'border-width: '.$cabin_qode_options['back_to_top_border_width'].'px;';
    $default_btp_border = $cabin_qode_options['back_to_top_border_width'];
}

if((isset($cabin_qode_options['back_to_top_border_width']) && ($cabin_qode_options['back_to_top_border_width'] !== ''))
    ||(isset($cabin_qode_options['back_to_top_height']) && ($cabin_qode_options['back_to_top_height'] !== ''))) {
    $q_back_to_top_styles .= 'line-height: '.esc_attr(($default_btp_height - 2*$default_btp_border)).'px;';

}

if(isset($cabin_qode_options['back_to_top_border_color']) && !empty($cabin_qode_options['back_to_top_border_color'])) {
    if(isset($cabin_qode_options['back_to_top_border_transparency']) && ($cabin_qode_options['back_to_top_border_transparency'] !== '')) {
        $back_to_top_border_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['back_to_top_border_color']);
        $q_back_to_top_styles .= 'border-color: rgba('.esc_attr($back_to_top_border_color_rgb[0].','.$back_to_top_border_color_rgb[1].','.$back_to_top_border_color_rgb[2].','.$cabin_qode_options['back_to_top_border_transparency']).');';

    }
    else{
        $q_back_to_top_styles .= 'border-color: '.esc_attr($cabin_qode_options['back_to_top_border_color']).';';
    }
}

if($q_back_to_top_styles !== '') {
    ?>
    #back_to_top > span{
    <?php echo esc_attr($q_back_to_top_styles); ?>
    }
    <?php
} ?>

<?php
if((isset($cabin_qode_options['back_to_top_width']) && ($cabin_qode_options['back_to_top_width'] !== ''))
    ||(isset($cabin_qode_options['back_to_top_height']) && ($cabin_qode_options['back_to_top_height'] !== ''))
    ||(isset($cabin_qode_options['back_to_top_button_margin_bottom']) && ($cabin_qode_options['back_to_top_button_margin_bottom'] !== ''))) {  ?>
    #back_to_top {
    <?php   if(isset($cabin_qode_options['back_to_top_width']) && ($cabin_qode_options['back_to_top_width'] !== '')) {
        echo 'width: '.esc_attr($cabin_qode_options['back_to_top_width']).'px;';
    }
    if(isset($cabin_qode_options['back_to_top_height']) && ($cabin_qode_options['back_to_top_height'] !== '')) {
        echo 'height: '.esc_attr($cabin_qode_options['back_to_top_height']).'px;';
    }
    if(isset($cabin_qode_options['back_to_top_button_margin_bottom']) && ($cabin_qode_options['back_to_top_button_margin_bottom'] !== '')) {
        echo 'bottom: '.esc_attr($cabin_qode_options['back_to_top_button_margin_bottom']).'px;';
    }
    ?>
    }
<?php } ?>

<?php
$q_back_to_top_hover_styles = '';

if(isset($cabin_qode_options['back_to_top_arrow_hover_color']) && !empty($cabin_qode_options['back_to_top_arrow_hover_color'])) {
    $q_back_to_top_hover_styles .= 'color: '.esc_attr($cabin_qode_options['back_to_top_arrow_hover_color']).';';
}

if(isset($cabin_qode_options['back_to_top_background_hover_color']) && !empty($cabin_qode_options['back_to_top_background_hover_color'])) {
    if(isset($cabin_qode_options['back_to_top_background_hover_transparency']) && ($cabin_qode_options['back_to_top_background_hover_transparency'] !== '')) {
        $back_to_top_background_hover_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['back_to_top_background_hover_color']);
        $q_back_to_top_hover_styles .= 'background-color: rgba('.esc_attr($back_to_top_background_hover_color_rgb[0].','.$back_to_top_background_hover_color_rgb[1].','.$back_to_top_background_hover_color_rgb[2].','.$cabin_qode_options['back_to_top_background_hover_transparency']).');';

    }
    else{
        $q_back_to_top_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['back_to_top_background_hover_color']).';';
    }
}

if(isset($cabin_qode_options['back_to_top_border_hover_color']) && !empty($cabin_qode_options['back_to_top_border_hover_color'])) {
    if(isset($cabin_qode_options['back_to_top_border_hover_transparency']) && ($cabin_qode_options['back_to_top_border_hover_transparency'] !== '')) {
        $back_to_top_border_hover_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['back_to_top_border_hover_color']);
        $q_back_to_top_hover_styles .= 'border-color: rgba('.esc_attr($back_to_top_border_hover_color_rgb[0].','.$back_to_top_border_hover_color_rgb[1].','.$back_to_top_border_hover_color_rgb[2].','.$cabin_qode_options['back_to_top_border_hover_transparency']).');';

    }
    else{
        $q_back_to_top_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['back_to_top_border_hover_color']).';';
    }
}

if($q_back_to_top_hover_styles !== '') {
    ?>
    #back_to_top:hover > span{
    <?php echo esc_attr($q_back_to_top_hover_styles); ?>
    }
    <?php
}
?>


<?php
$back_to_top_text_styles = '';
if(isset($cabin_qode_options['back_to_top_type']) && ($cabin_qode_options['back_to_top_type'] == 'text')){
    if(isset($cabin_qode_options['back_to_top_text']) && ($cabin_qode_options['back_to_top_text'] !== '')){
        $back_to_top_text_styles .= 'font-family: Open Sans, sans-serif;';
    }

    if(isset($cabin_qode_options['back_to_top_text_color']) && !empty($cabin_qode_options['back_to_top_text_color'])) {
        $back_to_top_text_styles .= 'color: '.esc_attr($cabin_qode_options['back_to_top_text_color']).';';
    }

    if(isset($cabin_qode_options['back_to_top_text_fontsize']) && ($cabin_qode_options['back_to_top_text_fontsize'] !== '')){
        $back_to_top_text_styles .= 'font-size: '.esc_attr($cabin_qode_options['back_to_top_text_fontsize']).'px;';
    }
    if(isset($cabin_qode_options['back_to_top_text_letterspacing']) && ($cabin_qode_options['back_to_top_text_letterspacing'] !== '')){
        $back_to_top_text_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['back_to_top_text_letterspacing']).'px;';
    }
    if(isset($cabin_qode_options['back_to_top_text_fontfamily']) && $cabin_qode_options['back_to_top_text_fontfamily'] !== '-1') {
        $back_to_top_text_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['back_to_top_text_fontfamily']).', sans-serif;';
    }
    if(isset($cabin_qode_options['back_to_top_text_texttransform']) && ($cabin_qode_options['back_to_top_text_texttransform'] !== '')){
        $back_to_top_text_styles .= 'text-transform: '.esc_attr($cabin_qode_options['back_to_top_text_texttransform']).';';
    }
    if(isset($cabin_qode_options['back_to_top_text_fontstyle']) && ($cabin_qode_options['back_to_top_text_fontstyle'] !== '')){
        $back_to_top_text_styles .= 'font-style: '.esc_attr($cabin_qode_options['back_to_top_text_fontstyle']).';';
    }
    if(isset($cabin_qode_options['back_to_top_text_fontweight']) && ($cabin_qode_options['back_to_top_text_fontweight'] !== '')){
        $back_to_top_text_styles .= 'font-weight: '.esc_attr($cabin_qode_options['back_to_top_text_fontweight']).';';
    }
    if(isset($cabin_qode_options['back_to_top_text_lineheight']) && ($cabin_qode_options['back_to_top_text_lineheight'] !== '')){
        $back_to_top_text_styles .= 'line-height: '.esc_attr($cabin_qode_options['back_to_top_text_lineheight']).'px;';
    }
    if($back_to_top_text_styles !== '') {
        ?>
        #back_to_top > span .arrow_carrot-up:before{
        <?php echo esc_attr($back_to_top_text_styles); ?>
        display: block;
        <?php if(isset($cabin_qode_options['back_to_top_text']) && ($cabin_qode_options['back_to_top_text'] !== '')) {
            echo 'content: "'.esc_attr($cabin_qode_options['back_to_top_text']).'";';
        } ?>
        }
        <?php
    }
    ?>

    <?php
    if(isset($cabin_qode_options['back_to_top_text_hover_color']) && ($cabin_qode_options['back_to_top_text_hover_color'] !== '')){?>
        #back_to_top > span:hover .arrow_carrot-up:before{
        color: <?php echo esc_attr($cabin_qode_options['back_to_top_text_hover_color']); ?>;
        }
        <?php
    }
}

/* ==========================================================================
End of Back to top styles
========================================================================== */
?>

<?php
$q_navigation_styles = '';
$temp_rgb_color = '';
$temp_transparency_arrow = '';
$temp_transparency = '';
$temp_transparency_border = '';
$q_navigation_color_important = '';
$q_navigation_line_height_important = '';
$q_navigation_border_color_important = '';
$q_navigation_border_width_important = '';
$q_navigation_border_style_important = '';
if(isset($cabin_qode_options['navigation_button_width']) && ($cabin_qode_options['navigation_button_width'] !== '')) {
    $q_navigation_styles .= 'width: '.esc_attr($cabin_qode_options['navigation_button_width']).'px;';
}
if(isset($cabin_qode_options['navigation_button_height']) && ($cabin_qode_options['navigation_button_height'] !== '')) {
    $q_navigation_styles .= 'height: '.esc_attr($cabin_qode_options['navigation_button_height']).'px;';
    $q_navigation_styles .= 'margin-top: -'.esc_attr(($cabin_qode_options['navigation_button_height']/2)).'px;';
    $q_navigation_styles .= 'line-height: '.esc_attr($cabin_qode_options['navigation_button_height']).'px;';
    $q_navigation_line_height_important .= 'line-height: '.esc_attr($cabin_qode_options['navigation_button_height']).'px!important;';
}
if(isset($cabin_qode_options['navigation_arrow_size']) && ($cabin_qode_options['navigation_arrow_size'] !== '')) {
    $q_navigation_styles .= 'font-size: '.esc_attr($cabin_qode_options['navigation_arrow_size']).'px;';
}
if(isset($cabin_qode_options['navigation_arrow_color']) && !empty($cabin_qode_options['navigation_arrow_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['navigation_arrow_color']);
    if(isset($cabin_qode_options['navigation_arrow_transparency']) && ($cabin_qode_options['navigation_arrow_transparency']!== '')) {
        $temp_transparency_arrow = $cabin_qode_options['navigation_arrow_transparency'];
    }
    else{
        $temp_transparency_arrow = 1;
    }
    $q_navigation_styles .= 'color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_arrow.');';
    $q_navigation_color_important = 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_arrow).')!important;';
}

if(isset($cabin_qode_options['navigation_background_color']) && !empty($cabin_qode_options['navigation_background_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['navigation_background_color']);
    if(isset($cabin_qode_options['navigation_background_transparency']) && ($cabin_qode_options['navigation_background_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['navigation_background_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $q_navigation_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency).');';
}

if(isset($cabin_qode_options['navigation_border_color']) && !empty($cabin_qode_options['navigation_border_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['navigation_border_color']);
    if(isset($cabin_qode_options['navigation_border_transparency']) && ($cabin_qode_options['navigation_border_transparency']!== '')) {
        $temp_transparency_border = $cabin_qode_options['navigation_border_transparency'];
    }
    else{
        $temp_transparency_border = 1;
    }
    $q_navigation_styles .= 'border-color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_border.'); ';
    $q_navigation_border_color_important .= 'border-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_border).')!important; ';
}

if(isset($cabin_qode_options['navigation_border_width']) && ($cabin_qode_options['navigation_border_width'] !== '')) {
    $q_navigation_styles .= 'border-width:'.esc_attr($cabin_qode_options['navigation_border_width']).'px; ';
    $q_navigation_styles .= 'border-style:solid;';
    $q_navigation_border_width_important .= 'border-width:'.esc_attr($cabin_qode_options['navigation_border_width']).'px!important; ';
    $q_navigation_border_style_important .= 'border-style:solid !important;';
}

if(isset($cabin_qode_options['navigation_border_radius']) && ($cabin_qode_options['navigation_border_radius'] !== '')) {
    $q_navigation_styles .= 'border-radius:'.esc_attr($cabin_qode_options['navigation_border_radius']).'px;';
}


if($q_navigation_styles !== '') {
    ?>
    .ls-noskin .ls-nav-prev,
    .ls-noskin .ls-nav-next,
    .carousel-control .prev_nav,
    .carousel-control .next_nav{
    <?php echo esc_attr($q_navigation_styles); ?>
    }

    <?php
    if($q_navigation_line_height_important != '' || $q_navigation_border_color_important != '' || $q_navigation_border_width_important != '' || $q_navigation_border_style_important != ''){ ?>
        .ls-noskin .ls-nav-prev,
        .ls-noskin .ls-nav-next{
        <?php
        if($q_navigation_line_height_important != ''){echo esc_attr($q_navigation_line_height_important); }
        if($q_navigation_border_color_important != ''){echo esc_attr($q_navigation_border_color_important); }
        if($q_navigation_border_width_important != ''){echo esc_attr($q_navigation_border_width_important); }
        if($q_navigation_border_style_important != ''){echo esc_attr($q_navigation_border_style_important); }
        ?>
        }
        <?php
    }
    ?>

    <?php if((isset($cabin_qode_options['navigation_button_width']) && ($cabin_qode_options['navigation_button_width'] !== '')) || (isset($cabin_qode_options['navigation_button_height']) && ($cabin_qode_options['navigation_button_height'] !== ''))) {

        if(isset($cabin_qode_options['navigation_border_width']) && ($cabin_qode_options['navigation_border_width'] !== '')) {
            $border_width_add = $cabin_qode_options['navigation_border_width'];
        }else{
            $border_width_add = 1; // 1 is default border width
        }

        ?>

        .vertical_menu_enabled.vertical_menu_transparency .carousel-control.left,
        .vertical_menu_enabled.vertical_menu_transparency .carousel-control.right,
        .navigation_bottom_right .carousel-control.left,
        .navigation_bottom_right .carousel-control.right,
        .navigation_bottom_left .carousel-control.left,
        .navigation_bottom_left .carousel-control.right{
        <?php if($cabin_qode_options['navigation_button_width'] !== ''){ ?>
            width: <?php echo esc_attr($cabin_qode_options['navigation_button_width']) + $border_width_add*2; // ?>px;
        <?php } ?>
        <?php if($cabin_qode_options['navigation_button_height'] !== ''){ ?>
            height: <?php echo esc_attr($cabin_qode_options['navigation_button_height']) + $border_width_add*2; ?>px;
        <?php } ?>
        }
        <?php
    }
    ?>

    <?php if($cabin_qode_options['navigation_button_width'] !== ''){ ?>
        .navigation_bottom_right.content_next_to_arrows .carousel-inner .slider_content,
        .navigation_bottom_left.content_next_to_arrows .carousel-inner .slider_content{
        right: <?php echo esc_attr($cabin_qode_options['navigation_button_width'])*2 + 160 + $border_width_add*4; //160 = 100 from edge + 20 between arrows + 10 on the right from arrows + 30 cotnent from arrows, $border_width_add*4 because of two arrows ?>px !important;
        }

        .navigation_bottom_left.content_next_to_arrows .carousel-inner .slider_content{
        left: <?php echo esc_attr($cabin_qode_options['navigation_button_width'])*2 + 160 + $border_width_add*4; //160 = 100 from edge + 20 between arrows + 10 on the right from arrows + 30 cotnent from arrows, $border_width_add*4 because of two arrows ?>px !important;
        }
    <?php } ?>

    <?php if($cabin_qode_options['navigation_button_height'] !== ''){ ?>
        .vertical_menu_enabled .carousel-control .prev_nav,
        .vertical_menu_enabled .carousel-control .next_nav{
        margin-top: -<?php echo esc_attr($cabin_qode_options['navigation_button_width'])/2; ?>px !important;
        }
    <?php } ?>

    <?php
}
?>

<?php if(isset($cabin_qode_options['qs_enable_navigation_custom_cursor']) && ($cabin_qode_options['qs_enable_navigation_custom_cursor']=="yes")) { ?>

    div.section{
    z-index: 11; /*because slider z-index is 10 and slider custom image cursor needs to disappear when hovering section
    problem with angled section */
    }

    <?php if(isset($cabin_qode_options['cursor_image_left_right_area_size']) && ($cabin_qode_options['cursor_image_left_right_area_size'])!=='') { ?>
        .q_slider .has_custom_cursor .carousel-control{
        width:<?php echo esc_attr($cabin_qode_options['cursor_image_left_right_area_size']); ?>%;
        }
    <?php } ?>


    .q_slider .has_custom_cursor .carousel-control.left,
    .q_slider .has_custom_cursor .carousel-control.left:active{
    cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-normal.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-normal.cur), auto;
    }
    .q_slider .has_custom_cursor .carousel-control.right,
    .q_slider .has_custom_cursor .carousel-control.right:active{
    cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-normal.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-normal.cur), auto;
    }

    .q_slider .has_custom_cursor .carousel-control.left.light,
    .q_slider .has_custom_cursor .carousel-control.left.light:active{
    cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-light.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-light.cur), auto;
    }
    .q_slider .has_custom_cursor .carousel-control.right.light,
    .q_slider .has_custom_cursor .carousel-control.right.light:active{
    cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-light.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-light.cur), auto;
    }

    .q_slider .has_custom_cursor .carousel-control.left.dark,
    .q_slider .has_custom_cursor .carousel-control.left.dark:active{
    cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-dark.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-dark.cur), auto;
    }
    .q_slider .has_custom_cursor .carousel-control.right.dark,
    .q_slider .has_custom_cursor .carousel-control.right.dark:active{
    cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-dark.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-dark.cur), auto;
    }


    <?php if(isset($cabin_qode_options['cursor_image_left_normal']) && !empty($cabin_qode_options['cursor_image_left_normal'])) { ?>
        .q_slider .has_custom_cursor .carousel-control.left,
        .q_slider .has_custom_cursor .carousel-control.left:active{
        cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_left_normal']); ?>), auto;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['cursor_image_right_normal']) && !empty($cabin_qode_options['cursor_image_right_normal'])) { ?>
        .q_slider .has_custom_cursor .carousel-control.right,
        .q_slider .has_custom_cursor .carousel-control.right:active{
        cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_right_normal']); ?>), auto;
        }
    <?php } ?>


    <?php if(isset($cabin_qode_options['cursor_image_left_light']) && !empty($cabin_qode_options['cursor_image_left_light'])) { ?>
        .q_slider .has_custom_cursor .carousel-control.left.light,
        .q_slider .has_custom_cursor .carousel-control.left.light:active{
        cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_left_light']); ?>), auto;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['cursor_image_right_light']) && !empty($cabin_qode_options['cursor_image_right_light'])) { ?>
        .q_slider .has_custom_cursor .carousel-control.right.light,
        .q_slider .has_custom_cursor .carousel-control.right.light:active{
        cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_right_light']); ?>), auto;
        }
    <?php } ?>


    <?php if(isset($cabin_qode_options['cursor_image_left_dark']) && !empty($cabin_qode_options['cursor_image_left_dark'])) { ?>
        .q_slider .has_custom_cursor .carousel-control.left.dark,
        .q_slider .has_custom_cursor .carousel-control.left.dark:active{
        cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_left_dark']); ?>), auto;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['cursor_image_right_dark']) && !empty($cabin_qode_options['cursor_image_right_dark'])) { ?>
        .q_slider .has_custom_cursor .carousel-control.right.dark,
        .q_slider .has_custom_cursor .carousel-control.right.dark:active{
        cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_right_dark']); ?>), auto;
        }
    <?php } ?>



    <?php if(isset($cabin_qode_options['qs_enable_navigation_custom_cursor_grab']) && ($cabin_qode_options['qs_enable_navigation_custom_cursor_grab']=="yes")) { ?>

        .q_slider .has_custom_cursor{
        cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-normal.png), url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-normal.cur), auto;
        }
        .q_slider .has_custom_cursor .item.light{
        cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-light.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-light.cur), auto;
        }

        .q_slider .has_custom_cursor .item.dark{
        cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-dark.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-dark.cur), auto;
        }

        <?php if(isset($cabin_qode_options['cursor_image_grab_normal']) && !empty($cabin_qode_options['cursor_image_grab_normal'])) { ?>
            .q_slider .has_custom_cursor{
            cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_grab_normal']); ?>), auto;
            }
        <?php } ?>
        <?php if(isset($cabin_qode_options['cursor_image_grab_light']) && !empty($cabin_qode_options['cursor_image_grab_light'])) { ?>
            .q_slider .has_custom_cursor .item.light{
            cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_grab_light']); ?>), auto;
            }
        <?php } ?>
        <?php if(isset($cabin_qode_options['cursor_image_grab_dark']) && !empty($cabin_qode_options['cursor_image_grab_dark'])) { ?>
            .q_slider .has_custom_cursor .item.dark{
            cursor: url(<?php echo esc_attr($cabin_qode_options['cursor_image_grab_dark']); ?>), auto;
            }
        <?php } ?>


    <?php } ?>

<?php } ?>
<?php

/* ==========================================================================
CONTENT MENU styles
========================================================================== */
$content_menu_icon_styles = '';

if(isset($cabin_qode_options['content_menu_icon_color']) && $cabin_qode_options['content_menu_icon_color'] !== ''){
    $content_menu_icon_styles .= 'color: '.esc_attr($cabin_qode_options['content_menu_icon_color']).';';
}
if(isset($cabin_qode_options['content_menu_icon_size']) && $cabin_qode_options['content_menu_icon_size'] !== ''){
    $content_menu_icon_styles .= 'font-size: '.esc_attr($cabin_qode_options['content_menu_icon_size']).'px;';
}
if($content_menu_icon_styles !== '') {?>
    nav.content_menu ul li i,
    nav.content_menu .nav_select_menu ul li i{
    <?php echo esc_attr($content_menu_icon_styles); ?>
    }
<?php } ?>

<?php
$content_menu_icon_hover_styles = '';

if(isset($cabin_qode_options['content_menu_icon_hover_color']) && $cabin_qode_options['content_menu_icon_hover_color'] !== ''){
    $content_menu_icon_hover_styles .= 'color: '.esc_attr($cabin_qode_options['content_menu_icon_hover_color']).';';
}

if($content_menu_icon_hover_styles !== '') {?>
    nav.content_menu ul li:hover i,
    nav.content_menu .nav_select_menu ul li:hover i{
    <?php echo esc_attr($content_menu_icon_hover_styles); ?>
    }

<?php } ?>

<?php
$content_menu_text_styles = '';

if(isset($cabin_qode_options['content_menu_text_color']) && $cabin_qode_options['content_menu_text_color'] !== ''){
    $content_menu_text_styles .= 'color: '.esc_attr($cabin_qode_options['content_menu_text_color']).';';
}
if(isset($cabin_qode_options['content_menu_text_fontsize']) && $cabin_qode_options['content_menu_text_fontsize'] !== ''){
    $content_menu_text_styles .= 'font-size: '.esc_attr($cabin_qode_options['content_menu_text_fontsize']).'px;';
}
if(isset($cabin_qode_options['content_menu_text_lineheight']) && $cabin_qode_options['content_menu_text_lineheight'] !== ''){
    $content_menu_text_styles .= 'line-height: '.esc_attr($cabin_qode_options['content_menu_text_lineheight']).'px;';
}
if(isset($cabin_qode_options['content_menu_text_texttransform']) && $cabin_qode_options['content_menu_text_texttransform'] !== ''){
    $content_menu_text_styles .= 'text-transform: '.esc_attr($cabin_qode_options['content_menu_text_texttransform']).';';
}
if(isset($cabin_qode_options['content_menu_text_fontstyle']) && $cabin_qode_options['content_menu_text_fontstyle'] !== ''){
    $content_menu_text_styles .= 'font-style: '.esc_attr($cabin_qode_options['content_menu_text_fontstyle']).';';
}
if(isset($cabin_qode_options['content_menu_text_fontweight']) && $cabin_qode_options['content_menu_text_fontweight'] !== ''){
    $content_menu_text_styles .= 'font-weight: '.esc_attr($cabin_qode_options['content_menu_text_fontweight']).';';
}
if(isset($cabin_qode_options['content_menu_text_letterspacing']) && $cabin_qode_options['content_menu_text_letterspacing'] !== ''){
    $content_menu_text_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['content_menu_text_letterspacing']).'px;';
}
if(isset($cabin_qode_options['content_menu_text_google_fonts']) && $cabin_qode_options['content_menu_text_google_fonts'] !== '-1') {
    $content_menu_text_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['content_menu_text_google_fonts']).', sans-serif';
}

if($content_menu_text_styles !== '') {?>
    nav.content_menu ul li a span,
    nav.content_menu .nav_select_menu ul li a{
    <?php echo esc_attr($content_menu_text_styles); ?>
    }
<?php } ?>

<?php
$content_menu_text_hover_styles = '';

if(isset($cabin_qode_options['content_menu_text_hover_color']) && $cabin_qode_options['content_menu_text_hover_color'] !== ''){
    $content_menu_text_hover_styles .= 'color: '.esc_attr($cabin_qode_options['content_menu_text_hover_color']).';';
}

if($content_menu_text_hover_styles !== '') {?>
    nav.content_menu ul li:hover a span,
    nav.content_menu .nav_select_menu ul li:hover a{
    <?php echo esc_attr($content_menu_text_hover_styles); ?>
    }

<?php }
/* ==========================================================================
END OF CONTENT MENU styles
========================================================================== */
?>

<?php
$q_navigation_hover_styles = '';
$temp_hover_transparency = '';
$q_navigation_hover_border_color_important = '';
$q_navigation_hover_color_important = '';
if(isset($cabin_qode_options['navigation_arrow_hover_color']) && !empty($cabin_qode_options['navigation_arrow_hover_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['navigation_arrow_hover_color']);
    if(isset($cabin_qode_options['navigation_arrow_hover_transparency']) && ($cabin_qode_options['navigation_arrow_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['navigation_arrow_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_navigation_hover_styles .= 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
    $q_navigation_hover_color_important = 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).')!important;';

}
$temp_hover_transparency = '';
if(isset($cabin_qode_options['navigation_background_hover_color']) && !empty($cabin_qode_options['navigation_background_hover_color'])) {

    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['navigation_background_hover_color']);
    if(isset($cabin_qode_options['navigation_background_hover_transparency']) && ($cabin_qode_options['navigation_background_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['navigation_background_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_navigation_hover_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
}
$temp_hover_transparency = '';
if(isset($cabin_qode_options['navigation_border_hover_color']) && !empty($cabin_qode_options['navigation_border_hover_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['navigation_border_hover_color']);
    if(isset($cabin_qode_options['navigation_border_hover_transparency']) && ($cabin_qode_options['navigation_border_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['navigation_border_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_navigation_hover_styles .= 'border-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).')';
    $q_navigation_hover_border_color_important .= 'border-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).') !important;';
}
if($q_navigation_hover_styles !== '') {
    ?>
    .ls-noskin .ls-nav-prev:hover,
    .ls-noskin .ls-nav-next:hover,
    .carousel-control .prev_nav:hover,
    .carousel-control .next_nav:hover

    {
    <?php echo esc_attr($q_navigation_hover_styles); ?>
    }

    <?php
    if($q_navigation_hover_border_color_important != ''){ ?>
        .ls-noskin .ls-nav-prev:hover,
        .ls-noskin .ls-nav-next:hover{
        <?php echo esc_attr($q_navigation_hover_border_color_important); ?>
        }
    <?php } ?>

    <?php
}
?>

<?php

if(isset($cabin_qode_options['navigation_control_active_color']) && !empty($cabin_qode_options['navigation_control_active_color'])) { ?>
    .wpb_gallery .flexslider_slide .flex-control-paging li a.flex-active,
    .wpb_gallery .flexslider_fade .flex-control-paging li a.flex-active,
    .content_slider .flex-control-paging li a.flex-active,
    .blog_slider .blog_slider_pager a.selected{
    background-color: <?php echo esc_attr($cabin_qode_options['navigation_control_active_color'])?>;
    }
<?php }

$flexslider_navigation_styles = '';
if(isset($cabin_qode_options['navigation_control_color']) && !empty($cabin_qode_options['navigation_control_color'])) {
    $flexslider_navigation_styles .= 'background-color: '.esc_attr($cabin_qode_options['navigation_control_color']).';';
}
if(isset($cabin_qode_options['navigation_control_size']) && $cabin_qode_options['navigation_control_size'] !== '') {
    $flexslider_navigation_styles .= 'width: '.esc_attr($cabin_qode_options['navigation_control_size']).'px;';
    $flexslider_navigation_styles .= 'height: '.esc_attr($cabin_qode_options['navigation_control_size']).'px;';
}
if(isset($cabin_qode_options['navigation_control_border_radius']) && $cabin_qode_options['navigation_control_border_radius'] !== '') {
    $flexslider_navigation_styles .= 'border-radius: '.esc_attr($cabin_qode_options['navigation_control_border_radius']).'px;';
}
?>


<?php
if($flexslider_navigation_styles !== '') {
    ?>
    .wpb_gallery .flexslider_slide .flex-control-paging li a,
    .wpb_gallery .flexslider_fade .flex-control-paging li a,
    .content_slider .flex-control-paging li a,
    .blog_slider .blog_slider_pager a{
    <?php echo esc_attr($flexslider_navigation_styles); ?>
    }

<?php } ?>

<?php

$fs_navigation_styles = '';

if(isset($cabin_qode_options['fs_navigation_arrow_size']) && !empty($cabin_qode_options['fs_navigation_arrow_size'])) {
    $fs_navigation_styles .= 'font-size: '.esc_attr($cabin_qode_options['fs_navigation_arrow_size']).'px;';
}

if(isset($cabin_qode_options['fs_navigation_arrow_color']) && !empty($cabin_qode_options['fs_navigation_arrow_color'])) {
    $fs_navigation_styles .= 'color: '.esc_attr($cabin_qode_options['fs_navigation_arrow_color']).';';
}
if(isset($cabin_qode_options['fs_navigation_button_width']) && ($cabin_qode_options['fs_navigation_button_width'] !== '')) {
    $fs_navigation_styles .= 'width: '.esc_attr($cabin_qode_options['fs_navigation_button_width']).'px;';
}

if(isset($cabin_qode_options['fs_navigation_button_height']) && ($cabin_qode_options['fs_navigation_button_height'] !== '')) {
    $fs_navigation_styles .= 'height: '.esc_attr($cabin_qode_options['fs_navigation_button_height']).'px;';
    $fs_navigation_styles .= 'margin-top: -'.(esc_attr($cabin_qode_options['fs_navigation_button_height']/2)).'px;';
    $fs_navigation_styles .= 'line-height: '.esc_attr($cabin_qode_options['fs_navigation_button_height']).'px;';
}

if(isset($cabin_qode_options['fs_navigation_background_color']) && !empty($cabin_qode_options['fs_navigation_background_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['fs_navigation_background_color']);
    if(isset($cabin_qode_options['fs_navigation_background_transparency']) && ($cabin_qode_options['fs_navigation_background_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['fs_navigation_background_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $fs_navigation_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency).');';
}

if($fs_navigation_styles !== '') { ?>
    .full_screen_navigation_inner a{
    <?php echo esc_attr($fs_navigation_styles); ?>
    }
<?php } ?>

<?php
$fs_navigation_hover_styles = '';

if(isset($cabin_qode_options['fs_navigation_arrow_hover_color']) && !empty($cabin_qode_options['fs_navigation_arrow_hover_color'])) {
    $fs_navigation_hover_styles .= 'color: '.esc_attr($cabin_qode_options['fs_navigation_arrow_hover_color']).';';
}

$temp_hover_transparency = '';
if(isset($cabin_qode_options['fs_navigation_background_hover_color']) && !empty($cabin_qode_options['fs_navigation_background_hover_color'])) {

    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['fs_navigation_background_hover_color']);
    if(isset($cabin_qode_options['fs_navigation_background_hover_transparency']) && ($cabin_qode_options['fs_navigation_background_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['fs_navigation_background_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $fs_navigation_hover_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
}

if($fs_navigation_hover_styles !== '') { ?>
    .full_screen_navigation_inner a:hover{
    <?php echo esc_attr($fs_navigation_hover_styles); ?>
    }
<?php } ?>

<?php
$navigation_button_style = '';
if(isset($cabin_qode_options['navigation_show_button_shadow']) && $cabin_qode_options['navigation_show_button_shadow'] == 'yes') {
    $navigation_button_h_shadow = '1';
    if(isset($cabin_qode_options['navigation_button_h_shadow']) && $cabin_qode_options['navigation_button_h_shadow'] !== '') {
        $navigation_button_h_shadow = $cabin_qode_options['navigation_button_h_shadow'];
    }

    $navigation_button_v_shadow = '1';
    if(isset($cabin_qode_options['navigation_button_v_shadow']) && $cabin_qode_options['navigation_button_v_shadow'] !== '') {
        $navigation_button_v_shadow = $cabin_qode_options['navigation_button_v_shadow'];
    }

    $navigation_button_blur = '1';
    if(isset($cabin_qode_options['navigation_button_blur']) && $cabin_qode_options['navigation_button_blur'] !== '') {
        $navigation_button_blur = $cabin_qode_options['navigation_button_blur'];
    }

    $navigation_button_spread = '1';
    if(isset($cabin_qode_options['navigation_button_spread']) && $cabin_qode_options['navigation_button_spread'] !== '') {
        $navigation_button_spread = $cabin_qode_options['navigation_button_spread'];
    }

    $navigation_button_shadow_color = '#afafaf';
    if(isset($cabin_qode_options['navigation_button_shadow_color']) && $cabin_qode_options['navigation_button_shadow_color'] !== '') {
        $navigation_button_color = $cabin_qode_options['navigation_button_shadow_color'];
    }

    $navigation_button_style = 'box-shadow: '.esc_attr($navigation_button_h_shadow.'px '.$navigation_button_v_shadow.'px '.$navigation_button_blur.'px '.$navigation_button_spread.'px '.$navigation_button_color).';';
    if($navigation_button_style != '') { ?>
        .wpb_layerslider_element .ls-noskin .ls-nav-prev,
        .wpb_layerslider_element .ls-noskin .ls-nav-next,
        .q_slider .carousel-control .prev_nav,
        .q_slider .carousel-control .next_nav{
        <?php echo esc_attr($navigation_button_style); ?>
        }
    <?php } }?>


<?php
if(isset($cabin_qode_options['navigation_button_position']) && ($cabin_qode_options['navigation_button_position'] !== "")) { ?>
    .wpb_layerslider_element .ls-noskin .ls-nav-prev,
    .carousel-control .prev_nav{
    left: <?php echo esc_attr($cabin_qode_options['navigation_button_position']); ?>px;
    }
    .wpb_layerslider_element .ls-noskin .ls-nav-next,
    .carousel-control .next_nav{
    right: <?php echo esc_attr($cabin_qode_options['navigation_button_position']); ?>px;

    }
<?php } ?>

<?php
$tab_navigation_style = array();

if(isset($cabin_qode_options['tab_nav_font_family']) && $cabin_qode_options['tab_nav_font_family'] !== '-1') {
    $tab_navigation_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['tab_nav_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['tab_text_size']) && $cabin_qode_options['tab_text_size'] !== '') {
    $tab_navigation_style[] = 'font-size: '.$cabin_qode_options['tab_text_size'].'px';
}

if(isset($cabin_qode_options['tab_letter_spacing']) && $cabin_qode_options['tab_letter_spacing'] !== '') {
    $tab_navigation_style[] = 'letter-spacing: '.$cabin_qode_options['tab_letter_spacing'].'px';
}

if(isset($cabin_qode_options['tab_font_weight']) && $cabin_qode_options['tab_font_weight'] !== '') {
    $tab_navigation_style[] = 'font-weight: '.$cabin_qode_options['tab_font_weight'];
}

if(isset($cabin_qode_options['tab_font_style']) && $cabin_qode_options['tab_font_style'] !== '') {
    $tab_navigation_style[] = 'font-style: '.$cabin_qode_options['tab_font_style'];
}

if(isset($cabin_qode_options['tab_text_transform']) && $cabin_qode_options['tab_text_transform'] !== '') {
    $tab_navigation_style[] = 'text-transform: '.$cabin_qode_options['tab_text_transform'];
}

if(isset($cabin_qode_options['tab_text_color']) && $cabin_qode_options['tab_text_color'] !== '') {
    $tab_navigation_style[] = 'color: '.$cabin_qode_options['tab_text_color'];
}

if(is_array($tab_navigation_style) && count($tab_navigation_style)) { ?>
    .q_tabs.tab_with_text .tabs-nav li a{
    <?php echo esc_attr(implode(';', $tab_navigation_style)); ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['tab_active_text_color'])) { ?>
    .q_tabs.tab_with_text .tabs-nav li.active a,
    .q_tabs.tab_with_text .tabs-nav li.active a:hover,
    .q_tabs.tab_with_text .tabs-nav li a:hover{
    <?php if (!empty($cabin_qode_options['tab_active_text_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['tab_active_text_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['tabs_icon_size']) && $cabin_qode_options['tabs_icon_size'] != '') || !empty($cabin_qode_options['tab_icon_color'])) { ?>
    .q_tabs.tab_with_icon .tabs-nav li a{
    <?php if (isset($cabin_qode_options['tabs_icon_size']) && $cabin_qode_options['tabs_icon_size'] != '') { ?>font-size: <?php echo esc_attr($cabin_qode_options['tabs_icon_size']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['tab_icon_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['tab_icon_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['tab_icon_hover_color'])) { ?>
    .q_tabs.tab_with_icon .tabs-nav li.active a, .q_tabs.tab_with_icon .tabs-nav li a:hover{
    color: <?php echo esc_attr($cabin_qode_options['tab_icon_hover_color']);  ?>;
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['tabs_icon_width']) && $cabin_qode_options['tabs_icon_width'] != '') ||(isset($cabin_qode_options['tabs_icon_height']) && $cabin_qode_options['tabs_icon_height'] != '')) { ?>
    .q_tabs.tab_with_icon.with_lines .tabs-nav li{
    <?php if (isset($cabin_qode_options['tabs_icon_width']) && $cabin_qode_options['tabs_icon_width'] != ''){?>width: <?php echo esc_attr($cabin_qode_options['tabs_icon_width']);?>px; <?php }?>
    <?php if (isset($cabin_qode_options['tabs_icon_height']) && $cabin_qode_options['tabs_icon_height'] != ''){?>height: <?php echo esc_attr($cabin_qode_options['tabs_icon_height']);?>px; <?php }?>
    }
    .q_tabs.tab_with_icon.with_lines .tabs-nav li a{
    <?php if (isset($cabin_qode_options['tabs_icon_height']) && $cabin_qode_options['tabs_icon_height'] != ''){?>line-height: <?php echo esc_attr($cabin_qode_options['tabs_icon_height']);?>px; <?php }?>
    }
    <?php if ((isset($cabin_qode_options['tabs_icon_width']) && $cabin_qode_options['tabs_icon_width'] != '')){ ?>
        .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav{width : auto;}
    <?php } ?>
<?php } ?>

<?php if ((isset($cabin_qode_options['tabs_icon_shape_border_width']) && $cabin_qode_options['tabs_icon_shape_border_width'] != '')) { ?>

    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:first-child:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:first-child:after,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li a:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li a:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child a .icon_frame:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child a .icon_frame:after{
    height: <?php echo esc_attr($cabin_qode_options['tabs_icon_shape_border_width']);?>px;
    }

    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:first-child:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:first-child:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li a:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child a .icon_frame:before{
    top: -<?php echo esc_attr($cabin_qode_options['tabs_icon_shape_border_width']);?>px;
    }

    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li a:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child a .icon_frame:after{
    bottom: -<?php echo esc_attr($cabin_qode_options['tabs_icon_shape_border_width']);?>px;
    }

    /* left and right border
    a elements are used for left and right top margin
    tabs-nav are used for left and right bottom margin on last li element
    */

    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li a:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li a:after,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child a .icon_frame:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child a .icon_frame:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:first-child:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:first-child:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child:after{
    width: <?php echo esc_attr($cabin_qode_options['tabs_icon_shape_border_width']);?>px;
    }


    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li a:before,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child a .icon_frame:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:first-child:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:first-child:after{
    left: -<?php echo esc_attr($cabin_qode_options['tabs_icon_shape_border_width']);?>px;
    }

    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li a:after,
    .q_tabs.tab_with_icon.with_lines.vertical .tabs-nav li:last-child a .icon_frame:after,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child:before,
    .q_tabs.tab_with_icon.with_lines.horizontal .tabs-nav li:last-child:after{
    right: -<?php echo esc_attr($cabin_qode_options['tabs_icon_shape_border_width']);?>px;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['tabs_default_show_separator']) && $cabin_qode_options['tabs_default_show_separator'] == "yes"){ ?>
    .q_tabs.horizontal.default .tabs-nav li:not(:last-child) a{
    border-right: 1px solid #279eff;
    }
    <?php
    if(isset($cabin_qode_options['tabs_default_right_separator_color']) && $cabin_qode_options['tabs_default_right_separator_color'] != "" ){ ?>
        .q_tabs.horizontal.default .tabs-nav li:not(:last-child) a{
        border-right-color: <?php echo esc_attr($cabin_qode_options['tabs_default_right_separator_color']);?>
        }
    <?php }} ?>

<?php

$q_tabs_default_style = array();

if(isset($cabin_qode_options['tabs_default_padding_left']) && $cabin_qode_options['tabs_default_padding_left'] != "" ){
    $q_tabs_default_style[] = 'padding-left: '.$cabin_qode_options['tabs_default_padding_left'].'px';
}

if(isset($cabin_qode_options['tabs_default_padding_right']) && $cabin_qode_options['tabs_default_padding_right'] != "" ){
    $q_tabs_default_style[] = 'padding-right: '.$cabin_qode_options['tabs_default_padding_right'].'px';
}

if(isset($cabin_qode_options['tabs_default_text_color']) && $cabin_qode_options['tabs_default_text_color'] != "" ){
    $q_tabs_default_style[] = 'color: '.$cabin_qode_options['tabs_default_text_color'];
}

if(is_array($q_tabs_default_style) && count($q_tabs_default_style)) { ?>
    .q_tabs.horizontal.default .tabs-nav li a{
    <?php echo esc_attr(implode(';', $q_tabs_default_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['tabs_default_active_text_color']) && $cabin_qode_options['tabs_default_active_text_color'] != "" ){ ?>
    .q_tabs.horizontal.default .tabs-nav li.active a,
    .q_tabs.horizontal.default .tabs-nav li.active:hover a,
    .q_tabs.horizontal.default .tabs-nav li:not(.active):hover a{
    color: <?php echo esc_attr($cabin_qode_options['tabs_default_active_text_color']); ?>
    }
<?php }	?>

<?php

$q_tabs_with_borders_size_style = array();

if(isset($cabin_qode_options['tabs_with_borders_height']) && $cabin_qode_options['tabs_with_borders_height'] != "" ){
    $q_tabs_with_borders_size_style[] = 'height: '.$cabin_qode_options['tabs_with_borders_height'].'px';
    $q_tabs_with_borders_size_style[] = 'line-height: '.$cabin_qode_options['tabs_with_borders_height'].'px';	?>

    @media only screen and (max-width: 600px){
    .q_tabs.vertical.border_arround_element .tabs-nav li a,
    .q_tabs.vertical.border_arround_active_tab .tabs-nav li a,
    .q_tabs.vertical.default .tabs-nav li a{
    line-height : <?php echo esc_attr($cabin_qode_options['tabs_with_borders_height']) .'px !important'?>;
    }
    }

<?php }

if(isset($cabin_qode_options['tabs_with_borders_padding_left']) && $cabin_qode_options['tabs_with_borders_padding_left'] != "" ){
    $q_tabs_with_borders_size_style[] = 'padding-left: '.$cabin_qode_options['tabs_with_borders_padding_left'].'px';
}

if(isset($cabin_qode_options['tabs_with_borders_padding_right']) && $cabin_qode_options['tabs_with_borders_padding_right'] != "" ){
    $q_tabs_with_borders_size_style[] = 'padding-right: '.$cabin_qode_options['tabs_with_borders_padding_right'].'px';
}

if(is_array($q_tabs_with_borders_size_style) && count($q_tabs_with_borders_size_style)) { ?>
    .q_tabs.with_borders .tabs-nav li a{
    <?php echo esc_attr(implode(';', $q_tabs_with_borders_size_style)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['tab_bae_hor_no_marg_background_color']) && $cabin_qode_options['tab_bae_hor_no_marg_background_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active) a{
    background-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_background_color']); ?>;
    }
<?php }

if(isset($cabin_qode_options['tab_bae_hor_no_marg_border_color']) && $cabin_qode_options['tab_bae_hor_no_marg_border_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active) a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active):last-child a	{
    border-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_color']); ?>;
    }
    @media only screen and (max-width: 600px){
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active) a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active):last-child a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(:last-child) a{
    border-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_color']) .'!important'?>;
    }
    }
<?php }

if(isset($cabin_qode_options['tab_bae_hor_no_marg_background_color_hover']) && $cabin_qode_options['tab_bae_hor_no_marg_background_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active) a:hover {
    background-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_background_color_hover']); ?>;
    }
<?php }

if(isset($cabin_qode_options['tab_bae_hor_no_marg_border_hover_color']) && $cabin_qode_options['tab_bae_hor_no_marg_border_hover_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a{
    border-left-color: <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_hover_color']).'!important' ?>;
    border-top-color: <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_hover_color']).'!important' ?>;
    border-bottom-color:  <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_hover_color']).'!important' ?>;
    }

    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li a:hover:after,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:after,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:hover:after{
    background-color: <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_hover_color']); ?>;
    }

    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:last-child a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active):last-child a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active:last-child a{
    border-color: <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_hover_color']); ?>;
    }

    @media only screen and (max-width: 600px){
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li a:hover,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a:hover{
    border-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_border_color']).'!important' ?>;
    }
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['tab_bae_hor_no_marg_text_color']) && $cabin_qode_options['tab_bae_hor_no_marg_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active) a{
    color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_text_color']); ?>;
    }
<?php }	?>

<?php
if(isset($cabin_qode_options['tab_bae_hor_no_marg_active_text_color']) && $cabin_qode_options['tab_bae_hor_no_marg_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.horizontal.disable_margin .tabs-nav li:not(.active):hover a{
    color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_no_marg_active_text_color']); ?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['tab_bae_hor_marg_background_color']) && $cabin_qode_options['tab_bae_hor_marg_background_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:not(.active) a{
    background-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_marg_background_color']); ?>;
    }
<?php }

if(isset($cabin_qode_options['tab_bae_hor_marg_background_hover_color']) && $cabin_qode_options['tab_bae_hor_marg_background_hover_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:not(active) a:hover{
    background-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_marg_background_hover_color']); ?>;
    }
<?php }

if(isset($cabin_qode_options['tab_bae_hor_marg_border_color']) && $cabin_qode_options['tab_bae_hor_marg_border_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:not(.active){
    border-color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_marg_border_color']); ?>;
    }
<?php }

if(isset($cabin_qode_options['tab_bae_hor_marg_border_hover_color']) && $cabin_qode_options['tab_bae_hor_marg_border_hover_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:hover,
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li.active{
    border-color: <?php echo esc_attr($cabin_qode_options['tab_bae_hor_marg_border_hover_color']); ?>;
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['tab_bae_hor_marg_text_color']) && $cabin_qode_options['tab_bae_hor_marg_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:not(active) a{
    color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_marg_text_color']); ?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['tab_bae_hor_marg_active_text_color']) && $cabin_qode_options['tab_bae_hor_marg_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.horizontal.enable_margin .tabs-nav li:not(active) a:hover{
    color : <?php echo esc_attr($cabin_qode_options['tab_bae_hor_marg_active_text_color']); ?>;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['tab_bord_active_background_color']) && $cabin_qode_options['tab_bord_active_background_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active a,
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active a:hover{
    background-color : <?php echo esc_attr($cabin_qode_options['tab_bord_active_background_color']); ?>;
    }
<?php }

if(isset($cabin_qode_options['tab_bord_active_background_color_hover']) && $cabin_qode_options['tab_bord_active_background_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li:not(.active) a:hover{
    background-color : <?php echo esc_attr($cabin_qode_options['tab_bord_active_background_color_hover']); ?>;
    }

<?php }

if(isset($cabin_qode_options['tab_bor_arround_active_border_hover_color']) && $cabin_qode_options['tab_bor_arround_active_border_hover_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li:not(.active):hover{
    border-color: <?php echo esc_attr($cabin_qode_options['tab_bor_arround_active_border_hover_color']); ?>;
    }

<?php }

if(isset($cabin_qode_options['tab_bord_active_active_tab_border_hover_color']) && $cabin_qode_options['tab_bord_active_active_tab_border_hover_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active,
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active:hover{
    border-color: <?php echo esc_attr($cabin_qode_options['tab_bord_active_active_tab_border_hover_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['tab_bord_active_text_color']) && $cabin_qode_options['tab_bord_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li:not(.active) a{
    color: <?php echo esc_attr($cabin_qode_options['tab_bord_active_text_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['tab_bord_active_active_text_color']) && $cabin_qode_options['tab_bord_active_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li.active a,
    .q_tabs.border_arround_active_tab.horizontal .tabs-nav li:hover a{
    color: <?php echo esc_attr($cabin_qode_options['tab_bord_active_active_text_color']); ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_background_color']) && $cabin_qode_options['ver_tab_bae_background_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:not(.active) a{
    background-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_background_color']); ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_background_color_hover']) && $cabin_qode_options['ver_tab_bae_background_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:not(.active) a:hover,
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li.active a:hover{
    background-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_background_color_hover']); ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_border_color']) && $cabin_qode_options['ver_tab_bae_border_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:not(.active){
    border-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_border_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_border_color_hover']) && $cabin_qode_options['ver_tab_bae_border_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:hover,
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li.active{
    border-left-color:  <?php echo esc_attr($cabin_qode_options['ver_tab_bae_border_color_hover']); ?>;
    border-top-color:  <?php echo esc_attr($cabin_qode_options['ver_tab_bae_border_color_hover']); ?>;
    border-right-color:  <?php echo esc_attr($cabin_qode_options['ver_tab_bae_border_color_hover']); ?>;
    }

    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:hover + li,
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li.active + li{
    border-top-color:  <?php echo esc_attr($cabin_qode_options['ver_tab_bae_border_color_hover']); ?>;
    }

    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:last-child:hover,
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li.active:last-child{
    border-bottom-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_border_color_hover']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_text_color']) && $cabin_qode_options['ver_tab_bae_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:not(.active) a{
    color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_text_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_active_text_color']) && $cabin_qode_options['ver_tab_bae_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.vertical.disable_margin .tabs-nav li:hover a{
    color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_active_text_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_with_space_background_color']) && $cabin_qode_options['ver_tab_bae_with_space_background_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li:not(.active) a{
    background-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_with_space_background_color']); ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_with_space_background_color_hover']) && $cabin_qode_options['ver_tab_bae_with_space_background_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li:not(.active) a:hover,
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li.active a:hover{
    background-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_with_space_background_color_hover']); ?>;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_with_space_border_color']) && $cabin_qode_options['ver_tab_bae_with_space_border_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li:not(.active){
    border-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_with_space_border_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_with_space_border_color_hover']) && $cabin_qode_options['ver_tab_bae_with_space_border_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li:hover,
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li.active{
    border-color:  <?php echo esc_attr($cabin_qode_options['ver_tab_bae_with_space_border_color_hover']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_with_space_text_color']) && $cabin_qode_options['ver_tab_bae_with_space_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li:not(.active) a{
    color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_with_space_text_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bae_with_space_active_text_color']) && $cabin_qode_options['ver_tab_bae_with_space_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li.active a,
    .q_tabs.border_arround_element.vertical.enable_margin .tabs-nav li:hover a{
    color: <?php echo esc_attr($cabin_qode_options['ver_tab_bae_with_space_active_text_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bord_act_background_color']) && $cabin_qode_options['ver_tab_bord_act_background_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li.active a,
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li.active a:hover{
    background-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bord_act_background_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bord_act_background_color_hover']) && $cabin_qode_options['ver_tab_bord_act_background_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li:not(.active) a:hover{
    background-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bord_act_background_color_hover']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bord_act_border_color']) && $cabin_qode_options['ver_tab_bord_act_border_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li.active,
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li.active:hover{
    border-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bord_act_border_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bord_act_border_color_hover']) && $cabin_qode_options['ver_tab_bord_act_border_color_hover'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li:not(.active):hover{
    border-color: <?php echo esc_attr($cabin_qode_options['ver_tab_bord_act_border_color_hover']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['ver_tab_bord_act_text_color']) && $cabin_qode_options['ver_tab_bord_act_text_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li:not(.active) a{
    color: <?php echo esc_attr($cabin_qode_options['ver_tab_bord_act_text_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['ver_tab_bord_act_active_text_color']) && $cabin_qode_options['ver_tab_bord_act_active_text_color'] != "" ){ ?>
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li.active a,
    .q_tabs.border_arround_active_tab.vertical .tabs-nav li:hover a{
    color: <?php echo esc_attr($cabin_qode_options['ver_tab_bord_act_active_text_color']); ?>;
    }
<?php } ?>


<?php
$tabs_container_style = array();

if(isset($cabin_qode_options['tabs_content_text_size']) && $cabin_qode_options['tabs_content_text_size'] !== '') {
    $tabs_container_style[] = 'font-size: '.$cabin_qode_options['tabs_content_text_size'].'px';
}

if(isset($cabin_qode_options['tabs_content_background_color']) && $cabin_qode_options['tabs_content_background_color'] !== '') {
    $tabs_container_style[] = 'background-color: '.$cabin_qode_options['tabs_content_background_color'];
}

if(isset($cabin_qode_options['tabs_content_padding_left']) && $cabin_qode_options['tabs_content_padding_left'] !== '') {
    $tabs_container_style[] = 'padding-left: '.$cabin_qode_options['tabs_content_padding_left'].'px';
}
if(isset($cabin_qode_options['tabs_content_padding_right']) && $cabin_qode_options['tabs_content_padding_right'] !== '') {
    $tabs_container_style[] = 'padding-right: '.$cabin_qode_options['tabs_content_padding_right'].'px';
}

if(isset($cabin_qode_options['tabs_content_padding_top']) && $cabin_qode_options['tabs_content_padding_top'] !== '') {
    $tabs_container_style[] = 'padding-top: '.$cabin_qode_options['tabs_content_padding_top'].'px !important';
}

if(isset($cabin_qode_options['tabs_content_padding_bottom']) && $cabin_qode_options['tabs_content_padding_bottom'] !== '') {
    $tabs_container_style[] = 'padding-bottom: '.$cabin_qode_options['tabs_content_padding_bottom'].'px';
}

if(is_array($tabs_container_style) && count($tabs_container_style)) { ?>
    .q_tabs.horizontal .tabs-container,
    .q_tabs.with_borders.horizontal .tabs-container{
    <?php echo esc_attr(implode(';', $tabs_container_style)); ?>
    }
<?php } ?>

<?php

$tabs_vertical_container_style = array();

if(isset($cabin_qode_options['tabs_vertical_content_text_size']) && $cabin_qode_options['tabs_vertical_content_text_size'] !== '') {
    $tabs_container_style[] = 'font-size: '.$cabin_qode_options['tabs_vertical_content_text_size'].'px';
}

if(isset($cabin_qode_options['tabs_vertical_content_background_color']) && $cabin_qode_options['tabs_vertical_content_background_color'] !== '') {
    $tabs_vertical_container_style[] = 'background-color: '.$cabin_qode_options['tabs_vertical_content_background_color'];
}

if(isset($cabin_qode_options['tabs_vertical_content_padding_left']) && $cabin_qode_options['tabs_vertical_content_padding_left'] !== '') {
    $tabs_vertical_container_style[] = 'padding-left: '.$cabin_qode_options['tabs_vertical_content_padding_left'].'px';
}
if(isset($cabin_qode_options['tabs_vertical_content_padding_right']) && $cabin_qode_options['tabs_vertical_content_padding_right'] !== '') {
    $tabs_vertical_container_style[] = 'padding-right: '.$cabin_qode_options['tabs_vertical_content_padding_right'].'px';
}

if(isset($cabin_qode_options['tabs_vertical_content_padding_top']) && $cabin_qode_options['tabs_vertical_content_padding_top'] !== '') {
    $tabs_vertical_container_style[] = 'padding-top: '.$cabin_qode_options['tabs_vertical_content_padding_top'].'px !important';
}

if(isset($cabin_qode_options['tabs_vertical_content_padding_bottom']) && $cabin_qode_options['tabs_vertical_content_padding_bottom'] !== '') {
    $tabs_vertical_container_style[] = 'padding-bottom: '.$cabin_qode_options['tabs_vertical_content_padding_bottom'].'px';
}

if(is_array($tabs_vertical_container_style) && count($tabs_vertical_container_style)) { ?>
    .q_tabs.vertical .tabs-container,
    .q_tabs.with_borders.vertical .tabs-container{
    <?php echo esc_attr(implode(';', $tabs_vertical_container_style)); ?>
    }
<?php } ?>


<?php

$tags_styles = array();
$tags_hover_styles = array();

if(isset($cabin_qode_options['tags_font_family']) && $cabin_qode_options['tags_font_family'] !== '-1') {
    $tags_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['tags_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['tags_font_size']) && $cabin_qode_options['tags_font_size'] !== '') {
    $tags_styles[] = 'font-size: '.$cabin_qode_options['tags_font_size'].'px !important';
}

if(isset($cabin_qode_options['tags_line_height']) && $cabin_qode_options['tags_line_height'] !== '') {
    $tags_styles[] = 'line-height: '.$cabin_qode_options['tags_line_height'].'px';
}

if(isset($cabin_qode_options['tags_letter_spacing']) && $cabin_qode_options['tags_letter_spacing'] !== '') {
    $tags_styles[] = 'letter-spacing: '.$cabin_qode_options['tags_letter_spacing'].'px';
}

if(isset($cabin_qode_options['tags_font_weight']) && $cabin_qode_options['tags_font_weight'] !== '') {
    $tags_styles[] = 'font-weight: '.$cabin_qode_options['tags_font_weight'];
}

if(isset($cabin_qode_options['tags_font_style']) && $cabin_qode_options['tags_font_style'] !== '') {
    $tags_styles[] = 'font-style: '.$cabin_qode_options['tags_font_style'];
}

if(isset($cabin_qode_options['tags_text_transform']) && $cabin_qode_options['tags_text_transform'] !== '') {
    $tags_styles[] = 'text-transform: '.$cabin_qode_options['tags_text_transform'];
}

if(isset($cabin_qode_options['tags_color']) && $cabin_qode_options['tags_color'] !== '') {
    $tags_styles[] = 'color: '.$cabin_qode_options['tags_color'];
}

if(isset($cabin_qode_options['tags_background_color']) && $cabin_qode_options['tags_background_color'] !== '') {
    $tags_styles[] = 'background-color: '.$cabin_qode_options['tags_background_color'];
}
if(isset($cabin_qode_options['tags_border_radius']) && $cabin_qode_options['tags_border_radius'] !== '') {
    $tags_styles[] = 'border-radius: '.$cabin_qode_options['tags_border_radius'].'px';
}
if(isset($cabin_qode_options['tags_border_color']) && $cabin_qode_options['tags_border_color'] !== '') {
    $tags_styles[] = 'border-color: '.$cabin_qode_options['tags_border_color'];
}
if(isset($cabin_qode_options['tags_border_width']) && $cabin_qode_options['tags_border_width'] !== '') {
    $tags_styles[] = 'border-width: '.$cabin_qode_options['tags_border_width'].'px';
}
if(is_array($tags_styles) && count($tags_styles)) { ?>
    .single_tags a,
    aside.sidebar .widget .tagcloud a,
    .widget .tagcloud a,
    aside.sidebar .widget:not(.woocommerce) .tagcloud a{
    <?php echo esc_attr(implode(';', $tags_styles)); ?>
    }
<?php }

if(isset($cabin_qode_options['tags_hover_color']) && $cabin_qode_options['tags_hover_color'] !== '') {
    $tags_hover_styles[] = 'color: '.$cabin_qode_options['tags_hover_color'].'!important';
}
if(isset($cabin_qode_options['tags_border_hover_color']) && $cabin_qode_options['tags_border_hover_color'] !== '') {
    $tags_hover_styles[] = 'border-color: '.$cabin_qode_options['tags_border_hover_color'].'!important';
}
if(isset($cabin_qode_options['tags_background_hover_color']) && $cabin_qode_options['tags_background_hover_color'] !== '') {
    $tags_hover_styles[] = 'background-color: '.$cabin_qode_options['tags_background_hover_color'].'!important';
}

if(is_array($tags_hover_styles) && count($tags_hover_styles)) { ?>
    .single_tags a:hover,
    aside.sidebar .widget.widget_tag_cloud .tagcloud a:hover,
    .widget .tagcloud a:hover{
    <?php echo esc_attr(implode(';', $tags_hover_styles)); ?>
    }
<?php } ?>

<?php

$team_styles = array();

if(isset($cabin_qode_options['team_font_family']) && $cabin_qode_options['team_font_family'] !== '-1') {
    $team_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['team_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['team_font_size']) && $cabin_qode_options['team_font_size'] !== '') {
    $team_styles[] = 'font-size: '.$cabin_qode_options['team_font_size'].'px !important';
}

if(isset($cabin_qode_options['team_line_height']) && $cabin_qode_options['team_line_height'] !== '') {
    $team_styles[] = 'line-height: '.$cabin_qode_options['team_line_height'].'px';
}

if(isset($cabin_qode_options['team_letter_spacing']) && $cabin_qode_options['team_letter_spacing'] !== '') {
    $team_styles[] = 'letter-spacing: '.$cabin_qode_options['team_letter_spacing'].'px';
}

if(isset($cabin_qode_options['team_font_weight']) && $cabin_qode_options['team_font_weight'] !== '') {
    $team_styles[] = 'font-weight: '.$cabin_qode_options['team_font_weight'];
}

if(isset($cabin_qode_options['team_font_style']) && $cabin_qode_options['team_font_style'] !== '') {
    $team_styles[] = 'font-style: '.$cabin_qode_options['team_font_style'];
}

if(isset($cabin_qode_options['team_text_transform']) && $cabin_qode_options['team_text_transform'] !== '') {
    $team_styles[] = 'text-transform: '.$cabin_qode_options['team_text_transform'];
}

if(is_array($team_styles) && count($team_styles)) { ?>
    .q_team .q_team_name{
    <?php  echo esc_attr(implode(';', $team_styles)); ?>
    }

<?php } ?>

<?php if(isset($cabin_qode_options['team_color']) && $cabin_qode_options['team_color'] !== '') { ?>
    .q_team .q_team_name,
    .q_team.below_image .q_team_info .q_team_name{
    color: <?php echo esc_attr($cabin_qode_options['team_color']); ?>
    }
<?php }?>

<?php if(!empty($cabin_qode_options['team_hover_color'])) { ?>
    .q_team .q_team_social_holder,
    .q_team.below_image:hover .image_overlay{
    background-color: <?php echo esc_attr($cabin_qode_options['team_hover_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['team_icon_space']) && $cabin_qode_options['team_icon_space'] !== '') { ?>
    .q_team_social .q_social_icon_holder{
    margin: 2px <?php echo esc_attr($cabin_qode_options['team_icon_space'])/2; ?>px!important;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['team_icon_color']) || !empty($cabin_qode_options['team_icon_background_color']) || !empty($cabin_qode_options['team_icon_border_color']) || (isset($cabin_qode_options['team_icon_size']) && $cabin_qode_options['team_icon_size'] !== '') || (isset($cabin_qode_options['team_icon_shape_size']) && $cabin_qode_options['team_icon_shape_size'] !== '')) { ?>

    <?php if (!empty($cabin_qode_options['team_icon_color'])) { ?>
        .q_team .q_social_icon_holder .qode_icon_stack,
        .q_team .q_social_icon_holder.normal_social .simple_social, .q_team .q_social_icon_holder.normal_social.with_link .simple_social{
        color: <?php echo esc_attr($cabin_qode_options['team_icon_color']); ?>;
        }
    <?php } ?>

    .q_team .q_social_icon_holder .qode_icon_stack{
    <?php if (!empty($cabin_qode_options['team_icon_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['team_icon_background_color']); ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['team_icon_border_color'])) { ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['team_icon_border_color']); ?>; <?php }
    elseif(!empty($cabin_qode_options['team_icon_background_color'])){ ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['team_icon_background_color']); ?>; <?php } ?>
    <?php if (isset($cabin_qode_options['team_icon_size']) && $cabin_qode_options['team_icon_size'] != '') { ?> font-size: <?php echo esc_attr($cabin_qode_options['team_icon_size']); ?>px; <?php } ?>
    <?php if (isset($cabin_qode_options['team_icon_shape_size']) && $cabin_qode_options['team_icon_shape_size'] != '') { ?>
        line-height: <?php echo esc_attr($cabin_qode_options['team_icon_shape_size']-2); ?>px;
        height: <?php echo esc_attr($cabin_qode_options['team_icon_shape_size']); ?>px;
        width: <?php echo esc_attr($cabin_qode_options['team_icon_shape_size']); ?>px;
    <?php } ?>
    }

    .q_team_social_holder .q_social_icon_holder .qode_icon_stack{
    <?php if (!empty($cabin_qode_options['team_icon_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['team_icon_background_color']); ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['team_icon_border_color'])) { ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['team_icon_border_color']); ?>; <?php } ?>
    <?php if (isset($cabin_qode_options['team_icon_shape_size']) && $cabin_qode_options['team_icon_shape_size'] != '') { ?>

    <?php } ?>

    }

    .q_team .q_social_icon_holder.normal_social .simple_social,
    .q_team .q_social_icon_holder.normal_social span.simple_social,
    .q_team .q_social_icon_holder.normal_social.with_link .simple_social,
    .q_team .q_social_icon_holder.normal_social.with_link span.social_icon{
    <?php if (isset($cabin_qode_options['team_icon_size']) && $cabin_qode_options['team_icon_size'] != '') { ?> font-size: <?php echo esc_attr($cabin_qode_options['team_icon_size']); ?>px; <?php } ?>
    }

<?php } ?>

<?php if (!empty($cabin_qode_options['team_icon_hover_color']) || !empty($cabin_qode_options['team_icon_hover_background_color']) || !empty($cabin_qode_options['team_icon_hover_border_color'])) { ?>
    .q_team_social_holder .q_social_icon_holder:hover .fa-stack i,
    .q_team_social_holder .q_social_icon_holder:hover .fa-stack span,
    .q_team .q_social_icon_holder.normal_social:hover .simple_social,
    .q_team .q_social_icon_holder.normal_social.with_link:hover .simple_social,
    .q_team .q_social_icon_holder.normal_social.with_link:hover span.simple_social,
    .q_team .q_social_icon_holder.square_social:hover .social_icon,
    .q_team .q_social_icon_holder.square_social:hover span.social_icon,
    .q_team .q_social_icon_holder.square_social.with_link:hover .social_icon,
    .q_team .q_social_icon_holder.square_social.with_link:hover span.social_icon,
    .q_team .q_social_icon_holder.circle_social:hover .social_icon,
    .q_team .q_social_icon_holder.circle_social:hover span.social_icon,
    .q_team .q_social_icon_holder.circle_social.with_link:hover .social_icon,
    .q_team .q_social_icon_holder.circle_social.with_link:hover span.social_icon{
    <?php if (!empty($cabin_qode_options['team_icon_hover_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['team_icon_hover_color']); ?> !important; <?php } ?>
    }

    .q_team_social_holder .q_social_icon_holder:hover .qode_icon_stack,
    .q_team_social_holder_between .q_social_icon_holder:hover .qode_icon_stack{
    <?php if (!empty($cabin_qode_options['team_icon_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['team_icon_hover_background_color']); ?> !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['team_icon_hover_border_color'])) { ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['team_icon_hover_border_color']); ?> !important; <?php }
    elseif(!empty($cabin_qode_options['team_icon_hover_background_color'])){ ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['team_icon_hover_background_color']); ?>!important; <?php } ?>
    }

    .q_team_social_holder .q_social_icon_holder:hover .fa-stack{
    <?php if (!empty($cabin_qode_options['team_icon_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['team_icon_hover_background_color']); ?> !important; <?php } ?>
    <?php if (!empty($cabin_qode_options['team_icon_hover_border_color'])) { ?> border: 1px solid <?php echo esc_attr($cabin_qode_options['team_icon_hover_border_color']); ?> !important; <?php } ?>
    }
<?php } ?>


<?php

$team_share_icon_inner_styles = array();

if(isset($cabin_qode_options['team_share_icon_color']) && $cabin_qode_options['team_share_icon_color'] !== '') {
    $team_share_icon_inner_styles[] = 'color: '.$cabin_qode_options['team_share_icon_color'].';';
}

if(isset($cabin_qode_options['team_share_icon_size']) && $cabin_qode_options['team_share_icon_size'] !== '') {
    $team_share_icon_inner_styles[] = 'font-size: '.$cabin_qode_options['team_share_icon_size'] .'px;';
}

if(is_array($team_share_icon_inner_styles) && count($team_share_icon_inner_styles)) { ?>
    .q_team.below_image .q_team_social_holder_between .social_share_icon_shape .social_share_icon {
    <?php  echo esc_attr(implode(';', $team_share_icon_inner_styles)); ?>
    }

<?php } ?>

<?php

$team_share_icon_shape_styles = array();

if(isset($cabin_qode_options['team_share_icon_background_color']) && $cabin_qode_options['team_share_icon_background_color'] !== '') {
    $team_share_icon_shape_styles[] = 'background-color: '.$cabin_qode_options['team_share_icon_background_color'].';';
    if(!isset($cabin_qode_options['team_share_icon_border_color']) || empty($cabin_qode_options['team_share_icon_border_color'])) {
        $team_share_icon_shape_styles[] = 'border-color: '.$cabin_qode_options['team_share_icon_background_color'].';';
    }

}

if(isset($cabin_qode_options['team_share_icon_border_color']) && $cabin_qode_options['team_share_icon_border_color'] !== '') {
    $team_share_icon_shape_styles[] = 'border-color: '.$cabin_qode_options['team_share_icon_border_color'].';';
}
if(isset($cabin_qode_options['team_share_icon_shape_size']) && $cabin_qode_options['team_share_icon_shape_size'] !== '') {
    $team_share_icon_shape_styles[] = 'width: '.$cabin_qode_options['team_share_icon_shape_size'] .'px;';
    $team_share_icon_shape_styles[] = 'height: '.$cabin_qode_options['team_share_icon_shape_size'] .'px;';
    $team_share_icon_shape_styles[] = 'line-height: '.$cabin_qode_options['team_share_icon_shape_size'] .'px;';
    ?>
    .q_team.below_image .q_team_social_holder_between .social_share_icon_shape .social_share_icon {
    line-height: <?php echo esc_attr($cabin_qode_options['team_share_icon_shape_size']) .'px;' ?>
    }

    .q_team.below_image .q_team_social_holder_between{
    bottom: -<?php echo esc_attr($cabin_qode_options['team_share_icon_shape_size']/2) .'px;' ?>
    }

<?php }
if(is_array($team_share_icon_shape_styles) && count($team_share_icon_shape_styles)) { ?>
    .q_team.below_image .q_team_social_holder_between .social_share_icon_shape{
    <?php  echo esc_attr(implode(';', $team_share_icon_shape_styles)); ?>
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['team_share_icon_hover_color']) && $cabin_qode_options['team_share_icon_hover_color'] !== '') {	?>
    .q_team.below_image:hover .q_team_social_holder_between .social_share_icon_shape .social_share_icon{
    color: <?php echo esc_attr($cabin_qode_options['team_share_icon_hover_color']) .';' ?>
    }
<?php } ?>

<?php

$team_share_icon_hover_shape_styles = array();

if(isset($cabin_qode_options['team_share_icon_hover_background_color']) && $cabin_qode_options['team_share_icon_hover_background_color'] !== '') {
    $team_share_icon_hover_shape_styles[] = 'background-color: '.$cabin_qode_options['team_share_icon_hover_background_color'].';';
    if(!isset($cabin_qode_options['team_share_icon_hover_border_color']) || empty($cabin_qode_options['team_share_icon_hover_border_color'])) {
        $team_share_icon_hover_shape_styles[] = 'border-color: '.$cabin_qode_options['team_share_icon_hover_background_color'].';';
    }
}

if(isset($cabin_qode_options['team_share_icon_hover_border_color']) && $cabin_qode_options['team_share_icon_hover_border_color'] !== '') {
    $team_share_icon_hover_shape_styles[] = 'border-color: '.$cabin_qode_options['team_share_icon_hover_border_color'].';';
}

if(is_array($team_share_icon_hover_shape_styles) && count($team_share_icon_hover_shape_styles)) { ?>
    .q_team.below_image:hover .q_team_social_holder_between .social_share_icon_shape{
    <?php  echo esc_attr(implode(';', $team_share_icon_hover_shape_styles)); ?>
    }
<?php } ?>


<?php

$shape_space = 10; // init value for space between social icons
$shape_size = 36; // social icons
$shape_share_size = 46; // social share icon
$margin_difference = 5; // left margin difference between social share and social icon, used for centering icons holder
$normal_difference = 7;

if ((isset($cabin_qode_options['team_icon_space']) && $cabin_qode_options['team_icon_space'] !== '') || (isset($cabin_qode_options['team_icon_shape_size']) && $cabin_qode_options['team_icon_shape_size'] !== '') || (isset($cabin_qode_options['team_share_icon_shape_size']) && $cabin_qode_options['team_share_icon_shape_size'] !== '')) {
    if (isset($cabin_qode_options['team_icon_space']) && $cabin_qode_options['team_icon_space'] !== '') {
        $shape_space = $cabin_qode_options['team_icon_space'];
        ?>
        .q_team.below_image.social_style_center .q_team_social .q_social_icon_holder {
        margin: 0 <?php echo esc_attr($shape_space)/2 .'px !important;' ?>
        }
        <?php
    }
    if (isset($cabin_qode_options['team_icon_shape_size']) && $cabin_qode_options['team_icon_shape_size'] !== '') {
        $shape_size = $cabin_qode_options['team_icon_shape_size'];
    }

    if (isset($cabin_qode_options['team_share_icon_shape_size']) && $cabin_qode_options['team_share_icon_shape_size'] !== '') {
        $shape_share_size = $cabin_qode_options['team_share_icon_shape_size'];
    }

    $bottom1 = $shape_share_size+$shape_space; // position for first icon, init value for rendering icons
    $bottom1_normal = $bottom1 - $normal_difference;
    $bottom_difference = $shape_size+$shape_space; // this value is difference (y position) of each social icon.
    $bottom_difference_normal = $bottom_difference - $normal_difference;
    if ( $shape_share_size > $shape_size ) {
        $margin_difference = ($shape_share_size - $shape_size)/2;
    }
    else {
        $margin_difference = -($shape_size - $shape_share_size)/2;
    }
    if ( $margin_difference !== '5') { ?>
        .q_team.below_image .q_team_social_wrapp {
        margin-left: <?php echo esc_attr($margin_difference).'px;' ?>
        }
    <?php } ?>

    .q_team.below_image .q_team_social_wrapp ul li:first-child {
    bottom: <?php echo esc_attr($bottom1) .'px;' ?>
    }
    .q_team.below_image .q_team_social_wrapp ul li:nth-child(2)	{
    bottom: <?php echo esc_attr($bottom1+$bottom_difference) .'px;' ?>
    }
    .q_team.below_image .q_team_social_wrapp ul li:nth-child(3) {
    bottom: <?php echo esc_attr($bottom1+$bottom_difference*2) .'px;' ?>
    }
    .q_team.below_image .q_team_social_wrapp ul li:nth-child(4){
    bottom: <?php echo esc_attr($bottom1+$bottom_difference*3) .'px;' ?>
    }
    .q_team.below_image .q_team_social_wrapp ul li:nth-child(5)	{
    bottom: <?php echo esc_attr($bottom1+$bottom_difference*4) .'px;' ?>
    }

    .q_team.below_image .q_team_social.normal_social .q_team_social_wrapp ul li:first-child{
    bottom: <?php echo esc_attr($bottom1_normal) .'px;' ?>
    }
    .q_team.below_image .q_team_social.normal_social .q_team_social_wrapp ul li:nth-child(2)	{
    bottom: <?php echo esc_attr($bottom1_normal+$bottom_difference_normal) .'px;' ?>
    }
    .q_team.below_image .q_team_social.normal_social .q_team_social_wrapp ul li:nth-child(3)	{
    bottom: <?php echo esc_attr($bottom1_normal+$bottom_difference_normal*2) .'px;' ?>
    }
    .q_team.below_image .q_team_social.normal_social .q_team_social_wrapp ul li:nth-child(4)	{
    bottom: <?php echo esc_attr($bottom1_normal+$bottom_difference_normal*3) .'px;' ?>
    }
    .q_team.below_image .q_team_social.normal_social .q_team_social_wrapp ul li:nth-child(5)	{
    bottom: <?php echo esc_attr($bottom1_normal+$bottom_difference_normal*4) .'px;' ?>
    }

<?php } ?>

    .q_team.below_image:not(.social_style_center) .q_team_social_holder_between.center{
    right: calc(50% - <?php echo esc_attr($shape_share_size/2); ?>px);
    }


<?php
$testimonials_title_styles = array();

if(isset($cabin_qode_options['testimonials_title_font_family']) && $cabin_qode_options['testimonials_title_font_family'] !== '-1') {
    $testimonials_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['testimonials_title_font_family']).', sans-serif !important';
}

if(isset($cabin_qode_options['testimonials_title_font_size']) && $cabin_qode_options['testimonials_title_font_size'] !== '') {
    $testimonials_title_styles[] = 'font-size: '.$cabin_qode_options['testimonials_title_font_size'].'px';
}

if(isset($cabin_qode_options['testimonials_title_line_height']) && $cabin_qode_options['testimonials_title_line_height'] !== '') {
    $testimonials_title_styles[] = 'line-height: '.$cabin_qode_options['testimonials_title_line_height'].'px';
}

if(isset($cabin_qode_options['testimonials_title_letter_spacing']) && $cabin_qode_options['testimonials_title_letter_spacing'] !== '') {
    $testimonials_title_styles[] = 'letter-spacing: '.$cabin_qode_options['testimonials_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['testimonials_title_font_weight']) && $cabin_qode_options['testimonials_title_font_weight'] !== '') {
    $testimonials_title_styles[] = 'font-weight: '.$cabin_qode_options['testimonials_title_font_weight'];
}

if(isset($cabin_qode_options['testimonials_title_font_style']) && $cabin_qode_options['testimonials_title_font_style'] !== '') {
    $testimonials_title_styles[] = 'font-style: '.$cabin_qode_options['testimonials_title_font_style'];
}

if(isset($cabin_qode_options['testimonials_title_text_transform']) && $cabin_qode_options['testimonials_title_text_transform'] !== '') {
    $testimonials_title_styles[] = 'text-transform: '.$cabin_qode_options['testimonials_title_text_transform'];
}

if(isset($cabin_qode_options['testimonials_title_color']) && $cabin_qode_options['testimonials_title_color'] !== '') {
    $testimonials_title_styles[] = 'color: '.$cabin_qode_options['testimonials_title_color'];
}

if(is_array($testimonials_title_styles) && count($testimonials_title_styles)) { ?>
    .testimonials .testimonial_text_inner .testimonial_title{
    <?php echo esc_attr(implode(';', $testimonials_title_styles)); ?>
    }
<?php } ?>


<?php
$testimonials_text_styles = array();

if(isset($cabin_qode_options['testimonials_text_font_family']) && $cabin_qode_options['testimonials_text_font_family'] !== '-1') {
    $testimonials_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['testimonials_text_font_family']).', sans-serif !important';
}

if(isset($cabin_qode_options['testimonials_text_font_size']) && $cabin_qode_options['testimonials_text_font_size'] !== '') {
    $testimonials_text_styles[] = 'font-size: '.$cabin_qode_options['testimonials_text_font_size'].'px';
}

if(isset($cabin_qode_options['testimonials_text_line_height']) && $cabin_qode_options['testimonials_text_line_height'] !== '') {
    $testimonials_text_styles[] = 'line-height: '.$cabin_qode_options['testimonials_text_line_height'].'px';
}

if(isset($cabin_qode_options['testimonials_text_letter_spacing']) && $cabin_qode_options['testimonials_text_letter_spacing'] !== '') {
    $testimonials_text_styles[] = 'letter-spacing: '.$cabin_qode_options['testimonials_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['testimonials_text_font_weight']) && $cabin_qode_options['testimonials_text_font_weight'] !== '') {
    $testimonials_text_styles[] = 'font-weight: '.$cabin_qode_options['testimonials_text_font_weight'];
}

if(isset($cabin_qode_options['testimonials_text_font_style']) && $cabin_qode_options['testimonials_text_font_style'] !== '') {
    $testimonials_text_styles[] = 'font-style: '.$cabin_qode_options['testimonials_text_font_style'];
}

if(isset($cabin_qode_options['testimonials_text_text_transform']) && $cabin_qode_options['testimonials_text_text_transform'] !== '') {
    $testimonials_text_styles[] = 'text-transform: '.$cabin_qode_options['testimonials_text_text_transform'];
}

if(isset($cabin_qode_options['testimonials_text_color']) && $cabin_qode_options['testimonials_text_color'] !== '') {
    $testimonials_text_styles[] = 'color: '.$cabin_qode_options['testimonials_text_color'];
}

if(is_array($testimonials_text_styles) && count($testimonials_text_styles)) { ?>
    .testimonials .testimonial_text_inner .testimonial_text{
    <?php echo esc_attr(implode(';', $testimonials_text_styles)); ?>
    }
<?php } ?>

<?php
$testimonials_author_styles = array();

if(isset($cabin_qode_options['testimonials_author_font_family']) && $cabin_qode_options['testimonials_author_font_family'] !== '-1') {
    $testimonials_author_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['testimonials_author_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['testimonials_author_font_size']) && $cabin_qode_options['testimonials_author_font_size'] !== '') {
    $testimonials_author_styles[] = 'font-size: '.$cabin_qode_options['testimonials_author_font_size'].'px';
}

if(isset($cabin_qode_options['testimonials_author_line_height']) && $cabin_qode_options['testimonials_author_line_height'] !== '') {
    $testimonials_author_styles[] = 'line-height: '.$cabin_qode_options['testimonials_author_line_height'].'px';
}

if(isset($cabin_qode_options['testimonials_author_letter_spacing']) && $cabin_qode_options['testimonials_author_letter_spacing'] !== '') {
    $testimonials_author_styles[] = 'letter-spacing: '.$cabin_qode_options['testimonials_author_letter_spacing'].'px';
}

if(isset($cabin_qode_options['testimonials_author_font_weight']) && $cabin_qode_options['testimonials_author_font_weight'] !== '') {
    $testimonials_author_styles[] = 'font-weight: '.$cabin_qode_options['testimonials_author_font_weight'];
}

if(isset($cabin_qode_options['testimonials_author_font_style']) && $cabin_qode_options['testimonials_author_font_style'] !== '') {
    $testimonials_author_styles[] = 'font-style: '.$cabin_qode_options['testimonials_author_font_style'];
}

if(isset($cabin_qode_options['testimonials_author_text_transform']) && $cabin_qode_options['testimonials_author_text_transform'] !== '') {
    $testimonials_author_styles[] = 'text-transform: '.$cabin_qode_options['testimonials_author_text_transform'];
}

if(isset($cabin_qode_options['testimonials_author_color']) && $cabin_qode_options['testimonials_author_color'] !== '') {
    $testimonials_author_styles[] = 'color: '.$cabin_qode_options['testimonials_author_color'];
}

if(is_array($testimonials_author_styles) && count($testimonials_author_styles)) { ?>
    .testimonials .testimonial_text_inner p.testimonial_author{
    <?php echo esc_attr(implode(';', $testimonials_author_styles)); ?>
    }
<?php } ?>

<?php
$testimonials_author_job_position_styles = array();

if(isset($cabin_qode_options['testimonials_author_job_position_font_family']) && $cabin_qode_options['testimonials_author_job_position_font_family'] !== '-1') {
    $testimonials_author_job_position_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['testimonials_author_job_position_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['testimonials_author_job_position_font_size']) && $cabin_qode_options['testimonials_author_job_position_font_size'] !== '') {
    $testimonials_author_job_position_styles[] = 'font-size: '.$cabin_qode_options['testimonials_author_job_position_font_size'].'px';
}

if(isset($cabin_qode_options['testimonials_author_job_position_line_height']) && $cabin_qode_options['testimonials_author_job_position_line_height'] !== '') {
    $testimonials_author_job_position_styles[] = 'line-height: '.$cabin_qode_options['testimonials_author_job_position_line_height'].'px';
}

if(isset($cabin_qode_options['testimonials_author_job_position_letter_spacing']) && $cabin_qode_options['testimonials_author_job_position_letter_spacing'] !== '') {
    $testimonials_author_job_position_styles[] = 'letter-spacing: '.$cabin_qode_options['testimonials_author_job_position_letter_spacing'].'px';
}

if(isset($cabin_qode_options['testimonials_author_job_position_font_weight']) && $cabin_qode_options['testimonials_author_job_position_font_weight'] !== '') {
    $testimonials_author_job_position_styles[] = 'font-weight: '.$cabin_qode_options['testimonials_author_job_position_font_weight'];
}

if(isset($cabin_qode_options['testimonials_author_job_position_font_style']) && $cabin_qode_options['testimonials_author_job_position_font_style'] !== '') {
    $testimonials_author_job_position_styles[] = 'font-style: '.$cabin_qode_options['testimonials_author_job_position_font_style'];
}

if(isset($cabin_qode_options['testimonials_author_job_position_text_transform']) && $cabin_qode_options['testimonials_author_job_position_text_transform'] !== '') {
    $testimonials_author_job_position_styles[] = 'text-transform: '.$cabin_qode_options['testimonials_author_job_position_text_transform'];
}

if(isset($cabin_qode_options['testimonials_author_job_position_color']) && $cabin_qode_options['testimonials_author_job_position_color'] !== '') {
    $testimonials_author_job_position_styles[] = 'color: '.$cabin_qode_options['testimonials_author_job_position_color'];
}

if(is_array($testimonials_author_job_position_styles) && count($testimonials_author_job_position_styles)) { ?>
    .testimonials .testimonial_text_inner p.testimonial_author .testimonials_job{
    <?php echo esc_attr(implode(';', $testimonials_author_job_position_styles)); ?>
    }
<?php } ?>


<?php
$testimonials_navigation_button_style = array();
if(isset($cabin_qode_options['testimonials_navigation_width']) && $cabin_qode_options['testimonials_navigation_width'] !== '') {
    $testimonials_navigation_button_style[] = 'width: '.$cabin_qode_options['testimonials_navigation_width'].'px';
}

if(isset($cabin_qode_options['testimonials_navigation_height']) && $cabin_qode_options['testimonials_navigation_height'] !== '') {
    $testimonials_navigation_button_style[] = 'height: '.$cabin_qode_options['testimonials_navigation_height'].'px';
}

if(is_array($testimonials_navigation_button_style) && count($testimonials_navigation_button_style)) { ?>
    .testimonials_holder .flex-control-paging li a{
    <?php echo esc_attr(implode(';', $testimonials_navigation_button_style)); ?>
    }
<?php } ?>


<?php
$temp_transparency = '';
$temp_rgb_color = '';
$color_with_transparency = '';

if ((isset($cabin_qode_options['testimonials_navigation_active_color']) && !empty($cabin_qode_options['testimonials_navigation_active_color'])) ) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_navigation_active_color']);
    if (isset($cabin_qode_options['testimonials_navigation_active_color_transparency']) && $cabin_qode_options['testimonials_navigation_active_color_transparency']!=="") {
        $temp_transparency = $cabin_qode_options['testimonials_navigation_active_color_transparency'];
    }
    else{ $temp_transparency = 1;}
    $color_with_transparency = 'rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency).');'; ?>

    .testimonials_holder .flex-control-paging li a.flex-active,
    .testimonials_holder.light .flex-control-paging li a.flex-active{
    background-color: <?php echo esc_attr($color_with_transparency); ?>
    }
<?php } ?>

<?php if (((isset($cabin_qode_options['testimonials_navigation_border_radius']) && $cabin_qode_options['testimonials_navigation_border_radius'] !== '')) || ((isset($cabin_qode_options['testimonials_navigation_border_width']) && $cabin_qode_options['testimonials_navigation_border_width'] !== ''))) { ?>
    .testimonials_holder .flex-control-paging li a{
    border-radius: <?php echo esc_attr($cabin_qode_options['testimonials_navigation_border_radius']);  ?>px;
    border-width: <?php echo esc_attr($cabin_qode_options['testimonials_navigation_border_width']);  ?>px;
    }
<?php } ?>

<?php
$testimonials_navigation_style = array();

if(isset($cabin_qode_options['testimonials_navigation_color']) && !empty($cabin_qode_options['testimonials_navigation_color'])) {
    $testimonials_navigation_style[] = 'background-color: '.$cabin_qode_options['testimonials_navigation_color'];
}

if(isset($cabin_qode_options['testimonials_navigation_color_transparency']) && $cabin_qode_options['testimonials_navigation_color_transparency'] !== '') {
    $testimonials_navigation_style[] = 'opacity: '.($cabin_qode_options['testimonials_navigation_color_transparency']);
}

if(is_array($testimonials_navigation_style) && count($testimonials_navigation_style)) { ?>
    .testimonials_holder .flex-control-paging li a{
    <?php echo esc_attr(implode(';', $testimonials_navigation_style)); ?>
    }
<?php } ?>



<?php
$temp_transparency = '';
$temp_rgb_color = '';
$color_with_transparency = '';
if ((isset($cabin_qode_options['testimonials_navigation_border_color']) && !empty($cabin_qode_options['testimonials_navigation_border_color'])) ) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_navigation_border_color']);
    if (isset($cabin_qode_options['testimonials_navigation_border_transparency']) && $cabin_qode_options['testimonials_navigation_border_transparency']!=="") {
        $temp_transparency = $cabin_qode_options['testimonials_navigation_border_transparency'];
    }
    else{ $temp_transparency = 1;}
    $color_with_transparency = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');'; ?>

    .testimonials_holder .flex-control-paging li a{
    border-color: <?php echo esc_attr($color_with_transparency);  ?>;
    }
<?php } ?>

<?php
$temp_transparency = '';
$temp_rgb_color = '';
$color_with_transparency = '';
if ((isset($cabin_qode_options['testimonials_navigation_active_border_color']) && !empty($cabin_qode_options['testimonials_navigation_active_border_color'])) ) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_navigation_active_border_color']);
    if (isset($cabin_qode_options['testimonials_navigation_active_border_transparency']) && $cabin_qode_options['testimonials_navigation_active_border_transparency']!=="") {
        $temp_transparency = $cabin_qode_options['testimonials_navigation_active_border_transparency'];
    }
    else{ $temp_transparency = 1;}
    $color_with_transparency = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');'; ?>

    .testimonials_holder .flex-control-paging li a.flex-active{
    border-color: <?php echo esc_attr($color_with_transparency);  ?>;
    }
<?php } ?>


<?php
$testimonials_arrows_color = '';
$testimonials_arrows_border_color = '';

if ((isset($cabin_qode_options['testimonials_arrows_color']) && !empty($cabin_qode_options['testimonials_arrows_color']))  || ((isset($cabin_qode_options['testimonials_arrows_border_radius']) && $cabin_qode_options['testimonials_arrows_border_radius'] !== '')) || ((isset($cabin_qode_options['testimonials_arrows_border_width']) && $cabin_qode_options['testimonials_arrows_border_width'] !== '')) || ((isset($cabin_qode_options['testimonials_arrows_border_color']) && $cabin_qode_options['testimonials_arrows_border_color'] !== ''))) {
    $temp_transparency = '';
    $temp_rgb_color = '';
    if ((isset($cabin_qode_options['testimonials_arrows_color']) && !empty($cabin_qode_options['testimonials_arrows_color']))) {
        $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_arrows_color']);
        if(isset($cabin_qode_options['testimonials_arrows_color_transparency']) && ($cabin_qode_options['testimonials_arrows_color_transparency']!== '')) {
            $temp_transparency = $cabin_qode_options['testimonials_arrows_color_transparency'];
        }
        else{
            $temp_transparency = 1;
        }
        $testimonials_arrows_color = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');';
    }
    $temp_transparency = '';
    $temp_rgb_color = '';
    if ((isset($cabin_qode_options['testimonials_arrows_border_color']) && !empty($cabin_qode_options['testimonials_arrows_border_color']))) {
        $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_arrows_border_color']);
        if(isset($cabin_qode_options['testimonials_arrows_border_transparency']) && ($cabin_qode_options['testimonials_arrows_border_transparency']!== '')) {
            $temp_transparency = $cabin_qode_options['testimonials_arrows_border_transparency'];
        }
        else{
            $temp_transparency = 1;
        }
        $testimonials_arrows_border_color = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');';
    } ?>


    <?php if ($testimonials_arrows_color != '' || $testimonials_arrows_border_color != '' || (isset($cabin_qode_options['testimonials_arrows_border_radius']) && $cabin_qode_options['testimonials_arrows_border_radius'] !== '') || (isset($cabin_qode_options['testimonials_arrows_border_width']) && $cabin_qode_options['testimonials_arrows_border_width'] !== '')) { ?>
        .testimonials_holder .flex-direction-nav a{
        background-color: <?php echo esc_attr($testimonials_arrows_color); ?>;
        border-radius: <?php echo esc_attr($cabin_qode_options['testimonials_arrows_border_radius']);  ?>px;
        border-width: <?php echo esc_attr($cabin_qode_options['testimonials_arrows_border_width']);  ?>px;
        border-color: <?php echo esc_attr($testimonials_arrows_border_color);  ?>;
        }
    <?php } ?>
<?php } ?>

<?php
$temp_transparency = '';
$temp_rgb_color = '';
$color_with_transparency = '';
if(isset($cabin_qode_options['testimonials_arrows_border_hover_color']) && $cabin_qode_options['testimonials_arrows_border_hover_color']!=='') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_arrows_border_hover_color']);

    if(isset($cabin_qode_options['testimonials_arrows_border_hover_transparency']) && ($cabin_qode_options['testimonials_arrows_border_hover_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['testimonials_arrows_border_hover_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $color_with_transparency = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');';
    ?>
    .testimonials_holder .flex-direction-nav a:hover{
    border-color: <?php echo esc_attr($color_with_transparency);  ?>;
    }
<?php } ?>

<?php

$temp_transparency = '';
$temp_rgb_color = '';
$color_with_transparency = '';
if ((isset($cabin_qode_options['testimonials_arrows_icon_color']) && !empty($cabin_qode_options['testimonials_arrows_icon_color']))) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_arrows_icon_color']);
    if(isset($cabin_qode_options['testimonials_arrows_transparency']) && ($cabin_qode_options['testimonials_arrows_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['testimonials_arrows_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $color_with_transparency = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');'; ?>
    .testimonials_holder .flex-direction-nav a span:before{
    color: <?php echo esc_attr($color_with_transparency); ?>;
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['testimonials_arrows_size']) && ($cabin_qode_options['testimonials_arrows_size'])!=='')) { ?>
    .testimonials_holder .flex-direction-nav a span:before{
    font-size: <?php echo esc_attr($cabin_qode_options['testimonials_arrows_size']); ?>px;
    }
<?php } ?>

<?php
$temp_transparency = '';
$temp_rgb_color = '';
$hover_color_with_transparency = '';
if ((isset($cabin_qode_options['testimonials_arrows_icon_hover_color']) && !empty($cabin_qode_options['testimonials_arrows_icon_hover_color']))) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_arrows_icon_hover_color']);
    if(isset($cabin_qode_options['testimonials_arrows_hover_transparency']) && ($cabin_qode_options['testimonials_arrows_hover_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['testimonials_arrows_hover_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $hover_color_with_transparency = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');'; ?>

    .testimonials_holder .flex-direction-nav a:hover span:before{
    color: <?php echo esc_attr($hover_color_with_transparency); ?>;
    }
<?php } ?>

<?php
$temp_transparency = '';
$temp_rgb_color = '';
$hover_color_with_transparency = '';
if ((isset($cabin_qode_options['testimonials_arrows_active_color']) && !empty($cabin_qode_options['testimonials_arrows_active_color'])) ) {

    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['testimonials_arrows_active_color']);
    if(isset($cabin_qode_options['testimonials_arrows_active_color_transparency']) && ($cabin_qode_options['testimonials_arrows_active_color_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['testimonials_arrows_active_color_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $hover_color_with_transparency = 'rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.');'; ?>
    .testimonials_holder .flex-direction-nav a:hover{
    background-color: <?php echo esc_attr($hover_color_with_transparency); ?>;
    }
<?php } ?>

<?php
$testimonials_arrow_button_style = array();
$testimonials_arrow_margin ='';

if(isset($cabin_qode_options['testimonials_arrows_button_width']) && $cabin_qode_options['testimonials_arrows_button_width'] !== '') {
    $testimonials_arrow_button_style[] = 'width: '.$cabin_qode_options['testimonials_arrows_button_width'].'px';
}

if(isset($cabin_qode_options['testimonials_arrows_button_height']) && $cabin_qode_options['testimonials_arrows_button_height'] !== '') {
    $testimonials_arrow_button_style[] = 'height: '.$cabin_qode_options['testimonials_arrows_button_height'].'px';
    $testimonials_arrow_button_style[] = 'line-height: '.$cabin_qode_options['testimonials_arrows_button_height'].'px';
    $testimonials_arrow_margin = $cabin_qode_options['testimonials_arrows_button_height']/2;
    $testimonials_arrow_margin = 'margin: -'.$testimonials_arrow_margin.'px 0 0 0';
}

if(is_array($testimonials_arrow_button_style) && count($testimonials_arrow_button_style)) { ?>
    .testimonials_holder .flex-direction-nav a,
    .testimonials_holder .flex-direction-nav a span,
    .testimonials_holder .flex-direction-nav a span:before{
    <?php echo esc_attr(implode(';', $testimonials_arrow_button_style)); ?>
    }
    .testimonials_holder .flex-direction-nav a{
    <?php echo esc_attr($testimonials_arrow_margin); ?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['testimonials_image_border_radius']) && ($cabin_qode_options['testimonials_image_border_radius'])!=='')) { ?>
    .testimonials .testimonial_image_holder{
    border-radius: <?php echo esc_attr($cabin_qode_options['testimonials_image_border_radius']); ?>px;
    }
<?php } ?>



<?php if (!empty($cabin_qode_options['counter_color']) || !empty($cabin_qode_options['counters_fontweight']) || !empty($cabin_qode_options['counters_font_size']) || (isset($cabin_qode_options['counters_font_family']) && $cabin_qode_options['counters_font_family'] != '-1')) { ?>
    .q_counter_holder span.counter{
    <?php if (!empty($cabin_qode_options['counter_color'])) { ?>  color: <?php echo esc_attr($cabin_qode_options['counter_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['counters_fontweight'])) { ?>    font-weight: <?php echo esc_attr($cabin_qode_options['counters_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['counters_font_size'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['counters_font_size']);  ?>px; <?php } ?>
    <?php if ((isset($cabin_qode_options['counters_font_family']) && $cabin_qode_options['counters_font_family'] != '-1')) { ?>
        <?php $font = str_replace('+', ' ', $cabin_qode_options['counters_font_family']); ?>
        font-family: '<?php echo esc_attr($font); ?>', sans-serif;
    <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['counter_text_color']) || !empty($cabin_qode_options['counters_text_fontweight']) || !empty($cabin_qode_options['counters_text_texttransform']) || $cabin_qode_options['counters_text_letterspacing'] !== '' || !empty($cabin_qode_options['counters_text_font_size'])) { ?>
    .q_counter_holder p.counter_text{
    <?php if (!empty($cabin_qode_options['counter_text_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['counter_text_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['counters_text_fontweight'])) { ?>   font-weight: <?php echo esc_attr($cabin_qode_options['counters_text_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['counters_text_texttransform'])) { ?>    text-transform: <?php echo esc_attr($cabin_qode_options['counters_text_texttransform']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['counters_text_letterspacing'])) { ?>    letter-spacing: <?php echo esc_attr($cabin_qode_options['counters_text_letterspacing']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['counters_text_font_size'])) { ?>    font-size: <?php echo esc_attr($cabin_qode_options['counters_text_font_size']);  ?>px; line-height: 1.25em; <?php } ?>
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['counter_separator_color'])) { ?>
    .wpb_column>.wpb_wrapper .q_counter_holder .separator{
    <?php if (!empty($cabin_qode_options['counter_separator_color'])) { ?>    border-color: <?php echo esc_attr($cabin_qode_options['counter_separator_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php
$counters_title_styles = array();

if(isset($cabin_qode_options['counters_title_font_family']) && $cabin_qode_options['counters_title_font_family'] !== '-1') {
    $counters_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['counters_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['counters_title_font_size']) && $cabin_qode_options['counters_title_font_size'] !== '') {
    $counters_title_styles[] = 'font-size: '.$cabin_qode_options['counters_title_font_size'].'px';
}

if(isset($cabin_qode_options['counters_title_line_height']) && $cabin_qode_options['counters_title_line_height'] !== '') {
    $counters_title_styles[] = 'line-height: '.$cabin_qode_options['counters_title_line_height'].'px';
}

if(isset($cabin_qode_options['counters_title_letter_spacing']) && $cabin_qode_options['counters_title_letter_spacing'] !== '') {
    $counters_title_styles[] = 'letter-spacing: '.$cabin_qode_options['counters_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['counters_title_font_weight']) && $cabin_qode_options['counters_title_font_weight'] !== '') {
    $counters_title_styles[] = 'font-weight: '.$cabin_qode_options['counters_title_font_weight'];
}

if(isset($cabin_qode_options['counters_title_font_style']) && $cabin_qode_options['counters_title_font_style'] !== '') {
    $counters_title_styles[] = 'font-style: '.$cabin_qode_options['counters_title_font_style'];
}

if(isset($cabin_qode_options['counters_title_text_transform']) && $cabin_qode_options['counters_title_text_transform'] !== '') {
    $counters_title_styles[] = 'text-transform: '.$cabin_qode_options['counters_title_text_transform'];
}

if(isset($cabin_qode_options['counters_title_color']) && $cabin_qode_options['counters_title_color'] !== '') {
    $counters_title_styles[] = 'color: '.$cabin_qode_options['counters_title_color'];
}

if(is_array($counters_title_styles) && count($counters_title_styles)) { ?>
    .q_counter_holder .counter_title{
    <?php echo esc_attr(implode(';', $counters_title_styles)); ?>
    }
<?php } ?>

<?php
$progress_bar_horizontal_title_style = array();

if(isset($cabin_qode_options['progress_bar_horizontal_font_family']) && $cabin_qode_options['progress_bar_horizontal_font_family'] !== '-1') {
    $progress_bar_horizontal_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['progress_bar_horizontal_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['progress_bar_horizontal_font_size']) && $cabin_qode_options['progress_bar_horizontal_font_size'] !== '') {
    $progress_bar_horizontal_title_style[] = 'font-size: '.$cabin_qode_options['progress_bar_horizontal_font_size'].'px';
}

if(isset($cabin_qode_options['progress_bar_horizontal_line_height']) && $cabin_qode_options['progress_bar_horizontal_line_height'] !== '') {
    $progress_bar_horizontal_title_style[] = 'line-height: '.$cabin_qode_options['progress_bar_horizontal_line_height'].'px';
}

if(isset($cabin_qode_options['progress_bar_horizontal_letter_spacing']) && $cabin_qode_options['progress_bar_horizontal_letter_spacing'] !== '') {
    $progress_bar_horizontal_title_style[] = 'letter-spacing: '.$cabin_qode_options['progress_bar_horizontal_letter_spacing'].'px';
}

if(isset($cabin_qode_options['progress_bar_horizontal_font_weight']) && $cabin_qode_options['progress_bar_horizontal_font_weight'] !== '') {
    $progress_bar_horizontal_title_style[] = 'font-weight: '.$cabin_qode_options['progress_bar_horizontal_font_weight'];
}

if(isset($cabin_qode_options['progress_bar_horizontal_font_style']) && $cabin_qode_options['progress_bar_horizontal_font_style'] !== '') {
    $progress_bar_horizontal_title_style[] = 'font-style: '.$cabin_qode_options['progress_bar_horizontal_font_style'];
}

if(isset($cabin_qode_options['progress_bar_horizontal_text_transform']) && $cabin_qode_options['progress_bar_horizontal_text_transform'] !== '') {
    $progress_bar_horizontal_title_style[] = 'text-transform: '.$cabin_qode_options['progress_bar_horizontal_text_transform'];
}

if(isset($cabin_qode_options['progress_bar_horizontal_color']) && $cabin_qode_options['progress_bar_horizontal_color'] !== '') {
    $progress_bar_horizontal_title_style[] = 'color: '.$cabin_qode_options['progress_bar_horizontal_color'];
}

if(is_array($progress_bar_horizontal_title_style) && count($progress_bar_horizontal_title_style)) { ?>
    .q_progress_bar .progress_title{
    <?php echo esc_attr(implode(';', $progress_bar_horizontal_title_style)); ?>
    }
<?php } ?>


<?php
$progress_bar_horizontal_percentage_percentage_style = array();

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_font_family']) && $cabin_qode_options['progress_bar_horizontal_percentage_font_family'] !== '-1') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['progress_bar_horizontal_percentage_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_font_size']) && $cabin_qode_options['progress_bar_horizontal_percentage_font_size'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'font-size: '.$cabin_qode_options['progress_bar_horizontal_percentage_font_size'].'px';
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_line_height']) && $cabin_qode_options['progress_bar_horizontal_percentage_line_height'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'line-height: '.$cabin_qode_options['progress_bar_horizontal_percentage_line_height'].'px';
    $progress_bar_horizontal_percentage_percentage_style[] = 'height: '. $cabin_qode_options['progress_bar_horizontal_percentage_line_height'] .'px';
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_letter_spacing']) && $cabin_qode_options['progress_bar_horizontal_percentage_letter_spacing'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'letter-spacing: '.$cabin_qode_options['progress_bar_horizontal_percentage_letter_spacing'].'px';
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_font_weight']) && $cabin_qode_options['progress_bar_horizontal_percentage_font_weight'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'font-weight: '.$cabin_qode_options['progress_bar_horizontal_percentage_font_weight'];
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_font_style']) && $cabin_qode_options['progress_bar_horizontal_percentage_font_style'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'font-style: '.$cabin_qode_options['progress_bar_horizontal_percentage_font_style'];
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_text_transform']) && $cabin_qode_options['progress_bar_horizontal_percentage_text_transform'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'text-transform: '.$cabin_qode_options['progress_bar_horizontal_percentage_text_transform'];
}

if(isset($cabin_qode_options['progress_bar_horizontal_percentage_color']) && $cabin_qode_options['progress_bar_horizontal_percentage_color'] !== '') {
    $progress_bar_horizontal_percentage_percentage_style[] = 'color: '.$cabin_qode_options['progress_bar_horizontal_percentage_color'];
}

if(is_array($progress_bar_horizontal_percentage_percentage_style) && count($progress_bar_horizontal_percentage_percentage_style)) { ?>
    .q_progress_bar .progress_number, .q_progress_bar .progress_number_wrapper.static .progress_number{
    <?php echo esc_attr(implode(';', $progress_bar_horizontal_percentage_percentage_style)); ?>
    }
<?php } ?>

<?php
$progress_bar_vertical_title_style = array();

if(isset($cabin_qode_options['progress_bar_vertical_font_family']) && $cabin_qode_options['progress_bar_vertical_font_family'] !== '-1') {
    $progress_bar_vertical_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['progress_bar_vertical_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['progress_bar_vertical_font_size']) && $cabin_qode_options['progress_bar_vertical_font_size'] !== '') {
    $progress_bar_vertical_title_style[] = 'font-size: '.$cabin_qode_options['progress_bar_vertical_font_size'].'px';
}

if(isset($cabin_qode_options['progress_bar_vertical_line_height']) && $cabin_qode_options['progress_bar_vertical_line_height'] !== '') {
    $progress_bar_vertical_title_style[] = 'line-height: '.$cabin_qode_options['progress_bar_vertical_line_height'].'px';
}

if(isset($cabin_qode_options['progress_bar_vertical_letter_spacing']) && $cabin_qode_options['progress_bar_vertical_letter_spacing'] !== '') {
    $progress_bar_vertical_title_style[] = 'letter-spacing: '.$cabin_qode_options['progress_bar_vertical_letter_spacing'].'px';
}

if(isset($cabin_qode_options['progress_bar_vertical_font_weight']) && $cabin_qode_options['progress_bar_vertical_font_weight'] !== '') {
    $progress_bar_vertical_title_style[] = 'font-weight: '.$cabin_qode_options['progress_bar_vertical_font_weight'];
}

if(isset($cabin_qode_options['progress_bar_vertical_font_style']) && $cabin_qode_options['progress_bar_vertical_font_style'] !== '') {
    $progress_bar_vertical_title_style[] = 'font-style: '.$cabin_qode_options['progress_bar_vertical_font_style'];
}

if(isset($cabin_qode_options['progress_bar_vertical_text_transform']) && $cabin_qode_options['progress_bar_vertical_text_transform'] !== '') {
    $progress_bar_vertical_title_style[] = 'text-transform: '.$cabin_qode_options['progress_bar_vertical_text_transform'];
}

if(isset($cabin_qode_options['progress_bar_vertical_color']) && $cabin_qode_options['progress_bar_vertical_color'] !== '') {
    $progress_bar_vertical_title_style[] = 'color: '.$cabin_qode_options['progress_bar_vertical_color'];
}

if(is_array($progress_bar_vertical_title_style) && count($progress_bar_vertical_title_style)) { ?>
    .q_progress_bars_vertical .progress_title{
    <?php echo esc_attr(implode(';', $progress_bar_vertical_title_style)); ?>
    }
<?php } ?>


<?php
$progress_bar_vertical_percentage_style = array();

if(isset($cabin_qode_options['progress_bar_vertical_percentage_font_family']) && $cabin_qode_options['progress_bar_vertical_percentage_font_family'] !== '-1') {
    $progress_bar_vertical_percentage_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['progress_bar_vertical_percentage_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_font_size']) && $cabin_qode_options['progress_bar_vertical_percentage_font_size'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'font-size: '.$cabin_qode_options['progress_bar_vertical_percentage_font_size'].'px';
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_line_height']) && $cabin_qode_options['progress_bar_vertical_percentage_line_height'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'line-height: '.$cabin_qode_options['progress_bar_vertical_percentage_line_height'].'px';
    $progress_bar_vertical_percentage_style[] = 'height: '.$cabin_qode_options['progress_bar_vertical_percentage_line_height'].'px';
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_letter_spacing']) && $cabin_qode_options['progress_bar_vertical_percentage_letter_spacing'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'letter-spacing: '.$cabin_qode_options['progress_bar_vertical_percentage_letter_spacing'].'px';
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_font_weight']) && $cabin_qode_options['progress_bar_vertical_percentage_font_weight'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'font-weight: '.$cabin_qode_options['progress_bar_vertical_percentage_font_weight'];
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_font_style']) && $cabin_qode_options['progress_bar_vertical_percentage_font_style'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'font-style: '.$cabin_qode_options['progress_bar_vertical_percentage_font_style'];
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_text_transform']) && $cabin_qode_options['progress_bar_vertical_percentage_text_transform'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'text-transform: '.$cabin_qode_options['progress_bar_vertical_percentage_text_transform'];
}

if(isset($cabin_qode_options['progress_bar_vertical_percentage_color']) && $cabin_qode_options['progress_bar_vertical_percentage_color'] !== '') {
    $progress_bar_vertical_percentage_style[] = 'color: '.$cabin_qode_options['progress_bar_vertical_percentage_color'];
}

if(is_array($progress_bar_vertical_percentage_style) && count($progress_bar_vertical_percentage_style)) { ?>
    .q_progress_bars_vertical .progress_number{
    <?php echo esc_attr(implode(';', $progress_bar_vertical_percentage_style)); ?>
    }
<?php } ?>



<?php if (!empty($cabin_qode_options['pie_charts_fontsize']) || !empty($cabin_qode_options['pie_charts_fontweight'])) { ?>
    .q_pie_chart_holder .tocounter{
    <?php if (!empty($cabin_qode_options['pie_charts_fontsize'])) { ?>    font-size: <?php echo esc_attr($cabin_qode_options['pie_charts_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['pie_charts_fontweight'])) { ?>  font-weight: <?php echo esc_attr($cabin_qode_options['pie_charts_fontweight']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['pie_charts_margin_below_chart']) && $cabin_qode_options['pie_charts_margin_below_chart'] !== '') { ?>
    .q_pie_chart_holder .pie_chart_text,
    .q_pie_chart_holder .pie_chart_text.without_title {
    margin-top: <?php echo esc_attr($cabin_qode_options['pie_charts_margin_below_chart']); ?>px;
    }
<?php } ?>




<?php
/*Blog List - Boxes*/

$blog_list_boxes_padding_styles = array();

if(isset($cabin_qode_options['blog_list_boxes_padding_top']) && $cabin_qode_options['blog_list_boxes_padding_top'] !== '') {
    $blog_list_boxes_padding_styles[] = 'padding-top: '.$cabin_qode_options['blog_list_boxes_padding_top'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_padding_right']) && $cabin_qode_options['blog_list_boxes_padding_right'] !== '') {
    $blog_list_boxes_padding_styles[] = 'padding-right: '.$cabin_qode_options['blog_list_boxes_padding_right'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_padding_bottom']) && $cabin_qode_options['blog_list_boxes_padding_bottom'] !== '') {
    $blog_list_boxes_padding_styles[] = 'padding-bottom: '.$cabin_qode_options['blog_list_boxes_padding_bottom'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_padding_left']) && $cabin_qode_options['blog_list_boxes_padding_left'] !== '') {
    $blog_list_boxes_padding_styles[] = 'padding-left: '.$cabin_qode_options['blog_list_boxes_padding_left'].'px';
}

if(is_array($blog_list_boxes_padding_styles) && count($blog_list_boxes_padding_styles)) { ?>
    .latest_post_holder.boxes.has_background .latest_post,
    .latest_post_holder.boxes .latest_post {
    <?php echo esc_attr(implode(';', $blog_list_boxes_padding_styles)); ?>
    }

<?php }?>

<?php
if(isset($cabin_qode_options['blog_list_boxes_title_margin_bottom']) && $cabin_qode_options['blog_list_boxes_title_margin_bottom']!=''){ ?>
    .latest_post_holder.boxes .latest_post .latest_post_title_holder{
    margin-bottom: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_title_margin_bottom']).'px'?>
    }
    <?php
}
?>

<?php
if(isset($cabin_qode_options['blog_list_boxes_post_info_margin_bottom']) && $cabin_qode_options['blog_list_boxes_post_info_margin_bottom']!=''){ ?>
    .latest_post_holder.boxes .latest_post .post_info_section{
    margin-bottom: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_post_info_margin_bottom']).'px'?>
    }
    <?php
}
?>

<?php
if(isset($cabin_qode_options['blog_list_boxes_read_more_margin_top']) && $cabin_qode_options['blog_list_boxes_read_more_margin_top']!=''){ ?>
    .latest_post_holder.boxes .latest_post a.qbutton{
    margin-top: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_read_more_margin_top']).'px'?>
    }
    <?php
}
?>


<?php
$blog_list_boxes_title_styles = array();

if(isset($cabin_qode_options['blog_list_boxes_title_font_family']) && $cabin_qode_options['blog_list_boxes_title_font_family'] !== '-1') {
    $blog_list_boxes_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_list_boxes_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_list_boxes_title_font_size']) && $cabin_qode_options['blog_list_boxes_title_font_size'] !== '') {
    $blog_list_boxes_title_styles[] = 'font-size: '.$cabin_qode_options['blog_list_boxes_title_font_size'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_title_line_height']) && $cabin_qode_options['blog_list_boxes_title_line_height'] !== '') {
    $blog_list_boxes_title_styles[] = 'line-height: '.$cabin_qode_options['blog_list_boxes_title_line_height'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_title_letter_spacing']) && $cabin_qode_options['blog_list_boxes_title_letter_spacing'] !== '') {
    $blog_list_boxes_title_styles[] = 'letter-spacing: '.$cabin_qode_options['blog_list_boxes_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_title_font_weight']) && $cabin_qode_options['blog_list_boxes_title_font_weight'] !== '') {
    $blog_list_boxes_title_styles[] = 'font-weight: '.$cabin_qode_options['blog_list_boxes_title_font_weight'];
}

if(isset($cabin_qode_options['blog_list_boxes_title_font_style']) && $cabin_qode_options['blog_list_boxes_title_font_style'] !== '') {
    $blog_list_boxes_title_styles[] = 'font-style: '.$cabin_qode_options['blog_list_boxes_title_font_style'];
}

if(isset($cabin_qode_options['blog_list_boxes_title_text_transform']) && $cabin_qode_options['blog_list_boxes_title_text_transform'] !== '') {
    $blog_list_boxes_title_styles[] = 'text-transform: '.$cabin_qode_options['blog_list_boxes_title_text_transform'];
}

if(isset($cabin_qode_options['blog_list_boxes_title_color']) && $cabin_qode_options['blog_list_boxes_title_color'] !== '') {
    $blog_list_boxes_title_styles[] = 'color: '.$cabin_qode_options['blog_list_boxes_title_color'];
}

if(is_array($blog_list_boxes_title_styles) && count($blog_list_boxes_title_styles)) { ?>
    .boxes .latest_post_text .latest_post_title > *{
    <?php echo esc_attr(implode(';', $blog_list_boxes_title_styles)); ?>
    }

<?php }?>

<?php
if(isset($cabin_qode_options['blog_list_boxes_title_hover_color']) && $cabin_qode_options['blog_list_boxes_title_hover_color'] !== '') {?>

    .boxes .latest_post_text .latest_post_title a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_title_hover_color']); ?>;
    }


<?php } ?>

<?php
$blog_list_boxes_post_info_styles = array();

if(isset($cabin_qode_options['blog_list_boxes_post_info_font_family']) && $cabin_qode_options['blog_list_boxes_post_info_font_family'] !== '-1') {
    $blog_list_boxes_post_info_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_list_boxes_post_info_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_font_size']) && $cabin_qode_options['blog_list_boxes_post_info_font_size'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'font-size: '.$cabin_qode_options['blog_list_boxes_post_info_font_size'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_line_height']) && $cabin_qode_options['blog_list_boxes_post_info_line_height'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'line-height: '.$cabin_qode_options['blog_list_boxes_post_info_line_height'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_letter_spacing']) && $cabin_qode_options['blog_list_boxes_post_info_letter_spacing'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'letter-spacing: '.$cabin_qode_options['blog_list_boxes_post_info_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_font_weight']) && $cabin_qode_options['blog_list_boxes_post_info_font_weight'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'font-weight: '.$cabin_qode_options['blog_list_boxes_post_info_font_weight'];
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_font_style']) && $cabin_qode_options['blog_list_boxes_post_info_font_style'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'font-style: '.$cabin_qode_options['blog_list_boxes_post_info_font_style'];
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_text_transform']) && $cabin_qode_options['blog_list_boxes_post_info_text_transform'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'text-transform: '.$cabin_qode_options['blog_list_boxes_post_info_text_transform'];
}

if(isset($cabin_qode_options['blog_list_boxes_post_info_color']) && $cabin_qode_options['blog_list_boxes_post_info_color'] !== '') {
    $blog_list_boxes_post_info_styles[] = 'color: '.$cabin_qode_options['blog_list_boxes_post_info_color'];?>
    .boxes .latest_post_text .post_info_section .post_author_link,
    .boxes .latest_post_text .post_info_section span{
    color:<?php echo esc_attr($cabin_qode_options['blog_list_boxes_post_info_color']); ?>
    }
    <?php
}

if(is_array($blog_list_boxes_post_info_styles) && count($blog_list_boxes_post_info_styles)) { ?>
    .boxes .latest_post_text .post_info_section,
    .boxes .post_info_section .date{
    <?php echo esc_attr(implode(';', $blog_list_boxes_post_info_styles)); ?>
    }

<?php }?>


<?php
if(isset($cabin_qode_options['blog_list_boxes_post_info_link_color']) && $cabin_qode_options['blog_list_boxes_post_info_link_color'] !== '') {?>

    .boxes .latest_post_text .post_info_section a{
    color: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_post_info_link_color']); ?>;
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['blog_list_boxes_post_info_link_hover_color']) && $cabin_qode_options['blog_list_boxes_post_info_link_hover_color'] !== '') {?>

    .boxes .latest_post_text .post_info_section a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_post_info_link_hover_color']); ?>;
    }

<?php } ?>

<?php
if(isset($cabin_qode_options['blog_list_boxes_date_color']) && $cabin_qode_options['blog_list_boxes_date_color'] !== '') {?>

    .latest_post_holder.boxes .date,
    .latest_post_holder.image_in_box .date{
    color: <?php echo esc_attr($cabin_qode_options['blog_list_boxes_date_color']); ?>;
    }

<?php } ?>



<?php
if(isset($cabin_qode_options['blog_list_minimal_title_margin_bottom']) && $cabin_qode_options['blog_list_minimal_title_margin_bottom']!=''){ ?>
    .latest_post_holder.minimal .latest_post .latest_post_title{
    margin-bottom: <?php echo esc_attr($cabin_qode_options['blog_list_minimal_title_margin_bottom']).'px'?>
    }
    <?php
}
?>

<?php
if(isset($cabin_qode_options['blog_list_minimal_post_info_margin_bottom']) && $cabin_qode_options['blog_list_minimal_post_info_margin_bottom']!=''){ ?>
    .latest_post_holder.minimal .latest_post .post_info_section{
    margin-bottom: <?php echo esc_attr($cabin_qode_options['blog_list_minimal_post_info_margin_bottom']).'px'?>
    }
    <?php
}
?>

<?php
if(isset($cabin_qode_options['blog_list_minimal_read_more_margin_top']) && $cabin_qode_options['blog_list_minimal_read_more_margin_top']!=''){ ?>
    .latest_post_holder.minimal .latest_post a.qbutton{
    margin-top: <?php echo esc_attr($cabin_qode_options['blog_list_minimal_read_more_margin_top']).'px'?>
    }
    <?php
}
?>


<?php


if(isset($cabin_qode_options['accordion_toogle_title_color']) && $cabin_qode_options['accordion_toogle_title_color']!=''){ ?>
    .q_accordion_holder.accordion .ui-accordion-header{
    color: <?php echo esc_attr($cabin_qode_options['accordion_toogle_title_color']).'!important;'?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['accordion_toogle_title_hover_color']) && $cabin_qode_options['accordion_toogle_title_hover_color']!=''){ ?>
    .q_accordion_holder.accordion .ui-accordion-header:hover,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-active,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-active span.tab-title{
    color: <?php echo esc_attr($cabin_qode_options['accordion_toogle_title_hover_color']).'!important;'?>
    }
<?php } ?>

<?php
$accordion_toggle_mark_styles = array();
if ((isset($cabin_qode_options['accordion_mark_background_color']) && $cabin_qode_options['accordion_mark_background_color']!='') || (isset($cabin_qode_options['accordion_mark_border_color']) && $cabin_qode_options['accordion_mark_border_color']!='') || (isset($cabin_qode_options['accordion_mark_border_radius']) && $cabin_qode_options['accordion_mark_border_radius']!='')){

    if(isset($cabin_qode_options['accordion_mark_background_color']) && $cabin_qode_options['accordion_mark_background_color']!=''){
        $accordion_toggle_mark_styles[] = 'background-color: '.$cabin_qode_options['accordion_mark_background_color'].'!important;';
    }

    if(isset($cabin_qode_options['accordion_mark_border_color']) && $cabin_qode_options['accordion_mark_border_color']!=''){
        $accordion_toggle_mark_styles[] = 'border-color: '.$cabin_qode_options['accordion_mark_border_color'];
    }
    elseif (isset($cabin_qode_options['accordion_mark_background_color']) && $cabin_qode_options['accordion_mark_background_color']!=''){
        $accordion_toggle_mark_styles[] = 'border-color: '.$cabin_qode_options['accordion_mark_background_color'].';';
    }

    if(isset($cabin_qode_options['accordion_mark_border_radius']) && $cabin_qode_options['accordion_mark_border_radius']!=''){
        $accordion_toggle_mark_styles[] = 'border-radius: '.$cabin_qode_options['accordion_mark_border_radius'].'px;';
    }
    if(is_array($accordion_toggle_mark_styles) && count($accordion_toggle_mark_styles)) { ?>
        .q_accordion_holder.accordion .ui-accordion-header .accordion_mark {
        <?php echo esc_attr(implode(';', $accordion_toggle_mark_styles)); ?>
        }

    <?php }}?>

<?php
$accordion_toggle_mark_hover_styles = array();
if ((isset($cabin_qode_options['accordion_mark_background_hover_color']) && $cabin_qode_options['accordion_mark_background_hover_color']!='') || (isset($cabin_qode_options['accordion_mark_border_hover_color']) && $cabin_qode_options['accordion_mark_border_hover_color']!='')){

    if(isset($cabin_qode_options['accordion_mark_background_hover_color']) && $cabin_qode_options['accordion_mark_background_hover_color']!=''){
        $accordion_toggle_mark_hover_styles[] = 'background-color: '.$cabin_qode_options['accordion_mark_background_hover_color'].'!important;';
    }

    if(isset($cabin_qode_options['accordion_mark_border_hover_color']) && $cabin_qode_options['accordion_mark_border_hover_color']!=''){
        $accordion_toggle_mark_hover_styles[] = 'border-color: '.$cabin_qode_options['accordion_mark_border_hover_color'];
    }
    elseif (isset($cabin_qode_options['accordion_mark_background_hover_color']) && $cabin_qode_options['accordion_mark_background_hover_color']!='') {
        $accordion_toggle_mark_hover_styles[] = 'border-color: '.$cabin_qode_options['accordion_mark_background_hover_color'].';';
    }

    if(is_array($accordion_toggle_mark_hover_styles) && count($accordion_toggle_mark_hover_styles)) { ?>
        .q_accordion_holder.accordion .ui-accordion-header:hover .accordion_mark,
        .q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark {
        <?php echo esc_attr(implode(';', $accordion_toggle_mark_hover_styles)); ?>
        }

    <?php }}?>

<?php
if(isset($cabin_qode_options['accordion_mark_icon_color']) && $cabin_qode_options['accordion_mark_icon_color']!=''){ ?>
    .q_accordion_holder.accordion .ui-accordion-header .accordion_mark_icon{
    color: <?php echo esc_attr($cabin_qode_options['accordion_mark_icon_color']).';'?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['accordion_mark_icon_hover_color']) && $cabin_qode_options['accordion_mark_icon_hover_color']!=''){ ?>
    .q_accordion_holder.accordion .ui-accordion-header:hover .accordion_mark_icon,
    .q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark_icon{
    color: <?php echo esc_attr($cabin_qode_options['accordion_mark_icon_hover_color'])?>
    }
<?php } ?>

<?php
$accordion_toggle_boxed_styles = array();
if ((isset($cabin_qode_options['accordion_toggle_boxed_background_color']) && $cabin_qode_options['accordion_toggle_boxed_background_color']!='') || (isset($cabin_qode_options['accordion_toggle_boxed_border_color']) && $cabin_qode_options['accordion_toggle_boxed_border_color']!='') || (isset($cabin_qode_options['accordion_toggle_boxed_border_radius']) && $cabin_qode_options['accordion_toggle_boxed_border_radius']!='')){

    if(isset($cabin_qode_options['accordion_toggle_boxed_background_color']) && $cabin_qode_options['accordion_toggle_boxed_background_color']!=''){
        $accordion_toggle_boxed_styles[] = 'background-color: '.$cabin_qode_options['accordion_toggle_boxed_background_color'].'!important;';
    }

    if(isset($cabin_qode_options['accordion_toggle_boxed_border_color']) && $cabin_qode_options['accordion_toggle_boxed_border_color']!=''){
        $accordion_toggle_boxed_styles[] = 'border-color: '.$cabin_qode_options['accordion_toggle_boxed_border_color'];
    }
    elseif (isset($cabin_qode_options['accordion_toggle_boxed_background_color']) && $cabin_qode_options['accordion_toggle_boxed_background_color']!=''){
        $accordion_toggle_boxed_styles[] = 'border-color: '.$cabin_qode_options['accordion_toggle_boxed_background_color'];
    }

    if(isset($cabin_qode_options['accordion_toggle_boxed_border_radius']) && $cabin_qode_options['accordion_toggle_boxed_border_radius']!=''){
        $accordion_toggle_boxed_styles[] = 'border-radius: '.$cabin_qode_options['accordion_toggle_boxed_border_radius'].'px;';
    }
    if(is_array($accordion_toggle_boxed_styles) && count($accordion_toggle_boxed_styles)) { ?>
        .q_accordion_holder.accordion.boxed .ui-accordion-header  {
        <?php echo esc_attr(implode(';', $accordion_toggle_boxed_styles)); ?>
        }

    <?php }}?>

<?php
$accordion_toggle_boxed_hover_styles = array();
if ((isset($cabin_qode_options['accordion_toggle_boxed_background_hover_color']) && $cabin_qode_options['accordion_toggle_boxed_background_hover_color']!='') || (isset($cabin_qode_options['accordion_toggle_boxed_border_hover_color']) && $cabin_qode_options['accordion_toggle_boxed_border_hover_color']!='')){

    if(isset($cabin_qode_options['accordion_toggle_boxed_background_hover_color']) && $cabin_qode_options['accordion_toggle_boxed_background_hover_color']!=''){
        $accordion_toggle_boxed_hover_styles[] = 'background-color: '.$cabin_qode_options['accordion_toggle_boxed_background_hover_color'].'!important;';
    }

    if(isset($cabin_qode_options['accordion_toggle_boxed_border_hover_color']) && $cabin_qode_options['accordion_toggle_boxed_border_hover_color']!=''){
        $accordion_toggle_boxed_hover_styles[] = 'border-color: '.$cabin_qode_options['accordion_toggle_boxed_border_hover_color'];
    }
    elseif (isset($cabin_qode_options['accordion_toggle_boxed_background_hover_color']) && $cabin_qode_options['accordion_toggle_boxed_background_hover_color']!='') {
        $accordion_toggle_boxed_hover_styles[] = 'border-color: '.$cabin_qode_options['accordion_toggle_boxed_background_hover_color'];
    }

    if(is_array($accordion_toggle_boxed_hover_styles) && count($accordion_toggle_boxed_hover_styles)) { ?>
        .q_accordion_holder.accordion.boxed .ui-accordion-header:hover,
        .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active  {
        <?php echo esc_attr(implode(';', $accordion_toggle_boxed_hover_styles)); ?>
        }

    <?php }}?>
<?php
if(isset($cabin_qode_options['google_maps_height'])){
    if (intval($cabin_qode_options['google_maps_height']) > 0) {
        ?>
        .q_google_map{
        height: <?php echo esc_attr(intval($cabin_qode_options['google_maps_height'])); ?>px;
        }
        <?php
    }
}
?>
<?php if (isset($cabin_qode_options['footer_main_image_background']) && $cabin_qode_options['footer_main_image_background'] != ""){ ?>
    .footer_inner{
    background-image:url(<?php echo esc_attr($cabin_qode_options['footer_main_image_background']); ?>);
    background-position: 0 0;
    }
    .footer_top_holder,.footer_bottom_holder, .content footer .container, .footer_ingrid_border_holder_outer{
    background-color:transparent;
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['footer_border_columns_color'])) { ?>
    footer.footer_border_columns .footer_top .qode_column{
    border-color:<?php echo esc_attr($cabin_qode_options['footer_border_columns_color']); ?>;
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['footer_bottom_border_element_color']) && $cabin_qode_options['footer_bottom_border_element'] == 'yes') { ?>
    .footer_top .widget_recent_entries > ul > li,
    .footer_top .widget_nav_menu li.menu-item,
    .footer_top .widget_recent_comments > ul > li,
    .footer_top .widget_nav_menu ul li,
    .footer_top .widget_pages ul li,
    .footer_top .widget_archive > ul > li,
    .footer_top .widget_categories > ul > li{
    border-bottom: 1px solid <?php echo esc_attr($cabin_qode_options['footer_bottom_border_element_color']); ?>;
    margin-bottom: 10px;
    padding-bottom: 10px;
    }
    .footer_top .widget_recent_entries > ul > li > a,
    .footer_top .widget_nav_menu li.menu-item > a,
    .footer_top .widget_recent_comments > ul > li > a,
    .footer_top .widget_nav_menu ul li > a,
    .footer_top .widget_pages ul li > a,
    .footer_top .widget_archive > ul > li > a,
    .footer_top .widget_categories > ul > li > a{
    margin-bottom:0;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['footer_top_background_color'])) { ?>
    .footer_top_holder, .footer_ingrid_border_holder_outer{
    background-color:<?php echo esc_attr($cabin_qode_options['footer_top_background_color']); ?>;
    }
<?php } ?>
<?php if ((!isset($cabin_qode_options['show_footer_top']) || $cabin_qode_options['show_footer_top'] != 'yes') && !empty($cabin_qode_options['footer_bottom_background_color'])) { ?>
    .footer_ingrid_border_holder_outer{
    background-color:<?php echo esc_attr($cabin_qode_options['footer_bottom_background_color']); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['footer_image_background']) && $cabin_qode_options['footer_image_background'] != ""){ ?>
    .footer_top_holder{
    background-image:url(<?php echo esc_attr($cabin_qode_options['footer_image_background']); ?>);
    }
<?php } ?>
<?php if ((isset($cabin_qode_options['footer_top_padding']) && $cabin_qode_options['footer_top_padding'] !== '') || (isset($cabin_qode_options['footer_bottom_padding']) && $cabin_qode_options['footer_bottom_padding'] !== '')) {
    if ($cabin_qode_options['footer_in_grid'] == 'yes') {?>
        .footer_top_holder .footer_top:not(footer_top_full) .container_inner{
        <?php if (isset($cabin_qode_options['footer_top_padding']) && $cabin_qode_options['footer_top_padding'] !== ''){ ?>padding-top: <?php echo esc_attr($cabin_qode_options['footer_top_padding']); ?>px; <?php } ?>
        <?php if (isset($cabin_qode_options['footer_bottom_padding']) && $cabin_qode_options['footer_bottom_padding'] !== ''){ ?>padding-bottom: <?php echo esc_attr($cabin_qode_options['footer_bottom_padding']); ?>px; <?php } ?>
        }
        .footer_top{
        padding-top: 0;
        padding-bottom: 0;
        }
    <?php } else {?>
        .footer_top.footer_top_full{
        <?php if (isset($cabin_qode_options['footer_top_padding']) && $cabin_qode_options['footer_top_padding'] !== ''){ ?>padding-top: <?php echo esc_attr($cabin_qode_options['footer_top_padding']); ?>px; <?php } ?>
        <?php if (isset($cabin_qode_options['footer_bottom_padding']) && $cabin_qode_options['footer_bottom_padding'] !== ''){ ?>padding-bottom: <?php echo esc_attr($cabin_qode_options['footer_bottom_padding']); ?>px; <?php } ?>
        }
    <?php }
} ?>
<?php if ((isset($cabin_qode_options['footer_left_padding']) && $cabin_qode_options['footer_left_padding'] !== '') || (isset($cabin_qode_options['footer_right_padding']) && $cabin_qode_options['footer_right_padding'] !== '')) { ?>
    @media only screen and (min-width: 600px){
    .footer_top, .footer_top.footer_top_full{
    <?php if (isset($cabin_qode_options['footer_left_padding']) && $cabin_qode_options['footer_left_padding'] !== ''){ ?>padding-left: <?php echo esc_attr($cabin_qode_options['footer_left_padding']); ?>px; <?php } ?>
    <?php if (isset($cabin_qode_options['footer_right_padding']) && $cabin_qode_options['footer_right_padding'] !== ''){ ?>padding-right: <?php echo esc_attr($cabin_qode_options['footer_right_padding']); ?>px; <?php } ?>
    }
    }
<?php } ?>
<?php if (isset($cabin_qode_options['footer_top_columns_alignment']) && $cabin_qode_options['footer_top_columns_alignment'] !== '') { ?>
    @media only screen and (min-width: 600px){
    .footer_top, .qode_column{
    text-align:  <?php echo esc_attr($cabin_qode_options['footer_top_columns_alignment']);  ?>
    }
    }
<?php } ?>
<?php if (isset($cabin_qode_options['footer_top_column1_alignment']) && $cabin_qode_options['footer_top_column1_alignment'] !== '') { ?>
    @media only screen and (min-width: 600px){
    .footer_top, .qode_column.column1{
    text-align:  <?php echo esc_attr($cabin_qode_options['footer_top_column1_alignment']);  ?>
    }
    }
<?php } ?>
<?php if (isset($cabin_qode_options['footer_top_column2_alignment']) && $cabin_qode_options['footer_top_column2_alignment'] !== '') { ?>
    @media only screen and (min-width: 600px){
    .footer_top, .qode_column.column2{
    text-align:  <?php echo esc_attr($cabin_qode_options['footer_top_column2_alignment']);  ?>
    }
    }
<?php } ?>
<?php if (isset($cabin_qode_options['footer_top_column3_alignment']) && $cabin_qode_options['footer_top_column3_alignment'] !== '') { ?>
    @media only screen and (min-width: 600px){
    .footer_top, .qode_column.column3{
    text-align:  <?php echo esc_attr($cabin_qode_options['footer_top_column3_alignment']);  ?>
    }
    }
<?php } ?>
<?php if (isset($cabin_qode_options['footer_top_column4_alignment']) && $cabin_qode_options['footer_top_column4_alignment'] !== '') { ?>
    @media only screen and (min-width: 600px){
    .footer_top, .qode_column.column4{
    text-align:  <?php echo esc_attr($cabin_qode_options['footer_top_column4_alignment']);  ?>
    }
    }
<?php } ?>

<?php
$footer_top_text_style = array();

if(isset($cabin_qode_options['footer_top_text_font_family']) && $cabin_qode_options['footer_top_text_font_family'] !== '-1') {
    $footer_top_text_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['footer_top_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['footer_top_text_font_size']) && $cabin_qode_options['footer_top_text_font_size'] !== '') {
    $footer_top_text_style[] = 'font-size: '.$cabin_qode_options['footer_top_text_font_size'].'px';
}

if(isset($cabin_qode_options['footer_top_text_line_height']) && $cabin_qode_options['footer_top_text_line_height'] !== '') {
    $footer_top_text_style[] = 'line-height: '.$cabin_qode_options['footer_top_text_line_height'].'px'; ?>
    .footer_top .widget.widget_nav_menu li{
    line-height: <?php echo esc_attr($cabin_qode_options['footer_top_text_line_height'].'px'); ?>;
    }
    <?php
}

if(isset($cabin_qode_options['footer_top_text_letter_spacing']) && $cabin_qode_options['footer_top_text_letter_spacing'] !== '') {
    $footer_top_text_style[] = 'letter-spacing: '.$cabin_qode_options['footer_top_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['footer_top_text_font_weight']) && $cabin_qode_options['footer_top_text_font_weight'] !== '') {
    $footer_top_text_style[] = 'font-weight: '.$cabin_qode_options['footer_top_text_font_weight'];
}

if(isset($cabin_qode_options['footer_top_text_font_style']) && $cabin_qode_options['footer_top_text_font_style'] !== '') {
    $footer_top_text_style[] = 'font-style: '.$cabin_qode_options['footer_top_text_font_style'];
}

if(isset($cabin_qode_options['footer_top_text_text_transform']) && $cabin_qode_options['footer_top_text_text_transform'] !== '') {
    $footer_top_text_style[] = 'text-transform: '.$cabin_qode_options['footer_top_text_text_transform'];
}

if(isset($cabin_qode_options['footer_top_text_color']) && $cabin_qode_options['footer_top_text_color'] !== '') {
    $footer_top_text_style[] = 'color: '.$cabin_qode_options['footer_top_text_color'];
}

if(is_array($footer_top_text_style) && count($footer_top_text_style)) { ?>
    .footer_top,
    .footer_top p,
    .footer_top span:not(.q_social_icon_holder):not(.fa-stack):not(.social_icon):not(.q_icon_shortcode),
    .footer_top li,
    .footer_top .textwidget,
    .footer_top .widget_recent_entries>ul>li>span{
    <?php echo esc_attr(implode(';', $footer_top_text_style)); ?>
    }
<?php } ?>

<?php
$footer_top_link_style = array();

if(isset($cabin_qode_options['footer_top_link_font_family']) && $cabin_qode_options['footer_top_link_font_family'] !== '-1') {
    $footer_top_link_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['footer_top_link_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['footer_top_link_font_size']) && $cabin_qode_options['footer_top_link_font_size'] !== '') {
    $footer_top_link_style[] = 'font-size: '.$cabin_qode_options['footer_top_link_font_size'].'px';
}

if(isset($cabin_qode_options['footer_top_link_line_height']) && $cabin_qode_options['footer_top_link_line_height'] !== '') {
    $footer_top_link_style[] = 'line-height: '.$cabin_qode_options['footer_top_link_line_height'].'px';
}

if(isset($cabin_qode_options['footer_top_link_letter_spacing']) && $cabin_qode_options['footer_top_link_letter_spacing'] !== '') {
    $footer_top_link_style[] = 'letter-spacing: '.$cabin_qode_options['footer_top_link_letter_spacing'].'px';
}

if(isset($cabin_qode_options['footer_top_link_font_weight']) && $cabin_qode_options['footer_top_link_font_weight'] !== '') {
    $footer_top_link_style[] = 'font-weight: '.$cabin_qode_options['footer_top_link_font_weight'];
}

if(isset($cabin_qode_options['footer_top_link_font_style']) && $cabin_qode_options['footer_top_link_font_style'] !== '') {
    $footer_top_link_style[] = 'font-style: '.$cabin_qode_options['footer_top_link_font_style'];
}

if(isset($cabin_qode_options['footer_top_link_text_transform']) && $cabin_qode_options['footer_top_link_text_transform'] !== '') {
    $footer_top_link_style[] = 'text-transform: '.$cabin_qode_options['footer_top_link_text_transform'];
}

if(isset($cabin_qode_options['footer_top_link_color']) && $cabin_qode_options['footer_top_link_color'] !== '') {
    $footer_top_link_style[] = 'color: '.$cabin_qode_options['footer_top_link_color'];
}

if(is_array($footer_top_link_style) && count($footer_top_link_style)) { ?>
    .footer_top a{
    <?php echo esc_attr(implode(';', $footer_top_link_style)); ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['footer_top_link_hover_color']) && !empty($cabin_qode_options['footer_top_link_hover_color'])) { ?>
    .footer_top a:hover{
    color: <?php echo esc_attr($cabin_qode_options['footer_top_link_hover_color']); ?>;
    }
<?php } ?>

<?php

if(isset($cabin_qode_options['footer_top_background_color_in_grid']) && !empty($cabin_qode_options['footer_top_background_color_in_grid'])) { ?>
    .footer_top .container_inner{
    background-color: <?php echo esc_attr($cabin_qode_options['footer_top_background_color_in_grid']);?>
    }
<?php } ?>




<?php if (!empty($cabin_qode_options['footer_bottom_background_color'])) { ?>
    .footer_bottom_holder{
    background-color:<?php echo esc_attr($cabin_qode_options['footer_bottom_background_color']); ?>;
    }
    .footer_top_holder svg.oblique-section polygon{
    fill:<?php echo esc_attr($cabin_qode_options['footer_bottom_background_color']); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['footer_bottom_image_background']) && $cabin_qode_options['footer_bottom_image_background'] != ""){ ?>
    .footer_bottom_holder{
    background-image:url(<?php echo esc_attr($cabin_qode_options['footer_bottom_image_background']); ?>);
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['footer_bottom_top_padding']) && $cabin_qode_options['footer_bottom_top_padding'] !== '') || (isset($cabin_qode_options['footer_bottom_bottom_padding']) && $cabin_qode_options['footer_bottom_bottom_padding'] !== '')) { ?>
    .footer_bottom_holder_inner{
    <?php if (isset($cabin_qode_options['footer_bottom_top_padding']) && $cabin_qode_options['footer_bottom_top_padding'] !== ''){ ?>padding-top: <?php echo esc_attr($cabin_qode_options['footer_bottom_top_padding']); ?>px; <?php } ?>
    <?php if (isset($cabin_qode_options['footer_bottom_bottom_padding']) && $cabin_qode_options['footer_bottom_bottom_padding'] !== ''){ ?>padding-bottom: <?php echo esc_attr($cabin_qode_options['footer_bottom_bottom_padding']); ?>px; <?php } ?>
    }
<?php } ?>
<?php if ((isset($cabin_qode_options['footer_bottom_left_padding']) && $cabin_qode_options['footer_bottom_left_padding'] !== '') || (isset($cabin_qode_options['footer_bottom_right_padding']) && $cabin_qode_options['footer_bottom_right_padding'] !== '')) { ?>
    @media only screen and (min-width: 600px){
    .footer_bottom_holder_inner{
    <?php if (isset($cabin_qode_options['footer_bottom_left_padding']) && $cabin_qode_options['footer_bottom_left_padding'] !== ''){ ?>padding-left: <?php echo esc_attr($cabin_qode_options['footer_bottom_left_padding']); ?>px; <?php } ?>
    <?php if (isset($cabin_qode_options['footer_bottom_right_padding']) && $cabin_qode_options['footer_bottom_right_padding'] !== ''){ ?>padding-right: <?php echo esc_attr($cabin_qode_options['footer_bottom_right_padding']); ?>px; <?php } ?>
    }
    }
<?php } ?>

<?php
$footer_bottom_text_style = array();

if(isset($cabin_qode_options['footer_bottom_text_font_family']) && $cabin_qode_options['footer_bottom_text_font_family'] !== '-1') {
    $footer_bottom_text_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['footer_bottom_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['footer_bottom_text_font_size']) && $cabin_qode_options['footer_bottom_text_font_size'] !== '') {
    $footer_bottom_text_style[] = 'font-size: '.$cabin_qode_options['footer_bottom_text_font_size'].'px';
}

if(isset($cabin_qode_options['footer_bottom_text_line_height']) && $cabin_qode_options['footer_bottom_text_line_height'] !== '') {
    $footer_bottom_text_style[] = 'line-height: '.$cabin_qode_options['footer_bottom_text_line_height'].'px';
}

if(isset($cabin_qode_options['footer_bottom_text_letter_spacing']) && $cabin_qode_options['footer_bottom_text_letter_spacing'] !== '') {
    $footer_bottom_text_style[] = 'letter-spacing: '.$cabin_qode_options['footer_bottom_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['footer_bottom_text_font_weight']) && $cabin_qode_options['footer_bottom_text_font_weight'] !== '') {
    $footer_bottom_text_style[] = 'font-weight: '.$cabin_qode_options['footer_bottom_text_font_weight'];
}

if(isset($cabin_qode_options['footer_bottom_text_font_style']) && $cabin_qode_options['footer_bottom_text_font_style'] !== '') {
    $footer_bottom_text_style[] = 'font-style: '.$cabin_qode_options['footer_bottom_text_font_style'];
}

if(isset($cabin_qode_options['footer_bottom_text_text_transform']) && $cabin_qode_options['footer_bottom_text_text_transform'] !== '') {
    $footer_bottom_text_style[] = 'text-transform: '.$cabin_qode_options['footer_bottom_text_text_transform'];
}

if(isset($cabin_qode_options['footer_bottom_text_color']) && $cabin_qode_options['footer_bottom_text_color'] !== '') {
    $footer_bottom_text_style[] = 'color: '.$cabin_qode_options['footer_bottom_text_color'];
}

if(is_array($footer_bottom_text_style) && count($footer_bottom_text_style)) { ?>

    .footer_bottom_holder_inner,
    .footer_bottom_holder_inner ul li a,
    .footer_bottom_holder_inner p,
    .footer_bottom_holder_inner span,
    .footer_bottom span:not(.q_social_icon_holder):not(.fa-stack):not(.social_icon){
    <?php echo esc_attr(implode(';', $footer_bottom_text_style)); ?>
    }
<?php } ?>

<?php
$footer_bottom_link_style = array();

if(isset($cabin_qode_options['footer_bottom_link_font_family']) && $cabin_qode_options['footer_bottom_link_font_family'] !== '-1') {
    $footer_bottom_link_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['footer_bottom_link_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['footer_bottom_link_font_size']) && $cabin_qode_options['footer_bottom_link_font_size'] !== '') {
    $footer_bottom_link_style[] = 'font-size: '.$cabin_qode_options['footer_bottom_link_font_size'].'px';
}

if(isset($cabin_qode_options['footer_bottom_link_line_height']) && $cabin_qode_options['footer_bottom_link_line_height'] !== '') {
    $footer_bottom_link_style[] = 'line-height: '.$cabin_qode_options['footer_bottom_link_line_height'].'px';
}

if(isset($cabin_qode_options['footer_bottom_link_letter_spacing']) && $cabin_qode_options['footer_bottom_link_letter_spacing'] !== '') {
    $footer_bottom_link_style[] = 'letter-spacing: '.$cabin_qode_options['footer_bottom_link_letter_spacing'].'px';
}

if(isset($cabin_qode_options['footer_bottom_link_font_weight']) && $cabin_qode_options['footer_bottom_link_font_weight'] !== '') {
    $footer_bottom_link_style[] = 'font-weight: '.$cabin_qode_options['footer_bottom_link_font_weight'];
}

if(isset($cabin_qode_options['footer_bottom_link_font_style']) && $cabin_qode_options['footer_bottom_link_font_style'] !== '') {
    $footer_bottom_link_style[] = 'font-style: '.$cabin_qode_options['footer_bottom_link_font_style'];
}

if(isset($cabin_qode_options['footer_bottom_link_text_transform']) && $cabin_qode_options['footer_bottom_link_text_transform'] !== '') {
    $footer_bottom_link_style[] = 'text-transform: '.$cabin_qode_options['footer_bottom_link_text_transform'];
}

if(isset($cabin_qode_options['footer_bottom_link_color']) && $cabin_qode_options['footer_bottom_link_color'] !== '') {
    $footer_bottom_link_style[] = 'color: '.$cabin_qode_options['footer_bottom_link_color'];
}

if(is_array($footer_bottom_link_style) && count($footer_bottom_link_style)) { ?>
    .footer_bottom_holder_inner a,
    .footer_bottom_holder_inner ul li a{
    <?php echo esc_attr(implode(';', $footer_bottom_link_style)); ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['footer_bottom_link_hover_color']) && !empty($cabin_qode_options['footer_bottom_link_hover_color'])) { ?>
    .footer_bottom_holder_inner a:hover,
    .footer_bottom_holder_inner ul li a:hover{
    color:<?php echo esc_attr($cabin_qode_options['footer_bottom_link_hover_color']);  ?>; !important;
    }
<?php } ?>

<?php
$footer_title_styles = array();

if(isset($cabin_qode_options['footer_title_font_family']) && $cabin_qode_options['footer_title_font_family'] !== '-1') {
    $footer_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['footer_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['footer_title_font_size']) && $cabin_qode_options['footer_title_font_size'] !== '') {
    $footer_title_styles[] = 'font-size: '.$cabin_qode_options['footer_title_font_size'].'px';
}

if(isset($cabin_qode_options['footer_title_line_height']) && $cabin_qode_options['footer_title_line_height'] !== '') {
    $footer_title_styles[] = 'line-height: '.$cabin_qode_options['footer_title_line_height'].'px';
}

if(isset($cabin_qode_options['footer_title_letter_spacing']) && $cabin_qode_options['footer_title_letter_spacing'] !== '') {
    $footer_title_styles[] = 'letter-spacing: '.$cabin_qode_options['footer_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['footer_title_font_weight']) && $cabin_qode_options['footer_title_font_weight'] !== '') {
    $footer_title_styles[] = 'font-weight: '.$cabin_qode_options['footer_title_font_weight'];
}

if(isset($cabin_qode_options['footer_title_font_style']) && $cabin_qode_options['footer_title_font_style'] !== '') {
    $footer_title_styles[] = 'font-style: '.$cabin_qode_options['footer_title_font_style'];
}

if(isset($cabin_qode_options['footer_title_text_transform']) && $cabin_qode_options['footer_title_text_transform'] !== '') {
    $footer_title_styles[] = 'text-transform: '.$cabin_qode_options['footer_title_text_transform'];
}

if(isset($cabin_qode_options['footer_title_color']) && $cabin_qode_options['footer_title_color'] !== '') {
    $footer_title_styles[] = 'color: '.$cabin_qode_options['footer_title_color'];
}

if(is_array($footer_title_styles) && count($footer_title_styles)) { ?>
    .footer_top .widget h4 {
    <?php echo esc_attr(implode(';', $footer_title_styles)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['footer_bottom_height']) && $cabin_qode_options['footer_bottom_height'] !== '') { ?>
    .footer_bottom_holder { height: <?php echo esc_attr($cabin_qode_options['footer_bottom_height']); ?>px; }
<?php } ?>

<?php if (!empty($cabin_qode_options['content_bottom_background_color'])) { ?>
    .content_bottom{
    background-color:<?php echo esc_attr($cabin_qode_options['content_bottom_background_color']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['sidebar_title_background']) && !empty($cabin_qode_options['sidebar_title_background'])) { ?>
    aside.sidebar .widget h4{
    background-color:<?php echo esc_attr($cabin_qode_options['sidebar_title_background']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['sidebar_title_border_color']) && !empty($cabin_qode_options['sidebar_title_border_color'])) { ?>
    aside.sidebar .widget h4{
    border: 1px solid <?php echo esc_attr($cabin_qode_options['sidebar_title_border_color']);  ?>;
    }
<?php } ?>

<?php
$sidebar_title_padding_style = array();

if(isset($cabin_qode_options['sidebar_title_padding_top']) && $cabin_qode_options['sidebar_title_padding_top'] !== '') {
    $sidebar_title_padding_style[] = 'padding-top:'.$cabin_qode_options['sidebar_title_padding_top'].'px';
}

if(isset($cabin_qode_options['sidebar_title_padding_right']) && $cabin_qode_options['sidebar_title_padding_right'] !== '') {
    $sidebar_title_padding_style[] = 'padding-right:'.$cabin_qode_options['sidebar_title_padding_right'].'px';
}

if(isset($cabin_qode_options['sidebar_title_padding_bottom']) && $cabin_qode_options['sidebar_title_padding_bottom'] !== '') {
    $sidebar_title_padding_style[] = 'padding-bottom:'.$cabin_qode_options['sidebar_title_padding_bottom'].'px';
}

if(isset($cabin_qode_options['sidebar_title_padding_left']) && $cabin_qode_options['sidebar_title_padding_left'] !== '') {
    $sidebar_title_padding_style[] = 'padding-left:'.$cabin_qode_options['sidebar_title_padding_left'].'px';
}

if (is_array($sidebar_title_padding_style) && count($sidebar_title_padding_style)) { ?>
    aside.sidebar .widget h4{
    <?php echo esc_attr(implode(';',$sidebar_title_padding_style)); ?>
    }
<?php }
?>


<?php
$widget_styles = array();

if(isset($cabin_qode_options['widget_background_color']) && $cabin_qode_options['widget_background_color'] !== '') {
    $widget_styles[] = 'background-color:  '.$cabin_qode_options['widget_background_color'];
}

if(isset($cabin_qode_options['widget_border_color']) && $cabin_qode_options['widget_border_color'] !== '') {
    $widget_styles[] = 'border: 1px solid '.$cabin_qode_options['widget_border_color'];
}

if(isset($cabin_qode_options['widget_padding_top']) && $cabin_qode_options['widget_padding_top'] !== '') {
    $widget_styles[] = 'padding-top:'.$cabin_qode_options['widget_padding_top'].'px';
}

if(isset($cabin_qode_options['widget_padding_right']) && $cabin_qode_options['widget_padding_right'] !== '') {
    $widget_styles[] = 'padding-right:'.$cabin_qode_options['widget_padding_right'].'px';
}

if(isset($cabin_qode_options['widget_padding_bottom']) && $cabin_qode_options['widget_padding_bottom'] !== '') {
    $widget_styles[] = 'padding-bottom:'.$cabin_qode_options['widget_padding_bottom'].'px';
}

if(isset($cabin_qode_options['widget_padding_left']) && $cabin_qode_options['widget_padding_left'] !== '') {
    $widget_styles[] = 'padding-left:'.$cabin_qode_options['widget_padding_left'].'px';
}

if(isset($cabin_qode_options['sidebar_widget_enable_box_shadow']) && $cabin_qode_options['sidebar_widget_enable_box_shadow'] == 'yes') {
    $sidebar_widget_shadow_horizontal_offset = '1';
    if(isset($cabin_qode_options['sidebar_widget_shadow_horizontal_offset']) && $cabin_qode_options['sidebar_widget_shadow_horizontal_offset'] !== '') {
        $sidebar_widget_shadow_horizontal_offset = $cabin_qode_options['sidebar_widget_shadow_horizontal_offset'];
    }

    $sidebar_widget_shadow_vertical_offset = '1';
    if(isset($cabin_qode_options['sidebar_widget_shadow_vertical_offset']) && $cabin_qode_options['sidebar_widget_shadow_vertical_offset'] !== '') {
        $sidebar_widget_shadow_vertical_offset = $cabin_qode_options['sidebar_widget_shadow_vertical_offset'];
    }

    $sidebar_widget_shadow_blur = '1';
    if(isset($cabin_qode_options['sidebar_widget_shadow_blur']) && $cabin_qode_options['sidebar_widget_shadow_blur'] !== '') {
        $sidebar_widget_shadow_blur = $cabin_qode_options['sidebar_widget_shadow_blur'];
    }

    $sidebar_widget_shadow_spread = '1';
    if(isset($cabin_qode_options['sidebar_widget_shadow_spread']) && $cabin_qode_options['sidebar_widget_shadow_spread'] !== '') {
        $sidebar_widget_shadow_spread = $cabin_qode_options['sidebar_widget_shadow_spread'];
    }

    $sidebar_widget_shadow_color = '#f1f1f1';
    if(isset($cabin_qode_options['sidebar_widget_shadow_color']) && $cabin_qode_options['sidebar_widget_shadow_color'] !== '') {
        $sidebar_widget_shadow_color = $cabin_qode_options['sidebar_widget_shadow_color'];
    }

    $widget_styles[] = 'box-shadow: '.$sidebar_widget_shadow_horizontal_offset.'px '.$sidebar_widget_shadow_vertical_offset.'px '.$sidebar_widget_shadow_blur.'px '.$sidebar_widget_shadow_spread.'px '.$sidebar_widget_shadow_color;

}

if(is_array($widget_styles) && count($widget_styles)) { ?>
    aside.sidebar .widget{
    <?php echo esc_attr(implode(';', $widget_styles)); ?>
    }
<?php } ?>
<?php
$sidebar_styles = array();

if(isset($cabin_qode_options['sidebar_background_color']) && $cabin_qode_options['sidebar_background_color'] !== '') {
    $sidebar_styles[] = 'background-color:  '.$cabin_qode_options['sidebar_background_color'];
}

if(isset($cabin_qode_options['sidebar_alignment']) && $cabin_qode_options['sidebar_alignment'] !== '') {
    $sidebar_styles[] = 'text-align: '.$cabin_qode_options['sidebar_alignment'];
}

if(isset($cabin_qode_options['sidebar_padding_top']) && $cabin_qode_options['sidebar_padding_top'] !== '') {
    $sidebar_styles[] = 'padding-top:'.$cabin_qode_options['sidebar_padding_top'].'px';
}

if(isset($cabin_qode_options['sidebar_padding_right']) && $cabin_qode_options['sidebar_padding_right'] !== '') {
    $sidebar_styles[] = 'padding-right:'.$cabin_qode_options['sidebar_padding_right'].'px';
}

if(isset($cabin_qode_options['sidebar_padding_bottom']) && $cabin_qode_options['sidebar_padding_bottom'] !== '') {
    $sidebar_styles[] = 'padding-bottom:'.$cabin_qode_options['sidebar_padding_bottom'].'px';
}

if(isset($cabin_qode_options['sidebar_padding_left']) && $cabin_qode_options['sidebar_padding_left'] !== '') {
    $sidebar_styles[] = 'padding-left:'.$cabin_qode_options['sidebar_padding_left'].'px';
}

if(isset($cabin_qode_options['sidebar_enable_box_shadow']) && $cabin_qode_options['sidebar_enable_box_shadow'] == 'yes') {
    $sidebar_shadow_horizontal_offset = '1';
    if(isset($cabin_qode_options['sidebar_shadow_horizontal_offset']) && $cabin_qode_options['sidebar_shadow_horizontal_offset'] !== '') {
        $sidebar_shadow_horizontal_offset = $cabin_qode_options['sidebar_shadow_horizontal_offset'];
    }

    $sidebar_shadow_vertical_offset = '1';
    if(isset($cabin_qode_options['sidebar_shadow_vertical_offset']) && $cabin_qode_options['sidebar_shadow_vertical_offset'] !== '') {
        $sidebar_shadow_vertical_offset = $cabin_qode_options['sidebar_shadow_vertical_offset'];
    }

    $sidebar_shadow_blur = '1';
    if(isset($cabin_qode_options['sidebar_shadow_blur']) && $cabin_qode_options['sidebar_shadow_blur'] !== '') {
        $sidebar_shadow_blur = $cabin_qode_options['sidebar_shadow_blur'];
    }

    $sidebar_shadow_spread = '1';
    if(isset($cabin_qode_options['sidebar_shadow_spread']) && $cabin_qode_options['sidebar_shadow_spread'] !== '') {
        $sidebar_shadow_spread = $cabin_qode_options['sidebar_shadow_spread'];
    }

    $sidebar_shadow_color = '#f1f1f1';
    if(isset($cabin_qode_options['sidebar_shadow_color']) && $cabin_qode_options['sidebar_shadow_color'] !== '') {
        $sidebar_shadow_color = $cabin_qode_options['sidebar_shadow_color'];
    }

    $sidebar_styles[] = 'box-shadow: '.$sidebar_shadow_horizontal_offset.'px '.$sidebar_shadow_vertical_offset.'px '.$sidebar_shadow_blur.'px '.$sidebar_shadow_spread.'px '.$sidebar_shadow_color;
}

if(is_array($sidebar_styles) && count($sidebar_styles)) { ?>
    aside.sidebar{
    <?php echo esc_attr(implode(';', $sidebar_styles)); ?>
    }
<?php } ?>


<?php
$sidebar_title_styles = array();

if(isset($cabin_qode_options['sidebar_title_font_family']) && $cabin_qode_options['sidebar_title_font_family'] !== '-1') {
    $sidebar_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidebar_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidebar_title_font_size']) && $cabin_qode_options['sidebar_title_font_size'] !== '') {
    $sidebar_title_styles[] = 'font-size: '.$cabin_qode_options['sidebar_title_font_size'].'px';
}

if(isset($cabin_qode_options['sidebar_title_line_height']) && $cabin_qode_options['sidebar_title_line_height'] !== '') {
    $sidebar_title_styles[] = 'line-height: '.$cabin_qode_options['sidebar_title_line_height'].'px';
}

if(isset($cabin_qode_options['sidebar_title_letter_spacing']) && $cabin_qode_options['sidebar_title_letter_spacing'] !== '') {
    $sidebar_title_styles[] = 'letter-spacing: '.$cabin_qode_options['sidebar_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidebar_title_font_weight']) && $cabin_qode_options['sidebar_title_font_weight'] !== '') {
    $sidebar_title_styles[] = 'font-weight: '.$cabin_qode_options['sidebar_title_font_weight'];
}

if(isset($cabin_qode_options['sidebar_title_font_style']) && $cabin_qode_options['sidebar_title_font_style'] !== '') {
    $sidebar_title_styles[] = 'font-style: '.$cabin_qode_options['sidebar_title_font_style'];
}

if(isset($cabin_qode_options['sidebar_title_text_transform']) && $cabin_qode_options['sidebar_title_text_transform'] !== '') {
    $sidebar_title_styles[] = 'text-transform: '.$cabin_qode_options['sidebar_title_text_transform'];
}

if(isset($cabin_qode_options['sidebar_title_color']) && $cabin_qode_options['sidebar_title_color'] !== '') {
    $sidebar_title_styles[] = 'color: '.$cabin_qode_options['sidebar_title_color'];
}

if(isset($cabin_qode_options['sidebar_title_border_bottom_color']) && $cabin_qode_options['sidebar_title_border_bottom_color'] !== '') {
    if(isset($cabin_qode_options['sidebar_title_border_bottom_width']) && $cabin_qode_options['sidebar_title_border_bottom_width'] !== ''){
        $sidebar_title_border_bottom_width = $cabin_qode_options['sidebar_title_border_bottom_width'].'px';
    }
    else{
        $sidebar_title_border_bottom_width = '1px';
    }
    $sidebar_title_styles[] = 'border-bottom: '.$sidebar_title_border_bottom_width.' solid '.$cabin_qode_options['sidebar_title_border_bottom_color'];

    if(isset($cabin_qode_options['sidebar_title_border_bottom_padding_bottom']) && $cabin_qode_options['sidebar_title_border_bottom_padding_bottom'] !== '') {
        $sidebar_title_styles[] = 'padding-bottom: '.$cabin_qode_options['sidebar_title_border_bottom_padding_bottom'].'px';
    }
    if(isset($cabin_qode_options['sidebar_title_border_bottom_margin_bottom']) && $cabin_qode_options['sidebar_title_border_bottom_margin_bottom'] !== '') {
        $sidebar_title_styles[] = 'margin-bottom: '.$cabin_qode_options['sidebar_title_border_bottom_margin_bottom'].'px !important';
    }
}

if(is_array($sidebar_title_styles) && count($sidebar_title_styles)) { ?>
    aside.sidebar .widget h4,
    .woocommerce aside.sidebar .widget h4{
    <?php echo esc_attr(implode(';', $sidebar_title_styles)); ?>
    }
<?php } ?>

<?php
$sidebar_text_styles = array();

if(isset($cabin_qode_options['sidebar_text_font_family']) && $cabin_qode_options['sidebar_text_font_family'] !== '-1') {
    $sidebar_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidebar_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidebar_text_font_size']) && $cabin_qode_options['sidebar_text_font_size'] !== '') {
    $sidebar_text_styles[] = 'font-size: '.$cabin_qode_options['sidebar_text_font_size'].'px';
}

if(isset($cabin_qode_options['sidebar_text_line_height']) && $cabin_qode_options['sidebar_text_line_height'] !== '') {
    $sidebar_text_styles[] = 'line-height: '.$cabin_qode_options['sidebar_text_line_height'].'px';
}

if(isset($cabin_qode_options['sidebar_text_letter_spacing']) && $cabin_qode_options['sidebar_text_letter_spacing'] !== '') {
    $sidebar_text_styles[] = 'letter-spacing: '.$cabin_qode_options['sidebar_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidebar_text_font_weight']) && $cabin_qode_options['sidebar_text_font_weight'] !== '') {
    $sidebar_text_styles[] = 'font-weight: '.$cabin_qode_options['sidebar_text_font_weight'];
}

if(isset($cabin_qode_options['sidebar_text_font_style']) && $cabin_qode_options['sidebar_text_font_style'] !== '') {
    $sidebar_text_styles[] = 'font-style: '.$cabin_qode_options['sidebar_text_font_style'];
}

if(isset($cabin_qode_options['sidebar_text_text_transform']) && $cabin_qode_options['sidebar_text_text_transform'] !== '') {
    $sidebar_text_styles[] = 'text-transform: '.$cabin_qode_options['sidebar_text_text_transform'];
}

if(isset($cabin_qode_options['sidebar_text_color']) && $cabin_qode_options['sidebar_text_color'] !== '') {
    $sidebar_text_styles[] = 'color: '.$cabin_qode_options['sidebar_text_color'];
}

if(is_array($sidebar_text_styles) && count($sidebar_text_styles)) { ?>
    aside.sidebar .widget.widget_text,
    aside.sidebar .widget p,
    aside.sidebar .widget span,
    aside.sidebar .widget li,
    aside.sidebar .widget.widget_categories li,
    aside.sidebar .widget.widget_archive li,
    aside.sidebar .widget table,
    aside.sidebar .widget:not(.woocommerce) li.recentcomments,
    aside.sidebar .widget.widget_rss .rssSummary,
    aside.sidebar .widget.widget_rss cite
    {
    <?php echo esc_attr(implode(';', $sidebar_text_styles)); ?>
    }
<?php } ?>

<?php
$sidebar_link_styles = array();

if(isset($cabin_qode_options['sidebar_link_font_family']) && $cabin_qode_options['sidebar_link_font_family'] !== '-1') {
    $sidebar_link_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidebar_link_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidebar_link_font_size']) && $cabin_qode_options['sidebar_link_font_size'] !== '') {
    $sidebar_link_styles[] = 'font-size: '.$cabin_qode_options['sidebar_link_font_size'].'px';
}

if(isset($cabin_qode_options['sidebar_link_line_height']) && $cabin_qode_options['sidebar_link_line_height'] !== '') {
    $sidebar_link_styles[] = 'line-height: '.$cabin_qode_options['sidebar_link_line_height'].'px';
}

if(isset($cabin_qode_options['sidebar_link_letter_spacing']) && $cabin_qode_options['sidebar_link_letter_spacing'] !== '') {
    $sidebar_link_styles[] = 'letter-spacing: '.$cabin_qode_options['sidebar_link_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidebar_link_font_weight']) && $cabin_qode_options['sidebar_link_font_weight'] !== '') {
    $sidebar_link_styles[] = 'font-weight: '.$cabin_qode_options['sidebar_link_font_weight'];
}

if(isset($cabin_qode_options['sidebar_link_font_style']) && $cabin_qode_options['sidebar_link_font_style'] !== '') {
    $sidebar_link_styles[] = 'font-style: '.$cabin_qode_options['sidebar_link_font_style'];
}

if(isset($cabin_qode_options['sidebar_link_text_transform']) && $cabin_qode_options['sidebar_link_text_transform'] !== '') {
    $sidebar_link_styles[] = 'text-transform: '.$cabin_qode_options['sidebar_link_text_transform'];
}

if(isset($cabin_qode_options['sidebar_link_color']) && $cabin_qode_options['sidebar_link_color'] !== '') {
    $sidebar_link_styles[] = 'color: '.$cabin_qode_options['sidebar_link_color'];
}

if(is_array($sidebar_link_styles) && count($sidebar_link_styles)) { ?>
    aside.sidebar .widget:not(.woocommerce):not(.widget_tag_cloud) a,
    .woocommerce aside.sidebar .woocommerce.widget ul.product-categories a,
    .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories a,
    .woocommerce aside.sidebar .woocommerce.widget ul.product-categories ul.children li a,
    aside ul.product-categories ul.children li a,
    .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories ul.children li a,
    aside.sidebar .widget.woocommerce ul.product-categories li a{
    <?php echo esc_attr(implode(';', $sidebar_link_styles)); ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['sidebar_link_hover_color']) && !empty($cabin_qode_options['sidebar_link_hover_color'])) { ?>
    aside.sidebar .widget:not(.wooocommerce):not(.widget_tag_cloud) a:hover,
    .woocommerce aside.sidebar .woocommerce.widget ul.product-categories ul.children li a:hover,
    aside ul.product-categories ul.children li a:hover, .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories ul.children li a:hover,
    .woocommerce aside.sidebar .woocommerce.widget ul.product-categories a:hover,
    aside ul.product-categories a:hover, .woocommerce-page aside.sidebar .woocommerce.widget ul.product-categories li a:hover,
    aside.sidebar .widget.woocommerce ul.product-categories li a:hover{
    color:<?php echo esc_attr($cabin_qode_options['sidebar_link_hover_color']);  ?>;
    }
<?php } ?>

<?php
$sidebar_link_li_styles = array();

if(isset($cabin_qode_options['sidebar_link_separator_color']) && $cabin_qode_options['sidebar_link_separator_color'] !== '') {
    if(isset($cabin_qode_options['sidebar_link_separator_type']) && $cabin_qode_options['sidebar_link_separator_type'] !== '') {
        $sidebar_link_li_styles[] = 'border-bottom-style: '.$cabin_qode_options['sidebar_link_separator_type'];
    }
    else {
        $sidebar_link_li_styles[] = 'border-bottom-style: solid';
    }
    $sidebar_link_li_styles[] = 'border-bottom-color: '.$cabin_qode_options['sidebar_link_separator_color'];
    $sidebar_link_li_styles[] = 'border-bottom-width: 1px';

}

if(is_array($sidebar_link_li_styles) && count($sidebar_link_li_styles)) { ?>
    aside.sidebar .widget li:not(:last-child){
    <?php echo esc_attr(implode(';', $sidebar_link_li_styles)); ?>
    }
<?php } ?>

<?php
$sidearea_styles = array();

if(isset($cabin_qode_options['side_area_background_color']) && $cabin_qode_options['side_area_background_color'] !== '') {
    $sidearea_styles[] = 'background-color:'.$cabin_qode_options['side_area_background_color'];
}

if(isset($cabin_qode_options['side_area_padding_top']) && $cabin_qode_options['side_area_padding_top'] !== '') {
    $sidearea_styles[] = 'padding-top:'.$cabin_qode_options['side_area_padding_top'].'px';
}

if(isset($cabin_qode_options['side_area_padding_right']) && $cabin_qode_options['side_area_padding_right'] !== '') {
    $sidearea_styles[] = 'padding-right:'.$cabin_qode_options['side_area_padding_right'].'px';
}

if(isset($cabin_qode_options['side_area_padding_bottom']) && $cabin_qode_options['side_area_padding_bottom'] !== '') {
    $sidearea_styles[] = 'padding-bottom:'.$cabin_qode_options['side_area_padding_bottom'].'px';
}

if(isset($cabin_qode_options['side_area_padding_left']) && $cabin_qode_options['side_area_padding_left'] !== '') {
    $sidearea_styles[] = 'padding-left:'.$cabin_qode_options['side_area_padding_left'].'px';
}

if(is_array($sidearea_styles) && count($sidearea_styles)) { ?>
    .side_menu,
    .side_menu_slide_from_right .side_menu{
    <?php echo esc_attr(implode(';', $sidearea_styles)); ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['side_area_close_icon']) && ($cabin_qode_options['side_area_close_icon']=="dark")) { ?>
    .side_menu a.close_side_menu{
    background-image:url('img/close_side_menu_dark.png');
    background-repeat: no-repeat;
    background-position: center;
    }
    .side_menu a.close_side_menu span{
    display:none;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['side_area_close_icon_size'])&& $cabin_qode_options['side_area_close_icon_size'] != '' ){ ?>
    .side_menu a.close_side_menu{
    height: <?php echo esc_attr($cabin_qode_options['side_area_close_icon_size']).'px;' ?>
    width: <?php echo esc_attr($cabin_qode_options['side_area_close_icon_size']).'px;' ?>
    }
    .side_menu a.close_side_menu span{
    font-size: <?php echo esc_attr($cabin_qode_options['side_area_close_icon_size']).'px;' ?>
    height: <?php echo esc_attr($cabin_qode_options['side_area_close_icon_size']).'px;' ?>
    width: <?php echo esc_attr($cabin_qode_options['side_area_close_icon_size']).'px;' ?>
    line-height: <?php echo esc_attr($cabin_qode_options['side_area_close_icon_size']).'px;' ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['side_area_type']) && ($cabin_qode_options['side_area_type'] == 'side_menu_slide_from_right')){?>

    <?php if (isset($cabin_qode_options['side_area_width']) && ($cabin_qode_options['side_area_width'] !== '') && ($cabin_qode_options['side_area_width'] >=30)) { ?>
        .side_menu_slide_from_right .side_menu{
        right:-<?php echo esc_attr($cabin_qode_options['side_area_width']).'%';  ?>;
        width:<?php echo esc_attr($cabin_qode_options['side_area_width']) .'%';  ?>;
        }
    <?php } ?>

    <?php if (isset($cabin_qode_options['side_area_content_overlay_color']) && !empty($cabin_qode_options['side_area_content_overlay_color'])) { ?>
        .side_menu_slide_from_right .wrapper .cover{
        background-color:<?php echo esc_attr($cabin_qode_options['side_area_content_overlay_color']);  ?>;
        }
    <?php } ?>

    <?php if (isset($cabin_qode_options['side_area_content_overlay_opacity']) && ($cabin_qode_options['side_area_content_overlay_opacity'] !== '')) { ?>
        .side_menu_slide_from_right.right_side_menu_opened .wrapper .cover{
        opacity:<?php echo esc_attr($cabin_qode_options['side_area_content_overlay_opacity']);  ?>;
        }
    <?php } ?>

<?php } ?>


<?php if (isset($cabin_qode_options['side_area_aligment']) && ($cabin_qode_options['side_area_aligment']=='left')) { ?>
    .side_menu_slide_from_right .side_menu,
    body.side_menu_slide_with_content .side_menu{
    text-align: left;
    }
<?php } ?>
<?php if (isset($cabin_qode_options['side_area_aligment']) && ($cabin_qode_options['side_area_aligment']=='right')) { ?>
    .side_menu_slide_from_right .side_menu,
    body.side_menu_slide_with_content .side_menu{
    text-align: right;
    }
<?php } ?>
<?php if (isset($cabin_qode_options['side_area_aligment']) && ($cabin_qode_options['side_area_aligment']=='center')) { ?>
    .side_menu_slide_from_right .side_menu,
    body.side_menu_slide_with_content .side_menu{
    text-align: center;
    }
<?php } ?>


<?php
$side_area_text_styles = array();

if(isset($cabin_qode_options['side_area_text_google_fonts']) && $cabin_qode_options['side_area_text_google_fonts'] !== '-1') {
    $side_area_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['side_area_text_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['side_area_text_fontsize']) && $cabin_qode_options['side_area_text_fontsize'] !== '') {
    $side_area_text_styles[] = 'font-size: '.$cabin_qode_options['side_area_text_fontsize'].'px';
}

if(isset($cabin_qode_options['side_area_text_lineheight']) && $cabin_qode_options['side_area_text_lineheight'] !== '') {
    $side_area_text_styles[] = 'line-height: '.$cabin_qode_options['side_area_text_lineheight'].'px';
}

if(isset($cabin_qode_options['side_area_text_letterspacing']) && $cabin_qode_options['side_area_text_letterspacing'] !== '') {
    $side_area_text_styles[] = 'letter-spacing: '.$cabin_qode_options['side_area_text_letterspacing'].'px';
}

if(isset($cabin_qode_options['side_area_text_fontweight']) && $cabin_qode_options['side_area_text_fontweight'] !== '') {
    $side_area_text_styles[] = 'font-weight: '.$cabin_qode_options['side_area_text_fontweight'];
}

if(isset($cabin_qode_options['side_area_text_fontstyle']) && $cabin_qode_options['side_area_text_fontstyle'] !== '') {
    $side_area_text_styles[] = 'font-style: '.$cabin_qode_options['side_area_text_fontstyle'];
}

if(isset($cabin_qode_options['side_area_text_texttransform']) && $cabin_qode_options['side_area_text_texttransform'] !== '') {
    $side_area_text_styles[] = 'text-transform: '.$cabin_qode_options['side_area_text_texttransform'];
}

if(isset($cabin_qode_options['side_area_text_color']) && $cabin_qode_options['side_area_text_color'] !== '') {
    $side_area_text_styles[] = 'color: '.$cabin_qode_options['side_area_text_color'];
}

if(is_array($side_area_text_styles) && count($side_area_text_styles)) { ?>
    .side_menu .widget,
    .side_menu .widget.widget_search form,
    .side_menu .widget.widget_search form input[type="text"],
    .side_menu .widget.widget_search form input[type="submit"],
    .side_menu .widget h6,
    .side_menu .widget h6 a,
    .side_menu .widget p,
    .side_menu .widget li a,
    .side_menu .widget.widget_rss li a.rsswidget,
    .side_menu #wp-calendar caption,
    .side_menu .widget li,
    .side_menu_title h3,
    .side_menu .widget.widget_archive select,
    .side_menu .widget.widget_categories select,
    .side_menu .widget.widget_text select,
    .side_menu .widget.widget_search form input[type="submit"],
    .side_menu #wp-calendar th,
    .side_menu #wp-calendar td,
    .side_menu .q_social_icon_holder i.simple_social{
    <?php echo esc_attr(implode(';', $side_area_text_styles)); ?>
    }
<?php } ?>

<?php
$side_area_title_styles = array();

if(isset($cabin_qode_options['side_area_title_google_fonts']) && $cabin_qode_options['side_area_title_google_fonts'] !== '-1') {
    $side_area_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['side_area_title_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['side_area_title_fontsize']) && $cabin_qode_options['side_area_title_fontsize'] !== '') {
    $side_area_title_styles[] = 'font-size: '.$cabin_qode_options['side_area_title_fontsize'].'px';
}

if(isset($cabin_qode_options['side_area_title_lineheight']) && $cabin_qode_options['side_area_title_lineheight'] !== '') {
    $side_area_title_styles[] = 'line-height: '.$cabin_qode_options['side_area_title_lineheight'].'px';
}

if(isset($cabin_qode_options['side_area_title_letterspacing']) && $cabin_qode_options['side_area_title_letterspacing'] !== '') {
    $side_area_title_styles[] = 'letter-spacing: '.$cabin_qode_options['side_area_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['side_area_title_fontweight']) && $cabin_qode_options['side_area_title_fontweight'] !== '') {
    $side_area_title_styles[] = 'font-weight: '.$cabin_qode_options['side_area_title_fontweight'];
}

if(isset($cabin_qode_options['side_area_title_fontstyle']) && $cabin_qode_options['side_area_title_fontstyle'] !== '') {
    $side_area_title_styles[] = 'font-style: '.$cabin_qode_options['side_area_title_fontstyle'];
}

if(isset($cabin_qode_options['side_area_title_texttransform']) && $cabin_qode_options['side_area_title_texttransform'] !== '') {
    $side_area_title_styles[] = 'text-transform: '.$cabin_qode_options['side_area_title_texttransform'];
}

if(isset($cabin_qode_options['side_area_title_color']) && $cabin_qode_options['side_area_title_color'] !== '') {
    $side_area_title_styles[] = 'color: '.$cabin_qode_options['side_area_title_color'];
}

if(is_array($side_area_title_styles) && count($side_area_title_styles)) { ?>
    .side_menu h4, .side_menu h5 { <?php echo esc_attr(implode(';', $side_area_title_styles)); ?> }
<?php } ?>

<?php
$side_area_title_styles = array();

if(isset($cabin_qode_options['sidearea_link_font_family']) && $cabin_qode_options['sidearea_link_font_family'] !== '-1') {
    $side_area_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidearea_link_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidearea_link_font_size']) && $cabin_qode_options['sidearea_link_font_size'] !== '') {
    $side_area_title_styles[] = 'font-size: '.$cabin_qode_options['sidearea_link_font_size'].'px';
}

if(isset($cabin_qode_options['sidearea_link_line_height']) && $cabin_qode_options['sidearea_link_line_height'] !== '') {
    $side_area_title_styles[] = 'line-height: '.$cabin_qode_options['sidearea_link_line_height'].'px';
}

if(isset($cabin_qode_options['sidearea_link_letter_spacing']) && $cabin_qode_options['sidearea_link_letter_spacing'] !== '') {
    $side_area_title_styles[] = 'letter-spacing: '.$cabin_qode_options['sidearea_link_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidearea_link_font_weight']) && $cabin_qode_options['sidearea_link_font_weight'] !== '') {
    $side_area_title_styles[] = 'font-weight: '.$cabin_qode_options['sidearea_link_font_weight'];
}

if(isset($cabin_qode_options['sidearea_link_font_style']) && $cabin_qode_options['sidearea_link_font_style'] !== '') {
    $side_area_title_styles[] = 'font-style: '.$cabin_qode_options['sidearea_link_font_style'];
}

if(isset($cabin_qode_options['sidearea_link_text_transform']) && $cabin_qode_options['sidearea_link_text_transform'] !== '') {
    $side_area_title_styles[] = 'text-transform: '.$cabin_qode_options['sidearea_link_text_transform'];
}

if(isset($cabin_qode_options['sidearea_link_color']) && $cabin_qode_options['sidearea_link_color'] !== '') {
    $side_area_title_styles[] = 'color: '.$cabin_qode_options['sidearea_link_color'];
}

if(is_array($side_area_title_styles) && count($side_area_title_styles)) { ?>
    .side_menu .widget li a, .side_menu .widget a:not(.qbutton) { <?php echo esc_attr(implode(';', $side_area_title_styles)); ?> }
<?php } ?>

<?php if(isset($cabin_qode_options['sidearea_link_hover_color']) && !empty($cabin_qode_options['sidearea_link_hover_color'])){ ?>
    .side_menu .widget a:hover, .side_menu .widget li:hover, .side_menu .widget li:hover>a{
    color: <?php echo esc_attr($cabin_qode_options['sidearea_link_hover_color']);  ?>;
    }
<?php } ?>

<?php
if (isset($cabin_qode_options['side_area_enable_bottom_border']) && $cabin_qode_options['side_area_enable_bottom_border']=='yes') {
    if (isset($cabin_qode_options['side_area_bottom_border_color']) && !empty($cabin_qode_options['side_area_bottom_border_color'])) { ?>
        .side_menu .widget_recent_entries > ul > li,
        .side_menu .widget_nav_menu li.menu-item,
        .side_menu .widget_recent_comments > ul > li,
        .side_menu .widget_nav_menu ul li,
        .side_menu .widget_pages ul li,
        .side_menu .widget_archive > ul > li,
        .side_menu .widget_categories > ul > li{
        border-bottom: 1px solid <?php echo esc_attr($cabin_qode_options['sidearea_bottom_border_color']);?>;
        margin-bottom: 10px;
        padding-bottom: 10px;
        }
    <?php }
}
?>

<?php
/* widget elements style start */

// search widget
$sidebar_search_styles = array();

if(isset($cabin_qode_options['sidebar_search_height']) && $cabin_qode_options['sidebar_search_height'] !== '') { ?>
    .widget.widget_search form input[type="text"],
    .header_top #searchform input[type="text"],
    .header-widget #searchform input[type="text"],
    .widget.widget_search form input[type="submit"],
    .header_top #searchform input[type="submit"],
    .header-widget #searchform input[type="submit"],
    .woocommerce .widget #searchform input[type='text'],
    aside.sidebar .widget_product_search form#searchform input#s,
    .woocommerce .widget #searchsubmit,
    aside.sidebar .widget_product_search form#searchform input#searchsubmit{
    height: <?php echo esc_attr($cabin_qode_options['sidebar_search_height']).'px;'?>
    line-height: <?php echo esc_attr($cabin_qode_options['sidebar_search_height']).'px;'?>
    }

<?php }

if(!empty($cabin_qode_options['sidebar_search_border_color'])) {
    $sidebar_search_styles[] = 'border-color: '.$cabin_qode_options['sidebar_search_border_color'];
}

if(!empty($cabin_qode_options['sidebar_search_loupe_color'])) {
    $sidebar_search_styles[] = 'color: '.$cabin_qode_options['sidebar_search_loupe_color'];
}

if(!empty($cabin_qode_options['sidebar_search_loupe_background_color'])) { ?>
    .woocommerce .widget #searchsubmit,
    aside.sidebar .widget_product_search form#searchform input#searchsubmit,
    .widget.widget_search form input[type="submit"],
    .header_top #searchform input[type="submit"],
    .header-widget #searchform input[type="submit"]{
    background-color: <?php echo esc_attr($cabin_qode_options['sidebar_search_loupe_background_color']); ?>
    }
<?php }

if(is_array($sidebar_search_styles) && count($sidebar_search_styles)) { ?>
    .widget #searchform,
    .woocommerce .widget #searchsubmit, aside.sidebar .widget_product_search form#searchform input#searchsubmit,
    .widget.widget_search form input[type="submit"]{
    <?php echo esc_attr(implode(';', $sidebar_search_styles)); ?>
    }
<?php } ?>

<?php
$sidebar_search_text_styles = array();

if(isset($cabin_qode_options['sidebar_search_text_font_family']) && $cabin_qode_options['sidebar_search_text_font_family'] !== '-1') {
    $sidebar_search_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidebar_search_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidebar_search_text_font_size']) && $cabin_qode_options['sidebar_search_text_font_size'] !== '') {
    $sidebar_search_text_styles[] = 'font-size: '.$cabin_qode_options['sidebar_search_text_font_size'].'px';
}

if(isset($cabin_qode_options['sidebar_search_text_line_height']) && $cabin_qode_options['sidebar_search_text_line_height'] !== '') {
    $sidebar_search_text_styles[] = 'line-height: '.$cabin_qode_options['sidebar_search_text_line_height'].'px';
}

if(isset($cabin_qode_options['sidebar_search_text_letter_spacing']) && $cabin_qode_options['sidebar_search_text_letter_spacing'] !== '') {
    $sidebar_search_text_styles[] = 'letter-spacing: '.$cabin_qode_options['sidebar_search_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidebar_search_text_font_weight']) && $cabin_qode_options['sidebar_search_text_font_weight'] !== '') {
    $sidebar_search_text_styles[] = 'font-weight: '.$cabin_qode_options['sidebar_search_text_font_weight'];
}

if(isset($cabin_qode_options['sidebar_search_text_font_style']) && $cabin_qode_options['sidebar_search_text_font_style'] !== '') {
    $sidebar_search_text_styles[] = 'font-style: '.$cabin_qode_options['sidebar_search_text_font_style'];
}

if(isset($cabin_qode_options['sidebar_search_text_text_transform']) && $cabin_qode_options['sidebar_search_text_text_transform'] !== '') {
    $sidebar_search_text_styles[] = 'text-transform: '.$cabin_qode_options['sidebar_search_text_text_transform'];
}

if(isset($cabin_qode_options['sidebar_search_text_color']) && $cabin_qode_options['sidebar_search_text_color'] !== '') {
    $sidebar_search_text_styles[] = 'color: '.$cabin_qode_options['sidebar_search_text_color'];
}


if(is_array($sidebar_search_text_styles) && count($sidebar_search_text_styles)) { ?>
    .widget #searchform input[type='text'],
    .woocommerce .widget #searchsubmit input[type='text']{
    <?php echo esc_attr(implode(';', $sidebar_search_text_styles)); ?>
    }

    <?php if(isset($cabin_qode_options['sidebar_search_text_color']) && $cabin_qode_options['sidebar_search_text_color'] !== ''){ ?>
        .widget #searchform input[type='text']::-webkit-input-placeholder,
        .woocommerce .widget #searchsubmit input[type='text']::-webkit-input-placeholder{
        <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_text_color']).';' ?>
        opacity:1;
        }
        .widget #searchform input[type='text']:-moz-placeholder,
        .woocommerce .widget #searchsubmit input[type='text']:-moz-placeholder{
        <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_text_color']).';' ?>
        opacity:1;
        }
        .widget #searchform input[type='text']::-moz-placeholder,
        .woocommerce .widget #searchsubmit input[type='text']::-moz-placeholder{
        <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_text_color']).';' ?>
        opacity:1;
        }
        .widget #searchform input[type='text']:-ms-input-placeholder,
        .woocommerce .widget #searchsubmit input[type='text']:-ms-input-placeholder{
        <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_text_color']).';' ?>
        opacity:1;
        }
    <?php } ?>

<?php }


if(isset($cabin_qode_options['sidebar_search_focus_text_color']) && $cabin_qode_options['sidebar_search_focus_text_color'] !== '') { ?>
    .widget #searchform input[type='text']:focus,
    .woocommerce .widget #searchsubmit input[type='text']:focus{
    <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_focus_text_color']).';' ?>
    }
    .widget #searchform input[type='text']:focus::-webkit-input-placeholder,
    .woocommerce .widget #searchsubmit input[type='text']:focus::-webkit-input-placeholder{
    <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_focus_text_color']).';' ?>
    }
    .widget #searchform input[type='text']:focus:-moz-placeholder,
    .woocommerce .widget #searchsubmit input[type='text']:focus:-moz-placeholder{
    <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_focus_text_color']).';' ?>
    }
    .widget #searchform input[type='text']:focus::-moz-placeholder,
    .woocommerce .widget #searchsubmit input[type='text']:focus::-moz-placeholder{
    <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_focus_text_color']).';' ?>
    }
    .widget #searchform input[type='text']:focus:-ms-input-placeholder,
    .woocommerce .widget #searchsubmit input[type='text']:focus:-ms-input-placeholder{
    <?php echo 'color: '.esc_attr($cabin_qode_options['sidebar_search_focus_text_color']).';' ?>
    }
<?php }
/* widget elements style end */
?>


<?php
$sidebar_product_title_styles = array();

if(isset($cabin_qode_options['sidebar_product_title_font_family']) && $cabin_qode_options['sidebar_product_title_font_family'] !== '-1') {
    $sidebar_product_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidebar_product_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidebar_product_title_font_size']) && $cabin_qode_options['sidebar_product_title_font_size'] !== '') {
    $sidebar_product_title_styles[] = 'font-size: '.$cabin_qode_options['sidebar_product_title_font_size'].'px';
}

if(isset($cabin_qode_options['sidebar_product_title_line_height']) && $cabin_qode_options['sidebar_product_title_line_height'] !== '') {
    $sidebar_product_title_styles[] = 'line-height: '.$cabin_qode_options['sidebar_product_title_line_height'].'px';
}

if(isset($cabin_qode_options['sidebar_product_title_letter_spacing']) && $cabin_qode_options['sidebar_product_title_letter_spacing'] !== '') {
    $sidebar_product_title_styles[] = 'letter-spacing: '.$cabin_qode_options['sidebar_product_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidebar_product_title_font_weight']) && $cabin_qode_options['sidebar_product_title_font_weight'] !== '') {
    $sidebar_product_title_styles[] = 'font-weight: '.$cabin_qode_options['sidebar_product_title_font_weight'];
}

if(isset($cabin_qode_options['sidebar_product_title_font_style']) && $cabin_qode_options['sidebar_product_title_font_style'] !== '') {
    $sidebar_product_title_styles[] = 'font-style: '.$cabin_qode_options['sidebar_product_title_font_style'];
}

if(isset($cabin_qode_options['sidebar_product_title_text_transform']) && $cabin_qode_options['sidebar_product_title_text_transform'] !== '') {
    $sidebar_product_title_styles[] = 'text-transform: '.$cabin_qode_options['sidebar_product_title_text_transform'];
}

if(isset($cabin_qode_options['sidebar_product_title_color']) && $cabin_qode_options['sidebar_product_title_color'] !== '') {
    $sidebar_product_title_styles[] = 'color: '.$cabin_qode_options['sidebar_product_title_color'];
}

if(is_array($sidebar_product_title_styles) && count($sidebar_product_title_styles)) { ?>
    .woocommerce aside.sidebar ul.product_list_widget li a,
    .woocommerce aside.sidebar ul.product_list_widget li a span.product-title,
    aside.sidebar ul.product_list_widget li a,
    aside.sidebar ul.product_list_widget li a span.product-title{
    <?php echo esc_attr(implode(';', $sidebar_product_title_styles)); ?>
    }
<?php } ?>

<?php

$sidebar_product_title_hover_styles = array();

if(isset($cabin_qode_options['sidebar_product_title_hover_color']) && $cabin_qode_options['sidebar_product_title_hover_color'] !== '') {
    $sidebar_product_title_hover_styles[] = 'color: '.$cabin_qode_options['sidebar_product_title_hover_color'];
}

if(is_array($sidebar_product_title_hover_styles) && count($sidebar_product_title_hover_styles)) { ?>
    .woocommerce aside.sidebar ul.product_list_widget li a:hover,
    .woocommerce aside.sidebar ul.product_list_widget li a span.product-title:hover,
    aside.sidebar ul.product_list_widget li a:hover,
    aside.sidebar ul.product_list_widget li a span.product-title:hover{
    <?php echo esc_attr(implode(';', $sidebar_product_title_hover_styles)); ?>
    }
<?php } ?>

<?php
$sidebar_product_price_style = array();

if(isset($cabin_qode_options['sidebar_product_price_font_family']) && $cabin_qode_options['sidebar_product_price_font_family'] !== '-1') {
    $sidebar_product_price_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['sidebar_product_price_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['sidebar_product_price_font_size']) && $cabin_qode_options['sidebar_product_price_font_size'] !== '') {
    $sidebar_product_price_style[] = 'font-size: '.$cabin_qode_options['sidebar_product_price_font_size'].'px';
}

if(isset($cabin_qode_options['sidebar_product_price_line_height']) && $cabin_qode_options['sidebar_product_price_line_height'] !== '') {
    $sidebar_product_price_style[] = 'line-height: '.$cabin_qode_options['sidebar_product_price_line_height'].'px';
}

if(isset($cabin_qode_options['sidebar_product_price_letter_spacing']) && $cabin_qode_options['sidebar_product_price_letter_spacing'] !== '') {
    $sidebar_product_price_style[] = 'letter-spacing: '.$cabin_qode_options['sidebar_product_price_letter_spacing'].'px';
}

if(isset($cabin_qode_options['sidebar_product_price_font_weight']) && $cabin_qode_options['sidebar_product_price_font_weight'] !== '') {
    $sidebar_product_price_style[] = 'font-weight: '.$cabin_qode_options['sidebar_product_price_font_weight'];
}

if(isset($cabin_qode_options['sidebar_product_price_font_style']) && $cabin_qode_options['sidebar_product_price_font_style'] !== '') {
    $sidebar_product_price_style[] = 'font-style: '.$cabin_qode_options['sidebar_product_price_font_style'];
}

if(isset($cabin_qode_options['sidebar_product_price_text_transform']) && $cabin_qode_options['sidebar_product_price_text_transform'] !== '') {
    $sidebar_product_price_style[] = 'text-transform: '.$cabin_qode_options['sidebar_product_price_text_transform'];
}

if(isset($cabin_qode_options['sidebar_product_price_color']) && $cabin_qode_options['sidebar_product_price_color'] !== '') {
    $sidebar_product_price_style[] = 'color: '.$cabin_qode_options['sidebar_product_price_color'];
}

if(is_array($sidebar_product_price_style) && count($sidebar_product_price_style)) { ?>
    .woocommerce aside.sidebar ul.product_list_widget li span.amount,
    aside.sidebar ul.product_list_widget li span.amount{
    <?php echo esc_attr(implode(';', $sidebar_product_price_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['sidebar_product_price_old_color']) && !empty($cabin_qode_options['sidebar_product_price_old_color'])) { ?>
    .woocommerce aside.sidebar ul.product_list_widget li del span.amount,
    aside.sidebar ul.product_list_widget li del span.amount{
    color: <?php echo esc_attr($cabin_qode_options['sidebar_product_price_old_color']); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['qs_slider_height_mobile']) && !empty($cabin_qode_options['qs_slider_height_mobile'])) { ?>
    @media only screen and (max-width: 480px){
    .q_slider .carousel, .qode_slider_preloader, .carousel-inner>.item{
    height: <?php echo esc_attr($cabin_qode_options['qs_slider_height_mobile']); ?>px !important;
    }
    }
<?php } ?>


<?php
//generate Select Slider navigation styles
$qs_navigation_control_styles    = '';

if(isset($cabin_qode_options['qs_navigation_control_color']) && $cabin_qode_options['qs_navigation_control_color'] != '') {
    $qs_navigation_control_styles .= 'background-color: '.$cabin_qode_options['qs_navigation_control_color'].';';
}

if(isset($cabin_qode_options['qs_navigation_control_size']) && $cabin_qode_options['qs_navigation_control_size'] != '') {
    $qs_navigation_control_styles .= 'width: '.$cabin_qode_options['qs_navigation_control_size'].'px;';
    $qs_navigation_control_styles .= 'height: '.$cabin_qode_options['qs_navigation_control_size'].'px;';
}

if(isset($cabin_qode_options['qs_navigation_control_border_radius']) && $cabin_qode_options['qs_navigation_control_border_radius'] != '') {
    $qs_navigation_control_styles .= 'border-radius: '.$cabin_qode_options['qs_navigation_control_border_radius'].'px;';
}

if($qs_navigation_control_styles != "") { ?>
    .carousel-indicators li,
    .carousel-indicators.dark li{
    <?php echo esc_attr($qs_navigation_control_styles); ?>
    }
<?php } ?>

<?php
//generate header buttons styles
$header_buttons_styles          = '';
$header_buttons_hover_styles    = '';
if(isset($cabin_qode_options['header_buttons_color']) && $cabin_qode_options['header_buttons_color']) {
    $header_buttons_styles .= 'color: '.$cabin_qode_options['header_buttons_color'].';';
}

if(isset($cabin_qode_options['header_buttons_hover_color']) && $cabin_qode_options['header_buttons_hover_color'] != '') {
    $header_buttons_hover_styles .= 'color: '.$cabin_qode_options['header_buttons_hover_color'].'!important;';
}

if($header_buttons_styles != ""){ ?>
    .side_menu_button > a,
    .mobile_menu_button span,
    .side_menu_button > a.search_covers_header:not(.popup_menu),
    .side_menu_button > a.side_menu_button_link:not(.popup_menu),
    .side_menu_button > a.search_slides_from_header_bottom:not(.popup_menu),
    .side_menu_button > a.fade_push_text_right:not(.popup_menu){ <?php echo esc_attr($header_buttons_styles); ?> }

    .popup_menu .line,
    .popup_menu .line:after, .popup_menu .line:before,
    .popup_menu.opened .line:after, .popup_menu.opened .line:before{
    background-color: <?php echo esc_attr($cabin_qode_options['header_buttons_color']); ?>;
    }
<?php }

if($header_buttons_hover_styles != "") { ?>
    .side_menu_button > a:hover,
    .mobile_menu_button span:hover,
    .popup_menu:hover .line,
    .popup_menu:hover .line:after,
    .popup_menu:hover .line:before,
    .light:not(.sticky):not(.scrolled) .side_menu_button > a:hover,
    .dark:not(.sticky):not(.scrolled) .side_menu_button > a:hover{
    <?php echo esc_attr($header_buttons_hover_styles); ?>
    }

    .popup_menu:hover .line,
    .popup_menu:hover .line:after, .popup_menu:hover .line:before,
    .popup_menu.opened:hover .line:after,
    .popup_menu.opened:hover .line:before{
    background-color: <?php echo esc_attr($cabin_qode_options['header_buttons_hover_color']); ?> ;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['header_buttons_font_size']) && $cabin_qode_options['header_buttons_font_size'] !== ''){ ?>
    .side_menu_button > a:not(.popup_menu),
    .mobile_menu_button span,
    .side_menu_button > a.search_covers_header:not(.popup_menu),
    .side_menu_button > a.side_menu_button_link:not(.popup_menu),
    .side_menu_button > a.search_slides_from_header_bottom:not(.popup_menu),
    .side_menu_button > a.fade_push_text_right:not(.popup_menu){
    font-size: <?php echo esc_attr($cabin_qode_options['header_buttons_font_size']); ?>px;
    }
    <?php if($cabin_qode_options['header_buttons_font_size'] > 30 ){ ?>
        @media only screen and (max-width: 480px){
        .side_menu_button > a:not(.popup_menu),
        .mobile_menu_button span{
        font-size: 30px;
        }
        }
    <?php } ?>
<?php } ?>

<?php if(isset($cabin_qode_options['header_buttons_fullscreen_button_background']) && $cabin_qode_options['header_buttons_fullscreen_button_background'] !== ''){ ?>
    .side_menu_button .popup_menu{
    -webkit-backface-visibility: hidden;
    display: inline-block;
    }
    .side_menu_button .popup_menu.normal{
    padding:10px 15px;
    }
    .side_menu_button .popup_menu.medium{
    padding:10px 13px;
    }
    .side_menu_button .popup_menu.large{
    padding:15px;
    }
    .side_menu_button .popup_menu:not(.opened){
    background-color: <?php echo esc_attr($cabin_qode_options['header_buttons_fullscreen_button_background']); ?>;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['header_buttons_fullscreen_button_background_hover']) && $cabin_qode_options['header_buttons_fullscreen_button_background_hover'] !== ''){ ?>
    .side_menu_button .popup_menu.normal:not(.opened):hover,
    .side_menu_button .popup_menu.medium:not(.opened):hover,
    .side_menu_button .popup_menu.large:not(.opened):hover{
    background-color: <?php echo esc_attr($cabin_qode_options['header_buttons_fullscreen_button_background_hover']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['mobile_button_color']) && $cabin_qode_options['mobile_button_color'] !== ''){ ?>
    @media only screen and (max-width: 1000px){
    .mobile_menu_button span,
    .side_menu_button > a,
    .mobile_menu_button span{
    color: <?php echo esc_attr($cabin_qode_options['mobile_button_color']); ?>;
    }

    .popup_menu .line,
    .popup_menu .line:after,
    .popup_menu .line:before{
    background-color: <?php echo esc_attr($cabin_qode_options['mobile_button_color']); ?>;
    }
    }
<?php } ?>

<?php if(isset($cabin_qode_options['mobile_button_color_hover']) && $cabin_qode_options['mobile_button_color_hover'] !== ''){ ?>
    @media only screen and (max-width: 1000px){
    .mobile_menu_button span:hover,
    .side_menu_button > a:hover,
    .mobile_menu_button span:hover{
    color: <?php echo esc_attr($cabin_qode_options['mobile_button_color_hover']);?>!important ;
    }
    .popup_menu:hover .line,
    .popup_menu:hover .line:after,
    .popup_menu:hover .line:before{
    background-color: <?php echo esc_attr($cabin_qode_options['mobile_button_color_hover']); ?>;
    }
    }
<?php } ?>

<?php if((!empty($cabin_qode_options['vertical_area']) && $cabin_qode_options['vertical_area']=='yes' && !empty($cabin_qode_options['enable_vertical_menu_separators']) && $cabin_qode_options['enable_vertical_menu_separators']=='yes')){ ?>
    nav.vertical_menu > ul > li > a:after,
    .vertical_menu_toggle .second:after{
    display:block;
    <?php if (isset($cabin_qode_options['vertical_menu_separators_color']) && !empty($cabin_qode_options['vertical_menu_separators_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_separators_color']); ?>;  <?php } ?>
    <?php if (isset($cabin_qode_options['vertical_menu_separators_width']) && $cabin_qode_options['vertical_menu_separators_width'] !== '') { ?>  width: <?php echo esc_attr($cabin_qode_options['vertical_menu_separators_width']); ?>px; <?php } ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['enable_vertical_menu_separators']) && $cabin_qode_options['enable_vertical_menu_separators'] == 'yes' && isset($cabin_qode_options['full_width_vertical_menu_items']) && $cabin_qode_options['full_width_vertical_menu_items'] == 'yes' && isset($cabin_qode_options['enable_vertical_menutop_bottom_separators']) && $cabin_qode_options['enable_vertical_menutop_bottom_separators'] == 'yes'){ ?>
    nav.vertical_menu > ul > li:last-child > a:after{
    content: '';
    }
    nav.vertical_menu > ul > li:first-child > a{
    border-top-width:1px;
    border-top-style:solid;
    border-top-color:#bfa97d;
    }
    <?php if(isset($cabin_qode_options['vertical_menu_separators_color']) && $cabin_qode_options['vertical_menu_separators_color'] !== ''){ ?>
        nav.vertical_menu > ul > li:first-child > a{
        border-top-color:<?php echo esc_attr($cabin_qode_options['vertical_menu_separators_color']); ?>;
        }
    <?php } ?>
<?php } ?>

<?php if(isset($cabin_qode_options['full_width_vertical_menu_items']) && $cabin_qode_options['full_width_vertical_menu_items'] == 'yes'){ ?>


    <?php
    $paddings='';
    if(isset($cabin_qode_options['vertical_area_padding']) && $cabin_qode_options['vertical_area_padding'] !== ''){
        $paddings = ($cabin_qode_options['vertical_area_padding']);
        $padding = explode(" ", $paddings);
        $num_padd = count($padding);
    } ?>


    nav.vertical_menu > ul > li > a:after,
    .vertical_menu_toggle .second:after{
    width: 100%;
    }

    body:not(.vertical_menu_hidden) nav.vertical_menu ul li a,
    body.vertical_menu_hidden .vertical_menu_area.active nav.vertical_menu ul li a,
    .vertical_menu_toggle .second{
    <?php if(isset($cabin_qode_options['vertical_area_padding']) && $cabin_qode_options['vertical_area_padding'] == ''){ ?>

        margin-left: -40px;
        margin-right: -40px;
        padding-left: 40px;
        padding-right: 40px;

    <?php } else { ?>

        <?php if($num_padd==1){ ?>
            margin-left: -<?php echo esc_attr($padding[0]);?>;
            margin-right: -<?php echo esc_attr($padding[0]);?>;
            padding-left: <?php echo esc_attr($padding[0]);?>;
            padding-right: <?php echo esc_attr($padding[0]);?>;
        <?php } ?>

        <?php if($num_padd==2){ ?>
            margin-left: -<?php echo esc_attr($padding[1]);?>;
            margin-right: -<?php echo esc_attr($padding[1]);?>;
            padding-left: <?php echo esc_attr($padding[1]);?>;
            padding-right: <?php echo esc_attr($padding[1]);?>;
        <?php } ?>

        <?php if($num_padd==3){ ?>
            margin-left: -<?php echo esc_attr($padding[1]);?>;
            margin-right: -<?php echo esc_attr($padding[1]);?>;
            padding-left: <?php echo esc_attr($padding[1]);?>;
            padding-right: <?php echo esc_attr($padding[1]);?>;
        <?php } ?>

        <?php if($num_padd==4){ ?>
            margin-left: -<?php echo esc_attr($padding[3]);?>;
            margin-right: -<?php echo esc_attr($padding[1]);?>;
            padding-left: <?php echo esc_attr($padding[3]);?>;
            padding-right: <?php echo esc_attr($padding[1]);?>;
        <?php } ?>

    <?php } ?>
    }

    body.vertical_menu_hidden.vertical_menu_hidden_with_icons .vertical_menu_area nav.vertical_menu > ul > li > a {
    margin-left: -200px;
    margin-right: -200px;
    padding-left: 200px;
    padding-right: 200px;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['vertical_menu_dropdown_top_padding']) && ($cabin_qode_options['vertical_menu_dropdown_top_padding'])!=''){ ?>
    .vertical_menu .second .inner{
    padding-top: <?php echo esc_attr($cabin_qode_options['vertical_menu_dropdown_top_padding']); ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['vertical_menu_dropdown_bottom_padding']) && ($cabin_qode_options['vertical_menu_dropdown_bottom_padding'])!=''){ ?>
    .vertical_menu .second .inner{
    padding-bottom: <?php echo esc_attr($cabin_qode_options['vertical_menu_dropdown_bottom_padding']); ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['enable_vertical_menu_items_background']) && ($cabin_qode_options['enable_vertical_menu_items_background'])=='yes'){ ?>

    <?php if(isset($cabin_qode_options['vertical_menu_items_background_color']) && !empty($cabin_qode_options['vertical_menu_items_background_color'])){ ?>
        nav.vertical_menu>ul>li>a{
        background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_items_background_color']); ?>;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['vertical_menu_items_hover_background_color']) && !empty($cabin_qode_options['vertical_menu_items_hover_background_color'])){ ?>
        nav.vertical_menu>ul>li>a:hover,
        nav.vertical_menu>ul>li.active>a:hover{
        background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_items_hover_background_color']); ?>;
        }
    <?php } ?>
    <?php if(isset($cabin_qode_options['vertical_menu_items_active_background_color']) && !empty($cabin_qode_options['vertical_menu_items_active_background_color'])){ ?>
        nav.vertical_menu>ul>li.active>a{
        background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_items_active_background_color']); ?>;
        }
    <?php } ?>

<?php } ?>



<?php if(isset($cabin_qode_options['enable_vertical_menu_item_left_border']) && $cabin_qode_options['enable_vertical_menu_item_left_border'] == 'yes'){ ?>

    <?php if (isset($cabin_qode_options['vertical_menu_item_left_border_width']) && !empty($cabin_qode_options['vertical_menu_item_left_border_width'])) { ?>
        nav.vertical_menu>ul>li>a:before{
        width: <?php echo esc_attr($cabin_qode_options['vertical_menu_item_left_border_width']); ?>px;
        }
    <?php } ?>


    <?php if (isset($cabin_qode_options['vertical_menu_item_left_border_color']) && !empty($cabin_qode_options['vertical_menu_item_left_border_color'])) { ?>
        nav.vertical_menu>ul>li>a:before{
        background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_item_left_border_color']); ?>;
        opacity:1;
        }
    <?php } ?>

    <?php if (isset($cabin_qode_options['vertical_menu_item_left_border_hover_color']) && !empty($cabin_qode_options['vertical_menu_item_left_border_hover_color'])) { ?>
        nav.vertical_menu>ul>li>a:hover:before,
        nav.vertical_menu>ul>li.active>a:hover:before{
        background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_item_left_border_hover_color']); ?>;
        opacity:1;
        }
    <?php } ?>

    <?php if (isset($cabin_qode_options['vertical_menu_item_left_border_active_color']) && !empty($cabin_qode_options['vertical_menu_item_left_border_active_color'])) { ?>
        nav.vertical_menu>ul>li.active>a:before{
        background-color: <?php echo esc_attr($cabin_qode_options['vertical_menu_item_left_border_active_color']); ?>;
        opacity:1;
        }
    <?php } ?>

<?php } ?>





<?php if(!empty($cabin_qode_options['vertical_area_alignment']) && $cabin_qode_options['vertical_menu_separators_width'] !== ''){ ?>
    <?php $margin_left= $cabin_qode_options['vertical_menu_separators_width']/2; ?>

    nav.vertical_menu > ul > li > a:after,
    .vertical_menu_toggle .second:after{
    <?php if($cabin_qode_options['vertical_area_alignment'] == 'left'){ ?>
        left:0px;

    <?php } elseif($cabin_qode_options['vertical_area_alignment'] == 'center'){ ?>
        left:50%;
        margin-left: -<?php echo esc_attr($margin_left); ?>px;

    <?php } elseif($cabin_qode_options['vertical_area_alignment'] == 'right'){ ?>
        left:auto;
        right: 0px;

    <?php } ?>
    }
<?php } elseif (!empty($cabin_qode_options['vertical_area_alignment']) && $cabin_qode_options['vertical_menu_separators_width'] == ''){  ?>

    nav.vertical_menu > ul > li > a:after,
    .vertical_menu_toggle .second:after{
    <?php if($cabin_qode_options['vertical_area_alignment'] == 'left'){ ?>
        left:0px;

    <?php } elseif($cabin_qode_options['vertical_area_alignment'] == 'center'){ ?>
        left:50%;
        margin-left: -22px;

    <?php } elseif($cabin_qode_options['vertical_area_alignment'] == 'right'){ ?>
        left:auto;
        right: 0px;

    <?php } ?>
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['vertical_area_hidden_button_color']) && $cabin_qode_options['vertical_area_hidden_button_color'] !== ''){ ?>
    .vertical_menu_hidden_button_line,
    .vertical_menu_hidden_button_line:after,.vertical_menu_hidden_button_line:before{
    background-color: <?php echo esc_attr($cabin_qode_options['vertical_area_hidden_button_color']); ?>;
    }
<?php } ?>



<?php if (isset($cabin_qode_options['vertical_area_background']) && $cabin_qode_options['vertical_area_background'] !== '') { ?>
    aside.vertical_menu_area,
    .vertical_menu.vertical_menu_side ul li div.second,
    .vertical_menu.vertical_menu_side ul li div.second ul,
    .vertical_menu.vertical_menu_side ul li div.second ul li ul,
    .vertical_menu.vertical_menu_side ul li div.second ul li a{
    background-color: <?php echo esc_attr($cabin_qode_options['vertical_area_background']); ?>;
    }

<?php } ?>

<?php if(!empty($cabin_qode_options['vertical_area_padding']) && $cabin_qode_options['vertical_area_padding'] !== ''){ ?>
    aside.vertical_menu_area,
    .vertical_menu_hidden_with_icons aside.vertical_menu_area.active{
    padding: <?php echo esc_attr($cabin_qode_options['vertical_area_padding']); ?>;
    }
<?php } ?>

<?php
$v_menu_paddings='';
$left_padding='';
$right_padding='';
$count_paddings='';
if(isset($cabin_qode_options['vertical_area_padding']) && $cabin_qode_options['vertical_area_padding'] !== ''){
    $v_menu_paddings = ($cabin_qode_options['vertical_area_padding']);
    $v_menu_padding = explode(" ", $v_menu_paddings);
    $num_v_menu_padd = count($v_menu_padding);

    if($num_v_menu_padd==1){
        $left_padding = $v_menu_padding[0];
        $right_padding =  $v_menu_padding[0];
    }

    if($num_v_menu_padd==2){
        $left_padding = $v_menu_padding[1];
        $right_padding =  $v_menu_padding[1];
    }

    if($num_v_menu_padd==3){
        $left_padding = $v_menu_padding[1];
        $right_padding =  $v_menu_padding[1];
    }

    if($num_v_menu_padd==4){
        $left_padding = $v_menu_padding[3];
        $right_padding =  $v_menu_padding[1];
    }

    $count_paddings= $left_padding + $right_padding ;
}
?>


<?php if(isset($cabin_qode_options['vertical_area_type']) && $cabin_qode_options['vertical_area_type'] == 'hidden_with_icons' && isset($cabin_qode_options['vertical_area_padding']) && $cabin_qode_options['vertical_area_padding'] !== ''){ ?>
    .vertical_menu_hidden_with_icons .vertical_menu_area.active .vertical_menu_area_inner,
    .vertical_menu_hidden_with_icons.vertical_menu_hidden_with_logo .vertical_menu_area.active .vertical_menu_area_inner,
    .vertical_menu_hidden_with_icons.vertical_menu_right .vertical_menu_area.active .vertical_menu_area_inner,
    .vertical_menu_hidden_with_icons.vertical_menu_hidden_with_logo.vertical_menu_right .vertical_menu_area.active .vertical_menu_area_inner{
    left: <?php echo esc_attr($left_padding); ?>;
    width: calc(100% - <?php echo esc_attr($count_paddings); ?>px);
    }

<?php } ?>





<?php if(isset($cabin_qode_options['vertical_area_navigation_top_margin']) && $cabin_qode_options['vertical_area_navigation_top_margin'] !== ''){ ?>
    nav.vertical_menu{
    margin-top: <?php echo esc_attr($cabin_qode_options['vertical_area_navigation_top_margin']); ?>px;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['vertical_area_alignment']) && $cabin_qode_options['vertical_area_alignment'] !== ''){ ?>
    .vertical_logo_wrapper,
    nav.vertical_menu,
    aside.vertical_menu_area .vertical_menu_area_widget_holder{
    text-align: <?php echo esc_attr($cabin_qode_options['vertical_area_alignment']); ?>;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['vertical_area_text_color'])){ ?>
    aside .vertical_menu_area_widget_holder,
    aside .vertical_menu_area_widget_holder p,
    aside .vertical_menu_area_widget_holder span{
    color: <?php echo esc_attr($cabin_qode_options['vertical_area_text_color']); ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_menu_color']) || !empty($cabin_qode_options['vertical_menu_fontsize']) || !empty($cabin_qode_options['vertical_menu_lineheight']) || !empty($cabin_qode_options['vertical_menu_fontstyle']) || !empty($cabin_qode_options['vertical_menu_fontweight']) || !empty($cabin_qode_options['vertical_menu_texttransform']) || (isset($cabin_qode_options['vertical_menu_letterspacing']) && $cabin_qode_options['vertical_menu_letterspacing'] !== '') || $cabin_qode_options['vertical_menu_google_fonts'] != "-1") { ?>
    nav.vertical_menu > ul > li > a,
    .vertical_menu.vertical_menu_side ul li a		{
    <?php if (!empty($cabin_qode_options['vertical_menu_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['vertical_menu_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['vertical_menu_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['vertical_menu_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_menu_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['vertical_menu_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_menu_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['vertical_menu_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['vertical_menu_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['vertical_menu_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['vertical_menu_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['vertical_menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['vertical_menu_letterspacing']);  ?>px; <?php } ?>
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['vertical_menu_hovercolor'])) { ?>
    nav.vertical_menu > ul > li.active:hover > a,
    nav.vertical_menu > ul > li:hover > a,
    .vertical_menu.vertical_menu_side ul li:hover > a,
    .vertical_menu.vertical_menu_side ul li.active:hover > a{
    color: <?php echo esc_attr($cabin_qode_options['vertical_menu_hovercolor']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_menu_activecolor'])) { ?>
    nav.vertical_menu > ul > li.active > a,
    .vertical_menu.vertical_menu_side ul li.active > a{
    color: <?php echo esc_attr($cabin_qode_options['vertical_menu_activecolor']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_transparent_menu_color']) || !empty($cabin_qode_options['vertical_transparent_menu_fontsize']) || !empty($cabin_qode_options['vertical_transparent_menu_lineheight']) || !empty($cabin_qode_options['vertical_transparent_menu_fontstyle']) || !empty($cabin_qode_options['vertical_transparent_menu_fontweight']) || !empty($cabin_qode_options['vertical_transparent_menu_texttransform']) || (isset($cabin_qode_options['vertical_transparent_menu_letterspacing']) && $cabin_qode_options['vertical_transparent_menu_letterspacing'] !== '') || $cabin_qode_options['vertical_transparent_menu_google_fonts'] != "-1") { ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  nav.vertical_menu > ul > li > a,
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu.vertical_menu_side ul li a{
    <?php if (!empty($cabin_qode_options['vertical_transparent_menu_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['vertical_transparent_menu_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['vertical_transparent_menu_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_menu_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_menu_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['vertical_transparent_menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_letterspacing']);  ?>px; <?php } ?>
    }
<?php } ?>


<?php if (!empty($cabin_qode_options['vertical_transparent_menu_hovercolor'])) { ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  nav.vertical_menu > ul > li.active:hover > a,
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  nav.vertical_menu > ul > li:hover > a,
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu.vertical_menu_side ul li:hover > a,
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu.vertical_menu_side ul li.active:hover > a{
    color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_hovercolor']);  ?>;
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_transparent_menu_activecolor'])) { ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  nav.vertical_menu > ul > li.active > a,
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu.vertical_menu_side ul li.active > a{
    color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_menu_activecolor']);  ?>;
    }
<?php } ?>



<?php if (isset($cabin_qode_options['vertical_menu_icon_color']) && $cabin_qode_options['vertical_menu_icon_color'] !=='' ){ ?>
    nav.vertical_menu > ul > li > a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_menu_icon_color']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['vertical_menu_icon_hovercolor']) && $cabin_qode_options['vertical_menu_icon_hovercolor'] !=='' ){ ?>
    nav.vertical_menu > ul > li.active:hover > a .menu_icon,
    nav.vertical_menu > ul > li:hover > a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_menu_icon_hovercolor']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['vertical_menu_icon_activecolor']) && $cabin_qode_options['vertical_menu_icon_activecolor'] !=='' ){ ?>
    nav.vertical_menu > ul > li.active > a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_menu_icon_activecolor']);  ?>;
    }
<?php } ?>


<?php if (isset($cabin_qode_options['vertical_dropdown_icon_color']) && $cabin_qode_options['vertical_dropdown_icon_color'] !=='' ){ ?>
    .vertical_menu .second .inner > ul > li > a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_icon_color']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['vertical_dropdown_icon_hovercolor']) && $cabin_qode_options['vertical_dropdown_icon_hovercolor'] !=='' ){ ?>
    .vertical_menu .second .inner > ul > li:hover > a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_icon_hovercolor']);  ?>;
    }
<?php } ?>


<?php if (isset($cabin_qode_options['vertical_dropdown_icon_color_thirdlvl']) && $cabin_qode_options['vertical_dropdown_icon_color_thirdlvl'] !=='' ){ ?>
    .vertical_menu .second .inner ul ul li a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_icon_color_thirdlvl']);  ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['vertical_dropdown_icon_hovercolor_thirdlvl']) && $cabin_qode_options['vertical_dropdown_icon_hovercolor_thirdlvl'] !=='' ){ ?>
    .vertical_menu .second .inner ul ul li:hover a .menu_icon{
    color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_icon_hovercolor_thirdlvl']);  ?>;
    }
<?php } ?>



<?php if (isset($cabin_qode_options['vertical_area_menu_items_padding']) && $cabin_qode_options['vertical_area_menu_items_padding'] !=='' ){ ?>
    nav.vertical_menu > ul > li >a,
    .vertical_menu.vertical_menu_side ul li a{
    padding-top: <?php echo esc_attr($cabin_qode_options['vertical_area_menu_items_padding']);?>px;
    padding-bottom: <?php echo esc_attr($cabin_qode_options['vertical_area_menu_items_padding']);?>px;
    }
<?php } ?>




<?php if(!empty($cabin_qode_options['vertical_dropdown_color']) || !empty($cabin_qode_options['vertical_dropdown_fontsize']) || !empty($cabin_qode_options['vertical_dropdown_lineheight']) || !empty($cabin_qode_options['vertical_dropdown_fontstyle']) || !empty($cabin_qode_options['vertical_dropdown_fontweight']) || !empty($cabin_qode_options['vertical_dropdown_texttransform']) || (isset($cabin_qode_options['vertical_dropdown_letterspacing']) && $cabin_qode_options['vertical_dropdown_letterspacing'] !== '') || $cabin_qode_options['vertical_dropdown_google_fonts'] != "-1"){ ?>
    .vertical_menu .second .inner > ul > li > a,
    .vertical_menu .wide .second .inner > ul > li > a{
    <?php if (!empty($cabin_qode_options['vertical_dropdown_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_color']); ?>; <?php } ?>
    <?php if($cabin_qode_options['vertical_dropdown_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['vertical_dropdown_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['vertical_dropdown_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_letterspacing']);  ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_dropdown_hovercolor'])) { ?>
    .vertical_menu .second .inner > ul > li > a:hover{
    color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_hovercolor']);  ?> !important;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['vertical_transparent_dropdown_color']) || !empty($cabin_qode_options['vertical_transparent_dropdown_fontsize']) || !empty($cabin_qode_options['vertical_transparent_dropdown_lineheight']) || !empty($cabin_qode_options['vertical_transparent_dropdown_fontstyle']) || !empty($cabin_qode_options['vertical_transparent_dropdown_fontweight']) || !empty($cabin_qode_options['vertical_transparent_dropdown_texttransform']) || (isset($cabin_qode_options['vertical_transparent_dropdown_letterspacing']) && $cabin_qode_options['vertical_transparent_dropdown_letterspacing'] !== '') || $cabin_qode_options['vertical_transparent_dropdown_google_fonts'] != "-1"){ ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu .second .inner > ul > li > a,
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu .wide .second .inner > ul > li > a{
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_color']); ?>; <?php } ?>
    <?php if($cabin_qode_options['vertical_transparent_dropdown_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['vertical_transparent_dropdown_google_fonts'])); ?>', sans-serif !important;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_fontstyle']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_fontweight'])) { ?>font-weight: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['vertical_transparent_dropdown_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_letterspacing']);  ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_hovercolor'])) { ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu .second .inner > ul > li > a:hover{
    color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_hovercolor']);  ?> !important;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['vertical_dropdown_color_thirdlvl']) || !empty($cabin_qode_options['vertical_dropdown_fontsize_thirdlvl']) || !empty($cabin_qode_options['vertical_dropdown_lineheight_thirdlvl']) || !empty($cabin_qode_options['vertical_dropdown_fontstyle_thirdlvl']) || !empty($cabin_qode_options['vertical_dropdown_fontweight_thirdlvl']) || !empty($cabin_qode_options['vertical_dropdown_texttransform_thirdlvl']) || (isset($cabin_qode_options['vertical_dropdown_letterspacing_thirdlvl']) && $cabin_qode_options['vertical_dropdown_letterspacing_thirdlvl'] !== '') || $cabin_qode_options['vertical_dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
    .vertical_menu .second .inner ul li.sub ul li a{
    <?php if (!empty($cabin_qode_options['vertical_dropdown_color_thirdlvl'])) { ?> color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_color_thirdlvl']);  ?>;  <?php } ?>
    <?php if($cabin_qode_options['vertical_dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['vertical_dropdown_google_fonts_thirdlvl'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_fontsize_thirdlvl']);  ?>px;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_lineheight_thirdlvl']);  ?>px;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_fontstyle_thirdlvl']);  ?>;   <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_fontweight_thirdlvl']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_dropdown_texttransform_thirdlvl'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_texttransform_thirdlvl']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['vertical_dropdown_letterspacing_thirdlvl'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_letterspacing_thirdlvl']);  ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_dropdown_hovercolor_thirdlvl'])) { ?>
    .vertical_menu .second .inner ul li.sub ul li a:hover{
    color: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_hovercolor_thirdlvl']);  ?> !important;
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['vertical_transparent_dropdown_color_thirdlvl']) || !empty($cabin_qode_options['vertical_transparent_dropdown_fontsize_thirdlvl']) || !empty($cabin_qode_options['vertical_transparent_dropdown_lineheight_thirdlvl']) || !empty($cabin_qode_options['vertical_transparent_dropdown_fontstyle_thirdlvl']) || !empty($cabin_qode_options['vertical_transparent_dropdown_fontweight_thirdlvl']) || !empty($cabin_qode_options['vertical_transparent_dropdown_texttransform_thirdlvl']) || (isset($cabin_qode_options['vertical_transparent_dropdown_letterspacing_thirdlvl']) && $cabin_qode_options['vertical_transparent_dropdown_letterspacing_thirdlvl'] !== '') || $cabin_qode_options['vertical_transparent_dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu .second .inner ul li.sub ul li a{
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_color_thirdlvl'])) { ?> color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_color_thirdlvl']);  ?>;  <?php } ?>
    <?php if($cabin_qode_options['vertical_transparent_dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['vertical_transparent_dropdown_google_fonts_thirdlvl'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_fontsize_thirdlvl']);  ?>px;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_lineheight_thirdlvl']);  ?>px;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_fontstyle_thirdlvl']);  ?>;   <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_fontweight_thirdlvl']);  ?>;  <?php } ?>
    <?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_texttransform_thirdlvl'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_texttransform_thirdlvl']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['vertical_transparent_dropdown_letterspacing_thirdlvl'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_letterspacing_thirdlvl']);  ?>px; <?php } ?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['vertical_transparent_dropdown_hovercolor_thirdlvl'])) { ?>
    .vertical_menu_enabled.vertical_menu_transparency_on:not(.vertical_menu_hidden)  .vertical_menu .second .inner ul li.sub ul li a:hover{
    color: <?php echo esc_attr($cabin_qode_options['vertical_transparent_dropdown_hovercolor_thirdlvl']);  ?> !important;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['vertical_menu_icon_fontsize']) && ($cabin_qode_options['vertical_menu_icon_fontsize'])!==''){ ?>
    nav.vertical_menu > ul > li > a  .menu_icon:not(.blank){
    font-size: <?php echo esc_attr($cabin_qode_options['vertical_menu_icon_fontsize']);  ?>px;
    }

<?php } ?>

<?php if(isset($cabin_qode_options['vertical_dropdown_icon_fontsize']) && ($cabin_qode_options['vertical_dropdown_icon_fontsize'])!==''){ ?>
    .vertical_menu .second .inner > ul > li > a .menu_icon:not(.blank){
    font-size: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_icon_fontsize']);  ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['vertical_dropdown_icon_fontsize_thirdlvl']) && ($cabin_qode_options['vertical_dropdown_icon_fontsize_thirdlvl'])!==''){ ?>
    .vertical_menu .second .inner ul ul li a .menu_icon:not(.blank){
    font-size: <?php echo esc_attr($cabin_qode_options['vertical_dropdown_icon_fontsize_thirdlvl']);  ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['vertical_menu_submenu_sign']) && ($cabin_qode_options['vertical_menu_submenu_sign']) == 'no'){ ?>
    nav.vertical_menu_toggle ul > li.menu-item-has-children > a > .plus,
    nav.vertical_menu_toggle .second ul > li.menu-item-has-children > a > .plus{
    display: none;
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['popup_menu_color']) && !empty($cabin_qode_options['popup_menu_color'])) ||
    (isset($cabin_qode_options['popup_menu_google_fonts']) && $cabin_qode_options['popup_menu_google_fonts'] != "-1") ||
    (isset($cabin_qode_options['popup_menu_fontsize']) && !empty($cabin_qode_options['popup_menu_fontsize'])) ||
    (isset($cabin_qode_options['popup_menu_lineheight']) && !empty($cabin_qode_options['popup_menu_lineheight'])) ||
    (isset($cabin_qode_options['popup_menu_fontstyle']) && !empty($cabin_qode_options['popup_menu_fontstyle'])) ||
    (isset($cabin_qode_options['popup_menu_fontweight']) && !empty($cabin_qode_options['popup_menu_fontweight'])) ||
    (isset($cabin_qode_options['popup_menu_texttransform']) && !empty($cabin_qode_options['popup_menu_texttransform'])) ||
    (isset($cabin_qode_options['popup_menu_letterspacing']) && $cabin_qode_options['popup_menu_letterspacing'] !== '')) { ?>

    nav.popup_menu > ul > li > a,
    nav.popup_menu > ul > li > h6{
    <?php if (!empty($cabin_qode_options['popup_menu_color'])) { ?> color: <?php echo esc_attr($cabin_qode_options['popup_menu_color']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['popup_menu_google_fonts'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['popup_menu_google_fonts'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_fontsize'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['popup_menu_fontsize']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_lineheight'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['popup_menu_lineheight']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['popup_menu_fontstyle']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['popup_menu_fontweight']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['popup_menu_texttransform']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['popup_menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['popup_menu_letterspacing']);  ?>px; <?php } ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['popup_menu_color']) && !empty($cabin_qode_options['popup_menu_color'])) { ?>
    .popup_menu.opened .line:after,
    .popup_menu.opened .line:before{
    background-color: <?php echo esc_attr($cabin_qode_options['popup_menu_color']);  ?>;
    }

<?php } ?>

<?php if ((isset($cabin_qode_options['popup_menu_hover_color']) && !empty($cabin_qode_options['popup_menu_hover_color'])) || (isset($cabin_qode_options['popup_menu_hover_background_color']) && !empty($cabin_qode_options['popup_menu_hover_background_color']))) { ?>
    nav.popup_menu > ul > li > a:hover,
    nav.popup_menu > ul > li > h6:hover{
    <?php if (!empty($cabin_qode_options['popup_menu_hover_color'])) { ?>  color: <?php echo esc_attr($cabin_qode_options['popup_menu_hover_color']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['popup_menu_hover_background_color']);  ?>; <?php } ?>
    }

<?php } ?>

<?php if ((isset($cabin_qode_options['popup_menu_color_2nd']) && !empty($cabin_qode_options['popup_menu_color_2nd'])) ||
    (isset($cabin_qode_options['popup_menu_google_fonts_2nd']) && $cabin_qode_options['popup_menu_google_fonts_2nd'] != "-1") ||
    (isset($cabin_qode_options['popup_menu_fontsize_2nd']) && !empty($cabin_qode_options['popup_menu_fontsize_2nd'])) ||
    (isset($cabin_qode_options['popup_menu_lineheight_2nd']) && !empty($cabin_qode_options['popup_menu_lineheight_2nd'])) ||
    (isset($cabin_qode_options['popup_menu_fontstyle_2nd']) && !empty($cabin_qode_options['popup_menu_fontstyle_2nd'])) ||
    (isset($cabin_qode_options['popup_menu_fontweight_2nd']) && !empty($cabin_qode_options['popup_menu_fontweight_2nd'])) ||
    (isset($cabin_qode_options['popup_menu_texttransform_2nd']) && !empty($cabin_qode_options['popup_menu_texttransform_2nd'])) ||
    (isset($cabin_qode_options['popup_menu_letterspacing_2nd']) && $cabin_qode_options['popup_menu_letterspacing_2nd'] !== '')) { ?>

    nav.popup_menu ul li ul li a,
    nav.popup_menu ul li ul li h6{
    <?php if (!empty($cabin_qode_options['popup_menu_color_2nd'])) { ?> color: <?php echo esc_attr($cabin_qode_options['popup_menu_color_2nd']);  ?>; <?php } ?>
    <?php if($cabin_qode_options['popup_menu_google_fonts_2nd'] != "-1"){ ?>
        font-family: '<?php echo esc_attr(str_replace('+', ' ', $cabin_qode_options['popup_menu_google_fonts_2nd'])); ?>', sans-serif;
    <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_fontsize_2nd'])) { ?> font-size: <?php echo esc_attr($cabin_qode_options['popup_menu_fontsize_2nd']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_lineheight_2nd'])) { ?> line-height: <?php echo esc_attr($cabin_qode_options['popup_menu_lineheight_2nd']);  ?>px; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_fontstyle_2nd'])) { ?> font-style: <?php echo esc_attr($cabin_qode_options['popup_menu_fontstyle_2nd']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_fontweight_2nd'])) { ?> font-weight: <?php echo esc_attr($cabin_qode_options['popup_menu_fontweight_2nd']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_texttransform_2nd'])) { ?> text-transform: <?php echo esc_attr($cabin_qode_options['popup_menu_texttransform_2nd']);  ?>; <?php } ?>
    <?php if ($cabin_qode_options['popup_menu_letterspacing_2nd'] !== '') { ?> letter-spacing: <?php echo esc_attr($cabin_qode_options['popup_menu_letterspacing_2nd']);  ?>px; <?php } ?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['popup_menu_hover_color_2nd']) && !empty($cabin_qode_options['popup_menu_hover_color_2nd'])) || (isset($cabin_qode_options['popup_menu_hover_background_color_2nd']) && !empty($cabin_qode_options['popup_menu_hover_background_color_2nd']))) { ?>
    nav.popup_menu ul li ul li a:hover,
    nav.popup_menu ul li ul li h6:hover{
    <?php if (!empty($cabin_qode_options['popup_menu_hover_color_2nd'])) { ?>  color: <?php echo esc_attr($cabin_qode_options['popup_menu_hover_color_2nd']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_hover_background_color_2nd'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['popup_menu_hover_background_color_2nd']);  ?>; <?php } ?>
    }

<?php } ?>

<?php
$popup_menu_3rd_style = array();

if(isset($cabin_qode_options['popup_menu_3rd_font_family']) && $cabin_qode_options['popup_menu_3rd_font_family'] !== '-1') {
    $popup_menu_3rd_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['popup_menu_3rd_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['popup_menu_3rd_font_size']) && $cabin_qode_options['popup_menu_3rd_font_size'] !== '') {
    $popup_menu_3rd_style[] = 'font-size: '.$cabin_qode_options['popup_menu_3rd_font_size'].'px';
}

if(isset($cabin_qode_options['popup_menu_3rd_line_height']) && $cabin_qode_options['popup_menu_3rd_line_height'] !== '') {
    $popup_menu_3rd_style[] = 'line-height: '.$cabin_qode_options['popup_menu_3rd_line_height'].'px';
}

if(isset($cabin_qode_options['popup_menu_3rd_letter_spacing']) && $cabin_qode_options['popup_menu_3rd_letter_spacing'] !== '') {
    $popup_menu_3rd_style[] = 'letter-spacing: '.$cabin_qode_options['popup_menu_3rd_letter_spacing'].'px';
}

if(isset($cabin_qode_options['popup_menu_3rd_font_weight']) && $cabin_qode_options['popup_menu_3rd_font_weight'] !== '') {
    $popup_menu_3rd_style[] = 'font-weight: '.$cabin_qode_options['popup_menu_3rd_font_weight'];
}

if(isset($cabin_qode_options['popup_menu_3rd_font_style']) && $cabin_qode_options['popup_menu_3rd_font_style'] !== '') {
    $popup_menu_3rd_style[] = 'font-style: '.$cabin_qode_options['popup_menu_3rd_font_style'];
}

if(isset($cabin_qode_options['popup_menu_3rd_text_transform']) && $cabin_qode_options['popup_menu_3rd_text_transform'] !== '') {
    $popup_menu_3rd_style[] = 'text-transform: '.$cabin_qode_options['popup_menu_3rd_text_transform'];
}

if(isset($cabin_qode_options['popup_menu_3rd_color']) && $cabin_qode_options['popup_menu_3rd_color'] !== '') {
    $popup_menu_3rd_style[] = 'color: '.$cabin_qode_options['popup_menu_3rd_color'];
}

if(is_array($popup_menu_3rd_style) && count($popup_menu_3rd_style)) { ?>
    nav.popup_menu ul li ul li ul li a{
    <?php echo esc_attr(implode(';', $popup_menu_3rd_style)); ?>
    }
<?php } ?>

<?php if ((isset($cabin_qode_options['popup_menu_3rd_hover_color']) && !empty($cabin_qode_options['popup_menu_3rd_hover_color'])) || (isset($cabin_qode_options['popup_menu_3rd_hover_background_color']) && !empty($cabin_qode_options['popup_menu_3rd_hover_background_color']))) { ?>
    nav.popup_menu ul li ul li ul li a:hover{
    <?php if (!empty($cabin_qode_options['popup_menu_3rd_hover_color'])) { ?>  color: <?php echo esc_attr($cabin_qode_options['popup_menu_3rd_hover_color']);  ?>;<?php } ?>
    <?php if (!empty($cabin_qode_options['popup_menu_3rd_hover_background_color'])) { ?> background-color: <?php echo esc_attr($cabin_qode_options['popup_menu_3rd_hover_background_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['popup_menu_background_color']) && $cabin_qode_options['popup_menu_background_color'] != '') { ?>
    <?php $popup_menu_background_color = cabin_qode_hex2rgb($cabin_qode_options['popup_menu_background_color']); ?>

    <?php if($cabin_qode_options['popup_menu_background_transparency'] != "") {
        $popup_menu_background_transparency = $cabin_qode_options['popup_menu_background_transparency'];
    }else{
        $popup_menu_background_transparency = 0.9;
    }
    ?>
    .popup_menu_holder{
    <?php if (!empty($cabin_qode_options['popup_menu_background_color'])) { ?>  background-color: rgba(<?php echo esc_attr($popup_menu_background_color[0]); ?>,<?php echo esc_attr($popup_menu_background_color[1]); ?>,<?php echo esc_attr($popup_menu_background_color[2]); ?>,<?php echo esc_attr($popup_menu_background_transparency); ?>); <?php } ?>
    <?php if (!empty($cabin_qode_options['pattern_image_popup'])) { ?> background-image:url('<?php echo esc_attr($cabin_qode_options['pattern_image_popup']); ?>');  <?php } ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['portfolio_list_box_background_color']) && !empty($cabin_qode_options['portfolio_list_box_background_color'])) { ?>
    .projects_holder article .portfolio_description{
    background-color: <?php echo esc_attr($cabin_qode_options['portfolio_list_box_background_color']); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['portfolio_disable_text_box']) && $cabin_qode_options['portfolio_disable_text_box'] == "yes") { ?>
    .projects_holder article .portfolio_description{
    background-color: transparent;
    }

    .projects_holder.standard article .portfolio_description,
    .projects_holder.standard_no_space article .portfolio_description {
    padding-left: 0;
    padding-right: 0;
    }

    .masonry_with_space .projects_holder article .portfolio_description {
    padding: 35px 0 43px;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['portfolio_shader_color']) && !empty($cabin_qode_options['portfolio_shader_color'])) { ?>
    <?php if(isset($cabin_qode_options['portfolio_shader_transparency']) && $cabin_qode_options['portfolio_shader_transparency'] != ""){
        $portfolio_shader_transparency = $cabin_qode_options['portfolio_shader_transparency'];
    } else {
        $portfolio_shader_transparency = 1;
    }
    $shader_bg_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_shader_color']);
    ?>

    .projects_holder article .item_holder.gradient_hover .portfolio_shader,
    .projects_masonry_holder article .item_holder.gradient_hover .portfolio_shader,
    .portfolio_slider li.item .item_holder.gradient_hover .portfolio_shader{
    background: -webkit-linear-gradient(top, rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,0) 10%, rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,0.9) 100%);
    background: linear-gradient(to bottom, rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,0) 10%, rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,0.9) 100%);
    }

    .portfolio_main_holder .item_holder.subtle_vertical_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.image_subtle_rotate_zoom_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.image_text_zoom_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.opposite_corners_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.slide_from_left_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.prominent_plain_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.cursor_change_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.slide_up_hover .portfolio_shader,
    .portfolio_main_holder .item_holder.icons_bottom_corner .portfolio_shader,
    .portfolio_main_holder .item_holder.text_slides_with_image .portfolio_shader,
    .portfolio_main_holder .item_holder.slow_zoom .portfolio_shader,
    .portfolio_main_holder .item_holder.thin_plus_only .portfolio_shader,
    .portfolio_main_holder .item_holder.split_up .portfolio_shader{
    background-color: rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,<?php echo esc_attr($portfolio_shader_transparency); ?>);
    }

    .portfolio_main_holder .item_holder.prominent_blur_hover.blur .portfolio_shader{
    background-color: rgba(<?php echo esc_attr($shader_bg_color[0]); ?>,<?php echo esc_attr($shader_bg_color[1]); ?>,<?php echo esc_attr($shader_bg_color[2]); ?>,0.7);
    }
<?php } ?>

<?php
if (isset($cabin_qode_options['portfolio_box']) && $cabin_qode_options['portfolio_box'] == 'no') { ?>
    .portfolio_single.big-slider .portfolio_container, .portfolio_single.big-images .portfolio_container, .portfolio_single.gallery .portfolio_container{
    background-color: transparent;
    <?php if (isset($cabin_qode_options['portfolio_box_top_padding']) && $cabin_qode_options['portfolio_box_top_padding'] !== '') { ?>
        padding-top: <?php echo esc_attr($cabin_qode_options['portfolio_box_top_padding']);?>px;  <?php } ?>
    padding-left:0;
    padding-right:0;
    }
    @media only screen and (min-width: 1100px){
    .portfolio_single.big-slider .two_columns_75_25 > .column2,
    .portfolio_single.big-images .two_columns_75_25 > .column2,
    .portfolio_single.gallery .two_columns_75_25 > .column2{
    float:right;
    width:auto;
    }
    }

<?php }
else{
    if(isset($cabin_qode_options['portfolio_box_background_color']) && !empty($cabin_qode_options['portfolio_box_background_color'])) { ?>
        .portfolio_single.big-slider .portfolio_container, .portfolio_single.big-images .portfolio_container, .portfolio_single.gallery .portfolio_container{
        background-color: <?php echo esc_attr($cabin_qode_options['portfolio_box_background_color']);?>;
        }
    <?php }
    if (isset($cabin_qode_options['portfolio_box_lr_padding']) && $cabin_qode_options['portfolio_box_lr_padding'] !== '') { ?>
        .portfolio_single.big-slider .portfolio_container, .portfolio_single.big-images .portfolio_container, .portfolio_single.gallery .portfolio_container{
        padding: <?php echo esc_attr($cabin_qode_options['portfolio_box_lr_padding']);?>;
        }
    <?php }

}?>

<?php
$portfolio_single_big_title_style = array();

if(isset($cabin_qode_options['portfolio_single_big_title_font_family']) && $cabin_qode_options['portfolio_single_big_title_font_family'] !== '-1') {
    $portfolio_single_big_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_single_big_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['portfolio_single_big_title_font_size']) && $cabin_qode_options['portfolio_single_big_title_font_size'] !== '') {
    $portfolio_single_big_title_style[] = 'font-size: '.$cabin_qode_options['portfolio_single_big_title_font_size'].'px';
}

if(isset($cabin_qode_options['portfolio_single_big_title_line_height']) && $cabin_qode_options['portfolio_single_big_title_line_height'] !== '') {
    $portfolio_single_big_title_style[] = 'line-height: '.$cabin_qode_options['portfolio_single_big_title_line_height'].'px';
}

if(isset($cabin_qode_options['portfolio_single_big_title_letter_spacing']) && $cabin_qode_options['portfolio_single_big_title_letter_spacing'] !== '') {
    $portfolio_single_big_title_style[] = 'letter-spacing: '.$cabin_qode_options['portfolio_single_big_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['portfolio_single_big_title_font_weight']) && $cabin_qode_options['portfolio_single_big_title_font_weight'] !== '') {
    $portfolio_single_big_title_style[] = 'font-weight: '.$cabin_qode_options['portfolio_single_big_title_font_weight'];
}

if(isset($cabin_qode_options['portfolio_single_big_title_font_style']) && $cabin_qode_options['portfolio_single_big_title_font_style'] !== '') {
    $portfolio_single_big_title_style[] = 'font-style: '.$cabin_qode_options['portfolio_single_big_title_font_style'];
}

if(isset($cabin_qode_options['portfolio_single_big_title_text_transform']) && $cabin_qode_options['portfolio_single_big_title_text_transform'] !== '') {
    $portfolio_single_big_title_style[] = 'text-transform: '.$cabin_qode_options['portfolio_single_big_title_text_transform'];
}

if(isset($cabin_qode_options['portfolio_single_big_title_color']) && $cabin_qode_options['portfolio_single_big_title_color'] !== '') {
    $portfolio_single_big_title_style[] = 'color: '.$cabin_qode_options['portfolio_single_big_title_color'];
}

if(is_array($portfolio_single_big_title_style) && count($portfolio_single_big_title_style)) { ?>
    .portfolio_single.big-slider h2.portfolio_single_text_title,
    .portfolio_single.big-images h2.portfolio_single_text_title,
    .portfolio_single.gallery h2.portfolio_single_text_title{
    <?php echo esc_attr(implode(';', $portfolio_single_big_title_style)); ?>
    }
<?php } ?>

<?php
$portfolio_single_small_title_style = array();

if(isset($cabin_qode_options['portfolio_single_small_title_font_family']) && $cabin_qode_options['portfolio_single_small_title_font_family'] !== '-1') {
    $portfolio_single_small_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_single_small_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['portfolio_single_small_title_font_size']) && $cabin_qode_options['portfolio_single_small_title_font_size'] !== '') {
    $portfolio_single_small_title_style[] = 'font-size: '.$cabin_qode_options['portfolio_single_small_title_font_size'].'px';
}

if(isset($cabin_qode_options['portfolio_single_small_title_line_height']) && $cabin_qode_options['portfolio_single_small_title_line_height'] !== '') {
    $portfolio_single_small_title_style[] = 'line-height: '.$cabin_qode_options['portfolio_single_small_title_line_height'].'px';
}

if(isset($cabin_qode_options['portfolio_single_small_title_letter_spacing']) && $cabin_qode_options['portfolio_single_small_title_letter_spacing'] !== '') {
    $portfolio_single_small_title_style[] = 'letter-spacing: '.$cabin_qode_options['portfolio_single_small_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['portfolio_single_small_title_font_weight']) && $cabin_qode_options['portfolio_single_small_title_font_weight'] !== '') {
    $portfolio_single_small_title_style[] = 'font-weight: '.$cabin_qode_options['portfolio_single_small_title_font_weight'];
}

if(isset($cabin_qode_options['portfolio_single_small_title_font_style']) && $cabin_qode_options['portfolio_single_small_title_font_style'] !== '') {
    $portfolio_single_small_title_style[] = 'font-style: '.$cabin_qode_options['portfolio_single_small_title_font_style'];
}

if(isset($cabin_qode_options['portfolio_single_small_title_text_transform']) && $cabin_qode_options['portfolio_single_small_title_text_transform'] !== '') {
    $portfolio_single_small_title_style[] = 'text-transform: '.$cabin_qode_options['portfolio_single_small_title_text_transform'];
}

if(isset($cabin_qode_options['portfolio_single_small_title_color']) && $cabin_qode_options['portfolio_single_small_title_color'] !== '') {
    $portfolio_single_small_title_style[] = 'color: '.$cabin_qode_options['portfolio_single_small_title_color'];
}

if(is_array($portfolio_single_small_title_style) && count($portfolio_single_small_title_style)) { ?>
    .portfolio_single.small-slider .portfolio_detail > h3.info_section_title,
    .portfolio_single.small-images .portfolio_detail > h3.info_section_title{
    <?php echo esc_attr(implode(';', $portfolio_single_small_title_style)); ?>
    }
<?php } ?>

<?php
$portfolio_single_meta_title_style = array();

if(isset($cabin_qode_options['portfolio_single_meta_title_font_family']) && $cabin_qode_options['portfolio_single_meta_title_font_family'] !== '-1') {
    $portfolio_single_meta_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_single_meta_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['portfolio_single_meta_title_font_size']) && $cabin_qode_options['portfolio_single_meta_title_font_size'] !== '') {
    $portfolio_single_meta_title_style[] = 'font-size: '.$cabin_qode_options['portfolio_single_meta_title_font_size'].'px';
}

if(isset($cabin_qode_options['portfolio_single_meta_title_font_size']) && $cabin_qode_options['portfolio_single_meta_title_font_size'] !== '') {
    $portfolio_single_meta_title_style[] = 'line-height: '.$cabin_qode_options['portfolio_single_meta_title_font_size'].'px';
}

if(isset($cabin_qode_options['portfolio_single_meta_title_letter_spacing']) && $cabin_qode_options['portfolio_single_meta_title_letter_spacing'] !== '') {
    $portfolio_single_meta_title_style[] = 'letter-spacing: '.$cabin_qode_options['portfolio_single_meta_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['portfolio_single_meta_title_font_weight']) && $cabin_qode_options['portfolio_single_meta_title_font_weight'] !== '') {
    $portfolio_single_meta_title_style[] = 'font-weight: '.$cabin_qode_options['portfolio_single_meta_title_font_weight'];
}

if(isset($cabin_qode_options['portfolio_single_meta_title_font_style']) && $cabin_qode_options['portfolio_single_meta_title_font_style'] !== '') {
    $portfolio_single_meta_title_style[] = 'font-style: '.$cabin_qode_options['portfolio_single_meta_title_font_style'];
}

if(isset($cabin_qode_options['portfolio_single_meta_title_text_transform']) && $cabin_qode_options['portfolio_single_meta_title_text_transform'] !== '') {
    $portfolio_single_meta_title_style[] = 'text-transform: '.$cabin_qode_options['portfolio_single_meta_title_text_transform'];
}

if(isset($cabin_qode_options['portfolio_single_meta_title_color']) && $cabin_qode_options['portfolio_single_meta_title_color'] !== '') {
    $portfolio_single_meta_title_style[] = 'color: '.$cabin_qode_options['portfolio_single_meta_title_color'];
}

if(is_array($portfolio_single_meta_title_style) && count($portfolio_single_meta_title_style)) { ?>
    .portfolio_detail .info .info_section_title{
    <?php echo esc_attr(implode(';', $portfolio_single_meta_title_style)); ?>
    }
<?php } ?>

<?php
$portfolio_gallery_overlay_styles = '';

if(isset($cabin_qode_options['portfolio_gallery_overlay_color']) && $cabin_qode_options['portfolio_gallery_overlay_color'] !== '') {
    if(isset($cabin_qode_options['portfolio_gallery_overlay_transparency']) && $cabin_qode_options['portfolio_gallery_overlay_transparency'] !== ''){
        $portfolio_gallery_overlay_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_gallery_overlay_color']);
        $portfolio_gallery_overlay_styles .= 'background-color: rgba('. $portfolio_gallery_overlay_color[0] . ',' . $portfolio_gallery_overlay_color[1] . ',' . $portfolio_gallery_overlay_color[2] . ',' . $cabin_qode_options['portfolio_gallery_overlay_transparency'] .');';
    } else {
        $portfolio_gallery_overlay_styles .= 'background-color: '.$cabin_qode_options['portfolio_gallery_overlay_color'].';';
    }
}

if($portfolio_gallery_overlay_styles !== '') {
    ?>
    .portfolio_gallery a .gallery_text_holder {
    <?php echo esc_attr($portfolio_gallery_overlay_styles); ?>
    }

    <?php
}

$portfolio_gallery_overlay_text_style = '';
if(isset($cabin_qode_options['portfolio_gallery_overlay_text_color']) && $cabin_qode_options['portfolio_gallery_overlay_text_color'] !== '') {
    $portfolio_gallery_overlay_text_style .= 'color: '.$cabin_qode_options['portfolio_gallery_overlay_text_color'].';';
}

if($portfolio_gallery_overlay_text_style !== '') { ?>
    .portfolio_gallery a .gallery_text_inner h4{
    <?php echo esc_attr($portfolio_gallery_overlay_text_style); ?>
    }
    <?php
}

?>

<?php  if (!empty($cabin_qode_options['portfolio_gallery_icon_color']) || (isset($cabin_qode_options['portfolio_gallery_icon_size']) && $cabin_qode_options['portfolio_gallery_icon_size'] !== '')) {
    $portfolio_gallery_icon_styles = '';
    if(!empty($cabin_qode_options['portfolio_gallery_icon_color'])) {
        $portfolio_gallery_icon_styles .= 'color: '.$cabin_qode_options['portfolio_gallery_icon_color'].';';
    }

    if(isset($cabin_qode_options['portfolio_gallery_icon_size']) && $cabin_qode_options['portfolio_gallery_icon_size'] !== '') {
        $portfolio_gallery_icon_styles .= 'font-size: '.$cabin_qode_options['portfolio_gallery_icon_size'].'px;';
    }

    if($portfolio_gallery_icon_styles !== '') {
        ?>
        .portfolio_single .gallery_text_holder .gallery_text_inner i:before{
        <?php echo esc_attr($portfolio_gallery_icon_styles); ?>
        }
        <?php
    }
    ?>
<?php } ?>

<?php if (isset($cabin_qode_options['portfolio_gallery_icon_pack'])) {
    if($cabin_qode_options['portfolio_gallery_icon_pack'] == 'font-elegant'){ ?>
        .portfolio_single .gallery_text_holder .gallery_text_inner i:before{
        content: "\4c";
        font-family: 'ElegantIcons'!important;
        }
        <?php
    }
    ?>
<?php } ?>

<?php
//generate top header styles
$top_header_font_styles         = '';
$top_header_font_hover_styles   = '';
$top_header_border_styles       = '';
if(isset($cabin_qode_options['top_header_text_color']) && $cabin_qode_options['top_header_text_color'] !== '') {
    $top_header_font_styles .= 'color: '.esc_attr($cabin_qode_options['top_header_text_color']).' !important ;';
}

if(isset($cabin_qode_options['top_header_text_hover_color']) && $cabin_qode_options['top_header_text_hover_color'] !== '') {
    $top_header_font_hover_styles .= 'color: '.esc_attr($cabin_qode_options['top_header_text_hover_color']).' !important ;';
}

if(isset($cabin_qode_options['top_header_text_font_family']) && $cabin_qode_options['top_header_text_font_family'] !== '-1') {
    $top_header_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['top_header_text_font_family']).';';
}

if(isset($cabin_qode_options['top_header_text_font_size']) && $cabin_qode_options['top_header_text_font_size'] !== '') {
    $top_header_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['top_header_text_font_size']).'px;';
}

if(isset($cabin_qode_options['top_header_text_font_style']) && $cabin_qode_options['top_header_text_font_style'] !== '') {
    $top_header_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['top_header_text_font_style']).';';
}

if(isset($cabin_qode_options['top_header_text_font_weight']) && $cabin_qode_options['top_header_text_font_weight'] !== '') {
    $top_header_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['top_header_text_font_weight']).';';
}

if(isset($cabin_qode_options['top_header_text_letter_spacing']) && $cabin_qode_options['top_header_text_letter_spacing'] !== '') {
    $top_header_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['top_header_text_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['top_header_border_color']) && $cabin_qode_options['top_header_border_color'] !== '') {
    $top_header_border_styles .= 'border-bottom: 1px solid '.esc_attr($cabin_qode_options['top_header_border_color']).';';
}

if(isset($cabin_qode_options['top_header_border_weight']) && $cabin_qode_options['top_header_border_weight'] !== '') {
    $top_header_border_styles .= 'border-width: '.esc_attr($cabin_qode_options['top_header_border_weight']).'px;';
}

if($top_header_font_styles !== '') {
    ?>
    .header_top .q_social_icon_holder i.simple_social,
    .header_top .header-widget,
    .header_top .textwidget,
    .header_top .header-widget.widget_nav_menu ul.menu>li>a,
    .header_top .header-widget p,
    .header_top .header-widget a:not(.qbutton),
    .header_top .header-widget span {
    <?php echo esc_attr($top_header_font_styles); ?>
    }

    <?php
}

if($top_header_font_hover_styles !== '') {
    ?>
    .header_top .q_social_icon_holder i.simple_social:hover,
    .header_top .header-widget:hover,
    .header_top .header-widget.widget_nav_menu ul.menu>li>a:hover,
    .header_top .header-widget p:hover,
    .header_top .header-widget a:hover,
    .header_top .header-widget span:hover {
    <?php echo esc_attr($top_header_font_hover_styles); ?>
    }

    <?php
}

if($top_header_border_styles !== '') {
    ?>
    .header_top{
    <?php echo esc_attr($top_header_border_styles); ?>
    }

    <?php
}
?>

<?php
if(isset($cabin_qode_options['top_header_text_line_height']) && $cabin_qode_options['top_header_text_line_height'] !== '') {

    if($cabin_qode_options['top_header_text_line_height'] < 35){ ?>
        .header_top .qode_social_icon_holder i.simple_social,
        .header_top .header-widget,
        .header_top .textwidget,
        .header_top .header-widget.widget_nav_menu ul.menu>li>a,
        .header_top .header-widget p,
        .header_top .header-widget a:not(.qbutton),
        .header_top .header-widget span{
        line-height: <?php echo esc_attr($cabin_qode_options['top_header_text_line_height']); ?>px;
        height: <?php echo esc_attr($cabin_qode_options['top_header_text_line_height']); ?>px;
        }
    <?php } else { ?>
        .header_top .qode_social_icon_holder i.simple_social,
        .header_top .header-widget,
        .header_top .textwidget,
        .header_top .header-widget.widget_nav_menu ul.menu>li>a,
        .header_top .header-widget p,
        .header_top .header-widget a:not(.qbutton),
        .header_top .header-widget span{
        line-height: 35px;
        height: 35px;
        }
    <?php } } ?>




<?php if(isset($cabin_qode_options['top_header_text_hover_color']) && $cabin_qode_options['top_header_text_hover_color'] !== '') { ?>
    .header_top #lang_sel > ul > li:hover > a,
    .header_top #lang_sel_click > ul > li:hover > a{
    color: <?php echo esc_attr($cabin_qode_options['top_header_text_hover_color']); ?> !important;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['top_header_text_color']) && $cabin_qode_options['top_header_text_color'] !== '') { ?>
    .header_top #lang_sel > ul > li > a,
    .header_top #lang_sel_click > ul > li > a{
    color: <?php echo esc_attr($cabin_qode_options['top_header_text_color']); ?> !important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['portfolio_filter_margin_bottom']) && $cabin_qode_options['portfolio_filter_margin_bottom'] !== '') { ?>
    .filter_outer.filter_portfolio{
    margin-bottom: <?php echo esc_attr($cabin_qode_options['portfolio_filter_margin_bottom']); ?>px !important;
    }
<?php } ?>

<?php
//generate categories filter title styles
$portfolio_filter_title_font_styles = '';
if(isset($cabin_qode_options['portfolio_filter_title_color']) && $cabin_qode_options['portfolio_filter_title_color'] !== '') {
    $portfolio_filter_title_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_filter_title_color']).';';
}

if(isset($cabin_qode_options['portfolio_filter_title_font_family']) && $cabin_qode_options['portfolio_filter_title_font_family'] !== '-1') {
    $portfolio_filter_title_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_filter_title_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_filter_title_font_size']) && $cabin_qode_options['portfolio_filter_title_font_size'] !== '') {
    $portfolio_filter_title_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_filter_title_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_filter_title_line_height']) && $cabin_qode_options['portfolio_filter_title_line_height'] !== '') {
    $portfolio_filter_title_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_filter_title_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_filter_title_font_style']) && $cabin_qode_options['portfolio_filter_title_font_style'] !== '') {
    $portfolio_filter_title_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_filter_title_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_filter_title_font_weight']) && $cabin_qode_options['portfolio_filter_title_font_weight'] !== '') {
    $portfolio_filter_title_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_filter_title_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_filter_title_letter_spacing']) && $cabin_qode_options['portfolio_filter_title_letter_spacing'] !== '') {
    $portfolio_filter_title_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_filter_title_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_filter_title_text_transform']) && $cabin_qode_options['portfolio_filter_title_text_transform'] !== '') {
    $portfolio_filter_title_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_filter_title_text_transform']).';';
}

if($portfolio_filter_title_font_styles !== '') {
    ?>
    .filter_portfolio .filter_holder ul li.filter_title span{
    <?php echo esc_attr($portfolio_filter_title_font_styles); ?>
    }
<?php } ?>



<?php
//generate categories filter styles
$portfolio_filter_font_styles = '';
$portfolio_filter_font_hover_styles = '';
if(isset($cabin_qode_options['portfolio_filter_color']) && $cabin_qode_options['portfolio_filter_color'] !== '') {
    $portfolio_filter_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_filter_color']).';';
}

if(isset($cabin_qode_options['portfolio_filter_hovercolor']) && $cabin_qode_options['portfolio_filter_hovercolor'] !== '') {
    $portfolio_filter_font_hover_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_filter_hovercolor']).' !important;';
}

if(isset($cabin_qode_options['portfolio_filter_font_family']) && $cabin_qode_options['portfolio_filter_font_family'] !== '-1') {
    $portfolio_filter_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_filter_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_filter_font_size']) && $cabin_qode_options['portfolio_filter_font_size'] !== '') {
    $portfolio_filter_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_filter_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_filter_line_height']) && $cabin_qode_options['portfolio_filter_line_height'] !== '') {
    $portfolio_filter_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_filter_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_filter_font_style']) && $cabin_qode_options['portfolio_filter_font_style'] !== '') {
    $portfolio_filter_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_filter_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_filter_font_weight']) && $cabin_qode_options['portfolio_filter_font_weight'] !== '') {
    $portfolio_filter_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_filter_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_filter_letter_spacing']) && $cabin_qode_options['portfolio_filter_letter_spacing'] !== '') {
    $portfolio_filter_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_filter_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_filter_text_transform']) && $cabin_qode_options['portfolio_filter_text_transform'] !== '') {
    $portfolio_filter_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_filter_text_transform']).';';
}

if($portfolio_filter_font_styles !== '') {
    ?>
    .filter_portfolio .filter_holder ul li:not(.filter_title) span{
    <?php echo esc_attr($portfolio_filter_font_styles); ?>
    }
    <?php
    if($cabin_qode_options['portfolio_filter_color'] !== ''){
        ?>
        .filter_portfolio .filter_holder ul li span:after{
        color: <?php echo esc_attr($cabin_qode_options['portfolio_filter_color']); ?>;
        }
        <?php
    }
}
if($portfolio_filter_font_hover_styles !== '') {
    ?>
    .filter_portfolio .filter_holder ul li.current span,
    .filter_portfolio .filter_holder ul li:not(.filter_title):hover span{
    <?php echo esc_attr($portfolio_filter_font_hover_styles); ?>
    }

    <?php
}
?>

<?php
$portfolio_list_filter_styles = '';
if(isset($cabin_qode_options['portfolio_list_filter_height']) && $cabin_qode_options['portfolio_list_filter_height'] !== '') {
    $portfolio_list_filter_styles .= 'height: '.$cabin_qode_options['portfolio_list_filter_height'].'px;';
}

if(isset($cabin_qode_options['portfolio_list_filter_background_color']) && $cabin_qode_options['portfolio_list_filter_background_color'] !== '') {
    $portfolio_list_filter_styles .= 'background-color: '.$cabin_qode_options['portfolio_list_filter_background_color'].';';
}

if($portfolio_list_filter_styles !== '') {
    ?>
    .filter_outer.filter_portfolio{
    <?php echo esc_attr($portfolio_list_filter_styles); ?>
    }
    <?php
}
?>

<?php
//generate BLOG MASONRY categories filter title styles
$blog_masonry_filter_title_font_styles = '';
if(isset($cabin_qode_options['blog_masonry_filter_title_color']) && $cabin_qode_options['blog_masonry_filter_title_color'] !== '') {
    $blog_masonry_filter_title_font_styles .= 'color: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_color']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_font_family']) && $cabin_qode_options['blog_masonry_filter_title_font_family'] !== '-1') {
    $blog_masonry_filter_title_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_filter_title_font_family']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_font_size']) && $cabin_qode_options['blog_masonry_filter_title_font_size'] !== '') {
    $blog_masonry_filter_title_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_font_size']).'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_line_height']) && $cabin_qode_options['blog_masonry_filter_title_line_height'] !== '') {
    $blog_masonry_filter_title_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_line_height']).'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_font_style']) && $cabin_qode_options['blog_masonry_filter_title_font_style'] !== '') {
    $blog_masonry_filter_title_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_font_style']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_font_weight']) && $cabin_qode_options['blog_masonry_filter_title_font_weight'] !== '') {
    $blog_masonry_filter_title_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_font_weight']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_letter_spacing']) && $cabin_qode_options['blog_masonry_filter_title_letter_spacing'] !== '') {
    $blog_masonry_filter_title_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_title_text_transform']) && $cabin_qode_options['blog_masonry_filter_title_text_transform'] !== '') {
    $portfolio_filter_title_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['blog_masonry_filter_title_text_transform']).';';
}

if($blog_masonry_filter_title_font_styles !== '') {
    ?>
    .page-template-blog-masonry .filter_blog .filter_holder ul li.filter_title span{
    <?php echo esc_attr($blog_masonry_filter_title_font_styles); ?>
    }
<?php } ?>

<?php
//generate BLOG MASONRY filter styles
$blog_masonry_filter_font_styles = '';
$blog_masonry_filter_font_hover_styles = '';
if(isset($cabin_qode_options['blog_masonry_filter_color']) && $cabin_qode_options['blog_masonry_filter_color'] !== '') {
    $blog_masonry_filter_font_styles .= 'color: '.esc_attr($cabin_qode_options['blog_masonry_filter_color']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_hovercolor']) && $cabin_qode_options['blog_masonry_filter_hovercolor'] !== '') {
    $blog_masonry_filter_font_hover_styles .= 'color: '.esc_attr($cabin_qode_options['blog_masonry_filter_hovercolor']).' !important;';
}

if(isset($cabin_qode_options['blog_masonry_filter_font_family']) && $cabin_qode_options['blog_masonry_filter_font_family'] !== '-1') {
    $blog_masonry_filter_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_masonry_filter_font_family']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_font_size']) && $cabin_qode_options['blog_masonry_filter_font_size'] !== '') {
    $blog_masonry_filter_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['blog_masonry_filter_font_size']).'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_line_height']) && $cabin_qode_options['blog_masonry_filter_line_height'] !== '') {
    $blog_masonry_filter_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['blog_masonry_filter_line_height']).'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_font_style']) && $cabin_qode_options['blog_masonry_filter_font_style'] !== '') {
    $blog_masonry_filter_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['blog_masonry_filter_font_style']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_font_weight']) && $cabin_qode_options['blog_masonry_filter_font_weight'] !== '') {
    $blog_masonry_filter_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['blog_masonry_filter_font_weight']).';';
}

if(isset($cabin_qode_options['blog_masonry_filter_letter_spacing']) && $cabin_qode_options['blog_masonry_filter_letter_spacing'] !== '') {
    $blog_masonry_filter_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['blog_masonry_filter_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_text_transform']) && $cabin_qode_options['blog_masonry_filter_text_transform'] !== '') {
    $blog_masonry_filter_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['blog_masonry_filter_text_transform']).';';
}

if($blog_masonry_filter_font_styles !== '') {
    ?>
    .page-template-blog-masonry .filter_blog .filter_holder ul li:not(.filter_title) span{
    <?php echo esc_attr($blog_masonry_filter_font_styles); ?>
    }
    <?php
    if($cabin_qode_options['blog_masonry_filter_color'] !== ''){
        ?>
        .page-template-blog-masonry .filter_blog .filter_holder ul li span:after{
        color: <?php echo esc_attr($cabin_qode_options['blog_masonry_filter_color']); ?>;
        }
        <?php
    }
}
if($blog_masonry_filter_font_hover_styles !== '') {
    ?>
    .page-template-blog-masonry .filter_blog .filter_holder ul li.current span,
    .page-template-blog-masonry .filter_blog .filter_holder ul li:not(.filter_title):hover span{
    <?php echo esc_attr($blog_masonry_filter_font_hover_styles); ?>
    }

    <?php
}
?>

<?php
$blog_masonry_filter_styles = '';
if(isset($cabin_qode_options['blog_masonry_filter_height']) && $cabin_qode_options['blog_masonry_filter_height'] !== '') {
    $blog_masonry_filter_styles .= 'height: '.$cabin_qode_options['blog_masonry_filter_height'].'px;';
    $blog_masonry_filter_styles .= 'line-height: '.$cabin_qode_options['blog_masonry_filter_height'].'px;';
}

if(isset($cabin_qode_options['blog_masonry_filter_background_color']) && $cabin_qode_options['blog_masonry_filter_background_color'] !== '') {
    $blog_masonry_filter_styles .= 'background-color: '.$cabin_qode_options['blog_masonry_filter_background_color'].';';
}

if(isset($cabin_qode_options['blog_masonry_filter_margin_bottom']) && $cabin_qode_options['blog_masonry_filter_margin_bottom'] !== '') {
    $blog_masonry_filter_styles .= 'margin-bottom: '.$cabin_qode_options['blog_masonry_filter_margin_bottom'].'px;';
}
if(isset($cabin_qode_options['blog_masonry_filter_alignment']) && $cabin_qode_options['blog_masonry_filter_alignment'] !== '') {
    $blog_masonry_filter_styles .= 'text-align: '.$cabin_qode_options['blog_masonry_filter_alignment'].';';
}
if($blog_masonry_filter_styles !== '') {
    ?>
    .filter_outer.filter_blog{
    <?php echo esc_attr($blog_masonry_filter_styles); ?>
    }
    <?php
}
?>

<?php

$blog_masonry_full_width_template_margin_styles = array();

if(isset($cabin_qode_options['blog_masonry_full_width_margin_left']) && $cabin_qode_options['blog_masonry_full_width_margin_left'] !== '') {
    $blog_masonry_full_width_template_margin_styles[] = 'padding-left: '.$cabin_qode_options['blog_masonry_full_width_margin_left'];
}

if(isset($cabin_qode_options['blog_masonry_full_width_margin_right']) && $cabin_qode_options['blog_masonry_full_width_margin_right'] !== '') {
    $blog_masonry_full_width_template_margin_styles[] = 'padding-right: '.$cabin_qode_options['blog_masonry_full_width_margin_right'];
}

if(is_array($blog_masonry_full_width_template_margin_styles) && count($blog_masonry_full_width_template_margin_styles)) { ?>
    body.page-template-blog-masonry-full-width-php .content .full_width {
    <?php echo esc_attr(implode(';', $blog_masonry_full_width_template_margin_styles)); ?>
    }

<?php } ?>


<?php
//generate title on portfolio standard and pinterest lists styles
$portfolio_title_standard_list_font_styles = '';
if(isset($cabin_qode_options['portfolio_title_standard_list_color']) && $cabin_qode_options['portfolio_title_standard_list_color'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_color']).';';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_font_family']) && $cabin_qode_options['portfolio_title_standard_list_font_family'] !== '-1') {
    $portfolio_title_standard_list_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_title_standard_list_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_font_size']) && $cabin_qode_options['portfolio_title_standard_list_font_size'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_line_height']) && $cabin_qode_options['portfolio_title_standard_list_line_height'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_font_style']) && $cabin_qode_options['portfolio_title_standard_list_font_style'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_font_weight']) && $cabin_qode_options['portfolio_title_standard_list_font_weight'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_letter_spacing']) && $cabin_qode_options['portfolio_title_standard_list_letter_spacing'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_standard_list_text_transform']) && $cabin_qode_options['portfolio_title_standard_list_text_transform'] !== '') {
    $portfolio_title_standard_list_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_title_standard_list_text_transform']).';';
}

if($portfolio_title_standard_list_font_styles !== '') {
    ?>
    .projects_holder.standard article .portfolio_title,
    .projects_holder.standard article .portfolio_title a,
    .projects_holder.standard_no_space article .portfolio_title,
    .projects_holder.standard_no_space article .portfolio_title a{
    <?php echo esc_attr($portfolio_title_standard_list_font_styles); ?>
    }
    <?php
}

$portfolio_title_standard_list_hover_styles = '';
if(isset($cabin_qode_options['portfolio_title_standard_list_hover_color']) && $cabin_qode_options['portfolio_title_standard_list_hover_color'] !== '') {
    $portfolio_title_standard_list_hover_styles .= 'color: '.$cabin_qode_options['portfolio_title_standard_list_hover_color'].';';
}

if($portfolio_title_standard_list_hover_styles !== '') {
    ?>
    .projects_holder.standard article .portfolio_title a:hover,
    .projects_holder.standard_no_space article .portfolio_title a:hover{
    <?php echo esc_attr($portfolio_title_standard_list_hover_styles); ?>
    }
    <?php
}
?>

<?php
//generate categories on portfolio standard and pinterest lists styles
$portfolio_category_standard_list_font_styles = '';
if(isset($cabin_qode_options['portfolio_category_standard_list_color']) && $cabin_qode_options['portfolio_category_standard_list_color'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_color']).';';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_font_family']) && $cabin_qode_options['portfolio_category_standard_list_font_family'] !== '-1') {
    $portfolio_category_standard_list_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_category_standard_list_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_font_size']) && $cabin_qode_options['portfolio_category_standard_list_font_size'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_line_height']) && $cabin_qode_options['portfolio_category_standard_list_line_height'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_font_style']) && $cabin_qode_options['portfolio_category_standard_list_font_style'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_font_weight']) && $cabin_qode_options['portfolio_category_standard_list_font_weight'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_letter_spacing']) && $cabin_qode_options['portfolio_category_standard_list_letter_spacing'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_standard_list_text_transform']) && $cabin_qode_options['portfolio_category_standard_list_text_transform'] !== '') {
    $portfolio_category_standard_list_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_category_standard_list_text_transform']).';';
}

if($portfolio_category_standard_list_font_styles !== '') {
    ?>
    .projects_holder.standard article .project_category,
    .projects_holder.standard_no_space article .project_category{
    <?php echo esc_attr($portfolio_category_standard_list_font_styles); ?>
    }
    <?php
}
?>

<?php
//generate title on portfolio stext on hover image and text before hover lists styles
$portfolio_title_hover_box_list_font_styles = '';
if(isset($cabin_qode_options['portfolio_title_hover_box_list_color']) && $cabin_qode_options['portfolio_title_hover_box_list_color'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_color']).';';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_font_family']) && $cabin_qode_options['portfolio_title_hover_box_list_font_family'] !== '-1') {
    $portfolio_title_hover_box_list_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_title_hover_box_list_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_font_size']) && $cabin_qode_options['portfolio_title_hover_box_list_font_size'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_line_height']) && $cabin_qode_options['portfolio_title_hover_box_list_line_height'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_font_style']) && $cabin_qode_options['portfolio_title_hover_box_list_font_style'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_font_weight']) && $cabin_qode_options['portfolio_title_hover_box_list_font_weight'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_letter_spacing']) && $cabin_qode_options['portfolio_title_hover_box_list_letter_spacing'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_hover_box_list_text_transform']) && $cabin_qode_options['portfolio_title_hover_box_list_text_transform'] !== '') {
    $portfolio_title_hover_box_list_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_title_hover_box_list_text_transform']).';';
}

if($portfolio_title_hover_box_list_font_styles !== '') {
    ?>
    .projects_holder.hover_text article .item_holder .portfolio_title,
    .projects_holder.hover_text article .item_holder .portfolio_title a,
    .projects_holder.hover_text.no_space article .item_holder .portfolio_title,
    .projects_holder.hover_text.no_space article .item_holder .portfolio_title a{
    <?php echo esc_attr($portfolio_title_hover_box_list_font_styles); ?>
    }
    <?php
}

$portfolio_title_hover_box_list_hover_styles = '';
if(isset($cabin_qode_options['portfolio_title_hover_box_list_hover_color']) && $cabin_qode_options['portfolio_title_hover_box_list_hover_color'] !== '') {
    $portfolio_title_hover_box_list_hover_styles .= 'color: '.$cabin_qode_options['portfolio_title_hover_box_list_hover_color'].';';
}

if($portfolio_title_hover_box_list_hover_styles !== '') {
    ?>
    .portfolio_main_holder.projects_holder.hover_text article .portfolio_title:hover a,
    .portfolio_main_holder.projects_holder.hover_text.no_space article .portfolio_title:hover a{
    <?php echo esc_attr($portfolio_title_hover_box_list_hover_styles); ?>
    }
    <?php
}
?>

<?php
//generate categories on text on hover image and text before hover lists styles
$portfolio_category_hover_box_list_font_styles = '';
if(isset($cabin_qode_options['portfolio_category_hover_box_list_color']) && $cabin_qode_options['portfolio_category_hover_box_list_color'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_color']).';';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_font_family']) && $cabin_qode_options['portfolio_category_hover_box_list_font_family'] !== '-1') {
    $portfolio_category_hover_box_list_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_category_hover_box_list_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_font_size']) && $cabin_qode_options['portfolio_category_hover_box_list_font_size'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_line_height']) && $cabin_qode_options['portfolio_category_hover_box_list_line_height'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_font_style']) && $cabin_qode_options['portfolio_category_hover_box_list_font_style'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_font_weight']) && $cabin_qode_options['portfolio_category_hover_box_list_font_weight'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_letter_spacing']) && $cabin_qode_options['portfolio_category_hover_box_list_letter_spacing'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_hover_box_list_text_transform']) && $cabin_qode_options['portfolio_category_hover_box_list_text_transform'] !== '') {
    $portfolio_category_hover_box_list_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_category_hover_box_list_text_transform']).';';
}

if($portfolio_category_hover_box_list_font_styles !== '') {
    ?>
    .portfolio_main_holder.projects_holder.hover_text article .project_category,
    .portfolio_main_holder.projects_holder.hover_text.no_space article .project_category,
    .portfolio_main_holder.projects_holder article:hover .item_holder.image_subtle_rotate_zoom_hover .project_category,
    .portfolio_main_holder.projects_holder article:hover .item_holder.subtle_vertical_hover .project_category,
    .portfolio_main_holder.projects_holder article:hover .item_holder.slide_up_hover .project_category{
    <?php echo esc_attr($portfolio_category_hover_box_list_font_styles); ?>
    }
    <?php
}
?>

<?php
//generate title on portfolio gallery and masonry lists styles
$portfolio_title_list_font_styles = '';
if(isset($cabin_qode_options['portfolio_title_list_color']) && $cabin_qode_options['portfolio_title_list_color'] !== '') {
    $portfolio_title_list_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_title_list_color']).';';
}

if(isset($cabin_qode_options['portfolio_title_list_font_family']) && $cabin_qode_options['portfolio_title_list_font_family'] !== '-1') {
    $portfolio_title_list_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_title_list_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_title_list_font_size']) && $cabin_qode_options['portfolio_title_list_font_size'] !== '') {
    $portfolio_title_list_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_title_list_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_list_line_height']) && $cabin_qode_options['portfolio_title_list_line_height'] !== '') {
    $portfolio_title_list_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_title_list_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_list_font_style']) && $cabin_qode_options['portfolio_title_list_font_style'] !== '') {
    $portfolio_title_list_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_title_list_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_title_list_font_weight']) && $cabin_qode_options['portfolio_title_list_font_weight'] !== '') {
    $portfolio_title_list_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_title_list_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_title_list_letter_spacing']) && $cabin_qode_options['portfolio_title_list_letter_spacing'] !== '') {
    $portfolio_title_list_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_title_list_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_title_list_text_transform']) && $cabin_qode_options['portfolio_title_list_text_transform'] !== '') {
    $portfolio_title_list_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_title_list_text_transform']).';';
}

if($portfolio_title_list_font_styles !== '') {
    ?>
    .portfolio_main_holder.projects_masonry_holder article .item_holder .portfolio_title a,
    .portfolio_main_holder .portfolio_slides li.item .item_holder .portfolio_title a,
    .portfolio_main_holder.projects_masonry_holder article .item_holder .portfolio_title,
    .portfolio_main_holder .portfolio_slides li.item .item_holder .portfolio_title{
    <?php echo esc_attr($portfolio_title_list_font_styles); ?>
    }
    <?php
}
?>

<?php
$portfolio_title_list_hover_styles = '';
if(isset($cabin_qode_options['portfolio_title_list_hover_color']) && $cabin_qode_options['portfolio_title_list_hover_color'] !== '') {
    $portfolio_title_list_hover_styles .= 'color: '.$cabin_qode_options['portfolio_title_list_hover_color'].';';
}

if($portfolio_title_list_hover_styles !== '') {
    ?>
    .portfolio_main_holder.portfolio_slider_holder li.item .item_holder .portfolio_title a:hover,
    .portfolio_main_holder.projects_masonry_holder article .item_holder .portfolio_title a:hover{
    <?php echo esc_attr($portfolio_title_list_hover_styles); ?>
    }
    <?php
}
?>

<?php
//generate categories on portfolio gallery and masonry lists styles
$portfolio_category_list_font_styles = '';
if(isset($cabin_qode_options['portfolio_category_list_color']) && $cabin_qode_options['portfolio_category_list_color'] !== '') {
    $portfolio_category_list_font_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_category_list_color']).';';
}

if(isset($cabin_qode_options['portfolio_category_list_font_family']) && $cabin_qode_options['portfolio_category_list_font_family'] !== '-1') {
    $portfolio_category_list_font_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['portfolio_category_list_font_family']).';';
}

if(isset($cabin_qode_options['portfolio_category_list_font_size']) && $cabin_qode_options['portfolio_category_list_font_size'] !== '') {
    $portfolio_category_list_font_styles .= 'font-size: '.esc_attr($cabin_qode_options['portfolio_category_list_font_size']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_list_line_height']) && $cabin_qode_options['portfolio_category_list_line_height'] !== '') {
    $portfolio_category_list_font_styles .= 'line-height: '.esc_attr($cabin_qode_options['portfolio_category_list_line_height']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_list_font_style']) && $cabin_qode_options['portfolio_category_list_font_style'] !== '') {
    $portfolio_category_list_font_styles .= 'font-style: '.esc_attr($cabin_qode_options['portfolio_category_list_font_style']).';';
}

if(isset($cabin_qode_options['portfolio_category_list_font_weight']) && $cabin_qode_options['portfolio_category_list_font_weight'] !== '') {
    $portfolio_category_list_font_styles .= 'font-weight: '.esc_attr($cabin_qode_options['portfolio_category_list_font_weight']).';';
}

if(isset($cabin_qode_options['portfolio_category_list_letter_spacing']) && $cabin_qode_options['portfolio_category_list_letter_spacing'] !== '') {
    $portfolio_category_list_font_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['portfolio_category_list_letter_spacing']).'px;';
}

if(isset($cabin_qode_options['portfolio_category_list_text_transform']) && $cabin_qode_options['portfolio_category_list_text_transform'] !== '') {
    $portfolio_category_list_font_styles .= 'text-transform: '.esc_attr($cabin_qode_options['portfolio_category_list_text_transform']).';';
}

if($portfolio_category_list_font_styles !== '') {
    ?>
    .portfolio_main_holder.projects_masonry_holder .item_holder .project_category,
    .portfolio_main_holder .portfolio_slides .item_holder .project_category,
    .portfolio_main_holder.projects_masonry_holder article:hover .item_holder .project_category,
    .portfolio_main_holder .portfolio_slider li.item:hover .item_holder .project_category{
    <?php echo esc_attr($portfolio_category_list_font_styles); ?>
    }
    <?php
}
?>

<?php if ((isset($cabin_qode_options['portfolio_list_icons_size']) && $cabin_qode_options['portfolio_list_icons_size'] != '') || !empty($cabin_qode_options['portfolio_list_icons_color']) || !empty($cabin_qode_options['portfolio_list_icons_background_color']) || !empty($cabin_qode_options['portfolio_list_icons_border_color']) || (isset($cabin_qode_options['portfolio_list_icons_border_width']) && $cabin_qode_options['portfolio_list_icons_border_width'] !== '') || (isset($cabin_qode_options['portfolio_list_icons_border_radius']) && $cabin_qode_options['portfolio_list_icons_border_radius'] !== '')) {
    $portfolio_list_icons_styles = '';

    if(isset($cabin_qode_options['portfolio_list_icons_size']) && $cabin_qode_options['portfolio_list_icons_size'] != '') {
        $portfolio_list_icons_styles .= 'font-size:' .esc_attr($cabin_qode_options['portfolio_list_icons_size']).'px !important;';
        $portfolio_list_icons_styles .= 'height: 1.75em !important;';
        $portfolio_list_icons_styles .= 'line-height: 1.75em !important;';
    }

    if(!empty($cabin_qode_options['portfolio_list_icons_color'])) {
        $portfolio_list_icons_styles .= 'color: '.esc_attr($cabin_qode_options['portfolio_list_icons_color']).'!important;';
    }

    if(!empty($cabin_qode_options['portfolio_list_icons_background_color'])) {
        $portfolio_list_icons_styles .= 'background-color: '.esc_attr($cabin_qode_options['portfolio_list_icons_background_color']).'!important;';
    }

    if(!empty($cabin_qode_options['portfolio_list_icons_border_color'])) {
        $portfolio_list_icons_styles .= 'border-color: '.esc_attr($cabin_qode_options['portfolio_list_icons_border_color']).'!important;';
    }

    if(empty($cabin_qode_options['portfolio_list_icons_border_color']) && !empty($cabin_qode_options['portfolio_list_icons_border_hover_color'])) {
        if(!empty($cabin_qode_options['portfolio_list_icons_background_color'])){
            $portfolio_list_icons_styles .= 'border-color: '.esc_attr($cabin_qode_options['portfolio_list_icons_background_color']).'!important;';
        }
        else{
            $portfolio_list_icons_styles .= 'border-color: transparent !important;';
        }
    }

    if(isset($cabin_qode_options['portfolio_list_icons_border_radius']) && $cabin_qode_options['portfolio_list_icons_border_radius'] !== '') {
        $portfolio_list_icons_styles .= 'border-radius: '.esc_attr($cabin_qode_options['portfolio_list_icons_border_radius']).'px!important;';
    }

    if(isset($cabin_qode_options['portfolio_list_icons_border_width']) && $cabin_qode_options['portfolio_list_icons_border_width'] !== '') {
        $portfolio_list_icons_styles .= 'border-width: '.esc_attr($cabin_qode_options['portfolio_list_icons_border_width']).'px!important;';
        $portfolio_list_icons_styles .= 'border-style:solid !important;';

    }

    if($portfolio_list_icons_styles !== '') {
        ?>
        .portfolio_main_holder .icons_holder a{
        <?php echo esc_attr($portfolio_list_icons_styles); ?>
        }
        <?php
    }
    ?>

    <?php if (isset($cabin_qode_options['portfolio_list_icons_size']) && $cabin_qode_options['portfolio_list_icons_size'] != '') { ?>
        .portfolio_main_holder .item_holder:not(.slide_from_left_hover) .icons_holder a{
        width: 1.75em !important;
        }
    <?php } ?>

<?php } ?>


<?php if (!empty($cabin_qode_options['portfolio_list_icons_hover_color']) || !empty($cabin_qode_options['portfolio_list_icons_background_hover_color']) || !empty($cabin_qode_options['portfolio_list_icons_border_hover_color'])) {
    $portfolio_list_icons_hover_styles = '';
    if(!empty($cabin_qode_options['portfolio_list_icons_hover_color'])) {
        $portfolio_list_icons_hover_styles .= 'color: '.$cabin_qode_options['portfolio_list_icons_hover_color'].'!important;';
    }

    if(!empty($cabin_qode_options['portfolio_list_icons_background_hover_color'])) {
        $portfolio_list_icons_hover_styles .= 'background-color: '.$cabin_qode_options['portfolio_list_icons_background_hover_color'].'!important;';
    }

    if(!empty($cabin_qode_options['portfolio_list_icons_border_hover_color'])) {
        $portfolio_list_icons_hover_styles .= 'border-color: '.$cabin_qode_options['portfolio_list_icons_border_hover_color'].'!important;';
    }

    if($portfolio_list_icons_hover_styles !== '') {
        ?>
        .portfolio_main_holder .icons_holder a:hover{
        <?php echo esc_attr($portfolio_list_icons_hover_styles); ?>
        }
        <?php
    }
    ?>
<?php } ?>

<?php  if (!empty($cabin_qode_options['thin_plus_only_style_color']) || (isset($cabin_qode_options['thin_plus_only_style_size']) && $cabin_qode_options['thin_plus_only_style_size'] !== '') || (isset($cabin_qode_options['thin_plus_only_style_weight']) && $cabin_qode_options['thin_plus_only_style_weight'] !== '')) {
    $thin_plus_only_style_color_styles = '';
    if(!empty($cabin_qode_options['thin_plus_only_style_color'])) {
        $thin_plus_only_style_color_styles .= 'color: '.$cabin_qode_options['thin_plus_only_style_color'].';';
    }

    if(isset($cabin_qode_options['thin_plus_only_style_size']) && $cabin_qode_options['thin_plus_only_style_size'] !== '') {
        $thin_plus_only_style_color_styles .= 'font-size: '.$cabin_qode_options['thin_plus_only_style_size'].'px;';
    }

    if(isset($cabin_qode_options['thin_plus_only_style_weight']) && $cabin_qode_options['thin_plus_only_style_weight'] !== '') {
        $thin_plus_only_style_color_styles .= 'font-weight: '.$cabin_qode_options['thin_plus_only_style_weight'].';';
    }

    if($thin_plus_only_style_color_styles !== '') {
        ?>
        .portfolio_main_holder .item_holder.thin_plus_only .thin_plus_only_icon{
        <?php echo esc_attr($thin_plus_only_style_color_styles); ?>
        }
        <?php
    }
    ?>
<?php } ?>

<?php if (isset($cabin_qode_options['portfolio_list_icons_pack'])) {
    if($cabin_qode_options['portfolio_list_icons_pack'] == 'font-elegant'){ ?>
        .projects_holder article .icons_holder a.portfolio_lightbox:before,
        .projects_masonry_holder article .icons_holder a.portfolio_lightbox:before,
        .portfolio_slides .icons_holder a.portfolio_lightbox:before{
        content: "\4c";
        font-family: 'ElegantIcons';
        }

        .projects_holder article .icons_holder a.qode-like:before,
        .projects_masonry_holder article .icons_holder a.qode-like:before,
        .portfolio_slides .icons_holder a.qode-like:before{
        content: "\e030";
        font-family: 'ElegantIcons';
        }

        .projects_holder article .icons_holder a.qode-like.liked:before,
        .projects_masonry_holder article .icons_holder a.qode-like.liked:before,
        .portfolio_slides .icons_holder a.qode-like.liked:before{
        content: "\e089";
        font-family: 'ElegantIcons';
        }

        .projects_holder article .icons_holder a.preview:before,
        .projects_masonry_holder article .icons_holder a.preview:before,
        .portfolio_slides .icons_holder a.preview:before {
        content: "\e02c";
        font-family: 'ElegantIcons';
        }

    <?php }
} ?>

<?php

$expandable_section_style       = array();
$expandable_label_style         = array();
$expandable_label_hover_style   = array();

if(isset($cabin_qode_options['expandable_background_color']) && $cabin_qode_options['expandable_background_color'] !== '') {
    $expandable_section_style[] = 'background-color: '.$cabin_qode_options['expandable_background_color'];
}

if(isset($cabin_qode_options['expandable_label_color']) && $cabin_qode_options['expandable_label_color'] !== '') {
    $expandable_label_style[] = 'color: '.$cabin_qode_options['expandable_label_color'];
}

if(isset($cabin_qode_options['expandable_label_font_family']) && $cabin_qode_options['expandable_label_font_family'] !== '-1') {
    $expandable_label_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['expandable_label_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['expandable_label_font_size']) && $cabin_qode_options['expandable_label_font_size'] !== '') {
    $expandable_label_style[] = 'font-size: '.$cabin_qode_options['expandable_label_font_size'].'px';
}

if(isset($cabin_qode_options['expandable_label_letter_spacing']) && $cabin_qode_options['expandable_label_letter_spacing'] !== '') {
    $expandable_label_style[] = 'letter-spacing: '.$cabin_qode_options['expandable_label_letter_spacing'].'px';
}

if(isset($cabin_qode_options['expandable_label_font_weight']) && $cabin_qode_options['expandable_label_font_weight'] !== '') {
    $expandable_label_style[] = 'font-weight: '.$cabin_qode_options['expandable_label_font_weight'];
}

if(isset($cabin_qode_options['expandable_label_text_transform']) && $cabin_qode_options['expandable_label_text_transform'] !== '') {
    $expandable_label_style[] = 'text-transform: '.$cabin_qode_options['expandable_label_text_transform'];
}

if(isset($cabin_qode_options['expandable_label_hover_color']) && $cabin_qode_options['expandable_label_hover_color'] !== '') {
    $expandable_label_hover_style[] = 'color: '.$cabin_qode_options['expandable_label_hover_color'];
}

if(is_array($expandable_section_style) && count($expandable_section_style)) { ?>
    .more_facts_holder {
    <?php echo esc_attr(implode(';', $expandable_section_style)); ?>
    }

<?php }

if(is_array($expandable_label_style) && count($expandable_label_style)) { ?>
    .more_facts_button{
    <?php echo esc_attr(implode(';', $expandable_label_style)); ?>
    }
<?php }

if(is_array($expandable_label_hover_style) && count($expandable_label_hover_style)) { ?>
    .more_facts_button:hover {
    <?php echo esc_attr(implode(';', $expandable_label_hover_style)); ?>
    }
<?php } ?>

<?php
//Contact Form 7 Custom Styles - start
if(cabin_qode_contact_form_7_installed()){


    $cf7_custom_style_1_elements_styles = '';
    $cf7_custom_style_1_color_placeholder = '';
    if(isset($cabin_qode_options['cf7_custom_style_1_element_background_color']) && $cabin_qode_options['cf7_custom_style_1_element_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_element_background_transparency']) && $cabin_qode_options['cf7_custom_style_1_element_background_transparency'] !== ''){
            $cf7_custom_style_1_element_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_element_background_color']);
            $cf7_custom_style_1_elements_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_1_element_background_color[0]) . ',' . esc_attr($cf7_custom_style_1_element_background_color[1]) . ',' . esc_attr($cf7_custom_style_1_element_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_element_background_transparency']) .');';
        } else {
            $cf7_custom_style_1_elements_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_border_color']) && $cabin_qode_options['cf7_custom_style_1_element_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_border_transparency']) && $cabin_qode_options['cf7_custom_style_1_border_transparency'] !== ''){
            $cf7_custom_style_1_element_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_element_border_color']);
            $cf7_custom_style_1_elements_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_1_element_border_color[0]) . ',' . esc_attr($cf7_custom_style_1_element_border_color[1]) . ',' . esc_attr($cf7_custom_style_1_element_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_border_transparency']) .');';
        } else {
            $cf7_custom_style_1_elements_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_border_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_border_width']) && $cabin_qode_options['cf7_custom_style_1_element_border_width'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'border-width: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_border_width']).'px;';
        $cf7_custom_style_1_elements_styles .= 'border-style:solid;';
        $cf7_custom_style_1_elements_styles .= 'transform: translateZ(0);';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_border_radius']) && $cabin_qode_options['cf7_custom_style_1_element_border_radius'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'border-radius: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_border_radius']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_border_bottom']) && $cabin_qode_options['cf7_custom_style_1_element_border_bottom'] == 'yes') {
        $cf7_custom_style_1_elements_styles .= 'border-left: none; border-right:none; border-top: none;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_font_color']) && $cabin_qode_options['cf7_custom_style_1_element_font_color'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_color']).';';
        $cf7_custom_style_1_color_placeholder .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_color']).';';
        $cf7_custom_style_1_color_placeholder .= 'opacity:1;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_font_family']) && $cabin_qode_options['cf7_custom_style_1_element_font_family'] !== '-1') {
        $cf7_custom_style_1_elements_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['cf7_custom_style_1_element_font_family']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_font_size']) && $cabin_qode_options['cf7_custom_style_1_element_font_size'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'font-size: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_size']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_1_element_line_height']) && $cabin_qode_options['cf7_custom_style_1_element_line_height'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'line-height: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_line_height']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_1_element_font_style']) && $cabin_qode_options['cf7_custom_style_1_element_font_style'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'font-style: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_style']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_font_weight']) && $cabin_qode_options['cf7_custom_style_1_element_font_weight'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'font-weight: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_weight']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_letter_spacing']) && $cabin_qode_options['cf7_custom_style_1_element_letter_spacing'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_letter_spacing']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_text_transform']) && $cabin_qode_options['cf7_custom_style_1_element_text_transform'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'text-transform: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_text_transform']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_padding_top']) && $cabin_qode_options['cf7_custom_style_1_element_padding_top'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'padding-top: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_padding_top']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_padding_right']) && $cabin_qode_options['cf7_custom_style_1_element_padding_right'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'padding-right: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_padding_right']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_1_element_padding_bottom']) && $cabin_qode_options['cf7_custom_style_1_element_padding_bottom'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'padding-bottom: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_padding_bottom']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_1_element_padding_left']) && $cabin_qode_options['cf7_custom_style_1_element_padding_left'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'padding-left: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_padding_left']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_1_element_margin_top']) && $cabin_qode_options['cf7_custom_style_1_element_margin_top'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'margin-top: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_margin_top']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_1_element_margin_bottom']) && $cabin_qode_options['cf7_custom_style_1_element_margin_bottom'] !== '') {
        $cf7_custom_style_1_elements_styles .= 'margin-bottom: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_margin_bottom']).'px;';
        ?>.cf7_custom_style_1 span.wpcf7-not-valid-tip{
        top: -<?php echo esc_attr($cabin_qode_options['cf7_custom_style_1_element_margin_bottom']).'px;'; ?>;
        }<?php
    }

    $cf7_custom_style_1_elements_focus_styles = '';
    $cf7_custom_style_1_focus_color_placeholder = '';

    if(isset($cabin_qode_options['cf7_custom_style_1_element_font_focus_color']) && $cabin_qode_options['cf7_custom_style_1_element_font_focus_color'] !== '') {
        $cf7_custom_style_1_elements_focus_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_focus_color']).';';
        $cf7_custom_style_1_focus_color_placeholder .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_font_focus_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_focus_background_color']) && $cabin_qode_options['cf7_custom_style_1_element_focus_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_element_focus_background_transparency']) && $cabin_qode_options['cf7_custom_style_1_element_focus_background_transparency'] !== ''){
            $cf7_custom_style_1_element_focus_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_element_focus_background_color']);
            $cf7_custom_style_1_elements_focus_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_1_element_focus_background_color[0]) . ',' . esc_attr($cf7_custom_style_1_element_focus_background_color[1]) . ',' . esc_attr($cf7_custom_style_1_element_focus_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_element_focus_background_transparency']) .');';
        } else {
            $cf7_custom_style_1_elements_focus_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_focus_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_element_focus_border_color']) && $cabin_qode_options['cf7_custom_style_1_element_focus_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_focus_border_transparency']) && $cabin_qode_options['cf7_custom_style_1_focus_border_transparency'] !== ''){
            $cf7_custom_style_1_element_focus_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_element_focus_border_color']);
            $cf7_custom_style_1_elements_focus_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_1_element_focus_border_color[0]) . ',' . esc_attr($cf7_custom_style_1_element_focus_border_color[1]) . ',' . esc_attr($cf7_custom_style_1_element_focus_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_focus_border_transparency']) .');';

        } else {
            $cf7_custom_style_1_elements_focus_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_element_focus_border_color']).';';
        }
    }


    $cf7_custom_style_1_button_styles = '';
    if(isset($cabin_qode_options['cf7_custom_style_1_button_background_color']) && $cabin_qode_options['cf7_custom_style_1_button_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_button_background_transparency']) && $cabin_qode_options['cf7_custom_style_1_button_background_transparency'] !== ''){
            $cf7_custom_style_1_button_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_button_background_color']);
            $cf7_custom_style_1_button_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_1_button_background_color[0]) . ',' . esc_attr($cf7_custom_style_1_button_background_color[1]) . ',' . esc_attr($cf7_custom_style_1_button_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_button_background_transparency']) .');';
        } else {
            $cf7_custom_style_1_button_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_border_color']) && $cabin_qode_options['cf7_custom_style_1_button_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_button_border_transparency']) && $cabin_qode_options['cf7_custom_style_1_button_border_transparency'] !== ''){
            $cf7_custom_style_1_button_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_button_border_color']);
            $cf7_custom_style_1_button_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_1_button_border_color[0]) . ',' . esc_attr($cf7_custom_style_1_button_border_color[1]) . ',' . esc_attr($cf7_custom_style_1_button_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_button_border_transparency']) .');';

        } else {
            $cf7_custom_style_1_button_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_border_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_border_width']) && $cabin_qode_options['cf7_custom_style_1_button_border_width'] !== '') {
        $cf7_custom_style_1_button_styles .= 'border-width: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_border_width']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_border_radius']) && $cabin_qode_options['cf7_custom_style_1_button_border_radius'] !== '') {
        $cf7_custom_style_1_button_styles .= 'border-radius: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_border_radius']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_font_color']) && $cabin_qode_options['cf7_custom_style_1_button_font_color'] !== '') {
        $cf7_custom_style_1_button_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_font_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_font_family']) && $cabin_qode_options['cf7_custom_style_1_button_font_family'] !== '-1') {
        $cf7_custom_style_1_button_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['cf7_custom_style_1_button_font_family']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_font_size']) && $cabin_qode_options['cf7_custom_style_1_button_font_size'] !== '') {
        $cf7_custom_style_1_button_styles .= 'font-size: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_font_size']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_font_style']) && $cabin_qode_options['cf7_custom_style_1_button_font_style'] !== '') {
        $cf7_custom_style_1_button_styles .= 'font-style: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_font_style']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_font_weight']) && $cabin_qode_options['cf7_custom_style_1_button_font_weight'] !== '') {
        $cf7_custom_style_1_button_styles .= 'font-weight: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_font_weight']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_letter_spacing']) && $cabin_qode_options['cf7_custom_style_1_button_letter_spacing'] !== '') {
        $cf7_custom_style_1_button_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_letter_spacing']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_text_transform']) && $cabin_qode_options['cf7_custom_style_1_button_text_transform'] !== '') {
        $cf7_custom_style_1_button_styles .= 'text-transform: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_text_transform']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_height']) && $cabin_qode_options['cf7_custom_style_1_button_height'] !== '') {
        $cf7_custom_style_1_button_styles .= 'height: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_height']).'px;';
        $cf7_custom_style_1_button_styles .= 'line-height: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_height']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_padding']) && $cabin_qode_options['cf7_custom_style_1_button_padding'] !== '') {
        $cf7_custom_style_1_button_styles .= 'padding-left: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_padding']).'px;';
        $cf7_custom_style_1_button_styles .= 'padding-right: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_padding']).'px;';
    }

    $cf7_custom_style_1_button_hover_styles = '';

    if(isset($cabin_qode_options['cf7_custom_style_1_button_font_hover_color']) && $cabin_qode_options['cf7_custom_style_1_button_font_hover_color'] !== '') {
        $cf7_custom_style_1_button_hover_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_font_hover_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_hover_background_color']) && $cabin_qode_options['cf7_custom_style_1_button_hover_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_button_hover_background_transparency']) && $cabin_qode_options['cf7_custom_style_1_button_hover_background_transparency'] !== ''){
            $cf7_custom_style_1_button_hover_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_button_hover_background_color']);
            $cf7_custom_style_1_button_hover_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_1_button_hover_background_color[0]) . ',' . esc_attr($cf7_custom_style_1_button_hover_background_color[1]) . ',' . esc_attr($cf7_custom_style_1_button_hover_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_button_hover_background_transparency']) .');';
        } else {
            $cf7_custom_style_1_button_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_hover_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_1_button_hover_border_color']) && $cabin_qode_options['cf7_custom_style_1_button_hover_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_1_button_hover_border_transparency']) && $cabin_qode_options['cf7_custom_style_1_button_hover_border_transparency'] !== ''){
            $cf7_custom_style_1_button_hover_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_1_button_hover_border_color']);
            $cf7_custom_style_1_button_hover_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_1_button_hover_border_color[0]) . ',' . esc_attr($cf7_custom_style_1_button_hover_border_color[1]) . ',' . esc_attr($cf7_custom_style_1_button_hover_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_1_button_hover_border_transparency']) .');';

        } else {
            $cf7_custom_style_1_button_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_button_hover_border_color']).';';
        }
    }

    $cf7_custom_style_2_elements_styles = '';
    $cf7_custom_style_2_color_placeholder = '';
    if(isset($cabin_qode_options['cf7_custom_style_2_element_background_color']) && $cabin_qode_options['cf7_custom_style_2_element_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_element_background_transparency']) && $cabin_qode_options['cf7_custom_style_2_element_background_transparency'] !== ''){
            $cf7_custom_style_2_element_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_element_background_color']);
            $cf7_custom_style_2_elements_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_2_element_background_color[0]) . ',' . esc_attr($cf7_custom_style_2_element_background_color[1]) . ',' . esc_attr($cf7_custom_style_2_element_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_element_background_transparency']) .');';
        } else {
            $cf7_custom_style_2_elements_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_border_color']) && $cabin_qode_options['cf7_custom_style_2_element_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_border_transparency']) && $cabin_qode_options['cf7_custom_style_2_border_transparency'] !== ''){
            $cf7_custom_style_2_element_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_element_border_color']);
            $cf7_custom_style_2_elements_styles .= 'border-color: rgba('. $cf7_custom_style_2_element_border_color[0] . ',' . esc_attr($cf7_custom_style_2_element_border_color[1]) . ',' . esc_attr($cf7_custom_style_2_element_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_border_transparency']) .');';

        } else {
            $cf7_custom_style_2_elements_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_border_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_border_width']) && $cabin_qode_options['cf7_custom_style_2_element_border_width'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'border-width: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_border_width']).'px;';
        $cf7_custom_style_2_elements_styles .= 'border-style:solid;';
        $cf7_custom_style_2_elements_styles .= 'transform: translateZ(0);';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_border_radius']) && $cabin_qode_options['cf7_custom_style_2_element_border_radius'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'border-radius: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_border_radius']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_border_bottom']) && $cabin_qode_options['cf7_custom_style_2_element_border_bottom'] == 'yes') {
        $cf7_custom_style_2_elements_styles .= 'border-left: none; border-right:none; border-top: none;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_font_color']) && $cabin_qode_options['cf7_custom_style_2_element_font_color'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_color']).';';
        $cf7_custom_style_2_color_placeholder .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_color']).';';
        $cf7_custom_style_2_color_placeholder .= 'opacity:1;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_font_family']) && $cabin_qode_options['cf7_custom_style_2_element_font_family'] !== '-1') {
        $cf7_custom_style_2_elements_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['cf7_custom_style_2_element_font_family']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_font_size']) && $cabin_qode_options['cf7_custom_style_2_element_font_size'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'font-size: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_size']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_line_height']) && $cabin_qode_options['cf7_custom_style_2_element_line_height'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'line-height: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_line_height']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_font_style']) && $cabin_qode_options['cf7_custom_style_2_element_font_style'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'font-style: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_style']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_font_weight']) && $cabin_qode_options['cf7_custom_style_2_element_font_weight'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'font-weight: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_weight']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_letter_spacing']) && $cabin_qode_options['cf7_custom_style_2_element_letter_spacing'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_letter_spacing']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_text_transform']) && $cabin_qode_options['cf7_custom_style_2_element_text_transform'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'text-transform: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_text_transform']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_padding_top']) && $cabin_qode_options['cf7_custom_style_2_element_padding_top'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'padding-top: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_padding_top']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_padding_right']) && $cabin_qode_options['cf7_custom_style_2_element_padding_right'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'padding-right: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_padding_right']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_2_element_padding_bottom']) && $cabin_qode_options['cf7_custom_style_2_element_padding_bottom'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'padding-bottom: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_padding_bottom']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_2_element_padding_left']) && $cabin_qode_options['cf7_custom_style_2_element_padding_left'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'padding-left: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_padding_left']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_margin_top']) && $cabin_qode_options['cf7_custom_style_2_element_margin_top'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'margin-top: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_margin_top']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_margin_bottom']) && $cabin_qode_options['cf7_custom_style_2_element_margin_bottom'] !== '') {
        $cf7_custom_style_2_elements_styles .= 'margin-bottom: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_margin_bottom']).'px;';
        ?>.cf7_custom_style_2 span.wpcf7-not-valid-tip{
        top: -<?php echo esc_attr($cabin_qode_options['cf7_custom_style_2_element_margin_bottom']).'px;'; ?>;
        }<?php
    }

    $cf7_custom_style_2_elements_focus_styles = '';
    $cf7_custom_style_2_focus_color_placeholder = '';

    if(isset($cabin_qode_options['cf7_custom_style_2_element_font_focus_color']) && $cabin_qode_options['cf7_custom_style_2_element_font_focus_color'] !== '') {
        $cf7_custom_style_2_elements_focus_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_focus_color']).';';
        $cf7_custom_style_2_focus_color_placeholder .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_font_focus_color']).';';

    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_focus_background_color']) && $cabin_qode_options['cf7_custom_style_2_element_focus_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_element_focus_background_transparency']) && $cabin_qode_options['cf7_custom_style_2_element_focus_background_transparency'] !== ''){
            $cf7_custom_style_2_element_focus_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_element_focus_background_color']);
            $cf7_custom_style_2_elements_focus_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_2_element_focus_background_color[0]) . ',' . esc_attr($cf7_custom_style_2_element_focus_background_color[1]) . ',' . esc_attr($cf7_custom_style_2_element_focus_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_element_focus_background_transparency']) .');';
        } else {
            $cf7_custom_style_2_elements_focus_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_focus_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_element_focus_border_color']) && $cabin_qode_options['cf7_custom_style_2_element_focus_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_focus_border_transparency']) && $cabin_qode_options['cf7_custom_style_2_focus_border_transparency'] !== ''){
            $cf7_custom_style_2_element_focus_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_element_focus_border_color']);
            $cf7_custom_style_2_elements_focus_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_2_element_focus_border_color[0]) . ',' . esc_attr($cf7_custom_style_2_element_focus_border_color[1]) . ',' . esc_attr($cf7_custom_style_2_element_focus_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_focus_border_transparency']) .');';

        } else {
            $cf7_custom_style_2_elements_focus_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_element_focus_border_color']).';';
        }
    }


    $cf7_custom_style_2_button_styles = '';
    if(isset($cabin_qode_options['cf7_custom_style_2_button_background_color']) && $cabin_qode_options['cf7_custom_style_2_button_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_button_background_transparency']) && $cabin_qode_options['cf7_custom_style_2_button_background_transparency'] !== ''){
            $cf7_custom_style_2_button_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_button_background_color']);
            $cf7_custom_style_2_button_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_2_button_background_color[0]) . ',' . esc_attr($cf7_custom_style_2_button_background_color[1]) . ',' . esc_attr($cf7_custom_style_2_button_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_button_background_transparency']) .');';
        } else {
            $cf7_custom_style_2_button_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_border_color']) && $cabin_qode_options['cf7_custom_style_2_button_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_button_border_transparency']) && $cabin_qode_options['cf7_custom_style_2_button_border_transparency'] !== ''){
            $cf7_custom_style_2_button_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_button_border_color']);
            $cf7_custom_style_2_button_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_2_button_border_color[0]) . ',' . esc_attr($cf7_custom_style_2_button_border_color[1]) . ',' . esc_attr($cf7_custom_style_2_button_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_button_border_transparency']) .');';

        } else {
            $cf7_custom_style_2_button_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_border_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_border_width']) && $cabin_qode_options['cf7_custom_style_2_button_border_width'] !== '') {
        $cf7_custom_style_2_button_styles .= 'border-width: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_border_width']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_border_radius']) && $cabin_qode_options['cf7_custom_style_2_button_border_radius'] !== '') {
        $cf7_custom_style_2_button_styles .= 'border-radius: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_border_radius']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_font_color']) && $cabin_qode_options['cf7_custom_style_2_button_font_color'] !== '') {
        $cf7_custom_style_2_button_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_font_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_font_family']) && $cabin_qode_options['cf7_custom_style_2_button_font_family'] !== '-1') {
        $cf7_custom_style_2_button_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['cf7_custom_style_2_button_font_family']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_font_size']) && $cabin_qode_options['cf7_custom_style_2_button_font_size'] !== '') {
        $cf7_custom_style_2_button_styles .= 'font-size: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_font_size']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_font_style']) && $cabin_qode_options['cf7_custom_style_2_button_font_style'] !== '') {
        $cf7_custom_style_2_button_styles .= 'font-style: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_font_style']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_font_weight']) && $cabin_qode_options['cf7_custom_style_2_button_font_weight'] !== '') {
        $cf7_custom_style_2_button_styles .= 'font-weight: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_font_weight']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_letter_spacing']) && $cabin_qode_options['cf7_custom_style_2_button_letter_spacing'] !== '') {
        $cf7_custom_style_2_button_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_letter_spacing']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_text_transform']) && $cabin_qode_options['cf7_custom_style_2_button_text_transform'] !== '') {
        $cf7_custom_style_2_button_styles .= 'text-transform: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_text_transform']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_height']) && $cabin_qode_options['cf7_custom_style_2_button_height'] !== '') {
        $cf7_custom_style_2_button_styles .= 'height: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_height']).'px;';
        $cf7_custom_style_2_button_styles .= 'line-height: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_height']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_padding']) && $cabin_qode_options['cf7_custom_style_2_button_padding'] !== '') {
        $cf7_custom_style_2_button_styles .= 'padding-left: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_padding']).'px;';
        $cf7_custom_style_2_button_styles .= 'padding-right: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_padding']).'px;';
    }

    $cf7_custom_style_2_button_hover_styles = '';

    if(isset($cabin_qode_options['cf7_custom_style_2_button_font_hover_color']) && $cabin_qode_options['cf7_custom_style_2_button_font_hover_color'] !== '') {
        $cf7_custom_style_2_button_hover_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_font_hover_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_hover_background_color']) && $cabin_qode_options['cf7_custom_style_2_button_hover_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_button_hover_background_transparency']) && $cabin_qode_options['cf7_custom_style_2_button_hover_background_transparency'] !== ''){
            $cf7_custom_style_2_button_hover_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_button_hover_background_color']);
            $cf7_custom_style_2_button_hover_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_2_button_hover_background_color[0]) . ',' . esc_attr($cf7_custom_style_2_button_hover_background_color[1]) . ',' . esc_attr($cf7_custom_style_2_button_hover_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_button_hover_background_transparency']) .');';
        } else {
            $cf7_custom_style_2_button_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_hover_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_2_button_hover_border_color']) && $cabin_qode_options['cf7_custom_style_2_button_hover_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_2_button_hover_border_transparency']) && $cabin_qode_options['cf7_custom_style_2_button_hover_border_transparency'] !== ''){
            $cf7_custom_style_2_button_hover_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_2_button_hover_border_color']);
            $cf7_custom_style_2_button_hover_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_2_button_hover_border_color[0]) . ',' . esc_attr($cf7_custom_style_2_button_hover_border_color[1]) . ',' . esc_attr($cf7_custom_style_2_button_hover_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_2_button_hover_border_transparency']) .');';

        } else {
            $cf7_custom_style_2_button_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_button_hover_border_color']).';';
        }
    }
    $cf7_custom_style_3_elements_styles = '';
    $cf7_custom_style_3_color_placeholder = '';
    if(isset($cabin_qode_options['cf7_custom_style_3_element_background_color']) && $cabin_qode_options['cf7_custom_style_3_element_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_element_background_transparency']) && $cabin_qode_options['cf7_custom_style_3_element_background_transparency'] !== ''){
            $cf7_custom_style_3_element_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_element_background_color']);
            $cf7_custom_style_3_elements_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_3_element_background_color[0]) . ',' . esc_attr($cf7_custom_style_3_element_background_color[1]) . ',' . esc_attr($cf7_custom_style_3_element_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_element_background_transparency']) .');';
        } else {
            $cf7_custom_style_3_elements_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_border_color']) && $cabin_qode_options['cf7_custom_style_3_element_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_border_transparency']) && $cabin_qode_options['cf7_custom_style_3_border_transparency'] !== ''){
            $cf7_custom_style_3_element_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_element_border_color']);
            $cf7_custom_style_3_elements_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_3_element_border_color[0]) . ',' . esc_attr($cf7_custom_style_3_element_border_color[1]) . ',' . esc_attr($cf7_custom_style_3_element_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_border_transparency']) .');';

        } else {
            $cf7_custom_style_3_elements_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_border_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_border_width']) && $cabin_qode_options['cf7_custom_style_3_element_border_width'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'border-width: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_border_width']).'px;';
        $cf7_custom_style_3_elements_styles .= 'border-style:solid;';
        $cf7_custom_style_3_elements_styles .= 'transform: translateZ(0);';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_border_radius']) && $cabin_qode_options['cf7_custom_style_3_element_border_radius'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'border-radius: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_border_radius']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_border_bottom']) && $cabin_qode_options['cf7_custom_style_3_element_border_bottom'] == 'yes') {
        $cf7_custom_style_3_elements_styles .= 'border-left: none; border-right:none; border-top: none;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_font_color']) && $cabin_qode_options['cf7_custom_style_3_element_font_color'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_color']).';';
        $cf7_custom_style_3_color_placeholder .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_color']).';';
        $cf7_custom_style_3_color_placeholder .= 'opacity:1;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_font_family']) && $cabin_qode_options['cf7_custom_style_3_element_font_family'] !== '-1') {
        $cf7_custom_style_3_elements_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['cf7_custom_style_3_element_font_family']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_font_size']) && $cabin_qode_options['cf7_custom_style_3_element_font_size'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'font-size: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_size']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_line_height']) && $cabin_qode_options['cf7_custom_style_3_element_line_height'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'line-height: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_line_height']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_font_style']) && $cabin_qode_options['cf7_custom_style_3_element_font_style'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'font-style: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_style']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_font_weight']) && $cabin_qode_options['cf7_custom_style_3_element_font_weight'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'font-weight: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_weight']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_letter_spacing']) && $cabin_qode_options['cf7_custom_style_3_element_letter_spacing'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_letter_spacing']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_text_transform']) && $cabin_qode_options['cf7_custom_style_3_element_text_transform'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'text-transform: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_text_transform']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_padding_top']) && $cabin_qode_options['cf7_custom_style_3_element_padding_top'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'padding-top: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_padding_top']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_padding_right']) && $cabin_qode_options['cf7_custom_style_3_element_padding_right'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'padding-right: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_padding_right']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_3_element_padding_bottom']) && $cabin_qode_options['cf7_custom_style_3_element_padding_bottom'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'padding-bottom: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_padding_bottom']).'px;';
    }
    if(isset($cabin_qode_options['cf7_custom_style_3_element_padding_left']) && $cabin_qode_options['cf7_custom_style_3_element_padding_left'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'padding-left: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_padding_left']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_margin_top']) && $cabin_qode_options['cf7_custom_style_3_element_margin_top'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'margin-top: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_margin_top']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_margin_bottom']) && $cabin_qode_options['cf7_custom_style_3_element_margin_bottom'] !== '') {
        $cf7_custom_style_3_elements_styles .= 'margin-bottom: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_margin_bottom']).'px;';
        ?>.cf7_custom_style_3 span.wpcf7-not-valid-tip{
        top: -<?php echo esc_attr($cabin_qode_options['cf7_custom_style_3_element_margin_bottom']).'px;'; ?>;
        }<?php
    }

    $cf7_custom_style_3_elements_focus_styles = '';
    $cf7_custom_style_3_focus_color_placeholder = '';

    if(isset($cabin_qode_options['cf7_custom_style_3_element_font_focus_color']) && $cabin_qode_options['cf7_custom_style_3_element_font_focus_color'] !== '') {
        $cf7_custom_style_3_elements_focus_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_focus_color']).';';
        $cf7_custom_style_3_focus_color_placeholder .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_font_focus_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_focus_background_color']) && $cabin_qode_options['cf7_custom_style_3_element_focus_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_element_focus_background_transparency']) && $cabin_qode_options['cf7_custom_style_3_element_focus_background_transparency'] !== ''){
            $cf7_custom_style_3_element_focus_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_element_focus_background_color']);
            $cf7_custom_style_3_elements_focus_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_3_element_focus_background_color[0]) . ',' . esc_attr($cf7_custom_style_3_element_focus_background_color[1]) . ',' . esc_attr($cf7_custom_style_3_element_focus_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_element_focus_background_transparency']) .');';
        } else {
            $cf7_custom_style_3_elements_focus_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_focus_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_element_focus_border_color']) && $cabin_qode_options['cf7_custom_style_3_element_focus_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_focus_border_transparency']) && $cabin_qode_options['cf7_custom_style_3_focus_border_transparency'] !== ''){
            $cf7_custom_style_3_element_focus_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_element_focus_border_color']);
            $cf7_custom_style_3_elements_focus_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_3_element_focus_border_color[0]) . ',' . esc_attr($cf7_custom_style_3_element_focus_border_color[1]) . ',' . esc_attr($cf7_custom_style_3_element_focus_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_focus_border_transparency']) .');';

        } else {
            $cf7_custom_style_3_elements_focus_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_element_focus_border_color']).';';
        }
    }


    $cf7_custom_style_3_button_styles = '';
    if(isset($cabin_qode_options['cf7_custom_style_3_button_background_color']) && $cabin_qode_options['cf7_custom_style_3_button_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_button_background_transparency']) && $cabin_qode_options['cf7_custom_style_3_button_background_transparency'] !== ''){
            $cf7_custom_style_3_button_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_button_background_color']);
            $cf7_custom_style_3_button_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_3_button_background_color[0]) . ',' . esc_attr($cf7_custom_style_3_button_background_color[1]) . ',' . esc_attr($cf7_custom_style_3_button_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_button_background_transparency']) .');';
        } else {
            $cf7_custom_style_3_button_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_border_color']) && $cabin_qode_options['cf7_custom_style_3_button_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_button_border_transparency']) && $cabin_qode_options['cf7_custom_style_3_button_border_transparency'] !== ''){
            $cf7_custom_style_3_button_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_button_border_color']);
            $cf7_custom_style_3_button_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_3_button_border_color[0]) . ',' . esc_attr($cf7_custom_style_3_button_border_color[1]) . ',' . esc_attr($cf7_custom_style_3_button_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_button_border_transparency']) .');';

        } else {
            $cf7_custom_style_3_button_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_border_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_border_width']) && $cabin_qode_options['cf7_custom_style_3_button_border_width'] !== '') {
        $cf7_custom_style_3_button_styles .= 'border-width: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_border_width']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_border_radius']) && $cabin_qode_options['cf7_custom_style_3_button_border_radius'] !== '') {
        $cf7_custom_style_3_button_styles .= 'border-radius: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_border_radius']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_font_color']) && $cabin_qode_options['cf7_custom_style_3_button_font_color'] !== '') {
        $cf7_custom_style_3_button_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_font_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_font_family']) && $cabin_qode_options['cf7_custom_style_3_button_font_family'] !== '-1') {
        $cf7_custom_style_3_button_styles .= 'font-family: '.str_replace('+', ' ', $cabin_qode_options['cf7_custom_style_3_button_font_family']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_font_size']) && $cabin_qode_options['cf7_custom_style_3_button_font_size'] !== '') {
        $cf7_custom_style_3_button_styles .= 'font-size: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_font_size']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_font_style']) && $cabin_qode_options['cf7_custom_style_3_button_font_style'] !== '') {
        $cf7_custom_style_3_button_styles .= 'font-style: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_font_style']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_font_weight']) && $cabin_qode_options['cf7_custom_style_3_button_font_weight'] !== '') {
        $cf7_custom_style_3_button_styles .= 'font-weight: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_font_weight']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_letter_spacing']) && $cabin_qode_options['cf7_custom_style_3_button_letter_spacing'] !== '') {
        $cf7_custom_style_3_button_styles .= 'letter-spacing: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_letter_spacing']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_text_transform']) && $cabin_qode_options['cf7_custom_style_3_button_text_transform'] !== '') {
        $cf7_custom_style_3_button_styles .= 'text-transform: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_text_transform']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_height']) && $cabin_qode_options['cf7_custom_style_3_button_height'] !== '') {
        $cf7_custom_style_3_button_styles .= 'height: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_height']).'px;';
        $cf7_custom_style_3_button_styles .= 'line-height: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_height']).'px;';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_padding']) && $cabin_qode_options['cf7_custom_style_3_button_padding'] !== '') {
        $cf7_custom_style_3_button_styles .= 'padding-left: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_padding']).'px;';
        $cf7_custom_style_3_button_styles .= 'padding-right: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_padding']).'px;';
    }

    $cf7_custom_style_3_button_hover_styles = '';

    if(isset($cabin_qode_options['cf7_custom_style_3_button_font_hover_color']) && $cabin_qode_options['cf7_custom_style_3_button_font_hover_color'] !== '') {
        $cf7_custom_style_3_button_hover_styles .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_font_hover_color']).';';
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_hover_background_color']) && $cabin_qode_options['cf7_custom_style_3_button_hover_background_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_button_hover_background_transparency']) && $cabin_qode_options['cf7_custom_style_3_button_hover_background_transparency'] !== ''){
            $cf7_custom_style_3_button_hover_background_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_button_hover_background_color']);
            $cf7_custom_style_3_button_hover_styles .= 'background-color: rgba('. esc_attr($cf7_custom_style_3_button_hover_background_color[0]) . ',' . esc_attr($cf7_custom_style_3_button_hover_background_color[1]) . ',' . esc_attr($cf7_custom_style_3_button_hover_background_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_button_hover_background_transparency']) .');';
        } else {
            $cf7_custom_style_3_button_hover_styles .= 'background-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_hover_background_color']).';';
        }
    }

    if(isset($cabin_qode_options['cf7_custom_style_3_button_hover_border_color']) && $cabin_qode_options['cf7_custom_style_3_button_hover_border_color'] !== '') {
        if(isset($cabin_qode_options['cf7_custom_style_3_button_hover_border_transparency']) && $cabin_qode_options['cf7_custom_style_3_button_hover_border_transparency'] !== ''){
            $cf7_custom_style_3_button_hover_border_color = cabin_qode_hex2rgb($cabin_qode_options['cf7_custom_style_3_button_hover_border_color']);
            $cf7_custom_style_3_button_hover_styles .= 'border-color: rgba('. esc_attr($cf7_custom_style_3_button_hover_border_color[0]) . ',' . esc_attr($cf7_custom_style_3_button_hover_border_color[1]) . ',' . esc_attr($cf7_custom_style_3_button_hover_border_color[2]) . ',' . esc_attr($cabin_qode_options['cf7_custom_style_3_button_hover_border_transparency']) .');';

        } else {
            $cf7_custom_style_3_button_hover_styles .= 'border-color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_button_hover_border_color']).';';
        }
    }
    ?>
    <?php
    $cf7_custom_style_1_validation_messages_style = "";
    if(isset($cabin_qode_options['cf7_custom_style_1_error_validation_messages_color']) && $cabin_qode_options['cf7_custom_style_1_error_validation_messages_color'] !== '') {
        $cf7_custom_style_1_validation_messages_style .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_1_error_validation_messages_color']).';';
    }


    $cf7_custom_style_2_validation_messages_style = "";
    if(isset($cabin_qode_options['cf7_custom_style_2_error_validation_messages_color']) && $cabin_qode_options['cf7_custom_style_2_error_validation_messages_color'] !== '') {
        $cf7_custom_style_2_validation_messages_style .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_2_error_validation_messages_color']).';';
    }

    $cf7_custom_style_3_validation_messages_style = "";
    if(isset($cabin_qode_options['cf7_custom_style_3_error_validation_messages_color']) && $cabin_qode_options['cf7_custom_style_3_error_validation_messages_color'] !== '') {
        $cf7_custom_style_3_validation_messages_style .= 'color: '.esc_attr($cabin_qode_options['cf7_custom_style_3_error_validation_messages_color']).';';
    }
    ?>
    <?php if($cf7_custom_style_1_button_styles !== ""){ ?>
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
        <?php echo esc_attr($cf7_custom_style_1_button_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_1_button_hover_styles !== ""){ ?>
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:hover,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
        <?php echo esc_attr($cf7_custom_style_1_button_hover_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_1_elements_styles !== ""){ ?>
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date,
        .cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea,
        .cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz{
        <?php echo esc_attr($cf7_custom_style_1_elements_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_1_elements_focus_styles !== ""){ ?>
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text:focus,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number:focus,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date:focus,
        .cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea:focus,
        .cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select:focus,
        .cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz:focus{
        <?php echo esc_attr($cf7_custom_style_1_elements_focus_styles); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_validation_messages_style !== ""){ ?>
        .cf7_custom_style_1 span.wpcf7-not-valid-tip{
        <?php echo esc_attr($cf7_custom_style_1_validation_messages_style); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_button_styles !== ""){ ?>
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
        <?php echo esc_attr($cf7_custom_style_2_button_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_2_button_hover_styles !== ""){ ?>
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:hover,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
        <?php echo esc_attr($cf7_custom_style_2_button_hover_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_2_elements_styles !== ""){ ?>
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-text,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-number,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-date,
        .cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea,
        .cf7_custom_style_2 select.wpcf7-form-control.wpcf7-select,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-quiz{
        <?php echo esc_attr($cf7_custom_style_2_elements_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_2_elements_focus_styles !== ""){ ?>
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-text:focus,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-number:focus,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-date:focus,
        .cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea:focus,
        .cf7_custom_style_2 select.wpcf7-form-control.wpcf7-select:focus,
        .cf7_custom_style_2 input.wpcf7-form-control.wpcf7-quiz:focus{
        <?php echo esc_attr($cf7_custom_style_2_elements_focus_styles); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_validation_messages_style !== ""){ ?>
        .cf7_custom_style_2 span.wpcf7-not-valid-tip{
        <?php echo esc_attr($cf7_custom_style_2_validation_messages_style); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_button_styles !== ""){ ?>
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
        <?php echo esc_attr($cf7_custom_style_3_button_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_3_button_hover_styles !== ""){ ?>
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:hover,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
        <?php echo esc_attr($cf7_custom_style_3_button_hover_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_3_elements_styles !== ""){ ?>
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-text,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-number,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-date,
        .cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea,
        .cf7_custom_style_3 select.wpcf7-form-control.wpcf7-select,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-quiz{
        <?php echo esc_attr($cf7_custom_style_3_elements_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_3_elements_focus_styles !== ""){ ?>
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-text:focus,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-number:focus,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-date:focus,
        .cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea:focus,
        .cf7_custom_style_3 select.wpcf7-form-control.wpcf7-select:focus,
        .cf7_custom_style_3 input.wpcf7-form-control.wpcf7-quiz:focus{
        <?php echo esc_attr($cf7_custom_style_3_elements_focus_styles); ?>
        }
    <?php } ?>

    <?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 ::-webkit-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 :-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 ::-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 :-ms-input-placeholde{
        <?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 ::-webkit-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 :-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 ::-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 :-ms-input-placeholde{
        <?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 ::-webkit-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 :-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 ::-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 :-ms-input-placeholde{
        <?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 input:focus::-webkit-input-placeholder,
        .cf7_custom_style_1 textarea:focus::-webkit-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 input:focus:-moz-placeholder,
        .cf7_custom_style_1 textarea:focus:-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 input:focus::-moz-placeholder,
        .cf7_custom_style_1 textarea:focus::-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_1 input:focus:-ms-input-placeholder,
        .cf7_custom_style_1 textarea:focus:-ms-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 input:focus::-webkit-input-placeholder,
        .cf7_custom_style_2 textarea:focus::-webkit-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 input:focus:-moz-placeholder,
        .cf7_custom_style_2 textarea:focus:-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 input:focus::-moz-placeholder,
        .cf7_custom_style_2 textarea:focus::-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_2 input:focus:-ms-input-placeholder,
        .cf7_custom_style_2 textarea:focus:-ms-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 input:focus::-webkit-input-placeholder,
        .cf7_custom_style_3 textarea:focus::-webkit-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 input:focus:-moz-placeholder,
        .cf7_custom_style_3 textarea:focus:-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 input:focus::-moz-placeholder,
        .cf7_custom_style_3 textarea:focus::-moz-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
        .cf7_custom_style_3 input:focus:-ms-input-placeholder,
        .cf7_custom_style_3 textarea:focus:-ms-input-placeholder{
        <?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
        }
    <?php } ?>
    <?php
} //end custom style contact form 7
?>

<?php
if(isset($cabin_qode_options['cf7_custom_style_1_element_textarea_height']) && $cabin_qode_options['cf7_custom_style_1_element_textarea_height'] !== '') {?>
    .cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea{
    height: <?php echo esc_attr($cabin_qode_options['cf7_custom_style_1_element_textarea_height']); ?>px;
    }
<?php } ?>
<?php
if(isset($cabin_qode_options['cf7_custom_style_2_element_textarea_height']) && $cabin_qode_options['cf7_custom_style_2_element_textarea_height'] !== '') {?>
    .cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea{
    height: <?php echo esc_attr($cabin_qode_options['cf7_custom_style_2_element_textarea_height']); ?>px;
    }
<?php } ?>
<?php
if(isset($cabin_qode_options['cf7_custom_style_3_element_textarea_height']) && $cabin_qode_options['cf7_custom_style_3_element_textarea_height'] !== '') {?>
    .cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea{
    height: <?php echo esc_attr($cabin_qode_options['cf7_custom_style_3_element_textarea_height']); ?>px;
    }
<?php } ?>


<?php
/* ==========================================================================
   Social sidebar styles
   ========================================================================== */

if(isset($cabin_qode_options['social_sidebar_icon_space_size']) && $cabin_qode_options['social_sidebar_icon_space_size'] !== '') { ?>
    #social_icons_widget .q_social_icon_holder{
    margin-bottom: <?php echo esc_attr($cabin_qode_options['social_sidebar_icon_space_size']);?>px!important;
    }
<?php }

/* ==========================================================================
   End of social sidebar styles
   ========================================================================== */

?>

<?php

/* ==========================================================================
  Pricing List Styles
   ========================================================================== */
$pricing_list_title_styles = array();

if(isset($cabin_qode_options['pricing_list_title_google_fonts']) && $cabin_qode_options['pricing_list_title_google_fonts'] !== '-1') {
    $pricing_list_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_list_title_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_list_title_fontsize']) && $cabin_qode_options['pricing_list_title_fontsize'] !== '') {
    $pricing_list_title_styles[] = 'font-size: '.$cabin_qode_options['pricing_list_title_fontsize'].'px';
}

if(isset($cabin_qode_options['pricing_list_title_lineheight']) && $cabin_qode_options['pricing_list_title_lineheight'] !== '') {
    $pricing_list_title_styles[] = 'line-height: '.$cabin_qode_options['pricing_list_title_lineheight'].'px';
}

if(isset($cabin_qode_options['pricing_list_title_letterspacing']) && $cabin_qode_options['pricing_list_title_letterspacing'] !== '') {
    $pricing_list_title_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_list_title_letterspacing'].'px';
}

if(isset($cabin_qode_options['pricing_list_title_fontweight']) && $cabin_qode_options['pricing_list_title_fontweight'] !== '') {
    $pricing_list_title_styles[] = 'font-weight: '.$cabin_qode_options['pricing_list_title_fontweight'];
}

if(isset($cabin_qode_options['pricing_list_title_fontstyle']) && $cabin_qode_options['pricing_list_title_fontstyle'] !== '') {
    $pricing_list_title_styles[] = 'font-style: '.$cabin_qode_options['pricing_list_title_fontstyle'];
}

if(isset($cabin_qode_options['pricing_list_title_texttransform']) && $cabin_qode_options['pricing_list_title_texttransform'] !== '') {
    $pricing_list_title_styles[] = 'text-transform: '.$cabin_qode_options['pricing_list_title_texttransform'];
}

if(isset($cabin_qode_options['pricing_list_title_color']) && $cabin_qode_options['pricing_list_title_color'] !== '') {
    $pricing_list_title_styles[] = 'color: '.$cabin_qode_options['pricing_list_title_color'];
}

if(isset($cabin_qode_options['pricing_list_title_margin_bottom']) && $cabin_qode_options['pricing_list_title_margin_bottom'] !== '') {
    $pricing_list_title_styles[] = 'margin-bottom: '.$cabin_qode_options['pricing_list_title_margin_bottom'].'px';
}

if(is_array($pricing_list_title_styles) && count($pricing_list_title_styles)) { ?>
    .qode_pricing_list .qode_pricing_list_title{
    <?php echo esc_attr(implode(';', $pricing_list_title_styles)); ?>
    }
<?php }

$pricing_list_highlighted_text_styles = array();

if(isset($cabin_qode_options['pricing_list_highlighted_text_google_fonts']) && $cabin_qode_options['pricing_list_highlighted_text_google_fonts'] !== '-1') {
    $pricing_list_highlighted_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_list_highlighted_text_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_fontsize']) && $cabin_qode_options['pricing_list_highlighted_text_fontsize'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'font-size: '.$cabin_qode_options['pricing_list_highlighted_text_fontsize'].'px';
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_lineheight']) && $cabin_qode_options['pricing_list_highlighted_text_lineheight'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'line-height: '.$cabin_qode_options['pricing_list_highlighted_text_lineheight'].'px';
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_letter_spacing']) && $cabin_qode_options['pricing_list_highlighted_text_letter_spacing'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_list_highlighted_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_fontweight']) && $cabin_qode_options['pricing_list_highlighted_text_fontweight'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'font-weight: '.$cabin_qode_options['pricing_list_highlighted_text_fontweight'];
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_fontstyle']) && $cabin_qode_options['pricing_list_highlighted_text_fontstyle'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'font-style: '.$cabin_qode_options['pricing_list_highlighted_text_fontstyle'];
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_texttransform']) && $cabin_qode_options['pricing_list_highlighted_text_texttransform'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'text-transform: '.$cabin_qode_options['pricing_list_highlighted_text_texttransform'];
}

if(isset($cabin_qode_options['pricing_list_highlighted_text_color']) && $cabin_qode_options['pricing_list_highlighted_text_color'] !== '') {
    $pricing_list_highlighted_text_styles[] = 'color: '.$cabin_qode_options['pricing_list_highlighted_text_color'];
}

if(is_array($pricing_list_highlighted_text_styles) && count($pricing_list_highlighted_text_styles)) { ?>
    ul.qode_pricing_list_holder .highlighted_item span.highlighted_text{
    <?php echo esc_attr(implode(';', $pricing_list_highlighted_text_styles)); ?>
    }
<?php }

if (isset($cabin_qode_options['pricing_list_highlighted_background_color']) && $cabin_qode_options['pricing_list_highlighted_background_color'] !== "") { ?>
    ul.qode_pricing_list_holder .highlighted_item ul{
    border-color: <?php echo esc_attr($cabin_qode_options['pricing_list_highlighted_background_color']); ?>;
    }
    ul.qode_pricing_list_holder .highlighted_item span.highlighted_text{
    background-color: <?php echo esc_attr($cabin_qode_options['pricing_list_highlighted_background_color']); ?>;
    }
<?php }


$pricing_list_new_icon_styles = array();

if(isset($cabin_qode_options['pricing_list_new_icon_size']) && $cabin_qode_options['pricing_list_new_icon_size'] !== '') {
    $pricing_list_new_icon_styles[] = 'font-size: '.$cabin_qode_options['pricing_list_new_icon_size'].'px';
}

if(isset($cabin_qode_options['pricing_list_new_background_color']) && $cabin_qode_options['pricing_list_new_background_color'] !== '') {
    $pricing_list_new_icon_styles[] = 'color: '.$cabin_qode_options['pricing_list_new_background_color'];
}

if(is_array($pricing_list_new_icon_styles) && count($pricing_list_new_icon_styles)) { ?>
    ul.qode_pricing_list_holder .new_item i {
    <?php echo esc_attr(implode(';', $pricing_list_new_icon_styles)); ?>
    }
<?php }

$pricing_list_new_text_styles = array();

if(isset($cabin_qode_options['pricing_list_new_text_google_fonts']) && $cabin_qode_options['pricing_list_new_text_google_fonts'] !== '-1') {
    $pricing_list_new_text_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['pricing_list_new_text_google_fonts']).', sans-serif';
}

if(isset($cabin_qode_options['pricing_list_new_text_fontsize']) && $cabin_qode_options['pricing_list_new_text_fontsize'] !== '') {
    $pricing_list_new_text_styles[] = 'font-size: '.$cabin_qode_options['pricing_list_new_text_fontsize'].'px';
}

if(isset($cabin_qode_options['pricing_list_new_text_lineheight']) && $cabin_qode_options['pricing_list_new_text_lineheight'] !== '') {
    $pricing_list_new_text_styles[] = 'line-height: '.$cabin_qode_options['pricing_list_new_text_lineheight'].'px';
}

if(isset($cabin_qode_options['pricing_list_new_text_letter_spacing']) && $cabin_qode_options['pricing_list_new_text_letter_spacing'] !== '') {
    $pricing_list_new_text_styles[] = 'letter-spacing: '.$cabin_qode_options['pricing_list_new_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['pricing_list_new_text_fontweight']) && $cabin_qode_options['pricing_list_new_text_fontweight'] !== '') {
    $pricing_list_new_text_styles[] = 'font-weight: '.$cabin_qode_options['pricing_list_new_text_fontweight'];
}

if(isset($cabin_qode_options['pricing_list_new_text_fontstyle']) && $cabin_qode_options['pricing_list_new_text_fontstyle'] !== '') {
    $pricing_list_new_text_styles[] = 'font-style: '.$cabin_qode_options['pricing_list_new_text_fontstyle'];
}

if(isset($cabin_qode_options['pricing_list_new_text_texttransform']) && $cabin_qode_options['pricing_list_new_text_texttransform'] !== '') {
    $pricing_list_new_text_styles[] = 'text-transform: '.$cabin_qode_options['pricing_list_new_text_texttransform'];
}

if(isset($cabin_qode_options['pricing_list_new_text_color']) && $cabin_qode_options['pricing_list_new_text_color'] !== '') {
    $pricing_list_new_text_styles[] = 'color: '.$cabin_qode_options['pricing_list_new_text_color'];
}

if(is_array($pricing_list_new_text_styles) && count($pricing_list_new_text_styles)) { ?>
    ul.qode_pricing_list_holder .new_item span{
    <?php echo esc_attr(implode(';', $pricing_list_new_text_styles)); ?>
    }
<?php }
/* ==========================================================================
  End Of Pricing List Styles
   ========================================================================== */
?>



<?php
$page_404_title_style = array();

if(isset($cabin_qode_options['404_title_font_family']) && $cabin_qode_options['404_title_font_family'] !== '-1') {
    $page_404_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['404_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['404_title_font_size']) && $cabin_qode_options['404_title_font_size'] !== '') {
    $page_404_title_style[] = 'font-size: '.$cabin_qode_options['404_title_font_size'].'px';
}

if(isset($cabin_qode_options['404_title_line_height']) && $cabin_qode_options['404_title_line_height'] !== '') {
    $page_404_title_style[] = 'line-height: '.$cabin_qode_options['404_title_line_height'].'px';
}

if(isset($cabin_qode_options['404_title_letter_spacing']) && $cabin_qode_options['404_title_letter_spacing'] !== '') {
    $page_404_title_style[] = 'letter-spacing: '.$cabin_qode_options['404_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['404_title_font_weight']) && $cabin_qode_options['404_title_font_weight'] !== '') {
    $page_404_title_style[] = 'font-weight: '.$cabin_qode_options['404_title_font_weight'];
}

if(isset($cabin_qode_options['404_title_font_style']) && $cabin_qode_options['404_title_font_style'] !== '') {
    $page_404_title_style[] = 'font-style: '.$cabin_qode_options['404_title_font_style'];
}

if(isset($cabin_qode_options['404_title_text_transform']) && $cabin_qode_options['404_title_text_transform'] !== '') {
    $page_404_title_style[] = 'text-transform: '.$cabin_qode_options['404_title_text_transform'];
}

if(isset($cabin_qode_options['404_title_color']) && $cabin_qode_options['404_title_color'] !== '') {
    $page_404_title_style[] = 'color: '.$cabin_qode_options['404_title_color'];
}

if(is_array($page_404_title_style) && count($page_404_title_style)) { ?>
    .page_not_found h2{
    <?php echo esc_attr(implode(';', $page_404_title_style)); ?>
    }
<?php } ?>

<?php
$page_404_text_style = array();

if(isset($cabin_qode_options['404_text_font_family']) && $cabin_qode_options['404_text_font_family'] !== '-1') {
    $page_404_text_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['404_text_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['404_text_font_size']) && $cabin_qode_options['404_text_font_size'] !== '') {
    $page_404_text_style[] = 'font-size: '.$cabin_qode_options['404_text_font_size'].'px';
}

if(isset($cabin_qode_options['404_text_line_height']) && $cabin_qode_options['404_text_line_height'] !== '') {
    $page_404_text_style[] = 'line-height: '.$cabin_qode_options['404_text_line_height'].'px';
}

if(isset($cabin_qode_options['404_text_letter_spacing']) && $cabin_qode_options['404_text_letter_spacing'] !== '') {
    $page_404_text_style[] = 'letter-spacing: '.$cabin_qode_options['404_text_letter_spacing'].'px';
}

if(isset($cabin_qode_options['404_text_font_weight']) && $cabin_qode_options['404_text_font_weight'] !== '') {
    $page_404_text_style[] = 'font-weight: '.$cabin_qode_options['404_text_font_weight'];
}

if(isset($cabin_qode_options['404_text_font_style']) && $cabin_qode_options['404_text_font_style'] !== '') {
    $page_404_text_style[] = 'font-style: '.$cabin_qode_options['404_text_font_style'];
}

if(isset($cabin_qode_options['404_text_text_transform']) && $cabin_qode_options['404_text_text_transform'] !== '') {
    $page_404_text_style[] = 'text-transform: '.$cabin_qode_options['404_text_text_transform'];
}

if(isset($cabin_qode_options['404_text_color']) && $cabin_qode_options['404_text_color'] !== '') {
    $page_404_text_style[] = 'color: '.$cabin_qode_options['404_text_color'];
}

if(is_array($page_404_text_style) && count($page_404_text_style)) { ?>
    .page_not_found h4{
    <?php echo esc_attr(implode(';', $page_404_text_style)); ?>
    }
<?php } ?>

<?php

$social_sidebar_style = array();
if(isset($cabin_qode_options['social_sidebar_icon_position_top']) && $cabin_qode_options['social_sidebar_icon_position_top'] !== '') {
    if((strstr($cabin_qode_options['social_sidebar_icon_position_top'], 'px', true)) || (strstr($cabin_qode_options['social_sidebar_icon_position_top'], '%', true))){
        $social_sidebar_style[] = 'top: '.$cabin_qode_options['social_sidebar_icon_position_top'];
    }
    $social_sidebar_style[] = 'top: '.$cabin_qode_options['social_sidebar_icon_position_top'].'px';
}
if(isset($cabin_qode_options['social_sidebar_icon_position_right']) && $cabin_qode_options['social_sidebar_icon_position_right'] !== '') {
    if((strstr($cabin_qode_options['social_sidebar_icon_position_top'], 'px', true)) || (strstr($cabin_qode_options['social_sidebar_icon_position_top'], '%', true))){
        $social_sidebar_style[] = 'right: '.$cabin_qode_options['social_sidebar_icon_position_right'];
    }
    $social_sidebar_style[] = 'right: '.$cabin_qode_options['social_sidebar_icon_position_right'].'px';
}

if(is_array($social_sidebar_style) && count($social_sidebar_style)) { ?>
    #social_icons_widget{
    <?php echo esc_attr(implode(';', $social_sidebar_style)); ?>
    }
<?php } ?>




<?php

//Title styles

$title_content_background_color_rgb = array();
$title_content_background_color_opacity = "";

if (isset($cabin_qode_options['title_content_background_color']) && !empty($cabin_qode_options['title_content_background_color'])) {
    $title_content_background_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['title_content_background_color']);
}

if (isset($cabin_qode_options['title_content_background_opacity']) && !empty($cabin_qode_options['title_content_background_opacity'])) {
    $title_content_background_color_opacity = $cabin_qode_options['title_content_background_opacity'];
}
else{
    $title_content_background_color_opacity = 1;
}

if (is_array($title_content_background_color_rgb) && count($title_content_background_color_rgb)) { ?>
    .title_content_background{
    background-color: rgba(<?php echo esc_attr($title_content_background_color_rgb[0].','.$title_content_background_color_rgb[1].','.$title_content_background_color_rgb[2].','.$title_content_background_color_opacity); ?>);
    }

<?php }?>
<?php

$title_span_background_color_rgb = array();
$title_span_opacity = "";
$title_span_padding = array();

if (isset($cabin_qode_options['title_span_background_color']) && !empty($cabin_qode_options['title_span_background_color'])) {
    $title_span_background_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['title_span_background_color']);
}

if (isset($cabin_qode_options['title_span_background_opacity']) && !empty($cabin_qode_options['title_span_background_opacity'])) {
    $title_span_opacity = $cabin_qode_options['title_span_background_opacity'];
}
else {
    $title_span_opacity = 1;
}

if (isset($cabin_qode_options['title_span_top_padding']) && !empty($cabin_qode_options['title_span_top_padding'])) {
    $title_span_padding[] = 'padding-top: ' . $cabin_qode_options['title_span_top_padding'] . 'px';
}
if (isset($cabin_qode_options['title_span_right_padding']) && !empty($cabin_qode_options['title_span_right_padding'])) {
    $title_span_padding[] = 'padding-right: ' . $cabin_qode_options['title_span_right_padding'] . 'px';
}
if (isset($cabin_qode_options['title_span_bottom_padding']) && !empty($cabin_qode_options['title_span_bottom_padding'])) {
    $title_span_padding[] = 'padding-bottom: ' . $cabin_qode_options['title_span_bottom_padding'] . 'px';
}
if (isset($cabin_qode_options['title_span_left_padding']) && !empty($cabin_qode_options['title_span_left_padding'])) {
    $title_span_padding[] = 'padding-left: ' . $cabin_qode_options['title_span_left_padding'] . 'px';
}
?>

<?php if ((is_array($title_span_padding) && count($title_span_padding)) || (is_array($title_span_background_color_rgb) && count($title_span_background_color_rgb))) { ?>
    .title_subtitle_holder h1 > span,.title_subtitle_holder h1:not(.title_in_box) .separator_content{
    <?php if (is_array($title_span_background_color_rgb) && count($title_span_background_color_rgb)) { ?>
        background-color: rgba(<?php echo esc_attr($title_span_background_color_rgb[0].','.$title_span_background_color_rgb[1].','.$title_span_background_color_rgb[2].','.$title_span_opacity); ?>);
    <?php } ?>
    <?php if (is_array($title_span_padding) && count($title_span_padding)) {
        echo esc_attr(implode(';',$title_span_padding));
    }?>
    }
<?php } ?>


<?php

$subtitle_span_background_color_rgb = array();
$subtitle_span_opacity = "";
$subtitle_span_padding = array();

if (isset($cabin_qode_options['subtitle_span_background_color']) && !empty($cabin_qode_options['subtitle_span_background_color'])) {
    $subtitle_span_background_color_rgb = cabin_qode_hex2rgb($cabin_qode_options['subtitle_span_background_color']);
}

if (isset($cabin_qode_options['subtitle_span_background_opacity']) && !empty($cabin_qode_options['subtitle_span_background_opacity'])) {
    $subtitle_span_opacity = $cabin_qode_options['subtitle_span_background_opacity'];
}
else{
    $subtitle_span_opacity = 1;
}

if (isset($cabin_qode_options['subtitle_span_top_padding']) && !empty($cabin_qode_options['subtitle_span_top_padding'])) {
    $subtitle_span_padding[] = 'padding-top: ' . $cabin_qode_options['subtitle_span_top_padding'] . 'px';
}
if (isset($cabin_qode_options['subtitle_span_right_padding']) && !empty($cabin_qode_options['subtitle_span_right_padding'])) {
    $subtitle_span_padding[] = 'padding-right: ' . $cabin_qode_options['subtitle_span_right_padding'] . 'px';
}
if (isset($cabin_qode_options['subtitle_span_bottom_padding']) && !empty($cabin_qode_options['subtitle_span_bottom_padding'])) {
    $subtitle_span_padding[] = 'padding-bottom: ' . $cabin_qode_options['subtitle_span_bottom_padding'] . 'px';
}
if (isset($cabin_qode_options['subtitle_span_left_padding']) && !empty($cabin_qode_options['subtitle_span_left_padding'])) {
    $subtitle_span_padding[] = 'padding-left: ' . $cabin_qode_options['subtitle_span_left_padding'] . 'px';
}?>


<?php if ((is_array($subtitle_span_background_color_rgb) && count($subtitle_span_background_color_rgb)) || (is_array($subtitle_span_padding) && count($subtitle_span_padding))) { ?>
    .title_subtitle_holder .subtitle:not(.subtitle_like_separator) > span, .subtitle_like_separator:not(.subtitle_in_box) .vc_text_separator.full .separator_content{
    <?php if (is_array($subtitle_span_background_color_rgb) && count($subtitle_span_background_color_rgb)) { ?>
        background-color: rgba(<?php echo esc_attr($subtitle_span_background_color_rgb[0].','.$subtitle_span_background_color_rgb[1].','.$subtitle_span_background_color_rgb[2].','.$subtitle_span_opacity); ?>);
    <?php } ?>
    <?php if (is_array($subtitle_span_padding) && count($subtitle_span_padding)) {
        echo esc_attr(implode(';',$subtitle_span_padding));
    }?>
    }
<?php } ?>

<?php if (!empty($cabin_qode_options['woo_input_background_color']) || !empty($cabin_qode_options['woo_input_border_color']) || !empty($cabin_qode_options['woo_input_text_color'])) { ?>
    .woocommerce input[type="text"]:not(.qode_search_field),
    .woocommerce-page input[type="text"]:not(.qode_search_field),
    .woocommerce  input[type="email"],
    .woocommerce-page  input[type="email"],
    .woocommerce  textarea,
    .woocommerce-page textarea,
    .woocommerce  input[type="password"],
    .woocommerce-page input[type="password"],
    .woocommerce .chosen-container.chosen-container-single .chosen-single,
    .woocommerce-page .chosen-container.chosen-container-single .chosen-single,
    .woocommerce-checkout .chosen-container.chosen-container-single .chosen-single,
    .woocommerce table.cart div.coupon .input-text,
    .woocommerce-page table.cart div.coupon .input-text,
    .woocommerce div.cart-collaterals .select2-container .select2-choice,
    .woocommerce-page div.cart-collaterals .select2-container .select2-choice,
    .woocommerce #commentform input[type="text"],
    .woocommerce #commentform input[type="email"],
    .woocommerce #commentform textarea{
    <?php if (!empty($cabin_qode_options['woo_input_background_color'])) { ?>background-color: <?php echo esc_attr($cabin_qode_options['woo_input_background_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['woo_input_border_color'])) { ?>border-color: <?php echo esc_attr($cabin_qode_options['woo_input_border_color']);  ?>!important; <?php } ?>
    <?php if (!empty($cabin_qode_options['woo_input_text_color'])) { ?>color:<?php echo esc_attr($cabin_qode_options['woo_input_text_color']);  ?>; <?php } ?>
    }
<?php } ?>

<?php if(!empty($cabin_qode_options['woo_input_border_width'])) { ?>
    .woocommerce input[type="text"]:not(.qode_search_field),
    .woocommerce-page input[type="text"]:not(.qode_search_field),
    .woocommerce input[type="email"],
    .woocommerce-page  input[type="email"],
    .woocommerce textarea,
    .woocommerce-page textarea,
    .woocommerce input[type="password"],
    .woocommerce-page input[type="password"],
    .woocommerce table.cart div.coupon .input-text,
    .woocommerce-page table.cart div.coupon .input-text,
    .select2-container .select2-choice,
    .woocommerce .chosen-container.chosen-container-single .chosen-single,
    .woocommerce-page .chosen-container.chosen-container-single .chosen-single,
    .woocommerce-checkout .chosen-container.chosen-container-single .chosen-single,
    .woocommerce select#pa_color,
    .woocommerce #commentform input[type="text"],
    .woocommerce #commentform input[type="email"], .woocommerce #commentform textarea{
    border-width: <?php echo esc_attr($cabin_qode_options['woo_input_border_width']); ?>px;
    }
<?php } ?>


<?php if(!empty($cabin_qode_options['woo_input_focus_text_color']) || !empty($cabin_qode_options['woo_input_focus_background_color']) || !empty($cabin_qode_options['woo_input_focus_border_color'])) { ?>
    .woocommerce input[type="text"]:not(.qode_search_field):focus,
    .woocommerce-page input[type="text"]:not(.qode_search_field):focus,
    .woocommerce input[type="email"]:focus,.woocommerce-page input[type="email"]:focus,
    .woocommerce textarea:focus,.woocommerce-page textarea:focus,
    .woocommerce input[type="password"]:focus,
    .woocommerce-page input[type="password"]:focus,
    .woocommerce table.cart div.coupon .input-text:focus,
    .woocommerce-page table.cart div.coupon .input-text:focus,
    .woocommerce #commentform input[type="text"]:focus,
    .woocommerce #commentform input[type="email"]:focus, .woocommerce #commentform textarea:focus{
    <?php if (!empty($cabin_qode_options['woo_input_focus_text_color'])) { ?>color: <?php echo esc_attr($cabin_qode_options['woo_input_focus_text_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['woo_input_focus_background_color'])) { ?>background-color: <?php echo esc_attr($cabin_qode_options['woo_input_focus_background_color']);  ?>; <?php } ?>
    <?php if (!empty($cabin_qode_options['woo_input_focus_border_color'])) { ?>border-color: <?php echo esc_attr($cabin_qode_options['woo_input_focus_border_color']);  ?>!important; <?php } ?>
    }
<?php } ?>

<?php

$woo_message_box_style = array();

if(isset($cabin_qode_options['woo_message_box_text_color']) && $cabin_qode_options['woo_message_box_text_color'] !== '') {
    $woo_message_box_style[] = 'color: '.esc_attr($cabin_qode_options['woo_message_box_text_color']);
}

if(isset($cabin_qode_options['woo_message_box_font_size']) && $cabin_qode_options['woo_message_box_font_size'] !== '') {
    $woo_message_box_style[] = 'font-size: '.esc_attr($cabin_qode_options['woo_message_box_font_size'].'px');
}

if(isset($cabin_qode_options['woo_message_box_background_color']) && $cabin_qode_options['woo_message_box_background_color'] !== '') {
    $woo_message_box_style[] = 'background-color: '.esc_attr($cabin_qode_options['woo_message_box_background_color']);
}

if(isset($cabin_qode_options['woo_message_box_border_color']) && $cabin_qode_options['woo_message_box_border_color'] !== '') {
    $woo_message_box_style[] = 'border-color: '.esc_attr($cabin_qode_options['woo_message_box_border_color']);?>
    .woocommerce div.message,
    .woocommerce .woocommerce-message,
    .woocommerce .woocommerce-error,
    .woocommerce .woocommerce-info,
    .myaccount_user{
    border-width: 1px;
    border-style:solid;
    }
    <?php
}

if(is_array($woo_message_box_style) && count($woo_message_box_style)) { ?>
    .woocommerce div.message,
    .woocommerce .woocommerce-message,
    .woocommerce .woocommerce-error,
    .woocommerce .woocommerce-info,
    .myaccount_user{
    <?php echo esc_attr(implode(';', $woo_message_box_style)); ?>
    }
<?php } ?>


<?php if (isset($cabin_qode_options['woo_products_box_text_align']) && !empty($cabin_qode_options['woo_products_box_text_align'])) { ?>
    .woocommerce-page ul.products li.product,
    .woocommerce ul.products li.product{
    text-align: <?php echo esc_attr($cabin_qode_options['woo_products_box_text_align']); ?>;
    }
    <?php if (($cabin_qode_options['woo_products_box_text_align'])!= "center") { ?>
        .woocommerce .product_info_box .separator.medium,
        .woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price{
        float:  <?php echo esc_attr($cabin_qode_options['woo_products_box_text_align']); ?>;
        }
    <?php }
    if(($cabin_qode_options['woo_products_box_text_align'])== "right"){ ?>
        .woocommerce-page ul.products li.product .product_info_box .shop_lightbox{
        clear:both;
        margin-top: 7px;
        }
    <?php } elseif (($cabin_qode_options['woo_products_box_text_align']) == "center"){?>
        .woocommerce .product_info_box .separator.medium{
        float: none;
        margin-left: auto;
        margin-right: auto;
        }
        .woocommerce-page ul.products li.product .product_info_box .shop_lightbox{
        float:none;
        }
    <?php }} ?>

<?php

if(isset($cabin_qode_options['woo_products_item_info_box_background_color']) && $cabin_qode_options['woo_products_item_info_box_background_color'] !== '') {?>
    .woocommerce ul.products li.product .product_info_box{
    background-color:<?php echo esc_attr($cabin_qode_options['woo_products_item_info_box_background_color']);?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_products_item_info_box_padding']) && $cabin_qode_options['woo_products_item_info_box_padding'] != ""){ ?>
    .woocommerce-page ul.products li.product>.product_info_box,
    .woocommerce ul.products li.product>.product_info_box{
    padding: <?php echo esc_attr($cabin_qode_options['woo_products_item_info_box_padding']); ?>;
    }
<?php } ?>

<?php

if(isset($cabin_qode_options['woo_products_list_margin_top']) && $cabin_qode_options['woo_products_list_margin_top'] !== '') { ?>
    .woocommerce-result-count,
    .woocommerce-ordering{
    padding-top: <?php echo esc_attr($cabin_qode_options['woo_products_list_margin_top']).'px';?>
    }
<?php } ?>

<?php
$woo_products_category_style = array();

if(isset($cabin_qode_options['woo_products_category_font_family']) && $cabin_qode_options['woo_products_category_font_family'] !== '-1') {
    $woo_products_category_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_category_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_category_font_size']) && $cabin_qode_options['woo_products_category_font_size'] !== '') {
    $woo_products_category_style[] = 'font-size: '.$cabin_qode_options['woo_products_category_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_category_line_height']) && $cabin_qode_options['woo_products_category_line_height'] !== '') {
    $woo_products_category_style[] = 'line-height: '.$cabin_qode_options['woo_products_category_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_category_letter_spacing']) && $cabin_qode_options['woo_products_category_letter_spacing'] !== '') {
    $woo_products_category_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_category_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_category_font_weight']) && $cabin_qode_options['woo_products_category_font_weight'] !== '') {
    $woo_products_category_style[] = 'font-weight: '.$cabin_qode_options['woo_products_category_font_weight'];
}

if(isset($cabin_qode_options['woo_products_category_font_style']) && $cabin_qode_options['woo_products_category_font_style'] !== '') {
    $woo_products_category_style[] = 'font-style: '.$cabin_qode_options['woo_products_category_font_style'];
}

if(isset($cabin_qode_options['woo_products_category_text_transform']) && $cabin_qode_options['woo_products_category_text_transform'] !== '') {
    $woo_products_category_style[] = 'text-transform: '.$cabin_qode_options['woo_products_category_text_transform'];
}

if(isset($cabin_qode_options['woo_products_category_color']) && $cabin_qode_options['woo_products_category_color'] !== '') {
    $woo_products_category_style[] = 'color: '.$cabin_qode_options['woo_products_category_color'];
}

if(is_array($woo_products_category_style) && count($woo_products_category_style)) { ?>
    .woocommerce ul.products li.product span.product-categories a,
    .woocommerce-page ul.products li.product span.product-categories a{
    <?php echo esc_attr(implode(';', $woo_products_category_style)); ?>
    }
<?php } ?>

<?php if (isset($cabin_qode_options['woo_products_category_hide_category']) && $cabin_qode_options['woo_products_category_hide_category'] == "yes") { ?>
    .woocommerce ul.products li.product span.product-categories,
    .woocommerce-page ul.products li.product span.product-categories{
    display:none;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['woo_products_title_separator_hide_title_separator']) && $cabin_qode_options['woo_products_title_separator_hide_title_separator'] == "no" && !empty($cabin_qode_options['woo_products_title_separator_color'])) { ?>
    .woocommerce .product_info_box .separator_holder .separator.medium{
    border-color: <?php echo esc_attr($cabin_qode_options['woo_products_title_separator_color']); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['woo_products_title_separator_hide_title_separator']) && $cabin_qode_options['woo_products_title_separator_hide_title_separator'] == "no" && !empty($cabin_qode_options['woo_products_title_separator_style'])) { ?>
    .woocommerce .product_info_box .separator_holder .separator.medium{
    border-style: <?php echo esc_attr($cabin_qode_options['woo_products_title_separator_style']); ?>;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['woo_products_lightbox_icon_color']) && $cabin_qode_options['woo_products_lightbox_icon_color'] != '') { ?>
    .woocommerce-page ul.products li.product .product_info_box .shop_price_lightbox_holder span:before,
    .woocommerce ul.products li.product .product_info_box .shop_price_lightbox_holder span:before{
    color: <?php echo esc_attr($cabin_qode_options['woo_products_lightbox_icon_color']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['woo_products_list_type']) && $cabin_qode_options['woo_products_list_type'] == "type1" && isset($cabin_qode_options['woo_products_enable_item_borders']) && $cabin_qode_options['woo_products_enable_item_borders'] == "yes"){ ?>

    <?php if(isset($cabin_qode_options['woo_products_item_borders_style']) && $cabin_qode_options['woo_products_item_borders_style'] == "around_item"){ ?>
        .woocommerce-page ul.products li.product,
        .woocommerce ul.products li.product,
        .woocommerce .product .images a img{
        border-width:1px;
        <?php if(isset($cabin_qode_options['woo_products_item_borders_color']) && $cabin_qode_options['woo_products_item_borders_color'] !== ""){ ?>
            border-color: <?php echo esc_attr($cabin_qode_options['woo_products_item_borders_color']); ?>;
        <?php } ?>
        }
    <?php } ?>

    <?php if(isset($cabin_qode_options['woo_products_item_borders_style']) && $cabin_qode_options['woo_products_item_borders_style'] == "around_image"){ ?>
        .woocommerce-page ul.products li.product .top-product-section,
        .woocommerce ul.products li.product .top-product-section,
        .woocommerce .product .images a img{
        border-width:1px;
        <?php if(isset($cabin_qode_options['woo_products_item_borders_color']) && $cabin_qode_options['woo_products_item_borders_color'] !== ""){ ?>
            border-color: <?php echo esc_attr($cabin_qode_options['woo_products_item_borders_color']); ?>;
        <?php } ?>
        }
    <?php } ?>

    <?php if(isset($cabin_qode_options['woo_products_item_info_padding']) && $cabin_qode_options['woo_products_item_info_padding'] != ""){ ?>
        .woocommerce-page ul.produwoo_products_box_text_aligncts li.product .product_info_box,
        .woocommerce ul.products li.product .product_info_box{
        padding: <?php echo esc_attr($cabin_qode_options['woo_products_item_info_padding']); ?>;
        }
    <?php } ?>
<?php } ?>


<?php
$woo_products_title_style = array();

if(isset($cabin_qode_options['woo_products_title_font_family']) && $cabin_qode_options['woo_products_title_font_family'] !== '-1') {
    $woo_products_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_title_font_size']) && $cabin_qode_options['woo_products_title_font_size'] !== '') {
    $woo_products_title_style[] = 'font-size: '.$cabin_qode_options['woo_products_title_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_title_line_height']) && $cabin_qode_options['woo_products_title_line_height'] !== '') {
    $woo_products_title_style[] = 'line-height: '.$cabin_qode_options['woo_products_title_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_title_letter_spacing']) && $cabin_qode_options['woo_products_title_letter_spacing'] !== '') {
    $woo_products_title_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_title_font_weight']) && $cabin_qode_options['woo_products_title_font_weight'] !== '') {
    $woo_products_title_style[] = 'font-weight: '.$cabin_qode_options['woo_products_title_font_weight'];
}

if(isset($cabin_qode_options['woo_products_title_font_style']) && $cabin_qode_options['woo_products_title_font_style'] !== '') {
    $woo_products_title_style[] = 'font-style: '.$cabin_qode_options['woo_products_title_font_style'];
}

if(isset($cabin_qode_options['woo_products_title_text_transform']) && $cabin_qode_options['woo_products_title_text_transform'] !== '') {
    $woo_products_title_style[] = 'text-transform: '.$cabin_qode_options['woo_products_title_text_transform'];
}

if(isset($cabin_qode_options['woo_products_title_color']) && $cabin_qode_options['woo_products_title_color'] !== '') {
    $woo_products_title_style[] = 'color: '.$cabin_qode_options['woo_products_title_color'];
}

if(is_array($woo_products_title_style) && count($woo_products_title_style)) { ?>
    .woocommerce ul.products li.product span.product-title,
    .woocommerce aside ul.product_list_widget li a,
    aside ul.product_list_widget li a{
    <?php echo esc_attr(implode(';', $woo_products_title_style)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['woo_products_title_line_margin_bottom']) && $cabin_qode_options['woo_products_title_line_margin_bottom'] !== '') {?>
    .woocommerce ul.products li.product a.product-category, .woocommerce-page ul.products li.product a.product-category{
    margin-bottom : <?php echo esc_attr($cabin_qode_options['woo_products_title_line_margin_bottom']).'px' ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_products_title_hover_color']) && !empty($cabin_qode_options['woo_products_title_hover_color'])) { ?>
    .woocommerce ul.products li.product span.product-title:hover,
    .woocommerce aside ul.product_list_widget li > a:hover,
    aside ul.product_list_widget li > a:hover{
    color: <?php echo esc_attr($cabin_qode_options['woo_products_title_hover_color']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['woo_products_item_shader_color']) && !empty($cabin_qode_options['woo_products_item_shader_color'])) { ?>
    .woocommerce ul.products li.product .product_image_overlay{
    background-color: <?php echo esc_attr($cabin_qode_options['woo_products_item_shader_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_products_item_shader_opacity']) && !empty($cabin_qode_options['woo_products_item_shader_opacity'])) { ?>
    .woocommerce ul.products li.product:hover .product_image_overlay{
    opacity: <?php echo esc_attr($cabin_qode_options['woo_products_item_shader_opacity']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['woo_products_enable_button_icons']) && ($cabin_qode_options['woo_products_enable_button_icons']=="yes")){ ?>
    .woocommerce ul.products li.product .add-to-cart-button:after,
    .woocommerce ul.products li.product .added_to_cart:after{
    padding:0 0 0 5px;
    font-family: 'ElegantIcons';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    }
    .woocommerce ul.products li.product .add-to-cart-button:after{
    content: "\4c";
    }

    .woocommerce ul.products li.product .added_to_cart:after{
    content: "\e015";
    }
<?php } ?>


<?php
$woo_products_price_style = array();

if(isset($cabin_qode_options['woo_products_price_font_family']) && $cabin_qode_options['woo_products_price_font_family'] !== '-1') {
    $woo_products_price_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_price_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_price_font_size']) && $cabin_qode_options['woo_products_price_font_size'] !== '') {
    $woo_products_price_style[] = 'font-size: '.$cabin_qode_options['woo_products_price_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_price_line_height']) && $cabin_qode_options['woo_products_price_line_height'] !== '') {
    $woo_products_price_style[] = 'line-height: '.$cabin_qode_options['woo_products_price_line_height'].'px';?>
    .woocommerce ul.products.type1 li.product .shop_price_lightbox_holder,
    .woocommerce-page ul.products.type1 li.product .shop_price_lightbox_holder{
    line-height: <?php echo esc_attr($cabin_qode_options['woo_products_price_line_height'].'px'); ?>
    }
    <?php
}

if(isset($cabin_qode_options['woo_products_price_letter_spacing']) && $cabin_qode_options['woo_products_price_letter_spacing'] !== '') {
    $woo_products_price_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_price_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_price_font_weight']) && $cabin_qode_options['woo_products_price_font_weight'] !== '') {
    $woo_products_price_style[] = 'font-weight: '.$cabin_qode_options['woo_products_price_font_weight'];
}

if(isset($cabin_qode_options['woo_products_price_font_style']) && $cabin_qode_options['woo_products_price_font_style'] !== '') {
    $woo_products_price_style[] = 'font-style: '.$cabin_qode_options['woo_products_price_font_style'];
}

if(isset($cabin_qode_options['woo_products_price_text_transform']) && $cabin_qode_options['woo_products_price_text_transform'] !== '') {
    $woo_products_price_style[] = 'text-transform: '.$cabin_qode_options['woo_products_price_text_transform'];
}

if(isset($cabin_qode_options['woo_products_price_color']) && $cabin_qode_options['woo_products_price_color'] !== '') {
    $woo_products_price_style[] = 'color: '.$cabin_qode_options['woo_products_price_color'];
}

if(is_array($woo_products_price_style) && count($woo_products_price_style)) { ?>
    .woocommerce ul.products li.product .price,
    .woocommerce-page ul.products li.product .price,
    .woocommerce ul.products li.product del .amount, .woocommerce-page ul.products li.product del .amount,
    .woocommerce aside ul.product_list_widget li span.amount,
    aside ul.product_list_widget li span.amount{
    <?php echo esc_attr(implode(';', $woo_products_price_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_products_price_old_font_size']) && !empty($cabin_qode_options['woo_products_price_old_font_size'])) { ?>
    .woocommerce-page ul.products li.product del .amount,
    .woocommerce ul.products li.product del .amount,
    .woocommerce-page ul.products li.product del,
    .woocommerce ul.products li.product del,
    .woocommerce aside ul.product_list_widget li del span.amount,
    aside ul.product_list_widget li del span.amount{
    font-size: <?php echo esc_attr($cabin_qode_options['woo_products_price_old_font_size'].'px'); ?>;
    }
<?php }

if(isset($cabin_qode_options['woo_products_price_old_color']) && !empty($cabin_qode_options['woo_products_price_old_color'])) { ?>
    .woocommerce-page ul.products li.product del .amount,
    .woocommerce ul.products li.product del .amount,
    .woocommerce-page ul.products li.product del,
    .woocommerce ul.products li.product del,
    .woocommerce aside ul.product_list_widget li del span.amount,
    aside ul.product_list_widget li del span.amount{
    color: <?php echo esc_attr($cabin_qode_options['woo_products_price_old_color']); ?>;
    }
<?php } ?>

<?php
$woo_products_sale_style = array();

if(isset($cabin_qode_options['woo_products_sale_font_family']) && $cabin_qode_options['woo_products_sale_font_family'] !== '-1') {
    $woo_products_sale_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_sale_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_sale_font_size']) && $cabin_qode_options['woo_products_sale_font_size'] !== '') {
    $woo_products_sale_style[] = 'font-size: '.$cabin_qode_options['woo_products_sale_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_line_height']) && $cabin_qode_options['woo_products_sale_line_height'] !== '') {
    $woo_products_sale_style[] = 'line-height: '.$cabin_qode_options['woo_products_sale_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_letter_spacing']) && $cabin_qode_options['woo_products_sale_letter_spacing'] !== '') {
    $woo_products_sale_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_sale_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_font_weight']) && $cabin_qode_options['woo_products_sale_font_weight'] !== '') {
    $woo_products_sale_style[] = 'font-weight: '.$cabin_qode_options['woo_products_sale_font_weight'];
}

if(isset($cabin_qode_options['woo_products_sale_font_style']) && $cabin_qode_options['woo_products_sale_font_style'] !== '') {
    $woo_products_sale_style[] = 'font-style: '.$cabin_qode_options['woo_products_sale_font_style'];
}

if(isset($cabin_qode_options['woo_products_sale_text_transform']) && $cabin_qode_options['woo_products_sale_text_transform'] !== '') {
    $woo_products_sale_style[] = 'text-transform: '.$cabin_qode_options['woo_products_sale_text_transform'];
}

if(isset($cabin_qode_options['woo_products_sale_color']) && $cabin_qode_options['woo_products_sale_color'] !== '') {
    $woo_products_sale_style[] = 'color: '.$cabin_qode_options['woo_products_sale_color'];
}

if(isset($cabin_qode_options['woo_products_sale_background_color']) && $cabin_qode_options['woo_products_sale_background_color'] !== '') {
    $woo_products_sale_style[] = 'background-color: '.$cabin_qode_options['woo_products_sale_background_color'];
}

if(isset($cabin_qode_options['woo_products_sale_border_radius']) && $cabin_qode_options['woo_products_sale_border_radius'] !== '') {
    $woo_products_sale_style[] = 'border-radius: '.$cabin_qode_options['woo_products_sale_border_radius'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_top_position']) && $cabin_qode_options['woo_products_sale_top_position'] !== '') {
    $woo_products_sale_style[] = 'top: '.$cabin_qode_options['woo_products_sale_top_position'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_left_position']) && $cabin_qode_options['woo_products_sale_left_position'] !== '') {
    $woo_products_sale_style[] = 'left: '.$cabin_qode_options['woo_products_sale_left_position'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_width']) && $cabin_qode_options['woo_products_sale_width'] !== '') {
    $woo_products_sale_style[] = 'width: '.$cabin_qode_options['woo_products_sale_width'].'px';
}

if(isset($cabin_qode_options['woo_products_sale_height']) && $cabin_qode_options['woo_products_sale_height'] !== '') {
    $woo_products_sale_style[] = 'height: '.$cabin_qode_options['woo_products_sale_height'].'px';
}


if(is_array($woo_products_sale_style) && count($woo_products_sale_style)) { ?>
    .woocommerce .product .onsale:not(.out-of-stock-button), .woocommerce .product .single-onsale{
    <?php echo esc_attr(implode(';', $woo_products_sale_style)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['woo_products_sale_right_position']) && $cabin_qode_options['woo_products_sale_right_position'] !== '') { ?>
    .woocommerce .product .onsale:not(.out-of-stock-button), .woocommerce .product .single-onsale{
    left:auto;
    right: <?php echo esc_attr($cabin_qode_options['woo_products_sale_right_position']).'px';?>
    }
<?php } ?>

<?php
$woo_products_out_of_stock_style = array();

if(isset($cabin_qode_options['woo_products_out_of_stock_font_family']) && $cabin_qode_options['woo_products_out_of_stock_font_family'] !== '-1') {
    $woo_products_out_of_stock_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_out_of_stock_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_font_size']) && $cabin_qode_options['woo_products_out_of_stock_font_size'] !== '') {
    $woo_products_out_of_stock_style[] = 'font-size: '.$cabin_qode_options['woo_products_out_of_stock_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_line_height']) && $cabin_qode_options['woo_products_out_of_stock_line_height'] !== '') {
    $woo_products_out_of_stock_style[] = 'line-height: '.$cabin_qode_options['woo_products_out_of_stock_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_letter_spacing']) && $cabin_qode_options['woo_products_out_of_stock_letter_spacing'] !== '') {
    $woo_products_out_of_stock_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_out_of_stock_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_font_weight']) && $cabin_qode_options['woo_products_out_of_stock_font_weight'] !== '') {
    $woo_products_out_of_stock_style[] = 'font-weight: '.$cabin_qode_options['woo_products_out_of_stock_font_weight'];
}

if(isset($cabin_qode_options['woo_products_out_of_stock_font_style']) && $cabin_qode_options['woo_products_out_of_stock_font_style'] !== '') {
    $woo_products_out_of_stock_style[] = 'font-style: '.$cabin_qode_options['woo_products_out_of_stock_font_style'];
}

if(isset($cabin_qode_options['woo_products_out_of_stock_text_transform']) && $cabin_qode_options['woo_products_out_of_stock_text_transform'] !== '') {
    $woo_products_out_of_stock_style[] = 'text-transform: '.$cabin_qode_options['woo_products_out_of_stock_text_transform'];
}

if(isset($cabin_qode_options['woo_products_out_of_stock_color']) && $cabin_qode_options['woo_products_out_of_stock_color'] !== '') {
    $woo_products_out_of_stock_style[] = 'color: '.$cabin_qode_options['woo_products_out_of_stock_color'];
}

if(isset($cabin_qode_options['woo_products_out_of_stock_background_color']) && $cabin_qode_options['woo_products_out_of_stock_background_color'] !== '') {
    $woo_products_out_of_stock_style[] = 'background-color: '.$cabin_qode_options['woo_products_out_of_stock_background_color'];
}

if(isset($cabin_qode_options['woo_products_out_of_stock_border_radius']) && $cabin_qode_options['woo_products_out_of_stock_border_radius'] !== '') {
    $woo_products_out_of_stock_style[] = 'border-radius: '.$cabin_qode_options['woo_products_out_of_stock_border_radius'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_left_position']) && $cabin_qode_options['woo_products_out_of_stock_left_position'] !== '') {
    $woo_products_out_of_stock_style[] = 'left: '.$cabin_qode_options['woo_products_out_of_stock_left_position'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_top_position']) && $cabin_qode_options['woo_products_out_of_stock_top_position'] !== '') {
    $woo_products_out_of_stock_style[] = 'top: '.$cabin_qode_options['woo_products_out_of_stock_top_position'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_width']) && $cabin_qode_options['woo_products_out_of_stock_width'] !== '') {
    $woo_products_out_of_stock_style[] = 'width: '.$cabin_qode_options['woo_products_out_of_stock_width'].'px';
}

if(isset($cabin_qode_options['woo_products_out_of_stock_height']) && $cabin_qode_options['woo_products_out_of_stock_height'] !== '') {
    $woo_products_out_of_stock_style[] = 'height: '.$cabin_qode_options['woo_products_out_of_stock_height'].'px';
}


if(is_array($woo_products_out_of_stock_style) && count($woo_products_out_of_stock_style)) { ?>
    .woocommerce .product .onsale.out-of-stock-button{
    <?php echo esc_attr(implode(';', $woo_products_out_of_stock_style)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['woo_products_out_of_stock_right_position']) && $cabin_qode_options['woo_products_out_of_stock_right_position'] !== '') { ?>
    .woocommerce .product .onsale.out-of-stock-button{
    left:auto;
    right: <?php echo esc_attr($cabin_qode_options['woo_products_out_of_stock_right_position']).'px';?>
    }
<?php } ?>

<?php
$woo_products_sorting_style = array();

if(isset($cabin_qode_options['woo_products_sorting_color']) && $cabin_qode_options['woo_products_sorting_color'] !== '') {
    $woo_products_sorting_style[] = 'color: '.$cabin_qode_options['woo_products_sorting_color'];
}

if(isset($cabin_qode_options['woo_products_sorting_background_color']) && $cabin_qode_options['woo_products_sorting_background_color'] !== '') {
    $woo_products_sorting_style[] = 'background-color: '.$cabin_qode_options['woo_products_sorting_background_color'];
}

if(isset($cabin_qode_options['woo_products_sorting_border_color']) && $cabin_qode_options['woo_products_sorting_border_color'] !== '') {
    $woo_products_sorting_style[] = 'border-color: '.$cabin_qode_options['woo_products_sorting_border_color'];
}

if(isset($cabin_qode_options['woo_products_sorting_border_width']) && $cabin_qode_options['woo_products_sorting_border_width'] !== '') {
    $woo_products_sorting_style[] = 'border-width: '.$cabin_qode_options['woo_products_sorting_border_width'].'px';
}

if(is_array($woo_products_sorting_style) && count($woo_products_sorting_style)) { ?>
    body.archive.woocommerce-page .select2-container.orderby .select2-choice{
    <?php echo esc_attr(implode(';', $woo_products_sorting_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_products_sorting_color']) && !empty($cabin_qode_options['woo_products_sorting_color'])) { ?>
    body.archive.woocommerce-page .select2-drop{
    color: <?php echo esc_attr($cabin_qode_options['woo_products_sorting_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_products_sorting_dropdown_background_color']) && !empty($cabin_qode_options['woo_products_sorting_dropdown_background_color'])) { ?>
    body.archive.woocommerce-page .select2-drop{
    background-color: <?php echo esc_attr($cabin_qode_options['woo_products_sorting_dropdown_background_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_products_sorting_hover_color']) && !empty($cabin_qode_options['woo_products_sorting_hover_color'])) { ?>
    body.archive.woocommerce-page .select2-results li.select2-highlighted,
    body.archive.woocommerce-page .select2-container .select2-choice .select2-arrow:after,
    body.archive.woocommerce-page .select2-results ul li.select2-results__option--highlighted,
    body.archive.woocommerce-page .select2-container .select2-selection__arrow:after{
    color: <?php echo esc_attr($cabin_qode_options['woo_products_sorting_hover_color']); ?>;
    }
<?php } ?>

<?php
$woo_products_sorting_result_style = array();

if(isset($cabin_qode_options['woo_products_sorting_result_font_family']) && $cabin_qode_options['woo_products_sorting_result_font_family'] !== '-1') {
    $woo_products_sorting_result_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_sorting_result_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_sorting_result_font_size']) && $cabin_qode_options['woo_products_sorting_result_font_size'] !== '') {
    $woo_products_sorting_result_style[] = 'font-size: '.$cabin_qode_options['woo_products_sorting_result_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_sorting_result_line_height']) && $cabin_qode_options['woo_products_sorting_result_line_height'] !== '') {
    $woo_products_sorting_result_style[] = 'line-height: '.$cabin_qode_options['woo_products_sorting_result_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_sorting_result_letter_spacing']) && $cabin_qode_options['woo_products_sorting_result_letter_spacing'] !== '') {
    $woo_products_sorting_result_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_sorting_result_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_sorting_result_font_weight']) && $cabin_qode_options['woo_products_sorting_result_font_weight'] !== '') {
    $woo_products_sorting_result_style[] = 'font-weight: '.$cabin_qode_options['woo_products_sorting_result_font_weight'];
}

if(isset($cabin_qode_options['woo_products_sorting_result_font_style']) && $cabin_qode_options['woo_products_sorting_result_font_style'] !== '') {
    $woo_products_sorting_result_style[] = 'font-style: '.$cabin_qode_options['woo_products_sorting_result_font_style'];
}

if(isset($cabin_qode_options['woo_products_sorting_result_text_transform']) && $cabin_qode_options['woo_products_sorting_result_text_transform'] !== '') {
    $woo_products_sorting_result_style[] = 'text-transform: '.$cabin_qode_options['woo_products_sorting_result_text_transform'];
}

if(isset($cabin_qode_options['woo_products_sorting_result_color']) && $cabin_qode_options['woo_products_sorting_result_color'] !== '') {
    $woo_products_sorting_result_style[] = 'color: '.$cabin_qode_options['woo_products_sorting_result_color'];
}

if(is_array($woo_products_sorting_result_style) && count($woo_products_sorting_result_style)) { ?>
    .woocommerce .woocommerce-result-count{
    <?php echo esc_attr(implode(';', $woo_products_sorting_result_style)); ?>
    }
<?php } ?>

<?php
$woo_products_list_add_to_cart_style = array();
$woo_products_list_add_to_cart_hover_style = array();

if(isset($cabin_qode_options['woo_products_list_add_to_cart_font_family']) && $cabin_qode_options['woo_products_list_add_to_cart_font_family'] !== '-1') {
    $woo_products_list_add_to_cart_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_list_add_to_cart_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_font_size']) && $cabin_qode_options['woo_products_list_add_to_cart_font_size'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'font-size: '.$cabin_qode_options['woo_products_list_add_to_cart_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_line_height']) && $cabin_qode_options['woo_products_list_add_to_cart_line_height'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'line-height: '.$cabin_qode_options['woo_products_list_add_to_cart_line_height'].'px';?>
    .shopping_cart_dropdown .cart_bottom .view-cart,
    .shopping_cart_dropdown .cart_bottom .checkout{
    height:<?php echo esc_attr($cabin_qode_options['woo_products_list_add_to_cart_line_height']).'px' ;?>
    }
    <?php
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_letter_spacing']) && $cabin_qode_options['woo_products_list_add_to_cart_letter_spacing'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_list_add_to_cart_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_font_weight']) && $cabin_qode_options['woo_products_list_add_to_cart_font_weight'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'font-weight: '.$cabin_qode_options['woo_products_list_add_to_cart_font_weight'];
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_font_style']) && $cabin_qode_options['woo_products_list_add_to_cart_font_style'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'font-style: '.$cabin_qode_options['woo_products_list_add_to_cart_font_style'];
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_text_transform']) && $cabin_qode_options['woo_products_list_add_to_cart_text_transform'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'text-transform: '.$cabin_qode_options['woo_products_list_add_to_cart_text_transform'];
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_color']) && !empty($cabin_qode_options['woo_products_list_add_to_cart_color'])) {
    $woo_products_list_add_to_cart_style[] = 'color: '.$cabin_qode_options['woo_products_list_add_to_cart_color'];
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_background_color']) && !empty($cabin_qode_options['woo_products_list_add_to_cart_background_color'])) {
    $woo_products_list_add_to_cart_style[] = 'background-color: '.$cabin_qode_options['woo_products_list_add_to_cart_background_color'];
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_border_width']) && $cabin_qode_options['woo_products_list_add_to_cart_border_width'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'border-width: '.$cabin_qode_options['woo_products_list_add_to_cart_border_width'].'px';
    $woo_products_list_add_to_cart_style[] = 'border-style:solid';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_border_color']) && !empty($cabin_qode_options['woo_products_list_add_to_cart_border_color'])) {
    $woo_products_list_add_to_cart_style[] = 'border-color: '.$cabin_qode_options['woo_products_list_add_to_cart_border_color'];
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_border_radius']) && $cabin_qode_options['woo_products_list_add_to_cart_border_radius'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'border-radius: '.$cabin_qode_options['woo_products_list_add_to_cart_border_radius'].'px';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_padding']) && $cabin_qode_options['woo_products_list_add_to_cart_padding'] !== '') {
    $woo_products_list_add_to_cart_style[] = 'padding-left: '.$cabin_qode_options['woo_products_list_add_to_cart_padding'].'px';
    $woo_products_list_add_to_cart_style[] = 'padding-right: '.$cabin_qode_options['woo_products_list_add_to_cart_padding'].'px';
}

if(is_array($woo_products_list_add_to_cart_style) && count($woo_products_list_add_to_cart_style)) { ?>
    .woocommerce ul.products li.product .add-to-cart-button,
    .woocommerce ul.products li.product .added_to_cart,
    .woocommerce .widget_price_filter .button,
    .woocommerce-page .widget_price_filter .button,
    .woocommerce .widget_shopping_cart_content p.buttons a.button,
    .woocommerce .button,
    .woocommerce-page .button,
    .woocommerce button.button,
    .woocommerce-page button.button,
    .woocommerce-page input[type="submit"]:not(.qode_search_submit),
    .woocommerce input[type="submit"]:not(.qode_search_submit),
    .shopping_cart_dropdown .cart_bottom .view-cart,
    .shopping_cart_dropdown .cart_bottom .checkout{
    <?php echo esc_attr(implode(';', $woo_products_list_add_to_cart_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_products_list_add_to_cart_hover_color']) && !empty($cabin_qode_options['woo_products_list_add_to_cart_hover_color'])) {
    $woo_products_list_add_to_cart_hover_style[] = 'color: '.$cabin_qode_options['woo_products_list_add_to_cart_hover_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_background_hover_color']) && !empty($cabin_qode_options['woo_products_list_add_to_cart_background_hover_color'])) {
    $woo_products_list_add_to_cart_hover_style[] = 'background-color: '.$cabin_qode_options['woo_products_list_add_to_cart_background_hover_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_list_add_to_cart_border_hover_color']) && !empty($cabin_qode_options['woo_products_list_add_to_cart_border_hover_color'])) {
    $woo_products_list_add_to_cart_hover_style[] = 'border-color: '.$cabin_qode_options['woo_products_list_add_to_cart_border_hover_color'];
}

if(is_array($woo_products_list_add_to_cart_hover_style) && count($woo_products_list_add_to_cart_hover_style)) { ?>
    .woocommerce ul.products li.product a.add_to_cart_button:hover,
    .woocommerce-page ul.products li.product a.add_to_cart_button:hover,
    .woocommerce ul.products li.product .added_to_cart:hover,
    .woocommerce-page ul.products li.product .added_to_cart:hover,
    .woocommerce .widget_price_filter .button:hover,
    .woocommerce-page .widget_price_filter .button:hover,
    .woocommerce .widget_shopping_cart_content p.buttons a.button:hover,
    .woocommerce .button:hover,
    .woocommerce-page .button:hover,
    .woocommerce button.button:hover,
    .woocommerce-page button.button:hover,
    .woocommerce-page input[type="submit"]:not(.qode_search_submit):not(#searchsubmit):hover,
    .woocommerce input[type="submit"]:not(.qode_search_submit):not(#searchsubmit):hover,
    .shopping_cart_dropdown .cart_bottom .view-cart:hover,
    .shopping_cart_dropdown .cart_bottom .checkout:hover{
    <?php echo esc_attr(implode(';', $woo_products_list_add_to_cart_hover_style)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['woo_products_list_add_to_cart_padding']) && $cabin_qode_options['woo_products_list_add_to_cart_padding'] !== '') { ?>
    .woocommerce ul.products:not(.hover_type2) li.product .add-to-cart-button,
    .woocommerce ul.products:not(.hover_type2) li.product .added_to_cart{
    padding-left: <?php echo esc_attr($cabin_qode_options['woo_products_list_add_to_cart_padding']); ?>px;
    padding-right: <?php echo esc_attr($cabin_qode_options['woo_products_list_add_to_cart_padding']); ?>px;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['woo_products_list_add_to_cart_line_height']) && $cabin_qode_options['woo_products_list_add_to_cart_line_height'] !== '') { ?>
    .woocommerce.single-product .woocommerce-message{
    line-height: <?php echo esc_attr($cabin_qode_options['woo_products_list_add_to_cart_line_height']); ?>px;
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['woo_products_price_filter_background_color']) && !empty($cabin_qode_options['woo_products_price_filter_background_color'])) { ?>
    .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range,
    .woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range {
    background-color: <?php echo esc_attr($cabin_qode_options['woo_products_price_filter_background_color']); ?>;
    }
<?php } ?>

<?php

if(isset($cabin_qode_options['woo_products_price_filter_background_active_color']) && !empty($cabin_qode_options['woo_products_price_filter_background_active_color'])) { ?>
    .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
    .woocommerce-page .widget_price_filter .price_slider_wrapper .ui-widget-content {
    background-color: <?php echo esc_attr($cabin_qode_options['woo_products_price_filter_background_active_color']); ?>;
    }
<?php } ?>

<?php

if(isset($cabin_qode_options['woo_products_price_filter_arrows_color']) && !empty($cabin_qode_options['woo_products_price_filter_arrows_color'])) { ?>
    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
    .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle {
    background-color: <?php echo esc_attr($cabin_qode_options['woo_products_price_filter_arrows_color']); ?>;
    }
<?php } ?>



<?php
$woo_product_single_meta_title_style = array();

if(isset($cabin_qode_options['woo_product_single_meta_title_font_family']) && $cabin_qode_options['woo_product_single_meta_title_font_family'] !== '-1') {
    $woo_product_single_meta_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_meta_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_meta_title_font_size']) && $cabin_qode_options['woo_product_single_meta_title_font_size'] !== '') {
    $woo_product_single_meta_title_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_meta_title_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_meta_title_line_height']) && $cabin_qode_options['woo_product_single_meta_title_line_height'] !== '') {
    $woo_product_single_meta_title_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_meta_title_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_meta_title_letter_spacing']) && $cabin_qode_options['woo_product_single_meta_title_letter_spacing'] !== '') {
    $woo_product_single_meta_title_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_meta_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_meta_title_font_weight']) && $cabin_qode_options['woo_product_single_meta_title_font_weight'] !== '') {
    $woo_product_single_meta_title_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_meta_title_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_meta_title_font_style']) && $cabin_qode_options['woo_product_single_meta_title_font_style'] !== '') {
    $woo_product_single_meta_title_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_meta_title_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_meta_title_text_transform']) && $cabin_qode_options['woo_product_single_meta_title_text_transform'] !== '') {
    $woo_product_single_meta_title_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_meta_title_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_meta_title_color']) && $cabin_qode_options['woo_product_single_meta_title_color'] !== '') {
    $woo_product_single_meta_title_style[] = 'color: '.$cabin_qode_options['woo_product_single_meta_title_color'];
}

if(is_array($woo_product_single_meta_title_style) && count($woo_product_single_meta_title_style)) { ?>
    .woocommerce div.product div.product_meta > span,
    .woocommerce div.product div.product_meta > .social_share_list_holder > span{
    <?php echo esc_attr(implode(';', $woo_product_single_meta_title_style)); ?>
    }
<?php } ?>

<?php
$woo_product_single_meta_info_style = array();

if(isset($cabin_qode_options['woo_product_single_meta_info_font_family']) && $cabin_qode_options['woo_product_single_meta_info_font_family'] !== '-1') {
    $woo_product_single_meta_info_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_meta_info_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_meta_info_font_size']) && $cabin_qode_options['woo_product_single_meta_info_font_size'] !== '') {
    $woo_product_single_meta_info_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_meta_info_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_meta_info_line_height']) && $cabin_qode_options['woo_product_single_meta_info_line_height'] !== '') {
    $woo_product_single_meta_info_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_meta_info_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_meta_info_letter_spacing']) && $cabin_qode_options['woo_product_single_meta_info_letter_spacing'] !== '') {
    $woo_product_single_meta_info_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_meta_info_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_meta_info_font_weight']) && $cabin_qode_options['woo_product_single_meta_info_font_weight'] !== '') {
    $woo_product_single_meta_info_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_meta_info_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_meta_info_font_style']) && $cabin_qode_options['woo_product_single_meta_info_font_style'] !== '') {
    $woo_product_single_meta_info_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_meta_info_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_meta_info_text_transform']) && $cabin_qode_options['woo_product_single_meta_info_text_transform'] !== '') {
    $woo_product_single_meta_info_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_meta_info_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_meta_info_color']) && $cabin_qode_options['woo_product_single_meta_info_color'] !== '') {
    $woo_product_single_meta_info_style[] = 'color: '.$cabin_qode_options['woo_product_single_meta_info_color'];
}

if(is_array($woo_product_single_meta_info_style) && count($woo_product_single_meta_info_style)) { ?>
    .woocommerce div.product div.product_meta > span span,
    .woocommerce div.product div.product_meta > span a{
    <?php echo esc_attr(implode(';', $woo_product_single_meta_info_style)); ?>
    }
<?php } ?>


<?php
$woo_product_single_title_style = array();

if(isset($cabin_qode_options['woo_product_single_title_font_family']) && $cabin_qode_options['woo_product_single_title_font_family'] !== '-1') {
    $woo_product_single_title_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_title_font_size']) && $cabin_qode_options['woo_product_single_title_font_size'] !== '') {
    $woo_product_single_title_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_title_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_title_line_height']) && $cabin_qode_options['woo_product_single_title_line_height'] !== '') {
    $woo_product_single_title_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_title_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_title_letter_spacing']) && $cabin_qode_options['woo_product_single_title_letter_spacing'] !== '') {
    $woo_product_single_title_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_title_font_weight']) && $cabin_qode_options['woo_product_single_title_font_weight'] !== '') {
    $woo_product_single_title_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_title_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_title_font_style']) && $cabin_qode_options['woo_product_single_title_font_style'] !== '') {
    $woo_product_single_title_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_title_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_title_text_transform']) && $cabin_qode_options['woo_product_single_title_text_transform'] !== '') {
    $woo_product_single_title_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_title_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_title_color']) && $cabin_qode_options['woo_product_single_title_color'] !== '') {
    $woo_product_single_title_style[] = 'color: '.$cabin_qode_options['woo_product_single_title_color'];
}

if(is_array($woo_product_single_title_style) && count($woo_product_single_title_style)) { ?>
    .woocommerce .product h2.product_title{
    <?php echo esc_attr(implode(';', $woo_product_single_title_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_title_hover_color']) && !empty($cabin_qode_options['woo_product_single_title_hover_color'])) { ?>
    .woocommerce .product h2.product_title a:hover{
    color: <?php echo esc_attr($cabin_qode_options['woo_product_single_title_hover_color']); ?>;
    }
<?php } ?>

<?php
$woo_products_single_add_to_cart_style = array();
$woo_products_single_add_to_cart_hover_style = array();

if(isset($cabin_qode_options['woo_products_single_add_to_cart_font_family']) && $cabin_qode_options['woo_products_single_add_to_cart_font_family'] !== '-1') {
    $woo_products_single_add_to_cart_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_single_add_to_cart_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_font_size']) && $cabin_qode_options['woo_products_single_add_to_cart_font_size'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'font-size: '.$cabin_qode_options['woo_products_single_add_to_cart_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_line_height']) && $cabin_qode_options['woo_products_single_add_to_cart_line_height'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'line-height: '.$cabin_qode_options['woo_products_single_add_to_cart_line_height'].'px';
    $woo_products_single_add_to_cart_style[] = 'height: '.$cabin_qode_options['woo_products_single_add_to_cart_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_letter_spacing']) && $cabin_qode_options['woo_products_single_add_to_cart_letter_spacing'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_single_add_to_cart_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_font_weight']) && $cabin_qode_options['woo_products_single_add_to_cart_font_weight'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'font-weight: '.$cabin_qode_options['woo_products_single_add_to_cart_font_weight'];
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_font_style']) && $cabin_qode_options['woo_products_single_add_to_cart_font_style'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'font-style: '.$cabin_qode_options['woo_products_single_add_to_cart_font_style'];
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_text_transform']) && $cabin_qode_options['woo_products_single_add_to_cart_text_transform'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'text-transform: '.$cabin_qode_options['woo_products_single_add_to_cart_text_transform'];
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_color']) && !empty($cabin_qode_options['woo_products_single_add_to_cart_color'])) {
    $woo_products_single_add_to_cart_style[] = 'color: '.$cabin_qode_options['woo_products_single_add_to_cart_color'];
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_background_color']) && !empty($cabin_qode_options['woo_products_single_add_to_cart_background_color'])) {
    $woo_products_single_add_to_cart_style[] = 'background-color: '.$cabin_qode_options['woo_products_single_add_to_cart_background_color'];
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_border_width']) && $cabin_qode_options['woo_products_single_add_to_cart_border_width'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'border-width: '.$cabin_qode_options['woo_products_single_add_to_cart_border_width'].'px';
    $woo_products_single_add_to_cart_style[] = 'border-style:solid';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_border_color']) && !empty($cabin_qode_options['woo_products_single_add_to_cart_border_color'])) {
    $woo_products_single_add_to_cart_style[] = 'border-color: '.$cabin_qode_options['woo_products_single_add_to_cart_border_color'];
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_border_radius']) && $cabin_qode_options['woo_products_single_add_to_cart_border_radius'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'border-radius: '.$cabin_qode_options['woo_products_single_add_to_cart_border_radius'].'px';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_margin_left']) && $cabin_qode_options['woo_products_single_add_to_cart_margin_left'] !== '') {
    $woo_products_single_add_to_cart_style[] = 'margin-left: '.$cabin_qode_options['woo_products_single_add_to_cart_margin_left'].'px';
}

if(is_array($woo_products_single_add_to_cart_style) && count($woo_products_single_add_to_cart_style)) { ?>
    .woocommerce.single-product button.single_add_to_cart_button{
    <?php echo esc_attr(implode(';', $woo_products_single_add_to_cart_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_products_single_add_to_cart_hover_color']) && !empty($cabin_qode_options['woo_products_single_add_to_cart_hover_color'])) {
    $woo_products_single_add_to_cart_hover_style[] = 'color: '.$cabin_qode_options['woo_products_single_add_to_cart_hover_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_background_hover_color']) && !empty($cabin_qode_options['woo_products_single_add_to_cart_background_hover_color'])) {
    $woo_products_single_add_to_cart_hover_style[] = 'background-color: '.$cabin_qode_options['woo_products_single_add_to_cart_background_hover_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_single_add_to_cart_border_hover_color']) && !empty($cabin_qode_options['woo_products_single_add_to_cart_border_hover_color'])) {
    $woo_products_single_add_to_cart_hover_style[] = 'border-color: '.$cabin_qode_options['woo_products_single_add_to_cart_border_hover_color'].'!important';
}

if(is_array($woo_products_single_add_to_cart_hover_style) && count($woo_products_single_add_to_cart_hover_style)) { ?>
    .woocommerce.single-product button.single_add_to_cart_button:hover{
    <?php echo esc_attr(implode(';', $woo_products_single_add_to_cart_hover_style)); ?>
    }
<?php } ?>



<?php /*Products list add to cart*/?>

<?php
$woo_products_add_to_cart_style = array();
$woo_products_add_to_cart_hover_style = array();

if(isset($cabin_qode_options['woo_products_add_to_cart_font_family']) && $cabin_qode_options['woo_products_add_to_cart_font_family'] !== '-1') {
    $woo_products_add_to_cart_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_products_add_to_cart_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_font_size']) && $cabin_qode_options['woo_products_add_to_cart_font_size'] !== '') {
    $woo_products_add_to_cart_style[] = 'font-size: '.$cabin_qode_options['woo_products_add_to_cart_font_size'].'px';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_line_height']) && $cabin_qode_options['woo_products_add_to_cart_line_height'] !== '') {
    $woo_products_add_to_cart_style[] = 'line-height: '.$cabin_qode_options['woo_products_add_to_cart_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_letter_spacing']) && $cabin_qode_options['woo_products_add_to_cart_letter_spacing'] !== '') {
    $woo_products_add_to_cart_style[] = 'letter-spacing: '.$cabin_qode_options['woo_products_add_to_cart_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_font_weight']) && $cabin_qode_options['woo_products_add_to_cart_font_weight'] !== '') {
    $woo_products_add_to_cart_style[] = 'font-weight: '.$cabin_qode_options['woo_products_add_to_cart_font_weight'];
}

if(isset($cabin_qode_options['woo_products_add_to_cart_font_style']) && $cabin_qode_options['woo_products_add_to_cart_font_style'] !== '') {
    $woo_products_add_to_cart_style[] = 'font-style: '.$cabin_qode_options['woo_products_add_to_cart_font_style'];
}

if(isset($cabin_qode_options['woo_products_add_to_cart_text_transform']) && $cabin_qode_options['woo_products_add_to_cart_text_transform'] !== '') {
    $woo_products_add_to_cart_style[] = 'text-transform: '.$cabin_qode_options['woo_products_add_to_cart_text_transform'];
}

if(isset($cabin_qode_options['woo_products_add_to_cart_color']) && !empty($cabin_qode_options['woo_products_add_to_cart_color'])) {
    $woo_products_add_to_cart_style[] = 'color: '.$cabin_qode_options['woo_products_add_to_cart_color'];
}

if(isset($cabin_qode_options['woo_products_add_to_cart_background_color']) && !empty($cabin_qode_options['woo_products_add_to_cart_background_color'])) {
    $woo_products_add_to_cart_style[] = 'background-color: '.$cabin_qode_options['woo_products_add_to_cart_background_color'];
}

if(isset($cabin_qode_options['woo_products_add_to_cart_border_width']) && $cabin_qode_options['woo_products_add_to_cart_border_width'] !== '') {
    $woo_products_add_to_cart_style[] = 'border-width: '.$cabin_qode_options['woo_products_add_to_cart_border_width'].'px';
    $woo_products_add_to_cart_style[] = 'border-style:solid';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_border_color']) && !empty($cabin_qode_options['woo_products_add_to_cart_border_color'])) {
    $woo_products_add_to_cart_style[] = 'border-color: '.$cabin_qode_options['woo_products_add_to_cart_border_color'];
}

if(isset($cabin_qode_options['woo_products_add_to_cart_border_radius']) && $cabin_qode_options['woo_products_add_to_cart_border_radius'] !== '') {
    $woo_products_add_to_cart_style[] = 'border-radius: '.$cabin_qode_options['woo_products_add_to_cart_border_radius'].'px';
}

if(is_array($woo_products_add_to_cart_style) && count($woo_products_add_to_cart_style)) { ?>
    .woocommerce ul.products li.product .add-to-cart-button-inner2 a.button.add_to_cart_button,
    .woocommerce ul.products li.product .add-to-cart-button-inner2 a.added_to_cart,
    .woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.button.add_to_cart_button,
    .woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.added_to_cart{
    <?php echo esc_attr(implode(';', $woo_products_add_to_cart_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_products_add_to_cart_hover_color']) && !empty($cabin_qode_options['woo_products_add_to_cart_hover_color'])) {
    $woo_products_add_to_cart_hover_style[] = 'color: '.$cabin_qode_options['woo_products_add_to_cart_hover_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_background_hover_color']) && !empty($cabin_qode_options['woo_products_add_to_cart_background_hover_color'])) {
    $woo_products_add_to_cart_hover_style[] = 'background-color: '.$cabin_qode_options['woo_products_add_to_cart_background_hover_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_add_to_cart_border_hover_color']) && !empty($cabin_qode_options['woo_products_add_to_cart_border_hover_color'])) {
    $woo_products_add_to_cart_hover_style[] = 'border-color: '.$cabin_qode_options['woo_products_add_to_cart_border_hover_color'].'!important';
}

if(is_array($woo_products_add_to_cart_hover_style) && count($woo_products_add_to_cart_hover_style)) { ?>
    .woocommerce ul.products li.product .add-to-cart-button-inner2 a.button.add_to_cart_button:hover,
    .woocommerce ul.products li.product .add-to-cart-button-inner2 a.added_to_cart:hover,
    .woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.button.add_to_cart_button:hover,
    .woocommerce ul.products.hover_type2 li.product .add-to-cart-button-inner2 a.added_to_cart:hover{
    <?php echo esc_attr(implode(';', $woo_products_add_to_cart_hover_style)); ?>
    }
<?php } ?>


<?php
$woo_products_single_quantity_style = array();
$woo_products_single_quantity_hover_style = array();


if(isset($cabin_qode_options['woo_products_single_quantity_font_size']) && $cabin_qode_options['woo_products_single_quantity_font_size'] !== '') {
    $woo_products_single_quantity_style[] = 'font-size: '.$cabin_qode_options['woo_products_single_quantity_font_size'].'px';
}
if(isset($cabin_qode_options['woo_products_single_quantity_line_height']) && $cabin_qode_options['woo_products_single_quantity_line_height'] !== '') {
    $woo_products_single_quantity_style[] = 'line-height: '.$cabin_qode_options['woo_products_single_quantity_line_height'].'px';
    $woo_products_single_quantity_style[] = 'height: '.$cabin_qode_options['woo_products_single_quantity_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_single_quantity_color']) && !empty($cabin_qode_options['woo_products_single_quantity_color'])) {
    $woo_products_single_quantity_style[] = 'color: '.$cabin_qode_options['woo_products_single_quantity_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_background_color']) && !empty($cabin_qode_options['woo_products_single_quantity_background_color'])) {
    $woo_products_single_quantity_style[] = 'background-color: '.$cabin_qode_options['woo_products_single_quantity_background_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_border_width']) && $cabin_qode_options['woo_products_single_quantity_border_width'] !== '') {
    $woo_products_single_quantity_style[] = 'border-width: '.$cabin_qode_options['woo_products_single_quantity_border_width'].'px';
    $woo_products_single_quantity_style[] = 'border-style:solid';
}

if(isset($cabin_qode_options['woo_products_single_quantity_border_color']) && !empty($cabin_qode_options['woo_products_single_quantity_border_color'])) {
    $woo_products_single_quantity_style[] = 'border-color: '.$cabin_qode_options['woo_products_single_quantity_border_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_border_radius']) && $cabin_qode_options['woo_products_single_quantity_border_radius'] !== '') {
    $woo_products_single_quantity_style[] = 'border-radius: '.$cabin_qode_options['woo_products_single_quantity_border_radius'].'px';
}

if(isset($cabin_qode_options['woo_products_single_quantity_width']) && $cabin_qode_options['woo_products_single_quantity_width'] !== '') {
    $woo_products_single_quantity_style[] = 'width: '.$cabin_qode_options['woo_products_single_quantity_width'].'px';
}

if(is_array($woo_products_single_quantity_style) && count($woo_products_single_quantity_style)) { ?>
    .woocommerce .quantity .minus,
    .woocommerce .quantity .plus{
    <?php echo esc_attr(implode(';', $woo_products_single_quantity_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_products_single_quantity_hover_color']) && !empty($cabin_qode_options['woo_products_single_quantity_hover_color'])) {
    $woo_products_single_quantity_hover_style[] = 'color: '.$cabin_qode_options['woo_products_single_quantity_hover_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_background_hover_color']) && !empty($cabin_qode_options['woo_products_single_quantity_background_hover_color'])) {
    $woo_products_single_quantity_hover_style[] = 'background-color: '.$cabin_qode_options['woo_products_single_quantity_background_hover_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_border_hover_color']) && !empty($cabin_qode_options['woo_products_single_quantity_border_hover_color'])) {
    $woo_products_single_quantity_hover_style[] = 'border-color: '.$cabin_qode_options['woo_products_single_quantity_border_hover_color'];
}

if(is_array($woo_products_single_quantity_hover_style) && count($woo_products_single_quantity_hover_style)) { ?>
    .woocommerce .quantity .minus:hover,
    .woocommerce .quantity .plus:hover{
    <?php echo esc_attr(implode(';', $woo_products_single_quantity_hover_style)); ?>
    }
<?php } ?>

<?php
$woo_products_single_quantity_input_style = array();
$woo_products_single_quantity_input_hover_style = array();


if(isset($cabin_qode_options['woo_products_single_quantity_input_font_size']) && $cabin_qode_options['woo_products_single_quantity_input_font_size'] !== '') {
    $woo_products_single_quantity_input_style[] = 'font-size: '.$cabin_qode_options['woo_products_single_quantity_input_font_size'].'px';
}
if(isset($cabin_qode_options['woo_products_single_quantity_input_line_height']) && $cabin_qode_options['woo_products_single_quantity_input_line_height'] !== '') {
    $woo_products_single_quantity_input_style[] = 'line-height: '.$cabin_qode_options['woo_products_single_quantity_input_line_height'].'px';
    $woo_products_single_quantity_input_style[] = 'height: '.$cabin_qode_options['woo_products_single_quantity_input_line_height'].'px';
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_color']) && !empty($cabin_qode_options['woo_products_single_quantity_input_color'])) {
    $woo_products_single_quantity_input_style[] = 'color: '.$cabin_qode_options['woo_products_single_quantity_input_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_background_color']) && !empty($cabin_qode_options['woo_products_single_quantity_input_background_color'])) {
    $woo_products_single_quantity_input_style[] = 'background-color: '.$cabin_qode_options['woo_products_single_quantity_input_background_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_border_width']) && $cabin_qode_options['woo_products_single_quantity_input_border_width'] !== '') {
    $woo_products_single_quantity_input_style[] = 'border-width: '.$cabin_qode_options['woo_products_single_quantity_input_border_width'].'px';
    $woo_products_single_quantity_input_style[] = 'border-style:solid';
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_border_color']) && !empty($cabin_qode_options['woo_products_single_quantity_input_border_color'])) {
    $woo_products_single_quantity_input_style[] = 'border-color: '.$cabin_qode_options['woo_products_single_quantity_input_border_color'].'!important';
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_border_radius']) && $cabin_qode_options['woo_products_single_quantity_input_border_radius'] !== '') {
    $woo_products_single_quantity_input_style[] = 'border-radius: '.$cabin_qode_options['woo_products_single_quantity_input_border_radius'].'px';
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_width']) && $cabin_qode_options['woo_products_single_quantity_input_width'] !== '') {
    $woo_products_single_quantity_input_style[] = 'width: '.$cabin_qode_options['woo_products_single_quantity_input_width'].'px';
}

if(is_array($woo_products_single_quantity_input_style) && count($woo_products_single_quantity_input_style)) { ?>
    .woocommerce .quantity input[type="text"].qty{
    <?php echo esc_attr(implode(';', $woo_products_single_quantity_input_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_products_single_quantity_input_hover_color']) && !empty($cabin_qode_options['woo_products_single_quantity_input_hover_color'])) {
    $woo_products_single_quantity_input_hover_style[] = 'color: '.$cabin_qode_options['woo_products_single_quantity_input_hover_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_background_hover_color']) && !empty($cabin_qode_options['woo_products_single_quantity_input_background_hover_color'])) {
    $woo_products_single_quantity_input_hover_style[] = 'background-color: '.$cabin_qode_options['woo_products_single_quantity_input_background_hover_color'];
}

if(isset($cabin_qode_options['woo_products_single_quantity_input_border_hover_color']) && !empty($cabin_qode_options['woo_products_single_quantity_input_border_hover_color'])) {
    $woo_products_single_quantity_input_hover_style[] = 'border-color: '.$cabin_qode_options['woo_products_single_quantity_input_border_hover_color'].'!important';
}

if(is_array($woo_products_single_quantity_input_hover_style) && count($woo_products_single_quantity_input_hover_style)) { ?>
    .woocommerce .quantity input[type="text"].qty:focus{
    <?php echo esc_attr(implode(';', $woo_products_single_quantity_input_hover_style)); ?>
    }
<?php } ?>

<?php
$woo_product_single_price_style = array();

if(isset($cabin_qode_options['woo_product_single_price_font_family']) && $cabin_qode_options['woo_product_single_price_font_family'] !== '-1') {
    $woo_product_single_price_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_price_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_price_font_size']) && $cabin_qode_options['woo_product_single_price_font_size'] !== '') {
    $woo_product_single_price_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_price_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_price_line_height']) && $cabin_qode_options['woo_product_single_price_line_height'] !== '') {
    $woo_product_single_price_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_price_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_price_letter_spacing']) && $cabin_qode_options['woo_product_single_price_letter_spacing'] !== '') {
    $woo_product_single_price_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_price_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_price_font_weight']) && $cabin_qode_options['woo_product_single_price_font_weight'] !== '') {
    $woo_product_single_price_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_price_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_price_font_style']) && $cabin_qode_options['woo_product_single_price_font_style'] !== '') {
    $woo_product_single_price_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_price_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_price_text_transform']) && $cabin_qode_options['woo_product_single_price_text_transform'] !== '') {
    $woo_product_single_price_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_price_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_price_color']) && $cabin_qode_options['woo_product_single_price_color'] !== '') {
    $woo_product_single_price_style[] = 'color: '.$cabin_qode_options['woo_product_single_price_color'];
}

if(is_array($woo_product_single_price_style) && count($woo_product_single_price_style)) { ?>
    .woocommerce div.product .summary p.price del span.amount,
    .woocommerce div.product .summary p.price ins span.amount,
    .woocommerce div.product .summary p.price  span.amount{
    <?php echo esc_attr(implode(';', $woo_product_single_price_style)); ?>
    }
<?php }

if(isset($cabin_qode_options['woo_product_single_price_old_font_size']) && !empty($cabin_qode_options['woo_product_single_price_old_font_size'])) { ?>
    .woocommerce div.product .summary p.price del,
    .woocommerce div.product .summary p.price del span.amount{
    font-size: <?php echo esc_attr($cabin_qode_options['woo_product_single_price_old_font_size'].'px'); ?>;
    }
<?php }

if(isset($cabin_qode_options['woo_product_single_price_old_color']) && !empty($cabin_qode_options['woo_product_single_price_old_color'])) { ?>
    .woocommerce div.product .summary p.price del,
    .woocommerce div.product .summary p.price del span.amount{
    color: <?php echo esc_attr($cabin_qode_options['woo_product_single_price_old_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_tabs_color']) && !empty($cabin_qode_options['woo_product_single_tabs_color'])) { ?>
    .woocommerce .q_accordion_holder .ui-accordion-header.title-holder{
    background-color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_tabs_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_tabs_border_color']) && !empty($cabin_qode_options['woo_product_single_tabs_border_color'])) { ?>
    .woocommerce .q_accordion_holder .ui-accordion-header.title-holder{
    border-color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_tabs_border_color']); ?>;
    }
<?php } ?>


<?php if(isset($cabin_qode_options['woo_product_single_tabs_hover_color']) && !empty($cabin_qode_options['woo_product_single_tabs_hover_color'])) { ?>
    .woocommerce .q_accordion_holder .ui-accordion-header.title-holder:hover,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active{
    background-color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_tabs_hover_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_tabs_border_hover_color']) && !empty($cabin_qode_options['woo_product_single_tabs_border_hover_color'])) { ?>
    .woocommerce .q_accordion_holder .ui-accordion-header.title-holder:hover,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active{
    border-color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_tabs_border_hover_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_tabs_text_hover_color']) && !empty($cabin_qode_options['woo_product_single_tabs_text_hover_color'])) { ?>
    .woocommerce .q_accordion_holder .ui-accordion-header.title-holder:hover,
    .q_accordion_holder.accordion.boxed .ui-accordion-header.ui-state-active{
    color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_tabs_text_hover_color']); ?>;
    }
<?php } ?>

<?php
$woo_product_single_tabs_style = array();

if(isset($cabin_qode_options['woo_product_single_tabs_font_family']) && $cabin_qode_options['woo_product_single_tabs_font_family'] !== '-1') {
    $woo_product_single_tabs_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_tabs_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_tabs_font_size']) && $cabin_qode_options['woo_product_single_tabs_font_size'] !== '') {
    $woo_product_single_tabs_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_tabs_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_tabs_line_height']) && $cabin_qode_options['woo_product_single_tabs_line_height'] !== '') {
    $woo_product_single_tabs_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_tabs_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_tabs_letter_spacing']) && $cabin_qode_options['woo_product_single_tabs_letter_spacing'] !== '') {
    $woo_product_single_tabs_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_tabs_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_tabs_font_weight']) && $cabin_qode_options['woo_product_single_tabs_font_weight'] !== '') {
    $woo_product_single_tabs_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_tabs_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_tabs_font_style']) && $cabin_qode_options['woo_product_single_tabs_font_style'] !== '') {
    $woo_product_single_tabs_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_tabs_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_tabs_text_transform']) && $cabin_qode_options['woo_product_single_tabs_text_transform'] !== '') {
    $woo_product_single_tabs_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_tabs_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_tabs_text_color']) && $cabin_qode_options['woo_product_single_tabs_text_color'] !== '') {
    $woo_product_single_tabs_style[] = 'color: '.$cabin_qode_options['woo_product_single_tabs_text_color'];
}

if(is_array($woo_product_single_tabs_style) && count($woo_product_single_tabs_style)) { ?>
    .woocommerce .q_accordion_holder .ui-accordion-header.title-holder{
    <?php echo esc_attr(implode(';', $woo_product_single_tabs_style)); ?>
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_vertical_tabs_text_hover_color']) && !empty($cabin_qode_options['woo_product_single_vertical_tabs_text_hover_color'])) { ?>
    .woocommerce .q_tabs.woocommerce-tabs .tabs-nav li a:hover,
    .woocommerce .q_tabs.woocommerce-tabs .tabs-nav li.active a{
    color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_vertical_tabs_text_hover_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_vertical_tabs_border_color']) && !empty($cabin_qode_options['woo_product_single_vertical_tabs_border_color'])) { ?>
    .woocommerce .q_tabs.woocommerce-tabs .tabs-nav li,
    .woocommerce .q_tabs.woocommerce-tabs{
    border-color:  <?php echo esc_attr($cabin_qode_options['woo_product_single_vertical_tabs_border_color']); ?>;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['woo_product_single_vertical_tabs_border_width']) && ($cabin_qode_options['woo_product_single_vertical_tabs_border_width'])!=='') { ?>
    .woocommerce .q_tabs.woocommerce-tabs .tabs-nav li,
    .woocommerce .q_tabs.woocommerce-tabs{
    border-width:  <?php echo esc_attr($cabin_qode_options['woo_product_single_vertical_tabs_border_width'].'px'); ?>;
    }
<?php } ?>

<?php
$woo_product_single_vertical_tabs_style = array();

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_font_family']) && $cabin_qode_options['woo_product_single_vertical_tabs_font_family'] !== '-1') {
    $woo_product_single_vertical_tabs_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_vertical_tabs_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_font_size']) && $cabin_qode_options['woo_product_single_vertical_tabs_font_size'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_vertical_tabs_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_line_height']) && $cabin_qode_options['woo_product_single_vertical_tabs_line_height'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_vertical_tabs_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_letter_spacing']) && $cabin_qode_options['woo_product_single_vertical_tabs_letter_spacing'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_vertical_tabs_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_font_weight']) && $cabin_qode_options['woo_product_single_vertical_tabs_font_weight'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_vertical_tabs_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_font_style']) && $cabin_qode_options['woo_product_single_vertical_tabs_font_style'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_vertical_tabs_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_text_transform']) && $cabin_qode_options['woo_product_single_vertical_tabs_text_transform'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_vertical_tabs_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_vertical_tabs_text_color']) && $cabin_qode_options['woo_product_single_vertical_tabs_text_color'] !== '') {
    $woo_product_single_vertical_tabs_style[] = 'color: '.$cabin_qode_options['woo_product_single_vertical_tabs_text_color'];
}

if(is_array($woo_product_single_vertical_tabs_style) && count($woo_product_single_vertical_tabs_style)) { ?>
    .woocommerce .q_tabs.woocommerce-tabs .tabs-nav li a{
    <?php echo esc_attr(implode(';', $woo_product_single_vertical_tabs_style)); ?>
    }
<?php } ?>

<?php
$woo_product_single_related_style = array();

if(isset($cabin_qode_options['woo_product_single_related_font_family']) && $cabin_qode_options['woo_product_single_related_font_family'] !== '-1') {
    $woo_product_single_related_style[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['woo_product_single_related_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['woo_product_single_related_font_size']) && $cabin_qode_options['woo_product_single_related_font_size'] !== '') {
    $woo_product_single_related_style[] = 'font-size: '.$cabin_qode_options['woo_product_single_related_font_size'].'px';
}

if(isset($cabin_qode_options['woo_product_single_related_line_height']) && $cabin_qode_options['woo_product_single_related_line_height'] !== '') {
    $woo_product_single_related_style[] = 'line-height: '.$cabin_qode_options['woo_product_single_related_line_height'].'px';
}

if(isset($cabin_qode_options['woo_product_single_related_letter_spacing']) && $cabin_qode_options['woo_product_single_related_letter_spacing'] !== '') {
    $woo_product_single_related_style[] = 'letter-spacing: '.$cabin_qode_options['woo_product_single_related_letter_spacing'].'px';
}

if(isset($cabin_qode_options['woo_product_single_related_font_weight']) && $cabin_qode_options['woo_product_single_related_font_weight'] !== '') {
    $woo_product_single_related_style[] = 'font-weight: '.$cabin_qode_options['woo_product_single_related_font_weight'];
}

if(isset($cabin_qode_options['woo_product_single_related_font_style']) && $cabin_qode_options['woo_product_single_related_font_style'] !== '') {
    $woo_product_single_related_style[] = 'font-style: '.$cabin_qode_options['woo_product_single_related_font_style'];
}

if(isset($cabin_qode_options['woo_product_single_related_text_transform']) && $cabin_qode_options['woo_product_single_related_text_transform'] !== '') {
    $woo_product_single_related_style[] = 'text-transform: '.$cabin_qode_options['woo_product_single_related_text_transform'];
}

if(isset($cabin_qode_options['woo_product_single_related_color']) && $cabin_qode_options['woo_product_single_related_color'] !== '') {
    $woo_product_single_related_style[] = 'color: '.$cabin_qode_options['woo_product_single_related_color'];
}

if(is_array($woo_product_single_related_style) && count($woo_product_single_related_style)) { ?>
    .woocommerce  div.upsells .related-products-title,
    .woocommerce  div.related .related-products-title{
    <?php echo esc_attr(implode(';', $woo_product_single_related_style)); ?>
    }
<?php } ?>

<?php
if(isset($cabin_qode_options['qs_slider_preloader_background']) && $cabin_qode_options['qs_slider_preloader_background'] !== '') {
    ?>

    .qode_slider_preloader,
    .q_slider .carousel,
    .full_screen_preloader,
    .vertical_split_slider_preloader{
    background-color: <?php echo esc_attr($cabin_qode_options['qs_slider_preloader_background']); ?>;
    }
    <?php
}
?>

<?php
if(isset($cabin_qode_options['vss_navigation_color']) && $cabin_qode_options['vss_navigation_color'] !== '') {
    ?>

    #multiscroll-nav span{
    border-color: <?php echo esc_attr($cabin_qode_options['vss_navigation_color']); ?>;
    }
    #multiscroll-nav li .active span{
    background-color: <?php echo esc_attr($cabin_qode_options['vss_navigation_color']); ?>;
    }
    <?php
}
?>
<?php
if(isset($cabin_qode_options['vss_navigation_size']) && $cabin_qode_options['vss_navigation_size'] !== '') {
    ?>

    #multiscroll-nav li,
    #multiscroll-nav span{
    width: <?php echo esc_attr($cabin_qode_options['vss_navigation_size']); ?>px;
    height: <?php echo esc_attr($cabin_qode_options['vss_navigation_size']); ?>px;
    }
    <?php
}
?>

<?php

if(isset($cabin_qode_options['vss_left_panel_size']) && $cabin_qode_options['vss_left_panel_size'] !== '' && isset($cabin_qode_options['vss_right_panel_size']) && $cabin_qode_options['vss_right_panel_size'] !== '' && (intval($cabin_qode_options['vss_left_panel_size']) + intval($cabin_qode_options['vss_right_panel_size']) == 100)) {
    ?>
    .ms-left {
    width: <?php echo esc_attr($cabin_qode_options['vss_left_panel_size']); ?>% !important;
    }

    .ms-right {
    width: <?php echo esc_attr($cabin_qode_options['vss_right_panel_size']); ?>% !important;
    }
    <?php
}
?>

<?php
$single_image_color = '';
$single_image_transparency = '.85';
if (isset($cabin_qode_options['single_image_hover_color']) && $cabin_qode_options['single_image_hover_color'] !== '') {
    if(isset($cabin_qode_options['single_image_hover_transparency']) && $cabin_qode_options['single_image_hover_transparency'] !== ''){
        $single_image_transparency = $cabin_qode_options['single_image_hover_transparency'];
    }
    $single_image_color = cabin_qode_hex2rgb($cabin_qode_options['single_image_hover_color']); ?>

    .prettyphoto_container:hover span{
    background-color: rgba(<?php echo esc_attr($single_image_color[0]); ?>,<?php echo esc_attr($single_image_color[1]); ?>, <?php echo esc_attr($single_image_color[2]); ?>, <?php echo esc_attr($single_image_transparency); ?>);
    }
<?php } ?>

    .preload_background{
<?php if(isset($cabin_qode_options['preload_pattern_image']) && $cabin_qode_options['preload_pattern_image'] !== '' ) { ?>
    background-image: url("<?php echo esc_attr($cabin_qode_options['preload_pattern_image']); ?>") !important;
<?php }else{ ?>
    background-image: url("<?php echo esc_url(CABIN_QODE_ROOT."/img/preload_pattern.png"); ?>") !important;
<?php } ?>
    }

<?php if(isset($cabin_qode_options['paspartu']) && $cabin_qode_options['paspartu'] == 'yes') { ?>
    <?php if(isset($cabin_qode_options['paspartu_color']) && $cabin_qode_options['paspartu_color'] !== ''){?>
        .paspartu_outer,
        .paspartu_left,
        .paspartu_right,
        .paspartu_top,
        .paspartu_bottom,
        .paspartu_outer .q_slider,
        .paspartu_outer .content:not(.has_slider) .content_inner{
        background-color: <?php echo esc_attr($cabin_qode_options['paspartu_color']); ?>;
        }
    <?php } ?>

    <?php if(isset($cabin_qode_options['paspartu_width']) && $cabin_qode_options['paspartu_width'] !== ''){?>
        .paspartu_outer,
        .paspartu_outer .content_wrapper{
        padding: 0 <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>% <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>% <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        body:not(.paspartu_on_top_fixed) .paspartu_outer .content:not(.has_slider) .content_inner,
        .paspartu_top,
        .paspartu_bottom,
        .paspartu_on_top_fixed header,
        .paspartu_on_top_fixed .paspartu_outer .content_wrapper{
        padding-top: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        .paspartu_on_bottom_fixed footer{
        margin-bottom: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        .paspartu_left,
        .paspartu_right{
        width: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        header.paspartu_header_alignment .header_bottom{
        padding: 0px <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        header.paspartu_header_inside{
        padding-left: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        padding-right: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        .paspartu_enabled .vertical_split_slider_preloader{
        width: <?php echo 100 - esc_attr($cabin_qode_options['paspartu_width'])*2; ?>%;
        margin: 0 <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }

        @media only screen and (min-width: 1024px) {
        header.paspartu_header_alignment .header_inner_left{
        left: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
        }
        }
    <?php } ?>

    <?php if( isset($cabin_qode_options['header_bottom_appearance']) && ($cabin_qode_options['header_bottom_appearance']=="fixed" || $cabin_qode_options['header_bottom_appearance']=="fixed_hiding")){
        if(isset($cabin_qode_options['paspartu_width']) && $cabin_qode_options['paspartu_width'] !== ''){
            ?>
            body.paspartu_on_top_fixed .paspartu_outer .content .content_inner{
            padding-top: <?php echo esc_attr($cabin_qode_options['paspartu_width']); ?>%;
            }
            <?php
        }else{ ?>
            body.paspartu_on_top_fixed .paspartu_outer .content .content_inner{
            padding-top: 2% !important;
            }
            <?php
        }
        ?>
        @media only screen and (max-width: 1024px) {
        body.paspartu_on_top_fixed .paspartu_outer .content .content_inner{
        padding-top: 0% !important;
        }
        }
        <?php
    }
    ?>

<?php } ?>

<?php if($cabin_qode_options['overlapping_content'] == 'yes'){ ?>
    <?php if($cabin_qode_options['overlapping_content_amount'] !== ''){ ?>
        .overlapping_content .content .content_inner > .container > .overlapping_content,
        .overlapping_content .content .content_inner > .full_width > .full_width_inner{
        margin-top: -<?php echo esc_attr($cabin_qode_options['overlapping_content_amount']); ?>px;
        }

        .overlapping_content .title .title_holder .container{
        padding-bottom: <?php echo esc_attr($cabin_qode_options['overlapping_content_amount']); ?>px;
        }
    <?php } ?>

    <?php if($cabin_qode_options['overlapping_content_padding'] !== ''){ ?>
        .overlapping_content .content .content_inner > .container > .overlapping_content{
        padding: 0px <?php echo esc_attr($cabin_qode_options['overlapping_content_padding']); ?>px;
        }

        .overlapping_content_margin{
        margin: 0px -<?php echo esc_attr($cabin_qode_options['overlapping_content_padding']); ?>px;
        }
    <?php } ?>
<?php } ?>

<?php

/*
* Blog Slider
*/

$blog_slider_title_styles = array();

if(isset($cabin_qode_options['blog_slider_title_font_family']) && $cabin_qode_options['blog_slider_title_font_family'] !== '-1') {
    $blog_slider_title_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_slider_title_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_slider_title_font_size']) && $cabin_qode_options['blog_slider_title_font_size'] !== '') {
    $blog_slider_title_styles[] = 'font-size: '.$cabin_qode_options['blog_slider_title_font_size'].'px';
}

if(isset($cabin_qode_options['blog_slider_title_line_height']) && $cabin_qode_options['blog_slider_title_line_height'] !== '') {
    $blog_slider_title_styles[] = 'line-height: '.$cabin_qode_options['blog_slider_title_line_height'].'px';
}

if(isset($cabin_qode_options['blog_slider_title_letter_spacing']) && $cabin_qode_options['blog_slider_title_letter_spacing'] !== '') {
    $blog_slider_title_styles[] = 'letter-spacing: '.$cabin_qode_options['blog_slider_title_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_slider_title_font_weight']) && $cabin_qode_options['blog_slider_title_font_weight'] !== '') {
    $blog_slider_title_styles[] = 'font-weight: '.$cabin_qode_options['blog_slider_title_font_weight'];
}

if(isset($cabin_qode_options['blog_slider_title_font_style']) && $cabin_qode_options['blog_slider_title_font_style'] !== '') {
    $blog_slider_title_styles[] = 'font-style: '.$cabin_qode_options['blog_slider_title_font_style'];
}

if(isset($cabin_qode_options['blog_slider_title_text_transform']) && $cabin_qode_options['blog_slider_title_text_transform'] !== '') {
    $blog_slider_title_styles[] = 'text-transform: '.$cabin_qode_options['blog_slider_title_text_transform'];
}

if(isset($cabin_qode_options['blog_slider_title_color']) && $cabin_qode_options['blog_slider_title_color'] !== '') {
    $blog_slider_title_styles[] = 'color: '.$cabin_qode_options['blog_slider_title_color'];
}

if(is_array($blog_slider_title_styles) && count($blog_slider_title_styles)) { ?>
    .blog_slider .blog_text_holder .blog_slider_title a,
    .blog_slider .blog_text_holder .blog_slider_title{
    <?php echo esc_attr(implode(';', $blog_slider_title_styles)); ?>
    }

<?php }?>

<?php
if(isset($cabin_qode_options['blog_slider_title_hover_color']) && $cabin_qode_options['blog_slider_title_hover_color'] !== '') {?>

    .blog_slider .blog_text_holder .blog_slider_title a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_slider_title_hover_color']); ?>;
    }


<?php } ?>

<?php

$blog_slider_category_styles = array();

if(isset($cabin_qode_options['blog_slider_category_font_family']) && $cabin_qode_options['blog_slider_category_font_family'] !== '-1') {
    $blog_slider_category_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_slider_category_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_slider_category_font_size']) && $cabin_qode_options['blog_slider_category_font_size'] !== '') {
    $blog_slider_category_styles[] = 'font-size: '.$cabin_qode_options['blog_slider_category_font_size'].'px';
}

if(isset($cabin_qode_options['blog_slider_category_line_height']) && $cabin_qode_options['blog_slider_category_line_height'] !== '') {
    $blog_slider_category_styles[] = 'line-height: '.$cabin_qode_options['blog_slider_category_line_height'].'px';
}

if(isset($cabin_qode_options['blog_slider_category_letter_spacing']) && $cabin_qode_options['blog_slider_category_letter_spacing'] !== '') {
    $blog_slider_category_styles[] = 'letter-spacing: '.$cabin_qode_options['blog_slider_category_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_slider_category_font_weight']) && $cabin_qode_options['blog_slider_category_font_weight'] !== '') {
    $blog_slider_category_styles[] = 'font-weight: '.$cabin_qode_options['blog_slider_category_font_weight'];
}

if(isset($cabin_qode_options['blog_slider_category_font_style']) && $cabin_qode_options['blog_slider_category_font_style'] !== '') {
    $blog_slider_category_styles[] = 'font-style: '.$cabin_qode_options['blog_slider_category_font_style'];
}

if(isset($cabin_qode_options['blog_slider_category_text_transform']) && $cabin_qode_options['blog_slider_category_text_transform'] !== '') {
    $blog_slider_category_styles[] = 'text-transform: '.$cabin_qode_options['blog_slider_category_text_transform'];
}

if(isset($cabin_qode_options['blog_slider_category_color']) && $cabin_qode_options['blog_slider_category_color'] !== '') {
    $blog_slider_category_styles[] = 'color: '.$cabin_qode_options['blog_slider_category_color'];
}

if(is_array($blog_slider_category_styles) && count($blog_slider_category_styles)) { ?>
    .blog_slider .blog_text_holder .blog_slider_categories a{
    <?php echo esc_attr(implode(';', $blog_slider_category_styles)); ?>
    }

<?php }?>

<?php
if(isset($cabin_qode_options['blog_slider_category_hover_color']) && $cabin_qode_options['blog_slider_category_hover_color'] !== '') {?>

    .blog_slider .blog_text_holder .blog_slider_categories a:hover{
    color: <?php echo esc_attr($cabin_qode_options['blog_slider_category_hover_color']); ?>;
    }


<?php } ?>

<?php

$blog_slider_date_styles = array();

if(isset($cabin_qode_options['blog_slider_date_font_family']) && $cabin_qode_options['blog_slider_date_font_family'] !== '-1') {
    $blog_slider_date_styles[] = 'font-family: '.str_replace('+', ' ', $cabin_qode_options['blog_slider_date_font_family']).', sans-serif';
}

if(isset($cabin_qode_options['blog_slider_date_font_size']) && $cabin_qode_options['blog_slider_date_font_size'] !== '') {
    $blog_slider_date_styles[] = 'font-size: '.$cabin_qode_options['blog_slider_date_font_size'].'px';
}

if(isset($cabin_qode_options['blog_slider_date_line_height']) && $cabin_qode_options['blog_slider_date_line_height'] !== '') {
    $blog_slider_date_styles[] = 'line-height: '.$cabin_qode_options['blog_slider_date_line_height'].'px';
}

if(isset($cabin_qode_options['blog_slider_date_letter_spacing']) && $cabin_qode_options['blog_slider_date_letter_spacing'] !== '') {
    $blog_slider_date_styles[] = 'letter-spacing: '.$cabin_qode_options['blog_slider_date_letter_spacing'].'px';
}

if(isset($cabin_qode_options['blog_slider_date_font_weight']) && $cabin_qode_options['blog_slider_date_font_weight'] !== '') {
    $blog_slider_date_styles[] = 'font-weight: '.$cabin_qode_options['blog_slider_date_font_weight'];
}

if(isset($cabin_qode_options['blog_slider_date_font_style']) && $cabin_qode_options['blog_slider_date_font_style'] !== '') {
    $blog_slider_date_styles[] = 'font-style: '.$cabin_qode_options['blog_slider_date_font_style'];
}

if(isset($cabin_qode_options['blog_slider_date_text_transform']) && $cabin_qode_options['blog_slider_date_text_transform'] !== '') {
    $blog_slider_date_styles[] = 'text-transform: '.$cabin_qode_options['blog_slider_date_text_transform'];
}

if(isset($cabin_qode_options['blog_slider_date_color']) && $cabin_qode_options['blog_slider_date_color'] !== '') {
    $blog_slider_date_styles[] = 'color: '.$cabin_qode_options['blog_slider_date_color'];
}

if(is_array($blog_slider_date_styles) && count($blog_slider_date_styles)) { ?>
    .blog_slider .blog_text_holder .blog_slider_date_holder{
    <?php echo esc_attr(implode(';', $blog_slider_date_styles)); ?>
    }

<?php }?>


<?php
$q_carousel_navigation_styles = '';
$temp_rgb_color = '';
$temp_transparency_arrow = '';
$temp_transparency = '';
$temp_transparency_border = '';
if(isset($cabin_qode_options['carousel_navigation_button_width']) && ($cabin_qode_options['carousel_navigation_button_width'] !== '')) {
    $q_carousel_navigation_styles .= 'width: '.esc_attr($cabin_qode_options['carousel_navigation_button_width']).'px;';
}
if(isset($cabin_qode_options['carousel_navigation_button_height']) && ($cabin_qode_options['carousel_navigation_button_height'] !== '')) {
    $q_carousel_navigation_styles .= 'height: '.esc_attr($cabin_qode_options['carousel_navigation_button_height']).'px;';
    $q_carousel_navigation_styles .= 'margin-top: -'.esc_attr(($cabin_qode_options['carousel_navigation_button_height']/2)).'px;';
    $q_carousel_navigation_styles .= 'line-height: '.esc_attr($cabin_qode_options['carousel_navigation_button_height']).'px;';
}
if(isset($cabin_qode_options['carousel_navigation_arrow_size']) && ($cabin_qode_options['carousel_navigation_arrow_size'] !== '')) {
    $q_carousel_navigation_styles .= 'font-size: '.esc_attr($cabin_qode_options['carousel_navigation_arrow_size']).'px;';
}
if(isset($cabin_qode_options['carousel_navigation_arrow_color']) && !empty($cabin_qode_options['carousel_navigation_arrow_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['carousel_navigation_arrow_color']);
    if(isset($cabin_qode_options['carousel_navigation_arrow_transparency']) && ($cabin_qode_options['carousel_navigation_arrow_transparency']!== '')) {
        $temp_transparency_arrow = $cabin_qode_options['carousel_navigation_arrow_transparency'];
    }
    else{
        $temp_transparency_arrow = 1;
    }
    $q_carousel_navigation_styles .= 'color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_arrow.');';

}

if(isset($cabin_qode_options['carousel_navigation_background_color']) && !empty($cabin_qode_options['carousel_navigation_background_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['carousel_navigation_background_color']);
    if(isset($cabin_qode_options['carousel_navigation_background_transparency']) && ($cabin_qode_options['carousel_navigation_background_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['carousel_navigation_background_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $q_carousel_navigation_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency).');';
}

if(isset($cabin_qode_options['carousel_navigation_border_color']) && !empty($cabin_qode_options['carousel_navigation_border_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['carousel_navigation_border_color']);
    if(isset($cabin_qode_options['carousel_navigation_border_transparency']) && ($cabin_qode_options['carousel_navigation_border_transparency']!== '')) {
        $temp_transparency_border = $cabin_qode_options['carousel_navigation_border_transparency'];
    }
    else{
        $temp_transparency_border = 1;
    }
    $q_carousel_navigation_styles .= 'border-color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_border.'); ';

}

if(isset($cabin_qode_options['carousel_navigation_border_width']) && ($cabin_qode_options['carousel_navigation_border_width'] !== '')) {
    $q_carousel_navigation_styles .= 'border-width:'.esc_attr($cabin_qode_options['carousel_navigation_border_width']).'px; ';
    $q_carousel_navigation_styles .= 'border-style:solid;';
}

if(isset($cabin_qode_options['carousel_navigation_border_radius']) && ($cabin_qode_options['carousel_navigation_border_radius'] !== '')) {
    $q_carousel_navigation_styles .= 'border-radius:'.esc_attr($cabin_qode_options['carousel_navigation_border_radius']).'px;';
}


if($q_carousel_navigation_styles !== '') {
    ?>
    .qode_image_gallery_no_space .controls a.prev-slide,
    .qode_image_gallery_no_space .controls a.next-slide,
    .qode_carousels .caroufredsel-direction-nav .caroufredsel-navigation-item,
    .caroufredsel-direction-nav a{
    <?php echo esc_attr($q_carousel_navigation_styles); ?>
    }

    <?php
}
?>

<?php
$q_carousel_navigation_hover_styles = '';
$temp_hover_transparency = '';
if(isset($cabin_qode_options['carousel_navigation_arrow_hover_color']) && !empty($cabin_qode_options['carousel_navigation_arrow_hover_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['carousel_navigation_arrow_hover_color']);
    if(isset($cabin_qode_options['carousel_navigation_arrow_hover_transparency']) && ($cabin_qode_options['carousel_navigation_arrow_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['carousel_navigation_arrow_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_carousel_navigation_hover_styles .= 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
}
$temp_hover_transparency = '';
if(isset($cabin_qode_options['carousel_navigation_background_hover_color']) && !empty($cabin_qode_options['carousel_navigation_background_hover_color'])) {

    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['carousel_navigation_background_hover_color']);
    if(isset($cabin_qode_options['carousel_navigation_background_hover_transparency']) && ($cabin_qode_options['carousel_navigation_background_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['carousel_navigation_background_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_carousel_navigation_hover_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
}
$temp_hover_transparency = '';
if(isset($cabin_qode_options['carousel_navigation_border_hover_color']) && !empty($cabin_qode_options['carousel_navigation_border_hover_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['carousel_navigation_border_hover_color']);
    if(isset($cabin_qode_options['carousel_navigation_border_hover_transparency']) && ($cabin_qode_options['carousel_navigation_border_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['carousel_navigation_border_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_carousel_navigation_hover_styles .= 'border-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).')';
}
if($q_carousel_navigation_hover_styles !== '') {
    ?>
    .qode_image_gallery_no_space .controls a.prev-slide:hover,
    .qode_image_gallery_no_space .controls a.next-slide:hover,
    .qode_carousels .caroufredsel-direction-nav .caroufredsel-navigation-item:hover,
    .portfolio_slider:hover .caroufredsel-direction-nav a:hover,
    .blog_slider:hover .caroufredsel-direction-nav a:hover
    {
    <?php echo esc_attr($q_carousel_navigation_hover_styles); ?>
    }

    <?php
}
?>

<?php
if(isset($cabin_qode_options['carousel_navigation_button_position']) && ($cabin_qode_options['carousel_navigation_button_position'] !== "")) { ?>
    .qode_image_gallery_no_space .controls a.prev-slide,
    .content_slider .flex-direction-nav a.flex-prev,
    .portfolio_slider .caroufredsel-prev,
    .qode_carousels .caroufredsel-direction-nav .qode_carousel_prev,
    .blog_slider .caroufredsel-prev,
    body.boxed .portfolio_slider .caroufredsel-prev,
    body.boxed .blog_slider .caroufredsel-prev,
    body.boxed .full_width .section_inner .portfolio_slider .caroufredsel-prev,
    body.boxed .full_width .section_inner .blog_slider .caroufredsel-prev{
    left: <?php echo esc_attr($cabin_qode_options['carousel_navigation_button_position']); ?>px;
    }
    .qode_image_gallery_no_space .controls a.next-slide,
    .content_slider .flex-direction-nav a.flex-next,
    .portfolio_slider .caroufredsel-next,
    .qode_carousels .caroufredsel-direction-nav .qode_carousel_next,
    .blog_slider .caroufredsel-next,
    body.boxed .portfolio_slider .caroufredsel-next,
    body.boxed .blog_slider .caroufredsel-next,
    body.boxed .full_width .section_inner .portfolio_slider .caroufredsel-next,
    body.boxed .full_width .section_inner .blog_slider .caroufredsel-next{
    right: <?php echo esc_attr($cabin_qode_options['carousel_navigation_button_position']); ?>px;
    }
<?php } ?>

<?php
$carousel_navigation_button_style = '';
if(isset($cabin_qode_options['carousel_navigation_show_button_shadow']) && $cabin_qode_options['carousel_navigation_show_button_shadow'] == 'yes') {
    $carousel_navigation_button_h_shadow = '1';
    if(isset($cabin_qode_options['carousel_navigation_button_h_shadow']) && $cabin_qode_options['carousel_navigation_button_h_shadow'] !== '') {
        $carousel_navigation_button_h_shadow = $cabin_qode_options['carousel_navigation_button_h_shadow'];
    }

    $carousel_navigation_button_v_shadow = '1';
    if(isset($cabin_qode_options['carousel_navigation_button_v_shadow']) && $cabin_qode_options['carousel_navigation_button_v_shadow'] !== '') {
        $carousel_navigation_button_v_shadow = $cabin_qode_options['carousel_navigation_button_v_shadow'];
    }

    $carousel_navigation_button_blur = '1';
    if(isset($cabin_qode_options['carousel_navigation_button_blur']) && $cabin_qode_options['carousel_navigation_button_blur'] !== '') {
        $carousel_navigation_button_blur = $cabin_qode_options['carousel_navigation_button_blur'];
    }

    $carousel_navigation_button_spread = '1';
    if(isset($cabin_qode_options['carousel_navigation_button_spread']) && $cabin_qode_options['carousel_navigation_button_spread'] !== '') {
        $carousel_navigation_button_spread = $cabin_qode_options['carousel_navigation_button_spread'];
    }

    $carousel_navigation_button_shadow_color = '#afafaf';
    if(isset($cabin_qode_options['carousel_navigation_button_shadow_color']) && $cabin_qode_options['carousel_navigation_button_shadow_color'] !== '') {
        $carousel_navigation_button_color = $cabin_qode_options['carousel_navigation_button_shadow_color'];
    }

    $carousel_navigation_button_style = 'box-shadow: '.esc_attr($carousel_navigation_button_h_shadow.'px '.$carousel_navigation_button_v_shadow.'px '.$carousel_navigation_button_blur.'px '.$carousel_navigation_button_spread.'px '.$carousel_navigation_button_color).';';
    if($carousel_navigation_button_style != '') { ?>
        .qode_image_gallery_no_space .controls a.prev-slide,
        .qode_image_gallery_no_space .controls a.next-slide,
        .caroufredsel-direction-nav a{
        <?php echo esc_attr($carousel_navigation_button_style); ?>
        }
    <?php }
}?>



<?php
$q_single_slider_navigation_styles = '';
$temp_rgb_color = '';
$temp_transparency_arrow = '';
$temp_transparency = '';
$temp_transparency_border = '';
$q_single_slider_navigation_color_important = '';
if(isset($cabin_qode_options['single_slider_navigation_button_width']) && ($cabin_qode_options['single_slider_navigation_button_width'] !== '')) {
    $q_single_slider_navigation_styles .= 'width: '.esc_attr($cabin_qode_options['single_slider_navigation_button_width']).'px;';
}
if(isset($cabin_qode_options['single_slider_navigation_button_height']) && ($cabin_qode_options['single_slider_navigation_button_height'] !== '')) {
    $q_single_slider_navigation_styles .= 'height: '.esc_attr($cabin_qode_options['single_slider_navigation_button_height']).'px;';
    $q_single_slider_navigation_styles .= 'margin-top: -'.esc_attr(($cabin_qode_options['single_slider_navigation_button_height']/2)).'px;';
    $q_single_slider_navigation_styles .= 'line-height: '.esc_attr($cabin_qode_options['single_slider_navigation_button_height']).'px;';
}
if(isset($cabin_qode_options['single_slider_navigation_arrow_size']) && ($cabin_qode_options['single_slider_navigation_arrow_size'] !== '')) {
    $q_single_slider_navigation_styles .= 'font-size: '.esc_attr($cabin_qode_options['single_slider_navigation_arrow_size']).'px;';
}
if(isset($cabin_qode_options['single_slider_navigation_arrow_color']) && !empty($cabin_qode_options['single_slider_navigation_arrow_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['single_slider_navigation_arrow_color']);
    if(isset($cabin_qode_options['single_slider_navigation_arrow_transparency']) && ($cabin_qode_options['single_slider_navigation_arrow_transparency']!== '')) {
        $temp_transparency_arrow = $cabin_qode_options['single_slider_navigation_arrow_transparency'];
    }
    else{
        $temp_transparency_arrow = 1;
    }
    $q_single_slider_navigation_styles .= 'color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_arrow.');';
    $q_single_slider_navigation_color_important = 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_arrow).')!important;';
}

if(isset($cabin_qode_options['single_slider_navigation_background_color']) && !empty($cabin_qode_options['single_slider_navigation_background_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['single_slider_navigation_background_color']);
    if(isset($cabin_qode_options['single_slider_navigation_background_transparency']) && ($cabin_qode_options['single_slider_navigation_background_transparency']!== '')) {
        $temp_transparency = $cabin_qode_options['single_slider_navigation_background_transparency'];
    }
    else{
        $temp_transparency = 1;
    }
    $q_single_slider_navigation_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency).');';
}

if(isset($cabin_qode_options['single_slider_navigation_border_color']) && !empty($cabin_qode_options['single_slider_navigation_border_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['single_slider_navigation_border_color']);
    if(isset($cabin_qode_options['single_slider_navigation_border_transparency']) && ($cabin_qode_options['single_slider_navigation_border_transparency']!== '')) {
        $temp_transparency_border = $cabin_qode_options['single_slider_navigation_border_transparency'];
    }
    else{
        $temp_transparency_border = 1;
    }
    $q_single_slider_navigation_styles .= 'border-color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency_border.'); ';
}

if(isset($cabin_qode_options['single_slider_navigation_border_width']) && ($cabin_qode_options['single_slider_navigation_border_width'] !== '')) {
    $q_single_slider_navigation_styles .= 'border-width:'.esc_attr($cabin_qode_options['single_slider_navigation_border_width']).'px; ';
    $q_single_slider_navigation_styles .= 'border-style:solid;';
}

if(isset($cabin_qode_options['single_slider_navigation_border_radius']) && ($cabin_qode_options['single_slider_navigation_border_radius'] !== '')) {
    $q_single_slider_navigation_styles .= 'border-radius:'.esc_attr($cabin_qode_options['single_slider_navigation_border_radius']).'px;';
}


if($q_single_slider_navigation_styles !== '') {
    ?>
    .flex-direction-nav a,
    body div.pp_default a.pp_next,
    body div.pp_default a.pp_previous{
    <?php echo esc_attr($q_single_slider_navigation_styles); ?>
    }

    <?php
    if($q_single_slider_navigation_color_important != ''){ ?>
        body div.pp_default a.pp_next:after,
        body div.pp_default a.pp_previous:after{
        <?php echo esc_attr($q_single_slider_navigation_color_important);?>
        }
    <?php } ?>

    <?php
}
?>

<?php
$q_single_slider_navigation_hover_styles = '';
$temp_hover_transparency = '';
$q_single_slider_navigation_hover_color_important = '';
if(isset($cabin_qode_options['single_slider_navigation_arrow_hover_color']) && !empty($cabin_qode_options['single_slider_navigation_arrow_hover_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['single_slider_navigation_arrow_hover_color']);
    if(isset($cabin_qode_options['single_slider_navigation_arrow_hover_transparency']) && ($cabin_qode_options['single_slider_navigation_arrow_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['single_slider_navigation_arrow_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_single_slider_navigation_hover_styles .= 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
    $q_single_slider_navigation_hover_color_important = 'color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).')!important;';

}
$temp_hover_transparency = '';
if(isset($cabin_qode_options['single_slider_navigation_background_hover_color']) && !empty($cabin_qode_options['single_slider_navigation_background_hover_color'])) {

    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['single_slider_navigation_background_hover_color']);
    if(isset($cabin_qode_options['single_slider_navigation_background_hover_transparency']) && ($cabin_qode_options['single_slider_navigation_background_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['single_slider_navigation_background_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_single_slider_navigation_hover_styles .= 'background-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).');';
}
$temp_hover_transparency = '';
if(isset($cabin_qode_options['single_slider_navigation_border_hover_color']) && !empty($cabin_qode_options['single_slider_navigation_border_hover_color'])) {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['single_slider_navigation_border_hover_color']);
    if(isset($cabin_qode_options['single_slider_navigation_border_hover_transparency']) && ($cabin_qode_options['single_slider_navigation_border_hover_transparency']!== '')) {
        $temp_hover_transparency = $cabin_qode_options['single_slider_navigation_border_hover_transparency'];
    }
    else {$temp_hover_transparency = 1;}
    $q_single_slider_navigation_hover_styles .= 'border-color: rgba('.esc_attr($temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_hover_transparency).')';
}
if($q_single_slider_navigation_hover_styles !== '') {
    ?>
    .flexslider:hover .flex-direction-nav a:hover,
    body div.pp_default a.pp_next:hover, body div.pp_default a.pp_previous:hover{
    <?php echo esc_attr($q_single_slider_navigation_hover_styles); ?>
    }

    <?php
    if($q_single_slider_navigation_hover_color_important != ''){ ?>
        body div.pp_default a.pp_next:hover:after,
        body div.pp_default a.pp_previous:hover:after{
        <?php echo esc_attr($q_single_slider_navigation_hover_color_important); ?>
        }
    <?php } ?>

    <?php
}
?>

<?php
if(isset($cabin_qode_options['single_slider_navigation_button_position']) && ($cabin_qode_options['single_slider_navigation_button_position'] !== "")) { ?>
    .flexslider .flex-prev,
    .blog_holder.masonry .flexslider .flex-prev,
    .blog_holder.masonry_full_width .flexslider .flex-prev,
    .grid2 .blog_holder .flexslider .flex-prev,
    body.boxed .flexslider .flex-prev{
    left: <?php echo esc_attr($cabin_qode_options['single_slider_navigation_button_position']); ?>px;
    }
    .flexslider .flex-next,
    .blog_holder.masonry .flexslider .flex-next,
    .blog_holder.masonry_full_width .flexslider .flex-next,
    .grid2 .blog_holder .flexslider .flex-next,
    body.boxed .flexslider .flex-next{
    right: <?php echo esc_attr($cabin_qode_options['single_slider_navigation_button_position']); ?>px;

    }
<?php } ?>

<?php
$single_slider_navigation_button_style = '';
if(isset($cabin_qode_options['single_slider_navigation_show_button_shadow']) && $cabin_qode_options['single_slider_navigation_show_button_shadow'] == 'yes') {
    $single_slider_navigation_button_h_shadow = '1';
    if(isset($cabin_qode_options['single_slider_navigation_button_h_shadow']) && $cabin_qode_options['single_slider_navigation_button_h_shadow'] !== '') {
        $single_slider_navigation_button_h_shadow = $cabin_qode_options['single_slider_navigation_button_h_shadow'];
    }

    $single_slider_navigation_button_v_shadow = '1';
    if(isset($cabin_qode_options['single_slider_navigation_button_v_shadow']) && $cabin_qode_options['single_slider_navigation_button_v_shadow'] !== '') {
        $single_slider_navigation_button_v_shadow = $cabin_qode_options['single_slider_navigation_button_v_shadow'];
    }

    $single_slider_navigation_button_blur = '1';
    if(isset($cabin_qode_options['single_slider_navigation_button_blur']) && $cabin_qode_options['single_slider_navigation_button_blur'] !== '') {
        $single_slider_navigation_button_blur = $cabin_qode_options['single_slider_navigation_button_blur'];
    }

    $single_slider_navigation_button_spread = '1';
    if(isset($cabin_qode_options['single_slider_navigation_button_spread']) && $cabin_qode_options['single_slider_navigation_button_spread'] !== '') {
        $single_slider_navigation_button_spread = $cabin_qode_options['single_slider_navigation_button_spread'];
    }

    $single_slider_navigation_button_shadow_color = '#afafaf';
    if(isset($cabin_qode_options['single_slider_navigation_button_shadow_color']) && $cabin_qode_options['single_slider_navigation_button_shadow_color'] !== '') {
        $single_slider_navigation_button_color = $cabin_qode_options['single_slider_navigation_button_shadow_color'];
    }

    $single_slider_navigation_button_style = 'box-shadow: '.esc_attr($single_slider_navigation_button_h_shadow.'px '.$single_slider_navigation_button_v_shadow.'px '.$single_slider_navigation_button_blur.'px '.$single_slider_navigation_button_spread.'px '.$single_slider_navigation_button_color).';';
    if($single_slider_navigation_button_style != '') { ?>
        .flex-direction-nav a,
        body div.pp_default a.pp_next,
        body div.pp_default a.pp_previous{
        <?php echo esc_attr($single_slider_navigation_button_style); ?>
        }
    <?php }
}?>


<?php
/*Portfolio Single Navigation*/
$portfolio_single_navigation_style = "";
$portfolio_single_navigation_hover_style = "";
$portfolio_navigation_height = "";
$portfolio_navigation_from_arrows_height = 0;
$portfolio_navigation_from_custom_icon_height = 0;

if(isset($cabin_qode_options['portfolio_single_navigation_arrow_size']) && $cabin_qode_options['portfolio_single_navigation_arrow_size'] !== '') {
    $portfolio_single_navigation_style .= 'font-size: ' . $cabin_qode_options['portfolio_single_navigation_arrow_size'] . 'px; ';
}
if(isset($cabin_qode_options['portfolio_single_navigation_arrow_color']) && $cabin_qode_options['portfolio_single_navigation_arrow_color'] !== '') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_single_navigation_arrow_color']);
    if(isset($cabin_qode_options['portfolio_single_navigation_arrow_transparency']) && $cabin_qode_options['portfolio_single_navigation_arrow_transparency'] !== '') {
        $portfolio_single_arrow_transparency = $cabin_qode_options['portfolio_single_navigation_arrow_transparency'];
    }
    else {
        $portfolio_single_arrow_transparency = 1;
    }
    $portfolio_single_navigation_style .= 'color: rgba(' . $temp_rgb_color[0] . ',' . $temp_rgb_color[1] . ',' . $temp_rgb_color[2] . ',' . $portfolio_single_arrow_transparency . ');';
}

if(isset($cabin_qode_options['portfolio_single_navigation_arrow_hover_color']) && $cabin_qode_options['portfolio_single_navigation_arrow_hover_color'] !== '') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_single_navigation_arrow_hover_color']);
    if(isset($cabin_qode_options['portfolio_single_navigation_arrow_hover_transparency']) && $cabin_qode_options['portfolio_single_navigation_arrow_hover_transparency'] !== '') {
        $portfolio_single_arrow_transparency = $cabin_qode_options['portfolio_single_navigation_arrow_hover_transparency'];
    }
    else {
        $portfolio_single_arrow_transparency = 1;
    }
    $portfolio_single_navigation_hover_style .= 'color: rgba(' . $temp_rgb_color[0] . ',' . $temp_rgb_color[1] . ',' . $temp_rgb_color[2] . ',' . $portfolio_single_arrow_transparency . ');';
}

if(isset($cabin_qode_options['portfolio_single_navigation_background_color']) && $cabin_qode_options['portfolio_single_navigation_background_color'] !== '') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_single_navigation_background_color']);
    if(isset($cabin_qode_options['portfolio_single_navigation_background_transparency']) && $cabin_qode_options['portfolio_single_navigation_background_transparency'] !== '') {
        $portfolio_single_arrow_transparency = $cabin_qode_options['portfolio_single_navigation_background_transparency'];
    }
    else {
        $portfolio_single_arrow_transparency = 1;
    }
    $portfolio_single_navigation_style .= 'background-color: rgba(' . $temp_rgb_color[0] . ',' . $temp_rgb_color[1] . ',' . $temp_rgb_color[2] . ',' . $portfolio_single_arrow_transparency . ');';
}

if(isset($cabin_qode_options['portfolio_single_navigation_background_hover_color']) && $cabin_qode_options['portfolio_single_navigation_background_hover_color'] !== '') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_single_navigation_background_hover_color']);
    if(isset($cabin_qode_options['portfolio_single_navigation_background_hover_transparency']) && $cabin_qode_options['portfolio_single_navigation_background_hover_transparency'] !== '') {
        $portfolio_single_arrow_transparency = $cabin_qode_options['portfolio_single_navigation_background_hover_transparency'];
    }
    else {
        $portfolio_single_arrow_transparency = 1;
    }
    $portfolio_single_navigation_hover_style .= 'background-color: rgba(' . $temp_rgb_color[0] . ',' . $temp_rgb_color[1] . ',' . $temp_rgb_color[2] . ',' . $portfolio_single_arrow_transparency . ');';
}

if(isset($cabin_qode_options['portfolio_single_navigation_border_radius']) && $cabin_qode_options['portfolio_single_navigation_border_radius'] !== '') {
    $portfolio_single_navigation_style .= 'border-radius: ' . $cabin_qode_options['portfolio_single_navigation_border_radius'] . 'px; ';
}

if(isset($cabin_qode_options['portfolio_single_navigation_border_color']) && $cabin_qode_options['portfolio_single_navigation_border_color'] !== '') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_single_navigation_border_color']);
    if(isset($cabin_qode_options['portfolio_single_navigation_border_transparency']) && $cabin_qode_options['portfolio_single_navigation_border_transparency'] !== '') {
        $portfolio_single_arrow_transparency = $cabin_qode_options['portfolio_single_navigation_border_transparency'];
    }
    else {
        $portfolio_single_arrow_transparency = 1;
    }
    $portfolio_single_navigation_style .= 'border-color: rgba(' . $temp_rgb_color[0] . ',' . $temp_rgb_color[1] . ',' . $temp_rgb_color[2] . ',' . $portfolio_single_arrow_transparency . ');';
    $portfolio_single_navigation_style .= 'border-style: solid; ';

    if(isset($cabin_qode_options['portfolio_single_navigation_border_width']) && $cabin_qode_options['portfolio_single_navigation_border_width'] !== '') {
        $portfolio_single_navigation_style .= 'border-width: ' . $cabin_qode_options['portfolio_single_navigation_border_width'] . 'px; ';
    }
    else{
        $portfolio_single_navigation_style .= 'border-width: 1px; ';
    }
}

if(isset($cabin_qode_options['portfolio_single_navigation_border_hover_color']) && $cabin_qode_options['portfolio_single_navigation_border_hover_color'] !== '') {
    $temp_rgb_color = cabin_qode_hex2rgb($cabin_qode_options['portfolio_single_navigation_border_hover_color']);
    if(isset($cabin_qode_options['portfolio_single_navigation_border_hover_transparency']) && $cabin_qode_options['portfolio_single_navigation_border_hover_transparency'] !== '') {
        $portfolio_single_arrow_transparency = $cabin_qode_options['portfolio_single_navigation_border_hover_transparency'];
    }
    else {
        $portfolio_single_arrow_transparency = 1;
    }
    $portfolio_single_navigation_hover_style .= 'border-color: rgba(' . $temp_rgb_color[0] . ',' . $temp_rgb_color[1] . ',' . $temp_rgb_color[2] . ',' . $portfolio_single_arrow_transparency . ');';
}

if(isset($cabin_qode_options['portfolio_single_navigation_button_width']) && $cabin_qode_options['portfolio_single_navigation_button_width'] !== '') {
    $portfolio_single_navigation_style .= 'width: ' . $cabin_qode_options['portfolio_single_navigation_button_width'] . 'px; ';
}

if(isset($cabin_qode_options['portfolio_single_navigation_button_height']) && $cabin_qode_options['portfolio_single_navigation_button_height'] !== '') {
    $portfolio_single_navigation_style .= 'height: ' . $cabin_qode_options['portfolio_single_navigation_button_height'] . 'px; ';
    $portfolio_navigation_from_arrows_height = $cabin_qode_options['portfolio_single_navigation_button_height'];
    if (isset($cabin_qode_options['portfolio_single_navigation_border_color'])  && $cabin_qode_options['portfolio_single_navigation_border_color'] !== ''){
        if(isset($cabin_qode_options['portfolio_single_navigation_border_width']) && $cabin_qode_options['portfolio_single_navigation_border_width'] !== '') {
            $portfolio_navigation_from_arrows_height += 2*$cabin_qode_options['portfolio_single_navigation_border_width'];
        }
        else{
            $portfolio_navigation_from_arrows_height += 2;
        }
    }
    ?>
    .portfolio_single .portfolio_navigation .portfolio_prev span,
    .portfolio_single .portfolio_navigation .portfolio_next span{
    line-height: <?php echo esc_attr($cabin_qode_options['portfolio_single_navigation_button_height']);?>px;
    }

<?php }

?>

    .portfolio_single .portfolio_navigation .portfolio_prev a,
    .portfolio_single .portfolio_navigation .portfolio_next a{
<?php echo esc_attr($portfolio_single_navigation_style);?>
    }

    .portfolio_single .portfolio_navigation .portfolio_prev a:hover,
    .portfolio_single .portfolio_navigation .portfolio_next a:hover{
<?php echo esc_attr($portfolio_single_navigation_hover_style);?>
    }

<?php
if(isset($cabin_qode_options['portfolio_single_navigation_button_position']) && $cabin_qode_options['portfolio_single_navigation_button_position'] !== '') {?>
    .portfolio_single .portfolio_navigation .portfolio_prev{
    left: <?php echo esc_attr($cabin_qode_options['portfolio_single_navigation_button_position']);?>px;
    }
    .portfolio_single .portfolio_navigation .portfolio_next{
    right: <?php echo esc_attr($cabin_qode_options['portfolio_single_navigation_button_position']);?>px;
    }
<?php }
?>

<?php
$portfolio_single_navigation_button_shadow_style = '';
if(isset($cabin_qode_options['portfolio_single_navigation_show_button_shadow']) && $cabin_qode_options['portfolio_single_navigation_show_button_shadow'] == 'yes') {
    $portfolio_single_navigation_button_h_shadow = '1';
    if(isset($cabin_qode_options['portfolio_single_navigation_button_h_shadow']) && $cabin_qode_options['portfolio_single_navigation_button_h_shadow'] !== '') {
        $portfolio_single_navigation_button_h_shadow = $cabin_qode_options['portfolio_single_navigation_button_h_shadow'];
    }

    $portfolio_single_navigation_button_v_shadow = '1';
    if(isset($cabin_qode_options['portfolio_single_navigation_button_v_shadow']) && $cabin_qode_options['portfolio_single_navigation_button_v_shadow'] !== '') {
        $portfolio_single_navigation_button_v_shadow = $cabin_qode_options['portfolio_single_navigation_button_v_shadow'];
    }

    $portfolio_single_navigation_button_blur = '1';
    if(isset($cabin_qode_options['portfolio_single_navigation_button_blur']) && $cabin_qode_options['portfolio_single_navigation_button_blur'] !== '') {
        $portfolio_single_navigation_button_blur = $cabin_qode_options['portfolio_single_navigation_button_blur'];
    }

    $portfolio_single_navigation_button_spread = '1';
    if(isset($cabin_qode_options['portfolio_single_navigation_button_spread']) && $cabin_qode_options['portfolio_single_navigation_button_spread'] !== '') {
        $portfolio_single_navigation_button_spread = $cabin_qode_options['portfolio_single_navigation_button_spread'];
    }

    $portfolio_single_navigation_button_shadow_color = '#afafaf';
    if(isset($cabin_qode_options['portfolio_single_navigation_button_shadow_color']) && $cabin_qode_options['portfolio_single_navigation_button_shadow_color'] !== '') {
        $portfolio_single_navigation_button_shadow_color = $cabin_qode_options['portfolio_single_navigation_button_shadow_color'];
    }

    $portfolio_single_navigation_button_shadow_style = 'box-shadow: '.esc_attr($portfolio_single_navigation_button_h_shadow.'px '.$portfolio_single_navigation_button_v_shadow.'px '.$portfolio_single_navigation_button_blur.'px '.$portfolio_single_navigation_button_spread.'px '.$portfolio_single_navigation_button_shadow_color).';';
    if($portfolio_single_navigation_button_shadow_style != '') { ?>
        .portfolio_single .portfolio_navigation .portfolio_prev a,
        .portfolio_single .portfolio_navigation .portfolio_next a{
        <?php echo esc_attr($portfolio_single_navigation_button_shadow_style); ?>
        }
    <?php }
}?>


<?php
$portfolio_single_navigation_back_to_style = "";
if(isset($cabin_qode_options['portfolio_back_to_button_choice']) && $cabin_qode_options['portfolio_back_to_button_choice'] == 'icon') {

    if(isset($cabin_qode_options['portfolio_back_to_button_icon_color']) && $cabin_qode_options['portfolio_back_to_button_icon_color'] !== '') {
        $portfolio_single_navigation_back_to_style .= 'color: ' . $cabin_qode_options['portfolio_back_to_button_icon_color'] . '; ';
    }

    if(isset($cabin_qode_options['portfolio_back_to_button_icon_size']) && $cabin_qode_options['portfolio_back_to_button_icon_size'] !== '') {
        $portfolio_single_navigation_back_to_style .= 'font-size: ' . $cabin_qode_options['portfolio_back_to_button_icon_size'] . 'px; ';
    }

    if(isset($cabin_qode_options['portfolio_back_to_button_icon_hover_color']) && $cabin_qode_options['portfolio_back_to_button_icon_hover_color'] !== '') {?>
        .portfolio_single .portfolio_button a:hover{
        color: <?php echo esc_attr($cabin_qode_options['portfolio_back_to_button_icon_hover_color']);?>;
        }
    <?php } ?>

    .portfolio_single .portfolio_button a{
    <?php echo esc_attr($portfolio_single_navigation_back_to_style); ?>
    }

<?php }
?>

<?php
if(isset($cabin_qode_options['portfolio_back_to_button_choice']) && $cabin_qode_options['portfolio_back_to_button_choice'] == 'custom_icon') {
    if(isset($cabin_qode_options['portfolio_back_to_button_custom_icon']) && $cabin_qode_options['portfolio_back_to_button_custom_icon'] != "") {
        $portfolio_navigation_custom_icon_src = $cabin_qode_options['portfolio_back_to_button_custom_icon'];
        $portfolio_navigation_custom_icon_dim = cabin_qode_get_image_dimensions($portfolio_navigation_custom_icon_src);
        $portfolio_navigation_custom_icon_height = $portfolio_navigation_custom_icon_dim["height"];
        $portfolio_navigation_custom_icon_width = $portfolio_navigation_custom_icon_dim["width"];
        $portfolio_navigation_from_custom_icon_height = $portfolio_navigation_custom_icon_height; ?>

        .portfolio_single .portfolio_button .portfolio_single_nav_custom{
        background-image: url('<?php echo esc_url($portfolio_navigation_custom_icon_src);?>');
        background-position: center;
        background-repeat: no-repeat;
        width: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px;
        display: block;
        height: <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;

        -webkit-transition: background-image 0.15s ease-in-out;
        -moz-transition: background-image 0.15s ease-in-out;
        -ms-transition: background-image 0.15s ease-in-out;
        -o-transition: background-image 0.15s ease-in-out;
        transition: background-image 0.15s ease-in-out;
        }

        .portfolio_single .portfolio_button{
        width: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px;
        height: <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        }

    <?php } ?>

    <?php
    if(isset($cabin_qode_options['portfolio_back_to_button_custom_hover_icon']) && $cabin_qode_options['portfolio_back_to_button_custom_hover_icon'] != "") {?>
        .portfolio_single .portfolio_button .portfolio_single_nav_custom:hover{
        background-image: url('<?php echo esc_url($cabin_qode_options['portfolio_back_to_button_custom_hover_icon']);?>');
        }
    <?php } ?>

    <?php
    if(isset($cabin_qode_options['portfolio_back_to_button_custom_icon_retina_x15']) && $cabin_qode_options['portfolio_back_to_button_custom_icon_retina_x15'] != "") {?>
        @media only screen and (-webkit-min-device-pixel-ratio:1.5), only screen and (min--moz-device-pixel-ratio:1.5), only screen and (-o-min-device-pixel-ratio:150/100), only screen and (min-device-pixel-ratio:1.5), only screen and (min-resolution:160dpi) {
        .portfolio_single .portfolio_button .portfolio_single_nav_custom{
        background-image: url('<?php echo esc_url($cabin_qode_options['portfolio_back_to_button_custom_icon_retina_x15']);?>');
        -o-background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        -webkit-background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        -moz-background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        }
        }
    <?php } ?>

    <?php
    if(isset($cabin_qode_options['portfolio_back_to_button_custom_hover_icon_retina_x15']) && $cabin_qode_options['portfolio_back_to_button_custom_hover_icon_retina_x15'] != "") {?>
        @media only screen and (-webkit-min-device-pixel-ratio:1.5), only screen and (min--moz-device-pixel-ratio:1.5), only screen and (-o-min-device-pixel-ratio:150/100), only screen and (min-device-pixel-ratio:1.5), only screen and (min-resolution:160dpi) {
        .portfolio_single .portfolio_button .portfolio_single_nav_custom:hover{
        background-image: url('<?php echo esc_url($cabin_qode_options['portfolio_back_to_button_custom_hover_icon_retina_x15']);?>');
        }
        }
    <?php } ?>

    <?php
    if(isset($cabin_qode_options['portfolio_back_to_button_custom_icon_retina_x2']) && $cabin_qode_options['portfolio_back_to_button_custom_icon_retina_x2'] != "") {?>
        @media only screen and (-webkit-min-device-pixel-ratio:2.0), only screen and (min--moz-device-pixel-ratio:2.0), only screen and (-o-min-device-pixel-ratio:200/100), only screen and (min-device-pixel-ratio:2.0), only screen and (min-resolution:210dpi) {
        .portfolio_single .portfolio_button .portfolio_single_nav_custom{
        background-image: url('<?php echo esc_url($cabin_qode_options['portfolio_back_to_button_custom_icon_retina_x2']);?>');
        -o-background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        -webkit-background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        -moz-background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        background-size: <?php echo esc_attr($portfolio_navigation_custom_icon_width);?>px <?php echo esc_attr($portfolio_navigation_custom_icon_height);?>px;
        }
        }
    <?php } ?>

    <?php
    if(isset($cabin_qode_options['portfolio_back_to_button_custom_hover_icon_retina_x2']) && $cabin_qode_options['portfolio_back_to_button_custom_hover_icon_retina_x2'] != "") {?>
        @media only screen and (-webkit-min-device-pixel-ratio:2.0), only screen and (min--moz-device-pixel-ratio:2.0), only screen and (-o-min-device-pixel-ratio:200/100), only screen and (min-device-pixel-ratio:2.0), only screen and (min-resolution:210dpi) {
        .portfolio_single .portfolio_button .portfolio_single_nav_custom:hover{
        background-image: url('<?php echo esc_url($cabin_qode_options['portfolio_back_to_button_custom_hover_icon_retina_x2']);?>');
        }
        }
    <?php }
}
?>

<?php

if ($portfolio_navigation_from_arrows_height > $portfolio_navigation_from_custom_icon_height ){
    $portfolio_navigation_height = $portfolio_navigation_from_arrows_height;
}
else {
    $portfolio_navigation_height = $portfolio_navigation_from_custom_icon_height;
}

if ($portfolio_navigation_height !== 0) {?>
    .portfolio_navigation_inner,
    .portfolio_single .portfolio_button,
    .portfolio_single .portfolio_button .portfolio_single_nav_custom{
    height: <?php echo esc_attr($portfolio_navigation_height)?>px;
    }

    .portfolio_single .portfolio_button a span:before,
    .portfolio_single .portfolio_button a i:before{
    line-height: <?php echo esc_attr($portfolio_navigation_height);?>px;
    }

<?php } ?>

<?php if(cabin_qode_vc_grid_elements_enabled()) {

    $vc_grid_read_more_styles = array();
    $vc_grid_read_more_hover_styles = array();

    if(isset($cabin_qode_options['vc_grid_button_title_color']) && $cabin_qode_options['vc_grid_button_title_color'] !== '') {
        $vc_grid_read_more_styles[] = 'color: '.$cabin_qode_options['vc_grid_button_title_color'] .' !important';
    }

    if(isset($cabin_qode_options['vc_grid_button_title_fontsize']) && $cabin_qode_options['vc_grid_button_title_fontsize'] !== '') {
        $vc_grid_read_more_styles[] = 'font-size: '.$cabin_qode_options['vc_grid_button_title_fontsize'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_button_title_lineheight']) && $cabin_qode_options['vc_grid_button_title_lineheight'] !== '') {
        $vc_grid_read_more_styles[] = 'line-height: '.$cabin_qode_options['vc_grid_button_title_lineheight'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_button_title_letter_spacing']) && $cabin_qode_options['vc_grid_button_title_letter_spacing'] !== '') {
        $vc_grid_read_more_styles[] = 'letter-spacing: '.$cabin_qode_options['vc_grid_button_title_letter_spacing'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_button_title_fontstyle']) && $cabin_qode_options['vc_grid_button_title_fontstyle'] !== '') {
        $vc_grid_read_more_styles[] = 'font-style: '.$cabin_qode_options['vc_grid_button_title_fontstyle'];
    }

    if(isset($cabin_qode_options['vc_grid_button_title_fontweight']) && $cabin_qode_options['vc_grid_button_title_fontweight'] !== '') {
        $vc_grid_read_more_styles[] = 'font-weight: '.$cabin_qode_options['vc_grid_button_title_fontweight'];
    }

    if(isset($cabin_qode_options['vc_grid_button_title_google_fonts']) && $cabin_qode_options['vc_grid_button_title_google_fonts'] !== '-1') {
        $vc_grid_read_more_styles[] = 'font-family: ' . str_replace('+', ' ', $cabin_qode_options['vc_grid_button_title_google_fonts']) . ', sans-serif';
    }

    if(isset($cabin_qode_options['vc_grid_button_backgroundcolor']) && $cabin_qode_options['vc_grid_button_backgroundcolor'] !== '') {
        $vc_grid_read_more_styles[] = 'background-color: ' .$cabin_qode_options['vc_grid_button_backgroundcolor'];
    }

    if(isset($cabin_qode_options['vc_grid_button_border_color']) && $cabin_qode_options['vc_grid_button_border_color'] !== '') {
        $vc_grid_read_more_styles[] = 'border-color: ' .$cabin_qode_options['vc_grid_button_border_color'];
    }

    if(isset($cabin_qode_options['vc_grid_button_border_width']) && $cabin_qode_options['vc_grid_button_border_width'] !== '') {
        $vc_grid_read_more_styles[] = 'border-width: ' .$cabin_qode_options['vc_grid_button_border_width'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_button_border_radius']) && $cabin_qode_options['vc_grid_button_border_radius'] !== '') {
        $vc_grid_read_more_styles[] = 'border-radius: ' .$cabin_qode_options['vc_grid_button_border_radius'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_button_title_hovercolor']) && $cabin_qode_options['vc_grid_button_title_hovercolor'] !== '') {
        $vc_grid_read_more_hover_styles[] = 'color: '.$cabin_qode_options['vc_grid_button_title_hovercolor'] .' !important';
    }

    if(isset($cabin_qode_options['vc_grid_button_backgroundcolor_hover']) && $cabin_qode_options['vc_grid_button_backgroundcolor_hover'] !== '') {
        $vc_grid_read_more_hover_styles[] = 'background-color: '.$cabin_qode_options['vc_grid_button_backgroundcolor_hover'];
    }

    if(isset($cabin_qode_options['vc_grid_button_border_hover_color']) && $cabin_qode_options['vc_grid_button_border_hover_color'] !== '') {
        $vc_grid_read_more_hover_styles[] = 'border-color: '.$cabin_qode_options['vc_grid_button_border_hover_color'];
    }


    if(is_array($vc_grid_read_more_styles) && count($vc_grid_read_more_styles)) { ?>
        .vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn {
        <?php echo esc_attr(implode(';', $vc_grid_read_more_styles)); ?>
        }
    <?php }

    if(is_array($vc_grid_read_more_hover_styles) && count($vc_grid_read_more_hover_styles)) { ?>
        .vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover {
        <?php echo esc_attr(implode(';', $vc_grid_read_more_hover_styles)); ?>
        }
    <?php }

    $vc_grid_load_more_styles = array();
    $vc_grid_load_more_hover_styles = array();

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_color']) && $cabin_qode_options['vc_grid_load_more_button_title_color'] !== '') {
        $vc_grid_load_more_styles[] = 'color: '.$cabin_qode_options['vc_grid_load_more_button_title_color'] .' !important';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_google_fonts']) && $cabin_qode_options['vc_grid_load_more_button_title_google_fonts']
        !== '-1') {
        $vc_grid_load_more_styles[] = 'font-family: '. str_replace('+', ' ', $cabin_qode_options['vc_grid_load_more_button_title_google_fonts']) . ', sans-serif';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_fontsize']) && $cabin_qode_options['vc_grid_load_more_button_title_fontsize'] !== '') {
        $vc_grid_load_more_styles[] = 'font-size: '. $cabin_qode_options['vc_grid_load_more_button_title_fontsize'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_lineheight']) && $cabin_qode_options['vc_grid_load_more_button_title_lineheight'] !== '') {
        $vc_grid_load_more_styles[] = 'line-height: '. $cabin_qode_options['vc_grid_load_more_button_title_lineheight'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_fontstyle']) && $cabin_qode_options['vc_grid_load_more_button_title_fontstyle'] !== '') {
        $vc_grid_load_more_styles[] = 'font-style: '. $cabin_qode_options['vc_grid_load_more_button_title_fontstyle'];
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_fontweight']) && $cabin_qode_options['vc_grid_load_more_button_title_fontweight'] !== '') {
        $vc_grid_load_more_styles[] = 'font-weight: '. $cabin_qode_options['vc_grid_load_more_button_title_fontweight'];
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_letter_spacing']) && $cabin_qode_options['vc_grid_load_more_button_title_letter_spacing'] !== '') {
        $vc_grid_load_more_styles[] = 'letter-spacing: '. $cabin_qode_options['vc_grid_load_more_button_title_letter_spacing'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_backgroundcolor']) && $cabin_qode_options['vc_grid_load_more_button_backgroundcolor'] !== '') {
        $vc_grid_load_more_styles[] = 'background-color: '. $cabin_qode_options['vc_grid_load_more_button_backgroundcolor'];
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_border_color']) && $cabin_qode_options['vc_grid_load_more_button_border_color'] !== '') {
        $vc_grid_load_more_styles[] = 'border-color: '. $cabin_qode_options['vc_grid_load_more_button_border_color'];
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_border_width']) && $cabin_qode_options['vc_grid_load_more_button_border_width'] !== '') {
        $vc_grid_load_more_styles[] = 'border-width: '. $cabin_qode_options['vc_grid_load_more_button_border_width'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_border_radius']) && $cabin_qode_options['vc_grid_load_more_button_border_radius'] !== '') {
        $vc_grid_load_more_styles[] = 'border-radius: '. $cabin_qode_options['vc_grid_load_more_button_border_radius'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_title_hovercolor']) && $cabin_qode_options['vc_grid_load_more_button_title_hovercolor'] !== '') {
        $vc_grid_load_more_hover_styles[] = 'color: '.$cabin_qode_options['vc_grid_load_more_button_title_hovercolor'] .' !important';
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_backgroundcolor_hover']) && $cabin_qode_options['vc_grid_load_more_button_backgroundcolor_hover'] !== '') {
        $vc_grid_load_more_hover_styles[] = 'background-color: '. $cabin_qode_options['vc_grid_load_more_button_backgroundcolor_hover'];
    }

    if(isset($cabin_qode_options['vc_grid_load_more_button_border_hover_color']) && $cabin_qode_options['vc_grid_load_more_button_border_hover_color'] !== '') {
        $vc_grid_load_more_hover_styles[] = 'border-color: '. $cabin_qode_options['vc_grid_load_more_button_border_hover_color'];
    }


    if(is_array($vc_grid_load_more_styles) && count($vc_grid_load_more_styles)) { ?>
        .vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn {
        <?php echo esc_attr(implode(';', $vc_grid_load_more_styles)); ?>
        }
    <?php }

    if(is_array($vc_grid_load_more_hover_styles) && count($vc_grid_load_more_hover_styles)) { ?>
        .vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover {
        <?php echo esc_attr(implode(';', $vc_grid_load_more_hover_styles)); ?>
        }
    <?php }

    $vc_grid_pagination_styles = array();
    $vc_grid_pagination_hover_styles = array();

    if(isset($cabin_qode_options['vc_grid_pagination_color']) && $cabin_qode_options['vc_grid_pagination_color'] !== '') {
        $vc_grid_pagination_styles[] = 'color: '.$cabin_qode_options['vc_grid_pagination_color'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_pagination_background_color']) && $cabin_qode_options['vc_grid_pagination_background_color'] !== '') {
        $vc_grid_pagination_styles[] = 'background-color: '.$cabin_qode_options['vc_grid_pagination_background_color'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_pagination_border_color']) && $cabin_qode_options['vc_grid_pagination_border_color'] !== '') {
        $vc_grid_pagination_styles[] = 'border-color: '.$cabin_qode_options['vc_grid_pagination_border_color'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_pagination_hover_color']) && $cabin_qode_options['vc_grid_pagination_hover_color'] !== '') {
        $vc_grid_pagination_hover_styles[] = 'color: '.$cabin_qode_options['vc_grid_pagination_hover_color'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_pagination_background_hover_color']) && $cabin_qode_options['vc_grid_pagination_background_hover_color'] !== '') {
        $vc_grid_pagination_hover_styles[] = 'background-color: '.$cabin_qode_options['vc_grid_pagination_background_hover_color'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_pagination_border_hover_color']) && $cabin_qode_options['vc_grid_pagination_border_hover_color'] !== '') {
        $vc_grid_pagination_hover_styles[] = 'border-color: '.$cabin_qode_options['vc_grid_pagination_border_hover_color'] . ' !important';
    }

    if(is_array($vc_grid_pagination_styles) && count($vc_grid_pagination_styles)) { ?>
        .vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li > a,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span {
        <?php echo esc_attr(implode(';', $vc_grid_pagination_styles)); ?>
        }
    <?php }

    if(is_array($vc_grid_pagination_hover_styles) && count($vc_grid_pagination_hover_styles)) { ?>
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span:hover,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot.active span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span:hover,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot.active span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span:hover,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot.active span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span:hover,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot.active span,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span:hover,
        .vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot.active span,
        .vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li > a:hover,
        .vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li.vc_grid-active > a {
        <?php echo esc_attr(implode(';', $vc_grid_pagination_hover_styles)); ?>
        }
    <?php }

    $vc_grid_filter_styles = array();
    $vc_grid_filter_hover_styles = array();

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_color']) && $cabin_qode_options['vc_grid_portfolio_filter_color'] !== '') {
        $vc_grid_filter_styles[] = 'color: '.$cabin_qode_options['vc_grid_portfolio_filter_color'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_hovercolor']) && $cabin_qode_options['vc_grid_portfolio_filter_hovercolor'] !== '') {
        $vc_grid_filter_hover_styles[] = 'color: '.$cabin_qode_options['vc_grid_portfolio_filter_hovercolor'] . ' !important';
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_font_size']) && $cabin_qode_options['vc_grid_portfolio_filter_font_size'] !== '') {
        $vc_grid_filter_styles[] = 'font-size: '.$cabin_qode_options['vc_grid_portfolio_filter_font_size'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_line_height']) && $cabin_qode_options['vc_grid_portfolio_filter_line_height'] !== '') {
        $vc_grid_filter_styles[] = 'line-height: '.$cabin_qode_options['vc_grid_portfolio_filter_line_height'].'px';
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_text_transform']) && $cabin_qode_options['vc_grid_portfolio_filter_text_transform'] !== '') {
        $vc_grid_filter_styles[] = 'text-transform: '.$cabin_qode_options['vc_grid_portfolio_filter_text_transform'];
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_font_family']) && $cabin_qode_options['vc_grid_portfolio_filter_font_family'] !== '-1') {
        $vc_grid_filter_styles[] = 'font-family: ' . str_replace('+', ' ', $cabin_qode_options['vc_grid_portfolio_filter_font_family']) . ', sans-serif';
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_font_style']) && $cabin_qode_options['vc_grid_portfolio_filter_font_style'] !== '') {
        $vc_grid_filter_styles[] = 'font-style: '.$cabin_qode_options['vc_grid_portfolio_filter_font_style'];
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_font_weight']) && $cabin_qode_options['vc_grid_portfolio_filter_font_weight'] !== '') {
        $vc_grid_filter_styles[] = 'font-weight: '.$cabin_qode_options['vc_grid_portfolio_filter_font_weight'];
    }

    if(isset($cabin_qode_options['vc_grid_portfolio_filter_letter_spacing']) && $cabin_qode_options['vc_grid_portfolio_filter_letter_spacing'] !== '') {
        $vc_grid_filter_styles[] = 'letter-spacing: '.$cabin_qode_options['vc_grid_portfolio_filter_letter_spacing'].'px';
    }

    if(is_array($vc_grid_filter_styles) && count($vc_grid_filter_styles)) { ?>
        .vc_grid-container .vc_grid-filter > .vc_grid-filter-item span {
        <?php echo esc_attr(implode(';', $vc_grid_filter_styles)); ?>
        }
    <?php }

    if(is_array($vc_grid_filter_hover_styles) && count($vc_grid_filter_hover_styles)) { ?>
        .vc_grid-container .vc_grid-filter > .vc_grid-filter-item:hover span,
        .vc_grid-container .vc_grid-filter > .vc_grid-filter-item.vc_active span {
        <?php echo esc_attr(implode(';', $vc_grid_filter_hover_styles)); ?>
        }
    <?php } ?>

    <?php
    if(isset($cabin_qode_options['vc_grid_portfolio_filter_margin_bottom']) && $cabin_qode_options['vc_grid_portfolio_filter_margin_bottom'] !== '') { ?>
        .vc_grid-container .vc_grid-filter {
        margin-bottom: <?php echo esc_attr($cabin_qode_options['vc_grid_portfolio_filter_margin_bottom']); ?>px;
        }
    <?php } ?>

    <?php if (!empty($cabin_qode_options['vc_grid_arrows_color'])) { ?>
        .vc_grid-container .vc_grid .vc_grid-owl-nav .vc_grid-owl-prev,
        .vc_grid-container .vc_grid .vc_grid-owl-nav .vc_grid-owl-next {
        color: <?php echo esc_attr($cabin_qode_options['vc_grid_arrows_color']);?> !important;
        }
    <?php } ?>

<?php } ?>