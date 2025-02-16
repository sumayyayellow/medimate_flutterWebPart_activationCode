<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class StateTraking extends Model
{

    use LogsActivity;

    protected $fillable = ['name'];

    protected static $logFillable = true;
}
