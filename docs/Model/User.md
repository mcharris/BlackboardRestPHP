# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The primary ID of the user. | 
**uuid** | **string** | A secondary unique ID for the user.  Used by LTI launches and other inter-server operations. | 
**external_id** | **string** | An optional externally-defined unique ID for the user.  Defaults to the userName.  Formerly known as &#39;batchUid&#39;. | [optional] 
**data_source_id** | **string** | The ID of the data source associated with this user.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;. | [optional] 
**user_name** | **string** | The userName property, shown in the UI. | 
**student_id** | **string** | The user&#39;s student ID name or number as defined by the school or institution. | [optional] 
**education_level** | **string** | The education level of this user. | [optional] 
**gender** | **string** | The gender of this user. | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) | The birth date of this user. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date this user was created. | 
**last_login** | [**\DateTime**](\DateTime.md) | The date this user last logged in. | 
**system_role_ids** | [**\BlackboardRest\Model\SystemRoleEnum[]**](SystemRoleEnum.md) | The system roles (the administrative user roles in the UI) for this user.  The first role in this list is the user&#39;s primary system role, while the remaining are secondary system roles. | [optional] 
**availability** | [**\BlackboardRest\Model\Availability5**](Availability5.md) |  | [optional] 
**name** | [**\BlackboardRest\Model\Name**](Name.md) |  | [optional] 
**job** | [**\BlackboardRest\Model\Job**](Job.md) |  | [optional] 
**contact** | [**\BlackboardRest\Model\Contact**](Contact.md) |  | [optional] 
**address** | [**\BlackboardRest\Model\Address**](Address.md) |  | [optional] 
**locale** | [**\BlackboardRest\Model\Locale1**](Locale1.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


