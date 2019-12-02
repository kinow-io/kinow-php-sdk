# PrepaymentsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerPrepaymentBalances**](#getCustomerPrepaymentBalances) | **GET** /customers/{customer_id}/prepayment-balance | 
[**getCustomerPrepaymentOperations**](#getCustomerPrepaymentOperations) | **GET** /customers/{customer_id}/prepayment-operations | 
[**getPrepaymentBonus**](#getPrepaymentBonus) | **GET** /prepayment/bonus | 
[**getPrepaymentBonus_0**](#getPrepaymentBonus_0) | **GET** /prepayment/bonus/{prepayment_bonus_id} | 
[**getPrepaymentOperation**](#getPrepaymentOperation) | **GET** /prepayment/operations/{prepayment_operation_id} | 
[**getPrepaymentOperations**](#getPrepaymentOperations) | **GET** /prepayment/operations | 
[**getPrepaymentRecharge**](#getPrepaymentRecharge) | **GET** /prepayment/recharges/{prepayment_recharge_id} | 
[**getPrepaymentRecharges**](#getPrepaymentRecharges) | **GET** /prepayment/recharges | 


## **getCustomerPrepaymentBalances**
> \Kaemo\Client\Model\PrepaymentBalance[] getCustomerPrepaymentBalances($customer_id)



Get PrepaymentBalances list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
$customer_id = 789; // int | Customer ID to fetch

try {
    $result = $api_instance->getCustomerPrepaymentBalances($customer_id);
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

### Return type

[**\Kaemo\Client\Model\PrepaymentBalance[]**](#PrepaymentBalance)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerPrepaymentOperations**
> \Kaemo\Client\Model\PrepaymentOperations getCustomerPrepaymentOperations($customer_id, $type, $page, $per_page)



Get PrepaymentOperations list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
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

[**\Kaemo\Client\Model\PrepaymentOperations**](#PrepaymentOperations)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentBonus**
> \Kaemo\Client\Model\PrepaymentBonus1 getPrepaymentBonus($page, $per_page)



Get PrepaymentBonus list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getPrepaymentBonus($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentBonus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\PrepaymentBonus1**](#PrepaymentBonus1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentBonus_0**
> \Kaemo\Client\Model\PrepaymentBonus getPrepaymentBonus_0($prepayment_bonus_id)



Get PrepaymentBonus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
$prepayment_bonus_id = 789; // int | PrepaymentBonus ID to fetch

try {
    $result = $api_instance->getPrepaymentBonus_0($prepayment_bonus_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentsApi->getPrepaymentBonus_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepayment_bonus_id** | **int**| PrepaymentBonus ID to fetch |

### Return type

[**\Kaemo\Client\Model\PrepaymentBonus**](#PrepaymentBonus)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentOperation**
> \Kaemo\Client\Model\PrepaymentOperation getPrepaymentOperation($prepayment_operation_id)



Get PrepaymentOperation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
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

[**\Kaemo\Client\Model\PrepaymentOperation**](#PrepaymentOperation)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentOperations**
> \Kaemo\Client\Model\PrepaymentOperations getPrepaymentOperations($type, $page, $per_page)



Get PrepaymentOperations list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
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

[**\Kaemo\Client\Model\PrepaymentOperations**](#PrepaymentOperations)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentRecharge**
> \Kaemo\Client\Model\PrepaymentRecharge getPrepaymentRecharge($prepayment_recharge_id)



Get PrepaymentRecharge

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
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

[**\Kaemo\Client\Model\PrepaymentRecharge**](#PrepaymentRecharge)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrepaymentRecharges**
> \Kaemo\Client\Model\PrepaymentRecharges getPrepaymentRecharges($page, $per_page)



Get PrepaymentRecharges list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PrepaymentsApi();
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

[**\Kaemo\Client\Model\PrepaymentRecharges**](#PrepaymentRecharges)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

