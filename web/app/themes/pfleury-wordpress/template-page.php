<?php
// Template Name: Page

get_header();
?>

<div class="container-fluid content">
<?php

while (have_posts()) {
  the_post();
  the_content();
}
?>
</div>
<?php
get_footer();

