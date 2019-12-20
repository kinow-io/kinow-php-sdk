# DevicesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDevices**](#createDevices) | **POST** /devices | 
[**deleteDevice**](#deleteDevice) | **DELETE** /devices/{device_id} | 
[**getCustomerDevices**](#getCustomerDevices) | **GET** /devices/{customer_id} | 


## **createDevices**
> \Kaemo\Client\Model\Device createDevices($body)



Create new devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DevicesApi();
$body = new \Kaemo\Client\Model\ProductAttributeCreateRequest1(); // \Kaemo\Client\Model\ProductAttributeCreateRequest1 | 

try {
    $result = $api_instance->createDevices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->createDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\ProductAttributeCreateRequest1**](#\Kaemo\Client\Model\ProductAttributeCreateRequest1)|  |

### Return type

[**\Kaemo\Client\Model\Device**](#Device)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteDevice**
> deleteDevice($device_id)



Delete Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DevicesApi();
$device_id = 789; // int | Device ID to delete

try {
    $api_instance->deleteDevice($device_id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **int**| Device ID to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerDevices**
> \Kaemo\Client\Model\DeviceList getCustomerDevices($customer_id, $page, $per_page)



Get customer devices list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DevicesApi();
$customer_id = 789; // int | Customer ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerDevices($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getCustomerDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\DeviceList**](#DeviceList)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

