<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if ($pagename) {
  $pageBannerClass = "page-banner-" . $pagename;
} else {
  $pageBannerClass = "page-banner-default";
}
?>

<?php
switch ($pagename) {
  case "about-us":
    $pageBannerText = "This is some text about what Suits His Style is.<br>Oh wow it's amazing.";
    break;
  default:
    $pageBannerText = "Suits his Style is a not-for-profit corporation that helps men in need achieve their career goals.";
}
?>

<div class="page-banner background-image <?php echo $pageBannerClass ?>">
  <div class="row">
    <div class="col col-full">
      <h1 class="page-banner__title"><h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
      <p class="page-banner__text"><?php echo $pageBannerText ?></p>
    </div>
  </div>
</div>

<main>

  <?php the_content(); ?>

</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
