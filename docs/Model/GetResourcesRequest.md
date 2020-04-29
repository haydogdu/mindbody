# GetResourcesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_type_ids** | **int[]** | List of session type IDs.&lt;br /&gt;  Default: **all** | [optional] 
**location_id** | **int** | The location of the resource. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set.&lt;br /&gt;  Default: **all** | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The time the resource starts. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The time the resource ends. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


