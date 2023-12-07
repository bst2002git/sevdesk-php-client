# OpenAPI\Client\CheckAccountApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCheckAccount()**](CheckAccountApi.md#createCheckAccount) | **POST** /CheckAccount | Create a new check account |
| [**deleteCheckAccount()**](CheckAccountApi.md#deleteCheckAccount) | **DELETE** /CheckAccount/{checkAccountId} | Deletes a check account |
| [**getBalanceAtDate()**](CheckAccountApi.md#getBalanceAtDate) | **GET** /CheckAccount/{checkAccountId}/getBalanceAtDate | Get the balance at a given date |
| [**getCheckAccountById()**](CheckAccountApi.md#getCheckAccountById) | **GET** /CheckAccount/{checkAccountId} | Find check account by ID |
| [**getCheckAccounts()**](CheckAccountApi.md#getCheckAccounts) | **GET** /CheckAccount | Retrieve check accounts |
| [**updateCheckAccount()**](CheckAccountApi.md#updateCheckAccount) | **PUT** /CheckAccount/{checkAccountId} | Update an existing check account |


## `createCheckAccount()`

```php
createCheckAccount($model_check_account): \OpenAPI\Client\Model\GetCheckAccountById200Response
```

Create a new check account

Creates a new banking account on which transactions can be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_check_account = new \OpenAPI\Client\Model\ModelCheckAccount(); // \OpenAPI\Client\Model\ModelCheckAccount | Creation data. Please be aware, that you need to provide at least all required parameter      of the CheckAccount model!

try {
    $result = $apiInstance->createCheckAccount($model_check_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->createCheckAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_check_account** | [**\OpenAPI\Client\Model\ModelCheckAccount**](../Model/ModelCheckAccount.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the CheckAccount model! | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountById200Response**](../Model/GetCheckAccountById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCheckAccount()`

```php
deleteCheckAccount($check_account_id): \OpenAPI\Client\Model\DeleteAccountingContact200Response
```

Deletes a check account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_id = 56; // int | Id of check account to delete

try {
    $result = $apiInstance->deleteCheckAccount($check_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->deleteCheckAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_id** | **int**| Id of check account to delete | |

### Return type

[**\OpenAPI\Client\Model\DeleteAccountingContact200Response**](../Model/DeleteAccountingContact200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceAtDate()`

```php
getBalanceAtDate($check_account_id, $date): \OpenAPI\Client\Model\GetBalanceAtDate200Response
```

Get the balance at a given date

Get the balance, calculated as the sum of all transactions sevDesk knows, up to and including the given date. Note that this balance does not have to be the actual bank account balance, e.g. if sevDesk did not import old transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_id = 56; // int | ID of check account
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only consider transactions up to this date at 23:59:59

try {
    $result = $apiInstance->getBalanceAtDate($check_account_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->getBalanceAtDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_id** | **int**| ID of check account | |
| **date** | **\DateTime**| Only consider transactions up to this date at 23:59:59 | |

### Return type

[**\OpenAPI\Client\Model\GetBalanceAtDate200Response**](../Model/GetBalanceAtDate200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckAccountById()`

```php
getCheckAccountById($check_account_id): \OpenAPI\Client\Model\GetCheckAccountById200Response
```

Find check account by ID

Retrieve an existing check account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_id = 56; // int | ID of check account

try {
    $result = $apiInstance->getCheckAccountById($check_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->getCheckAccountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_id** | **int**| ID of check account | |

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountById200Response**](../Model/GetCheckAccountById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCheckAccounts()`

```php
getCheckAccounts(): \OpenAPI\Client\Model\GetCheckAccountById200Response
```

Retrieve check accounts

Retrieve all check accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCheckAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->getCheckAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountById200Response**](../Model/GetCheckAccountById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckAccount()`

```php
updateCheckAccount($check_account_id, $model_check_account_update): \OpenAPI\Client\Model\GetCheckAccountById200Response
```

Update an existing check account

Update a check account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_id = 56; // int | ID of check account to update
$model_check_account_update = new \OpenAPI\Client\Model\ModelCheckAccountUpdate(); // \OpenAPI\Client\Model\ModelCheckAccountUpdate | Update data

try {
    $result = $apiInstance->updateCheckAccount($check_account_id, $model_check_account_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->updateCheckAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_id** | **int**| ID of check account to update | |
| **model_check_account_update** | [**\OpenAPI\Client\Model\ModelCheckAccountUpdate**](../Model/ModelCheckAccountUpdate.md)| Update data | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountById200Response**](../Model/GetCheckAccountById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
