<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevBonusesItems4 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_bonuses_items', function($table)
        {
            $table->dropColumn('text');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_bonuses_items', function($table)
        {
            $table->string('text', 255);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
