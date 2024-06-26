# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $result = $apiInstance->deleteApiKey($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\GenerateApiKeyRequest(); // \Swagger\Client\Model\GenerateApiKeyRequest | 

try {
    $result = $apiInstance->generateApiKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->generateApiKey: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->listApiKeys($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->listApiKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://rest.compute.cudo.org/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**deleteApiKey**](docs/Api/APIKeysApi.md#deleteapikey) | **DELETE** /v1/api-keys/{name} | Delete
*APIKeysApi* | [**generateApiKey**](docs/Api/APIKeysApi.md#generateapikey) | **POST** /v1/api-keys | Generate
*APIKeysApi* | [**listApiKeys**](docs/Api/APIKeysApi.md#listapikeys) | **GET** /v1/api-keys | List
*BillingApi* | [**createBillingAccount**](docs/Api/BillingApi.md#createbillingaccount) | **POST** /v1/billing-accounts | Create a billing account
*BillingApi* | [**deleteBillingAccount**](docs/Api/BillingApi.md#deletebillingaccount) | **DELETE** /v1/billing-accounts/{id} | Delete billing account
*BillingApi* | [**getBillingAccount**](docs/Api/BillingApi.md#getbillingaccount) | **GET** /v1/billing-accounts/{id} | Get a billing account
*BillingApi* | [**getBillingAccountDetails**](docs/Api/BillingApi.md#getbillingaccountdetails) | **GET** /v1/billing-accounts/{id}/details | Get billing account details
*BillingApi* | [**getBillingAccountPaymentMethods**](docs/Api/BillingApi.md#getbillingaccountpaymentmethods) | **GET** /v1/billing-accounts/{id}/payment-methods | Get payment methods
*BillingApi* | [**getBillingAccountSetupIntent**](docs/Api/BillingApi.md#getbillingaccountsetupintent) | **GET** /v1/billing-accounts/{id}/setup-intent | Get setup intent
*BillingApi* | [**getBillingAccountSpendDetails**](docs/Api/BillingApi.md#getbillingaccountspenddetails) | **GET** /v1/billing-accounts/{billingAccountId}/spend/details | Get spend details
*BillingApi* | [**getBillingAccountStripeInvoices**](docs/Api/BillingApi.md#getbillingaccountstripeinvoices) | **GET** /v1/billing-accounts/invoices | Get invoices
*BillingApi* | [**listBillingAccounts**](docs/Api/BillingApi.md#listbillingaccounts) | **GET** /v1/billing-accounts | List billing accounts
*BillingApi* | [**listOutstandingStripeInvoices**](docs/Api/BillingApi.md#listoutstandingstripeinvoices) | **GET** /v1/billing-accounts/invoices/outstanding | Get outstanding invoices
*BillingApi* | [**removeBillingAccountPaymentMethod**](docs/Api/BillingApi.md#removebillingaccountpaymentmethod) | **DELETE** /v1/billing-accounts/{id}/payment-methods/{paymentMethodId} | Remove payment method
*BillingApi* | [**setBillingAccountDefaultPaymentMethod**](docs/Api/BillingApi.md#setbillingaccountdefaultpaymentmethod) | **POST** /v1/billing-accounts/{id}/payment-methods/{paymentMethodId}/set-default | Set default payment method
*BillingApi* | [**updateBillingAccount**](docs/Api/BillingApi.md#updatebillingaccount) | **PATCH** /v1/billing-accounts/{billingAccount.id} | Update billing account
*DataCentersApi* | [**countHosts**](docs/Api/DataCentersApi.md#counthosts) | **GET** /v1/data-centers/{dataCenterId}/host-count | Get host count
*DataCentersApi* | [**createDataCenter**](docs/Api/DataCentersApi.md#createdatacenter) | **POST** /v1/data-centers | Create data center
*DataCentersApi* | [**deleteDataCenter**](docs/Api/DataCentersApi.md#deletedatacenter) | **DELETE** /v1/data-centers/{id} | Delete data center
*DataCentersApi* | [**getDataCenter**](docs/Api/DataCentersApi.md#getdatacenter) | **GET** /v1/data-centers/{id} | Get data center
*DataCentersApi* | [**getDataCenterLiveUtilization**](docs/Api/DataCentersApi.md#getdatacenterliveutilization) | **GET** /v1/data-centers/{id}/live-utilization | Get live utilization
*DataCentersApi* | [**getDataCenterRevenueByResource**](docs/Api/DataCentersApi.md#getdatacenterrevenuebyresource) | **GET** /v1/data-centers/{id}/revenue-by-resource | Get revenue by resource
*DataCentersApi* | [**getDataCenterRevenueTimeSeries**](docs/Api/DataCentersApi.md#getdatacenterrevenuetimeseries) | **GET** /v1/data-centers/{id}/revenue | Get revenue time series
*DataCentersApi* | [**listClusters**](docs/Api/DataCentersApi.md#listclusters) | **GET** /v1/data-centers/{dataCenterId}/clusters | List clusters
*DataCentersApi* | [**listDataCenters**](docs/Api/DataCentersApi.md#listdatacenters) | **GET** /v1/data-centers | List data centers
*DataCentersApi* | [**listHosts**](docs/Api/DataCentersApi.md#listhosts) | **GET** /v1/data-centers/{dataCenterId}/hosts | List hosts
*DataCentersApi* | [**updateDataCenter**](docs/Api/DataCentersApi.md#updatedatacenter) | **PATCH** /v1/data-centers/{dataCenter.id} | Update data center
*DisksApi* | [**attachStorageDisk**](docs/Api/DisksApi.md#attachstoragedisk) | **PATCH** /v1/projects/{projectId}/disk/{id}/attach | Attach storage disk to VM
*DisksApi* | [**createDiskSnapshot**](docs/Api/DisksApi.md#createdisksnapshot) | **POST** /v1/projects/{projectId}/disks/{id}/snapshots | Create Disk Snapshot
*DisksApi* | [**createStorageDisk**](docs/Api/DisksApi.md#createstoragedisk) | **POST** /v1/projects/{projectId}/disks | Create storage disk
*DisksApi* | [**deleteDiskSnapshot**](docs/Api/DisksApi.md#deletedisksnapshot) | **DELETE** /v1/projects/{projectId}/disks/{id}/snapshots | Delete Disk Snapshots
*DisksApi* | [**deleteStorageDisk**](docs/Api/DisksApi.md#deletestoragedisk) | **DELETE** /v1/projects/{projectId}/disks/{id} | Delete storage disk
*DisksApi* | [**detachStorageDisk**](docs/Api/DisksApi.md#detachstoragedisk) | **PUT** /v1/projects/{projectId}/disk/{id}/detach | Detach storage disk from VM
*DisksApi* | [**getDisk**](docs/Api/DisksApi.md#getdisk) | **GET** /v1/projects/{projectId}/disks/{id} | List disks
*DisksApi* | [**listDiskSnapshots**](docs/Api/DisksApi.md#listdisksnapshots) | **GET** /v1/projects/{projectId}/disks/{id}/snapshots | List Disk Snapshots
*DisksApi* | [**listDisks**](docs/Api/DisksApi.md#listdisks) | **GET** /v1/projects/{projectId}/disks | List disks
*DisksApi* | [**revertDisk**](docs/Api/DisksApi.md#revertdisk) | **POST** /v1/projects/{projectId}/disks/{id}/revert | Revert Disk to Snapshot
*MachineTypesApi* | [**getMachineType**](docs/Api/MachineTypesApi.md#getmachinetype) | **GET** /v1/data-centers/{dataCenterId}/machine-types/{machineType} | Get
*MachineTypesApi* | [**getMachineTypeLiveUtilization**](docs/Api/MachineTypesApi.md#getmachinetypeliveutilization) | **GET** /v1/data-centers/{dataCenterId}/machine-types/{machineType}/live-utilization | Get
*MachineTypesApi* | [**listMachineTypes**](docs/Api/MachineTypesApi.md#listmachinetypes) | **GET** /v1/data-centers/{dataCenterId}/machine-types | Get
*NetworksApi* | [**createNetwork**](docs/Api/NetworksApi.md#createnetwork) | **POST** /v1/projects/{projectId}/networks | Create network
*NetworksApi* | [**createSecurityGroup**](docs/Api/NetworksApi.md#createsecuritygroup) | **POST** /v1/projects/{securityGroup.projectId}/networks/security-groups | Create security group
*NetworksApi* | [**deleteNetwork**](docs/Api/NetworksApi.md#deletenetwork) | **DELETE** /v1/projects/{projectId}/networks/{id} | Delete network
*NetworksApi* | [**deleteSecurityGroup**](docs/Api/NetworksApi.md#deletesecuritygroup) | **DELETE** /v1/projects/{projectId}/networks/security-groups/{id} | Delete security group
*NetworksApi* | [**getNetwork**](docs/Api/NetworksApi.md#getnetwork) | **GET** /v1/projects/{projectId}/networks/{id} | Get network
*NetworksApi* | [**getSecurityGroup**](docs/Api/NetworksApi.md#getsecuritygroup) | **GET** /v1/projects/{projectId}/networks/security-groups/{id} | Get a security group
*NetworksApi* | [**listNetworks**](docs/Api/NetworksApi.md#listnetworks) | **GET** /v1/projects/{projectId}/networks | List networks
*NetworksApi* | [**listSecurityGroups**](docs/Api/NetworksApi.md#listsecuritygroups) | **GET** /v1/projects/{projectId}/networks/security-groups | List security groups
*NetworksApi* | [**startNetwork**](docs/Api/NetworksApi.md#startnetwork) | **POST** /v1/projects/{projectId}/networks/{id}/start | Start network
*NetworksApi* | [**stopNetwork**](docs/Api/NetworksApi.md#stopnetwork) | **POST** /v1/projects/{projectId}/networks/{id}/stop | Stop network
*NetworksApi* | [**updateSecurityGroup**](docs/Api/NetworksApi.md#updatesecuritygroup) | **PATCH** /v1/projects/{securityGroup.projectId}/networks/security-groups/{securityGroup.id} | Update security group
*ObjectStorageApi* | [**activate**](docs/Api/ObjectStorageApi.md#activate) | **POST** /v1/projects/{projectId}/object-storage/activate | Allow the use of S3 compatible storage in a project
*ObjectStorageApi* | [**createObjectStorageUser**](docs/Api/ObjectStorageApi.md#createobjectstorageuser) | **POST** /v1/projects/{projectId}/object-storage/users | Create user that stores keys for storage buckets
*ObjectStorageApi* | [**deleteObjectStorageKey**](docs/Api/ObjectStorageApi.md#deleteobjectstoragekey) | **POST** /v1/projects/{projectId}/object-storage/users/{id}/keys | Delete object storage user
*ObjectStorageApi* | [**deleteObjectStorageUser**](docs/Api/ObjectStorageApi.md#deleteobjectstorageuser) | **DELETE** /v1/projects/{projectId}/object-storage/users/{id} | Delete object storage user
*ObjectStorageApi* | [**generateObjectStorageKey**](docs/Api/ObjectStorageApi.md#generateobjectstoragekey) | **POST** /v1/projects/{projectId}/object-storage/users/{id} | Generate access key for storage buckets
*ObjectStorageApi* | [**getObjectStorageBucket**](docs/Api/ObjectStorageApi.md#getobjectstoragebucket) | **GET** /v1/projects/{projectId}/object-storage/buckets/{id} | Get details for a bucket
*ObjectStorageApi* | [**getObjectStorageSessionKey**](docs/Api/ObjectStorageApi.md#getobjectstoragesessionkey) | **GET** /v1/projects/{projectId}/object-storage/session-key | Generate temporary key for storage bucket access
*ObjectStorageApi* | [**listObjectStorageBuckets**](docs/Api/ObjectStorageApi.md#listobjectstoragebuckets) | **GET** /v1/projects/{projectId}/object-storage/buckets | List buckets
*ObjectStorageApi* | [**listObjectStorageKeys**](docs/Api/ObjectStorageApi.md#listobjectstoragekeys) | **GET** /v1/projects/{projectId}/object-storage/users/{id}/keys | List storage user keys
*ObjectStorageApi* | [**listObjectStorageUsers**](docs/Api/ObjectStorageApi.md#listobjectstorageusers) | **GET** /v1/projects/{projectId}/object-storage/users | List storage users
*PermissionsApi* | [**addBillingAccountUserPermission**](docs/Api/PermissionsApi.md#addbillingaccountuserpermission) | **POST** /v1/billing-accounts/{billingAccountId}/add-user-permission | Add billing account user
*PermissionsApi* | [**addDataCenterUserPermission**](docs/Api/PermissionsApi.md#adddatacenteruserpermission) | **POST** /v1/data-centers/{dataCenterId}/add-user-permission | Add data center user
*PermissionsApi* | [**addProjectUserPermission**](docs/Api/PermissionsApi.md#addprojectuserpermission) | **POST** /v1/projects/{projectId}/add-user-permission | Add project user
*PermissionsApi* | [**listUserPermissions**](docs/Api/PermissionsApi.md#listuserpermissions) | **GET** /v1/auth/permissions | List
*PermissionsApi* | [**removeBillingAccountUserPermission**](docs/Api/PermissionsApi.md#removebillingaccountuserpermission) | **POST** /v1/billing-accounts/{billingAccountId}/remove-user-permission | Remove billing account user
*PermissionsApi* | [**removeDataCenterUserPermission**](docs/Api/PermissionsApi.md#removedatacenteruserpermission) | **POST** /v1/data-centers/{dataCenterId}/remove-user-permission | Remove data center user
*PermissionsApi* | [**removeProjectUserPermission**](docs/Api/PermissionsApi.md#removeprojectuserpermission) | **POST** /v1/projects/{projectId}/remove-user-permission | Remove project user
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /v1/projects | Create
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /v1/projects/{id} | Delete
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /v1/projects/{id} | Get
*ProjectsApi* | [**listProjectSshKeys**](docs/Api/ProjectsApi.md#listprojectsshkeys) | **GET** /v1/project/{projectId}/ssh-keys | List SSH keys
*ProjectsApi* | [**listProjects**](docs/Api/ProjectsApi.md#listprojects) | **GET** /v1/projects | List
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PATCH** /v1/projects/{project.id} | Update
*SSHKeysApi* | [**createSshKey**](docs/Api/SSHKeysApi.md#createsshkey) | **POST** /v1/ssh-keys | Create
*SSHKeysApi* | [**deleteSshKey**](docs/Api/SSHKeysApi.md#deletesshkey) | **DELETE** /v1/ssh-keys/{id} | Delete
*SSHKeysApi* | [**getSshKey**](docs/Api/SSHKeysApi.md#getsshkey) | **GET** /v1/ssh-keys/{id} | Get
*SSHKeysApi* | [**listSshKeys**](docs/Api/SSHKeysApi.md#listsshkeys) | **GET** /v1/ssh-keys | List
*SearchApi* | [**listRegions**](docs/Api/SearchApi.md#listregions) | **GET** /v1/regions | Regions
*UserApi* | [**createIdentityVerificationSession**](docs/Api/UserApi.md#createidentityverificationsession) | **GET** /v1/auth/create-identity-verification-session | Get identity verification session
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /v1/auth | Delete
*UserApi* | [**get**](docs/Api/UserApi.md#get) | **GET** /v1/auth | Get
*VirtualMachinesApi* | [**attachSecurityGroup**](docs/Api/VirtualMachinesApi.md#attachsecuritygroup) | **PATCH** /v1/projects/{projectId}/vm/{id}/security-group/attach | Attach security group to VM
*VirtualMachinesApi* | [**connectVM**](docs/Api/VirtualMachinesApi.md#connectvm) | **GET** /v1/projects/{projectId}/vms/{id}/connect | Connect via VNC
*VirtualMachinesApi* | [**countVMs**](docs/Api/VirtualMachinesApi.md#countvms) | **GET** /v1/projects/{projectId}/count-vms | Count
*VirtualMachinesApi* | [**createPrivateVMImage**](docs/Api/VirtualMachinesApi.md#createprivatevmimage) | **POST** /v1/projects/{projectId}/images | Create private VM image
*VirtualMachinesApi* | [**createVM**](docs/Api/VirtualMachinesApi.md#createvm) | **POST** /v1/projects/{projectId}/vm | Create virtual machine
*VirtualMachinesApi* | [**deletePrivateVMImage**](docs/Api/VirtualMachinesApi.md#deleteprivatevmimage) | **DELETE** /v1/projects/{projectId}/images/{id} | Delete private VM image
*VirtualMachinesApi* | [**detachSecurityGroup**](docs/Api/VirtualMachinesApi.md#detachsecuritygroup) | **PATCH** /v1/projects/{projectId}/vm/{id}/security-group/detach | Attach security group to VM
*VirtualMachinesApi* | [**getPrivateVMImage**](docs/Api/VirtualMachinesApi.md#getprivatevmimage) | **GET** /v1/projects/{projectId}/images/{id} | Get private VM image
*VirtualMachinesApi* | [**getVM**](docs/Api/VirtualMachinesApi.md#getvm) | **GET** /v1/projects/{projectId}/vms/{id} | Get
*VirtualMachinesApi* | [**listPrivateVMImages**](docs/Api/VirtualMachinesApi.md#listprivatevmimages) | **GET** /v1/projects/{projectId}/images | List private VM images
*VirtualMachinesApi* | [**listPublicVMImages**](docs/Api/VirtualMachinesApi.md#listpublicvmimages) | **GET** /v1/vms/public-images | List public VM images
*VirtualMachinesApi* | [**listVMDataCenters**](docs/Api/VirtualMachinesApi.md#listvmdatacenters) | **GET** /v1/vms/data-centers | List data centers
*VirtualMachinesApi* | [**listVMDisks**](docs/Api/VirtualMachinesApi.md#listvmdisks) | **GET** /v1/projects/{projectId}/vms/{id}/disks | List disks attached to VM
*VirtualMachinesApi* | [**listVMMachineTypes**](docs/Api/VirtualMachinesApi.md#listvmmachinetypes) | **GET** /v1/vms/machine-types | List machine types
*VirtualMachinesApi* | [**listVMs**](docs/Api/VirtualMachinesApi.md#listvms) | **GET** /v1/projects/{projectId}/vms | List
*VirtualMachinesApi* | [**monitorVM**](docs/Api/VirtualMachinesApi.md#monitorvm) | **GET** /v1/projects/{projectId}/vms/{id}/monitor | Monitor
*VirtualMachinesApi* | [**rebootVM**](docs/Api/VirtualMachinesApi.md#rebootvm) | **POST** /v1/projects/{projectId}/vms/{id}/reboot | Reboot
*VirtualMachinesApi* | [**resizeVM**](docs/Api/VirtualMachinesApi.md#resizevm) | **POST** /v1/projects/{projectId}/vms/{id}/resize | Resize vCPU and memory of VM
*VirtualMachinesApi* | [**resizeVMDisk**](docs/Api/VirtualMachinesApi.md#resizevmdisk) | **PATCH** /v1/projects/{projectId}/vms/{id}/disks | Resize a VM&#x27;s disk
*VirtualMachinesApi* | [**startVM**](docs/Api/VirtualMachinesApi.md#startvm) | **POST** /v1/projects/{projectId}/vms/{id}/start | Start
*VirtualMachinesApi* | [**stopVM**](docs/Api/VirtualMachinesApi.md#stopvm) | **POST** /v1/projects/{projectId}/vms/{id}/stop | Stop
*VirtualMachinesApi* | [**terminateVM**](docs/Api/VirtualMachinesApi.md#terminatevm) | **POST** /v1/projects/{projectId}/vms/{id}/terminate | Terminate
*VirtualMachinesApi* | [**updatePrivateVMImage**](docs/Api/VirtualMachinesApi.md#updateprivatevmimage) | **POST** /v1/projects/{projectId}/images/{id} | Update private VM image
*VirtualMachinesApi* | [**updateVMMetadata**](docs/Api/VirtualMachinesApi.md#updatevmmetadata) | **POST** /v1/projects/{projectId}/vm/{id}/metadata | Update VM metadata

## Documentation For Models

 - [Any](docs/Model/Any.md)
 - [ApiKey](docs/Model/ApiKey.md)
 - [AttachSecurityGroupResponse](docs/Model/AttachSecurityGroupResponse.md)
 - [AttachStorageDiskResponse](docs/Model/AttachStorageDiskResponse.md)
 - [BillingAccount](docs/Model/BillingAccount.md)
 - [BillingAccountIdAdduserpermissionBody](docs/Model/BillingAccountIdAdduserpermissionBody.md)
 - [BillingAccountIdRemoveuserpermissionBody](docs/Model/BillingAccountIdRemoveuserpermissionBody.md)
 - [BillingAccountPaymentMethod](docs/Model/BillingAccountPaymentMethod.md)
 - [BillingAccountPaymentMethods](docs/Model/BillingAccountPaymentMethods.md)
 - [BillingAccountSetupIntent](docs/Model/BillingAccountSetupIntent.md)
 - [BillingAccountSpendRow](docs/Model/BillingAccountSpendRow.md)
 - [BillingaccountsBillingAccountIdBody](docs/Model/BillingaccountsBillingAccountIdBody.md)
 - [Cluster](docs/Model/Cluster.md)
 - [ConnectVMResponse](docs/Model/ConnectVMResponse.md)
 - [CountHostsResponse](docs/Model/CountHostsResponse.md)
 - [CountVMsResponse](docs/Model/CountVMsResponse.md)
 - [CpuModelCategory](docs/Model/CpuModelCategory.md)
 - [CreateBillingAccountRequest](docs/Model/CreateBillingAccountRequest.md)
 - [CreateDiskSnapshotResponse](docs/Model/CreateDiskSnapshotResponse.md)
 - [CreateNetworkResponse](docs/Model/CreateNetworkResponse.md)
 - [CreatePrivateVMImageResponse](docs/Model/CreatePrivateVMImageResponse.md)
 - [CreateSecurityGroupResponse](docs/Model/CreateSecurityGroupResponse.md)
 - [CreateStorageDiskResponse](docs/Model/CreateStorageDiskResponse.md)
 - [CreateVMRequestNIC](docs/Model/CreateVMRequestNIC.md)
 - [CreateVMResponse](docs/Model/CreateVMResponse.md)
 - [DataCenter](docs/Model/DataCenter.md)
 - [DataCenterCategory](docs/Model/DataCenterCategory.md)
 - [DataCenterIdAdduserpermissionBody](docs/Model/DataCenterIdAdduserpermissionBody.md)
 - [DataCenterIdRemoveuserpermissionBody](docs/Model/DataCenterIdRemoveuserpermissionBody.md)
 - [DataCenterRevenueResource](docs/Model/DataCenterRevenueResource.md)
 - [DataCenterTimeRevenue](docs/Model/DataCenterTimeRevenue.md)
 - [DatacentersDataCenterIdBody](docs/Model/DatacentersDataCenterIdBody.md)
 - [Decimal](docs/Model/Decimal.md)
 - [DeleteDiskSnapshotResponse](docs/Model/DeleteDiskSnapshotResponse.md)
 - [DeleteNetworkResponse](docs/Model/DeleteNetworkResponse.md)
 - [DeleteObjectStorageKeyResponse](docs/Model/DeleteObjectStorageKeyResponse.md)
 - [DeleteObjectStorageUserResponse](docs/Model/DeleteObjectStorageUserResponse.md)
 - [DeletePrivateVMImageResponse](docs/Model/DeletePrivateVMImageResponse.md)
 - [DeleteSecurityGroupResponse](docs/Model/DeleteSecurityGroupResponse.md)
 - [DeleteStorageDiskResponse](docs/Model/DeleteStorageDiskResponse.md)
 - [DetachSecurityGroupResponse](docs/Model/DetachSecurityGroupResponse.md)
 - [DetachStorageDiskResponse](docs/Model/DetachStorageDiskResponse.md)
 - [Disk](docs/Model/Disk.md)
 - [DiskState](docs/Model/DiskState.md)
 - [DiskStorageClass](docs/Model/DiskStorageClass.md)
 - [DiskStoragePriceHr](docs/Model/DiskStoragePriceHr.md)
 - [DiskType](docs/Model/DiskType.md)
 - [GenerateApiKeyRequest](docs/Model/GenerateApiKeyRequest.md)
 - [GetBillingAccountDetailsResponse](docs/Model/GetBillingAccountDetailsResponse.md)
 - [GetBillingAccountSpendDetailsResponse](docs/Model/GetBillingAccountSpendDetailsResponse.md)
 - [GetBillingAccountStripeInvoicesResponse](docs/Model/GetBillingAccountStripeInvoicesResponse.md)
 - [GetDataCenterLiveUtilizationResponse](docs/Model/GetDataCenterLiveUtilizationResponse.md)
 - [GetDataCenterRevenueByResourceResponse](docs/Model/GetDataCenterRevenueByResourceResponse.md)
 - [GetDataCenterRevenueTimeSeriesResponse](docs/Model/GetDataCenterRevenueTimeSeriesResponse.md)
 - [GetDiskResponse](docs/Model/GetDiskResponse.md)
 - [GetMachineTypeLiveUtilizationResponse](docs/Model/GetMachineTypeLiveUtilizationResponse.md)
 - [GetMachineTypeResponse](docs/Model/GetMachineTypeResponse.md)
 - [GetNetworkResponse](docs/Model/GetNetworkResponse.md)
 - [GetObjectStorageSessionKeyResponse](docs/Model/GetObjectStorageSessionKeyResponse.md)
 - [GetPrivateVMImageResponse](docs/Model/GetPrivateVMImageResponse.md)
 - [GetSecurityGroupResponse](docs/Model/GetSecurityGroupResponse.md)
 - [GetVMResponse](docs/Model/GetVMResponse.md)
 - [GpuModelCategory](docs/Model/GpuModelCategory.md)
 - [Host](docs/Model/Host.md)
 - [HostConfigCategory](docs/Model/HostConfigCategory.md)
 - [IdMetadataBody](docs/Model/IdMetadataBody.md)
 - [IdSnapshotsBody](docs/Model/IdSnapshotsBody.md)
 - [IdentityVerificationSession](docs/Model/IdentityVerificationSession.md)
 - [Image](docs/Model/Image.md)
 - [Interval](docs/Model/Interval.md)
 - [Invoice](docs/Model/Invoice.md)
 - [ListApiKeysResponse](docs/Model/ListApiKeysResponse.md)
 - [ListBillingAccountsResponse](docs/Model/ListBillingAccountsResponse.md)
 - [ListClustersResponse](docs/Model/ListClustersResponse.md)
 - [ListDataCentersResponse](docs/Model/ListDataCentersResponse.md)
 - [ListDiskSnapshotsResponse](docs/Model/ListDiskSnapshotsResponse.md)
 - [ListDisksResponse](docs/Model/ListDisksResponse.md)
 - [ListHostsResponse](docs/Model/ListHostsResponse.md)
 - [ListMachineTypesResponse](docs/Model/ListMachineTypesResponse.md)
 - [ListNetworksResponse](docs/Model/ListNetworksResponse.md)
 - [ListObjectStorageBucketsResponse](docs/Model/ListObjectStorageBucketsResponse.md)
 - [ListObjectStorageKeysResponse](docs/Model/ListObjectStorageKeysResponse.md)
 - [ListObjectStorageUsersResponse](docs/Model/ListObjectStorageUsersResponse.md)
 - [ListOutstandingStripeInvoicesResponse](docs/Model/ListOutstandingStripeInvoicesResponse.md)
 - [ListPrivateVMImagesResponse](docs/Model/ListPrivateVMImagesResponse.md)
 - [ListPrivateVMImagesResponsePrivateImage](docs/Model/ListPrivateVMImagesResponsePrivateImage.md)
 - [ListProjectSshKeysResponse](docs/Model/ListProjectSshKeysResponse.md)
 - [ListProjectsResponse](docs/Model/ListProjectsResponse.md)
 - [ListPublicVMImagesResponse](docs/Model/ListPublicVMImagesResponse.md)
 - [ListRegionsResponse](docs/Model/ListRegionsResponse.md)
 - [ListSecurityGroupsResponse](docs/Model/ListSecurityGroupsResponse.md)
 - [ListSshKeysResponse](docs/Model/ListSshKeysResponse.md)
 - [ListUserPermissionsResponse](docs/Model/ListUserPermissionsResponse.md)
 - [ListVMDataCentersResponse](docs/Model/ListVMDataCentersResponse.md)
 - [ListVMDisksResponse](docs/Model/ListVMDisksResponse.md)
 - [ListVMMachineTypesRequest](docs/Model/ListVMMachineTypesRequest.md)
 - [ListVMMachineTypesResponse](docs/Model/ListVMMachineTypesResponse.md)
 - [ListVMsResponse](docs/Model/ListVMsResponse.md)
 - [MachineType](docs/Model/MachineType.md)
 - [MonitorVMResponse](docs/Model/MonitorVMResponse.md)
 - [Network](docs/Model/Network.md)
 - [NetworkPriceHr](docs/Model/NetworkPriceHr.md)
 - [NetworkState](docs/Model/NetworkState.md)
 - [NetworksSecuritygroupsBody](docs/Model/NetworksSecuritygroupsBody.md)
 - [ObjectStorageBucket](docs/Model/ObjectStorageBucket.md)
 - [ObjectStorageKey](docs/Model/ObjectStorageKey.md)
 - [ObjectStorageUser](docs/Model/ObjectStorageUser.md)
 - [ObjectstorageActivateBody](docs/Model/ObjectstorageActivateBody.md)
 - [ObjectstorageUsersBody](docs/Model/ObjectstorageUsersBody.md)
 - [PaymentMethodCard](docs/Model/PaymentMethodCard.md)
 - [PaymentMethodPaypal](docs/Model/PaymentMethodPaypal.md)
 - [Point](docs/Model/Point.md)
 - [Profile](docs/Model/Profile.md)
 - [Project](docs/Model/Project.md)
 - [ProjectIdAdduserpermissionBody](docs/Model/ProjectIdAdduserpermissionBody.md)
 - [ProjectIdDisksBody](docs/Model/ProjectIdDisksBody.md)
 - [ProjectIdNetworksBody](docs/Model/ProjectIdNetworksBody.md)
 - [ProjectIdRemoveuserpermissionBody](docs/Model/ProjectIdRemoveuserpermissionBody.md)
 - [ProjectIdVmBody](docs/Model/ProjectIdVmBody.md)
 - [ProjectsProjectIdBody](docs/Model/ProjectsProjectIdBody.md)
 - [Protocol](docs/Model/Protocol.md)
 - [RebootVMResponse](docs/Model/RebootVMResponse.md)
 - [Region](docs/Model/Region.md)
 - [RemoveBillingAccountPaymentMethodResponse](docs/Model/RemoveBillingAccountPaymentMethodResponse.md)
 - [ResizeVMDiskResponse](docs/Model/ResizeVMDiskResponse.md)
 - [ResizeVMResponse](docs/Model/ResizeVMResponse.md)
 - [RevertDiskResponse](docs/Model/RevertDiskResponse.md)
 - [Role](docs/Model/Role.md)
 - [Rule](docs/Model/Rule.md)
 - [RuleType](docs/Model/RuleType.md)
 - [SecurityGroup](docs/Model/SecurityGroup.md)
 - [SecurityGroupRule](docs/Model/SecurityGroupRule.md)
 - [SecuritygroupsSecurityGroupIdBody](docs/Model/SecuritygroupsSecurityGroupIdBody.md)
 - [SetBillingAccountDefaultPaymentMethodResponse](docs/Model/SetBillingAccountDefaultPaymentMethodResponse.md)
 - [Snapshot](docs/Model/Snapshot.md)
 - [SshKey](docs/Model/SshKey.md)
 - [SshKeySource](docs/Model/SshKeySource.md)
 - [StartNetworkResponse](docs/Model/StartNetworkResponse.md)
 - [StartVMResponse](docs/Model/StartVMResponse.md)
 - [Status](docs/Model/Status.md)
 - [StopNetworkResponse](docs/Model/StopNetworkResponse.md)
 - [StopVMResponse](docs/Model/StopVMResponse.md)
 - [StripeCustomer](docs/Model/StripeCustomer.md)
 - [TaxId](docs/Model/TaxId.md)
 - [TerminateVMResponse](docs/Model/TerminateVMResponse.md)
 - [Unit](docs/Model/Unit.md)
 - [UpdatePrivateVMImageResponse](docs/Model/UpdatePrivateVMImageResponse.md)
 - [UpdateSecurityGroupResponse](docs/Model/UpdateSecurityGroupResponse.md)
 - [UpdateVMMetadataResponse](docs/Model/UpdateVMMetadataResponse.md)
 - [UserPermission](docs/Model/UserPermission.md)
 - [V1PrivateImage](docs/Model/V1PrivateImage.md)
 - [V1billingaccountsbillingAccountIdBillingAccount](docs/Model/V1billingaccountsbillingAccountIdBillingAccount.md)
 - [VM](docs/Model/VM.md)
 - [VMDataCenter](docs/Model/VMDataCenter.md)
 - [VMDataCenterStorageClass](docs/Model/VMDataCenterStorageClass.md)
 - [VMMonitoringItem](docs/Model/VMMonitoringItem.md)
 - [VMNIC](docs/Model/VMNIC.md)
 - [VRouterSize](docs/Model/VRouterSize.md)
 - [VmState](docs/Model/VmState.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



