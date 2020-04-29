# Liability

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement_date** | [**\DateTime**](\DateTime.md) | The date and time at which the client agreed to the liability waiver for the business. | [optional] 
**is_released** | **bool** | The client’s liability release status.&lt;br /&gt;  When &#x60;true&#x60;, indicates that the client has agreed to the liability release for the business.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client has not agreed to the liability release for the business. | [optional] 
**released_by** | **int** | An ID indicating who released liability for the client. If the client agreed to the liability waiver by signing into an account online, this value is &#x60;null&#x60;. If a staff member marked the waiver as signed on behalf of the client, it is the staff member’s ID. &#x60;0&#x60; indicates that the business owner marked the liability waiver as signed on behalf of the client. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


