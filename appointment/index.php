<?php
require_once("../requires/functions.php");
require_once("../requires/datasource.php");
require_once("../requires/config.php");

if (!isLoggedIn()) {
} else {
    redirectTo("../connected/index.php");
}

// check to see if the register information input was previously submitted
// if so, display the submitted information, otherwise display blank inputs

?>


<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.themeamber.com/dentalcare/appointment/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2016 01:31:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="../xmlrpc.php">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" >

    <title>Appointment &#8211; Dental Care</title>
<link rel="alternate" type="application/rss+xml" title="Dental Care &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Dental Care &raquo; Comments Feed" href="../comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/demo.themeamber.com\/dentalcare\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.3"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-dentalcare-vc-extend-css'  href='../wp-content/plugins/dentalcare-core/assets/css/vc-extend62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-font-awesome-css'  href='../wp-content/themes/wp-dentalcare/css/font-awesome.min474a.css?ver=4.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-font-simple-line-css'  href='../wp-content/themes/wp-dentalcare/css/simple-line-icons5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-magnific-popup-css'  href='../wp-content/themes/wp-dentalcare/css/magnific-popup.min8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-owl-carousel-css'  href='../wp-content/themes/wp-dentalcare/css/owl.carousel62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-flexsliders-css'  href='../wp-content/themes/wp-dentalcare/css/flexslider62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesc1f9.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settings6619.css?ver=5.2.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout72e6.css?ver=2.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen72e6.css?ver=2.6.4' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce72e6.css?ver=2.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-style-css'  href='../wp-content/themes/wp-dentalcare/style62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='font-genericons-css'  href='../wp-content/themes/wp-dentalcare/css/font-genericons5589.css?ver=3.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-simple-line-css'  href='../wp-content/themes/wp-dentalcare/css/simple-line-icons5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='../wp-content/themes/wp-dentalcare/css/magnific-popup.min8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='../wp-content/themes/wp-dentalcare/css/owl.carousel62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='flexsliders-css'  href='../wp-content/themes/wp-dentalcare/css/flexslider62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='vc-extend-css'  href='../wp-content/themes/wp-dentalcare/css/vc-extend62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min2720.css?ver=4.11.2' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min6619.js?ver=5.2.5'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min6619.js?ver=5.2.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/dentalcare\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dentalcare\/appointment\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.themeamber.com\/dentalcare\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart2720.js?ver=4.11.2'></script>
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.5.3" />
<meta name="generator" content="WooCommerce 2.6.4" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../index0eba.html?p=208' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed68bf.json?url=http%3A%2F%2Fdemo.themeamber.com%2Fdentalcare%2Fappointment%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed6195?url=http%3A%2F%2Fdemo.themeamber.com%2Fdentalcare%2Fappointment%2F&amp;format=xml" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.themeamber.com/dentalcare/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://demo.themeamber.com/dentalcare/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.2.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<style type="text/css" title="dynamic-css" class="options-output">a:hover, a:focus, .primary-link a, .primary-color, .primary-hover-color:hover, .primary-link-hover-color a:hover, .entry-header a:hover, .widget ul li a:hover, #site-navigation > div > ul > li.current-menu-item > a, #site-navigation > div > ul > li.current-menu-ancestor > a, #site-navigation > div > ul > li:hover > a, .content-area ul li:before, .main-navigation ul.nav-menu > li:hover > a, .header-transparent .site-header .main-navigation ul.nav-menu > li:hover > a, .ab-feature-box-layout1 .ab-feature-box:hover .ab-feature-box-icon, .ab-feature-box-layout2 .ab-feature-box:hover .ab-feature-box-icon, .owl-theme .owl-controls .owl-nav [class*="owl-"]:hover, .owl-theme .owl-controls .owl-nav [class*="owl-"]:focus, .ab-content-single .entry-meta .author a{color:#00aeef;}.primary-background, .primary-background-hover:hover, .btn-primary, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .st-custom-heading-layout3 .st-heading-title:before, input[type="submit"]:hover, input[type="submit"]:focus, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .widget-area .widget-title:after, .ab-slider-testimonial ul.simpleTabsNavigation li a.current:before, .ab-carousel-layout2 .owl-theme .owl-controls .owl-nav [class*="owl-"]:hover, .ab-carousel-layout2 .owl-theme .owl-controls .owl-nav [class*="owl-"]:focus, .ab-team-layout1 .ab-team-social, .pagination .nav-links a:hover, .pagination .nav-links .page-numbers.current, button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:focus, .tagcloud a:hover, .site-page-title, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{background-color:#00aeef;}textarea:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="email"]:focus, input[type="month"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="text"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, .tagcloud a:hover{border-color:#00aeef;}{border-left-color:#00aeef;}.secondary-color, .secondary-hover-color:hover, .secondary-link-hover-color a:hover{color:#24cf5f;}.secondary-border{border-color:#24cf5f;}.secondary-background, .secondary-background-hover:hover, .btn-secondary, .pagination .nav-links a, .pagination .nav-links .page-numbers{background-color:#24cf5f;}hr, abbr, acronym, dfn, table, table > thead > tr > th, table > tbody > tr > th, table > tfoot > tr > th, table > thead > tr > td, table > tbody > tr > td, table > tfoot > tr > td,
                            fieldset, select, textarea, input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"]{border-color:#eaeaea;}body{background-color:#ffffff;}body.layout-boxed{background-color:#cccccc;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}.footer-top-area{background-color:#2d3e50;}.footer-top-area .widget-title{color:#ffffff;}.footer-top-area{color:#9aacbf;}.footer-top-area a{color:#9aacbf;}.footer-top-area a:hover, .footer-top-area .widget ul li a:hover{color:#00aeef;}.footer-bottom-area{background-color:#2d3e50;}.footer-bottom-area{color:#9aacbf;}.footer-bottom-area a{color:#9aacbf;}.footer-bottom-area a:hover{color:#00aeef;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1466152061081{padding-top: 80px !important;padding-bottom: 80px !important;}.vc_custom_1466152144802{padding-right: 115px !important;}.vc_custom_1466152151451{padding-left: 115px !important;}.vc_custom_1466208025607{padding-top: 82px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page page-id-208 page-template-default header-normal visual-composer wpb-js-composer js-comp-ver-4.11.2 vc_responsive">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <header id="masthead" class="site-header">
        <div class="site-header-main clearfix">
            <div class="site-branding left">
                                                    <a href="../index.php"
                       title="Dental Care" rel="home">
                        <img src="../wp-content/themes/wp-dentalcare/images/logo.png" alt="Dental Care" class="site-logo"/>
                    </a>
                            </div><!-- .site-branding -->
            <button id="menu-toggle" class="menu-toggle right">Menu</button>
            <div id="site-header-menu" class="site-header-menu">
                                    <nav id="site-navigation" class="main-navigation right" aria-label="Primary Menu">
                        <div class="menu-main-menu-container"><ul id="menu-main-menu" class="primary-menu"><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-27"><a href="../index.php">Home</a>
