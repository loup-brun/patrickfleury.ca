<?php
// Template Name: Page

get_header();
?>

<main class="main container-fluid">
  <?php while (have_posts()) : the_post(); ?>
  <article class="content">

    <header class="header-page-article row mb-5">

      <?php
      if (has_post_thumbnail()) {
        the_post_thumbnail('full');
      }
      ?>

      <div class="col-md-5">
        <h1 class="mt-0">
          <?php the_title(); ?>
        </h1>
      </div>

      <section class="col-md-7 section-page-meta row mt-5 pb-3 lead">
        <?php the_excerpt(); ?>
      </section>
    </header>

    <?php the_content(); ?>

  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

