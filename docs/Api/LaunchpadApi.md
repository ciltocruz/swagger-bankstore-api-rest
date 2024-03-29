# Swagger\Client\LaunchpadApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**launchAuthorization**](LaunchpadApi.md#launchauthorization) | **POST** /v1/launchpad/authorization | Creates a payment link and sends it to customer
[**launchPreauthorization**](LaunchpadApi.md#launchpreauthorization) | **POST** /v1/launchpad/preauthorization | Executes a preauthorization link and sends it to customer
[**launchSubscription**](LaunchpadApi.md#launchsubscription) | **POST** /v1/launchpad/subscription | Creates a subscription link and sends it to customer

# **launchAuthorization**
> \Swagger\Client\Model\InlineResponse20022 launchAuthorization($body, $paycomet_api_token)

Creates a payment link and sends it to customer

Generate a authorization link. It will send a challenge URL to the client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchpadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LaunchpadAuthorizationBody(); // \Swagger\Client\Model\LaunchpadAuthorizationBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)

try {
    $result = $apiInstance->launchAuthorization($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchpadApi->launchAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LaunchpadAuthorizationBody**](../Model/LaunchpadAuthorizationBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchPreauthorization**
> \Swagger\Client\Model\InlineResponse20022 launchPreauthorization($body, $paycomet_api_token)

Executes a preauthorization link and sends it to customer

Generate a preauthorization link. It will send a challenge URL to the client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchpadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LaunchpadPreauthorizationBody(); // \Swagger\Client\Model\LaunchpadPreauthorizationBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)

try {
    $result = $apiInstance->launchPreauthorization($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchpadApi->launchPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LaunchpadPreauthorizationBody**](../Model/LaunchpadPreauthorizationBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchSubscription**
> \Swagger\Client\Model\InlineResponse20022 launchSubscription($body, $paycomet_api_token)

Creates a subscription link and sends it to customer

Generate a subscription link. It will send a challenge URL to the client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchpadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LaunchpadSubscriptionBody(); // \Swagger\Client\Model\LaunchpadSubscriptionBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)

try {
    $result = $apiInstance->launchSubscription($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchpadApi->launchSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LaunchpadSubscriptionBody**](../Model/LaunchpadSubscriptionBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

