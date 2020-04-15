# VideosApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCoverToVideo**](#attachCoverToVideo) | **POST** /videos/{video_id}/cover | 
[**attachFeaturesToVideo**](#attachFeaturesToVideo) | **POST** /videos/{video_id}/features | 
[**attachVideoToProduct**](#attachVideoToProduct) | **POST** /products/{product_id}/videos | 
[**createVideo**](#createVideo) | **POST** /videos | 
[**deleteVideo**](#deleteVideo) | **DELETE** /videos/{video_id} | 
[**getCategoryVideoPlayer**](#getCategoryVideoPlayer) | **GET** /categories/videos/{video_id}/player | 
[**getCategoryVideoSubtitles**](#getCategoryVideoSubtitles) | **GET** /categories/videos/{video_id}/subtitles | 
[**getCustomerHasAccessToVideo**](#getCustomerHasAccessToVideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
[**getCustomerHasAccessToVideos**](#getCustomerHasAccessToVideos) | **POST** /customers/{customer_id}/videos/has-access | 
[**getDisabledSubscriptions**](#getDisabledSubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
[**getVideo**](#getVideo) | **GET** /videos/{video_id} | 
[**getVideoAccess**](#getVideoAccess) | **GET** /videos/{video_id}/customers/{customer_id}/access | 
[**getVideoBonus**](#getVideoBonus) | **GET** /videos/{video_id}/bonus | 
[**getVideoCover**](#getVideoCover) | **GET** /videos/{video_id}/cover | 
[**getVideoDownloadUrl**](#getVideoDownloadUrl) | **GET** /videos/{video_id}/download-url | 
[**getVideoFeatures**](#getVideoFeatures) | **GET** /videos/{video_id}/features | 
[**getVideoGeolocation**](#getVideoGeolocation) | **GET** /videos/{video_id}/geolocation | 
[**getVideoGeolocationByIp**](#getVideoGeolocationByIp) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
[**getVideoPlayer**](#getVideoPlayer) | **GET** /videos/{video_id}/player | 
[**getVideoSubtitles**](#getVideoSubtitles) | **GET** /videos/{video_id}/subtitles | 
[**getVideoViews**](#getVideoViews) | **GET** /videos/{video_id}/views | 
[**getVideos**](#getVideos) | **GET** /videos | 
[**getVideosFromCategories**](#getVideosFromCategories) | **GET** /categories/videos | 
[**getVideosFromCategory**](#getVideosFromCategory) | **GET** /categories/{category_id}/videos | 
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
$video_id = 789; // int | Video ID to fetch
$id_image = 789; // int | Image ID to attach

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
 **video_id** | **int**| Video ID to fetch |
 **id_image** | **int**| Image ID to attach |

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
$features = "features_example"; // string | To attach existing FeatureValue to Product:      ```      [{      \"id_feature\":3,      \"id_feature_value\":5      }]      ```        To create a custom FeatureValue:      ```      [{      \"id_feature\":3,      \"custom_value\":[{      \"lang\": 1,      \"value\": \"string\"      }]      }]      ```

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
 **features** | **string**| To attach existing FeatureValue to Product:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;id_feature_value\&quot;:5      }]      &#x60;&#x60;&#x60;        To create a custom FeatureValue:      &#x60;&#x60;&#x60;      [{      \&quot;id_feature\&quot;:3,      \&quot;custom_value\&quot;:[{      \&quot;lang\&quot;: 1,      \&quot;value\&quot;: \&quot;string\&quot;      }]      }]      &#x60;&#x60;&#x60; |

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
$product_id = 789; // int | Product ID to fetch
$video_id = 789; // int | Video ID to attach

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
 **product_id** | **int**| Product ID to fetch |
 **video_id** | **int**| Video ID to attach |

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
$video_id = 789; // int | Video ID to fetch

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
 **video_id** | **int**| Video ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryVideoPlayer**
> \Kaemo\Client\Model\Player getCategoryVideoPlayer($video_id, $customer_id, $country_id)



Get video player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$country_id = 789; // int | Country ID to use in video analytics

try {
    $result = $api_instance->getCategoryVideoPlayer($video_id, $customer_id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getCategoryVideoPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **customer_id** | **int**| Customer ID to fetch | [optional]
 **country_id** | **int**| Country ID to use in video analytics | [optional]

### Return type

[**\Kaemo\Client\Model\Player**](#Player)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryVideoSubtitles**
> \Kaemo\Client\Model\VideoSubtitlesResponse getCategoryVideoSubtitles($video_id, $page, $per_page)



Get subtitles of a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCategoryVideoSubtitles($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getCategoryVideoSubtitles: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\VideoSubtitlesResponse**](#VideoSubtitlesResponse)

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
$customer_id = 789; // int | Customer ID to fetch
$video_id = 789; // int | Video ID to fetch

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
 **customer_id** | **int**| Customer ID to fetch |
 **video_id** | **int**| Video ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToVideos**
> \Kaemo\Client\Model\VideoAccessInfo[] getCustomerHasAccessToVideos($customer_id, $body)



Get customer access to Videos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$customer_id = 789; // int | Customer ID to fetch
$body = new \Kaemo\Client\Model\VideoIDList(); // \Kaemo\Client\Model\VideoIDList | List of Video IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getCustomerHasAccessToVideos($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getCustomerHasAccessToVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **body** | [**\Kaemo\Client\Model\VideoIDList**](#\Kaemo\Client\Model\VideoIDList)| List of Video IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kaemo\Client\Model\VideoAccessInfo[]**](#VideoAccessInfo)

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
$video_id = 789; // int | Video ID to fetch
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
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subscriptions**](#Subscriptions)

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
$video_id = 789; // int | Video ID to fetch

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
 **video_id** | **int**| Video ID to fetch |

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
$video_id = 789; // int | Video ID to fetch
$customer_id = 789; // int | Customer ID to fetch

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
 **video_id** | **int**| Video ID to fetch |
 **customer_id** | **int**| Customer ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoBonus**
> \Kaemo\Client\Model\Bonus[] getVideoBonus($video_id)



Get bonus list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch

try {
    $result = $api_instance->getVideoBonus($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoBonus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |

### Return type

[**\Kaemo\Client\Model\Bonus[]**](#Bonus)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoCover**
> \Kaemo\Client\Model\Image getVideoCover($video_id)



Get video cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch

try {
    $result = $api_instance->getVideoCover($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoDownloadUrl**
> \Kaemo\Client\Model\DownloadInformations getVideoDownloadUrl($video_id, $customer_id, $ip_address)



Get video download informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$ip_address = "ip_address_example"; // string | IP address

try {
    $result = $api_instance->getVideoDownloadUrl($video_id, $customer_id, $ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoDownloadUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **customer_id** | **int**| Customer ID to fetch | [optional]
 **ip_address** | **string**| IP address | [optional]

### Return type

[**\Kaemo\Client\Model\DownloadInformations**](#DownloadInformations)

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
$video_id = 789; // int | Video ID to fetch
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

## **getVideoGeolocation**
> \Kaemo\Client\Model\Geolocs getVideoGeolocation($video_id, $page, $per_page)



Get geoloc list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
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
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Geolocs**](#Geolocs)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoGeolocationByIp**
> getVideoGeolocationByIp($video_id, $ip_address, $page, $per_page)



Check access to a video by geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
$ip_address = "ip_address_example"; // string | IP address
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getVideoGeolocationByIp($video_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoGeolocationByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **ip_address** | **string**| IP address |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoPlayer**
> \Kaemo\Client\Model\Player getVideoPlayer($video_id, $customer_id, $country_id, $ip_address)



Get video player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$country_id = 789; // int | Country ID to use in video analytics
$ip_address = "ip_address_example"; // string | IP address

try {
    $result = $api_instance->getVideoPlayer($video_id, $customer_id, $country_id, $ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideoPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **customer_id** | **int**| Customer ID to fetch | [optional]
 **country_id** | **int**| Country ID to use in video analytics | [optional]
 **ip_address** | **string**| IP address | [optional]

### Return type

[**\Kaemo\Client\Model\Player**](#Player)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoSubtitles**
> \Kaemo\Client\Model\VideoSubtitlesResponse getVideoSubtitles($video_id, $page, $per_page)



Get subtitles of a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$video_id = 789; // int | Video ID to fetch
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
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\VideoSubtitlesResponse**](#VideoSubtitlesResponse)

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
$video_id = 789; // int | Video ID to fetch

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
 **video_id** | **int**| Video ID to fetch |

### Return type

[**\Kaemo\Client\Model\VideoViews**](#VideoViews)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideos**
> \Kaemo\Client\Model\Videos2 getVideos($page, $per_page, $features, $filters, $ip)



Get video list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```      features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be strict, contains, gt or lt.      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=strict&duration[value]=string&duration[operator]=gt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"duration\": {      \"value\": \"string\",      \"operator\": \"gt\"      }      } ```      Operator can be strict, contains, gt or lt.
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
 **features** | **string**| &#x60;&#x60;&#x60;      features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be strict, contains, gt or lt.      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;strict&amp;duration[value]&#x3D;string&amp;duration[operator]&#x3D;gt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;duration\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;gt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be strict, contains, gt or lt. | [optional]
 **ip** | **string**| filter by customer ip | [optional]

### Return type

[**\Kaemo\Client\Model\Videos2**](#Videos2)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromCategories**
> \Kaemo\Client\Model\Videos getVideosFromCategories($page, $per_page, $sort_by, $sort_direction)



Get Videos attached to Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromCategories($page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideosFromCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromCategory**
> \Kaemo\Client\Model\Videos getVideosFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction)



Get Videos attached to Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getVideosFromCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromProduct**
> \Kaemo\Client\Model\Videos2 getVideosFromProduct($product_id, $page, $filters, $per_page, $ip, $sort_by, $sort_direction)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\VideosApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=strict&duration[value]=string&duration[operator]=gt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"duration\": {      \"value\": \"string\",      \"operator\": \"gt\"      }      } ```      Operator can be strict, contains, gt or lt.
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
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;strict&amp;duration[value]&#x3D;string&amp;duration[operator]&#x3D;gt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;duration\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;gt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be strict, contains, gt or lt. | [optional]
 **per_page** | **int**|  | [optional]
 **ip** | **string**| filter by customer ip | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Videos2**](#Videos2)

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
$video_id = 789; // int | Video ID to fetch
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
 **video_id** | **int**| Video ID to fetch |
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
$video_id = 789; // int | Video ID to update
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
 **video_id** | **int**| Video ID to update |
 **body** | [**\Kaemo\Client\Model\Video**](#\Kaemo\Client\Model\Video)|  |

### Return type

[**\Kaemo\Client\Model\Video**](#Video)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

