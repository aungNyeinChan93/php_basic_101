<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea4ccf45160d49b2e24063883ef0d456
{
    public static $files = array (
        'bcf916a31dfbf5a32e3dea478c91830a' => __DIR__ . '/../..' . '/ANC/helper/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'C' => 
        array (
            'CCC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'CCC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ANC/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ModelONe' => __DIR__ . '/../..' . '/ANC/provider/model.php',
        'View' => __DIR__ . '/../..' . '/ANC/provider/view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea4ccf45160d49b2e24063883ef0d456::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea4ccf45160d49b2e24063883ef0d456::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea4ccf45160d49b2e24063883ef0d456::$classMap;

        }, null, ClassLoader::class);
    }
}
