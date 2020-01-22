<?php

namespace RccLightSimulacion\Client\Model;

use \ArrayAccess;
use \RccLightSimulacion\Client\ObjectSerializer;

class Score implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Score';
    
    protected static $apihubTypes = [
        'score' => 'string',
        'razones' => '\RccLightSimulacion\Client\Model\Razon[]',
        'codigo' => 'string'
    ];
    
    protected static $apihubFormats = [
        'score' => null,
        'razones' => null,
        'codigo' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'score' => 'score',
        'razones' => 'razones',
        'codigo' => 'codigo'
    ];
    
    protected static $setters = [
        'score' => 'setScore',
        'razones' => 'setRazones',
        'codigo' => 'setCodigo'
    ];
    
    protected static $getters = [
        'score' => 'getScore',
        'razones' => 'getRazones',
        'codigo' => 'getCodigo'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['razones'] = isset($data['razones']) ? $data['razones'] : null;
        $this->container['codigo'] = isset($data['codigo']) ? $data['codigo'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }
    
    public function getRazones()
    {
        return $this->container['razones'];
    }
    
    public function setRazones($razones)
    {
        $this->container['razones'] = $razones;
        return $this;
    }
    
    public function getCodigo()
    {
        return $this->container['codigo'];
    }
    
    public function setCodigo($codigo)
    {
        $this->container['codigo'] = $codigo;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
