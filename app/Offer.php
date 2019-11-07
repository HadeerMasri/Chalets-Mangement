<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable=['chalet_id','new_price','from_time','to_time','user_id'];

    public function Chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
