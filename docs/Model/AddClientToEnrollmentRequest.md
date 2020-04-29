# AddClientToEnrollmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | The ID of the client who is being booked into the enrollment. | 
**class_schedule_id** | **int** | The ID of the class schedule (enrollment) into which the client is being booked. | 
**enroll_date_forward** | [**\DateTime**](\DateTime.md) | Enroll the clients from this date forward. &#x60;EnrollDateForward&#x60; takes priority over open enrollment. | [optional] 
**enroll_open** | [**\DateTime[]**](\DateTime.md) | Enroll for selected days. | [optional] 
**test** | **bool** | When &#x60;true&#x60;, input information is validated, but not committed.&lt;br /&gt;  Default: **false** | [optional] 
**send_email** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email. An email is only sent if the client has an email address and automatic emails have been set up.&lt;br /&gt;  Default: **false** | [optional] 
**waitlist** | **bool** | When &#x60;true&#x60;, the client is added to a specific enrollments waiting list. | [optional] 
**waitlist_entry_id** | **int** | The waiting list entry to add. Used to add a client to an enrollment from a waiting list entry. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


