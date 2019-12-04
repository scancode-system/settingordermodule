<?php

namespace Modules\SettingOrder\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingOrder extends Model
{
	protected $fillable = ['id', 'order_start'];


	public function event_setting()
	{
		return $this->morphOne(EventSetting::class, 'configurable');
	}
}

