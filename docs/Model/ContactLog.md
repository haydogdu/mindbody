# ContactLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The contact log’s ID. | [optional] 
**text** | **string** | The contact log’s body text. | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) | The local date and time when the contact log was created. | [optional] 
**followup_by_date** | [**\DateTime**](\DateTime.md) | The date by which the assigned staff member should close or follow up on this contact log. | [optional] 
**contact_method** | **string** | The method by which the client wants to be contacted. | [optional] 
**contact_name** | **string** | The name of the client to contact. | [optional] 
**client** | [**\Swagger\Client\Model\Client**](Client.md) | Information about the client to whom the contact log belongs. | [optional] 
**created_by** | [**\Swagger\Client\Model\Staff**](Staff.md) | Information about the staff member who created the contact log. | [optional] 
**assigned_to** | [**\Swagger\Client\Model\Staff**](Staff.md) | Information about the staff member to whom the contact log is assigned for follow up. | [optional] 
**comments** | [**\Swagger\Client\Model\ContactLogComment[]**](ContactLogComment.md) | The contact log’s comments. | [optional] 
**types** | [**\Swagger\Client\Model\ContactLogType[]**](ContactLogType.md) | Contains information about contact log types. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


