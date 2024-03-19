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
    <h1 class="text-3xl font-bold mb-4">ToDo List</h1>
    <div class="mb-4">
      <h2 class="text-xl font-semibold mb-2">タスクの一覧</h2>
      <a href="/create-page" class="text-blue-500 hover:underline">タスクを追加</a>
    </div>
    <div class="overflow-x-auto">
      <table class="w-full border-collapse border">
        <thead>
          <tr>
            <th class="py-2 px-4 bg-gray-200 border">タスクの名前</th>
            <th class="py-2 px-4 bg-gray-200 border">タスクの説明</th>
            <th class="py-2 px-4 bg-gray-200 border" colspan="2">操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($todos as $todo)
            <tr>
              <td class="py-2 px-4 border">{{ $todo->task_name }}</td>
              <td class="py-2 px-4 border">{{ $todo->task_description }}</td>
              <td class="py-2 px-4 border"><a href="/edit-page/{{ $todo->id }}"
                  class="text-blue-500 hover:underline">編集</a></td>
              <td class="py-2 px-4 border"><a href="/delete-page/{{ $todo->id }}"
                  class="text-red-500 hover:underline">削除</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>
