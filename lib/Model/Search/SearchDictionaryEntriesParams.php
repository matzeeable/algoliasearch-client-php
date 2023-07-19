<?php

// Code generated by OpenAPI Generator (https://openapi-generator.tech), manual changes will be lost - read more on https://github.com/algolia/api-clients-automation. DO NOT EDIT.

namespace Algolia\AlgoliaSearch\Model\Search;

/**
 * SearchDictionaryEntriesParams Class Doc Comment
 *
 * @category Class
 *
 * @description &#x60;searchDictionaryEntries&#x60; parameters.
 *
 * @package Algolia\AlgoliaSearch
 */
class SearchDictionaryEntriesParams extends \Algolia\AlgoliaSearch\Model\AbstractModel implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $modelTypes = [
        'query' => 'string',
        'page' => 'int',
        'hitsPerPage' => 'int',
        'language' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $modelFormats = [
        'query' => null,
        'page' => null,
        'hitsPerPage' => null,
        'language' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
    */
    protected static $attributeMap = [
        'query' => 'query',
        'page' => 'page',
        'hitsPerPage' => 'hitsPerPage',
        'language' => 'language',
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
        'query' => 'setQuery',
        'page' => 'setPage',
        'hitsPerPage' => 'setHitsPerPage',
        'language' => 'setLanguage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'page' => 'getPage',
        'hitsPerPage' => 'getHitsPerPage',
        'language' => 'getLanguage',
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
        if (isset($data['query'])) {
            $this->container['query'] = $data['query'];
        }
        if (isset($data['page'])) {
            $this->container['page'] = $data['page'];
        }
        if (isset($data['hitsPerPage'])) {
            $this->container['hitsPerPage'] = $data['hitsPerPage'];
        }
        if (isset($data['language'])) {
            $this->container['language'] = $data['language'];
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

        if (!isset($this->container['query']) || $this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if (isset($this->container['hitsPerPage']) && ($this->container['hitsPerPage'] > 1000)) {
            $invalidProperties[] = "invalid value for 'hitsPerPage', must be smaller than or equal to 1000.";
        }

        if (isset($this->container['hitsPerPage']) && ($this->container['hitsPerPage'] < 1)) {
            $invalidProperties[] = "invalid value for 'hitsPerPage', must be bigger than or equal to 1.";
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
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'] ?? null;
    }

    /**
     * Sets query
     *
     * @param string $query text to search for in an index
     *
     * @return self
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'] ?? null;
    }

    /**
     * Sets page
     *
     * @param int|null $page page to retrieve (the first page is `0`, not `1`)
     *
     * @return self
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets hitsPerPage
     *
     * @return int|null
     */
    public function getHitsPerPage()
    {
        return $this->container['hitsPerPage'] ?? null;
    }

    /**
     * Sets hitsPerPage
     *
     * @param int|null $hitsPerPage number of hits per page
     *
     * @return self
     */
    public function setHitsPerPage($hitsPerPage)
    {

        if (!is_null($hitsPerPage) && ($hitsPerPage > 1000)) {
            throw new \InvalidArgumentException('invalid value for $hitsPerPage when calling SearchDictionaryEntriesParams., must be smaller than or equal to 1000.');
        }
        if (!is_null($hitsPerPage) && ($hitsPerPage < 1)) {
            throw new \InvalidArgumentException('invalid value for $hitsPerPage when calling SearchDictionaryEntriesParams., must be bigger than or equal to 1.');
        }

        $this->container['hitsPerPage'] = $hitsPerPage;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'] ?? null;
    }

    /**
     * Sets language
     *
     * @param string|null $language [Supported language ISO code](https://www.algolia.com/doc/guides/managing-results/optimize-search-results/handling-natural-languages-nlp/in-depth/supported-languages/).
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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

