<?php

namespace App\Livewire;

use App\Models\TodoList;
use Livewire\Component;

class FirstComponent extends Component
{
    public $todo_list;
    public function createNewTodo(){
      TodoList::create([
        'todo_list'=>$this->todo_list

      ]);

    }
    public function render()
    {
        $alltodo=TodoList::get();
        return view('livewire.first-component',compact('alltodo'));
    }
}
