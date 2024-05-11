<?php

namespace App\Http\Livewire\User;

use App\Models\Province;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserAddProvinceComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;
    public $is_popular = 0;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:20000'
        ]);
    }

    public function storeProvince()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:20000'
        ]);
        $province = new Province();
        $province->name = $this->name;
        $province->slug = $this->slug;
        if ($this->image) {
            $extension = $this->image->extension();
            $fileName = date('ymdHis') . '.' . $extension;
            $this->image->storeAs('categories', $fileName);
            $province->image = $fileName;
        }
        $province->is_popular = $this->is_popular;
        $province->save();
        return redirect()->route('admin.province');
    }

    public function render()
    {

        return view('livewire.user.user-add-province-component');
    }
}
