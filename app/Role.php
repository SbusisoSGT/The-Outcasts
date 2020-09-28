<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role'];

    /**
     * 
     * @var string
     */
    public $timestamps = false;

    /**
     * Get the users who have this role
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
