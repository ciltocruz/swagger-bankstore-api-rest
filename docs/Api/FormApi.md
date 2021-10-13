# Swagger\Client\FormApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**form**](FormApi.md#form) | **POST** /v1/form | Create form view for user capture

# **form**
> \Swagger\Client\Model\InlineResponse20011 form($body, $paycomet_api_token)

Create form view for user capture

Create form for user capture. Set operationType and attach the default request, PAYCOMET will generate a URL for user data capture.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1FormBody(); // \Swagger\Client\Model\V1FormBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required, token actions privilege required in case of tokenization)

try {
    $result = $apiInstance->form($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->form: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1FormBody**](../Model/V1FormBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required, token actions privilege required in case of tokenization) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

