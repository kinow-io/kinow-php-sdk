<?php
/**
 * UpdateGiftRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Server API
 *
 * Reference for Server API (REST/Json)
 *
 * OpenAPI spec version: 2.0.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kinow\Client\Model;

use \ArrayAccess;

/**
 * UpdateGiftRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateGiftRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateGiftRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'message' => 'string',
        'custom' => 'string',
        'date_send' => 'string'
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'email' => 'email',
        'message' => 'message',
        'custom' => 'custom',
        'date_send' => 'date_send'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'message' => 'setMessage',
        'custom' => 'setCustom',
        'date_send' => 'setDateSend'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'message' => 'getMessage',
        'custom' => 'getCustom',
        'date_send' => 'getDateSend'
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['date_send'] = isset($data['date_send']) ? $data['date_send'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname Recipient firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname Recipient lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Recipient email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Message for the recipient
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets custom
     * @return string
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     * @param string $custom Custom data
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets date_send
     * @return string
     */
    public function getDateSend()
    {
        return $this->container['date_send'];
    }

    /**
     * Sets date_send
     * @param string $date_send Date to send the Gift to the recipient
     * @return $this
     */
    public function setDateSend($date_send)
    {
        $this->container['date_send'] = $date_send;

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
            return json_encode(\Kinow\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Kinow\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


