<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65253c5f313e66225228524f18203728
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'ModernOOP\\StudiKasus\\PPH21\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ModernOOP\\StudiKasus\\PPH21\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ModernOOP\\StudiKasus\\PPH21\\AbstractCalculator' => __DIR__ . '/../..' . '/src/AbstractCalculator.php',
        'ModernOOP\\StudiKasus\\PPH21\\CalculatorInterface' => __DIR__ . '/../..' . '/src/CalculatorInterface.php',
        'ModernOOP\\StudiKasus\\PPH21\\FirstRuleCalculator' => __DIR__ . '/../..' . '/src/FirstRuleCalculator.php',
        'ModernOOP\\StudiKasus\\PPH21\\FourthRuleCalculator' => __DIR__ . '/../..' . '/src/FourthRuleCalculator.php',
        'ModernOOP\\StudiKasus\\PPH21\\PPH21Calculator' => __DIR__ . '/../..' . '/src/PPH21Calculator.php',
        'ModernOOP\\StudiKasus\\PPH21\\SecondRuleCalculator' => __DIR__ . '/../..' . '/src/SecondRuleCalculator.php',
        'ModernOOP\\StudiKasus\\PPH21\\ThirdRuleCalculator' => __DIR__ . '/../..' . '/src/ThirdRuleCalculator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65253c5f313e66225228524f18203728::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65253c5f313e66225228524f18203728::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65253c5f313e66225228524f18203728::$classMap;

        }, null, ClassLoader::class);
    }
}