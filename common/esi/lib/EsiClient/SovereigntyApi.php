<?php
/**
 * SovereigntyApi
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
 * SovereigntyApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SovereigntyApi
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
     * @return SovereigntyApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSovereigntyCampaigns
     *
     * List sovereignty campaigns
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @return \Swagger\Client\Model\GetSovereigntyCampaigns200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSovereigntyCampaigns($datasource = null, $if_none_match = null)
    {
        list($response) = $this->getSovereigntyCampaignsWithHttpInfo($datasource, $if_none_match);
        return $response;
    }

    /**
     * Operation getSovereigntyCampaignsWithHttpInfo
     *
     * List sovereignty campaigns
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @return Array of \Swagger\Client\Model\GetSovereigntyCampaigns200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSovereigntyCampaignsWithHttpInfo($datasource = null, $if_none_match = null)
    {
        // parse inputs
        $resourcePath = "/v1/sovereignty/campaigns/";
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
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
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
                '\Swagger\Client\Model\GetSovereigntyCampaigns200Ok[]',
                '/v1/sovereignty/campaigns/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetSovereigntyCampaigns200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetSovereigntyCampaigns200Ok[]', $e->getResponseHeaders());
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

    /**
     * Operation getSovereigntyMap
     *
     * List sovereignty of systems
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @return \Swagger\Client\Model\GetSovereigntyMap200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSovereigntyMap($datasource = null, $if_none_match = null)
    {
        list($response) = $this->getSovereigntyMapWithHttpInfo($datasource, $if_none_match);
        return $response;
    }

    /**
     * Operation getSovereigntyMapWithHttpInfo
     *
     * List sovereignty of systems
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @return Array of \Swagger\Client\Model\GetSovereigntyMap200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSovereigntyMapWithHttpInfo($datasource = null, $if_none_match = null)
    {
        // parse inputs
        $resourcePath = "/v1/sovereignty/map/";
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
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
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
                '\Swagger\Client\Model\GetSovereigntyMap200Ok[]',
                '/v1/sovereignty/map/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetSovereigntyMap200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetSovereigntyMap200Ok[]', $e->getResponseHeaders());
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

    /**
     * Operation getSovereigntyStructures
     *
     * List sovereignty structures
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @return \Swagger\Client\Model\GetSovereigntyStructures200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSovereigntyStructures($datasource = null, $if_none_match = null)
    {
        list($response) = $this->getSovereigntyStructuresWithHttpInfo($datasource, $if_none_match);
        return $response;
    }

    /**
     * Operation getSovereigntyStructuresWithHttpInfo
     *
     * List sovereignty structures
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @return Array of \Swagger\Client\Model\GetSovereigntyStructures200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSovereigntyStructuresWithHttpInfo($datasource = null, $if_none_match = null)
    {
        // parse inputs
        $resourcePath = "/v1/sovereignty/structures/";
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
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
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
                '\Swagger\Client\Model\GetSovereigntyStructures200Ok[]',
                '/v1/sovereignty/structures/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetSovereigntyStructures200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetSovereigntyStructures200Ok[]', $e->getResponseHeaders());
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
