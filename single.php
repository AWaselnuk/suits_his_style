<?php get_header(); ?>

<main class="post" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>">

    <div class="row row-narrow">
      <div class="col col-full">
        <header class="post-header">
          <h1 class="post-title h2" rel="bookmark"><?php the_title(); ?></h1>

          <p class="post-time-and-author">
            <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
               /* the time the post was published */
               '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
               /* the author of the post */
               '<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
            ); ?>
          </p>
        </header>

        <?php if (has_post_thumbnail()): ?>
        <?php $thumbnailUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <img class="post-banner" alt="Featured image for <?php echo the_title(); ?>" src="<?php echo $thumbnailUrl; ?>">
        <?php endif; ?>

        <section class="post-content">
          <?php the_content() ?>
        </section>

        <footer class="post-footer">
          <?php printf( __( 'Filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

          <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
        </footer>

        <hr>

        <p><a href="<?php echo site_url() . '/whats-new' ?>">&laquo; View all articles.</a></p>

      </div>
    </div>

  </article>


<?php endwhile; ?>
<?php else : ?>

  <article id="post-not-found" class="row row-narrow">
    <div class="col col-full">
      <h1>Oops! Post not found.</h1>
      <p><a href="<?php echo site_url() . '/whats-new' ?>">View all articles.</a></p>
    </div>
  </article>

<?php endif; ?>

</main>

<?php get_footer(); ?>
