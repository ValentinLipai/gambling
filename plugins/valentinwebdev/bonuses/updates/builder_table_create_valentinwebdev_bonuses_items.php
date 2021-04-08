<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevBonusesItems extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_bonuses_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->string('accent', 191);
            $table->string('card_title', 255);
            $table->string('bonus_code', 20);
            $table->string('bonus_code_text', 191);
            $table->string('btn_link', 191);
            $table->string('btn_text', 191);
            $table->date('valid_date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_bonuses_items');
    }
}
