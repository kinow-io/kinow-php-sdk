# Kaemo PHP SDK Documentation

## Requirements

PHP 5.4.0 and later

## Installation & Usage

### Composer

#### Method 1:

To install the bindings via [Composer](http://getcomposer.org/), type in your console: `composer require kinow-io/kaemo-php-sdk`

#### Method 2:

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
    "repositories": [{
        "type": "git",
        "url": "https://github.com/kinow-io/kameo-php-sdk.git"
    }],
    "require": {
        "kinow-io/kameo-php-sdk": "^1.0"
    }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/KaemoClient/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AccessesApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getAvailableCategories($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessesApi->getAvailableCategories: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.kaemo.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessesApi* | [**getAvailableCategories**](#getavailablecategories) | **GET** /categories-accesses | 
*AccessesApi* | [**getAvailableCategory**](#getavailablecategory) | **GET** /categories-accesses/{category_id} | 
*AccessesApi* | [**getCustomerHasAccessToProduct**](#getcustomerhasaccesstoproduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
*AccessesApi* | [**getCustomerHasAccessToVideo**](#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*AccessesApi* | [**getProductAvailability**](#getproductavailability) | **GET** /products/{product_id}/access | 
*ActorsApi* | [**getActor**](#getactor) | **GET** /actors/{actor_id} | 
*ActorsApi* | [**getActors**](#getactors) | **GET** /actors | 
*ActorsApi* | [**getProductActors**](#getproductactors) | **GET** /products/{product_id}/actors | 
*AddressApi* | [**getCustomerAddress**](#getcustomeraddress) | **GET** /customers/{customer_id}/address | 
*AddressApi* | [**updateAddress**](#updateaddress) | **PUT** /addresses/{address_id} | 
*AttributesApi* | [**createProductAttribute**](#createproductattribute) | **POST** /attributes | 
*AttributesApi* | [**getProductAttributes**](#getproductattributes) | **GET** /products/{product_id}/attributes | 
*AttributesApi* | [**updateProductAttribute**](#updateproductattribute) | **PUT** /attributes/{attribute_id} | 
*BookmarksApi* | [**attachBookmarkToCustomer**](#attachbookmarktocustomer) | **POST** /customers/{customer_id}/bookmarks | 
*BookmarksApi* | [**detachBookmarkFromCustomer**](#detachbookmarkfromcustomer) | **DELETE** /customers/{customer_id}/bookmarks/{product_id} | 
*BookmarksApi* | [**getCustomerBookmarks**](#getcustomerbookmarks) | **GET** /customers/{customer_id}/bookmarks | 
*CMSCategoriesApi* | [**createCMSCategory**](#createcmscategory) | **POST** /cms-categories | 
*CMSCategoriesApi* | [**getCMSCategories**](#getcmscategories) | **GET** /cms-categories | 
*CMSCategoriesApi* | [**updateCMSCategory**](#updatecmscategory) | **PUT** /cms-categories/{cms_category_id} | 
*CMSPagesApi* | [**createCMSPage**](#createcmspage) | **POST** /cms-pages | 
*CMSPagesApi* | [**getCMSPages**](#getcmspages) | **GET** /cms-pages | 
*CMSPagesApi* | [**updateCMSPage**](#updatecmspage) | **PUT** /cms-pages/{cms_page_id} | 
*CartRulesApi* | [**attachCartRuleToCart**](#attachcartruletocart) | **POST** /carts/{cart_id}/cart-rules | 
*CartRulesApi* | [**createCartRule**](#createcartrule) | **POST** /cart-rules | 
*CartRulesApi* | [**deleteCartRule**](#deletecartrule) | **DELETE** /cart-rules/{cart_rule_id} | 
*CartRulesApi* | [**getCartRule**](#getcartrule) | **GET** /cart-rules/{cart_rule_id} | 
*CartRulesApi* | [**getCartRules**](#getcartrules) | **GET** /cart-rules | 
*CartRulesApi* | [**updateCartRule**](#updatecartrule) | **PUT** /cart-rules/{cart_rule_id} | 
*CartsApi* | [**addProductToCart**](#addproducttocart) | **POST** /carts/{cart_id}/products | 
*CartsApi* | [**attachCartRuleToCart**](#attachcartruletocart) | **POST** /carts/{cart_id}/cart-rules | 
*CartsApi* | [**attachCartToCustomer**](#attachcarttocustomer) | **POST** /customers/{customer_id}/carts | 
*CartsApi* | [**createCart**](#createcart) | **POST** /carts | 
*CartsApi* | [**deleteCart**](#deletecart) | **DELETE** /carts/{cart_id} | 
*CartsApi* | [**deleteProductFromCart**](#deleteproductfromcart) | **DELETE** /carts/{cart_id}/products | 
*CartsApi* | [**getCart**](#getcart) | **GET** /carts/{cart_id} | 
*CartsApi* | [**getCustomerCarts**](#getcustomercarts) | **GET** /customers/{customer_id}/carts | 
*CartsApi* | [**getLastCart**](#getlastcart) | **GET** /customers/{customer_id}/last-cart | 
*CartsApi* | [**getPaymentUrl**](#getpaymenturl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
*CartsApi* | [**updateCart**](#updatecart) | **PUT** /carts/{cart_id} | 
*CartsApi* | [**validateCart**](#validatecart) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
*CartsApi* | [**validateFreeOrder**](#validatefreeorder) | **POST** /carts/{cart_id}/validate-free-order | 
*CategoriesApi* | [**createCategory**](#createcategory) | **POST** /categories | 
*CategoriesApi* | [**getAvailableCategories**](#getavailablecategories) | **GET** /categories-accesses | 
*CategoriesApi* | [**getAvailableCategory**](#getavailablecategory) | **GET** /categories-accesses/{category_id} | 
*CategoriesApi* | [**getCategories**](#getcategories) | **GET** /categories | 
*CategoriesApi* | [**getCategoriesFromCategory**](#getcategoriesfromcategory) | **GET** /categories/{category_id}/categories | 
*CategoriesApi* | [**getCategory**](#getcategory) | **GET** /categories/{category_id} | 
*CategoriesApi* | [**getCategoryBanner**](#getcategorybanner) | **GET** /categories/{category_id}/banner | 
*CategoriesApi* | [**getCategoryFeatures**](#getcategoryfeatures) | **GET** /categories/{category_id}/features | 
*CategoriesApi* | [**getCategoryProducts**](#getcategoryproducts) | **GET** /categories/{category_id}/products | 
*CategoriesApi* | [**getProductCategories**](#getproductcategories) | **GET** /products/{product_id}/categories | 
*CategoriesApi* | [**getSubscriptionCategories**](#getsubscriptioncategories) | **GET** /subscriptions/{subscription_id}/categories | 
*CountriesApi* | [**getCountries**](#getcountries) | **GET** /countries | 
*CurrenciesApi* | [**getCurrencies**](#getcurrencies) | **GET** /currencies | 
*CustomerThreadsApi* | [**getCustomerThread**](#getcustomerthread) | **GET** /customer-threads/{customer_thread_id} | 
*CustomerThreadsApi* | [**getCustomerThreads**](#getcustomerthreads) | **GET** /customer-threads | 
*CustomersApi* | [**attachCartToCustomer**](#attachcarttocustomer) | **POST** /customers/{customer_id}/carts | 
*CustomersApi* | [**checkCustomerCredentials**](#checkcustomercredentials) | **POST** /customers/check-credentials | 
*CustomersApi* | [**createCustomer**](#createcustomer) | **POST** /customers | 
*CustomersApi* | [**createFacebookId**](#createfacebookid) | **POST** /facebook/customers | 
*CustomersApi* | [**deleteCustomer**](#deletecustomer) | **DELETE** /customers/{customer_id} | 
*CustomersApi* | [**generateAuthenticationToken**](#generateauthenticationtoken) | **GET** /customers/{customer_id}/authentication-token | 
*CustomersApi* | [**getCustomer**](#getcustomer) | **GET** /customers/{customer_id} | 
*CustomersApi* | [**getCustomerAccessesSubscriptions**](#getcustomeraccessessubscriptions) | **GET** /customers/{customer_id}/accesses/subscriptions | 
*CustomersApi* | [**getCustomerAccessesVideos**](#getcustomeraccessesvideos) | **GET** /customers/{customer_id}/accesses/videos | 
*CustomersApi* | [**getCustomerAddress**](#getcustomeraddress) | **GET** /customers/{customer_id}/address | 
*CustomersApi* | [**getCustomerCurrentViews**](#getcustomercurrentviews) | **GET** /customers/{customer_id}/current-views | 
*CustomersApi* | [**getCustomerHasAccessToProduct**](#getcustomerhasaccesstoproduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
*CustomersApi* | [**getCustomerHasAccessToVideo**](#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*CustomersApi* | [**getCustomerOrders**](#getcustomerorders) | **GET** /customers/{customer_id}/orders | 
*CustomersApi* | [**getCustomers**](#getcustomers) | **GET** /customers | 
*CustomersApi* | [**getDownloadUrl**](#getdownloadurl) | **GET** /customers/{customer_id}/videos/{video_id}/download | 
*CustomersApi* | [**getMarlinToken**](#getmarlintoken) | **GET** /customers/{customer_id}/videos/{video_id}/marlin | 
*CustomersApi* | [**getPaymentCustomerId**](#getpaymentcustomerid) | **GET** /customers/{customer_id}/payments/{payment_name}/customer | 
*CustomersApi* | [**getPlayerUrl**](#getplayerurl) | **GET** /customers/{customer_id}/videos/{video_id}/player | 
*CustomersApi* | [**updateCustomer**](#updatecustomer) | **PUT** /customers/{customer_id} | 
*DirectorsApi* | [**getDirector**](#getdirector) | **GET** /directors/{director_id} | 
*DirectorsApi* | [**getDirectors**](#getdirectors) | **GET** /directors | 
*DirectorsApi* | [**getProductDirectors**](#getproductdirectors) | **GET** /products/{product_id}/directors | 
*ExtractsApi* | [**createExtract**](#createextract) | **POST** /extracts | 
*ExtractsApi* | [**deleteExtract**](#deleteextract) | **DELETE** /extracts/{extract_id} | 
*ExtractsApi* | [**getExtractPlayer**](#getextractplayer) | **GET** /extracts/{extract_id}/player | 
*ExtractsApi* | [**getProductExtracts**](#getproductextracts) | **GET** /products/{product_id}/extracts | 
*ExtractsApi* | [**updateExtract**](#updateextract) | **PUT** /extracts/{extract_id} | 
*FacebookApi* | [**createFacebookId**](#createfacebookid) | **POST** /facebook/customers | 
*FacebookApi* | [**getFacebookCustomer**](#getfacebookcustomer) | **GET** /facebook/customers/{facebook_id} | 
*FeatureValuesApi* | [**attachFeaturesToProduct**](#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*FeatureValuesApi* | [**attachFeaturesToVideo**](#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*FeatureValuesApi* | [**detachFeatureToProduct**](#detachfeaturetoproduct) | **DELETE** products/{product_id}/features/{feature_id} | 
*FeatureValuesApi* | [**getFeatureValues**](#getfeaturevalues) | **GET** /feature-values | 
*FeaturesApi* | [**attachFeaturesToProduct**](#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*FeaturesApi* | [**attachFeaturesToVideo**](#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*FeaturesApi* | [**detachFeatureToProduct**](#detachfeaturetoproduct) | **DELETE** products/{product_id}/features/{feature_id} | 
*FeaturesApi* | [**getCategoryFeatures**](#getcategoryfeatures) | **GET** /categories/{category_id}/features | 
*FeaturesApi* | [**getFeatureValues**](#getfeaturevalues) | **GET** /feature-values | 
*FeaturesApi* | [**getFeatures**](#getfeatures) | **GET** /features | 
*FeaturesApi* | [**getProductFeatures**](#getproductfeatures) | **GET** /products/{product_id}/features | 
*FeaturesApi* | [**getVideoFeatures**](#getvideofeatures) | **GET** /videos/{video_id}/features | 
*GendersApi* | [**getGenders**](#getgenders) | **GET** /genders | 
*GeolocationsApi* | [**geolocations**](#geolocations) | **POST** /geolocations | 
*GeolocationsApi* | [**getProductGeolocations**](#getproductgeolocations) | **GET** /products/{product_id}/geolocations | 
*GeolocationsApi* | [**getProductGeolocationsByIp**](#getproductgeolocationsbyip) | **POST** /products/{product_id}/geolocations | 
*GeolocationsApi* | [**getVideoGeolocation**](#getvideogeolocation) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
*GeolocationsApi* | [**setProductGeolocation**](#setproductgeolocation) | **PUT** /products/{product_id}/geolocations | 
*GeolocationsApi* | [**setVideoGeolocation**](#setvideogeolocation) | **PUT** /videos/{video_id}/geolocations | 
*GroupsApi* | [**attachCustomerToGroup**](#attachcustomertogroup) | **POST** /groups/{group_id}/customers | 
*GroupsApi* | [**detachCustomerFromGroup**](#detachcustomerfromgroup) | **DELETE** /groups/{group_id}/customers/{customer_id} | 
*GroupsApi* | [**getGroups**](#getgroups) | **GET** /groups | 
*ImagesApi* | [**getCategoryBanner**](#getcategorybanner) | **GET** /categories/{category_id}/banner | 
*ImagesApi* | [**getIntroImage**](#getintroimage) | **GET** /widgets/intro/images | 
*ImagesApi* | [**getManufacturerCoverImage**](#getmanufacturercoverimage) | **GET** /manufacturers/{manufacturer_id}/cover | 
*ImagesApi* | [**getProductCoverImage**](#getproductcoverimage) | **GET** /products/{product_id}/cover | 
*ImagesApi* | [**getProductImages**](#getproductimages) | **GET** /products/{product_id}/images | 
*ImagesApi* | [**getSliderImages**](#getsliderimages) | **GET** /widgets/slider/images | 
*ImagesApi* | [**getSubscriptionCoverImage**](#getsubscriptioncoverimage) | **GET** /subscriptions/{subscription_id}/cover | 
*ImagesApi* | [**getSupplierCoverImage**](#getsuppliercoverimage) | **GET** /suppliers/{supplier_id}/cover | 
*ImagesApi* | [**getVideoCover**](#getvideocover) | **GET** /videos/{video_id}/cover | 
*LanguagesApi* | [**getLanguages**](#getlanguages) | **GET** /languages | 
*ManufacturersApi* | [**getManufacturerCoverImage**](#getmanufacturercoverimage) | **GET** /manufacturers/{manufacturer_id}/cover | 
*MediaFilesApi* | [**getMediaSourceFiles**](#getmediasourcefiles) | **GET** /media-sources/{source_id}/files | 
*MediaFilesApi* | [**postMediaSourceFiles**](#postmediasourcefiles) | **POST** /media-sources/{source_id}/files | 
*MediaSourcesApi* | [**getMediaSource**](#getmediasource) | **GET** /media-sources/{source_id} | 
*MediaSourcesApi* | [**getMediaSourceFiles**](#getmediasourcefiles) | **GET** /media-sources/{source_id}/files | 
*MediaSourcesApi* | [**getMediaSources**](#getmediasources) | **GET** /media-sources | 
*MediaSourcesApi* | [**postMediaSourceFiles**](#postmediasourcefiles) | **POST** /media-sources/{source_id}/files | 
*OAuthApi* | [**getToken**](#gettoken) | **POST** /get-token | 
*OrderHistoriesApi* | [**getOrderHistories**](#getorderhistories) | **GET** /orders/{order_id}/histories | 
*OrderStatesApi* | [**getOrderState**](#getorderstate) | **GET** /order-states/{order_state_id} | 
*OrderStatesApi* | [**getOrderStates**](#getorderstates) | **GET** /order-states | 
*OrdersApi* | [**getCustomerOrders**](#getcustomerorders) | **GET** /customers/{customer_id}/orders | 
*OrdersApi* | [**getOrder**](#getorder) | **GET** /orders/{order_id} | 
*OrdersApi* | [**getOrderHistories**](#getorderhistories) | **GET** /orders/{order_id}/histories | 
*OrdersApi* | [**getOrderInvoice**](#getorderinvoice) | **GET** /orders/{order_id}/invoice | 
*PaymentModulesApi* | [**getPaymentModules**](#getpaymentmodules) | **GET** /payment-modules | 
*PaymentModulesApi* | [**getPaymentUrl**](#getpaymenturl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
*PaymentModulesApi* | [**validateCart**](#validatecart) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
*PaymentModulesApi* | [**validateFreeOrder**](#validatefreeorder) | **POST** /carts/{cart_id}/validate-free-order | 
*PlayerApi* | [**getExtractPlayer**](#getextractplayer) | **GET** /extracts/{extract_id}/player | 
*ProductAccessesApi* | [**createProductAccess**](#createproductaccess) | **POST** /product-accesses | 
*ProductAccessesApi* | [**deleteProductAccess**](#deleteproductaccess) | **DELETE** /product-accesses/{product_access_id} | 
*ProductAccessesApi* | [**getCustomerAccessesSubscriptions**](#getcustomeraccessessubscriptions) | **GET** /customers/{customer_id}/accesses/subscriptions | 
*ProductAccessesApi* | [**getCustomerAccessesVideos**](#getcustomeraccessesvideos) | **GET** /customers/{customer_id}/accesses/videos | 
*ProductAccessesApi* | [**getProductAccess**](#getproductaccess) | **GET** /product-accesses/{product_access_id} | 
*ProductAccessesApi* | [**getProductAccesses**](#getproductaccesses) | **GET** /product-accesses | 
*ProductAccessesApi* | [**stopSubscription**](#stopsubscription) | **PUT** /customers/{customer_id}/unsubscribe | 
*ProductAccessesApi* | [**updateProductAccess**](#updateproductaccess) | **PUT** /product-accesses/{product_access_id} | 
*ProductsApi* | [**attachFeaturesToProduct**](#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*ProductsApi* | [**attachProductToCategory**](#attachproducttocategory) | **POST** /products/{product_id}/categories | 
*ProductsApi* | [**attachVideoToProduct**](#attachvideotoproduct) | **POST** /products/{product_id}/videos | 
*ProductsApi* | [**createProduct**](#createproduct) | **POST** /products | 
*ProductsApi* | [**deleteProduct**](#deleteproduct) | **DELETE** /products/{product_id} | 
*ProductsApi* | [**detachFeatureToProduct**](#detachfeaturetoproduct) | **DELETE** products/{product_id}/features/{feature_id} | 
*ProductsApi* | [**detachProductFromCategory**](#detachproductfromcategory) | **DELETE** /products/{product_id}/categories/{category_id} | 
*ProductsApi* | [**getCategoryProducts**](#getcategoryproducts) | **GET** /categories/{category_id}/products | 
*ProductsApi* | [**getCustomerHasAccessToProduct**](#getcustomerhasaccesstoproduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
*ProductsApi* | [**getProduct**](#getproduct) | **GET** /products/{product_id} | 
*ProductsApi* | [**getProductActors**](#getproductactors) | **GET** /products/{product_id}/actors | 
*ProductsApi* | [**getProductAttributes**](#getproductattributes) | **GET** /products/{product_id}/attributes | 
*ProductsApi* | [**getProductAvailability**](#getproductavailability) | **GET** /products/{product_id}/access | 
*ProductsApi* | [**getProductCategories**](#getproductcategories) | **GET** /products/{product_id}/categories | 
*ProductsApi* | [**getProductCoverImage**](#getproductcoverimage) | **GET** /products/{product_id}/cover | 
*ProductsApi* | [**getProductDirectors**](#getproductdirectors) | **GET** /products/{product_id}/directors | 
*ProductsApi* | [**getProductExtracts**](#getproductextracts) | **GET** /products/{product_id}/extracts | 
*ProductsApi* | [**getProductFeatures**](#getproductfeatures) | **GET** /products/{product_id}/features | 
*ProductsApi* | [**getProductGeolocations**](#getproductgeolocations) | **GET** /products/{product_id}/geolocations | 
*ProductsApi* | [**getProductGeolocationsByIp**](#getproductgeolocationsbyip) | **POST** /products/{product_id}/geolocations | 
*ProductsApi* | [**getProductImages**](#getproductimages) | **GET** /products/{product_id}/images | 
*ProductsApi* | [**getProducts**](#getproducts) | **GET** /products | 
*ProductsApi* | [**getProductsFromProduct**](#getproductsfromproduct) | **GET** /products/{product_id}/products | 
*ProductsApi* | [**getVideosFromProduct**](#getvideosfromproduct) | **GET** /products/{product_id}/videos | 
*ProductsApi* | [**searchProducts**](#searchproducts) | **GET** /products/search/{search_query} | 
*ProductsApi* | [**setProductGeolocation**](#setproductgeolocation) | **PUT** /products/{product_id}/geolocations | 
*ProductsApi* | [**updateProduct**](#updateproduct) | **PUT** /products/{product_id} | 
*SubscriptionsApi* | [**getDisabledSubscriptions**](#getdisabledsubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
*SubscriptionsApi* | [**getSubscription**](#getsubscription) | **GET** /subscriptions/{subscription_id} | 
*SubscriptionsApi* | [**getSubscriptionCategories**](#getsubscriptioncategories) | **GET** /subscriptions/{subscription_id}/categories | 
*SubscriptionsApi* | [**getSubscriptionCoverImage**](#getsubscriptioncoverimage) | **GET** /subscriptions/{subscription_id}/cover | 
*SubscriptionsApi* | [**getSubscriptions**](#getsubscriptions) | **GET** /subscriptions | 
*SuppliersApi* | [**getSupplierCoverImage**](#getsuppliercoverimage) | **GET** /suppliers/{supplier_id}/cover | 
*VideosApi* | [**attachFeaturesToVideo**](#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*VideosApi* | [**attachVideoToProduct**](#attachvideotoproduct) | **POST** /products/{product_id}/videos | 
*VideosApi* | [**createVideo**](#createvideo) | **POST** /videos | 
*VideosApi* | [**deleteVideo**](#deletevideo) | **DELETE** /videos/{video_id} | 
*VideosApi* | [**getCustomerHasAccessToVideo**](#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*VideosApi* | [**getDisabledSubscriptions**](#getdisabledsubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
*VideosApi* | [**getDownloadUrl**](#getdownloadurl) | **GET** /customers/{customer_id}/videos/{video_id}/download | 
*VideosApi* | [**getMarlinToken**](#getmarlintoken) | **GET** /customers/{customer_id}/videos/{video_id}/marlin | 
*VideosApi* | [**getPlayerUrl**](#getplayerurl) | **GET** /customers/{customer_id}/videos/{video_id}/player | 
*VideosApi* | [**getVideo**](#getvideo) | **GET** /videos/{video_id} | 
*VideosApi* | [**getVideoAccess**](#getvideoaccess) | **GET** /videos/{video_id}/customers/{customer_id}/access | 
*VideosApi* | [**getVideoFeatures**](#getvideofeatures) | **GET** /videos/{video_id}/features | 
*VideosApi* | [**getVideoGeolocation**](#getvideogeolocation) | **GET** /videos/{video_id}/geolocation | 
*VideosApi* | [**getVideoGeolocation_0**](#getvideogeolocation_0) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
*VideosApi* | [**getVideoPlayerUrl**](#getvideoplayerurl) | **GET** /videos/{video_id}/player | 
*VideosApi* | [**getVideoViews**](#getvideoviews) | **GET** /videos/{video_id}/views | 
*VideosApi* | [**getVideos**](#getvideos) | **GET** /videos | 
*VideosApi* | [**getVideosFromProduct**](#getvideosfromproduct) | **GET** /products/{product_id}/videos | 
*VideosApi* | [**setVideoGeolocation**](#setvideogeolocation) | **PUT** /videos/{video_id}/geolocations | 
*VideosApi* | [**updateVideo**](#updatevideo) | **PUT** /videos/{video_id} | 
*WidgetsApi* | [**getIntroImage**](#getintroimage) | **GET** /widgets/intro/images | 
*WidgetsApi* | [**getSliderImages**](#getsliderimages) | **GET** /widgets/slider/images | 


## Documentation For Models

 - [Actor](#Actor)
 - [Actors](#Actors)
 - [Address](#Address)
 - [BlogCategory](#BlogCategory)
 - [BlogPage](#BlogPage)
 - [CMSCategoriesLists](#CMSCategoriesLists)
 - [CMSCategory](#CMSCategory)
 - [CMSPage](#CMSPage)
 - [CMSPageLists](#CMSPageLists)
 - [Cart](#Cart)
 - [CartBody](#CartBody)
 - [CartRule](#CartRule)
 - [CartRuleRestrictionGroup](#CartRuleRestrictionGroup)
 - [CartRuleRestrictionGroupItem](#CartRuleRestrictionGroupItem)
 - [CartRules](#CartRules)
 - [Carts](#Carts)
 - [Categories](#Categories)
 - [Category](#Category)
 - [Countries](#Countries)
 - [Country](#Country)
 - [Currencies](#Currencies)
 - [Currency](#Currency)
 - [Customer](#Customer)
 - [CustomerCreateRequest](#CustomerCreateRequest)
 - [CustomerCurrentViews](#CustomerCurrentViews)
 - [CustomerId](#CustomerId)
 - [CustomerThread](#CustomerThread)
 - [CustomerThread1](#CustomerThread1)
 - [Customers](#Customers)
 - [Director](#Director)
 - [Director1](#Director1)
 - [DownloadUrl](#DownloadUrl)
 - [Extract](#Extract)
 - [Feature](#Feature)
 - [FeatureValue](#FeatureValue)
 - [Features](#Features)
 - [Gender](#Gender)
 - [Genders](#Genders)
 - [Geoloc](#Geoloc)
 - [Geolocs](#Geolocs)
 - [Group](#Group)
 - [Groups](#Groups)
 - [I18nField](#I18nField)
 - [Image](#Image)
 - [Language](#Language)
 - [Languages](#Languages)
 - [MarlinToken](#MarlinToken)
 - [MediaFile](#MediaFile)
 - [MediaFiles](#MediaFiles)
 - [MediaSource](#MediaSource)
 - [MediaSources](#MediaSources)
 - [OAuthToken](#OAuthToken)
 - [Order](#Order)
 - [OrderHistories](#OrderHistories)
 - [OrderHistory](#OrderHistory)
 - [OrderState](#OrderState)
 - [OrderStates](#OrderStates)
 - [Orders](#Orders)
 - [Pagination](#Pagination)
 - [PaymentArguments](#PaymentArguments)
 - [PaymentModule](#PaymentModule)
 - [PaymentModules](#PaymentModules)
 - [PaymentUrl](#PaymentUrl)
 - [PlayerConfiguration](#PlayerConfiguration)
 - [Product](#Product)
 - [ProductAccess](#ProductAccess)
 - [ProductAttribute](#ProductAttribute)
 - [ProductAttributeCreateRequest](#ProductAttributeCreateRequest)
 - [ProductAttributeUpdateRequest](#ProductAttributeUpdateRequest)
 - [ProductAttributesResponse](#ProductAttributesResponse)
 - [ProductExtractsResponse](#ProductExtractsResponse)
 - [ProductImagesResponse](#ProductImagesResponse)
 - [Products](#Products)
 - [Products1](#Products1)
 - [Subscription](#Subscription)
 - [SubscriptionAccesses](#SubscriptionAccesses)
 - [Subscriptions](#Subscriptions)
 - [Tag](#Tag)
 - [Video](#Video)
 - [VideoUrl](#VideoUrl)
 - [VideoViews](#VideoViews)
 - [Videos](#Videos)

