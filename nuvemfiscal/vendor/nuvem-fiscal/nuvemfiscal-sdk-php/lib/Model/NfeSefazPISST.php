<?php
/**
 * NfeSefazPISST
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
 * NfeSefazPISST Class Doc Comment
 *
 * @category Class
 * @description Dados do PIS Substituição Tributária.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazPISST implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazPISST';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_bc' => 'float',
        'p_pis' => 'float',
        'q_bc_prod' => 'float',
        'v_aliq_prod' => 'float',
        'v_pis' => 'float',
        'ind_soma_pisst' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_bc' => null,
        'p_pis' => null,
        'q_bc_prod' => null,
        'v_aliq_prod' => null,
        'v_pis' => null,
        'ind_soma_pisst' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_bc' => true,
		'p_pis' => true,
		'q_bc_prod' => true,
		'v_aliq_prod' => true,
		'v_pis' => true,
		'ind_soma_pisst' => true
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
        'v_bc' => 'vBC',
        'p_pis' => 'pPIS',
        'q_bc_prod' => 'qBCProd',
        'v_aliq_prod' => 'vAliqProd',
        'v_pis' => 'vPIS',
        'ind_soma_pisst' => 'indSomaPISST'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_bc' => 'setVBc',
        'p_pis' => 'setPPis',
        'q_bc_prod' => 'setQBcProd',
        'v_aliq_prod' => 'setVAliqProd',
        'v_pis' => 'setVPis',
        'ind_soma_pisst' => 'setIndSomaPisst'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_bc' => 'getVBc',
        'p_pis' => 'getPPis',
        'q_bc_prod' => 'getQBcProd',
        'v_aliq_prod' => 'getVAliqProd',
        'v_pis' => 'getVPis',
        'ind_soma_pisst' => 'getIndSomaPisst'
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
        $this->setIfExists('v_bc', $data ?? [], null);
        $this->setIfExists('p_pis', $data ?? [], null);
        $this->setIfExists('q_bc_prod', $data ?? [], null);
        $this->setIfExists('v_aliq_prod', $data ?? [], null);
        $this->setIfExists('v_pis', $data ?? [], null);
        $this->setIfExists('ind_soma_pisst', $data ?? [], null);
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

        if ($this->container['v_pis'] === null) {
            $invalidProperties[] = "'v_pis' can't be null";
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
     * Gets v_bc
     *
     * @return float|null
     */
    public function getVBc()
    {
        return $this->container['v_bc'];
    }

    /**
     * Sets v_bc
     *
     * @param float|null $v_bc Valor da BC do PIS ST.
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
     * Gets p_pis
     *
     * @return float|null
     */
    public function getPPis()
    {
        return $this->container['p_pis'];
    }

    /**
     * Sets p_pis
     *
     * @param float|null $p_pis Alíquota do PIS ST (em percentual).
     *
     * @return self
     */
    public function setPPis($p_pis)
    {
        if (is_null($p_pis)) {
            array_push($this->openAPINullablesSetToNull, 'p_pis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_pis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_pis'] = $p_pis;

        return $this;
    }

    /**
     * Gets q_bc_prod
     *
     * @return float|null
     */
    public function getQBcProd()
    {
        return $this->container['q_bc_prod'];
    }

    /**
     * Sets q_bc_prod
     *
     * @param float|null $q_bc_prod Quantidade Vendida.
     *
     * @return self
     */
    public function setQBcProd($q_bc_prod)
    {
        if (is_null($q_bc_prod)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_bc_prod'] = $q_bc_prod;

        return $this;
    }

    /**
     * Gets v_aliq_prod
     *
     * @return float|null
     */
    public function getVAliqProd()
    {
        return $this->container['v_aliq_prod'];
    }

    /**
     * Sets v_aliq_prod
     *
     * @param float|null $v_aliq_prod Alíquota do PIS ST (em reais).
     *
     * @return self
     */
    public function setVAliqProd($v_aliq_prod)
    {
        if (is_null($v_aliq_prod)) {
            array_push($this->openAPINullablesSetToNull, 'v_aliq_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_aliq_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_aliq_prod'] = $v_aliq_prod;

        return $this;
    }

    /**
     * Gets v_pis
     *
     * @return float
     */
    public function getVPis()
    {
        return $this->container['v_pis'];
    }

    /**
     * Sets v_pis
     *
     * @param float $v_pis Valor do PIS ST.
     *
     * @return self
     */
    public function setVPis($v_pis)
    {
        if (is_null($v_pis)) {
            array_push($this->openAPINullablesSetToNull, 'v_pis');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_pis', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_pis'] = $v_pis;

        return $this;
    }

    /**
     * Gets ind_soma_pisst
     *
     * @return int|null
     */
    public function getIndSomaPisst()
    {
        return $this->container['ind_soma_pisst'];
    }

    /**
     * Sets ind_soma_pisst
     *
     * @param int|null $ind_soma_pisst Indica se o valor do PISST compõe o valor total da NF-e.
     *
     * @return self
     */
    public function setIndSomaPisst($ind_soma_pisst)
    {
        if (is_null($ind_soma_pisst)) {
            array_push($this->openAPINullablesSetToNull, 'ind_soma_pisst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ind_soma_pisst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ind_soma_pisst'] = $ind_soma_pisst;

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


