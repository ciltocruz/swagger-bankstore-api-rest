# Swagger\Client\DccApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dccPurchaseConfirm**](DccApi.md#dccpurchaseconfirm) | **POST** /v1/payments/dcc/{order}/confirm | Confirm previous DCC payment
[**dccPurchaseCreate**](DccApi.md#dccpurchasecreate) | **POST** /v1/payments/dcc | Create an DCC payment

# **dccPurchaseConfirm**
> \Swagger\Client\Model\InlineResponse20024 dccPurchaseConfirm($paycomet_api_token, $order, $body)

Confirm previous DCC payment

confirm_purchase_dcc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DccApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\OrderConfirmBody(); // \Swagger\Client\Model\OrderConfirmBody | 

try {
    $result = $apiInstance->dccPurchaseConfirm($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DccApi->dccPurchaseConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\OrderConfirmBody**](../Model/OrderConfirmBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dccPurchaseCreate**
> \Swagger\Client\Model\InlineResponse20023 dccPurchaseCreate($paycomet_api_token, $body)

Create an DCC payment

execute_purchase_dcc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DccApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\PaymentsDccBody(); // \Swagger\Client\Model\PaymentsDccBody | 

try {
    $result = $apiInstance->dccPurchaseCreate($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DccApi->dccPurchaseCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\PaymentsDccBody**](../Model/PaymentsDccBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

