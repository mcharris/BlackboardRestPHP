# Attempt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The Id of the User who submitted this attempt. | 
**group_attempt_id** | **string** | The group attempt ID associated with this student attempt. | 
**group_override** | **bool** | Whether the score associated with this student attempt was overridden from the associated group attempt score. A value is only returned if the attempt grade is currently overridden. | 
**student_comments** | **string** | The student comments associated with this attempt. | [optional] 
**student_submission** | **string** | The student submission text associated with this attempt. | [optional] 
**exempt** | **bool** | Whether the score associated with this attempt is ignored when computing the user&#39;s grade for the associated grade column. | [optional] 
**id** | **string** | The primary ID for this attempt. | 
**status** | **string** | The status of this attempt. | 
**text** | **string** | The the text representation of grade for this attempt. | [optional] 
**score** | **double** | The the score associated with this attempt. | [optional] 
**notes** | **string** | The instructor notes associated with this attempt. | [optional] 
**feedback** | **string** | The instructor feedback associated with this attempt. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date on which this attempt was created. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


