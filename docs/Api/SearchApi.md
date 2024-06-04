# Swagger\Client\SearchApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listRegions**](SearchApi.md#listregions) | **GET** /v1/regions | Regions

# **listRegions**
> \Swagger\Client\Model\ListRegionsResponse listRegions()

Regions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listRegions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->listRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListRegionsResponse**](../Model/ListRegionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

