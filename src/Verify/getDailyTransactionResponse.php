<?php

namespace eskandari\IranKish\Verify;

class getDailyTransactionResponse
{

    /**
     * @var ArrayOftransactionModel $getDailyTransactionResult
     */
    protected $getDailyTransactionResult = null;

    /**
     * @param ArrayOftransactionModel $getDailyTransactionResult
     */
    public function __construct($getDailyTransactionResult)
    {
      $this->getDailyTransactionResult = $getDailyTransactionResult;
    }

    /**
     * @return ArrayOftransactionModel
     */
    public function getGetDailyTransactionResult()
    {
      return $this->getDailyTransactionResult;
    }

    /**
     * @param ArrayOftransactionModel $getDailyTransactionResult
     * @return \eskandari\IranKish\Verify\getDailyTransactionResponse
     */
    public function setGetDailyTransactionResult($getDailyTransactionResult)
    {
      $this->getDailyTransactionResult = $getDailyTransactionResult;
      return $this;
    }

}
