<?php 

use Shibanashiqc\PhonePayPhp\PhonePay;

require_once __DIR__ . '/../vendor/autoload.php';

$phone_pay = new phonePay('MERCHANTUAT', '34c6bffa-6338-4769-9a1c-2384f8818877', 1);
// $phone_pay->client->setAsDefaultBaseUrl(); // if you got production keys the  use this 
echo json_encode($phone_pay->checkPaymentStatus('MERCHANTUAT', '64facc1890467'));

