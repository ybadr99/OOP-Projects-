<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd60e3c53271923797b2309596e1e79ef
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd60e3c53271923797b2309596e1e79ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd60e3c53271923797b2309596e1e79ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
