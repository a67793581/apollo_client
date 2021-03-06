<?php
/**
 * Releases
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 阿波罗客户端
 *
 * 阿波罗客户端
 *
 * OpenAPI spec version: v0.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
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
 * Releases Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Releases implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'releases';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_id' => 'string',
'cluster_name' => 'string',
'namespace_name' => 'string',
'name' => 'string',
'configurations' => '\Swagger\Client\Model\ReleasesConfigurations',
'comment' => 'string',
'data_change_created_by' => 'string',
'data_change_last_modified_by' => 'string',
'data_change_created_time' => 'string',
'data_change_last_modified_time' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_id' => null,
'cluster_name' => null,
'namespace_name' => null,
'name' => null,
'configurations' => null,
'comment' => null,
'data_change_created_by' => null,
'data_change_last_modified_by' => null,
'data_change_created_time' => null,
'data_change_last_modified_time' => null    ];

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
        'app_id' => 'appId',
'cluster_name' => 'clusterName',
'namespace_name' => 'namespaceName',
'name' => 'name',
'configurations' => 'configurations',
'comment' => 'comment',
'data_change_created_by' => 'dataChangeCreatedBy',
'data_change_last_modified_by' => 'dataChangeLastModifiedBy',
'data_change_created_time' => 'dataChangeCreatedTime',
'data_change_last_modified_time' => 'dataChangeLastModifiedTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
'cluster_name' => 'setClusterName',
'namespace_name' => 'setNamespaceName',
'name' => 'setName',
'configurations' => 'setConfigurations',
'comment' => 'setComment',
'data_change_created_by' => 'setDataChangeCreatedBy',
'data_change_last_modified_by' => 'setDataChangeLastModifiedBy',
'data_change_created_time' => 'setDataChangeCreatedTime',
'data_change_last_modified_time' => 'setDataChangeLastModifiedTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
'cluster_name' => 'getClusterName',
'namespace_name' => 'getNamespaceName',
'name' => 'getName',
'configurations' => 'getConfigurations',
'comment' => 'getComment',
'data_change_created_by' => 'getDataChangeCreatedBy',
'data_change_last_modified_by' => 'getDataChangeLastModifiedBy',
'data_change_created_time' => 'getDataChangeCreatedTime',
'data_change_last_modified_time' => 'getDataChangeLastModifiedTime'    ];

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
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['cluster_name'] = isset($data['cluster_name']) ? $data['cluster_name'] : null;
        $this->container['namespace_name'] = isset($data['namespace_name']) ? $data['namespace_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['data_change_created_by'] = isset($data['data_change_created_by']) ? $data['data_change_created_by'] : null;
        $this->container['data_change_last_modified_by'] = isset($data['data_change_last_modified_by']) ? $data['data_change_last_modified_by'] : null;
        $this->container['data_change_created_time'] = isset($data['data_change_created_time']) ? $data['data_change_created_time'] : null;
        $this->container['data_change_last_modified_time'] = isset($data['data_change_last_modified_time']) ? $data['data_change_last_modified_time'] : null;
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
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id app_id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets cluster_name
     *
     * @return string
     */
    public function getClusterName()
    {
        return $this->container['cluster_name'];
    }

    /**
     * Sets cluster_name
     *
     * @param string $cluster_name cluster_name
     *
     * @return $this
     */
    public function setClusterName($cluster_name)
    {
        $this->container['cluster_name'] = $cluster_name;

        return $this;
    }

    /**
     * Gets namespace_name
     *
     * @return string
     */
    public function getNamespaceName()
    {
        return $this->container['namespace_name'];
    }

    /**
     * Sets namespace_name
     *
     * @param string $namespace_name namespace_name
     *
     * @return $this
     */
    public function setNamespaceName($namespace_name)
    {
        $this->container['namespace_name'] = $namespace_name;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets configurations
     *
     * @return \Swagger\Client\Model\ReleasesConfigurations
     */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
     * Sets configurations
     *
     * @param \Swagger\Client\Model\ReleasesConfigurations $configurations configurations
     *
     * @return $this
     */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets data_change_created_by
     *
     * @return string
     */
    public function getDataChangeCreatedBy()
    {
        return $this->container['data_change_created_by'];
    }

    /**
     * Sets data_change_created_by
     *
     * @param string $data_change_created_by data_change_created_by
     *
     * @return $this
     */
    public function setDataChangeCreatedBy($data_change_created_by)
    {
        $this->container['data_change_created_by'] = $data_change_created_by;

        return $this;
    }

    /**
     * Gets data_change_last_modified_by
     *
     * @return string
     */
    public function getDataChangeLastModifiedBy()
    {
        return $this->container['data_change_last_modified_by'];
    }

    /**
     * Sets data_change_last_modified_by
     *
     * @param string $data_change_last_modified_by data_change_last_modified_by
     *
     * @return $this
     */
    public function setDataChangeLastModifiedBy($data_change_last_modified_by)
    {
        $this->container['data_change_last_modified_by'] = $data_change_last_modified_by;

        return $this;
    }

    /**
     * Gets data_change_created_time
     *
     * @return string
     */
    public function getDataChangeCreatedTime()
    {
        return $this->container['data_change_created_time'];
    }

    /**
     * Sets data_change_created_time
     *
     * @param string $data_change_created_time data_change_created_time
     *
     * @return $this
     */
    public function setDataChangeCreatedTime($data_change_created_time)
    {
        $this->container['data_change_created_time'] = $data_change_created_time;

        return $this;
    }

    /**
     * Gets data_change_last_modified_time
     *
     * @return string
     */
    public function getDataChangeLastModifiedTime()
    {
        return $this->container['data_change_last_modified_time'];
    }

    /**
     * Sets data_change_last_modified_time
     *
     * @param string $data_change_last_modified_time data_change_last_modified_time
     *
     * @return $this
     */
    public function setDataChangeLastModifiedTime($data_change_last_modified_time)
    {
        $this->container['data_change_last_modified_time'] = $data_change_last_modified_time;

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
