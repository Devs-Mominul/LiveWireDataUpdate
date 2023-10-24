
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Hello First time i am uses live wire in this page </h1>
        <form action="">
            <input type="text" wire:model='todo_list'>
            <button wire:click='createNewTodo'>click me to add todo</button>
        </form>

        <h3>All Todo List</h3>
        <ul>
            @foreach ($alltodo as $todo)
            <li>{{ $todo->todo_list }}</li>

            @endforeach
        </ul>


    </div>

</body>
</html>
