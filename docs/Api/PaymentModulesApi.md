# PaymentModulesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentModules**](#getPaymentModules) | **GET** /payment-modules | 
[**getPaymentUrl**](#getPaymentUrl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
[**validateCart**](#validateCart) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
[**validateFreeOrder**](#validateFreeOrder) | **POST** /carts/{cart_id}/validate-free-order | 


## **getPaymentModules**
> \Kaemo\Client\Model\PaymentModules getPaymentModules($page, $per_page)



Get payment modules list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PaymentModulesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getPaymentModules($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->getPaymentModules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\PaymentModules**](#PaymentModules)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPaymentUrl**
> \Kaemo\Client\Model\PaymentUrl getPaymentUrl($cart_id, $payment_name)



Get payment url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PaymentModulesApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment module name

try {
    $result = $api_instance->getPaymentUrl($cart_id, $payment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->getPaymentUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **payment_name** | **string**| Payment module name |

### Return type

[**\Kaemo\Client\Model\PaymentUrl**](#PaymentUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **validateCart**
> validateCart($cart_id, $payment_name, $payment_arguments)



Validate order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PaymentModulesApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment module name
$payment_arguments = new \Kaemo\Client\Model\PaymentArguments(); // \Kaemo\Client\Model\PaymentArguments | payment arguments, token and tokenType

try {
    $api_instance->validateCart($cart_id, $payment_name, $payment_arguments);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->validateCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **payment_name** | **string**| Payment module name |
 **payment_arguments** | [**\Kaemo\Client\Model\PaymentArguments**](#\Kaemo\Client\Model\PaymentArguments)| payment arguments, token and tokenType |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **validateFreeOrder**
> validateFreeOrder($cart_id)



Validate cart without payment method (only for carts with a total of 0)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PaymentModulesApi();
$cart_id = 789; // int | Cart ID to validate

try {
    $api_instance->validateFreeOrder($cart_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->validateFreeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to validate |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

