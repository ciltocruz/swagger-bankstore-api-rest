<?php
/**
 * V1launchpadsubscriptionMerchantDataShipping
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAYCOMET REST API
 *
 * PAYCOMET API REST for customers.
 *
 * OpenAPI spec version: 2.16
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * V1launchpadsubscriptionMerchantDataShipping Class Doc Comment
 *
 * @category Class
 * @description Node with shipping address related information.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1launchpadsubscriptionMerchantDataShipping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1launchpadsubscription_merchantData_shipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ship_addr_city' => 'string',
'ship_addr_country' => 'int',
'ship_addr_line1' => 'string',
'ship_addr_line2' => 'string',
'ship_addr_line3' => 'string',
'ship_addr_post_code' => 'string',
'ship_addr_state' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ship_addr_city' => null,
'ship_addr_country' => null,
'ship_addr_line1' => null,
'ship_addr_line2' => null,
'ship_addr_line3' => null,
'ship_addr_post_code' => null,
'ship_addr_state' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ship_addr_city' => 'shipAddrCity',
'ship_addr_country' => 'shipAddrCountry',
'ship_addr_line1' => 'shipAddrLine1',
'ship_addr_line2' => 'shipAddrLine2',
'ship_addr_line3' => 'shipAddrLine3',
'ship_addr_post_code' => 'shipAddrPostCode',
'ship_addr_state' => 'shipAddrState'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_addr_city' => 'setShipAddrCity',
'ship_addr_country' => 'setShipAddrCountry',
'ship_addr_line1' => 'setShipAddrLine1',
'ship_addr_line2' => 'setShipAddrLine2',
'ship_addr_line3' => 'setShipAddrLine3',
'ship_addr_post_code' => 'setShipAddrPostCode',
'ship_addr_state' => 'setShipAddrState'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_addr_city' => 'getShipAddrCity',
'ship_addr_country' => 'getShipAddrCountry',
'ship_addr_line1' => 'getShipAddrLine1',
'ship_addr_line2' => 'getShipAddrLine2',
'ship_addr_line3' => 'getShipAddrLine3',
'ship_addr_post_code' => 'getShipAddrPostCode',
'ship_addr_state' => 'getShipAddrState'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ship_addr_city'] = isset($data['ship_addr_city']) ? $data['ship_addr_city'] : null;
        $this->container['ship_addr_country'] = isset($data['ship_addr_country']) ? $data['ship_addr_country'] : null;
        $this->container['ship_addr_line1'] = isset($data['ship_addr_line1']) ? $data['ship_addr_line1'] : null;
        $this->container['ship_addr_line2'] = isset($data['ship_addr_line2']) ? $data['ship_addr_line2'] : null;
        $this->container['ship_addr_line3'] = isset($data['ship_addr_line3']) ? $data['ship_addr_line3'] : null;
        $this->container['ship_addr_post_code'] = isset($data['ship_addr_post_code']) ? $data['ship_addr_post_code'] : null;
        $this->container['ship_addr_state'] = isset($data['ship_addr_state']) ? $data['ship_addr_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ship_addr_city
     *
     * @return string
     */
    public function getShipAddrCity()
    {
        return $this->container['ship_addr_city'];
    }

    /**
     * Sets ship_addr_city
     *
     * @param string $ship_addr_city City of delivery address.
     *
     * @return $this
     */
    public function setShipAddrCity($ship_addr_city)
    {
        $this->container['ship_addr_city'] = $ship_addr_city;

        return $this;
    }

    /**
     * Gets ship_addr_country
     *
     * @return int
     */
    public function getShipAddrCountry()
    {
        return $this->container['ship_addr_country'];
    }

    /**
     * Sets ship_addr_country
     *
     * @param int $ship_addr_country Numerical code (ISO 3166-1) of the country of the delivery address
     *
     * @return $this
     */
    public function setShipAddrCountry($ship_addr_country)
    {
        $this->container['ship_addr_country'] = $ship_addr_country;

        return $this;
    }

    /**
     * Gets ship_addr_line1
     *
     * @return string
     */
    public function getShipAddrLine1()
    {
        return $this->container['ship_addr_line1'];
    }

    /**
     * Sets ship_addr_line1
     *
     * @param string $ship_addr_line1 Delivery address, line 1
     *
     * @return $this
     */
    public function setShipAddrLine1($ship_addr_line1)
    {
        $this->container['ship_addr_line1'] = $ship_addr_line1;

        return $this;
    }

    /**
     * Gets ship_addr_line2
     *
     * @return string
     */
    public function getShipAddrLine2()
    {
        return $this->container['ship_addr_line2'];
    }

    /**
     * Sets ship_addr_line2
     *
     * @param string $ship_addr_line2 Delivery address, line 2
     *
     * @return $this
     */
    public function setShipAddrLine2($ship_addr_line2)
    {
        $this->container['ship_addr_line2'] = $ship_addr_line2;

        return $this;
    }

    /**
     * Gets ship_addr_line3
     *
     * @return string
     */
    public function getShipAddrLine3()
    {
        return $this->container['ship_addr_line3'];
    }

    /**
     * Sets ship_addr_line3
     *
     * @param string $ship_addr_line3 Delivery address, line 3
     *
     * @return $this
     */
    public function setShipAddrLine3($ship_addr_line3)
    {
        $this->container['ship_addr_line3'] = $ship_addr_line3;

        return $this;
    }

    /**
     * Gets ship_addr_post_code
     *
     * @return string
     */
    public function getShipAddrPostCode()
    {
        return $this->container['ship_addr_post_code'];
    }

    /**
     * Sets ship_addr_post_code
     *
     * @param string $ship_addr_post_code Post code of the delivery address
     *
     * @return $this
     */
    public function setShipAddrPostCode($ship_addr_post_code)
    {
        $this->container['ship_addr_post_code'] = $ship_addr_post_code;

        return $this;
    }

    /**
     * Gets ship_addr_state
     *
     * @return string
     */
    public function getShipAddrState()
    {
        return $this->container['ship_addr_state'];
    }

    /**
     * Sets ship_addr_state
     *
     * @param string $ship_addr_state State or province of the delivery address
     *
     * @return $this
     */
    public function setShipAddrState($ship_addr_state)
    {
        $this->container['ship_addr_state'] = $ship_addr_state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
