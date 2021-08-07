<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Route;

class user extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'iduser';
    
    protected static $logOnlyDirty = true;
    
    protected static $submitEmptyLogs = false;
    /**
     * The attributes that are mass assignable.
     *
    * @var array
    */
    protected $fillable = ['iduser','nombre','documento','rol'];
    
    protected static $logAttributes = ['iduser','nombre','documento','rol'];
}