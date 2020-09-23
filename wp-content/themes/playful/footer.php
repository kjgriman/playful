<?php 
$menuArg = array(
	'theme_location'=>'menu-footer',
	'menu'=>'menu-footer',
	'container'=>'nav',
	'container_class'=>'collapse navbar-collapse',
	'container_class'=>'my-2 my-md-0 mr-md-3 navbar navbar-expand-sm',
	'menu_class'=>'ul-mehu-header',
	'items_wrap'=>'%3$s',
	'depth'=>'0',
);
?>

	<div class="d-flex flex-column flex-md-row align-items-center pb-0 p-3 px-md-5 bg-white border-bottom box-shadow">
      <h5 class="my-0 pl-5 mr-md-auto font-weight-normal">2014 Your Company</h5>
      <nav class="my-2 my-md-0 mr-md-3 navbar navbar-expand-sm">
         <?php echo strip_tags(wp_nav_menu($menuArg),'<a>'); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>
		  
      </nav>
    </div>
<?php


wp_footer();?>
</body>
</html>