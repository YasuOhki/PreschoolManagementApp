<h1>ユーザ一覧</h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>create_at</th>
        <th>update_at</th>
    </tr>

@foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->create_at}}</td>
        <td>{{$user->update_at}}</td>
    </tr>
@endforeach