<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevCasinosCategories extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_casinos_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->string('slug', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_casinos_categories');
    }
}
