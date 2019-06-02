<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\City;

class CityRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(City $model)
    {
        $this->model = $model;
    }
}
