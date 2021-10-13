# Swagger\Client\SusbcriptionsApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](SusbcriptionsApi.md#createsubscription) | **POST** /v1/subscription | Create susbcription payment
[**editSubscription**](SusbcriptionsApi.md#editsubscription) | **POST** /v1/subscription/{order}/edit | Edit susbcription payment.
[**executeSubscription**](SusbcriptionsApi.md#executesubscription) | **POST** /v1/subscription/{order}/execute | Excute a susbcription payment.
[**removeSubscription**](SusbcriptionsApi.md#removesubscription) | **POST** /v1/subscription/{order}/remove | Remove susbcription payment. If the susbscription is not a card subscription only the idUser is need. TokenUser is just for card subscriptions.

# **createSubscription**
> \Swagger\Client\Model\InlineResponse20019 createSubscription($paycomet_api_token, $body)

Create susbcription payment

Create subscription, create subscription token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SusbcriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\V1SubscriptionBody(); // \Swagger\Client\Model\V1SubscriptionBody | 

try {
    $result = $apiInstance->createSubscription($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SusbcriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\V1SubscriptionBody**](../Model/V1SubscriptionBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editSubscription**
> \Swagger\Client\Model\InlineResponse20020 editSubscription($paycomet_api_token, $order, $body)

Edit susbcription payment.

Edit a subscription. The subscription is identified by the terminal, the payment method, the iduser and the original reference. The rest of the fields can be changed. Please note that changing an amount in a subscription may result in the bank rejecting the payment as the initial payment will not match the new one. To change the amount it is recommended to use the execute parameter. Even if the amount and currency are not changed they should be indicated with the original values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SusbcriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\OrderEditBody(); // \Swagger\Client\Model\OrderEditBody | 

try {
    $result = $apiInstance->editSubscription($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SusbcriptionsApi->editSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\OrderEditBody**](../Model/OrderEditBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeSubscription**
> \Swagger\Client\Model\InlineResponse20021 executeSubscription($paycomet_api_token, $order, $body)

Excute a susbcription payment.

This command excecutes a payment of the subscription. This payment does not affect the rest of the subscription payments. However, as it doesn´t belongs to the recurrency it may be denied if the amount is different or even just because of the date of execution as it is not the expected by the bank.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SusbcriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\OrderExecuteBody(); // \Swagger\Client\Model\OrderExecuteBody | 

try {
    $result = $apiInstance->executeSubscription($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SusbcriptionsApi->executeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\OrderExecuteBody**](../Model/OrderExecuteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSubscription**
> \Swagger\Client\Model\InlineResponse20022 removeSubscription($paycomet_api_token, $order, $body)

Remove susbcription payment. If the susbscription is not a card subscription only the idUser is need. TokenUser is just for card subscriptions.

Delete a subscription. The subscription is identified by the terminal, the payment method, the iduser and the original reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SusbcriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\OrderRemoveBody(); // \Swagger\Client\Model\OrderRemoveBody | 

try {
    $result = $apiInstance->removeSubscription($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SusbcriptionsApi->removeSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\OrderRemoveBody**](../Model/OrderRemoveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

