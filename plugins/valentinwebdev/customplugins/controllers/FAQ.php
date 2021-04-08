<?php namespace Valentinwebdev\Customplugins\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class FAQ extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Valentinwebdev.Customplugins', 'main-menu-item', 'side-menu-item');
    }
}
