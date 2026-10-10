
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <p>Name:
            <input type="text" name="name"
                   value="{{ old('name', $course->name) }}">
        </p>

        <p>Description:
            <textarea name="description">{{ old('description', $course->description) }}</textarea>
        </p>

        <p>Duration in weeks:
            <input type="number" name="duration"
                   value="{{ old('duration', $course->duration) }}">
        </p>

        <p>Fee:
            <input type="number" step="0.01" name="fee"
                   value="{{ old('fee', $course->fee) }}">
        </p>

        <p>Difficulty:
            <select name="difficulty">
                <option value="Easy" @selected(old('difficulty', $course->difficulty) == 'Easy')>Easy</option>
                <option value="Medium" @selected(old('difficulty', $course->difficulty) == 'Medium')>Medium</option>
                <option value="Hard" @selected(old('difficulty', $course->difficulty) == 'Hard')>Hard</option>
            </select>
        </p>

        <p>
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1"
                   @checked(old('is_active', $course->is_active))>
            Active
        </p>

        <button type="submit">Update Course</button>
    </form>

    <a href="/courses">Back to Courses</a>
</body>
</html>
