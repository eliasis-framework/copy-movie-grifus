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

namespace ExtensionsForGrifus\Modules\CopyMovieGrifus\Controller\Launcher;

use Josantonius\WP_Register\WP_Register,
    Eliasis\Controller\Controller,
    Eliasis\Module\Module,
    Eliasis\App\App;
    
/**
 * Module main controller.
 *
 * @since 1.0.0
 */
class Launcher extends Controller {

    /**
     * Class initializer method.
     * 
     * @since 1.0.0
     *
     * @return
     */
    public function init() {

        $state = Module::CopyMovieGrifus()->get('state');

        if ($state === 'active' || $state === 'outdated') {

            add_action('init', [$this, 'setLanguage']);
            
            if (!is_admin()) {

                $this->front();
            }
        }
    }

    /**
     * Front initializer method.
     * 
     * @since 1.0.0
     */
    public function front() {

        add_action('wp', function() {

            App::id('ExtensionsForGrifus');

            if (App::main()->isSingle()) {

                $this->setLanguage();
                $this->addScripts();
                $this->addStyles();
            }
        });
    }

    /**
     * Set plugin textdomain.
     * 
     * @since 1.0.0
     */
    public function setLanguage() {

        $DS = App::DS;

        $pSlug = App::ExtensionsForGrifus()->get('slug');

        $mSlug = Module::CopyMovieGrifus()->get('slug');

        $path = $pSlug . $DS .'modules' .$DS. $mSlug .$DS. 'languages' . $DS;

        load_plugin_textdomain($pSlug . '-copy', false, $path);
    }

    /**
     * Add scripts.
     * 
     * @since 1.0.0
     */
    protected function addScripts() {

        $js = Module::CopyMovieGrifus()->get('assets', 'js');

        WP_Register::add('script', $js['eliasisClipboard']);

        $setting = $js['copyMovieGrifus'];

        $params = Module::CopyMovieGrifus()->instance('Copy')
                                           ->getMovieInfo();

        $setting['params'] = array_merge($setting['params'], $params);

        WP_Register::add('script', $setting);
    }

    /**
     * Add styles.
     * 
     * @since 1.0.0
     */
    protected function addStyles() {

        $css = Module::CopyMovieGrifus()->get('assets', 'css');

        WP_Register::add('style', $css['copyMovieGrifus']);
    }
}
