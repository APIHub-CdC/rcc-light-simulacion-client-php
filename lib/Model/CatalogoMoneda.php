<?php

namespace RccLightSimulacion\Client\Model;
use \RccLightSimulacion\Client\ObjectSerializer;

class CatalogoMoneda
{
    
    const MX = 'MX';
    const US = 'US';
    const UD = 'UD';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::MX,
            self::US,
            self::UD,
        ];
    }
}
