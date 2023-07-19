<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * BatchDictionaryEntriesParams Class Doc Comment
 *
 * @category Class
 *
 * @description &#x60;batchDictionaryEntries&#x60; parameters.
 *
 * @package Algolia\AlgoliaSearch
 */
class BatchDictionaryEntriesParams extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $modelTypes = [
        'clearExistingDictionaryEntries' => 'bool',
        'requests' => '\Algolia\AlgoliaSearch\Model\Search\BatchDictionaryEntriesRequest[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $modelFormats = [
        'clearExistingDictionaryEntries' => null,
        'requests' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
    */
    protected static $attributeMap = [
        'clearExistingDictionaryEntries' => 'clearExistingDictionaryEntries',
        'requests' => 'requests',
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
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clearExistingDictionaryEntries' => 'setClearExistingDictionaryEntries',
        'requests' => 'setRequests',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clearExistingDictionaryEntries' => 'getClearExistingDictionaryEntries',
        'requests' => 'getRequests',
    ];

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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(array $data = null)
    {
        if (isset($data['clearExistingDictionaryEntries'])) {
            $this->container['clearExistingDictionaryEntries'] = $data['clearExistingDictionaryEntries'];
        }
        if (isset($data['requests'])) {
            $this->container['requests'] = $data['requests'];
        }
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!isset($this->container['requests']) || $this->container['requests'] === null) {
            $invalidProperties[] = "'requests' can't be null";
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
     * Gets clearExistingDictionaryEntries
     *
     * @return bool|null
     */
    public function getClearExistingDictionaryEntries()
    {
        return $this->container['clearExistingDictionaryEntries'] ?? null;
    }

    /**
     * Sets clearExistingDictionaryEntries
     *
     * @param bool|null $clearExistingDictionaryEntries incidates whether to replace all custom entries in the dictionary with the ones sent with this request
     *
     * @return self
     */
    public function setClearExistingDictionaryEntries($clearExistingDictionaryEntries)
    {
        $this->container['clearExistingDictionaryEntries'] = $clearExistingDictionaryEntries;

        return $this;
    }

    /**
     * Gets requests
     *
     * @return \Algolia\AlgoliaSearch\Model\Search\BatchDictionaryEntriesRequest[]
     */
    public function getRequests()
    {
        return $this->container['requests'] ?? null;
    }

    /**
     * Sets requests
     *
     * @param \Algolia\AlgoliaSearch\Model\Search\BatchDictionaryEntriesRequest[] $requests operations to batch
     *
     * @return self
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

