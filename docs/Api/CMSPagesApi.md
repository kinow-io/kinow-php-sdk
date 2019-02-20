# CMSPagesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCMSPage**](#createCMSPage) | **POST** /cms-pages | 
[**getCMSPages**](#getCMSPages) | **GET** /cms-pages | 
[**updateCMSPage**](#updateCMSPage) | **PUT** /cms-pages/{cms_page_id} | 


## **createCMSPage**
> \Kaemo\Client\Model\CMSPage createCMSPage($body)



Create cms page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CMSPagesApi();
$body = new \Kaemo\Client\Model\CMSPage(); // \Kaemo\Client\Model\CMSPage | 

try {
    $result = $api_instance->createCMSPage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CMSPagesApi->createCMSPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\CMSPage**](#\Kaemo\Client\Model\CMSPage)|  |

### Return type

[**\Kaemo\Client\Model\CMSPage**](#CMSPage)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCMSPages**
> \Kaemo\Client\Model\CMSPageLists getCMSPages($page, $per_page, $filters, $sort_by, $sort_direction)



Get cms pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CMSPagesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCMSPages($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CMSPagesApi->getCMSPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\CMSPageLists**](#CMSPageLists)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCMSPage**
> \Kaemo\Client\Model\CMSPage updateCMSPage($cms_page_id, $body)



Update cms page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CMSPagesApi();
$cms_page_id = 789; // int | ID of the page to update
$body = new \Kaemo\Client\Model\CMSPage(); // \Kaemo\Client\Model\CMSPage | 

try {
    $result = $api_instance->updateCMSPage($cms_page_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CMSPagesApi->updateCMSPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cms_page_id** | **int**| ID of the page to update |
 **body** | [**\Kaemo\Client\Model\CMSPage**](#\Kaemo\Client\Model\CMSPage)|  |

### Return type

[**\Kaemo\Client\Model\CMSPage**](#CMSPage)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

