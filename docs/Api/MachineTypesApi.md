# Swagger\Client\MachineTypesApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMachineType**](MachineTypesApi.md#getmachinetype) | **GET** /v1/data-centers/{dataCenterId}/machine-types/{machineType} | Get
[**getMachineTypeLiveUtilization**](MachineTypesApi.md#getmachinetypeliveutilization) | **GET** /v1/data-centers/{dataCenterId}/machine-types/{machineType}/live-utilization | Get
[**listMachineTypes**](MachineTypesApi.md#listmachinetypes) | **GET** /v1/data-centers/{dataCenterId}/machine-types | Get

# **getMachineType**
> \Swagger\Client\Model\GetMachineTypeResponse getMachineType($data_center_id, $machine_type)

Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MachineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_center_id = "data_center_id_example"; // string | 
$machine_type = "machine_type_example"; // string | 

try {
    $result = $apiInstance->getMachineType($data_center_id, $machine_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTypesApi->getMachineType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_center_id** | **string**|  |
 **machine_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetMachineTypeResponse**](../Model/GetMachineTypeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMachineTypeLiveUtilization**
> \Swagger\Client\Model\GetMachineTypeLiveUtilizationResponse getMachineTypeLiveUtilization($data_center_id, $machine_type)

Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MachineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_center_id = "data_center_id_example"; // string | 
$machine_type = "machine_type_example"; // string | 

try {
    $result = $apiInstance->getMachineTypeLiveUtilization($data_center_id, $machine_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTypesApi->getMachineTypeLiveUtilization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_center_id** | **string**|  |
 **machine_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetMachineTypeLiveUtilizationResponse**](../Model/GetMachineTypeLiveUtilizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMachineTypes**
> \Swagger\Client\Model\ListMachineTypesResponse listMachineTypes($data_center_id)

Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MachineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->listMachineTypes($data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MachineTypesApi->listMachineTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_center_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListMachineTypesResponse**](../Model/ListMachineTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

