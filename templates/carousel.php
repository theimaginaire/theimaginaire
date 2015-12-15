<?php
// The Imaginaire Carousel using Owl Carousel -- we use a repeater advanced custom field for slides on each page
// check if the repeater field has rows of data
if( have_rows('carousel') ):
?>
<div class="owl-carousel">
<?php
 	// loop through the rows of data
    while ( have_rows('carousel') ) : the_row();

        // Variables for subfields
        $headline 		= 	get_sub_field('headline');
        $subhead 		= 	get_sub_field('subhead');
        $button1_text 	= 	get_sub_field('button_1_text');
        $button1_link 	= 	get_sub_field('button_1_link');
        $button2_text 	= 	get_sub_field('button_2_text');
        $button2_link 	= 	get_sub_field('button_2_link');
        $image 			= 	get_sub_field('background');
        $src 			=	$image['url'];
?>
<div class="slide" style="background-image: url('<?php echo $src; ?>');">
<div class="container">
<div class="wrap">
	<div class="content animated slideInLeft">
	<h2><?php echo $headline; ?></h2>
	<h4><?php echo $subhead; ?></h4>
	<p>
	<a href="<?php echo $button1_link; ?>" class="btn btn-primary hvr-underline-from-left"><?php echo $button1_text ?></a>
	<a href="<?php echo $button2_link; ?>" class="btn btn-primary hvr-underline-from-left"><?php echo $button2_text ?></a>
	</p>
	</div>
</div>
</div>
</div>
<?php
    endwhile;
?>
</div>
<?php

endif;

?>

  
  

