# BlackboardRest\ContentApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet) | **GET** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/children | Get Children
[**learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost) | **POST** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/children | Create Child
[**learnApiPublicV1CoursesCourseIdContentsContentIdDelete**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsContentIdDelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/contents/{contentId} | Delete Content
[**learnApiPublicV1CoursesCourseIdContentsContentIdGet**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsContentIdGet) | **GET** /learn/api/public/v1/courses/{courseId}/contents/{contentId} | Get Content
[**learnApiPublicV1CoursesCourseIdContentsContentIdPatch**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsContentIdPatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/contents/{contentId} | Update Content
[**learnApiPublicV1CoursesCourseIdContentsGet**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsGet) | **GET** /learn/api/public/v1/courses/{courseId}/contents | Get Contents
[**learnApiPublicV1CoursesCourseIdContentsPost**](ContentApi.md#learnApiPublicV1CoursesCourseIdContentsPost) | **POST** /learn/api/public/v1/courses/{courseId}/contents | Create Content


# **learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet**
> \BlackboardRest\Model\InlineResponse2003 learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet($course_id, $content_id, $offset, $limit, $recursive, $fields)

Get Children

List all child content items directly beneath another content item.  This is only valid for content items that are allowed to have children (e.g. Folders).  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$recursive = true; // bool | Search for child content recursively.  A value of 'true' indicates that search results should include all content descendants within the hierarchy of the specified parent.  A value of 'false' indicates results should be limited to immediate children only.  Not setting this field defaults to 'false' behavior; only including immediate children.  **Since**: 3100.2.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet($course_id, $content_id, $offset, $limit, $recursive, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet: ', $e->getMessage(), PHP_EOL;
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
 **recursive** | **bool**| Search for child content recursively.  A value of &#39;true&#39; indicates that search results should include all content descendants within the hierarchy of the specified parent.  A value of &#39;false&#39; indicates results should be limited to immediate children only.  Not setting this field defaults to &#39;false&#39; behavior; only including immediate children.  **Since**: 3100.2.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost**
> \BlackboardRest\Model\Content learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost($course_id, $content_id, $input, $fields)

Create Child

Create a new child content item beneath an existing content item.  This is only valid for content items that are allowed to have children (e.g. Folders).  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$input = new \BlackboardRest\Model\Input6(); // \BlackboardRest\Model\Input6 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost($course_id, $content_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **input** | [**\BlackboardRest\Model\Input6**](../Model/\BlackboardRest\Model\Input6.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Content**](../Model/Content.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdContentsContentIdDelete**
> learnApiPublicV1CoursesCourseIdContentsContentIdDelete($course_id, $content_id)

Delete Content

Delete a content item.  The 'course.content.DELETE' entitlement is required.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 

try {
    $api_instance->learnApiPublicV1CoursesCourseIdContentsContentIdDelete($course_id, $content_id);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsContentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdContentsContentIdGet**
> \BlackboardRest\Model\Content learnApiPublicV1CoursesCourseIdContentsContentIdGet($course_id, $content_id, $fields)

Get Content

Load a specific content item from a course.  Users with at least one of the following entitlements may access any content item:  - course.adaptiverelease.CREATE - course.adaptiverelease.DELETE - course.adaptiverelease.MODIFY - course.adaptiverelease.VIEW - course.configure-areas.EXECUTE - course.content-item.copy.EXECUTE - course.content.DELETE - course.content.MODIFY - course.learningstandards.alignment.CREATE - course.performance.dashboard.VIEW  For other users, permission to view the content item will depend on the availability settings of the course and the content item.  The following fields will be filtered out:  - availability.available - availability.allowGuests - availability.adaptiveRelease  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdContentsContentIdGet($course_id, $content_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsContentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Content**](../Model/Content.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdContentsContentIdPatch**
> \BlackboardRest\Model\Content learnApiPublicV1CoursesCourseIdContentsContentIdPatch($course_id, $content_id, $input, $fields)

Update Content

Update a content item.  The 'course.content.MODIFY' entitlement is required.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$content_id = "content_id_example"; // string | 
$input = new \BlackboardRest\Model\Input5(); // \BlackboardRest\Model\Input5 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdContentsContentIdPatch($course_id, $content_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsContentIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **content_id** | **string**|  |
 **input** | [**\BlackboardRest\Model\Input5**](../Model/\BlackboardRest\Model\Input5.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Content**](../Model/Content.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdContentsGet**
> \BlackboardRest\Model\InlineResponse2003 learnApiPublicV1CoursesCourseIdContentsGet($course_id, $offset, $limit, $fields)

Get Contents

List top-level content items in a course.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdContentsGet($course_id, $offset, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdContentsPost**
> \BlackboardRest\Model\Content learnApiPublicV1CoursesCourseIdContentsPost($course_id, $input, $fields)

Create Content

Create a new top-level content item.  This is only allowed in a Classic course.  Currently only folders may be created as top-level content items.  **Since**: 3000.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\ContentApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input4(); // \BlackboardRest\Model\Input4 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdContentsPost($course_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->learnApiPublicV1CoursesCourseIdContentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input4**](../Model/\BlackboardRest\Model\Input4.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Content**](../Model/Content.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

