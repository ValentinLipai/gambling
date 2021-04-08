<?php namespace Valentinwebdev\Casinos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevCasinosCategories extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_casinos_categories', function($table)
        {
            $table->string('cat_title', 191);
            $table->string('cat_slug', 191);
            $table->dropColumn('title');
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_casinos_categories', function($table)
        {
            $table->dropColumn('cat_title');
            $table->dropColumn('cat_slug');
            $table->string('title', 191);
            $table->string('slug', 191);
        });
    }
}
