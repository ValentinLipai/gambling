<?php 

namespace Valentinwebdev\Basecode;

use System\Classes\PluginBase;

/**
 * Class Plugin
 * @package SaurabhDhariwal\Comments
 */
class Plugin extends PluginBase
{
    public function pluginDetails() {
        return [
            'name' => 'BaseCode',
            'description' => 'Theme settings',
            'author' => 'Valentin Webdev'
        ];
    }

    /**
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Theme Settings',
                'icon'        => 'icon-wrench',
                'description' => 'Manage Settings.',
                'class'       => 'Valentinwebdev\Basecode\Models\Settings',
                'order'       => 60
            ]
        ];
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Valentinwebdev\BaseCode\Components\SiteSettings' => 'SiteSettings',
        ];
    }
}
