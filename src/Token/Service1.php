<?php

namespace eskandari\IranKish\Token;

class Service1 extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'MakeToken' => 'eskandari\\IranKish\\Token\\MakeToken',
      'MakeTokenResponse' => 'eskandari\\IranKish\\Token\\MakeTokenResponse',
      'MakeSpecialToken' => 'eskandari\\IranKish\\Token\\MakeSpecialToken',
      'MakeSpecialTokenResponse' => 'eskandari\\IranKish\\Token\\MakeSpecialTokenResponse',
      'tokenResponse' => 'eskandari\\IranKish\\Token\\tokenResponse',
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
        $wsdl = 'https://ikc.shaparak.ir/TToken/Tokens.xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param MakeToken $parameters
     * @return MakeTokenResponse
     */
    public function MakeToken(MakeToken $parameters)
    {
      return $this->__soapCall('MakeToken', array($parameters));
    }

    /**
     * @param MakeSpecialToken $parameters
     * @return MakeSpecialTokenResponse
     */
    public function MakeSpecialToken(MakeSpecialToken $parameters)
    {
      return $this->__soapCall('MakeSpecialToken', array($parameters));
    }

}
