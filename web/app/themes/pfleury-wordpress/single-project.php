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

<main class="main content">
  <article class="container-fluid">

    <header class="header-page-article">

      <?php if (get_custom_header()) { ?>
      <img src="<?php header_image(); ?>" alt="" />
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

        <?php if ($tags): ?>
        <div class="col">
          <ul class="nav nav-inline">
            <?php foreach ($tags as $tag):
              $tag_text = $tag->name;
              $tag_link = '/tag/'.$tag->slug;
            ?>
            <li class="blog__tag">
              <a href="<?php echo $tag_link; ?>">
                <?php echo $tag_text; ?>
              </a>
            </li>
          <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

        <?php if (get_field('description')) { ?>
        <div class="col">
          <?php the_field('description'); ?>
        </div>
        <?php } ?>
      </section>
    </header>

    <?php the_content(); ?>

    <footer class="text-center">
      <a class="h3 bold-link" href="/work/">
        <span class="icon icon-arrow-medium-left"></span> <?php _e('Back to all projects', 'pfleury-wordpress'); ?>
      </a>
    </footer>

  </article>
</main>

<?php endwhile; // end of the loop.
get_footer();
