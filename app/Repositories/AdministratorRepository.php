<?php

namespace App\Repositories;

use App\Models\Administrator;

class AdministratorRepository extends CustomRepository
{
    protected $model = Administrator::class;

    public function __construct()
    {
        parent::__construct();
    }
}
