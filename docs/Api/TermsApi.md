# BlackboardRest\TermsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learnApiPublicV1TermsGet**](TermsApi.md#learnApiPublicV1TermsGet) | **GET** /learn/api/public/v1/terms | Get Terms
[**learnApiPublicV1TermsPost**](TermsApi.md#learnApiPublicV1TermsPost) | **POST** /learn/api/public/v1/terms | Create Term
[**learnApiPublicV1TermsTermIdDelete**](TermsApi.md#learnApiPublicV1TermsTermIdDelete) | **DELETE** /learn/api/public/v1/terms/{termId} | Delete Term
[**learnApiPublicV1TermsTermIdGet**](TermsApi.md#learnApiPublicV1TermsTermIdGet) | **GET** /learn/api/public/v1/terms/{termId} | Get Term
[**learnApiPublicV1TermsTermIdPatch**](TermsApi.md#learnApiPublicV1TermsTermIdPatch) | **PATCH** /learn/api/public/v1/terms/{termId} | Update Term


# **learnApiPublicV1TermsGet**
> \BlackboardRest\Model\InlineResponse2007 learnApiPublicV1TermsGet($offset, $limit, $external_id, $data_source_id, $fields)

Get Terms

Returns a list of terms.  At least one of the entitlements 'system.term.VIEW' or 'system.term.MODIFY' are needed.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\TermsApi();
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$external_id = "external_id_example"; // string | Search for term with externalId properties that contain this value.  **Since**: 3100.6.0
$data_source_id = "data_source_id_example"; // string | Search for term with this dataSourceId.  **Since**: 3100.6.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1TermsGet($offset, $limit, $external_id, $data_source_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->learnApiPublicV1TermsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **external_id** | **string**| Search for term with externalId properties that contain this value.  **Since**: 3100.6.0 | [optional]
 **data_source_id** | **string**| Search for term with this dataSourceId.  **Since**: 3100.6.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1TermsPost**
> \BlackboardRest\Model\Term learnApiPublicV1TermsPost($input, $fields)

Create Term

Creates a term.  The 'system.term.MODIFY' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\TermsApi();
$input = new \BlackboardRest\Model\Input12(); // \BlackboardRest\Model\Input12 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1TermsPost($input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->learnApiPublicV1TermsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\BlackboardRest\Model\Input12**](../Model/\BlackboardRest\Model\Input12.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Term**](../Model/Term.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1TermsTermIdDelete**
> learnApiPublicV1TermsTermIdDelete($term_id)

Delete Term

Deletes a term.  The 'system.term.MODIFY' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\TermsApi();
$term_id = "term_id_example"; // string | The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 |

try {
    $api_instance->learnApiPublicV1TermsTermIdDelete($term_id);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->learnApiPublicV1TermsTermIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term_id** | **string**| The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1TermsTermIdGet**
> \BlackboardRest\Model\Term learnApiPublicV1TermsTermIdGet($term_id, $fields)

Get Term

Loads a term.  The caller must be enrolled in a course contained within the term, or must have at least one of the entitlements 'system.term.VIEW' or 'system.term.MODIFY'.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\TermsApi();
$term_id = "term_id_example"; // string | The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1TermsTermIdGet($term_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->learnApiPublicV1TermsTermIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term_id** | **string**| The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Term**](../Model/Term.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1TermsTermIdPatch**
> \BlackboardRest\Model\Term learnApiPublicV1TermsTermIdPatch($term_id, $input, $fields)

Update Term

Updates a term.  The 'system.term.MODIFY' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\TermsApi();
$term_id = "term_id_example"; // string | The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 |
$input = new \BlackboardRest\Model\Input13(); // \BlackboardRest\Model\Input13 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1TermsTermIdPatch($term_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermsApi->learnApiPublicV1TermsTermIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term_id** | **string**| The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | |
 **input** | [**\BlackboardRest\Model\Input13**](../Model/\BlackboardRest\Model\Input13.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Term**](../Model/Term.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

