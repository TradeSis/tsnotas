<?php
/**
 * MdfeSefazRespTec
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
 * MdfeSefazRespTec Class Doc Comment
 *
 * @category Class
 * @description Informações do Responsável Técnico pela emissão do DF-e.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MdfeSefazRespTec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MdfeSefazRespTec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cnpj' => 'string',
        'x_contato' => 'string',
        'email' => 'string',
        'fone' => 'string',
        'id_csrt' => 'int',
        'hash_csrt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cnpj' => null,
        'x_contato' => null,
        'email' => null,
        'fone' => null,
        'id_csrt' => null,
        'hash_csrt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cnpj' => true,
		'x_contato' => true,
		'email' => true,
		'fone' => true,
		'id_csrt' => true,
		'hash_csrt' => true
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
        'cnpj' => 'CNPJ',
        'x_contato' => 'xContato',
        'email' => 'email',
        'fone' => 'fone',
        'id_csrt' => 'idCSRT',
        'hash_csrt' => 'hashCSRT'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cnpj' => 'setCnpj',
        'x_contato' => 'setXContato',
        'email' => 'setEmail',
        'fone' => 'setFone',
        'id_csrt' => 'setIdCsrt',
        'hash_csrt' => 'setHashCsrt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cnpj' => 'getCnpj',
        'x_contato' => 'getXContato',
        'email' => 'getEmail',
        'fone' => 'getFone',
        'id_csrt' => 'getIdCsrt',
        'hash_csrt' => 'getHashCsrt'
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
        $this->setIfExists('cnpj', $data ?? [], null);
        $this->setIfExists('x_contato', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fone', $data ?? [], null);
        $this->setIfExists('id_csrt', $data ?? [], null);
        $this->setIfExists('hash_csrt', $data ?? [], null);
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

        if ($this->container['cnpj'] === null) {
            $invalidProperties[] = "'cnpj' can't be null";
        }
        if ($this->container['x_contato'] === null) {
            $invalidProperties[] = "'x_contato' can't be null";
        }
        if ((mb_strlen($this->container['x_contato']) > 60)) {
            $invalidProperties[] = "invalid value for 'x_contato', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['x_contato']) < 2)) {
            $invalidProperties[] = "invalid value for 'x_contato', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 60)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['email']) < 6)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['fone'] === null) {
            $invalidProperties[] = "'fone' can't be null";
        }
        if (!is_null($this->container['id_csrt']) && ($this->container['id_csrt'] > 999)) {
            $invalidProperties[] = "invalid value for 'id_csrt', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['id_csrt']) && ($this->container['id_csrt'] < 0)) {
            $invalidProperties[] = "invalid value for 'id_csrt', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hash_csrt']) && (mb_strlen($this->container['hash_csrt']) > 20)) {
            $invalidProperties[] = "invalid value for 'hash_csrt', the character length must be smaller than or equal to 20.";
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
     * Gets cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->container['cnpj'];
    }

    /**
     * Sets cnpj
     *
     * @param string $cnpj CNPJ da pessoa jurídica responsável técnica pelo sistema utilizado na emissão do documento fiscal eletrônico.  Informar o CNPJ da pessoa jurídica desenvolvedora do sistema utilizado na emissão do documento fiscal eletrônico.
     *
     * @return self
     */
    public function setCnpj($cnpj)
    {
        if (is_null($cnpj)) {
            array_push($this->openAPINullablesSetToNull, 'cnpj');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cnpj', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cnpj'] = $cnpj;

        return $this;
    }

    /**
     * Gets x_contato
     *
     * @return string
     */
    public function getXContato()
    {
        return $this->container['x_contato'];
    }

    /**
     * Sets x_contato
     *
     * @param string $x_contato Nome da pessoa a ser contatada.  Informar o nome da pessoa a ser contatada na empresa desenvolvedora do sistema utilizado na emissão do documento fiscal eletrônico. No caso de pessoa física, informar o respectivo nome.
     *
     * @return self
     */
    public function setXContato($x_contato)
    {
        if (is_null($x_contato)) {
            array_push($this->openAPINullablesSetToNull, 'x_contato');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('x_contato', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($x_contato) && (mb_strlen($x_contato) > 60)) {
            throw new \InvalidArgumentException('invalid length for $x_contato when calling MdfeSefazRespTec., must be smaller than or equal to 60.');
        }
        if (!is_null($x_contato) && (mb_strlen($x_contato) < 2)) {
            throw new \InvalidArgumentException('invalid length for $x_contato when calling MdfeSefazRespTec., must be bigger than or equal to 2.');
        }

        $this->container['x_contato'] = $x_contato;

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
     * @param string $email Email da pessoa jurídica a ser contatada.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email) && (mb_strlen($email) > 60)) {
            throw new \InvalidArgumentException('invalid length for $email when calling MdfeSefazRespTec., must be smaller than or equal to 60.');
        }
        if (!is_null($email) && (mb_strlen($email) < 6)) {
            throw new \InvalidArgumentException('invalid length for $email when calling MdfeSefazRespTec., must be bigger than or equal to 6.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fone
     *
     * @return string
     */
    public function getFone()
    {
        return $this->container['fone'];
    }

    /**
     * Sets fone
     *
     * @param string $fone Telefone da pessoa jurídica a ser contatada.  Preencher com o Código DDD + número do telefone.
     *
     * @return self
     */
    public function setFone($fone)
    {
        if (is_null($fone)) {
            array_push($this->openAPINullablesSetToNull, 'fone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fone'] = $fone;

        return $this;
    }

    /**
     * Gets id_csrt
     *
     * @return int|null
     */
    public function getIdCsrt()
    {
        return $this->container['id_csrt'];
    }

    /**
     * Sets id_csrt
     *
     * @param int|null $id_csrt Identificador do código de segurança do responsável técnico.  Identificador do CSRT utilizado para geração do hash.
     *
     * @return self
     */
    public function setIdCsrt($id_csrt)
    {
        if (is_null($id_csrt)) {
            array_push($this->openAPINullablesSetToNull, 'id_csrt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_csrt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($id_csrt) && ($id_csrt > 999)) {
            throw new \InvalidArgumentException('invalid value for $id_csrt when calling MdfeSefazRespTec., must be smaller than or equal to 999.');
        }
        if (!is_null($id_csrt) && ($id_csrt < 0)) {
            throw new \InvalidArgumentException('invalid value for $id_csrt when calling MdfeSefazRespTec., must be bigger than or equal to 0.');
        }

        $this->container['id_csrt'] = $id_csrt;

        return $this;
    }

    /**
     * Gets hash_csrt
     *
     * @return string|null
     */
    public function getHashCsrt()
    {
        return $this->container['hash_csrt'];
    }

    /**
     * Sets hash_csrt
     *
     * @param string|null $hash_csrt Hash do token do código de segurança do responsável técnico.  O hashCSRT é o resultado das funções SHA-1 e base64 do token CSRT fornecido pelo fisco + chave de acesso do DF-e. (Implementação em futura NT)  Observação: 28 caracteres são representados no schema como 20 bytes do tipo base64Binary.
     *
     * @return self
     */
    public function setHashCsrt($hash_csrt)
    {
        if (is_null($hash_csrt)) {
            array_push($this->openAPINullablesSetToNull, 'hash_csrt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash_csrt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($hash_csrt) && (mb_strlen($hash_csrt) > 20)) {
            throw new \InvalidArgumentException('invalid length for $hash_csrt when calling MdfeSefazRespTec., must be smaller than or equal to 20.');
        }

        $this->container['hash_csrt'] = $hash_csrt;

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


