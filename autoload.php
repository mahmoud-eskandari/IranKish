<?php


function autoload_bbfd5ec815594b4ba866d2c07f3fe8c6($class)
{
    $classes = array(
        'eskandari\IranKish\Verify\Verify' => __DIR__ .'/src/Verify/Verify.php',
        'eskandari\IranKish\Verify\KicccPaymentsVerification' => __DIR__ .'/src/Verify/KicccPaymentsVerification.php',
        'eskandari\IranKish\Verify\KicccPaymentsVerificationResponse' => __DIR__ .'/src/Verify/KicccPaymentsVerificationResponse.php',
        'eskandari\IranKish\Verify\getTransaction' => __DIR__ .'/src/Verify/getTransaction.php',
        'eskandari\IranKish\Verify\getTransactionResponse' => __DIR__ .'/src/Verify/getTransactionResponse.php',
        'eskandari\IranKish\Verify\getLimitedTransacction' => __DIR__ .'/src/Verify/getLimitedTransacction.php',
        'eskandari\IranKish\Verify\getLimitedTransacctionResponse' => __DIR__ .'/src/Verify/getLimitedTransacctionResponse.php',
        'eskandari\IranKish\Verify\getDailyTransaction' => __DIR__ .'/src/Verify/getDailyTransaction.php',
        'eskandari\IranKish\Verify\getDailyTransactionResponse' => __DIR__ .'/src/Verify/getDailyTransactionResponse.php',
        'eskandari\IranKish\Verify\getOfflineTransaction' => __DIR__ .'/src/Verify/getOfflineTransaction.php',
        'eskandari\IranKish\Verify\getOfflineTransactionResponse' => __DIR__ .'/src/Verify/getOfflineTransactionResponse.php',
        'eskandari\IranKish\Verify\getTransactionByIban' => __DIR__ .'/src/Verify/getTransactionByIban.php',
        'eskandari\IranKish\Verify\getTransactionByIbanResponse' => __DIR__ .'/src/Verify/getTransactionByIbanResponse.php',
        'eskandari\IranKish\Verify\GetCardsPerKey' => __DIR__ .'/src/Verify/GetCardsPerKey.php',
        'eskandari\IranKish\Verify\GetCardsPerKeyResponse' => __DIR__ .'/src/Verify/GetCardsPerKeyResponse.php',
        'eskandari\IranKish\Verify\transactionModel' => __DIR__ .'/src/Verify/transactionModel.php',
        'eskandari\IranKish\Verify\ArrayOftransactionModel' => __DIR__ .'/src/Verify/ArrayOftransactionModel.php',
        'eskandari\IranKish\Verify\ArrayOfCardModel' => __DIR__ .'/src/Verify/ArrayOfCardModel.php',
        'eskandari\IranKish\Verify\CardModel' => __DIR__ .'/src/Verify/CardModel.php',
        'eskandari\IranKish\Token\Service1' => __DIR__ .'/src/Token/Service1.php',
        'eskandari\IranKish\Token\MakeToken' => __DIR__ .'/src/Token/MakeToken.php',
        'eskandari\IranKish\Token\MakeTokenResponse' => __DIR__ .'/src/Token/MakeTokenResponse.php',
        'eskandari\IranKish\Token\MakeSpecialToken' => __DIR__ .'/src/Token/MakeSpecialToken.php',
        'eskandari\IranKish\Token\MakeSpecialTokenResponse' => __DIR__ .'/src/Token/MakeSpecialTokenResponse.php',
        'eskandari\IranKish\Token\tokenResponse' => __DIR__ .'/src/Token/tokenResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bbfd5ec815594b4ba866d2c07f3fe8c6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
