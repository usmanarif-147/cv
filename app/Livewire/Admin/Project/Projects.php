<?php

namespace App\Livewire\Admin\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{

    use WithPagination;

    public $expandedRows = [];

    public function toggleRow($rowId)
    {
        if (in_array($rowId, $this->expandedRows)) {
            $this->expandedRows = array_diff($this->expandedRows, [$rowId]);
        } else {
            $this->expandedRows[] = $rowId;
        }
    }

    public function render()
    {
        $projects = Project::paginate(5);
        return view('livewire.admin.project.projects', [
            'projects' => $projects,
        ]);
    }
}
