# BlackboardRest\SystemApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemVersionGet**](SystemApi.md#systemVersionGet) | **GET** system/version | Get Version


# **systemVersionGet**
> \BlackboardRest\Model\VersionInfo systemVersionGet()

Get Version

Gets the current Learn server version.  **Since**: 3000.3.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\SystemApi();

try {
    $result = $api_instance->systemVersionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemVersionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BlackboardRest\Model\VersionInfo**](../Model/VersionInfo.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

