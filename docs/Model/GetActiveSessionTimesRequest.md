# GetActiveSessionTimesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_type** | **string** | Filters on the provided the schedule type. Either &#x60;SessionTypeIds&#x60; or &#x60;ScheduleType&#x60; must be provided. | [optional] 
**session_type_ids** | **int[]** | Filters on the provided session type IDs. Either &#x60;SessionTypeIds&#x60; or &#x60;ScheduleType&#x60; must be provided. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Filters results to times that start on or after this time on the current date. Any date provided is ignored.  &lt;br /&gt;Default: **00:00:00** | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | Filters results to times that end on or before this time on the current date. Any date provided is ignored..  &lt;br /&gt;Default: **23:59:59** | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


