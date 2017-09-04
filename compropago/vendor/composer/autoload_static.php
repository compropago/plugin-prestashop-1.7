<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39523f026ae760a4071ae68a6732a3e4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CompropagoSdk\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CompropagoSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39523f026ae760a4071ae68a6732a3e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39523f026ae760a4071ae68a6732a3e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
