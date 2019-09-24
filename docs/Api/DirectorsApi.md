# DirectorsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDirector**](#createDirector) | **POST** /directors | 
[**deleteDirector**](#deleteDirector) | **DELETE** /directors/{director_id} | 
[**getDirector**](#getDirector) | **GET** /directors/{director_id} | 
[**getDirectors**](#getDirectors) | **GET** /directors | 
[**getProductDirectors**](#getProductDirectors) | **GET** /products/{product_id}/directors | 
[**updateDirector**](#updateDirector) | **PUT** /directors/{director_id} | 


## **createDirector**
> \Kaemo\Client\Model\Director createDirector($body)



Create new director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$body = new \Kaemo\Client\Model\Director(); // \Kaemo\Client\Model\Director | 

try {
    $result = $api_instance->createDirector($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->createDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Director**](#\Kaemo\Client\Model\Director)|  |

### Return type

[**\Kaemo\Client\Model\Director**](#Director)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteDirector**
> deleteDirector($director_id)



Delete director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 56; // int | 

try {
    $api_instance->deleteDirector($director_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->deleteDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirector**
> \Kaemo\Client\Model\Director getDirector($director_id, $image_type)



Get director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 789; // int | Director ID to fetch
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getDirector($director_id, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| Director ID to fetch |
 **image_type** | **string**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Director**](#Director)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectors**
> \Kaemo\Client\Model\Director1 getDirectors($page, $per_page, $image_type)



Get directors list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getDirectors($page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **image_type** | **string**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Director1**](#Director1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductDirectors**
> \Kaemo\Client\Model\Director1 getProductDirectors($product_id, $page, $per_page, $image_type)



Get directors of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getProductDirectors($product_id, $page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getProductDirectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **image_type** | **string**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Director1**](#Director1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateDirector**
> updateDirector($director_id, $body)



Update director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 56; // int | 
$body = new \Kaemo\Client\Model\Director(); // \Kaemo\Client\Model\Director | 

try {
    $api_instance->updateDirector($director_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->updateDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**|  |
 **body** | [**\Kaemo\Client\Model\Director**](#\Kaemo\Client\Model\Director)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

