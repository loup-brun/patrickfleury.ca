<?php
// Template Name: Projects List (Work)
// Index page to display work (projects)

get_header();
?>

<main class="main content">
  <article class="container-fluid">

    <h1 class="mb-5">
      <?php _e('Explore my work', 'pfleury-wordpress'); ?>
    </h1>

    <div class="row">
      <div class="col col-md-12">
        <figure class="figure-featured mb-3">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/1280x800"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="row flex-row">
      <div class="col col-6 mr-auto">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/900x900"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
      <div class="col col-5">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/1600x900"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="row">
      <div class="col col-md-8">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/900x900"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
      <div class="col col-md-4 d-flex flex-column justify-content-center">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/1600x900"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="row">
      <div class="col col-md-4 align-items-center">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/900x900"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
      <div class="col col-md-8">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="#">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <img class="figure-featured__img img-fluid"
                 src="https://source.unsplash.com/random/1600x900"
                 alt="Project title" />
          </div>
          <figcaption class="figure-featured__caption d-flex flex-column justify-content-center">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
    </div>

    <?php
    // Query projects
    $projectsQuery = array();

    if (pll_current_language() === 'fr') {
      $projectsQuery = new WP_Query( array('category_name' => 'projets') );
    } else if (pll_current_language() === 'en') {
      $projectsQuery = new WP_Query( array('category_name' => 'projects') );
    }

    if ($projectsQuery->have_posts()): ?>
    <div class="row">
      <?php while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); ?>

      <div class="col col-md-8">
        <figure class="figure-featured mb-5">
          <div class="figure-featured__image-wrapper">
            <a class="figure-featured__link overlay" href="<?php the_permalink(); ?>">
              <?php _e('View project', 'pfleury-wordpress'); ?>
            </a>
            <?php
            if (get_the_post_thumbnail()) {
              the_post_thumbnail('large', array('class'=> 'img-fluid'));
            } else { ?>
            <div class="figure-featured__image--default"></div>
            <?php } ?>
          </div>
          <figcaption class="figure-featured__caption mt-2">
            <a href="<?php the_permalink(); ?>">
              <strong class="figure-featured__title"><?php the_title(); ?></strong>
            </a>
            —
            <span class="sr-only"><?php _e('Tags:', 'pfleury-wordpress'); ?></span>
            <?php the_tags('<ul class="figure-featured__tags list-inline d-inline mb-0"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>'); ?>
            </ul>
          </figcaption>
        </figure>
      </div>
      <?php endwhile; // end of the projects loop. ?>
    </div>
    <?php endif; ?>
  </article>
</main>

<?php
get_footer();

