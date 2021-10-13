# Swagger\Client\SepaApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](SepaApi.md#adddocument) | **POST** /v1/sepa/add-document | Adds a SEPA document
[**checkCustomer**](SepaApi.md#checkcustomer) | **POST** /v1/sepa/check-customer | Check a customers SEPA documentation
[**checkDocument**](SepaApi.md#checkdocument) | **POST** /v1/sepa/check-document | Check a SEPA document
[**sepaOperations**](SepaApi.md#sepaoperations) | **POST** /v1/sepa/operations | Send SEPA operations

# **addDocument**
> \Swagger\Client\Model\InlineResponse20027 addDocument($paycomet_api_token, $body)

Adds a SEPA document

add_document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\SepaAdddocumentBody(); // \Swagger\Client\Model\SepaAdddocumentBody | 

try {
    $result = $apiInstance->addDocument($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\SepaAdddocumentBody**](../Model/SepaAdddocumentBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkCustomer**
> \Swagger\Client\Model\InlineResponse20028 checkCustomer($paycomet_api_token, $body)

Check a customers SEPA documentation

check_customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\SepaCheckcustomerBody(); // \Swagger\Client\Model\SepaCheckcustomerBody | 

try {
    $result = $apiInstance->checkCustomer($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->checkCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\SepaCheckcustomerBody**](../Model/SepaCheckcustomerBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDocument**
> \Swagger\Client\Model\InlineResponse20027 checkDocument($paycomet_api_token, $body)

Check a SEPA document

check_document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\SepaCheckdocumentBody(); // \Swagger\Client\Model\SepaCheckdocumentBody | 

try {
    $result = $apiInstance->checkDocument($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->checkDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\SepaCheckdocumentBody**](../Model/SepaCheckdocumentBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sepaOperations**
> \Swagger\Client\Model\InlineResponse20029 sepaOperations($paycomet_api_token, $body)

Send SEPA operations

sepa_operations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SepaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\SepaOperationsBody(); // \Swagger\Client\Model\SepaOperationsBody | 

try {
    $result = $apiInstance->sepaOperations($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaApi->sepaOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\SepaOperationsBody**](../Model/SepaOperationsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

