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

use Eliasis\Complement\Type\Module;

$css = Module::CopyMovieGrifus()->getOption( 'url', 'css' );
$js  = Module::CopyMovieGrifus()->getOption( 'url', 'js' );

return [
	'assets' => [
		'js' => [
			'copyMovieGrifus' => [
				'name'      => 'copyMovieGrifus',
				'url'       => $js . 'copy-movie-grifus.min.js',
				'place'     => 'front',
				'deps'      => [ 'jquery' ],
				'version'   => '1.0.0',
				'footer'    => true,
				'params'    => [],
			],
		],
		'css' => [
			'copyMovieGrifus' => [
				'name'      => 'copyMovieGrifus',
				'url'       => $css . 'copy-movie-grifus.min.css',
				'place'     => 'front',
				'deps'      => [],
				'version'   => '1.0.0',
				'media'     => '',
			],
		],
	],
];
