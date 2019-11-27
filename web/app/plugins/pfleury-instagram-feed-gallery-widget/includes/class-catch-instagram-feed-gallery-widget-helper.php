<?php
/**
 * The Social Gallery and Widget Helper of the plugin.
 *
 * @link       catchplugins.com
 * @since      1.0.0
 *
 * @package    Catch_Instagram_Feed_Gallery_Widget
 * @subpackage Catch_Instagram_Feed_Gallery_Widget/includes
 */

/**
 * The Social Gallery and Widget Helper of the plugin.
 *
 * @package    Catch_Instagram_Feed_Gallery_Widget
 * @subpackage Catch_Instagram_Feed_Gallery_Widget/includes
 * @author     Catch Plugins <info@catchplugins.com>
 */
class Catch_Instagram_Feed_Gallery_Widget_Helper {

  /**
   * The ID of this plugin.
   *
   * @since    1.0.0
   * @access   private
   * @var      string    $public_url    The url to get feed from.
   */
  private $url = 'https://api.instagram.com/v1/';

  /**
   * Get Media and return in JSON format.
   *
   * @param string $type Account type.
   *
   * @param string $user Username.
   *
   * @param string $limit Count.
   *
   * @return json
   */
  function get_media( $limit = null ) {
    if ( isset( $_POST['pagination_link'] ) ) {
      $url = $_POST['pagination_link'];
    } else {
      $options = catch_instagram_feed_gallery_widget_get_options( 'catch_instagram_feed_gallery_widget_options' );
      $token   = $options['access_token'];
      $url     = $this->url . 'users/self/media/recent/?access_token=' . esc_html( $token ) . '&count=' . absint( $limit );
      } // End if().
      $json = self::get_remote_data_from_instagram_in_json( $url );
      return $json;
  }

  /**
  * Parse user media json
  *
  * @param string $url URL.
  *
  * @return json
  */
  function get_remote_data_from_instagram_in_json( $url ) {
      $content = wp_remote_get( $url, array(
          'timeout'     => 100,
          )
      );

      if ( isset( $content->errors ) ) {
          $content = array(
              'meta' => array(
                  'error_message' => $content->errors['http_request_failed']['0'],
                   ),
              );
          return $content;
      } else {
          if ( 'Invalid User' === $content['body'] ) {
              $json = array(
                  'meta' => array(
                      'error_message' => $content['body'],
                      ),
                  );
          } else {
              $response = wp_remote_retrieve_body( $content );
              //$json     = json_decode( $response, true );
              $json = $response;
          }
          return $json;
      }
  }

