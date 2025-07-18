<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfdcf55d5ea6e01b5d0823801820c3133
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

        spl_autoload_register(array('ComposerAutoloaderInitfdcf55d5ea6e01b5d0823801820c3133', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfdcf55d5ea6e01b5d0823801820c3133', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfdcf55d5ea6e01b5d0823801820c3133::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
