<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevCasinosList extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_casinos_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('image', 255);
            $table->integer('rating');
            $table->boolean('is_free_spins')->default(false);
            $table->string('bonus_value', 191);
            $table->string('bonus_value_right', 191);
            $table->string('bonus_text', 191);
            $table->string('game_link_title', 191);
            $table->string('game_link', 191);
            $table->string('more_link_title', 191);
            $table->string('more_link', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_casinos_list');
    }
}
