# Swagger\Client\SSHKeysApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSshKey**](SSHKeysApi.md#createsshkey) | **POST** /v1/ssh-keys | Create
[**deleteSshKey**](SSHKeysApi.md#deletesshkey) | **DELETE** /v1/ssh-keys/{id} | Delete
[**getSshKey**](SSHKeysApi.md#getsshkey) | **GET** /v1/ssh-keys/{id} | Get
[**listSshKeys**](SSHKeysApi.md#listsshkeys) | **GET** /v1/ssh-keys | List

# **createSshKey**
> \Swagger\Client\Model\SshKey createSshKey($body)

Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SSHKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SshKey(); // \Swagger\Client\Model\SshKey | 

try {
    $result = $apiInstance->createSshKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHKeysApi->createSshKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SshKey**](../Model/SshKey.md)|  |

### Return type

[**\Swagger\Client\Model\SshKey**](../Model/SshKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSshKey**
> object deleteSshKey($id)

Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SSHKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteSshKey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHKeysApi->deleteSshKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSshKey**
> \Swagger\Client\Model\SshKey getSshKey($id)

Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SSHKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSshKey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHKeysApi->getSshKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SshKey**](../Model/SshKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSshKeys**
> \Swagger\Client\Model\ListSshKeysResponse listSshKeys($page_number, $page_size)

List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SSHKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listSshKeys($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHKeysApi->listSshKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListSshKeysResponse**](../Model/ListSshKeysResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

