<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Property;

class PropertyRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs, HandleMedias, HandleBlocks;

    public function __construct(Property $model)
    {
        $this->model = $model;
    }
}
