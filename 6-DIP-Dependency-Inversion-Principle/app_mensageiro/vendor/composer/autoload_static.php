<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42d7ad5fcbcc8c5ea9fd7138996f427d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42d7ad5fcbcc8c5ea9fd7138996f427d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42d7ad5fcbcc8c5ea9fd7138996f427d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit42d7ad5fcbcc8c5ea9fd7138996f427d::$classMap;

        }, null, ClassLoader::class);
    }
}
