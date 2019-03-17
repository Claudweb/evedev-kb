<?php
/**
 * SearchApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EsiClient;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.evetech.net');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return SearchApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdSearch
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param int $character_id An EVE character ID (required)
     * @param string $search The string to search on (required)
     * @param string $accept_language Language to use in the response (optional, default to en-us)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdSearchOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdSearch($categories, $character_id, $search, $accept_language = null, $datasource = null, $if_none_match = null, $language = null, $strict = null, $token = null)
    {
        list($response) = $this->getCharactersCharacterIdSearchWithHttpInfo($categories, $character_id, $search, $accept_language, $datasource, $if_none_match, $language, $strict, $token);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param int $character_id An EVE character ID (required)
     * @param string $search The string to search on (required)
     * @param string $accept_language Language to use in the response (optional, default to en-us)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @param string $token Access token to use if unable to set a header (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdSearchOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdSearchWithHttpInfo($categories, $character_id, $search, $accept_language = null, $datasource = null, $if_none_match = null, $language = null, $strict = null, $token = null)
    {
        // verify the required parameter 'categories' is set
        if ($categories === null) {
            throw new \InvalidArgumentException('Missing the required parameter $categories when calling getCharactersCharacterIdSearch');
        }

        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdSearch');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 1.0.');
        }

        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling getCharactersCharacterIdSearch');
        }
        if ((strlen($search) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 3.');
        }

        // parse inputs
        $resourcePath = "/v3/characters/{character_id}/search/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if (is_array($categories)) {
            $categories = $this->apiClient->getSerializer()->serializeCollection($categories, 'csv', true);
        }
        if ($categories !== null) {
            $queryParams['categories'] = $this->apiClient->getSerializer()->toQueryValue($categories);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if ($strict !== null) {
            $queryParams['strict'] = $this->apiClient->getSerializer()->toQueryValue($strict);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = $this->apiClient->getSerializer()->toHeaderValue($accept_language);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCharactersCharacterIdSearchOk',
                '/v3/characters/{character_id}/search/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdSearchOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdSearchOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorLimited', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GatewayTimeout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSearch
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param string $search The string to search on (required)
     * @param string $accept_language Language to use in the response (optional, default to en-us)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @return \Swagger\Client\Model\GetSearchOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSearch($categories, $search, $accept_language = null, $datasource = null, $if_none_match = null, $language = null, $strict = null)
    {
        list($response) = $this->getSearchWithHttpInfo($categories, $search, $accept_language, $datasource, $if_none_match, $language, $strict);
        return $response;
    }

    /**
     * Operation getSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param string $search The string to search on (required)
     * @param string $accept_language Language to use in the response (optional, default to en-us)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $language Language to use in the response, takes precedence over Accept-Language (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @return Array of \Swagger\Client\Model\GetSearchOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSearchWithHttpInfo($categories, $search, $accept_language = null, $datasource = null, $if_none_match = null, $language = null, $strict = null)
    {
        // verify the required parameter 'categories' is set
        if ($categories === null) {
            throw new \InvalidArgumentException('Missing the required parameter $categories when calling getSearch');
        }

        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling getSearch');
        }
        if ((strlen($search) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getSearch, must be bigger than or equal to 3.');
        }

        // parse inputs
        $resourcePath = "/v2/search/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if (is_array($categories)) {
            $categories = $this->apiClient->getSerializer()->serializeCollection($categories, 'csv', true);
        }
        if ($categories !== null) {
            $queryParams['categories'] = $this->apiClient->getSerializer()->toQueryValue($categories);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if ($strict !== null) {
            $queryParams['strict'] = $this->apiClient->getSerializer()->toQueryValue($strict);
        }
        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = $this->apiClient->getSerializer()->toHeaderValue($accept_language);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetSearchOk',
                '/v2/search/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetSearchOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetSearchOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorLimited', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GatewayTimeout', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
