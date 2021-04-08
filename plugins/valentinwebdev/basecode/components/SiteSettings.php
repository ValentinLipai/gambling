<?php namespace Valentinwebdev\BaseCode\Components;

use Cms\Classes\ComponentBase;
use Valentinwebdev\BaseCode\Models\Settings;

class SiteSettings extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Site Settings',
            'description' => 'Site settings fields'
        ];
    }

    public function get($sCode)
    {
        return Settings::getValue($sCode);
    }
}