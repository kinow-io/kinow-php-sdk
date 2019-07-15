# GroupsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCustomerToGroup**](#attachCustomerToGroup) | **POST** /groups/{group_id}/customers | 
[**detachCustomerFromGroup**](#detachCustomerFromGroup) | **DELETE** /groups/{group_id}/customers/{customer_id} | 
[**getGroup**](#getGroup) | **GET** /groups/{group_id} | 
[**getGroups**](#getGroups) | **GET** /groups | 
[**getProductGroups**](#getProductGroups) | **GET** /products/{product_id}/groups | 


## **attachCustomerToGroup**
> attachCustomerToGroup($group_id, $customer_id)



Attach customer to the group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GroupsApi();
$group_id = 789; // int | Group ID to fetch
$customer_id = 789; // int | Customer ID to attach

try {
    $api_instance->attachCustomerToGroup($group_id, $customer_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->attachCustomerToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID to fetch |
 **customer_id** | **int**| Customer ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachCustomerFromGroup**
> detachCustomerFromGroup($group_id, $customer_id)



Detach customer from group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GroupsApi();
$group_id = 789; // int | Group ID to fetch
$customer_id = 789; // int | Customer ID to attach

try {
    $api_instance->detachCustomerFromGroup($group_id, $customer_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->detachCustomerFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID to fetch |
 **customer_id** | **int**| Customer ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGroup**
> \Kaemo\Client\Model\Group getGroup($group_id)



Get group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GroupsApi();
$group_id = 789; // int | Group ID to fetch

try {
    $result = $api_instance->getGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Group ID to fetch |

### Return type

[**\Kaemo\Client\Model\Group**](#Group)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGroups**
> \Kaemo\Client\Model\Groups getGroups($page, $per_page, $filters, $sort_by, $sort_direction)



Get group list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GroupsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      email[value]=string&email[operator]=strict&firstname[value]=string&firstname[operator]=contains      _______________        {      \"email\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"firstname\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getGroups($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      email[value]&#x3D;string&amp;email[operator]&#x3D;strict&amp;firstname[value]&#x3D;string&amp;firstname[operator]&#x3D;contains      _______________        {      \&quot;email\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;firstname\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Groups**](#Groups)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGroups**
> \Kaemo\Client\Model\Groups getProductGroups($product_id, $page, $per_page)



Get groups allowed to see this product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GroupsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductGroups($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getProductGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Groups**](#Groups)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

