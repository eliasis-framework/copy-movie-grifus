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
use Eliasis\Complement\Type\Module;

$root_path = Module::CopyMovieGrifus()->getOption( 'path', 'root' );

return [

	'path' => [

		'languages' => $root_path . 'languages/',
	],
];
