<?php

namespace App\Livewire\Medications;

use App\Models\Medication;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $search = '';
    public string $sortColumn = 'created_at', $sortDirection = 'desc';

    // #[Layout('layouts.app')]
    public function render()
    {
        $query = Medication::query();
        $query = $this->applySearch($query);

        return view('livewire.medications.index',[
            'medications' => $query->paginate(5)
            // 'medications' => Medication::paginate(5)
        ]);
    }
    public function delete(Medication $medication)
    {
        $medication->delete();
        flash()->info("Medication gone – just like my attention span!");
    }

    public function applySearch(Builder $query)
    {
        return $query->where('name', 'like', '%' . $this->search . '%')
                     ->OrWhere('description', 'like', '%' . $this->search . '%');
                    //  ->OrWhere('category_id', 'like', '%' . $this->search . '%')
                    //  ->OrWhere('segment_id', 'like', '%' . $this->search . '%');
    }

    protected function applySort(Builder $query)
    {
        return $query->orderBy($this->sortColumn, $this->sortDirection);
    }

    public function sortBy(string $column)
    {
        if($this->sortColumn == $column){
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortColumn = $column;
    }
}
