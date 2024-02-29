<h1>児童一覧</h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>brother</th>
    </tr>

@foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->brother}}</td>
    </tr>
@endforeach