<?php
/**
 * Copy Movie Grifus · Extensions For Grifus
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   Josantonius/Copy-Movie-Grifus
 * @copyright 2017 - 2018 (c) Josantonius - Copy Movie Grifus
 * @license   GPL-2.0+
 * @link      https://github.com/Josantonius/Copy-Movie-Grifus.git
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
