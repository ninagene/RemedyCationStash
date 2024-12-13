<?php

namespace App\Livewire\Medications;

use App\Livewire\Forms\MedicationForm;
use App\Models\Category;
use App\Models\Medication;
use App\Models\Segment;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public MedicationForm $form;
    public $segments = [];

    #[Layout('layouts.app')]

    public function render()
    {
        return view('livewire.medications.create', [
            'categories' => Category::all()
        ]);
    }
    public function updated($property)
    {
        if ($property === 'form.category_id') {
            $this->segments = Segment::where('category_id', $this->form->category_id)->get();
        }

    }
    public function addMedication()
    {
        $this->validate();

        Medication::create(
            $this->form->all()
        );

        flash()->success('Success is my drug, and Remedycation’s the dealer!');

        return $this->redirect(Index::class, navigate: true);
    }
}
