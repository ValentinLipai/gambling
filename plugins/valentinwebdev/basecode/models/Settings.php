<?php

namespace Valentinwebdev\Basecode\Models;

use Model;

class Settings extends Model
{

    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    /**
     * @var string
     */
    public $settingsCode = 'valentinwebdev_site_settings';

    // Reference to field configuration
    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';

    public static function getValue($sCode) {
        if (empty($sCode)) {
            return null;
        }

        // Get settings object
        $obSettings = self::where('item', 'valentinwebdev_site_settings')->first();
        if (empty($obSettings)) {
            return null;
        }

        $sValue = $obSettings->$sCode;
        return $sValue;
    }

}