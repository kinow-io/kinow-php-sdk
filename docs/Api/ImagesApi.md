# ImagesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActorCoverImage**](#getActorCoverImage) | **GET** /actors/{actor_id}/cover | 
[**getCategoryBanner**](#getCategoryBanner) | **GET** /categories/{category_id}/banner | 
[**getCategoryImageTypes**](#getCategoryImageTypes) | **GET** /categories/image-types | 
[**getCategoryImages**](#getCategoryImages) | **GET** /categories/{category_id}/images | 
[**getDirectorCoverImage**](#getDirectorCoverImage) | **GET** /directors/{director_id}/cover | 
[**getProductCoverImage**](#getProductCoverImage) | **GET** /products/{product_id}/cover | 
[**getProductImageTypes**](#getProductImageTypes) | **GET** /products/image-types | 
[**getProductImages**](#getProductImages) | **GET** /products/{product_id}/images | 
[**getProductScreenshots**](#getProductScreenshots) | **GET** /products/{product_id}/screenshots | 
[**getSliderImage**](#getSliderImage) | **GET** /widgets/slider/images | 
[**getSubscriptionCoverImage**](#getSubscriptionCoverImage) | **GET** /subscriptions/{subscription_id}/cover | 
[**getVideoCover**](#getVideoCover) | **GET** /videos/{video_id}/cover | 
[**uploadActorCover**](#uploadActorCover) | **POST** /actors/{actor_id}/cover | 
[**uploadCategoryCover**](#uploadCategoryCover) | **POST** /categories/{category_id}/cover | 
[**uploadCategoryImage**](#uploadCategoryImage) | **POST** /categories/{category_id}/image | 
[**uploadDirectorCover**](#uploadDirectorCover) | **POST** /directors/{director_id}/cover | 
[**uploadProductCover**](#uploadProductCover) | **POST** /products/{product_id}/cover | 
[**uploadProductImage**](#uploadProductImage) | **POST** /products/{product_id}/image | 
[**uploadSubscriptionCover**](#uploadSubscriptionCover) | **POST** /subscriptions/{subscription_id}/cover | 


## **getActorCoverImage**
> \Kinow\Client\Model\ImageResponse getActorCoverImage($actor_id)



Get cover image of an actor

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$actor_id = 789; // int | Actor ID to fetch

try {
    $result = $api_instance->getActorCoverImage($actor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getActorCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**| Actor ID to fetch |

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryBanner**
> \Kinow\Client\Model\ImageResponse getCategoryBanner($category_id)



Get Category cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$category_id = 789; // int | Category ID to fetch

try {
    $result = $api_instance->getCategoryBanner($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getCategoryBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryImageTypes**
> \Kinow\Client\Model\ImageType[] getCategoryImageTypes()



Get image types for categories

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

$api_instance = new Kinow\Client\Api\ImagesApi();

try {
    $result = $api_instance->getCategoryImageTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getCategoryImageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\ImageType[]**](#ImageType)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryImages**
> \Kinow\Client\Model\CategoryImagesListResponse getCategoryImages($category_id, $type, $page, $per_page)



Get images attached to Category

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$category_id = 789; // int | Category ID to fetch
$type = "type_example"; // string | Filter on specific Image type
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCategoryImages($category_id, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getCategoryImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **type** | **string**| Filter on specific Image type | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\CategoryImagesListResponse**](#CategoryImagesListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectorCoverImage**
> \Kinow\Client\Model\ImageResponse getDirectorCoverImage($director_id)



Get cover image of a director

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$director_id = 789; // int | Director ID to fetch

try {
    $result = $api_instance->getDirectorCoverImage($director_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getDirectorCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| Director ID to fetch |

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCoverImage**
> \Kinow\Client\Model\ImageResponse getProductCoverImage($product_id)



Get cover image of a product

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductCoverImage($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getProductCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductImageTypes**
> \Kinow\Client\Model\ImageType[] getProductImageTypes()



Get image types for products

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

$api_instance = new Kinow\Client\Api\ImagesApi();

try {
    $result = $api_instance->getProductImageTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getProductImageTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\ImageType[]**](#ImageType)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductImages**
> \Kinow\Client\Model\ImageListResponse getProductImages($product_id, $type, $page, $per_page)



Get images attached to product

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$product_id = 789; // int | Product ID to fetch
$type = "type_example"; // string | Filter on specific Image type
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductImages($product_id, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getProductImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **type** | **string**| Filter on specific Image type | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\ImageListResponse**](#ImageListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductScreenshots**
> \Kinow\Client\Model\Image[] getProductScreenshots($product_id)



Get product screenshots

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductScreenshots($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getProductScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\Image[]**](#Image)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSliderImage**
> \Kinow\Client\Model\ImageListResponse getSliderImage()



Get slider images

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

$api_instance = new Kinow\Client\Api\ImagesApi();

try {
    $result = $api_instance->getSliderImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSliderImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kinow\Client\Model\ImageListResponse**](#ImageListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCoverImage**
> \Kinow\Client\Model\ImageResponse getSubscriptionCoverImage($subscription_id)



Get cover image of a subscription

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$subscription_id = 789; // int | Subscription ID to fetch

try {
    $result = $api_instance->getSubscriptionCoverImage($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSubscriptionCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription ID to fetch |

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoCover**
> \Kinow\Client\Model\ImageResponse getVideoCover($video_id)



Get video cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$video_id = 789; // int | Video ID to fetch

try {
    $result = $api_instance->getVideoCover($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getVideoCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadActorCover**
> \Kinow\Client\Model\ImageResponse uploadActorCover($actor_id, $file, $hash, $hash_algorithm)



Upload actor cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$actor_id = 3.4; // float | Actor ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadActorCover($actor_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadActorCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **float**| Actor ID to fetch |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadCategoryCover**
> \Kinow\Client\Model\ImageResponse uploadCategoryCover($category_id, $file, $hash, $hash_algorithm)



Upload Category cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$category_id = 3.4; // float | Category ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadCategoryCover($category_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadCategoryCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **float**| Category ID to fetch |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadCategoryImage**
> \Kinow\Client\Model\ImageResponse uploadCategoryImage($category_id, $image_type_name, $file, $hash, $hash_algorithm)



Upload Category image

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$category_id = 3.4; // float | Category ID to fetch
$image_type_name = "image_type_name_example"; // string | Image types name to use to generate image assets
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadCategoryImage($category_id, $image_type_name, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadCategoryImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **float**| Category ID to fetch |
 **image_type_name** | **string**| Image types name to use to generate image assets |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadDirectorCover**
> \Kinow\Client\Model\ImageResponse uploadDirectorCover($director_id, $file, $hash, $hash_algorithm)



Upload director cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$director_id = 3.4; // float | Director ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadDirectorCover($director_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadDirectorCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **float**| Director ID to fetch |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadProductCover**
> \Kinow\Client\Model\ImageResponse uploadProductCover($product_id, $file, $hash, $hash_algorithm)



Upload product cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$product_id = 3.4; // float | Product ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadProductCover($product_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadProductCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **float**| Product ID to fetch |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadProductImage**
> \Kinow\Client\Model\ImageResponse uploadProductImage($product_id, $image_type_name, $file, $hash, $hash_algorithm)



Upload product image

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$product_id = 3.4; // float | Product ID to fetch
$image_type_name = "image_type_name_example"; // string | Image types name to use to generate image assets
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadProductImage($product_id, $image_type_name, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadProductImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **float**| Product ID to fetch |
 **image_type_name** | **string**| Image types name to use to generate image assets |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadSubscriptionCover**
> \Kinow\Client\Model\ImageResponse uploadSubscriptionCover($subscription_id, $file, $hash, $hash_algorithm)



Upload subscription cover

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

$api_instance = new Kinow\Client\Api\ImagesApi();
$subscription_id = 3.4; // float | Subscription ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadSubscriptionCover($subscription_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadSubscriptionCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **float**| Subscription ID to fetch |
 **file** | **\SplFileObject**|  | [optional]
 **hash** | **string**|  | [optional]
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\ImageResponse**](#ImageResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

