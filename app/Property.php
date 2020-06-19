<?php

namespace App;

use App\User;
use App\ApartmentType;
use App\Category;
use App\Location;
use App\Type;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
	use Sluggable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table= 'properties';
    protected $fillable=['title','description','featured_image','first_image','second_image','third_image','fourth_image','price','phone_number','bathroom','bed_space','sqft','toilet'];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function isTheOwner($user)
    {
        return $this->user_id === $user->id;
    }

    public function apartmenttype()
    {
        return $this->belongsToMany(Category::class, 'categories_properties');
    }

    public function location()
    {
        return $this->belongsToMany(Location::class, 'locations_properties');
    }

    public function type()
    {
        return $this->belongsToMany(Type::class, 'properties_types');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
    return 'slug';
    }
}
