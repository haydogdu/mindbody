<?php
/**
 * Visit
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
 * Visit Class Doc Comment
 *
 * @category Class
 * @description Represents a specific visit to a class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Visit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Visit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'appointment_id' => 'int',
        'appointment_gender_preference' => 'string',
        'appointment_status' => 'string',
        'class_id' => 'int',
        'client_id' => 'string',
        'start_date_time' => '\DateTime',
        'end_date_time' => '\DateTime',
        'id' => 'int',
        'last_modified_date_time' => '\DateTime',
        'late_cancelled' => 'bool',
        'location_id' => 'int',
        'make_up' => 'bool',
        'name' => 'string',
        'service_id' => 'int',
        'signed_in' => 'bool',
        'staff_id' => 'int',
        'web_signup' => 'bool',
        'action' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'appointment_id' => 'int32',
        'appointment_gender_preference' => null,
        'appointment_status' => null,
        'class_id' => 'int32',
        'client_id' => null,
        'start_date_time' => 'date-time',
        'end_date_time' => 'date-time',
        'id' => 'int64',
        'last_modified_date_time' => 'date-time',
        'late_cancelled' => null,
        'location_id' => 'int32',
        'make_up' => null,
        'name' => null,
        'service_id' => 'int64',
        'signed_in' => null,
        'staff_id' => 'int64',
        'web_signup' => null,
        'action' => null
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
        'appointment_id' => 'AppointmentId',
        'appointment_gender_preference' => 'AppointmentGenderPreference',
        'appointment_status' => 'AppointmentStatus',
        'class_id' => 'ClassId',
        'client_id' => 'ClientId',
        'start_date_time' => 'StartDateTime',
        'end_date_time' => 'EndDateTime',
        'id' => 'Id',
        'last_modified_date_time' => 'LastModifiedDateTime',
        'late_cancelled' => 'LateCancelled',
        'location_id' => 'LocationId',
        'make_up' => 'MakeUp',
        'name' => 'Name',
        'service_id' => 'ServiceId',
        'signed_in' => 'SignedIn',
        'staff_id' => 'StaffId',
        'web_signup' => 'WebSignup',
        'action' => 'Action'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_id' => 'setAppointmentId',
        'appointment_gender_preference' => 'setAppointmentGenderPreference',
        'appointment_status' => 'setAppointmentStatus',
        'class_id' => 'setClassId',
        'client_id' => 'setClientId',
        'start_date_time' => 'setStartDateTime',
        'end_date_time' => 'setEndDateTime',
        'id' => 'setId',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'late_cancelled' => 'setLateCancelled',
        'location_id' => 'setLocationId',
        'make_up' => 'setMakeUp',
        'name' => 'setName',
        'service_id' => 'setServiceId',
        'signed_in' => 'setSignedIn',
        'staff_id' => 'setStaffId',
        'web_signup' => 'setWebSignup',
        'action' => 'setAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_id' => 'getAppointmentId',
        'appointment_gender_preference' => 'getAppointmentGenderPreference',
        'appointment_status' => 'getAppointmentStatus',
        'class_id' => 'getClassId',
        'client_id' => 'getClientId',
        'start_date_time' => 'getStartDateTime',
        'end_date_time' => 'getEndDateTime',
        'id' => 'getId',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'late_cancelled' => 'getLateCancelled',
        'location_id' => 'getLocationId',
        'make_up' => 'getMakeUp',
        'name' => 'getName',
        'service_id' => 'getServiceId',
        'signed_in' => 'getSignedIn',
        'staff_id' => 'getStaffId',
        'web_signup' => 'getWebSignup',
        'action' => 'getAction'
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

    const APPOINTMENT_GENDER_PREFERENCE_NONE = 'None';
    const APPOINTMENT_GENDER_PREFERENCE_FEMALE = 'Female';
    const APPOINTMENT_GENDER_PREFERENCE_MALE = 'Male';
    const APPOINTMENT_STATUS_NONE = 'None';
    const APPOINTMENT_STATUS_REQUESTED = 'Requested';
    const APPOINTMENT_STATUS_BOOKED = 'Booked';
    const APPOINTMENT_STATUS_COMPLETED = 'Completed';
    const APPOINTMENT_STATUS_CONFIRMED = 'Confirmed';
    const APPOINTMENT_STATUS_ARRIVED = 'Arrived';
    const APPOINTMENT_STATUS_NO_SHOW = 'NoShow';
    const APPOINTMENT_STATUS_CANCELLED = 'Cancelled';
    const APPOINTMENT_STATUS_LATE_CANCELLED = 'LateCancelled';
    const ACTION_NONE = 'None';
    const ACTION_ADDED = 'Added';
    const ACTION_UPDATED = 'Updated';
    const ACTION_FAILED = 'Failed';
    const ACTION_REMOVED = 'Removed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppointmentGenderPreferenceAllowableValues()
    {
        return [
            self::APPOINTMENT_GENDER_PREFERENCE_NONE,
            self::APPOINTMENT_GENDER_PREFERENCE_FEMALE,
            self::APPOINTMENT_GENDER_PREFERENCE_MALE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppointmentStatusAllowableValues()
    {
        return [
            self::APPOINTMENT_STATUS_NONE,
            self::APPOINTMENT_STATUS_REQUESTED,
            self::APPOINTMENT_STATUS_BOOKED,
            self::APPOINTMENT_STATUS_COMPLETED,
            self::APPOINTMENT_STATUS_CONFIRMED,
            self::APPOINTMENT_STATUS_ARRIVED,
            self::APPOINTMENT_STATUS_NO_SHOW,
            self::APPOINTMENT_STATUS_CANCELLED,
            self::APPOINTMENT_STATUS_LATE_CANCELLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_NONE,
            self::ACTION_ADDED,
            self::ACTION_UPDATED,
            self::ACTION_FAILED,
            self::ACTION_REMOVED,
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
        $this->container['appointment_id'] = isset($data['appointment_id']) ? $data['appointment_id'] : null;
        $this->container['appointment_gender_preference'] = isset($data['appointment_gender_preference']) ? $data['appointment_gender_preference'] : null;
        $this->container['appointment_status'] = isset($data['appointment_status']) ? $data['appointment_status'] : null;
        $this->container['class_id'] = isset($data['class_id']) ? $data['class_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['start_date_time'] = isset($data['start_date_time']) ? $data['start_date_time'] : null;
        $this->container['end_date_time'] = isset($data['end_date_time']) ? $data['end_date_time'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['late_cancelled'] = isset($data['late_cancelled']) ? $data['late_cancelled'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['make_up'] = isset($data['make_up']) ? $data['make_up'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['signed_in'] = isset($data['signed_in']) ? $data['signed_in'] : null;
        $this->container['staff_id'] = isset($data['staff_id']) ? $data['staff_id'] : null;
        $this->container['web_signup'] = isset($data['web_signup']) ? $data['web_signup'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAppointmentGenderPreferenceAllowableValues();
        if (!is_null($this->container['appointment_gender_preference']) && !in_array($this->container['appointment_gender_preference'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'appointment_gender_preference', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($this->container['appointment_status']) && !in_array($this->container['appointment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'appointment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
     * Gets appointment_id
     *
     * @return int
     */
    public function getAppointmentId()
    {
        return $this->container['appointment_id'];
    }

    /**
     * Sets appointment_id
     *
     * @param int $appointment_id The appointment’s ID.
     *
     * @return $this
     */
    public function setAppointmentId($appointment_id)
    {
        $this->container['appointment_id'] = $appointment_id;

        return $this;
    }

    /**
     * Gets appointment_gender_preference
     *
     * @return string
     */
    public function getAppointmentGenderPreference()
    {
        return $this->container['appointment_gender_preference'];
    }

    /**
     * Sets appointment_gender_preference
     *
     * @param string $appointment_gender_preference The gender of staff member with whom the client prefers to book appointments.
     *
     * @return $this
     */
    public function setAppointmentGenderPreference($appointment_gender_preference)
    {
        $allowedValues = $this->getAppointmentGenderPreferenceAllowableValues();
        if (!is_null($appointment_gender_preference) && !in_array($appointment_gender_preference, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'appointment_gender_preference', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['appointment_gender_preference'] = $appointment_gender_preference;

        return $this;
    }

    /**
     * Gets appointment_status
     *
     * @return string
     */
    public function getAppointmentStatus()
    {
        return $this->container['appointment_status'];
    }

    /**
     * Sets appointment_status
     *
     * @param string $appointment_status The status of the appointment.
     *
     * @return $this
     */
    public function setAppointmentStatus($appointment_status)
    {
        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($appointment_status) && !in_array($appointment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'appointment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['appointment_status'] = $appointment_status;

        return $this;
    }

    /**
     * Gets class_id
     *
     * @return int
     */
    public function getClassId()
    {
        return $this->container['class_id'];
    }

    /**
     * Sets class_id
     *
     * @param int $class_id The class ID that was used to retrieve the visits.
     *
     * @return $this
     */
    public function setClassId($class_id)
    {
        $this->container['class_id'] = $class_id;

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
     * @param string $client_id The ID of the client associated with the visit.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

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
     * @param \DateTime $start_date_time The time this class is scheduled to start.
     *
     * @return $this
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

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
     * @param \DateTime $end_date_time The date and time the visit ends. The Public API returns UTC dates and times. For example, a class that occurs on June 25th, 2018 at 2:15PM (EST) appears as “2018-06-25T19:15:00Z” because EST is five hours behind UTC. Date time pairs always return in the format YYYY-MM-DDTHH:mm:ssZ.
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

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
     * @param int $id The ID of the visit.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     *
     * @return \DateTime
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     *
     * @param \DateTime $last_modified_date_time When included in the request, only records modified on or after the specified `LastModifiedDate` are included in the response. The Public API returns UTC dates and times. For example, a class that occurs on June 25th, 2018 at 2:15PM (EST) appears as “2018-06-25T19:15:00Z” because EST is five hours behind UTC. Date time pairs always return in the format YYYY-MM-DDTHH:mm:ssZ.
     *
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets late_cancelled
     *
     * @return bool
     */
    public function getLateCancelled()
    {
        return $this->container['late_cancelled'];
    }

    /**
     * Sets late_cancelled
     *
     * @param bool $late_cancelled When `true`, indicates that the class has been `LateCancelled`.<br />  When `false`, indicates that the class has not been `LateCancelled`.
     *
     * @return $this
     */
    public function setLateCancelled($late_cancelled)
    {
        $this->container['late_cancelled'] = $late_cancelled;

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
     * @param int $location_id The ID of the location where the visit took place or is to take place.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets make_up
     *
     * @return bool
     */
    public function getMakeUp()
    {
        return $this->container['make_up'];
    }

    /**
     * Sets make_up
     *
     * @param bool $make_up When `true`, the client can make up this session and a session is not deducted from the pricing option that was used to sign the client into the enrollment. When the client has the make-up session, a session is automatically removed from a pricing option that matches the service category of the enrollment and is within the same date range of the missed session.<br />  When `false`, the client cannot make up this session. See [Enrollments: Make-ups](https://support.mindbodyonline.com/s/article/203259433-Enrollments-Make-ups?language=en_US) for more information.
     *
     * @return $this
     */
    public function setMakeUp($make_up)
    {
        $this->container['make_up'] = $make_up;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the class.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return int
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param int $service_id The ID of the pricing option used to pay for the class visit.
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets signed_in
     *
     * @return bool
     */
    public function getSignedIn()
    {
        return $this->container['signed_in'];
    }

    /**
     * Sets signed_in
     *
     * @param bool $signed_in When `true`, indicates that the client has been signed in.<br />  When `false`, indicates that the client has not been signed in.
     *
     * @return $this
     */
    public function setSignedIn($signed_in)
    {
        $this->container['signed_in'] = $signed_in;

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
     * @param int $staff_id The ID of the staff member who is teaching the class.
     *
     * @return $this
     */
    public function setStaffId($staff_id)
    {
        $this->container['staff_id'] = $staff_id;

        return $this;
    }

    /**
     * Gets web_signup
     *
     * @return bool
     */
    public function getWebSignup()
    {
        return $this->container['web_signup'];
    }

    /**
     * Sets web_signup
     *
     * @param bool $web_signup When `true`, indicates that the client signed up online.<br />  When `false`, indicates that the client was signed up by a staff member.
     *
     * @return $this
     */
    public function setWebSignup($web_signup)
    {
        $this->container['web_signup'] = $web_signup;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action The action taken.
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

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

