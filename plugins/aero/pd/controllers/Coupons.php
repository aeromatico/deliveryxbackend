<?php namespace Aero\Pd\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Coupons extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'pd_coupons' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Aero.Pd', 'menuMarketing', 'menuMarketingCoupons');
    }
}