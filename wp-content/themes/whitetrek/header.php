<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whitetrek
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <div class="topAddress">
    <div class="row">
         <div class="col-sm-5">
           <i class="fa fa-map-marker" aria-hidden="true"></i>
           <span>Address goes here</span>
           <i class="fa fa-phone" aria-hidden="true"></i><span>980765r445454 &nbsp;|&nbsp; 9786554577656</span>
         </div>
         <div class="col-sm-3">
           happy treaking 
         </div>
         <div class="col-sm-4">
           <div class="pull-right">
              <i class="fa fa-envelope-o" aria-hidden="true"></i><span>&nbsp;abc@gmail.com</span>
           </div>
         </div>
   </div>
 </div>
 <!-- menu -->
 <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="/">
            <img src="#" alt="" title=""/>
        </a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#">Home</a></li>
          <li class="menu-has-children"><a href="">Aboutus</a>
            <ul>
              <li class="menu-has-children"><a href="{{'/aboutus'}}">Our Company</a> </li>
              <li class="{% if this.page.url =='/chairman-message' %}menu-active {%endif%}"><a href="{{ '/chairman-message' }}">Message from chairman</a></li>
              <li class="{% if this.page.url =='/license-certificat' %}menu-active {%endif%}"><a href="{{ '/license-certificate' }}">License & Certificates</a></li>
              <li class="{% if this.page.url =='/our-group' %}menu-active {%endif%}"><a href="{{ '/our-group' }}">Horizon Group</a></li>
            </ul>
          </li>
          <li class="{% if this.page.url =='/recruitment' %}menu-active {%endif%}"><a href="{{'/recruitment'}}">Recruitment</a></li>

          <li class="{% if this.page.url =='/jobs' %}menu-active {%endif%}"><a href="{{'/jobs'}}">Jobs</a></li>

          <li class="{% if this.page.url =='/services' %}menu-active {%endif%}"><a href="{{'/services'}}">Services</a></li>

           <li class="{% if this.page.url =='/apply-job' %}menu-active {%endif%}"><a href="{{'/services'}}"><a href="{{'/apply-job'}}">Apply jobs</a></li>

          <li class="{% if this.page.url =='/blogs' %}menu-active {%endif%}"><a href="{{ '/blogs' }}">Blog</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

	<div class="container" ">
