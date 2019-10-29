# ProductAccessesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductAccess**](#createProductAccess) | **POST** /product-accesses | 
[**deleteProductAccess**](#deleteProductAccess) | **DELETE** /product-accesses/{product_access_id} | 
[**getCustomerAccessesSubscriptions**](#getCustomerAccessesSubscriptions) | **GET** /customers/{customer_id}/accesses/subscriptions | 
[**getCustomerAccessesVideos**](#getCustomerAccessesVideos) | **GET** /customers/{customer_id}/accesses/videos | 
[**getProductAccess**](#getProductAccess) | **GET** /product-accesses/{product_access_id} | 
[**getProductAccesses**](#getProductAccesses) | **GET** /product-accesses | 
[**stopSubscription**](#stopSubscription) | **PUT** /customers/{customer_id}/unsubscribe | 
[**switchSubscription**](#switchSubscription) | **PUT** /product-accesses/{product_access_id}/switch | 
[**switchSubscriptionDelete**](#switchSubscriptionDelete) | **DELETE** /product-accesses/{product_access_id}/switch | 
[**switchSubscriptionPending**](#switchSubscriptionPending) | **GET** /product-accesses/{product_access_id}/switch | 
[**updateProductAccess**](#updateProductAccess) | **PUT** /product-accesses/{product_access_id} | 


## **createProductAccess**
> \Kaemo\Client\Model\ProductAccess createProductAccess($body)



Create new product access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$body = new \Kaemo\Client\Model\ProductAccess(); // \Kaemo\Client\Model\ProductAccess | 

try {
    $result = $api_instance->createProductAccess($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->createProductAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\ProductAccess**](#\Kaemo\Client\Model\ProductAccess)|  |

### Return type

[**\Kaemo\Client\Model\ProductAccess**](#ProductAccess)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteProductAccess**
> deleteProductAccess($product_access_id)



Delete product access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$product_access_id = 789; // int | Access ID to fetch

try {
    $api_instance->deleteProductAccess($product_access_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->deleteProductAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_access_id** | **int**| Access ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerAccessesSubscriptions**
> \Kaemo\Client\Model\SubscriptionAccesses getCustomerAccessesSubscriptions($customer_id, $page, $per_page, $filters)



Get customer accesses for subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$customer_id = 789; // int | Customer ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      type[value]=string&type[operator]=strict&cancel[value]=string&cancel[operator]=contains      _______________        {      \"type\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"cancel\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getCustomerAccessesSubscriptions($customer_id, $page, $per_page, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->getCustomerAccessesSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      type[value]&#x3D;string&amp;type[operator]&#x3D;strict&amp;cancel[value]&#x3D;string&amp;cancel[operator]&#x3D;contains      _______________        {      \&quot;type\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;cancel\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. | [optional]

### Return type

[**\Kaemo\Client\Model\SubscriptionAccesses**](#SubscriptionAccesses)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerAccessesVideos**
> \Kaemo\Client\Model\SubscriptionAccesses getCustomerAccessesVideos($customer_id, $page, $per_page)



Get customer access for videos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$customer_id = 789; // int | Customer ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerAccessesVideos($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->getCustomerAccessesVideos: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\SubscriptionAccesses**](#SubscriptionAccesses)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAccess**
> \Kaemo\Client\Model\ProductAccess getProductAccess($product_access_id)



Get product access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$product_access_id = 789; // int | Product access ID to fetch

try {
    $result = $api_instance->getProductAccess($product_access_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->getProductAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_access_id** | **int**| Product access ID to fetch |

### Return type

[**\Kaemo\Client\Model\ProductAccess**](#ProductAccess)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAccesses**
> \Kaemo\Client\Model\SubscriptionAccesses getProductAccesses($page, $per_page, $type, $date_add, $date_add_direction, $date_exp, $date_exp_direction)



Get product accesses list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$type = "type_example"; // string | Filter by access type, available values are: video, sub
$date_add = "date_add_example"; // string | Filter by creation date
$date_add_direction = "date_add_direction_example"; // string | Choose the direction for date_add parameter, default value is after ,available values are: before, equal, after
$date_exp = "date_exp_example"; // string | Filter by expiration date
$date_exp_direction = "date_exp_direction_example"; // string | Choose the direction for date_exp parameter, default value is after ,available values are: before, equal, after

try {
    $result = $api_instance->getProductAccesses($page, $per_page, $type, $date_add, $date_add_direction, $date_exp, $date_exp_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->getProductAccesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **type** | **string**| Filter by access type, available values are: video, sub | [optional]
 **date_add** | **string**| Filter by creation date | [optional]
 **date_add_direction** | **string**| Choose the direction for date_add parameter, default value is after ,available values are: before, equal, after | [optional]
 **date_exp** | **string**| Filter by expiration date | [optional]
 **date_exp_direction** | **string**| Choose the direction for date_exp parameter, default value is after ,available values are: before, equal, after | [optional]

### Return type

[**\Kaemo\Client\Model\SubscriptionAccesses**](#SubscriptionAccesses)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **stopSubscription**
> stopSubscription($customer_id, $product_access_id)



Unsubcribe an Access recurring payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$customer_id = 789; // int | Customer ID to unsubscribe
$product_access_id = "product_access_id_example"; // string | Product access ID to unsubscribe from

try {
    $api_instance->stopSubscription($customer_id, $product_access_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->stopSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to unsubscribe |
 **product_access_id** | **string**| Product access ID to unsubscribe from |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **switchSubscription**
> switchSubscription($product_access_id, $subscription_id)



Switch an Access to another Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$product_access_id = "product_access_id_example"; // string | Access ID to switch
$subscription_id = 789; // int | Subscription to switch to

try {
    $api_instance->switchSubscription($product_access_id, $subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->switchSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_access_id** | **string**| Access ID to switch |
 **subscription_id** | **int**| Subscription to switch to |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **switchSubscriptionDelete**
> switchSubscriptionDelete($product_access_id)



Delete Access pending switch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$product_access_id = 789; // int | Product access ID to fetch

try {
    $api_instance->switchSubscriptionDelete($product_access_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->switchSubscriptionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_access_id** | **int**| Product access ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **switchSubscriptionPending**
> \Kaemo\Client\Model\Subscription switchSubscriptionPending($product_access_id)



Return Access pending switch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$product_access_id = "product_access_id_example"; // string | Access ID to fetch

try {
    $result = $api_instance->switchSubscriptionPending($product_access_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->switchSubscriptionPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_access_id** | **string**| Access ID to fetch |

### Return type

[**\Kaemo\Client\Model\Subscription**](#Subscription)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateProductAccess**
> \Kaemo\Client\Model\ProductAccess updateProductAccess($product_access_id, $body)



Update product access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductAccessesApi();
$product_access_id = 789; // int | Product access ID to update
$body = new \Kaemo\Client\Model\ProductAccess(); // \Kaemo\Client\Model\ProductAccess | 

try {
    $result = $api_instance->updateProductAccess($product_access_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAccessesApi->updateProductAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_access_id** | **int**| Product access ID to update |
 **body** | [**\Kaemo\Client\Model\ProductAccess**](#\Kaemo\Client\Model\ProductAccess)|  |

### Return type

[**\Kaemo\Client\Model\ProductAccess**](#ProductAccess)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

