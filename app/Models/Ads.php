<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = 'advertisements';

    protected $fillable = [
        'title', 'description', 'image', 'city_id'
    ];

    public $timestamps = false;

    /* relation */
    public function location(){
        return $this->belongsTo(Location::class, 'city_id');
    }

    /* to get image direct in blade file without complete path */
    public function getImageAttribute($val){
        return ($val !== null) ? asset('assets/admin/images/'.$val) : "";
    }

}
