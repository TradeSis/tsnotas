<?php
/**
 * MdfeSefazInfANTT
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
 * MdfeSefazInfANTT Class Doc Comment
 *
 * @category Class
 * @description Grupo de informações para Agência Reguladora.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazInfANTT implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazInfANTT';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rntrc' => 'string',
        'inf_ciot' => '\NuvemFiscal\Model\MdfeSefazInfCIOT[]',
        'vale_ped' => '\NuvemFiscal\Model\MdfeSefazValePed',
        'inf_contratante' => '\NuvemFiscal\Model\MdfeSefazInfContratante[]',
        'inf_pag' => '\NuvemFiscal\Model\MdfeSefazInfPag[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rntrc' => null,
        'inf_ciot' => null,
        'vale_ped' => null,
        'inf_contratante' => null,
        'inf_pag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rntrc' => true,
		'inf_ciot' => false,
		'vale_ped' => false,
		'inf_contratante' => false,
		'inf_pag' => false
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
        'rntrc' => 'RNTRC',
        'inf_ciot' => 'infCIOT',
        'vale_ped' => 'valePed',
        'inf_contratante' => 'infContratante',
        'inf_pag' => 'infPag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rntrc' => 'setRntrc',
        'inf_ciot' => 'setInfCiot',
        'vale_ped' => 'setValePed',
        'inf_contratante' => 'setInfContratante',
        'inf_pag' => 'setInfPag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rntrc' => 'getRntrc',
        'inf_ciot' => 'getInfCiot',
        'vale_ped' => 'getValePed',
        'inf_contratante' => 'getInfContratante',
        'inf_pag' => 'getInfPag'
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
        $this->setIfExists('rntrc', $data ?? [], null);
        $this->setIfExists('inf_ciot', $data ?? [], null);
        $this->setIfExists('vale_ped', $data ?? [], null);
        $this->setIfExists('inf_contratante', $data ?? [], null);
        $this->setIfExists('inf_pag', $data ?? [], null);
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
     * Gets rntrc
     *
     * @return string|null
     */
    public function getRntrc()
    {
        return $this->container['rntrc'];
    }

    /**
     * Sets rntrc
     *
     * @param string|null $rntrc Registro Nacional de Transportadores Rodoviários de Carga.  Registro obrigatório do emitente do MDF-e junto à ANTT para exercer a atividade de transportador rodoviário de cargas por conta de terceiros e mediante remuneração.
     *
     * @return self
     */
    public function setRntrc($rntrc)
    {
        if (is_null($rntrc)) {
            array_push($this->openAPINullablesSetToNull, 'rntrc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rntrc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rntrc'] = $rntrc;

        return $this;
    }

    /**
     * Gets inf_ciot
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfCIOT[]|null
     */
    public function getInfCiot()
    {
        return $this->container['inf_ciot'];
    }

    /**
     * Sets inf_ciot
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfCIOT[]|null $inf_ciot inf_ciot
     *
     * @return self
     */
    public function setInfCiot($inf_ciot)
    {
        if (is_null($inf_ciot)) {
            throw new \InvalidArgumentException('non-nullable inf_ciot cannot be null');
        }
        $this->container['inf_ciot'] = $inf_ciot;

        return $this;
    }

    /**
     * Gets vale_ped
     *
     * @return \NuvemFiscal\Model\MdfeSefazValePed|null
     */
    public function getValePed()
    {
        return $this->container['vale_ped'];
    }

    /**
     * Sets vale_ped
     *
     * @param \NuvemFiscal\Model\MdfeSefazValePed|null $vale_ped vale_ped
     *
     * @return self
     */
    public function setValePed($vale_ped)
    {
        if (is_null($vale_ped)) {
            throw new \InvalidArgumentException('non-nullable vale_ped cannot be null');
        }
        $this->container['vale_ped'] = $vale_ped;

        return $this;
    }

    /**
     * Gets inf_contratante
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfContratante[]|null
     */
    public function getInfContratante()
    {
        return $this->container['inf_contratante'];
    }

    /**
     * Sets inf_contratante
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfContratante[]|null $inf_contratante inf_contratante
     *
     * @return self
     */
    public function setInfContratante($inf_contratante)
    {
        if (is_null($inf_contratante)) {
            throw new \InvalidArgumentException('non-nullable inf_contratante cannot be null');
        }
        $this->container['inf_contratante'] = $inf_contratante;

        return $this;
    }

    /**
     * Gets inf_pag
     *
     * @return \NuvemFiscal\Model\MdfeSefazInfPag[]|null
     */
    public function getInfPag()
    {
        return $this->container['inf_pag'];
    }

    /**
     * Sets inf_pag
     *
     * @param \NuvemFiscal\Model\MdfeSefazInfPag[]|null $inf_pag inf_pag
     *
     * @return self
     */
    public function setInfPag($inf_pag)
    {
        if (is_null($inf_pag)) {
            throw new \InvalidArgumentException('non-nullable inf_pag cannot be null');
        }
        $this->container['inf_pag'] = $inf_pag;

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


