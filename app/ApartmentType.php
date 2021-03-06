<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;

class ApartmentType extends Model
{

    protected $guarded=[];


    public function properties()
    {
    	return $this->belongsToMany(Property::class, 'categories_properties');
    }
}
