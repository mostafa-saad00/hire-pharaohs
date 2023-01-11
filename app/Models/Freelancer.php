<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Freelancer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function picture()
    {
        return $this->hasOne(FreelancerPicture::class);
    }

    public function skills()
    {
        return $this->hasMany(FreelancerSkill::class);
    }

    public function freelancer_services_price_rates()
    {
        return $this->hasMany(FreelancerServicePriceRate::class);
    }

    public function portfolios()
    {
        return $this->hasMany(FreelancerPortfolio::class);
    }

    public function languages()
    {
        return $this->hasMany(FreelancerLanguage::class);
    }

    public function educations()
    {
        return $this->hasMany(FreelancerEducation::class);
    }

    public function details()
    {
        return $this->hasOne(FreelancerDetail::class);
    }

    public function sevices()
    {
        return $this->belongsToMany(Service::class);
    }

    public function countries_avaliabilities()
    {
        return $this->belongsToMany(Country::class);
    }

    public function cities_avaliabilities()
    {
        return $this->belongsToMany(City::class);
    }




}
