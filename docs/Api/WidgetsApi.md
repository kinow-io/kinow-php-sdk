# WidgetsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSliderImage**](#getSliderImage) | **GET** /widgets/slider/images | 
[**getWidgetAnalytics**](#getWidgetAnalytics) | **GET** /widgets/analytics | 
[**getWidgetFooterMenu**](#getWidgetFooterMenu) | **GET** /widgets/footer-menu | 
[**getWidgetHomeRail**](#getWidgetHomeRail) | **GET** /widgets/home-rail | 
[**getWidgetHookPhrase**](#getWidgetHookPhrase) | **GET** /widgets/hook-phrase | 
[**getWidgetSlider**](#getWidgetSlider) | **GET** /widgets/slider | 
[**getWidgetSliderItem**](#getWidgetSliderItem) | **GET** /widgets/slider/{slider_id} | 
[**getWidgetTopMenu**](#getWidgetTopMenu) | **GET** /widgets/top-menu | 


## **getSliderImage**
> \Kinow\Client\Model\ImageListResponse getSliderImage()



Get slider images

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

$api_instance = new Kinow\Client\Api\WidgetsApi();

try {
    $result = $api_instance->getSliderImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getSliderImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\ImageListResponse**](#ImageListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetAnalytics**
> \Kinow\Client\Model\GoogleAnalyticsResponse getWidgetAnalytics()



Get Google Analytics configuration

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

$api_instance = new Kinow\Client\Api\WidgetsApi();

try {
    $result = $api_instance->getWidgetAnalytics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\GoogleAnalyticsResponse**](#GoogleAnalyticsResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetFooterMenu**
> \Kinow\Client\Model\WidgetFooterMenuListResponse getWidgetFooterMenu($page, $per_page)



Get footer menu list

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

$api_instance = new Kinow\Client\Api\WidgetsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getWidgetFooterMenu($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetFooterMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\WidgetFooterMenuListResponse**](#WidgetFooterMenuListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetHomeRail**
> \Kinow\Client\Model\WidgetHomeRailListResponse getWidgetHomeRail($page, $per_page)



Get home rails list

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

$api_instance = new Kinow\Client\Api\WidgetsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getWidgetHomeRail($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetHomeRail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\WidgetHomeRailListResponse**](#WidgetHomeRailListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetHookPhrase**
> \Kinow\Client\Model\WidgetHookPhraseListResponse getWidgetHookPhrase($page, $per_page)



Get hook phrase list

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

$api_instance = new Kinow\Client\Api\WidgetsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getWidgetHookPhrase($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetHookPhrase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\WidgetHookPhraseListResponse**](#WidgetHookPhraseListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetSlider**
> \Kinow\Client\Model\WidgetSliderListResponse getWidgetSlider($page, $per_page)



Get slider list

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

$api_instance = new Kinow\Client\Api\WidgetsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getWidgetSlider($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetSlider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\WidgetSliderListResponse**](#WidgetSliderListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetSliderItem**
> \Kinow\Client\Model\WidgetSliderResponse getWidgetSliderItem($slider_id)



Get slider item

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

$api_instance = new Kinow\Client\Api\WidgetsApi();
$slider_id = 789; // int | Slider ID to fetch

try {
    $result = $api_instance->getWidgetSliderItem($slider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetSliderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slider_id** | **int**| Slider ID to fetch |

### Return type

[**\Kinow\Client\Model\WidgetSliderResponse**](#WidgetSliderResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetTopMenu**
> \Kinow\Client\Model\WidgetTopMenuListResponse getWidgetTopMenu($page, $per_page)



Get top menu list

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

$api_instance = new Kinow\Client\Api\WidgetsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getWidgetTopMenu($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetTopMenu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\WidgetTopMenuListResponse**](#WidgetTopMenuListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

