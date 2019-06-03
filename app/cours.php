<?php

namespace learnHt;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $fillable = [
        'nom_cours','category', 'description_cours','user_id', 'photo', 'price', 'token'
    ];


    public function user()
    {
        return $this->belongsTo('learnHt\User','user_id','id');
    }

    public function module()
    {
        return $this->hasMany('learnHt\modul');
    }
}
