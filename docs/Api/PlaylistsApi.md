# PlaylistsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlaylistBookmark**](#createPlaylistBookmark) | **POST** /playlists | 
[**deletePlaylistBookmark**](#deletePlaylistBookmark) | **DELETE** /playlists/{playlist_id} | 
[**getCustomerPlaylists**](#getCustomerPlaylists) | **GET** /customers/{customer_id}/playlists | 
[**getPlaylist**](#getPlaylist) | **GET** /playlists/{playlist_id} | 
[**updatePlaylistBookmark**](#updatePlaylistBookmark) | **PUT** /playlists/{playlist_id} | 


## **createPlaylistBookmark**
> \Kinow\Client\Model\PlaylistBookmark createPlaylistBookmark($customer_id, $name)



Create playlist bookmark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PlaylistsApi();
$customer_id = 789; // int | 
$name = "name_example"; // string | 

try {
    $result = $api_instance->createPlaylistBookmark($customer_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->createPlaylistBookmark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **name** | **string**|  |

### Return type

[**\Kinow\Client\Model\PlaylistBookmark**](#PlaylistBookmark)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deletePlaylistBookmark**
> deletePlaylistBookmark($playlist_id)



Delete playlist bookmark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PlaylistsApi();
$playlist_id = 56; // int | 

try {
    $api_instance->deletePlaylistBookmark($playlist_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->deletePlaylistBookmark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerPlaylists**
> \Kinow\Client\Model\Playlists getCustomerPlaylists($customer_id, $page, $per_page, $sort_by, $sort_direction)



Get customer playlists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PlaylistsApi();
$customer_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCustomerPlaylists($customer_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->getCustomerPlaylists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\Playlists**](#Playlists)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPlaylist**
> \Kinow\Client\Model\PlaylistBookmark getPlaylist($playlist_id)



Get playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PlaylistsApi();
$playlist_id = 789; // int | Playlist ID to fetch

try {
    $result = $api_instance->getPlaylist($playlist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->getPlaylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| Playlist ID to fetch |

### Return type

[**\Kinow\Client\Model\PlaylistBookmark**](#PlaylistBookmark)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updatePlaylistBookmark**
> \Kinow\Client\Model\PlaylistBookmark updatePlaylistBookmark($playlist_id, $body)



Update playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\PlaylistsApi();
$playlist_id = 789; // int | Playlist ID to update
$body = new \Kinow\Client\Model\PlaylistBookmarkUpdate(); // \Kinow\Client\Model\PlaylistBookmarkUpdate | Playlist settings

try {
    $result = $api_instance->updatePlaylistBookmark($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->updatePlaylistBookmark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| Playlist ID to update |
 **body** | [**\Kinow\Client\Model\PlaylistBookmarkUpdate**](#\Kinow\Client\Model\PlaylistBookmarkUpdate)| Playlist settings |

### Return type

[**\Kinow\Client\Model\PlaylistBookmark**](#PlaylistBookmark)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

