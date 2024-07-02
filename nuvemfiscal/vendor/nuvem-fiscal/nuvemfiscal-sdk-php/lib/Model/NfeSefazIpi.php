<?php
/**
 * NfeSefazIpi
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
 * NfeSefazIpi Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazIpi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazIpi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj_prod' => 'string',
        'c_selo' => 'string',
        'q_selo' => 'int',
        'c_enq' => 'string',
        'ipi_trib' => '\NuvemFiscal\Model\NfeSefazIPITrib',
        'ipint' => '\NuvemFiscal\Model\NfeSefazIPINT'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cnpj_prod' => null,
        'c_selo' => null,
        'q_selo' => null,
        'c_enq' => null,
        'ipi_trib' => null,
        'ipint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj_prod' => true,
		'c_selo' => true,
		'q_selo' => true,
		'c_enq' => true,
		'ipi_trib' => false,
		'ipint' => false
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
        'cnpj_prod' => 'CNPJProd',
        'c_selo' => 'cSelo',
        'q_selo' => 'qSelo',
        'c_enq' => 'cEnq',
        'ipi_trib' => 'IPITrib',
        'ipint' => 'IPINT'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj_prod' => 'setCnpjProd',
        'c_selo' => 'setCSelo',
        'q_selo' => 'setQSelo',
        'c_enq' => 'setCEnq',
        'ipi_trib' => 'setIpiTrib',
        'ipint' => 'setIpint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj_prod' => 'getCnpjProd',
        'c_selo' => 'getCSelo',
        'q_selo' => 'getQSelo',
        'c_enq' => 'getCEnq',
        'ipi_trib' => 'getIpiTrib',
        'ipint' => 'getIpint'
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
        $this->setIfExists('cnpj_prod', $data ?? [], null);
        $this->setIfExists('c_selo', $data ?? [], null);
        $this->setIfExists('q_selo', $data ?? [], null);
        $this->setIfExists('c_enq', $data ?? [], null);
        $this->setIfExists('ipi_trib', $data ?? [], null);
        $this->setIfExists('ipint', $data ?? [], null);
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

        if (!is_null($this->container['cnpj_prod']) && (mb_strlen($this->container['cnpj_prod']) > 14)) {
            $invalidProperties[] = "invalid value for 'cnpj_prod', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['c_selo']) && (mb_strlen($this->container['c_selo']) > 60)) {
            $invalidProperties[] = "invalid value for 'c_selo', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['c_selo']) && (mb_strlen($this->container['c_selo']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_selo', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['c_enq'] === null) {
            $invalidProperties[] = "'c_enq' can't be null";
        }
        if ((mb_strlen($this->container['c_enq']) > 3)) {
            $invalidProperties[] = "invalid value for 'c_enq', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['c_enq']) < 1)) {
            $invalidProperties[] = "invalid value for 'c_enq', the character length must be bigger than or equal to 1.";
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
     * Gets cnpj_prod
     *
     * @return string|null
     */
    public function getCnpjProd()
    {
        return $this->container['cnpj_prod'];
    }

    /**
     * Sets cnpj_prod
     *
     * @param string|null $cnpj_prod CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os casos de exportação direta ou indireta.
     *
     * @return self
     */
    public function setCnpjProd($cnpj_prod)
    {
        if (is_null($cnpj_prod)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cnpj_prod) && (mb_strlen($cnpj_prod) > 14)) {
            throw new \InvalidArgumentException('invalid length for $cnpj_prod when calling NfeSefazIpi., must be smaller than or equal to 14.');
        }

        $this->container['cnpj_prod'] = $cnpj_prod;

        return $this;
    }

    /**
     * Gets c_selo
     *
     * @return string|null
     */
    public function getCSelo()
    {
        return $this->container['c_selo'];
    }

    /**
     * Sets c_selo
     *
     * @param string|null $c_selo Código do selo de controle do IPI.
     *
     * @return self
     */
    public function setCSelo($c_selo)
    {
        if (is_null($c_selo)) {
            array_push($this->openAPINullablesSetToNull, 'c_selo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_selo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_selo) && (mb_strlen($c_selo) > 60)) {
            throw new \InvalidArgumentException('invalid length for $c_selo when calling NfeSefazIpi., must be smaller than or equal to 60.');
        }
        if (!is_null($c_selo) && (mb_strlen($c_selo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_selo when calling NfeSefazIpi., must be bigger than or equal to 1.');
        }

        $this->container['c_selo'] = $c_selo;

        return $this;
    }

    /**
     * Gets q_selo
     *
     * @return int|null
     */
    public function getQSelo()
    {
        return $this->container['q_selo'];
    }

    /**
     * Sets q_selo
     *
     * @param int|null $q_selo Quantidade de selo de controle do IPI.
     *
     * @return self
     */
    public function setQSelo($q_selo)
    {
        if (is_null($q_selo)) {
            array_push($this->openAPINullablesSetToNull, 'q_selo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_selo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_selo'] = $q_selo;

        return $this;
    }

    /**
     * Gets c_enq
     *
     * @return string
     */
    public function getCEnq()
    {
        return $this->container['c_enq'];
    }

    /**
     * Sets c_enq
     *
     * @param string $c_enq Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB).
     *
     * @return self
     */
    public function setCEnq($c_enq)
    {
        if (is_null($c_enq)) {
            array_push($this->openAPINullablesSetToNull, 'c_enq');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('c_enq', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($c_enq) && (mb_strlen($c_enq) > 3)) {
            throw new \InvalidArgumentException('invalid length for $c_enq when calling NfeSefazIpi., must be smaller than or equal to 3.');
        }
        if (!is_null($c_enq) && (mb_strlen($c_enq) < 1)) {
            throw new \InvalidArgumentException('invalid length for $c_enq when calling NfeSefazIpi., must be bigger than or equal to 1.');
        }

        $this->container['c_enq'] = $c_enq;

        return $this;
    }

    /**
     * Gets ipi_trib
     *
     * @return \NuvemFiscal\Model\NfeSefazIPITrib|null
     */
    public function getIpiTrib()
    {
        return $this->container['ipi_trib'];
    }

    /**
     * Sets ipi_trib
     *
     * @param \NuvemFiscal\Model\NfeSefazIPITrib|null $ipi_trib ipi_trib
     *
     * @return self
     */
    public function setIpiTrib($ipi_trib)
    {
        if (is_null($ipi_trib)) {
            throw new \InvalidArgumentException('non-nullable ipi_trib cannot be null');
        }
        $this->container['ipi_trib'] = $ipi_trib;

        return $this;
    }

    /**
     * Gets ipint
     *
     * @return \NuvemFiscal\Model\NfeSefazIPINT|null
     */
    public function getIpint()
    {
        return $this->container['ipint'];
    }

    /**
     * Sets ipint
     *
     * @param \NuvemFiscal\Model\NfeSefazIPINT|null $ipint ipint
     *
     * @return self
     */
    public function setIpint($ipint)
    {
        if (is_null($ipint)) {
            throw new \InvalidArgumentException('non-nullable ipint cannot be null');
        }
        $this->container['ipint'] = $ipint;

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


