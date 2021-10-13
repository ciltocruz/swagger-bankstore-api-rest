# Swagger\Client\MarketplaceApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**splitTransfer**](MarketplaceApi.md#splittransfer) | **POST** /v1/marketplace/split-transfer | Make a transfer to other accounts on PAYCOMET
[**splitTransferReversal**](MarketplaceApi.md#splittransferreversal) | **POST** /v1/marketplace/split-transfer-reversal | Run a split transfer reversal based on a previous split transfer
[**transfer**](MarketplaceApi.md#transfer) | **POST** /v1/marketplace/transfer | Run a transfer
[**transferReversal**](MarketplaceApi.md#transferreversal) | **POST** /v1/marketplace/transfer-reversal | Make a transfer reversal based on a previous transfer

# **splitTransfer**
> \Swagger\Client\Model\InlineResponse20025 splitTransfer($paycomet_api_token, $body)

Make a transfer to other accounts on PAYCOMET

Make a deposit in a destination account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\MarketplaceSplittransferBody(); // \Swagger\Client\Model\MarketplaceSplittransferBody | 

try {
    $result = $apiInstance->splitTransfer($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->splitTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\MarketplaceSplittransferBody**](../Model/MarketplaceSplittransferBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **splitTransferReversal**
> \Swagger\Client\Model\InlineResponse20025 splitTransferReversal($paycomet_api_token, $body)

Run a split transfer reversal based on a previous split transfer

Make a split transfer reversal request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\MarketplaceSplittransferreversalBody(); // \Swagger\Client\Model\MarketplaceSplittransferreversalBody | 

try {
    $result = $apiInstance->splitTransferReversal($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->splitTransferReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\MarketplaceSplittransferreversalBody**](../Model/MarketplaceSplittransferreversalBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transfer**
> \Swagger\Client\Model\InlineResponse20026 transfer($paycomet_api_token, $body)

Run a transfer

Run a transfer in a destination account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\MarketplaceTransferBody(); // \Swagger\Client\Model\MarketplaceTransferBody | 

try {
    $result = $apiInstance->transfer($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\MarketplaceTransferBody**](../Model/MarketplaceTransferBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferReversal**
> \Swagger\Client\Model\InlineResponse20026 transferReversal($paycomet_api_token, $body)

Make a transfer reversal based on a previous transfer

Make a transfer reversal based on a previous transfer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Authorization privilege required)
$body = new \Swagger\Client\Model\MarketplaceTransferreversalBody(); // \Swagger\Client\Model\MarketplaceTransferreversalBody | 

try {
    $result = $apiInstance->transferReversal($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->transferReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Authorization privilege required) |
 **body** | [**\Swagger\Client\Model\MarketplaceTransferreversalBody**](../Model/MarketplaceTransferreversalBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

