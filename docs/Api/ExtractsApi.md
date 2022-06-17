# ExtractsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCoverToExtract**](#attachCoverToExtract) | **POST** /extracts/{extract_id}/cover | 
[**attachFeaturesToExtract**](#attachFeaturesToExtract) | **POST** /extracts/{extract_id}/features | 
[**createExtract**](#createExtract) | **POST** /extracts | 
[**createExtractSubtitle**](#createExtractSubtitle) | **POST** /extracts/{extract_id}/subtitle | 
[**deleteExtract**](#deleteExtract) | **DELETE** /extracts/{extract_id} | 
[**getExtract**](#getExtract) | **GET** /extracts/{extract_id} | 
[**getExtractFeatures**](#getExtractFeatures) | **GET** /extracts/{extract_id}/features | 
[**getExtractPlayer**](#getExtractPlayer) | **GET** /extracts/{extract_id}/player | 
[**getExtractSubtitles**](#getExtractSubtitles) | **GET** /extracts/{extract_id}/subtitles | 
[**getExtracts**](#getExtracts) | **GET** /extracts | 
[**getProductExtracts**](#getProductExtracts) | **GET** /products/{product_id}/extracts | 
[**hasAccessToExtracts**](#hasAccessToExtracts) | **POST** /extracts/has-access | 
[**updateExtract**](#updateExtract) | **PUT** /extracts/{extract_id} | 


## **attachCoverToExtract**
> attachCoverToExtract($extract_id, $id_image)



Attach cover to extract (the image need to be attached to the product)

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createExtract**
> \Kinow\Client\Model\ExtractResponse createExtract($body)



Create new extract

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$body = new \Kinow\Client\Model\CreateExtractRequest(); // \Kinow\Client\Model\CreateExtractRequest | 

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
 **body** | [**\Kinow\Client\Model\CreateExtractRequest**](#\Kinow\Client\Model\CreateExtractRequest)|  |

### Return type

[**\Kinow\Client\Model\ExtractResponse**](#ExtractResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createExtractSubtitle**
> \Kinow\Client\Model\SubtitleResponse createExtractSubtitle($extract_id, $body)



Create new Extract Subtitle

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to attach the created Subtitle
$body = new \Kinow\Client\Model\CreateExtractSubtitleRequest(); // \Kinow\Client\Model\CreateExtractSubtitleRequest | Subtitle settings

try {
    $result = $api_instance->createExtractSubtitle($extract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->createExtractSubtitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| Extract ID to attach the created Subtitle |
 **body** | [**\Kinow\Client\Model\CreateExtractSubtitleRequest**](#\Kinow\Client\Model\CreateExtractSubtitleRequest)| Subtitle settings |

### Return type

[**\Kinow\Client\Model\SubtitleResponse**](#SubtitleResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to delete

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
 **extract_id** | **int**| Extract ID to delete |

### Return type

void (empty response body)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtract**
> \Kinow\Client\Model\ExtractResponse getExtract($extract_id)



Get extract

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

[**\Kinow\Client\Model\ExtractResponse**](#ExtractResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

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

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtractPlayer**
> \Kinow\Client\Model\PlayerConfiguration getExtractPlayer($extract_id, $ip_address, $iso_code)



Get extract's player

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch
$ip_address = "ip_address_example"; // string | IP address
$iso_code = "iso_code_example"; // string | Define the player UI language. If not providen, fallback on platform default language.

try {
    $result = $api_instance->getExtractPlayer($extract_id, $ip_address, $iso_code);
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
 **ip_address** | **string**| IP address | [optional]
 **iso_code** | **string**| Define the player UI language. If not providen, fallback on platform default language. | [optional]

### Return type

[**\Kinow\Client\Model\PlayerConfiguration**](#PlayerConfiguration)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtractSubtitles**
> \Kinow\Client\Model\ExtractSubtitlesResponse getExtractSubtitles($extract_id, $page, $per_page)



Get subtitles of an extract

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getExtractSubtitles($extract_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getExtractSubtitles: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\ExtractSubtitlesResponse**](#ExtractSubtitlesResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtracts**
> \Kinow\Client\Model\ExtractListResponse getExtracts($page, $per_page, $features, $filters, $ip)



Get extracts list

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ``` features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict _______________  { \"*\": { \"value\": \"string\", \"operator\": \"strict\" }, \"1\": { \"value\": \"string\", \"operator\": \"contains\" } } ``` Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ``` name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt _______________  { \"name\": { \"value\": \"string\", \"operator\": \"contains\" }, \"date_add\": { \"value\": \"string\", \"operator\": \"lt\" } } ``` Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
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
 **features** | **string**| &#x60;&#x60;&#x60; features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict _______________  { \&quot;*\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;strict\&quot; }, \&quot;1\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;contains\&quot; } } &#x60;&#x60;&#x60; Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60; name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt _______________  { \&quot;name\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;contains\&quot; }, \&quot;date_add\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;lt\&quot; } } &#x60;&#x60;&#x60; Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **ip** | **string**| Filter by user IP | [optional]

### Return type

[**\Kinow\Client\Model\ExtractListResponse**](#ExtractListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductExtracts**
> \Kinow\Client\Model\ExtractListResponse getProductExtracts($product_id, $page, $per_page, $ip)



Get extracts of a product

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$ip = "ip_example"; // string | Filter by user IP

try {
    $result = $api_instance->getProductExtracts($product_id, $page, $per_page, $ip);
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
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **ip** | **string**| Filter by user IP | [optional]

### Return type

[**\Kinow\Client\Model\ExtractListResponse**](#ExtractListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **hasAccessToExtracts**
> \Kinow\Client\Model\ExtractAccessInfo[] hasAccessToExtracts($body)



Check access to Extracts

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$body = new \Kinow\Client\Model\ExtractIDList(); // \Kinow\Client\Model\ExtractIDList | List of Extract IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->hasAccessToExtracts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->hasAccessToExtracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\ExtractIDList**](#\Kinow\Client\Model\ExtractIDList)| List of Extract IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\ExtractAccessInfo[]**](#ExtractAccessInfo)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateExtract**
> \Kinow\Client\Model\ExtractResponse updateExtract($extract_id, $body)



Update extract

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

$api_instance = new Kinow\Client\Api\ExtractsApi();
$extract_id = 789; // int | Extract ID to fetch
$body = new \Kinow\Client\Model\UpdateExtractRequest(); // \Kinow\Client\Model\UpdateExtractRequest | 

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
 **body** | [**\Kinow\Client\Model\UpdateExtractRequest**](#\Kinow\Client\Model\UpdateExtractRequest)|  |

### Return type

[**\Kinow\Client\Model\ExtractResponse**](#ExtractResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

