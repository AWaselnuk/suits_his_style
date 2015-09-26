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
    $pageBannerText = "Suits his Style is an Ottawa-based, nonprofit that supports the employment opportunities of men in need by providing professional attire with the vision of a world in which everyone is given the opportunity to excel.";
    break;
  case "volunteer":
    $pageBannerText = "Volunteering with Suits his Style is a unique opportunity to directly impact the lives of men and their families through challenging and rewarding work.";
    break;
  case "support-us":
    $pageBannerText = "Your generosity can improve the lives of vulnerable members of our community.";
    break;
  case "client-resources":
    $pageBannerText = "At Suits his Style, clients seeking business attire are provided an impartial and comprehensive suiting service by volunteers.";
    break;
  default:
    $pageBannerText = "Suits his Style is an Ottawa-based, nonprofit that supports the employment opportunities of men in need by providing professional attire with the vision of a world in which everyone is given the opportunity to excel.";
}
?>

<div class="page-banner background-image <?php echo $pageBannerClass ?>">
  <div class="row row-narrow">
    <div class="col col-full">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <p class="page-banner__text"><?php echo $pageBannerText ?></p>
    </div>
  </div>
</div>

<main>

<div class="row row-narrow">
  <div class="col col-full">
    <?php the_content(); ?>
  </div>
</div>

</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
