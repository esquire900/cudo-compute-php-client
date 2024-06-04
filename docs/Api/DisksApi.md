# Swagger\Client\DisksApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachStorageDisk**](DisksApi.md#attachstoragedisk) | **PATCH** /v1/projects/{projectId}/disk/{id}/attach | Attach storage disk to VM
[**createDiskSnapshot**](DisksApi.md#createdisksnapshot) | **POST** /v1/projects/{projectId}/disks/{id}/snapshots | Create Disk Snapshot
[**createStorageDisk**](DisksApi.md#createstoragedisk) | **POST** /v1/projects/{projectId}/disks | Create storage disk
[**deleteDiskSnapshot**](DisksApi.md#deletedisksnapshot) | **DELETE** /v1/projects/{projectId}/disks/{id}/snapshots | Delete Disk Snapshots
[**deleteStorageDisk**](DisksApi.md#deletestoragedisk) | **DELETE** /v1/projects/{projectId}/disks/{id} | Delete storage disk
[**detachStorageDisk**](DisksApi.md#detachstoragedisk) | **PUT** /v1/projects/{projectId}/disk/{id}/detach | Detach storage disk from VM
[**getDisk**](DisksApi.md#getdisk) | **GET** /v1/projects/{projectId}/disks/{id} | List disks
[**listDiskSnapshots**](DisksApi.md#listdisksnapshots) | **GET** /v1/projects/{projectId}/disks/{id}/snapshots | List Disk Snapshots
[**listDisks**](DisksApi.md#listdisks) | **GET** /v1/projects/{projectId}/disks | List disks
[**revertDisk**](DisksApi.md#revertdisk) | **POST** /v1/projects/{projectId}/disks/{id}/revert | Revert Disk to Snapshot

# **attachStorageDisk**
> \Swagger\Client\Model\AttachStorageDiskResponse attachStorageDisk($project_id, $id, $vm_id)

Attach storage disk to VM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$vm_id = "vm_id_example"; // string | 

try {
    $result = $apiInstance->attachStorageDisk($project_id, $id, $vm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->attachStorageDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **vm_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AttachStorageDiskResponse**](../Model/AttachStorageDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDiskSnapshot**
> \Swagger\Client\Model\CreateDiskSnapshotResponse createDiskSnapshot($body, $project_id, $id)

Create Disk Snapshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IdSnapshotsBody(); // \Swagger\Client\Model\IdSnapshotsBody | 
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->createDiskSnapshot($body, $project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->createDiskSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IdSnapshotsBody**](../Model/IdSnapshotsBody.md)|  |
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CreateDiskSnapshotResponse**](../Model/CreateDiskSnapshotResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStorageDisk**
> \Swagger\Client\Model\CreateStorageDiskResponse createStorageDisk($body, $project_id)

Create storage disk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectIdDisksBody(); // \Swagger\Client\Model\ProjectIdDisksBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->createStorageDisk($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->createStorageDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectIdDisksBody**](../Model/ProjectIdDisksBody.md)|  |
 **project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CreateStorageDiskResponse**](../Model/CreateStorageDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiskSnapshot**
> \Swagger\Client\Model\DeleteDiskSnapshotResponse deleteDiskSnapshot($project_id, $id, $snapshot_id, $vm_id)

Delete Disk Snapshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$snapshot_id = "snapshot_id_example"; // string | 
$vm_id = "vm_id_example"; // string | 

try {
    $result = $apiInstance->deleteDiskSnapshot($project_id, $id, $snapshot_id, $vm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->deleteDiskSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **snapshot_id** | **string**|  |
 **vm_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeleteDiskSnapshotResponse**](../Model/DeleteDiskSnapshotResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStorageDisk**
> \Swagger\Client\Model\DeleteStorageDiskResponse deleteStorageDisk($project_id, $id)

Delete storage disk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteStorageDisk($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->deleteStorageDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeleteStorageDiskResponse**](../Model/DeleteStorageDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachStorageDisk**
> \Swagger\Client\Model\DetachStorageDiskResponse detachStorageDisk($project_id, $id)

Detach storage disk from VM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->detachStorageDisk($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->detachStorageDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DetachStorageDiskResponse**](../Model/DetachStorageDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisk**
> \Swagger\Client\Model\GetDiskResponse getDisk($project_id, $id)

List disks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDisk($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->getDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetDiskResponse**](../Model/GetDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDiskSnapshots**
> \Swagger\Client\Model\ListDiskSnapshotsResponse listDiskSnapshots($project_id, $id)

List Disk Snapshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->listDiskSnapshots($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->listDiskSnapshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListDiskSnapshotsResponse**](../Model/ListDiskSnapshotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDisks**
> \Swagger\Client\Model\ListDisksResponse listDisks($project_id, $page_number, $page_size, $data_center_id)

List disks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->listDisks($project_id, $page_number, $page_size, $data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->listDisks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **data_center_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListDisksResponse**](../Model/ListDisksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revertDisk**
> \Swagger\Client\Model\RevertDiskResponse revertDisk($project_id, $id, $snapshot_id, $vm_id)

Revert Disk to Snapshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DisksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$snapshot_id = "snapshot_id_example"; // string | 
$vm_id = "vm_id_example"; // string | 

try {
    $result = $apiInstance->revertDisk($project_id, $id, $snapshot_id, $vm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisksApi->revertDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **snapshot_id** | **string**|  |
 **vm_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RevertDiskResponse**](../Model/RevertDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

