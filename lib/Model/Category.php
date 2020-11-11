<?php
/**
 * Category
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
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.4.15
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
 * Category Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Category implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_parent' => 'int',
        'date_add' => 'string',
        'date_upd' => 'string',
        'active' => 'bool',
        'level_depth' => 'int',
        'position' => 'int',
        'images' => '\Kinow\Client\Model\Image[]',
        'meta_description' => '\Kinow\Client\Model\I18nField[]',
        'meta_keywords' => '\Kinow\Client\Model\I18nField[]',
        'meta_title' => '\Kinow\Client\Model\I18nField[]',
        'link_rewrite' => '\Kinow\Client\Model\I18nField[]',
        'name' => '\Kinow\Client\Model\I18nField[]',
        'description' => '\Kinow\Client\Model\I18nField[]',
        'description_short' => '\Kinow\Client\Model\I18nField[]'
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
        'id_parent' => 'id_parent',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'active' => 'active',
        'level_depth' => 'level_depth',
        'position' => 'position',
        'images' => 'images',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',
        'meta_title' => 'meta_title',
        'link_rewrite' => 'link_rewrite',
        'name' => 'name',
        'description' => 'description',
        'description_short' => 'description_short'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_parent' => 'setIdParent',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'active' => 'setActive',
        'level_depth' => 'setLevelDepth',
        'position' => 'setPosition',
        'images' => 'setImages',
        'meta_description' => 'setMetaDescription',
        'meta_keywords' => 'setMetaKeywords',
        'meta_title' => 'setMetaTitle',
        'link_rewrite' => 'setLinkRewrite',
        'name' => 'setName',
        'description' => 'setDescription',
        'description_short' => 'setDescriptionShort'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_parent' => 'getIdParent',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'active' => 'getActive',
        'level_depth' => 'getLevelDepth',
        'position' => 'getPosition',
        'images' => 'getImages',
        'meta_description' => 'getMetaDescription',
        'meta_keywords' => 'getMetaKeywords',
        'meta_title' => 'getMetaTitle',
        'link_rewrite' => 'getLinkRewrite',
        'name' => 'getName',
        'description' => 'getDescription',
        'description_short' => 'getDescriptionShort'
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
        $this->container['id_parent'] = isset($data['id_parent']) ? $data['id_parent'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['level_depth'] = isset($data['level_depth']) ? $data['level_depth'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['link_rewrite'] = isset($data['link_rewrite']) ? $data['link_rewrite'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_short'] = isset($data['description_short']) ? $data['description_short'] : null;
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
     * Gets id_parent
     * @return int
     */
    public function getIdParent()
    {
        return $this->container['id_parent'];
    }

    /**
     * Sets id_parent
     * @param int $id_parent
     * @return $this
     */
    public function setIdParent($id_parent)
    {
        $this->container['id_parent'] = $id_parent;

        return $this;
    }

    /**
     * Gets date_add
     * @return string
     */
    public function getDateAdd()
    {
        return $this->container['date_add'];
    }

    /**
     * Sets date_add
     * @param string $date_add
     * @return $this
     */
    public function setDateAdd($date_add)
    {
        $this->container['date_add'] = $date_add;

        return $this;
    }

    /**
     * Gets date_upd
     * @return string
     */
    public function getDateUpd()
    {
        return $this->container['date_upd'];
    }

    /**
     * Sets date_upd
     * @param string $date_upd
     * @return $this
     */
    public function setDateUpd($date_upd)
    {
        $this->container['date_upd'] = $date_upd;

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
     * Gets level_depth
     * @return int
     */
    public function getLevelDepth()
    {
        return $this->container['level_depth'];
    }

    /**
     * Sets level_depth
     * @param int $level_depth
     * @return $this
     */
    public function setLevelDepth($level_depth)
    {
        $this->container['level_depth'] = $level_depth;

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
     * Gets images
     * @return \Kinow\Client\Model\Image[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \Kinow\Client\Model\Image[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets meta_description
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param \Kinow\Client\Model\I18nField[] $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param \Kinow\Client\Model\I18nField[] $meta_keywords
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_title
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     * @param \Kinow\Client\Model\I18nField[] $meta_title
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets link_rewrite
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getLinkRewrite()
    {
        return $this->container['link_rewrite'];
    }

    /**
     * Sets link_rewrite
     * @param \Kinow\Client\Model\I18nField[] $link_rewrite
     * @return $this
     */
    public function setLinkRewrite($link_rewrite)
    {
        $this->container['link_rewrite'] = $link_rewrite;

        return $this;
    }

    /**
     * Gets name
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Kinow\Client\Model\I18nField[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Kinow\Client\Model\I18nField[] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_short
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getDescriptionShort()
    {
        return $this->container['description_short'];
    }

    /**
     * Sets description_short
     * @param \Kinow\Client\Model\I18nField[] $description_short
     * @return $this
     */
    public function setDescriptionShort($description_short)
    {
        $this->container['description_short'] = $description_short;

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


