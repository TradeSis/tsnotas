<?php
/**
 * Empresa
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
 * Empresa Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Empresa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Empresa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cpf_cnpj' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'inscricao_estadual' => 'string',
        'inscricao_municipal' => 'string',
        'nome_razao_social' => 'string',
        'nome_fantasia' => 'string',
        'fone' => 'string',
        'email' => 'string',
        'endereco' => '\NuvemFiscal\Model\EmpresaEndereco'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cpf_cnpj' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'inscricao_estadual' => null,
        'inscricao_municipal' => null,
        'nome_razao_social' => null,
        'nome_fantasia' => null,
        'fone' => null,
        'email' => null,
        'endereco' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cpf_cnpj' => false,
		'created_at' => false,
		'updated_at' => false,
		'inscricao_estadual' => false,
		'inscricao_municipal' => false,
		'nome_razao_social' => false,
		'nome_fantasia' => false,
		'fone' => false,
		'email' => false,
		'endereco' => false
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
        'cpf_cnpj' => 'cpf_cnpj',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'inscricao_estadual' => 'inscricao_estadual',
        'inscricao_municipal' => 'inscricao_municipal',
        'nome_razao_social' => 'nome_razao_social',
        'nome_fantasia' => 'nome_fantasia',
        'fone' => 'fone',
        'email' => 'email',
        'endereco' => 'endereco'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpf_cnpj' => 'setCpfCnpj',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'inscricao_estadual' => 'setInscricaoEstadual',
        'inscricao_municipal' => 'setInscricaoMunicipal',
        'nome_razao_social' => 'setNomeRazaoSocial',
        'nome_fantasia' => 'setNomeFantasia',
        'fone' => 'setFone',
        'email' => 'setEmail',
        'endereco' => 'setEndereco'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpf_cnpj' => 'getCpfCnpj',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'inscricao_estadual' => 'getInscricaoEstadual',
        'inscricao_municipal' => 'getInscricaoMunicipal',
        'nome_razao_social' => 'getNomeRazaoSocial',
        'nome_fantasia' => 'getNomeFantasia',
        'fone' => 'getFone',
        'email' => 'getEmail',
        'endereco' => 'getEndereco'
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
        $this->setIfExists('cpf_cnpj', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('inscricao_estadual', $data ?? [], null);
        $this->setIfExists('inscricao_municipal', $data ?? [], null);
        $this->setIfExists('nome_razao_social', $data ?? [], null);
        $this->setIfExists('nome_fantasia', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('endereco', $data ?? [], null);
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

        if ($this->container['cpf_cnpj'] === null) {
            $invalidProperties[] = "'cpf_cnpj' can't be null";
        }
        if (!is_null($this->container['inscricao_estadual']) && (mb_strlen($this->container['inscricao_estadual']) > 50)) {
            $invalidProperties[] = "invalid value for 'inscricao_estadual', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['inscricao_municipal']) && (mb_strlen($this->container['inscricao_municipal']) > 50)) {
            $invalidProperties[] = "invalid value for 'inscricao_municipal', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['nome_razao_social'] === null) {
            $invalidProperties[] = "'nome_razao_social' can't be null";
        }
        if ((mb_strlen($this->container['nome_razao_social']) > 500)) {
            $invalidProperties[] = "invalid value for 'nome_razao_social', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['nome_fantasia']) && (mb_strlen($this->container['nome_fantasia']) > 500)) {
            $invalidProperties[] = "invalid value for 'nome_fantasia', the character length must be smaller than or equal to 500.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['endereco'] === null) {
            $invalidProperties[] = "'endereco' can't be null";
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
     * Gets cpf_cnpj
     *
     * @return string
     */
    public function getCpfCnpj()
    {
        return $this->container['cpf_cnpj'];
    }

    /**
     * Sets cpf_cnpj
     *
     * @param string $cpf_cnpj CPF ou CNPJ da empresa.    *Utilize o valor sem máscara*.
     *
     * @return self
     */
    public function setCpfCnpj($cpf_cnpj)
    {
        if (is_null($cpf_cnpj)) {
            throw new \InvalidArgumentException('non-nullable cpf_cnpj cannot be null');
        }
        $this->container['cpf_cnpj'] = $cpf_cnpj;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Data/hora em que o objeto foi criado na Nuvem Fiscal. Representado no formato <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"blank\">`ISO 8601`</a>.    *A Nuvem Fiscal gerencia esse campo automaticamente. Caso algum valor seja enviado, ele será ignorado*.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Data e hora que o objeto foi alterado pela última vez na Nuvem Fiscal. Representado no formato <a href=\"https://en.wikipedia.org/wiki/ISO_8601\" target=\"blank\">`ISO 8601`</a>.    *A Nuvem Fiscal gerencia esse campo automaticamente. Caso algum valor seja enviado, ele será ignorado*.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets inscricao_estadual
     *
     * @return string|null
     */
    public function getInscricaoEstadual()
    {
        return $this->container['inscricao_estadual'];
    }

    /**
     * Sets inscricao_estadual
     *
     * @param string|null $inscricao_estadual Inscrição estadual da empresa.
     *
     * @return self
     */
    public function setInscricaoEstadual($inscricao_estadual)
    {
        if (is_null($inscricao_estadual)) {
            throw new \InvalidArgumentException('non-nullable inscricao_estadual cannot be null');
        }
        if ((mb_strlen($inscricao_estadual) > 50)) {
            throw new \InvalidArgumentException('invalid length for $inscricao_estadual when calling Empresa., must be smaller than or equal to 50.');
        }

        $this->container['inscricao_estadual'] = $inscricao_estadual;

        return $this;
    }

    /**
     * Gets inscricao_municipal
     *
     * @return string|null
     */
    public function getInscricaoMunicipal()
    {
        return $this->container['inscricao_municipal'];
    }

    /**
     * Sets inscricao_municipal
     *
     * @param string|null $inscricao_municipal Inscrição municipal da empresa.
     *
     * @return self
     */
    public function setInscricaoMunicipal($inscricao_municipal)
    {
        if (is_null($inscricao_municipal)) {
            throw new \InvalidArgumentException('non-nullable inscricao_municipal cannot be null');
        }
        if ((mb_strlen($inscricao_municipal) > 50)) {
            throw new \InvalidArgumentException('invalid length for $inscricao_municipal when calling Empresa., must be smaller than or equal to 50.');
        }

        $this->container['inscricao_municipal'] = $inscricao_municipal;

        return $this;
    }

    /**
     * Gets nome_razao_social
     *
     * @return string
     */
    public function getNomeRazaoSocial()
    {
        return $this->container['nome_razao_social'];
    }

    /**
     * Sets nome_razao_social
     *
     * @param string $nome_razao_social Razão social da empresa.
     *
     * @return self
     */
    public function setNomeRazaoSocial($nome_razao_social)
    {
        if (is_null($nome_razao_social)) {
            throw new \InvalidArgumentException('non-nullable nome_razao_social cannot be null');
        }
        if ((mb_strlen($nome_razao_social) > 500)) {
            throw new \InvalidArgumentException('invalid length for $nome_razao_social when calling Empresa., must be smaller than or equal to 500.');
        }

        $this->container['nome_razao_social'] = $nome_razao_social;

        return $this;
    }

    /**
     * Gets nome_fantasia
     *
     * @return string|null
     */
    public function getNomeFantasia()
    {
        return $this->container['nome_fantasia'];
    }

    /**
     * Sets nome_fantasia
     *
     * @param string|null $nome_fantasia Nome fantasia da empresa.
     *
     * @return self
     */
    public function setNomeFantasia($nome_fantasia)
    {
        if (is_null($nome_fantasia)) {
            throw new \InvalidArgumentException('non-nullable nome_fantasia cannot be null');
        }
        if ((mb_strlen($nome_fantasia) > 500)) {
            throw new \InvalidArgumentException('invalid length for $nome_fantasia when calling Empresa., must be smaller than or equal to 500.');
        }

        $this->container['nome_fantasia'] = $nome_fantasia;

        return $this;
    }

    /**
     * Gets fone
     *
     * @return string|null
     */
    public function getFone()
    {
        return $this->container['fone'];
    }

    /**
     * Sets fone
     *
     * @param string|null $fone Telefone da empresa.
     *
     * @return self
     */
    public function setFone($fone)
    {
        if (is_null($fone)) {
            throw new \InvalidArgumentException('non-nullable fone cannot be null');
        }
        $this->container['fone'] = $fone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email da empresa.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets endereco
     *
     * @return \NuvemFiscal\Model\EmpresaEndereco
     */
    public function getEndereco()
    {
        return $this->container['endereco'];
    }

    /**
     * Sets endereco
     *
     * @param \NuvemFiscal\Model\EmpresaEndereco $endereco endereco
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        if (is_null($endereco)) {
            throw new \InvalidArgumentException('non-nullable endereco cannot be null');
        }
        $this->container['endereco'] = $endereco;

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


