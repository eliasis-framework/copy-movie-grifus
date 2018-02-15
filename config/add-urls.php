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

use Eliasis\Complement\Type\Module;
use Eliasis\Framework\App;

$url = App::MODULES_URL() . Module::CopyMovieGrifus()->getOption( 'folder' );

return [
	'url' => [
		'css' => $url . 'public/css/',
		'js' => $url . 'public/js/',
		'images' => $url . 'public/images/',
	],
];
