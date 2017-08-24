<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Get the minutes logged by user.
     */
    public function minutes()
    {
        return $this->hasMany('App\Minutes');
    }


    /**
     * Get users team info
     */
    public function team()
    {
        return $this->hasOne('App\Team', 'id', 'team_id');
    }

}
