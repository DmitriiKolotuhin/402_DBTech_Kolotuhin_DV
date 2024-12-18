<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9f06fe309b345c7954d8d9ccd05b896
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '2ee48161a56e057040ef845f238ca942' => __DIR__ . '/../..' . '/src/Controller.php',
        'f8fd45748464f95f995a04ad91e2cef6' => __DIR__ . '/../..' . '/src/View.php',
        '786ebda2089dad8e0f0a40c976c078f7' => __DIR__ . '/../..' . '/src/Game.php',
        '1dfaefef88b21a2f2ff3e41dea77072d' => __DIR__ . '/../..' . '/src/Database.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'H' => 
        array (
            'Haiven\\GuessNumber\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Haiven\\GuessNumber\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9f06fe309b345c7954d8d9ccd05b896::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9f06fe309b345c7954d8d9ccd05b896::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite9f06fe309b345c7954d8d9ccd05b896::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite9f06fe309b345c7954d8d9ccd05b896::$classMap;

        }, null, ClassLoader::class);
    }
}
