# UpdateContactLogRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the contact log being updated. | [optional] 
**test** | **bool** | When &#x60;true&#x60;, indicates that this is a test request and no data is inserted into the subscriber’s database.&lt;br /&gt;  When &#x60;false&#x60;, the database is updated. | [optional] 
**assigned_to_staff_id** | **int** | The ID of the staff member to whom the contact log is now being assigned. | [optional] 
**text** | **string** | The contact log’s new text. | [optional] 
**contact_name** | **string** | The name of the new person to be contacted by the assigned staff member. | [optional] 
**followup_by_date** | [**\DateTime**](\DateTime.md) | The new date by which the assigned staff member should complete this contact log. | [optional] 
**contact_method** | **string** | The new method by which the client wants to be contacted. | [optional] 
**comments** | [**\Swagger\Client\Model\UpdateContactLogComment[]**](UpdateContactLogComment.md) | Contains information about the comments being updated or added to the contact log. Comments that have an ID of &#x60;0&#x60; are added to the contact log. | [optional] 
**types** | [**\Swagger\Client\Model\UpdateContactLogType[]**](UpdateContactLogType.md) | Contains information about the contact logs types being assigned to the contact log, in addition to the contact log types that are already assigned. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


