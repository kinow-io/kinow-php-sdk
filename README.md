# Kinow PHP SDK Documentation

## Requirements

PHP 5.4.0 and later

## Installation & Usage

### Composer

#### Method 1:

To install the bindings via [Composer](http://getcomposer.org/), type in your console: `composer require kinow-io/kinow-php-sdk`

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
    require_once('/path/to/KinowClient/autoload.php');
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

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\ActorsApi();
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
Kinow\Client\Configuration::getDefaultConfiguration()->setDebug(true);

// (optionally) Change debug file location (default is 'php://output')
Kinow\Client\Configuration::getDefaultConfiguration()->setDebugFile('php://output');
```

## Documentation for API Endpoints

All URIs are relative to *https://api.kinow.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActorsApi* | [**attachProductToActor**](docs/Api/ActorsApi.md#attachproducttoactor) | **POST** /products/{product_id}/actors | 
*ActorsApi* | [**createActor**](docs/Api/ActorsApi.md#createactor) | **POST** /actors | 
*ActorsApi* | [**deleteActor**](docs/Api/ActorsApi.md#deleteactor) | **DELETE** /actors/{actor_id} | 
*ActorsApi* | [**getActor**](docs/Api/ActorsApi.md#getactor) | **GET** /actors/{actor_id} | 
*ActorsApi* | [**getActorCoverImage**](docs/Api/ActorsApi.md#getactorcoverimage) | **GET** /actors/{actor_id}/cover | 
*ActorsApi* | [**getActorProducts**](docs/Api/ActorsApi.md#getactorproducts) | **GET** /actors/{actor_id}/products | 
*ActorsApi* | [**getActorProductsRole**](docs/Api/ActorsApi.md#getactorproductsrole) | **GET** /actors/{actor_id}/products-role | 
*ActorsApi* | [**getActors**](docs/Api/ActorsApi.md#getactors) | **GET** /actors | 
*ActorsApi* | [**getProductActors**](docs/Api/ActorsApi.md#getproductactors) | **GET** /products/{product_id}/actors | 
*ActorsApi* | [**getProductActorsRole**](docs/Api/ActorsApi.md#getproductactorsrole) | **GET** /products/{product_id}/actors-role | 
*ActorsApi* | [**updateActor**](docs/Api/ActorsApi.md#updateactor) | **PUT** /actors/{actor_id} | 
*ActorsApi* | [**uploadActorCover**](docs/Api/ActorsApi.md#uploadactorcover) | **POST** /actors/{actor_id}/cover | 
*AddressApi* | [**getCustomerAddress**](docs/Api/AddressApi.md#getcustomeraddress) | **GET** /customers/{customer_id}/address | 
*AddressApi* | [**updateAddress**](docs/Api/AddressApi.md#updateaddress) | **PUT** /addresses/{address_id} | 
*AttributesApi* | [**createProductAttribute**](docs/Api/AttributesApi.md#createproductattribute) | **POST** /attributes | 
*AttributesApi* | [**deleteAttribute**](docs/Api/AttributesApi.md#deleteattribute) | **DELETE** /attributes/{attribute_id} | 
*AttributesApi* | [**getAttribute**](docs/Api/AttributesApi.md#getattribute) | **GET** /attributes/{attribute_id} | 
*AttributesApi* | [**getProductAttributes**](docs/Api/AttributesApi.md#getproductattributes) | **GET** /products/{product_id}/attributes | 
*BlogCategoriesApi* | [**getBlogCategories**](docs/Api/BlogCategoriesApi.md#getblogcategories) | **GET** /blog-categories | 
*BlogCategoriesApi* | [**getBlogCategory**](docs/Api/BlogCategoriesApi.md#getblogcategory) | **GET** /blog-categories/{blog_category_id} | 
*BlogPagesApi* | [**attachProductToBlogPage**](docs/Api/BlogPagesApi.md#attachproducttoblogpage) | **POST** /blog-pages/{blog_page_id}/products | 
*BlogPagesApi* | [**detachProductFromBlogPage**](docs/Api/BlogPagesApi.md#detachproductfromblogpage) | **DELETE** /blog-pages/{blog_page_id}/products/{product_id} | 
*BlogPagesApi* | [**getBlogPage**](docs/Api/BlogPagesApi.md#getblogpage) | **GET** /blog-pages/{blog_page_id} | 
*BlogPagesApi* | [**getBlogPageProducts**](docs/Api/BlogPagesApi.md#getblogpageproducts) | **GET** /blog-pages/{blog_page_id}/products | 
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
*CartRulesApi* | [**detachCartRuleFromCart**](docs/Api/CartRulesApi.md#detachcartrulefromcart) | **DELETE** /carts/{cart_id}/cart-rules/{cart_rule_id} | 
*CartRulesApi* | [**getCartRule**](docs/Api/CartRulesApi.md#getcartrule) | **GET** /cart-rules/{cart_rule_id} | 
*CartRulesApi* | [**getCartRules**](docs/Api/CartRulesApi.md#getcartrules) | **GET** /cart-rules | 
*CartRulesApi* | [**updateCartRule**](docs/Api/CartRulesApi.md#updatecartrule) | **PUT** /cart-rules/{cart_rule_id} | 
*CartsApi* | [**addProductToCart**](docs/Api/CartsApi.md#addproducttocart) | **POST** /carts/{cart_id}/products | 
*CartsApi* | [**attachCartRuleToCart**](docs/Api/CartsApi.md#attachcartruletocart) | **POST** /carts/{cart_id}/cart-rules | 
*CartsApi* | [**attachCartToCustomer**](docs/Api/CartsApi.md#attachcarttocustomer) | **POST** /customers/{customer_id}/carts | 
*CartsApi* | [**createCart**](docs/Api/CartsApi.md#createcart) | **POST** /carts | 
*CartsApi* | [**deleteCart**](docs/Api/CartsApi.md#deletecart) | **DELETE** /carts/{cart_id} | 
*CartsApi* | [**deleteProductFromCart**](docs/Api/CartsApi.md#deleteproductfromcart) | **DELETE** /carts/{cart_id}/products | 
*CartsApi* | [**detachCartRuleFromCart**](docs/Api/CartsApi.md#detachcartrulefromcart) | **DELETE** /carts/{cart_id}/cart-rules/{cart_rule_id} | 
*CartsApi* | [**emptyCart**](docs/Api/CartsApi.md#emptycart) | **POST** /carts/{cart_id}/empty | 
*CartsApi* | [**getCart**](docs/Api/CartsApi.md#getcart) | **GET** /carts/{cart_id} | 
*CartsApi* | [**getCarts**](docs/Api/CartsApi.md#getcarts) | **GET** /carts | 
*CartsApi* | [**getCustomerCarts**](docs/Api/CartsApi.md#getcustomercarts) | **GET** /customers/{customer_id}/carts | 
*CartsApi* | [**getLastCart**](docs/Api/CartsApi.md#getlastcart) | **GET** /customers/{customer_id}/last-cart | 
*CartsApi* | [**getLostsCarts**](docs/Api/CartsApi.md#getlostscarts) | **GET** /carts/losts-carts | 
*CartsApi* | [**getPaymentUrl**](docs/Api/CartsApi.md#getpaymenturl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
*CartsApi* | [**getPrice**](docs/Api/CartsApi.md#getprice) | **POST** /carts/price | 
*CartsApi* | [**preparePayment**](docs/Api/CartsApi.md#preparepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
*CartsApi* | [**recurringPayment**](docs/Api/CartsApi.md#recurringpayment) | **POST** /carts/{cart_id}/payments/{payment_name}/recurring | 
*CartsApi* | [**updateCart**](docs/Api/CartsApi.md#updatecart) | **PUT** /carts/{cart_id} | 
*CartsApi* | [**validateFreeOrder**](docs/Api/CartsApi.md#validatefreeorder) | **POST** /carts/{cart_id}/validate-free-order | 
*CartsApi* | [**validatePayment**](docs/Api/CartsApi.md#validatepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
*CategoriesApi* | [**attachFeaturesToCategory**](docs/Api/CategoriesApi.md#attachfeaturestocategory) | **POST** /categories/{category_id}/features | 
*CategoriesApi* | [**createCategory**](docs/Api/CategoriesApi.md#createcategory) | **POST** /categories | 
*CategoriesApi* | [**deleteCategory**](docs/Api/CategoriesApi.md#deletecategory) | **DELETE** /categories/{category_id} | 
*CategoriesApi* | [**getAvailableCategory**](docs/Api/CategoriesApi.md#getavailablecategory) | **GET** /categories-accesses/{category_id} | 
*CategoriesApi* | [**getCategories**](docs/Api/CategoriesApi.md#getcategories) | **GET** /categories | 
*CategoriesApi* | [**getCategoriesFromCategory**](docs/Api/CategoriesApi.md#getcategoriesfromcategory) | **GET** /categories/{category_id}/categories | 
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /categories/{category_id} | 
*CategoriesApi* | [**getCategoryBanner**](docs/Api/CategoriesApi.md#getcategorybanner) | **GET** /categories/{category_id}/banner | 
*CategoriesApi* | [**getCategoryFeatures**](docs/Api/CategoriesApi.md#getcategoryfeatures) | **GET** /categories/{category_id}/features | 
*CategoriesApi* | [**getCategoryImages**](docs/Api/CategoriesApi.md#getcategoryimages) | **GET** /categories/{category_id}/images | 
*CategoriesApi* | [**getCategoryProducts**](docs/Api/CategoriesApi.md#getcategoryproducts) | **GET** /categories/{category_id}/products | 
*CategoriesApi* | [**getCategoryVideoPlayer**](docs/Api/CategoriesApi.md#getcategoryvideoplayer) | **GET** /categories/videos/{video_id}/player | 
*CategoriesApi* | [**getCategoryVideoSubtitles**](docs/Api/CategoriesApi.md#getcategoryvideosubtitles) | **GET** /categories/videos/{video_id}/subtitles | 
*CategoriesApi* | [**getProductCategories**](docs/Api/CategoriesApi.md#getproductcategories) | **GET** /products/{product_id}/categories | 
*CategoriesApi* | [**getSubscriptionCategories**](docs/Api/CategoriesApi.md#getsubscriptioncategories) | **GET** /subscriptions/{subscription_id}/categories | 
*CategoriesApi* | [**getVideosFromCategories**](docs/Api/CategoriesApi.md#getvideosfromcategories) | **GET** /categories/videos | 
*CategoriesApi* | [**getVideosFromCategory**](docs/Api/CategoriesApi.md#getvideosfromcategory) | **GET** /categories/{category_id}/videos | 
*CategoriesApi* | [**updateCategory**](docs/Api/CategoriesApi.md#updatecategory) | **PUT** /categories/{category_id} | 
*CategoriesApi* | [**uploadCategoryCover**](docs/Api/CategoriesApi.md#uploadcategorycover) | **POST** /categories/{category_id}/cover | 
*CategoriesApi* | [**uploadCategoryImage**](docs/Api/CategoriesApi.md#uploadcategoryimage) | **POST** /categories/{category_id}/image | 
*CategoryVideosApi* | [**getCategoryVideoPlayer**](docs/Api/CategoryVideosApi.md#getcategoryvideoplayer) | **GET** /categories/videos/{video_id}/player | 
*CategoryVideosApi* | [**getCategoryVideoSubtitles**](docs/Api/CategoryVideosApi.md#getcategoryvideosubtitles) | **GET** /categories/videos/{video_id}/subtitles | 
*CategoryVideosApi* | [**getVideosFromCategories**](docs/Api/CategoryVideosApi.md#getvideosfromcategories) | **GET** /categories/videos | 
*CategoryVideosApi* | [**getVideosFromCategory**](docs/Api/CategoryVideosApi.md#getvideosfromcategory) | **GET** /categories/{category_id}/videos | 
*ConfigurationApi* | [**getConfiguration**](docs/Api/ConfigurationApi.md#getconfiguration) | **GET** /configuration | 
*ConfigurationApi* | [**getConfigurationAnalytics**](docs/Api/ConfigurationApi.md#getconfigurationanalytics) | **GET** /configuration/analytics | 
*ConfigurationApi* | [**getConfigurationByName**](docs/Api/ConfigurationApi.md#getconfigurationbyname) | **GET** /configuration/{configuration_name} | 
*ConfigurationApi* | [**getConfigurationLogo**](docs/Api/ConfigurationApi.md#getconfigurationlogo) | **GET** /configuration/logo | 
*ConfigurationApi* | [**getConfigurationSocial**](docs/Api/ConfigurationApi.md#getconfigurationsocial) | **GET** /configuration/social | 
*CountriesApi* | [**getCountries**](docs/Api/CountriesApi.md#getcountries) | **GET** /countries | 
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /currencies | 
*CustomersApi* | [**attachCartToCustomer**](docs/Api/CustomersApi.md#attachcarttocustomer) | **POST** /customers/{customer_id}/carts | 
*CustomersApi* | [**checkAuthenticationToken**](docs/Api/CustomersApi.md#checkauthenticationtoken) | **POST** /customers/check-authentication-token | 
*CustomersApi* | [**checkCustomerCredentials**](docs/Api/CustomersApi.md#checkcustomercredentials) | **POST** /customers/check-credentials | 
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | 
*CustomersApi* | [**createFacebookId**](docs/Api/CustomersApi.md#createfacebookid) | **POST** /customers/facebook | 
*CustomersApi* | [**createGoogleId**](docs/Api/CustomersApi.md#creategoogleid) | **POST** /customers/google | 
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
*CustomersApi* | [**getCustomerHasAccessToProducts**](docs/Api/CustomersApi.md#getcustomerhasaccesstoproducts) | **POST** /customers/{customer_id}/products/has-access | 
*CustomersApi* | [**getCustomerHasAccessToVideo**](docs/Api/CustomersApi.md#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*CustomersApi* | [**getCustomerHasAccessToVideos**](docs/Api/CustomersApi.md#getcustomerhasaccesstovideos) | **POST** /customers/{customer_id}/videos/has-access | 
*CustomersApi* | [**getCustomerOrders**](docs/Api/CustomersApi.md#getcustomerorders) | **GET** /customers/{customer_id}/orders | 
*CustomersApi* | [**getCustomerPlaylists**](docs/Api/CustomersApi.md#getcustomerplaylists) | **GET** /customers/{customer_id}/playlists | 
*CustomersApi* | [**getCustomerPrepaymentBalances**](docs/Api/CustomersApi.md#getcustomerprepaymentbalances) | **GET** /customers/{customer_id}/prepayment-balance | 
*CustomersApi* | [**getCustomerPrepaymentOperations**](docs/Api/CustomersApi.md#getcustomerprepaymentoperations) | **GET** /customers/{customer_id}/prepayment-operations | 
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | 
*CustomersApi* | [**getFacebookCustomer**](docs/Api/CustomersApi.md#getfacebookcustomer) | **GET** /customers/facebook/{facebook_id} | 
*CustomersApi* | [**getGoogleCustomer**](docs/Api/CustomersApi.md#getgooglecustomer) | **GET** /customers/google/{google_id} | 
*CustomersApi* | [**getPaymentMethods**](docs/Api/CustomersApi.md#getpaymentmethods) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods | 
*CustomersApi* | [**getPaymentMethodsWithIp**](docs/Api/CustomersApi.md#getpaymentmethodswithip) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods/{ip_address} | 
*CustomersApi* | [**getPendingPayments**](docs/Api/CustomersApi.md#getpendingpayments) | **GET** /customers/{customer_id}/payments/{payment_name}/pending | 
*CustomersApi* | [**getPendingPaymentsWithIp**](docs/Api/CustomersApi.md#getpendingpaymentswithip) | **GET** /customers/{customer_id}/payments/{payment_name}/pending/{ip_address} | 
*CustomersApi* | [**getRegistrationFields**](docs/Api/CustomersApi.md#getregistrationfields) | **GET** /customer/registration-fields | 
*CustomersApi* | [**loginWithFacebook**](docs/Api/CustomersApi.md#loginwithfacebook) | **POST** /customers/facebook-login | 
*CustomersApi* | [**loginWithGoogle**](docs/Api/CustomersApi.md#loginwithgoogle) | **POST** /customers/google-login | 
*CustomersApi* | [**passwordToken**](docs/Api/CustomersApi.md#passwordtoken) | **POST** /customers/password-token | 
*CustomersApi* | [**passwordTokenConsume**](docs/Api/CustomersApi.md#passwordtokenconsume) | **POST** /customers/password-token-consume | 
*CustomersApi* | [**stopSubscription**](docs/Api/CustomersApi.md#stopsubscription) | **PUT** /customers/{customer_id}/unsubscribe | 
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /customers/{customer_id} | 
*CustomersApi* | [**updatePaymentMethod**](docs/Api/CustomersApi.md#updatepaymentmethod) | **PUT** /customers/{customer_id}/payments/{payment_name}/payment-method | 
*CustomersApi* | [**validateCustomerCredentials**](docs/Api/CustomersApi.md#validatecustomercredentials) | **POST** /customers/validate-credentials | 
*DevicesApi* | [**createDevices**](docs/Api/DevicesApi.md#createdevices) | **POST** /devices | 
*DevicesApi* | [**deleteDevice**](docs/Api/DevicesApi.md#deletedevice) | **DELETE** /devices/{device_id} | 
*DevicesApi* | [**getCustomerDevices**](docs/Api/DevicesApi.md#getcustomerdevices) | **GET** /devices/{customer_id} | 
*DirectorsApi* | [**attachProductToDirector**](docs/Api/DirectorsApi.md#attachproducttodirector) | **POST** /products/{product_id}/directors | 
*DirectorsApi* | [**createDirector**](docs/Api/DirectorsApi.md#createdirector) | **POST** /directors | 
*DirectorsApi* | [**deleteDirector**](docs/Api/DirectorsApi.md#deletedirector) | **DELETE** /directors/{director_id} | 
*DirectorsApi* | [**getDirector**](docs/Api/DirectorsApi.md#getdirector) | **GET** /directors/{director_id} | 
*DirectorsApi* | [**getDirectorCoverImage**](docs/Api/DirectorsApi.md#getdirectorcoverimage) | **GET** /directors/{director_id}/cover | 
*DirectorsApi* | [**getDirectorProducts**](docs/Api/DirectorsApi.md#getdirectorproducts) | **GET** /directors/{director_id}/products | 
*DirectorsApi* | [**getDirectorProductsRole**](docs/Api/DirectorsApi.md#getdirectorproductsrole) | **GET** /directors/{director_id}/products-role | 
*DirectorsApi* | [**getDirectors**](docs/Api/DirectorsApi.md#getdirectors) | **GET** /directors | 
*DirectorsApi* | [**getProductDirectors**](docs/Api/DirectorsApi.md#getproductdirectors) | **GET** /products/{product_id}/directors | 
*DirectorsApi* | [**getProductDirectorsRole**](docs/Api/DirectorsApi.md#getproductdirectorsrole) | **GET** /products/{product_id}/directors-role | 
*DirectorsApi* | [**updateDirector**](docs/Api/DirectorsApi.md#updatedirector) | **PUT** /directors/{director_id} | 
*DirectorsApi* | [**uploadDirectorCover**](docs/Api/DirectorsApi.md#uploaddirectorcover) | **POST** /directors/{director_id}/cover | 
*EmployeesApi* | [**getEmployee**](docs/Api/EmployeesApi.md#getemployee) | **GET** /employees/{employee_id} | 
*EmployeesApi* | [**getEmployees**](docs/Api/EmployeesApi.md#getemployees) | **GET** /employees | 
*ExtractsApi* | [**attachCoverToExtract**](docs/Api/ExtractsApi.md#attachcovertoextract) | **POST** /extracts/{extract_id}/cover | 
*ExtractsApi* | [**attachFeaturesToExtract**](docs/Api/ExtractsApi.md#attachfeaturestoextract) | **POST** /extracts/{extract_id}/features | 
*ExtractsApi* | [**createExtract**](docs/Api/ExtractsApi.md#createextract) | **POST** /extracts | 
*ExtractsApi* | [**createSubtitle**](docs/Api/ExtractsApi.md#createsubtitle) | **POST** /extracts/{extract_id}/subtitle | 
*ExtractsApi* | [**deleteExtract**](docs/Api/ExtractsApi.md#deleteextract) | **DELETE** /extracts/{extract_id} | 
*ExtractsApi* | [**getExtract**](docs/Api/ExtractsApi.md#getextract) | **GET** /extracts/{extract_id} | 
*ExtractsApi* | [**getExtractFeatures**](docs/Api/ExtractsApi.md#getextractfeatures) | **GET** /extracts/{extract_id}/features | 
*ExtractsApi* | [**getExtractPlayer**](docs/Api/ExtractsApi.md#getextractplayer) | **GET** /extracts/{extract_id}/player | 
*ExtractsApi* | [**getExtracts**](docs/Api/ExtractsApi.md#getextracts) | **GET** /extracts | 
*ExtractsApi* | [**getProductExtracts**](docs/Api/ExtractsApi.md#getproductextracts) | **GET** /products/{product_id}/extracts | 
*ExtractsApi* | [**updateExtract**](docs/Api/ExtractsApi.md#updateextract) | **PUT** /extracts/{extract_id} | 
*FeatureValuesApi* | [**attachFeaturesToCategory**](docs/Api/FeatureValuesApi.md#attachfeaturestocategory) | **POST** /categories/{category_id}/features | 
*FeatureValuesApi* | [**attachFeaturesToExtract**](docs/Api/FeatureValuesApi.md#attachfeaturestoextract) | **POST** /extracts/{extract_id}/features | 
*FeatureValuesApi* | [**attachFeaturesToProduct**](docs/Api/FeatureValuesApi.md#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*FeatureValuesApi* | [**attachFeaturesToVideo**](docs/Api/FeatureValuesApi.md#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*FeatureValuesApi* | [**detachFeatureToProduct**](docs/Api/FeatureValuesApi.md#detachfeaturetoproduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
*FeatureValuesApi* | [**getFeatureValues**](docs/Api/FeatureValuesApi.md#getfeaturevalues) | **GET** /feature-values | 
*FeaturesApi* | [**attachFeaturesToCategory**](docs/Api/FeaturesApi.md#attachfeaturestocategory) | **POST** /categories/{category_id}/features | 
*FeaturesApi* | [**attachFeaturesToExtract**](docs/Api/FeaturesApi.md#attachfeaturestoextract) | **POST** /extracts/{extract_id}/features | 
*FeaturesApi* | [**attachFeaturesToProduct**](docs/Api/FeaturesApi.md#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*FeaturesApi* | [**attachFeaturesToVideo**](docs/Api/FeaturesApi.md#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*FeaturesApi* | [**detachFeatureToProduct**](docs/Api/FeaturesApi.md#detachfeaturetoproduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
*FeaturesApi* | [**getCategoryFeatures**](docs/Api/FeaturesApi.md#getcategoryfeatures) | **GET** /categories/{category_id}/features | 
*FeaturesApi* | [**getExtractFeatures**](docs/Api/FeaturesApi.md#getextractfeatures) | **GET** /extracts/{extract_id}/features | 
*FeaturesApi* | [**getFeatureValues**](docs/Api/FeaturesApi.md#getfeaturevalues) | **GET** /feature-values | 
*FeaturesApi* | [**getFeatures**](docs/Api/FeaturesApi.md#getfeatures) | **GET** /features | 
*FeaturesApi* | [**getProductFeatures**](docs/Api/FeaturesApi.md#getproductfeatures) | **GET** /products/{product_id}/features | 
*FeaturesApi* | [**getVideoFeatures**](docs/Api/FeaturesApi.md#getvideofeatures) | **GET** /videos/{video_id}/features | 
*FreeGiftsApi* | [**consumeFreeGift**](docs/Api/FreeGiftsApi.md#consumefreegift) | **PUT** /free-gifts/{free_gift_id}/consume | 
*FreeGiftsApi* | [**createFreeGift**](docs/Api/FreeGiftsApi.md#createfreegift) | **POST** /free-gifts | 
*FreeGiftsApi* | [**deleteFreeGift**](docs/Api/FreeGiftsApi.md#deletefreegift) | **DELETE** /free-gifts/{free_gift_id} | 
*FreeGiftsApi* | [**getFreeGift**](docs/Api/FreeGiftsApi.md#getfreegift) | **GET** /free-gifts/{free_gift_id} | 
*FreeGiftsApi* | [**getFreeGiftToken**](docs/Api/FreeGiftsApi.md#getfreegifttoken) | **GET** /free-gifts/{free_gift_id}/token | 
*FreeGiftsApi* | [**getFreeGifts**](docs/Api/FreeGiftsApi.md#getfreegifts) | **GET** /free-gifts | 
*FreeGiftsApi* | [**sendFreeGift**](docs/Api/FreeGiftsApi.md#sendfreegift) | **POST** /free-gifts/{free_gift_id}/send | 
*FreeGiftsApi* | [**updateFreeGift**](docs/Api/FreeGiftsApi.md#updatefreegift) | **PUT** /free-gifts/{free_gift_id} | 
*GendersApi* | [**getGenders**](docs/Api/GendersApi.md#getgenders) | **GET** /genders | 
*GeolocationsApi* | [**getGeolocSettings**](docs/Api/GeolocationsApi.md#getgeolocsettings) | **GET** /geolocations/settings | 
*GeolocationsApi* | [**getIPLocation**](docs/Api/GeolocationsApi.md#getiplocation) | **GET** /geolocations/ip | 
*GeolocationsApi* | [**getPlatformAccessInfo**](docs/Api/GeolocationsApi.md#getplatformaccessinfo) | **GET** /geolocations/platform-access | 
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
*GiftsApi* | [**getGiftsInCart**](docs/Api/GiftsApi.md#getgiftsincart) | **GET** /carts/{cart_id}/gifts | 
*GiftsApi* | [**sendGift**](docs/Api/GiftsApi.md#sendgift) | **POST** /gifts/{gift_id}/send | 
*GiftsApi* | [**updateGift**](docs/Api/GiftsApi.md#updategift) | **PUT** /gifts/{gift_id} | 
*GroupsApi* | [**attachCustomerToGroup**](docs/Api/GroupsApi.md#attachcustomertogroup) | **POST** /groups/{group_id}/customers | 
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /groups | 
*GroupsApi* | [**detachCustomerFromGroup**](docs/Api/GroupsApi.md#detachcustomerfromgroup) | **DELETE** /groups/{group_id}/customers/{customer_id} | 
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{group_id} | 
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /groups | 
*GroupsApi* | [**getProductGroups**](docs/Api/GroupsApi.md#getproductgroups) | **GET** /products/{product_id}/groups | 
*ImagesApi* | [**getActorCoverImage**](docs/Api/ImagesApi.md#getactorcoverimage) | **GET** /actors/{actor_id}/cover | 
*ImagesApi* | [**getCategoryBanner**](docs/Api/ImagesApi.md#getcategorybanner) | **GET** /categories/{category_id}/banner | 
*ImagesApi* | [**getCategoryImageTypes**](docs/Api/ImagesApi.md#getcategoryimagetypes) | **GET** /categories/image-types | 
*ImagesApi* | [**getCategoryImages**](docs/Api/ImagesApi.md#getcategoryimages) | **GET** /categories/{category_id}/images | 
*ImagesApi* | [**getDirectorCoverImage**](docs/Api/ImagesApi.md#getdirectorcoverimage) | **GET** /directors/{director_id}/cover | 
*ImagesApi* | [**getProductCoverImage**](docs/Api/ImagesApi.md#getproductcoverimage) | **GET** /products/{product_id}/cover | 
*ImagesApi* | [**getProductImageTypes**](docs/Api/ImagesApi.md#getproductimagetypes) | **GET** /products/image-types | 
*ImagesApi* | [**getProductImages**](docs/Api/ImagesApi.md#getproductimages) | **GET** /products/{product_id}/images | 
*ImagesApi* | [**getProductScreenshots**](docs/Api/ImagesApi.md#getproductscreenshots) | **GET** /products/{product_id}/screenshots | 
*ImagesApi* | [**getSliderImage**](docs/Api/ImagesApi.md#getsliderimage) | **GET** /widgets/slider/images | 
*ImagesApi* | [**getSubscriptionCoverImage**](docs/Api/ImagesApi.md#getsubscriptioncoverimage) | **GET** /subscriptions/{subscription_id}/cover | 
*ImagesApi* | [**getVideoCover**](docs/Api/ImagesApi.md#getvideocover) | **GET** /videos/{video_id}/cover | 
*ImagesApi* | [**uploadActorCover**](docs/Api/ImagesApi.md#uploadactorcover) | **POST** /actors/{actor_id}/cover | 
*ImagesApi* | [**uploadCategoryCover**](docs/Api/ImagesApi.md#uploadcategorycover) | **POST** /categories/{category_id}/cover | 
*ImagesApi* | [**uploadCategoryImage**](docs/Api/ImagesApi.md#uploadcategoryimage) | **POST** /categories/{category_id}/image | 
*ImagesApi* | [**uploadDirectorCover**](docs/Api/ImagesApi.md#uploaddirectorcover) | **POST** /directors/{director_id}/cover | 
*ImagesApi* | [**uploadProductCover**](docs/Api/ImagesApi.md#uploadproductcover) | **POST** /products/{product_id}/cover | 
*ImagesApi* | [**uploadProductImage**](docs/Api/ImagesApi.md#uploadproductimage) | **POST** /products/{product_id}/image | 
*ImagesApi* | [**uploadSubscriptionCover**](docs/Api/ImagesApi.md#uploadsubscriptioncover) | **POST** /subscriptions/{subscription_id}/cover | 
*LanguagesApi* | [**getLanguages**](docs/Api/LanguagesApi.md#getlanguages) | **GET** /languages | 
*MediaFilesApi* | [**getMediaFile**](docs/Api/MediaFilesApi.md#getmediafile) | **GET** /media-files/{media_file_id} | 
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
*PagesApi* | [**getPage**](docs/Api/PagesApi.md#getpage) | **GET** /pages/{page_id} | 
*PagesApi* | [**getPages**](docs/Api/PagesApi.md#getpages) | **GET** /pages | 
*PaymentModulesApi* | [**getPaymentMethods**](docs/Api/PaymentModulesApi.md#getpaymentmethods) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods | 
*PaymentModulesApi* | [**getPaymentMethodsWithIp**](docs/Api/PaymentModulesApi.md#getpaymentmethodswithip) | **GET** /customers/{customer_id}/payments/{payment_name}/payment-methods/{ip_address} | 
*PaymentModulesApi* | [**getPaymentModules**](docs/Api/PaymentModulesApi.md#getpaymentmodules) | **GET** /payment-modules | 
*PaymentModulesApi* | [**getPaymentToken**](docs/Api/PaymentModulesApi.md#getpaymenttoken) | **GET** /payment-modules/token/{token} | 
*PaymentModulesApi* | [**getPaymentUrl**](docs/Api/PaymentModulesApi.md#getpaymenturl) | **GET** /carts/{cart_id}/payments/{payment_name} | 
*PaymentModulesApi* | [**getPendingPayments**](docs/Api/PaymentModulesApi.md#getpendingpayments) | **GET** /customers/{customer_id}/payments/{payment_name}/pending | 
*PaymentModulesApi* | [**getPendingPaymentsWithIp**](docs/Api/PaymentModulesApi.md#getpendingpaymentswithip) | **GET** /customers/{customer_id}/payments/{payment_name}/pending/{ip_address} | 
*PaymentModulesApi* | [**preparePayment**](docs/Api/PaymentModulesApi.md#preparepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/prepare | 
*PaymentModulesApi* | [**recurringPayment**](docs/Api/PaymentModulesApi.md#recurringpayment) | **POST** /carts/{cart_id}/payments/{payment_name}/recurring | 
*PaymentModulesApi* | [**updatePaymentMethod**](docs/Api/PaymentModulesApi.md#updatepaymentmethod) | **PUT** /customers/{customer_id}/payments/{payment_name}/payment-method | 
*PaymentModulesApi* | [**validateFreeOrder**](docs/Api/PaymentModulesApi.md#validatefreeorder) | **POST** /carts/{cart_id}/validate-free-order | 
*PaymentModulesApi* | [**validatePayment**](docs/Api/PaymentModulesApi.md#validatepayment) | **POST** /carts/{cart_id}/payments/{payment_name}/validate | 
*PlaylistsApi* | [**attachBookmarkToPlaylist**](docs/Api/PlaylistsApi.md#attachbookmarktoplaylist) | **POST** /playlists/{playlist_id}/bookmarks | 
*PlaylistsApi* | [**createPlaylist**](docs/Api/PlaylistsApi.md#createplaylist) | **POST** /playlists | 
*PlaylistsApi* | [**deletePlaylist**](docs/Api/PlaylistsApi.md#deleteplaylist) | **DELETE** /playlists/{playlist_id} | 
*PlaylistsApi* | [**detachBookmarkFromPlaylist**](docs/Api/PlaylistsApi.md#detachbookmarkfromplaylist) | **DELETE** /playlists/{playlist_id}/bookmarks/{product_id} | 
*PlaylistsApi* | [**getCustomerPlaylists**](docs/Api/PlaylistsApi.md#getcustomerplaylists) | **GET** /customers/{customer_id}/playlists | 
*PlaylistsApi* | [**getPlaylist**](docs/Api/PlaylistsApi.md#getplaylist) | **GET** /playlists/{playlist_id} | 
*PlaylistsApi* | [**getPlaylistBookmarks**](docs/Api/PlaylistsApi.md#getplaylistbookmarks) | **GET** /playlists/{playlist_id}/bookmarks | 
*PlaylistsApi* | [**getPlaylists**](docs/Api/PlaylistsApi.md#getplaylists) | **GET** /playlists | 
*PlaylistsApi* | [**updatePlaylist**](docs/Api/PlaylistsApi.md#updateplaylist) | **PUT** /playlists/{playlist_id} | 
*PrepaymentsApi* | [**getCustomerPrepaymentBalances**](docs/Api/PrepaymentsApi.md#getcustomerprepaymentbalances) | **GET** /customers/{customer_id}/prepayment-balance | 
*PrepaymentsApi* | [**getCustomerPrepaymentOperations**](docs/Api/PrepaymentsApi.md#getcustomerprepaymentoperations) | **GET** /customers/{customer_id}/prepayment-operations | 
*PrepaymentsApi* | [**getPrepaymentBonus**](docs/Api/PrepaymentsApi.md#getprepaymentbonus) | **GET** /prepayment/bonus/{prepayment_bonus_id} | 
*PrepaymentsApi* | [**getPrepaymentBonusList**](docs/Api/PrepaymentsApi.md#getprepaymentbonuslist) | **GET** /prepayment/bonus | 
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
*ProductsApi* | [**associateProducts**](docs/Api/ProductsApi.md#associateproducts) | **POST** /products/{product_id}/products | 
*ProductsApi* | [**attachFeaturesToProduct**](docs/Api/ProductsApi.md#attachfeaturestoproduct) | **POST** /products/{product_id}/features | 
*ProductsApi* | [**attachProductToActor**](docs/Api/ProductsApi.md#attachproducttoactor) | **POST** /products/{product_id}/actors | 
*ProductsApi* | [**attachProductToCategory**](docs/Api/ProductsApi.md#attachproducttocategory) | **POST** /products/{product_id}/categories | 
*ProductsApi* | [**attachProductToDirector**](docs/Api/ProductsApi.md#attachproducttodirector) | **POST** /products/{product_id}/directors | 
*ProductsApi* | [**attachProductToGroup**](docs/Api/ProductsApi.md#attachproducttogroup) | **POST** /products/{product_id}/groups | 
*ProductsApi* | [**attachVideoToProduct**](docs/Api/ProductsApi.md#attachvideotoproduct) | **POST** /products/{product_id}/videos | 
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /products | 
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /products/{product_id} | 
*ProductsApi* | [**detachFeatureToProduct**](docs/Api/ProductsApi.md#detachfeaturetoproduct) | **DELETE** /products/{product_id}/features/{feature_id} | 
*ProductsApi* | [**detachProductFromCategory**](docs/Api/ProductsApi.md#detachproductfromcategory) | **DELETE** /products/{product_id}/categories/{category_id} | 
*ProductsApi* | [**detachProductFromGroup**](docs/Api/ProductsApi.md#detachproductfromgroup) | **DELETE** /products/{product_id}/groups/{group_id} | 
*ProductsApi* | [**getBestSales**](docs/Api/ProductsApi.md#getbestsales) | **GET** /products/best-sales | 
*ProductsApi* | [**getCategoryProducts**](docs/Api/ProductsApi.md#getcategoryproducts) | **GET** /categories/{category_id}/products | 
*ProductsApi* | [**getCustomerHasAccessToProduct**](docs/Api/ProductsApi.md#getcustomerhasaccesstoproduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
*ProductsApi* | [**getCustomerHasAccessToProducts**](docs/Api/ProductsApi.md#getcustomerhasaccesstoproducts) | **POST** /customers/{customer_id}/products/has-access | 
*ProductsApi* | [**getMostWatched**](docs/Api/ProductsApi.md#getmostwatched) | **GET** /products/most-watched | 
*ProductsApi* | [**getNewProducts**](docs/Api/ProductsApi.md#getnewproducts) | **GET** /products/new | 
*ProductsApi* | [**getPrice**](docs/Api/ProductsApi.md#getprice) | **POST** /products/price | 
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /products/{product_id} | 
*ProductsApi* | [**getProductActors**](docs/Api/ProductsApi.md#getproductactors) | **GET** /products/{product_id}/actors | 
*ProductsApi* | [**getProductActorsRole**](docs/Api/ProductsApi.md#getproductactorsrole) | **GET** /products/{product_id}/actors-role | 
*ProductsApi* | [**getProductAttributes**](docs/Api/ProductsApi.md#getproductattributes) | **GET** /products/{product_id}/attributes | 
*ProductsApi* | [**getProductAvailability**](docs/Api/ProductsApi.md#getproductavailability) | **GET** /products/{product_id}/access | 
*ProductsApi* | [**getProductCategories**](docs/Api/ProductsApi.md#getproductcategories) | **GET** /products/{product_id}/categories | 
*ProductsApi* | [**getProductCoverImage**](docs/Api/ProductsApi.md#getproductcoverimage) | **GET** /products/{product_id}/cover | 
*ProductsApi* | [**getProductDirectors**](docs/Api/ProductsApi.md#getproductdirectors) | **GET** /products/{product_id}/directors | 
*ProductsApi* | [**getProductDirectorsRole**](docs/Api/ProductsApi.md#getproductdirectorsrole) | **GET** /products/{product_id}/directors-role | 
*ProductsApi* | [**getProductExtracts**](docs/Api/ProductsApi.md#getproductextracts) | **GET** /products/{product_id}/extracts | 
*ProductsApi* | [**getProductFeatures**](docs/Api/ProductsApi.md#getproductfeatures) | **GET** /products/{product_id}/features | 
*ProductsApi* | [**getProductGeolocations**](docs/Api/ProductsApi.md#getproductgeolocations) | **GET** /products/{product_id}/geolocations | 
*ProductsApi* | [**getProductGeolocationsByIp**](docs/Api/ProductsApi.md#getproductgeolocationsbyip) | **POST** /products/{product_id}/geolocations | 
*ProductsApi* | [**getProductGroups**](docs/Api/ProductsApi.md#getproductgroups) | **GET** /products/{product_id}/groups | 
*ProductsApi* | [**getProductImages**](docs/Api/ProductsApi.md#getproductimages) | **GET** /products/{product_id}/images | 
*ProductsApi* | [**getProductScreenshots**](docs/Api/ProductsApi.md#getproductscreenshots) | **GET** /products/{product_id}/screenshots | 
*ProductsApi* | [**getProductSubscription**](docs/Api/ProductsApi.md#getproductsubscription) | **GET** /products/{product_id}/subscription | 
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | 
*ProductsApi* | [**getProductsFromProduct**](docs/Api/ProductsApi.md#getproductsfromproduct) | **GET** /products/{product_id}/products | 
*ProductsApi* | [**getVideoGroupsFromProduct**](docs/Api/ProductsApi.md#getvideogroupsfromproduct) | **GET** /products/{product_id}/video-groups | 
*ProductsApi* | [**getVideosFromProduct**](docs/Api/ProductsApi.md#getvideosfromproduct) | **GET** /products/{product_id}/videos | 
*ProductsApi* | [**searchProducts**](docs/Api/ProductsApi.md#searchproducts) | **GET** /products/search/{search_query} | 
*ProductsApi* | [**setProductGeolocation**](docs/Api/ProductsApi.md#setproductgeolocation) | **PUT** /products/{product_id}/geolocations | 
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /products/{product_id} | 
*ProductsApi* | [**updateProductGroupRestrictionBehavior**](docs/Api/ProductsApi.md#updateproductgrouprestrictionbehavior) | **PUT** /products/{product_id}/groups/behavior | 
*ProductsApi* | [**uploadProductCover**](docs/Api/ProductsApi.md#uploadproductcover) | **POST** /products/{product_id}/cover | 
*ProductsApi* | [**uploadProductImage**](docs/Api/ProductsApi.md#uploadproductimage) | **POST** /products/{product_id}/image | 
*StatsApi* | [**getCustomerGroupTotalWatched**](docs/Api/StatsApi.md#getcustomergrouptotalwatched) | **GET** /video-stats/customer-group | 
*StatsApi* | [**getCustomerSessions**](docs/Api/StatsApi.md#getcustomersessions) | **GET** /video-stats/sessions | 
*StatsApi* | [**getCustomerSessionsMultiple**](docs/Api/StatsApi.md#getcustomersessionsmultiple) | **POST** /video-stats/{customer_id}/sessions | 
*StatsApi* | [**getCustomerVideoStats**](docs/Api/StatsApi.md#getcustomervideostats) | **GET** /video-stats/customers | 
*StatsApi* | [**getVideoStats**](docs/Api/StatsApi.md#getvideostats) | **GET** /video-stats/videos | 
*SubscriptionsApi* | [**attachCategoriesToSubscription**](docs/Api/SubscriptionsApi.md#attachcategoriestosubscription) | **POST** /subscriptions/{subscription_id}/categories | 
*SubscriptionsApi* | [**detachCategoryFromSubscription**](docs/Api/SubscriptionsApi.md#detachcategoryfromsubscription) | **DELETE** /subscriptions/{subscription_id}/categories/{category_id} | 
*SubscriptionsApi* | [**getDisabledSubscriptions**](docs/Api/SubscriptionsApi.md#getdisabledsubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
*SubscriptionsApi* | [**getProductSubscription**](docs/Api/SubscriptionsApi.md#getproductsubscription) | **GET** /products/{product_id}/subscription | 
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /subscriptions/{subscription_id} | 
*SubscriptionsApi* | [**getSubscriptionCategories**](docs/Api/SubscriptionsApi.md#getsubscriptioncategories) | **GET** /subscriptions/{subscription_id}/categories | 
*SubscriptionsApi* | [**getSubscriptionCoverImage**](docs/Api/SubscriptionsApi.md#getsubscriptioncoverimage) | **GET** /subscriptions/{subscription_id}/cover | 
*SubscriptionsApi* | [**getSubscriptions**](docs/Api/SubscriptionsApi.md#getsubscriptions) | **GET** /subscriptions | 
*SubscriptionsApi* | [**uploadSubscriptionCover**](docs/Api/SubscriptionsApi.md#uploadsubscriptioncover) | **POST** /subscriptions/{subscription_id}/cover | 
*SubtitlesApi* | [**getSubtitles**](docs/Api/SubtitlesApi.md#getsubtitles) | **GET** /subtitles | 
*SupportApi* | [**createMessage**](docs/Api/SupportApi.md#createmessage) | **POST** /support | 
*SupportApi* | [**getContacts**](docs/Api/SupportApi.md#getcontacts) | **GET** /support/contacts | 
*TasksApi* | [**createTask**](docs/Api/TasksApi.md#createtask) | **POST** /tasks | 
*TaxRulesApi* | [**getTaxRules**](docs/Api/TaxRulesApi.md#gettaxrules) | **GET** /tax-rules | 
*VideoGroupsApi* | [**getVideoGroup**](docs/Api/VideoGroupsApi.md#getvideogroup) | **GET** /video-groups/{video_group_id} | 
*VideoGroupsApi* | [**getVideoGroups**](docs/Api/VideoGroupsApi.md#getvideogroups) | **GET** /video-groups | 
*VideoGroupsApi* | [**getVideoGroupsFromProduct**](docs/Api/VideoGroupsApi.md#getvideogroupsfromproduct) | **GET** /products/{product_id}/video-groups | 
*VideosApi* | [**attachCoverToVideo**](docs/Api/VideosApi.md#attachcovertovideo) | **POST** /videos/{video_id}/cover | 
*VideosApi* | [**attachFeaturesToVideo**](docs/Api/VideosApi.md#attachfeaturestovideo) | **POST** /videos/{video_id}/features | 
*VideosApi* | [**attachVideoToProduct**](docs/Api/VideosApi.md#attachvideotoproduct) | **POST** /products/{product_id}/videos | 
*VideosApi* | [**createSubtitle**](docs/Api/VideosApi.md#createsubtitle) | **POST** /videos/{video_id}/subtitle | 
*VideosApi* | [**createVideo**](docs/Api/VideosApi.md#createvideo) | **POST** /videos | 
*VideosApi* | [**deleteVideo**](docs/Api/VideosApi.md#deletevideo) | **DELETE** /videos/{video_id} | 
*VideosApi* | [**getCustomerHasAccessToVideo**](docs/Api/VideosApi.md#getcustomerhasaccesstovideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
*VideosApi* | [**getCustomerHasAccessToVideos**](docs/Api/VideosApi.md#getcustomerhasaccesstovideos) | **POST** /customers/{customer_id}/videos/has-access | 
*VideosApi* | [**getDisabledSubscriptions**](docs/Api/VideosApi.md#getdisabledsubscriptions) | **GET** /videos/{video_id}/disabled-subscriptions | 
*VideosApi* | [**getVideo**](docs/Api/VideosApi.md#getvideo) | **GET** /videos/{video_id} | 
*VideosApi* | [**getVideoAccess**](docs/Api/VideosApi.md#getvideoaccess) | **GET** /videos/{video_id}/customers/{customer_id}/access | 
*VideosApi* | [**getVideoBonus**](docs/Api/VideosApi.md#getvideobonus) | **GET** /videos/{video_id}/bonus | 
*VideosApi* | [**getVideoCover**](docs/Api/VideosApi.md#getvideocover) | **GET** /videos/{video_id}/cover | 
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
*WidgetsApi* | [**getSliderImage**](docs/Api/WidgetsApi.md#getsliderimage) | **GET** /widgets/slider/images | 
*WidgetsApi* | [**getWidgetAnalytics**](docs/Api/WidgetsApi.md#getwidgetanalytics) | **GET** /widgets/analytics | 
*WidgetsApi* | [**getWidgetFooterMenu**](docs/Api/WidgetsApi.md#getwidgetfootermenu) | **GET** /widgets/footer-menu | 
*WidgetsApi* | [**getWidgetHomeRail**](docs/Api/WidgetsApi.md#getwidgethomerail) | **GET** /widgets/home-rail | 
*WidgetsApi* | [**getWidgetHookPhrase**](docs/Api/WidgetsApi.md#getwidgethookphrase) | **GET** /widgets/hook-phrase | 
*WidgetsApi* | [**getWidgetSlider**](docs/Api/WidgetsApi.md#getwidgetslider) | **GET** /widgets/slider | 
*WidgetsApi* | [**getWidgetSliderItem**](docs/Api/WidgetsApi.md#getwidgetslideritem) | **GET** /widgets/slider/{slider_id} | 
*WidgetsApi* | [**getWidgetTopMenu**](docs/Api/WidgetsApi.md#getwidgettopmenu) | **GET** /widgets/top-menu | 


## Documentation For Models

 - [Actor](docs/Model/Actor.md)
 - [Actor1](docs/Model/Actor1.md)
 - [Actor2](docs/Model/Actor2.md)
 - [Actors](docs/Model/Actors.md)
 - [Address](docs/Model/Address.md)
 - [Address1](docs/Model/Address1.md)
 - [Analytic](docs/Model/Analytic.md)
 - [Analytics](docs/Model/Analytics.md)
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
 - [Cart1](docs/Model/Cart1.md)
 - [Cart2](docs/Model/Cart2.md)
 - [CartIDList](docs/Model/CartIDList.md)
 - [CartPrice](docs/Model/CartPrice.md)
 - [CartProduct](docs/Model/CartProduct.md)
 - [CartRule](docs/Model/CartRule.md)
 - [CartRuleRestrictionGroup](docs/Model/CartRuleRestrictionGroup.md)
 - [CartRuleRestrictionGroupItem](docs/Model/CartRuleRestrictionGroupItem.md)
 - [CartRules](docs/Model/CartRules.md)
 - [Carts](docs/Model/Carts.md)
 - [Categories](docs/Model/Categories.md)
 - [Category](docs/Model/Category.md)
 - [CategoryImagesResponse](docs/Model/CategoryImagesResponse.md)
 - [Configuration](docs/Model/Configuration.md)
 - [ConfigurationList](docs/Model/ConfigurationList.md)
 - [Contact](docs/Model/Contact.md)
 - [Contacts](docs/Model/Contacts.md)
 - [Countries](docs/Model/Countries.md)
 - [Country](docs/Model/Country.md)
 - [CreateExtractSubtitleRequest](docs/Model/CreateExtractSubtitleRequest.md)
 - [CreateVideoSubtitleRequest](docs/Model/CreateVideoSubtitleRequest.md)
 - [CredentialsValidation](docs/Model/CredentialsValidation.md)
 - [Currencies](docs/Model/Currencies.md)
 - [Currency](docs/Model/Currency.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerCreateRequest](docs/Model/CustomerCreateRequest.md)
 - [CustomerCurrentViews](docs/Model/CustomerCurrentViews.md)
 - [CustomerGroupVideoStats](docs/Model/CustomerGroupVideoStats.md)
 - [CustomerGroupVideoStats1](docs/Model/CustomerGroupVideoStats1.md)
 - [CustomerId](docs/Model/CustomerId.md)
 - [CustomerVideoStats](docs/Model/CustomerVideoStats.md)
 - [CustomerVideoStats1](docs/Model/CustomerVideoStats1.md)
 - [Customers](docs/Model/Customers.md)
 - [Device](docs/Model/Device.md)
 - [DeviceList](docs/Model/DeviceList.md)
 - [Director](docs/Model/Director.md)
 - [Director1](docs/Model/Director1.md)
 - [Director2](docs/Model/Director2.md)
 - [Directors](docs/Model/Directors.md)
 - [DownloadInformations](docs/Model/DownloadInformations.md)
 - [Employee](docs/Model/Employee.md)
 - [Employees](docs/Model/Employees.md)
 - [Extract](docs/Model/Extract.md)
 - [Feature](docs/Model/Feature.md)
 - [FeatureValue](docs/Model/FeatureValue.md)
 - [Features](docs/Model/Features.md)
 - [FreeGift](docs/Model/FreeGift.md)
 - [FreeGift1](docs/Model/FreeGift1.md)
 - [Gender](docs/Model/Gender.md)
 - [Genders](docs/Model/Genders.md)
 - [Geoloc](docs/Model/Geoloc.md)
 - [GeolocSettings](docs/Model/GeolocSettings.md)
 - [Geolocs](docs/Model/Geolocs.md)
 - [Gift](docs/Model/Gift.md)
 - [Gift1](docs/Model/Gift1.md)
 - [Gift2](docs/Model/Gift2.md)
 - [Gift3](docs/Model/Gift3.md)
 - [GiftToken](docs/Model/GiftToken.md)
 - [Gifts](docs/Model/Gifts.md)
 - [Gifts1](docs/Model/Gifts1.md)
 - [GoogleAnalytics](docs/Model/GoogleAnalytics.md)
 - [Group](docs/Model/Group.md)
 - [GroupCreateRequest](docs/Model/GroupCreateRequest.md)
 - [Groups](docs/Model/Groups.md)
 - [I18nField](docs/Model/I18nField.md)
 - [IPCoordinates](docs/Model/IPCoordinates.md)
 - [IPLocation](docs/Model/IPLocation.md)
 - [Image](docs/Model/Image.md)
 - [ImageType](docs/Model/ImageType.md)
 - [Language](docs/Model/Language.md)
 - [Languages](docs/Model/Languages.md)
 - [LogoSettings](docs/Model/LogoSettings.md)
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
 - [Page](docs/Model/Page.md)
 - [PageLists](docs/Model/PageLists.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaymentArguments](docs/Model/PaymentArguments.md)
 - [PaymentDetails](docs/Model/PaymentDetails.md)
 - [PaymentDetails1](docs/Model/PaymentDetails1.md)
 - [PaymentMethods](docs/Model/PaymentMethods.md)
 - [PaymentModule](docs/Model/PaymentModule.md)
 - [PaymentModules](docs/Model/PaymentModules.md)
 - [PaymentToken](docs/Model/PaymentToken.md)
 - [PaymentToken1](docs/Model/PaymentToken1.md)
 - [PaymentUrl](docs/Model/PaymentUrl.md)
 - [PlatformAccessInfo](docs/Model/PlatformAccessInfo.md)
 - [Player](docs/Model/Player.md)
 - [PlayerConfiguration](docs/Model/PlayerConfiguration.md)
 - [Playlist](docs/Model/Playlist.md)
 - [PlaylistUpdate](docs/Model/PlaylistUpdate.md)
 - [Playlists](docs/Model/Playlists.md)
 - [PrepaymentBalance](docs/Model/PrepaymentBalance.md)
 - [PrepaymentBonus](docs/Model/PrepaymentBonus.md)
 - [PrepaymentBonus1](docs/Model/PrepaymentBonus1.md)
 - [PrepaymentOperation](docs/Model/PrepaymentOperation.md)
 - [PrepaymentOperations](docs/Model/PrepaymentOperations.md)
 - [PrepaymentRecharge](docs/Model/PrepaymentRecharge.md)
 - [PrepaymentRecharges](docs/Model/PrepaymentRecharges.md)
 - [Product](docs/Model/Product.md)
 - [ProductAccess](docs/Model/ProductAccess.md)
 - [ProductAccessInfo](docs/Model/ProductAccessInfo.md)
 - [ProductAttribute](docs/Model/ProductAttribute.md)
 - [ProductAttributeCreateRequest](docs/Model/ProductAttributeCreateRequest.md)
 - [ProductAttributeCreateRequest1](docs/Model/ProductAttributeCreateRequest1.md)
 - [ProductAttributesResponse](docs/Model/ProductAttributesResponse.md)
 - [ProductCategories](docs/Model/ProductCategories.md)
 - [ProductIDList](docs/Model/ProductIDList.md)
 - [ProductIDList1](docs/Model/ProductIDList1.md)
 - [ProductPrice](docs/Model/ProductPrice.md)
 - [ProductPriceAttributes](docs/Model/ProductPriceAttributes.md)
 - [Products](docs/Model/Products.md)
 - [Products1](docs/Model/Products1.md)
 - [Promotion](docs/Model/Promotion.md)
 - [RegistrationField](docs/Model/RegistrationField.md)
 - [RegistrationFields](docs/Model/RegistrationFields.md)
 - [SessionVideoStat](docs/Model/SessionVideoStat.md)
 - [SessionVideoStats](docs/Model/SessionVideoStats.md)
 - [SocialSettings](docs/Model/SocialSettings.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionAccesses](docs/Model/SubscriptionAccesses.md)
 - [Subscriptions](docs/Model/Subscriptions.md)
 - [Subtitle](docs/Model/Subtitle.md)
 - [SubtitleFile](docs/Model/SubtitleFile.md)
 - [SubtitleFiles](docs/Model/SubtitleFiles.md)
 - [Support](docs/Model/Support.md)
 - [SupportMessage](docs/Model/SupportMessage.md)
 - [Tag](docs/Model/Tag.md)
 - [Task](docs/Model/Task.md)
 - [TaskCreateRequest](docs/Model/TaskCreateRequest.md)
 - [TaxRule](docs/Model/TaxRule.md)
 - [TaxRules](docs/Model/TaxRules.md)
 - [Token](docs/Model/Token.md)
 - [Video](docs/Model/Video.md)
 - [VideoAccessInfo](docs/Model/VideoAccessInfo.md)
 - [VideoCategory](docs/Model/VideoCategory.md)
 - [VideoFreeAccess](docs/Model/VideoFreeAccess.md)
 - [VideoGroup](docs/Model/VideoGroup.md)
 - [VideoGroup1](docs/Model/VideoGroup1.md)
 - [VideoIDList](docs/Model/VideoIDList.md)
 - [VideoIDList1](docs/Model/VideoIDList1.md)
 - [VideoStat](docs/Model/VideoStat.md)
 - [VideoStats](docs/Model/VideoStats.md)
 - [VideoSubtitlesResponse](docs/Model/VideoSubtitlesResponse.md)
 - [VideoViews](docs/Model/VideoViews.md)
 - [Videos](docs/Model/Videos.md)
 - [Videos1](docs/Model/Videos1.md)
 - [Videos2](docs/Model/Videos2.md)
 - [WidgetFooterMenu](docs/Model/WidgetFooterMenu.md)
 - [WidgetFooterMenus](docs/Model/WidgetFooterMenus.md)
 - [WidgetHomeRail](docs/Model/WidgetHomeRail.md)
 - [WidgetHomeRails](docs/Model/WidgetHomeRails.md)
 - [WidgetHookPhrase](docs/Model/WidgetHookPhrase.md)
 - [WidgetHookPhrases](docs/Model/WidgetHookPhrases.md)
 - [WidgetSlider](docs/Model/WidgetSlider.md)
 - [WidgetSliders](docs/Model/WidgetSliders.md)
 - [WidgetTopMenu](docs/Model/WidgetTopMenu.md)
 - [WidgetTopMenus](docs/Model/WidgetTopMenus.md)

