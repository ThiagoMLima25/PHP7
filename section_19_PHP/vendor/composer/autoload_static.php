<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb346bd021826681115fa46fe507dc37
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb346bd021826681115fa46fe507dc37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb346bd021826681115fa46fe507dc37::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
