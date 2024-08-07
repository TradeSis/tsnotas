<?php
/**
 * NfeSefazICMS15
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
 * NfeSefazICMS15 Class Doc Comment
 *
 * @category Class
 * @description Tributação monofásica própria e com responsabilidade pela retenção sobre combustíveis.
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NfeSefazICMS15 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NfeSefazICMS15';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orig' => 'int',
        'cst' => 'string',
        'q_bc_mono' => 'float',
        'ad_rem_icms' => 'float',
        'v_icms_mono' => 'float',
        'q_bc_mono_reten' => 'float',
        'ad_rem_icms_reten' => 'float',
        'v_icms_mono_reten' => 'float',
        'p_red_ad_rem' => 'float',
        'mot_red_ad_rem' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orig' => null,
        'cst' => null,
        'q_bc_mono' => null,
        'ad_rem_icms' => null,
        'v_icms_mono' => null,
        'q_bc_mono_reten' => null,
        'ad_rem_icms_reten' => null,
        'v_icms_mono_reten' => null,
        'p_red_ad_rem' => null,
        'mot_red_ad_rem' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orig' => true,
		'cst' => true,
		'q_bc_mono' => true,
		'ad_rem_icms' => true,
		'v_icms_mono' => true,
		'q_bc_mono_reten' => true,
		'ad_rem_icms_reten' => true,
		'v_icms_mono_reten' => true,
		'p_red_ad_rem' => true,
		'mot_red_ad_rem' => true
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
        'orig' => 'orig',
        'cst' => 'CST',
        'q_bc_mono' => 'qBCMono',
        'ad_rem_icms' => 'adRemICMS',
        'v_icms_mono' => 'vICMSMono',
        'q_bc_mono_reten' => 'qBCMonoReten',
        'ad_rem_icms_reten' => 'adRemICMSReten',
        'v_icms_mono_reten' => 'vICMSMonoReten',
        'p_red_ad_rem' => 'pRedAdRem',
        'mot_red_ad_rem' => 'motRedAdRem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orig' => 'setOrig',
        'cst' => 'setCst',
        'q_bc_mono' => 'setQBcMono',
        'ad_rem_icms' => 'setAdRemIcms',
        'v_icms_mono' => 'setVIcmsMono',
        'q_bc_mono_reten' => 'setQBcMonoReten',
        'ad_rem_icms_reten' => 'setAdRemIcmsReten',
        'v_icms_mono_reten' => 'setVIcmsMonoReten',
        'p_red_ad_rem' => 'setPRedAdRem',
        'mot_red_ad_rem' => 'setMotRedAdRem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orig' => 'getOrig',
        'cst' => 'getCst',
        'q_bc_mono' => 'getQBcMono',
        'ad_rem_icms' => 'getAdRemIcms',
        'v_icms_mono' => 'getVIcmsMono',
        'q_bc_mono_reten' => 'getQBcMonoReten',
        'ad_rem_icms_reten' => 'getAdRemIcmsReten',
        'v_icms_mono_reten' => 'getVIcmsMonoReten',
        'p_red_ad_rem' => 'getPRedAdRem',
        'mot_red_ad_rem' => 'getMotRedAdRem'
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
        $this->setIfExists('orig', $data ?? [], null);
        $this->setIfExists('cst', $data ?? [], null);
        $this->setIfExists('q_bc_mono', $data ?? [], null);
        $this->setIfExists('ad_rem_icms', $data ?? [], null);
        $this->setIfExists('v_icms_mono', $data ?? [], null);
        $this->setIfExists('q_bc_mono_reten', $data ?? [], null);
        $this->setIfExists('ad_rem_icms_reten', $data ?? [], null);
        $this->setIfExists('v_icms_mono_reten', $data ?? [], null);
        $this->setIfExists('p_red_ad_rem', $data ?? [], null);
        $this->setIfExists('mot_red_ad_rem', $data ?? [], null);
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

        if ($this->container['orig'] === null) {
            $invalidProperties[] = "'orig' can't be null";
        }
        if ($this->container['cst'] === null) {
            $invalidProperties[] = "'cst' can't be null";
        }
        if ($this->container['ad_rem_icms'] === null) {
            $invalidProperties[] = "'ad_rem_icms' can't be null";
        }
        if ($this->container['v_icms_mono'] === null) {
            $invalidProperties[] = "'v_icms_mono' can't be null";
        }
        if ($this->container['ad_rem_icms_reten'] === null) {
            $invalidProperties[] = "'ad_rem_icms_reten' can't be null";
        }
        if ($this->container['v_icms_mono_reten'] === null) {
            $invalidProperties[] = "'v_icms_mono_reten' can't be null";
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
     * Gets orig
     *
     * @return int
     */
    public function getOrig()
    {
        return $this->container['orig'];
    }

    /**
     * Sets orig
     *
     * @param int $orig Origem da mercadoria:  * 0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;  * 1 - Estrangeira - Importação direta, exceto a indicada no código 6;  * 2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7;  * 3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%% e inferior ou igual a 70%%;  * 4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;  * 5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%%;  * 6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;  * 7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural;  * 8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%%.
     *
     * @return self
     */
    public function setOrig($orig)
    {
        if (is_null($orig)) {
            array_push($this->openAPINullablesSetToNull, 'orig');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orig', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['orig'] = $orig;

        return $this;
    }

    /**
     * Gets cst
     *
     * @return string
     */
    public function getCst()
    {
        return $this->container['cst'];
    }

    /**
     * Sets cst
     *
     * @param string $cst Tributção pelo ICMS  * 15 - Tributação monofásica própria e com responsabilidade pela retenção sobre combustíveis
     *
     * @return self
     */
    public function setCst($cst)
    {
        if (is_null($cst)) {
            array_push($this->openAPINullablesSetToNull, 'cst');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cst', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cst'] = $cst;

        return $this;
    }

    /**
     * Gets q_bc_mono
     *
     * @return float|null
     */
    public function getQBcMono()
    {
        return $this->container['q_bc_mono'];
    }

    /**
     * Sets q_bc_mono
     *
     * @param float|null $q_bc_mono Quantidade tributada.
     *
     * @return self
     */
    public function setQBcMono($q_bc_mono)
    {
        if (is_null($q_bc_mono)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_mono');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_mono', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_bc_mono'] = $q_bc_mono;

        return $this;
    }

    /**
     * Gets ad_rem_icms
     *
     * @return float
     */
    public function getAdRemIcms()
    {
        return $this->container['ad_rem_icms'];
    }

    /**
     * Sets ad_rem_icms
     *
     * @param float $ad_rem_icms Alíquota ad rem do imposto.
     *
     * @return self
     */
    public function setAdRemIcms($ad_rem_icms)
    {
        if (is_null($ad_rem_icms)) {
            array_push($this->openAPINullablesSetToNull, 'ad_rem_icms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_rem_icms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ad_rem_icms'] = $ad_rem_icms;

        return $this;
    }

    /**
     * Gets v_icms_mono
     *
     * @return float
     */
    public function getVIcmsMono()
    {
        return $this->container['v_icms_mono'];
    }

    /**
     * Sets v_icms_mono
     *
     * @param float $v_icms_mono Valor do ICMS próprio.
     *
     * @return self
     */
    public function setVIcmsMono($v_icms_mono)
    {
        if (is_null($v_icms_mono)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_mono');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_mono', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_icms_mono'] = $v_icms_mono;

        return $this;
    }

    /**
     * Gets q_bc_mono_reten
     *
     * @return float|null
     */
    public function getQBcMonoReten()
    {
        return $this->container['q_bc_mono_reten'];
    }

    /**
     * Sets q_bc_mono_reten
     *
     * @param float|null $q_bc_mono_reten Quantidade tributada sujeita a retenção.
     *
     * @return self
     */
    public function setQBcMonoReten($q_bc_mono_reten)
    {
        if (is_null($q_bc_mono_reten)) {
            array_push($this->openAPINullablesSetToNull, 'q_bc_mono_reten');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('q_bc_mono_reten', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['q_bc_mono_reten'] = $q_bc_mono_reten;

        return $this;
    }

    /**
     * Gets ad_rem_icms_reten
     *
     * @return float
     */
    public function getAdRemIcmsReten()
    {
        return $this->container['ad_rem_icms_reten'];
    }

    /**
     * Sets ad_rem_icms_reten
     *
     * @param float $ad_rem_icms_reten Alíquota ad rem do imposto com retenção.
     *
     * @return self
     */
    public function setAdRemIcmsReten($ad_rem_icms_reten)
    {
        if (is_null($ad_rem_icms_reten)) {
            array_push($this->openAPINullablesSetToNull, 'ad_rem_icms_reten');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_rem_icms_reten', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ad_rem_icms_reten'] = $ad_rem_icms_reten;

        return $this;
    }

    /**
     * Gets v_icms_mono_reten
     *
     * @return float
     */
    public function getVIcmsMonoReten()
    {
        return $this->container['v_icms_mono_reten'];
    }

    /**
     * Sets v_icms_mono_reten
     *
     * @param float $v_icms_mono_reten Valor do ICMS com retenção.
     *
     * @return self
     */
    public function setVIcmsMonoReten($v_icms_mono_reten)
    {
        if (is_null($v_icms_mono_reten)) {
            array_push($this->openAPINullablesSetToNull, 'v_icms_mono_reten');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('v_icms_mono_reten', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['v_icms_mono_reten'] = $v_icms_mono_reten;

        return $this;
    }

    /**
     * Gets p_red_ad_rem
     *
     * @return float|null
     */
    public function getPRedAdRem()
    {
        return $this->container['p_red_ad_rem'];
    }

    /**
     * Sets p_red_ad_rem
     *
     * @param float|null $p_red_ad_rem Percentual de redução do valor da alíquota ad rem do ICMS.
     *
     * @return self
     */
    public function setPRedAdRem($p_red_ad_rem)
    {
        if (is_null($p_red_ad_rem)) {
            array_push($this->openAPINullablesSetToNull, 'p_red_ad_rem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p_red_ad_rem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p_red_ad_rem'] = $p_red_ad_rem;

        return $this;
    }

    /**
     * Gets mot_red_ad_rem
     *
     * @return int|null
     */
    public function getMotRedAdRem()
    {
        return $this->container['mot_red_ad_rem'];
    }

    /**
     * Sets mot_red_ad_rem
     *
     * @param int|null $mot_red_ad_rem Motivo da redução do adrem  * 1 - Transporte coletivo de passageiros  * 9 - Outros
     *
     * @return self
     */
    public function setMotRedAdRem($mot_red_ad_rem)
    {
        if (is_null($mot_red_ad_rem)) {
            array_push($this->openAPINullablesSetToNull, 'mot_red_ad_rem');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mot_red_ad_rem', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mot_red_ad_rem'] = $mot_red_ad_rem;

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


