# phone-pay-php

# Laravel Sample Repo: [Click Here](https://github.com/shibanashiqc/phone-pay-test)

Unofficial PHP library for [PhonePe](https://developer.phonepe.com/v1/docs/api-integration).

Read up here for getting started and understanding the payment flow with PhonePe: <https://developer.phonepe.com/v1/docs/api-integration>

### Prerequisites
- A minimum of PHP 8.1 is required.


## Installation

-   If your project using composer, run the below command

```
composer require shibanashiqc/phone-pay-php
```

- If you are not using composer, download the latest release from [the releases section](https://github.com/shibanashiqc/phone-pay-php/releases).
    **You should download the `phone-pay-php.zip` file**.
    After that, include `Phonepay.php` in your application and you can use the API as usual.

##Note:
This PHP library follows the following practices:

- Namespaced under `Shibanashiqc\PhonePayPhp\`
- API throws exceptions instead of returning errors
- Options are passed as an array instead of multiple arguments wherever possible
- All requests and responses are communicated over JSON

## Documentation

Documentation of PhonePe's API and their usage is available at <https://developer.phonepe.com/v1/docs/api-integration>

## Basic Usage

Merchant credentials can be obtained from the PhonePay Developer Dashboard. You can use the following credentials for testing:

Required parameters for the constructor are:
Merchant ID, Merchant Salt Key, Environment

```php
use Shibanashiqc\PhonePayPhp\PhonePay;

$phone_pay = new PhonePay('MERCHAN', 'saltKey-0000', 1);
// $phone_pay->client->setAsDefaultBaseUrl(); // if you got production keys the enable this
$phone_pay->client->setCallbackUrl('https://site/phonepay/callback');
$phone_pay->client->setRedirectUrl('https://site/phonepay/callback');
```

### Create a Payment

getPaymentRequest() on this function first parameter is amount, second parameter is merchant transaction id, third parameter is user unique id, fourth parameter is user mobile number
only required parameter is amount other parameter is optional


```php
$request = $phone_pay->getPaymentRequest(1, '1234567890', '1234567890', '9999999999');
$redirect_url = $phone_pay->getPaymentRedirectUrl($request);
echo $redirect_url; 

```

redirect url to redirect your user to phonepay payment page complete the payment after payment complete phonepay will redirect to your callback url with payment details 


## License

The PhonePay PHP SDK is released under the MIT License. See [LICENSE](LICENSE) file for more details.
