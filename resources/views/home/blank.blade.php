<!-- home.blank.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Recognized Names</title>
</head>
<body>
    <h1>Recognized Names:</h1>
    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
</body>
</html>
