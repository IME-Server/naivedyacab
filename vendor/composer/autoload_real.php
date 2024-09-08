<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitad94f4fd2c725a127871a09e1f0e3210
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

        spl_autoload_register(array('ComposerAutoloaderInitad94f4fd2c725a127871a09e1f0e3210', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitad94f4fd2c725a127871a09e1f0e3210', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitad94f4fd2c725a127871a09e1f0e3210::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
