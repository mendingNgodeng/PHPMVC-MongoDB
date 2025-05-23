<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita381f6f833a0d06f3b72acf83d9aa08e
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita381f6f833a0d06f3b72acf83d9aa08e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita381f6f833a0d06f3b72acf83d9aa08e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita381f6f833a0d06f3b72acf83d9aa08e::$classMap;

        }, null, ClassLoader::class);
    }
}
