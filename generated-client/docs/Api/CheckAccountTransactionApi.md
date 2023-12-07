# OpenAPI\Client\CheckAccountTransactionApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTransaction()**](CheckAccountTransactionApi.md#createTransaction) | **POST** /CheckAccountTransaction | Create a new transaction |
| [**deleteCheckAccountTransaction()**](CheckAccountTransactionApi.md#deleteCheckAccountTransaction) | **DELETE** /CheckAccountTransaction/{checkAccountTransactionId} | Deletes a check account transaction |
| [**getCheckAccountTransactionById()**](CheckAccountTransactionApi.md#getCheckAccountTransactionById) | **GET** /CheckAccountTransaction/{checkAccountTransactionId} | Find check account transaction by ID |
| [**getTransactions()**](CheckAccountTransactionApi.md#getTransactions) | **GET** /CheckAccountTransaction | Retrieve transactions |
| [**updateCheckAccountTransaction()**](CheckAccountTransactionApi.md#updateCheckAccountTransaction) | **PUT** /CheckAccountTransaction/{checkAccountTransactionId} | Update an existing check account transaction |


## `createTransaction()`

```php
createTransaction($model_check_account_transaction): \OpenAPI\Client\Model\GetCheckAccountTransactionById200Response
```

Create a new transaction

Creates a new transaction on a check account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_check_account_transaction = new \OpenAPI\Client\Model\ModelCheckAccountTransaction(); // \OpenAPI\Client\Model\ModelCheckAccountTransaction | Creation data. Please be aware, that you need to provide at least all required parameter      of the CheckAccountTransaction model!

try {
    $result = $apiInstance->createTransaction($model_check_account_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_check_account_transaction** | [**\OpenAPI\Client\Model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the CheckAccountTransaction model! | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountTransactionById200Response**](../Model/GetCheckAccountTransactionById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCheckAccountTransaction()`

```php
deleteCheckAccountTransaction($check_account_transaction_id): \OpenAPI\Client\Model\DeleteAccountingContact200Response
```

Deletes a check account transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | Id of check account transaction to delete

try {
    $result = $apiInstance->deleteCheckAccountTransaction($check_account_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->deleteCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| Id of check account transaction to delete | |

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

## `getCheckAccountTransactionById()`

```php
getCheckAccountTransactionById($check_account_transaction_id): \OpenAPI\Client\Model\GetCheckAccountTransactionById200Response
```

Find check account transaction by ID

Retrieve an existing check account transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | ID of check account transaction

try {
    $result = $apiInstance->getCheckAccountTransactionById($check_account_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->getCheckAccountTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| ID of check account transaction | |

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountTransactionById200Response**](../Model/GetCheckAccountTransactionById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactions()`

```php
getTransactions($count_all, $limit, $offset, $status, $check_account_id, $check_account_object_name, $hide_fees, $is_booked, $paymt_purpose, $start_date, $end_date, $search_for_invoice_and_voucher, $payee_payer_name, $only_credit, $only_debit): \OpenAPI\Client\Model\GetTransactions200Response
```

Retrieve transactions

Retrieve all transactions depending on the filters defined in the query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count_all = True; // bool | If all transactions should be counted
$limit = 56; // int | The max number of transactions
$offset = 56; // int | Which offset to start with
$status = 3.4; // float | Status of the transaction
$check_account_id = 56; // int | Retrieve all transactions on this check account. Must be provided with checkAccount[objectName]
$check_account_object_name = 'check_account_object_name_example'; // string | Only required if checkAccount[id] was provided. 'CheckAccount' should be used as value.
$hide_fees = True; // bool | Do not include fees for financial transactions
$is_booked = True; // bool | Only retrieve booked transactions
$paymt_purpose = 'paymt_purpose_example'; // string | Only retrieve transactions with this payment purpose
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only retrieve transactions from this date on
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only retrieve transactions up to this date
$search_for_invoice_and_voucher = 'search_for_invoice_and_voucher_example'; // string | Search for transactions linked with a given invoice or voucher
$payee_payer_name = 'payee_payer_name_example'; // string | Only retrieve transactions with this payee / payer
$only_credit = True; // bool | Only retrieve credit transactions
$only_debit = True; // bool | Only retrieve debit transactions

try {
    $result = $apiInstance->getTransactions($count_all, $limit, $offset, $status, $check_account_id, $check_account_object_name, $hide_fees, $is_booked, $paymt_purpose, $start_date, $end_date, $search_for_invoice_and_voucher, $payee_payer_name, $only_credit, $only_debit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count_all** | **bool**| If all transactions should be counted | [optional] |
| **limit** | **int**| The max number of transactions | [optional] |
| **offset** | **int**| Which offset to start with | [optional] |
| **status** | **float**| Status of the transaction | [optional] |
| **check_account_id** | **int**| Retrieve all transactions on this check account. Must be provided with checkAccount[objectName] | [optional] |
| **check_account_object_name** | **string**| Only required if checkAccount[id] was provided. &#39;CheckAccount&#39; should be used as value. | [optional] |
| **hide_fees** | **bool**| Do not include fees for financial transactions | [optional] |
| **is_booked** | **bool**| Only retrieve booked transactions | [optional] |
| **paymt_purpose** | **string**| Only retrieve transactions with this payment purpose | [optional] |
| **start_date** | **\DateTime**| Only retrieve transactions from this date on | [optional] |
| **end_date** | **\DateTime**| Only retrieve transactions up to this date | [optional] |
| **search_for_invoice_and_voucher** | **string**| Search for transactions linked with a given invoice or voucher | [optional] |
| **payee_payer_name** | **string**| Only retrieve transactions with this payee / payer | [optional] |
| **only_credit** | **bool**| Only retrieve credit transactions | [optional] |
| **only_debit** | **bool**| Only retrieve debit transactions | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetTransactions200Response**](../Model/GetTransactions200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCheckAccountTransaction()`

```php
updateCheckAccountTransaction($check_account_transaction_id, $model_check_account_transaction_update): \OpenAPI\Client\Model\GetCheckAccountTransactionById200Response
```

Update an existing check account transaction

Update a check account transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CheckAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_account_transaction_id = 56; // int | ID of check account to update transaction
$model_check_account_transaction_update = new \OpenAPI\Client\Model\ModelCheckAccountTransactionUpdate(); // \OpenAPI\Client\Model\ModelCheckAccountTransactionUpdate | Update data

try {
    $result = $apiInstance->updateCheckAccountTransaction($check_account_transaction_id, $model_check_account_transaction_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->updateCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_account_transaction_id** | **int**| ID of check account to update transaction | |
| **model_check_account_transaction_update** | [**\OpenAPI\Client\Model\ModelCheckAccountTransactionUpdate**](../Model/ModelCheckAccountTransactionUpdate.md)| Update data | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCheckAccountTransactionById200Response**](../Model/GetCheckAccountTransactionById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
