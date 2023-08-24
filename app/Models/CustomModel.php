<?php

namespace App\Models;

use App\Models\Builder\CustomBuilder;
use Core\Models\BaseModelSoftDelete;

class CustomModel extends BaseModelSoftDelete
{
    public $insertedBy = false;

    public $updatedBy = false;

    public function newEloquentBuilder($query)
    {
        return new CustomBuilder($query);
    }
}
