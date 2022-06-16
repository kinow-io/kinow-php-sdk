<?php
/**
 * CreateMessageRequest
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
 * OpenAPI spec version: 2.0.11
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
 * CreateMessageRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateMessageRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateMessageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_lang' => 'int',
        'id_support' => 'int',
        'email' => 'string',
        'id_contact' => 'int',
        'message' => 'string',
        'id_product' => 'int',
        'id_order' => 'int',
        'send_mail' => 'bool'
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
        'id_lang' => 'id_lang',
        'id_support' => 'id_support',
        'email' => 'email',
        'id_contact' => 'id_contact',
        'message' => 'message',
        'id_product' => 'id_product',
        'id_order' => 'id_order',
        'send_mail' => 'send_mail'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_lang' => 'setIdLang',
        'id_support' => 'setIdSupport',
        'email' => 'setEmail',
        'id_contact' => 'setIdContact',
        'message' => 'setMessage',
        'id_product' => 'setIdProduct',
        'id_order' => 'setIdOrder',
        'send_mail' => 'setSendMail'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_lang' => 'getIdLang',
        'id_support' => 'getIdSupport',
        'email' => 'getEmail',
        'id_contact' => 'getIdContact',
        'message' => 'getMessage',
        'id_product' => 'getIdProduct',
        'id_order' => 'getIdOrder',
        'send_mail' => 'getSendMail'
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
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['id_support'] = isset($data['id_support']) ? $data['id_support'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id_contact'] = isset($data['id_contact']) ? $data['id_contact'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['id_order'] = isset($data['id_order']) ? $data['id_order'] : null;
        $this->container['send_mail'] = isset($data['send_mail']) ? $data['send_mail'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['id_lang'] === null) {
            $invalid_properties[] = "'id_lang' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['id_contact'] === null) {
            $invalid_properties[] = "'id_contact' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalid_properties[] = "'message' can't be null";
        }
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
        if ($this->container['id_lang'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['id_contact'] === null) {
            return false;
        }
        if ($this->container['message'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_lang
     * @return int
     */
    public function getIdLang()
    {
        return $this->container['id_lang'];
    }

    /**
     * Sets id_lang
     * @param int $id_lang Language ID used by user to write his message
     * @return $this
     */
    public function setIdLang($id_lang)
    {
        $this->container['id_lang'] = $id_lang;

        return $this;
    }

    /**
     * Gets id_support
     * @return int
     */
    public function getIdSupport()
    {
        return $this->container['id_support'];
    }

    /**
     * Sets id_support
     * @param int $id_support Link the message to a previous message
     * @return $this
     */
    public function setIdSupport($id_support)
    {
        $this->container['id_support'] = $id_support;

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
     * @param string $email User email in order to send him a response
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets id_contact
     * @return int
     */
    public function getIdContact()
    {
        return $this->container['id_contact'];
    }

    /**
     * Sets id_contact
     * @param int $id_contact Contact ID to send the user message
     * @return $this
     */
    public function setIdContact($id_contact)
    {
        $this->container['id_contact'] = $id_contact;

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
     * @param string $message User message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets id_product
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     * @param int $id_product Link the message to a product in catalog
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets id_order
     * @return int
     */
    public function getIdOrder()
    {
        return $this->container['id_order'];
    }

    /**
     * Sets id_order
     * @param int $id_order Link the message to an existing order
     * @return $this
     */
    public function setIdOrder($id_order)
    {
        $this->container['id_order'] = $id_order;

        return $this;
    }

    /**
     * Gets send_mail
     * @return bool
     */
    public function getSendMail()
    {
        return $this->container['send_mail'];
    }

    /**
     * Sets send_mail
     * @param bool $send_mail Send confirmation email to the providen email
     * @return $this
     */
    public function setSendMail($send_mail)
    {
        $this->container['send_mail'] = $send_mail;

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


