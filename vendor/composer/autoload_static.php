<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3b065db8a630f9f2d3ae706a4c8dd58
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3b065db8a630f9f2d3ae706a4c8dd58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3b065db8a630f9f2d3ae706a4c8dd58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc3b065db8a630f9f2d3ae706a4c8dd58::$classMap;

        }, null, ClassLoader::class);
    }
}