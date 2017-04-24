# Duration2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The intended length of the term.  Possible values are:  - Continuous: The term is active on an ongoing basis.  This is the default. - DateRange: The term will only be available between specific date ranges. - FixedNumDays: The term will only be available for a set number of days. | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The date this term starts.  May only be set if availability.duration.type is DateRange. | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The date this term ends.  May only be set if availability.duration.type is DateRange. | [optional] 
**days_of_use** | **int** | The number of days courses within this term can be used.  May only be set if availability.duration.type is FixedNumDays. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


