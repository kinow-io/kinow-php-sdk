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
[**sendGift**](#sendGift) | **POST** /gifts/{gift_id}/send | 
[**updateGift**](#updateGift) | **PUT** /gifts/{gift_id} | 


## **consumeGift**
> consumeGift($gift_id, $customer_id, $token)



Consume gift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createGift**
> \Kaemo\Client\Model\Gift createGift($body)



Create gift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
$body = new \Kaemo\Client\Model\Gift(); // \Kaemo\Client\Model\Gift | 

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
 **body** | [**\Kaemo\Client\Model\Gift**](#\Kaemo\Client\Model\Gift)|  |

### Return type

[**\Kaemo\Client\Model\Gift**](#Gift)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteGift**
> deleteGift($gift_id)



Delete gift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteGiftsInCart**
> deleteGiftsInCart($cart_id)



Delete gifts in cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGift**
> \Kaemo\Client\Model\Gift getGift($gift_id)



Get gift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
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

[**\Kaemo\Client\Model\Gift**](#Gift)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGiftInCart**
> \Kaemo\Client\Model\Gift getGiftInCart($cart_id)



Get gift in cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
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

[**\Kaemo\Client\Model\Gift**](#Gift)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGiftToken**
> getGiftToken($gift_id)



Get gift token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch

try {
    $api_instance->getGiftToken($gift_id);
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

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getGifts**
> \Kaemo\Client\Model\Gifts getGifts($unused_only)



Get gifts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
$unused_only = 56; // int | Only unused gifts

try {
    $result = $api_instance->getGifts($unused_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftsApi->getGifts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unused_only** | **int**| Only unused gifts | [optional]

### Return type

[**\Kaemo\Client\Model\Gifts**](#Gifts)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **sendGift**
> sendGift($gift_id)



Send gift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateGift**
> \Kaemo\Client\Model\Gift updateGift($gift_id, $body)



Update gift

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GiftsApi();
$gift_id = 789; // int | Gift ID to fetch
$body = new \Kaemo\Client\Model\Gift(); // \Kaemo\Client\Model\Gift | 

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
 **body** | [**\Kaemo\Client\Model\Gift**](#\Kaemo\Client\Model\Gift)|  |

### Return type

[**\Kaemo\Client\Model\Gift**](#Gift)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

