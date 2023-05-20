<div class="d-flex flex-column w-300 mx-auto py-5">
    <div class="d-flex gap-3 justify-content-between">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" 
        placeholder="Wpisz i naciśnij Enter" class="flex-1 form-control rounded-0">
        <button class="py-2 px-3 btn btn-primary rounded-1 text-white" 
        wire:click="addTodo">Dodaj</button>
    </div>

    <div class="py-4">
        @if (count($todos) == 0)
            <p class="text-danger text-center">Nie ma rzeczy do zrobienia :)</p>
        @endif
        @foreach($todos as $index => $todo)
        <div class="d-flex gap-3 justify-content-between align-items-center py-1">
            <input type="checkbox" class="form-check" {{$todo->completed ? ' checked' : ''}} 
                wire:change="toggleTodo({{$todo->id}})">
            <label class="flex-1 {{$todo->completed ? 'text-decoration-line-through' : ''}}">
                {{$todo->todo}}</label>
            <button wire:click="deleteTodo({{$todo->id}})" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                  </svg>
            </button>
        </div>
        @endforeach
    </div>
</div>