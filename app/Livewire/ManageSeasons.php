<?php

namespace App\Livewire;

use App\Models\Season;
use Livewire\Component;

class ManageSeasons extends Component
{
    public $name;
    public $description;
    public $seasonId;
    public $isEditing = false;
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:500',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $this->edit($id);
        }
    }


    public function edit($id)
    {
        $season = Season::findOrFail($id);
        $this->seasonId = $id;
        $this->name = $season->name;
        $this->description = $season->description;
        $this->isEditing = true;
    }

    public function resetForm()
    {
        $this->reset(['name', 'description', 'seasonId', 'isEditing']);
        $this->resetErrorBag();
    }

    public function save()
    {
        $this->validate();

        Season::updateOrCreate(['id' => $this->seasonId], [
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->successMessage = $this->isEditing
            ? 'Season updated successfully!'
            : 'Season created successfully!';

        $this->resetForm();

        // Clear success message after 3 seconds
        $this->dispatchBrowserEvent('clear-message');
    }
    public function render()
    {
        return view('livewire.manage-seasons');
    }
}
