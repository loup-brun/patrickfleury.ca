<?php
// Template Name: Page

get_header();
?>

<main class="main container-fluid">
  <?php while (have_posts()) : the_post(); ?>
  <article class="content">

    <header class="header-page-article">

      <?php
      if (has_post_thumbnail()) {
        the_post_thumbnail('full');
      }
      ?>

      <h1 class="mt-2">
        <?php the_title(); ?>
      </h1>

      <section class="section-page-meta row pb-3">

      </section>
    </header>

    <?php the_content(); ?>

  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

