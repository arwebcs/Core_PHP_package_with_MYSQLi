<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72504e5db7e6318745c1822052e2da18
{
    public static $files = array (
        '71e3ae4bc1e3864e3aca56832c22777e' => __DIR__ . '/../..' . '/api/models/DB.php',
        '95444e9c177dd8fd5c54990580df27d0' => __DIR__ . '/../..' . '/api/models/User.php',
        '1569d89abca9a9cf0d92dace18dbd4d0' => __DIR__ . '/../..' . '/api/lib/pdflib/autoload.php',
        '3ca62abf1a44d72a42ef909e52410d66' => __DIR__ . '/../..' . '/api/lib/phpqrcode/qrlib.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit72504e5db7e6318745c1822052e2da18::$classMap;

        }, null, ClassLoader::class);
    }
}
