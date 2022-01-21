<?php
/**
 * SubtitleResponse
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
 * SubtitleResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubtitleResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubtitleResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'src' => 'string',
        'srclang' => 'string',
        'name' => 'string',
        'font' => 'string',
        'size' => 'float',
        'color' => 'string',
        'text_shadow' => 'string',
        'background' => 'string',
        'opacity' => 'int',
        'italic_color' => 'bool'
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
        'src' => 'src',
        'srclang' => 'srclang',
        'name' => 'name',
        'font' => 'font',
        'size' => 'size',
        'color' => 'color',
        'text_shadow' => 'text_shadow',
        'background' => 'background',
        'opacity' => 'opacity',
        'italic_color' => 'italic_color'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'src' => 'setSrc',
        'srclang' => 'setSrclang',
        'name' => 'setName',
        'font' => 'setFont',
        'size' => 'setSize',
        'color' => 'setColor',
        'text_shadow' => 'setTextShadow',
        'background' => 'setBackground',
        'opacity' => 'setOpacity',
        'italic_color' => 'setItalicColor'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'src' => 'getSrc',
        'srclang' => 'getSrclang',
        'name' => 'getName',
        'font' => 'getFont',
        'size' => 'getSize',
        'color' => 'getColor',
        'text_shadow' => 'getTextShadow',
        'background' => 'getBackground',
        'opacity' => 'getOpacity',
        'italic_color' => 'getItalicColor'
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
        $this->container['src'] = isset($data['src']) ? $data['src'] : null;
        $this->container['srclang'] = isset($data['srclang']) ? $data['srclang'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['text_shadow'] = isset($data['text_shadow']) ? $data['text_shadow'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['italic_color'] = isset($data['italic_color']) ? $data['italic_color'] : null;
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
     * Gets src
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     * @param string $src
     * @return $this
     */
    public function setSrc($src)
    {
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets srclang
     * @return string
     */
    public function getSrclang()
    {
        return $this->container['srclang'];
    }

    /**
     * Sets srclang
     * @param string $srclang
     * @return $this
     */
    public function setSrclang($srclang)
    {
        $this->container['srclang'] = $srclang;

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
     * Gets font
     * @return string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     * @param string $font
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets size
     * @return float
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param float $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets text_shadow
     * @return string
     */
    public function getTextShadow()
    {
        return $this->container['text_shadow'];
    }

    /**
     * Sets text_shadow
     * @param string $text_shadow
     * @return $this
     */
    public function setTextShadow($text_shadow)
    {
        $this->container['text_shadow'] = $text_shadow;

        return $this;
    }

    /**
     * Gets background
     * @return string
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     * @param string $background
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets opacity
     * @return int
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     * @param int $opacity
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets italic_color
     * @return bool
     */
    public function getItalicColor()
    {
        return $this->container['italic_color'];
    }

    /**
     * Sets italic_color
     * @param bool $italic_color
     * @return $this
     */
    public function setItalicColor($italic_color)
    {
        $this->container['italic_color'] = $italic_color;

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