</li>
<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="../about-us/index.php">About Us</a></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="../services/index.php">Services</a></li>
<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="../doctors/index.php">Doctors</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-430"><a href="#">Features</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="../blog/index.php">Blog</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454"><a href="../gallery/index.php">Gallery</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-208 current_page_item menu-item-465"><a href="index.html">Appointment</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465"><a href="../price/index.php">Price List</a></li>
</ul>
</li>
<li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="../contact/index.php">Contact</a></li>
                            <li id="menu-item-430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-430"><h3><a href="../my_account/login.php" class="w3-btn w3-light-blue"> Sign In </a></h3>
 </li>
</ul></div>                    </nav><!-- .main-navigation -->
                
            </div><!-- #site-navigation -->

            <div class="book-now">
                <a class="btn btn-secondary" href="index.html" title="">Book Appointment<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </header><!-- #masthead -->

            <div class="site-page-title text-left " style="padding:;">
            <div class="site-page-title-main ab-flex">
                <div class="ab-page-title ab-flex-box">
                                                                    <h1 class="page-title"
                            style="color: ;">
                            <span>Appointment</span>
                        </h1>
                                                                                        <div class="page-subtitle"
                             style="color: ;">
                            <span>Enter your details below</span>
                        </div>
                                    </div>
                                    <div class="ab-call-us">
                        <div class="ab-call-us-text montserrat-bold-50">
                            Call Us                        </div>
                        <div class="ab-call-us-number">
                             (+216) 71 25 98 55                 </div>
                    </div>
                
                            </div>
        </div>
        
    <div id="content" class="site-content">
        <div class="site-content-main clearfix no-sidebar">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			
