# WidgetsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIntroImage**](#getIntroImage) | **GET** /widgets/intro/images | 
[**getSliderImages**](#getSliderImages) | **GET** /widgets/slider/images | 
[**getWidgetFooterMenu**](#getWidgetFooterMenu) | **GET** /widgets/footer-menu | 
[**getWidgetSlider**](#getWidgetSlider) | **GET** /widgets/slider | 
[**getWidgetSliderItem**](#getWidgetSliderItem) | **GET** /widgets/slider/{slider_id} | 
[**getWidgetTopMenu**](#getWidgetTopMenu) | **GET** /widgets/top-menu | 


## **getIntroImage**
> \Kaemo\Client\Model\Image[] getIntroImage()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();

try {
    $result = $api_instance->getIntroImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getIntroImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kaemo\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSliderImages**
> \Kaemo\Client\Model\Image[] getSliderImages()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();

try {
    $result = $api_instance->getSliderImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getSliderImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kaemo\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetFooterMenu**
> \Kaemo\Client\Model\WidgetFooterMenus getWidgetFooterMenu($page, $per_page)



Get footer menu list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();
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

[**\Kaemo\Client\Model\WidgetFooterMenus**](#WidgetFooterMenus)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetSlider**
> \Kaemo\Client\Model\WidgetSliders getWidgetSlider($page, $per_page)



Get slider list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();
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

[**\Kaemo\Client\Model\WidgetSliders**](#WidgetSliders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetSliderItem**
> \Kaemo\Client\Model\WidgetSlider getWidgetSliderItem($slider_id)



Get slider item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();
$slider_id = 789; // int | ID of the slider to fetch

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
 **slider_id** | **int**| ID of the slider to fetch |

### Return type

[**\Kaemo\Client\Model\WidgetSlider**](#WidgetSlider)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getWidgetTopMenu**
> \Kaemo\Client\Model\WidgetTopMenus getWidgetTopMenu($page, $per_page)



Get top menu list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();
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

[**\Kaemo\Client\Model\WidgetTopMenus**](#WidgetTopMenus)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

