<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Setting; 

class InsertSettingsRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Setting::create(['module' => 'SettingOrder', 'alias' => 'Pedido']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        (Setting::where('module', 'SettingOrder')->first())->delete();
    }
}
 