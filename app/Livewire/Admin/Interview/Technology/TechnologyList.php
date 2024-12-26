<?php

namespace App\Livewire\Admin\Interview\Technology;

use App\Models\Technology;
use Livewire\Component;
use Livewire\WithPagination;

class TechnologyList extends Component
{

    use WithPagination;

    public $search = '';

    public $technologyId = null, $name = '';

    public $form_title = '', $btn_text = '';

    protected function rules()
    {
        return [
            'name' => ['required'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function add()
    {
        $this->name = '';
        $this->form_title = 'Add Technology';
        $this->btn_text = 'Add';
        $this->dispatch('show-action-modal');
    }

    public function edit($id)
    {
        $this->technologyId = $id;
        $technology = Technology::where('id', $id)->first();
        $this->name = $technology->name;
        $this->form_title = 'Update Technology';
        $this->btn_text = 'Update';
        $this->dispatch('show-action-modal');
    }

    public function storeOrUpdate()
    {
        $this->validate();
        Technology::updateOrCreate(
            ['id' => $this->technologyId],
            [
                'name' => $this->name
            ]
        );

        $this->closeModal();
        $this->dispatch('swal:modal', [
            'title' => 'Success',
            'text' => $this->technologyId ? 'Technology Updated Successfully' : 'Technology Added Successfully',
            'icon' => 'success'
        ]);
    }

    public function confirmDelete($id)
    {
        $this->technologyId = $id;
        $this->dispatch('show-confirm-delete-modal');
    }

    public function delete()
    {
        dd($this->technologyId);
    }

    public function closeModal()
    {
        $this->name = '';
        $this->technologyId = null;
        $this->dispatch('close-modal');
    }

    public function getData()
    {
        $technologies = Technology::withCount('quizes')
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);

        return $technologies;
    }

    public function render()
    {
        $data = $this->getData();
        return view('livewire.admin.interview.technology.technology-list', [
            'technologies' => $data
        ]);
    }
}
