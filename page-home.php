<?php
/*
 Template Name: Home Page
 *
 *
*/
?>

<?php get_header(); ?>

<div class="home-banner background-image">
  <p class="home-banner__text">Suits his Style is a not-for-profit corporation that helps men in need achieve their career goals.</p>
  <button class="btn btn-cta home-banner__cta">I want to learn more</button>
</div>

<main>

  <div class="row">

    <div class="col col-third">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/client-photos/client-suiting-grayscale.jpg" alt="A Suits His Style volunteer helping to suit a client.">
    </div>

    <div class="col col-two-thirds">
      <h2>9999 Men don't have what they need to get employed.</h2>
      <p>
        This is a difficult problem because blah blah blah, but we have a simple solution.
        Providing professional attire to these men gives them the confidence they need to succeed in job interviews and transform opportunities into careers.
      </p>
    </div>

  </div>

</main>


<?php // get_sidebar(); ?>

<?php get_footer(); ?>
