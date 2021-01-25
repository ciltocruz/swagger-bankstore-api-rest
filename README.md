# SwaggerClient-php
PAYCOMET API REST for customers.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.16
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://www.paycomet.com](https://www.paycomet.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/ciltocruz/swagger-bankstore-api-rest.git"
    }
  ],
  "require": {
    "ciltocruz/swagger-bankstore-api-rest": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: paycometApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('PAYCOMET-API-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('PAYCOMET-API-TOKEN', 'Bearer');

$apiInstance = new Swagger\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)

try {
    $result = $apiInstance->productBalance($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->productBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://rest.paycomet.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BalanceApi* | [**productBalance**](docs/Api/BalanceApi.md#productbalance) | **POST** /v1/balance | Get balance info
*CardsApi* | [**addUser**](docs/Api/CardsApi.md#adduser) | **POST** /v1/cards | Tokenizes a card. Either card number and CVC2 or jetToken are required. For you to send directly the card data you should be PCI certified or the accepting the requirement to submit quarterly SAQ-AEP and get ASV scans. For most users is strongly recommended getting the jetToken with JETIFRAME or using GET integration to register the cards instead of REST.
*CardsApi* | [**editUser**](docs/Api/CardsApi.md#edituser) | **POST** /v1/cards/edit | Changes the expiry date, cvc2 or both
*CardsApi* | [**infoUser**](docs/Api/CardsApi.md#infouser) | **POST** /v1/cards/info | Get card info
*CardsApi* | [**physicalAddCard**](docs/Api/CardsApi.md#physicaladdcard) | **POST** /v1/cards/physical | Tokenize a card by physical encrypted data
*CardsApi* | [**removeUser**](docs/Api/CardsApi.md#removeuser) | **POST** /v1/cards/delete | Removes a card
*DccApi* | [**dccPurchaseConfirm**](docs/Api/DccApi.md#dccpurchaseconfirm) | **POST** /v1/payments/dcc/{order}/confirm | Confirm previous DCC payment
*DccApi* | [**dccPurchaseCreate**](docs/Api/DccApi.md#dccpurchasecreate) | **POST** /v1/payments/dcc | Create an DCC payment
*ErrorApi* | [**infoError**](docs/Api/ErrorApi.md#infoerror) | **POST** /v1/errors | Gets an error description
*ExchangeApi* | [**exchange**](docs/Api/ExchangeApi.md#exchange) | **POST** /v1/exchange | Converts a certain amount from a currency to another.
*FormApi* | [**form**](docs/Api/FormApi.md#form) | **POST** /v1/form | Create form view for user capture
*HeartbeatApi* | [**heartbeat**](docs/Api/HeartbeatApi.md#heartbeat) | **POST** /v1/heartbeat | Check the system
*IVRApi* | [**checkSession**](docs/Api/IVRApi.md#checksession) | **POST** /v1/ivr/session-state | Checks an IVR session
*IVRApi* | [**getSession**](docs/Api/IVRApi.md#getsession) | **POST** /v1/ivr/get-session | Creates an IVR session
*IVRApi* | [**sessionCancel**](docs/Api/IVRApi.md#sessioncancel) | **POST** /v1/ivr/session-cancel | Cancel an IVR session
*IpApi* | [**getCountrybyIP**](docs/Api/IpApi.md#getcountrybyip) | **POST** /v1/ip | Retrieves country info by IP
*LaunchpadApi* | [**launchAuthorization**](docs/Api/LaunchpadApi.md#launchauthorization) | **POST** /v1/launchpad/authorization | Creates a payment link and sends it to customer
*LaunchpadApi* | [**launchPreauthorization**](docs/Api/LaunchpadApi.md#launchpreauthorization) | **POST** /v1/launchpad/preauthorization | Executes a preauthorization link and sends it to customer
*LaunchpadApi* | [**launchSubscription**](docs/Api/LaunchpadApi.md#launchsubscription) | **POST** /v1/launchpad/subscription | Creates a subscription link and sends it to customer
*MarketplaceApi* | [**splitTransfer**](docs/Api/MarketplaceApi.md#splittransfer) | **POST** /v1/marketplace/split-transfer | Make a transfer to other accounts on PAYCOMET
*MarketplaceApi* | [**splitTransferReversal**](docs/Api/MarketplaceApi.md#splittransferreversal) | **POST** /v1/marketplace/split-transfer-reversal | Run a split transfer reversal based on a previous split transfer
*MarketplaceApi* | [**transfer**](docs/Api/MarketplaceApi.md#transfer) | **POST** /v1/marketplace/transfer | Run a transfer
*MarketplaceApi* | [**transferReversal**](docs/Api/MarketplaceApi.md#transferreversal) | **POST** /v1/marketplace/transfer-reversal | Make a transfer reversal based on a previous transfer
*MethodsApi* | [**getUserPaymentMethods**](docs/Api/MethodsApi.md#getuserpaymentmethods) | **POST** /v1/methods | Retrieves product methods
*MiraklApi* | [**miraklInvoicesSearch**](docs/Api/MiraklApi.md#miraklinvoicessearch) | **POST** /v1/invoices | Search Mirakl invoices
*PaymentsApi* | [**executePurchase**](docs/Api/PaymentsApi.md#executepurchase) | **POST** /v1/payments | Executes a payment
*PaymentsApi* | [**executePurchaseRtoken**](docs/Api/PaymentsApi.md#executepurchasertoken) | **POST** /v1/payments/rtoken | Executes a payment by refence
*PaymentsApi* | [**operationInfo**](docs/Api/PaymentsApi.md#operationinfo) | **POST** /v1/payments/{order}/info | Get info of a order
*PaymentsApi* | [**operationSearch**](docs/Api/PaymentsApi.md#operationsearch) | **POST** /v1/payments/search | Search orders
*PreauthorizationsApi* | [**cancelPreauthorization**](docs/Api/PreauthorizationsApi.md#cancelpreauthorization) | **POST** /v1/payments/{order}/preauth/cancel | Cancel previous preauthorization
*PreauthorizationsApi* | [**confirmPreauthorization**](docs/Api/PreauthorizationsApi.md#confirmpreauthorization) | **POST** /v1/payments/{order}/preauth/confirm | Confirm previous preauthorization
*PreauthorizationsApi* | [**createPreauthoritation**](docs/Api/PreauthorizationsApi.md#createpreauthoritation) | **POST** /v1/payments/preauth | Create preauthorization
*RefundApi* | [**executeRefund**](docs/Api/RefundApi.md#executerefund) | **POST** /v1/payments/{order}/refund | Perform a refund
*SepaApi* | [**addDocument**](docs/Api/SepaApi.md#adddocument) | **POST** /v1/sepa/add-document | Adds a SEPA document
*SepaApi* | [**checkCustomer**](docs/Api/SepaApi.md#checkcustomer) | **POST** /v1/sepa/check-customer | Check a customers SEPA documentation
*SepaApi* | [**checkDocument**](docs/Api/SepaApi.md#checkdocument) | **POST** /v1/sepa/check-document | Check a SEPA document
*SepaApi* | [**sepaOperations**](docs/Api/SepaApi.md#sepaoperations) | **POST** /v1/sepa/operations | Send SEPA operations
*SusbcriptionsApi* | [**createSubscription**](docs/Api/SusbcriptionsApi.md#createsubscription) | **POST** /v1/subscription | Create susbcription payment
*SusbcriptionsApi* | [**editSubscription**](docs/Api/SusbcriptionsApi.md#editsubscription) | **POST** /v1/subscription/edit | Edit susbcription payment
*SusbcriptionsApi* | [**removeSubscription**](docs/Api/SusbcriptionsApi.md#removesubscription) | **POST** /v1/subscription/remove | Remove susbcription payment

## Documentation For Models

 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body11](docs/Model/Body11.md)
 - [Body12](docs/Model/Body12.md)
 - [Body13](docs/Model/Body13.md)
 - [Body14](docs/Model/Body14.md)
 - [Body15](docs/Model/Body15.md)
 - [Body16](docs/Model/Body16.md)
 - [Body17](docs/Model/Body17.md)
 - [Body18](docs/Model/Body18.md)
 - [Body19](docs/Model/Body19.md)
 - [Body2](docs/Model/Body2.md)
 - [Body20](docs/Model/Body20.md)
 - [Body21](docs/Model/Body21.md)
 - [Body22](docs/Model/Body22.md)
 - [Body23](docs/Model/Body23.md)
 - [Body24](docs/Model/Body24.md)
 - [Body25](docs/Model/Body25.md)
 - [Body26](docs/Model/Body26.md)
 - [Body27](docs/Model/Body27.md)
 - [Body28](docs/Model/Body28.md)
 - [Body29](docs/Model/Body29.md)
 - [Body3](docs/Model/Body3.md)
 - [Body30](docs/Model/Body30.md)
 - [Body31](docs/Model/Body31.md)
 - [Body32](docs/Model/Body32.md)
 - [Body33](docs/Model/Body33.md)
 - [Body34](docs/Model/Body34.md)
 - [Body35](docs/Model/Body35.md)
 - [Body36](docs/Model/Body36.md)
 - [Body37](docs/Model/Body37.md)
 - [Body38](docs/Model/Body38.md)
 - [Body39](docs/Model/Body39.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [Body7](docs/Model/Body7.md)
 - [Body8](docs/Model/Body8.md)
 - [Body9](docs/Model/Body9.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Payment](docs/Model/InlineResponse20014Payment.md)
 - [InlineResponse20014PaymentHistory](docs/Model/InlineResponse20014PaymentHistory.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20015Payment](docs/Model/InlineResponse20015Payment.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse20019Subscription](docs/Model/InlineResponse20019Subscription.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20022Dcc](docs/Model/InlineResponse20022Dcc.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20024Submerchant](docs/Model/InlineResponse20024Submerchant.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20025Submerchant](docs/Model/InlineResponse20025Submerchant.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20028Operations](docs/Model/InlineResponse20028Operations.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Invoices](docs/Model/InlineResponse2008Invoices.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse422](docs/Model/InlineResponse422.md)
 - [InlineResponse4221](docs/Model/InlineResponse4221.md)
 - [InlineResponse4222](docs/Model/InlineResponse4222.md)
 - [InlineResponse4222Error](docs/Model/InlineResponse4222Error.md)
 - [InlineResponse4223](docs/Model/InlineResponse4223.md)
 - [InlineResponse4223Error](docs/Model/InlineResponse4223Error.md)
 - [InlineResponse4224](docs/Model/InlineResponse4224.md)
 - [InlineResponse4224Error](docs/Model/InlineResponse4224Error.md)
 - [InlineResponse4225](docs/Model/InlineResponse4225.md)
 - [InlineResponse4225Error](docs/Model/InlineResponse4225Error.md)
 - [InlineResponse4226](docs/Model/InlineResponse4226.md)
 - [InlineResponse4226Error](docs/Model/InlineResponse4226Error.md)
 - [InlineResponse422Error](docs/Model/InlineResponse422Error.md)
 - [V1formPayment](docs/Model/V1formPayment.md)
 - [V1formPaymentEscrowTargets](docs/Model/V1formPaymentEscrowTargets.md)
 - [V1formPaymentMerchantData](docs/Model/V1formPaymentMerchantData.md)
 - [V1formPaymentMerchantDataAcctInfo](docs/Model/V1formPaymentMerchantDataAcctInfo.md)
 - [V1formPaymentMerchantDataBilling](docs/Model/V1formPaymentMerchantDataBilling.md)
 - [V1formPaymentMerchantDataCustomer](docs/Model/V1formPaymentMerchantDataCustomer.md)
 - [V1formPaymentMerchantDataCustomerHomePhone](docs/Model/V1formPaymentMerchantDataCustomerHomePhone.md)
 - [V1formPaymentMerchantDataCustomerMobilePhone](docs/Model/V1formPaymentMerchantDataCustomerMobilePhone.md)
 - [V1formPaymentMerchantDataCustomerWorkPhone](docs/Model/V1formPaymentMerchantDataCustomerWorkPhone.md)
 - [V1formPaymentMerchantDataMerchantRiskIndicator](docs/Model/V1formPaymentMerchantDataMerchantRiskIndicator.md)
 - [V1formPaymentMerchantDataShipping](docs/Model/V1formPaymentMerchantDataShipping.md)
 - [V1formPaymentMerchantDataShoppingCart](docs/Model/V1formPaymentMerchantDataShoppingCart.md)
 - [V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo](docs/Model/V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo.md)
 - [V1formSubscription](docs/Model/V1formSubscription.md)
 - [V1invoicesPayment](docs/Model/V1invoicesPayment.md)
 - [V1launchpadauthorizationMerchantData](docs/Model/V1launchpadauthorizationMerchantData.md)
 - [V1launchpadauthorizationMerchantDataCustomer](docs/Model/V1launchpadauthorizationMerchantDataCustomer.md)
 - [V1launchpadsubscriptionMerchantData](docs/Model/V1launchpadsubscriptionMerchantData.md)
 - [V1launchpadsubscriptionMerchantDataShipping](docs/Model/V1launchpadsubscriptionMerchantDataShipping.md)
 - [V1marketplacesplittransferPayment](docs/Model/V1marketplacesplittransferPayment.md)
 - [V1marketplacesplittransferSubmerchant](docs/Model/V1marketplacesplittransferSubmerchant.md)
 - [V1marketplacesplittransferreversalPayment](docs/Model/V1marketplacesplittransferreversalPayment.md)
 - [V1marketplacesplittransferreversalSubmerchant](docs/Model/V1marketplacesplittransferreversalSubmerchant.md)
 - [V1marketplacetransferPayment](docs/Model/V1marketplacetransferPayment.md)
 - [V1marketplacetransferreversalSubmerchant](docs/Model/V1marketplacetransferreversalSubmerchant.md)
 - [V1paymentsPayment](docs/Model/V1paymentsPayment.md)
 - [V1paymentsdccPayment](docs/Model/V1paymentsdccPayment.md)
 - [V1paymentsdccorderconfirmDcc](docs/Model/V1paymentsdccorderconfirmDcc.md)
 - [V1paymentsorderinfoPayment](docs/Model/V1paymentsorderinfoPayment.md)
 - [V1paymentsorderpreauthcancelPayment](docs/Model/V1paymentsorderpreauthcancelPayment.md)
 - [V1paymentsorderpreauthconfirmPayment](docs/Model/V1paymentsorderpreauthconfirmPayment.md)
 - [V1paymentsorderrefundPayment](docs/Model/V1paymentsorderrefundPayment.md)
 - [V1paymentspreauthPayment](docs/Model/V1paymentspreauthPayment.md)
 - [V1paymentsrtokenPayment](docs/Model/V1paymentsrtokenPayment.md)
 - [V1sepaoperationsOperations](docs/Model/V1sepaoperationsOperations.md)
 - [V1subscriptionPayment](docs/Model/V1subscriptionPayment.md)
 - [V1subscriptionSubscription](docs/Model/V1subscriptionSubscription.md)
 - [V1subscriptioneditPayment](docs/Model/V1subscriptioneditPayment.md)

## Documentation For Authorization


## paycometApiKey

- **Type**: API key
- **API key parameter name**: PAYCOMET-API-TOKEN
- **Location**: HTTP header


## Author

tecnico@paycomet.com

