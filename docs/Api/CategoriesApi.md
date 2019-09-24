# CategoriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategory**](#createCategory) | **POST** /categories | 
[**getAvailableCategory**](#getAvailableCategory) | **GET** /categories-accesses/{category_id} | 
[**getCategories**](#getCategories) | **GET** /categories | 
[**getCategoriesFromCategory**](#getCategoriesFromCategory) | **GET** /categories/{category_id}/categories | 
[**getCategory**](#getCategory) | **GET** /categories/{category_id} | 
[**getCategoryBanner**](#getCategoryBanner) | **GET** /categories/{category_id}/banner | 
[**getCategoryFeatures**](#getCategoryFeatures) | **GET** /categories/{category_id}/features | 
[**getCategoryProducts**](#getCategoryProducts) | **GET** /categories/{category_id}/products | 
[**getProductCategories**](#getProductCategories) | **GET** /products/{product_id}/categories | 
[**getSubscriptionCategories**](#getSubscriptionCategories) | **GET** /subscriptions/{subscription_id}/categories | 


## **createCategory**
> \Kaemo\Client\Model\Category createCategory($body)



Create new category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$body = new \Kaemo\Client\Model\Category(); // \Kaemo\Client\Model\Category | 

try {
    $result = $api_instance->createCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Category**](#\Kaemo\Client\Model\Category)|  |

### Return type

[**\Kaemo\Client\Model\Category**](#Category)

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

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch
$customer_id = 789; // int | 

try {
    $result = $api_instance->getAvailableCategory($category_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getAvailableCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **customer_id** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategories**
> \Kaemo\Client\Model\Categories getCategories($page, $per_page, $features, $filters, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```  features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict  _______________    {      \"*\": {          \"value\": \"string\",          \"operator\": \"strict\"      },      \"1\": {          \"value\": \"string\",          \"operator\": \"contains\"      }  } ```  Operator can be strict, contains, gt or lt.  To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```  name[value]=string&name[operator]=strict&description[value]=string&description[operator]=contains  _______________    {      \"name\": {          \"value\": \"string\",          \"operator\": \"strict\"      },      \"description\": {          \"value\": \"string\",          \"operator\": \"contains\"      }  } ```  Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCategories($page, $per_page, $features, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;  features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict  _______________    {      \&quot;*\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;contains\&quot;      }  } &#x60;&#x60;&#x60;  Operator can be strict, contains, gt or lt.  To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;  name[value]&#x3D;string&amp;name[operator]&#x3D;strict&amp;description[value]&#x3D;string&amp;description[operator]&#x3D;contains  _______________    {      \&quot;name\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;description\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;contains\&quot;      }  } &#x60;&#x60;&#x60;  Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoriesFromCategory**
> \Kaemo\Client\Model\Categories getCategoriesFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$category_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCategoriesFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesFromCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategory**
> \Kaemo\Client\Model\Category getCategory($category_id)



Get category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch

try {
    $result = $api_instance->getCategory($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |

### Return type

[**\Kaemo\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryBanner**
> \Kaemo\Client\Model\Image getCategoryBanner($category_id)



Get banner of a category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch

try {
    $result = $api_instance->getCategoryBanner($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryFeatures**
> \Kaemo\Client\Model\Features getCategoryFeatures($category_id, $page, $per_page)



Get category features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCategoryFeatures($category_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryProducts**
> \Kaemo\Client\Model\Products getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get category products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip
$features = "features_example"; // string | ```      features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be strict, contains, gt or lt.      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| filter by customer ip | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;      features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be strict, contains, gt or lt.      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be strict, contains, gt or lt. | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCategories**
> \Kaemo\Client\Model\Categories getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get product categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getProductCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCategories**
> \Kaemo\Client\Model\Categories getSubscriptionCategories($subscription_id, $page, $per_page, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoriesApi();
$subscription_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getSubscriptionCategories($subscription_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getSubscriptionCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

