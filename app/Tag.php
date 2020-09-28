<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
	* @var string
    */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag'];

    /**
     * Get the articles that have this tag
     */
    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }
}
