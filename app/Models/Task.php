<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tasks';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['title', 'dream_id', 'status', 'user_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function user(){
        return $this->belongsTo('App\Models\BackpackUser');
    }

    public function dream()
    {
        return $this->belongsTo('App\Models\Dream');
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
/*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeCompleted($query)
    {
        return $query->where('status', 'COMPLETED')
                    ->where('created_at', '<=', date('Y-m-d'))
                    ->orderBy('created_at', 'DESC');
    }

    public function scopeIncomplete($query)
    {
        return $query->whereNotIn('status', 'COMPLETED')
                    ->where('created_at', '<=', date('Y-m-d'))
                    ->orderBy('created_at', 'DESC');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    protected static function boot()
	{
        parent::boot();
        
        static::addGlobalScope(new UserScope);
	}
}

