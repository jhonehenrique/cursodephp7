<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit794077d4c9fafbc8ee5d14067d91145d
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit794077d4c9fafbc8ee5d14067d91145d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
