<?php namespace Valentinwebdev\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevGames extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_games_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_games_');
    }
}
