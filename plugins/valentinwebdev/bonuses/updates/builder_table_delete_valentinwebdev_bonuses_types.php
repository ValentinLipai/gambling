<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteValentinwebdevBonusesTypes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('valentinwebdev_bonuses_types');
    }
    
    public function down()
    {
        Schema::create('valentinwebdev_bonuses_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type', 191);
        });
    }
}
