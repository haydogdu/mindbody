# GetClientsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_i_ds** | **string[]** | The requested client IDs.  Default: **all IDs** that the authenticated user’s access level allows. | [optional] 
**search_text** | **string** | Text to use in the search. Can include FirstName, LastName, and Email. Note that user credentials must be provided. | [optional] 
**is_prospect** | **bool** | When &#x60;true&#x60;, filters the results to include only those clients marked as prospects for the business.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only those clients who are not marked prospects should be returned. | [optional] 
**last_modified_date** | [**\DateTime**](\DateTime.md) | Filters the results to include only the clients that have been modified on or after this date. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


