<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $fillable =['area','individuals_num','Bedroom','Garden','Parking','Large_Swimming_pool','Child_Swimming_pool','Bathroom','SalonForEvents','Tennis_Table'
        ,'Pool_Table','Play_Station','Volleyball','football','basketball','Soggy_Barrel','Barbecue','Electric_Oven'
        ,'Gaz','Fridge','Television','WIFI','Electronic_Generator','Solar_Energy','UPS','other','chalet_id'];
    protected $guarded=[];

    public function Chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
