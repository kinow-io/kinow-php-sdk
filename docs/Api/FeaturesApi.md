# FeaturesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachFeaturesToExtract**](#attachFeaturesToExtract) | **POST** /extracts/{extract_id}/features | 
[**attachFeaturesToProduct**](#attachFeaturesToProduct) | **POST** /products/{product_id}/features | 
[**attachFeaturesToVideo**](#attachFeaturesToVideo) | **POST** /videos/{video_id}/features | 
[**detachFeatureToProduct**](#detachFeatureToProduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
[**getCategoryFeatures**](#getCategoryFeatures) | **GET** /categories/{category_id}/features | 
[**getExtractFeatures**](#getExtractFeatures) | **GET** /extracts/{extract_id}/features | 
[**getFeatureValues**](#getFeatureValues) | **GET** /feature-values | 
[**getFeatures**](#getFeatures) | **GET** /features | 
[**getProductFeatures**](#getProductFeatures) | **GET** /products/{product_id}/features | 
[**getVideoFeatures**](#getVideoFeatures) | **GET** /videos/{video_id}/features | 


## **attachFeaturesToExtract**
> attachFeaturesToExtract($extract_id, $features)



Attach feature to extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$extract_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:      ```      [{      \"id_feature\":3,      \"id_feature_value\":5      }]      ```        To create a custom FeatureValue:      ```      [{      \"id_feature\":3,      \"custom_value\":[{      \"lang\": 1,      \"value\": \"string\"      }]      }]      ```

try {
    $api_instance->attachFeaturesToExtract($extract_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->attachFeaturesToExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;id_feature_value\&quot;:5      }]      &#x60;&#x60;&#x60;        To create a custom FeatureValue:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;custom_value\&quot;:[{      \&quot;lang\&quot;: 1,      \&quot;value\&quot;: \&quot;string\&quot;      }]      }]      &#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachFeaturesToProduct**
> attachFeaturesToProduct($product_id, $features)



Attach feature to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$product_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:      ```      [{      \"id_feature\":3,      \"id_feature_value\":5      }]```        To create a custom FeatureValue:      ```      [{      \"id_feature\":3,      \"custom_value\":[{      \"lang\": 1,      \"value\": \"string\"      }]      }]```

try {
    $api_instance->attachFeaturesToProduct($product_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->attachFeaturesToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;id_feature_value\&quot;:5      }]&#x60;&#x60;&#x60;        To create a custom FeatureValue:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;custom_value\&quot;:[{      \&quot;lang\&quot;: 1,      \&quot;value\&quot;: \&quot;string\&quot;      }]      }]&#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachFeaturesToVideo**
> attachFeaturesToVideo($video_id, $features)



Attach feature to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$video_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:      ```      [{      \"id_feature\":3,      \"id_feature_value\":5      }]      ```        To create a custom FeatureValue:      ```      [{      \"id_feature\":3,      \"custom_value\":[{      \"lang\": 1,      \"value\": \"string\"      }]      }]      ```

try {
    $api_instance->attachFeaturesToVideo($video_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->attachFeaturesToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;id_feature_value\&quot;:5      }]      &#x60;&#x60;&#x60;        To create a custom FeatureValue:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;custom_value\&quot;:[{      \&quot;lang\&quot;: 1,      \&quot;value\&quot;: \&quot;string\&quot;      }]      }]      &#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachFeatureToProduct**
> detachFeatureToProduct($product_id, $feature_id)



Detach feature to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$product_id = 789; // int | 
$feature_id = 789; // int | 

try {
    $api_instance->detachFeatureToProduct($product_id, $feature_id);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->detachFeatureToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **feature_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryFeatures**
> \Kaemo\Client\Model\Features getCategoryFeatures($category_id, $page, $per_page)



Get category features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCategoryFeatures($category_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getCategoryFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtractFeatures**
> \Kaemo\Client\Model\Features getExtractFeatures($extract_id, $page, $per_page)



Get extract features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$extract_id = 789; // int | Extract ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getExtractFeatures($extract_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getExtractFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFeatureValues**
> \Kaemo\Client\Model\Products1 getFeatureValues($page, $per_page)



Get feature value list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getFeatureValues($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getFeatureValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Products1**](#Products1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFeatures**
> \Kaemo\Client\Model\Features getFeatures($page, $per_page)



Get feature list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getFeatures($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductFeatures**
> \Kaemo\Client\Model\Features getProductFeatures($product_id, $page, $per_page)



Get product features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductFeatures($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getProductFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoFeatures**
> \Kaemo\Client\Model\Features getVideoFeatures($video_id, $page, $per_page)



Get video features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeaturesApi();
$video_id = 789; // int | Video ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoFeatures($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getVideoFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

