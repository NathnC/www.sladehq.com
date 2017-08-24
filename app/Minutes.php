<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minutes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'minutes';
    protected $fillable = [
        'minutes', 'project_id', 'description'
    ];



    /**
     * Get the project that owns the minute log.
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    /**
     * Get the user that made the log
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
