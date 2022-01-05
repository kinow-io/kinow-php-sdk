# PrepaymentsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerPrepaymentBalances**](#getCustomerPrepaymentBalances) | **GET** /customers/{customer_id}/prepayment-balance | 
[**getCustomerPrepaymentOperations**](#getCustomerPrepaymentOperations) | **GET** /customers/{customer_id}/prepayment-operations | 
[**getPrepaymentBonus**](#getPrepaymentBonus) | **GET** /prepayment/bonus/{prepayment_bonus_id} | 
[**getPrepaymentBonusAmount**](#getPrepaymentBonusAmount) | **POST** /prepayment/bonus/amount | 
[**getPrepaymentBonusList**](#getPrepaymentBonusList) | **GET** /prepayment/bonus | 
[**getPrepaymentOperation**](#getPrepaymentOperation) | **GET** /prepayment/operations/{prepayment_operation_id} | 
[**getPrepaymentOperations**](#getPrepaymentOperations) | **GET** /prepayment/operations | 
[**getPrepaymentOperationsAmount**](#getPrepaymentOperationsAmount) | **POST** /prepayment/operations/amount | 
[**getPrepaymentRecharge**](#getPrepaymentRecharge) | **GET** /prepayment/recharges/{prepayment_recharge_id} | 
[**getPrepaymentRecharges**](#getPrepaymentRecharges) | **GET** /prepayment/recharges | 


## **getCustomerPrepaymentBalances**
> \Kinow\Client\Model\PrepaymentBalanceListResponse getCustomerPrepaymentBalances($customer_id, $currency_id)



Get PrepaymentBalances list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$customer_id = 789; // int | Customer ID to fetch
$currency_id = 56; // int | Currency ID to format amount

try {
    $result = $api_instance->getCustomerPrepaymentBalances($customer_id, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getCustomerPrepaymentBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **currency_id** | **int**| Currency ID to format amount | [optional]

### Return type

[**\Kinow\Client\Model\PrepaymentBalanceListResponse**](#PrepaymentBalanceListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerPrepaymentOperations**
> \Kinow\Client\Model\PrepaymentOperationListResponse getCustomerPrepaymentOperations($customer_id, $type, $page, $per_page)



Get PrepaymentOperations list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$customer_id = 789; // int | Customer ID to fetch
$type = "type_example"; // string | 
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerPrepaymentOperations($customer_id, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getCustomerPrepaymentOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **type** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\PrepaymentOperationListResponse**](#PrepaymentOperationListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentBonus**
> \Kinow\Client\Model\PrepaymentBonusResponse getPrepaymentBonus($prepayment_bonus_id)



Get PrepaymentBonus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$prepayment_bonus_id = 789; // int | PrepaymentBonus ID to fetch

try {
    $result = $api_instance->getPrepaymentBonus($prepayment_bonus_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentBonus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_bonus_id** | **int**| PrepaymentBonus ID to fetch |

### Return type

[**\Kinow\Client\Model\PrepaymentBonusResponse**](#PrepaymentBonusResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentBonusAmount**
> \Kinow\Client\Model\PrepaymentBonusAmount[] getPrepaymentBonusAmount($body)



Get prices for multiple PrepaymentBonus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$body = new \Kinow\Client\Model\PrepaymentBonusIDList(); // \Kinow\Client\Model\PrepaymentBonusIDList | List of PrepaymentBonus IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getPrepaymentBonusAmount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentBonusAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\PrepaymentBonusIDList**](#\Kinow\Client\Model\PrepaymentBonusIDList)| List of PrepaymentBonus IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\PrepaymentBonusAmount[]**](#PrepaymentBonusAmount)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentBonusList**
> \Kinow\Client\Model\PrepaymentBonusListResponse getPrepaymentBonusList($page, $per_page)



Get PrepaymentBonus list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getPrepaymentBonusList($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentBonusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\PrepaymentBonusListResponse**](#PrepaymentBonusListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentOperation**
> \Kinow\Client\Model\PrepaymentOperationResponse getPrepaymentOperation($prepayment_operation_id)



Get PrepaymentOperation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$prepayment_operation_id = 789; // int | PrepaymentOperation ID to fetch

try {
    $result = $api_instance->getPrepaymentOperation($prepayment_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_operation_id** | **int**| PrepaymentOperation ID to fetch |

### Return type

[**\Kinow\Client\Model\PrepaymentOperationResponse**](#PrepaymentOperationResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentOperations**
> \Kinow\Client\Model\PrepaymentOperationListResponse getPrepaymentOperations($type, $page, $per_page)



Get PrepaymentOperations list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$type = "type_example"; // string | 
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getPrepaymentOperations($type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\PrepaymentOperationListResponse**](#PrepaymentOperationListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentOperationsAmount**
> \Kinow\Client\Model\PrepaymentOperationAmount[] getPrepaymentOperationsAmount($body)



Get prices for multiple PrepaymentOperations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$body = new \Kinow\Client\Model\PrepaymentOperationIDList(); // \Kinow\Client\Model\PrepaymentOperationIDList | List of PrepaymentOperation IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getPrepaymentOperationsAmount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentOperationsAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\PrepaymentOperationIDList**](#\Kinow\Client\Model\PrepaymentOperationIDList)| List of PrepaymentOperation IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\PrepaymentOperationAmount[]**](#PrepaymentOperationAmount)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentRecharge**
> \Kinow\Client\Model\PrepaymentRechargeResponse getPrepaymentRecharge($prepayment_recharge_id)



Get PrepaymentRecharge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$prepayment_recharge_id = 789; // int | PrepaymentRecharge ID to fetch

try {
    $result = $api_instance->getPrepaymentRecharge($prepayment_recharge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentRecharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_recharge_id** | **int**| PrepaymentRecharge ID to fetch |

### Return type

[**\Kinow\Client\Model\PrepaymentRechargeResponse**](#PrepaymentRechargeResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentRecharges**
> \Kinow\Client\Model\PrepaymentRechargeListResponse getPrepaymentRecharges($page, $per_page)



Get PrepaymentRecharges list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\PrepaymentsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getPrepaymentRecharges($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentRecharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\PrepaymentRechargeListResponse**](#PrepaymentRechargeListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

