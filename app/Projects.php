<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public $table = 'Projects';
    protected $fillable = ['project_title','project_description'];
}
