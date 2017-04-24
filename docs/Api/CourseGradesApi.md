# BlackboardRest\CourseGradesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/attempts/{attemptId} | Get Column Attempt
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/attempts | Get Column Attempts
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId} | Delete Grade Column
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId} | Get Grade Column
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId} | Update Grade Column
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/users | Get Column Grades
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/users/{userId} | Get Column Grade
[**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/users/{userId} | Update Column Grade
[**learnApiPublicV1CoursesCourseIdGradebookColumnsGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns | Get Grade Columns
[**learnApiPublicV1CoursesCourseIdGradebookColumnsPost**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookColumnsPost) | **POST** /learn/api/public/v1/courses/{courseId}/gradebook/columns | Create Grade Column
[**learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet**](CourseGradesApi.md#learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/users/{userId} | Get User Grades


# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet**
> \BlackboardRest\Model\Attempt learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet($course_id, $column_id, $attempt_id, $fields)

Get Column Attempt

Loads the grade column attempt for the specified id.  The 'course.gradebook.MODIFY' entitlement is needed to view an attempt. Alternatively, if the user making the request is also the user associated with the attempt grade, then the user may view his/her own attempt.  When accessing an anonymous grade column attempt, if the release criteria has not yet been met, then the 'userId' attribute will not be populated for the returned attempt.  A subset of attempt properties are available to a student when requesting his or her own attempt:  - id - userId - groupAttemptId - status - text - score - groupOverride - feedback - studentComments - studentSubmission - exempt - created  **Since**: 3100.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$attempt_id = "attempt_id_example"; // string | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet($course_id, $column_id, $attempt_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **attempt_id** | **string**|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Attempt**](../Model/Attempt.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet**
> \BlackboardRest\Model\InlineResponse20010 learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet($course_id, $column_id, $offset, $limit, $user_id, $attempt_statuses, $fields)

Get Column Attempts

Returns a list of attempts associated with the specified grade column.  The 'course.gradebook.MODIFY' entitlement is needed to view column attempts. Alternatively, if the 'userId' query parameter is specified, and the user making the request matches the specified 'userId', then the user may view his/her own attempt.  When querying an anonymous grade column, if the release criteria has not yet been met, then the 'userId' attribute will not be populated for the returned column attempts.  If the release criteria has not been met and the 'userId' query parameter is specified, a 403 response is returned, unless the requesting user matches the specified 'userId' value.  A subset of attempt properties are available to a student when requesting his or her own attempts:  - id - userId - groupAttemptId - status - text - score - groupOverride - feedback - studentComments - studentSubmission - exempt - created  **Since**: 3100.4.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$user_id = "user_id_example"; // string | Search for grade column attempts submitted by this user. This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |    **Since**: 3100.4.0
$attempt_statuses = "attempt_statuses_example"; // string | Search for grade column attempts with one of these statuses.  Possible values are:  - InProgress - attempt activity has commenced, but has not been submitted for grading - NeedsGrading - attempt has been submitted for grading, but has not been fully graded - Completed - a grade has been entered for the attempt - InProgressAgain - attempt has been graded, but more student activity occurred after the grade was entered;                       applies only to collaborative tools such as discussions - NeedsGradingAgain - additional student activity occurring after a grade was entered requires that the attempt                         be regraded; applies only to collaborative tools such as discussions  **Since**: 3100.4.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet($course_id, $column_id, $offset, $limit, $user_id, $attempt_statuses, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **user_id** | **string**| Search for grade column attempts submitted by this user. This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |    **Since**: 3100.4.0 | [optional]
 **attempt_statuses** | **string**| Search for grade column attempts with one of these statuses.  Possible values are:  - InProgress - attempt activity has commenced, but has not been submitted for grading - NeedsGrading - attempt has been submitted for grading, but has not been fully graded - Completed - a grade has been entered for the attempt - InProgressAgain - attempt has been graded, but more student activity occurred after the grade was entered;                       applies only to collaborative tools such as discussions - NeedsGradingAgain - additional student activity occurring after a grade was entered requires that the attempt                         be regraded; applies only to collaborative tools such as discussions  **Since**: 3100.4.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete**
> learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete($course_id, $column_id, $only_if_empty)

Delete Grade Column

Delete a specific grade column.  **Since**: 3000.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$only_if_empty = true; // bool | 

try {
    $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete($course_id, $column_id, $only_if_empty);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **only_if_empty** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet**
> \BlackboardRest\Model\GradeColumn learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet($course_id, $column_id, $fields)

Get Grade Column

Loads a specific grade column.  **Since**: 3000.3.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet($course_id, $column_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\GradeColumn**](../Model/GradeColumn.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch**
> \BlackboardRest\Model\GradeColumn learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch($course_id, $column_id, $input, $fields)

Update Grade Column

Update a manual grade column.  **Since**: 3000.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$input = new \BlackboardRest\Model\Input17(); // \BlackboardRest\Model\Input17 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch($course_id, $column_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **input** | [**\BlackboardRest\Model\Input17**](../Model/\BlackboardRest\Model\Input17.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\GradeColumn**](../Model/GradeColumn.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet**
> \BlackboardRest\Model\InlineResponse20011 learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet($course_id, $column_id, $offset, $limit, $fields)

Get Column Grades

Returns a list of grades associated with the specified grade column.  This operation does not include 'ReadyToPost' grades when returning grade details for calculated grade columns.  Users with entitlement 'course.gradebook.MODIFY' can retrieve grades for any or all enrolled users. Requests for grades in a columns whose attempts are not visible to instructors will return with a status of \"403 - Forbidden.\"  Enrolled users without the 'course.gradebook.MODIFY' entitlement may only view their own grade; such users cannot retrieve grades of other users.  A request for the grade in a columns that has been hidden from students in the gradebook will return with a status \"403 - Forbidden.\".  A subset of grade properties are available to a student when requesting his or her own grades:  - userId - columnId - status - text - score - exempt - feedback  **Since**: 3000.3.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet($course_id, $column_id, $offset, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet**
> \BlackboardRest\Model\Grade learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet($course_id, $column_id, $user_id, $fields)

Get Column Grade

Loads the grade column grade for a specific user.  If grade details have yet to be entered for the specified user, then no grade details will be included in the returned grade object.  This operation does not include 'ReadyToPost' grades when returning grade details for calculated grade columns.  Users with entitlement 'course.gradebook.MODIFY' can retrieve grades for any or all enrolled users. Requests for grades in a columns whose attempts are not visible to instructors will return with a status of \"403 - Forbidden.\"  Enrolled users without the 'course.gradebook.MODIFY' entitlement may only view their own grade; such users cannot retrieve grades of other users.  A request for the grade in a columns that has been hidden from students in the gradebook will return with a status \"403 - Forbidden.\".  A subset of grade properties are available to a student when requesting his or her own grades:  - userId - columnId - status - text - score - exempt - feedback  **Since**: 3000.3.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet($course_id, $column_id, $user_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Grade**](../Model/Grade.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch**
> \BlackboardRest\Model\Grade learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch($course_id, $column_id, $user_id, $input, $fields)

Update Column Grade

Update the grade column grade for a specific user, including the text grade, score, instructor notes and feedback, and exempt status.  When updating text grade or score, the resulting grade is always marked as 'Posted'.  This end-point, currently, does not support marking the grade as 'ReadyToPost'.  Grade overrides may be cleared by either specifying the 'score' attribute as null, or the 'text'; attribute as null, '', or '-' in the body of the request. The entitlement 'course.gradebook.MODIFY' is required to perform this operation.  **Since**: 3000.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$column_id = "column_id_example"; // string | The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword 'finalGrade', which indicates that the course's final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input18(); // \BlackboardRest\Model\Input18 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch($course_id, $column_id, $user_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **column_id** | **string**| The grade column ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.  The ID may also be the keyword &#39;finalGrade&#39;, which indicates that the course&#39;s final grade column is specified.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:column1                    |  | finalGrade | finalGrade                            | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input18**](../Model/\BlackboardRest\Model\Input18.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Grade**](../Model/Grade.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsGet**
> \BlackboardRest\Model\InlineResponse2009 learnApiPublicV1CoursesCourseIdGradebookColumnsGet($course_id, $offset, $limit, $content_id, $fields)

Get Grade Columns

Returns a list of grade columns.  **Since**: 3000.3.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$content_id = "content_id_example"; // string | Search for grade columns associated with this content item.  **Since**: 3000.11.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsGet($course_id, $offset, $limit, $content_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **content_id** | **string**| Search for grade columns associated with this content item.  **Since**: 3000.11.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookColumnsPost**
> \BlackboardRest\Model\GradeColumn learnApiPublicV1CoursesCourseIdGradebookColumnsPost($course_id, $input, $fields)

Create Grade Column

Create a manual grade column.  **Since**: 3000.7.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input16(); // \BlackboardRest\Model\Input16 | 
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookColumnsPost($course_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookColumnsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input16**](../Model/\BlackboardRest\Model\Input16.md)|  |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\GradeColumn**](../Model/GradeColumn.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet**
> \BlackboardRest\Model\InlineResponse20011 learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet($course_id, $user_id, $offset, $limit, $fields)

Get User Grades

Loads the course grades for a specific user.  Users with entitlement \"course.gradebook.MODIFY\" have read access to all the properties of the collection results.  Users without entitlement \"course.gradebook.MODIFY\" requesting grades for themselves (i.e., userId = current user id) have read access to a restricted subset of properties of the collections result. These are the properties available to a student when requesting his or her own grades:  - userId - columnId - status - text - score - exempt - feedback  **Since**: 3000.3.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGradesApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet($course_id, $user_id, $offset, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGradesApi->learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

