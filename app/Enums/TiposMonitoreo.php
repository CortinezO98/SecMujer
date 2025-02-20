<?php

namespace App\Enums;

enum TiposMonitoreo: int
{
    case Calibración = 1;
    case Intrusión = 2;
    case Lado = 3;
    case Remoción = 4;
    case Remoto = 5;
    case Seguimiento =  6;
    case ClienteIncognito = 7;
}