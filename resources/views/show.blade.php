<h1>{{ $student->name }}</h1>

    <p><strong>Coach:</strong> {{ $student->coach->name }}</p>

    <a href="{{ route('students.index') }}">Back to Students</a>
    <a href="{{ route('students.edit', $student->id) }}">Edit Student</a>

    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Student</button>
    </form>
