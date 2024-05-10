<?php

namespace App\Http\Livewire;

use App\Models\Place;
use App\Models\Province;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()

    {
        $recommended_place = Place::orderBy('created_at', 'DESC')->get()->take(8);
        $mostvisit_place = Place::where('featured', 1)->inRandomOrder()->get()->take(8);
        $pouplar_province = Province::where('is_popular', 1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component', ['recommended_place' => $recommended_place, 'mostvisit_place' => $mostvisit_place, 'pouplar_province' => $pouplar_province,]);

    }
}
