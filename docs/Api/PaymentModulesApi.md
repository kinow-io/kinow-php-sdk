# PaymentModulesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentMethods**](#getPaymentMethods) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods | 
[**getPaymentModules**](#getPaymentModules) | **GET** /payment-modules | 
[**getPaymentUrl**](#getPaymentUrl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
[**getPendingPayments**](#getPendingPayments) | **GET** /customers/{customer_id}/payments/{payment_name}/pending | 
[**preparePayment**](#preparePayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
[**updatePaymentMethod**](#updatePaymentMethod) | **PUT** /customers/{customer_id}/payments/{payment_name}/payment-method | 
[**validateFreeOrder**](#validateFreeOrder) | **POST** /carts/{cart_id}/validate-free-order | 
[**validatePayment**](#validatePayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 


## **getPaymentMethods**
> \Kinow\Client\Model\PaymentMethods[] getPaymentMethods($customer_id, $payment_name)



Get payment methods saved for a Customer on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
$customer_id = 789; // int | 
$payment_name = "payment_name_example"; // string | 

try {
    $result = $api_instance->getPaymentMethods($customer_id, $payment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->getPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **payment_name** | **string**|  |

### Return type

[**\Kinow\Client\Model\PaymentMethods[]**](#PaymentMethods)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPaymentModules**
> \Kinow\Client\Model\PaymentModules getPaymentModules($page, $per_page)



Get payment gateways list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
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

[**\Kinow\Client\Model\PaymentModules**](#PaymentModules)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPaymentUrl**
> \Kinow\Client\Model\PaymentUrl getPaymentUrl($cart_id, $payment_name)



Get payment gateway URL to use in iframe

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name

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
 **payment_name** | **string**| Payment gateway name |

### Return type

[**\Kinow\Client\Model\PaymentUrl**](#PaymentUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPendingPayments**
> \Kinow\Client\Model\PaymentDetails[] getPendingPayments($payment_name, $customer_id)



Get pending payments for a Customer on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
$payment_name = "payment_name_example"; // string | 
$customer_id = 789; // int | 

try {
    $result = $api_instance->getPendingPayments($payment_name, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->getPendingPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_name** | **string**|  |
 **customer_id** | **int**|  |

### Return type

[**\Kinow\Client\Model\PaymentDetails[]**](#PaymentDetails)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **preparePayment**
> \Kinow\Client\Model\PaymentDetails1 preparePayment($cart_id, $payment_name)



Prepare payment on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name

try {
    $result = $api_instance->preparePayment($cart_id, $payment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->preparePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **payment_name** | **string**| Payment gateway name |

### Return type

[**\Kinow\Client\Model\PaymentDetails1**](#PaymentDetails1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updatePaymentMethod**
> updatePaymentMethod($customer_id, $payment_name, $payment_arguments)



Update payment method for a Customer on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
$customer_id = 789; // int | 
$payment_name = "payment_name_example"; // string | 
$payment_arguments = new \Kinow\Client\Model\PaymentArguments(); // \Kinow\Client\Model\PaymentArguments | Payment arguments

try {
    $api_instance->updatePaymentMethod($customer_id, $payment_name, $payment_arguments);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **payment_name** | **string**|  |
 **payment_arguments** | [**\Kinow\Client\Model\PaymentArguments**](#\Kinow\Client\Model\PaymentArguments)| Payment arguments |

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

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
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

## **validatePayment**
> validatePayment($cart_id, $payment_name, $payment_argument)



Validate payment on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PaymentModulesApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name
$payment_argument = new \Kinow\Client\Model\PaymentArguments(); // \Kinow\Client\Model\PaymentArguments | Payment argument

try {
    $api_instance->validatePayment($cart_id, $payment_name, $payment_argument);
} catch (Exception $e) {
    echo 'Exception when calling PaymentModulesApi->validatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **payment_name** | **string**| Payment gateway name |
 **payment_argument** | [**\Kinow\Client\Model\PaymentArguments**](#\Kinow\Client\Model\PaymentArguments)| Payment argument |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

