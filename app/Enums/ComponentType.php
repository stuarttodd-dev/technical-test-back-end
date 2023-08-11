<?php

namespace App\Enums;

enum ComponentType: string
{
    case BLADE = 'Blade';
    case ROTOR = 'Rotor';
    case HUB = 'Hub';
    case GENERATOR = 'Generator';
}
