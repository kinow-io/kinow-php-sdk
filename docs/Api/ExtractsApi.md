# ExtractsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCoverToExtract**](#attachCoverToExtract) | **POST** /extracts/{extract_id}/cover | 
[**attachFeaturesToExtract**](#attachFeaturesToExtract) | **POST** /extracts/{extract_id}/features | 
[**createExtract**](#createExtract) | **POST** /extracts | 
[**createSubtitle**](#createSubtitle) | **POST** /extracts/{extract_id}/subtitle | 
[**deleteExtract**](#deleteExtract) | **DELETE** /extracts/{extract_id} | 
[**getExtract**](#getExtract) | **GET** /extracts/{extract_id} | 
[**getExtractFeatures**](#getExtractFeatures) | **GET** /extracts/{extract_id}/features | 
[**getExtractPlayer**](#getExtractPlayer) | **GET** /extracts/{extract_id}/player | 
[**getExtracts**](#getExtracts) | **GET** /extracts | 
[**getProductExtracts**](#getProductExtracts) | **GET** /products/{product_id}/extracts | 
[**updateExtract**](#updateExtract) | **PUT** /extracts/{extract_id} | 


## **attachCoverToExtract**
> attachCoverToExtract($extract_id, $id_image)



Attach cover to extract (the image need to be attached to the product)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch
$id_image = 789; // int | Image ID to attach

try {
    $api_instance->attachCoverToExtract($extract_id, $id_image);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->attachCoverToExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to fetch |
 **id_image** | **int**| Image ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachFeaturesToExtract**
> attachFeaturesToExtract($extract_id, $features)



Attach feature to extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:     ```     [{     \"id_feature\":3,     \"id_feature_value\":5     }]     ```      To create a custom FeatureValue:     ```     [{     \"id_feature\":3,     \"custom_value\":[{     \"lang\": 1,     \"value\": \"string\"     }]     }]     ```

try {
    $api_instance->attachFeaturesToExtract($extract_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->attachFeaturesToExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;id_feature_value\&quot;:5     }]     &#x60;&#x60;&#x60;      To create a custom FeatureValue:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;custom_value\&quot;:[{     \&quot;lang\&quot;: 1,     \&quot;value\&quot;: \&quot;string\&quot;     }]     }]     &#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createExtract**
> \Kinow\Client\Model\Extract createExtract($body)



Create new extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$body = new \Kinow\Client\Model\Extract(); // \Kinow\Client\Model\Extract | 

try {
    $result = $api_instance->createExtract($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->createExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\Extract**](#\Kinow\Client\Model\Extract)|  |

### Return type

[**\Kinow\Client\Model\Extract**](#Extract)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createSubtitle**
> \Kinow\Client\Model\Subtitle createSubtitle($extract_id, $body)



Create new Extract Subtitle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to attach the created Subtitle
$body = new \Kinow\Client\Model\CreateExtractSubtitleRequest(); // \Kinow\Client\Model\CreateExtractSubtitleRequest | Subtitle settings

try {
    $result = $api_instance->createSubtitle($extract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->createSubtitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to attach the created Subtitle |
 **body** | [**\Kinow\Client\Model\CreateExtractSubtitleRequest**](#\Kinow\Client\Model\CreateExtractSubtitleRequest)| Subtitle settings |

### Return type

[**\Kinow\Client\Model\Subtitle**](#Subtitle)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteExtract**
> deleteExtract($extract_id)



Delete extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to update

try {
    $api_instance->deleteExtract($extract_id);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->deleteExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to update |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtract**
> \Kinow\Client\Model\Extract getExtract($extract_id)



Get extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch

try {
    $result = $api_instance->getExtract($extract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to fetch |

### Return type

[**\Kinow\Client\Model\Extract**](#Extract)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtractFeatures**
> \Kinow\Client\Model\Features getExtractFeatures($extract_id, $page, $per_page)



Get extract features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getExtractFeatures($extract_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getExtractFeatures: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtractPlayer**
> \Kinow\Client\Model\Player getExtractPlayer($extract_id)



Get extract's player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch

try {
    $result = $api_instance->getExtractPlayer($extract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getExtractPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to fetch |

### Return type

[**\Kinow\Client\Model\Player**](#Player)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtracts**
> \Kinow\Client\Model\Videos1 getExtracts($page, $per_page, $features, $filters, $ip)



Get extracts list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     name[value]=string&name[operator]=strict&duration[value]=string&duration[operator]=gt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"duration\": {     \"value\": \"string\",     \"operator\": \"gt\"     }     } ```     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$ip = "ip_example"; // string | Filter by user IP

try {
    $result = $api_instance->getExtracts($page, $per_page, $features, $filters, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getExtracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     name[value]&#x3D;string&amp;name[operator]&#x3D;strict&amp;duration[value]&#x3D;string&amp;duration[operator]&#x3D;gt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;duration\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;gt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **ip** | **string**| Filter by user IP | [optional]

### Return type

[**\Kinow\Client\Model\Videos1**](#Videos1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductExtracts**
> \Kinow\Client\Model\Videos1 getProductExtracts($product_id, $ip, $page, $per_page)



Get extracts of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$product_id = 789; // int | Product ID to fetch
$ip = "ip_example"; // string | Filter by user IP
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductExtracts($product_id, $ip, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getProductExtracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **ip** | **string**| Filter by user IP | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\Videos1**](#Videos1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateExtract**
> \Kinow\Client\Model\Extract updateExtract($extract_id, $body)



Update extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch
$body = new \Kinow\Client\Model\Extract(); // \Kinow\Client\Model\Extract | 

try {
    $result = $api_instance->updateExtract($extract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->updateExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to fetch |
 **body** | [**\Kinow\Client\Model\Extract**](#\Kinow\Client\Model\Extract)|  |

### Return type

[**\Kinow\Client\Model\Extract**](#Extract)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

