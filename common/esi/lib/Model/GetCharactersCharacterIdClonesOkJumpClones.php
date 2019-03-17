<?php
/**
 * GetCharactersCharacterIdClonesOkJumpClones
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
 * GetCharactersCharacterIdClonesOkJumpClones Class Doc Comment
 *
 * @category    Class */
 // @description jump_clone object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdClonesOkJumpClones implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_clones_ok_jump_clones';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'implants' => 'int[]',
        'jump_clone_id' => 'int',
        'location_id' => 'int',
        'location_type' => 'string',
        'name' => 'string'
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
        'implants' => 'implants',
        'jump_clone_id' => 'jump_clone_id',
        'location_id' => 'location_id',
        'location_type' => 'location_type',
        'name' => 'name'
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
        'implants' => 'setImplants',
        'jump_clone_id' => 'setJumpCloneId',
        'location_id' => 'setLocationId',
        'location_type' => 'setLocationType',
        'name' => 'setName'
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
        'implants' => 'getImplants',
        'jump_clone_id' => 'getJumpCloneId',
        'location_id' => 'getLocationId',
        'location_type' => 'getLocationType',
        'name' => 'getName'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const LOCATION_TYPE_STATION = 'station';
    const LOCATION_TYPE_STRUCTURE = 'structure';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLocationTypeAllowableValues()
    {
        return [
            self::LOCATION_TYPE_STATION,
            self::LOCATION_TYPE_STRUCTURE,
        ];
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
        $this->container['implants'] = isset($data['implants']) ? $data['implants'] : null;
        $this->container['jump_clone_id'] = isset($data['jump_clone_id']) ? $data['jump_clone_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_type'] = isset($data['location_type']) ? $data['location_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['implants'] === null) {
            $invalid_properties[] = "'implants' can't be null";
        }
        if ($this->container['jump_clone_id'] === null) {
            $invalid_properties[] = "'jump_clone_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalid_properties[] = "'location_id' can't be null";
        }
        if ($this->container['location_type'] === null) {
            $invalid_properties[] = "'location_type' can't be null";
        }
        $allowed_values = array("station", "structure");
        if (!in_array($this->container['location_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'location_type', must be one of #{allowed_values}.";
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
        if ($this->container['implants'] === null) {
            return false;
        }
        if ($this->container['jump_clone_id'] === null) {
            return false;
        }
        if ($this->container['location_id'] === null) {
            return false;
        }
        if ($this->container['location_type'] === null) {
            return false;
        }
        $allowed_values = array("station", "structure");
        if (!in_array($this->container['location_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets implants
     * @return int[]
     */
    public function getImplants()
    {
        return $this->container['implants'];
    }

    /**
     * Sets implants
     * @param int[] $implants implants array
     * @return $this
     */
    public function setImplants($implants)
    {
        $this->container['implants'] = $implants;

        return $this;
    }

    /**
     * Gets jump_clone_id
     * @return int
     */
    public function getJumpCloneId()
    {
        return $this->container['jump_clone_id'];
    }

    /**
     * Sets jump_clone_id
     * @param int $jump_clone_id jump_clone_id integer
     * @return $this
     */
    public function setJumpCloneId($jump_clone_id)
    {
        $this->container['jump_clone_id'] = $jump_clone_id;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id location_id integer
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_type
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['location_type'];
    }

    /**
     * Sets location_type
     * @param string $location_type location_type string
     * @return $this
     */
    public function setLocationType($location_type)
    {
        $allowed_values = array('station', 'structure');
        if (!in_array($location_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'location_type', must be one of 'station', 'structure'");
        }
        $this->container['location_type'] = $location_type;

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


