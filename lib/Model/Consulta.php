<?php

namespace RccLightSimulacion\Client\Model;

use \ArrayAccess;
use \RccLightSimulacion\Client\ObjectSerializer;

class Consulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Consulta';
    
    protected static $apihubTypes = [
        'fecha_consulta' => 'string',
        'nombre_otorgante' => 'string',
        'tipo_credito' => 'string',
        'importe_credito' => 'float',
        'clave_unidad_monetaria' => '\RccLightSimulacion\Client\Model\CatalogoMoneda'
    ];
    
    protected static $apihubFormats = [
        'fecha_consulta' => null,
        'nombre_otorgante' => null,
        'tipo_credito' => null,
        'importe_credito' => 'float',
        'clave_unidad_monetaria' => null
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
        'fecha_consulta' => 'fechaConsulta',
        'nombre_otorgante' => 'nombreOtorgante',
        'tipo_credito' => 'tipoCredito',
        'importe_credito' => 'importeCredito',
        'clave_unidad_monetaria' => 'claveUnidadMonetaria'
    ];
    
    protected static $setters = [
        'fecha_consulta' => 'setFechaConsulta',
        'nombre_otorgante' => 'setNombreOtorgante',
        'tipo_credito' => 'setTipoCredito',
        'importe_credito' => 'setImporteCredito',
        'clave_unidad_monetaria' => 'setClaveUnidadMonetaria'
    ];
    
    protected static $getters = [
        'fecha_consulta' => 'getFechaConsulta',
        'nombre_otorgante' => 'getNombreOtorgante',
        'tipo_credito' => 'getTipoCredito',
        'importe_credito' => 'getImporteCredito',
        'clave_unidad_monetaria' => 'getClaveUnidadMonetaria'
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
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['tipo_credito'] = isset($data['tipo_credito']) ? $data['tipo_credito'] : null;
        $this->container['importe_credito'] = isset($data['importe_credito']) ? $data['importe_credito'] : null;
        $this->container['clave_unidad_monetaria'] = isset($data['clave_unidad_monetaria']) ? $data['clave_unidad_monetaria'] : null;
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
    
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }
    
    public function setFechaConsulta($fecha_consulta)
    {
        $this->container['fecha_consulta'] = $fecha_consulta;
        return $this;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        $this->container['nombre_otorgante'] = $nombre_otorgante;
        return $this;
    }
    
    public function getTipoCredito()
    {
        return $this->container['tipo_credito'];
    }
    
    public function setTipoCredito($tipo_credito)
    {
        $this->container['tipo_credito'] = $tipo_credito;
        return $this;
    }
    
    public function getImporteCredito()
    {
        return $this->container['importe_credito'];
    }
    
    public function setImporteCredito($importe_credito)
    {
        $this->container['importe_credito'] = $importe_credito;
        return $this;
    }
    
    public function getClaveUnidadMonetaria()
    {
        return $this->container['clave_unidad_monetaria'];
    }
    
    public function setClaveUnidadMonetaria($clave_unidad_monetaria)
    {
        $this->container['clave_unidad_monetaria'] = $clave_unidad_monetaria;
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
