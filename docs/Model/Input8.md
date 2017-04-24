# Input8

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_source_id** | **string** | The ID of the data source associated with this course.  This may optionally be the data source&#39;s externalId using the syntax \&quot;externalId:math101\&quot;. | [optional] 
**availability** | [**\BlackboardRest\Model\Availability3**](Availability3.md) |  | [optional] 
**course_role_id** | **string** | The user&#39;s role in the course.  Learn provides the following immutable course roles:  - Student: Has no access to the Control Panel.  This is the default role. - Guest: Has no access to the Control Panel. Areas within the course are made available to guests, but typically they can only view course materials; they do not have access to tests or assessments, and do not have permission to post on discussion boards. Out of the box, Learn also comes with the following roles, although they are customizable and may have different capabilities from what is documented here:  - Instructor: Has access to all areas in the Control Panel. This role is generally given to those developing, teaching, or facilitating the class. Instructors may access a course that is unavailable to students. - TeachingAssistant: The teaching assistant role is that of a co-teacher. Teaching assistants are able to administer all areas of a course. Their only limitations are those imposed by the instructor or Blackboard administrator at your school. - CourseBuilder: Manages the course without having access to student grades. - Grader: Assists the instructor in the creation, management, delivery, and grading of items. These roles are also valid for an organization, although they are named differently in the UI.  Custom course roles may also be referenced by their IDs. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


