# Swagger\Client\HeartbeatApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**heartbeat**](HeartbeatApi.md#heartbeat) | **POST** /v1/heartbeat | Check the system

# **heartbeat**
> \Swagger\Client\Model\InlineResponse2007 heartbeat($body, $paycomet_api_token)

Check the system

Get heartbeat of API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HeartbeatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1HeartbeatBody(); // \Swagger\Client\Model\V1HeartbeatBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)

try {
    $result = $apiInstance->heartbeat($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeartbeatApi->heartbeat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1HeartbeatBody**](../Model/V1HeartbeatBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

