<?php

namespace RccLightSimulacion\Client\Model;
use \RccLightSimulacion\Client\ObjectSerializer;

class CatalogoTipoDomicilio
{
    
    const N = 'N';
    const O = 'O';
    const C = 'C';
    const P = 'P';
    const E = 'E';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::N,
            self::O,
            self::C,
            self::P,
            self::E,
        ];
    }
}
