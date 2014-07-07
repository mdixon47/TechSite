<?php get_header(); ?>

	<?php
		query_posts('post_per_page=1' );
			while (have_posts()) : the_post(); ?>
	<div class="jumbotron">
		<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
		<p><?php the_excerpt(); ?></p>
		
	</div><!-- end jumbotron -->

    <?php endwhile; wp_reset_query(); ?>

	<div class="panel panel-default panel-body">
		<div class="row">
			<div class="col-md-2">
				<ul class="nav nav-pills nav-stacked">
					<?php wp_list_categories('orderby=name&title_li=' ); ?>
				</ul>
			</div><!-- end col-md-2 -->
			<div class="col-md-10">
					<?php while (have_posts()) : the_post(); ?>

						<h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
						<p class = "text-muted">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y'); ?></p>

					<?php endwhile; wp_reset_query(); ?>
			</div><!-- end col-md-2 -->
		</div><!-- end row -->
	</div><!-- end panel -->

<?php get_footer(); ?>
