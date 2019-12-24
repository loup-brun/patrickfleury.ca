<?php
/*
 * Template Name: Project
 * Template Post Type: post, page, project
 */

get_header();
?>

<?php
while (have_posts()):
  the_post();
  $date = get_the_date();
  $headline = get_the_title();
  $content = apply_filters('the_content', get_the_content());
  $tags = get_the_tags();
?>

<main class="main">
  <article class="content container-fluid">

    <header class="header-page-article my-3">

       <?php
      $header_image = get_field('header_image');
      $size = 'full';
      if ($header_image) {
        echo wp_get_attachment_image($header_image, $size);
      } ?>

      <h1 class="my-5">
        <?php the_title(); ?>
      </h1>

      <section class="section-page-meta row pb-3">
        <?php if (get_field('year')) { ?>
        <div class="col-6 col-lg-1 mb-2">
          <span class="project__year">
            <?php the_field('year'); ?>
          </span>
        </div>
        <?php } ?>

        <?php if ($tags): ?>
        <div class="col-6 col-lg-4 mb-2">
          <span class="sr-only"><?php _e('Tags:', 'pfleury-wordpress'); ?></span>
          <?php the_tags('<ul class="figure-featured__tags list-inline d-inline mb-0"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>'); ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php if (get_the_excerpt()) { ?>
        <div class="col-12 col-lg-7 lead mb-2">
          <?php echo get_the_excerpt(); ?>
        </div>
        <?php } ?>
      </section>
    </header>

    <?php the_content(); ?>

    <?php include 'components/project-footer.php'; ?>
  </article>
</main>

<?php endwhile; // end of the loop.
get_footer();
