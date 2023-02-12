<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2156e28651850df4c6bc3f839fe88d9b
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jimaoxiaoxin\\LaravelWorkflowEngine\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jimaoxiaoxin\\LaravelWorkflowEngine\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2156e28651850df4c6bc3f839fe88d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2156e28651850df4c6bc3f839fe88d9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2156e28651850df4c6bc3f839fe88d9b::$classMap;

        }, null, ClassLoader::class);
    }
}
