<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Route;

class rol extends Model
{

    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    
    protected static $logOnlyDirty = true;
    
    protected static $submitEmptyLogs = false;
    /**
     * The attributes that are mass assignable.
     *
    * @var array
    */
    protected $fillable = ['idrol','nombre'];
    
    protected static $logAttributes = ['idrol','nombre'];
}