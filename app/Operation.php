<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = ['operation_name', 'operation_detail', 'marketing_image'];
    protected $primaryKey = 'id';
    protected $table = 'operations';
    //
}
