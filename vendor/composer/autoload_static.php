<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45de363976d8a9fa29f450e29818431f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AWT\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AWT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45de363976d8a9fa29f450e29818431f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45de363976d8a9fa29f450e29818431f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
