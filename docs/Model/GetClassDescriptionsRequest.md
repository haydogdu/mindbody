# GetClassDescriptionsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**class_description_id** | **int** | Filters to the single result with the given ID. | [optional] 
**program_ids** | **int[]** | Filters results to class descriptions belonging to the given programs. | [optional] 
**start_class_date_time** | [**\DateTime**](\DateTime.md) | Filters the results to class descriptions for scheduled classes that happen on or after the given date and time. | [optional] 
**end_class_date_time** | [**\DateTime**](\DateTime.md) | Filters the results to class descriptions for scheduled classes that happen before the given date and time. | [optional] 
**staff_id** | **int** | Filters results to class descriptions for scheduled classes taught by the given staff member. | [optional] 
**location_id** | **int** | Filters results to classes descriptions for schedule classes as the given location. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


