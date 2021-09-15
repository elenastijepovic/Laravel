<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trener extends Model
{
    //use HasFactory;
    public $timestamps = false;
    protected $guarded=[];

    public function trener(){
        return $this->belongsTo(trener::class);
    }
}
