<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public $table = 'channels';
    protected $fillable = ['channel_name','messages_id'];
    
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'messages_id', 'id');
    }
}
