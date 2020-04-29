# Swagger\Client\StaffApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**staffGetStaff**](StaffApi.md#staffGetStaff) | **GET** /public/v{version}/staff/staff | Get staff members at a site.
[**staffGetStaffPermissions**](StaffApi.md#staffGetStaffPermissions) | **GET** /public/v{version}/staff/staffpermissions | Get configured staff permissions for a staff member.


# **staffGetStaff**
> \Swagger\Client\Model\GetStaffResponse staffGetStaff($site_id, $version, $authorization, $request_filters, $request_limit, $request_location_id, $request_offset, $request_session_type_id, $request_staff_ids, $request_start_date_time)

Get staff members at a site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_filters = array("request_filters_example"); // string[] | Filters to apply to the search. Possible values are:  * StaffViewable  * AppointmentInstructor  * ClassInstructor  * Male  * Female
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | Return only staff members that are available at the specified location. You must supply a valid `SessionTypeID` and `StartDateTime` to use this parameter.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_session_type_id = 56; // int | Return only staff members that are available for the specified session type. You must supply a valid `StartDateTime` and `LocationID` to use this parameter.
$request_staff_ids = array(56); // int[] | A list of the requested staff IDs.
$request_start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return only staff members that are available at the specified date and time. You must supply a valid `SessionTypeID` and `LocationID` to use this parameter.

try {
    $result = $apiInstance->staffGetStaff($site_id, $version, $authorization, $request_filters, $request_limit, $request_location_id, $request_offset, $request_session_type_id, $request_staff_ids, $request_start_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetStaff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_filters** | [**string[]**](../Model/string.md)| Filters to apply to the search. Possible values are:  * StaffViewable  * AppointmentInstructor  * ClassInstructor  * Male  * Female | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| Return only staff members that are available at the specified location. You must supply a valid &#x60;SessionTypeID&#x60; and &#x60;StartDateTime&#x60; to use this parameter. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_session_type_id** | **int**| Return only staff members that are available for the specified session type. You must supply a valid &#x60;StartDateTime&#x60; and &#x60;LocationID&#x60; to use this parameter. | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| A list of the requested staff IDs. | [optional]
 **request_start_date_time** | **\DateTime**| Return only staff members that are available at the specified date and time. You must supply a valid &#x60;SessionTypeID&#x60; and &#x60;LocationID&#x60; to use this parameter. | [optional]

### Return type

[**\Swagger\Client\Model\GetStaffResponse**](../Model/GetStaffResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffGetStaffPermissions**
> \Swagger\Client\Model\GetStaffPermissionsResponse staffGetStaffPermissions($request_staff_id, $site_id, $version, $authorization)

Get configured staff permissions for a staff member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_staff_id = 789; // int | The ID of the staff member whose permissions you want to return.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->staffGetStaffPermissions($request_staff_id, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->staffGetStaffPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_staff_id** | **int**| The ID of the staff member whose permissions you want to return. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\GetStaffPermissionsResponse**](../Model/GetStaffPermissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

