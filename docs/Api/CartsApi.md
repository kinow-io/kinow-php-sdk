# CartsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductToCart**](#addProductToCart) | **POST** /carts/{cart_id}/products | 
[**attachCartRuleToCart**](#attachCartRuleToCart) | **POST** /carts/{cart_id}/cart-rules | 
[**attachCartToCustomer**](#attachCartToCustomer) | **POST** /customers/{customer_id}/carts | 
[**createCart**](#createCart) | **POST** /carts | 
[**deleteCart**](#deleteCart) | **DELETE** /carts/{cart_id} | 
[**deleteProductFromCart**](#deleteProductFromCart) | **DELETE** /carts/{cart_id}/products | 
[**getCart**](#getCart) | **GET** /carts/{cart_id} | 
[**getCustomerCarts**](#getCustomerCarts) | **GET** /customers/{customer_id}/carts | 
[**getLastCart**](#getLastCart) | **GET** /customers/{customer_id}/last-cart | 
[**getPaymentUrl**](#getPaymentUrl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
[**updateCart**](#updateCart) | **PUT** /carts/{cart_id} | 
[**validateCart**](#validateCart) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
[**validateFreeOrder**](#validateFreeOrder) | **POST** /carts/{cart_id}/validate-free-order | 


## **addProductToCart**
> \Kaemo\Client\Model\Cart addProductToCart($cart_id, $product_id, $product_attribute_id, $switch_subscription_id)



Add product to cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch
$product_id = 789; // int | Id of the product to attach to the cart
$product_attribute_id = 789; // int | Id of the product attribute, required to add product to cart if product is not a subscription
$switch_subscription_id = 789; // int | When customer want to switch subscription, switch_subscription_id is the id of the product access that match with the subscription to cancel.

try {
    $result = $api_instance->addProductToCart($cart_id, $product_id, $product_attribute_id, $switch_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->addProductToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |
 **product_id** | **int**| Id of the product to attach to the cart |
 **product_attribute_id** | **int**| Id of the product attribute, required to add product to cart if product is not a subscription | [optional]
 **switch_subscription_id** | **int**| When customer want to switch subscription, switch_subscription_id is the id of the product access that match with the subscription to cancel. | [optional]

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachCartRuleToCart**
> attachCartRuleToCart($cart_id, $code)



Attach cart rule to cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch
$code = "code_example"; // string | Code of the cart rule to attach

try {
    $api_instance->attachCartRuleToCart($cart_id, $code);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->attachCartRuleToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |
 **code** | **string**| Code of the cart rule to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachCartToCustomer**
> \Kaemo\Client\Model\Cart attachCartToCustomer($customer_id, $cart_id)



Attach cart to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$customer_id = 789; // int | ID of the customer to fetch
$cart_id = 789; // int | ID of the cart to attach

try {
    $result = $api_instance->attachCartToCustomer($customer_id, $cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->attachCartToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **cart_id** | **int**| ID of the cart to attach |

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createCart**
> \Kaemo\Client\Model\Cart createCart($body)



Create new cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$body = new \Kaemo\Client\Model\CartBody(); // \Kaemo\Client\Model\CartBody | Create cart object

try {
    $result = $api_instance->createCart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->createCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\CartBody**](#\Kaemo\Client\Model\CartBody)| Create cart object |

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteCart**
> deleteCart($cart_id)



Delete cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch

try {
    $api_instance->deleteCart($cart_id);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->deleteCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteProductFromCart**
> deleteProductFromCart($cart_id, $product_id, $product_attribute_id)



Remove product from cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch
$product_id = 789; // int | Id of the product to delete from cart
$product_attribute_id = 789; // int | Id of the product attribute, required to add product to cart if product is not a subscription

try {
    $api_instance->deleteProductFromCart($cart_id, $product_id, $product_attribute_id);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->deleteProductFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |
 **product_id** | **int**| Id of the product to delete from cart |
 **product_attribute_id** | **int**| Id of the product attribute, required to add product to cart if product is not a subscription | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCart**
> \Kaemo\Client\Model\Cart getCart($cart_id)



Get cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch

try {
    $result = $api_instance->getCart($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerCarts**
> \Kaemo\Client\Model\Carts getCustomerCarts($customer_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get customer carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCustomerCarts($customer_id, $page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getCustomerCarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Carts**](#Carts)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getLastCart**
> \Kaemo\Client\Model\Cart getLastCart($customer_id)



Get customer last cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$customer_id = 789; // int | ID of the customer to fetch

try {
    $result = $api_instance->getLastCart($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getLastCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

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

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch
$payment_name = "payment_name_example"; // string | Payment module name

try {
    $result = $api_instance->getPaymentUrl($cart_id, $payment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getPaymentUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |
 **payment_name** | **string**| Payment module name |

### Return type

[**\Kaemo\Client\Model\PaymentUrl**](#PaymentUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCart**
> \Kaemo\Client\Model\Cart updateCart($cart_id, $body)



Update cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Cart id
$body = new \Kaemo\Client\Model\Cart(); // \Kaemo\Client\Model\Cart | Cart body

try {
    $result = $api_instance->updateCart($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->updateCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart id |
 **body** | [**\Kaemo\Client\Model\Cart**](#\Kaemo\Client\Model\Cart)| Cart body |

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

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

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to fetch
$payment_name = "payment_name_example"; // string | Payment module name
$payment_arguments = new \Kaemo\Client\Model\PaymentArguments(); // \Kaemo\Client\Model\PaymentArguments | payment arguments, token and tokenType

try {
    $api_instance->validateCart($cart_id, $payment_name, $payment_arguments);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->validateCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to fetch |
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

$api_instance = new Kaemo\Client\Api\CartsApi();
$cart_id = 789; // int | Id of the cart to validate

try {
    $api_instance->validateFreeOrder($cart_id);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->validateFreeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Id of the cart to validate |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

