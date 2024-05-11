<?php

namespace App\Http\Livewire\User;

use App\Models\Place;
use App\Models\Province;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserAddPlaceComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $featured = 0;
    public $image;
    public $province_id;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addPlace()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'featured' => 'nullable',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:20000',
            'province_id' => 'required',

        ]);
        $place = new Place();
        $place->name = $this->name;
        $place->slug = $this->slug;
        $place->short_description = $this->short_description;
        $place->description = $this->description;
        $place->featured = $this->featured;

        if ($this->image) {
            $extension = $this->image->extension();
            $fileName = date('ymdHis') . '.' . $extension;
            $this->image->storeAs('products', $fileName);
            $place->image = $fileName;
        }
        $place->featured = $this->featured ?? 0;
        $place->province_id = $this->province_id;
        $place->save();
        session()->flush('message', 'The Place has benn Added');
    }

    public function render()
    {
        $province = Province::orderBy('name', 'ASC')->get();
        return view('livewire.user.user-add-place-component', ['province' => $province]);
    }
}
