<?php

namespace App\Http\Livewire\Admin;

use App\Models\Place;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPlaceComponent extends Component
{
    use WithPagination;

    public function deletePlace($place_id)
    {
        $place = Place::findOrFail($place_id);
        $place->delete();
        return redirect()->route('admin.place');
    }

    public function render()
    {
        $place = Place::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin.admin-place-component', ['place' => $place]);
    }
}
