<?php
/**
 * PhysicalInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Polar Accesslink API
 *
 * Polar Accesslink API documentation
 *
 * OpenAPI spec version: 3.28.0
 * Contact: b2bhelpdesk@polar.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.5
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Coachbox\Services\Polar\Models;

use \ArrayAccess;
use \Coachbox\Services\Polar\ObjectSerializer;

/**
 * PhysicalInformation Class Doc Comment
 *
 * @category Class
 * @description User&#x27;s physical information
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhysicalInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'physical-information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'transaction_id' => 'int',
'created' => 'string',
'polar_user' => 'string',
'weight' => 'float',
'height' => 'float',
'maximum_heart_rate' => 'int',
'resting_heart_rate' => 'int',
'aerobic_threshold' => 'int',
'anaerobic_threshold' => 'int',
'vo2_max' => 'int',
'weight_source' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'transaction_id' => 'int64',
'created' => null,
'polar_user' => null,
'weight' => 'float',
'height' => 'float',
'maximum_heart_rate' => 'int32',
'resting_heart_rate' => 'int32',
'aerobic_threshold' => 'int32',
'anaerobic_threshold' => 'int32',
'vo2_max' => 'int32',
'weight_source' => null    ];

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
        'id' => 'id',
'transaction_id' => 'transaction-id',
'created' => 'created',
'polar_user' => 'polar-user',
'weight' => 'weight',
'height' => 'height',
'maximum_heart_rate' => 'maximum-heart-rate',
'resting_heart_rate' => 'resting-heart-rate',
'aerobic_threshold' => 'aerobic-threshold',
'anaerobic_threshold' => 'anaerobic-threshold',
'vo2_max' => 'vo2-max',
'weight_source' => 'weight-source'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'transaction_id' => 'setTransactionId',
'created' => 'setCreated',
'polar_user' => 'setPolarUser',
'weight' => 'setWeight',
'height' => 'setHeight',
'maximum_heart_rate' => 'setMaximumHeartRate',
'resting_heart_rate' => 'setRestingHeartRate',
'aerobic_threshold' => 'setAerobicThreshold',
'anaerobic_threshold' => 'setAnaerobicThreshold',
'vo2_max' => 'setVo2Max',
'weight_source' => 'setWeightSource'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'transaction_id' => 'getTransactionId',
'created' => 'getCreated',
'polar_user' => 'getPolarUser',
'weight' => 'getWeight',
'height' => 'getHeight',
'maximum_heart_rate' => 'getMaximumHeartRate',
'resting_heart_rate' => 'getRestingHeartRate',
'aerobic_threshold' => 'getAerobicThreshold',
'anaerobic_threshold' => 'getAnaerobicThreshold',
'vo2_max' => 'getVo2Max',
'weight_source' => 'getWeightSource'    ];

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

    const WEIGHT_SOURCE_MEASURED = 'SOURCE_MEASURED';
const WEIGHT_SOURCE_USER = 'SOURCE_USER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeightSourceAllowableValues()
    {
        return [
            self::WEIGHT_SOURCE_MEASURED,
self::WEIGHT_SOURCE_USER,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['polar_user'] = isset($data['polar_user']) ? $data['polar_user'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['maximum_heart_rate'] = isset($data['maximum_heart_rate']) ? $data['maximum_heart_rate'] : null;
        $this->container['resting_heart_rate'] = isset($data['resting_heart_rate']) ? $data['resting_heart_rate'] : null;
        $this->container['aerobic_threshold'] = isset($data['aerobic_threshold']) ? $data['aerobic_threshold'] : null;
        $this->container['anaerobic_threshold'] = isset($data['anaerobic_threshold']) ? $data['anaerobic_threshold'] : null;
        $this->container['vo2_max'] = isset($data['vo2_max']) ? $data['vo2_max'] : null;
        $this->container['weight_source'] = isset($data['weight_source']) ? $data['weight_source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getWeightSourceAllowableValues();
        if (!is_null($this->container['weight_source']) && !in_array($this->container['weight_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'weight_source', must be one of '%s'",
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
     * @param int $id Physical information id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param int $transaction_id Id of the physical-information-transaction this training was transferred in
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created The time physical information was created in Accesslink, in format YYYY-MM-DDTHH:mm:ss.SSS
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets polar_user
     *
     * @return string
     */
    public function getPolarUser()
    {
        return $this->container['polar_user'];
    }

    /**
     * Sets polar_user
     *
     * @param string $polar_user Absolute link to user owning the activity
     *
     * @return $this
     */
    public function setPolarUser($polar_user)
    {
        $this->container['polar_user'] = $polar_user;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight Height
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height Height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets maximum_heart_rate
     *
     * @return int
     */
    public function getMaximumHeartRate()
    {
        return $this->container['maximum_heart_rate'];
    }

    /**
     * Sets maximum_heart_rate
     *
     * @param int $maximum_heart_rate Maximum heart rate
     *
     * @return $this
     */
    public function setMaximumHeartRate($maximum_heart_rate)
    {
        $this->container['maximum_heart_rate'] = $maximum_heart_rate;

        return $this;
    }

    /**
     * Gets resting_heart_rate
     *
     * @return int
     */
    public function getRestingHeartRate()
    {
        return $this->container['resting_heart_rate'];
    }

    /**
     * Sets resting_heart_rate
     *
     * @param int $resting_heart_rate Resting hear rate
     *
     * @return $this
     */
    public function setRestingHeartRate($resting_heart_rate)
    {
        $this->container['resting_heart_rate'] = $resting_heart_rate;

        return $this;
    }

    /**
     * Gets aerobic_threshold
     *
     * @return int
     */
    public function getAerobicThreshold()
    {
        return $this->container['aerobic_threshold'];
    }

    /**
     * Sets aerobic_threshold
     *
     * @param int $aerobic_threshold Aerobic threshold
     *
     * @return $this
     */
    public function setAerobicThreshold($aerobic_threshold)
    {
        $this->container['aerobic_threshold'] = $aerobic_threshold;

        return $this;
    }

    /**
     * Gets anaerobic_threshold
     *
     * @return int
     */
    public function getAnaerobicThreshold()
    {
        return $this->container['anaerobic_threshold'];
    }

    /**
     * Sets anaerobic_threshold
     *
     * @param int $anaerobic_threshold Anaerobic threshold
     *
     * @return $this
     */
    public function setAnaerobicThreshold($anaerobic_threshold)
    {
        $this->container['anaerobic_threshold'] = $anaerobic_threshold;

        return $this;
    }

    /**
     * Gets vo2_max
     *
     * @return int
     */
    public function getVo2Max()
    {
        return $this->container['vo2_max'];
    }

    /**
     * Sets vo2_max
     *
     * @param int $vo2_max VO2 max
     *
     * @return $this
     */
    public function setVo2Max($vo2_max)
    {
        $this->container['vo2_max'] = $vo2_max;

        return $this;
    }

    /**
     * Gets weight_source
     *
     * @return string
     */
    public function getWeightSource()
    {
        return $this->container['weight_source'];
    }

    /**
     * Sets weight_source
     *
     * @param string $weight_source Weight source
     *
     * @return $this
     */
    public function setWeightSource($weight_source)
    {
        $allowedValues = $this->getWeightSourceAllowableValues();
        if (!is_null($weight_source) && !in_array($weight_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'weight_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['weight_source'] = $weight_source;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
		#[\ReturnTypeWillChange]
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
		#[\ReturnTypeWillChange]
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
		#[\ReturnTypeWillChange]
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
		#[\ReturnTypeWillChange]
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
