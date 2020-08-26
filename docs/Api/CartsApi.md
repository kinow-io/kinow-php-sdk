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
[**detachCartRuleFromCart**](#detachCartRuleFromCart) | **DELETE** /carts/{cart_id}/cart-rules/{cart_rule_id} | 
[**emptyCart**](#emptyCart) | **POST** /carts/{cart_id}/empty | 
[**getCart**](#getCart) | **GET** /carts/{cart_id} | 
[**getCustomerCarts**](#getCustomerCarts) | **GET** /customers/{customer_id}/carts | 
[**getLastCart**](#getLastCart) | **GET** /customers/{customer_id}/last-cart | 
[**getPaymentUrl**](#getPaymentUrl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
[**preparePayment**](#preparePayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
[**updateCart**](#updateCart) | **PUT** /carts/{cart_id} | 
[**validateFreeOrder**](#validateFreeOrder) | **POST** /carts/{cart_id}/validate-free-order | 
[**validatePayment**](#validatePayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 


## **addProductToCart**
> \Kinow\Client\Model\Cart addProductToCart($cart_id, $product_id, $product_attribute_id, $switch_subscription_id, $is_gift, $ip_address)



Add product to cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$product_id = 789; // int | Product ID to add to cart
$product_attribute_id = 789; // int | ProductAttribute ID, required to add product to cart if product is not a subscription
$switch_subscription_id = 789; // int | When customer want to switch subscription, switch_subscription_id is the product access ID that match with the subscription to cancel
$is_gift = false; // bool | Allows bypass of access check (in case the current user already bought the product and it cannot be reordered)
$ip_address = "ip_address_example"; // string | IP address

try {
    $result = $api_instance->addProductToCart($cart_id, $product_id, $product_attribute_id, $switch_subscription_id, $is_gift, $ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->addProductToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **product_id** | **int**| Product ID to add to cart |
 **product_attribute_id** | **int**| ProductAttribute ID, required to add product to cart if product is not a subscription | [optional]
 **switch_subscription_id** | **int**| When customer want to switch subscription, switch_subscription_id is the product access ID that match with the subscription to cancel | [optional]
 **is_gift** | **bool**| Allows bypass of access check (in case the current user already bought the product and it cannot be reordered) | [optional] [default to false]
 **ip_address** | **string**| IP address | [optional]

### Return type

[**\Kinow\Client\Model\Cart**](#Cart)

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
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
 **cart_id** | **int**| Cart ID to fetch |
 **code** | **string**| Code of the cart rule to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachCartToCustomer**
> \Kinow\Client\Model\Cart attachCartToCustomer($customer_id, $cart_id)



Attach cart to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$customer_id = 789; // int | Customer ID to fetch
$cart_id = 789; // int | Cart ID to attach

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
 **customer_id** | **int**| Customer ID to fetch |
 **cart_id** | **int**| Cart ID to attach |

### Return type

[**\Kinow\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createCart**
> \Kinow\Client\Model\Cart createCart($body)



Create new cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$body = new \Kinow\Client\Model\Cart1(); // \Kinow\Client\Model\Cart1 | Cart settings

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
 **body** | [**\Kinow\Client\Model\Cart1**](#\Kinow\Client\Model\Cart1)| Cart settings |

### Return type

[**\Kinow\Client\Model\Cart**](#Cart)

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch

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
 **cart_id** | **int**| Cart ID to fetch |

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$product_id = 789; // int | Product ID to delete from cart
$product_attribute_id = 789; // int | Product attribute ID, required to add product to cart if product is not a subscription

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
 **cart_id** | **int**| Cart ID to fetch |
 **product_id** | **int**| Product ID to delete from cart |
 **product_attribute_id** | **int**| Product attribute ID, required to add product to cart if product is not a subscription | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachCartRuleFromCart**
> detachCartRuleFromCart($cart_id, $cart_rule_id)



Detach Cart rule from Cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$cart_rule_id = 789; // int | Cart rule ID to detach

try {
    $api_instance->detachCartRuleFromCart($cart_id, $cart_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->detachCartRuleFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **cart_rule_id** | **int**| Cart rule ID to detach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **emptyCart**
> emptyCart($cart_id)



Remove all items in a Cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to empty

try {
    $api_instance->emptyCart($cart_id);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->emptyCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to empty |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCart**
> \Kinow\Client\Model\Cart getCart($cart_id)



Get cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch

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
 **cart_id** | **int**| Cart ID to fetch |

### Return type

[**\Kinow\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerCarts**
> \Kinow\Client\Model\Carts getCustomerCarts($customer_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get customer carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$customer_id = 789; // int | Customer ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      date_add[value]=string&date_add[operator]=lt      _______________        {      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
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
 **customer_id** | **int**| Customer ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Carts**](#Carts)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getLastCart**
> \Kinow\Client\Model\Cart getLastCart($customer_id)



Get customer last cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$customer_id = 789; // int | Customer ID to fetch

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
 **customer_id** | **int**| Customer ID to fetch |

### Return type

[**\Kinow\Client\Model\Cart**](#Cart)

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name

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
 **cart_id** | **int**| Cart ID to fetch |
 **payment_name** | **string**| Payment gateway name |

### Return type

[**\Kinow\Client\Model\PaymentUrl**](#PaymentUrl)

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name

try {
    $result = $api_instance->preparePayment($cart_id, $payment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->preparePayment: ', $e->getMessage(), PHP_EOL;
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

## **updateCart**
> \Kinow\Client\Model\Cart updateCart($cart_id, $body)



Update cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart id
$body = new \Kinow\Client\Model\Cart2(); // \Kinow\Client\Model\Cart2 | Cart settings

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
 **body** | [**\Kinow\Client\Model\Cart2**](#\Kinow\Client\Model\Cart2)| Cart settings |

### Return type

[**\Kinow\Client\Model\Cart**](#Cart)

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to validate

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

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name
$payment_argument = new \Kinow\Client\Model\PaymentArguments(); // \Kinow\Client\Model\PaymentArguments | Payment argument

try {
    $api_instance->validatePayment($cart_id, $payment_name, $payment_argument);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->validatePayment: ', $e->getMessage(), PHP_EOL;
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

