<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49b8e3e154a652714261d4d38ee74d3c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49b8e3e154a652714261d4d38ee74d3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49b8e3e154a652714261d4d38ee74d3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49b8e3e154a652714261d4d38ee74d3c::$classMap;

        }, null, ClassLoader::class);
    }
}