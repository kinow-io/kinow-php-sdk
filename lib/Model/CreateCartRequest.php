<?php
/**
 * CreateCartRequest
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
 * OpenAPI spec version: 2.0.28
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
 * CreateCartRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCartRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateCartRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_customer' => 'int',
        'id_currency' => 'int',
        'id_lang' => 'int',
        'affiliate' => 'int'
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
        'id_customer' => 'id_customer',
        'id_currency' => 'id_currency',
        'id_lang' => 'id_lang',
        'affiliate' => 'affiliate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_customer' => 'setIdCustomer',
        'id_currency' => 'setIdCurrency',
        'id_lang' => 'setIdLang',
        'affiliate' => 'setAffiliate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_customer' => 'getIdCustomer',
        'id_currency' => 'getIdCurrency',
        'id_lang' => 'getIdLang',
        'affiliate' => 'getAffiliate'
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
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['id_currency'] = isset($data['id_currency']) ? $data['id_currency'] : null;
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['affiliate'] = isset($data['affiliate']) ? $data['affiliate'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['id_customer'] === null) {
            $invalid_properties[] = "'id_customer' can't be null";
        }
        if ($this->container['id_currency'] === null) {
            $invalid_properties[] = "'id_currency' can't be null";
        }
        if ($this->container['id_lang'] === null) {
            $invalid_properties[] = "'id_lang' can't be null";
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
        if ($this->container['id_customer'] === null) {
            return false;
        }
        if ($this->container['id_currency'] === null) {
            return false;
        }
        if ($this->container['id_lang'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_customer
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->container['id_customer'];
    }

    /**
     * Sets id_customer
     * @param int $id_customer Customer ID to attach this Cart
     * @return $this
     */
    public function setIdCustomer($id_customer)
    {
        $this->container['id_customer'] = $id_customer;

        return $this;
    }

    /**
     * Gets id_currency
     * @return int
     */
    public function getIdCurrency()
    {
        return $this->container['id_currency'];
    }

    /**
     * Sets id_currency
     * @param int $id_currency Currency ID to use in Cart
     * @return $this
     */
    public function setIdCurrency($id_currency)
    {
        $this->container['id_currency'] = $id_currency;

        return $this;
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
     * @param int $id_lang Language ID to use in Cart
     * @return $this
     */
    public function setIdLang($id_lang)
    {
        $this->container['id_lang'] = $id_lang;

        return $this;
    }

    /**
     * Gets affiliate
     * @return int
     */
    public function getAffiliate()
    {
        return $this->container['affiliate'];
    }

    /**
     * Sets affiliate
     * @param int $affiliate Language ID to use in Cart
     * @return $this
     */
    public function setAffiliate($affiliate)
    {
        $this->container['affiliate'] = $affiliate;

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


