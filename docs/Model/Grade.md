# Grade

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The user ID associated with this grade. | 
**column_id** | **string** | The grade column ID for this grade. | 
**status** | **string** | The status of this grade. | 
**text** | **string** | The the text representation of this grade. | [optional] 
**score** | **double** | The the score associated with this grade. | [optional] 
**overridden** | [**\DateTime**](\DateTime.md) | The date on which the score associated with this grade was last overridden.  An ISODate value is only returned if this grade is currently overridden; otherwise, returns null. | 
**notes** | **string** | The instructor notes associated with this grade. | [optional] 
**feedback** | **string** | The instructor feedback associated with this grade. | [optional] 
**exempt** | **bool** | Whether the score associated with this grade is ignored when computing the course grade. | [optional] 
**corrupt** | **bool** | Whether the grade for a calculated column could be successfully computed. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


