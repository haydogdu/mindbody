# ClientService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_date** | [**\DateTime**](\DateTime.md) | The date that this pricing option became active and could be used to pay for services. | [optional] 
**count** | **int** | The number of service sessions this pricing option contained when first purchased. | [optional] 
**current** | **bool** | When &#x60;true&#x60;, there are service sessions remaining on the pricing option that can be used pay for the current session.&lt;br /&gt;  When &#x60;false&#x60;, the client cannot use this pricing option to pay for other services. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | The date when the pricing option expires and can no longer be used to pay for services, even if unused service sessions remain on the option; expressed as UTC. | [optional] 
**id** | **int** | The unique ID assigned to this pricing option. | [optional] 
**name** | **string** | The name of this pricing option. | [optional] 
**payment_date** | [**\DateTime**](\DateTime.md) | The date on which the client paid for this pricing option. | [optional] 
**program** | [**\Swagger\Client\Model\Program**](Program.md) | Contains information about the service category this service falls under. | [optional] 
**remaining** | **int** | The number of service sessions remaining in the pricing option that can still be used. | [optional] 
**site_id** | **int** | The ID of the subscriber site associated with this pricing option. | [optional] 
**action** | **string** | The action taken. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


