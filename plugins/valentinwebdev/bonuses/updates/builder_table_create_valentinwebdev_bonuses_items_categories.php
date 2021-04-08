<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevBonusesItemsCategories extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_bonuses_items_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('bonuses_id');
            $table->integer('categories_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_bonuses_items_categories');
    }
}
