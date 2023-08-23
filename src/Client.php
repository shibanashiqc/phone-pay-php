<?php

namespace Shibanashiqc\PhonePay;

class Client
{
    public static $baseUrl = 'https://api-preprod.phonepe.com/apis/pg-sandbox';
    protected static $merchantId = null;
    protected static $saltKey   = null;
    protected static $saltIndex  = null;
    protected static $reredirectUrl = null;
    protected static $callbackUrl = null;
    
        
    /**
     * __construct
     *
     * @param  mixed $merchantId
     * @param  mixed $saltKey
     * @param  mixed $saltIndex
     * @return void
     */
    public function __construct($merchantId, $saltKey, $saltIndex)
    {
        self::$merchantId = $merchantId;
        self::$saltKey = $saltKey;
        self::$saltIndex = $saltIndex;
    }
        
    /**
     * setBaseUrl
     *
     * @param  mixed $baseUrl
     * @return void
     */
    public function setBaseUrl($baseUrl)
    {
        self::$baseUrl = $baseUrl;
    }
        
    /**
     * getBaseUrl
     *
     * @return void
     */
    public function getBaseUrl()
    {
        return self::$baseUrl;
    }
        
    /**
     * setMerchantId
     *
     * @param  mixed $merchantId
     * @return void
     */
    public function setMerchantId($merchantId)
    {
        self::$merchantId = $merchantId;
    }
        
    /**
     * getMerchantId
     *
     * @return void
     */
    public function getMerchantId()
    {
        return self::$merchantId;
    }
        
    /**
     * setSaltKey
     *
     * @param  mixed $saltKey
     * @return void
     */
    public function setSaltKey($saltKey)
    {
        self::$saltKey = $saltKey;
    }
        
    /**
     * getSaltKey
     *
     * @return void
     */
    public function getSaltKey()
    {
        return self::$saltKey;
    }
    
    /**
     * setSaltIndex
     *
     * @param  mixed $saltIndex
     * @return void
     */
    
    public function setSaltIndex($saltIndex)
    {
        self::$saltIndex = $saltIndex;
    }
    
    /**
     * getSaltIndex
     *
     * @return void
     */
    
    public function getSaltIndex()
    {
        return self::$saltIndex;
    }
    
    public function setRedirectUrl($redirectUrl)
    {
        self::$reredirectUrl = $redirectUrl;
    }
    
    public function getRedirectUrl() : string
    {
        return self::$reredirectUrl;
    }
    
    public function setCallbackUrl($callbackUrl) : void
    {
        self::$callbackUrl = $callbackUrl;
    }
    
    public function getCallbackUrl() : string
    {
        return self::$callbackUrl;
    }
   
    public function generateSignature($data, $endpoint) : string
    {
        $saltKey = self::$saltKey;
        $saltIndex = self::$saltIndex;
        $string = $data.$endpoint.$saltKey;
        $sha256  = hash('sha256', $string);
        $finalXHeader = $sha256.'###'.$saltIndex;
        return $finalXHeader;
    }
    
}

