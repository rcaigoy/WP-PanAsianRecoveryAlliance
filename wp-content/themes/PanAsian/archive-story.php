
<?php
get_header();
?>

<link rel="stylesheet"
	type="text/css"
	href="<?php echo get_template_directory_uri(); ?>/css/stories.css"
/>

<div class="Body-Content">
  <div class="Page-Title-Container">
    <div class="Page-Title">
      Our Stories
    </div>
    <div class="Page-SubTitle">
    </div>
  </div>

  <div class="Stories">

<?php


if(have_posts()) : while(have_posts()) : the_post();
?>
  <div class="Story-Content">
  <a href="<?php the_permalink();?>" class="Story-Title">
<?php
    the_title();
?>


<div class="Story-Body">
<?php

      if (has_excerpt()){
        echo get_the_excerpt();
      }
      else {
        echo wp_trim_words(get_the_content(), 30);
      }

?>
<br />
Read More...
</div>
</a>
<hr />
<!-- END of Story-Body-->

</div>
<!-- end of Story-Content -->
<?php

endwhile; endif;
?>


</div>
<!-- END of Stories -->

</div>
<!-- END Body-Content -->
<?php
get_footer();
?>
