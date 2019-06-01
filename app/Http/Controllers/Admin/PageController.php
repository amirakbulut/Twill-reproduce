<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class PageController extends ModuleController
{
    protected $moduleName = 'pages';

    protected function getPermalinkBaseUrl()
    {
        return request()->getScheme() . '://' . config('app.url') . '/'
            //. ($this->moduleHas('translations') ? '{language}/' : '')
            . ($this->moduleHas('revisions') ? '{preview}/' : '');
            // . ($this->permalinkBase ?? $this->moduleName)
            // . (isset($this->permalinkBase) && empty($this->permalinkBase) ? '' : '/');
    }
}
