<?php

namespace App\Enums;

enum EstadosEvaluaciones: int
{
    case Evaluado = 1;
    case Pendiente = 2;
    case ReEvaluado = 3;
    case Refutado = 4;

}