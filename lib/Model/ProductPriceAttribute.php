<?php
/**
 * ProductPriceAttribute
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
 * OpenAPI spec version: 2.0.6
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
 * ProductPriceAttribute Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductPriceAttribute implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductPriceAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attribute_id' => 'int',
        'price' => 'float',
        'reduction' => 'float',
        'price_without_taxes' => 'float',
        'price_without_reduction' => 'float',
        'price_formatted' => 'string',
        'reduction_formatted' => 'string',
        'price_without_taxes_formatted' => 'string',
        'price_without_reduction_formatted' => 'string',
        'active' => 'bool'
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
        'attribute_id' => 'attribute_id',
        'price' => 'price',
        'reduction' => 'reduction',
        'price_without_taxes' => 'price_without_taxes',
        'price_without_reduction' => 'price_without_reduction',
        'price_formatted' => 'price_formatted',
        'reduction_formatted' => 'reduction_formatted',
        'price_without_taxes_formatted' => 'price_without_taxes_formatted',
        'price_without_reduction_formatted' => 'price_without_reduction_formatted',
        'active' => 'active'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'attribute_id' => 'setAttributeId',
        'price' => 'setPrice',
        'reduction' => 'setReduction',
        'price_without_taxes' => 'setPriceWithoutTaxes',
        'price_without_reduction' => 'setPriceWithoutReduction',
        'price_formatted' => 'setPriceFormatted',
        'reduction_formatted' => 'setReductionFormatted',
        'price_without_taxes_formatted' => 'setPriceWithoutTaxesFormatted',
        'price_without_reduction_formatted' => 'setPriceWithoutReductionFormatted',
        'active' => 'setActive'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'attribute_id' => 'getAttributeId',
        'price' => 'getPrice',
        'reduction' => 'getReduction',
        'price_without_taxes' => 'getPriceWithoutTaxes',
        'price_without_reduction' => 'getPriceWithoutReduction',
        'price_formatted' => 'getPriceFormatted',
        'reduction_formatted' => 'getReductionFormatted',
        'price_without_taxes_formatted' => 'getPriceWithoutTaxesFormatted',
        'price_without_reduction_formatted' => 'getPriceWithoutReductionFormatted',
        'active' => 'getActive'
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
        $this->container['attribute_id'] = isset($data['attribute_id']) ? $data['attribute_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['reduction'] = isset($data['reduction']) ? $data['reduction'] : null;
        $this->container['price_without_taxes'] = isset($data['price_without_taxes']) ? $data['price_without_taxes'] : null;
        $this->container['price_without_reduction'] = isset($data['price_without_reduction']) ? $data['price_without_reduction'] : null;
        $this->container['price_formatted'] = isset($data['price_formatted']) ? $data['price_formatted'] : null;
        $this->container['reduction_formatted'] = isset($data['reduction_formatted']) ? $data['reduction_formatted'] : null;
        $this->container['price_without_taxes_formatted'] = isset($data['price_without_taxes_formatted']) ? $data['price_without_taxes_formatted'] : null;
        $this->container['price_without_reduction_formatted'] = isset($data['price_without_reduction_formatted']) ? $data['price_without_reduction_formatted'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
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
     * Gets attribute_id
     * @return int
     */
    public function getAttributeId()
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     * @param int $attribute_id
     * @return $this
     */
    public function setAttributeId($attribute_id)
    {
        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets reduction
     * @return float
     */
    public function getReduction()
    {
        return $this->container['reduction'];
    }

    /**
     * Sets reduction
     * @param float $reduction
     * @return $this
     */
    public function setReduction($reduction)
    {
        $this->container['reduction'] = $reduction;

        return $this;
    }

    /**
     * Gets price_without_taxes
     * @return float
     */
    public function getPriceWithoutTaxes()
    {
        return $this->container['price_without_taxes'];
    }

    /**
     * Sets price_without_taxes
     * @param float $price_without_taxes
     * @return $this
     */
    public function setPriceWithoutTaxes($price_without_taxes)
    {
        $this->container['price_without_taxes'] = $price_without_taxes;

        return $this;
    }

    /**
     * Gets price_without_reduction
     * @return float
     */
    public function getPriceWithoutReduction()
    {
        return $this->container['price_without_reduction'];
    }

    /**
     * Sets price_without_reduction
     * @param float $price_without_reduction
     * @return $this
     */
    public function setPriceWithoutReduction($price_without_reduction)
    {
        $this->container['price_without_reduction'] = $price_without_reduction;

        return $this;
    }

    /**
     * Gets price_formatted
     * @return string
     */
    public function getPriceFormatted()
    {
        return $this->container['price_formatted'];
    }

    /**
     * Sets price_formatted
     * @param string $price_formatted
     * @return $this
     */
    public function setPriceFormatted($price_formatted)
    {
        $this->container['price_formatted'] = $price_formatted;

        return $this;
    }

    /**
     * Gets reduction_formatted
     * @return string
     */
    public function getReductionFormatted()
    {
        return $this->container['reduction_formatted'];
    }

    /**
     * Sets reduction_formatted
     * @param string $reduction_formatted
     * @return $this
     */
    public function setReductionFormatted($reduction_formatted)
    {
        $this->container['reduction_formatted'] = $reduction_formatted;

        return $this;
    }

    /**
     * Gets price_without_taxes_formatted
     * @return string
     */
    public function getPriceWithoutTaxesFormatted()
    {
        return $this->container['price_without_taxes_formatted'];
    }

    /**
     * Sets price_without_taxes_formatted
     * @param string $price_without_taxes_formatted
     * @return $this
     */
    public function setPriceWithoutTaxesFormatted($price_without_taxes_formatted)
    {
        $this->container['price_without_taxes_formatted'] = $price_without_taxes_formatted;

        return $this;
    }

    /**
     * Gets price_without_reduction_formatted
     * @return string
     */
    public function getPriceWithoutReductionFormatted()
    {
        return $this->container['price_without_reduction_formatted'];
    }

    /**
     * Sets price_without_reduction_formatted
     * @param string $price_without_reduction_formatted
     * @return $this
     */
    public function setPriceWithoutReductionFormatted($price_without_reduction_formatted)
    {
        $this->container['price_without_reduction_formatted'] = $price_without_reduction_formatted;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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

