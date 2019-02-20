# VideosApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCoverToVideo**](#attachCoverToVideo) | **POST** /videos/{video_id}/cover | 
[**attachFeaturesToVideo**](#attachFeaturesToVideo) | **POST** /videos/{video_id}/features | 
[**attachVideoToProduct**](#attachVideoToProduct) | **POST** /products/{product_id}/videos | 
[**createVideo**](#createVideo) | **POST** /videos | 
[**deleteVideo**](#deleteVideo) | **DELETE** /videos/{video_id} | 
[**getCustomerHasAccessToVideo**](#getCustomerHasAccessToVideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
[**getDisabledSubscriptions**](#getDisabledSubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
[**getDownloadUrl**](#getDownloadUrl) | **GET** /customers/{customer_id}/videos/{video_id}/download | 
[**getMarlinToken**](#getMarlinToken) | **GET** /customers/{customer_id}/videos/{video_id}/marlin | 
[**getPlayerIframe**](#getPlayerIframe) | **GET** /videos/{video_id}/player-iframe | 
[**getPlayerUrl**](#getPlayerUrl) | **GET** /customers/{customer_id}/videos/{video_id}/player | 
[**getVideo**](#getVideo) | **GET** /videos/{video_id} | 
[**getVideoAccess**](#getVideoAccess) | **GET** /videos/{video_id}/customers/{customer_id}/access | 
[**getVideoDownloadUrl**](#getVideoDownloadUrl) | **GET** /videos/{video_id}/download-url | 
[**getVideoFeatures**](#getVideoFeatures) | **GET** /videos/{video_id}/features | 
[**getVideoGeolocation**](#getVideoGeolocation) | **GET** /videos/{video_id}/geolocation | 
[**getVideoGeolocation_0**](#getVideoGeolocation_0) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
[**getVideoPlayerUrl**](#getVideoPlayerUrl) | **GET** /videos/{video_id}/player | 
[**getVideoSubtitles**](#getVideoSubtitles) | **GET** /videos/{video_id}/subtitles | 
[**getVideoViews**](#getVideoViews) | **GET** /videos/{video_id}/views | 
[**getVideos**](#getVideos) | **GET** /videos | 
[**getVideosFromProduct**](#getVideosFromProduct) | **GET** /products/{product_id}/videos | 
[**setVideoGeolocation**](#setVideoGeolocation) | **PUT** /videos/{video_id}/geolocations | 
[**updateVideo**](#updateVideo) | **PUT** /videos/{video_id} | 


## **attachCoverToVideo**
> attachCoverToVideo($video_id, $id_image)



Attach cover to video (the image need to be attached to the product)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$id_image = 789; // int | ID of the image to attach

try {
    $api_instance->attachCoverToVideo($video_id, $id_image);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->attachCoverToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **id_image** | **int**| ID of the image to attach |

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

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:     ```     [{     \"id_feature\":3,     \"id_feature_value\":5     }]     ```      To create a custom FeatureValue:     ```     [{     \"id_feature\":3,     \"custom_value\":[{     \"lang\": 1,     \"value\": \"string\"     }]     }]     ```

try {
    $api_instance->attachFeaturesToVideo($video_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->attachFeaturesToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;id_feature_value\&quot;:5     }]     &#x60;&#x60;&#x60;      To create a custom FeatureValue:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;custom_value\&quot;:[{     \&quot;lang\&quot;: 1,     \&quot;value\&quot;: \&quot;string\&quot;     }]     }]     &#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachVideoToProduct**
> attachVideoToProduct($product_id, $video_id)



Attach video to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$product_id = 789; // int | ID of the product to fetch
$video_id = 789; // int | ID of the video to attach

try {
    $api_instance->attachVideoToProduct($product_id, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->attachVideoToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **video_id** | **int**| ID of the video to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createVideo**
> \Kaemo\Client\Model\Video createVideo($body)



Create new video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$body = new \Kaemo\Client\Model\Video(); // \Kaemo\Client\Model\Video | 

try {
    $result = $api_instance->createVideo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->createVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Video**](#\Kaemo\Client\Model\Video)|  |

### Return type

[**\Kaemo\Client\Model\Video**](#Video)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteVideo**
> deleteVideo($video_id)



Delete video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to delete

try {
    $api_instance->deleteVideo($video_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->deleteVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToVideo**
> getCustomerHasAccessToVideo($customer_id, $video_id)



Get customer access to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$customer_id = 789; // int | ID of the customer to fetch
$video_id = 789; // int | ID of the video to fetch

try {
    $api_instance->getCustomerHasAccessToVideo($customer_id, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getCustomerHasAccessToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **video_id** | **int**| ID of the video to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDisabledSubscriptions**
> \Kaemo\Client\Model\Subscriptions getDisabledSubscriptions($video_id, $page, $per_page)



Get disabled subscriptions list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getDisabledSubscriptions($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getDisabledSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subscriptions**](#Subscriptions)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDownloadUrl**
> \Kaemo\Client\Model\DownloadUrl getDownloadUrl($customer_id, $video_id)



Get video download url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$customer_id = 789; // int | Id of the customer to fetch
$video_id = 789; // int | Id of the video to fetch

try {
    $result = $api_instance->getDownloadUrl($customer_id, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getDownloadUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to fetch |
 **video_id** | **int**| Id of the video to fetch |

### Return type

[**\Kaemo\Client\Model\DownloadUrl**](#DownloadUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getMarlinToken**
> \Kaemo\Client\Model\MarlinToken getMarlinToken($customer_id, $video_id)



Get Marlin access token for a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$customer_id = 789; // int | Id of the customer to fetch
$video_id = 789; // int | Id of the video to fetch

try {
    $result = $api_instance->getMarlinToken($customer_id, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getMarlinToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to fetch |
 **video_id** | **int**| Id of the video to fetch |

### Return type

[**\Kaemo\Client\Model\MarlinToken**](#MarlinToken)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPlayerIframe**
> \Kaemo\Client\Model\VideoUrl getPlayerIframe($video_id, $customer_id)



Get video player url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Id of the video to fetch
$customer_id = 789; // int | Id of the customer to fetch

try {
    $result = $api_instance->getPlayerIframe($video_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getPlayerIframe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Id of the video to fetch |
 **customer_id** | **int**| Id of the customer to fetch | [optional]

### Return type

[**\Kaemo\Client\Model\VideoUrl**](#VideoUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPlayerUrl**
> \Kaemo\Client\Model\VideoUrl getPlayerUrl($customer_id, $video_id)



Get video player url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$customer_id = 789; // int | Id of the customer to fetch
$video_id = 789; // int | Id of the video to fetch

try {
    $result = $api_instance->getPlayerUrl($customer_id, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getPlayerUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to fetch |
 **video_id** | **int**| Id of the video to fetch |

### Return type

[**\Kaemo\Client\Model\VideoUrl**](#VideoUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideo**
> \Kaemo\Client\Model\Video getVideo($video_id)



Get video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch

try {
    $result = $api_instance->getVideo($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |

### Return type

[**\Kaemo\Client\Model\Video**](#Video)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoAccess**
> getVideoAccess($video_id, $customer_id)



Get video access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$customer_id = 789; // int | ID of the customer to fetch

try {
    $api_instance->getVideoAccess($video_id, $customer_id);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **customer_id** | **int**| ID of the customer to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoDownloadUrl**
> \Kaemo\Client\Model\DownloadUrl getVideoDownloadUrl($video_id, $customer_id)



Get video download url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Id of the video to fetch
$customer_id = 789; // int | Id of the customer to fetch

try {
    $result = $api_instance->getVideoDownloadUrl($video_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoDownloadUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Id of the video to fetch |
 **customer_id** | **int**| Id of the customer to fetch | [optional]

### Return type

[**\Kaemo\Client\Model\DownloadUrl**](#DownloadUrl)

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

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoFeatures($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoGeolocation**
> \Kaemo\Client\Model\Geolocs getVideoGeolocation($video_id, $page, $per_page)



Get geoloc list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoGeolocation($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Geolocs**](#Geolocs)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoGeolocation_0**
> getVideoGeolocation_0($video_id, $ip_address, $page, $per_page)



Check access to a product by geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$ip_address = "ip_address_example"; // string | address ip
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getVideoGeolocation_0($video_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoGeolocation_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **ip_address** | **string**| address ip |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoPlayerUrl**
> \Kaemo\Client\Model\PlayerConfiguration getVideoPlayerUrl($video_id, $customer_id)



Get video player url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Id of the video to fetch
$customer_id = 789; // int | 

try {
    $result = $api_instance->getVideoPlayerUrl($video_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoPlayerUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Id of the video to fetch |
 **customer_id** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\PlayerConfiguration**](#PlayerConfiguration)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoSubtitles**
> \Kaemo\Client\Model\Subtitles getVideoSubtitles($video_id, $page, $per_page)



Get video subtitles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoSubtitles($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoSubtitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subtitles**](#Subtitles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoViews**
> \Kaemo\Client\Model\VideoViews getVideoViews($video_id)



Get video views

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch

try {
    $result = $api_instance->getVideoViews($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |

### Return type

[**\Kaemo\Client\Model\VideoViews**](#VideoViews)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideos**
> \Kaemo\Client\Model\Videos getVideos($page, $per_page, $features, $filters, $ip)



Get customer list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=strict&filters[duration][value]=string&filters[duration][operator]=gt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"duration\": {     \"value\": \"string\",     \"operator\": \"gt\"     }     } ```     Operator can be strict, contains, gt or lt.
$ip = "ip_example"; // string | filter by customer ip

try {
    $result = $api_instance->getVideos($page, $per_page, $features, $filters, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;strict&amp;filters[duration][value]&#x3D;string&amp;filters[duration][operator]&#x3D;gt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;duration\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;gt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **ip** | **string**| filter by customer ip | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromProduct**
> \Kaemo\Client\Model\Videos getVideosFromProduct($product_id, $page, $filters, $per_page, $ip, $sort_by, $sort_direction)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=strict&filters[duration][value]=string&filters[duration][operator]=gt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"duration\": {     \"value\": \"string\",     \"operator\": \"gt\"     }     } ```     Operator can be strict, contains, gt or lt.
$per_page = 789; // int | 
$ip = "ip_example"; // string | filter by customer ip
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromProduct($product_id, $page, $filters, $per_page, $ip, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideosFromProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;strict&amp;filters[duration][value]&#x3D;string&amp;filters[duration][operator]&#x3D;gt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;duration\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;gt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **per_page** | **int**|  | [optional]
 **ip** | **string**| filter by customer ip | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **setVideoGeolocation**
> setVideoGeolocation($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries)



Handle geolocation for videos by countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to fetch
$enabled = 56; // int | Enabled
$behavior_detected_countries = "behavior_detected_countries_example"; // string | Behavior for detected countries
$behavior_non_detected_countries = "behavior_non_detected_countries_example"; // string | Behavior for non-detected countries
$countries = "countries_example"; // string | IDs of the non-detected countries separated by comma

try {
    $api_instance->setVideoGeolocation($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->setVideoGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **enabled** | **int**| Enabled |
 **behavior_detected_countries** | **string**| Behavior for detected countries |
 **behavior_non_detected_countries** | **string**| Behavior for non-detected countries |
 **countries** | **string**| IDs of the non-detected countries separated by comma | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateVideo**
> \Kaemo\Client\Model\Video updateVideo($video_id, $body)



Update video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | ID of the video to update
$body = new \Kaemo\Client\Model\Video(); // \Kaemo\Client\Model\Video | 

try {
    $result = $api_instance->updateVideo($video_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->updateVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to update |
 **body** | [**\Kaemo\Client\Model\Video**](#\Kaemo\Client\Model\Video)|  |

### Return type

[**\Kaemo\Client\Model\Video**](#Video)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

