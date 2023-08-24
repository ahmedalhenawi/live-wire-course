<?php

namespace App\Http\Livewire;
use App\Traits\ToastAlert;
use Livewire\Component;

class AppAddTask extends Component
{

    public $title;
    protected $rules = ['title' => 'required|min:10'];

    public function render()
    {
        return view('livewire.app-add-task');
    }

    public function updated($title)
    {

        $this->validateOnly($title);
    }

    public function addTask()
    {
        $this->validate();
        auth()->user()->tasks()->create([
            'title' => $this->title,
            'status' => false,
        ]);

        $this->dispatchBrowserEvent('success', ['message' => 'new task added successfully']);

        $this->title = "";

        $this->emit('taskAdded');
        session()->flash('message', 'task was added successfully');
    }

    public function addToast(){
        $this->toast('my message');
    }
}
