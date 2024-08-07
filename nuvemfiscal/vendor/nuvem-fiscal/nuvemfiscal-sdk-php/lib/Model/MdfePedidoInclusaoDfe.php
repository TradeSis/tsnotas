<?php
/**
 * MdfePedidoInclusaoDfe
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
 * MdfePedidoInclusaoDfe Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfePedidoInclusaoDfe implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfePedidoInclusaoDfe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codigo_municipio_carrega' => 'string',
        'municipio_carrega' => 'string',
        'documentos' => '\NuvemFiscal\Model\MdfeDocumentoVinculado[]',
        'protocolo_autorizacao' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'codigo_municipio_carrega' => null,
        'municipio_carrega' => null,
        'documentos' => null,
        'protocolo_autorizacao' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'codigo_municipio_carrega' => false,
		'municipio_carrega' => false,
		'documentos' => false,
		'protocolo_autorizacao' => false
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
        'codigo_municipio_carrega' => 'codigo_municipio_carrega',
        'municipio_carrega' => 'municipio_carrega',
        'documentos' => 'documentos',
        'protocolo_autorizacao' => 'protocolo_autorizacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_municipio_carrega' => 'setCodigoMunicipioCarrega',
        'municipio_carrega' => 'setMunicipioCarrega',
        'documentos' => 'setDocumentos',
        'protocolo_autorizacao' => 'setProtocoloAutorizacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_municipio_carrega' => 'getCodigoMunicipioCarrega',
        'municipio_carrega' => 'getMunicipioCarrega',
        'documentos' => 'getDocumentos',
        'protocolo_autorizacao' => 'getProtocoloAutorizacao'
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
        $this->setIfExists('codigo_municipio_carrega', $data ?? [], null);
        $this->setIfExists('municipio_carrega', $data ?? [], null);
        $this->setIfExists('documentos', $data ?? [], null);
        $this->setIfExists('protocolo_autorizacao', $data ?? [], null);
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
     * Gets codigo_municipio_carrega
     *
     * @return string|null
     */
    public function getCodigoMunicipioCarrega()
    {
        return $this->container['codigo_municipio_carrega'];
    }

    /**
     * Sets codigo_municipio_carrega
     *
     * @param string|null $codigo_municipio_carrega Código do Município de carregamento.
     *
     * @return self
     */
    public function setCodigoMunicipioCarrega($codigo_municipio_carrega)
    {
        if (is_null($codigo_municipio_carrega)) {
            throw new \InvalidArgumentException('non-nullable codigo_municipio_carrega cannot be null');
        }
        $this->container['codigo_municipio_carrega'] = $codigo_municipio_carrega;

        return $this;
    }

    /**
     * Gets municipio_carrega
     *
     * @return string|null
     */
    public function getMunicipioCarrega()
    {
        return $this->container['municipio_carrega'];
    }

    /**
     * Sets municipio_carrega
     *
     * @param string|null $municipio_carrega Nome do Município de carregamento.
     *
     * @return self
     */
    public function setMunicipioCarrega($municipio_carrega)
    {
        if (is_null($municipio_carrega)) {
            throw new \InvalidArgumentException('non-nullable municipio_carrega cannot be null');
        }
        $this->container['municipio_carrega'] = $municipio_carrega;

        return $this;
    }

    /**
     * Gets documentos
     *
     * @return \NuvemFiscal\Model\MdfeDocumentoVinculado[]|null
     */
    public function getDocumentos()
    {
        return $this->container['documentos'];
    }

    /**
     * Sets documentos
     *
     * @param \NuvemFiscal\Model\MdfeDocumentoVinculado[]|null $documentos Informações dos documentos fiscais vinculados ao manifesto.
     *
     * @return self
     */
    public function setDocumentos($documentos)
    {
        if (is_null($documentos)) {
            throw new \InvalidArgumentException('non-nullable documentos cannot be null');
        }
        $this->container['documentos'] = $documentos;

        return $this;
    }

    /**
     * Gets protocolo_autorizacao
     *
     * @return string|null
     */
    public function getProtocoloAutorizacao()
    {
        return $this->container['protocolo_autorizacao'];
    }

    /**
     * Sets protocolo_autorizacao
     *
     * @param string|null $protocolo_autorizacao protocolo_autorizacao
     *
     * @return self
     */
    public function setProtocoloAutorizacao($protocolo_autorizacao)
    {
        if (is_null($protocolo_autorizacao)) {
            throw new \InvalidArgumentException('non-nullable protocolo_autorizacao cannot be null');
        }
        $this->container['protocolo_autorizacao'] = $protocolo_autorizacao;

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


