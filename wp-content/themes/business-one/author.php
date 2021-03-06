<?php get_header(); ?>

<?php get_header('blog'); ?>


<section class="blog-container" role="main">
		
		<div class="container">

			<div class="breadcrumbs">
				<h4><?php _e('Posts by ','business-one'); ?> <?php echo get_the_author(); ?></h4>
			</div>
			
			<?php if(have_posts()): ?>

			<!-- BLOG -->

			<?php if(is_active_sidebar('sidebar')){ ?>
			
			<div class="col-sm-8">

			<?php }else{ ?>

			<div class="col-sm-9">

			<?php } ?>

				<?php while(have_posts()):the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('h-entry'); ?>>					
				
						<figure>
							
							<?php the_post_thumbnail(); ?>
							
						</figure>

						<h3 class="p-name">
							<a href="<?php the_permalink(); ?>" class="u-url" title="description"><?php the_title(); ?></a>
						</h3>

						<div class="article-meta">

							<span class="author">
								<i class="fa fa-user"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a>
							</span>
								
							<span class="category">
								<i class="fa fa-briefcase"></i> <span><?php the_category(' | '); ?></span>

							</span> 

							<span class="date">
								<i class="fa fa-calendar-o"></i> <span><?php the_date(); ?></span>
							</span> 

							<?php if(comments_open()) { ?>
								<span class="comment">
									<i class="fa fa-comment"></i> <span><?php comments_number(__('No Comments', 'business-one'),__('1 Comment', 'business-one'),__('% Comments', 'business-one')); ?></span>
								</span> 
							<?php } ?>

						</div> <!-- end article-meta -->

						<div class="p-summary">
							 <?php the_excerpt(); ?>
						</div> <!-- end p-summary -->

						<a href="<?php the_permalink(); ?>" class="btn u-url"><?php _e('Read More','business-one'); ?></a>	

					</article>

				<?php endwhile; ?>

				<div class="business-pagenavi">
					<?php business_one_pagenavi(); ?>
				</div> <!-- end business-pagenavi -->					

			</div>
			<!-- END BLOG -->

			<?php endif; ?>


			<?php get_sidebar(); ?>


		</div> <!-- end container -->

</section> <!-- end blog-container -->



<?php get_footer('home'); ?>

<?php get_footer(); ?>