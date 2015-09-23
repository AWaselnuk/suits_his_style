<?php
/*
 Template Name: Home Page
 *
 *
*/
?>

<?php get_header(); ?>

<div class="home-banner background-image">

  <div class="home-banner__initial js-initial-banner">
    <img class="home-banner__logo" src="<?php bloginfo('stylesheet_directory'); ?>/library/images/logo-white.png" alt="Suits His Style logo">
    <p class="home-banner__text">Suits his Style is an Ottawa based nonprofit that supports the employment opportunities of men in need by providing professional attire with the vision of a world in which everyone is given the opportunity to excel.</p>
    <button class="btn btn-cta home-banner__cta js-trigger-learn-more">I want to learn more</button>
  </div>

  <div class="row home-banner__learn-more js-learn-more">
    <div class="col col-third">
      <a href="<?php echo site_url() ?>/about-us" class="home-banner__link">
        <p class="text-lead">Career boosting services</p>

        <p>
          Suits his Style works with job-ready men from vulnerable populations to improve their chances when taking part in job interviews.
        </p>
      </a>
    </div>

    <div class="col col-third">
      <a href="<?php echo site_url() ?>/volunteer" class="home-banner__link">
        <p class="text-lead">Volunteer opportunites</p>

        <p>
          Volunteering with Suits his Style is a unique opportunity to directly impact the lives of men and their families through challenging and rewarding work.
        </p>
      </a>
    </div>

    <div class="col col-third">
      <a href="<?php echo site_url() ?>/support-us" class="home-banner__link">
        <p class="text-lead">We count on your donations</p>
        <p>
          Read on to find out about how you can donate money or materials. We also have partnership and sponsorship opportunites.
        </p>
      </a>
    </div>
  </div>
</div>

<main>

  <div class="row">

    <div class="col col-third">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/client-photos/client-suiting-grayscale.jpg" alt="A Suits His Style volunteer helping to suit a client.">
    </div>

    <div class="col col-two-thirds">
      <h2>A lack of professional attire can be a barrier to employment</h2>
      <p>
        Suits his Style helps reduce poverty in our community by providing interview clothing and/or industry appropriate clothing to low income, unemployed men in need of employment.
      </p>
      <p>
        Chronic joblessness creates a strain on an individual, his family and more broadly, our community.
      </p>
      <p>
        By providing job-ready men with appropriate interview attire, Suits his Style helps a man find employment;
        enabling him to support himself, his family, and contribute more fully to Canadian society.
      </p>
      <p>
        <!-- TODO: Add WP path -->
        <a class="btn btn-primary" href="<?php echo site_url() ?>/about-us">Learn more about our services &raquo;</a>
      </p>
    </div>

  </div>

<!--   <div class="row">
    <div class="col col-third">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/client-photos/team1.jpg" alt="A Suits His Style volunteer helping to suit a client.">
    </div>

    <div class="col col-two-thirds">
      <h2>How does this work?</h2>
      <p class="text-lead">Talk briefly about the client referral system.</p>
      <p class="text-lead">Demonstrate some concrete example of the simplicity of the idea and the impact it has.</p>
    </div>
  </div> -->

  <div class="row row-full row-dark">
    <div class="col col-full">
      <blockquote class="blockquote-row">
        "Good Afternoon,<br>
        I am writing to inform you that I was successful with my interview today and I have been scheduled to start May 1st, 2015. I just want to thank you guys so much for suiting me for the interview."
        <footer><cite>- Anthony</cite></footer>
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col col-third">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/client-photos/volunteers1.jpg" alt="A Suits His Style volunteer helping to suit a client.">
    </div>

    <div class="col col-two-thirds">
      <h2>How can I help?</h2>
      <p>
        <strong>Suits His Style could not exist without your donations.</strong>
      </p>
      <p>
        Your generous donation of time, clothing, or money can ensure that Suits His Style continues to make a real difference for unemployed men in need.
      </p>
      <p><a class="btn btn-primary" href="<?php echo site_url() ?>/support-us">Donate Now</a></p>

      <br>
      <p>
        <strong>Volunteering with Suits his Style is a unique opportunity to directly impact the lives of men and their families through challenging and rewarding work.</strong>
      </p>
      <p>
        The impact of your time is immediately clear when volunteering with Suits his Style; men who are chronically unemployed visibly have more self-confidence by the end of their appointment. You also can gain experience in social work while helping men back on their feet, to support themselves and their families.
      </p>
      <p><a class="btn btn-primary" href="<?php echo site_url() ?>/volunteer">Learn more about volunteer opportunities &raquo;</a></p>

      <!-- <br>
      <p class="text-lead">
        <strong>Let's become partners.</strong>
      </p>
      <p class="text-lead">
        Talk about partnership and sponsorship opportunites.
      </p>
      <p><a class="btn btn-primary" href="<?php echo site_url() ?>/volunteer">Learn more about partnership opportunities &raquo;</a></p> -->

    </div>
  </div>

  <div class="row row-full row-dark">
    <div class="col col-full">
      <blockquote class="blockquote-row">
        "Thank you again for everything! You were so helpful and my confidence is through the roof. The experience couldn’t be more friendly and the generosity unmatched."
        <footer><cite>- Carl</cite></footer>
      </blockquote>
    </div>
  </div>

</main>


<?php // get_sidebar(); ?>

<?php get_footer(); ?>
