<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbd2dcce97e61a8f7e42b07881c5c4422
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbd2dcce97e61a8f7e42b07881c5c4422', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbd2dcce97e61a8f7e42b07881c5c4422', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbd2dcce97e61a8f7e42b07881c5c4422::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
