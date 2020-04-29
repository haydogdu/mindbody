# Swagger\Client\UserTokenApi

All URIs are relative to *https://api.mindbodyonline.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userTokenIssue**](UserTokenApi.md#userTokenIssue) | **POST** /public/v{version}/usertoken/issue | Get a staff user token.
[**userTokenRevoke**](UserTokenApi.md#userTokenRevoke) | **DELETE** /public/v{version}/usertoken/revoke | Revoke a user token.


# **userTokenIssue**
> \Swagger\Client\Model\IssueResponse userTokenIssue($request, $site_id, $version)

Get a staff user token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Swagger\Client\Model\IssueRequest(); // \Swagger\Client\Model\IssueRequest | 
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 

try {
    $result = $apiInstance->userTokenIssue($request, $site_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokenApi->userTokenIssue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\IssueRequest**](../Model/IssueRequest.md)|  |
 **site_id** | **string**| ID of the site from which to pull data. |
 **version** | **string**|  |

### Return type

[**\Swagger\Client\Model\IssueResponse**](../Model/IssueResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userTokenRevoke**
> object userTokenRevoke($site_id, $version, $authorization)

Revoke a user token.

Revokes the user token in the Authorization header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$site_id = "site_id_example"; // string | ID of the site from which to pull data.
$version = "version_example"; // string | 
$authorization = ""; // string | A staff user authorization token.

try {
    $result = $apiInstance->userTokenRevoke($site_id, $version, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokenApi->userTokenRevoke: ', $e->getMessage(), PHP_EOL;
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

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml, multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

