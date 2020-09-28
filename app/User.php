<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_pic',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    /**
     * Get the articles this user has posted
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /**
     * Get the role of this user
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * Check if User has any of the roles supplied in array
     *
     * @param  array  $roles
     * @return bool
     */
    public function hasAnyRoles($roles)
    {
        if($this->role()->whereIn('role', $roles)->first())
            return true;
          
        return false;
    }

    /**
     * Check if User has the roles supplied
     *
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        if($this->role()->where('role', $role)->first())
            return true;

        return false;
    }
}
