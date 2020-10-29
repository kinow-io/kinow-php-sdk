# TasksApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTask**](#createTask) | **POST** /tasks | 


## **createTask**
> \Kinow\Client\Model\Task createTask($body)



Create new task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\TasksApi();
$body = new \Kinow\Client\Model\TaskCreateRequest(); // \Kinow\Client\Model\TaskCreateRequest | Create task object

try {
    $result = $api_instance->createTask($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->createTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kinow\Client\Model\TaskCreateRequest**](#\Kinow\Client\Model\TaskCreateRequest)| Create task object |

### Return type

[**\Kinow\Client\Model\Task**](#Task)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

