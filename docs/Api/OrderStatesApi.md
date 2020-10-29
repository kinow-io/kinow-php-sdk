# OrderStatesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderState**](#getOrderState) | **GET** /order-states/{order_state_id} | 
[**getOrderStates**](#getOrderStates) | **GET** /order-states | 


## **getOrderState**
> \Kinow\Client\Model\OrderState getOrderState($order_state_id)



Get order state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrderStatesApi();
$order_state_id = 789; // int | Order state ID to fetch

try {
    $result = $api_instance->getOrderState($order_state_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatesApi->getOrderState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_state_id** | **int**| Order state ID to fetch |

### Return type

[**\Kinow\Client\Model\OrderState**](#OrderState)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrderStates**
> \Kinow\Client\Model\OrderStates getOrderStates($page, $per_page)



Get order state list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrderStatesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getOrderStates($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatesApi->getOrderStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\OrderStates**](#OrderStates)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

