<?php

namespace App\Enums;

enum TiposMonitoreo: int
{
    case Calibracion = 1;
    case Intrusion = 2;
    case Lado = 3;
    case Remocion = 4;
    case Remoto = 5;
    case Seguimiento =  6;
    case ClienteIncognito = 7;
}