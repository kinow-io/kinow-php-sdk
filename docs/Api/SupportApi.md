# SupportApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessage**](#createMessage) | **POST** /support | 
[**getContacts**](#getContacts) | **GET** /support/contacts | 


## **createMessage**
> \Kaemo\Client\Model\Support createMessage($id_lang, $email, $id_contact, $message, $id_product, $id_order)



Create new message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SupportApi();
$id_lang = 56; // int | 
$email = "email_example"; // string | 
$id_contact = 56; // int | 
$message = "message_example"; // string | 
$id_product = 56; // int | 
$id_order = 56; // int | 

try {
    $result = $api_instance->createMessage($id_lang, $email, $id_contact, $message, $id_product, $id_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->createMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_lang** | **int**|  |
 **email** | **string**|  |
 **id_contact** | **int**|  |
 **message** | **string**|  |
 **id_product** | **int**|  |
 **id_order** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Support**](#Support)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getContacts**
> \Kaemo\Client\Model\Contacts getContacts($page, $per_page, $sort_by, $sort_direction)



Get contacts list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SupportApi();
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getContacts($page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Contacts**](#Contacts)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

