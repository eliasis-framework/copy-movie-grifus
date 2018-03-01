<?php
/**
 * Copy Movie Grifus · Extensions For Grifus
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   eliasis-framework/copy-movie-grifus
 * @copyright 2017 - 2018 (c) Josantonius - Copy Movie Grifus
 * @license   GPL-2.0+
 * @link      https://github.com/eliasis-framework/copy-movie-grifus.git
 * @since     1.0.0
 */

namespace EFG\Modules\CopyMovieGrifus\Model\Front;

use Eliasis\Framework\Model;

/**
 * Copy model.
 */
class Copy extends Model {

	/**
	 * Get movie info.
	 *
	 * @return array
	 */
	public function getMovieInfo() {

		$post_id = get_the_ID();
		$post_title = get_the_title();
		$content_post = get_post( $post_id );

		$post_content = $content_post->post_content;
		$post_content = apply_filters( 'the_content', $post_content );
		$post_content = str_replace( ']]>', ']]&gt;', $post_content );

		$movie = [

			'Title'      => __( 'Title', 'extensions-for-grifus-copy' ),
			'Rated'      => __( 'Rated', 'extensions-for-grifus-copy' ),
			'Released'   => __( 'Published', 'extensions-for-grifus-copy' ),
			'imdbRating' => __( 'Rating', 'extensions-for-grifus-copy' ),
			'imdbVotes'  => __( 'Votes', 'extensions-for-grifus-copy' ),
			'Awards'     => __( 'Awards', 'extensions-for-grifus-copy' ),
			'Country'    => __( 'Country', 'extensions-for-grifus-copy' ),
		];

		foreach ( $movie as $key => $value ) {
			$data = info_movie_get_meta( $key );
			$movie[ $key ] .= ( $data ) ? ': ' . $data : ': ';
		}

		$movie['Original']  = __( 'Original', 'extensions-for-grifus-copy' );
		$movie['Original'] .= ': ';
		$movie['Original'] .= ( $post_title ) ? $post_title : '';

		$duration = get_post_custom_values( 'Runtime' );

		$movie['Duration']  = __( 'Duration', 'extensions-for-grifus-copy' );
		$movie['Duration'] .= ': ';
		$movie['Duration'] .= ( isset( $duration[0] ) ) ? $duration[0] : '';

		$movie['Sipnosis']  = __( 'Sipnosis', 'extensions-for-grifus-copy' );
		$movie['Sipnosis'] .= ': ';
		$movie['Sipnosis'] .= ( $post_content ) ? $post_content : '';

		$movie['Director'] = __( 'Director', 'extensions-for-grifus-copy' );
		$movie['Director'] .= ': ';

		$director = wp_get_post_terms( $post_id, 'director' );

		foreach ( $director as $key => $value ) {
			if ( isset( $value->name ) ) {
				$movie['Director'] .= $value->name . ', ';
			}
		}

		$movie['Stars'] = __( 'Stars', 'extensions-for-grifus-copy' ) . ': ';

		$stars = wp_get_post_terms( $post_id, 'star' );

		foreach ( $stars as $key => $value ) {
			if ( isset( $value->name ) ) {
				$movie['Stars'] .= $value->name . ', ';
			}
		}

		$movie['Cast'] = __( 'Cast', 'extensions-for-grifus-copy' ) . ': ';

		$cast = wp_get_post_terms( $post_id, 'actor' );

		foreach ( $cast as $key => $value ) {
			if ( isset( $value->name ) ) {
				$movie['Cast'] .= $value->name . ', ';
			}
		}

		$movie['Genre'] = __( 'Genre', 'extensions-for-grifus-copy' ) . ': ';

		$categories = get_the_category();

		foreach ( $categories as $key => $value ) {
			if ( isset( $value->name ) ) {
				$movie['Genre'] .= $value->name . ', ';
			}
		}

		$params = [

			'postID'      => $post_id,
			'movie_info'  => [

				'the_title' => $movie['Original'] . "\n\n",
				'title'     => $movie['Title'] . "\n\n",
				'published' => $movie['Released'] . "\n\n",
				'rated'     => $movie['Rated'] . "\n\n",
				'duration'  => $movie['Duration'] . "\n\n",
				'rating'    => $movie['imdbRating'] . "\n\n",
				'votes'     => $movie['imdbVotes'] . "\n\n",
				'awards'    => html_entity_decode( $movie['Awards'] ) . "\n\n",
				'country'   => $movie['Country'] . ".\n\n",
				'sipnosis'  => strip_tags( trim( $movie['Sipnosis'] ) ) . "\n\n",
				'director'  => trim( $movie['Director'], ', ' ) . ".\n\n",
				'stars'     => trim( $movie['Stars'], ', ' ) . ".\n\n",
				'cast'      => trim( $movie['Cast'], ', ' ) . ".\n\n",
				'genre'     => trim( $movie['Genre'], ', ' ) . '.',
			],
			'copy_title'  => __(
				'Copy information',
				'extensions-for-grifus-copy'
			),
			'copy_button' => __( 'Copy', 'extensions-for-grifus-copy' ),
		];

		return $params;
	}
}
