# CategoriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategory**](#createCategory) | **POST** /categories | 
[**deleteCategory**](#deleteCategory) | **DELETE** /categories/{category_id} | 
[**getAvailableCategory**](#getAvailableCategory) | **GET** /categories-accesses/{category_id} | 
[**getCategories**](#getCategories) | **GET** /categories | 
[**getCategoriesFromCategory**](#getCategoriesFromCategory) | **GET** /categories/{category_id}/categories | 
[**getCategory**](#getCategory) | **GET** /categories/{category_id} | 
[**getCategoryBanner**](#getCategoryBanner) | **GET** /categories/{category_id}/banner | 
[**getCategoryFeatures**](#getCategoryFeatures) | **GET** /categories/{category_id}/features | 
[**getCategoryProducts**](#getCategoryProducts) | **GET** /categories/{category_id}/products | 
[**getCategoryVideoPlayer**](#getCategoryVideoPlayer) | **GET** /categories/videos/{video_id}/player | 
[**getCategoryVideoSubtitles**](#getCategoryVideoSubtitles) | **GET** /categories/videos/{video_id}/subtitles | 
[**getProductCategories**](#getProductCategories) | **GET** /products/{product_id}/categories | 
[**getSubscriptionCategories**](#getSubscriptionCategories) | **GET** /subscriptions/{subscription_id}/categories | 
[**getVideosFromCategories**](#getVideosFromCategories) | **GET** /categories/videos | 
[**getVideosFromCategory**](#getVideosFromCategory) | **GET** /categories/{category_id}/videos | 
[**updateCategory**](#updateCategory) | **PUT** /categories/{category_id} | 
[**uploadCategoryCover**](#uploadCategoryCover) | **POST** /categories/{category_id}/cover | 


## **createCategory**
> \Kinow\Client\Model\Category createCategory($body)



Create new category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$body = new \Kinow\Client\Model\Category(); // \Kinow\Client\Model\Category | 

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
 **body** | [**\Kinow\Client\Model\Category**](#\Kinow\Client\Model\Category)|  |

### Return type

[**\Kinow\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteCategory**
> deleteCategory($category_id)



Delete Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch

try {
    $api_instance->deleteCategory($category_id);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getAvailableCategory**
> \Kinow\Client\Model\Category getAvailableCategory($category_id, $customer_id)



Get available category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
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

[**\Kinow\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategories**
> \Kinow\Client\Model\Categories getCategories($page, $per_page, $features, $filters, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```  features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict  _______________    {      \"*\": {          \"value\": \"string\",          \"operator\": \"strict\"      },      \"1\": {          \"value\": \"string\",          \"operator\": \"contains\"      }  } ```  Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).  To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```  name[value]=string&name[operator]=strict&description[value]=string&description[operator]=contains  _______________    {      \"name\": {          \"value\": \"string\",          \"operator\": \"strict\"      },      \"description\": {          \"value\": \"string\",          \"operator\": \"contains\"      }  } ```  Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
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
 **features** | **string**| &#x60;&#x60;&#x60;  features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict  _______________    {      \&quot;*\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;contains\&quot;      }  } &#x60;&#x60;&#x60;  Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).  To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;  name[value]&#x3D;string&amp;name[operator]&#x3D;strict&amp;description[value]&#x3D;string&amp;description[operator]&#x3D;contains  _______________    {      \&quot;name\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;description\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;contains\&quot;      }  } &#x60;&#x60;&#x60;  Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoriesFromCategory**
> \Kinow\Client\Model\Categories getCategoriesFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
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

[**\Kinow\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategory**
> \Kinow\Client\Model\Category getCategory($category_id)



Get category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
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

[**\Kinow\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryBanner**
> \Kinow\Client\Model\Image getCategoryBanner($category_id)



Get Category banner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
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

[**\Kinow\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryFeatures**
> \Kinow\Client\Model\Features getCategoryFeatures($category_id, $page, $per_page)



Get category features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
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

[**\Kinow\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryProducts**
> \Kinow\Client\Model\Products getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get category products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | Filter by user IP
$features = "features_example"; // string | ```      features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).

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
 **ip** | **string**| Filter by user IP | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;      features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryVideoPlayer**
> \Kinow\Client\Model\Player getCategoryVideoPlayer($video_id, $customer_id, $country_id)



Get video player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$video_id = 789; // int | Video ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$country_id = 789; // int | Country ID to use in video analytics

try {
    $result = $api_instance->getCategoryVideoPlayer($video_id, $customer_id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryVideoPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **customer_id** | **int**| Customer ID to fetch | [optional]
 **country_id** | **int**| Country ID to use in video analytics | [optional]

### Return type

[**\Kinow\Client\Model\Player**](#Player)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryVideoSubtitles**
> \Kinow\Client\Model\VideoSubtitlesResponse getCategoryVideoSubtitles($video_id, $page, $per_page)



Get subtitles of a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$video_id = 789; // int | Video ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCategoryVideoSubtitles($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryVideoSubtitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\VideoSubtitlesResponse**](#VideoSubtitlesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCategories**
> \Kinow\Client\Model\Categories getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get product categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
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
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCategories**
> \Kinow\Client\Model\Categories getSubscriptionCategories($subscription_id, $page, $per_page, $sort_by, $sort_direction)



Get categories list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
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

[**\Kinow\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromCategories**
> \Kinow\Client\Model\Videos getVideosFromCategories($page, $per_page, $sort_by, $sort_direction)



Get Videos attached to Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromCategories($page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getVideosFromCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromCategory**
> \Kinow\Client\Model\Videos getVideosFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction)



Get Videos attached to Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getVideosFromCategory: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Kinow\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCategory**
> \Kinow\Client\Model\Category updateCategory($category_id, $body)



Update category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$category_id = 789; // int | Category ID to update
$body = new \Kinow\Client\Model\Category(); // \Kinow\Client\Model\Category | 

try {
    $result = $api_instance->updateCategory($category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to update |
 **body** | [**\Kinow\Client\Model\Category**](#\Kinow\Client\Model\Category)|  |

### Return type

[**\Kinow\Client\Model\Category**](#Category)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadCategoryCover**
> \Kinow\Client\Model\Image uploadCategoryCover($category_id, $file, $hash, $hash_algorithm)



Upload Category cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CategoriesApi();
$category_id = 3.4; // float | Category ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadCategoryCover($category_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->uploadCategoryCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **float**| Category ID to fetch |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

