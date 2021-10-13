# Swagger\Client\ExchangeApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exchange**](ExchangeApi.md#exchange) | **POST** /v1/exchange | Converts a certain amount from a currency to another.

# **exchange**
> \Swagger\Client\Model\InlineResponse2006 exchange($body, $paycomet_api_token)

Converts a certain amount from a currency to another.

Gets the exchange of an amount.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExchangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1ExchangeBody(); // \Swagger\Client\Model\V1ExchangeBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)

try {
    $result = $apiInstance->exchange($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeApi->exchange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1ExchangeBody**](../Model/V1ExchangeBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

