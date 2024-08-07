<?php
/**
 * MdfeSefazInfModal
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
 * MdfeSefazInfModal Class Doc Comment
 *
 * @category Class
 * @description Informações do modal.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfModal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfModal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'versao_modal' => 'string',
        'aereo' => '\NuvemFiscal\Model\MdfeSefazAereo',
        'rodo' => '\NuvemFiscal\Model\MdfeSefazRodo',
        'aquav' => '\NuvemFiscal\Model\MdfeSefazAquav',
        'ferrov' => '\NuvemFiscal\Model\MdfeSefazFerrov'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'versao_modal' => null,
        'aereo' => null,
        'rodo' => null,
        'aquav' => null,
        'ferrov' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'versao_modal' => true,
		'aereo' => false,
		'rodo' => false,
		'aquav' => false,
		'ferrov' => false
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
        'versao_modal' => 'versaoModal',
        'aereo' => 'aereo',
        'rodo' => 'rodo',
        'aquav' => 'aquav',
        'ferrov' => 'ferrov'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'versao_modal' => 'setVersaoModal',
        'aereo' => 'setAereo',
        'rodo' => 'setRodo',
        'aquav' => 'setAquav',
        'ferrov' => 'setFerrov'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'versao_modal' => 'getVersaoModal',
        'aereo' => 'getAereo',
        'rodo' => 'getRodo',
        'aquav' => 'getAquav',
        'ferrov' => 'getFerrov'
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
        $this->setIfExists('versao_modal', $data ?? [], null);
        $this->setIfExists('aereo', $data ?? [], null);
        $this->setIfExists('rodo', $data ?? [], null);
        $this->setIfExists('aquav', $data ?? [], null);
        $this->setIfExists('ferrov', $data ?? [], null);
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

        if ($this->container['versao_modal'] === null) {
            $invalidProperties[] = "'versao_modal' can't be null";
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
     * Gets versao_modal
     *
     * @return string
     */
    public function getVersaoModal()
    {
        return $this->container['versao_modal'];
    }

    /**
     * Sets versao_modal
     *
     * @param string $versao_modal Versão do leiaute específico para o Modal.
     *
     * @return self
     */
    public function setVersaoModal($versao_modal)
    {
        if (is_null($versao_modal)) {
            array_push($this->openAPINullablesSetToNull, 'versao_modal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('versao_modal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['versao_modal'] = $versao_modal;

        return $this;
    }

    /**
     * Gets aereo
     *
     * @return \NuvemFiscal\Model\MdfeSefazAereo|null
     */
    public function getAereo()
    {
        return $this->container['aereo'];
    }

    /**
     * Sets aereo
     *
     * @param \NuvemFiscal\Model\MdfeSefazAereo|null $aereo aereo
     *
     * @return self
     */
    public function setAereo($aereo)
    {
        if (is_null($aereo)) {
            throw new \InvalidArgumentException('non-nullable aereo cannot be null');
        }
        $this->container['aereo'] = $aereo;

        return $this;
    }

    /**
     * Gets rodo
     *
     * @return \NuvemFiscal\Model\MdfeSefazRodo|null
     */
    public function getRodo()
    {
        return $this->container['rodo'];
    }

    /**
     * Sets rodo
     *
     * @param \NuvemFiscal\Model\MdfeSefazRodo|null $rodo rodo
     *
     * @return self
     */
    public function setRodo($rodo)
    {
        if (is_null($rodo)) {
            throw new \InvalidArgumentException('non-nullable rodo cannot be null');
        }
        $this->container['rodo'] = $rodo;

        return $this;
    }

    /**
     * Gets aquav
     *
     * @return \NuvemFiscal\Model\MdfeSefazAquav|null
     */
    public function getAquav()
    {
        return $this->container['aquav'];
    }

    /**
     * Sets aquav
     *
     * @param \NuvemFiscal\Model\MdfeSefazAquav|null $aquav aquav
     *
     * @return self
     */
    public function setAquav($aquav)
    {
        if (is_null($aquav)) {
            throw new \InvalidArgumentException('non-nullable aquav cannot be null');
        }
        $this->container['aquav'] = $aquav;

        return $this;
    }

    /**
     * Gets ferrov
     *
     * @return \NuvemFiscal\Model\MdfeSefazFerrov|null
     */
    public function getFerrov()
    {
        return $this->container['ferrov'];
    }

    /**
     * Sets ferrov
     *
     * @param \NuvemFiscal\Model\MdfeSefazFerrov|null $ferrov ferrov
     *
     * @return self
     */
    public function setFerrov($ferrov)
    {
        if (is_null($ferrov)) {
            throw new \InvalidArgumentException('non-nullable ferrov cannot be null');
        }
        $this->container['ferrov'] = $ferrov;

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


