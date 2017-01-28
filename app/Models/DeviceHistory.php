<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceHistory extends Model
{
	public $timestamps 	= false ;
    protected $table 	= 'device_history' ;
    protected $dates 	= ['captured_at'];
    protected $fillable = [
        'device_id','meter_reading','captured_at',
    ];
}
