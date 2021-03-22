# CMSCategoriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCMSCategory**](#createCMSCategory) | **POST** /cms-categories | 
[**getCMSCategories**](#getCMSCategories) | **GET** /cms-categories | 
[**updateCMSCategory**](#updateCMSCategory) | **PUT** /cms-categories/{cms_category_id} | 


## **createCMSCategory**
> \Kinow\Client\Model\CMSCategory createCMSCategory($body)



Create cms category

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

$api_instance = new Kinow\Client\Api\CMSCategoriesApi();
$body = new \Kinow\Client\Model\CMSCategory(); // \Kinow\Client\Model\CMSCategory | 

try {
    $result = $api_instance->createCMSCategory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CMSCategoriesApi->createCMSCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\CMSCategory**](#\Kinow\Client\Model\CMSCategory)|  |

### Return type

[**\Kinow\Client\Model\CMSCategory**](#CMSCategory)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCMSCategories**
> \Kinow\Client\Model\CMSCategoriesLists getCMSCategories($page, $per_page, $filters, $sort_by, $sort_direction)



Get cms categories

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

$api_instance = new Kinow\Client\Api\CMSCategoriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```  name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt  _______________    {      \"name\": {          \"value\": \"string\",          \"operator\": \"contains\"      },      \"date_add\": {          \"value\": \"string\",          \"operator\": \"lt\"      }  } ```  Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCMSCategories($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CMSCategoriesApi->getCMSCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;  name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt  _______________    {      \&quot;name\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {          \&quot;value\&quot;: \&quot;string\&quot;,          \&quot;operator\&quot;: \&quot;lt\&quot;      }  } &#x60;&#x60;&#x60;  Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\CMSCategoriesLists**](#CMSCategoriesLists)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCMSCategory**
> \Kinow\Client\Model\CMSCategory updateCMSCategory($cms_category_id, $body)



Update cms category

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

$api_instance = new Kinow\Client\Api\CMSCategoriesApi();
$cms_category_id = 789; // int | CMS category ID to update
$body = new \Kinow\Client\Model\CMSCategory(); // \Kinow\Client\Model\CMSCategory | 

try {
    $result = $api_instance->updateCMSCategory($cms_category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CMSCategoriesApi->updateCMSCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cms_category_id** | **int**| CMS category ID to update |
 **body** | [**\Kinow\Client\Model\CMSCategory**](#\Kinow\Client\Model\CMSCategory)|  |

### Return type

[**\Kinow\Client\Model\CMSCategory**](#CMSCategory)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

