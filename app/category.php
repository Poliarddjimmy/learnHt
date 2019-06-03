<?php

namespace learnHt;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function module()
    {
        return $this->hasMany('learnHt\module');
    }
}
