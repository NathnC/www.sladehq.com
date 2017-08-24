<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teams';



    public function user()
    {
        return $this->belongsTo('App\User', 'team_id', 'id');
    }
}
