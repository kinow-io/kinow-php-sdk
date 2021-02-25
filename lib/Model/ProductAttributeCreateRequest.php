<?php
/**
 * ProductAttributeCreateRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Client API for Kinow Rest API
 *
 * OpenAPI spec version: 1.4.34
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
 * ProductAttributeCreateRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductAttributeCreateRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductAttributeCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'video_group_id' => 'int',
        'video_id' => 'int',
        'type' => 'string',
        'mode' => 'string',
        'quality' => 'string',
        'price' => 'float',
        'price_mode' => 'float',
        'duration' => 'float',
        'watching_duration' => 'float',
        'maximum_views' => 'float'
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
        'video_group_id' => 'video_group_id',
        'video_id' => 'video_id',
        'type' => 'type',
        'mode' => 'mode',
        'quality' => 'quality',
        'price' => 'price',
        'price_mode' => 'price_mode',
        'duration' => 'duration',
        'watching_duration' => 'watching_duration',
        'maximum_views' => 'maximum_views'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'video_group_id' => 'setVideoGroupId',
        'video_id' => 'setVideoId',
        'type' => 'setType',
        'mode' => 'setMode',
        'quality' => 'setQuality',
        'price' => 'setPrice',
        'price_mode' => 'setPriceMode',
        'duration' => 'setDuration',
        'watching_duration' => 'setWatchingDuration',
        'maximum_views' => 'setMaximumViews'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'video_group_id' => 'getVideoGroupId',
        'video_id' => 'getVideoId',
        'type' => 'getType',
        'mode' => 'getMode',
        'quality' => 'getQuality',
        'price' => 'getPrice',
        'price_mode' => 'getPriceMode',
        'duration' => 'getDuration',
        'watching_duration' => 'getWatchingDuration',
        'maximum_views' => 'getMaximumViews'
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
        $this->container['video_group_id'] = isset($data['video_group_id']) ? $data['video_group_id'] : null;
        $this->container['video_id'] = isset($data['video_id']) ? $data['video_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_mode'] = isset($data['price_mode']) ? $data['price_mode'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['watching_duration'] = isset($data['watching_duration']) ? $data['watching_duration'] : null;
        $this->container['maximum_views'] = isset($data['maximum_views']) ? $data['maximum_views'] : null;
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
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id Product ID to attach this access
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets video_group_id
     * @return int
     */
    public function getVideoGroupId()
    {
        return $this->container['video_group_id'];
    }

    /**
     * Sets video_group_id
     * @param int $video_group_id Video Group ID to restrict this access
     * @return $this
     */
    public function setVideoGroupId($video_group_id)
    {
        $this->container['video_group_id'] = $video_group_id;

        return $this;
    }

    /**
     * Gets video_id
     * @return int
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id
     * @param int $video_id Video ID to restrict this access
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type RENT, BUY or SUBSCRIPTION
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode BOTH (Streaming & Download), STREAMING or DOWNLOAD
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets quality
     * @return string
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     * @param string $quality ALL, HD or SD
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

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
     * @param float $price Retail price to sell this access
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_mode
     * @return float
     */
    public function getPriceMode()
    {
        return $this->container['price_mode'];
    }

    /**
     * Sets price_mode
     * @param float $price_mode Pre-tax price or price with tax
     * @return $this
     */
    public function setPriceMode($price_mode)
    {
        $this->container['price_mode'] = $price_mode;

        return $this;
    }

    /**
     * Gets duration
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param float $duration Duration in days while user can access videos
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets watching_duration
     * @return float
     */
    public function getWatchingDuration()
    {
        return $this->container['watching_duration'];
    }

    /**
     * Sets watching_duration
     * @param float $watching_duration Duration in days while user can watch video after first play
     * @return $this
     */
    public function setWatchingDuration($watching_duration)
    {
        $this->container['watching_duration'] = $watching_duration;

        return $this;
    }

    /**
     * Gets maximum_views
     * @return float
     */
    public function getMaximumViews()
    {
        return $this->container['maximum_views'];
    }

    /**
     * Sets maximum_views
     * @param float $maximum_views Maximum views a user can watch video
     * @return $this
     */
    public function setMaximumViews($maximum_views)
    {
        $this->container['maximum_views'] = $maximum_views;

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


