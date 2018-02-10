<?php

namespace eskandari\IranKish\Verify;

class getLimitedTransacctionResponse
{

    /**
     * @var transactionModel $getLimitedTransacctionResult
     */
    protected $getLimitedTransacctionResult = null;

    /**
     * @param transactionModel $getLimitedTransacctionResult
     */
    public function __construct($getLimitedTransacctionResult)
    {
      $this->getLimitedTransacctionResult = $getLimitedTransacctionResult;
    }

    /**
     * @return transactionModel
     */
    public function getGetLimitedTransacctionResult()
    {
      return $this->getLimitedTransacctionResult;
    }

    /**
     * @param transactionModel $getLimitedTransacctionResult
     * @return \eskandari\IranKish\Verify\getLimitedTransacctionResponse
     */
    public function setGetLimitedTransacctionResult($getLimitedTransacctionResult)
    {
      $this->getLimitedTransacctionResult = $getLimitedTransacctionResult;
      return $this;
    }

}
