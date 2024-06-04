<?php
/**
 * ListUserPermissionsResponse
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
 * ListUserPermissionsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListUserPermissionsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListUserPermissionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_account_permissions' => '\Swagger\Client\Model\UserPermission[]',
        'data_center_permissions' => '\Swagger\Client\Model\UserPermission[]',
        'project_permissions' => '\Swagger\Client\Model\UserPermission[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_account_permissions' => null,
        'data_center_permissions' => null,
        'project_permissions' => null
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
        'billing_account_permissions' => 'billingAccountPermissions',
        'data_center_permissions' => 'dataCenterPermissions',
        'project_permissions' => 'projectPermissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_account_permissions' => 'setBillingAccountPermissions',
        'data_center_permissions' => 'setDataCenterPermissions',
        'project_permissions' => 'setProjectPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_account_permissions' => 'getBillingAccountPermissions',
        'data_center_permissions' => 'getDataCenterPermissions',
        'project_permissions' => 'getProjectPermissions'
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
        $this->container['billing_account_permissions'] = isset($data['billing_account_permissions']) ? $data['billing_account_permissions'] : null;
        $this->container['data_center_permissions'] = isset($data['data_center_permissions']) ? $data['data_center_permissions'] : null;
        $this->container['project_permissions'] = isset($data['project_permissions']) ? $data['project_permissions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['billing_account_permissions'] === null) {
            $invalidProperties[] = "'billing_account_permissions' can't be null";
        }
        if ($this->container['data_center_permissions'] === null) {
            $invalidProperties[] = "'data_center_permissions' can't be null";
        }
        if ($this->container['project_permissions'] === null) {
            $invalidProperties[] = "'project_permissions' can't be null";
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
     * Gets billing_account_permissions
     *
     * @return \Swagger\Client\Model\UserPermission[]
     */
    public function getBillingAccountPermissions()
    {
        return $this->container['billing_account_permissions'];
    }

    /**
     * Sets billing_account_permissions
     *
     * @param \Swagger\Client\Model\UserPermission[] $billing_account_permissions billing_account_permissions
     *
     * @return $this
     */
    public function setBillingAccountPermissions($billing_account_permissions)
    {
        $this->container['billing_account_permissions'] = $billing_account_permissions;

        return $this;
    }

    /**
     * Gets data_center_permissions
     *
     * @return \Swagger\Client\Model\UserPermission[]
     */
    public function getDataCenterPermissions()
    {
        return $this->container['data_center_permissions'];
    }

    /**
     * Sets data_center_permissions
     *
     * @param \Swagger\Client\Model\UserPermission[] $data_center_permissions data_center_permissions
     *
     * @return $this
     */
    public function setDataCenterPermissions($data_center_permissions)
    {
        $this->container['data_center_permissions'] = $data_center_permissions;

        return $this;
    }

    /**
     * Gets project_permissions
     *
     * @return \Swagger\Client\Model\UserPermission[]
     */
    public function getProjectPermissions()
    {
        return $this->container['project_permissions'];
    }

    /**
     * Sets project_permissions
     *
     * @param \Swagger\Client\Model\UserPermission[] $project_permissions project_permissions
     *
     * @return $this
     */
    public function setProjectPermissions($project_permissions)
    {
        $this->container['project_permissions'] = $project_permissions;

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