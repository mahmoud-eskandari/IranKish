<?php

namespace eskandari\IranKish\Verify;

class Verify extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'KicccPaymentsVerification' => 'eskandari\\IranKish\\Verify\\KicccPaymentsVerification',
      'KicccPaymentsVerificationResponse' => 'eskandari\\IranKish\\Verify\\KicccPaymentsVerificationResponse',
      'getTransaction' => 'eskandari\\IranKish\\Verify\\getTransaction',
      'getTransactionResponse' => 'eskandari\\IranKish\\Verify\\getTransactionResponse',
      'getLimitedTransacction' => 'eskandari\\IranKish\\Verify\\getLimitedTransacction',
      'getLimitedTransacctionResponse' => 'eskandari\\IranKish\\Verify\\getLimitedTransacctionResponse',
      'getDailyTransaction' => 'eskandari\\IranKish\\Verify\\getDailyTransaction',
      'getDailyTransactionResponse' => 'eskandari\\IranKish\\Verify\\getDailyTransactionResponse',
      'getOfflineTransaction' => 'eskandari\\IranKish\\Verify\\getOfflineTransaction',
      'getOfflineTransactionResponse' => 'eskandari\\IranKish\\Verify\\getOfflineTransactionResponse',
      'getTransactionByIban' => 'eskandari\\IranKish\\Verify\\getTransactionByIban',
      'getTransactionByIbanResponse' => 'eskandari\\IranKish\\Verify\\getTransactionByIbanResponse',
      'GetCardsPerKey' => 'eskandari\\IranKish\\Verify\\GetCardsPerKey',
      'GetCardsPerKeyResponse' => 'eskandari\\IranKish\\Verify\\GetCardsPerKeyResponse',
      'transactionModel' => 'eskandari\\IranKish\\Verify\\transactionModel',
      'ArrayOftransactionModel' => 'eskandari\\IranKish\\Verify\\ArrayOftransactionModel',
      'ArrayOfCardModel' => 'eskandari\\IranKish\\Verify\\ArrayOfCardModel',
      'CardModel' => 'eskandari\\IranKish\\Verify\\CardModel',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://ikc.shaparak.ir/XVerify/Verify.xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param KicccPaymentsVerification $parameters
     * @return KicccPaymentsVerificationResponse
     */
    public function KicccPaymentsVerification(KicccPaymentsVerification $parameters)
    {
      return $this->__soapCall('KicccPaymentsVerification', array($parameters));
    }

    /**
     * @param getTransaction $parameters
     * @return getTransactionResponse
     */
    public function getTransaction(getTransaction $parameters)
    {
      return $this->__soapCall('getTransaction', array($parameters));
    }

    /**
     * @param getLimitedTransacction $parameters
     * @return getLimitedTransacctionResponse
     */
    public function getLimitedTransacction(getLimitedTransacction $parameters)
    {
      return $this->__soapCall('getLimitedTransacction', array($parameters));
    }

    /**
     * @param getDailyTransaction $parameters
     * @return getDailyTransactionResponse
     */
    public function getDailyTransaction(getDailyTransaction $parameters)
    {
      return $this->__soapCall('getDailyTransaction', array($parameters));
    }

    /**
     * @param getOfflineTransaction $parameters
     * @return getOfflineTransactionResponse
     */
    public function getOfflineTransaction(getOfflineTransaction $parameters)
    {
      return $this->__soapCall('getOfflineTransaction', array($parameters));
    }

    /**
     * @param getTransactionByIban $parameters
     * @return getTransactionByIbanResponse
     */
    public function getTransactionByIban(getTransactionByIban $parameters)
    {
      return $this->__soapCall('getTransactionByIban', array($parameters));
    }

    /**
     * @param GetCardsPerKey $parameters
     * @return GetCardsPerKeyResponse
     */
    public function GetCardsPerKey(GetCardsPerKey $parameters)
    {
      return $this->__soapCall('GetCardsPerKey', array($parameters));
    }

}
