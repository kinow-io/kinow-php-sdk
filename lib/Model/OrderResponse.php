<?php
/**
 * OrderResponse
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
 * OpenAPI spec version: 2.0.10
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
 * OrderResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_order_renew' => 'int',
        'id_cart' => 'int',
        'id_currency' => 'int',
        'id_customer' => 'int',
        'current_state' => 'int',
        'payment' => 'string',
        'module' => 'string',
        'total_discounts' => 'float',
        'total_discounts_tax_incl' => 'float',
        'total_discounts_tax_excl' => 'float',
        'total_paid' => 'float',
        'total_paid_tax_incl' => 'float',
        'total_paid_tax_excl' => 'float',
        'total_products' => 'float',
        'total_products_wt' => 'float',
        'conversion_rate' => 'float',
        'invoice_number' => 'int',
        'invoice_date' => 'string',
        'valid' => 'bool',
        'reference' => 'string',
        'date_add' => 'string',
        'date_upd' => 'string',
        'histories' => '\Kinow\Client\Model\OrderHistory[]'
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
        'id_order_renew' => 'id_order_renew',
        'id_cart' => 'id_cart',
        'id_currency' => 'id_currency',
        'id_customer' => 'id_customer',
        'current_state' => 'current_state',
        'payment' => 'payment',
        'module' => 'module',
        'total_discounts' => 'total_discounts',
        'total_discounts_tax_incl' => 'total_discounts_tax_incl',
        'total_discounts_tax_excl' => 'total_discounts_tax_excl',
        'total_paid' => 'total_paid',
        'total_paid_tax_incl' => 'total_paid_tax_incl',
        'total_paid_tax_excl' => 'total_paid_tax_excl',
        'total_products' => 'total_products',
        'total_products_wt' => 'total_products_wt',
        'conversion_rate' => 'conversion_rate',
        'invoice_number' => 'invoice_number',
        'invoice_date' => 'invoice_date',
        'valid' => 'valid',
        'reference' => 'reference',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'histories' => 'histories'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_order_renew' => 'setIdOrderRenew',
        'id_cart' => 'setIdCart',
        'id_currency' => 'setIdCurrency',
        'id_customer' => 'setIdCustomer',
        'current_state' => 'setCurrentState',
        'payment' => 'setPayment',
        'module' => 'setModule',
        'total_discounts' => 'setTotalDiscounts',
        'total_discounts_tax_incl' => 'setTotalDiscountsTaxIncl',
        'total_discounts_tax_excl' => 'setTotalDiscountsTaxExcl',
        'total_paid' => 'setTotalPaid',
        'total_paid_tax_incl' => 'setTotalPaidTaxIncl',
        'total_paid_tax_excl' => 'setTotalPaidTaxExcl',
        'total_products' => 'setTotalProducts',
        'total_products_wt' => 'setTotalProductsWt',
        'conversion_rate' => 'setConversionRate',
        'invoice_number' => 'setInvoiceNumber',
        'invoice_date' => 'setInvoiceDate',
        'valid' => 'setValid',
        'reference' => 'setReference',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'histories' => 'setHistories'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_order_renew' => 'getIdOrderRenew',
        'id_cart' => 'getIdCart',
        'id_currency' => 'getIdCurrency',
        'id_customer' => 'getIdCustomer',
        'current_state' => 'getCurrentState',
        'payment' => 'getPayment',
        'module' => 'getModule',
        'total_discounts' => 'getTotalDiscounts',
        'total_discounts_tax_incl' => 'getTotalDiscountsTaxIncl',
        'total_discounts_tax_excl' => 'getTotalDiscountsTaxExcl',
        'total_paid' => 'getTotalPaid',
        'total_paid_tax_incl' => 'getTotalPaidTaxIncl',
        'total_paid_tax_excl' => 'getTotalPaidTaxExcl',
        'total_products' => 'getTotalProducts',
        'total_products_wt' => 'getTotalProductsWt',
        'conversion_rate' => 'getConversionRate',
        'invoice_number' => 'getInvoiceNumber',
        'invoice_date' => 'getInvoiceDate',
        'valid' => 'getValid',
        'reference' => 'getReference',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'histories' => 'getHistories'
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
        $this->container['id_order_renew'] = isset($data['id_order_renew']) ? $data['id_order_renew'] : null;
        $this->container['id_cart'] = isset($data['id_cart']) ? $data['id_cart'] : null;
        $this->container['id_currency'] = isset($data['id_currency']) ? $data['id_currency'] : null;
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['current_state'] = isset($data['current_state']) ? $data['current_state'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['total_discounts'] = isset($data['total_discounts']) ? $data['total_discounts'] : null;
        $this->container['total_discounts_tax_incl'] = isset($data['total_discounts_tax_incl']) ? $data['total_discounts_tax_incl'] : null;
        $this->container['total_discounts_tax_excl'] = isset($data['total_discounts_tax_excl']) ? $data['total_discounts_tax_excl'] : null;
        $this->container['total_paid'] = isset($data['total_paid']) ? $data['total_paid'] : null;
        $this->container['total_paid_tax_incl'] = isset($data['total_paid_tax_incl']) ? $data['total_paid_tax_incl'] : null;
        $this->container['total_paid_tax_excl'] = isset($data['total_paid_tax_excl']) ? $data['total_paid_tax_excl'] : null;
        $this->container['total_products'] = isset($data['total_products']) ? $data['total_products'] : null;
        $this->container['total_products_wt'] = isset($data['total_products_wt']) ? $data['total_products_wt'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['histories'] = isset($data['histories']) ? $data['histories'] : null;
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
     * Gets id_order_renew
     * @return int
     */
    public function getIdOrderRenew()
    {
        return $this->container['id_order_renew'];
    }

    /**
     * Sets id_order_renew
     * @param int $id_order_renew
     * @return $this
     */
    public function setIdOrderRenew($id_order_renew)
    {
        $this->container['id_order_renew'] = $id_order_renew;

        return $this;
    }

    /**
     * Gets id_cart
     * @return int
     */
    public function getIdCart()
    {
        return $this->container['id_cart'];
    }

    /**
     * Sets id_cart
     * @param int $id_cart
     * @return $this
     */
    public function setIdCart($id_cart)
    {
        $this->container['id_cart'] = $id_cart;

        return $this;
    }

    /**
     * Gets id_currency
     * @return int
     */
    public function getIdCurrency()
    {
        return $this->container['id_currency'];
    }

    /**
     * Sets id_currency
     * @param int $id_currency
     * @return $this
     */
    public function setIdCurrency($id_currency)
    {
        $this->container['id_currency'] = $id_currency;

        return $this;
    }

    /**
     * Gets id_customer
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->container['id_customer'];
    }

    /**
     * Sets id_customer
     * @param int $id_customer
     * @return $this
     */
    public function setIdCustomer($id_customer)
    {
        $this->container['id_customer'] = $id_customer;

        return $this;
    }

    /**
     * Gets current_state
     * @return int
     */
    public function getCurrentState()
    {
        return $this->container['current_state'];
    }

    /**
     * Sets current_state
     * @param int $current_state
     * @return $this
     */
    public function setCurrentState($current_state)
    {
        $this->container['current_state'] = $current_state;

        return $this;
    }

    /**
     * Gets payment
     * @return string
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     * @param string $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets module
     * @return string
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     * @param string $module
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets total_discounts
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->container['total_discounts'];
    }

    /**
     * Sets total_discounts
     * @param float $total_discounts
     * @return $this
     */
    public function setTotalDiscounts($total_discounts)
    {
        $this->container['total_discounts'] = $total_discounts;

        return $this;
    }

    /**
     * Gets total_discounts_tax_incl
     * @return float
     */
    public function getTotalDiscountsTaxIncl()
    {
        return $this->container['total_discounts_tax_incl'];
    }

    /**
     * Sets total_discounts_tax_incl
     * @param float $total_discounts_tax_incl
     * @return $this
     */
    public function setTotalDiscountsTaxIncl($total_discounts_tax_incl)
    {
        $this->container['total_discounts_tax_incl'] = $total_discounts_tax_incl;

        return $this;
    }

    /**
     * Gets total_discounts_tax_excl
     * @return float
     */
    public function getTotalDiscountsTaxExcl()
    {
        return $this->container['total_discounts_tax_excl'];
    }

    /**
     * Sets total_discounts_tax_excl
     * @param float $total_discounts_tax_excl
     * @return $this
     */
    public function setTotalDiscountsTaxExcl($total_discounts_tax_excl)
    {
        $this->container['total_discounts_tax_excl'] = $total_discounts_tax_excl;

        return $this;
    }

    /**
     * Gets total_paid
     * @return float
     */
    public function getTotalPaid()
    {
        return $this->container['total_paid'];
    }

    /**
     * Sets total_paid
     * @param float $total_paid
     * @return $this
     */
    public function setTotalPaid($total_paid)
    {
        $this->container['total_paid'] = $total_paid;

        return $this;
    }

    /**
     * Gets total_paid_tax_incl
     * @return float
     */
    public function getTotalPaidTaxIncl()
    {
        return $this->container['total_paid_tax_incl'];
    }

    /**
     * Sets total_paid_tax_incl
     * @param float $total_paid_tax_incl
     * @return $this
     */
    public function setTotalPaidTaxIncl($total_paid_tax_incl)
    {
        $this->container['total_paid_tax_incl'] = $total_paid_tax_incl;

        return $this;
    }

    /**
     * Gets total_paid_tax_excl
     * @return float
     */
    public function getTotalPaidTaxExcl()
    {
        return $this->container['total_paid_tax_excl'];
    }

    /**
     * Sets total_paid_tax_excl
     * @param float $total_paid_tax_excl
     * @return $this
     */
    public function setTotalPaidTaxExcl($total_paid_tax_excl)
    {
        $this->container['total_paid_tax_excl'] = $total_paid_tax_excl;

        return $this;
    }

    /**
     * Gets total_products
     * @return float
     */
    public function getTotalProducts()
    {
        return $this->container['total_products'];
    }

    /**
     * Sets total_products
     * @param float $total_products
     * @return $this
     */
    public function setTotalProducts($total_products)
    {
        $this->container['total_products'] = $total_products;

        return $this;
    }

    /**
     * Gets total_products_wt
     * @return float
     */
    public function getTotalProductsWt()
    {
        return $this->container['total_products_wt'];
    }

    /**
     * Sets total_products_wt
     * @param float $total_products_wt
     * @return $this
     */
    public function setTotalProductsWt($total_products_wt)
    {
        $this->container['total_products_wt'] = $total_products_wt;

        return $this;
    }

    /**
     * Gets conversion_rate
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     * @param float $conversion_rate
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param int $invoice_number
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_date
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     * @param string $invoice_date
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets valid
     * @return bool
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     * @param bool $valid
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

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
     * Gets histories
     * @return \Kinow\Client\Model\OrderHistory[]
     */
    public function getHistories()
    {
        return $this->container['histories'];
    }

    /**
     * Sets histories
     * @param \Kinow\Client\Model\OrderHistory[] $histories
     * @return $this
     */
    public function setHistories($histories)
    {
        $this->container['histories'] = $histories;

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


