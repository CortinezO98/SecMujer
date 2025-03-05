<?php

namespace App\Utilities;

class Utility
{
    public static function GenerarConsecutivo(){
        return date('YmdHis') . sprintf('%04d', round(microtime(true) * 1000) % 1000);
    }

    public static function AgregarNotaAtributoEvaluacion(&$diccionario, $atributo_id, $nota)
    {
        if (isset($diccionario[$atributo_id])) {
            $diccionario[$atributo_id] += $nota;
        } else {
            $diccionario[$atributo_id] = $nota;
        }
    }
}