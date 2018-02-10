<?php


 function autoload_bbfd5ec815594b4ba866d2c07f3fe8c6($class)
{
    $classes = array(
        'eskandari\IranKish\Token\Service1' => __DIR__ .'/Service1.php',
        'eskandari\IranKish\Token\MakeToken' => __DIR__ .'/MakeToken.php',
        'eskandari\IranKish\Token\MakeTokenResponse' => __DIR__ .'/MakeTokenResponse.php',
        'eskandari\IranKish\Token\MakeSpecialToken' => __DIR__ .'/MakeSpecialToken.php',
        'eskandari\IranKish\Token\MakeSpecialTokenResponse' => __DIR__ .'/MakeSpecialTokenResponse.php',
        'eskandari\IranKish\Token\tokenResponse' => __DIR__ .'/tokenResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bbfd5ec815594b4ba866d2c07f3fe8c6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
