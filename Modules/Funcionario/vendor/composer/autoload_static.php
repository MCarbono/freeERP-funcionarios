<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit169d6fef5c16305a39f317261ec38721
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Funcionario\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Funcionario\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit169d6fef5c16305a39f317261ec38721::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit169d6fef5c16305a39f317261ec38721::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
