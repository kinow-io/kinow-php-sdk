# AttributesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductAttribute**](#createProductAttribute) | **POST** /attributes | 
[**deleteAttribute**](#deleteAttribute) | **DELETE** /attributes/{attribute_id} | 
[**getProductAttributes**](#getProductAttributes) | **GET** /products/{product_id}/attributes | 


## **createProductAttribute**
> \Kaemo\Client\Model\ProductAttribute createProductAttribute($body)



Create new product attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AttributesApi();
$body = new \Kaemo\Client\Model\ProductAttributeCreateRequest(); // \Kaemo\Client\Model\ProductAttributeCreateRequest | 

try {
    $result = $api_instance->createProductAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->createProductAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\ProductAttributeCreateRequest**](#\Kaemo\Client\Model\ProductAttributeCreateRequest)|  |

### Return type

[**\Kaemo\Client\Model\ProductAttribute**](#ProductAttribute)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteAttribute**
> deleteAttribute($attribute_id)



Delete Attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AttributesApi();
$attribute_id = 789; // int | Attribute ID to delete

try {
    $api_instance->deleteAttribute($attribute_id);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| Attribute ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAttributes**
> \Kaemo\Client\Model\ProductAttributesResponse getProductAttributes($product_id, $page, $per_page)



Get Product attributes. Mandatory to add TVOD Product in cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AttributesApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductAttributes($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getProductAttributes: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\ProductAttributesResponse**](#ProductAttributesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

