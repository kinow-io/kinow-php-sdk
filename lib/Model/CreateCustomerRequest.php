<?php
/**
 * CreateCustomerRequest
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
 * CreateCustomerRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCustomerRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateCustomerRequest';

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
        'custom' => 'string',
        'id_country' => 'int',
        'id_state' => 'int',
        'city' => 'string',
        'postcode' => 'string',
        'address1' => 'string',
        'company' => 'string',
        'send_mail' => 'bool'
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
        'custom' => 'custom',
        'id_country' => 'id_country',
        'id_state' => 'id_state',
        'city' => 'city',
        'postcode' => 'postcode',
        'address1' => 'address1',
        'company' => 'company',
        'send_mail' => 'send_mail'
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
        'custom' => 'setCustom',
        'id_country' => 'setIdCountry',
        'id_state' => 'setIdState',
        'city' => 'setCity',
        'postcode' => 'setPostcode',
        'address1' => 'setAddress1',
        'company' => 'setCompany',
        'send_mail' => 'setSendMail'
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
        'custom' => 'getCustom',
        'id_country' => 'getIdCountry',
        'id_state' => 'getIdState',
        'city' => 'getCity',
        'postcode' => 'getPostcode',
        'address1' => 'getAddress1',
        'company' => 'getCompany',
        'send_mail' => 'getSendMail'
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
        $this->container['id_country'] = isset($data['id_country']) ? $data['id_country'] : null;
        $this->container['id_state'] = isset($data['id_state']) ? $data['id_state'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['send_mail'] = isset($data['send_mail']) ? $data['send_mail'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['firstname'] === null) {
            $invalid_properties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalid_properties[] = "'lastname' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalid_properties[] = "'password' can't be null";
        }
        if ($this->container['id_country'] === null) {
            $invalid_properties[] = "'id_country' can't be null";
        }
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
        if ($this->container['firstname'] === null) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['password'] === null) {
            return false;
        }
        if ($this->container['id_country'] === null) {
            return false;
        }
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
     * Gets id_country
     * @return int
     */
    public function getIdCountry()
    {
        return $this->container['id_country'];
    }

    /**
     * Sets id_country
     * @param int $id_country
     * @return $this
     */
    public function setIdCountry($id_country)
    {
        $this->container['id_country'] = $id_country;

        return $this;
    }

    /**
     * Gets id_state
     * @return int
     */
    public function getIdState()
    {
        return $this->container['id_state'];
    }

    /**
     * Sets id_state
     * @param int $id_state
     * @return $this
     */
    public function setIdState($id_state)
    {
        $this->container['id_state'] = $id_state;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets postcode
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     * @param string $postcode
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets send_mail
     * @return bool
     */
    public function getSendMail()
    {
        return $this->container['send_mail'];
    }

    /**
     * Sets send_mail
     * @param bool $send_mail
     * @return $this
     */
    public function setSendMail($send_mail)
    {
        $this->container['send_mail'] = $send_mail;

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


