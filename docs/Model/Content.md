# Content

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the content. | 
**parent_id** | **string** | The ID of the content&#39;s parent.  Note that top-level contents do not have parents. | 
**title** | **string** | The title or name of this content. Typically shown as the main text to click in the course outline when accessing the content. | 
**body** | **string** | The body text associated with this content. This field supports BbML. | [optional] 
**description** | **string** | The short description of this content.  This field is not used in Classic courses.  For Ultra courses this is used to show information directly on the course outline. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date this content was created. | 
**position** | **int** | The position of this content within its parent folder. | [optional] 
**has_children** | **bool** | Indicates whether this content is allowed to have child content items. | 
**has_gradebook_columns** | **bool** | Indicates whether this content item has one or more gradebook columns.  Associated gradebook columns can be accessed via courses/$courseId/gradebook/columns?contentId&#x3D;$contentId  **Since**: 3000.11.0 | 
**has_associated_groups** | **bool** | Indicates whether this content item has one or more associated groups.  Associated groups can be accessed via courses/$courseId/contents/$contentId/groups  **Since**: 3100.4.0 | 
**availability** | [**\BlackboardRest\Model\Availability2**](Availability2.md) |  | [optional] 
**content_handler** | [**\BlackboardRest\Model\ContentHandler**](ContentHandler.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


