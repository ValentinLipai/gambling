<?php namespace Valentinwebdev\Games\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevGamesItems6 extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_games_items', function($table)
        {
            $table->string('slug', 191);
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_games_items', function($table)
        {
            $table->dropColumn('slug');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
