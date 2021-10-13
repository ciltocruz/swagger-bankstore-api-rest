# Swagger\Client\MiraklApi

All URIs are relative to *https://rest.paycomet.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**miraklInvoicesSearch**](MiraklApi.md#miraklinvoicessearch) | **POST** /v1/invoices | Search Mirakl invoices

# **miraklInvoicesSearch**
> \Swagger\Client\Model\InlineResponse2008 miraklInvoicesSearch($paycomet_api_token, $body)

Search Mirakl invoices

nirakl_invoice_search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiraklApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paycomet_api_token = "paycomet_api_token_example"; // string | PAYCOMET API key (Query privilege required)
$body = new \Swagger\Client\Model\V1InvoicesBody(); // \Swagger\Client\Model\V1InvoicesBody | 

try {
    $result = $apiInstance->miraklInvoicesSearch($paycomet_api_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiraklApi->miraklInvoicesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paycomet_api_token** | **string**| PAYCOMET API key (Query privilege required) |
 **body** | [**\Swagger\Client\Model\V1InvoicesBody**](../Model/V1InvoicesBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

