<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf625a36e758d64f9a91f4533dee510c6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Oop\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Oop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf625a36e758d64f9a91f4533dee510c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf625a36e758d64f9a91f4533dee510c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf625a36e758d64f9a91f4533dee510c6::$classMap;

        }, null, ClassLoader::class);
    }
}