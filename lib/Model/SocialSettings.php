<?php
/**
 * SocialSettings
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
 * OpenAPI spec version: 1.4.33
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
 * SocialSettings Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SocialSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SocialSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'facebook' => 'string',
        'twitter' => 'string',
        'youtube' => 'string',
        'pinterest' => 'string',
        'dailymotion' => 'string',
        'tumblr' => 'string',
        'myspace' => 'string'
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
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'youtube' => 'youtube',
        'pinterest' => 'pinterest',
        'dailymotion' => 'dailymotion',
        'tumblr' => 'tumblr',
        'myspace' => 'myspace'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'youtube' => 'setYoutube',
        'pinterest' => 'setPinterest',
        'dailymotion' => 'setDailymotion',
        'tumblr' => 'setTumblr',
        'myspace' => 'setMyspace'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'youtube' => 'getYoutube',
        'pinterest' => 'getPinterest',
        'dailymotion' => 'getDailymotion',
        'tumblr' => 'getTumblr',
        'myspace' => 'getMyspace'
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
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['youtube'] = isset($data['youtube']) ? $data['youtube'] : null;
        $this->container['pinterest'] = isset($data['pinterest']) ? $data['pinterest'] : null;
        $this->container['dailymotion'] = isset($data['dailymotion']) ? $data['dailymotion'] : null;
        $this->container['tumblr'] = isset($data['tumblr']) ? $data['tumblr'] : null;
        $this->container['myspace'] = isset($data['myspace']) ? $data['myspace'] : null;
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
     * Gets facebook
     * @return string
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     * @param string $facebook
     * @return $this
     */
    public function setFacebook($facebook)
    {
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets twitter
     * @return string
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     * @param string $twitter
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets youtube
     * @return string
     */
    public function getYoutube()
    {
        return $this->container['youtube'];
    }

    /**
     * Sets youtube
     * @param string $youtube
     * @return $this
     */
    public function setYoutube($youtube)
    {
        $this->container['youtube'] = $youtube;

        return $this;
    }

    /**
     * Gets pinterest
     * @return string
     */
    public function getPinterest()
    {
        return $this->container['pinterest'];
    }

    /**
     * Sets pinterest
     * @param string $pinterest
     * @return $this
     */
    public function setPinterest($pinterest)
    {
        $this->container['pinterest'] = $pinterest;

        return $this;
    }

    /**
     * Gets dailymotion
     * @return string
     */
    public function getDailymotion()
    {
        return $this->container['dailymotion'];
    }

    /**
     * Sets dailymotion
     * @param string $dailymotion
     * @return $this
     */
    public function setDailymotion($dailymotion)
    {
        $this->container['dailymotion'] = $dailymotion;

        return $this;
    }

    /**
     * Gets tumblr
     * @return string
     */
    public function getTumblr()
    {
        return $this->container['tumblr'];
    }

    /**
     * Sets tumblr
     * @param string $tumblr
     * @return $this
     */
    public function setTumblr($tumblr)
    {
        $this->container['tumblr'] = $tumblr;

        return $this;
    }

    /**
     * Gets myspace
     * @return string
     */
    public function getMyspace()
    {
        return $this->container['myspace'];
    }

    /**
     * Sets myspace
     * @param string $myspace
     * @return $this
     */
    public function setMyspace($myspace)
    {
        $this->container['myspace'] = $myspace;

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


