<?php namespace Valentinwebdev\Customplugins\Models;

use Model;

/**
 * Model
 */
class Social extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'valentinwebdev_customplugins_social';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
