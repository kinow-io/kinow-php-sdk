# AccessesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableCategories**](#getAvailableCategories) | **GET** /categories-accesses | 
[**getAvailableCategory**](#getAvailableCategory) | **GET** /categories-accesses/{category_id} | 
[**getCustomerHasAccessToProduct**](#getCustomerHasAccessToProduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
[**getCustomerHasAccessToVideo**](#getCustomerHasAccessToVideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
[**getProductAvailability**](#getProductAvailability) | **GET** /products/{product_id}/access | 


## **getAvailableCategories**
> \Kaemo\Client\Model\Categories getAvailableCategories($customer_id, $page, $per_page)



Get available categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AccessesApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getAvailableCategories($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessesApi->getAvailableCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getAvailableCategory**
> \Kaemo\Client\Model\Category getAvailableCategory($category_id, $customer_id)



Get available category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AccessesApi();
$category_id = 789; // int | ID of the category to fetch
$customer_id = 789; // int | 

try {
    $result = $api_instance->getAvailableCategory($category_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessesApi->getAvailableCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| ID of the category to fetch |
 **customer_id** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToProduct**
> getCustomerHasAccessToProduct($customer_id, $product_id)



Get customer access to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AccessesApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | ID of the product to fetch

try {
    $api_instance->getCustomerHasAccessToProduct($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessesApi->getCustomerHasAccessToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **product_id** | **int**| ID of the product to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToVideo**
> getCustomerHasAccessToVideo($customer_id, $video_id)



Get customer access to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AccessesApi();
$customer_id = 789; // int | ID of the customer to fetch
$video_id = 789; // int | ID of the video to fetch

try {
    $api_instance->getCustomerHasAccessToVideo($customer_id, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessesApi->getCustomerHasAccessToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **video_id** | **int**| ID of the video to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAvailability**
> getProductAvailability($product_id)



Get availability of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AccessesApi();
$product_id = 789; // int | ID of the product to fetch

try {
    $api_instance->getProductAvailability($product_id);
} catch (Exception $e) {
    echo 'Exception when calling AccessesApi->getProductAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