<div id="post-208" class="post-208 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1466152061081"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner vc_custom_1466152144802"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			        <style type="text/css">
        </style>
 <div class="birchschedule" id="birs_booking_box"><form id="birs_appointment_form" method="post"><div><ul><li class="birs_form_field birs_appointment_section"><h2 class="birs_section">Appointment Info</h2></li><li class="birs_form_field birs_appointment_location"><label>Country</label><div class="birs_field_content">
     
     <select id="birs_appointment_location" name="country">
     
         <option selected value="Tunisia">Tunisia</option> <option value="Afghanistan ">Afghanistan</option> <option value="Afrique central ">Afrique central</option> <option value="Afrique du Sud ">Afrique du Sud</option> <option value="Albanie ">Albanie</option> <option value="Algérie ">Algérie</option> <option value="Allemagne ">Allemagne</option> <option value="Andorre ">Andorre</option> <option value="Angleterre ">Angleterre</option> <option value="Angola ">Angola</option> <option value="Antigua-et-Barbuda ">Antigua-et-Barbuda</option> <option value="Arabie Saoudite ">Arabie Saoudite</option> <option value="Argentine ">Argentine</option> <option value="Armenie ">Armenie</option> <option value="Australie ">Australie</option> <option value="Autriche ">Autriche</option> <option value="Azerbaïdjan ">Azerbaïdjan</option> <option value="Bahamas ">Bahamas</option> <option value="Bahreïn ">Bahreïn</option> <option value="Bangladesh ">Bangladesh</option> <option value="Barbades ">Barbades</option> <option value="Belgique ">Belgique</option> <option value="Belize ">Belize</option> <option value="Bénin ">Bénin</option> <option value="Bhoutan ">Bhoutan</option> <option value="Biélorussie ">Biélorussie</option> <option value="Bolivie ">Bolivie</option> <option value="Bosnie-Herzégovine ">Bosnie-Herzégovine</option> <option value="Botswana ">Botswana</option> <option value="Brésil ">Brésil</option> <option value="Brunéi Darussalam ">Brunéi Darussalam</option> <option value="Bulgarie ">Bulgarie</option> <option value="Burkina-Faso ">Burkina-Faso</option> <option value="Burundi ">Burundi</option> <option value="Cambodge ">Cambodge</option> <option value="Cameroun ">Cameroun</option> <option value="Canada ">Canada</option> <option value="Cap-Vert ">Cap-Vert</option> <option value="Chili ">Chili</option> <option value="Chine ">Chine</option> <option value="Chypre ">Chypre</option> <option value="Colombie ">Colombie</option> <option value="Comores ">Comores</option> <option value="Congo ">Congo</option> <option value="Corée du Sud ">Corée du Sud</option> <option value="Costa Rica ">Costa Rica</option> <option value="Côte d'Ivoire ">Côte d'Ivoire</option> <option value="Croatie ">Croatie</option> <option value="Cuba ">Cuba</option> <option value="Danemark ">Danemark</option> <option value="Djibouti ">Djibouti</option> <option value="Egypte ">Egypte</option> <option value="Emirats arabes unis ">Emirats arabes unis</option> <option value="Equateur ">Equateur</option> <option value="Erythrée ">Erythrée</option> <option value="Espagne ">Espagne</option> <option value="Estonie ">Estonie</option> <option value="Ethiopie ">Ethiopie</option> <option value="Fidji ">Fidji</option> <option value="Finlande ">Finlande</option> <option value="France ">France</option> <option value="Gabon ">Gabon</option> <option value="Gambie ">Gambie</option> <option value="Ghana ">Ghana</option> <option value="Grèce ">Grèce</option> <option value="Grenade ">Grenade</option> <option value="Guadeloupe ">Guadeloupe</option> <option value="Guatemala ">Guatemala</option> <option value="Guinée-Bissau ">Guinée-Bissau</option> <option value="Guinée équatoriale ">Guinéeéquatoriale</option> <option value="Guyane ">Guyane</option> <option value="Haïti ">Haïti</option> <option value="Hollande ">Hollande</option> <option value="Honduras ">Honduras</option> <option value="Hongrie ">Hongrie</option> <option value="Ile Maurice ">Ile Maurice</option> <option value="Inde ">Inde</option> <option value="Indonésie ">Indonésie</option> <option value="Irak ">Irak</option> <option value="Iran ">Iran</option> <option value="Irlande ">Irlande</option> <option value="Islande ">Islande</option> <option value="Israël ">Israël</option> <option value="Italie ">Italie</option> <option value="Jamaique ">Jamaique</option> <option value="Japon ">Japon</option> <option value="Jordanie ">Jordanie</option> <option value="Kazakhstan ">Kazakhstan</option> <option value="Kenya ">Kenya</option> <option value="Koweït ">Koweït</option> <option value="Laos ">Laos</option> <option value="Lesotho ">Lesotho</option> <option value="Liban ">Liban</option> <option value="Libéria ">Libéria</option> <option value="Libye ">Libye</option> <option value="Lituanie ">Lituanie</option> <option value="Luxembourg ">Luxembourg</option> <option value="Madagascar ">Madagascar</option> <option value="Malaisie ">Malaisie</option> <option value="Malawi ">Malawi</option> <option value="Mali ">Mali</option> <option value="Malte ">Malte</option> <option value="Maroc ">Maroc</option> <option value="Martinique ">Martinique</option> <option value="Mauritanie ">Mauritanie</option> <option value="Mexique ">Mexique</option> <option value="md">Moldavie</option> <option value="Monaco ">Monaco</option> <option value="Mongolie ">Mongolie</option> <option value="Mozambique ">Mozambique</option> <option value="Myanmar ">Myanmar</option> <option value="Namibie ">Namibie</option> <option value="Nicaragua ">Nicaragua</option> <option value="Niger ">Niger</option> <option value="Norvège ">Norvège</option> <option value="Nouvelle Calédonie ">Nouvelle Calédonie</option> <option value="Nouvelle Zéland ">Nouvelle Zéland</option> <option value="Pakistan ">Pakistan</option> <option value="Panama ">Panama</option> <option value="Papouasie - Nouvelle Guinée ">Papouasie - Nouvelle Guinée</option> <option value="Paraguay ">Paraguay</option> <option value="Pérou ">Pérou</option> <option value="Philippines ">Philippines</option> <option value="Pologne ">Pologne</option> <option value="Porto Rico ">Porto Rico</option> <option value="Portugal ">Portugal</option> <option value="Qatar ">Qatar</option> <option value="République Dominicaine ">République Dominicaine</option> <option value="Roumanie ">Roumanie</option> <option value="Russie ">Russie</option> <option value="Rwanda ">Rwanda</option> <option value="Salvador ">Salvador</option> <option value="Sao Tomé-et-Principe ">Sao Tomé-et-Principe</option> <option value="Sénégal ">Sénégal</option> <option value="Sierra Leone ">Sierra Leone</option> <option value="Singapoure ">Singapoure</option> <option value="Slovénie ">Slovénie</option> <option value="Soudan ">Soudan</option> <option value="Sri Lanka ">Sri Lanka</option> <option value="Suède ">Suède</option> <option value="Suisse ">Suisse</option> <option value="Surinam ">Surinam</option> <option value="Swaziland ">Swaziland</option> <option value="Syrie ">Syrie</option> <option value="Tadjikistan ">Tadjikistan</option> <option value="Taiwan ">Taiwan</option> <option value="Tanzanie ">Tanzanie</option> <option value="Tchad ">Tchad</option> <option value="Tchéquie ">Tchéquie</option> <option value="Thaïlande ">Thaïlande</option> <option value="Togo ">Togo</option> <option value="Trinité et Tobago ">Trinité et Tobago</option> <option value="Tunisie ">Tunisia</option> <option value="Turkménistan ">Turkménistan</option> <option value="Turquie ">Turquie</option> <option value="Ukraine ">Ukraine</option> <option value="Uruguay ">Uruguay</option> <option value="USA ">USA</option> <option value="Uzbekistan ">Uzbekistan</option> <option value="Vénézuela ">Vénézuela</option> <option value="Vietnam ">Vietnam</option> <option value="Yémen ">Yémen</option> <option value="Yougoslavie ">Yougoslavie</option> <option value="Zambie ">Zambie</option> <option value="Zimbabwe ">Zimbabwe</option>
         
     </select></div></li><li class="birs_form_field birs_client_name_first"><label>City</label><div class="birs_field_content"><input id="birs_client_city" name="city" type="text" required></div></li><li class="birs_form_field birs_appointment_service"><label>Service</label><div class="birs_field_content">
     <select id="birs_appointment_service" name="service" onchange="services(this.id,'birs_appointment_staff')">
     
  <option value="Consultation">Consultation</option>
  <option value="Cosmetic dentistry">COSMETIC DENTISTRY</option>
  <option value="Dental bridges">DENTAL BRIDGES</option>
  <option value="Dental crows">DENTAL CROWNS</option>  
  <option value="Extractions of teeth">Extractions of teeth</option>
  <option value="Gum disease">GUM DISEASE</option>  
  <option value="Dental implant">DENTAL IMPLANT</option>
  <option value="Root canal">ROOT CANAL</option>
  <option value="The dental hygientist">THE DENTAL HYGIENIST</option>
     
     </select>
     </div></li><li class="birs_form_field birs_appointment_staff"><label>Provider</label><div class="birs_field_content">
     
     <select id="birs_appointment_staff" name="staff">
         
     <option value="SERINE BEN AMMAR">SERINE BEN AMMAR</option>
    <option value="RANIA SDIRI">RANIA SDIRI</option>
     
     </select></div></li><li class="birs_form_field birs_appointment_date"><label>Your availability :</label><br><input id="birs_appointment_date" name="appointment_date" type="date" required></li><li class="birs_form_field birs_appointment_time"><label>Time</label><br><input type="time" name="appointment_time" required></li><li class="birs_form_field birs_appointment_notes"><label>Notes</label><div class="birs_field_content birs_field_paragraph"><textarea id="birs_appointment_notes" name="notes"></textarea></div></li><li class="birs_form_field birs_client_section"><h2 class="birs_section">Your Info</h2></li><li class="birs_form_field birs_client_name_first"><label>First Name</label><div class="birs_field_content"><input id="birs_client_name_first" name="firstName" type="text" required></div></li><li class="birs_form_field birs_client_name_last"><label>Last Name</label><div class="birs_field_content"><input id="birs_client_name_last" name="lastName" type="text" required></div></li><li class="birs_form_field birs_appointment_location"><label>Gnder</label><div class="birs_field_content"><select id="birs_appointment_gender" name="gender"><option value="male">Male</option><option value="female">Female</option></select></div></li><li class="birs_form_field birs_client_email"><label>Email</label><div class="birs_field_content"><input id="birs_client_email" name="client_email" type="email" required></div></li><li class="birs_form_field birs_client_phone"><label>Phone</label><div class="birs_field_content"><input id="birs_client_phone" name="client_phone" type="number" required></div></li><li class="birs_footer"><div class="birs_field_content"><input name="book_btn" type="submit" value="Submit" class="button" id="birs_book_appointment"></div></li></ul></div></form></div><div id="birs_booking_success"></div>
            <?php


        if (isset($_POST["book_btn"])) {
                
                $registration_date ='20'.date('y').'-'.date('m').'-'.date('d');
                $country = $_POST["country"];
                $city = $_POST["city"];
                $service = $_POST["service"];
                $staff =$_POST["staff"];
                $appointment_date = $_POST["appointment_date"];
                $appointment_time = $_POST["appointment_time"];
                $notes =$_POST["notes"];
                $firstName =$_POST["firstName"];
                $lastName =$_POST["lastName"];
                $gender =$_POST["gender"];
                $client_email =$_POST["client_email"];
                $client_phone =$_POST["client_phone"];
                

                
                 if (($appointment_date > $registration_date) ||($appointment_date == $registration_date && $appointment_time>date("H:i")))
                    
                    {
    
                        DataSource::createAppointment($registration_date, $country, $city, 
            $service, $staff, $appointment_date,$appointment_time,$notes,$firstName,$lastName,$gender,$client_email,$client_phone);
                                ?>
                        <script > alert("regiter succesful")</script><?php

                    }
        }
                
            closeConnection();            
            ?>




		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner vc_custom_1466152151451"><div class="wpb_wrapper"><div class="ab-feature-box-wraper ab-feature-box-layout5 text-center ">
    <div class="ab-feature-box">
        
        
                <div class="ab-feature-box-icon">
                            <div class="feature-box-icon primary-background" feature-box-image style="padding-top:">
                    <img src="../wp-content/uploads/2016/06/acall.png" alt="" />
                </div>
                    </div>
        
        <div class="feature-box-content">
                            <h3 class="primary-color">For phone booking</h3>
                        <div class="box-description">
                (+216) 71 25 98 55           </div>
        </div>
    </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1466208025607"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_widgetised_column wpb_content_element">
		<div class="wpb_wrapper">
			
			<div id="timetable-3" class="widget_timetable"><h3 class="widget-title ab-appointment montserrat-regular">Working Hours</h3>
        <div class="ab-time-table-widget">

                            <div class="time-table day7 ab-flex">
                                <div class ="time-table-label ab-flex-cell"><span style="color:red">Lunch break</span></div>
                    <div class ="ab-flex-cell">12:00am - 02:00pm</div>
                </div>
            

                            <div class="time-table day2 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Mon</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day3 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Tue</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day4 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Wed</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day5 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Thur</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day6 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Fri</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day7 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Sat</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>                            

                            <div class="time-table day1 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Weekend</div>
                    <div class ="ab-flex-cell">Closed</div>
                </div>
            
        </div>

        </div>
		</div>
	</div>
