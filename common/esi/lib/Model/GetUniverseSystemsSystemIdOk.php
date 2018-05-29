<?php
/**
 * GetUniverseSystemsSystemIdOk
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
 * OpenAPI spec version: 0.8.3
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
 * GetUniverseSystemsSystemIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseSystemsSystemIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_systems_system_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'constellation_id' => 'int',
        'name' => 'string',
        'planets' => '\Swagger\Client\Model\GetUniverseSystemsSystemIdOkPlanets[]',
        'position' => '\Swagger\Client\Model\GetUniverseSystemsSystemIdOkPosition',
        'security_class' => 'string',
        'security_status' => 'float',
        'star_id' => 'int',
        'stargates' => 'int[]',
        'stations' => 'int[]',
        'system_id' => 'int'
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
        'constellation_id' => 'constellation_id',
        'name' => 'name',
        'planets' => 'planets',
        'position' => 'position',
        'security_class' => 'security_class',
        'security_status' => 'security_status',
        'star_id' => 'star_id',
        'stargates' => 'stargates',
        'stations' => 'stations',
        'system_id' => 'system_id'
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
        'constellation_id' => 'setConstellationId',
        'name' => 'setName',
        'planets' => 'setPlanets',
        'position' => 'setPosition',
        'security_class' => 'setSecurityClass',
        'security_status' => 'setSecurityStatus',
        'star_id' => 'setStarId',
        'stargates' => 'setStargates',
        'stations' => 'setStations',
        'system_id' => 'setSystemId'
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
        'constellation_id' => 'getConstellationId',
        'name' => 'getName',
        'planets' => 'getPlanets',
        'position' => 'getPosition',
        'security_class' => 'getSecurityClass',
        'security_status' => 'getSecurityStatus',
        'star_id' => 'getStarId',
        'stargates' => 'getStargates',
        'stations' => 'getStations',
        'system_id' => 'getSystemId'
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
        $this->container['constellation_id'] = isset($data['constellation_id']) ? $data['constellation_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['planets'] = isset($data['planets']) ? $data['planets'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['security_class'] = isset($data['security_class']) ? $data['security_class'] : null;
        $this->container['security_status'] = isset($data['security_status']) ? $data['security_status'] : null;
        $this->container['star_id'] = isset($data['star_id']) ? $data['star_id'] : null;
        $this->container['stargates'] = isset($data['stargates']) ? $data['stargates'] : null;
        $this->container['stations'] = isset($data['stations']) ? $data['stations'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['constellation_id'] === null) {
            $invalid_properties[] = "'constellation_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['planets'] === null) {
            $invalid_properties[] = "'planets' can't be null";
        }
        if ($this->container['security_status'] === null) {
            $invalid_properties[] = "'security_status' can't be null";
        }
        if ($this->container['star_id'] === null) {
            $invalid_properties[] = "'star_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalid_properties[] = "'system_id' can't be null";
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
        if ($this->container['constellation_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['planets'] === null) {
            return false;
        }
        if ($this->container['security_status'] === null) {
            return false;
        }
        if ($this->container['star_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets constellation_id
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     * @param int $constellation_id The constellation this solar system is in
     * @return $this
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name string
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets planets
     * @return \Swagger\Client\Model\GetUniverseSystemsSystemIdOkPlanets[]
     */
    public function getPlanets()
    {
        return $this->container['planets'];
    }

    /**
     * Sets planets
     * @param \Swagger\Client\Model\GetUniverseSystemsSystemIdOkPlanets[] $planets planets array
     * @return $this
     */
    public function setPlanets($planets)
    {
        $this->container['planets'] = $planets;

        return $this;
    }

    /**
     * Gets position
     * @return \Swagger\Client\Model\GetUniverseSystemsSystemIdOkPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param \Swagger\Client\Model\GetUniverseSystemsSystemIdOkPosition $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets security_class
     * @return string
     */
    public function getSecurityClass()
    {
        return $this->container['security_class'];
    }

    /**
     * Sets security_class
     * @param string $security_class security_class string
     * @return $this
     */
    public function setSecurityClass($security_class)
    {
        $this->container['security_class'] = $security_class;

        return $this;
    }

    /**
     * Gets security_status
     * @return float
     */
    public function getSecurityStatus()
    {
        return $this->container['security_status'];
    }

    /**
     * Sets security_status
     * @param float $security_status security_status number
     * @return $this
     */
    public function setSecurityStatus($security_status)
    {
        $this->container['security_status'] = $security_status;

        return $this;
    }

    /**
     * Gets star_id
     * @return int
     */
    public function getStarId()
    {
        return $this->container['star_id'];
    }

    /**
     * Sets star_id
     * @param int $star_id star_id integer
     * @return $this
     */
    public function setStarId($star_id)
    {
        $this->container['star_id'] = $star_id;

        return $this;
    }

    /**
     * Gets stargates
     * @return int[]
     */
    public function getStargates()
    {
        return $this->container['stargates'];
    }

    /**
     * Sets stargates
     * @param int[] $stargates stargates array
     * @return $this
     */
    public function setStargates($stargates)
    {
        $this->container['stargates'] = $stargates;

        return $this;
    }

    /**
     * Gets stations
     * @return int[]
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     * @param int[] $stations stations array
     * @return $this
     */
    public function setStations($stations)
    {
        $this->container['stations'] = $stations;

        return $this;
    }

    /**
     * Gets system_id
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     * @param int $system_id system_id integer
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

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


