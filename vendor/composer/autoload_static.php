<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84c9914883f96aedeefbd6a5ddfb5fcd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Op\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Op\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit84c9914883f96aedeefbd6a5ddfb5fcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84c9914883f96aedeefbd6a5ddfb5fcd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84c9914883f96aedeefbd6a5ddfb5fcd::$classMap;

        }, null, ClassLoader::class);
    }
}