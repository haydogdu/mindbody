# Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The contract’s ID at the subscriber’s business. | [optional] 
**name** | **string** | The name of the contract. | [optional] 
**description** | **string** | A description of the contract. | [optional] 
**assigns_membership_id** | **int** | The ID of the membership that was assigned to the client when the client signed up for a contract. | [optional] 
**assigns_membership_name** | **string** | The name of the membership that was assigned to the client when the client signed up for this contract. | [optional] 
**sold_online** | **bool** | When &#x60;true&#x60;, indicates that this membership is intended to be shown to clients in client experiences.&lt;br /&gt;  When &#x60;false&#x60;, this contract should only be shown to staff members. | [optional] 
**contract_items** | [**\Swagger\Client\Model\ContractItem[]**](ContractItem.md) | Contains information about the items in the contract. | [optional] 
**intro_offer** | **string** | Defines whether this contract is treated as an introductory offer. If this is an introductory offer, then clients are always charged a set number of times rather than month to month, using their AutoPays. Possible values are:  * None  * NewConsumer  * NewAndReturningConsumer | [optional] 
**autopay_schedule** | [**\Swagger\Client\Model\AutopaySchedule**](AutopaySchedule.md) | Contains information about the AutoPay schedule. This parameter is null if &#x60;AutopayTriggerType&#x60; has a value of &#x60;PricingOptionRunsOutOrExpires&#x60;. | [optional] 
**number_of_autopays** | **int** | The number of times that the AutoPay is to be run. This value is null if &#x60;FrequencyType&#x60; is &#x60;MonthToMonth&#x60;. | [optional] 
**autopay_trigger_type** | **string** | Defines whether the AutoPay, if applicable to this contract, runs on a set schedule or when the pricing option runs out or expires. Possible values are:  * OnSetSchedule  * PricingOptionRunsOutOrExpires | [optional] 
**action_upon_completion_of_autopays** | **string** | The renewal action to be taken when this AutoPay is completed. Possible values are:  * ContractExpires  * ContractAutomaticallyRenews | [optional] 
**clients_charged_on** | **string** | The value that indicates when clients are charged. Possible values are:  * OnSaleDate  * FirstOfTheMonth  * FifteenthOfTheMonth  * LastDayOfTheMonth  * FirstOrFifteenthOfTheMonth  * FirstOrSixteenthOfTheMonth  * FifteenthOrEndOfTheMonth  * SpecificDate | [optional] 
**clients_charged_on_specific_date** | [**\DateTime**](\DateTime.md) | If &#x60;ClientsChargedOn&#x60; is defined as a specific date, this property holds the value of that date. Otherwise, this property is null. | [optional] 
**discount_amount** | **double** | The calculated discount applied to the items in this contract. | [optional] 
**deposit_amount** | **double** | The amount of the deposit required for this contract. | [optional] 
**first_autopay_free** | **bool** | When &#x60;true&#x60;, indicates that the first payment for the AutoPay is free. | [optional] 
**last_autopay_free** | **bool** | When &#x60;true&#x60;, indicates that the last payment for the AutoPay is free. | [optional] 
**client_terminate_online** | **bool** | When &#x60;true&#x60;, indicates that the client can terminate this contract on the Internet. | [optional] 
**membership_type_restrictions** | [**\Swagger\Client\Model\MembershipTypeRestriction[]**](MembershipTypeRestriction.md) | Contains information about the memberships that can purchase this contract. If null, then no membership restrictions exist, and anyone can purchase the contract. | [optional] 
**location_purchase_restriction_ids** | **int[]** | The IDs of the locations where this contract may be sold. If there are no restrictions, this value is null. | [optional] 
**location_purchase_restriction_names** | **string[]** | Location names where the contract may be purchased. If this value is null, there are no restrictions. | [optional] 
**agreement_terms** | **string** | Business-defined terms and conditions for the contract. | [optional] 
**requires_electronic_confirmation** | **bool** | When &#x60;true&#x60;, clients who purchase the contract are prompted to agree to the terms of the contract the next time that they log in. | [optional] 
**autopay_enabled** | **bool** | When &#x60;true&#x60;, this contract establishes an AutoPay on the client’s account. | [optional] 
**first_payment_amount_subtotal** | **double** | The subtotal of the amount that the client is to be charged when signing up for the contract. | [optional] 
**first_payment_amount_tax** | **double** | The amount of tax that the client is to be charged when signing up for the contract. | [optional] 
**first_payment_amount_total** | **double** | The total amount that the client is to be charged when signing up for the contract. | [optional] 
**recurring_payment_amount_subtotal** | **double** | The subtotal amount that the client is to be charged on an ongoing basis. | [optional] 
**recurring_payment_amount_tax** | **double** | The amount of tax the client is to be charged on an ongoing basis. | [optional] 
**recurring_payment_amount_total** | **double** | The total amount that the client is to be charged on an ongoing basis. | [optional] 
**total_contract_amount_subtotal** | **double** | The subtotal amount that the client is to be charged over the lifespan of the contract. | [optional] 
**total_contract_amount_tax** | **double** | The total amount of tax the client is to be charged over the lifespan of the contract. | [optional] 
**total_contract_amount_total** | **double** | The total amount the client is to be charged over the lifespan of the contract. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


