<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //letting laravel know that its ok to create data
    protected $guarded = [];

    //getSomethingAttribute helps us process data before sending to view
    public function getReadableStatusAttribute()
    {
        return ($this->status == 0) ? 'Pending' : 'Completed';
    }
}
