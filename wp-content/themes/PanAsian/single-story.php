<?php
get_header();
?>

<link rel="stylesheet"
	type="text/css"
	href="<?php echo get_template_directory_uri(); ?>/css/stories.css"
/>

<div class="Body-Content">
<div class="Stories">
<div class="Story-Content">
<?php
while(have_posts())
{
the_post();
?>
<div class="Page-Title-Container">
  <div class="Page-Title">
<?php
  the_title();
?>
</div>
<!-- END Page Title -->

</div>
<!-- END Page-Title-Container -->

<div class="Story-Body">
<?php
  the_content();
?>
</div>
<!-- END Story-Body -->

<?php
}
?>

</div>
<!-- END of Story-Content -->
</div>
<!-- END of Stories --.

</div>
<!--END of Body-Content -->

 <?php
 get_footer();
 ?>
