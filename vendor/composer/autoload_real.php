<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdbe2f0c24ea10c0e9c4e2e318cf2030e
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

        spl_autoload_register(array('ComposerAutoloaderInitdbe2f0c24ea10c0e9c4e2e318cf2030e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdbe2f0c24ea10c0e9c4e2e318cf2030e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdbe2f0c24ea10c0e9c4e2e318cf2030e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
