<?php
/**
 * AddAppointmentRequest
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
 * AddAppointmentRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddAppointmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddAppointmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apply_payment' => 'bool',
        'client_id' => 'string',
        'duration' => 'int',
        'execute' => 'string',
        'end_date_time' => '\DateTime',
        'gender_preference' => 'string',
        'location_id' => 'int',
        'notes' => 'string',
        'provider_id' => 'string',
        'resource_ids' => 'int[]',
        'send_email' => 'bool',
        'session_type_id' => 'int',
        'staff_id' => 'int',
        'staff_requested' => 'bool',
        'start_date_time' => '\DateTime',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apply_payment' => null,
        'client_id' => null,
        'duration' => 'int32',
        'execute' => null,
        'end_date_time' => 'date-time',
        'gender_preference' => null,
        'location_id' => 'int32',
        'notes' => null,
        'provider_id' => null,
        'resource_ids' => 'int32',
        'send_email' => null,
        'session_type_id' => 'int32',
        'staff_id' => 'int64',
        'staff_requested' => null,
        'start_date_time' => 'date-time',
        'test' => null
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
        'apply_payment' => 'ApplyPayment',
        'client_id' => 'ClientId',
        'duration' => 'Duration',
        'execute' => 'Execute',
        'end_date_time' => 'EndDateTime',
        'gender_preference' => 'GenderPreference',
        'location_id' => 'LocationId',
        'notes' => 'Notes',
        'provider_id' => 'ProviderId',
        'resource_ids' => 'ResourceIds',
        'send_email' => 'SendEmail',
        'session_type_id' => 'SessionTypeId',
        'staff_id' => 'StaffId',
        'staff_requested' => 'StaffRequested',
        'start_date_time' => 'StartDateTime',
        'test' => 'Test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_payment' => 'setApplyPayment',
        'client_id' => 'setClientId',
        'duration' => 'setDuration',
        'execute' => 'setExecute',
        'end_date_time' => 'setEndDateTime',
        'gender_preference' => 'setGenderPreference',
        'location_id' => 'setLocationId',
        'notes' => 'setNotes',
        'provider_id' => 'setProviderId',
        'resource_ids' => 'setResourceIds',
        'send_email' => 'setSendEmail',
        'session_type_id' => 'setSessionTypeId',
        'staff_id' => 'setStaffId',
        'staff_requested' => 'setStaffRequested',
        'start_date_time' => 'setStartDateTime',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_payment' => 'getApplyPayment',
        'client_id' => 'getClientId',
        'duration' => 'getDuration',
        'execute' => 'getExecute',
        'end_date_time' => 'getEndDateTime',
        'gender_preference' => 'getGenderPreference',
        'location_id' => 'getLocationId',
        'notes' => 'getNotes',
        'provider_id' => 'getProviderId',
        'resource_ids' => 'getResourceIds',
        'send_email' => 'getSendEmail',
        'session_type_id' => 'getSessionTypeId',
        'staff_id' => 'getStaffId',
        'staff_requested' => 'getStaffRequested',
        'start_date_time' => 'getStartDateTime',
        'test' => 'getTest'
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

    const GENDER_PREFERENCE_NONE = 'None';
    const GENDER_PREFERENCE_FEMALE = 'Female';
    const GENDER_PREFERENCE_MALE = 'Male';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderPreferenceAllowableValues()
    {
        return [
            self::GENDER_PREFERENCE_NONE,
            self::GENDER_PREFERENCE_FEMALE,
            self::GENDER_PREFERENCE_MALE,
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
        $this->container['apply_payment'] = isset($data['apply_payment']) ? $data['apply_payment'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['execute'] = isset($data['execute']) ? $data['execute'] : null;
        $this->container['end_date_time'] = isset($data['end_date_time']) ? $data['end_date_time'] : null;
        $this->container['gender_preference'] = isset($data['gender_preference']) ? $data['gender_preference'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['resource_ids'] = isset($data['resource_ids']) ? $data['resource_ids'] : null;
        $this->container['send_email'] = isset($data['send_email']) ? $data['send_email'] : null;
        $this->container['session_type_id'] = isset($data['session_type_id']) ? $data['session_type_id'] : null;
        $this->container['staff_id'] = isset($data['staff_id']) ? $data['staff_id'] : null;
        $this->container['staff_requested'] = isset($data['staff_requested']) ? $data['staff_requested'] : null;
        $this->container['start_date_time'] = isset($data['start_date_time']) ? $data['start_date_time'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        $allowedValues = $this->getGenderPreferenceAllowableValues();
        if (!is_null($this->container['gender_preference']) && !in_array($this->container['gender_preference'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender_preference', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['session_type_id'] === null) {
            $invalidProperties[] = "'session_type_id' can't be null";
        }
        if ($this->container['staff_id'] === null) {
            $invalidProperties[] = "'staff_id' can't be null";
        }
        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
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
     * Gets apply_payment
     *
     * @return bool
     */
    public function getApplyPayment()
    {
        return $this->container['apply_payment'];
    }

    /**
     * Sets apply_payment
     *
     * @param bool $apply_payment When `true`, indicates that a payment should be applied to the appointment.   <br />Default: **true**
     *
     * @return $this
     */
    public function setApplyPayment($apply_payment)
    {
        $this->container['apply_payment'] = $apply_payment;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id The RRSID of the client for whom the new appointment is being made.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration The duration of the appointment. This parameter is used to change the default duration of an appointment.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets execute
     *
     * @return string
     */
    public function getExecute()
    {
        return $this->container['execute'];
    }

    /**
     * Sets execute
     *
     * @param string $execute The action taken to add this appointment.
     *
     * @return $this
     */
    public function setExecute($execute)
    {
        $this->container['execute'] = $execute;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time The end date and time of the new appointment. <br />  Default: **StartDateTime**, offset by the staff member’s default appointment duration.
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets gender_preference
     *
     * @return string
     */
    public function getGenderPreference()
    {
        return $this->container['gender_preference'];
    }

    /**
     * Sets gender_preference
     *
     * @param string $gender_preference The client’s service provider gender preference.
     *
     * @return $this
     */
    public function setGenderPreference($gender_preference)
    {
        $allowedValues = $this->getGenderPreferenceAllowableValues();
        if (!is_null($gender_preference) && !in_array($gender_preference, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender_preference', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender_preference'] = $gender_preference;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id The ID of the location where the new appointment is to take place.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Any general notes about this appointment.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string $provider_id If a user has Complementary and Alternative Medicine features enabled, this parameter assigns a provider ID to the appointment.
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets resource_ids
     *
     * @return int[]
     */
    public function getResourceIds()
    {
        return $this->container['resource_ids'];
    }

    /**
     * Sets resource_ids
     *
     * @param int[] $resource_ids A list of resource IDs to associate with the new appointment.
     *
     * @return $this
     */
    public function setResourceIds($resource_ids)
    {
        $this->container['resource_ids'] = $resource_ids;

        return $this;
    }

    /**
     * Gets send_email
     *
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->container['send_email'];
    }

    /**
     * Sets send_email
     *
     * @param bool $send_email Whether to send client an email for cancellations. An email is sent only if the client has an email address and automatic emails have been set up.   <br />Default: **false**
     *
     * @return $this
     */
    public function setSendEmail($send_email)
    {
        $this->container['send_email'] = $send_email;

        return $this;
    }

    /**
     * Gets session_type_id
     *
     * @return int
     */
    public function getSessionTypeId()
    {
        return $this->container['session_type_id'];
    }

    /**
     * Sets session_type_id
     *
     * @param int $session_type_id The session type associated with the new appointment.
     *
     * @return $this
     */
    public function setSessionTypeId($session_type_id)
    {
        $this->container['session_type_id'] = $session_type_id;

        return $this;
    }

    /**
     * Gets staff_id
     *
     * @return int
     */
    public function getStaffId()
    {
        return $this->container['staff_id'];
    }

    /**
     * Sets staff_id
     *
     * @param int $staff_id The ID of the staff member who is adding the new appointment.
     *
     * @return $this
     */
    public function setStaffId($staff_id)
    {
        $this->container['staff_id'] = $staff_id;

        return $this;
    }

    /**
     * Gets staff_requested
     *
     * @return bool
     */
    public function getStaffRequested()
    {
        return $this->container['staff_requested'];
    }

    /**
     * Sets staff_requested
     *
     * @param bool $staff_requested When `true`, indicates that the staff member was requested specifically by the client.
     *
     * @return $this
     */
    public function setStaffRequested($staff_requested)
    {
        $this->container['staff_requested'] = $staff_requested;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time The start date and time of the new appointment.
     *
     * @return $this
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool $test When true, indicates that the method is to be validated, but no new appointment data is added.   <br />Default: **false**
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

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


