# BlackboardRest\DataSourcesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learnApiPublicV1DataSourcesDataSourceIdDelete**](DataSourcesApi.md#learnApiPublicV1DataSourcesDataSourceIdDelete) | **DELETE** /learn/api/public/v1/dataSources/{dataSourceId} | Delete Data Source
[**learnApiPublicV1DataSourcesDataSourceIdGet**](DataSourcesApi.md#learnApiPublicV1DataSourcesDataSourceIdGet) | **GET** /learn/api/public/v1/dataSources/{dataSourceId} | Get Data Source
[**learnApiPublicV1DataSourcesDataSourceIdPatch**](DataSourcesApi.md#learnApiPublicV1DataSourcesDataSourceIdPatch) | **PATCH** /learn/api/public/v1/dataSources/{dataSourceId} | Update Data Source
[**learnApiPublicV1DataSourcesGet**](DataSourcesApi.md#learnApiPublicV1DataSourcesGet) | **GET** /learn/api/public/v1/dataSources | Get Data Sources
[**learnApiPublicV1DataSourcesPost**](DataSourcesApi.md#learnApiPublicV1DataSourcesPost) | **POST** /learn/api/public/v1/dataSources | Create Data Source


# **learnApiPublicV1DataSourcesDataSourceIdDelete**
> learnApiPublicV1DataSourcesDataSourceIdDelete($data_source_id, $fields)

Delete Data Source

Deletes a data source.  The 'system.datasource.manager.VIEW' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\DataSourcesApi();
$data_source_id = "data_source_id_example"; // string | The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $api_instance->learnApiPublicV1DataSourcesDataSourceIdDelete($data_source_id, $fields);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->learnApiPublicV1DataSourcesDataSourceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1DataSourcesDataSourceIdGet**
> \BlackboardRest\Model\DataSource learnApiPublicV1DataSourcesDataSourceIdGet($data_source_id, $fields)

Get Data Source

Loads a data source.  The 'system.datasource.manager.VIEW' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\DataSourcesApi();
$data_source_id = "data_source_id_example"; // string | The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1DataSourcesDataSourceIdGet($data_source_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->learnApiPublicV1DataSourcesDataSourceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\DataSource**](../Model/DataSource.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1DataSourcesDataSourceIdPatch**
> \BlackboardRest\Model\DataSource learnApiPublicV1DataSourcesDataSourceIdPatch($data_source_id, $input, $fields)

Update Data Source

Updates a data source.  The 'system.datasource.manager.VIEW' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\DataSourcesApi();
$data_source_id = "data_source_id_example"; // string | The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 |
$input = new \BlackboardRest\Model\Input11(); // \BlackboardRest\Model\Input11 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1DataSourcesDataSourceIdPatch($data_source_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->learnApiPublicV1DataSourcesDataSourceIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_source_id** | **string**| The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | |
 **input** | [**\BlackboardRest\Model\Input11**](../Model/\BlackboardRest\Model\Input11.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\DataSource**](../Model/DataSource.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1DataSourcesGet**
> \BlackboardRest\Model\InlineResponse2006 learnApiPublicV1DataSourcesGet($offset, $limit, $external_id, $fields)

Get Data Sources

Returns a list of data sources.  The 'system.datasource.manager.VIEW' entitlement is needed.  **Since**: 3000.1.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\DataSourcesApi();
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$external_id = "external_id_example"; // string | The 'batchUid' value to use as search criteria.  Currently only supports 'contains' searches.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1DataSourcesGet($offset, $limit, $external_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->learnApiPublicV1DataSourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **external_id** | **string**| The &#39;batchUid&#39; value to use as search criteria.  Currently only supports &#39;contains&#39; searches. | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learnApiPublicV1DataSourcesPost**
> \BlackboardRest\Model\DataSource learnApiPublicV1DataSourcesPost($input, $fields)

Create Data Source

Creates a data source.  The 'system.datasource.manager.VIEW' entitlement is needed.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\DataSourcesApi();
$input = new \BlackboardRest\Model\Input10(); // \BlackboardRest\Model\Input10 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->learnApiPublicV1DataSourcesPost($input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->learnApiPublicV1DataSourcesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input** | [**\BlackboardRest\Model\Input10**](../Model/\BlackboardRest\Model\Input10.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\DataSource**](../Model/DataSource.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

