<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd2dcce97e61a8f7e42b07881c5c4422
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd2dcce97e61a8f7e42b07881c5c4422::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd2dcce97e61a8f7e42b07881c5c4422::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd2dcce97e61a8f7e42b07881c5c4422::$classMap;

        }, null, ClassLoader::class);
    }
}
