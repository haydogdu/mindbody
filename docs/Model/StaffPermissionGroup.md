# StaffPermissionGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**permission_group_name** | **string** | The name of the permission group. | [optional] 
**ip_restricted** | **bool** | When &#x60;true&#x60;, the staff member’s permissions are restricted to specific IP addresses.&lt;br /&gt;  When &#x60;false&#x60;, the staff member’s permissions are not restricted to specific IP addresses. | [optional] 
**allowed_permissions** | **string[]** | A list of the permissions allowed to the staff member. See [Permission Values](https://developers.mindbodyonline.com/PublicDocumentation/V6#epermission-values) for descriptions of the possible permissions. | [optional] 
**denied_permissions** | **string[]** | A list of the permissions that the staff member is not allowed to exercise. See [Permission Values](https://developers.mindbodyonline.com/PublicDocumentation/V6#epermission-values) for descriptions of the possible permissions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


