# V1subscriptionorderexecutePayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal** | **int** | Product or terminal Id. | 
**amount** | **string** | Amount of the operation in number format. 1.00 EURO &#x3D; 100, 4.50 EUROS &#x3D; 450... | 
**currency** | **string** |  | 
**original_ip** | **string** | IP Address of the customer that initiated the payment transaction | 
**method_id** | **string** | PAYCOMET payment method ID. 1 is for card. | 
**id_user** | **int** | Identification of user card given by PAYCOMET. Mandatory if is a card payment. | 
**token_user** | **string** | Identification of user card given by PAYCOMET. Mandatory if is a card payment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

