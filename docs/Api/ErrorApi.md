# Swagger\Client\ErrorApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoError**](ErrorApi.md#infoerror) | **POST** /v1/errors | Gets an error description

# **infoError**
> \Swagger\Client\Model\InlineResponse200 infoError($body, $paycomet_api_token)

Gets an error description

info_error

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1ErrorsBody(); // \Swagger\Client\Model\V1ErrorsBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)

try {
    $result = $apiInstance->infoError($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorApi->infoError: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1ErrorsBody**](../Model/V1ErrorsBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

