<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText = '';
    
    // this is the default livewire function executed only once when component 
    // is mounted to blade file
    public function mount()
    {
        $this->selectTodos();
    }
    
    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todo = new TodoItem();
        $todo->todo = $this->todoText;
        $todo->completed = false;
        $todo->save();
        // new TodoItem created and added to database
        // set clean
        $this->todoText = '';
        $this->selectTodos();
    }

    // mark the todo item as completed or not
    public function toggleTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if(!$todo){
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->save();
        // update the array of todo items
        $this->selectTodos();
    }

    // delete the todo item from the list
    public function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if(!$todo){
            return;
        }
        $todo->delete();
        $this->selectTodos();
    }

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at','DESC')->get();
    }
}
