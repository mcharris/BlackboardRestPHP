<?php
/**
 * Attempt
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Learn APIs
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3200.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlackboardRest\Model;

use \ArrayAccess;

/**
 * Attempt Class Doc Comment
 *
 * @category    Class
 * @package     BlackboardRest
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Attempt implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Attempt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'group_attempt_id' => 'string',
        'group_override' => 'bool',
        'student_comments' => 'string',
        'student_submission' => 'string',
        'exempt' => 'bool',
        'id' => 'string',
        'status' => 'string',
        'text' => 'string',
        'score' => 'double',
        'notes' => 'string',
        'feedback' => 'string',
        'created' => '\DateTime'
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
        'user_id' => 'userId',
        'group_attempt_id' => 'groupAttemptId',
        'group_override' => 'groupOverride',
        'student_comments' => 'studentComments',
        'student_submission' => 'studentSubmission',
        'exempt' => 'exempt',
        'id' => 'id',
        'status' => 'status',
        'text' => 'text',
        'score' => 'score',
        'notes' => 'notes',
        'feedback' => 'feedback',
        'created' => 'created'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'group_attempt_id' => 'setGroupAttemptId',
        'group_override' => 'setGroupOverride',
        'student_comments' => 'setStudentComments',
        'student_submission' => 'setStudentSubmission',
        'exempt' => 'setExempt',
        'id' => 'setId',
        'status' => 'setStatus',
        'text' => 'setText',
        'score' => 'setScore',
        'notes' => 'setNotes',
        'feedback' => 'setFeedback',
        'created' => 'setCreated'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'group_attempt_id' => 'getGroupAttemptId',
        'group_override' => 'getGroupOverride',
        'student_comments' => 'getStudentComments',
        'student_submission' => 'getStudentSubmission',
        'exempt' => 'getExempt',
        'id' => 'getId',
        'status' => 'getStatus',
        'text' => 'getText',
        'score' => 'getScore',
        'notes' => 'getNotes',
        'feedback' => 'getFeedback',
        'created' => 'getCreated'
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

    const STATUS_NOT_ATTEMPTED = 'NotAttempted';
    const STATUS_ABANDONED = 'Abandoned';
    const STATUS_IN_PROGRESS = 'InProgress';
    const STATUS_SUSPENDED = 'Suspended';
    const STATUS_CANCELED = 'Canceled';
    const STATUS_NEEDS_GRADING = 'NeedsGrading';
    const STATUS_COMPLETED = 'Completed';
    const STATUS_IN_MORE_PROGRESS = 'InMoreProgress';
    const STATUS_NEEDS_MORE_GRADING = 'NeedsMoreGrading';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_ATTEMPTED,
            self::STATUS_ABANDONED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_SUSPENDED,
            self::STATUS_CANCELED,
            self::STATUS_NEEDS_GRADING,
            self::STATUS_COMPLETED,
            self::STATUS_IN_MORE_PROGRESS,
            self::STATUS_NEEDS_MORE_GRADING,
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['group_attempt_id'] = isset($data['group_attempt_id']) ? $data['group_attempt_id'] : null;
        $this->container['group_override'] = isset($data['group_override']) ? $data['group_override'] : null;
        $this->container['student_comments'] = isset($data['student_comments']) ? $data['student_comments'] : null;
        $this->container['student_submission'] = isset($data['student_submission']) ? $data['student_submission'] : null;
        $this->container['exempt'] = isset($data['exempt']) ? $data['exempt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['group_attempt_id'] === null) {
            $invalid_properties[] = "'group_attempt_id' can't be null";
        }
        if ($this->container['group_override'] === null) {
            $invalid_properties[] = "'group_override' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["NotAttempted", "Abandoned", "InProgress", "Suspended", "Canceled", "NeedsGrading", "Completed", "InMoreProgress", "NeedsMoreGrading"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'NotAttempted', 'Abandoned', 'InProgress', 'Suspended', 'Canceled', 'NeedsGrading', 'Completed', 'InMoreProgress', 'NeedsMoreGrading'.";
        }

        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['group_attempt_id'] === null) {
            return false;
        }
        if ($this->container['group_override'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["NotAttempted", "Abandoned", "InProgress", "Suspended", "Canceled", "NeedsGrading", "Completed", "InMoreProgress", "NeedsMoreGrading"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id The Id of the User who submitted this attempt.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets group_attempt_id
     * @return string
     */
    public function getGroupAttemptId()
    {
        return $this->container['group_attempt_id'];
    }

    /**
     * Sets group_attempt_id
     * @param string $group_attempt_id The group attempt ID associated with this student attempt.
     * @return $this
     */
    public function setGroupAttemptId($group_attempt_id)
    {
        $this->container['group_attempt_id'] = $group_attempt_id;

        return $this;
    }

    /**
     * Gets group_override
     * @return bool
     */
    public function getGroupOverride()
    {
        return $this->container['group_override'];
    }

    /**
     * Sets group_override
     * @param bool $group_override Whether the score associated with this student attempt was overridden from the associated group attempt score. A value is only returned if the attempt grade is currently overridden.
     * @return $this
     */
    public function setGroupOverride($group_override)
    {
        $this->container['group_override'] = $group_override;

        return $this;
    }

    /**
     * Gets student_comments
     * @return string
     */
    public function getStudentComments()
    {
        return $this->container['student_comments'];
    }

    /**
     * Sets student_comments
     * @param string $student_comments The student comments associated with this attempt.
     * @return $this
     */
    public function setStudentComments($student_comments)
    {
        $this->container['student_comments'] = $student_comments;

        return $this;
    }

    /**
     * Gets student_submission
     * @return string
     */
    public function getStudentSubmission()
    {
        return $this->container['student_submission'];
    }

    /**
     * Sets student_submission
     * @param string $student_submission The student submission text associated with this attempt.
     * @return $this
     */
    public function setStudentSubmission($student_submission)
    {
        $this->container['student_submission'] = $student_submission;

        return $this;
    }

    /**
     * Gets exempt
     * @return bool
     */
    public function getExempt()
    {
        return $this->container['exempt'];
    }

    /**
     * Sets exempt
     * @param bool $exempt Whether the score associated with this attempt is ignored when computing the user's grade for the associated grade column.
     * @return $this
     */
    public function setExempt($exempt)
    {
        $this->container['exempt'] = $exempt;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The primary ID for this attempt.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of this attempt.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('NotAttempted', 'Abandoned', 'InProgress', 'Suspended', 'Canceled', 'NeedsGrading', 'Completed', 'InMoreProgress', 'NeedsMoreGrading');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'NotAttempted', 'Abandoned', 'InProgress', 'Suspended', 'Canceled', 'NeedsGrading', 'Completed', 'InMoreProgress', 'NeedsMoreGrading'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text The the text representation of grade for this attempt.
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets score
     * @return double
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param double $score The the score associated with this attempt.
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes The instructor notes associated with this attempt.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets feedback
     * @return string
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     * @param string $feedback The instructor feedback associated with this attempt.
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created The date on which this attempt was created.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
            return json_encode(\BlackboardRest\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlackboardRest\ObjectSerializer::sanitizeForSerialization($this));
    }
}


