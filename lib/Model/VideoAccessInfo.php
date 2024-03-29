<?php
/**
 * VideoAccessInfo
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
 * VideoAccessInfo Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VideoAccessInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VideoAccessInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_video' => 'float',
        'streaming' => 'bool',
        'download' => 'bool',
        'maximum_watched' => 'bool',
        'maximum_viewing' => 'bool',
        'quality_hd' => 'bool',
        'quality_sd' => 'bool',
        'expires' => 'string',
        'play_duration' => 'float',
        'error_code' => 'float'
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
        'id_video' => 'id_video',
        'streaming' => 'streaming',
        'download' => 'download',
        'maximum_watched' => 'maximum_watched',
        'maximum_viewing' => 'maximum_viewing',
        'quality_hd' => 'quality_hd',
        'quality_sd' => 'quality_sd',
        'expires' => 'expires',
        'play_duration' => 'play_duration',
        'error_code' => 'error_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_video' => 'setIdVideo',
        'streaming' => 'setStreaming',
        'download' => 'setDownload',
        'maximum_watched' => 'setMaximumWatched',
        'maximum_viewing' => 'setMaximumViewing',
        'quality_hd' => 'setQualityHd',
        'quality_sd' => 'setQualitySd',
        'expires' => 'setExpires',
        'play_duration' => 'setPlayDuration',
        'error_code' => 'setErrorCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_video' => 'getIdVideo',
        'streaming' => 'getStreaming',
        'download' => 'getDownload',
        'maximum_watched' => 'getMaximumWatched',
        'maximum_viewing' => 'getMaximumViewing',
        'quality_hd' => 'getQualityHd',
        'quality_sd' => 'getQualitySd',
        'expires' => 'getExpires',
        'play_duration' => 'getPlayDuration',
        'error_code' => 'getErrorCode'
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
        $this->container['id_video'] = isset($data['id_video']) ? $data['id_video'] : null;
        $this->container['streaming'] = isset($data['streaming']) ? $data['streaming'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
        $this->container['maximum_watched'] = isset($data['maximum_watched']) ? $data['maximum_watched'] : null;
        $this->container['maximum_viewing'] = isset($data['maximum_viewing']) ? $data['maximum_viewing'] : null;
        $this->container['quality_hd'] = isset($data['quality_hd']) ? $data['quality_hd'] : null;
        $this->container['quality_sd'] = isset($data['quality_sd']) ? $data['quality_sd'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['play_duration'] = isset($data['play_duration']) ? $data['play_duration'] : null;
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
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
     * Gets id_video
     * @return float
     */
    public function getIdVideo()
    {
        return $this->container['id_video'];
    }

    /**
     * Sets id_video
     * @param float $id_video
     * @return $this
     */
    public function setIdVideo($id_video)
    {
        $this->container['id_video'] = $id_video;

        return $this;
    }

    /**
     * Gets streaming
     * @return bool
     */
    public function getStreaming()
    {
        return $this->container['streaming'];
    }

    /**
     * Sets streaming
     * @param bool $streaming
     * @return $this
     */
    public function setStreaming($streaming)
    {
        $this->container['streaming'] = $streaming;

        return $this;
    }

    /**
     * Gets download
     * @return bool
     */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
     * Sets download
     * @param bool $download
     * @return $this
     */
    public function setDownload($download)
    {
        $this->container['download'] = $download;

        return $this;
    }

    /**
     * Gets maximum_watched
     * @return bool
     */
    public function getMaximumWatched()
    {
        return $this->container['maximum_watched'];
    }

    /**
     * Sets maximum_watched
     * @param bool $maximum_watched
     * @return $this
     */
    public function setMaximumWatched($maximum_watched)
    {
        $this->container['maximum_watched'] = $maximum_watched;

        return $this;
    }

    /**
     * Gets maximum_viewing
     * @return bool
     */
    public function getMaximumViewing()
    {
        return $this->container['maximum_viewing'];
    }

    /**
     * Sets maximum_viewing
     * @param bool $maximum_viewing
     * @return $this
     */
    public function setMaximumViewing($maximum_viewing)
    {
        $this->container['maximum_viewing'] = $maximum_viewing;

        return $this;
    }

    /**
     * Gets quality_hd
     * @return bool
     */
    public function getQualityHd()
    {
        return $this->container['quality_hd'];
    }

    /**
     * Sets quality_hd
     * @param bool $quality_hd
     * @return $this
     */
    public function setQualityHd($quality_hd)
    {
        $this->container['quality_hd'] = $quality_hd;

        return $this;
    }

    /**
     * Gets quality_sd
     * @return bool
     */
    public function getQualitySd()
    {
        return $this->container['quality_sd'];
    }

    /**
     * Sets quality_sd
     * @param bool $quality_sd
     * @return $this
     */
    public function setQualitySd($quality_sd)
    {
        $this->container['quality_sd'] = $quality_sd;

        return $this;
    }

    /**
     * Gets expires
     * @return string
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     * @param string $expires
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets play_duration
     * @return float
     */
    public function getPlayDuration()
    {
        return $this->container['play_duration'];
    }

    /**
     * Sets play_duration
     * @param float $play_duration
     * @return $this
     */
    public function setPlayDuration($play_duration)
    {
        $this->container['play_duration'] = $play_duration;

        return $this;
    }

    /**
     * Gets error_code
     * @return float
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     * @param float $error_code
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

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


