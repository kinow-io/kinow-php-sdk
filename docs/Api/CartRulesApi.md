# CartRulesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCartRuleToCart**](#attachCartRuleToCart) | **POST** /carts/{cart_id}/cart-rules | 
[**createCartRule**](#createCartRule) | **POST** /cart-rules | 
[**deleteCartRule**](#deleteCartRule) | **DELETE** /cart-rules/{cart_rule_id} | 
[**getCartRule**](#getCartRule) | **GET** /cart-rules/{cart_rule_id} | 
[**getCartRules**](#getCartRules) | **GET** /cart-rules | 
[**updateCartRule**](#updateCartRule) | **PUT** /cart-rules/{cart_rule_id} | 


## **attachCartRuleToCart**
> attachCartRuleToCart($cart_id, $code)



Attach cart rule to cart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartRulesApi();
$cart_id = 789; // int | Cart ID to fetch
$code = "code_example"; // string | Code of the cart rule to attach

try {
    $api_instance->attachCartRuleToCart($cart_id, $code);
} catch (Exception $e) {
    echo 'Exception when calling CartRulesApi->attachCartRuleToCart: ', $e->getMessage(), PHP_EOL;
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

## **createCartRule**
> createCartRule($body)



Create new cart rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartRulesApi();
$body = new \Kaemo\Client\Model\CartRule(); // \Kaemo\Client\Model\CartRule | 

try {
    $api_instance->createCartRule($body);
} catch (Exception $e) {
    echo 'Exception when calling CartRulesApi->createCartRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\CartRule**](#\Kaemo\Client\Model\CartRule)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteCartRule**
> deleteCartRule($cart_rule_id)



Delete cart rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartRulesApi();
$cart_rule_id = 56; // int | 

try {
    $api_instance->deleteCartRule($cart_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling CartRulesApi->deleteCartRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_rule_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCartRule**
> \Kaemo\Client\Model\CartRule getCartRule($cart_rule_id)



Get cart rule by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartRulesApi();
$cart_rule_id = 789; // int | Cart rule ID to fetch

try {
    $result = $api_instance->getCartRule($cart_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartRulesApi->getCartRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_rule_id** | **int**| Cart rule ID to fetch |

### Return type

[**\Kaemo\Client\Model\CartRule**](#CartRule)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCartRules**
> \Kaemo\Client\Model\CartRules getCartRules($page, $per_page)



Get cart rules list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartRulesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCartRules($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartRulesApi->getCartRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\CartRules**](#CartRules)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCartRule**
> updateCartRule($cart_rule_id, $body)



Update cart rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CartRulesApi();
$cart_rule_id = 56; // int | 
$body = new \Kaemo\Client\Model\CartRule(); // \Kaemo\Client\Model\CartRule | 

try {
    $api_instance->updateCartRule($cart_rule_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CartRulesApi->updateCartRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_rule_id** | **int**|  |
 **body** | [**\Kaemo\Client\Model\CartRule**](#\Kaemo\Client\Model\CartRule)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

