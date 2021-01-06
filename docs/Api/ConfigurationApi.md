# ConfigurationApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfiguration**](#getConfiguration) | **GET** /configuration | 
[**getConfigurationByName**](#getConfigurationByName) | **GET** /configuration/{configuration_name} | 
[**getConfigurationLogo**](#getConfigurationLogo) | **GET** /configuration/logo | 
[**getConfigurationSocial**](#getConfigurationSocial) | **GET** /configuration/social | 


## **getConfiguration**
> \Kinow\Client\Model\ConfigurationList getConfiguration($page, $per_page)



Get configuration by name.      Available :         - LANG_DEFAULT         - CURRENCY_DEFAULT         - COUNTRY_DEFAULT         - TIMEZONE         - FORCE_TAX_ID         - NB_DAYS_NEW_PRODUCT         - COPYRIGHT         - CUSTOMER_REGISTRATION         - CATALOG_RESTRICTED         - PLATFORM_NAME         - RECAPTCHA_KEY

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ConfigurationApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getConfiguration($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\ConfigurationList**](#ConfigurationList)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getConfigurationByName**
> \Kinow\Client\Model\Configuration getConfigurationByName($configuration_name)



Get configuration by name.     Available :     - LANG_DEFAULT     - CURRENCY_DEFAULT     - COUNTRY_DEFAULT     - TIMEZONE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ConfigurationApi();
$configuration_name = "configuration_name_example"; // string | 

try {
    $result = $api_instance->getConfigurationByName($configuration_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfigurationByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuration_name** | **string**|  |

### Return type

[**\Kinow\Client\Model\Configuration**](#Configuration)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getConfigurationLogo**
> \Kinow\Client\Model\LogoSettings getConfigurationLogo()



Get logo settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ConfigurationApi();

try {
    $result = $api_instance->getConfigurationLogo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfigurationLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\LogoSettings**](#LogoSettings)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getConfigurationSocial**
> \Kinow\Client\Model\SocialSettings getConfigurationSocial()



Get social networks settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ConfigurationApi();

try {
    $result = $api_instance->getConfigurationSocial();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfigurationSocial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\SocialSettings**](#SocialSettings)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

