<?php
/**
 * Copy Movie Grifus · Extensions For Grifus 
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Copy-Movie-Grifus.git
 * @since      1.0.0
 */

use Eliasis\App\App,
	Eliasis\Module\Module;

$DS = App::DS;

$ROOT = Module::CopyMovieGrifus()->get('path', 'root');

return [

    'path' => [

        'languages' => $ROOT.'languages'.$DS,
    ],
];
