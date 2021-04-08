<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevCasinosList16 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_casinos_list', function($table)
        {
            $table->string('meta_title', 255);
            $table->string('meta_description', 255);
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_casinos_list', function($table)
        {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
