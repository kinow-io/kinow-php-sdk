<?php
/**
 * CreateVideoStatSessionResponse
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
 * OpenAPI spec version: 2.0.24
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
 * CreateVideoStatSessionResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateVideoStatSessionResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateVideoStatSessionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'int',
        'video_id' => 'int',
        'date' => 'string',
        'watched_time' => 'int',
        'user_agent' => 'string',
        'iso_code' => 'string',
        'group_id' => 'int',
        'access_id' => 'int',
        'device_id' => 'int',
        'seek' => 'float'
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
        'customer_id' => 'customer_id',
        'video_id' => 'video_id',
        'date' => 'date',
        'watched_time' => 'watched_time',
        'user_agent' => 'user_agent',
        'iso_code' => 'iso_code',
        'group_id' => 'group_id',
        'access_id' => 'access_id',
        'device_id' => 'device_id',
        'seek' => 'seek'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'video_id' => 'setVideoId',
        'date' => 'setDate',
        'watched_time' => 'setWatchedTime',
        'user_agent' => 'setUserAgent',
        'iso_code' => 'setIsoCode',
        'group_id' => 'setGroupId',
        'access_id' => 'setAccessId',
        'device_id' => 'setDeviceId',
        'seek' => 'setSeek'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'video_id' => 'getVideoId',
        'date' => 'getDate',
        'watched_time' => 'getWatchedTime',
        'user_agent' => 'getUserAgent',
        'iso_code' => 'getIsoCode',
        'group_id' => 'getGroupId',
        'access_id' => 'getAccessId',
        'device_id' => 'getDeviceId',
        'seek' => 'getSeek'
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['video_id'] = isset($data['video_id']) ? $data['video_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['watched_time'] = isset($data['watched_time']) ? $data['watched_time'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['iso_code'] = isset($data['iso_code']) ? $data['iso_code'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['access_id'] = isset($data['access_id']) ? $data['access_id'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['seek'] = isset($data['seek']) ? $data['seek'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['customer_id'] === null) {
            $invalid_properties[] = "'customer_id' can't be null";
        }
        if ($this->container['video_id'] === null) {
            $invalid_properties[] = "'video_id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalid_properties[] = "'date' can't be null";
        }
        if ($this->container['watched_time'] === null) {
            $invalid_properties[] = "'watched_time' can't be null";
        }
        if ($this->container['user_agent'] === null) {
            $invalid_properties[] = "'user_agent' can't be null";
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
        if ($this->container['customer_id'] === null) {
            return false;
        }
        if ($this->container['video_id'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['watched_time'] === null) {
            return false;
        }
        if ($this->container['user_agent'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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
     * @param int $video_id
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

        return $this;
    }

    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets watched_time
     * @return int
     */
    public function getWatchedTime()
    {
        return $this->container['watched_time'];
    }

    /**
     * Sets watched_time
     * @param int $watched_time
     * @return $this
     */
    public function setWatchedTime($watched_time)
    {
        $this->container['watched_time'] = $watched_time;

        return $this;
    }

    /**
     * Gets user_agent
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     * @param string $user_agent
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

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
     * Gets group_id
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     * @param int $group_id
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets access_id
     * @return int
     */
    public function getAccessId()
    {
        return $this->container['access_id'];
    }

    /**
     * Sets access_id
     * @param int $access_id
     * @return $this
     */
    public function setAccessId($access_id)
    {
        $this->container['access_id'] = $access_id;

        return $this;
    }

    /**
     * Gets device_id
     * @return int
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     * @param int $device_id
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets seek
     * @return float
     */
    public function getSeek()
    {
        return $this->container['seek'];
    }

    /**
     * Sets seek
     * @param float $seek
     * @return $this
     */
    public function setSeek($seek)
    {
        $this->container['seek'] = $seek;

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


