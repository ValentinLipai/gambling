<?php namespace Valentinwebdev\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevGamesCategories extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_games_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('cat_title', 191);
            $table->string('cat_slug', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_games_categories');
    }
}
