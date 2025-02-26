<?php

namespace App\Enums;

enum Atributos: int
{
    case ErroresNoCriticosCIW = 1;
    case ErroresCriticosNegocioCIW = 2;
    case ErroresCriticosUsuarioFinalCIW = 3;
    case ErroresNoCriticosAPW = 4;
    case ErroresCriticosNegocioAPW = 5;
    case ErroresCriticosUsuarioFinalAPW = 6;
    case ErroresNoCriticosCIT= 7;
    case ErroresCriticosNegocioCIT= 8;
    case ErroresCriticosUsuarioFinalCIT= 9;
    case ErroresNoCriticosAPT= 10;
    case ErroresCriticosNegocioAPT= 11;
    case ErroresCriticosUsuarioFinalAPT= 12;

}