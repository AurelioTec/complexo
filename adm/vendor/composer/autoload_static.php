<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93131e1841658c1bc371ee06b5645491
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93131e1841658c1bc371ee06b5645491::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93131e1841658c1bc371ee06b5645491::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93131e1841658c1bc371ee06b5645491::$classMap;

        }, null, ClassLoader::class);
    }
}