</div></div></div></div></div></div></div></div>
			</div><!-- .entry-content -->

	<div class="page-edit">
			</div><!-- .entry-footer -->
</div><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

    <aside id="secondary" class="sidebar-area widget-area">
        <section id="search-2" class="widget widget_search"><h2 class="widget-title">Search</h2>
<form role="search" method="get" class="search-form" action="http://demo.themeamber.com/dentalcare/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button>
</form>
</section>		<section id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">Recent Posts</h2>		<ul>
					<li>
				<a href="../the-importance-of-routine-dental-exams/index.php">The Importance of Routine Dental Exams</a>
						</li>
					<li>
				<a href="../whitening-kits-vs-in-office-whitening/index.php">Whitening Kits vs In-Office Whitening</a>
						</li>
					<li>
				<a href="../why-do-my-gums-bleed-when-i-brush-my-teeth/index.php">Why do my gums bleed when  I brush my teeth?</a>
						</li>
					<li>
				<a href="../advantages-of-computerized-denta/index.php">Advantages of computerized  denta</a>
						</li>
					<li>
				<a href="../we-just-did-our-500th-successful-dental-surgery/index.php">We just did our 500th  successful dental surgery</a>
						</li>
				</ul>
		</section>		<section id="recent-comments-2" class="widget widget_recent_comments"><h2 class="widget-title">Recent Comments</h2><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link"><a href='http://themeamber.com/' rel='external nofollow' class='url'>Richel joe</a></span> on <a href="../we-just-did-our-500th-successful-dental-surgery/index.php#comment-3">We just did our 500th  successful dental surgery</a></li><li class="recentcomments"><span class="comment-author-link"><a href='http://themeamber.com/' rel='external nofollow' class='url'>Daniel Kristeen</a></span> on <a href="../we-just-did-our-500th-successful-dental-surgery/index.php#comment-2">We just did our 500th  successful dental surgery</a></li><li class="recentcomments"><span class="comment-author-link"><a href='https://wordpress.org/' rel='external nofollow' class='url'>Mr WordPress</a></span> on <a href="../we-just-did-our-500th-successful-dental-surgery/index.php#comment-1">We just did our 500th  successful dental surgery</a></li><li class="recentcomments"><span class="comment-author-link">Maria</span> on <a href="../product/woo-ninja-3/index.html#comment-37">Woo Ninja</a></li><li class="recentcomments"><span class="comment-author-link">Maria</span> on <a href="../product/premium-quality-2/index.html#comment-36">Premium Quality</a></li></ul></section><section id="archives-2" class="widget widget_archive"><h2 class="widget-title">Archives</h2>		<ul>
			<li><a href='../2016/05/index.html'>May 2016</a></li>
		</ul>
		</section><section id="categories-2" class="widget widget_categories"><h2 class="widget-title">Categories</h2>		<ul>
	<li class="cat-item cat-item-1"><a href="../category/uncategorized/index.html" >Uncategorized</a>
