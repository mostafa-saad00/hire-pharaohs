<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function freelancers_avaliabilities()
    {
        return $this->belongsToMany(Freelancer::class);
    }
}
