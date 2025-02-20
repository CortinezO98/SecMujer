<?php

namespace App\Enums;

enum Roles: int
{
    case Administrador = 1;
    case Supervisor = 2;
    case Agente = 3;
    case Lider = 4;
    case Coordinador = 5;
}