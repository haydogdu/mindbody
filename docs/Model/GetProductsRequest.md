# GetProductsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_ids** | **string[]** | An ID filter for products. | [optional] 
**search_text** | **string** | A search filter, used for searching by term. | [optional] 
**category_ids** | **int[]** | A list of category IDs to filter by. | [optional] 
**sub_category_ids** | **int[]** | A list of subcategory IDs to filter by. | [optional] 
**sell_online** | **bool** | When &#x60;true&#x60;, only products that can be sold online are returned.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional] 
**location_id** | **int** | The location ID to use to determine the tax for the products that this request returns.&lt;br /&gt;  Default: **online store** | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


