<?php

namespace App\Http\Livewire\User;

use App\Models\Province;
use Livewire\Component;

class UserProvinceComponent extends Component
{
    public function render()
    {
        $province = Province::orderBy('name', 'ASC')->paginate(5);
        return view('livewire.user.user-province-component', ['province' => $province]);
    }
}
