<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Tour;
use Livewire\Component;
use App\Models\Location;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class TourComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image, $newimage;
    public $charges;
    public $description;
    public $location_id;

    public $tour_id;
    public $tour_edit_id;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required | unique:tours',
            'image' => 'required |mimes:jpg,png,jpeg',
            'location_id' => 'required',
            'description' => 'required',
            'charges' => 'required | numeric'
        ]);
    }

    public function addTour()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required | unique:tours',
            'image' => 'required |mimes:jpg,png,jpeg',
            'location_id' => 'required',
            'description' => 'required',
            'charges' => 'required | numeric'
        ]);

        $tour = new Tour();
        $tour->name = $this->name;
        $tour->slug = $this->slug;
        $tour->charges = $this->charges;
        $tour->location_id = $this->location_id;
        $tour->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('tour', $imageName);
        $tour->image = $imageName;
        $tour->save();

        return redirect()->route('admin.tours')->with('success', 'Tour successfully saved');
    }

    //UPDATE TOUR
    public function resetInputs()
    {
        $this->tour_id = '';
        $this->name = '';
        $this->slug = '';
        $this->charges = '';
        $this->description = '';
        $this->image = '';
        $this->location_id = '';
        $this->tour_edit_id = '';
    }

    public function editTour($id)
    {
        $tour = Tour::where('id', $id)->first();

        $this->name = $tour->name;
        $this->slug = $tour->slug;
        $this->charges = $tour->charges;
        $this->description = $tour->description;
        $this->location_id = $tour->location_id;
        $this->image = $tour->image;

        $this->dispatchBrowserEvent('show-edit-form');
    }

    public function editTourData()
    {
        $this->validate([
            'name' => 'required',
            // 'slug' => 'required | unique:tours,tour_id'.$this->tour_edit_id,
            // 'image' => 'required |mimes:jpg,png,jpeg',
            'location_id' => 'required',
            'description' => 'required',
            'charges' => 'required | numeric'
        ]);

        $tour = Tour::where('id', $this->tour_edit_id)->first();
        $tour->name = $this->name;
        $tour->slug = $this->slug;
        $tour->charges = $this->charges;
        $tour->location_id = $this->location_id;
        $tour->description = $this->description;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('tour', $imageName);
            $tour->image = $imageName;
        }

        $tour->save();
        return redirect()->route('admin.tours')->with('success', 'Tour has been updated successfully');
    }

    public function render()
    {
        $tours = Tour::all();
        $locations = Location::all();

        return view('livewire.admin.tour-component',
        [
            'tours' => $tours,
            'locations' => $locations
        ])->layout('layouts.livewire-admin');
    }
}
