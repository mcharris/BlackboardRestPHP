# Enrollment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Specifies the enrollment options for the course.  Defaults to InstructorLed. | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The date on which enrollments are allowed for the course.  May only be set if enrollment.type is SelfEnrollment. | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The date on which enrollment in this course ends.  May only be set if enrollment.type is SelfEnrollment. | [optional] 
**access_code** | **string** | The enrollment access code associated with this course.  May only be set if enrollment.type is SelfEnrollment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


