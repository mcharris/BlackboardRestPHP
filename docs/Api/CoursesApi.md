# BlackboardRest\CoursesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet**](CoursesApi.md#learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet) | **GET** /learn/api/public/v1/courses/{courseId}/children/{childCourseId} | Get Child
[**learnApiPublicV1CoursesCourseIdChildrenGet**](CoursesApi.md#learnApiPublicV1CoursesCourseIdChildrenGet) | **GET** /learn/api/public/v1/courses/{courseId}/children | Get Children
[**learnApiPublicV1CoursesCourseIdDelete**](CoursesApi.md#learnApiPublicV1CoursesCourseIdDelete) | **DELETE** /learn/api/public/v1/courses/{courseId} | Delete Course
[**learnApiPublicV1CoursesCourseIdGet**](CoursesApi.md#learnApiPublicV1CoursesCourseIdGet) | **GET** /learn/api/public/v1/courses/{courseId} | Get Course
[**learnApiPublicV1CoursesCourseIdPatch**](CoursesApi.md#learnApiPublicV1CoursesCourseIdPatch) | **PATCH** /learn/api/public/v1/courses/{courseId} | Update Course
[**learnApiPublicV1CoursesGet**](CoursesApi.md#learnApiPublicV1CoursesGet) | **GET** /learn/api/public/v1/courses | Get Courses
[**learnApiPublicV1CoursesPost**](CoursesApi.md#learnApiPublicV1CoursesPost) | **POST** /learn/api/public/v1/courses | Create Course


# **learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet**
> \BlackboardRest\Model\CourseChild learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet($course_id, $child_course_id, $fields)

Get Child

Loads a specific course cross-listing.  The 'system.course.cross-list.VIEW' or 'system.org.cross-list.VIEW' entitlement is needed.  **Since**: 3000.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$child_course_id = "child_course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet($course_id, $child_course_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **child_course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\CourseChild**](../Model/CourseChild.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdChildrenGet**
> \BlackboardRest\Model\InlineResponse2002 learnApiPublicV1CoursesCourseIdChildrenGet($course_id, $offset, $limit, $fields)

Get Children

Returns a list of course cross-listings.  The 'system.course.cross-list.VIEW' or 'system.org.cross-list.VIEW' entitlement is needed.  **Since**: 3000.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdChildrenGet($course_id, $offset, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesCourseIdChildrenGet: ', $e->getMessage(), PHP_EOL;
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

[**\BlackboardRest\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdDelete**
> learnApiPublicV1CoursesCourseIdDelete($course_id, $remove_files)

Delete Course

Deletes a course or organization.  The 'system.course.DELETE' entitlement is needed to delete a course, while 'system.org.DELETE' is needed for an organization.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$remove_files = true; // bool | Whether to delete course files.  Defaults to true.

try {
    $api_instance->learnApiPublicV1CoursesCourseIdDelete($course_id, $remove_files);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesCourseIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **remove_files** | **bool**| Whether to delete course files.  Defaults to true. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGet**
> \BlackboardRest\Model\Course learnApiPublicV1CoursesCourseIdGet($course_id, $fields)

Get Course

Loads a specific course or organization.  Users with the 'course.configure-properties.EXECUTE' entitlement can access all course properties.  Users enrolled in the course have read access to all properties except:  - uuid - externalId - dataSourceId - created - allowGuests - enrollment.accessCode  Users with no access to the course only have read access to the following properties:  - id - courseId - name - description - organization - readOnly - termId - availability.available - availability.duration.type - availability.duration.start - availability.duration.end - availability.duration.daysOfUse  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGet($course_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesCourseIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Course**](../Model/Course.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdPatch**
> \BlackboardRest\Model\Course learnApiPublicV1CoursesCourseIdPatch($course_id, $input, $fields)

Update Course

Updates a course or organization.  To update a course, the user must have either 'system.course|org.properties.MODIFY' or 'course.configure-properties.EXECUTE' entitlements.  However, if the user has the latter entitlement, then additional entitlements are needed to be able to update certain fields, as shown below:    | Field                           | Entitlements Required                                                  |  |---------------------------------|------------------------------------------------------------------------|  | name                            | course.name.MODIFY                                                     |  | description                     | course.name.MODIFY                                                     |  | allowGuests                     | course.configure-guest-access.EXECUTE                                  |  | enrollment.type                 | course.configure-properties.EXECUTE, course.enrollment.MODIFY          |  | enrollment.start                | course.configure-properties.EXECUTE, course.enrollment.MODIFY          |  | enrollment.end                  | course.configure-properties.EXECUTE, course.enrollment.MODIFY          |  | enrollment.accessCode           | course.configure-properties.EXECUTE, course.enrollment.MODIFY          |  | availability.available          | course.configure-properties.EXECUTE, course.availability.MODIFY        |  | locale.id                       | course.configure-properties.EXECUTE, course.locale.MODIFY              |  | locale.force                    | course.configure-properties.EXECUTE, course.locale.MODIFY              |  | availability.duration.type      | course.configure-properties.EXECUTE, course.configure-duration.EXECUTE |  | availability.duration.start     | course.configure-properties.EXECUTE, course.configure-duration.EXECUTE |  | availability.duration.end       | course.configure-properties.EXECUTE, course.configure-duration.EXECUTE |  | availability.duration.daysOfUse | course.configure-properties.EXECUTE, course.configure-duration.EXECUTE |    **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input3(); // \BlackboardRest\Model\Input3 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdPatch($course_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesCourseIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input3**](../Model/\BlackboardRest\Model\Input3.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Course**](../Model/Course.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesGet**
> \BlackboardRest\Model\InlineResponse2001 learnApiPublicV1CoursesGet($offset, $limit, $course_id, $name, $description, $external_id, $created, $created_compare, $data_source_id, $term_id, $organization, $sort, $fields)

Get Courses

Returns a list of courses and organizations.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$course_id = "course_id_example"; // string | Search for courses with courseId properties that contain this value.  **Since**: 3100.0.0
$name = "name_example"; // string | Search for courses with name properties that contain this value.  **Since**: 3100.0.0
$description = "description_example"; // string | Search for courses with description properties that contain this value.  **Since**: 3100.0.0
$external_id = "external_id_example"; // string | Search for courses with externalId properties that contain this value.  **Since**: 3100.0.0
$created = new \DateTime(); // \DateTime | Search for courses with a created date relative to this value.  'createdCompare' may also be sent to control search behavior.  **Since**: 3100.0.0
$created_compare = "created_compare_example"; // string | Used alongside the 'created' search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3100.0.0
$data_source_id = "data_source_id_example"; // string | Search for courses with this dataSourceId.  This may optionally be the data source's externalId using the syntax \"externalId:math101\".  **Since**: 3100.0.0
$term_id = "term_id_example"; // string | Search for courses with this termId.  This may optionally be the term's externalId using the syntax \"externalId:spring2015\".  **Since**: 3100.0.0
$organization = true; // bool | Search for courses by organization flag.  A value of 'true' indicates that search results should be limited to only Organizations.  A value of 'false' indicates results should be limited to Courses.  Not setting this field indicates that both Courses and Organizations should be returned.  **Since**: 3100.0.0
$sort = "sort_example"; // string | Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \"(desc)\" suffix to request a descending sort for that property. e.g. \"name.family(desc),created\"  **Since**: 3100.0.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesGet($offset, $limit, $course_id, $name, $description, $external_id, $created, $created_compare, $data_source_id, $term_id, $organization, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **course_id** | **string**| Search for courses with courseId properties that contain this value.  **Since**: 3100.0.0 | [optional]
 **name** | **string**| Search for courses with name properties that contain this value.  **Since**: 3100.0.0 | [optional]
 **description** | **string**| Search for courses with description properties that contain this value.  **Since**: 3100.0.0 | [optional]
 **external_id** | **string**| Search for courses with externalId properties that contain this value.  **Since**: 3100.0.0 | [optional]
 **created** | **\DateTime**| Search for courses with a created date relative to this value.  &#39;createdCompare&#39; may also be sent to control search behavior.  **Since**: 3100.0.0 | [optional]
 **created_compare** | **string**| Used alongside the &#39;created&#39; search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3100.0.0 | [optional]
 **data_source_id** | **string**| Search for courses with this dataSourceId.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;.  **Since**: 3100.0.0 | [optional]
 **term_id** | **string**| Search for courses with this termId.  This may optionally be the term&#39;s externalId using the syntax \&quot;externalId:spring2015\&quot;.  **Since**: 3100.0.0 | [optional]
 **organization** | **bool**| Search for courses by organization flag.  A value of &#39;true&#39; indicates that search results should be limited to only Organizations.  A value of &#39;false&#39; indicates results should be limited to Courses.  Not setting this field indicates that both Courses and Organizations should be returned.  **Since**: 3100.0.0 | [optional]
 **sort** | **string**| Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \&quot;(desc)\&quot; suffix to request a descending sort for that property. e.g. \&quot;name.family(desc),created\&quot;  **Since**: 3100.0.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesPost**
> \BlackboardRest\Model\Course learnApiPublicV1CoursesPost($input, $fields)

Create Course

Creates a course or organization.  The 'system.course.CREATE' entitlement is needed to create a course, while 'system.org.CREATE' is needed for an organization.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CoursesApi();
$input = new \BlackboardRest\Model\Input2(); // \BlackboardRest\Model\Input2 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesPost($input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->learnApiPublicV1CoursesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\BlackboardRest\Model\Input2**](../Model/\BlackboardRest\Model\Input2.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Course**](../Model/Course.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

