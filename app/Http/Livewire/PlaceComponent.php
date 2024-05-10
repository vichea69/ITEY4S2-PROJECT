<?php

namespace App\Http\Livewire;

use App\Models\Place;
use App\Models\Province;
use Livewire\Component;

class PlaceComponent extends Component
{
    public function render()
    {
        $province = Province::orderBy('name', 'ASC')->get();
        $popular_place = Place::latest()->take(4)->get();
        $place = Place::orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.place-component', ['place' => $place, 'province' => $province, 'popular_place' => $popular_place]);
    }
}
