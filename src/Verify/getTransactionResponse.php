<?php

namespace eskandari\IranKish\Verify;

class getTransactionResponse
{

    /**
     * @var transactionModel $getTransactionResult
     */
    protected $getTransactionResult = null;

    /**
     * @param transactionModel $getTransactionResult
     */
    public function __construct($getTransactionResult)
    {
      $this->getTransactionResult = $getTransactionResult;
    }

    /**
     * @return transactionModel
     */
    public function getGetTransactionResult()
    {
      return $this->getTransactionResult;
    }

    /**
     * @param transactionModel $getTransactionResult
     * @return \eskandari\IranKish\Verify\getTransactionResponse
     */
    public function setGetTransactionResult($getTransactionResult)
    {
      $this->getTransactionResult = $getTransactionResult;
      return $this;
    }

}
