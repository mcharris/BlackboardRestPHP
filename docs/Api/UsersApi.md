# BlackboardRest\UsersApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learnApiPublicV1UsersGet**](UsersApi.md#learnApiPublicV1UsersGet) | **GET** /learn/api/public/v1/users | Get Users
[**learnApiPublicV1UsersPost**](UsersApi.md#learnApiPublicV1UsersPost) | **POST** /learn/api/public/v1/users | Create User
[**learnApiPublicV1UsersUserIdDelete**](UsersApi.md#learnApiPublicV1UsersUserIdDelete) | **DELETE** /learn/api/public/v1/users/{userId} | Delete User
[**learnApiPublicV1UsersUserIdGet**](UsersApi.md#learnApiPublicV1UsersUserIdGet) | **GET** /learn/api/public/v1/users/{userId} | Get User
[**learnApiPublicV1UsersUserIdPatch**](UsersApi.md#learnApiPublicV1UsersUserIdPatch) | **PATCH** /learn/api/public/v1/users/{userId} | Update User


# **learnApiPublicV1UsersGet**
> \BlackboardRest\Model\InlineResponse2008 learnApiPublicV1UsersGet($offset, $limit, $user_name, $external_id, $created, $created_compare, $data_source_id, $sort, $fields)

Get Users

Returns a list of users.  At least one of the entitlements 'system.user.VIEW' or 'user.VIEW' are needed.  Note: Users with the 'SystemAdmin' role are only included in the results if the logged on user also has this role.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\UsersApi();
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$user_name = "user_name_example"; // string | Search for users with userName properties that contain this value.  **Since**: 3000.11.0
$external_id = "external_id_example"; // string | Search for users with externalId properties that contain this value.  **Since**: 3000.11.0
$created = new \DateTime(); // \DateTime | Search for users with a created date relative to this value.  'createdCompare' may also be sent to control search behavior.  **Since**: 3000.11.0
$created_compare = "created_compare_example"; // string | Used alongside the 'created' search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3000.11.0
$data_source_id = "data_source_id_example"; // string | Search for users with this dataSourceId.  This may optionally be the data source's externalId using the syntax \"externalId:math101\".  **Since**: 3000.11.0
$sort = "sort_example"; // string | Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \"(desc)\" suffix to request a descending sort for that property. e.g. \"name.family(desc),created\"  **Since**: 3100.0.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1UsersGet($offset, $limit, $user_name, $external_id, $created, $created_compare, $data_source_id, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->learnApiPublicV1UsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **user_name** | **string**| Search for users with userName properties that contain this value.  **Since**: 3000.11.0 | [optional]
 **external_id** | **string**| Search for users with externalId properties that contain this value.  **Since**: 3000.11.0 | [optional]
 **created** | **\DateTime**| Search for users with a created date relative to this value.  &#39;createdCompare&#39; may also be sent to control search behavior.  **Since**: 3000.11.0 | [optional]
 **created_compare** | **string**| Used alongside the &#39;created&#39; search parameter.  Supported values:  - lessThan - greaterOrEqual  Defaults to greaterOrEqual if not specified.  **Since**: 3000.11.0 | [optional]
 **data_source_id** | **string**| Search for users with this dataSourceId.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;.  **Since**: 3000.11.0 | [optional]
 **sort** | **string**| Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \&quot;(desc)\&quot; suffix to request a descending sort for that property. e.g. \&quot;name.family(desc),created\&quot;  **Since**: 3100.0.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1UsersPost**
> \BlackboardRest\Model\User learnApiPublicV1UsersPost($input, $fields)

Create User

Creates a user.  The 'system.user.CREATE' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\UsersApi();
$input = new \BlackboardRest\Model\Input14(); // \BlackboardRest\Model\Input14 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1UsersPost($input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->learnApiPublicV1UsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\BlackboardRest\Model\Input14**](../Model/\BlackboardRest\Model\Input14.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\User**](../Model/User.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1UsersUserIdDelete**
> learnApiPublicV1UsersUserIdDelete($user_id, $fields)

Delete User

Deletes a user.  The 'system.user.DELETE' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\UsersApi();
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $api_instance->learnApiPublicV1UsersUserIdDelete($user_id, $fields);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->learnApiPublicV1UsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1UsersUserIdGet**
> \BlackboardRest\Model\User learnApiPublicV1UsersUserIdGet($user_id, $fields)

Get User

Loads a user.  Properties returned will depend on the caller's entitlements.  Callers with the entitlement 'user.VIEW' will always get a minimal set of core properties:  - id - name.given - name.family - name.middle - systemRoleIds  Depending on the Learn administrator customizable user field display settings, as well as the target user's personal visibility settings, the following fields might also be included:  - userName - educationLevel - gender - birthDate - name.other - name.suffix - name.title - job.* - contact.* - address.*  Callers asking for their own user record get all fields listed above, plus:  - locale.*  All user properties are provided to callers with one of the entitlements 'system.user.properties.MODIFY', 'system.useradmin.generic.VIEW', or 'system.user.VIEW'.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\UsersApi();
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1UsersUserIdGet($user_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->learnApiPublicV1UsersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\User**](../Model/User.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1UsersUserIdPatch**
> \BlackboardRest\Model\User learnApiPublicV1UsersUserIdPatch($user_id, $input, $fields)

Update User

Updates a user.  Callers may update their own user record if they have the 'self.user.MODIFY' entitlement.  Updating other users requires the 'system.user.properties.MODIFY' entitlement.  Certain properties may be edited by callers with more finely grained entitlements:    | Field                  | Entitlements Required                               |  |------------------------|-----------------------------------------------------|  | systemRoleIds          | system.user.MODIFY, system.user-system-role.MODIFY  |  | availability.available | system.user.MODIFY, system.user.availability.MODIFY |  | password               | system.user.MODIFY, system.user-password.MODIFY     |    **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\UsersApi();
$user_id = "user_id_example"; // string | The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input15(); // \BlackboardRest\Model\Input15 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1UsersUserIdPatch($user_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->learnApiPublicV1UsersUserIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:jsmith                     |  | userName   | userName:jsmith                       |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input15**](../Model/\BlackboardRest\Model\Input15.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\User**](../Model/User.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

