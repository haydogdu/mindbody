# GetClassesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**class_description_ids** | **int[]** | The requested class description IDs. | [optional] 
**class_ids** | **int[]** | The requested class IDs. | [optional] 
**staff_ids** | **int[]** | The requested IDs of the teaching staff members. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The requested start date for filtering.   &lt;br /&gt;Default: **today’s date** | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The requested end date for filtering.  &lt;br /&gt;Default: **today’s date** | [optional] 
**client_id** | **string** | The client ID of the client who is viewing this class list. Based on identity, the client may be able to see additional information, such as membership specials. | [optional] 
**program_ids** | **int[]** | A list of program IDs on which to base the search. | [optional] 
**session_type_ids** | **int[]** | A list of session type IDs on which to base the search. | [optional] 
**location_ids** | **int[]** | A list of location IDs on which to base the search. | [optional] 
**semester_ids** | **int[]** | A list of semester IDs on which to base the search. | [optional] 
**hide_canceled_classes** | **bool** | When &#x60;true&#x60;, canceled classes are removed from the response.&lt;br /&gt;  When &#x60;false&#x60;, canceled classes are included in the response.&lt;br /&gt;  Default: **false** | [optional] 
**scheduling_window** | **bool** | When &#x60;true&#x60;, classes outside scheduling window are removed from the response.&lt;br /&gt;  When &#x60;false&#x60;, classes are included in the response, regardless of the scheduling window.&lt;br /&gt;  Default: **false** | [optional] 
**last_modified_date** | [**\DateTime**](\DateTime.md) | When included in the request, only records modified on or after the &#x60;LastModifiedDate&#x60; specified are included in the response. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


