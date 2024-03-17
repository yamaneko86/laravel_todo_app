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
  <h1>ToDo List</h1>
<div>
    <h2>タスクの一覧</h2>
    <a href="/create-page">タスクを追加</a>
    <table class="border">
        <tr>
            <th>タスクの名前</th>
            <th>タスクの説明</th>
            <th colspan="2">操作</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->task_name}}</td>
            <td>{{$todo->task_description}}</td>
            <td><a href="/edit-page/{{$todo->id}}">編集</a></td>
            <td><a href="/delete-page/{{$todo->id}}">削除</a></td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>