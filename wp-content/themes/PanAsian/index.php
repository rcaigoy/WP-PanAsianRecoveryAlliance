<?php
get_header();

  while(have_posts()): the_post();

  ?>
  <link rel="stylesheet"
  	type="text/css"
  	href="<?php echo get_template_directory_uri(); ?>/css/stories.css"
  />

  <div class="Body-Content">
    <div class="Page-Title-Container">
      <div class="Page-Title">
        <?php
        the_title();
         ?>
      </div>
      <div class="Page-SubTitle">
      </div>
    </div>

    <div class="Stories">
      <div class="Story-Content">
        <div class="Story-Body">
  <?php
    the_content();

?>
        </div>
      </div>
    </div>
  <?php

  endwhile;

 ?>


 <?php
 get_footer();
  ?>
