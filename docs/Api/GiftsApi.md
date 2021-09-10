# GiftsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consumeGift**](#consumeGift) | **PUT** /gifts/{gift_id}/consume | 
[**createGift**](#createGift) | **POST** /gifts | 
[**deleteGift**](#deleteGift) | **DELETE** /gifts/{gift_id} | 
[**deleteGiftsInCart**](#deleteGiftsInCart) | **DELETE** /carts/{cart_id}/gift/ | 
[**getGift**](#getGift) | **GET** /gifts/{gift_id} | 
[**getGiftInCart**](#getGiftInCart) | **GET** /carts/{cart_id}/gift | 
[**getGiftToken**](#getGiftToken) | **GET** /gifts/{gift_id}/token | 
[**getGifts**](#getGifts) | **GET** /gifts | 
[**getGiftsInCart**](#getGiftsInCart) | **GET** /carts/{cart_id}/gifts | 
[**sendGift**](#sendGift) | **POST** /gifts/{gift_id}/send | 
[**updateGift**](#updateGift) | **PUT** /gifts/{gift_id} | 


## **consumeGift**
> consumeGift($gift_id, $customer_id, $token)



Consume Gift

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$token = "token_example"; // string | Gift token to check (optional)

try {
    $api_instance->consumeGift($gift_id, $customer_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->consumeGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_id** | **int**| Gift ID to fetch |
 **customer_id** | **int**| Customer ID to fetch |
 **token** | **string**| Gift token to check (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createGift**
> \Kinow\Client\Model\Gift createGift($body)



Create Gift

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$body = new \Kinow\Client\Model\Gift1(); // \Kinow\Client\Model\Gift1 | Gift settings

try {
    $result = $api_instance->createGift($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->createGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\Gift1**](#\Kinow\Client\Model\Gift1)| Gift settings |

### Return type

[**\Kinow\Client\Model\Gift**](#Gift)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteGift**
> deleteGift($gift_id)



Delete Gift

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch

try {
    $api_instance->deleteGift($gift_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->deleteGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_id** | **int**| Gift ID to fetch |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteGiftsInCart**
> deleteGiftsInCart($cart_id)



Delete Gifts in cart

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$cart_id = 789; // int | Cart ID to fetch

try {
    $api_instance->deleteGiftsInCart($cart_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->deleteGiftsInCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGift**
> \Kinow\Client\Model\Gift getGift($gift_id)



Get Gift

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch

try {
    $result = $api_instance->getGift($gift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->getGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_id** | **int**| Gift ID to fetch |

### Return type

[**\Kinow\Client\Model\Gift**](#Gift)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGiftInCart**
> \Kinow\Client\Model\Gift getGiftInCart($cart_id)



Get Gift in Cart

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$cart_id = 789; // int | Cart ID to fetch

try {
    $result = $api_instance->getGiftInCart($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->getGiftInCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |

### Return type

[**\Kinow\Client\Model\Gift**](#Gift)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGiftToken**
> \Kinow\Client\Model\GiftToken getGiftToken($gift_id)



Get Gift token

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch

try {
    $result = $api_instance->getGiftToken($gift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->getGiftToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_id** | **int**| Gift ID to fetch |

### Return type

[**\Kinow\Client\Model\GiftToken**](#GiftToken)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGifts**
> \Kinow\Client\Model\Gifts1 getGifts($unused_only, $paid_only, $page, $per_page)



Get Gifts

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$unused_only = true; // bool | Filter only unused gifts
$paid_only = true; // bool | Filter only gifts linked to an order which is paid by the user
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getGifts($unused_only, $paid_only, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->getGifts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unused_only** | **bool**| Filter only unused gifts | [optional]
 **paid_only** | **bool**| Filter only gifts linked to an order which is paid by the user | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\Gifts1**](#Gifts1)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGiftsInCart**
> \Kinow\Client\Model\Gift[] getGiftsInCart($cart_id)



Get Gifts in cart

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$cart_id = 789; // int | Cart ID to fetch

try {
    $result = $api_instance->getGiftsInCart($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->getGiftsInCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |

### Return type

[**\Kinow\Client\Model\Gift[]**](#Gift)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **sendGift**
> sendGift($gift_id)



Send Gift

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch

try {
    $api_instance->sendGift($gift_id);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->sendGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_id** | **int**| Gift ID to fetch |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateGift**
> \Kinow\Client\Model\Gift updateGift($gift_id, $body)



Update Gift

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

$api_instance = new Kinow\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch
$body = new \Kinow\Client\Model\Gift2(); // \Kinow\Client\Model\Gift2 | Gift settings

try {
    $result = $api_instance->updateGift($gift_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->updateGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_id** | **int**| Gift ID to fetch |
 **body** | [**\Kinow\Client\Model\Gift2**](#\Kinow\Client\Model\Gift2)| Gift settings |

### Return type

[**\Kinow\Client\Model\Gift**](#Gift)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

