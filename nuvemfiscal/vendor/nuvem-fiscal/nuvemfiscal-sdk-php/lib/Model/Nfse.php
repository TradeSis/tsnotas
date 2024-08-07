<?php
/**
 * Nfse
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
 * Nfse Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Nfse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Nfse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'status' => 'string',
        'numero' => 'string',
        'codigo_verificacao' => 'string',
        'link_url' => 'string',
        'data_emissao' => '\DateTime',
        'ambiente' => 'string',
        'referencia' => 'string',
        'dps' => '\NuvemFiscal\Model\DPS',
        'cancelamento' => '\NuvemFiscal\Model\NfseCancelamento',
        'mensagens' => '\NuvemFiscal\Model\NfseMensagemRetorno[]',
        'declaracao_prestacao_servico' => '\NuvemFiscal\Model\Rps'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'status' => null,
        'numero' => null,
        'codigo_verificacao' => null,
        'link_url' => null,
        'data_emissao' => 'date-time',
        'ambiente' => null,
        'referencia' => null,
        'dps' => null,
        'cancelamento' => null,
        'mensagens' => null,
        'declaracao_prestacao_servico' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_at' => false,
		'status' => false,
		'numero' => false,
		'codigo_verificacao' => false,
		'link_url' => false,
		'data_emissao' => true,
		'ambiente' => false,
		'referencia' => false,
		'dps' => false,
		'cancelamento' => false,
		'mensagens' => false,
		'declaracao_prestacao_servico' => false
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
        'id' => 'id',
        'created_at' => 'created_at',
        'status' => 'status',
        'numero' => 'numero',
        'codigo_verificacao' => 'codigo_verificacao',
        'link_url' => 'link_url',
        'data_emissao' => 'data_emissao',
        'ambiente' => 'ambiente',
        'referencia' => 'referencia',
        'dps' => 'DPS',
        'cancelamento' => 'cancelamento',
        'mensagens' => 'mensagens',
        'declaracao_prestacao_servico' => 'declaracao_prestacao_servico'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'status' => 'setStatus',
        'numero' => 'setNumero',
        'codigo_verificacao' => 'setCodigoVerificacao',
        'link_url' => 'setLinkUrl',
        'data_emissao' => 'setDataEmissao',
        'ambiente' => 'setAmbiente',
        'referencia' => 'setReferencia',
        'dps' => 'setDps',
        'cancelamento' => 'setCancelamento',
        'mensagens' => 'setMensagens',
        'declaracao_prestacao_servico' => 'setDeclaracaoPrestacaoServico'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'status' => 'getStatus',
        'numero' => 'getNumero',
        'codigo_verificacao' => 'getCodigoVerificacao',
        'link_url' => 'getLinkUrl',
        'data_emissao' => 'getDataEmissao',
        'ambiente' => 'getAmbiente',
        'referencia' => 'getReferencia',
        'dps' => 'getDps',
        'cancelamento' => 'getCancelamento',
        'mensagens' => 'getMensagens',
        'declaracao_prestacao_servico' => 'getDeclaracaoPrestacaoServico'
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

    public const STATUS_PROCESSANDO = 'processando';
    public const STATUS_AUTORIZADA = 'autorizada';
    public const STATUS_NEGADA = 'negada';
    public const STATUS_CANCELADA = 'cancelada';
    public const STATUS_SUBSTITUIDA = 'substituida';
    public const STATUS_ERRO = 'erro';
    public const AMBIENTE_HOMOLOGACAO = 'homologacao';
    public const AMBIENTE_PRODUCAO = 'producao';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSANDO,
            self::STATUS_AUTORIZADA,
            self::STATUS_NEGADA,
            self::STATUS_CANCELADA,
            self::STATUS_SUBSTITUIDA,
            self::STATUS_ERRO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAmbienteAllowableValues()
    {
        return [
            self::AMBIENTE_HOMOLOGACAO,
            self::AMBIENTE_PRODUCAO,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('codigo_verificacao', $data ?? [], null);
        $this->setIfExists('link_url', $data ?? [], null);
        $this->setIfExists('data_emissao', $data ?? [], null);
        $this->setIfExists('ambiente', $data ?? [], null);
        $this->setIfExists('referencia', $data ?? [], null);
        $this->setIfExists('dps', $data ?? [], null);
        $this->setIfExists('cancelamento', $data ?? [], null);
        $this->setIfExists('mensagens', $data ?? [], null);
        $this->setIfExists('declaracao_prestacao_servico', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAmbienteAllowableValues();
        if (!is_null($this->container['ambiente']) && !in_array($this->container['ambiente'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ambiente', must be one of '%s'",
                $this->container['ambiente'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID único da nota gerado automaticamente pela Nuvem Fiscal.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * @param \DateTime|null $created_at created_at
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets numero
     *
     * @return string|null
     */
    public function getNumero()
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param string|null $numero numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        if (is_null($numero)) {
            throw new \InvalidArgumentException('non-nullable numero cannot be null');
        }
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets codigo_verificacao
     *
     * @return string|null
     */
    public function getCodigoVerificacao()
    {
        return $this->container['codigo_verificacao'];
    }

    /**
     * Sets codigo_verificacao
     *
     * @param string|null $codigo_verificacao codigo_verificacao
     *
     * @return self
     */
    public function setCodigoVerificacao($codigo_verificacao)
    {
        if (is_null($codigo_verificacao)) {
            throw new \InvalidArgumentException('non-nullable codigo_verificacao cannot be null');
        }
        $this->container['codigo_verificacao'] = $codigo_verificacao;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string|null
     */
    public function getLinkUrl()
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     *
     * @param string|null $link_url link_url
     *
     * @return self
     */
    public function setLinkUrl($link_url)
    {
        if (is_null($link_url)) {
            throw new \InvalidArgumentException('non-nullable link_url cannot be null');
        }
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets data_emissao
     *
     * @return \DateTime|null
     */
    public function getDataEmissao()
    {
        return $this->container['data_emissao'];
    }

    /**
     * Sets data_emissao
     *
     * @param \DateTime|null $data_emissao data_emissao
     *
     * @return self
     */
    public function setDataEmissao($data_emissao)
    {
        if (is_null($data_emissao)) {
            array_push($this->openAPINullablesSetToNull, 'data_emissao');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_emissao', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_emissao'] = $data_emissao;

        return $this;
    }

    /**
     * Gets ambiente
     *
     * @return string|null
     */
    public function getAmbiente()
    {
        return $this->container['ambiente'];
    }

    /**
     * Sets ambiente
     *
     * @param string|null $ambiente ambiente
     *
     * @return self
     */
    public function setAmbiente($ambiente)
    {
        if (is_null($ambiente)) {
            throw new \InvalidArgumentException('non-nullable ambiente cannot be null');
        }
        $allowedValues = $this->getAmbienteAllowableValues();
        if (!in_array($ambiente, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ambiente', must be one of '%s'",
                    $ambiente,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ambiente'] = $ambiente;

        return $this;
    }

    /**
     * Gets referencia
     *
     * @return string|null
     */
    public function getReferencia()
    {
        return $this->container['referencia'];
    }

    /**
     * Sets referencia
     *
     * @param string|null $referencia referencia
     *
     * @return self
     */
    public function setReferencia($referencia)
    {
        if (is_null($referencia)) {
            throw new \InvalidArgumentException('non-nullable referencia cannot be null');
        }
        $this->container['referencia'] = $referencia;

        return $this;
    }

    /**
     * Gets dps
     *
     * @return \NuvemFiscal\Model\DPS|null
     */
    public function getDps()
    {
        return $this->container['dps'];
    }

    /**
     * Sets dps
     *
     * @param \NuvemFiscal\Model\DPS|null $dps dps
     *
     * @return self
     */
    public function setDps($dps)
    {
        if (is_null($dps)) {
            throw new \InvalidArgumentException('non-nullable dps cannot be null');
        }
        $this->container['dps'] = $dps;

        return $this;
    }

    /**
     * Gets cancelamento
     *
     * @return \NuvemFiscal\Model\NfseCancelamento|null
     */
    public function getCancelamento()
    {
        return $this->container['cancelamento'];
    }

    /**
     * Sets cancelamento
     *
     * @param \NuvemFiscal\Model\NfseCancelamento|null $cancelamento cancelamento
     *
     * @return self
     */
    public function setCancelamento($cancelamento)
    {
        if (is_null($cancelamento)) {
            throw new \InvalidArgumentException('non-nullable cancelamento cannot be null');
        }
        $this->container['cancelamento'] = $cancelamento;

        return $this;
    }

    /**
     * Gets mensagens
     *
     * @return \NuvemFiscal\Model\NfseMensagemRetorno[]|null
     */
    public function getMensagens()
    {
        return $this->container['mensagens'];
    }

    /**
     * Sets mensagens
     *
     * @param \NuvemFiscal\Model\NfseMensagemRetorno[]|null $mensagens mensagens
     *
     * @return self
     */
    public function setMensagens($mensagens)
    {
        if (is_null($mensagens)) {
            throw new \InvalidArgumentException('non-nullable mensagens cannot be null');
        }
        $this->container['mensagens'] = $mensagens;

        return $this;
    }

    /**
     * Gets declaracao_prestacao_servico
     *
     * @return \NuvemFiscal\Model\Rps|null
     */
    public function getDeclaracaoPrestacaoServico()
    {
        return $this->container['declaracao_prestacao_servico'];
    }

    /**
     * Sets declaracao_prestacao_servico
     *
     * @param \NuvemFiscal\Model\Rps|null $declaracao_prestacao_servico declaracao_prestacao_servico
     *
     * @return self
     */
    public function setDeclaracaoPrestacaoServico($declaracao_prestacao_servico)
    {
        if (is_null($declaracao_prestacao_servico)) {
            throw new \InvalidArgumentException('non-nullable declaracao_prestacao_servico cannot be null');
        }
        $this->container['declaracao_prestacao_servico'] = $declaracao_prestacao_servico;

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


