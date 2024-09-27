<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8eaf3372cb80b3148e8d08c1d69d3bda
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

        spl_autoload_register(array('ComposerAutoloaderInit8eaf3372cb80b3148e8d08c1d69d3bda', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8eaf3372cb80b3148e8d08c1d69d3bda', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8eaf3372cb80b3148e8d08c1d69d3bda::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
