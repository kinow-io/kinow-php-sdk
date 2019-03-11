<?php
/**
 * WidgetSlider
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Public api for Kinow back office
 *
 * OpenAPI spec version: 1.0.75
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaemo\Client\Model;

use \ArrayAccess;

/**
 * WidgetSlider Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WidgetSlider implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'WidgetSlider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'label' => '\Kaemo\Client\Model\I18nField[]',
        'description' => '\Kaemo\Client\Model\I18nField[]',
        'url' => '\Kaemo\Client\Model\I18nField[]',
        'type' => 'string',
        'type_id' => 'int',
        'blank' => 'int',
        'over' => 'int',
        'button' => 'int',
        'opacity' => 'float',
        'image' => 'string',
        'position' => 'int'
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
        'label' => 'label',
        'description' => 'description',
        'url' => 'url',
        'type' => 'type',
        'type_id' => 'type_id',
        'blank' => 'blank',
        'over' => 'over',
        'button' => 'button',
        'opacity' => 'opacity',
        'image' => 'image',
        'position' => 'position'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'url' => 'setUrl',
        'type' => 'setType',
        'type_id' => 'setTypeId',
        'blank' => 'setBlank',
        'over' => 'setOver',
        'button' => 'setButton',
        'opacity' => 'setOpacity',
        'image' => 'setImage',
        'position' => 'setPosition'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'url' => 'getUrl',
        'type' => 'getType',
        'type_id' => 'getTypeId',
        'blank' => 'getBlank',
        'over' => 'getOver',
        'button' => 'getButton',
        'opacity' => 'getOpacity',
        'image' => 'getImage',
        'position' => 'getPosition'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['blank'] = isset($data['blank']) ? $data['blank'] : null;
        $this->container['over'] = isset($data['over']) ? $data['over'] : null;
        $this->container['button'] = isset($data['button']) ? $data['button'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
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
     * Gets label
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param \Kaemo\Client\Model\I18nField[] $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets description
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Kaemo\Client\Model\I18nField[] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets url
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param \Kaemo\Client\Model\I18nField[] $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

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
     * Gets over
     * @return int
     */
    public function getOver()
    {
        return $this->container['over'];
    }

    /**
     * Sets over
     * @param int $over
     * @return $this
     */
    public function setOver($over)
    {
        $this->container['over'] = $over;

        return $this;
    }

    /**
     * Gets button
     * @return int
     */
    public function getButton()
    {
        return $this->container['button'];
    }

    /**
     * Sets button
     * @param int $button
     * @return $this
     */
    public function setButton($button)
    {
        $this->container['button'] = $button;

        return $this;
    }

    /**
     * Gets opacity
     * @return float
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     * @param float $opacity
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
            return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


