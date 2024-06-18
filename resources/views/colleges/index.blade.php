<!DOCTYPE html>
<html>
<head>
    <title>Colleges</title>
</head>
<body>
    <h1>All Colleges</h1>
    <ul>
        @foreach($colleges as $college)
            <li>{{ $college->name }}
                <ul>
                    <li>Departments:
                        <ul>
                            @foreach($college->departments as $department)
                                <li>{{ $department->name }}</li>
                            @endforeach
                        </ul>
                    </li>
                    <li>Programs:
                        <ul>
                            @foreach($college->programs as $program)
                                <li>{{ $program->name }}</li>
                            @endforeach
                        </ul>
                    </li>
                    <a href="{{ url('/show/college', $college->id) }}">Show</a>
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
