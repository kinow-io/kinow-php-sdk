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
        "url": "https://github.com/kinow-io/kinow-php-sdk.git"
    }],
    "require": {
        "kinow-io/kinow-php-sdk": "^1.0"
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

$api_instance = new Kaemo\Client\Api\ActorsApi();
$product_id = 789; // int | Product ID to fetch
$actor_id = 789; // int | Actor ID to attach

try {
    $api_instance->attachProductToActor($product_id, $actor_id);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->attachProductToActor: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Enable Debug Logs
You can enable debug logging to get information about what is sent or received by the SDK.
The logs will be available in the 'output' file at the root of your server.

When submitting a support request, it is best to provide the logs file for a faster resolution of your issue.

```php
// To be done before doing anything with the SDK
// Activate debug logs
Kaemo\Client\Configuration::getDefaultConfiguration()->setDebug(true);

// (optionally) Change debug file location (default is 'php://output')
Kaemo\Client\Configuration::getDefaultConfiguration()->setDebugFile('php://output');
```

## Documentation for API Endpoints

All URIs are relative to *https://api.kinow.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActorsApi* | [**attachProductToActor**](docs/Api/ActorsApi.md#attachproducttoactor) | **POST** /products/{product_id}/actors | 
*ActorsApi* | [**createActor**](docs/Api/ActorsApi.md#createactor) | **POST** /actors | 
*ActorsApi* | [**deleteActor**](docs/Api/ActorsApi.md#deleteactor) | **DELETE** /actors/{actor_id} | 
*ActorsApi* | [**detachProductFromActor**](docs/Api/ActorsApi.md#detachproductfromactor) | **DELETE** /products/{product_id}/actors/{actor_id} | 
*ActorsApi* | [**getActor**](docs/Api/ActorsApi.md#getactor) | **GET** /actors/{actor_id} | 
*ActorsApi* | [**getActorProducts**](docs/Api/ActorsApi.md#getactorproducts) | **GET** /actors/{actor_id}/products | 
*ActorsApi* | [**getActors**](docs/Api/ActorsApi.md#getactors) | **GET** /actors | 
*ActorsApi* | [**getProductActors**](docs/Api/ActorsApi.md#getproductactors) | **GET** /products/{product_id}/actors | 
*ActorsApi* | [**updateActor**](docs/Api/ActorsApi.md#updateactor) | **PUT** /actors/{actor_id} | 
*AddressApi* | [**getCustomerAddress**](docs/Api/AddressApi.md#getcustomeraddress) | **GET** /customers/{customer_id}/address | 
*AddressApi* | [**updateAddress**](docs/Api/AddressApi.md#updateaddress) | **PUT** /addresses/{address_id} | 
*AttributesApi* | [**createProductAttribute**](docs/Api/AttributesApi.md#createproductattribute) | **POST** /attributes | 
*AttributesApi* | [**getProductAttributes**](docs/Api/AttributesApi.md#getproductattributes) | **GET** /products/{product_id}/attributes | 
*AttributesApi* | [**updateProductAttribute**](docs/Api/AttributesApi.md#updateproductattribute) | **PUT** /attributes/{attribute_id} | 
*BlogCategoriesApi* | [**getBlogCategories**](docs/Api/BlogCategoriesApi.md#getblogcategories) | **GET** /blog-categories | 
*BlogCategoriesApi* | [**getBlogCategory**](docs/Api/BlogCategoriesApi.md#getblogcategory) | **GET** /blog-categories/{blog_category_id} | 
*BlogPagesApi* | [**getBlogPage**](docs/Api/BlogPagesApi.md#getblogpage) | **GET** /blog-pages/{blog_page_id} | 
*BlogPagesApi* | [**getBlogPages**](docs/Api/BlogPagesApi.md#getblogpages) | **GET** /blog-pages | 
*BookmarksApi* | [**attachBookmarkToCustomer**](docs/Api/BookmarksApi.md#attachbookmarktocustomer) | **POST** /customers/{customer_id}/bookmarks | 
*BookmarksApi* | [**detachBookmarkFromCustomer**](docs/Api/BookmarksApi.md#detachbookmarkfromcustomer) | **DELETE** /customers/{customer_id}/bookmarks/{product_id} | 
*BookmarksApi* | [**getCustomerBookmarks**](docs/Api/BookmarksApi.md#getcustomerbookmarks) | **GET** /customers/{customer_id}/bookmarks | 
*CMSCategoriesApi* | [**createCMSCategory**](docs/Api/CMSCategoriesApi.md#createcmscategory) | **POST** /cms-categories | 
*CMSCategoriesApi* | [**getCMSCategories**](docs/Api/CMSCategoriesApi.md#getcmscategories) | **GET** /cms-categories | 
*CMSCategoriesApi* | [**updateCMSCategory**](docs/Api/CMSCategoriesApi.md#updatecmscategory) | **PUT** /cms-categories/{cms_category_id} | 
*CMSPagesApi* | [**createCMSPage**](docs/Api/CMSPagesApi.md#createcmspage) | **POST** /cms-pages | 
*CMSPagesApi* | [**getCMSPages**](docs/Api/CMSPagesApi.md#getcmspages) | **GET** /cms-pages | 
*CMSPagesApi* | [**updateCMSPage**](docs/Api/CMSPagesApi.md#updatecmspage) | **PUT** /cms-pages/{cms_page_id} | 
*CartRulesApi* | [**attachCartRuleToCart**](docs/Api/CartRulesApi.md#attachcartruletocart) | **POST** /carts/{cart_id}/cart-rules | 
*CartRulesApi* | [**createCartRule**](docs/Api/CartRulesApi.md#createcartrule) | **POST** /cart-rules | 
*CartRulesApi* | [**deleteCartRule**](docs/Api/CartRulesApi.md#deletecartrule) | **DELETE** /cart-rules/{cart_rule_id} | 
*CartRulesApi* | [**getCartRule**](docs/Api/CartRulesApi.md#getcartrule) | **GET** /cart-rules/{cart_rule_id} | 
*CartRulesApi* | [**getCartRules**](docs/Api/CartRulesApi.md#getcartrules) | **GET** /cart-rules | 
*CartRulesApi* | [**updateCartRule**](docs/Api/CartRulesApi.md#updatecartrule) | **PUT** /cart-rules/{cart_rule_id} | 
*CartsApi* | [**addProductToCart**](docs/Api/CartsApi.md#addproducttocart) | **POST** /carts/{cart_id}/products | 
*CartsApi* | [**attachCartRuleToCart**](docs/Api/CartsApi.md#attachcartruletocart) | **POST** /carts/{cart_id}/cart-rules | 
*CartsApi* | [**attachCartToCustomer**](docs/Api/CartsApi.md#attachcarttocustomer) | **POST** /customers/{customer_id}/carts | 
*CartsApi* | [**createCart**](docs/Api/CartsApi.md#createcart) | **POST** /carts | 
*CartsApi* | [**deleteCart**](docs/Api/CartsApi.md#deletecart) | **DELETE** /carts/{cart_id} | 
*CartsApi* | [**deleteProductFromCart**](docs/Api/CartsApi.md#deleteproductfromcart) | **DELETE** /carts/{cart_id}/products | 
*CartsApi* | [**getCart**](docs/Api/CartsApi.md#getcart) | **GET** /carts/{cart_id} | 
*CartsApi* | [**getCustomerCarts**](docs/Api/CartsApi.md#getcustomercarts) | **GET** /customers/{customer_id}/carts | 
*CartsApi* | [**getLastCart**](docs/Api/CartsApi.md#getlastcart) | **GET** /customers/{customer_id}/last-cart | 
*CartsApi* | [**getPaymentUrl**](docs/Api/CartsApi.md#getpaymenturl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
*CartsApi* | [**preparePayment**](docs/Api/CartsApi.md#preparepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
*CartsApi* | [**updateCart**](docs/Api/CartsApi.md#updatecart) | **PUT** /carts/{cart_id} | 
*CartsApi* | [**validateFreeOrder**](docs/Api/CartsApi.md#validatefreeorder) | **POST** /carts/{cart_id}/validate-free-order | 
*CartsApi* | [**validatePayment**](docs/Api/CartsApi.md#validatepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
*CategoriesApi* | [**createCategory**](docs/Api/CategoriesApi.md#createcategory) | **POST** /categories | 
*CategoriesApi* | [**getAvailableCategory**](docs/Api/CategoriesApi.md#getavailablecategory) | **GET** /categories-accesses/{category_id} | 
*CategoriesApi* | [**getCategories**](docs/Api/CategoriesApi.md#getcategories) | **GET** /categories | 
*CategoriesApi* | [**getCategoriesFromCategory**](docs/Api/CategoriesApi.md#getcategoriesfromcategory) | **GET** /categories/{category_id}/categories | 
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /categories/{category_id} | 
*CategoriesApi* | [**getCategoryBanner**](docs/Api/CategoriesApi.md#getcategorybanner) | **GET** /categories/{category_id}/banner | 
*CategoriesApi* | [**getCategoryFeatures**](docs/Api/CategoriesApi.md#getcategoryfeatures) | **GET** /categories/{category_id}/features | 
*CategoriesApi* | [**getCategoryProducts**](docs/Api/CategoriesApi.md#getcategoryproducts) | **GET** /categories/{category_id}/products | 
*CategoriesApi* | [**getProductCategories**](docs/Api/CategoriesApi.md#getproductcategories) | **GET** /products/{product_id}/categories | 
*CategoriesApi* | [**getSubscriptionCategories**](docs/Api/CategoriesApi.md#getsubscriptioncategories) | **GET** /subscriptions/{subscription_id}/categories | 
*ConfigurationApi* | [**getConfiguration**](docs/Api/ConfigurationApi.md#getconfiguration) | **GET** /configuration | 
*ConfigurationApi* | [**getConfigurationByName**](docs/Api/ConfigurationApi.md#getconfigurationbyname) | **GET** /configuration/{configuration_name} | 
*CountriesApi* | [**getCountries**](docs/Api/CountriesApi.md#getcountries) | **GET** /countries | 
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /currencies | 
*CustomerThreadsApi* | [**getCustomerThread**](docs/Api/CustomerThreadsApi.md#getcustomerthread) | **GET** /customer-threads/{customer_thread_id} | 
*CustomerThreadsApi* | [**getCustomerThreads**](docs/Api/CustomerThreadsApi.md#getcustomerthreads) | **GET** /customer-threads | 
*CustomersApi* | [**attachCartToCustomer**](docs/Api/CustomersApi.md#attachcarttocustomer) | **POST** /customers/{customer_id}/carts | 
*CustomersApi* | [**checkCustomerCredentials**](docs/Api/CustomersApi.md#checkcustomercredentials) | **POST** /customers/check-credentials | 
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | 
*CustomersApi* | [**createFacebookId**](docs/Api/CustomersApi.md#createfacebookid) | **POST** /customers/facebook | 
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /customers/{customer_id} | 
*CustomersApi* | [**generateAuthenticationToken**](docs/Api/CustomersApi.md#generateauthenticationtoken) | **GET** /customers/{customer_id}/authentication-token | 
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customers/{customer_id} | 
*CustomersApi* | [**getCustomerAccessesSubscriptions**](docs/Api/CustomersApi.md#getcustomeraccessessubscriptions) | **GET** /customers/{customer_id}/accesses/subscriptions | 
*CustomersApi* | [**getCustomerAccessesVideos**](docs/Api/CustomersApi.md#getcustomeraccessesvideos) | **GET** /customers/{customer_id}/accesses/videos | 
*CustomersApi* | [**getCustomerAddress**](docs/Api/CustomersApi.md#getcustomeraddress) | **GET** /customers/{customer_id}/address | 
*CustomersApi* | [**getCustomerCanSeeProduct**](docs/Api/CustomersApi.md#getcustomercanseeproduct) | **GET** /customers/{customer_id}/products/{product_id}/can-see | 
*CustomersApi* | [**getCustomerCarts**](docs/Api/CustomersApi.md#getcustomercarts) | **GET** /customers/{customer_id}/carts | 
*CustomersApi* | [**getCustomerCurrentViews**](docs/Api/CustomersApi.md#getcustomercurrentviews) | **GET** /customers/{customer_id}/current-views | 
*CustomersApi* | [**getCustomerGroups**](docs/Api/CustomersApi.md#getcustomergroups) | **GET** /customers/{customer_id}/groups | 
*CustomersApi* | [**getCustomerHasAccessToProduct**](docs/Api/CustomersApi.md#getcustomerhasaccesstoproduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
*CustomersApi* | [**getCustomerHasAccessToVideo**](docs/Api/CustomersApi.md#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*CustomersApi* | [**getCustomerOrders**](docs/Api/CustomersApi.md#getcustomerorders) | **GET** /customers/{customer_id}/orders | 
*CustomersApi* | [**getCustomerPrepaymentBalances**](docs/Api/CustomersApi.md#getcustomerprepaymentbalances) | **GET** /customers/{customer_id}/prepayment-balance | 
*CustomersApi* | [**getCustomerPrepaymentOperations**](docs/Api/CustomersApi.md#getcustomerprepaymentoperations) | **GET** /customers/{customer_id}/prepayment-operations | 
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | 
*CustomersApi* | [**getFacebookCustomer**](docs/Api/CustomersApi.md#getfacebookcustomer) | **GET** /customers/facebook/{facebook_id} | 
*CustomersApi* | [**getPaymentMethods**](docs/Api/CustomersApi.md#getpaymentmethods) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods | 
*CustomersApi* | [**getPendingPayments**](docs/Api/CustomersApi.md#getpendingpayments) | **GET** /customers/{customer_id}/payments/{payment_name}/pending | 
*CustomersApi* | [**stopSubscription**](docs/Api/CustomersApi.md#stopsubscription) | **PUT** /customers/{customer_id}/unsubscribe | 
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /customers/{customer_id} | 
*CustomersApi* | [**updatePaymentMethod**](docs/Api/CustomersApi.md#updatepaymentmethod) | **PUT** /customers/{customer_id}/payments/{payment_name}/payment-method | 
*DirectorsApi* | [**attachProductToDirector**](docs/Api/DirectorsApi.md#attachproducttodirector) | **POST** /products/{product_id}/directors | 
*DirectorsApi* | [**createDirector**](docs/Api/DirectorsApi.md#createdirector) | **POST** /directors | 
*DirectorsApi* | [**deleteDirector**](docs/Api/DirectorsApi.md#deletedirector) | **DELETE** /directors/{director_id} | 
*DirectorsApi* | [**detachProductFromDirector**](docs/Api/DirectorsApi.md#detachproductfromdirector) | **DELETE** /products/{product_id}/directors/{director_id} | 
*DirectorsApi* | [**getDirector**](docs/Api/DirectorsApi.md#getdirector) | **GET** /directors/{director_id} | 
*DirectorsApi* | [**getDirectorProducts**](docs/Api/DirectorsApi.md#getdirectorproducts) | **GET** /directors/{director_id}/products | 
*DirectorsApi* | [**getDirectors**](docs/Api/DirectorsApi.md#getdirectors) | **GET** /directors | 
*DirectorsApi* | [**getProductDirectors**](docs/Api/DirectorsApi.md#getproductdirectors) | **GET** /products/{product_id}/directors | 
*DirectorsApi* | [**updateDirector**](docs/Api/DirectorsApi.md#updatedirector) | **PUT** /directors/{director_id} | 
*ExtractsApi* | [**attachCoverToExtract**](docs/Api/ExtractsApi.md#attachcovertoextract) | **POST** /extracts/{extract_id}/cover | 
*ExtractsApi* | [**createExtract**](docs/Api/ExtractsApi.md#createextract) | **POST** /extracts | 
*ExtractsApi* | [**deleteExtract**](docs/Api/ExtractsApi.md#deleteextract) | **DELETE** /extracts/{extract_id} | 
*ExtractsApi* | [**getExtract**](docs/Api/ExtractsApi.md#getextract) | **GET** /extracts/{extract_id} | 
*ExtractsApi* | [**getExtractPlayer**](docs/Api/ExtractsApi.md#getextractplayer) | **GET** /extracts/{extract_id}/player | 
*ExtractsApi* | [**getExtracts**](docs/Api/ExtractsApi.md#getextracts) | **GET** /extracts | 
*ExtractsApi* | [**getProductExtracts**](docs/Api/ExtractsApi.md#getproductextracts) | **GET** /products/{product_id}/extracts | 
*ExtractsApi* | [**updateExtract**](docs/Api/ExtractsApi.md#updateextract) | **PUT** /extracts/{extract_id} | 
*FeatureValuesApi* | [**attachFeaturesToProduct**](docs/Api/FeatureValuesApi.md#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*FeatureValuesApi* | [**attachFeaturesToVideo**](docs/Api/FeatureValuesApi.md#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*FeatureValuesApi* | [**detachFeatureToProduct**](docs/Api/FeatureValuesApi.md#detachfeaturetoproduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
*FeatureValuesApi* | [**getFeatureValues**](docs/Api/FeatureValuesApi.md#getfeaturevalues) | **GET** /feature-values | 
*FeaturesApi* | [**attachFeaturesToProduct**](docs/Api/FeaturesApi.md#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*FeaturesApi* | [**attachFeaturesToVideo**](docs/Api/FeaturesApi.md#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*FeaturesApi* | [**detachFeatureToProduct**](docs/Api/FeaturesApi.md#detachfeaturetoproduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
*FeaturesApi* | [**getCategoryFeatures**](docs/Api/FeaturesApi.md#getcategoryfeatures) | **GET** /categories/{category_id}/features | 
*FeaturesApi* | [**getFeatureValues**](docs/Api/FeaturesApi.md#getfeaturevalues) | **GET** /feature-values | 
*FeaturesApi* | [**getFeatures**](docs/Api/FeaturesApi.md#getfeatures) | **GET** /features | 
*FeaturesApi* | [**getProductFeatures**](docs/Api/FeaturesApi.md#getproductfeatures) | **GET** /products/{product_id}/features | 
*FeaturesApi* | [**getVideoFeatures**](docs/Api/FeaturesApi.md#getvideofeatures) | **GET** /videos/{video_id}/features | 
*GendersApi* | [**getGenders**](docs/Api/GendersApi.md#getgenders) | **GET** /genders | 
*GeolocationsApi* | [**geolocations**](docs/Api/GeolocationsApi.md#geolocations) | **POST** /geolocations | 
*GeolocationsApi* | [**getIPLocation**](docs/Api/GeolocationsApi.md#getiplocation) | **GET** /geolocations/ip | 
*GeolocationsApi* | [**getProductGeolocations**](docs/Api/GeolocationsApi.md#getproductgeolocations) | **GET** /products/{product_id}/geolocations | 
*GeolocationsApi* | [**getProductGeolocationsByIp**](docs/Api/GeolocationsApi.md#getproductgeolocationsbyip) | **POST** /products/{product_id}/geolocations | 
*GeolocationsApi* | [**getVideoGeolocationByIp**](docs/Api/GeolocationsApi.md#getvideogeolocationbyip) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
*GeolocationsApi* | [**setProductGeolocation**](docs/Api/GeolocationsApi.md#setproductgeolocation) | **PUT** /products/{product_id}/geolocations | 
*GeolocationsApi* | [**setVideoGeolocation**](docs/Api/GeolocationsApi.md#setvideogeolocation) | **PUT** /videos/{video_id}/geolocations | 
*GiftsApi* | [**consumeGift**](docs/Api/GiftsApi.md#consumegift) | **PUT** /gifts/{gift_id}/consume | 
*GiftsApi* | [**createGift**](docs/Api/GiftsApi.md#creategift) | **POST** /gifts | 
*GiftsApi* | [**deleteGift**](docs/Api/GiftsApi.md#deletegift) | **DELETE** /gifts/{gift_id} | 
*GiftsApi* | [**deleteGiftsInCart**](docs/Api/GiftsApi.md#deletegiftsincart) | **DELETE** /carts/{cart_id}/gift/ | 
*GiftsApi* | [**getGift**](docs/Api/GiftsApi.md#getgift) | **GET** /gifts/{gift_id} | 
*GiftsApi* | [**getGiftInCart**](docs/Api/GiftsApi.md#getgiftincart) | **GET** /carts/{cart_id}/gift | 
*GiftsApi* | [**getGiftToken**](docs/Api/GiftsApi.md#getgifttoken) | **GET** /gifts/{gift_id}/token | 
*GiftsApi* | [**getGifts**](docs/Api/GiftsApi.md#getgifts) | **GET** /gifts | 
*GiftsApi* | [**sendGift**](docs/Api/GiftsApi.md#sendgift) | **POST** /gifts/{gift_id}/send | 
*GiftsApi* | [**updateGift**](docs/Api/GiftsApi.md#updategift) | **PUT** /gifts/{gift_id} | 
*GroupsApi* | [**attachCustomerToGroup**](docs/Api/GroupsApi.md#attachcustomertogroup) | **POST** /groups/{group_id}/customers | 
*GroupsApi* | [**detachCustomerFromGroup**](docs/Api/GroupsApi.md#detachcustomerfromgroup) | **DELETE** /groups/{group_id}/customers/{customer_id} | 
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{group_id} | 
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /groups | 
*GroupsApi* | [**getProductGroups**](docs/Api/GroupsApi.md#getproductgroups) | **GET** /products/{product_id}/groups | 
*ImagesApi* | [**deleteProductScreenshot**](docs/Api/ImagesApi.md#deleteproductscreenshot) | **DELETE** /products/{product_id}/screenshots/{image_id} | 
*ImagesApi* | [**getActorCoverImage**](docs/Api/ImagesApi.md#getactorcoverimage) | **GET** /actors/{actor_id}/cover | 
*ImagesApi* | [**getCategoryBanner**](docs/Api/ImagesApi.md#getcategorybanner) | **GET** /categories/{category_id}/banner | 
*ImagesApi* | [**getDirectorCoverImage**](docs/Api/ImagesApi.md#getdirectorcoverimage) | **GET** /directors/{director_id}/cover | 
*ImagesApi* | [**getIntroImage**](docs/Api/ImagesApi.md#getintroimage) | **GET** /widgets/intro/images | 
*ImagesApi* | [**getProductCoverImage**](docs/Api/ImagesApi.md#getproductcoverimage) | **GET** /products/{product_id}/cover | 
*ImagesApi* | [**getProductImages**](docs/Api/ImagesApi.md#getproductimages) | **GET** /products/{product_id}/images | 
*ImagesApi* | [**getProductScreenshots**](docs/Api/ImagesApi.md#getproductscreenshots) | **GET** /products/{product_id}/screenshots | 
*ImagesApi* | [**getSubscriptionCoverImage**](docs/Api/ImagesApi.md#getsubscriptioncoverimage) | **GET** /subscriptions/{subscription_id}/cover | 
*ImagesApi* | [**getVideoCover**](docs/Api/ImagesApi.md#getvideocover) | **GET** /videos/{video_id}/cover | 
*ImagesApi* | [**uploadActorCover**](docs/Api/ImagesApi.md#uploadactorcover) | **POST** /actors/{actor_id}/cover | 
*ImagesApi* | [**uploadCategoryBanner**](docs/Api/ImagesApi.md#uploadcategorybanner) | **POST** /category/{category_id}/banner | 
*ImagesApi* | [**uploadDirectorCover**](docs/Api/ImagesApi.md#uploaddirectorcover) | **POST** /directors/{director_id}/cover | 
*ImagesApi* | [**uploadProductCover**](docs/Api/ImagesApi.md#uploadproductcover) | **POST** /products/{product_id}/cover | 
*ImagesApi* | [**uploadProductScreenshot**](docs/Api/ImagesApi.md#uploadproductscreenshot) | **PUT** /products/{product_id}/screenshots/{image_id} | 
*ImagesApi* | [**uploadProductScreenshots**](docs/Api/ImagesApi.md#uploadproductscreenshots) | **POST** /products/{product_id}/screenshots | 
*ImagesApi* | [**uploadSubscriptionCover**](docs/Api/ImagesApi.md#uploadsubscriptioncover) | **POST** /subscriptions/{subscription_id}/cover | 
*LanguagesApi* | [**getLanguages**](docs/Api/LanguagesApi.md#getlanguages) | **GET** /languages | 
*MediaFilesApi* | [**getMediaSourceFiles**](docs/Api/MediaFilesApi.md#getmediasourcefiles) | **GET** /media-sources/{source_id}/files | 
*MediaFilesApi* | [**postMediaSourceFiles**](docs/Api/MediaFilesApi.md#postmediasourcefiles) | **POST** /media-sources/{source_id}/files | 
*MediaSourcesApi* | [**getMediaSource**](docs/Api/MediaSourcesApi.md#getmediasource) | **GET** /media-sources/{source_id} | 
*MediaSourcesApi* | [**getMediaSourceFiles**](docs/Api/MediaSourcesApi.md#getmediasourcefiles) | **GET** /media-sources/{source_id}/files | 
*MediaSourcesApi* | [**getMediaSources**](docs/Api/MediaSourcesApi.md#getmediasources) | **GET** /media-sources | 
*MediaSourcesApi* | [**postMediaSourceFiles**](docs/Api/MediaSourcesApi.md#postmediasourcefiles) | **POST** /media-sources/{source_id}/files | 
*OAuthApi* | [**getToken**](docs/Api/OAuthApi.md#gettoken) | **POST** /get-token | 
*OrderHistoriesApi* | [**getOrderHistories**](docs/Api/OrderHistoriesApi.md#getorderhistories) | **GET** /orders/{order_id}/histories | 
*OrderStatesApi* | [**getOrderState**](docs/Api/OrderStatesApi.md#getorderstate) | **GET** /order-states/{order_state_id} | 
*OrderStatesApi* | [**getOrderStates**](docs/Api/OrderStatesApi.md#getorderstates) | **GET** /order-states | 
*OrdersApi* | [**getCustomerOrders**](docs/Api/OrdersApi.md#getcustomerorders) | **GET** /customers/{customer_id}/orders | 
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /orders/{order_id} | 
*OrdersApi* | [**getOrderHistories**](docs/Api/OrdersApi.md#getorderhistories) | **GET** /orders/{order_id}/histories | 
*OrdersApi* | [**getOrderInvoice**](docs/Api/OrdersApi.md#getorderinvoice) | **GET** /orders/{order_id}/invoice | 
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | 
*PaymentModulesApi* | [**getPaymentMethods**](docs/Api/PaymentModulesApi.md#getpaymentmethods) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods | 
*PaymentModulesApi* | [**getPaymentModules**](docs/Api/PaymentModulesApi.md#getpaymentmodules) | **GET** /payment-modules | 
*PaymentModulesApi* | [**getPaymentUrl**](docs/Api/PaymentModulesApi.md#getpaymenturl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
*PaymentModulesApi* | [**getPendingPayments**](docs/Api/PaymentModulesApi.md#getpendingpayments) | **GET** /customers/{customer_id}/payments/{payment_name}/pending | 
*PaymentModulesApi* | [**preparePayment**](docs/Api/PaymentModulesApi.md#preparepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
*PaymentModulesApi* | [**updatePaymentMethod**](docs/Api/PaymentModulesApi.md#updatepaymentmethod) | **PUT** /customers/{customer_id}/payments/{payment_name}/payment-method | 
*PaymentModulesApi* | [**validateFreeOrder**](docs/Api/PaymentModulesApi.md#validatefreeorder) | **POST** /carts/{cart_id}/validate-free-order | 
*PaymentModulesApi* | [**validatePayment**](docs/Api/PaymentModulesApi.md#validatepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
*PrepaymentsApi* | [**getCustomerPrepaymentBalances**](docs/Api/PrepaymentsApi.md#getcustomerprepaymentbalances) | **GET** /customers/{customer_id}/prepayment-balance | 
*PrepaymentsApi* | [**getCustomerPrepaymentOperations**](docs/Api/PrepaymentsApi.md#getcustomerprepaymentoperations) | **GET** /customers/{customer_id}/prepayment-operations | 
*PrepaymentsApi* | [**getPrepaymentBonus**](docs/Api/PrepaymentsApi.md#getprepaymentbonus) | **GET** /prepayment/bonus | 
*PrepaymentsApi* | [**getPrepaymentBonus_0**](docs/Api/PrepaymentsApi.md#getprepaymentbonus_0) | **GET** /prepayment/bonus/{prepayment_bonus_id} | 
*PrepaymentsApi* | [**getPrepaymentOperation**](docs/Api/PrepaymentsApi.md#getprepaymentoperation) | **GET** /prepayment/operations/{prepayment_operation_id} | 
*PrepaymentsApi* | [**getPrepaymentOperations**](docs/Api/PrepaymentsApi.md#getprepaymentoperations) | **GET** /prepayment/operations | 
*PrepaymentsApi* | [**getPrepaymentRecharge**](docs/Api/PrepaymentsApi.md#getprepaymentrecharge) | **GET** /prepayment/recharges/{prepayment_recharge_id} | 
*PrepaymentsApi* | [**getPrepaymentRecharges**](docs/Api/PrepaymentsApi.md#getprepaymentrecharges) | **GET** /prepayment/recharges | 
*ProductAccessesApi* | [**createProductAccess**](docs/Api/ProductAccessesApi.md#createproductaccess) | **POST** /product-accesses | 
*ProductAccessesApi* | [**deleteProductAccess**](docs/Api/ProductAccessesApi.md#deleteproductaccess) | **DELETE** /product-accesses/{product_access_id} | 
*ProductAccessesApi* | [**getCustomerAccessesSubscriptions**](docs/Api/ProductAccessesApi.md#getcustomeraccessessubscriptions) | **GET** /customers/{customer_id}/accesses/subscriptions | 
*ProductAccessesApi* | [**getCustomerAccessesVideos**](docs/Api/ProductAccessesApi.md#getcustomeraccessesvideos) | **GET** /customers/{customer_id}/accesses/videos | 
*ProductAccessesApi* | [**getProductAccess**](docs/Api/ProductAccessesApi.md#getproductaccess) | **GET** /product-accesses/{product_access_id} | 
*ProductAccessesApi* | [**getProductAccesses**](docs/Api/ProductAccessesApi.md#getproductaccesses) | **GET** /product-accesses | 
*ProductAccessesApi* | [**subscribe**](docs/Api/ProductAccessesApi.md#subscribe) | **PUT** /product-accesses/{product_access_id}/subscribe | 
*ProductAccessesApi* | [**switchSubscription**](docs/Api/ProductAccessesApi.md#switchsubscription) | **PUT** /product-accesses/{product_access_id}/switch | 
*ProductAccessesApi* | [**switchSubscriptionDelete**](docs/Api/ProductAccessesApi.md#switchsubscriptiondelete) | **DELETE** /product-accesses/{product_access_id}/switch | 
*ProductAccessesApi* | [**switchSubscriptionPending**](docs/Api/ProductAccessesApi.md#switchsubscriptionpending) | **GET** /product-accesses/{product_access_id}/switch | 
*ProductAccessesApi* | [**unsubscribe**](docs/Api/ProductAccessesApi.md#unsubscribe) | **PUT** /product-accesses/{product_access_id}/unsubscribe | 
*ProductAccessesApi* | [**updateProductAccess**](docs/Api/ProductAccessesApi.md#updateproductaccess) | **PUT** /product-accesses/{product_access_id} | 
*ProductsApi* | [**attachFeaturesToProduct**](docs/Api/ProductsApi.md#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*ProductsApi* | [**attachProductToActor**](docs/Api/ProductsApi.md#attachproducttoactor) | **POST** /products/{product_id}/actors | 
*ProductsApi* | [**attachProductToCategory**](docs/Api/ProductsApi.md#attachproducttocategory) | **POST** /products/{product_id}/categories | 
*ProductsApi* | [**attachProductToDirector**](docs/Api/ProductsApi.md#attachproducttodirector) | **POST** /products/{product_id}/directors | 
*ProductsApi* | [**attachProductToGroup**](docs/Api/ProductsApi.md#attachproducttogroup) | **POST** /products/{product_id}/groups | 
*ProductsApi* | [**attachVideoToProduct**](docs/Api/ProductsApi.md#attachvideotoproduct) | **POST** /products/{product_id}/videos | 
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /products | 
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /products/{product_id} | 
*ProductsApi* | [**detachFeatureToProduct**](docs/Api/ProductsApi.md#detachfeaturetoproduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
*ProductsApi* | [**detachProductFromActor**](docs/Api/ProductsApi.md#detachproductfromactor) | **DELETE** /products/{product_id}/actors/{actor_id} | 
*ProductsApi* | [**detachProductFromCategory**](docs/Api/ProductsApi.md#detachproductfromcategory) | **DELETE** /products/{product_id}/categories/{category_id} | 
*ProductsApi* | [**detachProductFromDirector**](docs/Api/ProductsApi.md#detachproductfromdirector) | **DELETE** /products/{product_id}/directors/{director_id} | 
*ProductsApi* | [**detachProductFromGroup**](docs/Api/ProductsApi.md#detachproductfromgroup) | **DELETE** /products/{product_id}/groups/{group_id} | 
*ProductsApi* | [**getCategoryProducts**](docs/Api/ProductsApi.md#getcategoryproducts) | **GET** /categories/{category_id}/products | 
*ProductsApi* | [**getCustomerHasAccessToProduct**](docs/Api/ProductsApi.md#getcustomerhasaccesstoproduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /products/{product_id} | 
*ProductsApi* | [**getProductActors**](docs/Api/ProductsApi.md#getproductactors) | **GET** /products/{product_id}/actors | 
*ProductsApi* | [**getProductAttributes**](docs/Api/ProductsApi.md#getproductattributes) | **GET** /products/{product_id}/attributes | 
*ProductsApi* | [**getProductAvailability**](docs/Api/ProductsApi.md#getproductavailability) | **GET** /products/{product_id}/access | 
*ProductsApi* | [**getProductCategories**](docs/Api/ProductsApi.md#getproductcategories) | **GET** /products/{product_id}/categories | 
*ProductsApi* | [**getProductCoverImage**](docs/Api/ProductsApi.md#getproductcoverimage) | **GET** /products/{product_id}/cover | 
*ProductsApi* | [**getProductDirectors**](docs/Api/ProductsApi.md#getproductdirectors) | **GET** /products/{product_id}/directors | 
*ProductsApi* | [**getProductExtracts**](docs/Api/ProductsApi.md#getproductextracts) | **GET** /products/{product_id}/extracts | 
*ProductsApi* | [**getProductFeatures**](docs/Api/ProductsApi.md#getproductfeatures) | **GET** /products/{product_id}/features | 
*ProductsApi* | [**getProductGeolocations**](docs/Api/ProductsApi.md#getproductgeolocations) | **GET** /products/{product_id}/geolocations | 
*ProductsApi* | [**getProductGeolocationsByIp**](docs/Api/ProductsApi.md#getproductgeolocationsbyip) | **POST** /products/{product_id}/geolocations | 
*ProductsApi* | [**getProductGroups**](docs/Api/ProductsApi.md#getproductgroups) | **GET** /products/{product_id}/groups | 
*ProductsApi* | [**getProductImages**](docs/Api/ProductsApi.md#getproductimages) | **GET** /products/{product_id}/images | 
*ProductsApi* | [**getProductSubscription**](docs/Api/ProductsApi.md#getproductsubscription) | **GET** /products/{product_id}/subscription | 
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | 
*ProductsApi* | [**getProductsFromProduct**](docs/Api/ProductsApi.md#getproductsfromproduct) | **GET** /products/{product_id}/products | 
*ProductsApi* | [**getVideosFromProduct**](docs/Api/ProductsApi.md#getvideosfromproduct) | **GET** /products/{product_id}/videos | 
*ProductsApi* | [**searchProducts**](docs/Api/ProductsApi.md#searchproducts) | **GET** /products/search/{search_query} | 
*ProductsApi* | [**setProductGeolocation**](docs/Api/ProductsApi.md#setproductgeolocation) | **PUT** /products/{product_id}/geolocations | 
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /products/{product_id} | 
*ProductsApi* | [**updateProductGroupRestrictionBehavior**](docs/Api/ProductsApi.md#updateproductgrouprestrictionbehavior) | **PUT** /products/{product_id}/groups/behavior | 
*StatsApi* | [**getCustomerGroupTotalWatched**](docs/Api/StatsApi.md#getcustomergrouptotalwatched) | **GET** /video-stats/customer-group | 
*StatsApi* | [**getCustomerSessions**](docs/Api/StatsApi.md#getcustomersessions) | **GET** /video-stats/sessions | 
*StatsApi* | [**getCustomerVideoStats**](docs/Api/StatsApi.md#getcustomervideostats) | **GET** /video-stats/customers | 
*StatsApi* | [**getVideoStats**](docs/Api/StatsApi.md#getvideostats) | **GET** /video-stats/videos | 
*SubscriptionsApi* | [**getDisabledSubscriptions**](docs/Api/SubscriptionsApi.md#getdisabledsubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
*SubscriptionsApi* | [**getProductSubscription**](docs/Api/SubscriptionsApi.md#getproductsubscription) | **GET** /products/{product_id}/subscription | 
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /subscriptions/{subscription_id} | 
*SubscriptionsApi* | [**getSubscriptionCategories**](docs/Api/SubscriptionsApi.md#getsubscriptioncategories) | **GET** /subscriptions/{subscription_id}/categories | 
*SubscriptionsApi* | [**getSubscriptionCoverImage**](docs/Api/SubscriptionsApi.md#getsubscriptioncoverimage) | **GET** /subscriptions/{subscription_id}/cover | 
*SubscriptionsApi* | [**getSubscriptions**](docs/Api/SubscriptionsApi.md#getsubscriptions) | **GET** /subscriptions | 
*TasksApi* | [**createTask**](docs/Api/TasksApi.md#createtask) | **POST** /tasks | 
*VideosApi* | [**attachCoverToVideo**](docs/Api/VideosApi.md#attachcovertovideo) | **POST** /videos/{video_id}/cover | 
*VideosApi* | [**attachFeaturesToVideo**](docs/Api/VideosApi.md#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*VideosApi* | [**attachVideoToProduct**](docs/Api/VideosApi.md#attachvideotoproduct) | **POST** /products/{product_id}/videos | 
*VideosApi* | [**createVideo**](docs/Api/VideosApi.md#createvideo) | **POST** /videos | 
*VideosApi* | [**deleteVideo**](docs/Api/VideosApi.md#deletevideo) | **DELETE** /videos/{video_id} | 
*VideosApi* | [**getCustomerHasAccessToVideo**](docs/Api/VideosApi.md#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*VideosApi* | [**getDisabledSubscriptions**](docs/Api/VideosApi.md#getdisabledsubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
*VideosApi* | [**getVideo**](docs/Api/VideosApi.md#getvideo) | **GET** /videos/{video_id} | 
*VideosApi* | [**getVideoAccess**](docs/Api/VideosApi.md#getvideoaccess) | **GET** /videos/{video_id}/customers/{customer_id}/access | 
*VideosApi* | [**getVideoBonus**](docs/Api/VideosApi.md#getvideobonus) | **GET** /videos/{video_id}/bonus | 
*VideosApi* | [**getVideoDownloadUrl**](docs/Api/VideosApi.md#getvideodownloadurl) | **GET** /videos/{video_id}/download-url | 
*VideosApi* | [**getVideoFeatures**](docs/Api/VideosApi.md#getvideofeatures) | **GET** /videos/{video_id}/features | 
*VideosApi* | [**getVideoGeolocation**](docs/Api/VideosApi.md#getvideogeolocation) | **GET** /videos/{video_id}/geolocation | 
*VideosApi* | [**getVideoGeolocationByIp**](docs/Api/VideosApi.md#getvideogeolocationbyip) | **POST** /videos/{video_id}/geolocations/{ip_address} | 
*VideosApi* | [**getVideoPlayer**](docs/Api/VideosApi.md#getvideoplayer) | **GET** /videos/{video_id}/player | 
*VideosApi* | [**getVideoSubtitles**](docs/Api/VideosApi.md#getvideosubtitles) | **GET** /videos/{video_id}/subtitles | 
*VideosApi* | [**getVideoViews**](docs/Api/VideosApi.md#getvideoviews) | **GET** /videos/{video_id}/views | 
*VideosApi* | [**getVideos**](docs/Api/VideosApi.md#getvideos) | **GET** /videos | 
*VideosApi* | [**getVideosFromProduct**](docs/Api/VideosApi.md#getvideosfromproduct) | **GET** /products/{product_id}/videos | 
*VideosApi* | [**setVideoGeolocation**](docs/Api/VideosApi.md#setvideogeolocation) | **PUT** /videos/{video_id}/geolocations | 
*VideosApi* | [**updateVideo**](docs/Api/VideosApi.md#updatevideo) | **PUT** /videos/{video_id} | 
*WidgetsApi* | [**getIntroImage**](docs/Api/WidgetsApi.md#getintroimage) | **GET** /widgets/intro/images | 
*WidgetsApi* | [**getWidgetFooterMenu**](docs/Api/WidgetsApi.md#getwidgetfootermenu) | **GET** /widgets/footer-menu | 
*WidgetsApi* | [**getWidgetSlider**](docs/Api/WidgetsApi.md#getwidgetslider) | **GET** /widgets/slider | 
*WidgetsApi* | [**getWidgetSliderItem**](docs/Api/WidgetsApi.md#getwidgetslideritem) | **GET** /widgets/slider/{slider_id} | 
*WidgetsApi* | [**getWidgetTopMenu**](docs/Api/WidgetsApi.md#getwidgettopmenu) | **GET** /widgets/top-menu | 


## Documentation For Models

 - [Actor](docs/Model/Actor.md)
 - [Actors](docs/Model/Actors.md)
 - [Address](docs/Model/Address.md)
 - [BlogCategory](docs/Model/BlogCategory.md)
 - [BlogCategoryLists](docs/Model/BlogCategoryLists.md)
 - [BlogPage](docs/Model/BlogPage.md)
 - [BlogPageLists](docs/Model/BlogPageLists.md)
 - [Bonus](docs/Model/Bonus.md)
 - [CMSCategoriesLists](docs/Model/CMSCategoriesLists.md)
 - [CMSCategory](docs/Model/CMSCategory.md)
 - [CMSPage](docs/Model/CMSPage.md)
 - [CMSPageLists](docs/Model/CMSPageLists.md)
 - [Cart](docs/Model/Cart.md)
 - [CartBody](docs/Model/CartBody.md)
 - [CartRule](docs/Model/CartRule.md)
 - [CartRuleRestrictionGroup](docs/Model/CartRuleRestrictionGroup.md)
 - [CartRuleRestrictionGroupItem](docs/Model/CartRuleRestrictionGroupItem.md)
 - [CartRules](docs/Model/CartRules.md)
 - [Carts](docs/Model/Carts.md)
 - [Categories](docs/Model/Categories.md)
 - [Category](docs/Model/Category.md)
 - [CategoryImages](docs/Model/CategoryImages.md)
 - [Configuration](docs/Model/Configuration.md)
 - [ConfigurationList](docs/Model/ConfigurationList.md)
 - [Countries](docs/Model/Countries.md)
 - [Country](docs/Model/Country.md)
 - [Currencies](docs/Model/Currencies.md)
 - [Currency](docs/Model/Currency.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerCreateRequest](docs/Model/CustomerCreateRequest.md)
 - [CustomerCurrentViews](docs/Model/CustomerCurrentViews.md)
 - [CustomerGroupVideoStats](docs/Model/CustomerGroupVideoStats.md)
 - [CustomerGroupVideoStats1](docs/Model/CustomerGroupVideoStats1.md)
 - [CustomerId](docs/Model/CustomerId.md)
 - [CustomerThread](docs/Model/CustomerThread.md)
 - [CustomerThread1](docs/Model/CustomerThread1.md)
 - [CustomerVideoStats](docs/Model/CustomerVideoStats.md)
 - [CustomerVideoStats1](docs/Model/CustomerVideoStats1.md)
 - [Customers](docs/Model/Customers.md)
 - [Director](docs/Model/Director.md)
 - [Directors](docs/Model/Directors.md)
 - [DownloadUrl](docs/Model/DownloadUrl.md)
 - [Extract](docs/Model/Extract.md)
 - [Feature](docs/Model/Feature.md)
 - [FeatureValue](docs/Model/FeatureValue.md)
 - [Features](docs/Model/Features.md)
 - [Gender](docs/Model/Gender.md)
 - [Genders](docs/Model/Genders.md)
 - [Geoloc](docs/Model/Geoloc.md)
 - [Geolocs](docs/Model/Geolocs.md)
 - [Gift](docs/Model/Gift.md)
 - [Gifts](docs/Model/Gifts.md)
 - [Group](docs/Model/Group.md)
 - [Groups](docs/Model/Groups.md)
 - [I18nField](docs/Model/I18nField.md)
 - [IPCoordinates](docs/Model/IPCoordinates.md)
 - [IPLocation](docs/Model/IPLocation.md)
 - [Image](docs/Model/Image.md)
 - [Language](docs/Model/Language.md)
 - [Languages](docs/Model/Languages.md)
 - [MediaFile](docs/Model/MediaFile.md)
 - [MediaFiles](docs/Model/MediaFiles.md)
 - [MediaSource](docs/Model/MediaSource.md)
 - [MediaSources](docs/Model/MediaSources.md)
 - [OAuthToken](docs/Model/OAuthToken.md)
 - [Order](docs/Model/Order.md)
 - [OrderHistories](docs/Model/OrderHistories.md)
 - [OrderHistory](docs/Model/OrderHistory.md)
 - [OrderState](docs/Model/OrderState.md)
 - [OrderStates](docs/Model/OrderStates.md)
 - [Orders](docs/Model/Orders.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaymentArguments](docs/Model/PaymentArguments.md)
 - [PaymentDetails](docs/Model/PaymentDetails.md)
 - [PaymentDetails1](docs/Model/PaymentDetails1.md)
 - [PaymentMethods](docs/Model/PaymentMethods.md)
 - [PaymentModule](docs/Model/PaymentModule.md)
 - [PaymentModules](docs/Model/PaymentModules.md)
 - [PaymentUrl](docs/Model/PaymentUrl.md)
 - [PlayerConfiguration](docs/Model/PlayerConfiguration.md)
 - [PrepaymentBalance](docs/Model/PrepaymentBalance.md)
 - [PrepaymentBonus](docs/Model/PrepaymentBonus.md)
 - [PrepaymentBonus1](docs/Model/PrepaymentBonus1.md)
 - [PrepaymentOperation](docs/Model/PrepaymentOperation.md)
 - [PrepaymentOperations](docs/Model/PrepaymentOperations.md)
 - [PrepaymentRecharge](docs/Model/PrepaymentRecharge.md)
 - [PrepaymentRecharges](docs/Model/PrepaymentRecharges.md)
 - [Product](docs/Model/Product.md)
 - [ProductAccess](docs/Model/ProductAccess.md)
 - [ProductAttribute](docs/Model/ProductAttribute.md)
 - [ProductAttributeCreateRequest](docs/Model/ProductAttributeCreateRequest.md)
 - [ProductAttributeUpdateRequest](docs/Model/ProductAttributeUpdateRequest.md)
 - [ProductAttributesResponse](docs/Model/ProductAttributesResponse.md)
 - [ProductImagesResponse](docs/Model/ProductImagesResponse.md)
 - [Products](docs/Model/Products.md)
 - [Products1](docs/Model/Products1.md)
 - [Screenshot](docs/Model/Screenshot.md)
 - [SessionVideoStat](docs/Model/SessionVideoStat.md)
 - [SessionVideoStats](docs/Model/SessionVideoStats.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionAccesses](docs/Model/SubscriptionAccesses.md)
 - [Subscriptions](docs/Model/Subscriptions.md)
 - [Subtitle](docs/Model/Subtitle.md)
 - [Tag](docs/Model/Tag.md)
 - [Task](docs/Model/Task.md)
 - [TaskCreateRequest](docs/Model/TaskCreateRequest.md)
 - [TaskFactory](docs/Model/TaskFactory.md)
 - [Video](docs/Model/Video.md)
 - [VideoFreeAccess](docs/Model/VideoFreeAccess.md)
 - [VideoStat](docs/Model/VideoStat.md)
 - [VideoStats](docs/Model/VideoStats.md)
 - [VideoSubtitlesResponse](docs/Model/VideoSubtitlesResponse.md)
 - [VideoViews](docs/Model/VideoViews.md)
 - [Videos](docs/Model/Videos.md)
 - [Videos1](docs/Model/Videos1.md)
 - [WidgetFooterMenu](docs/Model/WidgetFooterMenu.md)
 - [WidgetFooterMenus](docs/Model/WidgetFooterMenus.md)
 - [WidgetSlider](docs/Model/WidgetSlider.md)
 - [WidgetSliders](docs/Model/WidgetSliders.md)
 - [WidgetTopMenu](docs/Model/WidgetTopMenu.md)
 - [WidgetTopMenus](docs/Model/WidgetTopMenus.md)

