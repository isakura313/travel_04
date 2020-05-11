<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07ad0cddab13402057634b6b8432e52e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07ad0cddab13402057634b6b8432e52e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07ad0cddab13402057634b6b8432e52e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}