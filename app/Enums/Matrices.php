<?php

namespace App\Enums;

enum Matrices: int
{
    case AtencionPsicosocialTelefonico = 1;
    case ContactoInicialTelefonico = 2;
    case AtencionPsicosocialWhatsapp = 3;
    case ContactoInicialWhatsapp = 4;
}