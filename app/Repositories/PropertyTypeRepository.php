<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PropertyType;

class PropertyTypeRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(PropertyType $model)
    {
        $this->model = $model;
    }
}
