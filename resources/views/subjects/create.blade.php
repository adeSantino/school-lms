<!-- resources/views/subjects/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subject</title>
</head>
<body>
    <h1>Add Subject</h1>
    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Subject Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Add Subject</button>
    </form>
</body>
</html>
