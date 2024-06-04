<?php
/**
 * GetDataCenterLiveUtilizationResponse
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
 * GetDataCenterLiveUtilizationResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDataCenterLiveUtilizationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetDataCenterLiveUtilizationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpu_utilization' => 'float',
        'gpu_free' => 'int',
        'gpu_total' => 'int',
        'gpu_used' => 'int',
        'gpu_utilization' => 'float',
        'memory_gib_free' => 'int',
        'memory_gib_total' => 'int',
        'memory_gib_used' => 'int',
        'memory_utilization' => 'float',
        'utilization' => 'float',
        'vcpu_free' => 'int',
        'vcpu_total' => 'int',
        'vcpu_used' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cpu_utilization' => 'float',
        'gpu_free' => 'int32',
        'gpu_total' => 'int32',
        'gpu_used' => 'int32',
        'gpu_utilization' => 'float',
        'memory_gib_free' => 'int32',
        'memory_gib_total' => 'int32',
        'memory_gib_used' => 'int32',
        'memory_utilization' => 'float',
        'utilization' => 'float',
        'vcpu_free' => 'int32',
        'vcpu_total' => 'int32',
        'vcpu_used' => 'int32'
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
        'cpu_utilization' => 'cpuUtilization',
        'gpu_free' => 'gpuFree',
        'gpu_total' => 'gpuTotal',
        'gpu_used' => 'gpuUsed',
        'gpu_utilization' => 'gpuUtilization',
        'memory_gib_free' => 'memoryGibFree',
        'memory_gib_total' => 'memoryGibTotal',
        'memory_gib_used' => 'memoryGibUsed',
        'memory_utilization' => 'memoryUtilization',
        'utilization' => 'utilization',
        'vcpu_free' => 'vcpuFree',
        'vcpu_total' => 'vcpuTotal',
        'vcpu_used' => 'vcpuUsed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpu_utilization' => 'setCpuUtilization',
        'gpu_free' => 'setGpuFree',
        'gpu_total' => 'setGpuTotal',
        'gpu_used' => 'setGpuUsed',
        'gpu_utilization' => 'setGpuUtilization',
        'memory_gib_free' => 'setMemoryGibFree',
        'memory_gib_total' => 'setMemoryGibTotal',
        'memory_gib_used' => 'setMemoryGibUsed',
        'memory_utilization' => 'setMemoryUtilization',
        'utilization' => 'setUtilization',
        'vcpu_free' => 'setVcpuFree',
        'vcpu_total' => 'setVcpuTotal',
        'vcpu_used' => 'setVcpuUsed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpu_utilization' => 'getCpuUtilization',
        'gpu_free' => 'getGpuFree',
        'gpu_total' => 'getGpuTotal',
        'gpu_used' => 'getGpuUsed',
        'gpu_utilization' => 'getGpuUtilization',
        'memory_gib_free' => 'getMemoryGibFree',
        'memory_gib_total' => 'getMemoryGibTotal',
        'memory_gib_used' => 'getMemoryGibUsed',
        'memory_utilization' => 'getMemoryUtilization',
        'utilization' => 'getUtilization',
        'vcpu_free' => 'getVcpuFree',
        'vcpu_total' => 'getVcpuTotal',
        'vcpu_used' => 'getVcpuUsed'
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
        $this->container['cpu_utilization'] = isset($data['cpu_utilization']) ? $data['cpu_utilization'] : null;
        $this->container['gpu_free'] = isset($data['gpu_free']) ? $data['gpu_free'] : null;
        $this->container['gpu_total'] = isset($data['gpu_total']) ? $data['gpu_total'] : null;
        $this->container['gpu_used'] = isset($data['gpu_used']) ? $data['gpu_used'] : null;
        $this->container['gpu_utilization'] = isset($data['gpu_utilization']) ? $data['gpu_utilization'] : null;
        $this->container['memory_gib_free'] = isset($data['memory_gib_free']) ? $data['memory_gib_free'] : null;
        $this->container['memory_gib_total'] = isset($data['memory_gib_total']) ? $data['memory_gib_total'] : null;
        $this->container['memory_gib_used'] = isset($data['memory_gib_used']) ? $data['memory_gib_used'] : null;
        $this->container['memory_utilization'] = isset($data['memory_utilization']) ? $data['memory_utilization'] : null;
        $this->container['utilization'] = isset($data['utilization']) ? $data['utilization'] : null;
        $this->container['vcpu_free'] = isset($data['vcpu_free']) ? $data['vcpu_free'] : null;
        $this->container['vcpu_total'] = isset($data['vcpu_total']) ? $data['vcpu_total'] : null;
        $this->container['vcpu_used'] = isset($data['vcpu_used']) ? $data['vcpu_used'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cpu_utilization'] === null) {
            $invalidProperties[] = "'cpu_utilization' can't be null";
        }
        if ($this->container['gpu_free'] === null) {
            $invalidProperties[] = "'gpu_free' can't be null";
        }
        if ($this->container['gpu_total'] === null) {
            $invalidProperties[] = "'gpu_total' can't be null";
        }
        if ($this->container['gpu_used'] === null) {
            $invalidProperties[] = "'gpu_used' can't be null";
        }
        if ($this->container['gpu_utilization'] === null) {
            $invalidProperties[] = "'gpu_utilization' can't be null";
        }
        if ($this->container['memory_gib_free'] === null) {
            $invalidProperties[] = "'memory_gib_free' can't be null";
        }
        if ($this->container['memory_gib_total'] === null) {
            $invalidProperties[] = "'memory_gib_total' can't be null";
        }
        if ($this->container['memory_gib_used'] === null) {
            $invalidProperties[] = "'memory_gib_used' can't be null";
        }
        if ($this->container['memory_utilization'] === null) {
            $invalidProperties[] = "'memory_utilization' can't be null";
        }
        if ($this->container['utilization'] === null) {
            $invalidProperties[] = "'utilization' can't be null";
        }
        if ($this->container['vcpu_free'] === null) {
            $invalidProperties[] = "'vcpu_free' can't be null";
        }
        if ($this->container['vcpu_total'] === null) {
            $invalidProperties[] = "'vcpu_total' can't be null";
        }
        if ($this->container['vcpu_used'] === null) {
            $invalidProperties[] = "'vcpu_used' can't be null";
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
     * Gets cpu_utilization
     *
     * @return float
     */
    public function getCpuUtilization()
    {
        return $this->container['cpu_utilization'];
    }

    /**
     * Sets cpu_utilization
     *
     * @param float $cpu_utilization cpu_utilization
     *
     * @return $this
     */
    public function setCpuUtilization($cpu_utilization)
    {
        $this->container['cpu_utilization'] = $cpu_utilization;

        return $this;
    }

    /**
     * Gets gpu_free
     *
     * @return int
     */
    public function getGpuFree()
    {
        return $this->container['gpu_free'];
    }

    /**
     * Sets gpu_free
     *
     * @param int $gpu_free gpu_free
     *
     * @return $this
     */
    public function setGpuFree($gpu_free)
    {
        $this->container['gpu_free'] = $gpu_free;

        return $this;
    }

    /**
     * Gets gpu_total
     *
     * @return int
     */
    public function getGpuTotal()
    {
        return $this->container['gpu_total'];
    }

    /**
     * Sets gpu_total
     *
     * @param int $gpu_total gpu_total
     *
     * @return $this
     */
    public function setGpuTotal($gpu_total)
    {
        $this->container['gpu_total'] = $gpu_total;

        return $this;
    }

    /**
     * Gets gpu_used
     *
     * @return int
     */
    public function getGpuUsed()
    {
        return $this->container['gpu_used'];
    }

    /**
     * Sets gpu_used
     *
     * @param int $gpu_used gpu_used
     *
     * @return $this
     */
    public function setGpuUsed($gpu_used)
    {
        $this->container['gpu_used'] = $gpu_used;

        return $this;
    }

    /**
     * Gets gpu_utilization
     *
     * @return float
     */
    public function getGpuUtilization()
    {
        return $this->container['gpu_utilization'];
    }

    /**
     * Sets gpu_utilization
     *
     * @param float $gpu_utilization gpu_utilization
     *
     * @return $this
     */
    public function setGpuUtilization($gpu_utilization)
    {
        $this->container['gpu_utilization'] = $gpu_utilization;

        return $this;
    }

    /**
     * Gets memory_gib_free
     *
     * @return int
     */
    public function getMemoryGibFree()
    {
        return $this->container['memory_gib_free'];
    }

    /**
     * Sets memory_gib_free
     *
     * @param int $memory_gib_free memory_gib_free
     *
     * @return $this
     */
    public function setMemoryGibFree($memory_gib_free)
    {
        $this->container['memory_gib_free'] = $memory_gib_free;

        return $this;
    }

    /**
     * Gets memory_gib_total
     *
     * @return int
     */
    public function getMemoryGibTotal()
    {
        return $this->container['memory_gib_total'];
    }

    /**
     * Sets memory_gib_total
     *
     * @param int $memory_gib_total memory_gib_total
     *
     * @return $this
     */
    public function setMemoryGibTotal($memory_gib_total)
    {
        $this->container['memory_gib_total'] = $memory_gib_total;

        return $this;
    }

    /**
     * Gets memory_gib_used
     *
     * @return int
     */
    public function getMemoryGibUsed()
    {
        return $this->container['memory_gib_used'];
    }

    /**
     * Sets memory_gib_used
     *
     * @param int $memory_gib_used memory_gib_used
     *
     * @return $this
     */
    public function setMemoryGibUsed($memory_gib_used)
    {
        $this->container['memory_gib_used'] = $memory_gib_used;

        return $this;
    }

    /**
     * Gets memory_utilization
     *
     * @return float
     */
    public function getMemoryUtilization()
    {
        return $this->container['memory_utilization'];
    }

    /**
     * Sets memory_utilization
     *
     * @param float $memory_utilization memory_utilization
     *
     * @return $this
     */
    public function setMemoryUtilization($memory_utilization)
    {
        $this->container['memory_utilization'] = $memory_utilization;

        return $this;
    }

    /**
     * Gets utilization
     *
     * @return float
     */
    public function getUtilization()
    {
        return $this->container['utilization'];
    }

    /**
     * Sets utilization
     *
     * @param float $utilization utilization
     *
     * @return $this
     */
    public function setUtilization($utilization)
    {
        $this->container['utilization'] = $utilization;

        return $this;
    }

    /**
     * Gets vcpu_free
     *
     * @return int
     */
    public function getVcpuFree()
    {
        return $this->container['vcpu_free'];
    }

    /**
     * Sets vcpu_free
     *
     * @param int $vcpu_free vcpu_free
     *
     * @return $this
     */
    public function setVcpuFree($vcpu_free)
    {
        $this->container['vcpu_free'] = $vcpu_free;

        return $this;
    }

    /**
     * Gets vcpu_total
     *
     * @return int
     */
    public function getVcpuTotal()
    {
        return $this->container['vcpu_total'];
    }

    /**
     * Sets vcpu_total
     *
     * @param int $vcpu_total vcpu_total
     *
     * @return $this
     */
    public function setVcpuTotal($vcpu_total)
    {
        $this->container['vcpu_total'] = $vcpu_total;

        return $this;
    }

    /**
     * Gets vcpu_used
     *
     * @return int
     */
    public function getVcpuUsed()
    {
        return $this->container['vcpu_used'];
    }

    /**
     * Sets vcpu_used
     *
     * @param int $vcpu_used vcpu_used
     *
     * @return $this
     */
    public function setVcpuUsed($vcpu_used)
    {
        $this->container['vcpu_used'] = $vcpu_used;

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
