<?php

namespace App\Models\Enums;

enum AdministratorStatusEnum: int
{
    case STATUS_INACTIVE = 0;
    case STATUS_ACTIVE = 1;

    public function label(): string
    {
        return match ($this) {
            self::STATUS_INACTIVE => 'Inactive',
            self::STATUS_ACTIVE => 'Active',
        };
    }
}
