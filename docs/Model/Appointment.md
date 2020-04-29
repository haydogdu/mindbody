# Appointment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gender_preference** | **string** | The preferred gender of the appointment provider. | [optional] 
**duration** | **int** | The duration of the appointment. | [optional] 
**provider_id** | **string** | If a user has Complementary and Alternative Medicine features enabled, this property indicates the provider assigned to the appointment. | [optional] 
**id** | **int** | The unique ID of the appointment. | [optional] 
**status** | **string** | The status of this appointment. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The date and time the appointment is to start. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The date and time the appointment is to end. | [optional] 
**notes** | **string** | Any notes associated with the appointment. | [optional] 
**staff_requested** | **bool** | When &#x60;true&#x60;, indicates that the staff member was requested specifically by the client. | [optional] 
**program_id** | **int** | The ID of the program to which this appointment belongs. | [optional] 
**session_type_id** | **int** | The ID of the session type of this appointment. | [optional] 
**location_id** | **int** | The ID of the location where this appointment is to take place. | [optional] 
**staff_id** | **int** | The ID of the staff member providing the service for this appointment. | [optional] 
**client_id** | **string** | The RSSID of the client who is booked for this appointment. | [optional] 
**first_appointment** | **bool** | When &#x60;true&#x60;, indicates that this is the client’s first appointment at this site. | [optional] 
**client_service_id** | **int** | The ID of the pass on the client’s account that is to pay for this appointment. | [optional] 
**resources** | [**\Swagger\Client\Model\Resource[]**](Resource.md) | The resources this appointment is to use. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


