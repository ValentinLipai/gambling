<?php namespace Valentinwebdev\Casinos\Models;

use Model;

/**
 * Model
 */
class Casinos extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'valentinwebdev_casinos_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */

    public $belongsToMany = [
        "category" => [
            'Valentinwebdev\Casinos\Models\Categories',
            'table' => 'valentinwebdev_casinos_cat_casinos',
            'order' => 'cat_title'
        ]
    ];

}
