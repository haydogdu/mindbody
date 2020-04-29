# AddAppointmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apply_payment** | **bool** | When &#x60;true&#x60;, indicates that a payment should be applied to the appointment.   &lt;br /&gt;Default: **true** | [optional] 
**client_id** | **string** | The RRSID of the client for whom the new appointment is being made. | 
**duration** | **int** | The duration of the appointment. This parameter is used to change the default duration of an appointment. | [optional] 
**execute** | **string** | The action taken to add this appointment. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end date and time of the new appointment. &lt;br /&gt;  Default: **StartDateTime**, offset by the staff member’s default appointment duration. | [optional] 
**gender_preference** | **string** | The client’s service provider gender preference. | [optional] 
**location_id** | **int** | The ID of the location where the new appointment is to take place. | 
**notes** | **string** | Any general notes about this appointment. | [optional] 
**provider_id** | **string** | If a user has Complementary and Alternative Medicine features enabled, this parameter assigns a provider ID to the appointment. | [optional] 
**resource_ids** | **int[]** | A list of resource IDs to associate with the new appointment. | [optional] 
**send_email** | **bool** | Whether to send client an email for cancellations. An email is sent only if the client has an email address and automatic emails have been set up.   &lt;br /&gt;Default: **false** | [optional] 
**session_type_id** | **int** | The session type associated with the new appointment. | 
**staff_id** | **int** | The ID of the staff member who is adding the new appointment. | 
**staff_requested** | **bool** | When &#x60;true&#x60;, indicates that the staff member was requested specifically by the client. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start date and time of the new appointment. | 
**test** | **bool** | When true, indicates that the method is to be validated, but no new appointment data is added.   &lt;br /&gt;Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


