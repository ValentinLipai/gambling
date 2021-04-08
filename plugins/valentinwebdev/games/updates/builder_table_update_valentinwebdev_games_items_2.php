<?php namespace Valentinwebdev\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevGamesItems2 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_games_items', function($table)
        {
            $table->dropColumn('params');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_games_items', function($table)
        {
            $table->text('params');
        });
    }
}
