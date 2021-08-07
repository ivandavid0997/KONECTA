<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Contracts\Activity;
use Route;

class cliente extends Model
{

    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    
    protected static $logOnlyDirty = true;
    
    protected static $submitEmptyLogs = false;
    /**
     * The attributes that are mass assignable.
     *
    * @var array
    */
    protected $fillable = ['idcliente','nombre','documento','direccion','email'];
    
    protected static $logAttributes = ['idcliente','nombre','documento','direccion','email'];
}