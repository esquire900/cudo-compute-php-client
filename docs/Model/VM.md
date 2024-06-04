# VM

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_state** | **string** |  | [optional] 
**boot_disk** | [**\Swagger\Client\Model\Disk**](Disk.md) |  | [optional] 
**boot_disk_size_gib** | **int** |  | [optional] 
**cpu_model** | **string** |  | [optional] 
**create_by** | **string** |  | [optional] 
**datacenter_id** | **string** |  | [optional] 
**external_ip_address** | **string** |  | [optional] 
**gpu_model** | **string** |  | [optional] 
**gpu_quantity** | **int** |  | [optional] 
**id** | **string** |  | [optional] 
**image_id** | **string** |  | [optional] 
**image_name** | **string** |  | [optional] 
**init_state** | **string** |  | [optional] 
**internal_ip_address** | **string** |  | [optional] 
**lcm_state** | **string** |  | [optional] 
**machine_type** | **string** |  | [optional] 
**memory** | **int** |  | [optional] 
**metadata** | **map[string,string]** |  | [optional] 
**nics** | [**\Swagger\Client\Model\VMNIC[]**](VMNIC.md) |  | [optional] 
**one_state** | **string** |  | [optional] 
**price_hr** | **float** |  | [optional] 
**private_image_id** | **string** |  | [optional] 
**public_image_id** | **string** |  | [optional] 
**public_image_name** | **string** |  | [optional] 
**public_ip_address** | **string** |  | [optional] 
**region_id** | **string** |  | [optional] 
**region_name** | **string** |  | [optional] 
**renewable_energy** | **bool** |  | [optional] 
**rules** | [**\Swagger\Client\Model\SecurityGroupRule[]**](SecurityGroupRule.md) |  | [optional] 
**security_group_ids** | **string[]** |  | [optional] 
**short_state** | **string** |  | [optional] 
**storage_disks** | [**\Swagger\Client\Model\Disk[]**](Disk.md) |  | [optional] 
**vcpus** | **int** |  | [optional] 
**vm_state** | [**\Swagger\Client\Model\VmState**](VmState.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

