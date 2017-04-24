# RestException

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Represents HTTP Status code in the response header. | [optional] 
**code** | **string** | The error code specific to a particular REST API. It is usually something that conveys information specific to the problem domain. For cases where the HTTP Status code conveys all the information required (such as a 404-Not Found) then the code may be omitted. | [optional] 
**message** | **string** | Error message that should be easy to understand and convey a concise reason as to why the error occurred | 
**developer_message** | **string** | Represents any technical information that a developer calling REST API might find useful. | [optional] 
**extra_info** | **string** | Indicates a URL that anyone seeing the error message can click in a browser. The target web page should describe the error condition fully, as well as potential solutions to help them resolve the error condition | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


