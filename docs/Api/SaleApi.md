# Swagger\Client\SaleApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saleCheckoutShoppingCart**](SaleApi.md#saleCheckoutShoppingCart) | **POST** /public/v{version}/sale/checkoutshoppingcart | Purchase pricing options, packages, retail products, or tips for a client.
[**saleGetAcceptedCardTypes**](SaleApi.md#saleGetAcceptedCardTypes) | **GET** /public/v{version}/sale/acceptedcardtypes | Get credit cards types that a site accepts.
[**saleGetContracts**](SaleApi.md#saleGetContracts) | **GET** /public/v{version}/sale/contracts | Get contracts available for purchase at a site.
[**saleGetCustomPaymentMethods**](SaleApi.md#saleGetCustomPaymentMethods) | **GET** /public/v{version}/sale/custompaymentmethods | Get payment methods that can be used to pay for sales at a site.
[**saleGetGiftCards**](SaleApi.md#saleGetGiftCards) | **GET** /public/v{version}/sale/giftcards | Get gift cards available for purchase at a site.
[**saleGetPackages**](SaleApi.md#saleGetPackages) | **GET** /public/v{version}/sale/packages | Get packages available for purchase at a site.
[**saleGetProducts**](SaleApi.md#saleGetProducts) | **GET** /public/v{version}/sale/products | Get retail products available for purchase at a site.
[**saleGetSales**](SaleApi.md#saleGetSales) | **GET** /public/v{version}/sale/sales | Get sales completed at a site.
[**saleGetServices**](SaleApi.md#saleGetServices) | **GET** /public/v{version}/sale/services | Get pricing options available for purchase at a site
[**salePurchaseContract**](SaleApi.md#salePurchaseContract) | **POST** /public/v{version}/sale/purchasecontract | Purchase a contract for a client.
[**salePurchaseGiftCard**](SaleApi.md#salePurchaseGiftCard) | **POST** /public/v{version}/sale/purchasegiftcard | Purchase a gift card for a client.


# **saleCheckoutShoppingCart**
> object saleCheckoutShoppingCart($request, $site_id, $version, $authorization)

Purchase pricing options, packages, retail products, or tips for a client.

This endpoint provides a wide range of functionality. For example, you can use it when a client purchases new pricing options, retail products, packages, and tips. You can also combine purchasing a new pricing option and many other functions, such as booking a client into a class, booking a new appointment for a client, enrolling a client into an enrollment or course, or reconciling an unpaid, already booked appointment or class. Use this call when a client purchases:  * a pricing option, after calling `GET Services` and choosing a specific pricing option’s ID  * a retail product, after calling `GET Products` and choosing a specific retail product’s ID  * a package, after calling `GET Packages` and choosing a specific package’s ID  * a tip to give to a staff member, after calling `GET Staff` and choosing a specific staff member ID, and the amount that the client wants to tip  The documentation provides explanations of the request body and response, as well as the cart item metadata, payment item metadata, and purchased cart items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\CheckoutShoppingCartRequest(); // \Swagger\Client\Model\CheckoutShoppingCartRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->saleCheckoutShoppingCart($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleCheckoutShoppingCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\CheckoutShoppingCartRequest**](../Model/CheckoutShoppingCartRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetAcceptedCardTypes**
> string[] saleGetAcceptedCardTypes($site_id, $version, $authorization)

Get credit cards types that a site accepts.

Gets a list of card types that the site accepts. You can also use `GET Sites` to return the Site object, which contains individual accepted card types for requested sites.    This endpoint has no query parameters.The response returns a list of strings. Possible values are:  * Visa  * MasterCard  * Discover  * AMEX

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->saleGetAcceptedCardTypes($site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetAcceptedCardTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetContracts**
> \Swagger\Client\Model\GetContractsResponse saleGetContracts($request_location_id, $site_id, $version, $authorization, $request_consumer_id, $request_contract_ids, $request_limit, $request_offset, $request_sold_online)

Get contracts available for purchase at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_location_id = 56; // int | The ID of the location that has the requested contracts and AutoPay options.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_consumer_id = 789; // int | The ID of the client.
$request_contract_ids = array(56); // int[] | When included, the response only contains details about the specified contract IDs.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_sold_online = true; // bool | When `true`, the response only contains details about contracts and AutoPay options that can be sold online.<br />  When `false`, only contracts that are not intended to be sold online are returned.<br />  Default: **all contracts**

try {
    $result = $apiInstance->saleGetContracts($request_location_id, $site_id, $version, $authorization, $request_consumer_id, $request_contract_ids, $request_limit, $request_offset, $request_sold_online);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_location_id** | **int**| The ID of the location that has the requested contracts and AutoPay options. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_consumer_id** | **int**| The ID of the client. | [optional]
 **request_contract_ids** | [**int[]**](../Model/int.md)| When included, the response only contains details about the specified contract IDs. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_sold_online** | **bool**| When &#x60;true&#x60;, the response only contains details about contracts and AutoPay options that can be sold online.&lt;br /&gt;  When &#x60;false&#x60;, only contracts that are not intended to be sold online are returned.&lt;br /&gt;  Default: **all contracts** | [optional]

### Return type

[**\Swagger\Client\Model\GetContractsResponse**](../Model/GetContractsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetCustomPaymentMethods**
> \Swagger\Client\Model\GetCustomPaymentMethodsResponse saleGetCustomPaymentMethods($site_id, $version, $authorization, $request_limit, $request_offset)

Get payment methods that can be used to pay for sales at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->saleGetCustomPaymentMethods($site_id, $version, $authorization, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetCustomPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\GetCustomPaymentMethodsResponse**](../Model/GetCustomPaymentMethodsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetGiftCards**
> \Swagger\Client\Model\GetGiftCardResponse saleGetGiftCards($site_id, $version, $authorization, $request_ids, $request_limit, $request_location_id, $request_offset, $request_sold_online)

Get gift cards available for purchase at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_ids = array(56); // int[] | Filters the results to the requested gift card IDs.<br />  Default: **all** gift cards.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | When included, returns gift cards that are sold at the provided location ID.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_sold_online = true; // bool | When `true`, only returns gift cards that are sold online.<br />  Default: **false**

try {
    $result = $apiInstance->saleGetGiftCards($site_id, $version, $authorization, $request_ids, $request_limit, $request_location_id, $request_offset, $request_sold_online);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetGiftCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_ids** | [**int[]**](../Model/int.md)| Filters the results to the requested gift card IDs.&lt;br /&gt;  Default: **all** gift cards. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| When included, returns gift cards that are sold at the provided location ID. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_sold_online** | **bool**| When &#x60;true&#x60;, only returns gift cards that are sold online.&lt;br /&gt;  Default: **false** | [optional]

### Return type

[**\Swagger\Client\Model\GetGiftCardResponse**](../Model/GetGiftCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetPackages**
> \Swagger\Client\Model\GetPackagesResponse saleGetPackages($site_id, $version, $authorization, $request_limit, $request_offset, $request_package_ids, $request_sell_online)

Get packages available for purchase at a site.

A package is typically used to combine multiple services and/or products into a single offering. Staff members can check out multiple appointments while selling the package, and can discount the items included. For example, a spa might bundle a massage, a pedicure, a manicure, a facial, and a few selected beauty products into a package.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_package_ids = array(56); // int[] | A list of the packages IDs to filter by.
$request_sell_online = true; // bool | When `true`, only returns products that can be sold online.<br />  When `false`, all products are returned.<br />  Default: **false**

try {
    $result = $apiInstance->saleGetPackages($site_id, $version, $authorization, $request_limit, $request_offset, $request_package_ids, $request_sell_online);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_package_ids** | [**int[]**](../Model/int.md)| A list of the packages IDs to filter by. | [optional]
 **request_sell_online** | **bool**| When &#x60;true&#x60;, only returns products that can be sold online.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional]

### Return type

[**\Swagger\Client\Model\GetPackagesResponse**](../Model/GetPackagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetProducts**
> \Swagger\Client\Model\GetProductsResponse saleGetProducts($site_id, $version, $authorization, $request_category_ids, $request_limit, $request_location_id, $request_offset, $request_product_ids, $request_search_text, $request_sell_online, $request_sub_category_ids)

Get retail products available for purchase at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_category_ids = array(56); // int[] | A list of category IDs to filter by.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | The location ID to use to determine the tax for the products that this request returns.<br />  Default: **online store**
$request_offset = 56; // int | Page offset, defaults to 0.
$request_product_ids = array("request_product_ids_example"); // string[] | An ID filter for products.
$request_search_text = "request_search_text_example"; // string | A search filter, used for searching by term.
$request_sell_online = true; // bool | When `true`, only products that can be sold online are returned.<br />  When `false`, all products are returned.<br />  Default: **false**
$request_sub_category_ids = array(56); // int[] | A list of subcategory IDs to filter by.

try {
    $result = $apiInstance->saleGetProducts($site_id, $version, $authorization, $request_category_ids, $request_limit, $request_location_id, $request_offset, $request_product_ids, $request_search_text, $request_sell_online, $request_sub_category_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_category_ids** | [**int[]**](../Model/int.md)| A list of category IDs to filter by. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| The location ID to use to determine the tax for the products that this request returns.&lt;br /&gt;  Default: **online store** | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_product_ids** | [**string[]**](../Model/string.md)| An ID filter for products. | [optional]
 **request_search_text** | **string**| A search filter, used for searching by term. | [optional]
 **request_sell_online** | **bool**| When &#x60;true&#x60;, only products that can be sold online are returned.&lt;br /&gt;  When &#x60;false&#x60;, all products are returned.&lt;br /&gt;  Default: **false** | [optional]
 **request_sub_category_ids** | [**int[]**](../Model/int.md)| A list of subcategory IDs to filter by. | [optional]

### Return type

[**\Swagger\Client\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetSales**
> \Swagger\Client\Model\GetSalesResponse saleGetSales($site_id, $version, $authorization)

Get sales completed at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->saleGetSales($site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetSales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\GetSalesResponse**](../Model/GetSalesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saleGetServices**
> \Swagger\Client\Model\GetServicesResponse saleGetServices($site_id, $version, $authorization, $request_class_id, $request_class_schedule_id, $request_hide_related_programs, $request_limit, $request_location_id, $request_offset, $request_program_ids, $request_sell_online, $request_service_ids, $request_session_type_ids, $request_staff_id)

Get pricing options available for purchase at a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_id = 56; // int | Filters to the pricing options for the specified class ID.
$request_class_schedule_id = 56; // int | Filters to the pricing options for the specified class schedule ID.
$request_hide_related_programs = true; // bool | When `true`, indicates that pricing options of related programs are omitted from the response.<br />  Default: **false**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | When specified, for each returned pricing option, `TaxRate` and `TaxIncluded` are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the `TaxRate` is set to zero.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_program_ids = array(56); // int[] | Filters to pricing options with the specified program IDs.
$request_sell_online = true; // bool | When `true`, filters to the pricing options that can be sold online.<br />  Default: **false**
$request_service_ids = array("request_service_ids_example"); // string[] | Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably.
$request_session_type_ids = array(56); // int[] | Filters to the pricing options with the specified session types IDs.
$request_staff_id = 789; // int | Sets `Price` and `OnlinePrice` to the particular pricing of a specific staff member, if allowed by the business.

try {
    $result = $apiInstance->saleGetServices($site_id, $version, $authorization, $request_class_id, $request_class_schedule_id, $request_hide_related_programs, $request_limit, $request_location_id, $request_offset, $request_program_ids, $request_sell_online, $request_service_ids, $request_session_type_ids, $request_staff_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->saleGetServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_id** | **int**| Filters to the pricing options for the specified class ID. | [optional]
 **request_class_schedule_id** | **int**| Filters to the pricing options for the specified class schedule ID. | [optional]
 **request_hide_related_programs** | **bool**| When &#x60;true&#x60;, indicates that pricing options of related programs are omitted from the response.&lt;br /&gt;  Default: **false** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| When specified, for each returned pricing option, &#x60;TaxRate&#x60; and &#x60;TaxIncluded&#x60; are calculated according to the specified location. Note that this does not filter results to only services provided at the given location, and for locations where Value-Added Tax (VAT) rules apply, the &#x60;TaxRate&#x60; is set to zero. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_program_ids** | [**int[]**](../Model/int.md)| Filters to pricing options with the specified program IDs. | [optional]
 **request_sell_online** | **bool**| When &#x60;true&#x60;, filters to the pricing options that can be sold online.&lt;br /&gt;  Default: **false** | [optional]
 **request_service_ids** | [**string[]**](../Model/string.md)| Filters to the pricing options with the specified IDs. In this context, service and pricing option are used interchangeably. | [optional]
 **request_session_type_ids** | [**int[]**](../Model/int.md)| Filters to the pricing options with the specified session types IDs. | [optional]
 **request_staff_id** | **int**| Sets &#x60;Price&#x60; and &#x60;OnlinePrice&#x60; to the particular pricing of a specific staff member, if allowed by the business. | [optional]

### Return type

[**\Swagger\Client\Model\GetServicesResponse**](../Model/GetServicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salePurchaseContract**
> \Swagger\Client\Model\PurchaseContractResponse salePurchaseContract($request, $site_id, $version, $authorization)

Purchase a contract for a client.

Allows a client to sign up for a contract or autopay using the information returned from the `GET Contracts` endpoint. The client can pay with a new credit card or with a stored credit card. The client must exist at the site specified before this call is made.    This endpoint allows a developer to specify whether a client pays now or pays on the `StartDate`.If you are building a client-facing experience, you should talk with the business owner to understand the owner’s policies before you give clients a choice of the two payment types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\PurchaseContractRequest(); // \Swagger\Client\Model\PurchaseContractRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->salePurchaseContract($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->salePurchaseContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PurchaseContractRequest**](../Model/PurchaseContractRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\PurchaseContractResponse**](../Model/PurchaseContractResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salePurchaseGiftCard**
> \Swagger\Client\Model\PurchaseGiftCardResponse salePurchaseGiftCard($request, $site_id, $version, $authorization)

Purchase a gift card for a client.

Allows a client to purchase a gift card from a business in a variety of designs. The card can be emailed to the recipient on a specific day, and a card title and a personal message can be added.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\PurchaseGiftCardRequest(); // \Swagger\Client\Model\PurchaseGiftCardRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->salePurchaseGiftCard($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->salePurchaseGiftCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\PurchaseGiftCardRequest**](../Model/PurchaseGiftCardRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\PurchaseGiftCardResponse**](../Model/PurchaseGiftCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

