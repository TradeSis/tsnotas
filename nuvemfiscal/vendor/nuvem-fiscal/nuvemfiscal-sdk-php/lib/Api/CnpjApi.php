<?php
/**
 * CnpjApi
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

namespace NuvemFiscal\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use NuvemFiscal\ApiException;
use NuvemFiscal\Configuration;
use NuvemFiscal\HeaderSelector;
use NuvemFiscal\ObjectSerializer;

/**
 * CnpjApi Class Doc Comment
 *
 * @category Class
 * @package  NuvemFiscal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CnpjApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'consultarCnpj' => [
            'application/json',
        ],
        'listarCnpj' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation consultarCnpj
     *
     * Consultar dados do CNPJ
     *
     * @param  string $cnpj CNPJ sem máscara. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['consultarCnpj'] to see the possible values for this operation
     *
     * @throws \NuvemFiscal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NuvemFiscal\Model\CnpjEmpresa
     */
    public function consultarCnpj($cnpj, string $contentType = self::contentTypes['consultarCnpj'][0])
    {
        list($response) = $this->consultarCnpjWithHttpInfo($cnpj, $contentType);
        return $response;
    }

    /**
     * Operation consultarCnpjWithHttpInfo
     *
     * Consultar dados do CNPJ
     *
     * @param  string $cnpj CNPJ sem máscara. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['consultarCnpj'] to see the possible values for this operation
     *
     * @throws \NuvemFiscal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NuvemFiscal\Model\CnpjEmpresa, HTTP status code, HTTP response headers (array of strings)
     */
    public function consultarCnpjWithHttpInfo($cnpj, string $contentType = self::contentTypes['consultarCnpj'][0])
    {
        $request = $this->consultarCnpjRequest($cnpj, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\NuvemFiscal\Model\CnpjEmpresa' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\NuvemFiscal\Model\CnpjEmpresa' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NuvemFiscal\Model\CnpjEmpresa', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NuvemFiscal\Model\CnpjEmpresa';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\NuvemFiscal\Model\CnpjEmpresa',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation consultarCnpjAsync
     *
     * Consultar dados do CNPJ
     *
     * @param  string $cnpj CNPJ sem máscara. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['consultarCnpj'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function consultarCnpjAsync($cnpj, string $contentType = self::contentTypes['consultarCnpj'][0])
    {
        return $this->consultarCnpjAsyncWithHttpInfo($cnpj, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation consultarCnpjAsyncWithHttpInfo
     *
     * Consultar dados do CNPJ
     *
     * @param  string $cnpj CNPJ sem máscara. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['consultarCnpj'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function consultarCnpjAsyncWithHttpInfo($cnpj, string $contentType = self::contentTypes['consultarCnpj'][0])
    {
        $returnType = '\NuvemFiscal\Model\CnpjEmpresa';
        $request = $this->consultarCnpjRequest($cnpj, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'consultarCnpj'
     *
     * @param  string $cnpj CNPJ sem máscara. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['consultarCnpj'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function consultarCnpjRequest($cnpj, string $contentType = self::contentTypes['consultarCnpj'][0])
    {

        // verify the required parameter 'cnpj' is set
        if ($cnpj === null || (is_array($cnpj) && count($cnpj) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cnpj when calling consultarCnpj'
            );
        }


        $resourcePath = '/cnpj/{Cnpj}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($cnpj !== null) {
            $resourcePath = str_replace(
                '{' . 'Cnpj' . '}',
                ObjectSerializer::toPathValue($cnpj),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listarCnpj
     *
     * Listar estabelecimentos ativos a partir da base de CNPJ
     *
     * @param  string $cnae_principal Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $municipio Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $natureza_juridica Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara. (required)
     * @param  int $top Limite no número de objetos a serem retornados pela API, entre 1 e 100. (optional, default to 10)
     * @param  int $skip Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. (optional, default to 0)
     * @param  bool $inlinecount Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listarCnpj'] to see the possible values for this operation
     *
     * @throws \NuvemFiscal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NuvemFiscal\Model\CnpjListagem
     */
    public function listarCnpj($cnae_principal, $municipio, $natureza_juridica, $top = 10, $skip = 0, $inlinecount = false, string $contentType = self::contentTypes['listarCnpj'][0])
    {
        list($response) = $this->listarCnpjWithHttpInfo($cnae_principal, $municipio, $natureza_juridica, $top, $skip, $inlinecount, $contentType);
        return $response;
    }

    /**
     * Operation listarCnpjWithHttpInfo
     *
     * Listar estabelecimentos ativos a partir da base de CNPJ
     *
     * @param  string $cnae_principal Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $municipio Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $natureza_juridica Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara. (required)
     * @param  int $top Limite no número de objetos a serem retornados pela API, entre 1 e 100. (optional, default to 10)
     * @param  int $skip Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. (optional, default to 0)
     * @param  bool $inlinecount Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listarCnpj'] to see the possible values for this operation
     *
     * @throws \NuvemFiscal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NuvemFiscal\Model\CnpjListagem, HTTP status code, HTTP response headers (array of strings)
     */
    public function listarCnpjWithHttpInfo($cnae_principal, $municipio, $natureza_juridica, $top = 10, $skip = 0, $inlinecount = false, string $contentType = self::contentTypes['listarCnpj'][0])
    {
        $request = $this->listarCnpjRequest($cnae_principal, $municipio, $natureza_juridica, $top, $skip, $inlinecount, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\NuvemFiscal\Model\CnpjListagem' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\NuvemFiscal\Model\CnpjListagem' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NuvemFiscal\Model\CnpjListagem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NuvemFiscal\Model\CnpjListagem';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\NuvemFiscal\Model\CnpjListagem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listarCnpjAsync
     *
     * Listar estabelecimentos ativos a partir da base de CNPJ
     *
     * @param  string $cnae_principal Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $municipio Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $natureza_juridica Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara. (required)
     * @param  int $top Limite no número de objetos a serem retornados pela API, entre 1 e 100. (optional, default to 10)
     * @param  int $skip Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. (optional, default to 0)
     * @param  bool $inlinecount Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listarCnpj'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listarCnpjAsync($cnae_principal, $municipio, $natureza_juridica, $top = 10, $skip = 0, $inlinecount = false, string $contentType = self::contentTypes['listarCnpj'][0])
    {
        return $this->listarCnpjAsyncWithHttpInfo($cnae_principal, $municipio, $natureza_juridica, $top, $skip, $inlinecount, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listarCnpjAsyncWithHttpInfo
     *
     * Listar estabelecimentos ativos a partir da base de CNPJ
     *
     * @param  string $cnae_principal Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $municipio Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $natureza_juridica Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara. (required)
     * @param  int $top Limite no número de objetos a serem retornados pela API, entre 1 e 100. (optional, default to 10)
     * @param  int $skip Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. (optional, default to 0)
     * @param  bool $inlinecount Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listarCnpj'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listarCnpjAsyncWithHttpInfo($cnae_principal, $municipio, $natureza_juridica, $top = 10, $skip = 0, $inlinecount = false, string $contentType = self::contentTypes['listarCnpj'][0])
    {
        $returnType = '\NuvemFiscal\Model\CnpjListagem';
        $request = $this->listarCnpjRequest($cnae_principal, $municipio, $natureza_juridica, $top, $skip, $inlinecount, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listarCnpj'
     *
     * @param  string $cnae_principal Filtro pelo código CNAE da atividade principal do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $municipio Filtro pelo código IBGE ou TOM (Tabela de Órgãos e Municípios) do município do estabelecimento.  Utilize o valor sem máscara. (required)
     * @param  string $natureza_juridica Filtro pela natureza jurídica do estabelecimento   Utilize o valor de quatro dígitos sem máscara. (required)
     * @param  int $top Limite no número de objetos a serem retornados pela API, entre 1 e 100. (optional, default to 10)
     * @param  int $skip Quantidade de objetos que serão ignorados antes da lista começar a ser retornada. (optional, default to 0)
     * @param  bool $inlinecount Inclui no JSON de resposta, na propriedade &#x60;@count&#x60;, o número total de registros que o filtro retornaria, independente dos filtros de paginação. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listarCnpj'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listarCnpjRequest($cnae_principal, $municipio, $natureza_juridica, $top = 10, $skip = 0, $inlinecount = false, string $contentType = self::contentTypes['listarCnpj'][0])
    {

        // verify the required parameter 'cnae_principal' is set
        if ($cnae_principal === null || (is_array($cnae_principal) && count($cnae_principal) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cnae_principal when calling listarCnpj'
            );
        }

        // verify the required parameter 'municipio' is set
        if ($municipio === null || (is_array($municipio) && count($municipio) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $municipio when calling listarCnpj'
            );
        }

        // verify the required parameter 'natureza_juridica' is set
        if ($natureza_juridica === null || (is_array($natureza_juridica) && count($natureza_juridica) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $natureza_juridica when calling listarCnpj'
            );
        }





        $resourcePath = '/cnpj';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $top,
            '$top', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $skip,
            '$skip', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $inlinecount,
            '$inlinecount', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $cnae_principal,
            'cnae_principal', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $municipio,
            'municipio', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $natureza_juridica,
            'natureza_juridica', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
