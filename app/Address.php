<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable =['latitude','longitude','city','chalet_id'];

    public function Chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
