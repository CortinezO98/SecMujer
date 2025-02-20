<?php

namespace App\Utilities;

class Utility
{
    public static function GenerarConsecutivo(){
        return date('YmdHis') . sprintf('%04d', round(microtime(true) * 1000) % 1000);
    }

    public static function ObtenerNumeroInteraccionSinTipificacion(){
        return 7777777;
    }
}