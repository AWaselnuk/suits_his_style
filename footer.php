			<footer class="footer">

				<div class="row">

          <div class="col col-half">

            <!-- <h3><a href="<?php echo site_url('whats-new') ?>">What's New</a></h3>

            <ul class="footer-posts">
            <?php $the_query = new WP_Query( 'showposts=5' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <li class="footer-post" id="post-<?php the_ID(); ?>">
              <header>
                <h4 class="footer-post__heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <p class="footer-post__meta">
                  <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                      /* the time the post was published */
                      '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                      /* the author of the post */
                      '<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                  ); ?>
                </p>
              </header>
              <div class="footer-post__content">
                <?php the_excerpt(); ?>
              </div>
            </li><!-- .footer-post
            <?php endwhile; ?>
            </ul> -->

            <?php if ( is_active_sidebar( 'footer-left-sidebar' ) ) : ?>

              <?php dynamic_sidebar( 'footer-left-sidebar' ); ?>

            <?php endif; ?>

          </div>

          <div class="col col-half">

            <?php if ( is_active_sidebar( 'footer-right-sidebar' ) ) : ?>

              <?php dynamic_sidebar( 'footer-right-sidebar' ); ?>

            <?php endif; ?>

          </div>
				</div>

        <div class="row row--no-padding">

          <div class="col col-full text-center">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo-white-monochrome.png" alt="Suits His Style">
          </div>

        </div>

			</footer>

		</div>

    <?php include_once("google-analytics.php") ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
