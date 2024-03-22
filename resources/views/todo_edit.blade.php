<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>

<body>
  <div class="p-6">
    <h1 class="text-3xl font-bold mb-4">Todo Edit</h1>
    <div>
      <h2 class="text-xl font-semibold mb-2">タスクの修正</h2>
      <form method="POST" action="/edit" class="mb-4">
        @csrf
        <input type="hidden" name="id" value="{{ $todo->id }}">
        <div class="mb-4">
          <label for="task_name" class="block text-sm font-medium text-gray-700">タスクの名前：</label>
          <input type="text" name="task_name" value="{{ $todo->task_name }}" id="task_name"
            class="mt-1 p-2 w-full border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
          <label for="task_description" class="block text-sm font-medium text-gray-700">タスクの説明：</label>
          <input type="text" name="task_description" value="{{ $todo->task_description }}" id="task_description"
            class="mt-1 p-2 w-full border border-gray-300 rounded-md">
        </div>
        <button type="submit" name="edit"
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">修正</button>
      </form>
      <a href="/" class="text-blue-500 hover:underline">戻る</a>
    </div>
  </div>


</body>

</html>