</li>
		</ul>
</section><section id="meta-2" class="widget widget_meta"><h2 class="widget-title">Meta</h2>			<ul>
						<li><a href="../wp-login.html">Log in</a></li>
			<li><a href="../feed/index.html">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="../comments/feed/index.html">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>			</ul>
			</section>    </aside><!-- #secondary -->
</div><!-- #content main -->
</div><!-- #content -->

    <div class="footer-top-area">
                <div class="footer-top-main footer-3-columns clearfix">
                            <div id="footer-1"
                     class="footer-1 footer-column left" role="complementary">
                    <aside id="text-2" class="widget widget_text">			<div class="textwidget"><img src="../images/logo2.png" alt=""></div>
		</aside><aside id="contact-2" class="widget widget_contact">
        <div class="ab-contact-widget">

                            <div class="contact-address ab-flex">
                    <div class ="contact-icon ab-flex-cell"><i class="fa fa-map-marker"></i></div>
                    <div class ="contact-content ab-flex-cell">5, Avenue de la liberté 1000 Tunis Tunisia<br> Tunis 1000</div>
                </div>
            
                            <div class="contact-fax ab-flex">
                    <div class ="contact-icon ab-flex-cell"><i class="fa fa-fax"></i></div>
                    <div class ="contact-content ab-flex-cell">(+216) 71 259 855</div>
                </div>
            
                            <div class="contact-email ab-flex">
                    <div class ="contact-icon ab-flex-cell"><i class="fa fa-envelope"></i></div>
                    <div class ="contact-content ab-flex-cell">contact@dentistetunisie.com</div>
                </div>
            
        </div>

        </aside>                </div>
                                <div id="footer-2"
                     class="footer-2 footer-column left" role="complementary">
                    <aside id="timetable-2" class="widget widget_timetable"><h3 class="widget-title">Working Hours</h3>
        <div class="ab-time-table-widget">

                            <div class="time-table day7 ab-flex">
                                <div class ="time-table-label ab-flex-cell"><span style="color:red">Lunch break</span></div>
                    <div class ="ab-flex-cell">12:00am - 02:00pm</div>
                </div>
            

                            <div class="time-table day2 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Mon</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day3 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Tue</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day4 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Wed</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day5 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Thur</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day6 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Fri</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day7 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Sat</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>                            

                            <div class="time-table day1 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Weekend</div>
                    <div class ="ab-flex-cell">Closed</div>
                </div>
            
        </div>

        </aside>                </div>
                                <div id="footer-3"
                     class="footer-3 footer-column left" role="complementary">
                    <aside id="abnewsletterwidget-2" class="widget widget_abnewsletterwidget"><h3 class="widget-title">Newsletter</h3>

