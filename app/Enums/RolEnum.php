<?php

// app/Enums/RolEnum.php
namespace App\Enums;

enum RolEnum: int
{
    case USER = 0;
    case PROFESOR = 1;
    case ADMIN = 2;

    public function label(): string
    {
        return match($this) {
            self::USER => 'Cliente',
            self::PROFESOR => 'Profesor',
            self::ADMIN => 'Administrador',
        };
    }
}
