<?php
/**
 * HostConfigCategory
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
 * HostConfigCategory Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HostConfigCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HostConfigCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count_vm_available' => 'int',
        'cpu_model' => 'string',
        'data_center_id' => 'string',
        'gpu_model' => 'string',
        'gpu_price_hr' => '\Swagger\Client\Model\Decimal',
        'id' => 'string',
        'ipv4_price_hr' => '\Swagger\Client\Model\Decimal',
        'machine_type' => 'string',
        'memory_gib_price_hr' => '\Swagger\Client\Model\Decimal',
        'renewable_energy' => 'bool',
        'storage_gib_price_hr' => '\Swagger\Client\Model\Decimal',
        'total_gpu_price_hr' => '\Swagger\Client\Model\Decimal',
        'total_memory_price_hr' => '\Swagger\Client\Model\Decimal',
        'total_price_hr' => '\Swagger\Client\Model\Decimal',
        'total_storage_price_hr' => '\Swagger\Client\Model\Decimal',
        'total_vcpu_price_hr' => '\Swagger\Client\Model\Decimal',
        'vcpu_price_hr' => '\Swagger\Client\Model\Decimal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'count_vm_available' => 'int32',
        'cpu_model' => null,
        'data_center_id' => null,
        'gpu_model' => null,
        'gpu_price_hr' => null,
        'id' => null,
        'ipv4_price_hr' => null,
        'machine_type' => null,
        'memory_gib_price_hr' => null,
        'renewable_energy' => null,
        'storage_gib_price_hr' => null,
        'total_gpu_price_hr' => null,
        'total_memory_price_hr' => null,
        'total_price_hr' => null,
        'total_storage_price_hr' => null,
        'total_vcpu_price_hr' => null,
        'vcpu_price_hr' => null
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
        'count_vm_available' => 'countVmAvailable',
        'cpu_model' => 'cpuModel',
        'data_center_id' => 'dataCenterId',
        'gpu_model' => 'gpuModel',
        'gpu_price_hr' => 'gpuPriceHr',
        'id' => 'id',
        'ipv4_price_hr' => 'ipv4PriceHr',
        'machine_type' => 'machineType',
        'memory_gib_price_hr' => 'memoryGibPriceHr',
        'renewable_energy' => 'renewableEnergy',
        'storage_gib_price_hr' => 'storageGibPriceHr',
        'total_gpu_price_hr' => 'totalGpuPriceHr',
        'total_memory_price_hr' => 'totalMemoryPriceHr',
        'total_price_hr' => 'totalPriceHr',
        'total_storage_price_hr' => 'totalStoragePriceHr',
        'total_vcpu_price_hr' => 'totalVcpuPriceHr',
        'vcpu_price_hr' => 'vcpuPriceHr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count_vm_available' => 'setCountVmAvailable',
        'cpu_model' => 'setCpuModel',
        'data_center_id' => 'setDataCenterId',
        'gpu_model' => 'setGpuModel',
        'gpu_price_hr' => 'setGpuPriceHr',
        'id' => 'setId',
        'ipv4_price_hr' => 'setIpv4PriceHr',
        'machine_type' => 'setMachineType',
        'memory_gib_price_hr' => 'setMemoryGibPriceHr',
        'renewable_energy' => 'setRenewableEnergy',
        'storage_gib_price_hr' => 'setStorageGibPriceHr',
        'total_gpu_price_hr' => 'setTotalGpuPriceHr',
        'total_memory_price_hr' => 'setTotalMemoryPriceHr',
        'total_price_hr' => 'setTotalPriceHr',
        'total_storage_price_hr' => 'setTotalStoragePriceHr',
        'total_vcpu_price_hr' => 'setTotalVcpuPriceHr',
        'vcpu_price_hr' => 'setVcpuPriceHr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count_vm_available' => 'getCountVmAvailable',
        'cpu_model' => 'getCpuModel',
        'data_center_id' => 'getDataCenterId',
        'gpu_model' => 'getGpuModel',
        'gpu_price_hr' => 'getGpuPriceHr',
        'id' => 'getId',
        'ipv4_price_hr' => 'getIpv4PriceHr',
        'machine_type' => 'getMachineType',
        'memory_gib_price_hr' => 'getMemoryGibPriceHr',
        'renewable_energy' => 'getRenewableEnergy',
        'storage_gib_price_hr' => 'getStorageGibPriceHr',
        'total_gpu_price_hr' => 'getTotalGpuPriceHr',
        'total_memory_price_hr' => 'getTotalMemoryPriceHr',
        'total_price_hr' => 'getTotalPriceHr',
        'total_storage_price_hr' => 'getTotalStoragePriceHr',
        'total_vcpu_price_hr' => 'getTotalVcpuPriceHr',
        'vcpu_price_hr' => 'getVcpuPriceHr'
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
        $this->container['count_vm_available'] = isset($data['count_vm_available']) ? $data['count_vm_available'] : null;
        $this->container['cpu_model'] = isset($data['cpu_model']) ? $data['cpu_model'] : null;
        $this->container['data_center_id'] = isset($data['data_center_id']) ? $data['data_center_id'] : null;
        $this->container['gpu_model'] = isset($data['gpu_model']) ? $data['gpu_model'] : null;
        $this->container['gpu_price_hr'] = isset($data['gpu_price_hr']) ? $data['gpu_price_hr'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipv4_price_hr'] = isset($data['ipv4_price_hr']) ? $data['ipv4_price_hr'] : null;
        $this->container['machine_type'] = isset($data['machine_type']) ? $data['machine_type'] : null;
        $this->container['memory_gib_price_hr'] = isset($data['memory_gib_price_hr']) ? $data['memory_gib_price_hr'] : null;
        $this->container['renewable_energy'] = isset($data['renewable_energy']) ? $data['renewable_energy'] : null;
        $this->container['storage_gib_price_hr'] = isset($data['storage_gib_price_hr']) ? $data['storage_gib_price_hr'] : null;
        $this->container['total_gpu_price_hr'] = isset($data['total_gpu_price_hr']) ? $data['total_gpu_price_hr'] : null;
        $this->container['total_memory_price_hr'] = isset($data['total_memory_price_hr']) ? $data['total_memory_price_hr'] : null;
        $this->container['total_price_hr'] = isset($data['total_price_hr']) ? $data['total_price_hr'] : null;
        $this->container['total_storage_price_hr'] = isset($data['total_storage_price_hr']) ? $data['total_storage_price_hr'] : null;
        $this->container['total_vcpu_price_hr'] = isset($data['total_vcpu_price_hr']) ? $data['total_vcpu_price_hr'] : null;
        $this->container['vcpu_price_hr'] = isset($data['vcpu_price_hr']) ? $data['vcpu_price_hr'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['count_vm_available'] === null) {
            $invalidProperties[] = "'count_vm_available' can't be null";
        }
        if ($this->container['cpu_model'] === null) {
            $invalidProperties[] = "'cpu_model' can't be null";
        }
        if ($this->container['data_center_id'] === null) {
            $invalidProperties[] = "'data_center_id' can't be null";
        }
        if ($this->container['gpu_model'] === null) {
            $invalidProperties[] = "'gpu_model' can't be null";
        }
        if ($this->container['gpu_price_hr'] === null) {
            $invalidProperties[] = "'gpu_price_hr' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ipv4_price_hr'] === null) {
            $invalidProperties[] = "'ipv4_price_hr' can't be null";
        }
        if ($this->container['machine_type'] === null) {
            $invalidProperties[] = "'machine_type' can't be null";
        }
        if ($this->container['memory_gib_price_hr'] === null) {
            $invalidProperties[] = "'memory_gib_price_hr' can't be null";
        }
        if ($this->container['renewable_energy'] === null) {
            $invalidProperties[] = "'renewable_energy' can't be null";
        }
        if ($this->container['storage_gib_price_hr'] === null) {
            $invalidProperties[] = "'storage_gib_price_hr' can't be null";
        }
        if ($this->container['total_gpu_price_hr'] === null) {
            $invalidProperties[] = "'total_gpu_price_hr' can't be null";
        }
        if ($this->container['total_memory_price_hr'] === null) {
            $invalidProperties[] = "'total_memory_price_hr' can't be null";
        }
        if ($this->container['total_price_hr'] === null) {
            $invalidProperties[] = "'total_price_hr' can't be null";
        }
        if ($this->container['total_storage_price_hr'] === null) {
            $invalidProperties[] = "'total_storage_price_hr' can't be null";
        }
        if ($this->container['total_vcpu_price_hr'] === null) {
            $invalidProperties[] = "'total_vcpu_price_hr' can't be null";
        }
        if ($this->container['vcpu_price_hr'] === null) {
            $invalidProperties[] = "'vcpu_price_hr' can't be null";
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
     * Gets count_vm_available
     *
     * @return int
     */
    public function getCountVmAvailable()
    {
        return $this->container['count_vm_available'];
    }

    /**
     * Sets count_vm_available
     *
     * @param int $count_vm_available count_vm_available
     *
     * @return $this
     */
    public function setCountVmAvailable($count_vm_available)
    {
        $this->container['count_vm_available'] = $count_vm_available;

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
     * Gets gpu_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getGpuPriceHr()
    {
        return $this->container['gpu_price_hr'];
    }

    /**
     * Sets gpu_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $gpu_price_hr gpu_price_hr
     *
     * @return $this
     */
    public function setGpuPriceHr($gpu_price_hr)
    {
        $this->container['gpu_price_hr'] = $gpu_price_hr;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ipv4_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getIpv4PriceHr()
    {
        return $this->container['ipv4_price_hr'];
    }

    /**
     * Sets ipv4_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $ipv4_price_hr ipv4_price_hr
     *
     * @return $this
     */
    public function setIpv4PriceHr($ipv4_price_hr)
    {
        $this->container['ipv4_price_hr'] = $ipv4_price_hr;

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
     * Gets memory_gib_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getMemoryGibPriceHr()
    {
        return $this->container['memory_gib_price_hr'];
    }

    /**
     * Sets memory_gib_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $memory_gib_price_hr memory_gib_price_hr
     *
     * @return $this
     */
    public function setMemoryGibPriceHr($memory_gib_price_hr)
    {
        $this->container['memory_gib_price_hr'] = $memory_gib_price_hr;

        return $this;
    }

    /**
     * Gets renewable_energy
     *
     * @return bool
     */
    public function getRenewableEnergy()
    {
        return $this->container['renewable_energy'];
    }

    /**
     * Sets renewable_energy
     *
     * @param bool $renewable_energy renewable_energy
     *
     * @return $this
     */
    public function setRenewableEnergy($renewable_energy)
    {
        $this->container['renewable_energy'] = $renewable_energy;

        return $this;
    }

    /**
     * Gets storage_gib_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getStorageGibPriceHr()
    {
        return $this->container['storage_gib_price_hr'];
    }

    /**
     * Sets storage_gib_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $storage_gib_price_hr storage_gib_price_hr
     *
     * @return $this
     */
    public function setStorageGibPriceHr($storage_gib_price_hr)
    {
        $this->container['storage_gib_price_hr'] = $storage_gib_price_hr;

        return $this;
    }

    /**
     * Gets total_gpu_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getTotalGpuPriceHr()
    {
        return $this->container['total_gpu_price_hr'];
    }

    /**
     * Sets total_gpu_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $total_gpu_price_hr total_gpu_price_hr
     *
     * @return $this
     */
    public function setTotalGpuPriceHr($total_gpu_price_hr)
    {
        $this->container['total_gpu_price_hr'] = $total_gpu_price_hr;

        return $this;
    }

    /**
     * Gets total_memory_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getTotalMemoryPriceHr()
    {
        return $this->container['total_memory_price_hr'];
    }

    /**
     * Sets total_memory_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $total_memory_price_hr total_memory_price_hr
     *
     * @return $this
     */
    public function setTotalMemoryPriceHr($total_memory_price_hr)
    {
        $this->container['total_memory_price_hr'] = $total_memory_price_hr;

        return $this;
    }

    /**
     * Gets total_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getTotalPriceHr()
    {
        return $this->container['total_price_hr'];
    }

    /**
     * Sets total_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $total_price_hr total_price_hr
     *
     * @return $this
     */
    public function setTotalPriceHr($total_price_hr)
    {
        $this->container['total_price_hr'] = $total_price_hr;

        return $this;
    }

    /**
     * Gets total_storage_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getTotalStoragePriceHr()
    {
        return $this->container['total_storage_price_hr'];
    }

    /**
     * Sets total_storage_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $total_storage_price_hr total_storage_price_hr
     *
     * @return $this
     */
    public function setTotalStoragePriceHr($total_storage_price_hr)
    {
        $this->container['total_storage_price_hr'] = $total_storage_price_hr;

        return $this;
    }

    /**
     * Gets total_vcpu_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getTotalVcpuPriceHr()
    {
        return $this->container['total_vcpu_price_hr'];
    }

    /**
     * Sets total_vcpu_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $total_vcpu_price_hr total_vcpu_price_hr
     *
     * @return $this
     */
    public function setTotalVcpuPriceHr($total_vcpu_price_hr)
    {
        $this->container['total_vcpu_price_hr'] = $total_vcpu_price_hr;

        return $this;
    }

    /**
     * Gets vcpu_price_hr
     *
     * @return \Swagger\Client\Model\Decimal
     */
    public function getVcpuPriceHr()
    {
        return $this->container['vcpu_price_hr'];
    }

    /**
     * Sets vcpu_price_hr
     *
     * @param \Swagger\Client\Model\Decimal $vcpu_price_hr vcpu_price_hr
     *
     * @return $this
     */
    public function setVcpuPriceHr($vcpu_price_hr)
    {
        $this->container['vcpu_price_hr'] = $vcpu_price_hr;

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