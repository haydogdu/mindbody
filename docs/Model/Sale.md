# Sale

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The sale ID. | [optional] 
**sale_date** | [**\DateTime**](\DateTime.md) | The date the item was sold. | [optional] 
**sale_time** | **string** | The time the item was sold. | [optional] 
**sale_date_time** | [**\DateTime**](\DateTime.md) | The date and time the item was sold. | [optional] 
**client_id** | **string** | The ID of the client who made the purchase. | [optional] 
**purchased_items** | [**\Swagger\Client\Model\PurchasedItem[]**](PurchasedItem.md) | Contains information that describes the purchased items. | [optional] 
**location_id** | **int** | The ID of the location where the sale takes place. | [optional] 
**payments** | [**\Swagger\Client\Model\SalePayment[]**](SalePayment.md) | Contains information that describes the payments that contributed to this sale. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


