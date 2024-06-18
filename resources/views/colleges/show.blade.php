<!DOCTYPE html>
<html>
<head>
    <title>College</title>
</head>
<body>
    <h1>College: {{ $college->name }}</h1>
    <h2>Departments</h2>
    <ul>
        @foreach($college->departments as $department)
            <li>{{ $department->name }}</li>
        @endforeach
    </ul>
    <h2>Programs</h2>
    <ul>
        @foreach($college->programs as $program)
            <li>{{ $program->name }}</li>
        @endforeach
    </ul>
</body>
</html>
