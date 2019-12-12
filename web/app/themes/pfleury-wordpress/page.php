<?php
// Template Name: Page

get_header();
?>

<main class="main">
  <?php while (have_posts()) : the_post(); ?>
  <article class="content container-fluid">

    <header class="header-page-article my-3">

      <?php
      if (has_post_thumbnail()) {
        the_post_thumbnail('full', array('class'=> 'img-fluid mb-5 mt-0'));
      }
      ?>

      <section class="row mb-5">
        <div class="col-md-5">
          <h1 class="mt-0">
            <?php the_title(); ?>
          </h1>
        </div>

        <div class="col-md-7 section-page-meta mt-5 pb-3 lead">
          <?php the_excerpt(); ?>
        </div>
      </section>
    </header>

    <section class="container-fluid content">
      <?php the_content(); ?>
    </section>
  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

