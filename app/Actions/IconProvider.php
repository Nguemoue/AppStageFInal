<?php


namespace App\Actions;


class IconProvider
{
    protected static  $arrayItem = [
        'fusil'=>'mdi mdi-pistol',
        'couteau'=>'mdi mdi-knife-military',
        'vehicule'=>'mdi mdi-car-estate',
        'armures'=>'mdi mdi-shield-sun',
        'gilets'=>'mdi mdi-dots-grid',
        'pistolet'=>'mdi mdi-magazine-pistol'
    ];
    static function getIcon(string $name){
        $default = "mdi mdi-vector-point";
        if(array_key_exists($name,self::$arrayItem))
            return self::$arrayItem["$name"];
        return $default;
    }

}
