<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit077b947adb9316ca8e5c28287758b2eb
{
    public static $files = array (
        '1929962042b84407e69760d590541ec7' => __DIR__ . '/..' . '/cmb2/cmb2/init.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Toucan\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Toucan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit077b947adb9316ca8e5c28287758b2eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit077b947adb9316ca8e5c28287758b2eb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
