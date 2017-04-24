# BlackboardRest\ContentGroupAssignmentsApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coursesCourseIdContentsContentIdGroupsGet**](ContentGroupAssignmentsApi.md#coursesCourseIdContentsContentIdGroupsGet) | **GET** courses/{courseId}/contents/{contentId}/groups | Get Content Groups
[**coursesCourseIdContentsContentIdGroupsGroupIdDelete**](ContentGroupAssignmentsApi.md#coursesCourseIdContentsContentIdGroupsGroupIdDelete) | **DELETE** courses/{courseId}/contents/{contentId}/groups/{groupId} | Delete Content Group
[**coursesCourseIdContentsContentIdGroupsGroupIdGet**](ContentGroupAssignmentsApi.md#coursesCourseIdContentsContentIdGroupsGroupIdGet) | **GET** courses/{courseId}/contents/{contentId}/groups/{groupId} | Get Content Group
[**coursesCourseIdContentsContentIdGroupsGroupIdPut**](ContentGroupAssignmentsApi.md#coursesCourseIdContentsContentIdGroupsGroupIdPut) | **PUT** courses/{courseId}/contents/{contentId}/groups/{groupId} | Create Content Group


# **coursesCourseIdContentsContentIdGroupsGet**
> \BlackboardRest\Model\InlineResponse2004 coursesCourseIdContentsContentIdGroupsGet($course_id, $content_id, $offset, $limit, $fields)

Get Content Groups

Returns a list of content group associations for the specified content.  Callers not enrolled in the course must have at least one of the following entitlements:  - course.content.DELETE - course.content.MODIFY  Callers enrolled in the course will only be able to see Groups that are available to them.  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentGroupAssignmentsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdContentsContentIdGroupsGet($course_id, $content_id, $offset, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentGroupAssignmentsApi->coursesCourseIdContentsContentIdGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdContentsContentIdGroupsGroupIdDelete**
> coursesCourseIdContentsContentIdGroupsGroupIdDelete($course_id, $content_id, $group_id)

Delete Content Group

Deletes a user ContentGroup from the specified course.  Required entitlements:  - course.content.DELETE - course.content.MODIFY   **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentGroupAssignmentsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$group_id = "group_id_example"; // string | The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              |

try {
    $api_instance->coursesCourseIdContentsContentIdGroupsGroupIdDelete($course_id, $content_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling ContentGroupAssignmentsApi->coursesCourseIdContentsContentIdGroupsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **group_id** | **string**| The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              | |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdContentsContentIdGroupsGroupIdGet**
> \BlackboardRest\Model\ContentGroup coursesCourseIdContentsContentIdGroupsGroupIdGet($course_id, $content_id, $group_id, $fields)

Get Content Group

Returns a content group association for the specified content and group.  Callers not enrolled in the course must have at least one of the following entitlements:  - course.content.DELETE - course.content.MODIFY  Callers enrolled in the course will only be able to see Groups that are available to them.  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentGroupAssignmentsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$group_id = "group_id_example"; // string | The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdContentsContentIdGroupsGroupIdGet($course_id, $content_id, $group_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentGroupAssignmentsApi->coursesCourseIdContentsContentIdGroupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **group_id** | **string**| The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\ContentGroup**](../Model/ContentGroup.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdContentsContentIdGroupsGroupIdPut**
> \BlackboardRest\Model\ContentGroup coursesCourseIdContentsContentIdGroupsGroupIdPut($course_id, $content_id, $group_id, $input, $fields)

Create Content Group

Creates a content group association.  Callers not enrolled in the course must have at least one of the following entitlements:  - course.content.MODIFY  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentGroupAssignmentsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$group_id = "group_id_example"; // string | The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              |
$input = new \BlackboardRest\Model\Input7(); // \BlackboardRest\Model\Input7 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdContentsContentIdGroupsGroupIdPut($course_id, $content_id, $group_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentGroupAssignmentsApi->coursesCourseIdContentsContentIdGroupsGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **group_id** | **string**| The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              | |
 **input** | [**\BlackboardRest\Model\Input7**](../Model/\BlackboardRest\Model\Input7.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\ContentGroup**](../Model/ContentGroup.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

