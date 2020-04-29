# RemoveClientFromClassRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | The RSSID of the client to remove from the specified class. | 
**class_id** | **int** | The ID of the class that you want to remove the client from. | 
**test** | **bool** | When &#x60;true&#x60;, the request ensures that its parameters are valid without affecting real data.&lt;br /&gt;  When &#x60;false&#x60;, the request performs as intended and may affect live client data.&lt;br /&gt;  Default: **false** | [optional] 
**send_email** | **bool** | When &#x60;true&#x60;, indicates that the client should be sent an email. Depending on the site and client settings, an email may or may not be sent.&lt;br /&gt;  Default: **false** | [optional] 
**late_cancel** | **bool** | When &#x60;true&#x60;, indicates that the client is to be late cancelled from the class.&lt;br /&gt;  When &#x60;false&#x60;, indicates that the client is to be early cancelled from the class.&lt;br /&gt;  Default: **false** | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


