# GetClientServicesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | The ID of the client to query. The results are a list of pricing options that the client has purchased. Note that “service” and “pricing option” are synonymous in this section of the documentation. | 
**class_id** | **int** | Filters results to only those pricing options that can be used to pay for this class. | [optional] 
**program_ids** | **int[]** | Filters results to pricing options that belong to one of the given program IDs. | [optional] 
**session_type_id** | **int** | Filters results to pricing options that will pay for the given session type ID. Use this to find pricing options that will pay for a specific appointment type. | [optional] 
**location_ids** | **int[]** | Filters results to pricing options that can be used at the listed location IDs. | [optional] 
**visit_count** | **int** | A filter on the minimum number of visits a service can pay for. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Filters results to pricing options that are valid on or after this date. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Filters results to pricing options that are valid on or before this date. | [optional] 
**show_active_only** | **bool** | When &#x60;true&#x60;, includes active services only.  Default: **false** | [optional] 
**cross_regional_lookup** | **bool** | Used to retrieve a client’s pricing options from multiple sites within an organization. When included and set to &#x60;true&#x60;, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use &#x60;ClientAssociatedSitesOffset&#x60; as many times as needed to search the additional sites with which the client is associated. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that a &#x60;SiteID&#x60; is returned and populated in the &#x60;ClientServices&#x60; response when &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;.  Default: **false** | [optional] 
**client_associated_sites_offset** | **int** | Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional] 
**limit** | **int** | Number of results to include, defaults to 100 | [optional] 
**offset** | **int** | Page offset, defaults to 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


