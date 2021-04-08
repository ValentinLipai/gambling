<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevCasinosCatCasinos extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_casinos_cat_casinos', function($table)
        {
            $table->dropPrimary(['casino_id','cat_id']);
            $table->renameColumn('casino_id', 'casinos_id');
            $table->primary(['casinos_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_casinos_cat_casinos', function($table)
        {
            $table->dropPrimary(['casinos_id','cat_id']);
            $table->renameColumn('casinos_id', 'casino_id');
            $table->primary(['casino_id','cat_id']);
        });
    }
}
