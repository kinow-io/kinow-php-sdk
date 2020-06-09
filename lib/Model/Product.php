<?php
/**
 * Product
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
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.3.71
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
 * Product Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Product implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'reference' => 'string',
        'date_from' => 'string',
        'date_to' => 'string',
        'visible_before_publication' => 'bool',
        'visible_after_publication' => 'bool',
        'price' => 'float',
        'price_mode' => 'float',
        'position' => 'int',
        'active' => 'bool',
        'available_for_order' => 'bool',
        'date_add' => 'string',
        'date_upd' => 'string',
        'id_category_default' => 'int',
        'images' => '\Kaemo\Client\Model\Image[]',
        'attributes' => '\Kaemo\Client\Model\ProductAttribute[]',
        'meta_description' => '\Kaemo\Client\Model\I18nField[]',
        'meta_keywords' => '\Kaemo\Client\Model\I18nField[]',
        'meta_title' => '\Kaemo\Client\Model\I18nField[]',
        'link_rewrite' => '\Kaemo\Client\Model\I18nField[]',
        'name' => '\Kaemo\Client\Model\I18nField[]',
        'description' => '\Kaemo\Client\Model\I18nField[]',
        'description_short' => '\Kaemo\Client\Model\I18nField[]',
        'tags' => '\Kaemo\Client\Model\Tag[]',
        'can_buy' => 'bool',
        'available_in_subscriptions' => 'bool',
        'duration' => 'int',
        'type' => 'string',
        'sub' => 'bool',
        'has_group_restriction' => 'bool',
        'group_restriction_behavior' => 'int',
        'geoloc_enabled' => 'bool',
        'behavior_detected_countries' => 'string',
        'behavior_non_detected_countries' => 'string',
        'id_product_attribute' => 'int',
        'roles' => 'string'
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
        'reference' => 'reference',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'visible_before_publication' => 'visible_before_publication',
        'visible_after_publication' => 'visible_after_publication',
        'price' => 'price',
        'price_mode' => 'price_mode',
        'position' => 'position',
        'active' => 'active',
        'available_for_order' => 'available_for_order',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'id_category_default' => 'id_category_default',
        'images' => 'images',
        'attributes' => 'attributes',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',
        'meta_title' => 'meta_title',
        'link_rewrite' => 'link_rewrite',
        'name' => 'name',
        'description' => 'description',
        'description_short' => 'description_short',
        'tags' => 'tags',
        'can_buy' => 'can_buy',
        'available_in_subscriptions' => 'available_in_subscriptions',
        'duration' => 'duration',
        'type' => 'type',
        'sub' => 'sub',
        'has_group_restriction' => 'has_group_restriction',
        'group_restriction_behavior' => 'group_restriction_behavior',
        'geoloc_enabled' => 'geoloc_enabled',
        'behavior_detected_countries' => 'behavior_detected_countries',
        'behavior_non_detected_countries' => 'behavior_non_detected_countries',
        'id_product_attribute' => 'id_product_attribute',
        'roles' => 'roles'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'reference' => 'setReference',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'visible_before_publication' => 'setVisibleBeforePublication',
        'visible_after_publication' => 'setVisibleAfterPublication',
        'price' => 'setPrice',
        'price_mode' => 'setPriceMode',
        'position' => 'setPosition',
        'active' => 'setActive',
        'available_for_order' => 'setAvailableForOrder',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'id_category_default' => 'setIdCategoryDefault',
        'images' => 'setImages',
        'attributes' => 'setAttributes',
        'meta_description' => 'setMetaDescription',
        'meta_keywords' => 'setMetaKeywords',
        'meta_title' => 'setMetaTitle',
        'link_rewrite' => 'setLinkRewrite',
        'name' => 'setName',
        'description' => 'setDescription',
        'description_short' => 'setDescriptionShort',
        'tags' => 'setTags',
        'can_buy' => 'setCanBuy',
        'available_in_subscriptions' => 'setAvailableInSubscriptions',
        'duration' => 'setDuration',
        'type' => 'setType',
        'sub' => 'setSub',
        'has_group_restriction' => 'setHasGroupRestriction',
        'group_restriction_behavior' => 'setGroupRestrictionBehavior',
        'geoloc_enabled' => 'setGeolocEnabled',
        'behavior_detected_countries' => 'setBehaviorDetectedCountries',
        'behavior_non_detected_countries' => 'setBehaviorNonDetectedCountries',
        'id_product_attribute' => 'setIdProductAttribute',
        'roles' => 'setRoles'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'reference' => 'getReference',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'visible_before_publication' => 'getVisibleBeforePublication',
        'visible_after_publication' => 'getVisibleAfterPublication',
        'price' => 'getPrice',
        'price_mode' => 'getPriceMode',
        'position' => 'getPosition',
        'active' => 'getActive',
        'available_for_order' => 'getAvailableForOrder',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'id_category_default' => 'getIdCategoryDefault',
        'images' => 'getImages',
        'attributes' => 'getAttributes',
        'meta_description' => 'getMetaDescription',
        'meta_keywords' => 'getMetaKeywords',
        'meta_title' => 'getMetaTitle',
        'link_rewrite' => 'getLinkRewrite',
        'name' => 'getName',
        'description' => 'getDescription',
        'description_short' => 'getDescriptionShort',
        'tags' => 'getTags',
        'can_buy' => 'getCanBuy',
        'available_in_subscriptions' => 'getAvailableInSubscriptions',
        'duration' => 'getDuration',
        'type' => 'getType',
        'sub' => 'getSub',
        'has_group_restriction' => 'getHasGroupRestriction',
        'group_restriction_behavior' => 'getGroupRestrictionBehavior',
        'geoloc_enabled' => 'getGeolocEnabled',
        'behavior_detected_countries' => 'getBehaviorDetectedCountries',
        'behavior_non_detected_countries' => 'getBehaviorNonDetectedCountries',
        'id_product_attribute' => 'getIdProductAttribute',
        'roles' => 'getRoles'
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['visible_before_publication'] = isset($data['visible_before_publication']) ? $data['visible_before_publication'] : null;
        $this->container['visible_after_publication'] = isset($data['visible_after_publication']) ? $data['visible_after_publication'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_mode'] = isset($data['price_mode']) ? $data['price_mode'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['available_for_order'] = isset($data['available_for_order']) ? $data['available_for_order'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['id_category_default'] = isset($data['id_category_default']) ? $data['id_category_default'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['link_rewrite'] = isset($data['link_rewrite']) ? $data['link_rewrite'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_short'] = isset($data['description_short']) ? $data['description_short'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['can_buy'] = isset($data['can_buy']) ? $data['can_buy'] : null;
        $this->container['available_in_subscriptions'] = isset($data['available_in_subscriptions']) ? $data['available_in_subscriptions'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['has_group_restriction'] = isset($data['has_group_restriction']) ? $data['has_group_restriction'] : null;
        $this->container['group_restriction_behavior'] = isset($data['group_restriction_behavior']) ? $data['group_restriction_behavior'] : null;
        $this->container['geoloc_enabled'] = isset($data['geoloc_enabled']) ? $data['geoloc_enabled'] : null;
        $this->container['behavior_detected_countries'] = isset($data['behavior_detected_countries']) ? $data['behavior_detected_countries'] : null;
        $this->container['behavior_non_detected_countries'] = isset($data['behavior_non_detected_countries']) ? $data['behavior_non_detected_countries'] : null;
        $this->container['id_product_attribute'] = isset($data['id_product_attribute']) ? $data['id_product_attribute'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
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
     * Gets visible_before_publication
     * @return bool
     */
    public function getVisibleBeforePublication()
    {
        return $this->container['visible_before_publication'];
    }

    /**
     * Sets visible_before_publication
     * @param bool $visible_before_publication 
     * @return $this
     */
    public function setVisibleBeforePublication($visible_before_publication)
    {
        $this->container['visible_before_publication'] = $visible_before_publication;

        return $this;
    }

    /**
     * Gets visible_after_publication
     * @return bool
     */
    public function getVisibleAfterPublication()
    {
        return $this->container['visible_after_publication'];
    }

    /**
     * Sets visible_after_publication
     * @param bool $visible_after_publication 
     * @return $this
     */
    public function setVisibleAfterPublication($visible_after_publication)
    {
        $this->container['visible_after_publication'] = $visible_after_publication;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price 
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_mode
     * @return float
     */
    public function getPriceMode()
    {
        return $this->container['price_mode'];
    }

    /**
     * Sets price_mode
     * @param float $price_mode 
     * @return $this
     */
    public function setPriceMode($price_mode)
    {
        $this->container['price_mode'] = $price_mode;

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
     * Gets available_for_order
     * @return bool
     */
    public function getAvailableForOrder()
    {
        return $this->container['available_for_order'];
    }

    /**
     * Sets available_for_order
     * @param bool $available_for_order 
     * @return $this
     */
    public function setAvailableForOrder($available_for_order)
    {
        $this->container['available_for_order'] = $available_for_order;

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
     * Gets images
     * @return \Kaemo\Client\Model\Image[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \Kaemo\Client\Model\Image[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets attributes
     * @return \Kaemo\Client\Model\ProductAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \Kaemo\Client\Model\ProductAttribute[] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets meta_description
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param \Kaemo\Client\Model\I18nField[] $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param \Kaemo\Client\Model\I18nField[] $meta_keywords
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_title
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     * @param \Kaemo\Client\Model\I18nField[] $meta_title
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets link_rewrite
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getLinkRewrite()
    {
        return $this->container['link_rewrite'];
    }

    /**
     * Sets link_rewrite
     * @param \Kaemo\Client\Model\I18nField[] $link_rewrite
     * @return $this
     */
    public function setLinkRewrite($link_rewrite)
    {
        $this->container['link_rewrite'] = $link_rewrite;

        return $this;
    }

    /**
     * Gets name
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Kaemo\Client\Model\I18nField[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets description_short
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getDescriptionShort()
    {
        return $this->container['description_short'];
    }

    /**
     * Sets description_short
     * @param \Kaemo\Client\Model\I18nField[] $description_short
     * @return $this
     */
    public function setDescriptionShort($description_short)
    {
        $this->container['description_short'] = $description_short;

        return $this;
    }

    /**
     * Gets tags
     * @return \Kaemo\Client\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Kaemo\Client\Model\Tag[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets can_buy
     * @return bool
     */
    public function getCanBuy()
    {
        return $this->container['can_buy'];
    }

    /**
     * Sets can_buy
     * @param bool $can_buy 
     * @return $this
     */
    public function setCanBuy($can_buy)
    {
        $this->container['can_buy'] = $can_buy;

        return $this;
    }

    /**
     * Gets available_in_subscriptions
     * @return bool
     */
    public function getAvailableInSubscriptions()
    {
        return $this->container['available_in_subscriptions'];
    }

    /**
     * Sets available_in_subscriptions
     * @param bool $available_in_subscriptions 
     * @return $this
     */
    public function setAvailableInSubscriptions($available_in_subscriptions)
    {
        $this->container['available_in_subscriptions'] = $available_in_subscriptions;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration 
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * Gets sub
     * @return bool
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     * @param bool $sub DEPRECATED (use type)
     * @return $this
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets has_group_restriction
     * @return bool
     */
    public function getHasGroupRestriction()
    {
        return $this->container['has_group_restriction'];
    }

    /**
     * Sets has_group_restriction
     * @param bool $has_group_restriction DEPRECATED (use group_restriction_behavior)
     * @return $this
     */
    public function setHasGroupRestriction($has_group_restriction)
    {
        $this->container['has_group_restriction'] = $has_group_restriction;

        return $this;
    }

    /**
     * Gets group_restriction_behavior
     * @return int
     */
    public function getGroupRestrictionBehavior()
    {
        return $this->container['group_restriction_behavior'];
    }

    /**
     * Sets group_restriction_behavior
     * @param int $group_restriction_behavior 
     * @return $this
     */
    public function setGroupRestrictionBehavior($group_restriction_behavior)
    {
        $this->container['group_restriction_behavior'] = $group_restriction_behavior;

        return $this;
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
     * Gets id_product_attribute
     * @return int
     */
    public function getIdProductAttribute()
    {
        return $this->container['id_product_attribute'];
    }

    /**
     * Sets id_product_attribute
     * @param int $id_product_attribute Only available when the product is in a cart
     * @return $this
     */
    public function setIdProductAttribute($id_product_attribute)
    {
        $this->container['id_product_attribute'] = $id_product_attribute;

        return $this;
    }

    /**
     * Gets roles
     * @return string
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     * @param string $roles 
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

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


