<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita12aef7d009e39a9a2c57d61a954bb86
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

        spl_autoload_register(array('ComposerAutoloaderInita12aef7d009e39a9a2c57d61a954bb86', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita12aef7d009e39a9a2c57d61a954bb86', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita12aef7d009e39a9a2c57d61a954bb86::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
