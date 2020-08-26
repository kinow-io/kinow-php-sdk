# OrdersApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerOrders**](#getCustomerOrders) | **GET** /customers/{customer_id}/orders | 
[**getOrder**](#getOrder) | **GET** /orders/{order_id} | 
[**getOrderHistories**](#getOrderHistories) | **GET** /orders/{order_id}/histories | 
[**getOrderInvoice**](#getOrderInvoice) | **GET** /orders/{order_id}/invoice | 
[**getOrders**](#getOrders) | **GET** /orders | 


## **getCustomerOrders**
> \Kinow\Client\Model\Orders getCustomerOrders($customer_id, $page, $per_page)



Get customer orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrdersApi();
$customer_id = 789; // int | Customer ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerOrders($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getCustomerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\Orders**](#Orders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrder**
> \Kinow\Client\Model\Order getOrder($order_id)



Get order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrdersApi();
$order_id = 789; // int | Order ID to fetch

try {
    $result = $api_instance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID to fetch |

### Return type

[**\Kinow\Client\Model\Order**](#Order)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrderHistories**
> \Kinow\Client\Model\OrderHistories getOrderHistories($order_id, $page, $per_page)



Get order histories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrdersApi();
$order_id = 789; // int | Order ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getOrderHistories($order_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderHistories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\OrderHistories**](#OrderHistories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrderInvoice**
> string getOrderInvoice($order_id, $to_blob)



Get order invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrdersApi();
$order_id = 789; // int | Order ID to fetch
$to_blob = true; // bool | Get PDF content in blob

try {
    $result = $api_instance->getOrderInvoice($order_id, $to_blob);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID to fetch |
 **to_blob** | **bool**| Get PDF content in blob | [optional] [default to true]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrders**
> \Kinow\Client\Model\Orders getOrders($page, $per_page, $filters, $sort_by, $sort_direction)



Get order list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\OrdersApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | email[value]=string&email[operator]=strict&firstname[value]=string&firstname[operator]=contains    ```  {      \"email\": {          \"value\": \"string\",          \"operator\": \"strict\"      },      \"firstname\": {          \"value\": \"string\",          \"operator\": \"contains\"      },      \"invoice_date\": {          \"value\": [\"Y-m-d\", \"Y-m-d\"],          \"operator\": \"between\"      }  }```  Operator can be strict, contains, between, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getOrders($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| email[value]&#x3D;string&amp;email[operator]&#x3D;strict&amp;firstname[value]&#x3D;string&amp;firstname[operator]&#x3D;contains    &#x60;&#x60;&#x60;  {      \&quot;email\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;firstname\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;invoice_date\&quot;: {          \&quot;value\&quot;: [\&quot;Y-m-d\&quot;, \&quot;Y-m-d\&quot;],          \&quot;operator\&quot;: \&quot;between\&quot;      }  }&#x60;&#x60;&#x60;  Operator can be strict, contains, between, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Orders**](#Orders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

