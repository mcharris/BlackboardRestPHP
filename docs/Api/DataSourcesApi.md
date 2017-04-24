# BlackboardRest\DataSourcesApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourcesDataSourceIdDelete**](DataSourcesApi.md#dataSourcesDataSourceIdDelete) | **DELETE** dataSources/{dataSourceId} | Delete Data Source
[**dataSourcesDataSourceIdGet**](DataSourcesApi.md#dataSourcesDataSourceIdGet) | **GET** dataSources/{dataSourceId} | Get Data Source
[**dataSourcesDataSourceIdPatch**](DataSourcesApi.md#dataSourcesDataSourceIdPatch) | **PATCH** dataSources/{dataSourceId} | Update Data Source
[**dataSourcesGet**](DataSourcesApi.md#dataSourcesGet) | **GET** dataSources | Get Data Sources
[**dataSourcesPost**](DataSourcesApi.md#dataSourcesPost) | **POST** dataSources | Create Data Source


# **dataSourcesDataSourceIdDelete**
> dataSourcesDataSourceIdDelete($data_source_id, $fields)

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
    $api_instance->dataSourcesDataSourceIdDelete($data_source_id, $fields);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesDataSourceIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesDataSourceIdGet**
> \BlackboardRest\Model\DataSource dataSourcesDataSourceIdGet($data_source_id, $fields)

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
    $result = $api_instance->dataSourcesDataSourceIdGet($data_source_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesDataSourceIdGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesDataSourceIdPatch**
> \BlackboardRest\Model\DataSource dataSourcesDataSourceIdPatch($data_source_id, $input, $fields)

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
    $result = $api_instance->dataSourcesDataSourceIdPatch($data_source_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesDataSourceIdPatch: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesGet**
> \BlackboardRest\Model\InlineResponse2006 dataSourcesGet($offset, $limit, $external_id, $fields)

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
    $result = $api_instance->dataSourcesGet($offset, $limit, $external_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesPost**
> \BlackboardRest\Model\DataSource dataSourcesPost($input, $fields)

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
    $result = $api_instance->dataSourcesPost($input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesPost: ', $e->getMessage(), PHP_EOL;
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

