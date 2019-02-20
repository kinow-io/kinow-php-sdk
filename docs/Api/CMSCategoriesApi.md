# CMSCategoriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCMSCategory**](#createCMSCategory) | **POST** /cms-categories | 
[**getCMSCategories**](#getCMSCategories) | **GET** /cms-categories | 
[**updateCMSCategory**](#updateCMSCategory) | **PUT** /cms-categories/{cms_category_id} | 


## **createCMSCategory**
> \Kaemo\Client\Model\CMSCategory createCMSCategory($body)



Create cms category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CMSCategoriesApi();
$body = new \Kaemo\Client\Model\CMSCategory(); // \Kaemo\Client\Model\CMSCategory | 

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
 **body** | [**\Kaemo\Client\Model\CMSCategory**](#\Kaemo\Client\Model\CMSCategory)|  |

### Return type

[**\Kaemo\Client\Model\CMSCategory**](#CMSCategory)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCMSCategories**
> \Kaemo\Client\Model\CMSCategoriesLists getCMSCategories($page, $per_page, $filters, $sort_by, $sort_direction)



Get cms categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CMSCategoriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ``` filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt _______________  {     \"name\": {         \"value\": \"string\",         \"operator\": \"contains\"     },     \"date_add\": {         \"value\": \"string\",         \"operator\": \"lt\"     } } ``` Operator can be strict, contains, gt or lt.
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
 **filters** | **string**| &#x60;&#x60;&#x60; filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt _______________  {     \&quot;name\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;lt\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\CMSCategoriesLists**](#CMSCategoriesLists)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCMSCategory**
> \Kaemo\Client\Model\CMSCategory updateCMSCategory($cms_category_id, $body)



Update cms category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CMSCategoriesApi();
$cms_category_id = 789; // int | ID of the CMS category to update
$body = new \Kaemo\Client\Model\CMSCategory(); // \Kaemo\Client\Model\CMSCategory | 

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
 **cms_category_id** | **int**| ID of the CMS category to update |
 **body** | [**\Kaemo\Client\Model\CMSCategory**](#\Kaemo\Client\Model\CMSCategory)|  |

### Return type

[**\Kaemo\Client\Model\CMSCategory**](#CMSCategory)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

