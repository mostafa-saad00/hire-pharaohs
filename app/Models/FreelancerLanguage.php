<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerLanguage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
    
}
