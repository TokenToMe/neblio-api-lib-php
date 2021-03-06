<?php
/**
 * GetTokenMetadataResponse
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
 * GetTokenMetadataResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetTokenMetadataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getTokenMetadataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token_id' => 'string',
        'divisibility' => 'float',
        'lock_status' => 'bool',
        'aggregation_policy' => 'string',
        'total_supply' => 'float',
        'num_of_holders' => 'float',
        'num_of_transfers' => 'float',
        'numof_issuance' => 'float',
        'num_of_burns' => 'float',
        'first_block' => 'float',
        'issuance_txid' => 'string',
        'issue_address' => 'string',
        'metadata_of_issuance' => '\Swagger\Client\Model\GetTokenMetadataResponseMetadataOfIssuance',
        'metadata_of_utxo' => '\Swagger\Client\Model\GetTokenMetadataResponseMetadataOfIssuance'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'token_id' => null,
        'divisibility' => null,
        'lock_status' => null,
        'aggregation_policy' => null,
        'total_supply' => null,
        'num_of_holders' => null,
        'num_of_transfers' => null,
        'numof_issuance' => null,
        'num_of_burns' => null,
        'first_block' => null,
        'issuance_txid' => null,
        'issue_address' => null,
        'metadata_of_issuance' => null,
        'metadata_of_utxo' => null
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
        'token_id' => 'tokenId',
        'divisibility' => 'divisibility',
        'lock_status' => 'lockStatus',
        'aggregation_policy' => 'aggregationPolicy',
        'total_supply' => 'totalSupply',
        'num_of_holders' => 'numOfHolders',
        'num_of_transfers' => 'numOfTransfers',
        'numof_issuance' => 'numofIssuance',
        'num_of_burns' => 'numOfBurns',
        'first_block' => 'firstBlock',
        'issuance_txid' => 'issuanceTxid',
        'issue_address' => 'issueAddress',
        'metadata_of_issuance' => 'metadataOfIssuance',
        'metadata_of_utxo' => 'metadataOfUtxo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_id' => 'setTokenId',
        'divisibility' => 'setDivisibility',
        'lock_status' => 'setLockStatus',
        'aggregation_policy' => 'setAggregationPolicy',
        'total_supply' => 'setTotalSupply',
        'num_of_holders' => 'setNumOfHolders',
        'num_of_transfers' => 'setNumOfTransfers',
        'numof_issuance' => 'setNumofIssuance',
        'num_of_burns' => 'setNumOfBurns',
        'first_block' => 'setFirstBlock',
        'issuance_txid' => 'setIssuanceTxid',
        'issue_address' => 'setIssueAddress',
        'metadata_of_issuance' => 'setMetadataOfIssuance',
        'metadata_of_utxo' => 'setMetadataOfUtxo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_id' => 'getTokenId',
        'divisibility' => 'getDivisibility',
        'lock_status' => 'getLockStatus',
        'aggregation_policy' => 'getAggregationPolicy',
        'total_supply' => 'getTotalSupply',
        'num_of_holders' => 'getNumOfHolders',
        'num_of_transfers' => 'getNumOfTransfers',
        'numof_issuance' => 'getNumofIssuance',
        'num_of_burns' => 'getNumOfBurns',
        'first_block' => 'getFirstBlock',
        'issuance_txid' => 'getIssuanceTxid',
        'issue_address' => 'getIssueAddress',
        'metadata_of_issuance' => 'getMetadataOfIssuance',
        'metadata_of_utxo' => 'getMetadataOfUtxo'
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
        $this->container['token_id'] = isset($data['token_id']) ? $data['token_id'] : null;
        $this->container['divisibility'] = isset($data['divisibility']) ? $data['divisibility'] : null;
        $this->container['lock_status'] = isset($data['lock_status']) ? $data['lock_status'] : null;
        $this->container['aggregation_policy'] = isset($data['aggregation_policy']) ? $data['aggregation_policy'] : null;
        $this->container['total_supply'] = isset($data['total_supply']) ? $data['total_supply'] : null;
        $this->container['num_of_holders'] = isset($data['num_of_holders']) ? $data['num_of_holders'] : null;
        $this->container['num_of_transfers'] = isset($data['num_of_transfers']) ? $data['num_of_transfers'] : null;
        $this->container['numof_issuance'] = isset($data['numof_issuance']) ? $data['numof_issuance'] : null;
        $this->container['num_of_burns'] = isset($data['num_of_burns']) ? $data['num_of_burns'] : null;
        $this->container['first_block'] = isset($data['first_block']) ? $data['first_block'] : null;
        $this->container['issuance_txid'] = isset($data['issuance_txid']) ? $data['issuance_txid'] : null;
        $this->container['issue_address'] = isset($data['issue_address']) ? $data['issue_address'] : null;
        $this->container['metadata_of_issuance'] = isset($data['metadata_of_issuance']) ? $data['metadata_of_issuance'] : null;
        $this->container['metadata_of_utxo'] = isset($data['metadata_of_utxo']) ? $data['metadata_of_utxo'] : null;
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
     * Gets token_id
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string $token_id ID of the token
     *
     * @return $this
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets divisibility
     *
     * @return float
     */
    public function getDivisibility()
    {
        return $this->container['divisibility'];
    }

    /**
     * Sets divisibility
     *
     * @param float $divisibility Decimal places the token is divisible to
     *
     * @return $this
     */
    public function setDivisibility($divisibility)
    {
        $this->container['divisibility'] = $divisibility;

        return $this;
    }

    /**
     * Gets lock_status
     *
     * @return bool
     */
    public function getLockStatus()
    {
        return $this->container['lock_status'];
    }

    /**
     * Sets lock_status
     *
     * @param bool $lock_status Whether issuance of more tokens is locked
     *
     * @return $this
     */
    public function setLockStatus($lock_status)
    {
        $this->container['lock_status'] = $lock_status;

        return $this;
    }

    /**
     * Gets aggregation_policy
     *
     * @return string
     */
    public function getAggregationPolicy()
    {
        return $this->container['aggregation_policy'];
    }

    /**
     * Sets aggregation_policy
     *
     * @param string $aggregation_policy Whether the tokens are aggregatable
     *
     * @return $this
     */
    public function setAggregationPolicy($aggregation_policy)
    {
        $this->container['aggregation_policy'] = $aggregation_policy;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return float
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param float $total_supply Total number of tokens in supply
     *
     * @return $this
     */
    public function setTotalSupply($total_supply)
    {
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets num_of_holders
     *
     * @return float
     */
    public function getNumOfHolders()
    {
        return $this->container['num_of_holders'];
    }

    /**
     * Sets num_of_holders
     *
     * @param float $num_of_holders Total number of addresses this token is held at
     *
     * @return $this
     */
    public function setNumOfHolders($num_of_holders)
    {
        $this->container['num_of_holders'] = $num_of_holders;

        return $this;
    }

    /**
     * Gets num_of_transfers
     *
     * @return float
     */
    public function getNumOfTransfers()
    {
        return $this->container['num_of_transfers'];
    }

    /**
     * Sets num_of_transfers
     *
     * @param float $num_of_transfers Total number of transactions of this token
     *
     * @return $this
     */
    public function setNumOfTransfers($num_of_transfers)
    {
        $this->container['num_of_transfers'] = $num_of_transfers;

        return $this;
    }

    /**
     * Gets numof_issuance
     *
     * @return float
     */
    public function getNumofIssuance()
    {
        return $this->container['numof_issuance'];
    }

    /**
     * Sets numof_issuance
     *
     * @param float $numof_issuance Total number of times this token has been issued
     *
     * @return $this
     */
    public function setNumofIssuance($numof_issuance)
    {
        $this->container['numof_issuance'] = $numof_issuance;

        return $this;
    }

    /**
     * Gets num_of_burns
     *
     * @return float
     */
    public function getNumOfBurns()
    {
        return $this->container['num_of_burns'];
    }

    /**
     * Sets num_of_burns
     *
     * @param float $num_of_burns Number of times tokens have been burned
     *
     * @return $this
     */
    public function setNumOfBurns($num_of_burns)
    {
        $this->container['num_of_burns'] = $num_of_burns;

        return $this;
    }

    /**
     * Gets first_block
     *
     * @return float
     */
    public function getFirstBlock()
    {
        return $this->container['first_block'];
    }

    /**
     * Sets first_block
     *
     * @param float $first_block Block number token was issued in
     *
     * @return $this
     */
    public function setFirstBlock($first_block)
    {
        $this->container['first_block'] = $first_block;

        return $this;
    }

    /**
     * Gets issuance_txid
     *
     * @return string
     */
    public function getIssuanceTxid()
    {
        return $this->container['issuance_txid'];
    }

    /**
     * Sets issuance_txid
     *
     * @param string $issuance_txid TXID the token was issued with
     *
     * @return $this
     */
    public function setIssuanceTxid($issuance_txid)
    {
        $this->container['issuance_txid'] = $issuance_txid;

        return $this;
    }

    /**
     * Gets issue_address
     *
     * @return string
     */
    public function getIssueAddress()
    {
        return $this->container['issue_address'];
    }

    /**
     * Sets issue_address
     *
     * @param string $issue_address Address that issued the tokens
     *
     * @return $this
     */
    public function setIssueAddress($issue_address)
    {
        $this->container['issue_address'] = $issue_address;

        return $this;
    }

    /**
     * Gets metadata_of_issuance
     *
     * @return \Swagger\Client\Model\GetTokenMetadataResponseMetadataOfIssuance
     */
    public function getMetadataOfIssuance()
    {
        return $this->container['metadata_of_issuance'];
    }

    /**
     * Sets metadata_of_issuance
     *
     * @param \Swagger\Client\Model\GetTokenMetadataResponseMetadataOfIssuance $metadata_of_issuance metadata_of_issuance
     *
     * @return $this
     */
    public function setMetadataOfIssuance($metadata_of_issuance)
    {
        $this->container['metadata_of_issuance'] = $metadata_of_issuance;

        return $this;
    }

    /**
     * Gets metadata_of_utxo
     *
     * @return \Swagger\Client\Model\GetTokenMetadataResponseMetadataOfIssuance
     */
    public function getMetadataOfUtxo()
    {
        return $this->container['metadata_of_utxo'];
    }

    /**
     * Sets metadata_of_utxo
     *
     * @param \Swagger\Client\Model\GetTokenMetadataResponseMetadataOfIssuance $metadata_of_utxo metadata_of_utxo
     *
     * @return $this
     */
    public function setMetadataOfUtxo($metadata_of_utxo)
    {
        $this->container['metadata_of_utxo'] = $metadata_of_utxo;

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


