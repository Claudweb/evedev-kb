<?php
/**
 * PostUniverseIdsOk
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PostUniverseIdsOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostUniverseIdsOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_universe_ids_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'agents' => '\Swagger\Client\Model\PostUniverseIdsOkAgents[]',
        'alliances' => '\Swagger\Client\Model\PostUniverseIdsOkAlliances[]',
        'characters' => '\Swagger\Client\Model\PostUniverseIdsOkCharacters[]',
        'constellations' => '\Swagger\Client\Model\PostUniverseIdsOkConstellations[]',
        'corporations' => '\Swagger\Client\Model\PostUniverseIdsOkCorporations[]',
        'factions' => '\Swagger\Client\Model\PostUniverseIdsOkFactions[]',
        'inventory_types' => '\Swagger\Client\Model\PostUniverseIdsOkInventoryTypes[]',
        'regions' => '\Swagger\Client\Model\PostUniverseIdsOkRegions[]',
        'stations' => '\Swagger\Client\Model\PostUniverseIdsOkStations[]',
        'systems' => '\Swagger\Client\Model\PostUniverseIdsOkSystems[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'agents' => 'agents',
        'alliances' => 'alliances',
        'characters' => 'characters',
        'constellations' => 'constellations',
        'corporations' => 'corporations',
        'factions' => 'factions',
        'inventory_types' => 'inventory_types',
        'regions' => 'regions',
        'stations' => 'stations',
        'systems' => 'systems'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'agents' => 'setAgents',
        'alliances' => 'setAlliances',
        'characters' => 'setCharacters',
        'constellations' => 'setConstellations',
        'corporations' => 'setCorporations',
        'factions' => 'setFactions',
        'inventory_types' => 'setInventoryTypes',
        'regions' => 'setRegions',
        'stations' => 'setStations',
        'systems' => 'setSystems'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'agents' => 'getAgents',
        'alliances' => 'getAlliances',
        'characters' => 'getCharacters',
        'constellations' => 'getConstellations',
        'corporations' => 'getCorporations',
        'factions' => 'getFactions',
        'inventory_types' => 'getInventoryTypes',
        'regions' => 'getRegions',
        'stations' => 'getStations',
        'systems' => 'getSystems'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['agents'] = isset($data['agents']) ? $data['agents'] : null;
        $this->container['alliances'] = isset($data['alliances']) ? $data['alliances'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['constellations'] = isset($data['constellations']) ? $data['constellations'] : null;
        $this->container['corporations'] = isset($data['corporations']) ? $data['corporations'] : null;
        $this->container['factions'] = isset($data['factions']) ? $data['factions'] : null;
        $this->container['inventory_types'] = isset($data['inventory_types']) ? $data['inventory_types'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['stations'] = isset($data['stations']) ? $data['stations'] : null;
        $this->container['systems'] = isset($data['systems']) ? $data['systems'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets agents
     * @return \Swagger\Client\Model\PostUniverseIdsOkAgents[]
     */
    public function getAgents()
    {
        return $this->container['agents'];
    }

    /**
     * Sets agents
     * @param \Swagger\Client\Model\PostUniverseIdsOkAgents[] $agents agents array
     * @return $this
     */
    public function setAgents($agents)
    {
        $this->container['agents'] = $agents;

        return $this;
    }

    /**
     * Gets alliances
     * @return \Swagger\Client\Model\PostUniverseIdsOkAlliances[]
     */
    public function getAlliances()
    {
        return $this->container['alliances'];
    }

    /**
     * Sets alliances
     * @param \Swagger\Client\Model\PostUniverseIdsOkAlliances[] $alliances alliances array
     * @return $this
     */
    public function setAlliances($alliances)
    {
        $this->container['alliances'] = $alliances;

        return $this;
    }

    /**
     * Gets characters
     * @return \Swagger\Client\Model\PostUniverseIdsOkCharacters[]
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     * @param \Swagger\Client\Model\PostUniverseIdsOkCharacters[] $characters characters array
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets constellations
     * @return \Swagger\Client\Model\PostUniverseIdsOkConstellations[]
     */
    public function getConstellations()
    {
        return $this->container['constellations'];
    }

    /**
     * Sets constellations
     * @param \Swagger\Client\Model\PostUniverseIdsOkConstellations[] $constellations constellations array
     * @return $this
     */
    public function setConstellations($constellations)
    {
        $this->container['constellations'] = $constellations;

        return $this;
    }

    /**
     * Gets corporations
     * @return \Swagger\Client\Model\PostUniverseIdsOkCorporations[]
     */
    public function getCorporations()
    {
        return $this->container['corporations'];
    }

    /**
     * Sets corporations
     * @param \Swagger\Client\Model\PostUniverseIdsOkCorporations[] $corporations corporations array
     * @return $this
     */
    public function setCorporations($corporations)
    {
        $this->container['corporations'] = $corporations;

        return $this;
    }

    /**
     * Gets factions
     * @return \Swagger\Client\Model\PostUniverseIdsOkFactions[]
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     * @param \Swagger\Client\Model\PostUniverseIdsOkFactions[] $factions factions array
     * @return $this
     */
    public function setFactions($factions)
    {
        $this->container['factions'] = $factions;

        return $this;
    }

    /**
     * Gets inventory_types
     * @return \Swagger\Client\Model\PostUniverseIdsOkInventoryTypes[]
     */
    public function getInventoryTypes()
    {
        return $this->container['inventory_types'];
    }

    /**
     * Sets inventory_types
     * @param \Swagger\Client\Model\PostUniverseIdsOkInventoryTypes[] $inventory_types inventory_types array
     * @return $this
     */
    public function setInventoryTypes($inventory_types)
    {
        $this->container['inventory_types'] = $inventory_types;

        return $this;
    }

    /**
     * Gets regions
     * @return \Swagger\Client\Model\PostUniverseIdsOkRegions[]
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     * @param \Swagger\Client\Model\PostUniverseIdsOkRegions[] $regions regions array
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets stations
     * @return \Swagger\Client\Model\PostUniverseIdsOkStations[]
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     * @param \Swagger\Client\Model\PostUniverseIdsOkStations[] $stations stations array
     * @return $this
     */
    public function setStations($stations)
    {
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets systems
     * @return \Swagger\Client\Model\PostUniverseIdsOkSystems[]
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     * @param \Swagger\Client\Model\PostUniverseIdsOkSystems[] $systems systems array
     * @return $this
     */
    public function setSystems($systems)
    {
        $this->container['systems'] = $systems;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


