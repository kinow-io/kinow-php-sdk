# ImagesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActorCoverImage**](#getActorCoverImage) | **GET** /actors/{actor_id}/cover | 
[**getCategoryBanner**](#getCategoryBanner) | **GET** /categories/{category_id}/banner | 
[**getDirectorCoverImage**](#getDirectorCoverImage) | **GET** /directors/{director_id}/cover | 
[**getIntroImage**](#getIntroImage) | **GET** /widgets/intro/images | 
[**getManufacturerCoverImage**](#getManufacturerCoverImage) | **GET** /manufacturers/{manufacturer_id}/cover | 
[**getProductCoverImage**](#getProductCoverImage) | **GET** /products/{product_id}/cover | 
[**getProductImages**](#getProductImages) | **GET** /products/{product_id}/images | 
[**getProductScreenshots**](#getProductScreenshots) | **GET** /products/{product_id}/screenshots | 
[**getSliderImages**](#getSliderImages) | **GET** /widgets/slider/images | 
[**getSubscriptionCoverImage**](#getSubscriptionCoverImage) | **GET** /subscriptions/{subscription_id}/cover | 
[**getSupplierCoverImage**](#getSupplierCoverImage) | **GET** /suppliers/{supplier_id}/cover | 
[**getVideoCover**](#getVideoCover) | **GET** /videos/{video_id}/cover | 
[**uploadActorCover**](#uploadActorCover) | **POST** /actors/{actor_id}/cover | 
[**uploadCategoryBanner**](#uploadCategoryBanner) | **POST** /category/{category_id}/banner | 
[**uploadDirectorCover**](#uploadDirectorCover) | **POST** /directors/{director_id}/cover | 
[**uploadProductCover**](#uploadProductCover) | **POST** /products/{product_id}/cover | 
[**uploadProductScreenshot**](#uploadProductScreenshot) | **PUT** /products/{product_id}/screenshots/{image_id} | 
[**uploadProductScreenshot_0**](#uploadProductScreenshot_0) | **DELETE** /products/{product_id}/screenshots/{image_id} | 
[**uploadProductScreenshots**](#uploadProductScreenshots) | **POST** /products/{product_id}/screenshots | 
[**uploadSubscriptionCover**](#uploadSubscriptionCover) | **POST** /subscriptions/{subscription_id}/cover | 


## **getActorCoverImage**
> \Kaemo\Client\Model\Image getActorCoverImage($to_id)



Get cover image of an actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$to_id = 789; // int | ID of the actor to fetch

try {
    $result = $api_instance->getActorCoverImage($to_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getActorCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_id** | **int**| ID of the actor to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryBanner**
> \Kaemo\Client\Model\Image getCategoryBanner($category_id)



Get banner of a category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$category_id = 789; // int | ID of the category to fetch

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
 **category_id** | **int**| ID of the category to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectorCoverImage**
> \Kaemo\Client\Model\Image getDirectorCoverImage($director_id)



Get cover image of a director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$director_id = 789; // int | ID of the director to fetch

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
 **director_id** | **int**| ID of the director to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getIntroImage**
> \Kaemo\Client\Model\Image[] getIntroImage()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();

try {
    $result = $api_instance->getIntroImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getIntroImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kaemo\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getManufacturerCoverImage**
> \Kaemo\Client\Model\Image getManufacturerCoverImage($manufacturer_id)



Please, use __/directors/{actor_id}/cover__

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$manufacturer_id = 789; // int | ID of the manufacturer to fetch

try {
    $result = $api_instance->getManufacturerCoverImage($manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getManufacturerCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **int**| ID of the manufacturer to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCoverImage**
> \Kaemo\Client\Model\Image getProductCoverImage($product_id)



Get cover image of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 789; // int | ID of the product to fetch

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
 **product_id** | **int**| ID of the product to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductImages**
> \Kaemo\Client\Model\ProductImagesResponse getProductImages($product_id, $type, $page, $per_page)



Get images attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 789; // int | ID of the product to fetch
$type = "type_example"; // string | type as screen_small or screen_large
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
 **product_id** | **int**| ID of the product to fetch |
 **type** | **string**| type as screen_small or screen_large | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\ProductImagesResponse**](#ProductImagesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductScreenshots**
> \Kaemo\Client\Model\Screenshot[] getProductScreenshots($product_id)



Get product screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 789; // int | ID of the product to fetch

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
 **product_id** | **int**| ID of the product to fetch |

### Return type

[**\Kaemo\Client\Model\Screenshot[]**](#Screenshot)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSliderImages**
> \Kaemo\Client\Model\Image[] getSliderImages()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();

try {
    $result = $api_instance->getSliderImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSliderImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kaemo\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCoverImage**
> \Kaemo\Client\Model\Image getSubscriptionCoverImage($subscription_id)



Get cover image of a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$subscription_id = 789; // int | ID of the subscription to fetch

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
 **subscription_id** | **int**| ID of the subscription to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSupplierCoverImage**
> \Kaemo\Client\Model\Image getSupplierCoverImage($supplier_id)



Please, use __/actors/{actor_id}/cover__

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$supplier_id = 789; // int | ID of the supplier to fetch

try {
    $result = $api_instance->getSupplierCoverImage($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSupplierCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | **int**| ID of the supplier to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoCover**
> \Kaemo\Client\Model\Image getVideoCover($video)



Get video cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$video = 789; // int | ID of the video to fetch

try {
    $result = $api_instance->getVideoCover($video);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getVideoCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video** | **int**| ID of the video to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadActorCover**
> \Kaemo\Client\Model\Image uploadActorCover($actor_id, $file, $hash, $hash_algorithm)



Upload actor cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$actor_id = 3.4; // float | Id of the actor
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
 **actor_id** | **float**| Id of the actor |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadCategoryBanner**
> \Kaemo\Client\Model\Image uploadCategoryBanner($category_id, $file, $hash, $hash_algorithm)



Upload category banner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$category_id = 3.4; // float | Id of the category
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadCategoryBanner($category_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadCategoryBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **float**| Id of the category |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadDirectorCover**
> \Kaemo\Client\Model\Image uploadDirectorCover($director_id, $file, $hash, $hash_algorithm)



Upload director cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$director_id = 3.4; // float | Id of the director
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
 **director_id** | **float**| Id of the director |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadProductCover**
> \Kaemo\Client\Model\Image uploadProductCover($product_id, $file, $hash, $hash_algorithm)



Upload product cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 3.4; // float | Id of the product
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
 **product_id** | **float**| Id of the product |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadProductScreenshot**
> \Kaemo\Client\Model\Screenshot uploadProductScreenshot($product_id, $image_id, $position)



Upload product screenshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 3.4; // float | Id of the product
$image_id = 3.4; // float | Id of the product
$position = 3.4; // float | 

try {
    $result = $api_instance->uploadProductScreenshot($product_id, $image_id, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadProductScreenshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **float**| Id of the product |
 **image_id** | **float**| Id of the product |
 **position** | **float**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Screenshot**](#Screenshot)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadProductScreenshot_0**
> uploadProductScreenshot_0($product_id, $image_id)



Upload product screenshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 3.4; // float | Id of the product
$image_id = 3.4; // float | Id of the image to delete

try {
    $api_instance->uploadProductScreenshot_0($product_id, $image_id);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadProductScreenshot_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **float**| Id of the product |
 **image_id** | **float**| Id of the image to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadProductScreenshots**
> \Kaemo\Client\Model\Screenshot[] uploadProductScreenshots($product_id, $file, $hash, $hash_algorithm, $position)



Upload product screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 3.4; // float | Id of the product
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)
$position = 3.4; // float | 

try {
    $result = $api_instance->uploadProductScreenshots($product_id, $file, $hash, $hash_algorithm, $position);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->uploadProductScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **float**| Id of the product |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]
 **position** | **float**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Screenshot[]**](#Screenshot)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

## **uploadSubscriptionCover**
> \Kaemo\Client\Model\Image uploadSubscriptionCover($subscription_id, $file, $hash, $hash_algorithm)



Upload subscription cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$subscription_id = 3.4; // float | Id of the subscription
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
 **subscription_id** | **float**| Id of the subscription |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

