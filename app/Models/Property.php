<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Property extends Model 
{
    use HasTranslation, HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
        'adres',
        // 'country',
        'property_type',
        'bedrooms',
        'bathrooms',
        'space',
        'garages',
        'sales_type',
        'discount',
        'price',
        // 'country_id'
        // 'position',
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = [
        'title',
    ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'images' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 4,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function propertyTypes()
    {
        return $this->belongsToMany(\App\Models\PropertyType::class);
    }

    public function cities()
    {
        return $this->belongsToMany(\App\Models\City::class);
    }
}
