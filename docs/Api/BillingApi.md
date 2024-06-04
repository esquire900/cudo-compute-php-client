# Swagger\Client\BillingApi

All URIs are relative to *https://rest.compute.cudo.org/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBillingAccount**](BillingApi.md#createbillingaccount) | **POST** /v1/billing-accounts | Create a billing account
[**deleteBillingAccount**](BillingApi.md#deletebillingaccount) | **DELETE** /v1/billing-accounts/{id} | Delete billing account
[**getBillingAccount**](BillingApi.md#getbillingaccount) | **GET** /v1/billing-accounts/{id} | Get a billing account
[**getBillingAccountDetails**](BillingApi.md#getbillingaccountdetails) | **GET** /v1/billing-accounts/{id}/details | Get billing account details
[**getBillingAccountPaymentMethods**](BillingApi.md#getbillingaccountpaymentmethods) | **GET** /v1/billing-accounts/{id}/payment-methods | Get payment methods
[**getBillingAccountSetupIntent**](BillingApi.md#getbillingaccountsetupintent) | **GET** /v1/billing-accounts/{id}/setup-intent | Get setup intent
[**getBillingAccountSpendDetails**](BillingApi.md#getbillingaccountspenddetails) | **GET** /v1/billing-accounts/{billingAccountId}/spend/details | Get spend details
[**getBillingAccountStripeInvoices**](BillingApi.md#getbillingaccountstripeinvoices) | **GET** /v1/billing-accounts/invoices | Get invoices
[**listBillingAccounts**](BillingApi.md#listbillingaccounts) | **GET** /v1/billing-accounts | List billing accounts
[**listOutstandingStripeInvoices**](BillingApi.md#listoutstandingstripeinvoices) | **GET** /v1/billing-accounts/invoices/outstanding | Get outstanding invoices
[**removeBillingAccountPaymentMethod**](BillingApi.md#removebillingaccountpaymentmethod) | **DELETE** /v1/billing-accounts/{id}/payment-methods/{paymentMethodId} | Remove payment method
[**setBillingAccountDefaultPaymentMethod**](BillingApi.md#setbillingaccountdefaultpaymentmethod) | **POST** /v1/billing-accounts/{id}/payment-methods/{paymentMethodId}/set-default | Set default payment method
[**updateBillingAccount**](BillingApi.md#updatebillingaccount) | **PATCH** /v1/billing-accounts/{billingAccount.id} | Update billing account

# **createBillingAccount**
> \Swagger\Client\Model\BillingAccount createBillingAccount($body)

Create a billing account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateBillingAccountRequest(); // \Swagger\Client\Model\CreateBillingAccountRequest | 

try {
    $result = $apiInstance->createBillingAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createBillingAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateBillingAccountRequest**](../Model/CreateBillingAccountRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BillingAccount**](../Model/BillingAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBillingAccount**
> object deleteBillingAccount($id)

Delete billing account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteBillingAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->deleteBillingAccount: ', $e->getMessage(), PHP_EOL;
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

# **getBillingAccount**
> \Swagger\Client\Model\BillingAccount getBillingAccount($id)

Get a billing account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBillingAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BillingAccount**](../Model/BillingAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAccountDetails**
> \Swagger\Client\Model\GetBillingAccountDetailsResponse getBillingAccountDetails($id)

Get billing account details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBillingAccountDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetBillingAccountDetailsResponse**](../Model/GetBillingAccountDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAccountPaymentMethods**
> \Swagger\Client\Model\BillingAccountPaymentMethods getBillingAccountPaymentMethods($id)

Get payment methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBillingAccountPaymentMethods($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingAccountPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BillingAccountPaymentMethods**](../Model/BillingAccountPaymentMethods.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAccountSetupIntent**
> \Swagger\Client\Model\BillingAccountSetupIntent getBillingAccountSetupIntent($id)

Get setup intent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getBillingAccountSetupIntent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingAccountSetupIntent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BillingAccountSetupIntent**](../Model/BillingAccountSetupIntent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAccountSpendDetails**
> \Swagger\Client\Model\GetBillingAccountSpendDetailsResponse getBillingAccountSpendDetails($billing_account_id, $start_time, $end_time)

Get spend details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$billing_account_id = "billing_account_id_example"; // string | 
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getBillingAccountSpendDetails($billing_account_id, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingAccountSpendDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_account_id** | **string**|  |
 **start_time** | **\DateTime**|  |
 **end_time** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\GetBillingAccountSpendDetailsResponse**](../Model/GetBillingAccountSpendDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingAccountStripeInvoices**
> \Swagger\Client\Model\GetBillingAccountStripeInvoicesResponse getBillingAccountStripeInvoices($id, $page_size, $starting_after, $status)

Get invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$page_size = 56; // int | 
$starting_after = "starting_after_example"; // string | 
$status = "status_example"; // string | 

try {
    $result = $apiInstance->getBillingAccountStripeInvoices($id, $page_size, $starting_after, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingAccountStripeInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **page_size** | **int**|  | [optional]
 **starting_after** | **string**|  | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\GetBillingAccountStripeInvoicesResponse**](../Model/GetBillingAccountStripeInvoicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBillingAccounts**
> \Swagger\Client\Model\ListBillingAccountsResponse listBillingAccounts($page_token, $page_size)

List billing accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_token = "page_token_example"; // string | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listBillingAccounts($page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listBillingAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_token** | **string**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListBillingAccountsResponse**](../Model/ListBillingAccountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOutstandingStripeInvoices**
> \Swagger\Client\Model\ListOutstandingStripeInvoicesResponse listOutstandingStripeInvoices()

Get outstanding invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listOutstandingStripeInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listOutstandingStripeInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListOutstandingStripeInvoicesResponse**](../Model/ListOutstandingStripeInvoicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeBillingAccountPaymentMethod**
> \Swagger\Client\Model\RemoveBillingAccountPaymentMethodResponse removeBillingAccountPaymentMethod($id, $payment_method_id)

Remove payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$payment_method_id = "payment_method_id_example"; // string | 

try {
    $result = $apiInstance->removeBillingAccountPaymentMethod($id, $payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->removeBillingAccountPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **payment_method_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\RemoveBillingAccountPaymentMethodResponse**](../Model/RemoveBillingAccountPaymentMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBillingAccountDefaultPaymentMethod**
> \Swagger\Client\Model\SetBillingAccountDefaultPaymentMethodResponse setBillingAccountDefaultPaymentMethod($id, $payment_method_id)

Set default payment method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$payment_method_id = "payment_method_id_example"; // string | 

try {
    $result = $apiInstance->setBillingAccountDefaultPaymentMethod($id, $payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->setBillingAccountDefaultPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **payment_method_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SetBillingAccountDefaultPaymentMethodResponse**](../Model/SetBillingAccountDefaultPaymentMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBillingAccount**
> \Swagger\Client\Model\BillingAccount updateBillingAccount($body, $billing_account_id)

Update billing account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\BillingaccountsBillingAccountIdBody(); // \Swagger\Client\Model\BillingaccountsBillingAccountIdBody | 
$billing_account_id = "billing_account_id_example"; // string | 

try {
    $result = $apiInstance->updateBillingAccount($body, $billing_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->updateBillingAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BillingaccountsBillingAccountIdBody**](../Model/BillingaccountsBillingAccountIdBody.md)|  |
 **billing_account_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BillingAccount**](../Model/BillingAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

