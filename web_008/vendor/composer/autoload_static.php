<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf91f0ec33cbad61b7684bcdd1df444a3
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'D' => 
        array (
            'DanielOliveira\\LojaWebstorePhp\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'DanielOliveira\\LojaWebstorePhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf91f0ec33cbad61b7684bcdd1df444a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf91f0ec33cbad61b7684bcdd1df444a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf91f0ec33cbad61b7684bcdd1df444a3::$classMap;

        }, null, ClassLoader::class);
    }
}
