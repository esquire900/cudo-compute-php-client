# Swagger\Client\VirtualMachinesApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachSecurityGroup**](VirtualMachinesApi.md#attachsecuritygroup) | **PATCH** /v1/projects/{projectId}/vm/{id}/security-group/attach | Attach security group to VM
[**connectVM**](VirtualMachinesApi.md#connectvm) | **GET** /v1/projects/{projectId}/vms/{id}/connect | Connect via VNC
[**countVMs**](VirtualMachinesApi.md#countvms) | **GET** /v1/projects/{projectId}/count-vms | Count
[**createPrivateVMImage**](VirtualMachinesApi.md#createprivatevmimage) | **POST** /v1/projects/{projectId}/images | Create private VM image
[**createVM**](VirtualMachinesApi.md#createvm) | **POST** /v1/projects/{projectId}/vm | Create virtual machine
[**deletePrivateVMImage**](VirtualMachinesApi.md#deleteprivatevmimage) | **DELETE** /v1/projects/{projectId}/images/{id} | Delete private VM image
[**detachSecurityGroup**](VirtualMachinesApi.md#detachsecuritygroup) | **PATCH** /v1/projects/{projectId}/vm/{id}/security-group/detach | Attach security group to VM
[**getPrivateVMImage**](VirtualMachinesApi.md#getprivatevmimage) | **GET** /v1/projects/{projectId}/images/{id} | Get private VM image
[**getVM**](VirtualMachinesApi.md#getvm) | **GET** /v1/projects/{projectId}/vms/{id} | Get
[**listPrivateVMImages**](VirtualMachinesApi.md#listprivatevmimages) | **GET** /v1/projects/{projectId}/images | List private VM images
[**listPublicVMImages**](VirtualMachinesApi.md#listpublicvmimages) | **GET** /v1/vms/public-images | List public VM images
[**listVMDataCenters**](VirtualMachinesApi.md#listvmdatacenters) | **GET** /v1/vms/data-centers | List data centers
[**listVMDisks**](VirtualMachinesApi.md#listvmdisks) | **GET** /v1/projects/{projectId}/vms/{id}/disks | List disks attached to VM
[**listVMMachineTypes**](VirtualMachinesApi.md#listvmmachinetypes) | **GET** /v1/vms/machine-types | List machine types
[**listVMs**](VirtualMachinesApi.md#listvms) | **GET** /v1/projects/{projectId}/vms | List
[**monitorVM**](VirtualMachinesApi.md#monitorvm) | **GET** /v1/projects/{projectId}/vms/{id}/monitor | Monitor
[**rebootVM**](VirtualMachinesApi.md#rebootvm) | **POST** /v1/projects/{projectId}/vms/{id}/reboot | Reboot
[**resizeVM**](VirtualMachinesApi.md#resizevm) | **POST** /v1/projects/{projectId}/vms/{id}/resize | Resize vCPU and memory of VM
[**resizeVMDisk**](VirtualMachinesApi.md#resizevmdisk) | **PATCH** /v1/projects/{projectId}/vms/{id}/disks | Resize a VM&#x27;s disk
[**startVM**](VirtualMachinesApi.md#startvm) | **POST** /v1/projects/{projectId}/vms/{id}/start | Start
[**stopVM**](VirtualMachinesApi.md#stopvm) | **POST** /v1/projects/{projectId}/vms/{id}/stop | Stop
[**terminateVM**](VirtualMachinesApi.md#terminatevm) | **POST** /v1/projects/{projectId}/vms/{id}/terminate | Terminate
[**updatePrivateVMImage**](VirtualMachinesApi.md#updateprivatevmimage) | **POST** /v1/projects/{projectId}/images/{id} | Update private VM image
[**updateVMMetadata**](VirtualMachinesApi.md#updatevmmetadata) | **POST** /v1/projects/{projectId}/vm/{id}/metadata | Update VM metadata

# **attachSecurityGroup**
> \Swagger\Client\Model\AttachSecurityGroupResponse attachSecurityGroup($project_id, $id, $security_group_id)

Attach security group to VM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$security_group_id = "security_group_id_example"; // string | 

try {
    $result = $apiInstance->attachSecurityGroup($project_id, $id, $security_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->attachSecurityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **security_group_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AttachSecurityGroupResponse**](../Model/AttachSecurityGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectVM**
> \Swagger\Client\Model\ConnectVMResponse connectVM($project_id, $id, $connection_id)

Connect via VNC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$connection_id = "connection_id_example"; // string | 

try {
    $result = $apiInstance->connectVM($project_id, $id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->connectVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **connection_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectVMResponse**](../Model/ConnectVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countVMs**
> \Swagger\Client\Model\CountVMsResponse countVMs($project_id)

Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->countVMs($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->countVMs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CountVMsResponse**](../Model/CountVMsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivateVMImage**
> \Swagger\Client\Model\CreatePrivateVMImageResponse createPrivateVMImage($project_id, $vm_id, $id, $description)

Create private VM image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$vm_id = "vm_id_example"; // string | 
$id = "id_example"; // string | 
$description = "description_example"; // string | 

try {
    $result = $apiInstance->createPrivateVMImage($project_id, $vm_id, $id, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->createPrivateVMImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **vm_id** | **string**|  |
 **id** | **string**|  |
 **description** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CreatePrivateVMImageResponse**](../Model/CreatePrivateVMImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVM**
> \Swagger\Client\Model\CreateVMResponse createVM($body, $project_id)

Create virtual machine

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectIdVmBody(); // \Swagger\Client\Model\ProjectIdVmBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->createVM($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->createVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectIdVmBody**](../Model/ProjectIdVmBody.md)|  |
 **project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CreateVMResponse**](../Model/CreateVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePrivateVMImage**
> \Swagger\Client\Model\DeletePrivateVMImageResponse deletePrivateVMImage($project_id, $id)

Delete private VM image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deletePrivateVMImage($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->deletePrivateVMImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeletePrivateVMImageResponse**](../Model/DeletePrivateVMImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detachSecurityGroup**
> \Swagger\Client\Model\DetachSecurityGroupResponse detachSecurityGroup($project_id, $id, $security_group_id)

Attach security group to VM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$security_group_id = "security_group_id_example"; // string | 

try {
    $result = $apiInstance->detachSecurityGroup($project_id, $id, $security_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->detachSecurityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **security_group_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DetachSecurityGroupResponse**](../Model/DetachSecurityGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivateVMImage**
> \Swagger\Client\Model\GetPrivateVMImageResponse getPrivateVMImage($project_id, $id)

Get private VM image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getPrivateVMImage($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->getPrivateVMImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetPrivateVMImageResponse**](../Model/GetPrivateVMImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVM**
> \Swagger\Client\Model\GetVMResponse getVM($project_id, $id)

Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getVM($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->getVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetVMResponse**](../Model/GetVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPrivateVMImages**
> \Swagger\Client\Model\ListPrivateVMImagesResponse listPrivateVMImages($project_id, $page_number, $page_size)

List private VM images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listPrivateVMImages($project_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->listPrivateVMImages: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ListPrivateVMImagesResponse**](../Model/ListPrivateVMImagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPublicVMImages**
> \Swagger\Client\Model\ListPublicVMImagesResponse listPublicVMImages()

List public VM images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPublicVMImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->listPublicVMImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListPublicVMImagesResponse**](../Model/ListPublicVMImagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listVMDataCenters**
> \Swagger\Client\Model\ListVMDataCentersResponse listVMDataCenters($region_id, $renewable_energy)

List data centers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$region_id = array("region_id_example"); // string[] | 
$renewable_energy = true; // bool | 

try {
    $result = $apiInstance->listVMDataCenters($region_id, $renewable_energy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->listVMDataCenters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region_id** | [**string[]**](../Model/string.md)|  | [optional]
 **renewable_energy** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListVMDataCentersResponse**](../Model/ListVMDataCentersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listVMDisks**
> \Swagger\Client\Model\ListVMDisksResponse listVMDisks($project_id, $id)

List disks attached to VM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->listVMDisks($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->listVMDisks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListVMDisksResponse**](../Model/ListVMDisksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listVMMachineTypes**
> \Swagger\Client\Model\ListVMMachineTypesResponse listVMMachineTypes($memory_gib, $vcpu, $cpu_model, $gpu, $gpu_model, $order_by, $page_number, $page_size, $region_id, $storage_gib, $data_center_id, $public_ipv4)

List machine types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$memory_gib = 56; // int | 
$vcpu = 56; // int | 
$cpu_model = "cpu_model_example"; // string | 
$gpu = 56; // int | 
$gpu_model = "gpu_model_example"; // string | 
$order_by = "order_by_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 
$region_id = "region_id_example"; // string | 
$storage_gib = 56; // int | 
$data_center_id = "data_center_id_example"; // string | 
$public_ipv4 = true; // bool | 

try {
    $result = $apiInstance->listVMMachineTypes($memory_gib, $vcpu, $cpu_model, $gpu, $gpu_model, $order_by, $page_number, $page_size, $region_id, $storage_gib, $data_center_id, $public_ipv4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->listVMMachineTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **memory_gib** | **int**|  |
 **vcpu** | **int**|  |
 **cpu_model** | **string**|  | [optional]
 **gpu** | **int**|  | [optional]
 **gpu_model** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **region_id** | **string**|  | [optional]
 **storage_gib** | **int**|  | [optional]
 **data_center_id** | **string**|  | [optional]
 **public_ipv4** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListVMMachineTypesResponse**](../Model/ListVMMachineTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listVMs**
> \Swagger\Client\Model\ListVMsResponse listVMs($project_id, $network_id)

List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$network_id = "network_id_example"; // string | 

try {
    $result = $apiInstance->listVMs($project_id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->listVMs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **network_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListVMsResponse**](../Model/ListVMsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitorVM**
> \Swagger\Client\Model\MonitorVMResponse monitorVM($project_id, $id)

Monitor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->monitorVM($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->monitorVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MonitorVMResponse**](../Model/MonitorVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rebootVM**
> \Swagger\Client\Model\RebootVMResponse rebootVM($project_id, $id)

Reboot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->rebootVM($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->rebootVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RebootVMResponse**](../Model/RebootVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resizeVM**
> \Swagger\Client\Model\ResizeVMResponse resizeVM($project_id, $id, $vcpus, $memory_gib)

Resize vCPU and memory of VM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$vcpus = 789; // int | 
$memory_gib = 789; // int | 

try {
    $result = $apiInstance->resizeVM($project_id, $id, $vcpus, $memory_gib);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->resizeVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **vcpus** | **int**|  | [optional]
 **memory_gib** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResizeVMResponse**](../Model/ResizeVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resizeVMDisk**
> \Swagger\Client\Model\ResizeVMDiskResponse resizeVMDisk($project_id, $id, $disk_id, $size_gib)

Resize a VM's disk

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$disk_id = "disk_id_example"; // string | 
$size_gib = 56; // int | 

try {
    $result = $apiInstance->resizeVMDisk($project_id, $id, $disk_id, $size_gib);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->resizeVMDisk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **disk_id** | **string**|  | [optional]
 **size_gib** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResizeVMDiskResponse**](../Model/ResizeVMDiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startVM**
> \Swagger\Client\Model\StartVMResponse startVM($project_id, $id)

Start

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->startVM($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->startVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StartVMResponse**](../Model/StartVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopVM**
> \Swagger\Client\Model\StopVMResponse stopVM($project_id, $id)

Stop

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->stopVM($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->stopVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StopVMResponse**](../Model/StopVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **terminateVM**
> \Swagger\Client\Model\TerminateVMResponse terminateVM($project_id, $id)

Terminate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->terminateVM($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->terminateVM: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\TerminateVMResponse**](../Model/TerminateVMResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivateVMImage**
> \Swagger\Client\Model\UpdatePrivateVMImageResponse updatePrivateVMImage($project_id, $id, $description)

Update private VM image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$description = "description_example"; // string | 

try {
    $result = $apiInstance->updatePrivateVMImage($project_id, $id, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->updatePrivateVMImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **description** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UpdatePrivateVMImageResponse**](../Model/UpdatePrivateVMImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVMMetadata**
> \Swagger\Client\Model\UpdateVMMetadataResponse updateVMMetadata($body, $project_id, $id)

Update VM metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualMachinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\IdMetadataBody(); // \Swagger\Client\Model\IdMetadataBody | 
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->updateVMMetadata($body, $project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualMachinesApi->updateVMMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IdMetadataBody**](../Model/IdMetadataBody.md)|  |
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\UpdateVMMetadataResponse**](../Model/UpdateVMMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

