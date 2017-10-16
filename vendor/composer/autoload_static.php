<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit068377531b3a79ec929d0bd8e1ca8f0b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lixweb\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lixweb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Lixweb\\Helpers' => __DIR__ . '/../..' . '/src/Helpers.php',
        'Lixweb\\popExcelApi' => __DIR__ . '/../..' . '/src/popExcelApi.php',
        'Lixweb\\popExcelApiContract' => __DIR__ . '/../..' . '/src/popExcelApiContract.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit068377531b3a79ec929d0bd8e1ca8f0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit068377531b3a79ec929d0bd8e1ca8f0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit068377531b3a79ec929d0bd8e1ca8f0b::$classMap;

        }, null, ClassLoader::class);
    }
}
