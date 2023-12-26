<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Recommend;

/**
 * BaseRecommendationsQuery Class Doc Comment.
 *
 * @category Class
 */
class BaseRecommendationsQuery extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelTypes = [
        'model' => '\Algolia\AlgoliaSearch\Model\Recommend\RecommendationModels',
        'objectID' => 'string',
        'queryParameters' => '\Algolia\AlgoliaSearch\Model\Recommend\SearchParamsObject',
        'fallbackParameters' => '\Algolia\AlgoliaSearch\Model\Recommend\SearchParamsObject',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $modelFormats = [
        'model' => null,
        'objectID' => null,
        'queryParameters' => null,
        'fallbackParameters' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'model' => 'model',
        'objectID' => 'objectID',
        'queryParameters' => 'queryParameters',
        'fallbackParameters' => 'fallbackParameters',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
        'objectID' => 'setObjectID',
        'queryParameters' => 'setQueryParameters',
        'fallbackParameters' => 'setFallbackParameters',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
        'objectID' => 'getObjectID',
        'queryParameters' => 'getQueryParameters',
        'fallbackParameters' => 'getFallbackParameters',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(array $data = null)
    {
        if (isset($data['model'])) {
            $this->container['model'] = $data['model'];
        }
        if (isset($data['objectID'])) {
            $this->container['objectID'] = $data['objectID'];
        }
        if (isset($data['queryParameters'])) {
            $this->container['queryParameters'] = $data['queryParameters'];
        }
        if (isset($data['fallbackParameters'])) {
            $this->container['fallbackParameters'] = $data['fallbackParameters'];
        }
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelTypes()
    {
        return self::$modelTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function modelFormats()
    {
        return self::$modelFormats;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!isset($this->container['model']) || null === $this->container['model']) {
            $invalidProperties[] = "'model' can't be null";
        }
        if (!isset($this->container['objectID']) || null === $this->container['objectID']) {
            $invalidProperties[] = "'objectID' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets model.
     *
     * @return RecommendationModels
     */
    public function getModel()
    {
        return $this->container['model'] ?? null;
    }

    /**
     * Sets model.
     *
     * @param RecommendationModels $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets objectID.
     *
     * @return string
     */
    public function getObjectID()
    {
        return $this->container['objectID'] ?? null;
    }

    /**
     * Sets objectID.
     *
     * @param string $objectID unique object identifier
     *
     * @return self
     */
    public function setObjectID($objectID)
    {
        $this->container['objectID'] = $objectID;

        return $this;
    }

    /**
     * Gets queryParameters.
     *
     * @return null|SearchParamsObject
     */
    public function getQueryParameters()
    {
        return $this->container['queryParameters'] ?? null;
    }

    /**
     * Sets queryParameters.
     *
     * @param null|SearchParamsObject $queryParameters queryParameters
     *
     * @return self
     */
    public function setQueryParameters($queryParameters)
    {
        $this->container['queryParameters'] = $queryParameters;

        return $this;
    }

    /**
     * Gets fallbackParameters.
     *
     * @return null|SearchParamsObject
     */
    public function getFallbackParameters()
    {
        return $this->container['fallbackParameters'] ?? null;
    }

    /**
     * Sets fallbackParameters.
     *
     * @param null|SearchParamsObject $fallbackParameters fallbackParameters
     *
     * @return self
     */
    public function setFallbackParameters($fallbackParameters)
    {
        $this->container['fallbackParameters'] = $fallbackParameters;

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
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}
