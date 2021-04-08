<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevCasinosList4 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_casinos_list', function($table)
        {
            $table->string('title', 191);
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_casinos_list', function($table)
        {
            $table->dropColumn('title');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
