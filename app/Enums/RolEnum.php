<?php

// app/Enums/RolEnum.php
namespace App\Enums;

enum RolEnum: int {
    case USER = 0;
    case PROFESOR = 1;
    case ADMIN = 2;
}
