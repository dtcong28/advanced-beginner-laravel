<?php

namespace App\Models\Builder;

use Illuminate\Database\Eloquent\Builder;

class CustomBuilder extends Builder
{
    public function upsert(array $values, $uniqueBy, $update = null)
    {
        if ($this->model->insertedBy || $this->model->updatedBy) {
            foreach ($values as &$value) {
                if ($this->model->insertedBy) {
                    data_set($value, getConfig('model_field.created.by'), getConfig('model_field.created.default_by'));
                }

                if ($this->model->updatedBy) {
                    data_set($value, getConfig('model_field.updated.by'), getConfig('model_field.updated.default_by'));
                }
            }
        }

        return parent::upsert($values, $uniqueBy, $update);
    }
}
