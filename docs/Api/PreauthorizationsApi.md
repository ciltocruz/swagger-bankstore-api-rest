# Swagger\Client\PreauthorizationsApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPreauthorization**](PreauthorizationsApi.md#cancelpreauthorization) | **POST** /v1/payments/{order}/preauth/cancel | Cancel previous preauthorization
[**confirmPreauthorization**](PreauthorizationsApi.md#confirmpreauthorization) | **POST** /v1/payments/{order}/preauth/confirm | Confirm previous preauthorization
[**createPreauthoritation**](PreauthorizationsApi.md#createpreauthoritation) | **POST** /v1/payments/preauth | Create preauthorization
[**createPreauthorizationRtoken**](PreauthorizationsApi.md#createpreauthorizationrtoken) | **POST** /v1/payments/preauthrtoken | Creates a preauthorization by reference

# **cancelPreauthorization**
> \Swagger\Client\Model\InlineResponse20016 cancelPreauthorization($paycomet_api_token, $order, $body)

Cancel previous preauthorization

cancel_preauthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Preauthorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\PreauthCancelBody(); // \Swagger\Client\Model\PreauthCancelBody | 

try {
    $result = $apiInstance->cancelPreauthorization($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->cancelPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Preauthorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\PreauthCancelBody**](../Model/PreauthCancelBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmPreauthorization**
> \Swagger\Client\Model\InlineResponse20017 confirmPreauthorization($paycomet_api_token, $order, $body)

Confirm previous preauthorization

confirm_preauthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Preauthorization privilege required)
$order = "order_example"; // string | 
$body = new \Swagger\Client\Model\PreauthConfirmBody(); // \Swagger\Client\Model\PreauthConfirmBody | 

try {
    $result = $apiInstance->confirmPreauthorization($paycomet_api_token, $order, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->confirmPreauthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Preauthorization privilege required) |
 **order** | **string**|  |
 **body** | [**\Swagger\Client\Model\PreauthConfirmBody**](../Model/PreauthConfirmBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPreauthoritation**
> \Swagger\Client\Model\InlineResponse20012 createPreauthoritation($paycomet_api_token, $body)

Create preauthorization

create_preauthorization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Preauthorization privilege required)
$body = new \Swagger\Client\Model\PaymentsPreauthBody(); // \Swagger\Client\Model\PaymentsPreauthBody | 

try {
    $result = $apiInstance->createPreauthoritation($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->createPreauthoritation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Preauthorization privilege required) |
 **body** | [**\Swagger\Client\Model\PaymentsPreauthBody**](../Model/PaymentsPreauthBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPreauthorizationRtoken**
> \Swagger\Client\Model\InlineResponse20018 createPreauthorizationRtoken($body, $paycomet_api_token)

Creates a preauthorization by reference

Creates a preauthorization with reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PreauthorizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PaymentsPreauthrtokenBody(); // \Swagger\Client\Model\PaymentsPreauthrtokenBody | 
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)

try {
    $result = $apiInstance->createPreauthorizationRtoken($body, $paycomet_api_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreauthorizationsApi->createPreauthorizationRtoken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentsPreauthrtokenBody**](../Model/PaymentsPreauthrtokenBody.md)|  | [optional]
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

