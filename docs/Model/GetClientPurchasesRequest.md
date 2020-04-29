# GetClientPurchasesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | The ID of the client you are querying for purchases. | 
**start_date** | [**\DateTime**](\DateTime.md) | Filters results to purchases made on or after this timestamp.&lt;br /&gt;  Default: **now** | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Filters results to purchases made before this timestamp.&lt;br /&gt;  Default: **end of today** | [optional] 
**sale_id** | **int** | Filters results to the single record associated with this ID. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


