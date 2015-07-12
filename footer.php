			<footer class="footer">

				<div class="row">

          <div class="col col-half">
            <h3><a href="<?php echo site_url('whats-new') ?>">What's New</a></h3>


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

            </li><!-- .footer-post -->

            <?php endwhile; ?>

            </ul>

          </div>

          <div class="col col-half">
            <h3>Get to know us</h3>
  					<nav role="navigation">
  						<?php wp_nav_menu(array(
      					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
      					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
      					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
      					'menu_class' => 'footer-nav cf',                // adding custom nav class
      					'theme_location' => 'footer-links',             // where it's located in the theme
      					'before' => '',                                 // before the menu
      					'after' => '',                                  // after the menu
      					'link_before' => '',                            // before each link
      					'link_after' => '',                             // after each link
      					'depth' => 0,                                   // limit the depth of the nav
      					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
  						)); ?>
  					</nav>

            <h3>Get in touch</h3>
            <p>We look forward to hearing from you!</p>

            <p>
              Suits His Style<br>
              613.761.6451<br>
              <a href="mailto:info@suitshisstyle.ca">info@suitshisstyle.ca</a><br>
            </p>
          </div>
				</div>



			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
