<?php

namespace RccLightSimulacion\Client\Model;

use \ArrayAccess;
use \RccLightSimulacion\Client\ObjectSerializer;

class Domicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Domicilio';
    
    protected static $apihubTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'ciudad' => 'string',
        'estado' => '\RccLightSimulacion\Client\Model\CatalogoEstados',
        'delegacion_municipio' => 'string',
        'cp' => 'string',
        'id_domicilio' => 'string',
        'tipo_asentamiento' => '\RccLightSimulacion\Client\Model\CatalogoTipoAsentamiento',
        'fecha_residencia' => 'string',
        'fecha_registro_domicilio' => 'string'
    ];
    
    protected static $apihubFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'ciudad' => null,
        'estado' => null,
        'delegacion_municipio' => null,
        'cp' => null,
        'id_domicilio' => null,
        'tipo_asentamiento' => null,
        'fecha_residencia' => 'yyyy-MM-dd',
        'fecha_registro_domicilio' => 'yyyy-MM-dd'
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
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'delegacion_municipio' => 'delegacionMunicipio',
        'cp' => 'CP',
        'id_domicilio' => 'idDomicilio',
        'tipo_asentamiento' => 'tipoAsentamiento',
        'fecha_residencia' => 'fechaResidencia',
        'fecha_registro_domicilio' => 'fechaRegistroDomicilio'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'cp' => 'setCp',
        'id_domicilio' => 'setIdDomicilio',
        'tipo_asentamiento' => 'setTipoAsentamiento',
        'fecha_residencia' => 'setFechaResidencia',
        'fecha_registro_domicilio' => 'setFechaRegistroDomicilio'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'cp' => 'getCp',
        'id_domicilio' => 'getIdDomicilio',
        'tipo_asentamiento' => 'getTipoAsentamiento',
        'fecha_residencia' => 'getFechaResidencia',
        'fecha_registro_domicilio' => 'getFechaRegistroDomicilio'
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
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['id_domicilio'] = isset($data['id_domicilio']) ? $data['id_domicilio'] : null;
        $this->container['tipo_asentamiento'] = isset($data['tipo_asentamiento']) ? $data['tipo_asentamiento'] : null;
        $this->container['fecha_residencia'] = isset($data['fecha_residencia']) ? $data['fecha_residencia'] : null;
        $this->container['fecha_registro_domicilio'] = isset($data['fecha_registro_domicilio']) ? $data['fecha_registro_domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['direccion'] === null) {
            $invalidProperties[] = "'direccion' can't be null";
        }
        if ((mb_strlen($this->container['direccion']) > 85)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 85.";
        }
        if ((mb_strlen($this->container['direccion']) < 0)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) > 65)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['ciudad'] === null) {
            $invalidProperties[] = "'ciudad' can't be null";
        }
        if ((mb_strlen($this->container['ciudad']) > 65)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['ciudad']) < 0)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['estado'] === null) {
            $invalidProperties[] = "'estado' can't be null";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) > 65)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) < 0)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) > 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) < 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 5.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        if ((mb_strlen($direccion) > 85)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Domicilio., must be smaller than or equal to 85.');
        }
        if ((mb_strlen($direccion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getColoniaPoblacion()
    {
        return $this->container['colonia_poblacion'];
    }
    
    public function setColoniaPoblacion($colonia_poblacion)
    {
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) > 65)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['colonia_poblacion'] = $colonia_poblacion;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if ((mb_strlen($ciudad) > 65)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($ciudad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;
        return $this;
    }
    
    public function getDelegacionMunicipio()
    {
        return $this->container['delegacion_municipio'];
    }
    
    public function setDelegacionMunicipio($delegacion_municipio)
    {
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) > 65)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['delegacion_municipio'] = $delegacion_municipio;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        if (!is_null($cp) && (mb_strlen($cp) > 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling Domicilio., must be smaller than or equal to 5.');
        }
        if (!is_null($cp) && (mb_strlen($cp) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling Domicilio., must be bigger than or equal to 5.');
        }
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getIdDomicilio()
    {
        return $this->container['id_domicilio'];
    }
    
    public function setIdDomicilio($id_domicilio)
    {
        $this->container['id_domicilio'] = $id_domicilio;
        return $this;
    }
    
    public function getTipoAsentamiento()
    {
        return $this->container['tipo_asentamiento'];
    }
    
    public function setTipoAsentamiento($tipo_asentamiento)
    {
        $this->container['tipo_asentamiento'] = $tipo_asentamiento;
        return $this;
    }
    
    public function getFechaResidencia()
    {
        return $this->container['fecha_residencia'];
    }
    
    public function setFechaResidencia($fecha_residencia)
    {
        $this->container['fecha_residencia'] = $fecha_residencia;
        return $this;
    }
    
    public function getFechaRegistroDomicilio()
    {
        return $this->container['fecha_registro_domicilio'];
    }
    
    public function setFechaRegistroDomicilio($fecha_registro_domicilio)
    {
        $this->container['fecha_registro_domicilio'] = $fecha_registro_domicilio;
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
