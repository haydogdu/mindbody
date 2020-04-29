# Swagger\Client\ClassApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**classAddClientToClass**](ClassApi.md#classAddClientToClass) | **POST** /public/v{version}/class/addclienttoclass | Book a client into a class.
[**classGetClassDescriptions**](ClassApi.md#classGetClassDescriptions) | **GET** /public/v{version}/class/classdescriptions | Get class descriptions.
[**classGetClassSchedules**](ClassApi.md#classGetClassSchedules) | **GET** /public/v{version}/class/classschedules | Get class schedules.
[**classGetClassVisits**](ClassApi.md#classGetClassVisits) | **GET** /public/v{version}/class/classvisits | Get information about clients booked in a class.
[**classGetClasses**](ClassApi.md#classGetClasses) | **GET** /public/v{version}/class/classes | Get scheduled classes.
[**classGetWaitlistEntries**](ClassApi.md#classGetWaitlistEntries) | **GET** /public/v{version}/class/waitlistentries | Get waiting list entries.
[**classRemoveClientFromClass**](ClassApi.md#classRemoveClientFromClass) | **POST** /public/v{version}/class/removeclientfromclass | Remove a client from a class.
[**classRemoveFromWaitlist**](ClassApi.md#classRemoveFromWaitlist) | **POST** /public/v{version}/class/removefromwaitlist | Remove a client from a waiting list.
[**classSubstituteClassTeacher**](ClassApi.md#classSubstituteClassTeacher) | **POST** /public/v{version}/class/substituteclassteacher | Substitute a class teacher.


# **classAddClientToClass**
> \Swagger\Client\Model\AddClientToClassResponse classAddClientToClass($request, $site_id, $version, $authorization)

Book a client into a class.

This endpoint adds a client to a class or to a class waiting list. It is helpful to use this endpoint in the following situations:  * Use after calling `GET Clients` and `GET Classes` so that you are sure which client to book in which class.  * If adding a client to a class from a waiting list, use this call after you call `GET WaitlistEntries` and determine the ID of the waiting list from which you are moving the client.  * If adding a client to a class and using a pricing option that the client has already purchased, use this call after you call `GET ClientServices` to determine the ID of the pricing option that the client wants to use.    If you add a client to a class and the client purchases a new pricing option, use `GET Services`, `GET Classes`, and then `POST CheckoutShoppingCart` in place of this call.    This endpoint also supports cross-regional class bookings. If you want to perform a cross-regional class booking, set `CrossRegionalBooking` to `true`. This endpoint does not support adding a user to a waiting list using a cross-regional client pricing option(service). Cross-regional booking workflows do not support client service scheduling restrictions.    When performing a cross-regional class booking, this endpoint loops through the first ten sites that the client is associated with, looks for client pricing options at each of those sites, and then uses the oldest client pricing option found.It is important to note that this endpoint only loops through a maximum of ten associated client sites. If a `ClientID` is associated with more than ten sites in an organization, this endpoint only loops through the first ten.If you know that a client has a client service at another site, you can specify that site using the `CrossRegionalBookingClientServiceSiteId` query parameter.    If you perform a cross-regional booking, two additional fields are included in the `SessionType` object of the response:  * `SiteID`, which specifies where the client service is coming from  * `CrossRegionalBookingPerformed`, a Boolean field that is set to `true`    As a prerequisite to using this endpoint, your `SourceName` must have been granted access to the organization to which the site belongs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\AddClientToClassRequest(); // \Swagger\Client\Model\AddClientToClassRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->classAddClientToClass($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classAddClientToClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AddClientToClassRequest**](../Model/AddClientToClassRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\AddClientToClassResponse**](../Model/AddClientToClassResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClassDescriptions**
> \Swagger\Client\Model\GetClassDescriptionsResponse classGetClassDescriptions($site_id, $version, $authorization, $request_class_description_id, $request_end_class_date_time, $request_limit, $request_location_id, $request_offset, $request_program_ids, $request_staff_id, $request_start_class_date_time)

Get class descriptions.

To find class descriptions associated with **scheduled classes**, pass `StaffId`, `StartClassDateTime`, `EndClassDateTime`, or `LocationId` in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_description_id = 56; // int | Filters to the single result with the given ID.
$request_end_class_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to class descriptions for scheduled classes that happen before the given date and time.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_id = 56; // int | Filters results to classes descriptions for schedule classes as the given location.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_program_ids = array(56); // int[] | Filters results to class descriptions belonging to the given programs.
$request_staff_id = 789; // int | Filters results to class descriptions for scheduled classes taught by the given staff member.
$request_start_class_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filters the results to class descriptions for scheduled classes that happen on or after the given date and time.

try {
    $result = $apiInstance->classGetClassDescriptions($site_id, $version, $authorization, $request_class_description_id, $request_end_class_date_time, $request_limit, $request_location_id, $request_offset, $request_program_ids, $request_staff_id, $request_start_class_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClassDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_description_id** | **int**| Filters to the single result with the given ID. | [optional]
 **request_end_class_date_time** | **\DateTime**| Filters the results to class descriptions for scheduled classes that happen before the given date and time. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_id** | **int**| Filters results to classes descriptions for schedule classes as the given location. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_program_ids** | [**int[]**](../Model/int.md)| Filters results to class descriptions belonging to the given programs. | [optional]
 **request_staff_id** | **int**| Filters results to class descriptions for scheduled classes taught by the given staff member. | [optional]
 **request_start_class_date_time** | **\DateTime**| Filters the results to class descriptions for scheduled classes that happen on or after the given date and time. | [optional]

### Return type

[**\Swagger\Client\Model\GetClassDescriptionsResponse**](../Model/GetClassDescriptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClassSchedules**
> \Swagger\Client\Model\GetClassSchedulesResponse classGetClassSchedules($site_id, $version, $authorization, $request_class_schedule_ids, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_session_type_ids, $request_staff_ids, $request_start_date)

Get class schedules.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_schedule_ids = array(56); // int[] | The class schedule IDs.  <br />Default: **all**
$request_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the range. Return any active enrollments that occur on or before this day.  <br />Default: **StartDate**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | The location IDs.   <br />Default: **all**
$request_offset = 56; // int | Page offset, defaults to 0.
$request_program_ids = array(56); // int[] | The program IDs.   <br />Default: **all**
$request_session_type_ids = array(56); // int[] | The session type IDs.   <br />Default: **all**
$request_staff_ids = array(56); // int[] | The staff IDs.   <br />Default: **all**
$request_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the range. Return any active enrollments that occur on or after this day.  <br />Default: **today’s date**

try {
    $result = $apiInstance->classGetClassSchedules($site_id, $version, $authorization, $request_class_schedule_ids, $request_end_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_session_type_ids, $request_staff_ids, $request_start_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClassSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_schedule_ids** | [**int[]**](../Model/int.md)| The class schedule IDs.  &lt;br /&gt;Default: **all** | [optional]
 **request_end_date** | **\DateTime**| The end date of the range. Return any active enrollments that occur on or before this day.  &lt;br /&gt;Default: **StartDate** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| The location IDs.   &lt;br /&gt;Default: **all** | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_program_ids** | [**int[]**](../Model/int.md)| The program IDs.   &lt;br /&gt;Default: **all** | [optional]
 **request_session_type_ids** | [**int[]**](../Model/int.md)| The session type IDs.   &lt;br /&gt;Default: **all** | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| The staff IDs.   &lt;br /&gt;Default: **all** | [optional]
 **request_start_date** | **\DateTime**| The start date of the range. Return any active enrollments that occur on or after this day.  &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Swagger\Client\Model\GetClassSchedulesResponse**](../Model/GetClassSchedulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClassVisits**
> \Swagger\Client\Model\GetClassVisitsResponse classGetClassVisits($site_id, $version, $authorization, $request_class_id, $request_last_modified_date)

Get information about clients booked in a class.

Returns a list of visits that contain information for a specified class. On success, this request returns the class object in the response with a list of visits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_id = 789; // int | The class ID.
$request_last_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When included in the request, only records modified on or after the `LastModifiedDate` specified are included in the response.

try {
    $result = $apiInstance->classGetClassVisits($site_id, $version, $authorization, $request_class_id, $request_last_modified_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClassVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_id** | **int**| The class ID. | [optional]
 **request_last_modified_date** | **\DateTime**| When included in the request, only records modified on or after the &#x60;LastModifiedDate&#x60; specified are included in the response. | [optional]

### Return type

[**\Swagger\Client\Model\GetClassVisitsResponse**](../Model/GetClassVisitsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetClasses**
> \Swagger\Client\Model\GetClassesResponse classGetClasses($site_id, $version, $authorization, $request_class_description_ids, $request_class_ids, $request_client_id, $request_end_date_time, $request_hide_canceled_classes, $request_last_modified_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_scheduling_window, $request_semester_ids, $request_session_type_ids, $request_staff_ids, $request_start_date_time)

Get scheduled classes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_description_ids = array(56); // int[] | The requested class description IDs.
$request_class_ids = array(56); // int[] | The requested class IDs.
$request_client_id = "request_client_id_example"; // string | The client ID of the client who is viewing this class list. Based on identity, the client may be able to see additional information, such as membership specials.
$request_end_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The requested end date for filtering.  <br />Default: **today’s date**
$request_hide_canceled_classes = true; // bool | When `true`, canceled classes are removed from the response.<br />  When `false`, canceled classes are included in the response.<br />  Default: **false**
$request_last_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | When included in the request, only records modified on or after the `LastModifiedDate` specified are included in the response.
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_location_ids = array(56); // int[] | A list of location IDs on which to base the search.
$request_offset = 56; // int | Page offset, defaults to 0.
$request_program_ids = array(56); // int[] | A list of program IDs on which to base the search.
$request_scheduling_window = true; // bool | When `true`, classes outside scheduling window are removed from the response.<br />  When `false`, classes are included in the response, regardless of the scheduling window.<br />  Default: **false**
$request_semester_ids = array(56); // int[] | A list of semester IDs on which to base the search.
$request_session_type_ids = array(56); // int[] | A list of session type IDs on which to base the search.
$request_staff_ids = array(56); // int[] | The requested IDs of the teaching staff members.
$request_start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The requested start date for filtering.   <br />Default: **today’s date**

try {
    $result = $apiInstance->classGetClasses($site_id, $version, $authorization, $request_class_description_ids, $request_class_ids, $request_client_id, $request_end_date_time, $request_hide_canceled_classes, $request_last_modified_date, $request_limit, $request_location_ids, $request_offset, $request_program_ids, $request_scheduling_window, $request_semester_ids, $request_session_type_ids, $request_staff_ids, $request_start_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_description_ids** | [**int[]**](../Model/int.md)| The requested class description IDs. | [optional]
 **request_class_ids** | [**int[]**](../Model/int.md)| The requested class IDs. | [optional]
 **request_client_id** | **string**| The client ID of the client who is viewing this class list. Based on identity, the client may be able to see additional information, such as membership specials. | [optional]
 **request_end_date_time** | **\DateTime**| The requested end date for filtering.  &lt;br /&gt;Default: **today’s date** | [optional]
 **request_hide_canceled_classes** | **bool**| When &#x60;true&#x60;, canceled classes are removed from the response.&lt;br /&gt;  When &#x60;false&#x60;, canceled classes are included in the response.&lt;br /&gt;  Default: **false** | [optional]
 **request_last_modified_date** | **\DateTime**| When included in the request, only records modified on or after the &#x60;LastModifiedDate&#x60; specified are included in the response. | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_location_ids** | [**int[]**](../Model/int.md)| A list of location IDs on which to base the search. | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_program_ids** | [**int[]**](../Model/int.md)| A list of program IDs on which to base the search. | [optional]
 **request_scheduling_window** | **bool**| When &#x60;true&#x60;, classes outside scheduling window are removed from the response.&lt;br /&gt;  When &#x60;false&#x60;, classes are included in the response, regardless of the scheduling window.&lt;br /&gt;  Default: **false** | [optional]
 **request_semester_ids** | [**int[]**](../Model/int.md)| A list of semester IDs on which to base the search. | [optional]
 **request_session_type_ids** | [**int[]**](../Model/int.md)| A list of session type IDs on which to base the search. | [optional]
 **request_staff_ids** | [**int[]**](../Model/int.md)| The requested IDs of the teaching staff members. | [optional]
 **request_start_date_time** | **\DateTime**| The requested start date for filtering.   &lt;br /&gt;Default: **today’s date** | [optional]

### Return type

[**\Swagger\Client\Model\GetClassesResponse**](../Model/GetClassesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classGetWaitlistEntries**
> \Swagger\Client\Model\GetWaitlistEntriesResponse classGetWaitlistEntries($site_id, $version, $authorization, $request_class_ids, $request_class_schedule_ids, $request_client_ids, $request_hide_past_entries, $request_limit, $request_offset, $request_waitlist_entry_ids)

Get waiting list entries.

Returns a list of waiting list entries for a specified class schedule or class. The request requires staff credentials and either a class schedule ID or class ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.
$request_class_ids = array(56); // int[] | The requested class IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request. <br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all ClassIds**
$request_class_schedule_ids = array(56); // int[] | The requested class schedule IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request.<br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all ClassScheduleIds**
$request_client_ids = array("request_client_ids_example"); // string[] | The requested client IDs.<br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all ClientIds**
$request_hide_past_entries = true; // bool | When `true`, indicates that past waiting list entries are hidden from clients.<br />  When `false`, indicates that past entries are not hidden from clients.<br />  Default: **false**
$request_limit = 56; // int | Number of results to include, defaults to 100
$request_offset = 56; // int | Page offset, defaults to 0.
$request_waitlist_entry_ids = array(56); // int[] | The requested waiting list entry IDs.<br />  Either `ClassScheduleIds`, `ClientIds`, `WaitlistEntryIds`, or `ClassIds` is required; the others become optional.<br />  Default: **all WaitlistEntryIds**

try {
    $result = $apiInstance->classGetWaitlistEntries($site_id, $version, $authorization, $request_class_ids, $request_class_schedule_ids, $request_client_ids, $request_hide_past_entries, $request_limit, $request_offset, $request_waitlist_entry_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classGetWaitlistEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]
 **request_class_ids** | [**int[]**](../Model/int.md)| The requested class IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request. &lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClassIds** | [optional]
 **request_class_schedule_ids** | [**int[]**](../Model/int.md)| The requested class schedule IDs. If a class ID is present, the request automatically disregards any class schedule IDs in the request.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClassScheduleIds** | [optional]
 **request_client_ids** | [**string[]**](../Model/string.md)| The requested client IDs.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all ClientIds** | [optional]
 **request_hide_past_entries** | **bool**| When &#x60;true&#x60;, indicates that past waiting list entries are hidden from clients.&lt;br /&gt;  When &#x60;false&#x60;, indicates that past entries are not hidden from clients.&lt;br /&gt;  Default: **false** | [optional]
 **request_limit** | **int**| Number of results to include, defaults to 100 | [optional]
 **request_offset** | **int**| Page offset, defaults to 0. | [optional]
 **request_waitlist_entry_ids** | [**int[]**](../Model/int.md)| The requested waiting list entry IDs.&lt;br /&gt;  Either &#x60;ClassScheduleIds&#x60;, &#x60;ClientIds&#x60;, &#x60;WaitlistEntryIds&#x60;, or &#x60;ClassIds&#x60; is required; the others become optional.&lt;br /&gt;  Default: **all WaitlistEntryIds** | [optional]

### Return type

[**\Swagger\Client\Model\GetWaitlistEntriesResponse**](../Model/GetWaitlistEntriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classRemoveClientFromClass**
> \Swagger\Client\Model\RemoveClientFromClassResponse classRemoveClientFromClass($request, $site_id, $version, $authorization)

Remove a client from a class.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\RemoveClientFromClassRequest(); // \Swagger\Client\Model\RemoveClientFromClassRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->classRemoveClientFromClass($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classRemoveClientFromClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\RemoveClientFromClassRequest**](../Model/RemoveClientFromClassRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\RemoveClientFromClassResponse**](../Model/RemoveClientFromClassResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classRemoveFromWaitlist**
> \Swagger\Client\Model\RemoveFromWaitlistResponse classRemoveFromWaitlist($request_waitlist_entry_ids, $site_id, $version, $authorization)

Remove a client from a waiting list.

This endpoint does not return a response. If a call to this endpoint results in a 200 OK HTTP status code, then the call was successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_waitlist_entry_ids = array(56); // int[] | A list of waiting list IDs to remove from waiting lists.
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->classRemoveFromWaitlist($request_waitlist_entry_ids, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classRemoveFromWaitlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_waitlist_entry_ids** | [**int[]**](../Model/int.md)| A list of waiting list IDs to remove from waiting lists. |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\RemoveFromWaitlistResponse**](../Model/RemoveFromWaitlistResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classSubstituteClassTeacher**
> \Swagger\Client\Model\SubstituteClassTeacherResponse classSubstituteClassTeacher($request, $site_id, $version, $authorization)

Substitute a class teacher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\SubstituteClassTeacherRequest(); // \Swagger\Client\Model\SubstituteClassTeacherRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->classSubstituteClassTeacher($request, $site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->classSubstituteClassTeacher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SubstituteClassTeacherRequest**](../Model/SubstituteClassTeacherRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |
 **authorization** | **string**| A staff user authorization token. | [optional] [default to ]

### Return type

[**\Swagger\Client\Model\SubstituteClassTeacherResponse**](../Model/SubstituteClassTeacherResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

