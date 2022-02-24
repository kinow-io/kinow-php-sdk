<?php
/**
 * UpdateProductRequest
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
 * OpenAPI spec version: 2.0.6
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
 * UpdateProductRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateProductRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateProductRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\Kinow\Client\Model\I18nFieldInput[]',
        'description_short' => '\Kinow\Client\Model\I18nFieldInput[]',
        'description' => '\Kinow\Client\Model\I18nFieldInput[]',
        'meta_title' => '\Kinow\Client\Model\I18nFieldInput[]',
        'meta_description' => '\Kinow\Client\Model\I18nFieldInput[]',
        'meta_keywords' => '\Kinow\Client\Model\I18nFieldInput[]',
        'link_rewrite' => '\Kinow\Client\Model\I18nFieldInput[]',
        'active' => 'bool',
        'reference' => 'string',
        'date_from' => 'string',
        'date_to' => 'string',
        'availability_before' => 'int',
        'availability_after' => 'int',
        'id_category_default' => 'int',
        'tags' => '\Kinow\Client\Model\I18nField[]'
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
        'name' => 'name',
        'description_short' => 'description_short',
        'description' => 'description',
        'meta_title' => 'meta_title',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',
        'link_rewrite' => 'link_rewrite',
        'active' => 'active',
        'reference' => 'reference',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'availability_before' => 'availability_before',
        'availability_after' => 'availability_after',
        'id_category_default' => 'id_category_default',
        'tags' => 'tags'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description_short' => 'setDescriptionShort',
        'description' => 'setDescription',
        'meta_title' => 'setMetaTitle',
        'meta_description' => 'setMetaDescription',
        'meta_keywords' => 'setMetaKeywords',
        'link_rewrite' => 'setLinkRewrite',
        'active' => 'setActive',
        'reference' => 'setReference',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'availability_before' => 'setAvailabilityBefore',
        'availability_after' => 'setAvailabilityAfter',
        'id_category_default' => 'setIdCategoryDefault',
        'tags' => 'setTags'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description_short' => 'getDescriptionShort',
        'description' => 'getDescription',
        'meta_title' => 'getMetaTitle',
        'meta_description' => 'getMetaDescription',
        'meta_keywords' => 'getMetaKeywords',
        'link_rewrite' => 'getLinkRewrite',
        'active' => 'getActive',
        'reference' => 'getReference',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'availability_before' => 'getAvailabilityBefore',
        'availability_after' => 'getAvailabilityAfter',
        'id_category_default' => 'getIdCategoryDefault',
        'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description_short'] = isset($data['description_short']) ? $data['description_short'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['link_rewrite'] = isset($data['link_rewrite']) ? $data['link_rewrite'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['availability_before'] = isset($data['availability_before']) ? $data['availability_before'] : null;
        $this->container['availability_after'] = isset($data['availability_after']) ? $data['availability_after'] : null;
        $this->container['id_category_default'] = isset($data['id_category_default']) ? $data['id_category_default'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
     * Gets name
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Kinow\Client\Model\I18nFieldInput[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description_short
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getDescriptionShort()
    {
        return $this->container['description_short'];
    }

    /**
     * Sets description_short
     * @param \Kinow\Client\Model\I18nFieldInput[] $description_short
     * @return $this
     */
    public function setDescriptionShort($description_short)
    {
        $this->container['description_short'] = $description_short;

        return $this;
    }

    /**
     * Gets description
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Kinow\Client\Model\I18nFieldInput[] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets meta_title
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     * @param \Kinow\Client\Model\I18nFieldInput[] $meta_title
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets meta_description
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param \Kinow\Client\Model\I18nFieldInput[] $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param \Kinow\Client\Model\I18nFieldInput[] $meta_keywords
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets link_rewrite
     * @return \Kinow\Client\Model\I18nFieldInput[]
     */
    public function getLinkRewrite()
    {
        return $this->container['link_rewrite'];
    }

    /**
     * Sets link_rewrite
     * @param \Kinow\Client\Model\I18nFieldInput[] $link_rewrite
     * @return $this
     */
    public function setLinkRewrite($link_rewrite)
    {
        $this->container['link_rewrite'] = $link_rewrite;

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
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets date_from
     * @return string
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param string $date_from
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return string
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param string $date_to
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets availability_before
     * @return int
     */
    public function getAvailabilityBefore()
    {
        return $this->container['availability_before'];
    }

    /**
     * Sets availability_before
     * @param int $availability_before Value can be 1, 2 or 3
     * @return $this
     */
    public function setAvailabilityBefore($availability_before)
    {
        $this->container['availability_before'] = $availability_before;

        return $this;
    }

    /**
     * Gets availability_after
     * @return int
     */
    public function getAvailabilityAfter()
    {
        return $this->container['availability_after'];
    }

    /**
     * Sets availability_after
     * @param int $availability_after Value can be 1, 2 or 3
     * @return $this
     */
    public function setAvailabilityAfter($availability_after)
    {
        $this->container['availability_after'] = $availability_after;

        return $this;
    }

    /**
     * Gets id_category_default
     * @return int
     */
    public function getIdCategoryDefault()
    {
        return $this->container['id_category_default'];
    }

    /**
     * Sets id_category_default
     * @param int $id_category_default
     * @return $this
     */
    public function setIdCategoryDefault($id_category_default)
    {
        $this->container['id_category_default'] = $id_category_default;

        return $this;
    }

    /**
     * Gets tags
     * @return \Kinow\Client\Model\I18nField[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Kinow\Client\Model\I18nField[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


