<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit804f8c9dc018855f8517b2610cf91d55
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit804f8c9dc018855f8517b2610cf91d55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit804f8c9dc018855f8517b2610cf91d55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit804f8c9dc018855f8517b2610cf91d55::$classMap;

        }, null, ClassLoader::class);
    }
}
