<?php
/**
 * ClientContract
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MINDBODY Public API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.6
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
 * ClientContract Class Doc Comment
 *
 * @category Class
 * @description A client contract
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClientContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_date' => '\DateTime',
        'autopay_status' => 'string',
        'contract_name' => 'string',
        'end_date' => '\DateTime',
        'id' => 'int',
        'origination_location_id' => 'int',
        'start_date' => '\DateTime',
        'site_id' => 'int',
        'upcoming_autopay_events' => '\Swagger\Client\Model\UpcomingAutopayEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreement_date' => 'date-time',
        'autopay_status' => null,
        'contract_name' => null,
        'end_date' => 'date-time',
        'id' => 'int32',
        'origination_location_id' => 'int32',
        'start_date' => 'date-time',
        'site_id' => 'int32',
        'upcoming_autopay_events' => null
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
        'agreement_date' => 'AgreementDate',
        'autopay_status' => 'AutopayStatus',
        'contract_name' => 'ContractName',
        'end_date' => 'EndDate',
        'id' => 'Id',
        'origination_location_id' => 'OriginationLocationId',
        'start_date' => 'StartDate',
        'site_id' => 'SiteId',
        'upcoming_autopay_events' => 'UpcomingAutopayEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreement_date' => 'setAgreementDate',
        'autopay_status' => 'setAutopayStatus',
        'contract_name' => 'setContractName',
        'end_date' => 'setEndDate',
        'id' => 'setId',
        'origination_location_id' => 'setOriginationLocationId',
        'start_date' => 'setStartDate',
        'site_id' => 'setSiteId',
        'upcoming_autopay_events' => 'setUpcomingAutopayEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreement_date' => 'getAgreementDate',
        'autopay_status' => 'getAutopayStatus',
        'contract_name' => 'getContractName',
        'end_date' => 'getEndDate',
        'id' => 'getId',
        'origination_location_id' => 'getOriginationLocationId',
        'start_date' => 'getStartDate',
        'site_id' => 'getSiteId',
        'upcoming_autopay_events' => 'getUpcomingAutopayEvents'
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

    const AUTOPAY_STATUS_ACTIVE = 'Active';
    const AUTOPAY_STATUS_INACTIVE = 'Inactive';
    const AUTOPAY_STATUS_SUSPENDED = 'Suspended';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutopayStatusAllowableValues()
    {
        return [
            self::AUTOPAY_STATUS_ACTIVE,
            self::AUTOPAY_STATUS_INACTIVE,
            self::AUTOPAY_STATUS_SUSPENDED,
        ];
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
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['autopay_status'] = isset($data['autopay_status']) ? $data['autopay_status'] : null;
        $this->container['contract_name'] = isset($data['contract_name']) ? $data['contract_name'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['origination_location_id'] = isset($data['origination_location_id']) ? $data['origination_location_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['upcoming_autopay_events'] = isset($data['upcoming_autopay_events']) ? $data['upcoming_autopay_events'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAutopayStatusAllowableValues();
        if (!is_null($this->container['autopay_status']) && !in_array($this->container['autopay_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'autopay_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets agreement_date
     *
     * @return \DateTime
     */
    public function getAgreementDate()
    {
        return $this->container['agreement_date'];
    }

    /**
     * Sets agreement_date
     *
     * @param \DateTime $agreement_date The date on which the contract was signed.
     *
     * @return $this
     */
    public function setAgreementDate($agreement_date)
    {
        $this->container['agreement_date'] = $agreement_date;

        return $this;
    }

    /**
     * Gets autopay_status
     *
     * @return string
     */
    public function getAutopayStatus()
    {
        return $this->container['autopay_status'];
    }

    /**
     * Sets autopay_status
     *
     * @param string $autopay_status The status of the client’s autopay.
     *
     * @return $this
     */
    public function setAutopayStatus($autopay_status)
    {
        $allowedValues = $this->getAutopayStatusAllowableValues();
        if (!is_null($autopay_status) && !in_array($autopay_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'autopay_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['autopay_status'] = $autopay_status;

        return $this;
    }

    /**
     * Gets contract_name
     *
     * @return string
     */
    public function getContractName()
    {
        return $this->container['contract_name'];
    }

    /**
     * Sets contract_name
     *
     * @param string $contract_name The name of the contract.
     *
     * @return $this
     */
    public function setContractName($contract_name)
    {
        $this->container['contract_name'] = $contract_name;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date The date that the contract expires.
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique ID of the contract.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets origination_location_id
     *
     * @return int
     */
    public function getOriginationLocationId()
    {
        return $this->container['origination_location_id'];
    }

    /**
     * Sets origination_location_id
     *
     * @param int $origination_location_id The ID of the location where the contract was issued.
     *
     * @return $this
     */
    public function setOriginationLocationId($origination_location_id)
    {
        $this->container['origination_location_id'] = $origination_location_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The date that the contract became active.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param int $site_id The ID of the site where the contract was issued.
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets upcoming_autopay_events
     *
     * @return \Swagger\Client\Model\UpcomingAutopayEvent[]
     */
    public function getUpcomingAutopayEvents()
    {
        return $this->container['upcoming_autopay_events'];
    }

    /**
     * Sets upcoming_autopay_events
     *
     * @param \Swagger\Client\Model\UpcomingAutopayEvent[] $upcoming_autopay_events Contains details of the autopay events.
     *
     * @return $this
     */
    public function setUpcomingAutopayEvents($upcoming_autopay_events)
    {
        $this->container['upcoming_autopay_events'] = $upcoming_autopay_events;

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


