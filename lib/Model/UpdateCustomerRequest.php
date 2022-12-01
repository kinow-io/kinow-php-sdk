<?php
/**
 * UpdateCustomerRequest
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
 * OpenAPI spec version: 2.0.22
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
 * UpdateCustomerRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateCustomerRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateCustomerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'password' => 'string',
        'id_gender' => 'int',
        'birthday' => 'string',
        'newsletter' => 'bool',
        'optin' => 'bool',
        'active' => 'bool',
        'id_lang' => 'int',
        'notification' => 'bool',
        'max_viewing' => 'int',
        'custom' => 'string'
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'email' => 'email',
        'password' => 'password',
        'id_gender' => 'id_gender',
        'birthday' => 'birthday',
        'newsletter' => 'newsletter',
        'optin' => 'optin',
        'active' => 'active',
        'id_lang' => 'id_lang',
        'notification' => 'notification',
        'max_viewing' => 'max_viewing',
        'custom' => 'custom'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'id_gender' => 'setIdGender',
        'birthday' => 'setBirthday',
        'newsletter' => 'setNewsletter',
        'optin' => 'setOptin',
        'active' => 'setActive',
        'id_lang' => 'setIdLang',
        'notification' => 'setNotification',
        'max_viewing' => 'setMaxViewing',
        'custom' => 'setCustom'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'id_gender' => 'getIdGender',
        'birthday' => 'getBirthday',
        'newsletter' => 'getNewsletter',
        'optin' => 'getOptin',
        'active' => 'getActive',
        'id_lang' => 'getIdLang',
        'notification' => 'getNotification',
        'max_viewing' => 'getMaxViewing',
        'custom' => 'getCustom'
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['id_gender'] = isset($data['id_gender']) ? $data['id_gender'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['newsletter'] = isset($data['newsletter']) ? $data['newsletter'] : null;
        $this->container['optin'] = isset($data['optin']) ? $data['optin'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['max_viewing'] = isset($data['max_viewing']) ? $data['max_viewing'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
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
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets id_gender
     * @return int
     */
    public function getIdGender()
    {
        return $this->container['id_gender'];
    }

    /**
     * Sets id_gender
     * @param int $id_gender
     * @return $this
     */
    public function setIdGender($id_gender)
    {
        $this->container['id_gender'] = $id_gender;

        return $this;
    }

    /**
     * Gets birthday
     * @return string
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     * @param string $birthday
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets newsletter
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     * @param bool $newsletter
     * @return $this
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets optin
     * @return bool
     */
    public function getOptin()
    {
        return $this->container['optin'];
    }

    /**
     * Sets optin
     * @param bool $optin
     * @return $this
     */
    public function setOptin($optin)
    {
        $this->container['optin'] = $optin;

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
     * Gets notification
     * @return bool
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     * @param bool $notification
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets max_viewing
     * @return int
     */
    public function getMaxViewing()
    {
        return $this->container['max_viewing'];
    }

    /**
     * Sets max_viewing
     * @param int $max_viewing
     * @return $this
     */
    public function setMaxViewing($max_viewing)
    {
        $this->container['max_viewing'] = $max_viewing;

        return $this;
    }

    /**
     * Gets custom
     * @return string
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     * @param string $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

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


