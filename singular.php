<?php
/**
 * The template for displaying single posts and pages.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

get_header();?>
  <div class="first-section center">
    <p class="fist-section-title">What's New?</p>
    <div class="flex flex-wrap">
    <?php
      // Start the Loop
      $args = array(
        'post_type' => 'post', // Ensure it retrieves only posts, not pages
      );
      $custom_query = new WP_Query( $args );
      if ( $custom_query->have_posts() ) :
        while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
          <div class="post-container">
            <p class="post-title"><?php the_title();?></p>
            <div class="post-content flex"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/geo.png"><?php the_excerpt(); ?></div>
            <div class="post-date flex"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.png"><p><?php echo get_the_date(); ?></p></div>
            <a class="post-link" href="<?php echo get_permalink();?>">Learn more</a>
          </div>
      <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, no posts matched your criteria.' );  endif;?></p>
    </div>
	</div>
  <div class="second-section center">
    <p class="second-section-title">
      You are called
    </p>
    <div class="flex">
      <div class="halfwidth">
          <p class="second-section-blog">The 2024 Catholic Service Appeal calls you to support the ministries in our diocese.
          For more information on the appeal or the works happening within our diocese, click the button below.</p>
          <div class="second-section-buttons">
            <a class="">Donate today</a>
            <a class="">Learn more</a>
          </div>
          <p class="second-section-support">Your Donations will Support:</p>
          <div class="flex">
            <ul>
              <li>SEMINARIANS</li>
              <li>RETIED & INFIRM PRIESTS</li>
              <li>CATHOLIC SCHOOLS</li>
              <li>MULTICULTURAL MINISTRY</li>
              <li>OUTREACH:SOCIETY OF SAINT VINCENT DE PAUL</li>
            </ul>
            <ul>
              <li>PRO-LIFE MINISTRY</li>
              <li>RESTORATIVE JUSTICE</li>
              <li>THE CATHOLIC CONNECTION MAGAZINE</li>
              <li>YOUTH & YOUNG ADULT MINISTRY</li>
            </ul>
          </div>
      </div>
      <div class="halfwidth">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/M66U_DuMCS8" 
              title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
          </iframe>
      </div>
    </div>
  </div>
  <div class="third-section center">
    <p class="third-section-title">
      Locations & Times
    </p>
    <div class="flex">
      <div class="halfwidth">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
        <div class="halfwidth">
          <div class="filter-container">
            <div class="filter">
                <label for="city">FILTER BY CITY</label>
                <select id="city">
                    <option value="shreveport">SHREVEPORT</option>
                    <!-- Add more cities as options -->
                </select>
            </div>
            <div class="filter">
                <label for="deanery">FILTER BY DINERY</label>
                <select id="deanery">
                    <option value="eastern">ESTERN</option>
                    <!-- Add more deanery options -->
                </select>
            </div>
          </div>

          <div class="church-list">
            <div class="church-item">
              <div class="flex">
                  <p class="church-item-title">Cathedral of Saint John Berchmans</p>
                  <span class="arrow">&#9662;</span>
              </div>
              <div class="church-details">
                      <div class="mass-times">
                          <h4>Mass Times</h4>
                          <p>Saturday Mass: <span>4:00PM</span></p>
                          <p>Saturday Adoration: <span>10:00 - 2:00PM</span></p>
                          <p>Sunday: <span>8:00AM | 11:00AM | 5:30PM</span></p>
                          <p>Monday - Friday: <span>12:10PM</span></p>
                          <p>Friday Adoration: <span>11:00AM</span></p>
                          <p>Friday Benediction: <span>11:45AM</span></p>
                      </div>
                      <div class="confession-times">
                          <h4>Confession Times</h4>
                          <p>Tuesday - Thursday: <span>11:30AM - 12:00PM</span></p>
                          <p>Saturday: <span>2:30PM - 3:35PM</span></p>
                          <p><span>By Appointment</span></p>
                      </div>
                  </div>
            </div>
              <!-- Repeat this structure for each church -->
              <div class="church-item">
                  <div class="flex">
                      <p class="church-item-title">Holy Trinity Church</p>
                      <span class="arrow">&#9662;</span>
                  </div>
              </div>
              <!-- Add other churches... -->
          </div>
      </div>
    </div>
  </div>
  <div class="fourth-section center">
    <p class="fourth-section-title">
      Articles From The Catholic Connection
    </p>
    <div class="flex">
      <div>
        <img class="blog-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_image.png" />
        <p class="article-title">Our Identity Is The Body Of Christ</p>
        <p class="article-name">Mike Van Vranken, Spiritual Director</p>
      </div>
      <div>
        <img class="blog-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_image2.png" />
        <p class="article-title">This Is My Body: A Priest’s Reflection</p>
        <p class="article-name">Father david endres</p>
      </div>
      <div>
        <img class="blog-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_image3.png" />
        <p class="article-title">The Eucharist - The Body Of Christ</p>
        <p class="article-name">Very Reverend Mark Watson, VF</p>
      </div>
    </div>
    <div class="read-more"><a>Read More</a></div>
  </div>
  <div class="fifth-section">
    <p>Follow @shvcatholic on Instagram</p>
  </div>
<?php
get_footer();