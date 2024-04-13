<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Todo Delete</title>
</head>

<body>
  <div class="p-6">
    <h1 class="text-3xl font-bold mb-4">Todo Delete</h1>
    <div>
      <h2 class="text-xl font-semibold mb-2">タスクの削除</h2>
      <form method="POST" action="/delete/{{ $todo->id }}" class="mb-4">
        @csrf
        <div class="mb-4">
          <label for="task_name" class="block text-sm font-medium text-gray-700">タスクの名前：</label>
          <p class="mt-1 p-2 w-full border border-gray-300 rounded-md">
            {{ $todo->task_name }}</p>
        </div>
        <div class="mb-4">
          <label for="task_description" class="block text-sm font-medium text-gray-700">タスクの説明：</label>
          <p class="mt-1 p-2 w-full border border-gray-300 rounded-md">{{ $todo->task_description }}</p>
        </div>
        <button type="submit" name="delete"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">削除</button>
      </form>
      <a href="/" class="text-blue-500 hover:underline">戻る</a>
    </div>
  </div>


</body>

</html>
