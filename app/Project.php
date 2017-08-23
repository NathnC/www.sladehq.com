<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';
    protected $fillable = [
        'name'
    ];



    /**
     * Get the minutes for the project.
     */
    public function minutes()
    {
        return $this->hasMany('App\Minutes');
    }
}
