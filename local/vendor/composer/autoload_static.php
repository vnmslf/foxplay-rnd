<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9aea0dbd0fc476cd4eab3de5b05195d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Akh\\Typograf\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Tools',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Akh\\Typograf\\' => 
        array (
            0 => __DIR__ . '/..' . '/akh/typograf/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9aea0dbd0fc476cd4eab3de5b05195d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9aea0dbd0fc476cd4eab3de5b05195d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9aea0dbd0fc476cd4eab3de5b05195d::$classMap;

        }, null, ClassLoader::class);
    }
}
