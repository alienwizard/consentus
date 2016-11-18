<?php

get_header();

?>

<section class="banner"class="parallax-window" data-iosFix="false" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>">
<div class="overlay"></div>
<div class="container">





</div>

<div class="site-title">
	<h1><?php the_field('sidtitel'); ?></h1>
	<div class="cta">
		<a href="tel:030403"><i class="fa fa-phone" aria-hidden="true"></i><h2>Ring oss idag: 08-702 01 81</h2></a>
	</div>
	</div>


</section>


<section class="section-gray">

	<div class="container">
	<div class="row">



<div class="col-md-8">
			<div class="border-wrap">
		<?php

			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if
?>
</div>
<div class="border-wrap" id="awards">
	<div class="row">
		<div class="col-md-4"><img src="<?php site_url(); ?>/wp-content/uploads/2016/11/certified1.gif"/></div>
		<div class="col-md-4"><img src="<?php site_url(); ?>/wp-content/uploads/2016/11/certified2.gif"/></div>
		<div class="col-md-4"><img src="<?php site_url(); ?>/wp-content/uploads/2016/11/gasell_vinnare2009.gif"/></div>


	</div>

</div>
</div>
<div class="sidebar">
	<?php dynamic_sidebar('home_right_1');?>
</div>
</div>
	</div>
	</section>
	<div class="clearfix"></div>
<!--
	<section class="section-blue">
		<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>
	</section>
-->
<?php get_footer(); ?>