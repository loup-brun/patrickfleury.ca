<?php
// Template Name: About

get_header();
?>

<main class="main">
  <?php while (have_posts()) : the_post(); ?>
  <article class="content container-fluid">

    <?php if (has_post_thumbnail()) { ?>
    <header class="header-page-article my-3">
      <?php
        the_post_thumbnail('full', array('class'=> 'img-fluid mb-5 mt-0'));
      ?>
    </header>
    <?php } ?>

    <div class="row content">
      <section class="col-lg-4 mb-3">
        <h1 class="mt-0">
          <?php the_title(); ?>
        </h1>
      </section>

      <?php if (get_field('about_intro')): ?>
      <section class="col-lg-8 lead mb-5">
        <?php
        the_field('about_intro');
        ?>
      </section>
      <?php endif; ?>
    </div>

    <section class="content">
      <?php the_content(); ?>
    </section>

  </article>

  <?php endwhile // end of the loop. ?>
</main>
<?php
get_footer();

