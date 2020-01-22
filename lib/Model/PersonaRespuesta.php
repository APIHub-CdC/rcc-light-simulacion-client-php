<?php

namespace RccLightSimulacion\Client\Model;

use \ArrayAccess;
use \RccLightSimulacion\Client\ObjectSerializer;

class PersonaRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'PersonaRespuesta';
    
    protected static $apihubTypes = [
        'rfc' => 'string',
        'tipo_persona' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'nombres' => 'string',
        'fecha_nacimiento' => 'string',
        'numero_dependientes' => 'int',
        'fecha_defuncion' => 'string',
        'residencia' => '\RccLightSimulacion\Client\Model\CatalogoResidencia',
        'nacionalidad' => 'string'
    ];
    
    protected static $apihubFormats = [
        'rfc' => null,
        'tipo_persona' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'nombres' => null,
        'fecha_nacimiento' => 'yyyy-MM-dd',
        'numero_dependientes' => 'int32',
        'fecha_defuncion' => 'yyyy-MM-dd',
        'residencia' => null,
        'nacionalidad' => null
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
        'rfc' => 'RFC',
        'tipo_persona' => 'tipoPersona',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'nombres' => 'nombres',
        'fecha_nacimiento' => 'fechaNacimiento',
        'numero_dependientes' => 'numeroDependientes',
        'fecha_defuncion' => 'fechaDefuncion',
        'residencia' => 'residencia',
        'nacionalidad' => 'nacionalidad'
    ];
    
    protected static $setters = [
        'rfc' => 'setRfc',
        'tipo_persona' => 'setTipoPersona',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'nombres' => 'setNombres',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'numero_dependientes' => 'setNumeroDependientes',
        'fecha_defuncion' => 'setFechaDefuncion',
        'residencia' => 'setResidencia',
        'nacionalidad' => 'setNacionalidad'
    ];
    
    protected static $getters = [
        'rfc' => 'getRfc',
        'tipo_persona' => 'getTipoPersona',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'nombres' => 'getNombres',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'numero_dependientes' => 'getNumeroDependientes',
        'fecha_defuncion' => 'getFechaDefuncion',
        'residencia' => 'getResidencia',
        'nacionalidad' => 'getNacionalidad'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['tipo_persona'] = isset($data['tipo_persona']) ? $data['tipo_persona'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['nombres'] = isset($data['nombres']) ? $data['nombres'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['numero_dependientes'] = isset($data['numero_dependientes']) ? $data['numero_dependientes'] : null;
        $this->container['fecha_defuncion'] = isset($data['fecha_defuncion']) ? $data['fecha_defuncion'] : null;
        $this->container['residencia'] = isset($data['residencia']) ? $data['residencia'] : null;
        $this->container['nacionalidad'] = isset($data['nacionalidad']) ? $data['nacionalidad'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['rfc']) && !preg_match("/^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$/", $this->container['rfc'])) {
            $invalidProperties[] = "invalid value for 'rfc', must be conform to the pattern /^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$/.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['nombres']) && (mb_strlen($this->container['nombres']) > 100)) {
            $invalidProperties[] = "invalid value for 'nombres', the character length must be smaller than or equal to 100.";
        }
        if (!is_null($this->container['nombres']) && (mb_strlen($this->container['nombres']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombres', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if (!is_null($rfc) && (!preg_match("/^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$/", $rfc))) {
            throw new \InvalidArgumentException("invalid value for $rfc when calling PersonaRespuesta., must conform to the pattern /^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$/.");
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getTipoPersona()
    {
        return $this->container['tipo_persona'];
    }
    
    public function setTipoPersona($tipo_persona)
    {
        $this->container['tipo_persona'] = $tipo_persona;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling PersonaRespuesta., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling PersonaRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling PersonaRespuesta., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling PersonaRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getNombres()
    {
        return $this->container['nombres'];
    }
    
    public function setNombres($nombres)
    {
        if (!is_null($nombres) && (mb_strlen($nombres) > 100)) {
            throw new \InvalidArgumentException('invalid length for $nombres when calling PersonaRespuesta., must be smaller than or equal to 100.');
        }
        if (!is_null($nombres) && (mb_strlen($nombres) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombres when calling PersonaRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['nombres'] = $nombres;
        return $this;
    }
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
        return $this;
    }
    
    public function getNumeroDependientes()
    {
        return $this->container['numero_dependientes'];
    }
    
    public function setNumeroDependientes($numero_dependientes)
    {
        $this->container['numero_dependientes'] = $numero_dependientes;
        return $this;
    }
    
    public function getFechaDefuncion()
    {
        return $this->container['fecha_defuncion'];
    }
    
    public function setFechaDefuncion($fecha_defuncion)
    {
        $this->container['fecha_defuncion'] = $fecha_defuncion;
        return $this;
    }
    
    public function getResidencia()
    {
        return $this->container['residencia'];
    }
    
    public function setResidencia($residencia)
    {
        $this->container['residencia'] = $residencia;
        return $this;
    }
    
    public function getNacionalidad()
    {
        return $this->container['nacionalidad'];
    }
    
    public function setNacionalidad($nacionalidad)
    {
        $this->container['nacionalidad'] = $nacionalidad;
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
