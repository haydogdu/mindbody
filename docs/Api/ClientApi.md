# Swagger\Client\ClientApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientAddArrival**](ClientApi.md#clientAddArrival) | **POST** /public/v{version}/client/addarrival | Add an arrival for a client.
[**clientAddClient**](ClientApi.md#clientAddClient) | **POST** /public/v{version}/client/addclient | Add a client to a site.
[**clientAddContactLog**](ClientApi.md#clientAddContactLog) | **POST** /public/v{version}/client/addcontactlog | Add a contact log to a client&#39;s account.
[**clientGetActiveClientMemberships**](ClientApi.md#clientGetActiveClientMemberships) | **GET** /public/v{version}/client/activeclientmemberships | Get a client&#39;s active memberships.
[**clientGetClientAccountBalances**](ClientApi.md#clientGetClientAccountBalances) | **GET** /public/v{version}/client/clientaccountbalances | Get account balance information for one or more client(s).
[**clientGetClientContracts**](ClientApi.md#clientGetClientContracts) | **GET** /public/v{version}/client/clientcontracts | Get contracts that a client has purchased.
[**clientGetClientFormulaNotes**](ClientApi.md#clientGetClientFormulaNotes) | **GET** /public/v{version}/client/clientformulanotes | Get a client&#39;s formula notes.
[**clientGetClientIndexes**](ClientApi.md#clientGetClientIndexes) | **GET** /public/v{version}/client/clientindexes | Get a site&#39;s configured client indexes and client index values.
[**clientGetClientPurchases**](ClientApi.md#clientGetClientPurchases) | **GET** /public/v{version}/client/clientpurchases | Get a client&#39;s purchase history.
[**clientGetClientReferralTypes**](ClientApi.md#clientGetClientReferralTypes) | **GET** /public/v{version}/client/clientreferraltypes | Get a site&#39;s configured client referral types.
[**clientGetClientServices**](ClientApi.md#clientGetClientServices) | **GET** /public/v{version}/client/clientservices | Get pricing options that a client has purchased.
[**clientGetClientVisits**](ClientApi.md#clientGetClientVisits) | **GET** /public/v{version}/client/clientvisits | Get a client&#39;s visit history.
[**clientGetClients**](ClientApi.md#clientGetClients) | **GET** /public/v{version}/client/clients | Get clients.
[**clientGetContactLogs**](ClientApi.md#clientGetContactLogs) | **GET** /public/v{version}/client/contactlogs | Get contact logs on a client&#39;s account.
[**clientGetCrossRegionalClientAssociations**](ClientApi.md#clientGetCrossRegionalClientAssociations) | **GET** /public/v{version}/client/crossregionalclientassociations | Get a client&#39;s cross regional site associations.
[**clientGetCustomClientFields**](ClientApi.md#clientGetCustomClientFields) | **GET** /public/v{version}/client/customclientfields | Get a site&#39;s configured custom client fields.
[**clientGetRequiredClientFields**](ClientApi.md#clientGetRequiredClientFields) | **GET** /public/v{version}/client/requiredclientfields | Get client required fields for a site.
[**clientSendPasswordResetEmail**](ClientApi.md#clientSendPasswordResetEmail) | **POST** /public/v{version}/client/sendpasswordresetemail | Send a password reset email to a client.
[**clientUpdateClient**](ClientApi.md#clientUpdateClient) | **POST** /public/v{version}/client/updateclient | Update a client at a site.
[**clientUpdateClientService**](ClientApi.md#clientUpdateClientService) | **POST** /public/v{version}/client/updateclientservice | Update a client&#39;s purchase pricing option.
[**clientUpdateClientVisit**](ClientApi.md#clientUpdateClientVisit) | **POST** /public/v{version}/client/updateclientvisit | Update a client&#39;s visit.
[**clientUpdateContactLog**](ClientApi.md#clientUpdateContactLog) | **POST** /public/v{version}/client/updatecontactlog | Update a contact log on a client&#39;s account.
[**clientUploadClientDocument**](ClientApi.md#clientUploadClientDocument) | **POST** /public/v{version}/client/uploadclientdocument | Upload a document to a client&#39;s profile.
[**clientUploadClientPhoto**](ClientApi.md#clientUploadClientPhoto) | **POST** /public/v{version}/client/uploadclientphoto | Upload a profile photo to a client&#39;s profile.


# **clientAddArrival**
> \Swagger\Client\Model\AddArrivalResponse clientAddArrival($request, $site_id, $version, $authorization)

Add an arrival for a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\AddArrivalRequest(); // \Swagger\Client\Model\AddArrivalRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientAddArrival($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddArrival: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddArrivalRequest**](../Model/AddArrivalRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\AddArrivalResponse**](../Model/AddArrivalResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAddClient**
> \Swagger\Client\Model\AddClientResponse clientAddClient($request, $site_id, $version, $authorization)

Add a client to a site.

The `FirstName` and `LastName` parameters are always required in this request. All other parameters are optional, but note that any of the optional parameters could be required by a particular business, depending on how the business has configured the site settings.    Use after calling the `GetRequiredClientFields` endpoint to make sure you are collecting all required pieces of information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\AddClientRequest(); // \Swagger\Client\Model\AddClientRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientAddClient($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddClientRequest**](../Model/AddClientRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\AddClientResponse**](../Model/AddClientResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientAddContactLog**
> \Swagger\Client\Model\ContactLog clientAddContactLog($request, $site_id, $version, $authorization)

Add a contact log to a client's account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\AddContactLogRequest(); // \Swagger\Client\Model\AddContactLogRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientAddContactLog($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientAddContactLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddContactLogRequest**](../Model/AddContactLogRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\ContactLog**](../Model/ContactLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetActiveClientMemberships**
> \Swagger\Client\Model\GetActiveClientMembershipsResponse clientGetActiveClientMemberships($request_client_id, $site_id, $version, $authorization, $request_limit, $request_location_id, $request_offset)

Get a client's active memberships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_id = "request_client_id_example"; // string | The ID of the client whose membership was requested.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | The ID of the location where the requested membership was created.
$request_offset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetActiveClientMemberships($request_client_id, $site_id, $version, $authorization, $request_limit, $request_location_id, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetActiveClientMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_id** | **string**| The ID of the client whose membership was requested. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| The ID of the location where the requested membership was created. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\GetActiveClientMembershipsResponse**](../Model/GetActiveClientMembershipsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientAccountBalances**
> \Swagger\Client\Model\GetClientAccountBalancesResponse clientGetClientAccountBalances($request_client_ids, $site_id, $version, $authorization, $request_balance_date, $request_class_id, $request_limit, $request_offset)

Get account balance information for one or more client(s).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_ids = array("request_client_ids_example"); // string[] | The list of clients IDs for which you want account balances.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_balance_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date you want a balance relative to.   Default: **the current date**
$request_class_id = 56; // int | The class ID of the event for which you want a balance.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientAccountBalances($request_client_ids, $site_id, $version, $authorization, $request_balance_date, $request_class_id, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientAccountBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_ids** | [**string[]**](../Model/string.md)| The list of clients IDs for which you want account balances. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_balance_date** | **\DateTime**| The date you want a balance relative to.   Default: **the current date** | [optional]
 **request_class_id** | **int**| The class ID of the event for which you want a balance. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientAccountBalancesResponse**](../Model/GetClientAccountBalancesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientContracts**
> \Swagger\Client\Model\GetClientContractsResponse clientGetClientContracts($request_client_id, $site_id, $version, $authorization, $request_client_associated_sites_offset, $request_cross_regional_lookup, $request_limit, $request_offset)

Get contracts that a client has purchased.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_id = "request_client_id_example"; // string | The ID of the client.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_client_associated_sites_offset = 56; // int | Determines how many sites are skipped over when retrieving a client’s cross regional contracts. Used when a client ID is linked to more than ten sites in an organization. Only a maximum of ten site databases are queried when this call is made and `CrossRegionalLookup` is set to `true`. To change which sites are queried, change this offset value.  Default: **0**
$request_cross_regional_lookup = true; // bool | When `true`, indicates that the requesting client’s cross regional contracts are returned, if any.<br />  When `false`, indicates that cross regional contracts are not returned.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientContracts($request_client_id, $site_id, $version, $authorization, $request_client_associated_sites_offset, $request_cross_regional_lookup, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_id** | **string**| The ID of the client. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_client_associated_sites_offset** | **int**| Determines how many sites are skipped over when retrieving a client’s cross regional contracts. Used when a client ID is linked to more than ten sites in an organization. Only a maximum of ten site databases are queried when this call is made and &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;. To change which sites are queried, change this offset value.  Default: **0** | [optional]
 **request_cross_regional_lookup** | **bool**| When &#x60;true&#x60;, indicates that the requesting client’s cross regional contracts are returned, if any.&lt;br /&gt;  When &#x60;false&#x60;, indicates that cross regional contracts are not returned. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientContractsResponse**](../Model/GetClientContractsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientFormulaNotes**
> \Swagger\Client\Model\GetClientFormulaNotesResponse clientGetClientFormulaNotes($site_id, $version, $authorization, $request_appointment_id, $request_client_id, $request_limit, $request_offset)

Get a client's formula notes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_appointment_id = 789; // int | The appointment ID of the appointment that the formula notes are related to.
$request_client_id = "request_client_id_example"; // string | The client ID of the client whose formula notes are being requested.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetClientFormulaNotes($site_id, $version, $authorization, $request_appointment_id, $request_client_id, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientFormulaNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_appointment_id** | **int**| The appointment ID of the appointment that the formula notes are related to. | [optional]
 **request_client_id** | **string**| The client ID of the client whose formula notes are being requested. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientFormulaNotesResponse**](../Model/GetClientFormulaNotesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientIndexes**
> \Swagger\Client\Model\GetClientIndexesResponse clientGetClientIndexes($site_id, $version, $authorization, $request_required_only)

Get a site's configured client indexes and client index values.

Client indexes are used to analyze client demographics. A business owner can set up different categories with sets of values which they can assign to each client. Client indexes are used in client searches, for tagging clients so that the owner can send mass emails to similar groups, and for many reports.    For more information, see Client Indexes and [Client Index Values (video tutorial)](https://support.mindbodyonline.com/s/article/203261653-Client-indexes-and-client-index-values-video-tutorial?language=en_USclient).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_required_only = true; // bool | When `true`, filters the results to only indexes that are required on creation.<br />  When `false` or omitted, returns all of the client indexes.

try {
    $result = $apiInstance->clientGetClientIndexes($site_id, $version, $authorization, $request_required_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientIndexes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_required_only** | **bool**| When &#x60;true&#x60;, filters the results to only indexes that are required on creation.&lt;br /&gt;  When &#x60;false&#x60; or omitted, returns all of the client indexes. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientIndexesResponse**](../Model/GetClientIndexesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientPurchases**
> \Swagger\Client\Model\GetClientPurchasesResponse clientGetClientPurchases($request_client_id, $site_id, $version, $authorization, $request_end_date, $request_limit, $request_offset, $request_sale_id, $request_start_date)

Get a client's purchase history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_id = "request_client_id_example"; // string | The ID of the client you are querying for purchases.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to purchases made before this timestamp.<br />  Default: **end of today**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_sale_id = 56; // int | Filters results to the single record associated with this ID.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to purchases made on or after this timestamp.<br />  Default: **now**

try {
    $result = $apiInstance->clientGetClientPurchases($request_client_id, $site_id, $version, $authorization, $request_end_date, $request_limit, $request_offset, $request_sale_id, $request_start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_id** | **string**| The ID of the client you are querying for purchases. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_end_date** | **\DateTime**| Filters results to purchases made before this timestamp.&lt;br /&gt;  Default: **end of today** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_sale_id** | **int**| Filters results to the single record associated with this ID. | [optional]
 **request_start_date** | **\DateTime**| Filters results to purchases made on or after this timestamp.&lt;br /&gt;  Default: **now** | [optional]

### Return type

[**\Swagger\Client\Model\GetClientPurchasesResponse**](../Model/GetClientPurchasesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientReferralTypes**
> \Swagger\Client\Model\GetClientReferralTypesResponse clientGetClientReferralTypes($site_id, $version, $authorization, $request_include_inactive)

Get a site's configured client referral types.

Gets a list of referral types. Referral types are options that new clients can choose to identify how they learned about the business. Referral types are typically used for the sign-up process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_include_inactive = true; // bool | When `true`, filters the results to include subtypes and inactive referral types.<br />  When `false`, includes no subtypes and only active types.

try {
    $result = $apiInstance->clientGetClientReferralTypes($site_id, $version, $authorization, $request_include_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientReferralTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_include_inactive** | **bool**| When &#x60;true&#x60;, filters the results to include subtypes and inactive referral types.&lt;br /&gt;  When &#x60;false&#x60;, includes no subtypes and only active types. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientReferralTypesResponse**](../Model/GetClientReferralTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientServices**
> \Swagger\Client\Model\GetClientServicesResponse clientGetClientServices($request_client_id, $site_id, $version, $authorization, $request_class_id, $request_client_associated_sites_offset, $request_cross_regional_lookup, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_session_type_id, $request_show_active_only, $request_start_date, $request_visit_count)

Get pricing options that a client has purchased.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_id = "request_client_id_example"; // string | The ID of the client to query. The results are a list of pricing options that the client has purchased. Note that “service” and “pricing option” are synonymous in this section of the documentation.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_id = 56; // int | Filters results to only those pricing options that can be used to pay for this class.
$request_client_associated_sites_offset = 56; // int | Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that you must always have `CrossRegionalLookup` set to `true` to use this parameter.<br />  Default: **0**    For example, if a client is associated with 25 sites, you need to call `GetClientServices` three times, as follows:  * Use `GET CrossRegionalClientAssociations` to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit `ClientAssociatedSitesOffset` or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set `ClientAssociatedSitesOffset` to 10 to return the client pricing options from sites 11-20  * Set `ClientAssociatedSitesOffset` to 20 to return the client pricing options from sites 21-25
$request_cross_regional_lookup = true; // bool | Used to retrieve a client’s pricing options from multiple sites within an organization. When included and set to `true`, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use `ClientAssociatedSitesOffset` as many times as needed to search the additional sites with which the client is associated. You can use the `CrossRegionalClientAssociations` value from `GET CrossRegionalClientAssociations` to determine how many sites the client is associated with. Note that a `SiteID` is returned and populated in the `ClientServices` response when `CrossRegionalLookup` is set to `true`.  Default: **false**
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to pricing options that are valid on or before this date.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | Filters results to pricing options that can be used at the listed location IDs.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_program_ids = array(56); // int[] | Filters results to pricing options that belong to one of the given program IDs.
$request_session_type_id = 56; // int | Filters results to pricing options that will pay for the given session type ID. Use this to find pricing options that will pay for a specific appointment type.
$request_show_active_only = true; // bool | When `true`, includes active services only.  Default: **false**
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to pricing options that are valid on or after this date.
$request_visit_count = 56; // int | A filter on the minimum number of visits a service can pay for.

try {
    $result = $apiInstance->clientGetClientServices($request_client_id, $site_id, $version, $authorization, $request_class_id, $request_client_associated_sites_offset, $request_cross_regional_lookup, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_session_type_id, $request_show_active_only, $request_start_date, $request_visit_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_id** | **string**| The ID of the client to query. The results are a list of pricing options that the client has purchased. Note that “service” and “pricing option” are synonymous in this section of the documentation. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_id** | **int**| Filters results to only those pricing options that can be used to pay for this class. | [optional]
 **request_client_associated_sites_offset** | **int**| Used to retrieve a client’s pricing options from multiple sites within an organization when the client is associated with more than ten sites. To change which ten sites are searched, change this offset value. A value of 0 means that no sites are skipped and the first ten sites are returned. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that you must always have &#x60;CrossRegionalLookup&#x60; set to &#x60;true&#x60; to use this parameter.&lt;br /&gt;  Default: **0**    For example, if a client is associated with 25 sites, you need to call &#x60;GetClientServices&#x60; three times, as follows:  * Use &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites a client is associated with, which tells you how many additional calls you need to make.  * Either omit &#x60;ClientAssociatedSitesOffset&#x60; or set it to 0 to return the client’s services (pricing options) from sites 1-10.  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 10 to return the client pricing options from sites 11-20  * Set &#x60;ClientAssociatedSitesOffset&#x60; to 20 to return the client pricing options from sites 21-25 | [optional]
 **request_cross_regional_lookup** | **bool**| Used to retrieve a client’s pricing options from multiple sites within an organization. When included and set to &#x60;true&#x60;, it searches a maximum of ten sites with which this client is associated. When a client is associated with more than ten sites, use &#x60;ClientAssociatedSitesOffset&#x60; as many times as needed to search the additional sites with which the client is associated. You can use the &#x60;CrossRegionalClientAssociations&#x60; value from &#x60;GET CrossRegionalClientAssociations&#x60; to determine how many sites the client is associated with. Note that a &#x60;SiteID&#x60; is returned and populated in the &#x60;ClientServices&#x60; response when &#x60;CrossRegionalLookup&#x60; is set to &#x60;true&#x60;.  Default: **false** | [optional]
 **request_end_date** | **\DateTime**| Filters results to pricing options that are valid on or before this date. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| Filters results to pricing options that can be used at the listed location IDs. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_program_ids** | [**int[]**](../Model/int.md)| Filters results to pricing options that belong to one of the given program IDs. | [optional]
 **request_session_type_id** | **int**| Filters results to pricing options that will pay for the given session type ID. Use this to find pricing options that will pay for a specific appointment type. | [optional]
 **request_show_active_only** | **bool**| When &#x60;true&#x60;, includes active services only.  Default: **false** | [optional]
 **request_start_date** | **\DateTime**| Filters results to pricing options that are valid on or after this date. | [optional]
 **request_visit_count** | **int**| A filter on the minimum number of visits a service can pay for. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientServicesResponse**](../Model/GetClientServicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClientVisits**
> \Swagger\Client\Model\GetClientVisitsResponse clientGetClientVisits($request_client_id, $site_id, $version, $authorization, $request_client_associated_sites_offset, $request_cross_regional_lookup, $request_end_date, $request_limit, $request_offset, $request_start_date, $request_unpaids_only)

Get a client's visit history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_id = "request_client_id_example"; // string | The ID of the requested client.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_client_associated_sites_offset = 56; // int | The number of sites to skip when returning the site associated with a client.
$request_cross_regional_lookup = true; // bool | When `true`, indicates that past and scheduled client visits across all sites in the region are returned.<br />  When `false`, indicates that only visits at the current site are returned.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date past which class visits are not returned.  Default: **today’s date**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date before which class visits are not returned.  Default: **the end date**
$request_unpaids_only = true; // bool | When `true`, indicates that only visits that have not been paid for are returned.<br />  When `false`, indicates that all visits are returned, regardless of whether they have been paid for.<br />  Default: **false**

try {
    $result = $apiInstance->clientGetClientVisits($request_client_id, $site_id, $version, $authorization, $request_client_associated_sites_offset, $request_cross_regional_lookup, $request_end_date, $request_limit, $request_offset, $request_start_date, $request_unpaids_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClientVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_id** | **string**| The ID of the requested client. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_client_associated_sites_offset** | **int**| The number of sites to skip when returning the site associated with a client. | [optional]
 **request_cross_regional_lookup** | **bool**| When &#x60;true&#x60;, indicates that past and scheduled client visits across all sites in the region are returned.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only visits at the current site are returned. | [optional]
 **request_end_date** | **\DateTime**| The date past which class visits are not returned.  Default: **today’s date** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_start_date** | **\DateTime**| The date before which class visits are not returned.  Default: **the end date** | [optional]
 **request_unpaids_only** | **bool**| When &#x60;true&#x60;, indicates that only visits that have not been paid for are returned.&lt;br /&gt;  When &#x60;false&#x60;, indicates that all visits are returned, regardless of whether they have been paid for.&lt;br /&gt;  Default: **false** | [optional]

### Return type

[**\Swagger\Client\Model\GetClientVisitsResponse**](../Model/GetClientVisitsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetClients**
> \Swagger\Client\Model\GetClientsResponse clientGetClients($site_id, $version, $authorization, $request_client_i_ds, $request_is_prospect, $request_last_modified_date, $request_limit, $request_offset, $request_search_text)

Get clients.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_client_i_ds = array("request_client_i_ds_example"); // string[] | The requested client IDs.  Default: **all IDs** that the authenticated user’s access level allows.
$request_is_prospect = true; // bool | When `true`, filters the results to include only those clients marked as prospects for the business.<br />  When `false`, indicates that only those clients who are not marked prospects should be returned.
$request_last_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to include only the clients that have been modified on or after this date.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_search_text = "request_search_text_example"; // string | Text to use in the search. Can include FirstName, LastName, and Email. Note that user credentials must be provided.

try {
    $result = $apiInstance->clientGetClients($site_id, $version, $authorization, $request_client_i_ds, $request_is_prospect, $request_last_modified_date, $request_limit, $request_offset, $request_search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_client_i_ds** | [**string[]**](../Model/string.md)| The requested client IDs.  Default: **all IDs** that the authenticated user’s access level allows. | [optional]
 **request_is_prospect** | **bool**| When &#x60;true&#x60;, filters the results to include only those clients marked as prospects for the business.&lt;br /&gt;  When &#x60;false&#x60;, indicates that only those clients who are not marked prospects should be returned. | [optional]
 **request_last_modified_date** | **\DateTime**| Filters the results to include only the clients that have been modified on or after this date. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_search_text** | **string**| Text to use in the search. Can include FirstName, LastName, and Email. Note that user credentials must be provided. | [optional]

### Return type

[**\Swagger\Client\Model\GetClientsResponse**](../Model/GetClientsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetContactLogs**
> \Swagger\Client\Model\GetContactLogsResponse clientGetContactLogs($request_client_id, $site_id, $version, $authorization, $request_end_date, $request_limit, $request_offset, $request_show_system_generated, $request_staff_ids, $request_start_date, $request_subtype_ids, $request_type_ids)

Get contact logs on a client's account.

This endpoint contains a variety of filters that can return not just all contact logs, but also system-generated contact logs, contact logs assigned to specific staff members, and contact logs of specific types or subtypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_client_id = "request_client_id_example"; // string | The ID of the client whose contact logs are being requested.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to contact logs created before this date.<br />  Default: **the start date**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_show_system_generated = true; // bool | When `true`, system-generated contact logs are returned in the results.<br />  Default: **false**
$request_staff_ids = array(56); // int[] | Filters the results to return contact logs assigned to one or more staff IDs.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to contact logs created on or after this date.<br />  Default: **the current date**
$request_subtype_ids = array(56); // int[] | Filters the results to contact logs assigned one or more of these subtype IDs.
$request_type_ids = array(56); // int[] | Filters the results to contact logs assigned one or more of these type IDs.

try {
    $result = $apiInstance->clientGetContactLogs($request_client_id, $site_id, $version, $authorization, $request_end_date, $request_limit, $request_offset, $request_show_system_generated, $request_staff_ids, $request_start_date, $request_subtype_ids, $request_type_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetContactLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_client_id** | **string**| The ID of the client whose contact logs are being requested. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_end_date** | **\DateTime**| Filters the results to contact logs created before this date.&lt;br /&gt;  Default: **the start date** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_show_system_generated** | **bool**| When &#x60;true&#x60;, system-generated contact logs are returned in the results.&lt;br /&gt;  Default: **false** | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| Filters the results to return contact logs assigned to one or more staff IDs. | [optional]
 **request_start_date** | **\DateTime**| Filters the results to contact logs created on or after this date.&lt;br /&gt;  Default: **the current date** | [optional]
 **request_subtype_ids** | [**int[]**](../Model/int.md)| Filters the results to contact logs assigned one or more of these subtype IDs. | [optional]
 **request_type_ids** | [**int[]**](../Model/int.md)| Filters the results to contact logs assigned one or more of these type IDs. | [optional]

### Return type

[**\Swagger\Client\Model\GetContactLogsResponse**](../Model/GetContactLogsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetCrossRegionalClientAssociations**
> \Swagger\Client\Model\GetCrossRegionalClientAssociationsResponse clientGetCrossRegionalClientAssociations($site_id, $version, $authorization, $request_client_id, $request_email, $request_limit, $request_offset)

Get a client's cross regional site associations.

Returns a list of sites that a particular client ID (also referred to as an RSSID) or a client email address is associated with in a cross-regional organization. Either the `ClientID` or `Email` parameter is required. If both are provided, the `ClientID` is used.    Use this endpoint to retrieve information for other Public API endpoints, about the same client at multiple sites within an organization. To use this endpoint, your developer account must have been granted permission to the site’s entire organization.    Note that this endpoint does not work on the Developer Sandbox site, as it is not set up for cross-regional use cases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_client_id = "request_client_id_example"; // string | Looks up the cross regional associations by the client’s ID. Either `ClientId` or `Email` must be provided. If both are provided, the `ClientId` is used by default.
$request_email = "request_email_example"; // string | Looks up the cross regional associations by the client’s email address. Either `ClientId` or `Email` must be provided. If both are provided, the `ClientId` is used by default.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.

try {
    $result = $apiInstance->clientGetCrossRegionalClientAssociations($site_id, $version, $authorization, $request_client_id, $request_email, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetCrossRegionalClientAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_client_id** | **string**| Looks up the cross regional associations by the client’s ID. Either &#x60;ClientId&#x60; or &#x60;Email&#x60; must be provided. If both are provided, the &#x60;ClientId&#x60; is used by default. | [optional]
 **request_email** | **string**| Looks up the cross regional associations by the client’s email address. Either &#x60;ClientId&#x60; or &#x60;Email&#x60; must be provided. If both are provided, the &#x60;ClientId&#x60; is used by default. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]

### Return type

[**\Swagger\Client\Model\GetCrossRegionalClientAssociationsResponse**](../Model/GetCrossRegionalClientAssociationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetCustomClientFields**
> \Swagger\Client\Model\GetCustomClientFieldsResponse clientGetCustomClientFields($site_id, $version, $authorization, $request_limit, $request_offset)

Get a site's configured custom client fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
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
    $result = $apiInstance->clientGetCustomClientFields($site_id, $version, $authorization, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetCustomClientFields: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GetCustomClientFieldsResponse**](../Model/GetCustomClientFieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientGetRequiredClientFields**
> \Swagger\Client\Model\GetRequiredClientFieldsResponse clientGetRequiredClientFields($site_id, $version, $authorization)

Get client required fields for a site.

Gets the list of fields that a new client has to fill out in business mode, specifically for the sign-up process. `AddClient` and `UpdateClient` validate against these fields.    This endpoint has no query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientGetRequiredClientFields($site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGetRequiredClientFields: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GetRequiredClientFieldsResponse**](../Model/GetRequiredClientFieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSendPasswordResetEmail**
> object clientSendPasswordResetEmail($request, $site_id, $version, $authorization)

Send a password reset email to a client.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\SendPasswordResetEmailRequest(); // \Swagger\Client\Model\SendPasswordResetEmailRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientSendPasswordResetEmail($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientSendPasswordResetEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SendPasswordResetEmailRequest**](../Model/SendPasswordResetEmailRequest.md)|  |
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

# **clientUpdateClient**
> \Swagger\Client\Model\UpdateClientResponse clientUpdateClient($request, $site_id, $version, $authorization)

Update a client at a site.

Updates an existing client for a specific subscriber. Use this endpoint as follows:  * If you need to update the `ReferredBy` parameter, use this endpoint after calling `GET ClientReferralTypes`.  * When updating a client’s home location, use after calling `GET Locations`.  * If you are updating a client’s stored credit card, use after calling `GET AcceptedCardTypes` so that you can make sure the card is a type that is accepted at the subscriber.  If this endpoint is used on a cross-regional site, passing in a client’s RSSID and email address creates a cross-regional link. This means that the client is created in cross-regional sites where the client does not exist and `GET CrossRegionalClientAssociations` returns all appropriate cross-regional sites. When `CrossRegionalUpdate` is omitted or set to `true`, the client’s updated information is propagated to all of the region’s sites. If `CrossRegionalUpdate` is set to `false`, only the local client is updated.    Note that the following items cannot be updated for a cross-regional client:  * `ClientIndexes`  * `ClientRelationships`  * `CustomClientFields`  * `SalesReps`  * `SendAccountEmails`  * `SendAccountTexts`  * `SendPromotionalEmails`  * `SendPromotionalTexts`  * `SendScheduleEmails`  * `SendScheduleTexts`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UpdateClientRequest(); // \Swagger\Client\Model\UpdateClientRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientUpdateClient($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UpdateClientRequest**](../Model/UpdateClientRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\UpdateClientResponse**](../Model/UpdateClientResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClientService**
> \Swagger\Client\Model\UpdateClientServiceResponse clientUpdateClientService($request, $site_id, $version, $authorization)

Update a client's purchase pricing option.

Updates the active date and/or expiration date of a client pricing option. This request requires staff user credentials. If the active date is modified, the expiration date is also modified accordingly. If the expiration date is modified, the active date is unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UpdateClientServiceRequest(); // \Swagger\Client\Model\UpdateClientServiceRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientUpdateClientService($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClientService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UpdateClientServiceRequest**](../Model/UpdateClientServiceRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\UpdateClientServiceResponse**](../Model/UpdateClientServiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateClientVisit**
> \Swagger\Client\Model\UpdateClientVisitResponse clientUpdateClientVisit($request, $site_id, $version, $authorization)

Update a client's visit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UpdateClientVisitRequest(); // \Swagger\Client\Model\UpdateClientVisitRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientUpdateClientVisit($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateClientVisit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UpdateClientVisitRequest**](../Model/UpdateClientVisitRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\UpdateClientVisitResponse**](../Model/UpdateClientVisitResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUpdateContactLog**
> \Swagger\Client\Model\ContactLog clientUpdateContactLog($request, $site_id, $version, $authorization)

Update a contact log on a client's account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UpdateContactLogRequest(); // \Swagger\Client\Model\UpdateContactLogRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientUpdateContactLog($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUpdateContactLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UpdateContactLogRequest**](../Model/UpdateContactLogRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\ContactLog**](../Model/ContactLog.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUploadClientDocument**
> \Swagger\Client\Model\UploadClientDocumentResponse clientUploadClientDocument($request, $site_id, $version, $authorization)

Upload a document to a client's profile.

Returns a string representation of the image byte array. The maximum document size is 1MB.    The maximum size file that can be uploaded is 4 MB.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UploadClientDocumentRequest(); // \Swagger\Client\Model\UploadClientDocumentRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientUploadClientDocument($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUploadClientDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UploadClientDocumentRequest**](../Model/UploadClientDocumentRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\UploadClientDocumentResponse**](../Model/UploadClientDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientUploadClientPhoto**
> \Swagger\Client\Model\UploadClientPhotoResponse clientUploadClientPhoto($request, $site_id, $version, $authorization)

Upload a profile photo to a client's profile.

The maximum file size is 4 MB and acceptable file types are:  * bmp  * jpeg  * gif  * tiff  * png

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UploadClientPhotoRequest(); // \Swagger\Client\Model\UploadClientPhotoRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->clientUploadClientPhoto($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientUploadClientPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UploadClientPhotoRequest**](../Model/UploadClientPhotoRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\UploadClientPhotoResponse**](../Model/UploadClientPhotoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

