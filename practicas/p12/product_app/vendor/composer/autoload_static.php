<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2182ea043b2074358d04971e09f8ef4
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'backend\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/product_app/backend',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2182ea043b2074358d04971e09f8ef4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2182ea043b2074358d04971e09f8ef4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2182ea043b2074358d04971e09f8ef4::$classMap;

        }, null, ClassLoader::class);
    }
}
