# Duration1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The intended length of the course.  Possible values are:  - Continuous: The course is active on an ongoing basis.  This is the default. - DateRange: The course will only be available between specific date ranges. - FixedNumDays: The course will only be available for a set number of days. - Term: The course&#39;s parent term duration settings will be used. | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The date this course starts.  May only be set if availability.duration.type is DateRange. | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The date this course ends.  May only be set if availability.duration.type is DateRange. | [optional] 
**days_of_use** | **int** | The number of days this course can be used.  May only be set if availability.duration.type is FixedNumDays. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


