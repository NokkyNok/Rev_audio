<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trancribe extends Model
{
    protected $fillable = ['format', 'file', 'cost'];
    protected $primaryKey = 'id';
    protected $table = 'trancribes';

    //
    public function Users()
{
    return $this->belongsTo('App\models\User');
}

}
