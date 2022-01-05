<?php
/**
 * UploadDirectorCoverRequest
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
 * OpenAPI spec version: 1.5.0
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
 * UploadDirectorCoverRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UploadDirectorCoverRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UploadDirectorCoverRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'director_id' => 'int',
        'file' => '\SplFileObject',
        'hash' => 'string',
        'hash_algorithm' => 'string'
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
        'director_id' => 'director_id',
        'file' => 'file',
        'hash' => 'hash',
        'hash_algorithm' => 'hash_algorithm'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'director_id' => 'setDirectorId',
        'file' => 'setFile',
        'hash' => 'setHash',
        'hash_algorithm' => 'setHashAlgorithm'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'director_id' => 'getDirectorId',
        'file' => 'getFile',
        'hash' => 'getHash',
        'hash_algorithm' => 'getHashAlgorithm'
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

    const HASH_ALGORITHM_SHA256 = 'sha256';
    const HASH_ALGORITHM_MD5 = 'md5';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getHashAlgorithmAllowableValues()
    {
        return [
            self::HASH_ALGORITHM_SHA256,
            self::HASH_ALGORITHM_MD5,
        ];
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
        $this->container['director_id'] = isset($data['director_id']) ? $data['director_id'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['hash_algorithm'] = isset($data['hash_algorithm']) ? $data['hash_algorithm'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['director_id'] === null) {
            $invalid_properties[] = "'director_id' can't be null";
        }
        if ($this->container['file'] === null) {
            $invalid_properties[] = "'file' can't be null";
        }
        if ($this->container['hash'] === null) {
            $invalid_properties[] = "'hash' can't be null";
        }
        $allowed_values = ["sha256", "md5"];
        if (!in_array($this->container['hash_algorithm'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'hash_algorithm', must be one of #{allowed_values}.";
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
        if ($this->container['director_id'] === null) {
            return false;
        }
        if ($this->container['file'] === null) {
            return false;
        }
        if ($this->container['hash'] === null) {
            return false;
        }
        $allowed_values = ["sha256", "md5"];
        if (!in_array($this->container['hash_algorithm'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets director_id
     * @return int
     */
    public function getDirectorId()
    {
        return $this->container['director_id'];
    }

    /**
     * Sets director_id
     * @param int $director_id
     * @return $this
     */
    public function setDirectorId($director_id)
    {
        $this->container['director_id'] = $director_id;

        return $this;
    }

    /**
     * Gets file
     * @return \SplFileObject
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     * @param \SplFileObject $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets hash
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     * @param string $hash
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets hash_algorithm
     * @return string
     */
    public function getHashAlgorithm()
    {
        return $this->container['hash_algorithm'];
    }

    /**
     * Sets hash_algorithm
     * @param string $hash_algorithm Hash algorithm to check the hash file (default value is: sha256)
     * @return $this
     */
    public function setHashAlgorithm($hash_algorithm)
    {
        $allowed_values = array('sha256', 'md5');
        if (!is_null($hash_algorithm) && (!in_array($hash_algorithm, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'hash_algorithm', must be one of 'sha256', 'md5'");
        }
        $this->container['hash_algorithm'] = $hash_algorithm;

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


