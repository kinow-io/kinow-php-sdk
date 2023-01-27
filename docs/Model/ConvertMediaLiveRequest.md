## ConvertMediaLiveRequest

### Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Required to setup video asset name | [optional] 
**stream_id** | **string** | Required if live_id is not given. Is not compatible with date | 
**live_id** | **string** | Required if stream_id is not given. Date are required with this parameter | [optional] 
**date_from** | **string** | Required with live_id | [optional] 
**date_to** | **string** | Required with live_id | [optional] 


