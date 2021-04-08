<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevBonusesTypes extends Migration
{
    public function up()
    {
        Schema::rename('valentinwebdev_bonuses_', 'valentinwebdev_bonuses_types');
    }
    
    public function down()
    {
        Schema::rename('valentinwebdev_bonuses_types', 'valentinwebdev_bonuses_');
    }
}
