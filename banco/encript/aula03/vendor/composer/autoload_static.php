<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7d1b922f88493d03689fd000a8a850a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7d1b922f88493d03689fd000a8a850a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7d1b922f88493d03689fd000a8a850a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7d1b922f88493d03689fd000a8a850a::$classMap;

        }, null, ClassLoader::class);
    }
}
