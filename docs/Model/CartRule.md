## CartRule

### Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**id_customer** | **int** | Limit to a single user | [optional] 
**description** | **string** | For your eyes only. This will never be displayed to the customer | [optional] 
**priority** | **int** | Rules are applied by priority. A rule with a priority of \&quot;1\&quot; will be processed before one with a priority of \&quot;2\&quot; | [optional] 
**partial_use** | **bool** | Allow to partial use this cart rule. If cart rule amount is greater than total customer order, a new cart rule will be created with the remainder amount. | [optional] 
**code** | **string** | Code used by customer to add it on his cart summary. Caution: rule will automatically be applied to everyone if you leave it blank | [optional] 
**active** | **bool** | Status of the cart rule | [optional] 
**date_add** | **string** |  | [optional] 
**date_upd** | **string** |  | [optional] 
**name** | [**\Kaemo\Client\Model\I18nField[]**](#I18nField) | This will be displayed in the cart summary, as well as on the invoice | [optional] 
**date_from** | **string** | Rule starts when this date is reached | [optional] 
**date_to** | **string** | Rule ends when this date is reached | [optional] 
**quantity** | **int** | The cart rule will be applied to the first \&quot;X\&quot; orders only | [optional] 
**quantity_per_user** | **int** | A customer will only be able to use the cart rule \&quot;X\&quot; time(s) | [optional] 
**minimum_amount** | **int** | You can choose a minimum amount for the cart, either with taxes or not | [optional] 
**minimum_amount_tax** | **int** |  | [optional] 
**minimum_amount_currency** | **int** | Id of the currency | [optional] 
**every_recurring_payments** | **bool** | If customer cart contains a subscription, select if cart rule will apply on recurring payments | [optional] 
**reduction_percent** | **float** | Discount applied to cart when rule is added (in %). | [optional] 
**reduction_amount** | **float** | Discount applied to cart when rule is added (in currency). | [optional] 
**restriction_groups** | [**\Kaemo\Client\Model\CartRuleRestrictionGroup[]**](#CartRuleRestrictionGroup) |  | [optional] 


