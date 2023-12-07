# # ModelDocumentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The document id | [optional] [readonly]
**object_name** | **string** | The document object name | [optional] [readonly]
**create** | **\DateTime** | Date of document creation | [optional] [readonly]
**update** | **\DateTime** | Date of last document update | [optional] [readonly]
**filename** | **string** | The filename of the document | [optional] [readonly]
**status** | **string** | Defines the status of the document. 100 &lt;-&gt; Active. | [optional] [readonly]
**mime_type** | **string** | The documents mime type | [optional] [readonly]
**object** | [**\OpenAPI\Client\Model\ModelDocumentResponseObject**](ModelDocumentResponseObject.md) |  | [optional]
**additional_information** | **string** | Additional information stored for the document. | [optional] [readonly]
**document_number** | **string** |  | [optional] [readonly]
**description** | **string** | A description for the document. | [optional] [readonly]
**base_object** | [**\OpenAPI\Client\Model\ModelDocumentResponseBaseObject**](ModelDocumentResponseBaseObject.md) |  | [optional]
**extension** | **string** | The file extension. | [optional] [readonly]
**filesize** | **int** | The size of the file in bytes | [optional] [readonly]
**sev_client** | [**\OpenAPI\Client\Model\ModelDocumentResponseSevClient**](ModelDocumentResponseSevClient.md) |  | [optional]
**content_hash** | **string** | Hash of the documents content. | [optional] [readonly]
**create_user** | [**\OpenAPI\Client\Model\ModelDocumentResponseCreateUser**](ModelDocumentResponseCreateUser.md) |  | [optional]
**update_user** | [**\OpenAPI\Client\Model\ModelDocumentResponseUpdateUser**](ModelDocumentResponseUpdateUser.md) |  | [optional]
**folder** | [**\OpenAPI\Client\Model\ModelDocumentResponseFolder**](ModelDocumentResponseFolder.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
