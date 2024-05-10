<?php

namespace App\Http\Livewire;

use App\Models\Place;
use App\Models\Province;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $place = Place::where('slug', $this->slug)->first();
        $recommended_place = Place::where('province_id', $place->province_id)->inRandomOrder()->limit(4)->get();
        $pplace = Place::latest()->take(4)->get();
        $province = Province::orderBy('name', 'ASC')->get();
        return view('livewire.details-component', ['place' => $place, 'recommended_place' => $recommended_place, 'pplace' => $pplace, 'province' => $province]);
    }
}

