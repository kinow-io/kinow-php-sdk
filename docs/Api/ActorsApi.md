# ActorsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachProductToActor**](#attachProductToActor) | **POST** /products/{product_id}/actors | 
[**createActor**](#createActor) | **POST** /actors | 
[**deleteActor**](#deleteActor) | **DELETE** /actors/{actor_id} | 
[**getActor**](#getActor) | **GET** /actors/{actor_id} | 
[**getActorProducts**](#getActorProducts) | **GET** /actors/{actor_id}/products | 
[**getActorProductsRole**](#getActorProductsRole) | **GET** /actors/{actor_id}/products-role | 
[**getActors**](#getActors) | **GET** /actors | 
[**getProductActors**](#getProductActors) | **GET** /products/{product_id}/actors | 
[**getProductActorsRole**](#getProductActorsRole) | **GET** /products/{product_id}/actors-role | 
[**updateActor**](#updateActor) | **PUT** /actors/{actor_id} | 


## **attachProductToActor**
> attachProductToActor($product_id, $actor_id)



Attach product to actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$product_id = 789; // int | Product ID to fetch
$actor_id = 789; // int | Actor ID to attach

try {
    $api_instance->attachProductToActor($product_id, $actor_id);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->attachProductToActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **actor_id** | **int**| Actor ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createActor**
> \Kaemo\Client\Model\Actor createActor($body)



Create new actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$body = new \Kaemo\Client\Model\Actor1(); // \Kaemo\Client\Model\Actor1 | Actor settings

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
 **body** | [**\Kaemo\Client\Model\Actor1**](#\Kaemo\Client\Model\Actor1)| Actor settings |

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

## **getActorProducts**
> \Kaemo\Client\Model\Products getActorProducts($actor_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get actor products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$actor_id = 789; // int | Actor ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip
$features = "features_example"; // string | ```      features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be strict, contains, gt or lt.      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getActorProducts($actor_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActorProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**| Actor ID to fetch |
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

## **getActorProductsRole**
> \Kaemo\Client\Model\Products getActorProductsRole($actor_id, $page, $per_page)



Get Products linked to Actor with their role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$actor_id = 789; // int | Actor ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getActorProductsRole($actor_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActorProductsRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**| Actor ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

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

## **getProductActorsRole**
> \Kaemo\Client\Model\Actors getProductActorsRole($product_id, $page, $per_page)



Get Actors attached to Product with their role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductActorsRole($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getProductActorsRole: ', $e->getMessage(), PHP_EOL;
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
$body = new \Kaemo\Client\Model\Actor2(); // \Kaemo\Client\Model\Actor2 | Actor settings

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
 **body** | [**\Kaemo\Client\Model\Actor2**](#\Kaemo\Client\Model\Actor2)| Actor settings |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

