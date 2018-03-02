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

namespace EFG\Modules\CopyMovieGrifus\Controller;

use Josantonius\WP_Register\WP_Register;
use Eliasis\Complement\Type\Module;
use Eliasis\Framework\Controller;
use Eliasis\Framework\App;

/**
 * Module main controller.
 */
class Launcher extends Controller {

	/**
	 * Class initializer method.
	 */
	public function init() {

		$state = Module::CopyMovieGrifus()->getOption( 'state' );

		if ( 'active' === $state || 'outdated' === $state ) {
			add_action( 'init', [ $this, 'set_language' ] );
			if ( ! is_admin() ) {
				$this->front();
			}
		}
	}

	/**
	 * Front initializer method.
	 */
	public function front() {

		add_action(
			'wp', function() {
				App::id( 'EFG' );
				if ( App::main()->is_single() ) {
					$this->set_language();
					$this->add_scripts();
					$this->add_styles();
				}
			}
		);
	}

	/**
	 * Set plugin textdomain.
	 */
	public function set_language() {

		$plugin_slug = App::EFG()->getOption( 'slug' );
		$module_slug = Module::CopyMovieGrifus()->getOption( 'slug' );

		$path = $plugin_slug . '/modules/' . $module_slug . '/languages/';

		load_plugin_textdomain( $plugin_slug . '-copy', false, $path );
	}

	/**
	 * Add scripts.
	 */
	protected function add_scripts() {

		$js = Module::CopyMovieGrifus()->getOption( 'assets', 'js' );

		$setting = $js['copyMovieGrifus'];

		$params = Module::CopyMovieGrifus()->getControllerInstance( 'Copy' )
										   ->getMovieInfo();

		$setting['params'] = array_merge( $setting['params'], $params );

		WP_Register::add( 'script', $setting );
	}

	/**
	 * Add styles.
	 */
	protected function add_styles() {

		$css = Module::CopyMovieGrifus()->getOption( 'assets', 'css' );
		WP_Register::add( 'style', $css['copyMovieGrifus'] );
	}
}
