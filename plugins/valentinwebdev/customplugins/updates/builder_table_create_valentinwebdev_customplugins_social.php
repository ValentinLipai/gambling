<?php namespace Valentinwebdev\Customplugins\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateValentinwebdevCustompluginsSocial extends Migration
{
    public function up()
    {
        Schema::create('valentinwebdev_customplugins_social', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->string('link', 191);
            $table->string('icon_class', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('valentinwebdev_customplugins_social');
    }
}
