# ClassSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**classes** | [**\Swagger\Client\Model\ModelClass[]**](ModelClass.md) | Contains information about classes. | [optional] 
**clients** | [**\Swagger\Client\Model\Client[]**](Client.md) | Contains information about clients. | [optional] 
**course** | [**\Swagger\Client\Model\Course**](Course.md) | Contains information about the course that the enrollment is a part of. | [optional] 
**semester_id** | **int** | The semester ID for the enrollment (if any). | [optional] 
**is_available** | **bool** | When &#x60;true&#x60;, indicates that the enrollment shows in consumer mode, has not started yet, and there is room in each class of the enrollment.&lt;br /&gt;  When &#x60;false&#x60;, indicates that either the enrollment does not show in consumer mode, has already started, or there is no room in some classes of the enrollment. | [optional] 
**id** | **int** | The unique ID of the class schedule. | [optional] 
**class_description** | [**\Swagger\Client\Model\ClassDescription**](ClassDescription.md) | Contains information about the class. | [optional] 
**day_sunday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Sundays. | [optional] 
**day_monday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Mondays. | [optional] 
**day_tuesday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Tuesdays. | [optional] 
**day_wednesday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Wednesdays. | [optional] 
**day_thursday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Thursdays. | [optional] 
**day_friday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Fridays. | [optional] 
**day_saturday** | **bool** | When &#x60;true&#x60;, indicates that this schedule occurs on Saturdays. | [optional] 
**allow_open_enrollment** | **bool** | When &#x60;true&#x60;, indicates that the enrollment allows booking after the enrollment has started. | [optional] 
**allow_date_forward_enrollment** | **bool** | When &#x60;true&#x60;, indicates that this the enrollment shows in consumer mode, the enrollment has not started yet, and there is room in each class of the enrollment. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | The time this class schedule starts. | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | The time this class schedule ends. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The date this class schedule starts. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The date this class schedule ends. | [optional] 
**staff** | [**\Swagger\Client\Model\Staff**](Staff.md) | Contains information about the staff member who is regularly scheduled to teach the class. | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) | Contains information about the regularly scheduled location of this class. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


