<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit168efc8b5e37650163a2f8718d8e3ce3
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit168efc8b5e37650163a2f8718d8e3ce3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit168efc8b5e37650163a2f8718d8e3ce3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit168efc8b5e37650163a2f8718d8e3ce3::$classMap;

        }, null, ClassLoader::class);
    }
}