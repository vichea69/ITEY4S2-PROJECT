<?php

namespace App\Http\Livewire\User;

use App\Models\Province;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEditProvinceComponent extends Component
{
    use WithFileUploads;

    public $province_id;
    public $name;
    public $slug;
    public $image;
    public $is_popular = 0;
    public $newimage;

    public function mount()
    {
        $provicne = Province::find($this->province_id);
        $this->name = $provicne->name;
        $this->slug = $provicne->slug;
        $this->image = $provicne->image;
        $this->is_popular = $provicne->is_popular;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required'
        ]);
    }

    public function updateProvince()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        $province = Province::find($this->province_id);
        $province->name = $this->name;
        $province->slug = $this->slug;
        if ($this->newimage) {
            $extension = $this->newimage->extension();
            $fileName = date('ymdHis') . '.' . $extension;
            $this->newimage->storeAs('categories', $fileName);
            $province->image = $fileName;
        }
        $province->is_popular = $this->is_popular;
        $province->save();
        return redirect()->route('admin.province');
    }

    public function render()
    {
        return view('livewire.user.user-edit-province-component', ['province_id' => $this->province_id]);
    }
}
