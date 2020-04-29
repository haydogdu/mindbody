# Swagger\Client\EnrollmentApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enrollmentAddClientToEnrollment**](EnrollmentApi.md#enrollmentAddClientToEnrollment) | **POST** /public/v{version}/enrollment/addclienttoenrollment | Book a client into an enrollment.
[**enrollmentGetEnrollments**](EnrollmentApi.md#enrollmentGetEnrollments) | **GET** /public/v{version}/enrollment/enrollments | Get enrollments scheduled at a site.


# **enrollmentAddClientToEnrollment**
> \Swagger\Client\Model\ClassSchedule enrollmentAddClientToEnrollment($request, $site_id, $version, $authorization)

Book a client into an enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\AddClientToEnrollmentRequest(); // \Swagger\Client\Model\AddClientToEnrollmentRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->enrollmentAddClientToEnrollment($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentAddClientToEnrollment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddClientToEnrollmentRequest**](../Model/AddClientToEnrollmentRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\ClassSchedule**](../Model/ClassSchedule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentGetEnrollments**
> \Swagger\Client\Model\GetEnrollmentsResponse enrollmentGetEnrollments($site_id, $version, $authorization, $request_class_schedule_ids, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_session_type_ids, $request_staff_ids, $request_start_date)

Get enrollments scheduled at a site.

Returns a list of enrollments. An enrollment is a service, such as a workshop or an event, that a staff member offers to multiple students, who commit to coming to all or most of the scheduled sessions. Enrollments typically run for a limited time only.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_schedule_ids = array(56); // int[] | A list of the requested class schedule IDs. If omitted, all class schedule IDs return.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end of the date range. The response returns any active enrollments that occur on or before this day.<br />  Default: **StartDate**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | List of the IDs for the requested locations. If omitted, all location IDs return.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_program_ids = array(56); // int[] | List of the IDs for the requested programs. If omitted, all program IDs return.
$request_session_type_ids = array(56); // int[] | List of the IDs for the requested session types. If omitted, all session types IDs return.
$request_staff_ids = array(56); // int[] | List of the IDs for the requested staff IDs. If omitted, all staff IDs return.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start of the date range. The response returns any active enrollments that occur on or after this day.<br />  Default: **today’s date**

try {
    $result = $apiInstance->enrollmentGetEnrollments($site_id, $version, $authorization, $request_class_schedule_ids, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_session_type_ids, $request_staff_ids, $request_start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentGetEnrollments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_schedule_ids** | [**int[]**](../Model/int.md)| A list of the requested class schedule IDs. If omitted, all class schedule IDs return. | [optional]
 **request_end_date** | **\DateTime**| The end of the date range. The response returns any active enrollments that occur on or before this day.&lt;br /&gt;  Default: **StartDate** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| List of the IDs for the requested locations. If omitted, all location IDs return. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_program_ids** | [**int[]**](../Model/int.md)| List of the IDs for the requested programs. If omitted, all program IDs return. | [optional]
 **request_session_type_ids** | [**int[]**](../Model/int.md)| List of the IDs for the requested session types. If omitted, all session types IDs return. | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| List of the IDs for the requested staff IDs. If omitted, all staff IDs return. | [optional]
 **request_start_date** | **\DateTime**| The start of the date range. The response returns any active enrollments that occur on or after this day.&lt;br /&gt;  Default: **today’s date** | [optional]

### Return type

[**\Swagger\Client\Model\GetEnrollmentsResponse**](../Model/GetEnrollmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

