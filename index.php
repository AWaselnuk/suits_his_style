<?php get_header(); ?>


	<div class="row">

		<main class="col col-two-thirds">

			<h1>What's New</h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-item-<?php the_ID(); ?>" class="post-item">

				<header class="post-item-header">
					<h2 class="post-item-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="post-item-time-and-author">
            <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
 								/* the time the post was published */
 								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
 								/* the author of the post */
 								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
					</p>
				</header>

				<section class="post-item-content">
					<?php the_excerpt(); ?>
				</section>

				<footer class="post-item-footer">
					<!-- <p class="post-item-footer__comment-count">
						<?php// comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
					</p> -->

	       	<?php printf( '<p class="post-item-footer__category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
	        <?php the_tags( '<p class="post-item-footer__tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
				</footer>
			</div>

			<?php endwhile; ?>

					<?php bones_page_navi(); ?>

			<?php else : ?>

				<article id="post-not-found" class="row row-narrow">
				  <div class="col col-full">
				    <h2>Oops! Post not found.</h2>
				    <p><a href="<?php echo site_url() . '/whats-new' ?>">View all articles.</a></p>
				  </div>
				</article>

			<?php endif; ?>

		</main>

		<aside class="col col-third">
			<?php get_sidebar(); ?>
		</aside>

	</div><!-- .row -->

<?php get_footer(); ?>
