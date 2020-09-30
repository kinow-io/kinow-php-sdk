# ProductsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associateProducts**](#associateProducts) | **POST** /products/{product_id}/products | 
[**attachFeaturesToProduct**](#attachFeaturesToProduct) | **POST** /products/{product_id}/features | 
[**attachProductToActor**](#attachProductToActor) | **POST** /products/{product_id}/actors | 
[**attachProductToCategory**](#attachProductToCategory) | **POST** /products/{product_id}/categories | 
[**attachProductToDirector**](#attachProductToDirector) | **POST** /products/{product_id}/directors | 
[**attachProductToGroup**](#attachProductToGroup) | **POST** /products/{product_id}/groups | 
[**attachVideoToProduct**](#attachVideoToProduct) | **POST** /products/{product_id}/videos | 
[**createProduct**](#createProduct) | **POST** /products | 
[**deleteProduct**](#deleteProduct) | **DELETE** /products/{product_id} | 
[**detachFeatureToProduct**](#detachFeatureToProduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
[**detachProductFromCategory**](#detachProductFromCategory) | **DELETE** /products/{product_id}/categories/{category_id} | 
[**detachProductFromGroup**](#detachProductFromGroup) | **DELETE** /products/{product_id}/groups/{group_id} | 
[**getBestSales**](#getBestSales) | **GET** /products/best-sales | 
[**getCategoryProducts**](#getCategoryProducts) | **GET** /categories/{category_id}/products | 
[**getCustomerHasAccessToProduct**](#getCustomerHasAccessToProduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
[**getCustomerHasAccessToProducts**](#getCustomerHasAccessToProducts) | **POST** /customers/{customer_id}/products/has-access | 
[**getPrice**](#getPrice) | **POST** /products/price | 
[**getProduct**](#getProduct) | **GET** /products/{product_id} | 
[**getProductActors**](#getProductActors) | **GET** /products/{product_id}/actors | 
[**getProductActorsRole**](#getProductActorsRole) | **GET** /products/{product_id}/actors-role | 
[**getProductAttributes**](#getProductAttributes) | **GET** /products/{product_id}/attributes | 
[**getProductAvailability**](#getProductAvailability) | **GET** /products/{product_id}/access | 
[**getProductCategories**](#getProductCategories) | **GET** /products/{product_id}/categories | 
[**getProductCoverImage**](#getProductCoverImage) | **GET** /products/{product_id}/cover | 
[**getProductDirectors**](#getProductDirectors) | **GET** /products/{product_id}/directors | 
[**getProductDirectorsRole**](#getProductDirectorsRole) | **GET** /products/{product_id}/directors-role | 
[**getProductExtracts**](#getProductExtracts) | **GET** /products/{product_id}/extracts | 
[**getProductFeatures**](#getProductFeatures) | **GET** /products/{product_id}/features | 
[**getProductGeolocations**](#getProductGeolocations) | **GET** /products/{product_id}/geolocations | 
[**getProductGeolocationsByIp**](#getProductGeolocationsByIp) | **POST** /products/{product_id}/geolocations | 
[**getProductGroups**](#getProductGroups) | **GET** /products/{product_id}/groups | 
[**getProductImages**](#getProductImages) | **GET** /products/{product_id}/images | 
[**getProductScreenshots**](#getProductScreenshots) | **GET** /products/{product_id}/screenshots | 
[**getProductSubscription**](#getProductSubscription) | **GET** /products/{product_id}/subscription | 
[**getProducts**](#getProducts) | **GET** /products | 
[**getProductsFromProduct**](#getProductsFromProduct) | **GET** /products/{product_id}/products | 
[**getVideoGroupsFromProduct**](#getVideoGroupsFromProduct) | **GET** /products/{product_id}/video-groups | 
[**getVideosFromProduct**](#getVideosFromProduct) | **GET** /products/{product_id}/videos | 
[**searchProducts**](#searchProducts) | **GET** /products/search/{search_query} | 
[**setProductGeolocation**](#setProductGeolocation) | **PUT** /products/{product_id}/geolocations | 
[**updateProduct**](#updateProduct) | **PUT** /products/{product_id} | 
[**updateProductGroupRestrictionBehavior**](#updateProductGroupRestrictionBehavior) | **PUT** /products/{product_id}/groups/behavior | 
[**uploadProductCover**](#uploadProductCover) | **POST** /products/{product_id}/cover | 


## **associateProducts**
> associateProducts($product_id, $associated_product_ids)



Associate products to another product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$associated_product_ids = "associated_product_ids_example"; // string | Products IDs to associate to another product. IDs must be separated with comma (,)

try {
    $api_instance->associateProducts($product_id, $associated_product_ids);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->associateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **associated_product_ids** | **string**| Products IDs to associate to another product. IDs must be separated with comma (,) |

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

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:      ```      [{      \"id_feature\":3,      \"id_feature_value\":5      }]```        To create a custom FeatureValue:      ```      [{      \"id_feature\":3,      \"custom_value\":[{      \"lang\": 1,      \"value\": \"string\"      }]      }]```

try {
    $api_instance->attachFeaturesToProduct($product_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachFeaturesToProduct: ', $e->getMessage(), PHP_EOL;
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

## **attachProductToActor**
> attachProductToActor($product_id, $actor_id)



Attach product to actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$actor_id = 789; // int | Actor ID to attach

try {
    $api_instance->attachProductToActor($product_id, $actor_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachProductToActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **actor_id** | **int**| Actor ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachProductToCategory**
> attachProductToCategory($product_id, $category_id)



Attach product to category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$category_id = 789; // int | Category ID to attach

try {
    $api_instance->attachProductToCategory($product_id, $category_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachProductToCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **category_id** | **int**| Category ID to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachProductToDirector**
> attachProductToDirector($product_id, $director_id)



Attach product to director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$director_id = 789; // int | Director ID to attach

try {
    $api_instance->attachProductToDirector($product_id, $director_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachProductToDirector: ', $e->getMessage(), PHP_EOL;
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

## **attachProductToGroup**
> attachProductToGroup($product_id, $group_id)



Attach product to group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$group_id = 789; // int | Group ID to attach

try {
    $api_instance->attachProductToGroup($product_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachProductToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **group_id** | **int**| Group ID to attach |

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

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$video_id = 789; // int | Video ID to attach

try {
    $api_instance->attachVideoToProduct($product_id, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachVideoToProduct: ', $e->getMessage(), PHP_EOL;
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

## **createProduct**
> \Kinow\Client\Model\Product createProduct($body)



Create new product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$body = new \Kinow\Client\Model\Product(); // \Kinow\Client\Model\Product | 

try {
    $result = $api_instance->createProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\Product**](#\Kinow\Client\Model\Product)|  |

### Return type

[**\Kinow\Client\Model\Product**](#Product)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteProduct**
> deleteProduct($product_id)



Delete product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $api_instance->deleteProduct($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

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

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | 
$feature_id = 789; // int | 

try {
    $api_instance->detachFeatureToProduct($product_id, $feature_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->detachFeatureToProduct: ', $e->getMessage(), PHP_EOL;
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

## **detachProductFromCategory**
> detachProductFromCategory($product_id, $category_id)



Detach product from category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$category_id = 789; // int | Category ID to detach

try {
    $api_instance->detachProductFromCategory($product_id, $category_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->detachProductFromCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **category_id** | **int**| Category ID to detach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachProductFromGroup**
> detachProductFromGroup($product_id, $group_id)



Detach product from group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$group_id = 789; // int | Group ID to detach

try {
    $api_instance->detachProductFromGroup($product_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->detachProductFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **group_id** | **int**| Group ID to detach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getBestSales**
> \Kinow\Client\Model\Products getBestSales($page, $per_page, $ip)



Get most saled Products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$ip = "ip_example"; // string | filter by Customer IP

try {
    $result = $api_instance->getBestSales($page, $per_page, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getBestSales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **ip** | **string**| filter by Customer IP | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryProducts**
> \Kinow\Client\Model\Products getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get category products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | Filter by user IP
$features = "features_example"; // string | ```      features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name][operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).

try {
    $result = $api_instance->getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCategoryProducts: ', $e->getMessage(), PHP_EOL;
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
 **ip** | **string**| Filter by user IP | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;      features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name][operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToProduct**
> getCustomerHasAccessToProduct($customer_id, $product_id)



Get customer access to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$customer_id = 789; // int | Customer ID to fetch
$product_id = 789; // int | Product ID to fetch

try {
    $api_instance->getCustomerHasAccessToProduct($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCustomerHasAccessToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **product_id** | **int**| Product ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToProducts**
> \Kinow\Client\Model\ProductAccessInfo[] getCustomerHasAccessToProducts($customer_id, $body)



Get customer access to Products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$customer_id = 789; // int | Customer ID to fetch
$body = new \Kinow\Client\Model\ProductIDList(); // \Kinow\Client\Model\ProductIDList | List of Product IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getCustomerHasAccessToProducts($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCustomerHasAccessToProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **body** | [**\Kinow\Client\Model\ProductIDList**](#\Kinow\Client\Model\ProductIDList)| List of Product IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\ProductAccessInfo[]**](#ProductAccessInfo)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPrice**
> \Kinow\Client\Model\ProductPrice[] getPrice($body)



Get prices for multiple Products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$body = new \Kinow\Client\Model\ProductIDList1(); // \Kinow\Client\Model\ProductIDList1 | List of Product IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getPrice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\ProductIDList1**](#\Kinow\Client\Model\ProductIDList1)| List of Product IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\ProductPrice[]**](#ProductPrice)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProduct**
> \Kinow\Client\Model\Product getProduct($product_id)



Get product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\Product**](#Product)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductActors**
> \Kinow\Client\Model\Actors getProductActors($product_id, $page, $per_page, $image_type)



Get actors attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getProductActors($product_id, $page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductActors: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Actors**](#Actors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductActorsRole**
> \Kinow\Client\Model\Actors getProductActorsRole($product_id, $page, $per_page)



Get Actors attached to Product with their role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductActorsRole($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductActorsRole: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Actors**](#Actors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAttributes**
> \Kinow\Client\Model\ProductAttributesResponse getProductAttributes($product_id, $page, $per_page)



Get Product attributes. Mandatory to add TVOD Product in cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductAttributes($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAttributes: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\ProductAttributesResponse**](#ProductAttributesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAvailability**
> getProductAvailability($product_id)



Get availability of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $api_instance->getProductAvailability($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCategories**
> \Kinow\Client\Model\Categories getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get product categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Categories**](#Categories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCoverImage**
> \Kinow\Client\Model\Image getProductCoverImage($product_id)



Get cover image of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductCoverImage($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductDirectors**
> \Kinow\Client\Model\Directors getProductDirectors($product_id, $page, $per_page, $image_type)



Get directors of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$image_type = "image_type_example"; // string | 

try {
    $result = $api_instance->getProductDirectors($product_id, $page, $per_page, $image_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductDirectors: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Directors**](#Directors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductDirectorsRole**
> \Kinow\Client\Model\Directors getProductDirectorsRole($product_id, $page, $per_page)



Get Directors attached to Product with their role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductDirectorsRole($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductDirectorsRole: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Directors**](#Directors)

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

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$ip = "ip_example"; // string | Filter by user IP
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductExtracts($product_id, $ip, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductExtracts: ', $e->getMessage(), PHP_EOL;
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

## **getProductFeatures**
> \Kinow\Client\Model\Features getProductFeatures($product_id, $page, $per_page)



Get product features

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductFeatures($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductFeatures: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocations**
> \Kinow\Client\Model\Geolocs getProductGeolocations($product_id, $page, $per_page)



Get product geolocation restrictions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductGeolocations($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductGeolocations: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Geolocs**](#Geolocs)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocationsByIp**
> getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page)



Check product access using geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$ip_address = "ip_address_example"; // string | address ip
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductGeolocationsByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
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

## **getProductGroups**
> \Kinow\Client\Model\Groups getProductGroups($product_id, $page, $per_page)



Get groups allowed to see this product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductGroups($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\Groups**](#Groups)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductImages**
> \Kinow\Client\Model\ProductImagesResponse getProductImages($product_id, $type, $page, $per_page)



Get images attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$type = "type_example"; // string | Filter on specific Image type
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductImages($product_id, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductImages: ', $e->getMessage(), PHP_EOL;
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

[**\Kinow\Client\Model\ProductImagesResponse**](#ProductImagesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductScreenshots**
> \Kinow\Client\Model\Screenshot[] getProductScreenshots($product_id)



Get product screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductScreenshots($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\Screenshot[]**](#Screenshot)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductSubscription**
> \Kinow\Client\Model\Subscription getProductSubscription($product_id)



Get Subscription linked to a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductSubscription($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\Subscription**](#Subscription)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProducts**
> \Kinow\Client\Model\Products getProducts($page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip, $customer_id)



Get products list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```      featureId[value]=string&featureId[operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | Filter by user IP
$customer_id = "customer_id_example"; // string | Check if customer can see this product, if it's group is not restricted

try {
    $result = $api_instance->getProducts($page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;      featureId[value]&#x3D;string&amp;featureId[operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| Filter by user IP | [optional]
 **customer_id** | **string**| Check if customer can see this product, if it&#39;s group is not restricted | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductsFromProduct**
> \Kinow\Client\Model\Products getProductsFromProduct($product_id, $page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip)



Get products linked to another product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```      featureId[value]=string&featureId[operator]=strict      _______________        {      \"*\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"1\": {      \"value\": \"string\",      \"operator\": \"contains\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | Filter by user IP

try {
    $result = $api_instance->getProductsFromProduct($product_id, $page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsFromProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;      featureId[value]&#x3D;string&amp;featureId[operator]&#x3D;strict      _______________        {      \&quot;*\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;1\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).      To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| Filter by user IP | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoGroupsFromProduct**
> \Kinow\Client\Model\VideoGroup1 getVideoGroupsFromProduct($product_id, $page, $filters, $per_page, $sort_by, $sort_direction)



Get Video Groups attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=strict&duration[value]=string&duration[operator]=gt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"duration\": {      \"value\": \"string\",      \"operator\": \"gt\"      }      } ```      Operator can be strict, contains, gt or lt.
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideoGroupsFromProduct($product_id, $page, $filters, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getVideoGroupsFromProduct: ', $e->getMessage(), PHP_EOL;
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
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\VideoGroup1**](#VideoGroup1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromProduct**
> \Kinow\Client\Model\Videos2 getVideosFromProduct($product_id, $page, $filters, $per_page, $ip, $sort_by, $sort_direction)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=strict&duration[value]=string&duration[operator]=gt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"strict\"      },      \"duration\": {      \"value\": \"string\",      \"operator\": \"gt\"      }      } ```      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$per_page = 789; // int | 
$ip = "ip_example"; // string | Filter by user IP
$sort_by = "sort_by_example"; // string | Sort by this attribute (default is ID)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromProduct($product_id, $page, $filters, $per_page, $ip, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getVideosFromProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;strict&amp;duration[value]&#x3D;string&amp;duration[operator]&#x3D;gt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;strict\&quot;      },      \&quot;duration\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;gt\&quot;      }      } &#x60;&#x60;&#x60;      Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **per_page** | **int**|  | [optional]
 **ip** | **string**| Filter by user IP | [optional]
 **sort_by** | **string**| Sort by this attribute (default is ID) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Videos2**](#Videos2)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **searchProducts**
> \Kinow\Client\Model\Products searchProducts($search_query, $page, $per_page, $sort_by, $sort_direction, $in_categories, $in_features, $feature_values)



Search product with a keyword

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$search_query = "search_query_example"; // string | Keyword used to search the products
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | default: position
$sort_direction = "sort_direction_example"; // string | default: desc
$in_categories = "in_categories_example"; // string | Search in given categories. Values are separated with comma (,)
$in_features = "in_features_example"; // string | Search in given features. Values are separated with comma (,)
$feature_values = "feature_values_example"; // string | Search by feature values. Values are separated with comma (,)

try {
    $result = $api_instance->searchProducts($search_query, $page, $per_page, $sort_by, $sort_direction, $in_categories, $in_features, $feature_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->searchProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_query** | **string**| Keyword used to search the products |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| default: position | [optional]
 **sort_direction** | **string**| default: desc | [optional]
 **in_categories** | **string**| Search in given categories. Values are separated with comma (,) | [optional]
 **in_features** | **string**| Search in given features. Values are separated with comma (,) | [optional]
 **feature_values** | **string**| Search by feature values. Values are separated with comma (,) | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **setProductGeolocation**
> setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page)



Handle geolocation for products by countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$enabled = 56; // int | Enabled
$behavior_detected_countries = "behavior_detected_countries_example"; // string | Behavior for detected countries
$behavior_non_detected_countries = "behavior_non_detected_countries_example"; // string | Behavior for non-detected countries
$countries = "countries_example"; // string | IDs of the non-detected countries separated by comma
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->setProductGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **enabled** | **int**| Enabled |
 **behavior_detected_countries** | **string**| Behavior for detected countries |
 **behavior_non_detected_countries** | **string**| Behavior for non-detected countries |
 **countries** | **string**| IDs of the non-detected countries separated by comma | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateProduct**
> \Kinow\Client\Model\Product updateProduct($product_id, $body)



Update product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$body = new \Kinow\Client\Model\Product(); // \Kinow\Client\Model\Product | 

try {
    $result = $api_instance->updateProduct($product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **body** | [**\Kinow\Client\Model\Product**](#\Kinow\Client\Model\Product)|  |

### Return type

[**\Kinow\Client\Model\Product**](#Product)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateProductGroupRestrictionBehavior**
> updateProductGroupRestrictionBehavior($product_id, $behavior)



Update product group restriction behavior

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 789; // int | Product ID to fetch
$behavior = 56; // int | Group restriction behavior        0 - Disable      1 - Allow Groups      2 - Forbid Groups

try {
    $api_instance->updateProductGroupRestrictionBehavior($product_id, $behavior);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductGroupRestrictionBehavior: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **behavior** | **int**| Group restriction behavior        0 - Disable      1 - Allow Groups      2 - Forbid Groups |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **uploadProductCover**
> \Kinow\Client\Model\Image uploadProductCover($product_id, $file, $hash, $hash_algorithm)



Upload product cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\ProductsApi();
$product_id = 3.4; // float | Product ID to fetch
$file = "/path/to/file.txt"; // \SplFileObject | 
$hash = "hash_example"; // string | 
$hash_algorithm = "hash_algorithm_example"; // string | Hash algorithm to check the hash file (default value is: sha256)

try {
    $result = $api_instance->uploadProductCover($product_id, $file, $hash, $hash_algorithm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->uploadProductCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **float**| Product ID to fetch |
 **file** | **\SplFileObject**|  |
 **hash** | **string**|  |
 **hash_algorithm** | **string**| Hash algorithm to check the hash file (default value is: sha256) | [optional]

### Return type

[**\Kinow\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

