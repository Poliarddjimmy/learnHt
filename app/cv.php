<?php

namespace learnHt;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    protected $fillable = [
        'last_name','first_name', 'email','user_id', 'photo',
    ];


    public function user()
    {
        return $this->belongsTo('learnHt\User','user_id','id');
    }
}
