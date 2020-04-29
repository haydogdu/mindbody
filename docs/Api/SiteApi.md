# Swagger\Client\SiteApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteGetActivationCode**](SiteApi.md#siteGetActivationCode) | **GET** /public/v{version}/site/activationcode | Get an activation code for a site.
[**siteGetLocations**](SiteApi.md#siteGetLocations) | **GET** /public/v{version}/site/locations | Get locations for a site.
[**siteGetPrograms**](SiteApi.md#siteGetPrograms) | **GET** /public/v{version}/site/programs | Get service categories offered at a site.
[**siteGetResources**](SiteApi.md#siteGetResources) | **GET** /public/v{version}/site/resources | Get resources used at a site.
[**siteGetSessionTypes**](SiteApi.md#siteGetSessionTypes) | **GET** /public/v{version}/site/sessiontypes | Get the session types used at a site.
[**siteGetSites**](SiteApi.md#siteGetSites) | **GET** /public/v{version}/site/sites | Get all sites that can be accessed by an API Key.


# **siteGetActivationCode**
> \Swagger\Client\Model\GetActivationCodeResponse siteGetActivationCode($version, $authorization)

Get an activation code for a site.

Before you can use this endpoint, MINDBODY must approve your developer account for live access. If you have finished testing in the sandbox and are ready to begin working with MINDBODY customers, log into your account and request to go live.    See [Accessing Business Data From MINDBODY](https://developers.mindbodyonline.com/PublicDocumentation/V6#accessing-business-data) for more information about the activation code and how to use it.    Once you are approved, this endpoint returns an activation code.This endpoint supports only one site per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->siteGetActivationCode($version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetActivationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\GetActivationCodeResponse**](../Model/GetActivationCodeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetLocations**
> \Swagger\Client\Model\GetLocationsResponse siteGetLocations($site_id, $version, $authorization, $request_limit, $request_offset)

Get locations for a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteApi(
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
    $result = $apiInstance->siteGetLocations($site_id, $version, $authorization, $request_limit, $request_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetLocations: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GetLocationsResponse**](../Model/GetLocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetPrograms**
> \Swagger\Client\Model\GetProgramsResponse siteGetPrograms($site_id, $version, $authorization, $request_limit, $request_offset, $request_online_only, $request_schedule_type)

Get service categories offered at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_online_only = true; // bool | If `true`, filters results to show only those programs that are shown online.<br />  If `false`, all programs are returned.<br />  Default: **false**
$request_schedule_type = "request_schedule_type_example"; // string | A schedule type used to filter the returned results.

try {
    $result = $apiInstance->siteGetPrograms($site_id, $version, $authorization, $request_limit, $request_offset, $request_online_only, $request_schedule_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetPrograms: ', $e->getMessage(), PHP_EOL;
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
 **request_online_only** | **bool**| If &#x60;true&#x60;, filters results to show only those programs that are shown online.&lt;br /&gt;  If &#x60;false&#x60;, all programs are returned.&lt;br /&gt;  Default: **false** | [optional]
 **request_schedule_type** | **string**| A schedule type used to filter the returned results. | [optional]

### Return type

[**\Swagger\Client\Model\GetProgramsResponse**](../Model/GetProgramsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetResources**
> \Swagger\Client\Model\GetResourcesResponse siteGetResources($site_id, $version, $authorization, $request_end_date_time, $request_limit, $request_location_id, $request_offset, $request_session_type_ids, $request_start_date_time)

Get resources used at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The time the resource ends. This parameter is ignored if `EndDateTime` or `LocationID` is not set.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | The location of the resource. This parameter is ignored if `EndDateTime` or `LocationID` is not set.<br />  Default: **all**
$request_offset = 56; // int | Page offset, defaults to 0.
$request_session_type_ids = array(56); // int[] | List of session type IDs.<br />  Default: **all**
$request_start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The time the resource starts. This parameter is ignored if `EndDateTime` or `LocationID` is not set.

try {
    $result = $apiInstance->siteGetResources($site_id, $version, $authorization, $request_end_date_time, $request_limit, $request_location_id, $request_offset, $request_session_type_ids, $request_start_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_end_date_time** | **\DateTime**| The time the resource ends. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| The location of the resource. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set.&lt;br /&gt;  Default: **all** | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_session_type_ids** | [**int[]**](../Model/int.md)| List of session type IDs.&lt;br /&gt;  Default: **all** | [optional]
 **request_start_date_time** | **\DateTime**| The time the resource starts. This parameter is ignored if &#x60;EndDateTime&#x60; or &#x60;LocationID&#x60; is not set. | [optional]

### Return type

[**\Swagger\Client\Model\GetResourcesResponse**](../Model/GetResourcesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetSessionTypes**
> \Swagger\Client\Model\GetSessionTypesResponse siteGetSessionTypes($site_id, $version, $authorization, $request_limit, $request_offset, $request_online_only, $request_program_i_ds)

Get the session types used at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_online_only = true; // bool | When `true`, indicates that only the session types that can be booked online should be returned.<br />  Default: **false**
$request_program_i_ds = array(56); // int[] | Filters results to session types that belong to one of the given program IDs. If omitted, all program IDs return.

try {
    $result = $apiInstance->siteGetSessionTypes($site_id, $version, $authorization, $request_limit, $request_offset, $request_online_only, $request_program_i_ds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSessionTypes: ', $e->getMessage(), PHP_EOL;
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
 **request_online_only** | **bool**| When &#x60;true&#x60;, indicates that only the session types that can be booked online should be returned.&lt;br /&gt;  Default: **false** | [optional]
 **request_program_i_ds** | [**int[]**](../Model/int.md)| Filters results to session types that belong to one of the given program IDs. If omitted, all program IDs return. | [optional]

### Return type

[**\Swagger\Client\Model\GetSessionTypesResponse**](../Model/GetSessionTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteGetSites**
> \Swagger\Client\Model\GetSitesResponse siteGetSites($version, $authorization, $request_limit, $request_offset, $request_site_ids)

Get all sites that can be accessed by an API Key.

Gets a list of sites that the developer has permission to view.  * Passing in no `SiteIds` returns all sites that the developer has access to.  * Passing in one `SiteIds` returns more detailed information about the specified site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_site_ids = array(56); // int[] | List of the requested site IDs. When omitted, returns all sites that the source has access to.

try {
    $result = $apiInstance->siteGetSites($version, $authorization, $request_limit, $request_offset, $request_site_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteGetSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_site_ids** | [**int[]**](../Model/int.md)| List of the requested site IDs. When omitted, returns all sites that the source has access to. | [optional]

### Return type

[**\Swagger\Client\Model\GetSitesResponse**](../Model/GetSitesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

