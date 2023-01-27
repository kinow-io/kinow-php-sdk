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
 * Server API
 *
 * Reference for Server API (REST/Json)
 *
 * OpenAPI spec version: 2.0.26
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
        'instagram' => 'string',
        'tiktok' => 'string',
        'twitch' => 'string',
        'linked_in' => 'string',
        'soundcloud' => 'string',
        'flickr' => 'string',
        'discord' => 'string'
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
        'instagram' => 'instagram',
        'tiktok' => 'tiktok',
        'twitch' => 'twitch',
        'linked_in' => 'linkedIn',
        'soundcloud' => 'soundcloud',
        'flickr' => 'flickr',
        'discord' => 'discord'
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
        'instagram' => 'setInstagram',
        'tiktok' => 'setTiktok',
        'twitch' => 'setTwitch',
        'linked_in' => 'setLinkedIn',
        'soundcloud' => 'setSoundcloud',
        'flickr' => 'setFlickr',
        'discord' => 'setDiscord'
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
        'instagram' => 'getInstagram',
        'tiktok' => 'getTiktok',
        'twitch' => 'getTwitch',
        'linked_in' => 'getLinkedIn',
        'soundcloud' => 'getSoundcloud',
        'flickr' => 'getFlickr',
        'discord' => 'getDiscord'
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
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null;
        $this->container['tiktok'] = isset($data['tiktok']) ? $data['tiktok'] : null;
        $this->container['twitch'] = isset($data['twitch']) ? $data['twitch'] : null;
        $this->container['linked_in'] = isset($data['linked_in']) ? $data['linked_in'] : null;
        $this->container['soundcloud'] = isset($data['soundcloud']) ? $data['soundcloud'] : null;
        $this->container['flickr'] = isset($data['flickr']) ? $data['flickr'] : null;
        $this->container['discord'] = isset($data['discord']) ? $data['discord'] : null;
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
     * Gets instagram
     * @return string
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     * @param string $instagram
     * @return $this
     */
    public function setInstagram($instagram)
    {
        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets tiktok
     * @return string
     */
    public function getTiktok()
    {
        return $this->container['tiktok'];
    }

    /**
     * Sets tiktok
     * @param string $tiktok
     * @return $this
     */
    public function setTiktok($tiktok)
    {
        $this->container['tiktok'] = $tiktok;

        return $this;
    }

    /**
     * Gets twitch
     * @return string
     */
    public function getTwitch()
    {
        return $this->container['twitch'];
    }

    /**
     * Sets twitch
     * @param string $twitch
     * @return $this
     */
    public function setTwitch($twitch)
    {
        $this->container['twitch'] = $twitch;

        return $this;
    }

    /**
     * Gets linked_in
     * @return string
     */
    public function getLinkedIn()
    {
        return $this->container['linked_in'];
    }

    /**
     * Sets linked_in
     * @param string $linked_in
     * @return $this
     */
    public function setLinkedIn($linked_in)
    {
        $this->container['linked_in'] = $linked_in;

        return $this;
    }

    /**
     * Gets soundcloud
     * @return string
     */
    public function getSoundcloud()
    {
        return $this->container['soundcloud'];
    }

    /**
     * Sets soundcloud
     * @param string $soundcloud
     * @return $this
     */
    public function setSoundcloud($soundcloud)
    {
        $this->container['soundcloud'] = $soundcloud;

        return $this;
    }

    /**
     * Gets flickr
     * @return string
     */
    public function getFlickr()
    {
        return $this->container['flickr'];
    }

    /**
     * Sets flickr
     * @param string $flickr
     * @return $this
     */
    public function setFlickr($flickr)
    {
        $this->container['flickr'] = $flickr;

        return $this;
    }

    /**
     * Gets discord
     * @return string
     */
    public function getDiscord()
    {
        return $this->container['discord'];
    }

    /**
     * Sets discord
     * @param string $discord
     * @return $this
     */
    public function setDiscord($discord)
    {
        $this->container['discord'] = $discord;

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


