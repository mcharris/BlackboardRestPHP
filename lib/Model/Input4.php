<?php
/**
 * Input4
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
 * Input4 Class Doc Comment
 *
 * @category    Class
 * @package     BlackboardRest
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Input4 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'input_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'body' => 'string',
        'description' => 'string',
        'position' => 'int',
        'availability' => '\BlackboardRest\Model\Availability2',
        'content_handler' => '\BlackboardRest\Model\ContentHandler'
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
        'title' => 'title',
        'body' => 'body',
        'description' => 'description',
        'position' => 'position',
        'availability' => 'availability',
        'content_handler' => 'contentHandler'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'body' => 'setBody',
        'description' => 'setDescription',
        'position' => 'setPosition',
        'availability' => 'setAvailability',
        'content_handler' => 'setContentHandler'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'body' => 'getBody',
        'description' => 'getDescription',
        'position' => 'getPosition',
        'availability' => 'getAvailability',
        'content_handler' => 'getContentHandler'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['content_handler'] = isset($data['content_handler']) ? $data['content_handler'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title or name of this content. Typically shown as the main text to click in the course outline when accessing the content.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     * @param string $body The body text associated with this content. This field supports BbML.
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The short description of this content.  This field is not used in Classic courses.  For Ultra courses this is used to show information directly on the course outline.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position The position of this content within its parent folder.
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets availability
     * @return \BlackboardRest\Model\Availability2
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     * @param \BlackboardRest\Model\Availability2 $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets content_handler
     * @return \BlackboardRest\Model\ContentHandler
     */
    public function getContentHandler()
    {
        return $this->container['content_handler'];
    }

    /**
     * Sets content_handler
     * @param \BlackboardRest\Model\ContentHandler $content_handler
     * @return $this
     */
    public function setContentHandler($content_handler)
    {
        $this->container['content_handler'] = $content_handler;

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

