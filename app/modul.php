<?php

namespace learnHt;

use Illuminate\Database\Eloquent\Model;

class modul extends Model
{
    protected $fillable = [
        'titre','description', 'content','cours_id', '_token',
    ];


    public function cours()
    {
        return $this->belongsTo('learnHt\cours','cours_id','id');
    }
}
