<?php
/**
 * OpportunitiesApi
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
 * OpenAPI spec version: 0.5.6
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
 * OpportunitiesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunitiesApi
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
            $apiClient->getConfig()->setHost('https://esi.tech.ccp.is/');
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
     * @return OpportunitiesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdOpportunities
     *
     * Get a character's completed tasks
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdOpportunities($character_id, $datasource = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCharactersCharacterIdOpportunitiesWithHttpInfo($character_id, $datasource, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdOpportunitiesWithHttpInfo
     *
     * Get a character's completed tasks
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdOpportunitiesWithHttpInfo($character_id, $datasource = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdOpportunities');
        }
        // parse inputs
        $resourcePath = "/v1/characters/{character_id}/opportunities/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
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
                '\Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[]',
                '/v1/characters/{character_id}/opportunities/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdOpportunities200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOpportunitiesGroups
     *
     * Get opportunities groups
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return int[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesGroups($datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getOpportunitiesGroupsWithHttpInfo($datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getOpportunitiesGroupsWithHttpInfo
     *
     * Get opportunities groups
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of int[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesGroupsWithHttpInfo($datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // parse inputs
        $resourcePath = "/v1/opportunities/groups/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
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
                'int[]',
                '/v1/opportunities/groups/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOpportunitiesGroupsGroupId
     *
     * Get opportunities group
     *
     * @param int $group_id ID of an opportunities group (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $language Language to use in the response (optional, default to en-us)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesGroupsGroupId($group_id, $datasource = null, $language = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getOpportunitiesGroupsGroupIdWithHttpInfo($group_id, $datasource, $language, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getOpportunitiesGroupsGroupIdWithHttpInfo
     *
     * Get opportunities group
     *
     * @param int $group_id ID of an opportunities group (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $language Language to use in the response (optional, default to en-us)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesGroupsGroupIdWithHttpInfo($group_id, $datasource = null, $language = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling getOpportunitiesGroupsGroupId');
        }
        // parse inputs
        $resourcePath = "/v1/opportunities/groups/{group_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "group_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk',
                '/v1/opportunities/groups/{group_id}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetOpportunitiesGroupsGroupIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOpportunitiesTasks
     *
     * Get opportunities tasks
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return int[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesTasks($datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getOpportunitiesTasksWithHttpInfo($datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getOpportunitiesTasksWithHttpInfo
     *
     * Get opportunities tasks
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of int[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesTasksWithHttpInfo($datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // parse inputs
        $resourcePath = "/v1/opportunities/tasks/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
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
                'int[]',
                '/v1/opportunities/tasks/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOpportunitiesTasksTaskId
     *
     * Get opportunities task
     *
     * @param int $task_id ID of an opportunities task (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesTasksTaskId($task_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getOpportunitiesTasksTaskIdWithHttpInfo($task_id, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getOpportunitiesTasksTaskIdWithHttpInfo
     *
     * Get opportunities task
     *
     * @param int $task_id ID of an opportunities task (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getOpportunitiesTasksTaskIdWithHttpInfo($task_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'task_id' is set
        if ($task_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $task_id when calling getOpportunitiesTasksTaskId');
        }
        // parse inputs
        $resourcePath = "/v1/opportunities/tasks/{task_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($task_id !== null) {
            $resourcePath = str_replace(
                "{" . "task_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($task_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk',
                '/v1/opportunities/tasks/{task_id}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetOpportunitiesTasksTaskIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
