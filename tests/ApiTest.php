<?php

namespace Shibanashiqc\PhonePayPhp;

use PHPUnit\Framework\TestCase as PhpUnitTest;

class ApiTest extends PhpUnitTest
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetPaymentRequest()
    {
        $phonepay = new PhonePay('M2306160483229148147', 'b2d2c3e0-1f4d-4f9b-8b1a-5c4b3e1e1b1a', '1');
        $phonepay->client->setCallbackUrl('https://stage-server1.infis.in/api/phonepay/callback');
        $phonepay->client->setRedirectUrl('https://stage-server1.infis.in/api/phonepay/callback');
        $request = $phonepay->getPaymentRequest(1);
        $this->assertIsArray($request);
    }
    
    public function testPaymentRedirectUrl()
    {
        $phonepay = new PhonePay('M2306160483229148147', 'b2d2c3e0-1f4d-4f9b-8b1a-5c4b3e1e1b1a', '1');
        $phonepay->client->setCallbackUrl('https://stage-server1.infis.in/api/phonepay/callback');
        $phonepay->client->setRedirectUrl('https://stage-server1.infis.in/api/phonepay/callback');
        $request = $phonepay->getPaymentRequest(1);
        $redirect_url = $phonepay->getPaymentRedirectUrl($request);
        $this->assertIsString($redirect_url);
    }
    
    public function testCheckPaymentStatus()
    {
        $phonepay = new PhonePay('M2306160483229148147', 'b2d2c3e0-1f4d-4f9b-8b1a-5c4b3e1e1b1a', '1');
        $this->assertIsArray($phonepay->checkPaymentStatus('MERCHANTUAT', '1234567890'));
    }
    
    
    public function testRefund()
    {
        $phonepay = new PhonePay('M2306160483229148147', 'b2d2c3e0-1f4d-4f9b-8b1a-5c4b3e1e1b1a', '1');
        $this->assertIsArray($phonepay->refund(1, '1234567890', '1234567890'));
    }
    
}
