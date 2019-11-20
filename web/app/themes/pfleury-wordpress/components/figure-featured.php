<?php
/**
 * Project Thumbnail
 */
?>

<figure class="figure-featured mb-3 mb-md-3">
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
    <?php if (has_tag()) { ?>
    —
    <span class="sr-only"><?php _e('Tags:', 'pfleury-wordpress'); ?></span>
    <?php the_tags('<ul class="figure-featured__tags list-inline d-inline mb-0"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>'); ?>
    </ul>
    <?php } ?>
  </figcaption>
</figure>
