<?php

// autoload_static.php @generated by Composer
namespace Barn2\Plugin\Easy_Post_Types_Fields\Dependencies\Composer\Autoload;

class ComposerStaticInit8f46b741b3fc545944ffe0b77210fba6
{
    public static $prefixLengthsPsr4 = array('B' => array('Barn2\\Setup_Wizard\\' => 19));
    public static $prefixDirsPsr4 = array('Barn2\\Setup_Wizard\\' => array(0 => __DIR__ . '/../..' . '/src'));
    public static $classMap = array('Barn2\\Plugin\\Easy_Post_Types_Fields\\Dependencies\\Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php');
    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f46b741b3fc545944ffe0b77210fba6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f46b741b3fc545944ffe0b77210fba6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f46b741b3fc545944ffe0b77210fba6::$classMap;
        }, null, ClassLoader::class);
    }
}
