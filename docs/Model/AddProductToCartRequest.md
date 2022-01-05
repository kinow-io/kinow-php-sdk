## AddProductToCartRequest

### Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **int** | Product ID to add to cart | 
**product_attribute_id** | **int** | ProductAttribute ID, required to add product to cart if product is not a subscription | [optional] 
**gift_id** | **int** | Gift ID linked to the item in cart | [optional] 
**switch_subscription_id** | **int** | When customer want to switch subscription, switch_subscription_id is the product access ID that match with the subscription to cancel | [optional] 
**is_gift** | **bool** | Allows bypass of access check (in case the current user already bought the product and it cannot be reordered) | [optional] 
**ip_address** | **string** | IP address | [optional] 


