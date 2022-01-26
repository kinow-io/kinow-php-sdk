# CartsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductToCart**](#addProductToCart) | **POST** /carts/{cart_id}/products | 
[**attachCartRuleToCart**](#attachCartRuleToCart) | **POST** /carts/{cart_id}/cart-rules | 
[**attachCartToCustomer**](#attachCartToCustomer) | **POST** /customers/{customer_id}/carts | 
[**createCart**](#createCart) | **POST** /carts | 
[**deleteCart**](#deleteCart) | **DELETE** /carts/{cart_id} | 
[**detachCartRuleFromCart**](#detachCartRuleFromCart) | **DELETE** /carts/{cart_id}/cart-rules/{cart_rule_id} | 
[**emptyCart**](#emptyCart) | **POST** /carts/{cart_id}/empty | 
[**getCart**](#getCart) | **GET** /carts/{cart_id} | 
[**getCartPaymentModules**](#getCartPaymentModules) | **GET** /carts/{cart_id}/payments | 
[**getCarts**](#getCarts) | **GET** /carts | 
[**getCustomerCarts**](#getCustomerCarts) | **GET** /customers/{customer_id}/carts | 
[**getLastCart**](#getLastCart) | **GET** /customers/{customer_id}/last-cart | 
[**getLostsCarts**](#getLostsCarts) | **GET** /carts/losts-carts | 
[**getPaymentUrl**](#getPaymentUrl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
[**getPrice**](#getPrice) | **POST** /carts/price | 
[**preparePayment**](#preparePayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
[**recurringPayment**](#recurringPayment) | **POST** /carts/{cart_id}/payments/{payment_name}/recurring | 
[**removeProductFromCart**](#removeProductFromCart) | **DELETE** /carts/{cart_id}/products | 
[**updateCart**](#updateCart) | **PUT** /carts/{cart_id} | 
[**validateFreeOrder**](#validateFreeOrder) | **POST** /carts/{cart_id}/validate-free-order | 
[**validatePayment**](#validatePayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 


## **addProductToCart**
> \Kinow\Client\Model\CartResponse addProductToCart($cart_id, $body)



Add product to cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$body = new \Kinow\Client\Model\AddProductToCartRequest(); // \Kinow\Client\Model\AddProductToCartRequest | Add product to cart request

try {
    $result = $api_instance->addProductToCart($cart_id, $body);
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
 **body** | [**\Kinow\Client\Model\AddProductToCartRequest**](#\Kinow\Client\Model\AddProductToCartRequest)| Add product to cart request |

### Return type

[**\Kinow\Client\Model\CartResponse**](#CartResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachCartRuleToCart**
> attachCartRuleToCart($cart_id, $code, $ip)



Attach cart rule to cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$code = "code_example"; // string | Code of the cart rule to attach
$ip = "ip_example"; // string | Filter by user IP

try {
    $api_instance->attachCartRuleToCart($cart_id, $code, $ip);
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
 **ip** | **string**| Filter by user IP | [optional]

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachCartToCustomer**
> \Kinow\Client\Model\CartResponse attachCartToCustomer($customer_id, $cart_id)



Attach cart to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[**\Kinow\Client\Model\CartResponse**](#CartResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createCart**
> \Kinow\Client\Model\CartResponse createCart($body)



Create new cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$body = new \Kinow\Client\Model\CreateCartRequest(); // \Kinow\Client\Model\CreateCartRequest | Cart settings

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
 **body** | [**\Kinow\Client\Model\CreateCartRequest**](#\Kinow\Client\Model\CreateCartRequest)| Cart settings |

### Return type

[**\Kinow\Client\Model\CartResponse**](#CartResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCart**
> \Kinow\Client\Model\CartResponse getCart($cart_id)



Get cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[**\Kinow\Client\Model\CartResponse**](#CartResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCartPaymentModules**
> \Kinow\Client\Model\PaymentModuleListResponse1 getCartPaymentModules($cart_id, $page, $per_page)



Get payment gateways list available for given cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCartPaymentModules($cart_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getCartPaymentModules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\PaymentModuleListResponse1**](#PaymentModuleListResponse1)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCarts**
> \Kinow\Client\Model\CartListResponse1 getCarts($page, $per_page, $filters, $sort_by, $sort_direction)



Get Carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ``` name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt _______________  { \"name\": { \"value\": \"string\", \"operator\": \"contains\" }, \"date_add\": { \"value\": \"string\", \"operator\": \"lt\" } } ``` Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCarts($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getCarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60; name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt _______________  { \&quot;name\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;contains\&quot; }, \&quot;date_add\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;lt\&quot; } } &#x60;&#x60;&#x60; Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\CartListResponse1**](#CartListResponse1)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerCarts**
> \Kinow\Client\Model\CartListResponse getCustomerCarts($customer_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get customer carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$customer_id = 789; // int | Customer ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ``` name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt _______________  { \"name\": { \"value\": \"string\", \"operator\": \"contains\" }, \"date_add\": { \"value\": \"string\", \"operator\": \"lt\" } } ``` Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
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
 **filters** | **string**| &#x60;&#x60;&#x60; name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt _______________  { \&quot;name\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;contains\&quot; }, \&quot;date_add\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;lt\&quot; } } &#x60;&#x60;&#x60; Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\CartListResponse**](#CartListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getLastCart**
> \Kinow\Client\Model\CartResponse getLastCart($customer_id)



Get customer last cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[**\Kinow\Client\Model\CartResponse**](#CartResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getLostsCarts**
> \Kinow\Client\Model\CartListResponse getLostsCarts($page, $per_page, $filters, $sort_by, $sort_direction)



Get losts Carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ``` name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt _______________  { \"name\": { \"value\": \"string\", \"operator\": \"contains\" }, \"date_add\": { \"value\": \"string\", \"operator\": \"lt\" } } ``` Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getLostsCarts($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getLostsCarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60; name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt _______________  { \&quot;name\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;contains\&quot; }, \&quot;date_add\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;lt\&quot; } } &#x60;&#x60;&#x60; Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\CartListResponse**](#CartListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPaymentUrl**
> \Kinow\Client\Model\PaymentUrlResponse getPaymentUrl($cart_id, $payment_name)



Get payment gateway URL to use in iframe

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[**\Kinow\Client\Model\PaymentUrlResponse**](#PaymentUrlResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrice**
> \Kinow\Client\Model\CartPrice[] getPrice($body)



Get prices for multiple Carts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$body = new \Kinow\Client\Model\CartIDList(); // \Kinow\Client\Model\CartIDList | List of Cart IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getPrice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\CartIDList**](#\Kinow\Client\Model\CartIDList)| List of Cart IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\CartPrice[]**](#CartPrice)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **preparePayment**
> \Kinow\Client\Model\PaymentDetailsResponse preparePayment($cart_id, $payment_name, $ip_address)



Prepare payment on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name
$ip_address = "ip_address_example"; // string | Use IP address in payment process

try {
    $result = $api_instance->preparePayment($cart_id, $payment_name, $ip_address);
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
 **ip_address** | **string**| Use IP address in payment process | [optional]

### Return type

[**\Kinow\Client\Model\PaymentDetailsResponse**](#PaymentDetailsResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **recurringPayment**
> recurringPayment($cart_id, $payment_name, $payment_argument)



Validate recurring payment on a payment gateway

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name
$payment_argument = new \Kinow\Client\Model\PaymentArguments(); // \Kinow\Client\Model\PaymentArguments | Payment argument

try {
    $api_instance->recurringPayment($cart_id, $payment_name, $payment_argument);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->recurringPayment: ', $e->getMessage(), PHP_EOL;
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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **removeProductFromCart**
> removeProductFromCart($cart_id, $product_id, $product_attribute_id, $gift_id)



Remove product from cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$product_id = 789; // int | Product ID to delete from cart
$product_attribute_id = 789; // int | Product attribute ID, required to add product to cart if product is not a subscription
$gift_id = 789; // int | Gift ID linked to the item in cart

try {
    $api_instance->removeProductFromCart($cart_id, $product_id, $product_attribute_id, $gift_id);
} catch (Exception $e) {
    echo 'Exception when calling CartsApi->removeProductFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| Cart ID to fetch |
 **product_id** | **int**| Product ID to delete from cart |
 **product_attribute_id** | **int**| Product attribute ID, required to add product to cart if product is not a subscription | [optional]
 **gift_id** | **int**| Gift ID linked to the item in cart | [optional]

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCart**
> \Kinow\Client\Model\CartResponse updateCart($cart_id, $body)



Update cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart id
$body = new \Kinow\Client\Model\UpdateCartRequest(); // \Kinow\Client\Model\UpdateCartRequest | Cart settings

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
 **body** | [**\Kinow\Client\Model\UpdateCartRequest**](#\Kinow\Client\Model\UpdateCartRequest)| Cart settings |

### Return type

[**\Kinow\Client\Model\CartResponse**](#CartResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CartsApi();
$cart_id = 789; // int | Cart ID to fetch
$payment_name = "payment_name_example"; // string | Payment gateway name
$payment_argument = new \Kinow\Client\Model\PaymentArgumentsResponse(); // \Kinow\Client\Model\PaymentArgumentsResponse | Payment argument

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
 **payment_argument** | [**\Kinow\Client\Model\PaymentArgumentsResponse**](#\Kinow\Client\Model\PaymentArgumentsResponse)| Payment argument |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

