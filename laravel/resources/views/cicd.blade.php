<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CI/CD Laravel 8</title>
</head>
<body>

    <h1>Berhasilllllll gagag</h1>

    <h2>Database Test</h2>

    @if ($tests->count())
        <ul>
            @foreach ($tests as $test)
                <li>
                    {{ $test->message }}
                    — {{ $test->created_at }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data.</p>
    @endif

</body>
</html>
