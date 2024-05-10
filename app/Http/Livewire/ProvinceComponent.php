<?php

namespace App\Http\Livewire;

use App\Models\Place;
use App\Models\Province;
use Livewire\Component;

class ProvinceComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {

        $province = Province::where('slug', $this->slug)->first();
        $province_id = $province->id;
        $province_name = Province::orderBy('name', 'ASC')->get();
        $popular_visit_place = Place::latest()->take(4)->get();
        $place = Place:: where('province_id', $province->id)->orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.province-component', ['place' => $place, 'province_name' => $province_name, 'popular_visit_place' => $popular_visit_place]);

    }
}
