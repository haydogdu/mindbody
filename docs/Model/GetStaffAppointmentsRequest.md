# GetStaffAppointmentsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**appointment_ids** | **int[]** | A list of the requested appointment IDs. | [optional] 
**location_ids** | **int[]** | A list of the requested location IDs. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the requested date range. If omitted, the default is used.   &lt;br /&gt;Default: **today’s date** | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional] 
**staff_ids** | **int[]** | List of staff IDs to be returned. Use a value of zero to return all staff appointments. | [optional] 
**client_ids** | **string[]** | List of client IDs to be returned. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


