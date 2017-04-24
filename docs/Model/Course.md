# Course

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The primary ID of the course. | 
**uuid** | **string** | A secondary unique ID for the course.  Used by LTI launches and other inter-server operations. | 
**external_id** | **string** | An optional externally-defined unique ID for the course.  Defaults to the courseId.  Formerly known as &#39;batchUid&#39;. | [optional] 
**data_source_id** | **string** | The ID of the data source associated with this course.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;. | [optional] 
**course_id** | **string** | The Course ID attribute, shown to users in the UI. | 
**name** | **string** | The name of the course. | 
**description** | **string** | The description of the course. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date this course was created. | 
**organization** | **bool** | Whether this object represents an Organization.  Defaults to false. | 
**ultra_status** | **string** | Whether the course is rendered using Classic or Ultra Course View. | [optional] 
**allow_guests** | **bool** | Whether guests (users with the role guest) are allowed access to the course.  Defaults to true. | [optional] 
**read_only** | **bool** | Whether the course is closed to any further changes. This status does not affect availability of the course for viewing in any way, just updates. readOnly is only valid in an Ultra course; Classic courses can not be closed. | [optional] 
**term_id** | **string** | The ID of the term associated to this course.  This may optionally be the term&#39;s externalId using the syntax \&quot;externalId:spring.2016\&quot;. | [optional] 
**availability** | [**\BlackboardRest\Model\Availability1**](Availability1.md) |  | [optional] 
**enrollment** | [**\BlackboardRest\Model\Enrollment**](Enrollment.md) |  | [optional] 
**locale** | [**\BlackboardRest\Model\Locale**](Locale.md) |  | [optional] 
**has_children** | **bool** | Whether the course has any cross-listed children.  **Since**: 3000.11.0 | 
**parent_id** | **string** | The cross-listed parentId associated with the course, if the course is a child course.  **Since**: 3000.11.0 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


