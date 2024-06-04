<?php
/**
 * ProjectIdVmBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cudo Compute service
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.57
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ProjectIdVmBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectIdVmBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'projectId_vm_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'boot_disk' => '\Swagger\Client\Model\Disk',
        'boot_disk_image_id' => 'string',
        'cpu_model' => 'string',
        'custom_ssh_keys' => 'string[]',
        'data_center_id' => 'string',
        'gpu_model' => 'string',
        'gpus' => 'int',
        'machine_type' => 'string',
        'max_price_hr' => '\Swagger\Client\Model\Decimal',
        'memory_gib' => 'int',
        'metadata' => 'map[string,string]',
        'nics' => '\Swagger\Client\Model\CreateVMRequestNIC[]',
        'password' => 'string',
        'security_group_ids' => 'string[]',
        'ssh_key_source' => '\Swagger\Client\Model\SshKeySource',
        'start_script' => 'string',
        'storage_disk_ids' => 'string[]',
        'vcpus' => 'int',
        'vm_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'boot_disk' => null,
        'boot_disk_image_id' => null,
        'cpu_model' => null,
        'custom_ssh_keys' => null,
        'data_center_id' => null,
        'gpu_model' => null,
        'gpus' => 'int32',
        'machine_type' => null,
        'max_price_hr' => null,
        'memory_gib' => 'int32',
        'metadata' => null,
        'nics' => null,
        'password' => null,
        'security_group_ids' => null,
        'ssh_key_source' => null,
        'start_script' => null,
        'storage_disk_ids' => null,
        'vcpus' => 'int32',
        'vm_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'boot_disk' => 'bootDisk',
        'boot_disk_image_id' => 'bootDiskImageId',
        'cpu_model' => 'cpuModel',
        'custom_ssh_keys' => 'customSshKeys',
        'data_center_id' => 'dataCenterId',
        'gpu_model' => 'gpuModel',
        'gpus' => 'gpus',
        'machine_type' => 'machineType',
        'max_price_hr' => 'maxPriceHr',
        'memory_gib' => 'memoryGib',
        'metadata' => 'metadata',
        'nics' => 'nics',
        'password' => 'password',
        'security_group_ids' => 'securityGroupIds',
        'ssh_key_source' => 'sshKeySource',
        'start_script' => 'startScript',
        'storage_disk_ids' => 'storageDiskIds',
        'vcpus' => 'vcpus',
        'vm_id' => 'vmId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'boot_disk' => 'setBootDisk',
        'boot_disk_image_id' => 'setBootDiskImageId',
        'cpu_model' => 'setCpuModel',
        'custom_ssh_keys' => 'setCustomSshKeys',
        'data_center_id' => 'setDataCenterId',
        'gpu_model' => 'setGpuModel',
        'gpus' => 'setGpus',
        'machine_type' => 'setMachineType',
        'max_price_hr' => 'setMaxPriceHr',
        'memory_gib' => 'setMemoryGib',
        'metadata' => 'setMetadata',
        'nics' => 'setNics',
        'password' => 'setPassword',
        'security_group_ids' => 'setSecurityGroupIds',
        'ssh_key_source' => 'setSshKeySource',
        'start_script' => 'setStartScript',
        'storage_disk_ids' => 'setStorageDiskIds',
        'vcpus' => 'setVcpus',
        'vm_id' => 'setVmId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boot_disk' => 'getBootDisk',
        'boot_disk_image_id' => 'getBootDiskImageId',
        'cpu_model' => 'getCpuModel',
        'custom_ssh_keys' => 'getCustomSshKeys',
        'data_center_id' => 'getDataCenterId',
        'gpu_model' => 'getGpuModel',
        'gpus' => 'getGpus',
        'machine_type' => 'getMachineType',
        'max_price_hr' => 'getMaxPriceHr',
        'memory_gib' => 'getMemoryGib',
        'metadata' => 'getMetadata',
        'nics' => 'getNics',
        'password' => 'getPassword',
        'security_group_ids' => 'getSecurityGroupIds',
        'ssh_key_source' => 'getSshKeySource',
        'start_script' => 'getStartScript',
        'storage_disk_ids' => 'getStorageDiskIds',
        'vcpus' => 'getVcpus',
        'vm_id' => 'getVmId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['boot_disk'] = isset($data['boot_disk']) ? $data['boot_disk'] : null;
        $this->container['boot_disk_image_id'] = isset($data['boot_disk_image_id']) ? $data['boot_disk_image_id'] : null;
        $this->container['cpu_model'] = isset($data['cpu_model']) ? $data['cpu_model'] : null;
        $this->container['custom_ssh_keys'] = isset($data['custom_ssh_keys']) ? $data['custom_ssh_keys'] : null;
        $this->container['data_center_id'] = isset($data['data_center_id']) ? $data['data_center_id'] : null;
        $this->container['gpu_model'] = isset($data['gpu_model']) ? $data['gpu_model'] : null;
        $this->container['gpus'] = isset($data['gpus']) ? $data['gpus'] : null;
        $this->container['machine_type'] = isset($data['machine_type']) ? $data['machine_type'] : null;
        $this->container['max_price_hr'] = isset($data['max_price_hr']) ? $data['max_price_hr'] : null;
        $this->container['memory_gib'] = isset($data['memory_gib']) ? $data['memory_gib'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['security_group_ids'] = isset($data['security_group_ids']) ? $data['security_group_ids'] : null;
        $this->container['ssh_key_source'] = isset($data['ssh_key_source']) ? $data['ssh_key_source'] : null;
        $this->container['start_script'] = isset($data['start_script']) ? $data['start_script'] : null;
        $this->container['storage_disk_ids'] = isset($data['storage_disk_ids']) ? $data['storage_disk_ids'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['vm_id'] = isset($data['vm_id']) ? $data['vm_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['boot_disk_image_id'] === null) {
            $invalidProperties[] = "'boot_disk_image_id' can't be null";
        }
        if ($this->container['vm_id'] === null) {
            $invalidProperties[] = "'vm_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets boot_disk
     *
     * @return \Swagger\Client\Model\Disk
     */
    public function getBootDisk()
    {
        return $this->container['boot_disk'];
    }

    /**
     * Sets boot_disk
     *
     * @param \Swagger\Client\Model\Disk $boot_disk boot_disk
     *
     * @return $this
     */
    public function setBootDisk($boot_disk)
    {
        $this->container['boot_disk'] = $boot_disk;

        return $this;
    }

    /**
     * Gets boot_disk_image_id
     *
     * @return string
     */
    public function getBootDiskImageId()
    {
        return $this->container['boot_disk_image_id'];
    }

    /**
     * Sets boot_disk_image_id
     *
     * @param string $boot_disk_image_id boot_disk_image_id
     *
     * @return $this
     */
    public function setBootDiskImageId($boot_disk_image_id)
    {
        $this->container['boot_disk_image_id'] = $boot_disk_image_id;

        return $this;
    }

    /**
     * Gets cpu_model
     *
     * @return string
     */
    public function getCpuModel()
    {
        return $this->container['cpu_model'];
    }

    /**
     * Sets cpu_model
     *
     * @param string $cpu_model cpu_model
     *
     * @return $this
     */
    public function setCpuModel($cpu_model)
    {
        $this->container['cpu_model'] = $cpu_model;

        return $this;
    }

    /**
     * Gets custom_ssh_keys
     *
     * @return string[]
     */
    public function getCustomSshKeys()
    {
        return $this->container['custom_ssh_keys'];
    }

    /**
     * Sets custom_ssh_keys
     *
     * @param string[] $custom_ssh_keys custom_ssh_keys
     *
     * @return $this
     */
    public function setCustomSshKeys($custom_ssh_keys)
    {
        $this->container['custom_ssh_keys'] = $custom_ssh_keys;

        return $this;
    }

    /**
     * Gets data_center_id
     *
     * @return string
     */
    public function getDataCenterId()
    {
        return $this->container['data_center_id'];
    }

    /**
     * Sets data_center_id
     *
     * @param string $data_center_id data_center_id
     *
     * @return $this
     */
    public function setDataCenterId($data_center_id)
    {
        $this->container['data_center_id'] = $data_center_id;

        return $this;
    }

    /**
     * Gets gpu_model
     *
     * @return string
     */
    public function getGpuModel()
    {
        return $this->container['gpu_model'];
    }

    /**
     * Sets gpu_model
     *
     * @param string $gpu_model gpu_model
     *
     * @return $this
     */
    public function setGpuModel($gpu_model)
    {
        $this->container['gpu_model'] = $gpu_model;

        return $this;
    }

    /**
     * Gets gpus
     *
     * @return int
     */
    public function getGpus()
    {
        return $this->container['gpus'];
    }

    /**
     * Sets gpus
     *
     * @param int $gpus gpus
     *
     * @return $this
     */
    public function setGpus($gpus)
    {
        $this->container['gpus'] = $gpus;

        return $this;
    }

    /**
     * Gets machine_type
     *
     * @return string
     */
    public function getMachineType()
    {
        return $this->container['machine_type'];
    }

    /**
     * Sets machine_type
     *
     * @param string $machine_type machine_type
     *
     * @return $this
     */
    public function setMachineType($machine_type)
    {
        $this->container['machine_type'] = $machine_type;

        return $this;
    }

    /**
     * Gets max_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getMaxPriceHr()
    {
        return $this->container['max_price_hr'];
    }

    /**
     * Sets max_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $max_price_hr max_price_hr
     *
     * @return $this
     */
    public function setMaxPriceHr($max_price_hr)
    {
        $this->container['max_price_hr'] = $max_price_hr;

        return $this;
    }

    /**
     * Gets memory_gib
     *
     * @return int
     */
    public function getMemoryGib()
    {
        return $this->container['memory_gib'];
    }

    /**
     * Sets memory_gib
     *
     * @param int $memory_gib memory_gib
     *
     * @return $this
     */
    public function setMemoryGib($memory_gib)
    {
        $this->container['memory_gib'] = $memory_gib;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets nics
     *
     * @return \Swagger\Client\Model\CreateVMRequestNIC[]
     */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
     * Sets nics
     *
     * @param \Swagger\Client\Model\CreateVMRequestNIC[] $nics nics
     *
     * @return $this
     */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets security_group_ids
     *
     * @return string[]
     */
    public function getSecurityGroupIds()
    {
        return $this->container['security_group_ids'];
    }

    /**
     * Sets security_group_ids
     *
     * @param string[] $security_group_ids security_group_ids
     *
     * @return $this
     */
    public function setSecurityGroupIds($security_group_ids)
    {
        $this->container['security_group_ids'] = $security_group_ids;

        return $this;
    }

    /**
     * Gets ssh_key_source
     *
     * @return \Swagger\Client\Model\SshKeySource
     */
    public function getSshKeySource()
    {
        return $this->container['ssh_key_source'];
    }

    /**
     * Sets ssh_key_source
     *
     * @param \Swagger\Client\Model\SshKeySource $ssh_key_source ssh_key_source
     *
     * @return $this
     */
    public function setSshKeySource($ssh_key_source)
    {
        $this->container['ssh_key_source'] = $ssh_key_source;

        return $this;
    }

    /**
     * Gets start_script
     *
     * @return string
     */
    public function getStartScript()
    {
        return $this->container['start_script'];
    }

    /**
     * Sets start_script
     *
     * @param string $start_script start_script
     *
     * @return $this
     */
    public function setStartScript($start_script)
    {
        $this->container['start_script'] = $start_script;

        return $this;
    }

    /**
     * Gets storage_disk_ids
     *
     * @return string[]
     */
    public function getStorageDiskIds()
    {
        return $this->container['storage_disk_ids'];
    }

    /**
     * Sets storage_disk_ids
     *
     * @param string[] $storage_disk_ids storage_disk_ids
     *
     * @return $this
     */
    public function setStorageDiskIds($storage_disk_ids)
    {
        $this->container['storage_disk_ids'] = $storage_disk_ids;

        return $this;
    }

    /**
     * Gets vcpus
     *
     * @return int
     */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
     * Sets vcpus
     *
     * @param int $vcpus vcpus
     *
     * @return $this
     */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;

        return $this;
    }

    /**
     * Gets vm_id
     *
     * @return string
     */
    public function getVmId()
    {
        return $this->container['vm_id'];
    }

    /**
     * Sets vm_id
     *
     * @param string $vm_id vm_id
     *
     * @return $this
     */
    public function setVmId($vm_id)
    {
        $this->container['vm_id'] = $vm_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
