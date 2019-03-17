<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetailsHeads
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
 * GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetailsHeads Class Doc Comment
 *
 * @category    Class */
 // @description head object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetailsHeads implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_planets_planet_id_ok_extractor_details_heads';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'head_id' => 'int',
        'latitude' => 'float',
        'longitude' => 'float'
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
        'head_id' => 'head_id',
        'latitude' => 'latitude',
        'longitude' => 'longitude'
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
        'head_id' => 'setHeadId',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
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
        'head_id' => 'getHeadId',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
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
        $this->container['head_id'] = isset($data['head_id']) ? $data['head_id'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['head_id'] === null) {
            $invalid_properties[] = "'head_id' can't be null";
        }
        if (($this->container['head_id'] > 9.0)) {
            $invalid_properties[] = "invalid value for 'head_id', must be smaller than or equal to 9.0.";
        }

        if (($this->container['head_id'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'head_id', must be bigger than or equal to 0.0.";
        }

        if ($this->container['latitude'] === null) {
            $invalid_properties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalid_properties[] = "'longitude' can't be null";
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
        if ($this->container['head_id'] === null) {
            return false;
        }
        if ($this->container['head_id'] > 9.0) {
            return false;
        }
        if ($this->container['head_id'] < 0.0) {
            return false;
        }
        if ($this->container['latitude'] === null) {
            return false;
        }
        if ($this->container['longitude'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets head_id
     * @return int
     */
    public function getHeadId()
    {
        return $this->container['head_id'];
    }

    /**
     * Sets head_id
     * @param int $head_id head_id integer
     * @return $this
     */
    public function setHeadId($head_id)
    {

        if ($head_id > 9.0) {
            throw new \InvalidArgumentException('invalid value for $head_id when calling GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetailsHeads., must be smaller than or equal to 9.0.');
        }
        if ($head_id < 0.0) {
            throw new \InvalidArgumentException('invalid value for $head_id when calling GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetailsHeads., must be bigger than or equal to 0.0.');
        }
        $this->container['head_id'] = $head_id;

        return $this;
    }

    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param float $latitude latitude number
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param float $longitude longitude number
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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