  /**
   * Convert json data to HTML
   *
   * @param  array $options Widget/Shortcode options.
   */
  function display( $options ) {
    if ( false === ( $data = get_transient( 'catch_insta_json_' . '_' . $options['number'] . '_' . $options['size'] ) ) ) {
      // It wasn't there, so regenerate the data and save the transient
      $data = $this->get_media( $options['number'] );
      $data = json_decode( $data, true );
      set_transient(  'catch_insta_json_' . '_' . $options['number'] . '_' . $options['size'], $data, HOUR_IN_SECONDS );
    }

    $output = '';
    if ( ! $data ) {
      $output .= esc_html__( 'No Data', 'catch-instagram-feed-gallery-widget' );
      return $output;
    } elseif ( isset( $data['meta']['error_message'] ) ) {
      if ( isset( $data['meta']['error_type'] ) ) {
        $output .= '<!-- Instagram feed : Provide API access token / Username -->';
        return $output;
      } else {
        $output .= esc_html( $data['meta']['error_message'] );
        return $output;
      }
    } else {
      $output .= '<section id="instagram" class="py-3">';

      if ( ( isset( $options['title'] ) && ! empty( $options['title'] ) ) && ( isset( $options['element'] ) && 'shortcode' === $options['element'] ) ) {
        $output .= '
      <div class="container">
        <h3 class="text-center">' . esc_html( $options['title'] ) . '</h3>
      </div>';
      }
      $instagram_posts_counter = 0;

      $catch_instagram_feed_gallery_widget_class = 'default';

      $output .= '
      <input type="hidden" name="catch-instagram-feed-gallery-widget-ajax-nonce" id="catch-instagram-feed-gallery-widget-ajax-nonce" value="' . esc_attr( wp_create_nonce( 'catch-instagram-feed-gallery-widget-ajax-nonce' ) ) . '" />';
      $output .= '

      <div class="swipe-js instagram-swipe" id="instagram-swipe">
        <div class="swipe-js-wrap d-flex flex-row">';

      $key = 'data';
      $next_url = isset( $data['pagination']['next_url'] ) ? $data['pagination']['next_url'] : '';

      if ( 0 === count( $data[ $key ] ) ) {
        $output .= esc_html__( 'No data / Invalid Username / Private Account', 'catch-instagram-feed-gallery-widget' );
        return;
      }

      foreach ( $data[ $key ] as $src ) {
        if ($instagram_posts_counter % 4 === 0) {
          $output .= '
          <section class="swipe-js-slide d-flex flex-row align-items-start justify-content-between flex-wrap instagram-feed-slide">';
        }
        if ($instagram_posts_counter < 12) { // max 12 posts
          $output .= '
            <figure class="instagram-feed-figure">
              <a class="instagram-anchor" target="_blank" href="' . esc_url( $src['link'] ) . '">';
          if ( 'video' === $src['type'] ) {
            if ( 'thumbnail' == $options['size'] ) {
              $options['size'] = 'low_resolution';
              $output .= '<div class="instagram-feed-image" style="background-image: url(' . esc_url( $src['images'][ $options['size'] ]['url'] ) . ')" role="img"></div>';
            }
            $output .= '';
          } elseif ( 'image' === $src['type'] ) {
            $output .= '<div class="instagram-feed-image" style="background-image: url(' . esc_url( $src['images'][ $options['size'] ]['url'] ) . ')" role="img"></div>';
          } elseif ( 'carousel' === $src['type'] ) {
            $output .= '<div class="instagram-feed-image" style="background-image: url(' . esc_url( $src['images'][ $options['size'] ]['url'] ) . ')" role="img"></div>';
          } // End if().
            $output .= '
              </a>
              <figcaption>
                <small>
                  — ' . date('Y.m.d', $src['created_time']) . '
                </small>
              </figcaption>
            </figure>';
          if ($instagram_posts_counter % 4 === 3) {
            $output .= '
            </section>'; // close for each 4 posts
          }
          $instagram_posts_counter++; // increment posts counter
        }
      } // End foreach().
      $output .= '
          </div>

          <footer class="swipe-js-numbers text-center">
            <span class="slider-number-current"></span>
            &nbsp;
            <span class="slider-number-separator">/</span>
            &nbsp;
            <span class="slider-number-total"></span>
          </footer>
          <button class="swipe-js-btn -prev">
            <div class="icon icon-arrow-left"></div>
          </button>
          <button class="swipe-js-btn -next">
            <div class="icon icon-arrow-right"></div>
          </button>
        </div>
      </section>';
      $opt = catch_instagram_feed_gallery_widget_get_options( 'catch_instagram_feed_gallery_widget_options' );

      $link = '//instagram.com/' . esc_html( $opt['username'] );
    //      $output .= '<p class="instagram-button"><a class="button" href="' . esc_url( $link ) . '" target="_blank"> ' . esc_html__( 'View on Instagram', 'catch-instagram-feed-gallery-widget' ) . '</a></p>';
    //      $output .= '</div>';

      // Return the HTML block.
      return $output;
    } // End if().
  }

  /**
   * Text transform to sentence case
   *
   * @param string $string Layout of the widget.
   */
  function sentence_case( $string ) {
    $new_string = '';
      $sentences = preg_split( '/([.?!]+)/', $string, -1,PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE );
      foreach ( $sentences as $key => $sentence ) {
          $new_string .= ( $key & 1 ) == 0?
              ucfirst( strtolower( trim( $sentence ) ) ) :
              $sentence . ' ';
      }
      return trim( $new_string );
  }
}
