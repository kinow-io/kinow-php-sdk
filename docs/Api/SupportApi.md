# SupportApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessage**](#createMessage) | **POST** /support | 
[**getContacts**](#getContacts) | **GET** /support/contacts | 


## **createMessage**
> \Kinow\Client\Model\Support createMessage($id_lang, $email, $id_contact, $message, $id_support, $id_product, $id_order, $send_mail)



Create new message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\SupportApi();
$id_lang = 56; // int | Language ID used by user to write his message
$email = "email_example"; // string | User email in order to send him a response
$id_contact = 56; // int | Contact ID to send the user message
$message = "message_example"; // string | User message
$id_support = 56; // int | Link the message to a previous message
$id_product = 56; // int | Link the message to a product in catalog
$id_order = 56; // int | Link the message to an existing order
$send_mail = true; // bool | Send confirmation email to the providen email

try {
    $result = $api_instance->createMessage($id_lang, $email, $id_contact, $message, $id_support, $id_product, $id_order, $send_mail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->createMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_lang** | **int**| Language ID used by user to write his message |
 **email** | **string**| User email in order to send him a response |
 **id_contact** | **int**| Contact ID to send the user message |
 **message** | **string**| User message |
 **id_support** | **int**| Link the message to a previous message | [optional]
 **id_product** | **int**| Link the message to a product in catalog | [optional]
 **id_order** | **int**| Link the message to an existing order | [optional]
 **send_mail** | **bool**| Send confirmation email to the providen email | [optional]

### Return type

[**\Kinow\Client\Model\Support**](#Support)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getContacts**
> \Kinow\Client\Model\Contacts getContacts($page, $per_page, $sort_by, $sort_direction)



Get contacts list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\SupportApi();
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

[**\Kinow\Client\Model\Contacts**](#Contacts)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

