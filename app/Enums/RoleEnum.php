<?php

namespace App\Enums;

enum RoleEnum: int
{
    case ADMIN = 1;
    case PROPRIETOR  = 2;
    case TOURIST = 3;
}