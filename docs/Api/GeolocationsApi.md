# GeolocationsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeolocSettings**](#getGeolocSettings) | **GET** /geolocations/settings | 
[**getIPLocation**](#getIPLocation) | **GET** /geolocations/ip | 
[**getPlatformAccessInfo**](#getPlatformAccessInfo) | **GET** /geolocations/platform-access | 
[**getProductGeolocations**](#getProductGeolocations) | **GET** /products/{product_id}/geolocations | 
[**getProductGeolocationsByIp**](#getProductGeolocationsByIp) | **POST** /products/{product_id}/geolocations | 
[**getVideoGeolocationByIp**](#getVideoGeolocationByIp) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
[**setProductGeolocation**](#setProductGeolocation) | **PUT** /products/{product_id}/geolocations | 
[**setVideoGeolocation**](#setVideoGeolocation) | **PUT** /videos/{video_id}/geolocations | 


## **getGeolocSettings**
> \Kinow\Client\Model\GeolocSettings getGeolocSettings($type, $type_id)



Get geolocation settings for an item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$type = "type_example"; // string | Item type, available values are: category, subscription, product, video, extract, blogpage, slider, topmenu
$type_id = 56; // int | Item ID

try {
    $result = $api_instance->getGeolocSettings($type, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getGeolocSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Item type, available values are: category, subscription, product, video, extract, blogpage, slider, topmenu |
 **type_id** | **int**| Item ID |

### Return type

[**\Kinow\Client\Model\GeolocSettings**](#GeolocSettings)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getIPLocation**
> \Kinow\Client\Model\IPLocation getIPLocation($ip_address)



Get IP location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$ip_address = "ip_address_example"; // string | address ip

try {
    $result = $api_instance->getIPLocation($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getIPLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**| address ip |

### Return type

[**\Kinow\Client\Model\IPLocation**](#IPLocation)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPlatformAccessInfo**
> \Kinow\Client\Model\PlatformAccessInfo getPlatformAccessInfo($ip_address)



Get PlatformAccessInfo by ip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$ip_address = "ip_address_example"; // string | IP address

try {
    $result = $api_instance->getPlatformAccessInfo($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getPlatformAccessInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**| IP address |

### Return type

[**\Kinow\Client\Model\PlatformAccessInfo**](#PlatformAccessInfo)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocations**
> \Kinow\Client\Model\Geolocs getProductGeolocations($product_id, $page, $per_page)



Get product geolocation restrictions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductGeolocations($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getProductGeolocations: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Geolocs**](#Geolocs)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocationsByIp**
> getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page)



Check product access using geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$product_id = 789; // int | Product ID to fetch
$ip_address = "ip_address_example"; // string | address ip
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getProductGeolocationsByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **ip_address** | **string**| address ip |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoGeolocationByIp**
> getVideoGeolocationByIp($video_id, $ip_address, $page, $per_page)



Check access to a video by geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$video_id = 789; // int | Video ID to fetch
$ip_address = "ip_address_example"; // string | IP address
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getVideoGeolocationByIp($video_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getVideoGeolocationByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **ip_address** | **string**| IP address |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **setProductGeolocation**
> setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page)



Handle geolocation for products by countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$product_id = 789; // int | Product ID to fetch
$enabled = 56; // int | Enabled
$behavior_detected_countries = "behavior_detected_countries_example"; // string | Behavior for detected countries
$behavior_non_detected_countries = "behavior_non_detected_countries_example"; // string | Behavior for non-detected countries
$countries = "countries_example"; // string | IDs of the non-detected countries separated by comma
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->setProductGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **enabled** | **int**| Enabled |
 **behavior_detected_countries** | **string**| Behavior for detected countries |
 **behavior_non_detected_countries** | **string**| Behavior for non-detected countries |
 **countries** | **string**| IDs of the non-detected countries separated by comma | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **setVideoGeolocation**
> setVideoGeolocation($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries)



Handle geolocation for videos by countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\GeolocationsApi();
$video_id = 789; // int | Video ID to fetch
$enabled = 56; // int | Enabled
$behavior_detected_countries = "behavior_detected_countries_example"; // string | Behavior for detected countries
$behavior_non_detected_countries = "behavior_non_detected_countries_example"; // string | Behavior for non-detected countries
$countries = "countries_example"; // string | IDs of the non-detected countries separated by comma

try {
    $api_instance->setVideoGeolocation($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->setVideoGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **enabled** | **int**| Enabled |
 **behavior_detected_countries** | **string**| Behavior for detected countries |
 **behavior_non_detected_countries** | **string**| Behavior for non-detected countries |
 **countries** | **string**| IDs of the non-detected countries separated by comma | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

