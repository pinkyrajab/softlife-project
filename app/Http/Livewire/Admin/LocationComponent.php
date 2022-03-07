<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class LocationComponent extends Component
{
    public $name;
    public $slug;
    public $location;
    public $location_id;
    public $location_edit_id, $location_delete_id;
    public $view_location_name, $view_location_slug;

    public $showEditModal = false;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'unique: locations'
        ]);
    }

    // CREATE LOCATION
    public function storeLocation()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required | unique:locations'
        ]);

        $location = new Location();
        $location->name = $this->name;
        $location->slug = $this->slug;

        $location->save();
        return redirect()->route('admin.locations')->with('success', 'Location has been saved successfully');
    }

    //UPDATE LOCATION
    public function resetInputs()
    {
        $this->location_id = '';
        $this->name = '';
        $this->slug = '';
        $this->location_edit_id = '';
    }

    public function editLocation($id)
    {
        $location = Location::where('id', $id)->first();

        $this->location_edit_id = $location->id;
        $this->name = $location->name;
        $this->slug = $location->slug;

        $this->dispatchBrowserEvent('show-edit-form');
    }

    public function editLocationData()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required | unique:locations'
        ]);

        $location = Location::where('id', $this->location_edit_id)->first();
        $location->name = $this->name;
        $location->slug = $this->slug;

        $location->save();
        return redirect()->route('admin.locations')->with('success', 'Location has been updated successfully');
    }

    //DELETE LOCATION
    public function deleteConfirmation($id)
    {
        // $location = Location::where('id', $id)->first();
        $this->location_delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-form');
    }

    public function deleteLocationData()
    {
        $location = Location::where('id', $this->location_delete_id)->first();
        $location->delete();
        return redirect()->route('admin.locations')->with('success', 'Location has been deleted successfully');
    }

    public function cancel()
    {
        $this->location_delete_id = '';
    }

    // VIEW LOCATION
    public function viewLocationData($id)
    {
        $location = Location::where('id', $id)->first();

        $this->view_location_name = $location->name;
        $this->view_location_slug = $location->slug;

        $this->dispatchBrowserEvent('show-view-form');
    }

    public function closeViewLocationData()
    {
        $this->view_location_name = '';
        $this->view_location_slug = '';
    }

    public function render()
    {
        $locations = Location::all();

        return view('livewire.admin.location-component',
        [
            'locations' => $locations

        ])->layout('layouts.livewire-admin');
    }
}
