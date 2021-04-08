<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevBonuses extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_bonuses_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_bonuses_');
    }
}
