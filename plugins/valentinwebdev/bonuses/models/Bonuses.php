<?php namespace Valentinwebdev\Bonuses\Models;

use Model;

/**
 * Model
 */
class Bonuses extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'valentinwebdev_bonuses_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */

    public $belongsTo = [
        "category" => [
            'Valentinwebdev\Bonuses\Models\Categories',
            'table' => 'valentinwebdev_bonuses_items_categories',
            'order' => 'cat_title'
        ]
    ];
}
