<?php

namespace App\Livewire;

use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImportData extends Component
{
    use WithFileUploads;

    // Models
    public $file;

    public function render()
    {
        return view('livewire.import-data');
    }

    public function updatedFile(){
        Excel::import(new DataImport, $this->file);

        return redirect()->route('dashboard')->with('success', 'Información importada correctamente');
    }
}
