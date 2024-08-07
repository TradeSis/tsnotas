<?php
/**
 * NfeSefazDet
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
 * NfeSefazDet Class Doc Comment
 *
 * @category Class
 * @description Dados dos detalhes da NF-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazDet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazDet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'n_item' => 'int',
        'prod' => '\NuvemFiscal\Model\NfeSefazProd',
        'imposto' => '\NuvemFiscal\Model\NfeSefazImposto',
        'imposto_devol' => '\NuvemFiscal\Model\NfeSefazImpostoDevol',
        'inf_ad_prod' => 'string',
        'obs_item' => '\NuvemFiscal\Model\NfeSefazObsItem'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'n_item' => null,
        'prod' => null,
        'imposto' => null,
        'imposto_devol' => null,
        'inf_ad_prod' => null,
        'obs_item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'n_item' => true,
		'prod' => false,
		'imposto' => false,
		'imposto_devol' => false,
		'inf_ad_prod' => true,
		'obs_item' => false
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
        'n_item' => 'nItem',
        'prod' => 'prod',
        'imposto' => 'imposto',
        'imposto_devol' => 'impostoDevol',
        'inf_ad_prod' => 'infAdProd',
        'obs_item' => 'obsItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'n_item' => 'setNItem',
        'prod' => 'setProd',
        'imposto' => 'setImposto',
        'imposto_devol' => 'setImpostoDevol',
        'inf_ad_prod' => 'setInfAdProd',
        'obs_item' => 'setObsItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'n_item' => 'getNItem',
        'prod' => 'getProd',
        'imposto' => 'getImposto',
        'imposto_devol' => 'getImpostoDevol',
        'inf_ad_prod' => 'getInfAdProd',
        'obs_item' => 'getObsItem'
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
        $this->setIfExists('n_item', $data ?? [], null);
        $this->setIfExists('prod', $data ?? [], null);
        $this->setIfExists('imposto', $data ?? [], null);
        $this->setIfExists('imposto_devol', $data ?? [], null);
        $this->setIfExists('inf_ad_prod', $data ?? [], null);
        $this->setIfExists('obs_item', $data ?? [], null);
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

        if ($this->container['n_item'] === null) {
            $invalidProperties[] = "'n_item' can't be null";
        }
        if (($this->container['n_item'] > 990)) {
            $invalidProperties[] = "invalid value for 'n_item', must be smaller than or equal to 990.";
        }

        if (($this->container['n_item'] < 1)) {
            $invalidProperties[] = "invalid value for 'n_item', must be bigger than or equal to 1.";
        }

        if ($this->container['prod'] === null) {
            $invalidProperties[] = "'prod' can't be null";
        }
        if ($this->container['imposto'] === null) {
            $invalidProperties[] = "'imposto' can't be null";
        }
        if (!is_null($this->container['inf_ad_prod']) && (mb_strlen($this->container['inf_ad_prod']) > 500)) {
            $invalidProperties[] = "invalid value for 'inf_ad_prod', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['inf_ad_prod']) && (mb_strlen($this->container['inf_ad_prod']) < 1)) {
            $invalidProperties[] = "invalid value for 'inf_ad_prod', the character length must be bigger than or equal to 1.";
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
     * Gets n_item
     *
     * @return int
     */
    public function getNItem()
    {
        return $this->container['n_item'];
    }

    /**
     * Sets n_item
     *
     * @param int $n_item Número do item do NF.
     *
     * @return self
     */
    public function setNItem($n_item)
    {
        if (is_null($n_item)) {
            array_push($this->openAPINullablesSetToNull, 'n_item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($n_item) && ($n_item > 990)) {
            throw new \InvalidArgumentException('invalid value for $n_item when calling NfeSefazDet., must be smaller than or equal to 990.');
        }
        if (!is_null($n_item) && ($n_item < 1)) {
            throw new \InvalidArgumentException('invalid value for $n_item when calling NfeSefazDet., must be bigger than or equal to 1.');
        }

        $this->container['n_item'] = $n_item;

        return $this;
    }

    /**
     * Gets prod
     *
     * @return \NuvemFiscal\Model\NfeSefazProd
     */
    public function getProd()
    {
        return $this->container['prod'];
    }

    /**
     * Sets prod
     *
     * @param \NuvemFiscal\Model\NfeSefazProd $prod prod
     *
     * @return self
     */
    public function setProd($prod)
    {
        if (is_null($prod)) {
            throw new \InvalidArgumentException('non-nullable prod cannot be null');
        }
        $this->container['prod'] = $prod;

        return $this;
    }

    /**
     * Gets imposto
     *
     * @return \NuvemFiscal\Model\NfeSefazImposto
     */
    public function getImposto()
    {
        return $this->container['imposto'];
    }

    /**
     * Sets imposto
     *
     * @param \NuvemFiscal\Model\NfeSefazImposto $imposto imposto
     *
     * @return self
     */
    public function setImposto($imposto)
    {
        if (is_null($imposto)) {
            throw new \InvalidArgumentException('non-nullable imposto cannot be null');
        }
        $this->container['imposto'] = $imposto;

        return $this;
    }

    /**
     * Gets imposto_devol
     *
     * @return \NuvemFiscal\Model\NfeSefazImpostoDevol|null
     */
    public function getImpostoDevol()
    {
        return $this->container['imposto_devol'];
    }

    /**
     * Sets imposto_devol
     *
     * @param \NuvemFiscal\Model\NfeSefazImpostoDevol|null $imposto_devol imposto_devol
     *
     * @return self
     */
    public function setImpostoDevol($imposto_devol)
    {
        if (is_null($imposto_devol)) {
            throw new \InvalidArgumentException('non-nullable imposto_devol cannot be null');
        }
        $this->container['imposto_devol'] = $imposto_devol;

        return $this;
    }

    /**
     * Gets inf_ad_prod
     *
     * @return string|null
     */
    public function getInfAdProd()
    {
        return $this->container['inf_ad_prod'];
    }

    /**
     * Sets inf_ad_prod
     *
     * @param string|null $inf_ad_prod Informações adicionais do produto (norma referenciada, informações complementares, etc).
     *
     * @return self
     */
    public function setInfAdProd($inf_ad_prod)
    {
        if (is_null($inf_ad_prod)) {
            array_push($this->openAPINullablesSetToNull, 'inf_ad_prod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inf_ad_prod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inf_ad_prod) && (mb_strlen($inf_ad_prod) > 500)) {
            throw new \InvalidArgumentException('invalid length for $inf_ad_prod when calling NfeSefazDet., must be smaller than or equal to 500.');
        }
        if (!is_null($inf_ad_prod) && (mb_strlen($inf_ad_prod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inf_ad_prod when calling NfeSefazDet., must be bigger than or equal to 1.');
        }

        $this->container['inf_ad_prod'] = $inf_ad_prod;

        return $this;
    }

    /**
     * Gets obs_item
     *
     * @return \NuvemFiscal\Model\NfeSefazObsItem|null
     */
    public function getObsItem()
    {
        return $this->container['obs_item'];
    }

    /**
     * Sets obs_item
     *
     * @param \NuvemFiscal\Model\NfeSefazObsItem|null $obs_item obs_item
     *
     * @return self
     */
    public function setObsItem($obs_item)
    {
        if (is_null($obs_item)) {
            throw new \InvalidArgumentException('non-nullable obs_item cannot be null');
        }
        $this->container['obs_item'] = $obs_item;

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


