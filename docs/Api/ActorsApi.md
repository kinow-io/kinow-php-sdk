# ActorsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachProductToActor**](#attachProductToActor) | **POST** /products/{product_id}/actors | 
[**createActor**](#createActor) | **POST** /actors | 
[**deleteActor**](#deleteActor) | **DELETE** /actors/{actor_id} | 
[**getActor**](#getActor) | **GET** /actors/{actor_id} | 
[**getActorCoverImage**](#getActorCoverImage) | **GET** /actors/{actor_id}/cover | 
[**getActorProducts**](#getActorProducts) | **GET** /actors/{actor_id}/products | 
[**getActorProductsRole**](#getActorProductsRole) | **GET** /actors/{actor_id}/products-role | 
[**getActors**](#getActors) | **GET** /actors | 
[**getProductActors**](#getProductActors) | **GET** /products/{product_id}/actors | 
[**getProductActorsRole**](#getProductActorsRole) | **GET** /products/{product_id}/actors-role | 
[**updateActor**](#updateActor) | **PUT** /actors/{actor_id} | 
[**uploadActorCover**](#uploadActorCover) | **POST** /actors/{actor_id}/cover | 


## **attachProductToActor**
> attachProductToActor($product_id, $actor_id)



Attach product to actor

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

$api_instance = new Kinow\Client\Api\ActorsApi();
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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createActor**
> \Kinow\Client\Model\Actor createActor($body)



Create new actor

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

$api_instance = new Kinow\Client\Api\ActorsApi();
$body = new \Kinow\Client\Model\Actor1(); // \Kinow\Client\Model\Actor1 | Actor settings

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
 **body** | [**\Kinow\Client\Model\Actor1**](#\Kinow\Client\Model\Actor1)| Actor settings |

### Return type

[**\Kinow\Client\Model\Actor**](#Actor)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\ActorsApi();
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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActor**
> \Kinow\Client\Model\Actor getActor($actor_id)



Get actor

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

$api_instance = new Kinow\Client\Api\ActorsApi();
$actor_id = 789; // int | Actor ID to fetch

try {
    $result = $api_instance->getActor($actor_id);
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

### Return type

[**\Kinow\Client\Model\Actor**](#Actor)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActorCoverImage**
> \Kinow\Client\Model\Image getActorCoverImage($actor_id)



Get cover image of an actor

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

$api_instance = new Kinow\Client\Api\ActorsApi();
$actor_id = 789; // int | Actor ID to fetch

try {
    $result = $api_instance->getActorCoverImage($actor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActorCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**| Actor ID to fetch |

### Return type

[**\Kinow\Client\Model\Image**](#Image)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActorProducts**
> \Kinow\Client\Model\Products getActorProducts($actor_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get actor products

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

$api_instance = new Kinow\Client\Api\ActorsApi();
$actor_id = 789; // int | Actor ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | Filter by user IP
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).

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
 **ip** | **string**| Filter by user IP | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActorProductsRole**
> \Kinow\Client\Model\Products getActorProductsRole($actor_id, $page, $per_page)



Get Products linked to Actor with their role

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

$api_instance = new Kinow\Client\Api\ActorsApi();
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

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActors**
> \Kinow\Client\Model\Actors getActors($page, $per_page)



Get actors list

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

$api_instance = new Kinow\Client\Api\ActorsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getActors($page, $per_page);
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

### Return type

[**\Kinow\Client\Model\Actors**](#Actors)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductActors**
> \Kinow\Client\Model\Actors getProductActors($product_id, $page, $per_page, $image_type)



Get actors attached to product

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

$api_instance = new Kinow\Client\Api\ActorsApi();
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

[**\Kinow\Client\Model\Actors**](#Actors)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductActorsRole**
> \Kinow\Client\Model\Actors getProductActorsRole($product_id, $page, $per_page)



Get Actors attached to Product with their role

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

$api_instance = new Kinow\Client\Api\ActorsApi();
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

[**\Kinow\Client\Model\Actors**](#Actors)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\ActorsApi();
$actor_id = 56; // int | 
$body = new \Kinow\Client\Model\Actor2(); // \Kinow\Client\Model\Actor2 | Actor settings

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
 **body** | [**\Kinow\Client\Model\Actor2**](#\Kinow\Client\Model\Actor2)| Actor settings |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadActorCover**
> \Kinow\Client\Model\Image uploadActorCover($actor_id, $file, $hash, $hash_algorithm)



Upload actor cover

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

$api_instance = new Kinow\Client\Api\ActorsApi();
$actor_id = 3.4; // float | Actor ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadActorCover($actor_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->uploadActorCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **float**| Actor ID to fetch |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\Image**](#Image)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

