<?php

namespace App;


use Ghanem\Rating\Traits\Ratingable as Rating;
use Illuminate\Database\Eloquent\Model;

class Chalet extends Model
{

    use Rating;
    protected $fillable =['name','price','description','user_id'];


    public function Address(){
        return $this->hasOne(Address::class);
    }
    public function priceDetails(){
        return $this->hasOne(Price::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }

    public function Details(){
        return $this->hasOne(Details::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Reservation(){
        return $this->hasMany(Reservation::class);
    }
    public function Offers(){
        return $this->hasMany(Offer::class);
    }




}

