<?php namespace Valentinwebdev\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevGamesItems3 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_games_items', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_games_items', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
