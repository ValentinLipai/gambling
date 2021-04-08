<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevBonusesItems2 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_bonuses_items', function($table)
        {
            $table->renameColumn('card_title', 'text');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_bonuses_items', function($table)
        {
            $table->renameColumn('text', 'card_title');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
