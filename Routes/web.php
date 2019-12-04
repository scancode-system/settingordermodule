<?php

Route::prefix('settingorder')->group(function() {
	Route::put('{setting_order}', 'SettingOrderController@update')->name('settingorder.update');
});
