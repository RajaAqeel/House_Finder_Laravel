<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class h_picture extends Model
{
    protected $table = 'pictures'; 
    public $primaryKey='id';
    public $timestamps=true;
}
