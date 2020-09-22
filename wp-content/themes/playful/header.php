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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
	<div class="d-flex flex-column flex-md-row align-items-center pb-0 p-3 px-md-5 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Your Logo</h5>
      <nav class="my-2 my-md-0 mr-md-3 navbar navbar-expand-sm">
        <a class="px-4 py-2 text-dark active" href="#">Home</a>
        <a class="px-4 py-2 text-dark" href="#">Link</a>
        <a class="px-4 py-2 text-dark" href="#">Link</a>
        <a class="px-4 py-2 text-dark" href="#">Link</a>
        <a class="px-4 py-2 text-dark" href="#">Link</a>
        <a class="px-4 py-2 text-dark" href="#">Link</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>
		  
      </nav>
    </div>

	<div class="jumbotron text-center banner-home" style="margin-bottom:0">
	  <h1>My First Bootstrap 4 Page</h1>
	  <p>Resize this responsive page to see the effect!</p> 
	</div>