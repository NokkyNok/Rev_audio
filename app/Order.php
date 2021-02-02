<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function items()
    {
        return $this->belongsToMany(Trancribe::class, 'order_items','order_id','file_id');
    }
    //
}
