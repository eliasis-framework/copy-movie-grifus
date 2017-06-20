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

namespace ExtensionsForGrifus\Modules\CopyMovieGrifus\Controller\Front\Copy;

use Eliasis\Controller\Controller;

/**
 * Copy controller.
 * 
 * @since 1.0.0
 */
class Copy extends Controller {

    /**
     * Get movie info.
     * 
     * @since 1.0.0
     *
     * @return array
     */
    public function getMovieInfo() {

        return $this->model->getMovieInfo();
    }
}
