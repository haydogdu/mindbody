# CheckoutItemWrapper

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item** | [**\Swagger\Client\Model\CheckoutItem**](CheckoutItem.md) | Information about an item in the cart. | [optional] 
**discount_amount** | **double** | The amount the item is discounted. This parameter is ignored for packages. | [optional] 
**appointment_booking_requests** | [**\Swagger\Client\Model\CheckoutAppointmentBookingRequest[]**](CheckoutAppointmentBookingRequest.md) | A list of appointments to be booked then paid for by this item. This parameter applies only to pricing option items. | [optional] 
**enrollment_ids** | **int[]** | A list of enrollment IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**class_ids** | **int[]** | A list of class IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**course_ids** | **int[]** | A list of course IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**visit_ids** | **int[]** | A list of visit IDs that this item is to pay for. This parameter applies only to pricing option items. | [optional] 
**appointment_ids** | **int[]** | A list of appointment IDs that this item is to reconcile. | [optional] 
**id** | **int** | The item’s unique ID within the cart. | [optional] 
**quantity** | **int** | The number of this item to be purchased. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


