# Swagger\Client\ObjectStorageApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activate**](ObjectStorageApi.md#activate) | **POST** /v1/projects/{projectId}/object-storage/activate | Allow the use of S3 compatible storage in a project
[**createObjectStorageUser**](ObjectStorageApi.md#createobjectstorageuser) | **POST** /v1/projects/{projectId}/object-storage/users | Create user that stores keys for storage buckets
[**deleteObjectStorageKey**](ObjectStorageApi.md#deleteobjectstoragekey) | **POST** /v1/projects/{projectId}/object-storage/users/{id}/keys | Delete object storage user
[**deleteObjectStorageUser**](ObjectStorageApi.md#deleteobjectstorageuser) | **DELETE** /v1/projects/{projectId}/object-storage/users/{id} | Delete object storage user
[**generateObjectStorageKey**](ObjectStorageApi.md#generateobjectstoragekey) | **POST** /v1/projects/{projectId}/object-storage/users/{id} | Generate access key for storage buckets
[**getObjectStorageBucket**](ObjectStorageApi.md#getobjectstoragebucket) | **GET** /v1/projects/{projectId}/object-storage/buckets/{id} | Get details for a bucket
[**getObjectStorageSessionKey**](ObjectStorageApi.md#getobjectstoragesessionkey) | **GET** /v1/projects/{projectId}/object-storage/session-key | Generate temporary key for storage bucket access
[**listObjectStorageBuckets**](ObjectStorageApi.md#listobjectstoragebuckets) | **GET** /v1/projects/{projectId}/object-storage/buckets | List buckets
[**listObjectStorageKeys**](ObjectStorageApi.md#listobjectstoragekeys) | **GET** /v1/projects/{projectId}/object-storage/users/{id}/keys | List storage user keys
[**listObjectStorageUsers**](ObjectStorageApi.md#listobjectstorageusers) | **GET** /v1/projects/{projectId}/object-storage/users | List storage users

# **activate**
> object activate($body, $project_id)

Allow the use of S3 compatible storage in a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ObjectstorageActivateBody(); // \Swagger\Client\Model\ObjectstorageActivateBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->activate($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->activate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ObjectstorageActivateBody**](../Model/ObjectstorageActivateBody.md)|  |
 **project_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createObjectStorageUser**
> \Swagger\Client\Model\ObjectStorageUser createObjectStorageUser($body, $project_id)

Create user that stores keys for storage buckets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ObjectstorageUsersBody(); // \Swagger\Client\Model\ObjectstorageUsersBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->createObjectStorageUser($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->createObjectStorageUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ObjectstorageUsersBody**](../Model/ObjectstorageUsersBody.md)|  |
 **project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectStorageUser**](../Model/ObjectStorageUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteObjectStorageKey**
> \Swagger\Client\Model\DeleteObjectStorageKeyResponse deleteObjectStorageKey($project_id, $id, $access_key)

Delete object storage user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$access_key = "access_key_example"; // string | 

try {
    $result = $apiInstance->deleteObjectStorageKey($project_id, $id, $access_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->deleteObjectStorageKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **access_key** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DeleteObjectStorageKeyResponse**](../Model/DeleteObjectStorageKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteObjectStorageUser**
> \Swagger\Client\Model\DeleteObjectStorageUserResponse deleteObjectStorageUser($project_id, $id)

Delete object storage user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteObjectStorageUser($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->deleteObjectStorageUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeleteObjectStorageUserResponse**](../Model/DeleteObjectStorageUserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateObjectStorageKey**
> \Swagger\Client\Model\ObjectStorageKey generateObjectStorageKey($body, $project_id, $id)

Generate access key for storage buckets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->generateObjectStorageKey($body, $project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->generateObjectStorageKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectStorageKey**](../Model/ObjectStorageKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectStorageBucket**
> \Swagger\Client\Model\ObjectStorageBucket getObjectStorageBucket($project_id, $id)

Get details for a bucket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getObjectStorageBucket($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->getObjectStorageBucket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ObjectStorageBucket**](../Model/ObjectStorageBucket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectStorageSessionKey**
> \Swagger\Client\Model\GetObjectStorageSessionKeyResponse getObjectStorageSessionKey($project_id, $data_center_id)

Generate temporary key for storage bucket access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->getObjectStorageSessionKey($project_id, $data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->getObjectStorageSessionKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **data_center_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\GetObjectStorageSessionKeyResponse**](../Model/GetObjectStorageSessionKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listObjectStorageBuckets**
> \Swagger\Client\Model\ListObjectStorageBucketsResponse listObjectStorageBuckets($project_id, $page_number, $page_size)

List buckets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listObjectStorageBuckets($project_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->listObjectStorageBuckets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListObjectStorageBucketsResponse**](../Model/ListObjectStorageBucketsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listObjectStorageKeys**
> \Swagger\Client\Model\ListObjectStorageKeysResponse listObjectStorageKeys($project_id, $id, $page_number, $page_size)

List storage user keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listObjectStorageKeys($project_id, $id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->listObjectStorageKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListObjectStorageKeysResponse**](../Model/ListObjectStorageKeysResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listObjectStorageUsers**
> \Swagger\Client\Model\ListObjectStorageUsersResponse listObjectStorageUsers($project_id, $page_number, $page_size)

List storage users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ObjectStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listObjectStorageUsers($project_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectStorageApi->listObjectStorageUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListObjectStorageUsersResponse**](../Model/ListObjectStorageUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

