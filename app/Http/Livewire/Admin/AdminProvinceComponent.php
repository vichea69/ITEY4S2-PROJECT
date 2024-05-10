<?php

namespace App\Http\Livewire\Admin;

use App\Models\Province;
use Livewire\Component;

class AdminProvinceComponent extends Component
{
    public $province_id;

    public function deleteProvince($province_id)
    {
        $province = Province::where('id', $province_id)->first();
        $province->delete();
        return redirect()->route('admin.province');
    }

    public function render()
    {
        $province = Province::orderBy('name', 'ASC')->paginate(5);
        return view('livewire.admin.admin-province-component', ['province' => $province]);
    }
}
//}



