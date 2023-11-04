<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbfe4672141d8e97ff3e4bdc12409034
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbfe4672141d8e97ff3e4bdc12409034::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbfe4672141d8e97ff3e4bdc12409034::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbfe4672141d8e97ff3e4bdc12409034::$classMap;

        }, null, ClassLoader::class);
    }
}