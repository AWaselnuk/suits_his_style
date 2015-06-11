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
      <p class="text-lead">
        This is a difficult problem because blah blah blah, but we have a simple solution.
        Providing professional attire to these men gives them the confidence they need to succeed in job interviews and transform opportunities into careers.
      </p>
      <p>
        <!-- TODO: Add WP path -->
        <a class="btn btn-primary" href="/services">Learn more about our services &raquo;</a>
      </p>
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

  <div class="row">
    <div class="col col-third">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/client-photos/team1.jpg" alt="A Suits His Style volunteer helping to suit a client.">
    </div>

    <div class="col col-two-thirds">
      <h2>How does this work?</h2>
      <p class="text-lead">Talk briefly about the client referral system.</p>
      <p class="text-lead">Demonstrate some concrete example of the simplicity of the idea and the impact it has.</p>
    </div>
  </div>

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
      <p class="text-lead">
        <strong>Suits His Style could not exist without your donations.</strong>
      </p>
      <p class="text-lead">
        Your generous donation of time, clothing, or money can ensure that Suits His Style continues to make a real difference for unemployed men in need.
      </p>
      <!-- TODO: Add WP path -->
      <p><a class="btn btn-primary" href="/donate">Donate Now</a></p>

      <br>
      <p class="text-lead">
        <strong>Suits His Style is organized and operated entirely by our amazing volunteers.</strong>
      </p>
      <p class="text-lead">
        Briefly list some benefits of volunteering:
      </p>
      <ul>
        <li>Make a huge difference for men in need.</li>
        <li>Gain real experience in the social work field.</li>
        <li>Contribute towards your volunteer requirements for high school.</li>
        <li>Work with a motivated, experienced, and fun-loving team.</li>
        <li>... and more!</li>
      </ul>
      <!-- TODO: Add WP path -->
      <p><a class="btn btn-primary" href="/volunteer">Learn more about volunteer opportunities &raquo;</a></p>
    </div>
  </div>

</main>


<?php // get_sidebar(); ?>

<?php get_footer(); ?>
