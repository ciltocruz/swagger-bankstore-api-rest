<?php
/**
 * V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo
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
 * OpenAPI spec version: 2.37.0
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
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
 * V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo Class Doc Comment
 *
 * @category Class
 * @description Node with additional information on how the client was authenticated at the start of the session in the business account
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1formPaymentMerchantDataThreeDSRequestorAuthenticationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1form_payment_merchantData_threeDSRequestorAuthenticationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'three_ds_req_auth_data' => 'string',
'three_ds_req_auth_method' => 'string',
'three_ds_req_auth_timestamp' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'three_ds_req_auth_data' => null,
'three_ds_req_auth_method' => null,
'three_ds_req_auth_timestamp' => null    ];

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
        'three_ds_req_auth_data' => 'threeDSReqAuthData',
'three_ds_req_auth_method' => 'threeDSReqAuthMethod',
'three_ds_req_auth_timestamp' => 'threeDSReqAuthTimestamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'three_ds_req_auth_data' => 'setThreeDsReqAuthData',
'three_ds_req_auth_method' => 'setThreeDsReqAuthMethod',
'three_ds_req_auth_timestamp' => 'setThreeDsReqAuthTimestamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'three_ds_req_auth_data' => 'getThreeDsReqAuthData',
'three_ds_req_auth_method' => 'getThreeDsReqAuthMethod',
'three_ds_req_auth_timestamp' => 'getThreeDsReqAuthTimestamp'    ];

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
        $this->container['three_ds_req_auth_data'] = isset($data['three_ds_req_auth_data']) ? $data['three_ds_req_auth_data'] : null;
        $this->container['three_ds_req_auth_method'] = isset($data['three_ds_req_auth_method']) ? $data['three_ds_req_auth_method'] : null;
        $this->container['three_ds_req_auth_timestamp'] = isset($data['three_ds_req_auth_timestamp']) ? $data['three_ds_req_auth_timestamp'] : null;
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
     * Gets three_ds_req_auth_data
     *
     * @return string
     */
    public function getThreeDsReqAuthData()
    {
        return $this->container['three_ds_req_auth_data'];
    }

    /**
     * Sets three_ds_req_auth_data
     *
     * @param string $three_ds_req_auth_data Data which documents and supports a specific authentication process.
     *
     * @return $this
     */
    public function setThreeDsReqAuthData($three_ds_req_auth_data)
    {
        $this->container['three_ds_req_auth_data'] = $three_ds_req_auth_data;

        return $this;
    }

    /**
     * Gets three_ds_req_auth_method
     *
     * @return string
     */
    public function getThreeDsReqAuthMethod()
    {
        return $this->container['three_ds_req_auth_method'];
    }

    /**
     * Sets three_ds_req_auth_method
     *
     * @param string $three_ds_req_auth_method Mechanism used by the customer to authenticate themselves in the business. Accepted values: 01 = Without 3DS authentication (for example, customer identified as guest), 02 = Logged onto the account on the ACS using the credentials of the ACS, 03 = Logged onto the account on the ACS using an affiliate identifier, 04 = Logged onto the account on the ACS using the credentials of the issuer, 05 = Logged onto the account on the ACS using a third party authentication, 06 = Logged onto the account on the ACS using a FIDO authenticator
     *
     * @return $this
     */
    public function setThreeDsReqAuthMethod($three_ds_req_auth_method)
    {
        $this->container['three_ds_req_auth_method'] = $three_ds_req_auth_method;

        return $this;
    }

    /**
     * Gets three_ds_req_auth_timestamp
     *
     * @return string
     */
    public function getThreeDsReqAuthTimestamp()
    {
        return $this->container['three_ds_req_auth_timestamp'];
    }

    /**
     * Sets three_ds_req_auth_timestamp
     *
     * @param string $three_ds_req_auth_timestamp Date and time UTC of the authentication. Date format: YYYYMMDDHHMM
     *
     * @return $this
     */
    public function setThreeDsReqAuthTimestamp($three_ds_req_auth_timestamp)
    {
        $this->container['three_ds_req_auth_timestamp'] = $three_ds_req_auth_timestamp;

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
