## CreateMessageRequest

### Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_lang** | **int** | Language ID used by user to write his message | 
**id_support** | **int** | Link the message to a previous message | [optional] 
**email** | **string** | User email in order to send him a response | 
**id_contact** | **int** | Contact ID to send the user message | 
**message** | **string** | User message | 
**id_product** | **int** | Link the message to a product in catalog | [optional] 
**id_order** | **int** | Link the message to an existing order | [optional] 
**send_mail** | **bool** | Send confirmation email to the providen email | [optional] 


