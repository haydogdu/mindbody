# GetActiveSessionTimesResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pagination_response** | [**\Swagger\Client\Model\PaginationResponse**](PaginationResponse.md) | Contains information about the pagination used. | [optional] 
**active_session_times** | **string[]** | List of available start times for active sessions. Note the following:  * The times returned represent possibilities for scheduling a session, not necessarily currently scheduled sessions.  * The response includes either all schedule types or those filtered by supplying &#x60;ScheduleType&#x60; or &#x60;SessionTypeIds&#x60;.  * Each session has an associated schedule type, but when you supply &#x60;SessionTypeIds&#x60;, they may map to one or more of the schedule types. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


