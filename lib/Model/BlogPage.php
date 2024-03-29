<?php
/**
 * BlogPage
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
 * BlogPage Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BlogPage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BlogPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_lang' => 'int',
        'title' => 'string',
        'link_rewrite' => 'string',
        'description_short' => 'string',
        'description' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'meta_keywords' => 'string',
        'date_add' => 'string',
        'date_issue' => 'string',
        'date_upd' => 'string',
        'active' => 'bool',
        'id_blog_category' => 'int',
        'cover' => 'string',
        'id' => 'int'
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
        'id_lang' => 'id_lang',
        'title' => 'title',
        'link_rewrite' => 'link_rewrite',
        'description_short' => 'description_short',
        'description' => 'description',
        'meta_title' => 'meta_title',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',
        'date_add' => 'date_add',
        'date_issue' => 'date_issue',
        'date_upd' => 'date_upd',
        'active' => 'active',
        'id_blog_category' => 'id_blog_category',
        'cover' => 'cover',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_lang' => 'setIdLang',
        'title' => 'setTitle',
        'link_rewrite' => 'setLinkRewrite',
        'description_short' => 'setDescriptionShort',
        'description' => 'setDescription',
        'meta_title' => 'setMetaTitle',
        'meta_description' => 'setMetaDescription',
        'meta_keywords' => 'setMetaKeywords',
        'date_add' => 'setDateAdd',
        'date_issue' => 'setDateIssue',
        'date_upd' => 'setDateUpd',
        'active' => 'setActive',
        'id_blog_category' => 'setIdBlogCategory',
        'cover' => 'setCover',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_lang' => 'getIdLang',
        'title' => 'getTitle',
        'link_rewrite' => 'getLinkRewrite',
        'description_short' => 'getDescriptionShort',
        'description' => 'getDescription',
        'meta_title' => 'getMetaTitle',
        'meta_description' => 'getMetaDescription',
        'meta_keywords' => 'getMetaKeywords',
        'date_add' => 'getDateAdd',
        'date_issue' => 'getDateIssue',
        'date_upd' => 'getDateUpd',
        'active' => 'getActive',
        'id_blog_category' => 'getIdBlogCategory',
        'cover' => 'getCover',
        'id' => 'getId'
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
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['link_rewrite'] = isset($data['link_rewrite']) ? $data['link_rewrite'] : null;
        $this->container['description_short'] = isset($data['description_short']) ? $data['description_short'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_issue'] = isset($data['date_issue']) ? $data['date_issue'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['id_blog_category'] = isset($data['id_blog_category']) ? $data['id_blog_category'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets id_lang
     * @return int
     */
    public function getIdLang()
    {
        return $this->container['id_lang'];
    }

    /**
     * Sets id_lang
     * @param int $id_lang
     * @return $this
     */
    public function setIdLang($id_lang)
    {
        $this->container['id_lang'] = $id_lang;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets link_rewrite
     * @return string
     */
    public function getLinkRewrite()
    {
        return $this->container['link_rewrite'];
    }

    /**
     * Sets link_rewrite
     * @param string $link_rewrite
     * @return $this
     */
    public function setLinkRewrite($link_rewrite)
    {
        $this->container['link_rewrite'] = $link_rewrite;

        return $this;
    }

    /**
     * Gets description_short
     * @return string
     */
    public function getDescriptionShort()
    {
        return $this->container['description_short'];
    }

    /**
     * Sets description_short
     * @param string $description_short
     * @return $this
     */
    public function setDescriptionShort($description_short)
    {
        $this->container['description_short'] = $description_short;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets meta_title
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     * @param string $meta_title
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets meta_description
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param string $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param string $meta_keywords
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

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
     * Gets date_issue
     * @return string
     */
    public function getDateIssue()
    {
        return $this->container['date_issue'];
    }

    /**
     * Sets date_issue
     * @param string $date_issue
     * @return $this
     */
    public function setDateIssue($date_issue)
    {
        $this->container['date_issue'] = $date_issue;

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
     * Gets id_blog_category
     * @return int
     */
    public function getIdBlogCategory()
    {
        return $this->container['id_blog_category'];
    }

    /**
     * Sets id_blog_category
     * @param int $id_blog_category
     * @return $this
     */
    public function setIdBlogCategory($id_blog_category)
    {
        $this->container['id_blog_category'] = $id_blog_category;

        return $this;
    }

    /**
     * Gets cover
     * @return string
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     * @param string $cover
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
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


