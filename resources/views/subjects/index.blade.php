<!-- resources/views/subjects/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="{{ route('subjects.create') }}">Add Subject</a>
    <ul>
        @foreach ($subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>
</body>
</html>
