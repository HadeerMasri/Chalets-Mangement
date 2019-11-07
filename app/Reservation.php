<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['chalet_id','user_id','from_time','to_time','status','role_id'];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Chalet(){
        return $this->belongsTo(Chalet::class);
    }

}
