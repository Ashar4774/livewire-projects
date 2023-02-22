<?php

namespace App\Http\Livewire;

use App\Models\TodoList as TodoListItem;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText = ''; //it works same as name attribute in form element in html, we have define as name attribute in input field

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo(){
        $todo = new TodoListItem();
        $todo->todo = $this->todoText;
        $todo->completed = false;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();

    }

    public function toggleTodo($id)
    {
        $todo = TodoListItem::where('id', $id)->first();
        if(!$todo){
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->save();

        $this->selectTodos();
    }

    public function deleteTodo($id){
        $todo = TodoListItem::where('id', $id)->first();
        if(!$todo){
            return;
        }
        $todo->delete();
        $this->selectTodos();
    }

    public function selectTodos()
    {
        $this->todos = TodoListItem::orderBy('created_at', 'desc')->get();
    }
}
