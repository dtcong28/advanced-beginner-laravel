<?php

namespace App\Services;

use App\Repositories\AdministratorRepository;

class AdministratorService extends CustomService
{
    public function __construct()
    {
        parent::__construct();
        $this->setRepository(app(AdministratorRepository::class));
    }

    public function store($params)
    {
        return parent::store($params);
    }

    public function update($id, $params)
    {
        return parent::update($id, $params);
    }

    public function destroy($id)
    {
        return parent::destroy($id);
    }

//    protected function prepareBeforeStore(&$data)
//    {
//        if (!empty($data['password'])) {
//            $data['password'] = bcrypt($data['password']);
//        }
//    }

//    protected function prepareBeforeUpdate(&$data)
//    {
//        if (!empty($data['password'])) {
//            $data['password'] = bcrypt($data['password']);
//        } else {
//            unset($data['password']);
//        }
//    }
}
