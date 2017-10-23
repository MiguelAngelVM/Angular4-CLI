<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b63ad2f8de52936bc23cc5657cd78d6
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'PiramideUploader' => __DIR__ . '/../..' . '/piramide-uploader/PiramideUploader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit9b63ad2f8de52936bc23cc5657cd78d6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9b63ad2f8de52936bc23cc5657cd78d6::$classMap;

        }, null, ClassLoader::class);
    }
}