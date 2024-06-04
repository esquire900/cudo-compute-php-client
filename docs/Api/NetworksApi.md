# Swagger\Client\NetworksApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNetwork**](NetworksApi.md#createnetwork) | **POST** /v1/projects/{projectId}/networks | Create network
[**createSecurityGroup**](NetworksApi.md#createsecuritygroup) | **POST** /v1/projects/{securityGroup.projectId}/networks/security-groups | Create security group
[**deleteNetwork**](NetworksApi.md#deletenetwork) | **DELETE** /v1/projects/{projectId}/networks/{id} | Delete network
[**deleteSecurityGroup**](NetworksApi.md#deletesecuritygroup) | **DELETE** /v1/projects/{projectId}/networks/security-groups/{id} | Delete security group
[**getNetwork**](NetworksApi.md#getnetwork) | **GET** /v1/projects/{projectId}/networks/{id} | Get network
[**getSecurityGroup**](NetworksApi.md#getsecuritygroup) | **GET** /v1/projects/{projectId}/networks/security-groups/{id} | Get a security group
[**listNetworks**](NetworksApi.md#listnetworks) | **GET** /v1/projects/{projectId}/networks | List networks
[**listSecurityGroups**](NetworksApi.md#listsecuritygroups) | **GET** /v1/projects/{projectId}/networks/security-groups | List security groups
[**startNetwork**](NetworksApi.md#startnetwork) | **POST** /v1/projects/{projectId}/networks/{id}/start | Start network
[**stopNetwork**](NetworksApi.md#stopnetwork) | **POST** /v1/projects/{projectId}/networks/{id}/stop | Stop network
[**updateSecurityGroup**](NetworksApi.md#updatesecuritygroup) | **PATCH** /v1/projects/{securityGroup.projectId}/networks/security-groups/{securityGroup.id} | Update security group

# **createNetwork**
> \Swagger\Client\Model\CreateNetworkResponse createNetwork($body, $project_id)

Create network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProjectIdNetworksBody(); // \Swagger\Client\Model\ProjectIdNetworksBody | 
$project_id = "project_id_example"; // string | 

try {
    $result = $apiInstance->createNetwork($body, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProjectIdNetworksBody**](../Model/ProjectIdNetworksBody.md)|  |
 **project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CreateNetworkResponse**](../Model/CreateNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecurityGroup**
> \Swagger\Client\Model\CreateSecurityGroupResponse createSecurityGroup($body, $security_group_project_id)

Create security group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NetworksSecuritygroupsBody(); // \Swagger\Client\Model\NetworksSecuritygroupsBody | 
$security_group_project_id = "security_group_project_id_example"; // string | 

try {
    $result = $apiInstance->createSecurityGroup($body, $security_group_project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->createSecurityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NetworksSecuritygroupsBody**](../Model/NetworksSecuritygroupsBody.md)|  |
 **security_group_project_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CreateSecurityGroupResponse**](../Model/CreateSecurityGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNetwork**
> \Swagger\Client\Model\DeleteNetworkResponse deleteNetwork($project_id, $id, $network_id)

Delete network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$network_id = "network_id_example"; // string | 

try {
    $result = $apiInstance->deleteNetwork($project_id, $id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **network_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeleteNetworkResponse**](../Model/DeleteNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSecurityGroup**
> \Swagger\Client\Model\DeleteSecurityGroupResponse deleteSecurityGroup($project_id, $id)

Delete security group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteSecurityGroup($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->deleteSecurityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DeleteSecurityGroupResponse**](../Model/DeleteSecurityGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetwork**
> \Swagger\Client\Model\GetNetworkResponse getNetwork($project_id, $id)

Get network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getNetwork($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetNetworkResponse**](../Model/GetNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecurityGroup**
> \Swagger\Client\Model\GetSecurityGroupResponse getSecurityGroup($project_id, $id)

Get a security group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSecurityGroup($project_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->getSecurityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetSecurityGroupResponse**](../Model/GetSecurityGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listNetworks**
> \Swagger\Client\Model\ListNetworksResponse listNetworks($project_id, $page_number, $page_size)

List networks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listNetworks($project_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->listNetworks: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ListNetworksResponse**](../Model/ListNetworksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSecurityGroups**
> \Swagger\Client\Model\ListSecurityGroupsResponse listSecurityGroups($project_id, $data_center_id, $page_number, $page_size)

List security groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$data_center_id = "data_center_id_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listSecurityGroups($project_id, $data_center_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->listSecurityGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **data_center_id** | **string**|  | [optional]
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListSecurityGroupsResponse**](../Model/ListSecurityGroupsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startNetwork**
> \Swagger\Client\Model\StartNetworkResponse startNetwork($project_id, $id, $network_id)

Start network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$network_id = "network_id_example"; // string | 

try {
    $result = $apiInstance->startNetwork($project_id, $id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->startNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **network_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StartNetworkResponse**](../Model/StartNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopNetwork**
> \Swagger\Client\Model\StopNetworkResponse stopNetwork($project_id, $id, $network_id)

Stop network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = "project_id_example"; // string | 
$id = "id_example"; // string | 
$network_id = "network_id_example"; // string | 

try {
    $result = $apiInstance->stopNetwork($project_id, $id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->stopNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **id** | **string**|  |
 **network_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\StopNetworkResponse**](../Model/StopNetworkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSecurityGroup**
> \Swagger\Client\Model\UpdateSecurityGroupResponse updateSecurityGroup($body, $security_group_project_id, $security_group_id)

Update security group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SecuritygroupsSecurityGroupIdBody(); // \Swagger\Client\Model\SecuritygroupsSecurityGroupIdBody | 
$security_group_project_id = "security_group_project_id_example"; // string | 
$security_group_id = "security_group_id_example"; // string | 

try {
    $result = $apiInstance->updateSecurityGroup($body, $security_group_project_id, $security_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworksApi->updateSecurityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SecuritygroupsSecurityGroupIdBody**](../Model/SecuritygroupsSecurityGroupIdBody.md)|  |
 **security_group_project_id** | **string**|  |
 **security_group_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\UpdateSecurityGroupResponse**](../Model/UpdateSecurityGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

