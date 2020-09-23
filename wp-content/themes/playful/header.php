<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class();?> >


<?php wp_body_open(); ?>

  <?php
$menuArg = array(
	'theme_location'=>'menu-header',
	'menu'=>'menu-header',
	'container'=>'nav',
	'container_class'=>'collapse navbar-collapse',
	'container_class'=>'my-2 my-md-0 mr-md-3 navbar navbar-expand-sm',
	'menu_class'=>'ul-mehu-header',
	'items_wrap'=>'%3$s',
	'depth'=>'0',
);
?>


	<div class="d-flex flex-column flex-md-row align-items-center pb-0 p-3 px-md-5 bg-white border-bottom box-shadow">
      <h5 class="my-0 pl-5 mr-md-auto font-weight-normal">Your Logo</h5>
      <nav class="my-2 my-md-0 mr-md-3 navbar navbar-expand-sm">
         <?php echo strip_tags(wp_nav_menu($menuArg),'<a>'); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>
		  
      </nav>
    </div>
