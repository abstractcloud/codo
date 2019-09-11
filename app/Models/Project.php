<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';
    protected $fillable = ['project_name','project_description'];
    
    public function teams()
    {
        return $this->hasMany('App\Models\Team', 'teams_id', 'id');
    }
}
