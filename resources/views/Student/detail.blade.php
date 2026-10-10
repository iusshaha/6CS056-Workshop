
<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>ID: {{ $student->id }}</p>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Phone: {{ $student->phone }}</p>
    <p>Address: {{ $student->address }}</p>
    <p>Date of Birth: {{ $student->date_of_birth }}</p>

    <a href="/students/{{ $student->id }}/edit">Edit Student</a>
    <br>
    <a href="/students">Back to Students</a>
</body>
</html>
