<?php namespace Valentinwebdev\Games\Models;

use Model;

/**
 * Model
 */
class Games extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'valentinwebdev_games_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['params'];

    /* Relations */

    public $belongsTo = [
        "category" => [
            'Valentinwebdev\Games\Models\Categories',
            'table' => 'valentinwebdev_games_items_categories',
            'order' => 'cat_title'
        ]
    ];
}
