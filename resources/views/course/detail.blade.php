
<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>ID: {{ $course->id }}</p>
    <p>Name: {{ $course->name }}</p>
    <p>Description: {{ $course->description }}</p>
    <p>Duration: {{ $course->duration }} weeks</p>
    <p>Fee: {{ $course->fee }}</p>
    <p>Difficulty: {{ $course->difficulty }}</p>
    <p>Active: {{ $course->is_active ? 'Yes' : 'No' }}</p>

    <a href="/courses/{{ $course->id }}/edit">Edit Course</a>
    <br>
    <a href="/courses">Back to Courses</a>
</body>
</html>
