# GetServicesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**program_ids** | **int[]** | Filters to pricing options with the specified program IDs. | [optional] 
**session_type_ids** | **int[]** | Filters to the pricing options with the specified session types IDs. | [optional] 
**service_ids** | **string[]** | Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably. | [optional] 
**class_id** | **int** | Filters to the pricing options for the specified class ID. | [optional] 
**class_schedule_id** | **int** | Filters to the pricing options for the specified class schedule ID. | [optional] 
**sell_online** | **bool** | When &#x60;true&#x60;, filters to the pricing options that can be sold online.&lt;br /&gt;  Default: **false** | [optional] 
**location_id** | **int** | When specified, for each returned pricing option, &#x60;TaxRate&#x60; and &#x60;TaxIncluded&#x60; are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the &#x60;TaxRate&#x60; is set to zero. | [optional] 
**hide_related_programs** | **bool** | When &#x60;true&#x60;, indicates that pricing options of related programs are omitted from the response.&lt;br /&gt;  Default: **false** | [optional] 
**staff_id** | **int** | Sets &#x60;Price&#x60; and &#x60;OnlinePrice&#x60; to the particular pricing of a specific staff member, if allowed by the business. | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


