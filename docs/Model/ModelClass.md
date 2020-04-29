# ModelClass

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**class_schedule_id** | **int** | The ID used to retrieve the class schedule for the desired class. | [optional] 
**visits** | [**\Swagger\Client\Model\Visit[]**](Visit.md) | Contains information about visits. | [optional] 
**clients** | [**\Swagger\Client\Model\Client[]**](Client.md) | Contains information about clients. | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) | Contains information about a location. | [optional] 
**resource** | [**\Swagger\Client\Model\Resource**](Resource.md) | Contains information about a resource, such as a room, assigned to a class. | [optional] 
**max_capacity** | **int** | The maximum number of clients allowed in the class. | [optional] 
**web_capacity** | **int** | The maximum number of clients allowed to sign up online for the class. | [optional] 
**total_booked** | **int** | The total number of clients booked in the class. | [optional] 
**total_booked_waitlist** | **int** | The total number of booked clients on the waiting list for the class. | [optional] 
**web_booked** | **int** | The total number of clients who signed up online for the class. | [optional] 
**semester_id** | **int** | The ID of the semester that the class is a part of, if any. | [optional] 
**is_canceled** | **bool** | When &#x60;true&#x60;, indicates that the class has been cancelled.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class has not been cancelled. | [optional] 
**substitute** | **bool** | When &#x60;true&#x60;, indicates that the class is being taught by a substitute teacher.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class is being taught by its regular teacher. | [optional] 
**active** | **bool** | When &#x60;true&#x60;, indicates that the class is shown to clients when in consumer mode.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the class is not shown to clients when in consumer mode. | [optional] 
**is_waitlist_available** | **bool** | When &#x60;true&#x60;, indicates that the clients can be placed on a waiting list for the class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the clients cannot be placed on a waiting list for the class. | [optional] 
**is_enrolled** | **bool** | When &#x60;true&#x60;, indicates that the client with the given &#x60;ClientId&#x60; is enrolled in this class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client with the given &#x60;ClientId&#x60; is not enrolled in this class. | [optional] 
**hide_cancel** | **bool** | When &#x60;true&#x60;, indicates that this class is hidden when cancelled.&lt;br /&gt;  When &#x60;false&#x60;, indicates that this class is not hidden when cancelled. | [optional] 
**id** | **int** | The unique identifier for the class. | [optional] 
**is_available** | **bool** | When &#x60;true&#x60;, indicates that the client with the given client ID can book this class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client with the given client ID cannot book this class. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The time this class is scheduled to start. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The time this class is scheduled to end. | [optional] 
**last_modified_date_time** | [**\DateTime**](\DateTime.md) | The last time this class was modified. | [optional] 
**class_description** | [**\Swagger\Client\Model\ClassDescription**](ClassDescription.md) | Contains information that defines the class. | [optional] 
**staff** | [**\Swagger\Client\Model\Staff**](Staff.md) | Contains information about the staff member. | [optional] 
**booking_window** | [**\Swagger\Client\Model\BookingWindow**](BookingWindow.md) | Contains information about the window for booking. | [optional] 
**booking_status** | **string** | Contains the booking’s payment status. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


