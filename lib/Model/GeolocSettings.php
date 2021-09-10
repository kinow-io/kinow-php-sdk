<?php
/**
 * GeolocSettings
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
 * OpenAPI spec version: 1.4.51
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
 * GeolocSettings Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeolocSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GeolocSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'geoloc_enabled' => 'bool',
        'behavior_detected_countries' => 'string',
        'behavior_non_detected_countries' => 'string',
        'countries' => 'string[]'
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
        'geoloc_enabled' => 'geoloc_enabled',
        'behavior_detected_countries' => 'behavior_detected_countries',
        'behavior_non_detected_countries' => 'behavior_non_detected_countries',
        'countries' => 'countries'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'geoloc_enabled' => 'setGeolocEnabled',
        'behavior_detected_countries' => 'setBehaviorDetectedCountries',
        'behavior_non_detected_countries' => 'setBehaviorNonDetectedCountries',
        'countries' => 'setCountries'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'geoloc_enabled' => 'getGeolocEnabled',
        'behavior_detected_countries' => 'getBehaviorDetectedCountries',
        'behavior_non_detected_countries' => 'getBehaviorNonDetectedCountries',
        'countries' => 'getCountries'
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
        $this->container['geoloc_enabled'] = isset($data['geoloc_enabled']) ? $data['geoloc_enabled'] : null;
        $this->container['behavior_detected_countries'] = isset($data['behavior_detected_countries']) ? $data['behavior_detected_countries'] : null;
        $this->container['behavior_non_detected_countries'] = isset($data['behavior_non_detected_countries']) ? $data['behavior_non_detected_countries'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
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
     * Gets geoloc_enabled
     * @return bool
     */
    public function getGeolocEnabled()
    {
        return $this->container['geoloc_enabled'];
    }

    /**
     * Sets geoloc_enabled
     * @param bool $geoloc_enabled
     * @return $this
     */
    public function setGeolocEnabled($geoloc_enabled)
    {
        $this->container['geoloc_enabled'] = $geoloc_enabled;

        return $this;
    }

    /**
     * Gets behavior_detected_countries
     * @return string
     */
    public function getBehaviorDetectedCountries()
    {
        return $this->container['behavior_detected_countries'];
    }

    /**
     * Sets behavior_detected_countries
     * @param string $behavior_detected_countries
     * @return $this
     */
    public function setBehaviorDetectedCountries($behavior_detected_countries)
    {
        $this->container['behavior_detected_countries'] = $behavior_detected_countries;

        return $this;
    }

    /**
     * Gets behavior_non_detected_countries
     * @return string
     */
    public function getBehaviorNonDetectedCountries()
    {
        return $this->container['behavior_non_detected_countries'];
    }

    /**
     * Sets behavior_non_detected_countries
     * @param string $behavior_non_detected_countries
     * @return $this
     */
    public function setBehaviorNonDetectedCountries($behavior_non_detected_countries)
    {
        $this->container['behavior_non_detected_countries'] = $behavior_non_detected_countries;

        return $this;
    }

    /**
     * Gets countries
     * @return string[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     * @param string[] $countries
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

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


