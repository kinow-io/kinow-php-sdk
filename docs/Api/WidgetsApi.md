# WidgetsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSliderImage**](#getSliderImage) | **GET** /widgets/slider/images | 
[**getWidgetAnalytics**](#getWidgetAnalytics) | **GET** /widgets/analytics | 
[**getWidgetFooterMenu**](#getWidgetFooterMenu) | **GET** /widgets/footer-menu | 
[**getWidgetHookPhrase**](#getWidgetHookPhrase) | **GET** /widgets/hook-phrase | 
[**getWidgetSlider**](#getWidgetSlider) | **GET** /widgets/slider | 
[**getWidgetSliderItem**](#getWidgetSliderItem) | **GET** /widgets/slider/{slider_id} | 
[**getWidgetTopMenu**](#getWidgetTopMenu) | **GET** /widgets/top-menu | 


## **getSliderImage**
> \Kinow\Client\Model\Image[] getSliderImage()



Get slider images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetAnalytics**
> \Kinow\Client\Model\GoogleAnalytics getWidgetAnalytics()



Get Google Analytics configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\GoogleAnalytics**](#GoogleAnalytics)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetFooterMenu**
> \Kinow\Client\Model\WidgetFooterMenus getWidgetFooterMenu($page, $per_page)



Get footer menu list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\WidgetFooterMenus**](#WidgetFooterMenus)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetHookPhrase**
> \Kinow\Client\Model\WidgetHookPhrases getWidgetHookPhrase($page, $per_page)



Get hook phrase list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\WidgetHookPhrases**](#WidgetHookPhrases)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetSlider**
> \Kinow\Client\Model\WidgetSliders getWidgetSlider($page, $per_page)



Get slider list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\WidgetSliders**](#WidgetSliders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetSliderItem**
> \Kinow\Client\Model\WidgetSlider getWidgetSliderItem($slider_id)



Get slider item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\WidgetSlider**](#WidgetSlider)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetTopMenu**
> \Kinow\Client\Model\WidgetTopMenus getWidgetTopMenu($page, $per_page)



Get top menu list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Kinow\Client\Model\WidgetTopMenus**](#WidgetTopMenus)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

