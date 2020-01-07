<?php
/**
 * Outputs a carousel with the testimonials
 *.
 */

function testimonials_template_code() {
  $return_string = '';
  // Query testimonials
  $testimonialsQuery = array();

  $testimonialsQuery = new WP_Query( array('post_type' => 'temoignage') );

  if ($testimonialsQuery->have_posts()) {
    $return_string .= '
      <div class="swipe-js my-3" id="testimonials">
        <div class="swipe-js-wrap d-flex flex-row">';
          while ($testimonialsQuery->have_posts()) : $testimonialsQuery->the_post();

            $return_string .= '
              <section class="swipe-js-slide d-flex flex-column justify-content-center">
                <div class="container d-flex justify-content-center">
                  <blockquote class="big-quote">';
                    $return_string .= get_the_content();
                    if (get_field('testimony_author')):
                    $return_string .=  '<cite>' . get_field('testimony_author');
                      if (get_field('testimony_company')):
                        $return_string .=  '<br><span class="font-weight-normal">' . get_field('testimony_company') . '</span>';
                      endif; // testimony company
                    $return_string .=  '</cite>';
                    endif; // tesgimony author
                  $return_string .=  '</blockquote>
                </div>
              </section>';
            endwhile;
         $return_string .= '</div>';
        if (sizeof($testimonialsQuery->posts) > 1):
         $return_string .= '
          <button class="swipe-js-btn -prev">
            <div class="icon icon-arrow-left"></div>
          </button>
          <button class="swipe-js-btn -next">
            <div class="icon icon-arrow-right"></div>
          </button>
          <nav class="swipe-js-numbers">
            <span class="slider-number-current"></span> / <span class="slider-number-total"></span>
          </nav>';
        endif; // if sizesof > 1
      $return_string .= '</div>';
  } // end if query

  wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly

  return $return_string;
}
?>
