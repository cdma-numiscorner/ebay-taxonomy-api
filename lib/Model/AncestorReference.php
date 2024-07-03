<?php
/**
 * AncestorReference
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\EbayTaxonomyApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbayTaxonomyApiClient\Model;

use \ArrayAccess;
use \OpenAPI\EbayTaxonomyApiClient\ObjectSerializer;

/**
 * AncestorReference Class Doc Comment
 *
 * @category Class
 * @description This type contains information about one of the ancestors of a suggested category. An ordered list of these references describes the path from the suggested category to the root of the category tree it belongs to.
 * @package  OpenAPI\EbayTaxonomyApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AncestorReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AncestorReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_id' => 'string',
        'category_name' => 'string',
        'category_subtree_node_href' => 'string',
        'category_tree_node_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category_id' => null,
        'category_name' => null,
        'category_subtree_node_href' => null,
        'category_tree_node_level' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category_id' => 'categoryId',
        'category_name' => 'categoryName',
        'category_subtree_node_href' => 'categorySubtreeNodeHref',
        'category_tree_node_level' => 'categoryTreeNodeLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
        'category_subtree_node_href' => 'setCategorySubtreeNodeHref',
        'category_tree_node_level' => 'setCategoryTreeNodeLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
        'category_subtree_node_href' => 'getCategorySubtreeNodeHref',
        'category_tree_node_level' => 'getCategoryTreeNodeLevel'
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
        return self::$openAPIModelName;
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
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['category_name'] = $data['category_name'] ?? null;
        $this->container['category_subtree_node_href'] = $data['category_subtree_node_href'] ?? null;
        $this->container['category_tree_node_level'] = $data['category_tree_node_level'] ?? null;
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
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id The unique identifier of the eBay ancestor category.<br><br><span class=\"tablenote\"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development.</span>
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string|null $category_name The name of the ancestor category identified by <b>categoryId</b>.
     *
     * @return self
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets category_subtree_node_href
     *
     * @return string|null
     */
    public function getCategorySubtreeNodeHref()
    {
        return $this->container['category_subtree_node_href'];
    }

    /**
     * Sets category_subtree_node_href
     *
     * @param string|null $category_subtree_node_href The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the ancestor category node.
     *
     * @return self
     */
    public function setCategorySubtreeNodeHref($category_subtree_node_href)
    {
        $this->container['category_subtree_node_href'] = $category_subtree_node_href;

        return $this;
    }

    /**
     * Gets category_tree_node_level
     *
     * @return int|null
     */
    public function getCategoryTreeNodeLevel()
    {
        return $this->container['category_tree_node_level'];
    }

    /**
     * Sets category_tree_node_level
     *
     * @param int|null $category_tree_node_level The absolute level of the ancestor category node in the hierarchy of its category tree.<br><br><span class=\"tablenote\"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
     *
     * @return self
     */
    public function setCategoryTreeNodeLevel($category_tree_node_level)
    {
        $this->container['category_tree_node_level'] = $category_tree_node_level;

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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


