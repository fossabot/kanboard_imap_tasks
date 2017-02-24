<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ae4b3fce9460942cfa4cb3349a9f36d
{
    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonRPC' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/json-rpc/src',
            ),
        ),
        'F' => 
        array (
            'Fetch' => 
            array (
                0 => __DIR__ . '/..' . '/tedivm/fetch/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3ae4b3fce9460942cfa4cb3349a9f36d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
