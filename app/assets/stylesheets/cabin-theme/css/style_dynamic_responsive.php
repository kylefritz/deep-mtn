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

@media only screen and (max-width: 1400px){

<?php if(isset($cabin_qode_options['blog_slider_title_font_size']) && $cabin_qode_options['blog_slider_title_font_size'] > 25) {?>
    .blog_slider .blog_text_holder .blog_slider_title a{
    font-size: <?php echo esc_attr($cabin_qode_options['blog_slider_title_font_size']) *0.85;  ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_slider_title_line_height']) && $cabin_qode_options['blog_slider_title_line_height'] > 25) {?>
    .blog_slider .blog_text_holder .blog_slider_title a,
    .blog_slider .blog_text_holder .blog_slider_title{
    line-height: <?php echo esc_attr($cabin_qode_options['blog_slider_title_line_height']) *0.85;  ?>px;
    }
<?php } ?>

}

@media only screen and (max-width: 1200px){

<?php if(isset($cabin_qode_options['blog_slider_title_font_size']) && $cabin_qode_options['blog_slider_title_font_size'] > 25) {?>
    .blog_slider .blog_text_holder .blog_slider_title a{
    font-size: <?php echo esc_attr($cabin_qode_options['blog_slider_title_font_size']) *0.8;  ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_slider_title_line_height']) && $cabin_qode_options['blog_slider_title_line_height'] > 25) {?>
    .blog_slider .blog_text_holder .blog_slider_title a,
    .blog_slider .blog_text_holder .blog_slider_title{
    line-height: <?php echo esc_attr($cabin_qode_options['blog_slider_title_line_height']) *0.8;  ?>px;
    }
<?php } ?>

}

@media only screen and (max-width: 1000px){

<?php if (!empty($cabin_qode_options['header_background_color'])) { ?>
    .header_bottom {
    background-color: <?php echo esc_attr($cabin_qode_options['header_background_color']);  ?>;
    }
<?php } ?>
<?php if (!empty($cabin_qode_options['mobile_background_color'])) { ?>
    .header_bottom,
    nav.mobile_menu{
    background-color: <?php echo esc_attr($cabin_qode_options['mobile_background_color']);  ?> !important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['page_subtitle_fontsize']) && ($cabin_qode_options['page_subtitle_fontsize']) < 28 && ($cabin_qode_options['page_subtitle_fontsize']) !== '') { ?>
    .subtitle{
    font-size: <?php echo esc_attr($cabin_qode_options['page_subtitle_fontsize']) *0.8;  ?>px;
    }
<?php }?>

<?php if(isset($cabin_qode_options['blog_slider_title_font_size']) && $cabin_qode_options['blog_slider_title_font_size'] > 25) {?>
    .blog_slider .blog_text_holder .blog_slider_title a{
    font-size: <?php echo esc_attr($cabin_qode_options['blog_slider_title_font_size']) *0.7;  ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['blog_slider_title_line_height']) && $cabin_qode_options['blog_slider_title_line_height'] > 25) {?>
    .blog_slider .blog_text_holder .blog_slider_title a,
    .blog_slider .blog_text_holder .blog_slider_title{
    line-height: <?php echo esc_attr($cabin_qode_options['blog_slider_title_line_height']) *0.7;  ?>px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['portfolio_list_filter_height']) && $cabin_qode_options['portfolio_list_filter_height'] !== '') { ?>
    .filter_outer.filter_portfolio{
    line-height: 2em;
    }
<?php } ?>
}

@media only screen and (min-width: 600px) and (max-width: 768px){
<?php if(isset($cabin_qode_options['h1_fontsize']) && ($cabin_qode_options['h1_fontsize'])>35) { ?>
    .title h1{
    font-size:<?php echo esc_attr($cabin_qode_options['h1_fontsize'])*0.7; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['page_title_fontsize']) && ($cabin_qode_options['page_title_fontsize'])>35) { ?>
    .title h1{
    font-size:<?php echo esc_attr($cabin_qode_options['page_title_fontsize'])*0.7; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h2_fontsize']) && ($cabin_qode_options['h2_fontsize'])>35) { ?>
    .content h2{
    font-size:<?php echo esc_attr($cabin_qode_options['h2_fontsize'])*0.7; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h3_fontsize']) && ($cabin_qode_options['h3_fontsize'])>35) { ?>
    .content h3{
    font-size:<?php echo esc_attr($cabin_qode_options['h3_fontsize'])*0.7; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h4_fontsize']) && ($cabin_qode_options['h4_fontsize'])>35) { ?>
    .content h4{
    font-size:<?php echo esc_attr($cabin_qode_options['h4_fontsize'])*0.7; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h5_fontsize']) && ($cabin_qode_options['h5_fontsize'])>35) { ?>
    .content h5{
    font-size:<?php echo esc_attr($cabin_qode_options['h5_fontsize'])*0.7; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h6_fontsize']) && ($cabin_qode_options['h6_fontsize'])>35) { ?>
    .content h6{
    font-size:<?php echo esc_attr($cabin_qode_options['h6_fontsize'])*0.7; ?>px;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['page_subtitle_fontsize']) && ($cabin_qode_options['page_subtitle_fontsize']) < 28 && ($cabin_qode_options['page_subtitle_fontsize']) !== '') { ?>
    .subtitle{
    font-size: <?php echo esc_attr($cabin_qode_options['page_subtitle_fontsize']) *0.8;  ?>px;
    }
<?php } ?>
}

@media only screen and (min-width: 480px) and (max-width: 768px){
<?php if (isset($cabin_qode_options['parallax_minheight']) && !empty($cabin_qode_options['parallax_minheight'])) { ?>
    section.parallax_section_holder{
    height: auto !important;
    min-height: <?php echo esc_attr($cabin_qode_options['parallax_minheight']); ?>px !important;
    }
<?php } ?>

<?php if (isset($cabin_qode_options['header_background_color_mobile']) &&  !empty($cabin_qode_options['header_background_color_mobile'])) { ?>
    header
    {
    background-color: <?php echo esc_attr($cabin_qode_options['header_background_color_mobile']);  ?> !important;
    background-image:none;
    }
<?php } ?>
}

@media only screen and (max-width: 600px){
<?php if(isset($cabin_qode_options['h1_fontsize']) && ($cabin_qode_options['h1_fontsize'])>35) { ?>
    .title h1{
    font-size:<?php echo esc_attr($cabin_qode_options['h1_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['page_title_fontsize']) && ($cabin_qode_options['page_title_fontsize'])>35) { ?>
    .title h1{
    font-size:<?php echo esc_attr($cabin_qode_options['page_title_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h2_fontsize']) && ($cabin_qode_options['h2_fontsize'])>35) { ?>
    .content h2{
    font-size:<?php echo esc_attr($cabin_qode_options['h2_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h3_fontsize']) && ($cabin_qode_options['h3_fontsize'])>35) { ?>
    .content h3{
    font-size:<?php echo esc_attr($cabin_qode_options['h3_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h4_fontsize']) && ($cabin_qode_options['h4_fontsize'])>35) { ?>
    .content h4{
    font-size:<?php echo esc_attr($cabin_qode_options['h4_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h5_fontsize']) && ($cabin_qode_options['h5_fontsize'])>35) { ?>
    .content h5{
    font-size:<?php echo esc_attr($cabin_qode_options['h5_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['h6_fontsize']) && ($cabin_qode_options['h6_fontsize'])>35) { ?>
    .content h6{
    font-size:<?php echo esc_attr($cabin_qode_options['h6_fontsize'])*0.5; ?>px;
    }
<?php } ?>
<?php if(isset($cabin_qode_options['title_span_background_color']) && !empty($cabin_qode_options['title_span_background_color'])) { ?>
    .title h1 span{
    padding: 0 5px;
    }
<?php } ?>

<?php if(isset($cabin_qode_options['portfolio_list_filter_height']) && $cabin_qode_options['portfolio_list_filter_height'] !== '') { ?>
    .filter_outer.filter_portfolio{
    height: auto;
    }
<?php } ?>
}

@media only screen and (max-width: 480px){
<?php if (isset($cabin_qode_options['parallax_minheight']) && !empty($cabin_qode_options['parallax_minheight'])) { ?>
    section.parallax_section_holder{
    height: auto !important;
    min-height: <?php echo esc_attr($cabin_qode_options['parallax_minheight']); ?>px !important;
    }
<?php } ?>


<?php if (isset($cabin_qode_options['header_background_color_mobile']) &&  !empty($cabin_qode_options['header_background_color_mobile'])) { ?>
    header
    {
    background-color: <?php echo esc_attr($cabin_qode_options['header_background_color_mobile']);  ?> !important;
    background-image:none;
    }
<?php } ?>
}