<?php namespace Valentinwebdev\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevGamesItemsCategories extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_games_items_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('games_id');
            $table->integer('categories_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_games_items_categories');
    }
}
