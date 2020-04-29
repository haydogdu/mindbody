# GetBookableItemsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_type_ids** | **int[]** | A list of the requested session type IDs. | 
**location_ids** | **int[]** | A list of the requested location IDs. | [optional] 
**staff_ids** | **int[]** | A list of the requested staff IDs. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional] 
**appointment_id** | **int** | If provided, filters out the appointment with this ID. | [optional] 
**ignore_default_session_length** | **bool** | When &#x60;true&#x60;, availabilities that are non-default return, for example, a 30-minute availability with a 60-minute default session length.&lt;br /&gt;  When &#x60;false&#x60;, only availabilities that have the default session length return. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