<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>

<div class="newsletter ab-newsletter-widget">

<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>

<form action="" method="get"><input type="hidden" name="nr" value="widget"/><div class="ab-newsletter-email"><input class="newsletter-email" type="email" required name="ne" value="Email" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue"/></div><div class="ab-newsletter-submit"><input class="newsletter-submit secondary-background" type="submit" value="GO"/></div></form></div></aside><aside id="ab_social_widget-2" class=" widget widget_ab_social_widget"><div class='ab-widget-social default text-left'><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Facebook" href="#"><i class="fa fa-facebook"></i></a><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Twitter" href="#"><i class="fa fa-twitter"></i></a><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Google" href="#"><i class="fa fa-google-plus"></i></a></div></aside>                </div>
                        </div>
    </div>

<footer id="colophon" class="site-footer footer-bottom-area">
    <div class="site-footer-main clearfix">
        <div class="site-info left">
            &copy; 2016 Dental Care - by &copy; &nbsp;<a href="https://www.facebook.com/abdelmonaem.gzayel" target="_blank">Abdelmonaem Gzayel</a>        </div><!-- .site-info -->

        <div id="footer-menu" class="site-footer-menu">
                            <nav class="footer-navigation right" aria-label="Footer Menu">
                    <div class="menu-main-menu-container"><ul id="menu-main-menu-1" class="footer-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27"><a href="../index.php">Home</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="../about-us/index.php">About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="../services/index.php">Services</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="../doctors/index.php">Doctors</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-430"><a href="#">Features</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="../blog/index.php">Blog</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="../careers/index.html">Careers</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454"><a href="../gallery/index.php">Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-208 current_page_item menu-item-465"><a href="index.html">Appointment</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="../shop/index.html">Shop</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="../contact/index.php">Contact</a></li>
