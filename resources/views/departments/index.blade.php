<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
</head>
<body>
    <h1>All Departments</h1>
    <ul>
        @foreach($departments as $department)
            <li>{{ $department->name }} - College: {{ $department->college->name }}</li>
        @endforeach
    </ul>
</body>
</html>
