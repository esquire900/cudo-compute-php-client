<?php
/**
 * ProjectIdNetworksBody
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
 * ProjectIdNetworksBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectIdNetworksBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'projectId_networks_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cidr_prefix' => 'string',
        'data_center_id' => 'string',
        'id' => 'string',
        'network_id' => 'string',
        'vrouter_size' => '\Swagger\Client\Model\VRouterSize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cidr_prefix' => null,
        'data_center_id' => null,
        'id' => null,
        'network_id' => null,
        'vrouter_size' => null
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
        'cidr_prefix' => 'cidrPrefix',
        'data_center_id' => 'dataCenterId',
        'id' => 'id',
        'network_id' => 'networkId',
        'vrouter_size' => 'vrouterSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cidr_prefix' => 'setCidrPrefix',
        'data_center_id' => 'setDataCenterId',
        'id' => 'setId',
        'network_id' => 'setNetworkId',
        'vrouter_size' => 'setVrouterSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cidr_prefix' => 'getCidrPrefix',
        'data_center_id' => 'getDataCenterId',
        'id' => 'getId',
        'network_id' => 'getNetworkId',
        'vrouter_size' => 'getVrouterSize'
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
        $this->container['cidr_prefix'] = isset($data['cidr_prefix']) ? $data['cidr_prefix'] : null;
        $this->container['data_center_id'] = isset($data['data_center_id']) ? $data['data_center_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['vrouter_size'] = isset($data['vrouter_size']) ? $data['vrouter_size'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cidr_prefix'] === null) {
            $invalidProperties[] = "'cidr_prefix' can't be null";
        }
        if ($this->container['data_center_id'] === null) {
            $invalidProperties[] = "'data_center_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['network_id'] === null) {
            $invalidProperties[] = "'network_id' can't be null";
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
     * Gets cidr_prefix
     *
     * @return string
     */
    public function getCidrPrefix()
    {
        return $this->container['cidr_prefix'];
    }

    /**
     * Sets cidr_prefix
     *
     * @param string $cidr_prefix cidr_prefix
     *
     * @return $this
     */
    public function setCidrPrefix($cidr_prefix)
    {
        $this->container['cidr_prefix'] = $cidr_prefix;

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
     * Gets network_id
     *
     * @return string
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     *
     * @param string $network_id network_id
     *
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets vrouter_size
     *
     * @return \Swagger\Client\Model\VRouterSize
     */
    public function getVrouterSize()
    {
        return $this->container['vrouter_size'];
    }

    /**
     * Sets vrouter_size
     *
     * @param \Swagger\Client\Model\VRouterSize $vrouter_size vrouter_size
     *
     * @return $this
     */
    public function setVrouterSize($vrouter_size)
    {
        $this->container['vrouter_size'] = $vrouter_size;

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
