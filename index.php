<?php get_header();?>
<div class="container beerape-mtop20">
	<div class="row">
		<div class="col-md-8 beerape-left">
			<div class="post-list">
				<?php if(have_posts()):?>
				<?php while(have_posts()):the_post();?>
				<div class="panel panel-default post-item">
					<div class="panel-body">
						<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<h5 class="post-content"><?php the_content();?></h5>
						<h6 class="post-meta">
							分类：<?php the_category(',');?>&nbsp;&nbsp;
							作者：<?php the_author();?>&nbsp;&nbsp;
							时间：<?php the_time('Y-m-d');?>&nbsp;&nbsp;
						</h6>
					</div>
				</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
			<div><?php posts_nav_link();?></div>
		</div>
		<div class="col-md-4 beerape-right">
			<?php get_sidebar();?>
		</div>
	</div>
</div>
<?php get_footer();?>
