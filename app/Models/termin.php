<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class termin extends Model
{
    //use HasFactory;
 public $timestamps = false;

    public function termin(){
        return $this->hasMany(termin::class);
     }

}
