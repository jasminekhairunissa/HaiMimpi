<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'dreams';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['title', 'status', 'category_id', 'user_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\BackpackUser');
    }

    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'dream_id');
    }

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
