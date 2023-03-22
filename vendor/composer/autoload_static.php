<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit362b3a57b57718f16f137aa054d703bc
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fragen\\Category_Colors\\' => 23,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fragen\\Category_Colors\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Category_Colors',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit362b3a57b57718f16f137aa054d703bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit362b3a57b57718f16f137aa054d703bc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit362b3a57b57718f16f137aa054d703bc::$classMap;

        }, null, ClassLoader::class);
    }
}
