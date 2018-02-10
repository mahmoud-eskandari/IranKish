<?php

namespace eskandari\IranKish\Verify;

class getTransactionByIbanResponse
{

    /**
     * @var ArrayOftransactionModel $getTransactionByIbanResult
     */
    protected $getTransactionByIbanResult = null;

    /**
     * @param ArrayOftransactionModel $getTransactionByIbanResult
     */
    public function __construct($getTransactionByIbanResult)
    {
      $this->getTransactionByIbanResult = $getTransactionByIbanResult;
    }

    /**
     * @return ArrayOftransactionModel
     */
    public function getGetTransactionByIbanResult()
    {
      return $this->getTransactionByIbanResult;
    }

    /**
     * @param ArrayOftransactionModel $getTransactionByIbanResult
     * @return \eskandari\IranKish\Verify\getTransactionByIbanResponse
     */
    public function setGetTransactionByIbanResult($getTransactionByIbanResult)
    {
      $this->getTransactionByIbanResult = $getTransactionByIbanResult;
      return $this;
    }

}
