<?php
/**
 * CteSefazICMS90
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Nuvem Fiscal
 *
 * API para automação comercial e documentos fiscais.
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NuvemFiscal\Model;

use \ArrayAccess;
use \NuvemFiscal\ObjectSerializer;

/**
 * CteSefazICMS90 Class Doc Comment
 *
 * @category Class
 * @description ICMS Outros.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CteSefazICMS90 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CteSefazICMS90';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cst' => 'string',
        'p_red_bc' => 'float',
        'v_bc' => 'float',
        'p_icms' => 'float',
        'v_icms' => 'float',
        'v_cred' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cst' => null,
        'p_red_bc' => null,
        'v_bc' => null,
        'p_icms' => null,
        'v_icms' => null,
        'v_cred' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cst' => true,
		'p_red_bc' => true,
		'v_bc' => true,
		'p_icms' => true,
		'v_icms' => true,
		'v_cred' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cst' => 'CST',
        'p_red_bc' => 'pRedBC',
        'v_bc' => 'vBC',
        'p_icms' => 'pICMS',
        'v_icms' => 'vICMS',
        'v_cred' => 'vCred'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cst' => 'setCst',
        'p_red_bc' => 'setPRedBc',
        'v_bc' => 'setVBc',
        'p_icms' => 'setPIcms',
        'v_icms' => 'setVIcms',
        'v_cred' => 'setVCred'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cst' => 'getCst',
        'p_red_bc' => 'getPRedBc',
        'v_bc' => 'getVBc',
        'p_icms' => 'getPIcms',
        'v_icms' => 'getVIcms',
        'v_cred' => 'getVCred'
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
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('p_red_bc', $data ?? [], null);
        $this->setIfExists('v_bc', $data ?? [], null);
        $this->setIfExists('p_icms', $data ?? [], null);
        $this->setIfExists('v_icms', $data ?? [], null);
        $this->setIfExists('v_cred', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
        }
        if ($this->container['v_bc'] === null) {
            $invalidProperties[] = "'v_bc' can't be null";
        }
        if ($this->container['p_icms'] === null) {
            $invalidProperties[] = "'p_icms' can't be null";
        }
        if ($this->container['v_icms'] === null) {
            $invalidProperties[] = "'v_icms' can't be null";
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
     * Gets cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->container['cst'];
    }

    /**
     * Sets cst
     *
     * @param string $cst Classificação Tributária do Serviço.  * 90 - ICMS outros
     *
     * @return self
     */
    public function setCst($cst)
    {
        if (is_null($cst)) {
            array_push($this->openAPINullablesSetToNull, 'cst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets p_red_bc
     *
     * @return float|null
     */
    public function getPRedBc()
    {
        return $this->container['p_red_bc'];
    }

    /**
     * Sets p_red_bc
     *
     * @param float|null $p_red_bc Percentual de redução da BC.
     *
     * @return self
     */
    public function setPRedBc($p_red_bc)
    {
        if (is_null($p_red_bc)) {
            array_push($this->openAPINullablesSetToNull, 'p_red_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_red_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_red_bc'] = $p_red_bc;

        return $this;
    }

    /**
     * Gets v_bc
     *
     * @return float
     */
    public function getVBc()
    {
        return $this->container['v_bc'];
    }

    /**
     * Sets v_bc
     *
     * @param float $v_bc Valor da BC do ICMS.
     *
     * @return self
     */
    public function setVBc($v_bc)
    {
        if (is_null($v_bc)) {
            array_push($this->openAPINullablesSetToNull, 'v_bc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_bc'] = $v_bc;

        return $this;
    }

    /**
     * Gets p_icms
     *
     * @return float
     */
    public function getPIcms()
    {
        return $this->container['p_icms'];
    }

    /**
     * Sets p_icms
     *
     * @param float $p_icms Alíquota do ICMS.
     *
     * @return self
     */
    public function setPIcms($p_icms)
    {
        if (is_null($p_icms)) {
            array_push($this->openAPINullablesSetToNull, 'p_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_icms'] = $p_icms;

        return $this;
    }

    /**
     * Gets v_icms
     *
     * @return float
     */
    public function getVIcms()
    {
        return $this->container['v_icms'];
    }

    /**
     * Sets v_icms
     *
     * @param float $v_icms Valor do ICMS.
     *
     * @return self
     */
    public function setVIcms($v_icms)
    {
        if (is_null($v_icms)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_icms'] = $v_icms;

        return $this;
    }

    /**
     * Gets v_cred
     *
     * @return float|null
     */
    public function getVCred()
    {
        return $this->container['v_cred'];
    }

    /**
     * Sets v_cred
     *
     * @param float|null $v_cred Valor do Crédito Outorgado/Presumido.
     *
     * @return self
     */
    public function setVCred($v_cred)
    {
        if (is_null($v_cred)) {
            array_push($this->openAPINullablesSetToNull, 'v_cred');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_cred', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_cred'] = $v_cred;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


