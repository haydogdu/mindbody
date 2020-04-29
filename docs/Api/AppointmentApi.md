# Swagger\Client\AppointmentApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentAddApppointment**](AppointmentApi.md#appointmentAddApppointment) | **POST** /public/v{version}/appointment/addappointment | Book a new appointment.
[**appointmentGetActiveSessionTimes**](AppointmentApi.md#appointmentGetActiveSessionTimes) | **GET** /public/v{version}/appointment/activesessiontimes | Get active session times.
[**appointmentGetAppointmentOptions**](AppointmentApi.md#appointmentGetAppointmentOptions) | **GET** /public/v{version}/appointment/appointmentoptions | Get appointment-related settings.
[**appointmentGetBookableItems**](AppointmentApi.md#appointmentGetBookableItems) | **GET** /public/v{version}/appointment/bookableitems | Get staff appointment availability.
[**appointmentGetScheduleItems**](AppointmentApi.md#appointmentGetScheduleItems) | **GET** /public/v{version}/appointment/scheduleitems | Get appointment schedule.
[**appointmentGetStaffAppointments**](AppointmentApi.md#appointmentGetStaffAppointments) | **GET** /public/v{version}/appointment/staffappointments | Get appointments grouped by staff member.
[**appointmentUpdateApppointment**](AppointmentApi.md#appointmentUpdateApppointment) | **POST** /public/v{version}/appointment/updateappointment | Update an existing appointment.


# **appointmentAddApppointment**
> \Swagger\Client\Model\AddAppointmentResponse appointmentAddApppointment($request, $site_id, $version, $authorization)

Book a new appointment.

To book an appointment, you must use a location ID, staff ID, client ID, session type ID, and the `StartDateTime` of the appointment. You can get most of this information using `GET BookableItems`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\AddAppointmentRequest(); // \Swagger\Client\Model\AddAppointmentRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->appointmentAddApppointment($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentAddApppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddAppointmentRequest**](../Model/AddAppointmentRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\AddAppointmentResponse**](../Model/AddAppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetActiveSessionTimes**
> \Swagger\Client\Model\GetActiveSessionTimesResponse appointmentGetActiveSessionTimes($site_id, $version, $authorization, $request_end_time, $request_limit, $request_offset, $request_schedule_type, $request_session_type_ids, $request_start_time)

Get active session times.

Returns a list of the times that can be booked for a given program schedule type. `ActiveSessionTimes` represent the scheduling increments that can be booked during the active business hours for services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_end_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to times that end on or before this time on the current date. Any date provided is ignored..  <br />Default: **23:59:59**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_schedule_type = "request_schedule_type_example"; // string | Filters on the provided the schedule type. Either `SessionTypeIds` or `ScheduleType` must be provided.
$request_session_type_ids = array(56); // int[] | Filters on the provided session type IDs. Either `SessionTypeIds` or `ScheduleType` must be provided.
$request_start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters results to times that start on or after this time on the current date. Any date provided is ignored.  <br />Default: **00:00:00**

try {
    $result = $apiInstance->appointmentGetActiveSessionTimes($site_id, $version, $authorization, $request_end_time, $request_limit, $request_offset, $request_schedule_type, $request_session_type_ids, $request_start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetActiveSessionTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_end_time** | **\DateTime**| Filters results to times that end on or before this time on the current date. Any date provided is ignored..  &lt;br /&gt;Default: **23:59:59** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_schedule_type** | **string**| Filters on the provided the schedule type. Either &#x60;SessionTypeIds&#x60; or &#x60;ScheduleType&#x60; must be provided. | [optional]
 **request_session_type_ids** | [**int[]**](../Model/int.md)| Filters on the provided session type IDs. Either &#x60;SessionTypeIds&#x60; or &#x60;ScheduleType&#x60; must be provided. | [optional]
 **request_start_time** | **\DateTime**| Filters results to times that start on or after this time on the current date. Any date provided is ignored.  &lt;br /&gt;Default: **00:00:00** | [optional]

### Return type

[**\Swagger\Client\Model\GetActiveSessionTimesResponse**](../Model/GetActiveSessionTimesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetAppointmentOptions**
> \Swagger\Client\Model\GetAppointmentOptionsResponse appointmentGetAppointmentOptions($site_id, $version, $authorization)

Get appointment-related settings.

This endpoint has no query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->appointmentGetAppointmentOptions($site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetAppointmentOptions: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GetAppointmentOptionsResponse**](../Model/GetAppointmentOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetBookableItems**
> \Swagger\Client\Model\GetBookableItemsResponse appointmentGetBookableItems($request_session_type_ids, $site_id, $version, $authorization, $request_appointment_id, $request_end_date, $request_ignore_default_session_length, $request_limit, $request_location_ids, $request_offset, $request_staff_ids, $request_start_date)

Get staff appointment availability.

Returns a list of availabilities with the information needed to book appointments. Availabilities include information such as the location and its amenities, staff members, programs, and session types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_session_type_ids = array(56); // int[] | A list of the requested session type IDs.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_appointment_id = 789; // int | If provided, filters out the appointment with this ID.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **StartDate**
$request_ignore_default_session_length = true; // bool | When `true`, availabilities that are non-default return, for example, a 30-minute availability with a 60-minute default session length.<br />  When `false`, only availabilities that have the default session length return.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | A list of the requested location IDs.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_staff_ids = array(56); // int[] | A list of the requested staff IDs.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetBookableItems($request_session_type_ids, $site_id, $version, $authorization, $request_appointment_id, $request_end_date, $request_ignore_default_session_length, $request_limit, $request_location_ids, $request_offset, $request_staff_ids, $request_start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetBookableItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_session_type_ids** | [**int[]**](../Model/int.md)| A list of the requested session type IDs. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_appointment_id** | **int**| If provided, filters out the appointment with this ID. | [optional]
 **request_end_date** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional]
 **request_ignore_default_session_length** | **bool**| When &#x60;true&#x60;, availabilities that are non-default return, for example, a 30-minute availability with a 60-minute default session length.&lt;br /&gt;  When &#x60;false&#x60;, only availabilities that have the default session length return. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| A list of the requested location IDs. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| A list of the requested staff IDs. | [optional]
 **request_start_date** | **\DateTime**| The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Swagger\Client\Model\GetBookableItemsResponse**](../Model/GetBookableItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetScheduleItems**
> \Swagger\Client\Model\GetScheduleItemsResponse appointmentGetScheduleItems($site_id, $version, $authorization, $request_end_date, $request_ignore_prep_finish_times, $request_limit, $request_location_ids, $request_offset, $request_staff_ids, $request_start_date)

Get appointment schedule.

Returns a list of schedule items, including appointments, availabilities, and unavailabilities. Unavailabilities are the times at which appointments cannot be booked, for example, on holidays or after hours when the business is closed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **today’s date**
$request_ignore_prep_finish_times = true; // bool | When `true`, appointment preparation and finish unavailabilities are not returned.   <br />Default: **false**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | A list of requested location IDs.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_staff_ids = array(56); // int[] | A list of requested staff IDs.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetScheduleItems($site_id, $version, $authorization, $request_end_date, $request_ignore_prep_finish_times, $request_limit, $request_location_ids, $request_offset, $request_staff_ids, $request_start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetScheduleItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_end_date** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]
 **request_ignore_prep_finish_times** | **bool**| When &#x60;true&#x60;, appointment preparation and finish unavailabilities are not returned.   &lt;br /&gt;Default: **false** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| A list of requested location IDs. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| A list of requested staff IDs. | [optional]
 **request_start_date** | **\DateTime**| The start date of the requested date range.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Swagger\Client\Model\GetScheduleItemsResponse**](../Model/GetScheduleItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentGetStaffAppointments**
> \Swagger\Client\Model\GetStaffAppointmentsResponse appointmentGetStaffAppointments($site_id, $version, $authorization, $request_appointment_ids, $request_client_ids, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_staff_ids, $request_start_date)

Get appointments grouped by staff member.

Returns a list of appointments by staff member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_appointment_ids = array(56); // int[] | A list of the requested appointment IDs.
$request_client_ids = array("request_client_ids_example"); // string[] | List of client IDs to be returned.
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the requested date range.   <br />Default: **StartDate**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | A list of the requested location IDs.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_staff_ids = array(56); // int[] | List of staff IDs to be returned. Use a value of zero to return all staff appointments.
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the requested date range. If omitted, the default is used.   <br />Default: **today’s date**

try {
    $result = $apiInstance->appointmentGetStaffAppointments($site_id, $version, $authorization, $request_appointment_ids, $request_client_ids, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_staff_ids, $request_start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentGetStaffAppointments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_appointment_ids** | [**int[]**](../Model/int.md)| A list of the requested appointment IDs. | [optional]
 **request_client_ids** | [**string[]**](../Model/string.md)| List of client IDs to be returned. | [optional]
 **request_end_date** | **\DateTime**| The end date of the requested date range.   &lt;br /&gt;Default: **StartDate** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| A list of the requested location IDs. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| List of staff IDs to be returned. Use a value of zero to return all staff appointments. | [optional]
 **request_start_date** | **\DateTime**| The start date of the requested date range. If omitted, the default is used.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Swagger\Client\Model\GetStaffAppointmentsResponse**](../Model/GetStaffAppointmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appointmentUpdateApppointment**
> \Swagger\Client\Model\UpdateAppointmentResponse appointmentUpdateApppointment($request, $site_id, $version, $authorization)

Update an existing appointment.

To update the information for a specific appointment, you must have a staff user token with the proper permissions. Note that you can only update the appointment’s `StartDateTime`, `EndDateTime`, `StaffId`, `Notes`, and `SessionTypeId`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AppointmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\UpdateAppointmentRequest(); // \Swagger\Client\Model\UpdateAppointmentRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->appointmentUpdateApppointment($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentUpdateApppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\UpdateAppointmentRequest**](../Model/UpdateAppointmentRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\UpdateAppointmentResponse**](../Model/UpdateAppointmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

