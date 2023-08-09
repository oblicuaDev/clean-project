<?php
/*

Vacacional class
Version 1.0
Basic PHP functions forVacacional

*/
session_start();
class tarjetaCiudad extends bogota{
    public $domain = "https://www.bogotadc.travel/drpl/es/api/v1";
    public $domainv2 = "https://www.bogotadc.travel/drpl/es/api/v2";
    public $generalInfo = array();
    public $language = "";
    public $production = true;

    function __construct($language, $development = false){
        $this->language = $language;
        if ($development) {
            $this->production = false;
        }       
    }
}


