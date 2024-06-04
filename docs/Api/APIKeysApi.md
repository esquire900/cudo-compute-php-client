# Swagger\Client\APIKeysApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiKey**](APIKeysApi.md#deleteapikey) | **DELETE** /v1/api-keys/{name} | Delete
[**generateApiKey**](APIKeysApi.md#generateapikey) | **POST** /v1/api-keys | Generate
[**listApiKeys**](APIKeysApi.md#listapikeys) | **GET** /v1/api-keys | List

# **deleteApiKey**
> object deleteApiKey($name)

Delete

Deletes an API key, revoking all access for requests that use the key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $result = $apiInstance->deleteApiKey($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateApiKey**
> \Swagger\Client\Model\ApiKey generateApiKey($body)

Generate

Creates a new API key for the requesting user. The API key is returned in the response, and this is the only time it can be viewed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GenerateApiKeyRequest(); // \Swagger\Client\Model\GenerateApiKeyRequest | 

try {
    $result = $apiInstance->generateApiKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->generateApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\GenerateApiKeyRequest**](../Model/GenerateApiKeyRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApiKeys**
> \Swagger\Client\Model\ListApiKeysResponse listApiKeys($page_number, $page_size)

List

List the details of all API keys created by the requesting user. This does not include the API key itself which is only visible once when the API key is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listApiKeys($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListApiKeysResponse**](../Model/ListApiKeysResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

