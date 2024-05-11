<?php

namespace App\Http\Livewire\User;

use App\Models\Place;
use App\Models\Province;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditPlaceComponent extends Component
{
    use WithFileUploads;

    public $place_id;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $featured = 0;
    public $image;
    public $newimage;
    public $province_id;

    public function mount($place_id)
    {
        $place = Place::findOrFail($place_id);
        $this->place_id = $place->id;
        $this->name = $place->name;
        $this->slug = $place->slug;
        $this->short_description = $place->short_description;
        $this->description = $place->description;
        $this->featured = $place->featured;
        $this->image = $place->image;
        $this->province_id = $place->province_id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updatePlace()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'featured' => 'nullable',
            'newimage' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:20000',
            'province_id' => 'required',
        ]);

        $place = Place::findOrFail($this->place_id);
        $place->name = $this->name;
        $place->slug = $this->slug;
        $place->short_description = $this->short_description;
        $place->description = $this->description;
        $place->featured = $this->featured;
        if ($this->newimage) {
            $extension = $this->newimage->extension();
            $fileName = date('ymdHis') . '.' . $extension;
            $this->newimage->storeAs('products', $fileName);
            $place->image = $fileName;
        }
        $place->province_id = $this->province_id;
        $place->save();
        return redirect()->route('admin.place');
    }

    public function render()
    {
        $province = Province::orderBy('name', 'ASC')->get();
        return view('livewire.user.user-edit-place-component', ['province' => $province]);
    }
}

