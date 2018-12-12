<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit272a07f74ee8fb90363908557d384fa1
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
            0 => __DIR__ . '/..' . '/compropago/php-sdk/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit272a07f74ee8fb90363908557d384fa1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit272a07f74ee8fb90363908557d384fa1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit272a07f74ee8fb90363908557d384fa1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
