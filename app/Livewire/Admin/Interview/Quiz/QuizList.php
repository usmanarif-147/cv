<?php

namespace App\Livewire\Admin\Interview\Quiz;

use App\Models\Quiz;
use App\Models\Technology;
use Livewire\Component;
use Livewire\WithPagination;

class QuizList extends Component
{

    use WithPagination;

    public $search = '';

    public $technologies = null;

    public $newTag = '';

    public
        $quizId = null,
        $technology_id = null,
        $question = '',
        $answer = '',
        $example = '',
        $level = 0,
        $type = 0,
        $tags = [];

    public $form_title = '', $btn_text = '';

    public function mount()
    {
        $this->technologies = Technology::select('id', 'name')->get();
    }

    public function addTag()
    {
        if ($this->newTag && !in_array($this->newTag, $this->tags)) {
            $this->tags[] = $this->newTag;
            $this->newTag = '';
        }
    }

    public function removeTag($index)
    {
        unset($this->tags[$index]);
        $this->tags = array_values($this->tags);
    }

    protected function rules()
    {
        return [
            'technology_id' => ['required', 'not_in:0'],
            'question' => ['required'],
            'answer'  => ['required'],
            'example' => ['sometimes'],
            'level' => ['required', 'not_in:0'],
            'type' => ['required', 'not_in:0'],
            'tags' => ['required']
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
        $this->question = '';
        $this->answer = '';
        $this->example = '';
        $this->form_title = 'Add Quiz';
        $this->btn_text = 'Add';
        $this->dispatch('show-action-modal');
    }

    public function edit($id)
    {
        $this->quizId = $id;
        $quiz = Quiz::where('id', $id)->first();

        $this->technology_id = $quiz->technology_id;
        $this->question = $quiz->question;
        $this->answer  = $quiz->answer;
        $this->example = $quiz->example;
        $this->level = $quiz->level;
        $this->type = $quiz->type;
        $this->tags = $quiz->tags;

        $this->form_title = 'Update Quiz';
        $this->btn_text = 'Update';
        $this->dispatch('show-action-modal');
    }

    public function storeOrUpdate()
    {
        $this->validate();

        Quiz::updateOrCreate(
            ['id' => $this->quizId],
            [
                'technology_id' => $this->technology_id,
                'question' => $this->question,
                'answer'  => $this->answer,
                'example' => $this->example,
                'level' => $this->level,
                'type' => $this->type,
                'tags' => $this->tags
            ]
        );

        $this->closeModal();
        $this->dispatch('swal:modal', [
            'title' => 'Success',
            'text' => $this->quizId ? 'Question Updated Successfully' : 'Question Added Successfully',
            'icon' => 'success'
        ]);
    }

    public function confirmDelete($id)
    {
        $this->quizId = $id;
        $this->dispatch('show-confirm-delete-modal');
    }

    public function delete()
    {
        dd($this->quizId);
    }

    public function closeModal()
    {

        $this->technology_id = null;
        $this->question = '';
        $this->answer = '';
        $this->example = '';
        $this->level = 0;
        $this->type = 0;
        $this->tags = [];

        $this->dispatch('close-modal');
    }

    public function getData()
    {
        $quizes = Quiz::with('technology')
            ->when($this->search, function ($query) {
                $query->where('question', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);

        return $quizes;
    }

    public function render()
    {
        $data = $this->getData();

        return view('livewire.admin.interview.quiz.quiz-list', [
            'quizes' => $data
        ]);
    }
}
