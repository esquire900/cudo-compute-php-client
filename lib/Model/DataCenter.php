<?php
/**
 * DataCenter
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
 * DataCenter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataCenter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataCenter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_by' => 'string',
        'id' => 'string',
        'lng_lat' => '\Swagger\Client\Model\Point',
        'one_frontend_id' => 'string',
        'region_id' => 'string',
        'renewable_energy' => 'bool',
        'supplier_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_by' => null,
        'id' => null,
        'lng_lat' => null,
        'one_frontend_id' => null,
        'region_id' => null,
        'renewable_energy' => null,
        'supplier_name' => null
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
        'create_by' => 'createBy',
        'id' => 'id',
        'lng_lat' => 'lngLat',
        'one_frontend_id' => 'oneFrontendId',
        'region_id' => 'regionId',
        'renewable_energy' => 'renewableEnergy',
        'supplier_name' => 'supplierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_by' => 'setCreateBy',
        'id' => 'setId',
        'lng_lat' => 'setLngLat',
        'one_frontend_id' => 'setOneFrontendId',
        'region_id' => 'setRegionId',
        'renewable_energy' => 'setRenewableEnergy',
        'supplier_name' => 'setSupplierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_by' => 'getCreateBy',
        'id' => 'getId',
        'lng_lat' => 'getLngLat',
        'one_frontend_id' => 'getOneFrontendId',
        'region_id' => 'getRegionId',
        'renewable_energy' => 'getRenewableEnergy',
        'supplier_name' => 'getSupplierName'
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
        $this->container['create_by'] = isset($data['create_by']) ? $data['create_by'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lng_lat'] = isset($data['lng_lat']) ? $data['lng_lat'] : null;
        $this->container['one_frontend_id'] = isset($data['one_frontend_id']) ? $data['one_frontend_id'] : null;
        $this->container['region_id'] = isset($data['region_id']) ? $data['region_id'] : null;
        $this->container['renewable_energy'] = isset($data['renewable_energy']) ? $data['renewable_energy'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['one_frontend_id'] === null) {
            $invalidProperties[] = "'one_frontend_id' can't be null";
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
     * Gets create_by
     *
     * @return string
     */
    public function getCreateBy()
    {
        return $this->container['create_by'];
    }

    /**
     * Sets create_by
     *
     * @param string $create_by create_by
     *
     * @return $this
     */
    public function setCreateBy($create_by)
    {
        $this->container['create_by'] = $create_by;

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
     * Gets lng_lat
     *
     * @return \Swagger\Client\Model\Point
     */
    public function getLngLat()
    {
        return $this->container['lng_lat'];
    }

    /**
     * Sets lng_lat
     *
     * @param \Swagger\Client\Model\Point $lng_lat lng_lat
     *
     * @return $this
     */
    public function setLngLat($lng_lat)
    {
        $this->container['lng_lat'] = $lng_lat;

        return $this;
    }

    /**
     * Gets one_frontend_id
     *
     * @return string
     */
    public function getOneFrontendId()
    {
        return $this->container['one_frontend_id'];
    }

    /**
     * Sets one_frontend_id
     *
     * @param string $one_frontend_id one_frontend_id
     *
     * @return $this
     */
    public function setOneFrontendId($one_frontend_id)
    {
        $this->container['one_frontend_id'] = $one_frontend_id;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return string
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string $region_id region_id
     *
     * @return $this
     */
    public function setRegionId($region_id)
    {
        $this->container['region_id'] = $region_id;

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
     * Gets supplier_name
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string $supplier_name supplier_name
     *
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

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
