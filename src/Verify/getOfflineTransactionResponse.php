<?php

namespace eskandari\IranKish\Verify;

class getOfflineTransactionResponse
{

    /**
     * @var ArrayOftransactionModel $getOfflineTransactionResult
     */
    protected $getOfflineTransactionResult = null;

    /**
     * @param ArrayOftransactionModel $getOfflineTransactionResult
     */
    public function __construct($getOfflineTransactionResult)
    {
      $this->getOfflineTransactionResult = $getOfflineTransactionResult;
    }

    /**
     * @return ArrayOftransactionModel
     */
    public function getGetOfflineTransactionResult()
    {
      return $this->getOfflineTransactionResult;
    }

    /**
     * @param ArrayOftransactionModel $getOfflineTransactionResult
     * @return \eskandari\IranKish\Verify\getOfflineTransactionResponse
     */
    public function setGetOfflineTransactionResult($getOfflineTransactionResult)
    {
      $this->getOfflineTransactionResult = $getOfflineTransactionResult;
      return $this;
    }

}
