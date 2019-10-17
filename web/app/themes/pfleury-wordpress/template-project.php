<?php
// Template Name: Project

get_header();
?>

<main class="main content">
  <?php while (have_posts()) : the_post(); ?>
  <article class="container-fluid">

    <header class="header-page-article">

      <?php if (get_custom_header()) { ?>
      <img src="<?php header_image(); ?>" alt="<?php get_custom_header()->title; ?>" />
      <?php } ?>

      <h1>
        <?php the_title(); ?>
      </h1>

      <section class="section-page-meta row pb-3">
        <?php if (get_field('year')) { ?>
        <div class="col">
          <?php the_field('year'); ?>
        </div>
        <?php } ?>

        <?php if (get_field('tags')) { ?>
        <div class="col">
          <?php the_field('tags'); ?>
        </div>
        <?php } ?>

        <?php if (get_field('description')) { ?>
        <div class="col">
          <?php the_field('description'); ?>
        </div>
        <?php } ?>
      </section>
    </header>

    <?php the_content(); ?>

    <footer class="text-center">
      <a class="h3" href="/work/">
        <span class="icon icon-arrow-medium-left"></span> <?php __('Back to all projects', 'pfleury-wordpress'); ?>
      </a>
    </footer>

  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

