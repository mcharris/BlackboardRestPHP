<?php
/**
 * Availability5
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Learn APIs
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3200.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlackboardRest\Model;

use \ArrayAccess;

/**
 * Availability5 Class Doc Comment
 *
 * @category    Class
 * @description Settings controlling availability of the user account.
 * @package     BlackboardRest
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Availability5 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Availability_5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'available' => 'available'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const AVAILABLE_YES = 'Yes';
    const AVAILABLE_NO = 'No';
    const AVAILABLE_DISABLED = 'Disabled';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAvailableAllowableValues()
    {
        return [
            self::AVAILABLE_YES,
            self::AVAILABLE_NO,
            self::AVAILABLE_DISABLED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["Yes", "No", "Disabled"];
        if (!in_array($this->container['available'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'available', must be one of 'Yes', 'No', 'Disabled'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["Yes", "No", "Disabled"];
        if (!in_array($this->container['available'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets available
     * @return string
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     * @param string $available Whether the user is available within the system. Unavailable users cannot log in.
     * @return $this
     */
    public function setAvailable($available)
    {
        $allowed_values = array('Yes', 'No', 'Disabled');
        if (!is_null($available) && (!in_array($available, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'available', must be one of 'Yes', 'No', 'Disabled'");
        }
        $this->container['available'] = $available;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BlackboardRest\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlackboardRest\ObjectSerializer::sanitizeForSerialization($this));
    }
}


