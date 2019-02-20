# GeolocationsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**geolocations**](#geolocations) | **POST** /geolocations | 
[**getProductGeolocations**](#getProductGeolocations) | **GET** /products/{product_id}/geolocations | 
[**getProductGeolocationsByIp**](#getProductGeolocationsByIp) | **POST** /products/{product_id}/geolocations | 
[**getVideoGeolocation**](#getVideoGeolocation) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
[**setProductGeolocation**](#setProductGeolocation) | **PUT** /products/{product_id}/geolocations | 
[**setVideoGeolocation**](#setVideoGeolocation) | **PUT** /videos/{video_id}/geolocations | 


## **geolocations**
> geolocations($ip_address)



Check access to platform by ip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GeolocationsApi();
$ip_address = "ip_address_example"; // string | address ip

try {
    $api_instance->geolocations($ip_address);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->geolocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**| address ip |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocations**
> \Kaemo\Client\Model\Geolocs getProductGeolocations($product_id, $page, $per_page)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GeolocationsApi();
$product_id = 789; // int | ID of the product to fetch
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
 **product_id** | **int**| ID of the product to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Geolocs**](#Geolocs)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocationsByIp**
> getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page)



check access to a product by geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GeolocationsApi();
$product_id = 789; // int | ID of the product to fetch
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
 **product_id** | **int**| ID of the product to fetch |
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

## **getVideoGeolocation**
> getVideoGeolocation($video_id, $ip_address, $page, $per_page)



Check access to a product by geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GeolocationsApi();
$video_id = 789; // int | ID of the video to fetch
$ip_address = "ip_address_example"; // string | address ip
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getVideoGeolocation($video_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationsApi->getVideoGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
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

## **setProductGeolocation**
> setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page)



Handle geolocation for products by countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GeolocationsApi();
$product_id = 789; // int | ID of the product to fetch
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
 **product_id** | **int**| ID of the product to fetch |
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

$api_instance = new Kaemo\Client\Api\GeolocationsApi();
$video_id = 789; // int | ID of the video to fetch
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
 **video_id** | **int**| ID of the video to fetch |
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

