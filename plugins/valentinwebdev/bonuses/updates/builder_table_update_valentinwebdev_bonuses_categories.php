<?php namespace Valentinwebdev\Bonuses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateValentinwebdevBonusesCategories extends Migration
{
    public function up()
    {
        Schema::table('valentinwebdev_bonuses_categories', function($table)
        {
            $table->string('card_bg_clr', 30);
        });
    }
    
    public function down()
    {
        Schema::table('valentinwebdev_bonuses_categories', function($table)
        {
            $table->dropColumn('card_bg_clr');
        });
    }
}
