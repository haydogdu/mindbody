# PurchaseContractRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test** | **bool** | When &#x60;true&#x60;, the Public API validates input information, but does not commit it, so no client data is affected.&lt;br /&gt;  When &#x60;false&#x60; or omitted, the transaction is committed, and client data is affected.&lt;br /&gt;  Default: **false** | [optional] 
**location_id** | **int** | The ID of the location where the client is purchasing the contract; used for AutoPays. | [optional] 
**client_id** | **string** | The ID of the client. Note that this is not the same as the client’s unique ID. | 
**contract_id** | **int** | The ID of the contract being purchased. | 
**start_date** | [**\DateTime**](\DateTime.md) | The date that the contract starts.&lt;br /&gt;  Default: **today’s date** | [optional] 
**first_payment_occurs** | **string** | The date on which the first payment is to occur. Possible values:  * Instant  * &#x60;StartDate&#x60; | [optional] 
**client_signature** | **string** | A representation of the client’s signature. This value can take the form of Base64-encoded byte array. The file type should be PNG. The picture of the client’s signature is uploaded and viewable from the Client Documents page in the Core Business Mode software. The title of the document is:&lt;br /&gt;  clientContractSignature-{uniquePurchasedClientContractID}-{contractName}-{contractStartDate}.{fileType} | [optional] 
**promotion_code** | **string** | A promotion code, if one applies. Promotion codes are applied to items that are both marked as pay now in a contract and are discounted by the promotion code. If a pay now item is an autopay item, its autopay price is the price at the time of checkout, so, if a promotion code was applied, all autopays are scheduled using that discounted price. | [optional] 
**credit_card_info** | [**\Swagger\Client\Model\CreditCardInfo**](CreditCardInfo.md) | Contains credit card payment information.&lt;br /&gt;  Either &#x60;StoredCardInfo&#x60; or &#x60;CreditCardInfo&#x60; is required; the other becomes optional. | [optional] 
**stored_card_info** | [**\Swagger\Client\Model\StoredCardInfo**](StoredCardInfo.md) | Contains information about the stored credit card payment.&lt;br /&gt;  Either &#x60;CreditCardInfo&#x60; or &#x60;StoredCardInfo&#x60; is required; the other becomes optional. | [optional] 
**send_notifications** | **bool** | When &#x60;true&#x60;, indicates that email and SMS notifications should be sent to the client after purchase.&lt;br /&gt;  Default: **true** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


