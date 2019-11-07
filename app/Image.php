<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable =['path','chalet_id'];

    public function Chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
