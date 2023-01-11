<?php

namespace App\Http\Livewire\Admin\Freelancer;

use Livewire\Component;
use App\Models\Freelancer;
use Livewire\WithPagination;

class Freelancers extends Component
{
    use WithPagination;
    
    public function render()
    {
        $freelancers = Freelancer::paginate(15);
        return view('livewire.admin.freelancer.freelancers', ['freelancers' => $freelancers]);
    }
}
