<?php

namespace App\Enums;

enum Atributos: int
{
    case ErroresNoCriticosCIW = 1;
    case ErroresCriticosNegocioCIW = 2;
    case ErroresCriticosUsuarioFinalCIW = 3;
}