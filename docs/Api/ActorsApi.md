# ActorsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createActor**](#createActor) | **POST** /actors | 
[**deleteActor**](#deleteActor) | **DELETE** /actors/{actor_id} | 
[**getActor**](#getActor) | **GET** /actors/{actor_id} | 
[**getActors**](#getActors) | **GET** /actors | 
[**getProductActors**](#getProductActors) | **GET** /products/{product_id}/actors | 
[**updateActor**](#updateActor) | **PUT** /actors/{actor_id} | 


## **createActor**
> \Kaemo\Client\Model\Actor createActor($body)



Create new actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$body = new \Kaemo\Client\Model\Actor(); // \Kaemo\Client\Model\Actor | 

try {
    $result = $api_instance->createActor($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->createActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Actor**](#\Kaemo\Client\Model\Actor)|  |

### Return type

[**\Kaemo\Client\Model\Actor**](#Actor)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteActor**
> deleteActor($actor_id)



Delete actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$actor_id = 56; // int | 

try {
    $api_instance->deleteActor($actor_id);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->deleteActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActor**
> \Kaemo\Client\Model\Actor getActor($actor_id, $image_type)



Get actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$actor_id = 789; // int | Actor ID to fetch
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getActor($actor_id, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**| Actor ID to fetch |
 **image_type** | **string**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Actor**](#Actor)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActors**
> \Kaemo\Client\Model\Actors getActors($page, $per_page, $image_type)



Get actors list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getActors($page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActors: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\Actors**](#Actors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductActors**
> \Kaemo\Client\Model\Actors getProductActors($product_id, $page, $per_page, $image_type)



Get actors attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getProductActors($product_id, $page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getProductActors: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\Actors**](#Actors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateActor**
> updateActor($actor_id, $body)



Update actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$actor_id = 56; // int | 
$body = new \Kaemo\Client\Model\Actor(); // \Kaemo\Client\Model\Actor | 

try {
    $api_instance->updateActor($actor_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->updateActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**|  |
 **body** | [**\Kaemo\Client\Model\Actor**](#\Kaemo\Client\Model\Actor)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