</ul></div>                </nav><!-- .main-navigation -->
                    </div><!-- #site-navigation -->

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

    <!-- scroll to top  -->
    <a href="#" class="scroll_top scroll-top"><i class="fa fa-angle-up fa-2x"></i></a>

<link rel='stylesheet' id='jquery-ui-no-theme-css'  href='../wp-content/plugins/birchschedule/lib/assets/css/jquery-ui-no-theme/jquery-ui-1.9.2.custom2c00.css?ver=1.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='birchschedule_bookingform-css'  href='../wp-content/plugins/birchschedule/assets/css/bookingform/base320d.css?ver=1.10.7' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='../wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/framework/lib/assets/js/underscore.string/underscore.stringa1ec.js?ver=2.3.0'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/framework/lib/assets/js/react/react-with-addons183a.js?ver=0.13.3'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/framework/lib/assets/js/immutable/immutablef6c4.js?ver=3.7.4'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/framework/assets/js/birchpress/index.bundle2f54.js?ver=4.1'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/assets/js/base320d.js?ver=1.10.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var birchschedule_model = {"admin_url":"http:\/\/demo.themeamber.com\/dentalcare\/wp-admin\/","ajax_url":"http:\/\/demo.themeamber.com\/dentalcare\/wp-admin\/admin-ajax.php","all_schedule":{"472":{"467":{"schedules":[[],[{"minutes_start":"450","minutes_end":"990","date_start":"","date_end":""}],[{"minutes_start":"450","minutes_end":"990","date_start":"","date_end":""}],[{"minutes_start":"450","minutes_end":"990","date_start":"","date_end":""}],[{"minutes_start":"450","minutes_end":"990","date_start":"","date_end":""}],[{"minutes_start":"450","minutes_end":"990","date_start":"","date_end":""}],[{"minutes_start":"450","minutes_end":"990","date_start":"","date_end":""}]]}},"471":{"467":{"schedules":[[],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}]]}},"468":{"467":{"schedules":[[],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[{"minutes_start":"480","minutes_end":"1020","date_start":"","date_end":""}],[]]}}},"all_daysoff":{"472":"[]","471":"[]","468":"[]"},"gmt_offset":"0","future_time":"360","cut_off_time":"1","fully_booked_days":[]};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/assets/js/model/base320d.js?ver=1.10.7'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/assets/js/view/base320d.js?ver=1.10.7'></script>
<script type='text/javascript' src='../wp-content/plugins/birchschedule/assets/js/view/bookingform/base320d.js?ver=1.10.7'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/libs62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/demo.themeamber.com\/dentalcare\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsc1f9.js?ver=4.4.2'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/dentalcare\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dentalcare\/appointment\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/dentalcare\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dentalcare\/appointment\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/jquery.fitvids62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/jquery.parallax62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/navigation62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/skip-link-focus-fix62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/main62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min2720.js?ver=4.11.2'></script>
    
