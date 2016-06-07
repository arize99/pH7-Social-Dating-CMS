<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitPH7
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'M' => 
        array (
            'MaxMind\\' => 8,
        ),
        'G' => 
        array (
            'GeoIp2\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'MaxMind\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src',
        ),
        'GeoIp2\\' => 
        array (
            0 => __DIR__ . '/..' . '/geoip2/geoip2/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MaxMind' => 
            array (
                0 => __DIR__ . '/..' . '/maxmind-db/reader/src',
            ),
        ),
    );

    public static $classMap = array (
        'RobThree\\Auth\\Providers\\Qr\\BaseHTTPQRCodeProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Qr/BaseHTTPQRCodeProvider.php',
        'RobThree\\Auth\\Providers\\Qr\\GoogleQRCodeProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Qr/GoogleQRCodeProvider.php',
        'RobThree\\Auth\\Providers\\Qr\\IQRCodeProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Qr/IQRCodeProvider.php',
        'RobThree\\Auth\\Providers\\Qr\\QRException' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Qr/QRException.php',
        'RobThree\\Auth\\Providers\\Qr\\QRServerProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Qr/QRServerProvider.php',
        'RobThree\\Auth\\Providers\\Qr\\QRicketProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Qr/QRicketProvider.php',
        'RobThree\\Auth\\Providers\\Rng\\CSRNGProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Rng/CSRNGProvider.php',
        'RobThree\\Auth\\Providers\\Rng\\HashRNGProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Rng/HashRNGProvider.php',
        'RobThree\\Auth\\Providers\\Rng\\IRNGProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Rng/IRNGProvider.php',
        'RobThree\\Auth\\Providers\\Rng\\MCryptRNGProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Rng/MCryptRNGProvider.php',
        'RobThree\\Auth\\Providers\\Rng\\OpenSSLRNGProvider' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Rng/OpenSSLRNGProvider.php',
        'RobThree\\Auth\\Providers\\Rng\\RNGException' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/Providers/Rng/RNGException.php',
        'RobThree\\Auth\\TwoFactorAuth' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/TwoFactorAuth.php',
        'RobThree\\Auth\\TwoFactorAuthException' => __DIR__ . '/..' . '/robthree/twofactorauth/lib/TwoFactorAuthException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitPH7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitPH7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitPH7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitPH7::$classMap;

        }, null, ClassLoader::class);
    }
}
