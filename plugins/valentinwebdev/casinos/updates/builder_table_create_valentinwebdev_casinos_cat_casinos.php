<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevCasinosCatCasinos extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_casinos_cat_casinos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('casino_id');
            $table->integer('cat_id');
            $table->primary(['casino_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_casinos_cat_casinos');
    }
}
