# BlogCategoriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlogCategories**](#getBlogCategories) | **GET** /blog-categories | 
[**getBlogCategory**](#getBlogCategory) | **GET** /blog-categories/{blog_category_id} | 


## **getBlogCategories**
> \Kaemo\Client\Model\BlogCategoryLists getBlogCategories($page, $per_page, $filters, $sort_by, $sort_direction)



Get blog categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BlogCategoriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getBlogCategories($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogCategoriesApi->getBlogCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\BlogCategoryLists**](#BlogCategoryLists)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getBlogCategory**
> \Kaemo\Client\Model\BlogCategory getBlogCategory($blog_category_id)



Get blog category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BlogCategoriesApi();
$blog_category_id = 789; // int | 

try {
    $result = $api_instance->getBlogCategory($blog_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlogCategoriesApi->getBlogCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blog_category_id** | **int**|  |

### Return type

[**\Kaemo\Client\Model\BlogCategory**](#BlogCategory)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

