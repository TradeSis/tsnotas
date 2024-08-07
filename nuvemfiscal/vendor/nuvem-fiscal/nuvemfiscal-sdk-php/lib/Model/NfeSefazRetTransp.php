<?php
/**
 * NfeSefazRetTransp
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
 * NfeSefazRetTransp Class Doc Comment
 *
 * @category Class
 * @description Dados da retenção  ICMS do Transporte.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazRetTransp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazRetTransp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'v_serv' => 'float',
        'v_bc_ret' => 'float',
        'p_icms_ret' => 'float',
        'v_icms_ret' => 'float',
        'cfop' => 'string',
        'c_mun_fg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'v_serv' => null,
        'v_bc_ret' => null,
        'p_icms_ret' => null,
        'v_icms_ret' => null,
        'cfop' => null,
        'c_mun_fg' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'v_serv' => true,
		'v_bc_ret' => true,
		'p_icms_ret' => true,
		'v_icms_ret' => true,
		'cfop' => true,
		'c_mun_fg' => true
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
        'v_serv' => 'vServ',
        'v_bc_ret' => 'vBCRet',
        'p_icms_ret' => 'pICMSRet',
        'v_icms_ret' => 'vICMSRet',
        'cfop' => 'CFOP',
        'c_mun_fg' => 'cMunFG'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v_serv' => 'setVServ',
        'v_bc_ret' => 'setVBcRet',
        'p_icms_ret' => 'setPIcmsRet',
        'v_icms_ret' => 'setVIcmsRet',
        'cfop' => 'setCfop',
        'c_mun_fg' => 'setCMunFg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v_serv' => 'getVServ',
        'v_bc_ret' => 'getVBcRet',
        'p_icms_ret' => 'getPIcmsRet',
        'v_icms_ret' => 'getVIcmsRet',
        'cfop' => 'getCfop',
        'c_mun_fg' => 'getCMunFg'
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
        $this->setIfExists('v_serv', $data ?? [], null);
        $this->setIfExists('v_bc_ret', $data ?? [], null);
        $this->setIfExists('p_icms_ret', $data ?? [], null);
        $this->setIfExists('v_icms_ret', $data ?? [], null);
        $this->setIfExists('cfop', $data ?? [], null);
        $this->setIfExists('c_mun_fg', $data ?? [], null);
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

        if ($this->container['v_serv'] === null) {
            $invalidProperties[] = "'v_serv' can't be null";
        }
        if ($this->container['v_bc_ret'] === null) {
            $invalidProperties[] = "'v_bc_ret' can't be null";
        }
        if ($this->container['p_icms_ret'] === null) {
            $invalidProperties[] = "'p_icms_ret' can't be null";
        }
        if ($this->container['v_icms_ret'] === null) {
            $invalidProperties[] = "'v_icms_ret' can't be null";
        }
        if ($this->container['cfop'] === null) {
            $invalidProperties[] = "'cfop' can't be null";
        }
        if ($this->container['c_mun_fg'] === null) {
            $invalidProperties[] = "'c_mun_fg' can't be null";
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
     * Gets v_serv
     *
     * @return float
     */
    public function getVServ()
    {
        return $this->container['v_serv'];
    }

    /**
     * Sets v_serv
     *
     * @param float $v_serv Valor do Serviço.
     *
     * @return self
     */
    public function setVServ($v_serv)
    {
        if (is_null($v_serv)) {
            array_push($this->openAPINullablesSetToNull, 'v_serv');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_serv', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_serv'] = $v_serv;

        return $this;
    }

    /**
     * Gets v_bc_ret
     *
     * @return float
     */
    public function getVBcRet()
    {
        return $this->container['v_bc_ret'];
    }

    /**
     * Sets v_bc_ret
     *
     * @param float $v_bc_ret BC da Retenção do ICMS.
     *
     * @return self
     */
    public function setVBcRet($v_bc_ret)
    {
        if (is_null($v_bc_ret)) {
            array_push($this->openAPINullablesSetToNull, 'v_bc_ret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_bc_ret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_bc_ret'] = $v_bc_ret;

        return $this;
    }

    /**
     * Gets p_icms_ret
     *
     * @return float
     */
    public function getPIcmsRet()
    {
        return $this->container['p_icms_ret'];
    }

    /**
     * Sets p_icms_ret
     *
     * @param float $p_icms_ret Alíquota da Retenção.
     *
     * @return self
     */
    public function setPIcmsRet($p_icms_ret)
    {
        if (is_null($p_icms_ret)) {
            array_push($this->openAPINullablesSetToNull, 'p_icms_ret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_icms_ret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_icms_ret'] = $p_icms_ret;

        return $this;
    }

    /**
     * Gets v_icms_ret
     *
     * @return float
     */
    public function getVIcmsRet()
    {
        return $this->container['v_icms_ret'];
    }

    /**
     * Sets v_icms_ret
     *
     * @param float $v_icms_ret Valor do ICMS Retido.
     *
     * @return self
     */
    public function setVIcmsRet($v_icms_ret)
    {
        if (is_null($v_icms_ret)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_ret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_ret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_icms_ret'] = $v_icms_ret;

        return $this;
    }

    /**
     * Gets cfop
     *
     * @return string
     */
    public function getCfop()
    {
        return $this->container['cfop'];
    }

    /**
     * Sets cfop
     *
     * @param string $cfop Código Fiscal de Operações e Prestações.
     *
     * @return self
     */
    public function setCfop($cfop)
    {
        if (is_null($cfop)) {
            array_push($this->openAPINullablesSetToNull, 'cfop');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cfop', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cfop'] = $cfop;

        return $this;
    }

    /**
     * Gets c_mun_fg
     *
     * @return string
     */
    public function getCMunFg()
    {
        return $this->container['c_mun_fg'];
    }

    /**
     * Sets c_mun_fg
     *
     * @param string $c_mun_fg Código do Município de Ocorrência do Fato Gerador (utilizar a tabela do IBGE).
     *
     * @return self
     */
    public function setCMunFg($c_mun_fg)
    {
        if (is_null($c_mun_fg)) {
            array_push($this->openAPINullablesSetToNull, 'c_mun_fg');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_mun_fg', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['c_mun_fg'] = $c_mun_fg;

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


