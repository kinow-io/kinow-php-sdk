<?php
/**
 * AddProductToCartRequest
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
 * OpenAPI spec version: 2.0.2
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
 * AddProductToCartRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AddProductToCartRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AddProductToCartRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'product_attribute_id' => 'int',
        'gift_id' => 'int',
        'switch_subscription_id' => 'int',
        'is_gift' => 'bool',
        'ip_address' => 'string'
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
        'product_id' => 'product_id',
        'product_attribute_id' => 'product_attribute_id',
        'gift_id' => 'gift_id',
        'switch_subscription_id' => 'switch_subscription_id',
        'is_gift' => 'is_gift',
        'ip_address' => 'ip_address'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_attribute_id' => 'setProductAttributeId',
        'gift_id' => 'setGiftId',
        'switch_subscription_id' => 'setSwitchSubscriptionId',
        'is_gift' => 'setIsGift',
        'ip_address' => 'setIpAddress'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_attribute_id' => 'getProductAttributeId',
        'gift_id' => 'getGiftId',
        'switch_subscription_id' => 'getSwitchSubscriptionId',
        'is_gift' => 'getIsGift',
        'ip_address' => 'getIpAddress'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_attribute_id'] = isset($data['product_attribute_id']) ? $data['product_attribute_id'] : null;
        $this->container['gift_id'] = isset($data['gift_id']) ? $data['gift_id'] : null;
        $this->container['switch_subscription_id'] = isset($data['switch_subscription_id']) ? $data['switch_subscription_id'] : null;
        $this->container['is_gift'] = isset($data['is_gift']) ? $data['is_gift'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
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
        if ($this->container['product_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id Product ID to add to cart
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_attribute_id
     * @return int
     */
    public function getProductAttributeId()
    {
        return $this->container['product_attribute_id'];
    }

    /**
     * Sets product_attribute_id
     * @param int $product_attribute_id ProductAttribute ID, required to add product to cart if product is not a subscription
     * @return $this
     */
    public function setProductAttributeId($product_attribute_id)
    {
        $this->container['product_attribute_id'] = $product_attribute_id;

        return $this;
    }

    /**
     * Gets gift_id
     * @return int
     */
    public function getGiftId()
    {
        return $this->container['gift_id'];
    }

    /**
     * Sets gift_id
     * @param int $gift_id Gift ID linked to the item in cart
     * @return $this
     */
    public function setGiftId($gift_id)
    {
        $this->container['gift_id'] = $gift_id;

        return $this;
    }

    /**
     * Gets switch_subscription_id
     * @return int
     */
    public function getSwitchSubscriptionId()
    {
        return $this->container['switch_subscription_id'];
    }

    /**
     * Sets switch_subscription_id
     * @param int $switch_subscription_id When customer want to switch subscription, switch_subscription_id is the product access ID that match with the subscription to cancel
     * @return $this
     */
    public function setSwitchSubscriptionId($switch_subscription_id)
    {
        $this->container['switch_subscription_id'] = $switch_subscription_id;

        return $this;
    }

    /**
     * Gets is_gift
     * @return bool
     */
    public function getIsGift()
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift
     * @param bool $is_gift Allows bypass of access check (in case the current user already bought the product and it cannot be reordered)
     * @return $this
     */
    public function setIsGift($is_gift)
    {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     * @param string $ip_address IP address
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

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


