# BlackboardRest\CourseMembershipsApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coursesCourseIdUsersGet**](CourseMembershipsApi.md#coursesCourseIdUsersGet) | **GET** courses/{courseId}/users | Get Memberships
[**coursesCourseIdUsersUserIdDelete**](CourseMembershipsApi.md#coursesCourseIdUsersUserIdDelete) | **DELETE** courses/{courseId}/users/{userId} | Delete Membership
[**coursesCourseIdUsersUserIdGet**](CourseMembershipsApi.md#coursesCourseIdUsersUserIdGet) | **GET** courses/{courseId}/users/{userId} | Get Membership
[**coursesCourseIdUsersUserIdPatch**](CourseMembershipsApi.md#coursesCourseIdUsersUserIdPatch) | **PATCH** courses/{courseId}/users/{userId} | Update Membership
[**coursesCourseIdUsersUserIdPut**](CourseMembershipsApi.md#coursesCourseIdUsersUserIdPut) | **PUT** courses/{courseId}/users/{userId} | Create Membership
[**usersUserIdCoursesGet**](CourseMembershipsApi.md#usersUserIdCoursesGet) | **GET** users/{userId}/courses | Get Memberships


# **coursesCourseIdUsersGet**
> \BlackboardRest\Model\InlineResponse2005 coursesCourseIdUsersGet($course_id, $offset, $limit, $created, $created_compare, $data_source_id, $sort, $fields)

Get Memberships

Returns a list of user memberships for the specified course or organization.  Callers not enrolled in the course must have at least one of the following entitlements:  - For courses: 'course.user.VIEW', 'system.user.course.enrollment.VIEW', or 'system.courseuserlist.VIEW' - For organizations: 'course.user.VIEW', 'system.user.org.enrollment.VIEW', or 'system.orguserlist.VIEW' Callers enrolled in the course will only be able to see memberships that are available and that have opted to be included in the course roster.  For callers enrolled in the course as well as those with the 'course.user.VIEW' entitlement, system fields such as externalId and dataSourceId will not be visible.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseMembershipsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$created = new \DateTime(); // \DateTime | Search for memberships with a created date relative to this value.  'createdCompare' may also be sent to control search behavior.  **Since**: 3100.0.0
$created_compare = "created_compare_example"; // string | Used alongside the 'created' search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3100.0.0
$data_source_id = "data_source_id_example"; // string | Search for memberships with this dataSourceId.  This may optionally be the data source's externalId using the syntax \"externalId:math101\".  **Since**: 3100.0.0
$sort = "sort_example"; // string | Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \"(desc)\" suffix to request a descending sort for that property. e.g. \"name.family(desc),created\"  **Since**: 3100.0.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdUsersGet($course_id, $offset, $limit, $created, $created_compare, $data_source_id, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseMembershipsApi->coursesCourseIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **created** | **\DateTime**| Search for memberships with a created date relative to this value.  &#39;createdCompare&#39; may also be sent to control search behavior.  **Since**: 3100.0.0 | [optional]
 **created_compare** | **string**| Used alongside the &#39;created&#39; search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3100.0.0 | [optional]
 **data_source_id** | **string**| Search for memberships with this dataSourceId.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;.  **Since**: 3100.0.0 | [optional]
 **sort** | **string**| Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \&quot;(desc)\&quot; suffix to request a descending sort for that property. e.g. \&quot;name.family(desc),created\&quot;  **Since**: 3100.0.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdUsersUserIdDelete**
> coursesCourseIdUsersUserIdDelete($course_id, $user_id)

Delete Membership

Deletes a user membership from the specified course.  Required entitlements:  - For courses: 'system.enrollment.DELETE' or 'course.user.DELETE' - For organizations: 'system.enrollment.DELETE' or 'org.enrollment.DELETE'  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseMembershipsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |

try {
    $api_instance->coursesCourseIdUsersUserIdDelete($course_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseMembershipsApi->coursesCourseIdUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdUsersUserIdGet**
> \BlackboardRest\Model\Membership coursesCourseIdUsersUserIdGet($course_id, $user_id, $fields)

Get Membership

Loads a user membership in the specified course.  Entitlement and field visibility rules are the same as those when loading the memberships collection.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseMembershipsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdUsersUserIdGet($course_id, $user_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseMembershipsApi->coursesCourseIdUsersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Membership**](../Model/Membership.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdUsersUserIdPatch**
> \BlackboardRest\Model\Membership coursesCourseIdUsersUserIdPatch($course_id, $user_id, $input, $fields)

Update Membership

Updates a user membership in the specified course.    | Field                  | Entitlements Required                                                           |  |------------------------|---------------------------------------------------------------------------------|  | dataSourceId           | 'course.user.MODIFY' or 'org.user.MODIFY'                                       |  | courseRoleId           | 'course.user.MODIFY', 'org.user.MODIFY', or 'course.user-role.MODIFY'           |  | availability.available | 'course.user.MODIFY', 'org.user.MODIFY', or 'course.course-availability.MODIFY' |    In addition, callers must have standard view entitlements to receive a response.  Without view entitlements the operation will be performed but an empty result object will be returned.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseMembershipsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input9(); // \BlackboardRest\Model\Input9 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdUsersUserIdPatch($course_id, $user_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseMembershipsApi->coursesCourseIdUsersUserIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input9**](../Model/\BlackboardRest\Model\Input9.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Membership**](../Model/Membership.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdUsersUserIdPut**
> \BlackboardRest\Model\Membership coursesCourseIdUsersUserIdPut($course_id, $user_id, $input, $fields)

Create Membership

Creates a user membership in the specified course.  Minimal entitlements required:  - For courses: 'course.user-enroll.EXECUTE', 'system.enrollment.CREATE' - For organizations: 'course.user-enroll.EXECUTE', 'org.enrollment.CREATE' - For courses or organizations that have enabled self enrollment: 'system.generic.VIEW'  By default courseRoleId is Student and availability.available is Yes.  Providing different values for these fields requires extra entitlements:  - For courses: 'course.user-role.MODIFY' or 'course.user.MODIFY' - For organizations: 'course.user-role.MODIFY' or 'org.user.MODIFY'  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseMembershipsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input8(); // \BlackboardRest\Model\Input8 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdUsersUserIdPut($course_id, $user_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseMembershipsApi->coursesCourseIdUsersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input8**](../Model/\BlackboardRest\Model\Input8.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Membership**](../Model/Membership.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUserIdCoursesGet**
> \BlackboardRest\Model\InlineResponse2005 usersUserIdCoursesGet($user_id, $offset, $limit, $created, $created_compare, $data_source_id, $sort, $fields)

Get Memberships

Returns a list of course and organization memberships for the specified user.  Users can always view their own memberships.  Callers viewing the memberships of another user require at least one of the following entitlements:  - 'system.user.course.enrollment.VIEW' allows callers to see course memberships - 'system.user.org.enrollment.VIEW' allows callers to see organization memberships  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseMembershipsApi();
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$created = new \DateTime(); // \DateTime | Search for memberships with a created date relative to this value.  'createdCompare' may also be sent to control search behavior.  **Since**: 3100.0.0
$created_compare = "created_compare_example"; // string | Used alongside the 'created' search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3100.0.0
$data_source_id = "data_source_id_example"; // string | Search for memberships with this dataSourceId.  This may optionally be the data source's externalId using the syntax \"externalId:math101\".  **Since**: 3100.0.0
$sort = "sort_example"; // string | Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \"(desc)\" suffix to request a descending sort for that property. e.g. \"name.family(desc),created\"  **Since**: 3100.0.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->usersUserIdCoursesGet($user_id, $offset, $limit, $created, $created_compare, $data_source_id, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseMembershipsApi->usersUserIdCoursesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **created** | **\DateTime**| Search for memberships with a created date relative to this value.  &#39;createdCompare&#39; may also be sent to control search behavior.  **Since**: 3100.0.0 | [optional]
 **created_compare** | **string**| Used alongside the &#39;created&#39; search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3100.0.0 | [optional]
 **data_source_id** | **string**| Search for memberships with this dataSourceId.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;.  **Since**: 3100.0.0 | [optional]
 **sort** | **string**| Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \&quot;(desc)\&quot; suffix to request a descending sort for that property. e.g. \&quot;name.family(desc),created\&quot;  **Since**: 3100.0.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

