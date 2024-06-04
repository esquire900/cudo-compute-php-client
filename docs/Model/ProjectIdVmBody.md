# ProjectIdVmBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boot_disk** | [**\Swagger\Client\Model\Disk**](Disk.md) |  | [optional] 
**boot_disk_image_id** | **string** |  | 
**cpu_model** | **string** |  | [optional] 
**custom_ssh_keys** | **string[]** |  | [optional] 
**data_center_id** | **string** |  | [optional] 
**gpu_model** | **string** |  | [optional] 
**gpus** | **int** |  | [optional] 
**machine_type** | **string** |  | [optional] 
**max_price_hr** | [**\Swagger\Client\Model\Decimal**](Decimal.md) |  | [optional] 
**memory_gib** | **int** |  | [optional] 
**metadata** | **map[string,string]** |  | [optional] 
**nics** | [**\Swagger\Client\Model\CreateVMRequestNIC[]**](CreateVMRequestNIC.md) |  | [optional] 
**password** | **string** |  | [optional] 
**security_group_ids** | **string[]** |  | [optional] 
**ssh_key_source** | [**\Swagger\Client\Model\SshKeySource**](SshKeySource.md) |  | [optional] 
**start_script** | **string** |  | [optional] 
**storage_disk_ids** | **string[]** |  | [optional] 
**vcpus** | **int** |  | [optional] 
**vm_id** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

