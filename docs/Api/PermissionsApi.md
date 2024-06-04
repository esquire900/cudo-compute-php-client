# Swagger\Client\PermissionsApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBillingAccountUserPermission**](PermissionsApi.md#addbillingaccountuserpermission) | **POST** /v1/billing-accounts/{billingAccountId}/add-user-permission | Add billing account user
[**addDataCenterUserPermission**](PermissionsApi.md#adddatacenteruserpermission) | **POST** /v1/data-centers/{dataCenterId}/add-user-permission | Add data center user
[**addProjectUserPermission**](PermissionsApi.md#addprojectuserpermission) | **POST** /v1/projects/{projectId}/add-user-permission | Add project user
[**listUserPermissions**](PermissionsApi.md#listuserpermissions) | **GET** /v1/auth/permissions | List
[**removeBillingAccountUserPermission**](PermissionsApi.md#removebillingaccountuserpermission) | **POST** /v1/billing-accounts/{billingAccountId}/remove-user-permission | Remove billing account user
[**removeDataCenterUserPermission**](PermissionsApi.md#removedatacenteruserpermission) | **POST** /v1/data-centers/{dataCenterId}/remove-user-permission | Remove data center user
[**removeProjectUserPermission**](PermissionsApi.md#removeprojectuserpermission) | **POST** /v1/projects/{projectId}/remove-user-permission | Remove project user

# **addBillingAccountUserPermission**
> object addBillingAccountUserPermission($body, $billing_account_id)

Add billing account user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BillingAccountIdAdduserpermissionBody(); // \Swagger\Client\Model\BillingAccountIdAdduserpermissionBody | 
$billing_account_id = "billing_account_id_example"; // string | 

try {
    $result = $apiInstance->addBillingAccountUserPermission($body, $billing_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->addBillingAccountUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BillingAccountIdAdduserpermissionBody**](../Model/BillingAccountIdAdduserpermissionBody.md)|  |
 **billing_account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDataCenterUserPermission**
> object addDataCenterUserPermission($body, $data_center_id)

Add data center user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DataCenterIdAdduserpermissionBody(); // \Swagger\Client\Model\DataCenterIdAdduserpermissionBody | 
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->addDataCenterUserPermission($body, $data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->addDataCenterUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DataCenterIdAdduserpermissionBody**](../Model/DataCenterIdAdduserpermissionBody.md)|  |
 **data_center_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProjectUserPermission**
> object addProjectUserPermission($body, $project_id)

Add project user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectIdAdduserpermissionBody(); // \Swagger\Client\Model\ProjectIdAdduserpermissionBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->addProjectUserPermission($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->addProjectUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectIdAdduserpermissionBody**](../Model/ProjectIdAdduserpermissionBody.md)|  |
 **project_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUserPermissions**
> \Swagger\Client\Model\ListUserPermissionsResponse listUserPermissions($project_id, $data_center_id, $billing_account_id)

List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$data_center_id = "data_center_id_example"; // string | 
$billing_account_id = "billing_account_id_example"; // string | 

try {
    $result = $apiInstance->listUserPermissions($project_id, $data_center_id, $billing_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->listUserPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  | [optional]
 **data_center_id** | **string**|  | [optional]
 **billing_account_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListUserPermissionsResponse**](../Model/ListUserPermissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeBillingAccountUserPermission**
> object removeBillingAccountUserPermission($body, $billing_account_id)

Remove billing account user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BillingAccountIdRemoveuserpermissionBody(); // \Swagger\Client\Model\BillingAccountIdRemoveuserpermissionBody | 
$billing_account_id = "billing_account_id_example"; // string | 

try {
    $result = $apiInstance->removeBillingAccountUserPermission($body, $billing_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->removeBillingAccountUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BillingAccountIdRemoveuserpermissionBody**](../Model/BillingAccountIdRemoveuserpermissionBody.md)|  |
 **billing_account_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDataCenterUserPermission**
> object removeDataCenterUserPermission($body, $data_center_id)

Remove data center user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DataCenterIdRemoveuserpermissionBody(); // \Swagger\Client\Model\DataCenterIdRemoveuserpermissionBody | 
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->removeDataCenterUserPermission($body, $data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->removeDataCenterUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DataCenterIdRemoveuserpermissionBody**](../Model/DataCenterIdRemoveuserpermissionBody.md)|  |
 **data_center_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeProjectUserPermission**
> object removeProjectUserPermission($body, $project_id)

Remove project user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectIdRemoveuserpermissionBody(); // \Swagger\Client\Model\ProjectIdRemoveuserpermissionBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->removeProjectUserPermission($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->removeProjectUserPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectIdRemoveuserpermissionBody**](../Model/ProjectIdRemoveuserpermissionBody.md)|  |
 **project_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

