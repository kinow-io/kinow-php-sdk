<?php
/**
 * Currency
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
 * OpenAPI spec version: 1.4.50
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
 * Currency Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Currency implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'iso_code' => 'string',
        'iso_code_num' => 'string',
        'sign' => 'string',
        'conversion_rate' => 'float',
        'format' => 'int',
        'blank' => 'int',
        'decimals' => 'int'
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
        'id' => 'id',
        'name' => 'name',
        'iso_code' => 'iso_code',
        'iso_code_num' => 'iso_code_num',
        'sign' => 'sign',
        'conversion_rate' => 'conversion_rate',
        'format' => 'format',
        'blank' => 'blank',
        'decimals' => 'decimals'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'iso_code' => 'setIsoCode',
        'iso_code_num' => 'setIsoCodeNum',
        'sign' => 'setSign',
        'conversion_rate' => 'setConversionRate',
        'format' => 'setFormat',
        'blank' => 'setBlank',
        'decimals' => 'setDecimals'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'iso_code' => 'getIsoCode',
        'iso_code_num' => 'getIsoCodeNum',
        'sign' => 'getSign',
        'conversion_rate' => 'getConversionRate',
        'format' => 'getFormat',
        'blank' => 'getBlank',
        'decimals' => 'getDecimals'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['iso_code'] = isset($data['iso_code']) ? $data['iso_code'] : null;
        $this->container['iso_code_num'] = isset($data['iso_code_num']) ? $data['iso_code_num'] : null;
        $this->container['sign'] = isset($data['sign']) ? $data['sign'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['blank'] = isset($data['blank']) ? $data['blank'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets iso_code
     * @return string
     */
    public function getIsoCode()
    {
        return $this->container['iso_code'];
    }

    /**
     * Sets iso_code
     * @param string $iso_code
     * @return $this
     */
    public function setIsoCode($iso_code)
    {
        $this->container['iso_code'] = $iso_code;

        return $this;
    }

    /**
     * Gets iso_code_num
     * @return string
     */
    public function getIsoCodeNum()
    {
        return $this->container['iso_code_num'];
    }

    /**
     * Sets iso_code_num
     * @param string $iso_code_num
     * @return $this
     */
    public function setIsoCodeNum($iso_code_num)
    {
        $this->container['iso_code_num'] = $iso_code_num;

        return $this;
    }

    /**
     * Gets sign
     * @return string
     */
    public function getSign()
    {
        return $this->container['sign'];
    }

    /**
     * Sets sign
     * @param string $sign
     * @return $this
     */
    public function setSign($sign)
    {
        $this->container['sign'] = $sign;

        return $this;
    }

    /**
     * Gets conversion_rate
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     * @param float $conversion_rate
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets format
     * @return int
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param int $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets blank
     * @return int
     */
    public function getBlank()
    {
        return $this->container['blank'];
    }

    /**
     * Sets blank
     * @param int $blank
     * @return $this
     */
    public function setBlank($blank)
    {
        $this->container['blank'] = $blank;

        return $this;
    }

    /**
     * Gets decimals
     * @return int
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     * @param int $decimals
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

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


