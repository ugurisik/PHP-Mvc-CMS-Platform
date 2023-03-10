<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbbf6689e4d85d06a07b3cc6f1d75b9d3
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbbf6689e4d85d06a07b3cc6f1d75b9d3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbbf6689e4d85d06a07b3cc6f1d75b9d3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbbf6689e4d85d06a07b3cc6f1d75b9d3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
