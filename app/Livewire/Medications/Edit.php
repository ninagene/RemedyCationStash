<?php

namespace App\Livewire\Medications;

use App\Livewire\Forms\MedicationForm;
use App\Models\Category;
use App\Models\Medication;
use App\Models\Segment;
use Livewire\Component;

class Edit extends Component
{
    public Medication $medication;
    public MedicationForm $form;
    public $segments = [];


    public function mount()
    {
        $this->form->setMedication($this->medication);
        $this->sections = Segment::where('category_id', $this->medication->category_id)->get();
    }

    public function render()
    {
        return view('livewire.medications.edit', [
            'categories' => Category::all()
        ]);
    }

    public function updated($property)
    {
        if ($property === 'form.category_id') {
            $this->segments = Segment::where('category_id', $this->form->category_id)->get();
        }

    }
     public function update()
    {
        $this->validate();
        $this->medication->update(
            $this->form->all()
        );
        flash()->success('Med updated— Rx:Success!');
        return $this->redirect(Index::class, navigate: true);
    }
}
