# Swagger\Client\MethodsApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserPaymentMethods**](MethodsApi.md#getuserpaymentmethods) | **POST** /v1/methods | Retrieves product methods

# **getUserPaymentMethods**
> \Swagger\Client\Model\InlineResponse20010[] getUserPaymentMethods($body, $paycomet_api_token)

Retrieves product methods

Payment methods of the client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1MethodsBody(); // \Swagger\Client\Model\V1MethodsBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)

try {
    $result = $apiInstance->getUserPaymentMethods($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MethodsApi->getUserPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1MethodsBody**](../Model/V1MethodsBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

