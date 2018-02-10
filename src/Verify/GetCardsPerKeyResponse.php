<?php

namespace eskandari\IranKish\Verify;

class GetCardsPerKeyResponse
{

    /**
     * @var ArrayOfCardModel $GetCardsPerKeyResult
     */
    protected $GetCardsPerKeyResult = null;

    /**
     * @param ArrayOfCardModel $GetCardsPerKeyResult
     */
    public function __construct($GetCardsPerKeyResult)
    {
      $this->GetCardsPerKeyResult = $GetCardsPerKeyResult;
    }

    /**
     * @return ArrayOfCardModel
     */
    public function getGetCardsPerKeyResult()
    {
      return $this->GetCardsPerKeyResult;
    }

    /**
     * @param ArrayOfCardModel $GetCardsPerKeyResult
     * @return \eskandari\IranKish\Verify\GetCardsPerKeyResponse
     */
    public function setGetCardsPerKeyResult($GetCardsPerKeyResult)
    {
      $this->GetCardsPerKeyResult = $GetCardsPerKeyResult;
      return $this;
    }

}
