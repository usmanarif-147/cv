<?php

namespace App\Livewire\Admin\Project;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddOrUpdate extends Component
{
    use WithFileUploads;

    public $title, $about, $description, $technologies, $github_link, $images = [];

    protected function rules()
    {
        return [
            'title' => ['required'],
            'about' => ['sometimes'],
            'description' => ['sometimes'],
            'technologies' => ['sometimes'],
            'github_link' => ['sometimes'],
            'images.*' => 'image|max:1024'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function removeImage($index)
    {
        array_splice($this->images, $index, 1);
    }

    public function saveOrUpdateProject()
    {
        dd($this->validate());
    }

    public function render()
    {
        return view('livewire.admin.project.add-or-update');
    }
}
