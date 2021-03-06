<?php
/**
 * GetAddressInfoResponseUtxos
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Neblio REST API Suite
 *
 * APIs for Interacting with NTP1 Tokens & The Neblio Blockchain
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * GetAddressInfoResponseUtxos Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetAddressInfoResponseUtxos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getAddressInfoResponse_utxos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'float',
        'txid' => 'string',
        'blockheight' => 'float',
        'blocktime' => 'float',
        'script_pub_key' => 'object',
        'used' => 'bool',
        'value' => 'float',
        'tokens' => '\Swagger\Client\Model\GetAddressInfoResponseTokens[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => null,
        'txid' => null,
        'blockheight' => null,
        'blocktime' => null,
        'script_pub_key' => null,
        'used' => null,
        'value' => null,
        'tokens' => null
    ];

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
        'index' => 'index',
        'txid' => 'txid',
        'blockheight' => 'blockheight',
        'blocktime' => 'blocktime',
        'script_pub_key' => 'scriptPubKey',
        'used' => 'used',
        'value' => 'value',
        'tokens' => 'tokens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'txid' => 'setTxid',
        'blockheight' => 'setBlockheight',
        'blocktime' => 'setBlocktime',
        'script_pub_key' => 'setScriptPubKey',
        'used' => 'setUsed',
        'value' => 'setValue',
        'tokens' => 'setTokens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'txid' => 'getTxid',
        'blockheight' => 'getBlockheight',
        'blocktime' => 'getBlocktime',
        'script_pub_key' => 'getScriptPubKey',
        'used' => 'getUsed',
        'value' => 'getValue',
        'tokens' => 'getTokens'
    ];

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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['blockheight'] = isset($data['blockheight']) ? $data['blockheight'] : null;
        $this->container['blocktime'] = isset($data['blocktime']) ? $data['blocktime'] : null;
        $this->container['script_pub_key'] = isset($data['script_pub_key']) ? $data['script_pub_key'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['tokens'] = isset($data['tokens']) ? $data['tokens'] : null;
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

        return true;
    }


    /**
     * Gets index
     *
     * @return float
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param float $index Index of the UTXO at this address
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string $txid Txid of this UTXO
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets blockheight
     *
     * @return float
     */
    public function getBlockheight()
    {
        return $this->container['blockheight'];
    }

    /**
     * Sets blockheight
     *
     * @param float $blockheight Blockheight of the UTXO
     *
     * @return $this
     */
    public function setBlockheight($blockheight)
    {
        $this->container['blockheight'] = $blockheight;

        return $this;
    }

    /**
     * Gets blocktime
     *
     * @return float
     */
    public function getBlocktime()
    {
        return $this->container['blocktime'];
    }

    /**
     * Sets blocktime
     *
     * @param float $blocktime Blocktime of the UTXO
     *
     * @return $this
     */
    public function setBlocktime($blocktime)
    {
        $this->container['blocktime'] = $blocktime;

        return $this;
    }

    /**
     * Gets script_pub_key
     *
     * @return object
     */
    public function getScriptPubKey()
    {
        return $this->container['script_pub_key'];
    }

    /**
     * Sets script_pub_key
     *
     * @param object $script_pub_key Object representing the scruptPubKey of the UTXO
     *
     * @return $this
     */
    public function setScriptPubKey($script_pub_key)
    {
        $this->container['script_pub_key'] = $script_pub_key;

        return $this;
    }

    /**
     * Gets used
     *
     * @return bool
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param bool $used Whether the UTXO has been used
     *
     * @return $this
     */
    public function setUsed($used)
    {
        $this->container['used'] = $used;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value Value of the UTXO in NEBL satoshi
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \Swagger\Client\Model\GetAddressInfoResponseTokens[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \Swagger\Client\Model\GetAddressInfoResponseTokens[] $tokens Array of NTP1 tokens in this UTXO.
     *
     * @return $this
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

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


