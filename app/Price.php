<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable =['sat_morning','sat_evening','sun_morning','sun_evening','mon_morning','mon_evening','tue_morning'
        ,'tue_evening','wed_morning','wed_evening','thu_morning','thu_evening','fri_morning','fri_evening','chalet_id'];

    public function Chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
