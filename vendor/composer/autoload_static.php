<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc17099e5c093b78eefb1e196d03fee5c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc17099e5c093b78eefb1e196d03fee5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc17099e5c093b78eefb1e196d03fee5c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
