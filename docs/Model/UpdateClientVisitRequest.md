# UpdateClientVisitRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**visit_id** | **int** | The ID of the visit to be updated. | 
**makeup** | **bool** | When &#x60;true&#x60;, indicates that the visit is eligible to be made up. | [optional] 
**signed_in** | **bool** | When &#x60;true&#x60;, indicates that the client has signed in for the visit. | [optional] 
**execute** | **string** | The execute code used to update this visit. Possible values are:  * Cancel  * Latecancel  * Unlatecancel | [optional] 
**test** | **bool** | When &#x60;true&#x60;, indicates that test mode is enabled. When test mode is enabled, input information is validated, but not committed.&lt;br /&gt;  Default: **false** | [optional] 
**send_email** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email for cancellations. Note that email is not sent unless the client has an email address and automatic emails have been set up correctly.&lt;br /&gt;  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


