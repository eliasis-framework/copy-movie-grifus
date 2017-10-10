<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56d92c39afffaf14b71a4fa49990f52f
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Josantonius\\WP_Register\\' => 24,
            'Josantonius\\Url\\' => 16,
            'Josantonius\\Json\\' => 17,
            'Josantonius\\Hook\\' => 17,
            'Josantonius\\File\\' => 17,
        ),
        'E' => 
        array (
            'ExtensionsForGrifus\\Modules\\CopyMovieGrifus\\' => 44,
            'Eliasis\\Complement\\' => 19,
            'Eliasis\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Josantonius\\WP_Register\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/wp_register/src/WP_Register',
        ),
        'Josantonius\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/url/src/Url',
        ),
        'Josantonius\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/json/src/Json',
        ),
        'Josantonius\\Hook\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/hook/src/Hook',
        ),
        'Josantonius\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/file/src/File',
        ),
        'ExtensionsForGrifus\\Modules\\CopyMovieGrifus\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/src',
        ),
        'Eliasis\\Complement\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/complement/src',
        ),
        'Eliasis\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/eliasis/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56d92c39afffaf14b71a4fa49990f52f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56d92c39afffaf14b71a4fa49990f52f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
