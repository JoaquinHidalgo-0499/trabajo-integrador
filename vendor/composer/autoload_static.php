<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34f80c8724222eebd423498e4a0a3f53
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Joaqu\\IntegradorPhp\\' => 20,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Joaqu\\IntegradorPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34f80c8724222eebd423498e4a0a3f53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34f80c8724222eebd423498e4a0a3f53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34f80c8724222eebd423498e4a0a3f53::$classMap;

        }, null, ClassLoader::class);
    }
}