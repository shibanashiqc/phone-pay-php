<?php
namespace Shibanashiqc\PhonePayPhp;

class Request  {
    
    protected static $baseUrl = '';
    
    protected static $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
    ];
    
    
     /**
     * Adds an additional header to all API requests
     * @param string $key   Header key
     * @param string $value Header value
     * @return null
     */
    public static function addHeader($key, $value) 
    {
        self::$headers[$key] = $value;
    }
    
    /**
     * Removes a header from all API requests
     * @param  string $key Header key
     * @return null
     */
    
    public static function removeHeader($key) : void
    {
        unset(self::$headers[$key]);
    }
    
    /**
     * Returns all headers
     * @return array
     */
    
    public  static function getHeaders() : array
    {
        return self::$headers;
    }
        
    /**
     * request
     *
     * @param  mixed $endpoint
     * @param  mixed $body
     *
     */
    public  function request($endpoint, $body = [], $method = 'POST') 
    {
        $headers = self::getHeaders();
        try {
        $client = new \GuzzleHttp\Client();
        $requests = new \GuzzleHttp\Psr7\Request($method, Client::$baseUrl. $endpoint, $headers, json_encode($body));
        $res = $client->sendAsync($requests)->wait();
        $res = json_decode($res->getBody(), true);
        return $res;
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    
    
}