<script>
function services(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "consultation"){
        var optionArray = ["SERINE BEN AMMAR|SERINE BEN AMMAR","RANIA SDIRI|RANIA SDIRI"];
    } else if(s1.value == "Cosmetic dentistry"){
        var optionArray = ["MOURAD MHIRI|MOURAD MHIRI","SAHAR HAMDI|SAHAR HAMDI","SERINE BEN AMMAR|SERINE BEN AMMAR"];
    } else if(s1.value == "Dental bridges"){
        var optionArray = ["NIDHAL CHOUCHEN |NIDHAL CHOUCHEN","MONTASSER JAMAII|MONTASSER JAMAII"];
    } else if(s1.value == "Dental crows"){
        var optionArray = ["MOHAMMED MANSSOURI|MOHAMMED MANSSOURI"];
    } else if(s1.value == "Extractions of teeth"){
        var optionArray = ["RANIA SDIRI|RANIA SDIRI","AMIR LAHWEL|AMIR LAHWEL"];
    } else if(s1.value == "Gum disease"){
        var optionArray = ["AMIR LAHWEL|AMIR LAHWEL","SERINE BEN AMMAR|SERINE BEN AMMAR"];
    } else if(s1.value == "Dental implant"){
        var optionArray = ["MOUNIR HADDADI|MOUNIR HADDADI","MOURAD MHIRI|MOURAD MHIRI"];
    } else if(s1.value == "Root canal"){
        var optionArray = ["MONTASSER JAMAII|MONTASSER JAMAII","SERINE BEN AMMAR|SERINE BEN AMMAR"];
    } else if(s1.value == "The dental hygientist"){
        var optionArray = ["AMIR LAHWEL|AMIR LAHWEL","SAHAR HAMDI|SAHAR HAMDI"];
    }
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>

</body>

<!-- Mirrored from demo.themeamber.com/dentalcare/appointment/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2016 01:31:48 GMT -->
</html>
