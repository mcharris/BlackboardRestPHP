# GradeColumn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The primary ID of the grade column. | 
**external_id** | **string** | The externalId for this grade column | [optional] 
**name** | **string** | The name of the grade column. | 
**description** | **string** | The description of the grade column. | [optional] 
**external_grade** | **bool** | Whether this grade column is an external grade column. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date this grade column was created. | 
**score** | [**\BlackboardRest\Model\Score**](Score.md) |  | [optional] 
**availability** | [**\BlackboardRest\Model\Availability6**](Availability6.md) |  | [optional] 
**grading** | [**\BlackboardRest\Model\Grading2**](Grading2.md) |  | [optional] 
**content_id** | **string** | For grade columns associated with a content item, the ID of the content item.  **Since**: 3000.11.0 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


