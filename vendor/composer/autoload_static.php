<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5e138d53f4512817068a7c962a5e983
{
    public static $files = array (
        'f143c03ce577a48da36e8a1824317315' => __DIR__ . '/../..' . '/lib.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SilverStripe\\TravisSupport\\' => 27,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SilverStripe\\TravisSupport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'Composer\\Semver\\Constraint\\AbstractConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/AbstractConstraint.php',
        'Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'Composer\\Semver\\Constraint\\EmptyConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/EmptyConstraint.php',
        'Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'SilverStripe\\TravisSupport\\ComposerGenerator' => __DIR__ . '/../..' . '/src/ComposerGenerator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5e138d53f4512817068a7c962a5e983::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5e138d53f4512817068a7c962a5e983::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5e138d53f4512817068a7c962a5e983::$classMap;

        }, null, ClassLoader::class);
    }
}