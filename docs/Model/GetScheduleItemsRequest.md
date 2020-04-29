# GetScheduleItemsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_ids** | **int[]** | A list of requested location IDs. | [optional] 
**staff_ids** | **int[]** | A list of requested staff IDs. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional] 
**ignore_prep_finish_times** | **bool** | When &#x60;true&#x60;, appointment preparation and finish unavailabilities are not returned.   &lt;br /&gt;Default: **false** | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


