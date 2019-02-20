# BookmarksApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachBookmarkToCustomer**](#attachBookmarkToCustomer) | **POST** /customers/{customer_id}/bookmarks | 
[**detachBookmarkFromCustomer**](#detachBookmarkFromCustomer) | **DELETE** /customers/{customer_id}/bookmarks/{product_id} | 
[**getCustomerBookmarks**](#getCustomerBookmarks) | **GET** /customers/{customer_id}/bookmarks | 


## **attachBookmarkToCustomer**
> attachBookmarkToCustomer($customer_id, $product_id)



Attach bookmark to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BookmarksApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | 

try {
    $api_instance->attachBookmarkToCustomer($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->attachBookmarkToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **product_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachBookmarkFromCustomer**
> detachBookmarkFromCustomer($customer_id, $product_id)



Detach bookmark from customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BookmarksApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | 

try {
    $api_instance->detachBookmarkFromCustomer($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->detachBookmarkFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **product_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerBookmarks**
> \Kaemo\Client\Model\Products getCustomerBookmarks($customer_id, $page, $per_page, $sort_by, $sort_direction)



Get customer bookmarks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BookmarksApi();
$customer_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCustomerBookmarks($customer_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCustomerBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

