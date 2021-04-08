<?php namespace Valentinwebdev\Customplugins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevCustompluginsFaq extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_customplugins_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_customplugins_faq');
    }
}
