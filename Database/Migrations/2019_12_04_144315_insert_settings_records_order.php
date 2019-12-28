<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Setting; 

class InsertSettingsRecordsOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Setting::create(['module' => 'SettingOrder', 'alias' => 'Pedido', 'import' => 'Order@setting']);
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
 