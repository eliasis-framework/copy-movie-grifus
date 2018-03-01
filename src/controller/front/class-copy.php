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

namespace EFG\Modules\CopyMovieGrifus\Controller\Front;

use Eliasis\Framework\Controller;

/**
 * Copy controller.
 */
class Copy extends Controller {

	/**
	 * Get movie info.
	 *
	 * @return array
	 */
	public function getMovieInfo() {

		return $this->model->getMovieInfo();
	}
}
