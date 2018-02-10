<?php


 function autoload_4ca3ef655bdff85eac2f76a24fc31883($class)
{
    $classes = array(
        'eskandari\IranKish\Verify\Verify' => __DIR__ .'/Verify.php',
        'eskandari\IranKish\Verify\KicccPaymentsVerification' => __DIR__ .'/KicccPaymentsVerification.php',
        'eskandari\IranKish\Verify\KicccPaymentsVerificationResponse' => __DIR__ .'/KicccPaymentsVerificationResponse.php',
        'eskandari\IranKish\Verify\getTransaction' => __DIR__ .'/getTransaction.php',
        'eskandari\IranKish\Verify\getTransactionResponse' => __DIR__ .'/getTransactionResponse.php',
        'eskandari\IranKish\Verify\getLimitedTransacction' => __DIR__ .'/getLimitedTransacction.php',
        'eskandari\IranKish\Verify\getLimitedTransacctionResponse' => __DIR__ .'/getLimitedTransacctionResponse.php',
        'eskandari\IranKish\Verify\getDailyTransaction' => __DIR__ .'/getDailyTransaction.php',
        'eskandari\IranKish\Verify\getDailyTransactionResponse' => __DIR__ .'/getDailyTransactionResponse.php',
        'eskandari\IranKish\Verify\getOfflineTransaction' => __DIR__ .'/getOfflineTransaction.php',
        'eskandari\IranKish\Verify\getOfflineTransactionResponse' => __DIR__ .'/getOfflineTransactionResponse.php',
        'eskandari\IranKish\Verify\getTransactionByIban' => __DIR__ .'/getTransactionByIban.php',
        'eskandari\IranKish\Verify\getTransactionByIbanResponse' => __DIR__ .'/getTransactionByIbanResponse.php',
        'eskandari\IranKish\Verify\GetCardsPerKey' => __DIR__ .'/GetCardsPerKey.php',
        'eskandari\IranKish\Verify\GetCardsPerKeyResponse' => __DIR__ .'/GetCardsPerKeyResponse.php',
        'eskandari\IranKish\Verify\transactionModel' => __DIR__ .'/transactionModel.php',
        'eskandari\IranKish\Verify\ArrayOftransactionModel' => __DIR__ .'/ArrayOftransactionModel.php',
        'eskandari\IranKish\Verify\ArrayOfCardModel' => __DIR__ .'/ArrayOfCardModel.php',
        'eskandari\IranKish\Verify\CardModel' => __DIR__ .'/CardModel.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_4ca3ef655bdff85eac2f76a24fc31883');

// Do nothing. The rest is just leftovers from the code generation.
{
}
