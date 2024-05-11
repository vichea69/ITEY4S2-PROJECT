<?php

namespace App\Http\Livewire\User;

use App\Models\Place;
use Livewire\Component;

class UserPlaceComponent extends Component
{
    public function render()
    {
        $place = Place::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.user.user-place-component', ['place' => $place]);
    }
}
