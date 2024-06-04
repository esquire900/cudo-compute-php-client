# Swagger\Client\DataCentersApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countHosts**](DataCentersApi.md#counthosts) | **GET** /v1/data-centers/{dataCenterId}/host-count | Get host count
[**createDataCenter**](DataCentersApi.md#createdatacenter) | **POST** /v1/data-centers | Create data center
[**deleteDataCenter**](DataCentersApi.md#deletedatacenter) | **DELETE** /v1/data-centers/{id} | Delete data center
[**getDataCenter**](DataCentersApi.md#getdatacenter) | **GET** /v1/data-centers/{id} | Get data center
[**getDataCenterLiveUtilization**](DataCentersApi.md#getdatacenterliveutilization) | **GET** /v1/data-centers/{id}/live-utilization | Get live utilization
[**getDataCenterRevenueByResource**](DataCentersApi.md#getdatacenterrevenuebyresource) | **GET** /v1/data-centers/{id}/revenue-by-resource | Get revenue by resource
[**getDataCenterRevenueTimeSeries**](DataCentersApi.md#getdatacenterrevenuetimeseries) | **GET** /v1/data-centers/{id}/revenue | Get revenue time series
[**listClusters**](DataCentersApi.md#listclusters) | **GET** /v1/data-centers/{dataCenterId}/clusters | List clusters
[**listDataCenters**](DataCentersApi.md#listdatacenters) | **GET** /v1/data-centers | List data centers
[**listHosts**](DataCentersApi.md#listhosts) | **GET** /v1/data-centers/{dataCenterId}/hosts | List hosts
[**updateDataCenter**](DataCentersApi.md#updatedatacenter) | **PATCH** /v1/data-centers/{dataCenter.id} | Update data center

# **countHosts**
> \Swagger\Client\Model\CountHostsResponse countHosts($data_center_id)

Get host count

Returns the number of hosts in a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->countHosts($data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->countHosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_center_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CountHostsResponse**](../Model/CountHostsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDataCenter**
> \Swagger\Client\Model\DataCenter createDataCenter($body)

Create data center

Creates a new data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DataCenter(); // \Swagger\Client\Model\DataCenter | 

try {
    $result = $apiInstance->createDataCenter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->createDataCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DataCenter**](../Model/DataCenter.md)|  |

### Return type

[**\Swagger\Client\Model\DataCenter**](../Model/DataCenter.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDataCenter**
> object deleteDataCenter($id)

Delete data center

Deletes a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteDataCenter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->deleteDataCenter: ', $e->getMessage(), PHP_EOL;
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

# **getDataCenter**
> \Swagger\Client\Model\DataCenter getDataCenter($id)

Get data center

Returns a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDataCenter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->getDataCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DataCenter**](../Model/DataCenter.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataCenterLiveUtilization**
> \Swagger\Client\Model\GetDataCenterLiveUtilizationResponse getDataCenterLiveUtilization($id)

Get live utilization

Returns the live utilization of a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getDataCenterLiveUtilization($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->getDataCenterLiveUtilization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetDataCenterLiveUtilizationResponse**](../Model/GetDataCenterLiveUtilizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataCenterRevenueByResource**
> \Swagger\Client\Model\GetDataCenterRevenueByResourceResponse getDataCenterRevenueByResource($id, $start_time, $end_time)

Get revenue by resource

Returns the revenue of a data center by resource (CPU, Memory, Storage, etc.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getDataCenterRevenueByResource($id, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->getDataCenterRevenueByResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\GetDataCenterRevenueByResourceResponse**](../Model/GetDataCenterRevenueByResourceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataCenterRevenueTimeSeries**
> \Swagger\Client\Model\GetDataCenterRevenueTimeSeriesResponse getDataCenterRevenueTimeSeries($id, $start_time, $end_time, $interval)

Get revenue time series

Returns the revenue of a data center over time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$interval = "INTERVAL_UNKNOWN"; // string | 

try {
    $result = $apiInstance->getDataCenterRevenueTimeSeries($id, $start_time, $end_time, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->getDataCenterRevenueTimeSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |
 **interval** | **string**|  | [default to INTERVAL_UNKNOWN]

### Return type

[**\Swagger\Client\Model\GetDataCenterRevenueTimeSeriesResponse**](../Model/GetDataCenterRevenueTimeSeriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listClusters**
> \Swagger\Client\Model\ListClustersResponse listClusters($data_center_id)

List clusters

Returns the clusters in a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->listClusters($data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->listClusters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_center_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListClustersResponse**](../Model/ListClustersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDataCenters**
> \Swagger\Client\Model\ListDataCentersResponse listDataCenters($page_token, $page_size)

List data centers

Returns the data centers in an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_token = "page_token_example"; // string | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listDataCenters($page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->listDataCenters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_token** | **string**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListDataCentersResponse**](../Model/ListDataCentersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHosts**
> \Swagger\Client\Model\ListHostsResponse listHosts($data_center_id)

List hosts

Returns the hosts in a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->listHosts($data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->listHosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_center_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ListHostsResponse**](../Model/ListHostsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDataCenter**
> \Swagger\Client\Model\DataCenter updateDataCenter($body, $data_center_id)

Update data center

Updates a data center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DataCentersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\DatacentersDataCenterIdBody(); // \Swagger\Client\Model\DatacentersDataCenterIdBody | 
$data_center_id = "data_center_id_example"; // string | 

try {
    $result = $apiInstance->updateDataCenter($body, $data_center_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataCentersApi->updateDataCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DatacentersDataCenterIdBody**](../Model/DatacentersDataCenterIdBody.md)|  |
 **data_center_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DataCenter**](../Model/DataCenter.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

