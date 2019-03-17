<?php
/**
 * GetCharactersCharacterIdStats200Ok
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
 * GetCharactersCharacterIdStats200Ok Class Doc Comment
 *
 * @category    Class */
 // @description Aggregate stats for a year
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStats200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'character' => '\Swagger\Client\Model\V2characterscharacterIdstatsCharacter',
        'combat' => '\Swagger\Client\Model\V2characterscharacterIdstatsCombat',
        'industry' => '\Swagger\Client\Model\V2characterscharacterIdstatsIndustry',
        'inventory' => '\Swagger\Client\Model\V2characterscharacterIdstatsInventory',
        'isk' => '\Swagger\Client\Model\V2characterscharacterIdstatsIsk',
        'market' => '\Swagger\Client\Model\V2characterscharacterIdstatsMarket',
        'mining' => '\Swagger\Client\Model\V2characterscharacterIdstatsMining',
        'module' => '\Swagger\Client\Model\V2characterscharacterIdstatsModule',
        'orbital' => '\Swagger\Client\Model\V2characterscharacterIdstatsOrbital',
        'pve' => '\Swagger\Client\Model\V2characterscharacterIdstatsPve',
        'social' => '\Swagger\Client\Model\V2characterscharacterIdstatsSocial',
        'travel' => '\Swagger\Client\Model\V2characterscharacterIdstatsTravel',
        'year' => 'int'
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
        'character' => 'character',
        'combat' => 'combat',
        'industry' => 'industry',
        'inventory' => 'inventory',
        'isk' => 'isk',
        'market' => 'market',
        'mining' => 'mining',
        'module' => 'module',
        'orbital' => 'orbital',
        'pve' => 'pve',
        'social' => 'social',
        'travel' => 'travel',
        'year' => 'year'
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
        'character' => 'setCharacter',
        'combat' => 'setCombat',
        'industry' => 'setIndustry',
        'inventory' => 'setInventory',
        'isk' => 'setIsk',
        'market' => 'setMarket',
        'mining' => 'setMining',
        'module' => 'setModule',
        'orbital' => 'setOrbital',
        'pve' => 'setPve',
        'social' => 'setSocial',
        'travel' => 'setTravel',
        'year' => 'setYear'
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
        'character' => 'getCharacter',
        'combat' => 'getCombat',
        'industry' => 'getIndustry',
        'inventory' => 'getInventory',
        'isk' => 'getIsk',
        'market' => 'getMarket',
        'mining' => 'getMining',
        'module' => 'getModule',
        'orbital' => 'getOrbital',
        'pve' => 'getPve',
        'social' => 'getSocial',
        'travel' => 'getTravel',
        'year' => 'getYear'
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
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['combat'] = isset($data['combat']) ? $data['combat'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['isk'] = isset($data['isk']) ? $data['isk'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['mining'] = isset($data['mining']) ? $data['mining'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['orbital'] = isset($data['orbital']) ? $data['orbital'] : null;
        $this->container['pve'] = isset($data['pve']) ? $data['pve'] : null;
        $this->container['social'] = isset($data['social']) ? $data['social'] : null;
        $this->container['travel'] = isset($data['travel']) ? $data['travel'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['year'] === null) {
            $invalid_properties[] = "'year' can't be null";
        }
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
        if ($this->container['year'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets character
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsCharacter
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsCharacter $character
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets combat
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsCombat
     */
    public function getCombat()
    {
        return $this->container['combat'];
    }

    /**
     * Sets combat
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsCombat $combat
     * @return $this
     */
    public function setCombat($combat)
    {
        $this->container['combat'] = $combat;

        return $this;
    }

    /**
     * Gets industry
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsIndustry
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsIndustry $industry
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets inventory
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsInventory
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsInventory $inventory
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets isk
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsIsk
     */
    public function getIsk()
    {
        return $this->container['isk'];
    }

    /**
     * Sets isk
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsIsk $isk
     * @return $this
     */
    public function setIsk($isk)
    {
        $this->container['isk'] = $isk;

        return $this;
    }

    /**
     * Gets market
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsMarket
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsMarket $market
     * @return $this
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets mining
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsMining
     */
    public function getMining()
    {
        return $this->container['mining'];
    }

    /**
     * Sets mining
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsMining $mining
     * @return $this
     */
    public function setMining($mining)
    {
        $this->container['mining'] = $mining;

        return $this;
    }

    /**
     * Gets module
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsModule
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsModule $module
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets orbital
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsOrbital
     */
    public function getOrbital()
    {
        return $this->container['orbital'];
    }

    /**
     * Sets orbital
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsOrbital $orbital
     * @return $this
     */
    public function setOrbital($orbital)
    {
        $this->container['orbital'] = $orbital;

        return $this;
    }

    /**
     * Gets pve
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsPve
     */
    public function getPve()
    {
        return $this->container['pve'];
    }

    /**
     * Sets pve
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsPve $pve
     * @return $this
     */
    public function setPve($pve)
    {
        $this->container['pve'] = $pve;

        return $this;
    }

    /**
     * Gets social
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsSocial
     */
    public function getSocial()
    {
        return $this->container['social'];
    }

    /**
     * Sets social
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsSocial $social
     * @return $this
     */
    public function setSocial($social)
    {
        $this->container['social'] = $social;

        return $this;
    }

    /**
     * Gets travel
     * @return \Swagger\Client\Model\V2characterscharacterIdstatsTravel
     */
    public function getTravel()
    {
        return $this->container['travel'];
    }

    /**
     * Sets travel
     * @param \Swagger\Client\Model\V2characterscharacterIdstatsTravel $travel
     * @return $this
     */
    public function setTravel($travel)
    {
        $this->container['travel'] = $travel;

        return $this;
    }

    /**
     * Gets year
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     * @param int $year Gregorian year for this set of aggregates
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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


