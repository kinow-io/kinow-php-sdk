# DirectorsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachProductToDirector**](#attachProductToDirector) | **POST** /products/{product_id}/directors | 
[**createDirector**](#createDirector) | **POST** /directors | 
[**deleteDirector**](#deleteDirector) | **DELETE** /directors/{director_id} | 
[**getDirector**](#getDirector) | **GET** /directors/{director_id} | 
[**getDirectorCoverImage**](#getDirectorCoverImage) | **GET** /directors/{director_id}/cover | 
[**getDirectorProducts**](#getDirectorProducts) | **GET** /directors/{director_id}/products | 
[**getDirectorProductsRole**](#getDirectorProductsRole) | **GET** /directors/{director_id}/products-role | 
[**getDirectors**](#getDirectors) | **GET** /directors | 
[**getProductDirectors**](#getProductDirectors) | **GET** /products/{product_id}/directors | 
[**getProductDirectorsRole**](#getProductDirectorsRole) | **GET** /products/{product_id}/directors-role | 
[**updateDirector**](#updateDirector) | **PUT** /directors/{director_id} | 
[**uploadDirectorCover**](#uploadDirectorCover) | **POST** /directors/{director_id}/cover | 


## **attachProductToDirector**
> attachProductToDirector($product_id, $director_id)



Attach product to director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$product_id = 789; // int | Product ID to fetch
$director_id = 789; // int | Director ID to attach

try {
    $api_instance->attachProductToDirector($product_id, $director_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->attachProductToDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **director_id** | **int**| Director ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createDirector**
> \Kaemo\Client\Model\Director createDirector($body)



Create new director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$body = new \Kaemo\Client\Model\Director1(); // \Kaemo\Client\Model\Director1 | Directory settings

try {
    $result = $api_instance->createDirector($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->createDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Director1**](#\Kaemo\Client\Model\Director1)| Directory settings |

### Return type

[**\Kaemo\Client\Model\Director**](#Director)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteDirector**
> deleteDirector($director_id)



Delete director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 56; // int | 

try {
    $api_instance->deleteDirector($director_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->deleteDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirector**
> \Kaemo\Client\Model\Director getDirector($director_id)



Get Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 789; // int | Director ID to fetch

try {
    $result = $api_instance->getDirector($director_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| Director ID to fetch |

### Return type

[**\Kaemo\Client\Model\Director**](#Director)

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

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 789; // int | Director ID to fetch

try {
    $result = $api_instance->getDirectorCoverImage($director_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirectorCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| Director ID to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectorProducts**
> \Kaemo\Client\Model\Products getDirectorProducts($director_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get director products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 789; // int | Director ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip
$features = "features_example"; // string | ```      features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).

try {
    $result = $api_instance->getDirectorProducts($director_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirectorProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| Director ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| filter by customer ip | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;      features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectorProductsRole**
> \Kaemo\Client\Model\Products getDirectorProductsRole($director_id, $page, $per_page)



Get Products linked to Product with their role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 789; // int | Director ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getDirectorProductsRole($director_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirectorProductsRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| Director ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectors**
> \Kaemo\Client\Model\Directors getDirectors($page, $per_page)



Get directors list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getDirectors($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Directors**](#Directors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductDirectors**
> \Kaemo\Client\Model\Directors getProductDirectors($product_id, $page, $per_page, $image_type)



Get directors of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getProductDirectors($product_id, $page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getProductDirectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **image_type** | **string**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Directors**](#Directors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductDirectorsRole**
> \Kaemo\Client\Model\Directors getProductDirectorsRole($product_id, $page, $per_page)



Get Directors attached to Product with their role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductDirectorsRole($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getProductDirectorsRole: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\Directors**](#Directors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateDirector**
> updateDirector($director_id, $body)



Update director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 56; // int | 
$body = new \Kaemo\Client\Model\Director2(); // \Kaemo\Client\Model\Director2 | Directory settings

try {
    $api_instance->updateDirector($director_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->updateDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**|  |
 **body** | [**\Kaemo\Client\Model\Director2**](#\Kaemo\Client\Model\Director2)| Directory settings |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadDirectorCover**
> \Kaemo\Client\Model\Image uploadDirectorCover($director_id, $file, $hash, $hash_algorithm)



Upload director cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 3.4; // float | Director ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadDirectorCover($director_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->uploadDirectorCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **float**| Director ID to fetch |
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

