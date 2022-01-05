# FreeGiftsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consumeFreeGift**](#consumeFreeGift) | **PUT** /free-gifts/{free_gift_id}/consume | 
[**createFreeGift**](#createFreeGift) | **POST** /free-gifts | 
[**deleteFreeGift**](#deleteFreeGift) | **DELETE** /free-gifts/{free_gift_id} | 
[**getFreeGift**](#getFreeGift) | **GET** /free-gifts/{free_gift_id} | 
[**getFreeGiftToken**](#getFreeGiftToken) | **GET** /free-gifts/{free_gift_id}/token | 
[**getFreeGifts**](#getFreeGifts) | **GET** /free-gifts | 
[**sendFreeGift**](#sendFreeGift) | **POST** /free-gifts/{free_gift_id}/send | 


## **consumeFreeGift**
> consumeFreeGift($free_gift_id, $customer_id, $token)



Consume free Gift

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$free_gift_id = 789; // int | Free Gift ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$token = "token_example"; // string | Free Gift token to check (optional)

try {
    $api_instance->consumeFreeGift($free_gift_id, $customer_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->consumeFreeGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_gift_id** | **int**| Free Gift ID to fetch |
 **customer_id** | **int**| Customer ID to fetch |
 **token** | **string**| Free Gift token to check (optional) | [optional]

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createFreeGift**
> \Kinow\Client\Model\FreeGift createFreeGift($body)



Create free Gift

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$body = new \Kinow\Client\Model\CreateFreeGiftRequest(); // \Kinow\Client\Model\CreateFreeGiftRequest | Free Gift settings

try {
    $result = $api_instance->createFreeGift($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->createFreeGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\CreateFreeGiftRequest**](#\Kinow\Client\Model\CreateFreeGiftRequest)| Free Gift settings |

### Return type

[**\Kinow\Client\Model\FreeGift**](#FreeGift)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteFreeGift**
> deleteFreeGift($free_gift_id)



Delete free Gift

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$free_gift_id = 789; // int | Free Gift ID to fetch

try {
    $api_instance->deleteFreeGift($free_gift_id);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->deleteFreeGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_gift_id** | **int**| Free Gift ID to fetch |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFreeGift**
> \Kinow\Client\Model\FreeGiftResponse getFreeGift($free_gift_id)



Get free Gift

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$free_gift_id = 789; // int | Free Gift ID to fetch

try {
    $result = $api_instance->getFreeGift($free_gift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->getFreeGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_gift_id** | **int**| Free Gift ID to fetch |

### Return type

[**\Kinow\Client\Model\FreeGiftResponse**](#FreeGiftResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFreeGiftToken**
> \Kinow\Client\Model\GiftToken getFreeGiftToken($free_gift_id)



Get free Gift token

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$free_gift_id = 789; // int | Free Gift ID to fetch

try {
    $result = $api_instance->getFreeGiftToken($free_gift_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->getFreeGiftToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_gift_id** | **int**| Free Gift ID to fetch |

### Return type

[**\Kinow\Client\Model\GiftToken**](#GiftToken)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFreeGifts**
> \Kinow\Client\Model\FreeGiftListResponse getFreeGifts($unused_only)



Get free Gifts

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$unused_only = 56; // int | Only unused Gifts

try {
    $result = $api_instance->getFreeGifts($unused_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->getFreeGifts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unused_only** | **int**| Only unused Gifts | [optional]

### Return type

[**\Kinow\Client\Model\FreeGiftListResponse**](#FreeGiftListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **sendFreeGift**
> sendFreeGift($free_gift_id)



Send free Gift

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

$api_instance = new Kinow\Client\Api\FreeGiftsApi();
$free_gift_id = 789; // int | Free Gift ID to fetch

try {
    $api_instance->sendFreeGift($free_gift_id);
} catch (Exception $e) {
    echo 'Exception when calling FreeGiftsApi->sendFreeGift: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **free_gift_id** | **int**| Free Gift ID to fetch |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

