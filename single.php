<?php get_header();?>
<div class="container beerape-mtop20">
	<div class="row">
		<div class="col-md-8">
			<div class="beerape-left">
				<div class="single">
					<?php if(have_posts()):?>
					<?php the_post();?>
					<h3 class="text-center"><?php the_title();?></h3>
					<div class="beerape-mtop20"><?php the_content();?></div>
					<?php endif;?>
				</div>
			</div>
		</div>
		<div class="col-md-4 beerape-right">
			<?php get_sidebar();?>
		</div>
	</div>
</div>
<?php get_footer();?>
