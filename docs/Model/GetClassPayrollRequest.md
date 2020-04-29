# GetClassPayrollRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**staff_id** | **int** | A list of staff IDs that you want to retrieve payroll information for. If you do not supply a &#x60;StaffId&#x60;, all active staff members return, ordered by staff ID. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The beginning of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.  * If you do not supply a &#x60;StartDateTime&#x60;, data returns for the seven days prior to the &#x60;EndDateTime&#x60; that you supply.  * If you do not supply either a &#x60;StartDateTime&#x60; or an &#x60;EndDateTime&#x60;, the data returns for seven days prior to today’s date. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end of the date range for the payroll information to be returned. The maximum allowed date range is 14 days.&lt;br /&gt;  Default: **Today’s date**  * If you do not supply an &#x60;EndDateTime&#x60;, the data returns for the period from the &#x60;StartDateTime&#x60; that you supply to today’s date.  * If you do not supply an &#x60;EndDateTime&#x60; or a &#x60;StartDateTime&#x60;, data returns for the seven days prior to today’s date. | [optional] 
**include_inactive_staff** | **bool** | When &#x60;true&#x60;, payroll information returns for both active and inactive staff members.&lt;br /&gt;  Default: **false** | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


