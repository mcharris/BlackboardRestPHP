# BlackboardRest\AnnouncementsApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**announcementsAnnouncementIdDelete**](AnnouncementsApi.md#announcementsAnnouncementIdDelete) | **DELETE** announcements/{announcementId} | Delete Announcement
[**announcementsAnnouncementIdGet**](AnnouncementsApi.md#announcementsAnnouncementIdGet) | **GET** announcements/{announcementId} | Get Announcement
[**announcementsAnnouncementIdPatch**](AnnouncementsApi.md#announcementsAnnouncementIdPatch) | **PATCH** announcements/{announcementId} | Update Announcement
[**announcementsGet**](AnnouncementsApi.md#announcementsGet) | **GET** announcements | Get Announcements
[**announcementsPost**](AnnouncementsApi.md#announcementsPost) | **POST** announcements | Create Announcement


# **announcementsAnnouncementIdDelete**
> announcementsAnnouncementIdDelete($announcement_id, $fields)

Delete Announcement

Delete a System Announcement. Users with the 'system.announcements.DELETE' entitlement can delete System Announcements.  **Since**: 3100.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\AnnouncementsApi();
$announcement_id = "announcement_id_example"; // string | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $api_instance->announcementsAnnouncementIdDelete($announcement_id, $fields);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->announcementsAnnouncementIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **announcement_id** | **string**|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementsAnnouncementIdGet**
> \BlackboardRest\Model\Announcement announcementsAnnouncementIdGet($announcement_id, $fields)

Get Announcement

Get a System Announcement. Users with the 'system.announcements.VIEW' entitlement can view 'available' System Announcements. Users with the 'system.announcements.VIEW' & 'system.announcements.MODIFY' entitlement can view 'available' & 'unavailable' System Announcements.  **Since**: 3100.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\AnnouncementsApi();
$announcement_id = "announcement_id_example"; // string | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->announcementsAnnouncementIdGet($announcement_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->announcementsAnnouncementIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **announcement_id** | **string**|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Announcement**](../Model/Announcement.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementsAnnouncementIdPatch**
> \BlackboardRest\Model\Announcement announcementsAnnouncementIdPatch($announcement_id, $input, $fields)

Update Announcement

Update a System Announcement. Users with the 'system.announcements.MODIFY' entitlement can update System Announcements.  **Since**: 3100.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\AnnouncementsApi();
$announcement_id = "announcement_id_example"; // string | 
$input = new \BlackboardRest\Model\Input1(); // \BlackboardRest\Model\Input1 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->announcementsAnnouncementIdPatch($announcement_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->announcementsAnnouncementIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **announcement_id** | **string**|  |
 **input** | [**\BlackboardRest\Model\Input1**](../Model/\BlackboardRest\Model\Input1.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Announcement**](../Model/Announcement.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementsGet**
> \BlackboardRest\Model\InlineResponse200 announcementsGet($offset, $limit, $fields)

Get Announcements

Return a list of System Announcements. Users with the 'system.announcements.VIEW' entitlement can view 'available' System Announcements. Users with the 'system.announcements.VIEW' & 'system.announcements.MODIFY' entitlement can view 'available' & 'unavailable' System Announcements.  **Since**: 3100.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\AnnouncementsApi();
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->announcementsGet($offset, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->announcementsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **announcementsPost**
> \BlackboardRest\Model\Announcement announcementsPost($input, $fields)

Create Announcement

Create a System Announcement. Users with the 'system.announcements.CREATE' entitlement can create System Announcements.  **Since**: 3100.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\AnnouncementsApi();
$input = new \BlackboardRest\Model\Input(); // \BlackboardRest\Model\Input | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->announcementsPost($input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->announcementsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\BlackboardRest\Model\Input**](../Model/\BlackboardRest\Model\Input.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Announcement**](../Model/Announcement.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

