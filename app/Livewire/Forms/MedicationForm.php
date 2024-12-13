<?php

namespace App\Livewire\Forms;

use App\Models\Medication;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MedicationForm extends Form
{
    public ?Medication $medication;

    #[Validate]
    public $name;
    #[Validate]
    public $description;
    #[Validate]
    public $category_id;
    #[Validate]
    public $segment_id;
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'segment_id' => 'required'
        ];
        // if (isset($this->medication)) {
        //     $rules['description'] = 'required|unique:medications,description,' . $this->medication->id;
        // }
        // return $rules;

        // if (isset($this->medication)) {
        //     $rules['description'] = 'required|' . $this->medication->id; // If you're appending id to the rule
        // }
        // return $rules;


    }
    public function messages()
    {
        return [
            'category_id.required' => 'The category field is required',
            'segment_id.required' => 'A segment field is required',
        ];
    }
    public function setMedication( Medication $medication)

    {
        $this->medication = $medication;
        $this->name = $medication->name;
        $this->description = $medication->description;
        $this->category_id = $medication->category_id;
        $this->segement_id = $medication->segment_id;
    }
}
