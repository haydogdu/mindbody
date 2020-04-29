# GetStaffRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**staff_ids** | **int[]** | A list of the requested staff IDs. | [optional] 
**filters** | **string[]** | Filters to apply to the search. Possible values are:  * StaffViewable  * AppointmentInstructor  * ClassInstructor  * Male  * Female | [optional] 
**session_type_id** | **int** | Return only staff members that are available for the specified session type. You must supply a valid &#x60;StartDateTime&#x60; and &#x60;LocationID&#x60; to use this parameter. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | Return only staff members that are available at the specified date and time. You must supply a valid &#x60;SessionTypeID&#x60; and &#x60;LocationID&#x60; to use this parameter. | [optional] 
**location_id** | **int** | Return only staff members that are available at the specified location. You must supply a valid &#x60;SessionTypeID&#x60; and &#x60;StartDateTime&#x60; to use this parameter. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


