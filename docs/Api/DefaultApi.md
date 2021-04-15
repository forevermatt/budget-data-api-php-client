# BudgetData\ApiClient\DefaultApi

All URIs are relative to *https://virtserver.swaggerhub.com/forevermatt/budget-data/0.1.3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountPost**](DefaultApi.md#accountpost) | **POST** /account | Add an account
[**accountsGet**](DefaultApi.md#accountsget) | **GET** /accounts | List the current user&#x27;s (financial) Accounts

# **accountPost**
> accountPost($body)

Add an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BudgetData\ApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \BudgetData\ApiClient\Model\Account(); // \BudgetData\ApiClient\Model\Account | 

try {
    $apiInstance->accountPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BudgetData\ApiClient\Model\Account**](../Model/Account.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsGet**
> \BudgetData\ApiClient\Model\Account[] accountsGet()

List the current user's (financial) Accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new BudgetData\ApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BudgetData\ApiClient\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

