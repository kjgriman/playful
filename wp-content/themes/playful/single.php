<?php


// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();
?>
<div class="container pt-3">
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<h3><?php the_author(); ?></h3>
</div>

<?php


get_footer();  
