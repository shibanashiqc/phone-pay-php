<?php

use Shibanashiqc\PhonePayPhp\PhonePay;

require_once __DIR__ . '/../vendor/autoload.php';


$phone_pay = new phonePay('MERCHANTUAT', '34c6bffa-6338-4769-9a1c-2384f8818877', 1);
// $phone_pay->client->setAsDefaultBaseUrl(); // if you got production keys the enable this
$phone_pay->client->setCallbackUrl('https://site/phonepay/callback');
$phone_pay->client->setRedirectUrl('https://site/phonepay/callback');


$tranId = uniqid();
$request = $phone_pay->getPaymentRequest(1,  $tranId, uniqid(), '8590815865');
echo $tranId;
// echo json_encode($request);
$redirect_url = $phone_pay->getPaymentRedirectUrl($request);
echo $redirect_url; 




