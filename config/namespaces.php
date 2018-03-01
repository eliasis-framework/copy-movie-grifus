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

use Eliasis\Framework\App;

$namespace = App::EFG()->getOption( 'namespaces', 'modules' );

return [
	'namespaces' => [
		'controller' => $namespace . 'CopyMovieGrifus\\Controller\\',
		'front'      => $namespace . 'CopyMovieGrifus\\Controller\\Front\\',
	],
];
