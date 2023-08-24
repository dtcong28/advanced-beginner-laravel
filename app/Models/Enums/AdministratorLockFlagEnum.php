<?php

namespace App\Models\Enums;

enum AdministratorLockFlagEnum: int
{
    case UNLOCK = 0;
    case LOCK = 1;

    public function label(): string
    {
        return match ($this) {
            self::UNLOCK => 'Unlock',
            self::LOCK => 'Lock',
        };
    }
}
