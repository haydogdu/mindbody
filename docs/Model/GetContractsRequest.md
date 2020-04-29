# GetContractsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract_ids** | **int[]** | When included, the response only contains details about the specified contract IDs. | [optional] 
**sold_online** | **bool** | When &#x60;true&#x60;, the response only contains details about contracts and AutoPay options that can be sold online.&lt;br /&gt;  When &#x60;false&#x60;, only contracts that are not intended to be sold online are returned.&lt;br /&gt;  Default: **all contracts** | [optional] 
**location_id** | **int** | The ID of the location that has the requested contracts and AutoPay options. | 
**consumer_id** | **int** | The ID of the client. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


