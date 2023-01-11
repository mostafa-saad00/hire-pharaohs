<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function freelancers()
    {
        return $this->belongsToMany(Freelancer::class);
    }

    public function freelancer_services_price_rates()
    {
        return $this->hasMany(FreelancerServicePriceRate::class);
    }
}
