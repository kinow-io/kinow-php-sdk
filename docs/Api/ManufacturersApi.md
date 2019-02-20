# ManufacturersApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getManufacturerCoverImage**](#getManufacturerCoverImage) | **GET** /manufacturers/{manufacturer_id}/cover | 


## **getManufacturerCoverImage**
> \Kaemo\Client\Model\Image getManufacturerCoverImage($manufacturer_id)



Please, use __/directors/{actor_id}/cover__

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ManufacturersApi();
$manufacturer_id = 789; // int | ID of the manufacturer to fetch

try {
    $result = $api_instance->getManufacturerCoverImage($manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->getManufacturerCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **int**| ID of the manufacturer to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

