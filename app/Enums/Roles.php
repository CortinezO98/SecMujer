<?php

namespace App\Enums;

enum Roles: int
{
    case Administrador = 1;
    case Supervisor = 2;
    case AgenteContactoInicial = 3;
    case AgenteProfesional = 4;
}