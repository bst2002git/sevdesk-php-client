# Itsmind\Sevdesk\PartApi

All URIs are relative to https://my.sevdesk.de/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPart()**](PartApi.md#createPart) | **POST** /Part | Create a new part |
| [**getPartById()**](PartApi.md#getPartById) | **GET** /Part/{partId} | Find part by ID |
| [**getParts()**](PartApi.md#getParts) | **GET** /Part | Retrieve parts |
| [**partGetStock()**](PartApi.md#partGetStock) | **GET** /Part/{partId}/getStock | Get stock of a part |
| [**updatePart()**](PartApi.md#updatePart) | **PUT** /Part/{partId} | Update an existing part |


## `createPart()`

```php
createPart($model_part): \Itsmind\Sevdesk\Model\GetPartById200Response
```

Create a new part

Creates a part in your sevDesk inventory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_part = new \Itsmind\Sevdesk\Model\ModelPart(); // \Itsmind\Sevdesk\Model\ModelPart | Creation data. Please be aware, that you need to provide at least all required parameter      of the part model!

try {
    $result = $apiInstance->createPart($model_part);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->createPart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_part** | [**\Itsmind\Sevdesk\Model\ModelPart**](../Model/ModelPart.md)| Creation data. Please be aware, that you need to provide at least all required parameter      of the part model! | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetPartById200Response**](../Model/GetPartById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPartById()`

```php
getPartById($part_id): \Itsmind\Sevdesk\Model\GetPartById200Response
```

Find part by ID

Returns a single part

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part_id = 56; // int | ID of part to return

try {
    $result = $apiInstance->getPartById($part_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->getPartById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part_id** | **int**| ID of part to return | |

### Return type

[**\Itsmind\Sevdesk\Model\GetPartById200Response**](../Model/GetPartById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParts()`

```php
getParts($part_number, $name): \Itsmind\Sevdesk\Model\GetPartById200Response
```

Retrieve parts

Retrieve all parts in your sevDesk inventory according to the applied filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part_number = 'part_number_example'; // string | Retrieve all parts with this part number
$name = 'name_example'; // string | Retrieve all parts with this name

try {
    $result = $apiInstance->getParts($part_number, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->getParts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part_number** | **string**| Retrieve all parts with this part number | [optional] |
| **name** | **string**| Retrieve all parts with this name | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetPartById200Response**](../Model/GetPartById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partGetStock()`

```php
partGetStock($part_id): \Itsmind\Sevdesk\Model\PartGetStock200Response
```

Get stock of a part

Returns the current stock amount of the given part.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part_id = 56; // int | ID of part for which you want the current stock.

try {
    $result = $apiInstance->partGetStock($part_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->partGetStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part_id** | **int**| ID of part for which you want the current stock. | |

### Return type

[**\Itsmind\Sevdesk\Model\PartGetStock200Response**](../Model/PartGetStock200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePart()`

```php
updatePart($part_id, $model_part_update): \Itsmind\Sevdesk\Model\GetPartById200Response
```

Update an existing part

Update a part

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Itsmind\Sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Itsmind\Sevdesk\Api\PartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part_id = 56; // int | ID of part to update
$model_part_update = new \Itsmind\Sevdesk\Model\ModelPartUpdate(); // \Itsmind\Sevdesk\Model\ModelPartUpdate | Update data

try {
    $result = $apiInstance->updatePart($part_id, $model_part_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->updatePart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **part_id** | **int**| ID of part to update | |
| **model_part_update** | [**\Itsmind\Sevdesk\Model\ModelPartUpdate**](../Model/ModelPartUpdate.md)| Update data | [optional] |

### Return type

[**\Itsmind\Sevdesk\Model\GetPartById200Response**](../Model/GetPartById200Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
