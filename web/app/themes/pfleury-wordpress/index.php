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
      <div class="col col-md-4">
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
          <figcaption class="figure-featured__caption mt-2">
            <strong class="figure-featured__title">Project Title</strong>

            —
            <span class="figure-featured__tags">Branding, Print</span>
          </figcaption>
        </figure>
      </div>
    </div>

    <?php while (have_posts()) : the_post(); ?>

    <h3><?php the_title(); ?></h3>

    <?php the_content(); ?>

  <?php endwhile // end of the loop. ?>
  </article>
</main>

<?php
get_footer();

